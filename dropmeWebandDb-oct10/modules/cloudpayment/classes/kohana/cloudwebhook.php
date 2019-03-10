<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Kohana_Cloudwebhook extends Controller {

    public static $default = 'default';
    public static $instances = array();
    protected $_config;

    public function __construct($name = Null, $config = Null) {

        $config = Kohana::$config->load('cloudwebhook');


        if (file_exists(DOCROOT . 'application/classes/saas/cloud_config.php')) {

            require Kohana::find_file('classes/saas/', 'cloud_config');
        }
        $this->emailtemplate = Model::factory('emailtemplate');

        $this->_config = $config;
        
    }

    public function action_subscription_status() {

        $status = $this->webhooks_status();
        exit;
    }

    public function send_mail_payment_success($type = '', $dbname = '', $email = '', $name = '', $log_id = '') {

        $filename = __('INVOICE') . '-' . $name . '-' . date('m-d-y-s');
        $paid_package_info = $this->get_recent_package_paid_info($dbname);
        $package_type = '';
        foreach ($paid_package_info as $r) {
            $payment_terms_paid = isset($r->payment_terms)?$r->payment_terms:'';
            $amount = isset($r->amount)?$r->amount:'';
            $purchase_inv_id = isset($r->purchase_inv_id)?$r->purchase_inv_id:'';
            $createddate = isset($r->createddate)?$r->createddate:'';
            $service_tax_percent = isset($r->service_tax) ? $r->service_tax : '';
            $service_tax = '';
            if ($service_tax_percent != '') {
                $service_tax = $service_tax_percent;
                $service_tax_cost = isset($r->service_tax_cost) ? $r->service_tax_cost : '';
                ;
            }
            $package_type = isset($r->package_type) ? $r->package_type : '';
            $subscription_cost = isset($r->subscription_cost) ? $r->subscription_cost : '';
        }

        $business_name = $dbname;
        $city = '';
        $state = '';
        $country = '';
        $address = '';
        $paid_billing_info = $this->get_billing_current_info($dbname, $purchase_inv_id);
        foreach ($paid_billing_info as $t) {
            $city = isset($t->city) ? $t->city : '';
            $state = isset($t->state) ? $t->state : '';
            $country = isset($t->country) ? $t->country : '';
            $postal_code = isset($t->postal_code) ? $t->postal_code : '';
            $email = isset($t->email) ? $t->email : '';
            $firstname = isset($t->firstname) ? $t->firstname : '';
            $lastname = isset($t->lastname) ? $t->lastname : '';
            $address = isset($t->address) ? $t->address : '';
        }

       
        $log_id = 'test';       

    
        if (isset($payment_terms_paid)) {
            if ($payment_terms_paid == 1) {
                $payment_terms = '30 days';
            } else if ($payment_terms_paid == 2) {
                $payment_terms = '1 year';
            } else if ($payment_terms_paid == 3) {
                $payment_terms = '2 years';
            } else if ($payment_terms_paid == 4) {
                $payment_terms = '3 years';
            }
        }


        if ($package_type == 1) {
            $package_type = __('basic') . ' Plan';
        } else if ($package_type == 2) {
            $package_type = __('plantinum') . ' Plan';
        }
        $Middle_html = "";
        $Endhtml = "";
        $Tophtml = '<style>
	h1 {
            color: navy;
            font-family: times;
            font-size: 24pt;
	}
	p.first {
            color: #003300;
            font-family: helvetica;
            font-size: 12pt;
	}
	p.first span {
            color: #006600;
            font-style: italic;
	}
	p#second {
            color: rgb(00,63,127);
            font-family: times;
            font-size: 12pt;
            text-align: justify;
	}
	
	p#second > span {
		
	}
	table.first {
            color: #003300;
            font-family: helvetica;
            font-size: 8pt;
            background-color:#FFF; 
            border:10px solid #236B8D;
	}
	td {
            font-weight:bold;
            font:bold 12pt arial; color:#000000;
	}
	.invoice_head{text-align: right;color:#000000;}
	.head_border{border-bottom:1px solid #2c2c2c;}
	.totalstyle{font-weight:bold; font:bold 12pt arial; color:#ffffff; background-color:#2c2c2c; text-align:left; width:auto}
	.taxstyle{font-weight:bold; font:bold 12pt arial; color:#000000;  text-align:left;}
        .office_addr,.invoice_sender{width:100%;float:left;}
        .office_addr h1{font:bold 16px arial;color:#000;padding-bottom:15px;width:100%;margin:0;}
        .office_addr p{font:normal 12px arial;color:#000;width:100%;margin:0;line-height:20px;}
        .invoice_sender h2{font:30px arial;color:#5292BC;width:100%;padding:10px 0 20px;margin:0;}
        .invoice_sender h3{font:bold 14px arial;color:#000;width:100%;line-height:20px;margin:0;}
        .invoice_sender p{font:12px arial;color:#000;width:100%;margin:0;}
        .invoice_det p{width:100%;font:13px arial;color:#000;margin:0;float:left;}
        .invoice_det p label{width:85px;font:bold 13px arial;color:#000;float:left;text-align:right;padding-right:10px;}
        .border{width:100%;height:1px;background:#8BB5D2;margin:20px 0 40px;}
        .pur_det thead tr th{font:14px arial;color:#5895BE;background:#DCE9F1;padding:5px 10px;}
        .pur_det tr td{font:14px arial;color:#000;padding:5px 10px;}
        .pur_det tr td p{line-height:20px;}
        .border_dot{width:100%;border-top:1px dashed #8BB5D2;margin:20px 0 10px;}
        .bal_due{font:16px arial;color:#000;margin:0;}
        .tot_amt{font:bold 18px arial;color:#000;margin: 0;}

	</style>        
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background:#fff;padding:50pt;">
            <tr>
                <td width="50%">
                        <h1 style="font-weight:bold;font-size:16pt;font-family:helvetica,sans serif;color:#000;padding-bottom:15pt;width:100%;margin:0;">NDOT Technologies Pvt Ltd</h1>
                        <p style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;">+91-422-2970042</p>
                        <p style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;">accounts@ndot.in</p>
                        <p style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;">http://www.ndottech.com</p>
                </td>
                <td width="50%"></td>
            </tr>
            <tr>
                <td>
                        <h2 style="font-family:helvetica,sans serif;font-size:20pt;color:#5292BC;width:100%;padding:10pt 0 20pt;margin:0;">INVOICE</h2>
                        <h3 style="font-family:helvetica,sans serif;font-size:13pt;color:#000;width:100%;margin:0;">INVOICE TO</h3>
                        
                            <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $email . '</div>
                                <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $business_name . '</div>
                                    <div style="height:1px;margin:0;line-height:2px;padding:0">&nbsp;</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $firstname . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $address . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $city . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $state . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $country . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $postal_code . '</div>
                        
                </td>
                 
                <td>
                   
                    <table width="100%" cellpadding="5" cellspacing="0">
                    <tr><td><label style="width:85pt;font-family:helvetica,sans serif;font-weight:bold;font-size:11pt;color:#000;float:left;text-align:right;padding-right:10pt;line-height:1pt;">INVOICE NO.</label></td><td><p style="width:100%;font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;margin:0;float:left;line-height:1pt;">' . $purchase_inv_id . '</p></td></tr>
                    <tr><td><label style="width:85pt;font-family:helvetica,sans serif;font-weight:bold;font-size:11pt;color:#000;float:left;text-align:right;padding-right:10pt;line-height:1pt;">DATE</label></td><td><p style="width:100%;font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;margin:0;float:left;line-height:1pt;">' . Commonfunction::convertphpdate('d-m-Y', $createddate) . '</p></td></tr>
                    <tr><td><label style="width:85pt;font-family:helvetica,sans serif;font-weight:bold;font-size:11pt;color:#000;float:left;text-align:right;padding-right:10pt;line-height:1pt;">TERMS</label></td><td><p style="width:100%;font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;margin:0;float:left;line-height:1pt;">Net ' . $payment_terms . '</p></td></tr>
                    </table>
                   
                </td>
            </tr>
            <tr><td  colspan="2">&nbsp;</td></tr>
            <tr><td colspan="2"><div style="width:100%;border-top:1pt solid #8BB5D2;"></div></td></tr>
            <tr><td colspan="2"><table class="pur_det" border="0" cellpadding="5" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th bgcolor="#DCE9F1" align="center" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#A8C8DD;">NO</th>
                <th bgcolor="#DCE9F1" align="left" colspan="2" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#A8C8DD;">ACTIVITY</th>
                <th bgcolor="#DCE9F1" align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#A8C8DD;">QTY</th>
                <th bgcolor="#DCE9F1" align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#A8C8DD;">RATE</th>
                <th bgcolor="#DCE9F1" align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#A8C8DD;">AMOUNT</th>
            </tr> 
            </thead>
            <tr><td colspan="6" style="height:3pt;"></td></tr>
            <tr>
                <td align="center" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">1</td>
                <td align="left" colspan="2" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">Taxi-' . $package_type . ' - Product:Taxi Mobility Custom Branding on Mobile + Before Uploading default application in Client server
                </td>
                <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">1</td>
                <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">' . number_format($subscription_cost, 2) . '</td>
                <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">' . number_format($subscription_cost, 2) . '</td>
            </tr>';

        if ($service_tax_percent > 0) {
            $Tophtml .= '<tr>
                        <td align="right" colspan="5" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">Service Tax(' . $service_tax_percent . '%)</td>
                        <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">' . number_format($service_tax_cost, 2) . '</td>
                      </tr>';
        }
        $Tophtml .= '<tr><td colspan="6"><div style="height:5pt;width:100%:"></div></td></tr>
            <tr><td colspan="6"><div style="width:100%;border-top:1pt dashed #8BB5D2;"></div></td></tr>
            <tr>
                <td align="right" colspan="3"><p class="bal_due" style="font-family:helvetica,sans serif;font-weight:normal;font-size:13pt;color:#000;">Total Amount</p></td>
                <td colspan="3" align="right"><p class="tot_amt" style="font-family:helvetica,sans serif;font-size:13pt;color:#000;">USD ' . number_format($amount, 2) . '</p></td>
            </tr>

            </table>
            </td></tr> </table>';
        $html = $Tophtml . $Middle_html . $Endhtml; //
        
        ob_clean();
        $filename = $business_name . '_' . Commonfunction::convertphpdate('d-m-Y', $createddate) . '_' . $purchase_inv_id;
        $filepath = DOCROOT . "public/uploads/cloud_invoice/" . $filename;
        $package = Model::factory('package');
        $generate_pdf = $package->send_pdf($html, $filepath);
        if ($generate_pdf == 1) {
            $attachment = $filepath . '.pdf';
        }
        $mail = "";
        $to = $email;
        
        $replace_variables = array(
            REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
            REPLACE_SITENAME => CLOUD_SITENAME,
            REPLACE_USERNAME => $firstname . ' ' . $lastname,
            REPLACE_EMAIL => $to,
            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
            REPLACE_SITEEMAIL => 'sales@taximobility.com',
            REPLACE_SITEURL => URL_BASE,
            REPLACE_ORDERID => $log_id,
            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR,
            REPLACE_CONTACT_URL => CONTACT_URL,
            REPLACE_PRIVACY_URL => PRIVACY_URL,
            REPLACE_FAQ_URL => FAQ_URL
        );
        /* Added for language email template */
        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'package/invoice_success.html', $replace_variables);

        /* Added for language email template */
        $from = 'sales@taximobility.com';
        $subject = 'Your Subscription Renewed - Payment Made Success';
        $redirect = 'no';

        if (SMTP == 1) {            
            include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
            unlink($filepath . '.pdf');
        } else {
            // To send HTML mail, the Content-type header must be set
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            // Additional headers
            $headers .= 'From: ' . $from . '' . "\r\n";
            $headers .= 'Bcc: ' . $to . '' . "\r\n";
            mail($to, $subject, $message, $headers);
        }
    }

    public function get_recent_package_paid_info($dbname = '') {

        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=admin');
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);

        if (!defined('CLIENT_SUBDOMAIN_NAME')) {
            DEFINE('CLIENT_SUBDOMAIN_NAME', $dbname);
        }

        //$this->mongo_db = MangoDB::instance('default');


        $option = [
            'projection' => [
                '_id' => 1,
                'purchase_inv_id' => 1,
                'package_type' => 1,
                'name' => 1,
                'email' => 1,
                'phone' => 1,
                'product_id' => 1,
                'subscription_cost' => 1,
                'setup_cost' => 1,
                'service_tax' => 1,
                'service_tax_cost' => 1,
                'amount' => 1,
                'createddate' => 1,
                'expirydate' => 1,
                'subscription_id' => 1,
                'customer_id' => 1,
                'payment_terms' => 1,
                'business_name' => 1
            ],
            'sort' => [
                '_id' => -1
            ],
            'limit' => 1
        ];


        $filter = array('paid_status' => 1);

        $query = new MongoDB\Driver\Query($filter, $option);
        $rows = $manager->executeQuery($dbname . '.' . MDB_PACKAGE_INFO, $query);
        $val = 0;
        /* $result = $this->mongo_db->find(MDB_PACKAGE_INFO, array('paid_status' => 1), $option);
          print_r($result);exit;
          if (!empty($result)) {
          return $result;
          } else {
          return array();
          } */


        return $rows;
    }

    public function get_site_info($dbname = '') {


        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=admin');
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
        $option = [
            'projection' => [
                'profile_status' => 1,
                'package_type' => 1,
                'bill_payment_terms' => 1,
                'expiry_date' => 1,
                'driver_count' => 1,
                'domain_name' => 1,
                'user_time_zone' => 1,
                'create_date' => 1
            ]
        ];
        $filter = ['_id' => 1];
        $query = new MongoDB\Driver\Query($filter, $option);
        $rows = $manager->executeQuery($dbname . '.' . MDB_SITEINFO, $query);
        $val = 0;
        //$result = $this->mongo_db->find(MDB_SITEINFO, [], $option);
        return (!empty($rows)) ? $rows : '';
    }

    public function getadmin_profile_info($dbname = '') {
        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=admin');
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
        $option = [
            'projection' => [
                'name' => 1,
                'lastname' => 1,
                'email' => 1,
                'password' => 1,
                'phone' => 1,
                'address' => 1,
                'timezone' => 1,
                'created_date' => 1,
                'last_login' => 1,
                'postal_code' => 1,
                'login_country' => 1,
                'login_state' => 1,
                'login_city' => 1
            ]
        ];
        $filter = ['user_type' => 'A'];
        $query = new MongoDB\Driver\Query($filter, $option);
        $rows = $manager->executeQuery($dbname . '.' . MDB_PEOPLE, $query);
        $val = 0;
        //$result = $this->mongo_db->find(MDB_SITEINFO, [], $option);
        return (!empty($rows)) ? $rows : '';
    }

    public function webhooks_status() {

        $merchantId = $this->_config['default']['options']['MERCHANT_ID'];

        $strip_connect = \Stripe\Stripe::setApiKey($merchantId);

        $endpoint_secret = $this->_config['default']['options']['SECRET_KEY'];

        $input = @file_get_contents("php://input");
        $sig_header = isset($_SERVER["HTTP_STRIPE_SIGNATURE"])?$_SERVER["HTTP_STRIPE_SIGNATURE"]:'';

        $event = null;

        try {

            $event = \Stripe\Webhook::constructEvent(
                            $input, $sig_header, $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            echo "Unauthorized Access";
            // Invalid payload
            http_response_code(400); // PHP 5.4 or greater
            exit();
        } catch (\Stripe\Error\SignatureVerification $e) {
            echo "Unauthorized Access";
            // Invalid signature
            http_response_code(400); // PHP 5.4 or greater
            exit();
        }


        $event_json = json_decode($input);


        if (isset($event_json->data->object->webhooks_delivered_at) && isset($event_json->type) && ($event_json->type == 'invoice.payment_succeeded') && ($event_json->data->object->webhooks_delivered_at != null)) {


            $success_data = $event_json->data->object->lines->data;

            foreach ($success_data as $invoice_data) {

                /* $period_start_timestamp=$invoice_data->period->start;
                  $period_end_timestamp=$period_start=$invoice_data->period->end;
                  $period_start=date('d-m-Y H:i:s',$period_start_timestamp);
                  $period_end=date('d-m-Y H:i:s',$period_end_timestamp); */
                $subscription_id = $invoice_data->id;

                $plan_id = $invoice_data->plan->id;
                $interval = $invoice_data->plan->interval;


                $get_subscription_info = $this->get_subscription_info($subscription_id);

                $domain = isset($get_subscription_info[0]['business_name']) ? $get_subscription_info[0]['business_name'] : '';
                $timezone='Asia/kolkata';
                if ($domain != '') {
                    $get_site_info = $this->get_site_info($domain);
                    foreach ($get_site_info as $e) {
                        $actual_expiry_date = isset($e->expiry_date) ? $e->expiry_date : '';
                        $timezone= isset($e->user_time_zone)?$e->user_time_zone:'Asia/kolkata';
                    }
                    if(!defined('USER_SELECTED_TIMEZONE')){
                    DEFINE('USER_SELECTED_TIMEZONE',$timezone);
                    }
                    date_default_timezone_set($timezone);
                    $actual_expiry_date = Commonfunction::convertphpdate('Y-m-d H:i:s', $actual_expiry_date);
                    
                    /*$date = new DateTime('now', new DateTimeZone($timezone));
                    $currentTime = $date->format('Y-m-d H:i:s');
                    $currentTime = date('Y-m-d H:i:s', strtotime($currentTime));*/
                    
            
                     

                    if ($interval == 'year') {
                        $expiry_date = date('Y-m-d H:i:s', strtotime($actual_expiry_date . ' + 1 year'));
                    } else if ($interval == 'month') {
                        $expiry_date = date('Y-m-d H:i:s', strtotime($actual_expiry_date . ' + 30 days'));
                    } else {
                        echo 'check plan period';
                        exit;
                    }

                    $period_end = $expiry_date;

                    
                    $insert_current_invoice = $this->insert_current_invoice($domain, $period_end);
                    $update_client_domain_expiry = $this->update_client_domain_expiry($domain, $period_end);
                    $this->send_mail_payment_success('success', $domain);
                } else {
                    echo 'check subscription';
                }
            }
        }
    }

    private function get_subscription_info($subscription_id) {

        $mongo_db = MangoDB::instance('default');
        $options = [
            'projection' => [
                '_id' => 1,
                'business_name' => 1,
            ]
        ];

        $result = $mongo_db->find(MDB_PACKAGE_ACCT_TRANS, array('subscription_id' => $subscription_id), $options);
        return isset($result) ? $result : array();
    }

    private function update_client_domain_expiry($dbname = '', $expiry_date = '') {
        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=admin');
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
        $siteinfo = new MongoDB\Driver\BulkWrite();




        $update_package_info = ['expiry_date' => $this->MongoDate(strtotime($expiry_date))];
        $siteinfo->update(['_id' => 1], ['$set' => $update_package_info]);
        $result = $manager->executeBulkWrite($dbname . "." . MDB_SITEINFO, $siteinfo, $writeConcern);
    }

    private function insert_current_invoice($dbname = '', $expirydate = '') {
        $paid_package_info = $this->get_recent_package_paid_info($dbname);
        $package_type = '';

        foreach ($paid_package_info as $r) {

            $id = $r->_id;
            $payment_terms_paid = $r->payment_terms;
            $amount = $r->amount;
            $purchase_inv_id = explode('-', $r->purchase_inv_id);
            $createddate = $r->createddate;
            $service_tax_percent = isset($r->service_tax) ? $r->service_tax : '';
            $service_tax = '';
            if ($service_tax_percent != '') {
                $service_tax = $service_tax_percent;
                $service_tax_cost = isset($r->service_tax_cost) ? $r->service_tax_cost : '';                
            }
            $package_type = isset($r->package_type) ? $r->package_type : '';
            $subscription_cost = isset($r->subscription_cost) ? $r->subscription_cost : '';
            $business_name = isset($r->business_name) ? $r->business_name : '';
            $customer_id = isset($r->customer_id) ? $r->customer_id : '';
            $subscription_id = isset($r->subscription_id) ? $r->subscription_id : '';
        }
        if (!isset($id)) {
            echo "Not subscribed";
            exit;
        }
        $id = $id + 1;
        $purchase_id = $purchase_inv_id[2] + 1;
        $purchase_inv_current_id = "NDOT-P-" . $purchase_id;

        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here

        $currentdatetime = date('Y-m-d H:i:s');
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=admin');
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
        $siteinfo = new MongoDB\Driver\BulkWrite();

        $insert_package_info = ['_id' => $id,
            'purchase_inv_id' => $purchase_inv_current_id,
            'package_type' => $package_type,
            'subject' => 'Subscription Renewed',
            'subscription_cost' => $subscription_cost,
            'amount' => $amount,
            'paid_status' => 1,
            'pay_mode' => 1,
            'business_name' => $business_name,
            'subscription_id' => $subscription_id,
            'customer_id' => $customer_id,
            'payment_terms' => $payment_terms_paid,
            'startdate' => $this->MongoDate(strtotime($currentdatetime)),
            'createddate' => $this->MongoDate(strtotime($currentdatetime)),
            'expirydate' => $this->MongoDate(strtotime($expirydate))];

        if ($service_tax_percent != '') {
            $service_array = ['service_tax' => $service_tax_percent,
                'service_tax_cost' => $service_tax_cost];
            $insert_package_info = array_merge($insert_package_info, $service_array);
        }

        $siteinfo->insert($insert_package_info);
        $result = $manager->executeBulkWrite($dbname . "." . MDB_PACKAGE_INFO, $siteinfo, $writeConcern);

        $billinginfo = new MongoDB\Driver\BulkWrite();
        $paid_billing_info = $this->get_billing_current_info($dbname, $purchase_inv_id);
        foreach ($paid_billing_info as $t) {
            $city = isset($t->city) ? $t->city : '';
            $address = isset($t->address) ? $t->address : '';
            $state = isset($t->state) ? $t->state : '';
            $country = isset($t->country) ? $t->country : '';
            $postal_code = isset($t->postal_code) ? $t->postal_code : '';
            $email = isset($t->email) ? $t->email : '';
            $firstname = isset($t->firstname) ? $t->firstname : '';
            $lastname = isset($t->lastname) ? $t->lastname : '';
            $cardnumber = isset($t->cardnumber) ? $t->cardnumber : '';
            $expmonth = isset($t->expiry_month) ? $t->expiry_month : '';
            $expyear = isset($t->expiry_year) ? $t->expiry_year : '';
            $cvv = isset($t->cvv) ? $t->cvv : '';


            $insert_biling_info = ["_id" => $id,
                "purchase_inv_id" => $purchase_inv_current_id,
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email,
                "address" => $address,
                "city" => $city,
                "state" => $state,
                "country" => $country,
                "postal_code" => $postal_code,
                "cardnumber" => $cardnumber,
                "expiry_month" => $expmonth,
                "expiry_year" => $expyear,
                "cvv" => $cvv,
                "updated_date" => $this->MongoDate(strtotime($currentdatetime)),
                "subscription_id" => $subscription_id,
                "customer_id" => $customer_id];
            $billinginfo->insert($insert_biling_info);
            $result = $manager->executeBulkWrite($dbname . "." . MDB_BILLING_INFO, $billinginfo, $writeConcern);
        }
        
        $mongo_db = MangoDB::instance('default');
        $id=Commonfunction::get_auto_id(MDB_PACKAGE_ACCT_TRANS);
        
        $total_billing_update= array_merge($insert_package_info,$insert_biling_info);
        $total_billing_update['_id']=$id;
        $mongo_db->insertOne($total_billing_update);
        
    }

    private function MongoDate($currentdatetime) {

        $timestamp = $currentdatetime;
        $timestamp = $timestamp * 1000;
        $utcdatetime = new MongoDB\BSON\UTCDateTime($timestamp);
        return $utcdatetime;
    }

    private function get_billing_invoice_info($dbname, $invoice_id) {
        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=admin');
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
        $option = [
            'projection' => [
                '_id' => 1,
                'purchase_inv_id' => 1,
                'firstname' => 1,
                'lastname' => 1,
                'email' => 1,
                'address' => 1,
                'city' => 1,
                'state' => 1,
                'country' => 1,
                'postal_code' => 1,
                'createddate' => 1
            ]
        ];

        $filter = array('purchase_inv_id' => $invoice_id);
        $query = new MongoDB\Driver\Query($filter, $option);
        $rows = $manager->executeQuery($dbname . '.' . MDB_BILLING_INFO, $query);        
        return (!empty($rows)) ? $rows : '';
    }

    private function get_billing_current_info($dbname, $invoice_id) {

        $ALTER_DB_USER = $this->_config['default']['options']['ALTER_DB_USER']; //Update Db user detail
        $ALTER_DB_PWD = $this->_config['default']['options']['ALTER_DB_PWD']; //Update DB password Here		
        $ALTER_DB_HOST = $this->_config['default']['options']['ALTER_DB_HOST']; //Update DB Host Here
        $manager = new MongoDB\Driver\Manager('mongodb://' . $ALTER_DB_USER . ':' . $ALTER_DB_PWD . '@' . $ALTER_DB_HOST . '/' . $dbname . '?authsource=admin');
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
        $option = [
            'projection' => [
                '_id' => 1,
                'purchase_inv_id' => 1,
                'firstname' => 1,
                'lastname' => 1,
                'email' => 1,
                'address' => 1,
                'city' => 1,
                'state' => 1,
                'country' => 1,
                'postal_code' => 1,
                'createddate' => 1,
                'cardnumber' => 1,
                'expiry_month' => 1,
                'expiry_year' => 1,
                'cvv' => 1
            ]
        ];

        $filter = array('_id' => 1);
        $query = new MongoDB\Driver\Query($filter, $option);
        $rows = $manager->executeQuery($dbname . '.' . MDB_BILLING_REG_INFO, $query);        
        return (!empty($rows)) ? $rows : '';
    }

}
