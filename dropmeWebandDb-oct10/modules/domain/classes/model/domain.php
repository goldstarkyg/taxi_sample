<?php

/*
 * ----------------------------------------------------------------------------
 * Payfort Gateway Module
 * 
 * ----------------------------------------------------------------------------
 */

class Model_Domain extends Model {

    public static $default = 'default';
    public static $instances = array();
    protected $_config;
    /**
     * 
     * @param type $name
     * @param type $config
     */
    public function __construct($name = Null, $config = Null) {

        $config = Kohana::$config->load('domain');
        $this->_config = $config;

        //$this->mongo_db = MangoDB::instance('additional_db');
    }

    /**
     * Domain validate
     * 
     * @param type $arr
     * @return type
     */
    public function add_domain_validate($arr) {
        return Validation::factory($arr)->rule('domain_name', 'not_empty')
                        ->rule('replace_domain_name', 'Model_Domain::check_is_domain_name', array(':value'))
                        ->rule('replace_domain_name', 'Model_Domain::check_taxi_domain', array(':value'));
    }
    
    public static function check_taxi_domain($domain){
        $live_parsedUrl= parse_url($domain);
        $domain=isset($live_parsedUrl['path'])?explode('.', $live_parsedUrl['path']):explode('.', $live_parsedUrl['host']);            
        $live_subdomains = array_slice($domain, 1, count($domain) - 1 );            
        $taxi_domain= isset($live_subdomains[0])?$live_subdomains[0]:'';
        $taxi_com_ext=isset($live_subdomains[1])?$live_subdomains[1]:'';
        $taxi_final_domain=$taxi_domain.".".$taxi_com_ext;
        
        if($taxi_final_domain=="taximobility.com"){
            return false;
        }
        return true;
    }

    public function add_domain($access_key = '', $live_host_domain = '',$edit_domain='',$live_domain='') {

        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $dbname = $this->_config['default']['options']['ALTER_DB_NAME']; //Update DB Host Here
        $AUTH_SOURCE = $this->_config['default']['options']['AUTH_SOURCE'];
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=' . $AUTH_SOURCE);
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
        $domainupdate = new MongoDB\Driver\BulkWrite();
        if($edit_domain==''){
            $domain_info = [
            'live_domain' => $live_domain,
            'live_host_domain'=>$live_host_domain   
        ];
        }else{
        $domain_info = [
            'live_host_domain' => $live_host_domain
        ];
        }
        $domainupdate->update(['company_domain' => $access_key], ['$set' => $domain_info]);
        $domain_update_result = $manager->executeBulkWrite($dbname . "." . MDB_COMPANY_DOMAIN, $domainupdate, $writeConcern);
        return empty($domain_update_result->getwriteErrors()) ? $domain_update_result->getModifiedCount() : 0;
    }

    public function get_live_domain_info($access_key = '') {

        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $dbname = $this->_config['default']['options']['ALTER_DB_NAME']; //Update DB Host Here
        $AUTH_SOURCE = $this->_config['default']['options']['AUTH_SOURCE'];
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=' . $AUTH_SOURCE);
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);


        $option = ['projection' => [
                'live_host_domain' => 1,
                'live_domain'=>1            
            ]
        ];
        $filter = ['company_domain' => $access_key];
        $query = new MongoDB\Driver\Query($filter, $option);
        $rows = $manager->executeQuery($dbname . '.' . MDB_COMPANY_DOMAIN, $query);

        return (!empty($rows)) ? $rows : '';
    }

    /* public function update_redirectdomain($access_key = '', $redirect_status = 0, $live_domain = '') {

      $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
      $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here
      $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
      $dbname = $this->_config['default']['options']['ALTER_DB_NAME']; //Update DB Host Here
      $AUTH_SOURCE=$this->_config['default']['options']['AUTH_SOURCE'];
      $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource='.$AUTH_SOURCE);
      $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
      $domainupdate = new MongoDB\Driver\BulkWrite();
      $domain_info = [
      'redirect_enable' => $redirect_status,
      'live_host_domain' => $live_domain
      ];
      $domainupdate->update(['company_domain' => $access_key], ['$set' => $domain_info]);
      $domain_update_result = $manager->executeBulkWrite($dbname . "." . MDB_COMPANY_DOMAIN, $domainupdate, $writeConcern);
      return empty($domain_update_result->getwriteErrors()) ? $domain_update_result->getModifiedCount() : 0;
      } */

    public function delete_domain($access_key = '') {
        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $dbname = $this->_config['default']['options']['ALTER_DB_NAME']; //Update DB Host Here
        $AUTH_SOURCE = $this->_config['default']['options']['AUTH_SOURCE'];
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=' . $AUTH_SOURCE);
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
        $domainupdate = new MongoDB\Driver\BulkWrite();
        $domain_info = [
            'live_host_domain' => ''
        ];

        $domainupdate->update(['company_domain' => $access_key], ['$set' => $domain_info]);
        $domain_update_result = $manager->executeBulkWrite($dbname . "." . MDB_COMPANY_DOMAIN, $domainupdate, $writeConcern);
        return empty($domain_update_result->getwriteErrors()) ? $domain_update_result->getModifiedCount() : 0;
    }

    public static function check_is_domain_name($domain_name) {
        if (preg_match('/^[a-z\d][a-z\d-]{0,62}$/i', $domain_name) &&
                !preg_match('/-$/', $domain_name)) {
            return false;
        }
        return true;
    }

    public function get_all_domain_info($access_key='') {

        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $dbname = $this->_config['default']['options']['ALTER_DB_NAME']; //Update DB Host Here
        $AUTH_SOURCE = $this->_config['default']['options']['AUTH_SOURCE'];

        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=' . $AUTH_SOURCE);
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);

        $option = ['projection' => [
                '_id' => 0,
                'live_domain' => 1,
                'live_host_domain' => 1,
            ]
        ];
      
        $filter=[];
        
        $query = new MongoDB\Driver\Query($filter, $option);
        $rows = $manager->executeQuery($dbname . '.' . MDB_COMPANY_DOMAIN, $query);
        return (!empty($rows)) ? $rows : '';
    }
    
    public function update_domain($access_key='',$live_domain='', $live_host_domain = '') {

        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $dbname = $this->_config['default']['options']['ALTER_DB_NAME']; //Update DB Host Here
        $AUTH_SOURCE = $this->_config['default']['options']['AUTH_SOURCE'];
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=' . $AUTH_SOURCE);
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
        $domainupdate = new MongoDB\Driver\BulkWrite();
        $domain_info = [
            'live_host_domain' => $live_host_domain,
            'live_domain'=>$live_domain
        ];
        $domainupdate->update(['company_domain' => $access_key], ['$set' => $domain_info]);
        $domain_update_result = $manager->executeBulkWrite($dbname . "." . MDB_COMPANY_DOMAIN, $domainupdate, $writeConcern);
        return empty($domain_update_result->getwriteErrors()) ? $domain_update_result->getModifiedCount() : 0;
    }

}
