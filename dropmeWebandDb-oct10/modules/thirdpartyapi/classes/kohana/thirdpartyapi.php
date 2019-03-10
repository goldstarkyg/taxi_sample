<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana third party api connection
 *
 * @uses       Third Party Api connection (v1.0)
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Thirdpartyapi {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_thirdparty_url;
    public static $default = 'default';
    public static $instances = array();

    /**
     * 
     * @param type $name
     * @param array $config
     * @return type
     */
    public static function instance($name = NULL, array $config = NULL) {
        if ($name === NULL) {
            // Use the default instance name
            $name = Thirdpartyapi::$default;
        }
        if (!isset(Thirdpartyapi::$instances[$name])) {
            if ($config === NULL) {
                // Load the configuration for this curl configuration
                $config = Kohana::$config->load('thirdpartyAPI.' . $name);
            }
            // Store the curl config instance
            Thirdpartyapi::$instances[$name] = new Kohana_Thirdpartyapi($name, $config);
        }
        return self::$instances[$name];
    }

    // Instance name
    protected $_name;
    // domain object
    protected $_domain;
    // total_taxi object
    protected $_totaltaxi;
    // total company  object
    protected $_totalcompany;
    // total complete trip object
    protected $_totalcompletetrip;
    // Configuration
    protected $_config;

    /**
     * 
     * @param type $name
     * @param array $config
     */
    public function __construct($name = Null, array $config = Null) {
        $this->_name = $name;
        $this->_config = $config;
    }

    /**
     * Curl update with taxi count
     * 
     * @param type $post_array
     * @return boolean
     */
    public function crm_add_taxi_count($post_array = []) {

        $post_array['authentication_accesskey'] = $this->_config['options']['authentication_accesskey'];
        $_totaltaxi = self::get_taxi_total_count();
        $_domain = self::get_domain_name();
        $post_array['domain'] = $_domain[0]['domain_name'];
        $post_array['count_update'] = $_totaltaxi;
        $post_array['product'] = 1;
        $post_array['update_status'] = 2;
        $curl_call = self::curl_call($post_array);
    }

    /**
     * Curl Update with Profile
     * 
     * @param type $post
     * @return boolean
     */
    public function crm_update_profile($post = []) {

        $post_array['authentication_accesskey'] = $this->_config['options']['authentication_accesskey'];
        $post_array['firstname'] = $post['firstname'];
        $post_array['address'] = $post['address'];
        $post_array['lastname'] = $post['lastname'];
        $post_array['email'] = $post['email'];
        $post_array['phone'] = $post['phone'];
        $post_array['time_zone'] = $post['user_time_zone'];
        $post_array['trail_country'] = $post['country'];
        $post_array['trail_state'] = $post['state'];
        $post_array['trail_city'] = $post['city'];
        $post_array['telephone_code'] = '+' . $post['telephone_code'];

        $_domain = self::get_domain_name();
        $post_array['domain'] = $_domain[0]['domain_name'];
        $post_array['product'] = 1;
        $post_array['update_status'] = 3;
        $curl_call = self::curl_call($post_array);
    }

    /**
     * Curl Update for add company count
     * 
     * @param type $post_array
     * @return boolean
     */
    public function crm_add_company_count($post_array = []) {
        $post_array['authentication_accesskey'] = $this->_config['options']['authentication_accesskey'];
        $_totalcompany = self::get_company_total_count();
        $_domain = self::get_domain_name();
        $post_array['domain'] = $_domain[0]['domain_name'];
        $post_array['company_count_update'] = $_totalcompany;
        $post_array['product'] = 1;
        $post_array['update_status'] = 4;
        $curl_call = self::curl_call($post_array);
    }

    /**
     * Curl Update for complete_trip  count
     * 
     * @param type $post_array
     * @return boolean
     */
    public function crm_complete_trip_count($post_array = []) {
        $post_array['authentication_accesskey'] = $this->_config['options']['authentication_accesskey'];
        $_totalcompletetrip = self::get_complete_trip_count();
        $_domain = self::get_domain_name();
        $post_array['domain'] = $_domain[0]['domain_name'];
        $post_array['trip_count_update'] = $_totalcompletetrip;
        $post_array['product'] = 1;
        $post_array['update_status'] = 5;
        $curl_call = self::curl_call($post_array);
    }

    /**
     * Curl Update with last login
     * 
     * @param type $post
     * @return boolean
     */
    public function crm_last_login_update($post = []) {
        $this->_config['options']['authentication_accesskey'];
        $post_array['authentication_accesskey'] = $this->_config['options']['authentication_accesskey'];
        $_domain = self::get_domain_name();
        $post_array['domain'] = $_domain[0]['domain_name'];
        $post_array['product'] = 1;
        $post_array['update_status'] = 1;
        $curl_call = self::curl_call($post_array);
    }

    /**
     * 
     * @param type $post
     * @return boolean
     */
    public function crm_email_verification($post = []) {
        self::update_email_verified();
        $post_array['authentication_accesskey'] = $this->_config['options']['authentication_accesskey'];
        $_domain = self::get_domain_name();
        $d = new DateTime('NOW');
        $curr = $d->format(DateTime::ISO8601);
        $post_array['loginisotime'] = $curr;
        $post_array['domain'] = $_domain[0]['domain_name'];
        $post_array['product'] = 1;
        $post_array['update_status'] = 6;
        $curl_call = self::curl_call($post_array);
    }

    /**
     * Cloud Payment Failure data update to CRM
     * 
     * @param type $post_array
     */
    public function cloud_payment_failure($post_array = []) {
        $curl_call = self::curl_call($post_array);
    }

    /**
     * Cloud Payment Success data update to CRM
     * @param type $post_array
     */
    public function cloud_payment_success($post_array = []) {
        $curl_call = self::curl_call($post_array);
    }

    /**
     * Get the total taxi count
     * 
     * @return type
     */
    private static function get_taxi_total_count() {
        $mongo_db = MangoDB::instance('default');

        $options = [
            'projection' => [
                '_id' => 1,
            ]
        ];
        $query_result = $mongo_db->find(MDB_TAXI, [], $options);

        $result = !empty($query_result) ? count($query_result) : count(array());
        return $result;
    }

    /**
     * Get the domain name
     * 
     * @return type
     */
    private static function get_domain_name() {
        $mongo_db = MangoDB::instance('default');

        $options = [
            'projection' => [
                'domain_name' => 1,
            ]
        ];
        $query_result = $mongo_db->find(MDB_SITEINFO, [], $options);

        $result = !empty($query_result) ? $query_result : array();
        return $result;
    }

    /**
     * Get the total Company count
     * 
     * @return type
     */
    private static function get_company_total_count() {
        $mongo_db = MangoDB::instance('default');

        $options = [
            'projection' => [
                '_id' => 1,
            ]
        ];
        $query_result = $mongo_db->count(MDB_PEOPLE, ['user_type' => 'C'], $options);

        $result = !empty($query_result) ? $query_result : count(array());
        return $result;
    }

    /**
     * Get the total completed trip counts
     * @return type
     */
    private static function get_complete_trip_count() {
        $mongo_db = MangoDB::instance('default');

        $options = [
            'projection' => [
                '_id' => 1,
            ]
        ];
        $query_result = $mongo_db->count(MDB_PASSENGERS_LOGS, ['travel_status' => '1'], $options);

        $result = !empty($query_result) ? $query_result : count(array());
        return $result;
    }

    /**
     * Email verification update
     * 
     */
    private static function update_email_verified() {
        $mongo_db = MangoDB::instance('default');
        $query = ['cloud_email_verification' => 1];
        $result = $mongo_db->updateOne(MDB_SITEINFO, array('_id' => 1), array('$set' => $query), array('upsert' => false));
    }

    /**
     * Resend email for login credentials 
     * 
     * @param type $email
     * @return boolean
     */
    public function crm_resend_email($email = '') {
        if ($email == '') {
            Message::error('Email id is not valid');
            return false;
        }
        self::update_admin_email($email);
        $post_array['authentication_accesskey'] = $this->_config['options']['authentication_accesskey'];
        $_domain = self::get_domain_name();


        $post_array['email'] = $email;
        $post_array['domain'] = $_domain[0]['domain_name'];
        $post_array['product'] = 1;
        $post_array['update_status'] = 7;

        $curl_call = self::curl_call($post_array, 'resend_mail');
        return $curl_call;
    }

    /**
     * Get the login information in force update profile
     * 
     * @return type
     */
    public function crm_get_app_login_info() {
        $post_array['authentication_accesskey'] = $this->_config['options']['authentication_accesskey'];
        $_domain = self::get_domain_name();


        $post_array['domain'] = $_domain[0]['domain_name'];
        $post_array['product'] = 1;
        $post_array['update_status'] = 8;

        $curl_call = self::curl_call($post_array, 'login_info');
        return $curl_call;
    }

    /**
     * Curl process calling
     * 
     * @param type $post_array
     * @param type $method
     * @return boolean|int
     */
    private function curl_call($post_array, $method = '') {
        $fields_string = '';
        $fields_string = http_build_query($post_array);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => $this->_config['options']['CRM_HOST_PORT'],
            CURLOPT_URL => trim($this->_config['options']['CRM_HOST_PROFILE_UPDATE_URL']),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $fields_string,
            CURLOPT_HEADER => FALSE,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            if ($method == 'resend_mail') {
                return 0;
            }
            echo "Error #:" . $err;

            return true;
        } else {
            if ($method == 'login_info') {
                return json_decode($response);
            }
            echo $response;
            return true;
        }
    }
    /**
     * Update admin while resend email
     * 
     * @param type $email
     * 
     */
     private static function update_admin_email($email='') {
         
        $mongo_db = MangoDB::instance('default');
        $query = ['email' => $email];
        $result = $mongo_db->updateOne(MDB_PEOPLE, array('user_type' => 'A'), array('$set' => $query), array('upsert' => false));
    }

}
