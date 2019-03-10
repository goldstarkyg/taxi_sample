<?php

defined('SYSPATH') or die('No direct script access.');
/* * ****************************************
 * Package controller
 * @Package: Taximobility
 * @Author: Taxi Team
 * @URL : taximobility.com
 * ****************************************** */

class Controller_TaximobilityPackage extends Controller_Siteadmin {

    /**
     * __construct()
     */
    public $template = 'admin/packagetemplate';

    public function __construct(Request $request, Response $response) {
        
        parent::__construct($request, $response);
        $this->session = Session::instance();
        $user_type = $this->session->get('user_type');
        if ($user_type == 'C') {
            Message::error(__('invalid_access'));
            $this->request->redirect(URL_BASE . "company/dashboard");
        } else if ($user_type == 'M') {
            Message::error(__('invalid_access'));
            $this->request->redirect(URL_BASE . "manager/dashboard");
        }
        $this->is_login();
    }

    public function action_index() {
        $this->request->redirect(URL_BASE . "package/home");
    }

    public function is_login() {
        $session = Session::instance();
        //get current url and set it into session
        //========================================
        $request_url=Request::detect_uri();
        $this->session->set('requested_url', Request::detect_uri());
        /** To check Whether the user is logged in or not* */
        if($request_url!='package/subscription_extend'){
        if (!isset($this->session) || (!$this->session->get('userid')) && !$this->session->get('id')) {
            Message::error(__('login_access'));
            $this->request->redirect("/admin/login/");
        }
        }
        return;
        
    }

    /**
     * Force Profile Update
     * @return admin edit profile
     */
    public function action_editprofile_user() {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        $config_country['taxicountry'] = $this->country_info();
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        //get current page segment id 
        $usrid = $this->request->param('userid');
        $id = $this->request->param('id');
        $userid = isset($usrid) ? $usrid : $id;
        if ($_SESSION['userid'] != $userid) {
            Message::error(__('invalid_access'));
            $this->request->redirect("admin/dashboard");
        }
        //check current action
        $action = $this->request->action();
        $action .= "/" . $userid;
        $postvalue = Arr::map('trim', $this->request->post());

        $add_company = Model::factory('add');
        $package = Model::factory('package');

        $country_details = $package->country_details();
        $city_details = $add_company->city_details();
        $state_details = $add_company->state_details();
        $getadmin_profile_info = $package->getadmin_profile_info();
        $get_site_info = $package->get_site_info();
        
        if (isset($get_site_info[0]['profile_status'])) {
            if ($get_site_info[0]['profile_status'] != 0) {
                Message::error(__('invalid_access_profile'));
                $this->request->redirect("admin/dashboard");
            }
        }
        if (isset($get_site_info[0]['domain_name'])) {
            $business_name = $get_site_info[0]['domain_name'];
        } else {
            $business_name = '';
        }
        $user_timezone = $get_site_info[0]['user_time_zone'];
        //getting request for form submit
        $editprofile = arr::get($_REQUEST, 'submit_editprofile');
        $errors = array();
        if (isset($editprofile) && Validation::factory($_POST)) {
            $post_values = Securityvalid::sanitize_inputs($postvalue);
            $validator = $package->editprofile_validate(arr::extract($post_values, array('firstname', 'lastname', 'email', 'phone', 'address', 'country', 'state', 'city', 'user_time_zone', 'iso_country_code', 'telephone_code', 'currency_code', 'currency_symbol', 'postal_code')), $userid);
            if ($validator->check()) {
                if(PACKAGE_TYPE==3){
                    require Kohana::find_file('classes/controller', 'ndotmobile_crypt');
                    $mobile_data_ndot_crypt=new Mobile_key_crypt();
                    $post_values['mobile_api_key']=$mobile_data_ndot_crypt->mobile_encrypt_encode();
                }
                
                $status = $package->edit_people($userid, $post_values);

                if ($status == 1) {
                    //Profile data updated with Crm
                    if (CRM_UPDATE_ENABLE == 1 && class_exists('Thirdpartyapi')) {
                        if (method_exists('Thirdpartyapi', 'crm_update_profile')) {
                            $thirdpartyapi = Thirdpartyapi::instance();
                            $thirdpartyapi->crm_update_profile($post_values);
                        }
                    }
                    Message::success(__('profile_updated_successfully'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("package/home");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $login_details = $package->login_details_byid($userid);
        $email = $_SESSION['email'];
        
        $get_login_info='';
         if (CRM_UPDATE_ENABLE == 1 && class_exists('Thirdpartyapi')) {
                        if (method_exists('Thirdpartyapi', 'crm_get_app_login_info')) {
                            $thirdpartyapi = Thirdpartyapi::instance();
                           $get_login_info=$thirdpartyapi->crm_get_app_login_info();
                        }
                    }
                  
        $view = View::factory(ADMINVIEW . 'package_plan/editprofile_trialuser')
                ->bind('errors', $errors)
                ->bind('action', $action)
                ->bind('validate', $validate)
                ->bind('user_exists', $user_exists)
                ->bind('postvalue', $postvalue)
                ->bind('country_details', $country_details)
                ->bind('all_country_list', $config_country['taxicountry'])
                ->bind('city_details', $city_details)
                ->bind('state_details', $state_details)
                ->bind('login_detail', $login_details)
                ->bind('user_timezone', $user_timezone)
                ->bind('business_name', $business_name)
                ->bind('email', $email)
                ->bind('login_credentials', $get_login_info);
        $this->template->content = $view;
        $this->template->meta_description = CLOUD_SITENAME . " | Admin ";
        $this->template->meta_keywords = CLOUD_SITENAME . "  | Admin ";
        $this->template->title = "Edit Profile";
        $this->template->page_title = "Edit Profile";
    }

    
    
    /**
     * 
     */
    public function action_invalidrequest() {
        if (isset($_POST['checkinvalid']) == '123') {
            if ($_POST) {
                $this->template->title = 'NDOT Technologies | Payment Status ';
                $this->template->content = View::factory("themes/default/icici/payment_status_invalid");
                $this->meta_description = "The 'Invalid request' message arises when your input does not match our criteria. Check the values or contact us for any further assistance.";
            }
        } else {
            Message::error(__('invalid_access'));
            $this->request->redirect("package/account_plan");
        }
    }

    /**
     * 
     */
    public function action_invaliddata() {
        if (isset($_POST['checkerror']) == '123') {
            $this->input = Request::current()->post();
            if ($_POST) {
                if (isset($_POST['user_dataerror'])) {
                    $this->user_dataerr = $this->input["user_dataerror"];
                } else {
                    $this->checkmsg = $this->input["checkmsg"];
                    $this->checkcode = $this->input["checkcode"];
                }
                $this->template->title = 'NDOT Technologies | Payment Status ';
                $this->meta_description = "We are here to assist you always. Multiple reasons may be there for 'payment decline.' Please check if the mode of payment criteria are met.";
                $this->template->content = View::factory("themes/default/icici/payment_status_error")
                        ->bind('user_dataerr', $this->user_dataerr)
                        ->bind('checkmsg', $this->checkmsg)
                        ->bind('checkcode', $this->checkcode);
            }
        } else {
            Message::error(__('invalid_access'));
            $this->request->redirect("package/account_plan");
        }
    }

    /**
     * @param int $type
     * @param varchar $email
     */
    public function send_mail_payment_failure($type = '', $email = '', $name = '', $log_id = '', $amount = '', $currency = '') {
        $mail = "";
        $to = $email;
        $replace_variables = array(
            REPLACE_LOGO => EMAILTEMPLATELOGO,
            REPLACE_SITENAME => CLOUD_SITENAME,
            REPLACE_USERNAME => $name,
            REPLACE_EMAIL => $to,
            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
            REPLACE_SITEEMAIL => 'sales@taximobility.com',
            REPLACE_SITEURL => URL_BASE,
            REPLACE_ORDERID => $log_id,
            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR,
            REPLACE_CURRENCY => $currency,
            REPLACE_AMOUNT => number_format($amount,2),
            REPLACE_CONTACT_URL => CONTACT_URL,
            REPLACE_PRIVACY_URL => PRIVACY_URL,
            REPLACE_FAQ_URL => FAQ_URL
        );
        /* Added for language email template */
        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'package/invoice_failure.html', $replace_variables);
        /* Added for language email template */
        $emailTemp = $this->commonmodel->get_email_template('invoice_failure');
		if(isset($emailTemp['status']) && ($emailTemp['status'] == '1')){
			
			$email_description = isset($emailTemp['description']) ? $emailTemp['description']: '';
			$subject = isset($emailTemp['subject']) ? $emailTemp['subject']: '';
			$message           = $this->emailtemplate->emailtemplate($email_description, $replace_variables);
			$from              = CONTACT_EMAIL;
			//~ $from = 'sales@taximobility.com';
			//~ $subject = __('payment_made_failure');
			$redirect = 'no';
			if (SMTP == 1) {
				include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
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
    }

    /**
     * 
     * @param int $type
     * @param varchar $email
     */
    public function send_mail_payment_success($type = '', $email = '', $name = '', $log_id = '') {
        DEFINE('CLOUD_SMTP',1);
        $package = Model::factory('package');
        $filename = __('INVOICE') . '-' . $name . '-' . date('m-d-y-s');
        $paid_package_info = $package->get_recent_package_paid_info();
        $purchase_invoice_id= isset($paid_package_info[0]['purchase_inv_id'])?$paid_package_info[0]['purchase_inv_id']:'';
        $paid_billing_info=$package->get_billing_invoice_info($purchase_invoice_id);
        
        $get_package_business = $package->get_site_info();
        if (isset($get_package_business[0]['domain_name'])) {
            $business_name = $get_package_business[0]['domain_name'];
        } else {
            $business_name = '';
        }
        $city = '';
        $state = '';
        $country = '';
        $address = '';        
        $postal_code='';
        if (isset($paid_billing_info[0]['city'])) {
            $city = $paid_billing_info[0]['city'];
        }
        if (isset($paid_billing_info[0]['state'])) {
            $state = $paid_billing_info[0]['state'];
        }
        if (isset($paid_billing_info[0]['country'])) {
            $country = $paid_billing_info[0]['country'];
        }
        if (isset($paid_billing_info[0]['address'])) {
            $address = $paid_billing_info[0]['address'];
        }
        
        if (isset($paid_billing_info[0]['postal_code'])) {
            $postal_code = $paid_billing_info[0]['postal_code'];
        }
        $payment_terms = '';        
        if (isset($paid_package_info[0]['payment_terms'])) {
            if ($paid_package_info[0]['payment_terms'] == 1) {
                $payment_terms = '30 days';
            } else if ($paid_package_info[0]['payment_terms'] == 2) {
                $payment_terms = '1 year';
            } else if ($paid_package_info[0]['payment_terms'] == 3) {
                $payment_terms = '2 years';
            } else if ($paid_package_info[0]['payment_terms'] == 4) {
                $payment_terms = '3 years';
            }
        }
        $package_type='';
        if(isset($paid_package_info[0]['package_type'])){
            if($paid_package_info[0]['package_type']==1){
                $package_type=__('basic').' Plan';
            }else if($paid_package_info[0]['package_type']==2){
                $package_type=__('plantinum').' Plan';
            }
        }
        $setup_cost=0;
        $service_tax_cost=0;
        $service_tax_percent=0;
         if(isset($paid_package_info[0]['setup_cost'])){
            if($paid_package_info[0]['setup_cost']>0){
                $setup_cost=number_format($paid_package_info[0]['setup_cost'],2);
            }
        }
        if(isset($paid_package_info[0]['service_tax'])){
            if($paid_package_info[0]['service_tax']>0){
                $service_tax_percent=$paid_package_info[0]['service_tax'];
            }
        }
        if(isset($paid_package_info[0]['service_tax_cost'])){
            if($paid_package_info[0]['service_tax_cost']>0){
                $service_tax_cost= number_format($paid_package_info[0]['service_tax_cost'],2);
            }
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
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $paid_package_info[0]['name'] . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $address . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $city . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $state . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $country . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $postal_code . '</div>
                        
                </td>
                 
                <td>
                   
                    <table width="100%" cellpadding="5" cellspacing="0">
                    <tr><td><label style="width:85pt;font-family:helvetica,sans serif;font-weight:bold;font-size:11pt;color:#000;float:left;text-align:right;padding-right:10pt;line-height:1pt;">INVOICE NO.</label></td><td><p style="width:100%;font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;margin:0;float:left;line-height:1pt;">' . $paid_package_info[0]['purchase_inv_id'] . '</p></td></tr>
                    <tr><td><label style="width:85pt;font-family:helvetica,sans serif;font-weight:bold;font-size:11pt;color:#000;float:left;text-align:right;padding-right:10pt;line-height:1pt;">DATE</label></td><td><p style="width:100%;font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;margin:0;float:left;line-height:1pt;">' . Commonfunction::convertphpdate('d-m-Y', $paid_package_info[0]['createddate']) . '</p></td></tr>
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
                <td align="left" colspan="2" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">Taxi-'.$package_type.' - Product:Taxi Mobility Custom Branding on Mobile + Before Uploading default application in Client server
                </td>
                <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">1</td>
                <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">' . number_format($paid_package_info[0]['subscription_cost'], 2) . '</td>
                <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">' . number_format($paid_package_info[0]['subscription_cost'], 2) . '</td>
            </tr>';
        if($setup_cost>0){
          $Tophtml.= '<tr>
                        <td align="right" colspan="5" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">Setup Cost</td>
                        <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">'.$setup_cost.'</td>
                      </tr>';
              
        }
        if($service_tax_percent>0){
          $Tophtml.= '<tr>
                        <td align="right" colspan="5" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">Service Tax('.$service_tax_percent.'%)</td>
                        <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">'.$service_tax_cost.'</td>
                      </tr>';              
        }
        $Tophtml.='<tr><td colspan="6"><div style="height:5pt;width:100%:"></div></td></tr>
            <tr><td colspan="6"><div style="width:100%;border-top:1pt dashed #8BB5D2;"></div></td></tr>
            <tr>
                <td align="right" colspan="3"><p class="bal_due" style="font-family:helvetica,sans serif;font-weight:normal;font-size:13pt;color:#000;">Total Amount</p></td>
                <td colspan="3" align="right"><p class="tot_amt" style="font-family:helvetica,sans serif;font-size:13pt;color:#000;">USD ' . number_format($paid_package_info[0]['amount'], 2) . '</p></td>
            </tr>

            </table>
            </td></tr> </table>';
         $html = $Tophtml . $Middle_html . $Endhtml; //
        
        
        ob_clean();
        $filename = $business_name . '_' . Commonfunction::convertphpdate('d-m-Y', $paid_package_info[0]['createddate']) . '_' . $paid_package_info[0]['purchase_inv_id'];
        $filepath = DOCROOT . "public/" . UPLOADS . "/cloud_invoice/" . $filename;
        $generate_pdf = $package->send_pdf($html, $filepath);
        if ($generate_pdf == 1) {
            $attachment = $filepath . '.pdf';
        }
        $mail = "";
        $to = $email;
        $replace_variables = array(
            REPLACE_LOGO => EMAILTEMPLATELOGO,
            REPLACE_SITENAME => CLOUD_SITENAME,
            REPLACE_USERNAME => $name,
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
        //~ $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'package/invoice_success.html', $replace_variables);

        /* Added for language email template */
        $emailTemp = $this->commonmodel->get_email_template('invoice_success');
		if(isset($emailTemp['status']) && ($emailTemp['status'] == '1')){
			
			$email_description = isset($emailTemp['description']) ? $emailTemp['description']: '';
			$subject = isset($emailTemp['subject']) ? $emailTemp['subject']: '';
			$message           = $this->emailtemplate->emailtemplate($email_description, $replace_variables);
			$from              = CONTACT_EMAIL;			
			//~ $subject = __('payment_made_success');
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
    }

    /**
     * Payment gateway related - create hashing for payment gateway
     * @param double $chargetotal
     * @param int $Currency
     * @param int $storeId
     * @param varchar $sharedSecret
     * @return type
     */
    public function createHash($chargetotal, $Currency, $storeId, $sharedSecret) {
        // Please change the store Id to your individual Store ID
        // NOTE: Please DO NOT hardcode the secret in that script. For example read it from a database.
        $stringToHash = $storeId . $this->getDateTime() . $chargetotal . $Currency . $sharedSecret;
        $ascii = bin2hex($stringToHash);
        return sha1($ascii);
    }

    /**
     * Payment Gateway Related Functionalities - Get current date time    
     * @return currentdatetime
     */
    public function getDateTime() {
        date_default_timezone_set('Asia/Kolkata');
        $dateTime = date('Y:m:d-H:i:s');
        return $dateTime;
    }

    /**
     * Cancel Order
     */
    public function action_cancel_order() {
        $package = Model::factory('package');
        $get_package_paid_info = $package->get_package_paid_info();
        $this->template->title = CLOUD_SITENAME . ' | Cancel Order';
        $this->meta_description = "";
        $this->template->content = View::factory(ADMINVIEW . "/package_plan/cancel_order")
                ->bind('package_info', get_package_paid_info);
    }

    /**
     * Cloud Account information
     */
    public function action_account() {
        $package = Model::factory('package');
        $get_admin_info = $package->getadmin_profile_info();
        $get_site_info = $package->get_site_info();
        $get_paid_info = $package->get_package_paid_info();

        $check_current_driver_count = $package->check_current_driver_count();

        if (isset($check_current_driver_count[0]['_id'])) {
            $total_driver_count = count($check_current_driver_count);
        } else {
            $total_driver_count = 0;
        }

        $this->template->title = CLOUD_SITENAME . ' | ' . _('account_info');
        $this->selected_page_title = __("account_info");
        $this->template->page_title = __('account_info');
        $this->meta_description = "";
        $this->template->content = View::factory("admin/package_plan/account")
                ->bind('admin_info', $get_admin_info)
                ->bind('get_site_info', $get_site_info)
                ->bind('total_driver_count', $total_driver_count)
                ->bind('get_paid_info', $get_paid_info);
    }

    /**
     * Add credit card information 
     */
    public function action_addcreditcard() {
        $package = Model::factory('package');
        $btn_card_confirm = arr::get($_REQUEST, 'btn_card_confirm');
        $config_country['taxicountry'] = $this->country_info();
        $this->session = Session::instance();
        $errors = array();
        $userid = $this->session->get('userid');
        $postvalue = Arr::map('trim', $this->request->post());

        //$getadmin_profile_info = $package->getadmin_profile_info();
        $email=$this->session->get('email');        
        if($email==''){
            Message::error(__('login_access'));
            $this->request->redirect(URL_BASE.'admin/login');
                    
        }

        $post_values = Securityvalid::sanitize_inputs($postvalue);
        $billing_card_info_details = $package->billing_card_info_details();
       $billing_info_id = isset($billing_card_info_details[0]['_id'])?$billing_card_info_details[0]['_id']:'';
        if (isset($btn_card_confirm) && Validation::factory($_POST)) {
            $validator = $package->upgrade_plan_validate(arr::extract($post_values, array('cardnumber', 'cvv', 'expirydate', 'firstName', 'lastname', 'address', 'postal_code', 'terms', 'country', 'state', 'city')), $userid);
            if ($validator->check()) {
                $cardnumber = $postvalue['cardnumber'];
                $cvv = $postvalue['cvv'];
                $expirydate = explode('/', $postvalue['expirydate']);
                $firstname = $postvalue['firstName'];
                $lastname = $postvalue['lastname'];
                $address = $postvalue['address'];
                $city = $postvalue['city'];
                $country = $postvalue['country'];
                $state = $postvalue['state'];
                $postal_code = $postvalue['postal_code'];
                $customer_id= isset($billing_card_info_details[0]['customer_id'])?$billing_card_info_details[0]['customer_id']:'';
                $package_upgrade_time = PACKAGE_UPGRADE_TIME;
                $cardnumber = preg_replace('/\s+/', '', $cardnumber);
                
                $this->billing_info['card_number'] = $cardnumber;
                $this->billing_info['cvv'] = $cvv;
                $this->billing_info['expirationMonth'] = $expirydate[0];
                $this->billing_info['expirationYear'] = $expirydate[1];
                $this->billing_info['firstName'] = $firstname;
                $this->billing_info['lastname'] = $lastname;
                $this->billing_info['address'] = $address;
                $this->billing_info['city'] = $city;
                $this->billing_info['country'] = $country;
                $this->billing_info['state'] = $state;
                $this->billing_info['postal_code'] = $postal_code;
                $this->billing_info['createdate'] = $package_upgrade_time;                
                $this->billing_info['currency']=CLOUD_CURRENCY_FORMAT;  
                $this->billing_info['email']=$email;
                if(empty($billing_info_id)) {                    
                    $customer_info=Cloudpayment::cloudpayment_createcustomer($this->billing_info);
                    $this->billing_info['customer_id']=$customer_info['customer_id'];
                } else {                     
                    $this->billing_info['customer_id']=$customer_id;
                    $customer_info=Cloudpayment::cloudpayment_updatecustomer($this->billing_info);
                  
                }
                $billing_info_reg = $package->billing_registration($this->billing_info, $billing_info_id);
                
                
                if ($billing_info_reg) {
                    Message::success(__('billing_updated_sucessfully'));
                }
            } else {
                $errors = $validator->errors('errors');            
                
            }
        }
        $view = View::factory(ADMINVIEW . 'package_plan/addcreditcard')
                ->bind('postedvalues', $this->userPost)
                ->bind('errors', $errors)                
                ->bind('subscription_cost_month', $subscription_cost_month)
                ->bind('billing_card_info_details', $billing_card_info_details)
                ->bind('all_country_list', $config_country['taxicountry'])
                ->bind('setup_cost', $setup_cost)
                ->bind('postvalue', $post_values);
        $this->template->title = CLOUD_SITENAME . " | " . __('add_credit_card');
        $this->template->page_title = __('add_credit_card');
        $this->template->content = $view;
    }

    /**
     *  Completed account transaction amount details
     */
    public function action_account_summary() {
        $package = Model::factory('package');
        $paid_amount = $package->total_paid_amount();        
        $this->template->title = CLOUD_SITENAME . ' | Account';        
        $this->template->page_title = __('account_info');
        $this->meta_description = "";
        $this->template->content = View::factory("admin/package_plan/account_summary")
                ->bind('paid_amount', $paid_amount);
    }

    /**
     * All transaction summary details
     */
    public function action_account_summary_details() {
        $user_createdby = $_SESSION['userid'];
        $usertype = $_SESSION['user_type'];
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title = __('account_summary_details');
        $this->selected_page_title = __('account_summary_details');
        $package = Model::factory('package');
        $count_package_info = $package->count_package_info();
        //pagination loads here
        //-------------------------
        $page_no = isset($_GET['page']) ? $_GET['page'] : 0;

        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset = REC_PER_PAGE * ($page_no - 1);

        $pag_data = Pagination::factory(array(
                    'current_page' => array('source' => 'query_string', 'key' => 'page'),
                    'items_per_page' => REC_PER_PAGE,
                    'total_items' => $count_package_info,
                    'view' => 'pagination/punbb',
        ));
        $all_package_info_list = $package->all_package_info_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //Find page action in view
        $action = $this->request->action();
        //send data to view file 
        $view = View::factory(ADMINVIEW . 'package_plan/account_summary_details')
                ->bind('all_package_info_list', $all_package_info_list)
                ->bind('pag_data', $pag_data)
                ->bind('srch', $_REQUEST)
                ->bind('Offset', $offset);
        $this->template->title = CLOUD_SITENAME . " | " . __('account_summary_details');
        $this->template->page_title = __('account_summary_details');
        $this->template->content = $view;
    }

    /**
     *  Completed account per transaction details
     */
    public function action_account_transaction() {
        $package = Model::factory('package');
        $invoice_id = explode('/', $_SERVER['REQUEST_URI']);
        $transaction_info = $package->account_transaction($invoice_id[3]);
        $this->template->title = CLOUD_SITENAME . ' | Account';
        $this->template->page_title = __('account_transaction_details');
        $this->meta_description = "";
        $this->template->content = View::factory("admin/package_plan/account_transaction")
                ->bind('transaction_info', $transaction_info);
    }

    /**
     * Pick a account plan
     */
    public function action_account_plan() {
        if(PACKAGE_TYPE!=3){
        $view = View::factory(ADMINVIEW . 'package_plan/account_plan');
        $this->template->title = CLOUD_SITENAME . " | " . __('account_plan');
        $this->template->page_title = __('account_plan');
        $this->template->content = $view;
    }else{
            Message::ERROR('you have not authorize to access');
            $this->request->redirect(URL_BASE.'package/home');
        }
    }

    /**
     * Billing information details - Before payment gateway
     */
       
     public function action_billing_info() {
        $package = Model::factory('package');
        $upgrade_plan = arr::get($_REQUEST, 'btn_confirm');
        $config_country['taxicountry'] = $this->country_info();

        $this->session = Session::instance();
        $errors = array();
        $userid = $this->session->get('userid');
        $postvalue = Arr::map('trim', $this->request->post());
        if (isset($_POST['package_type'])) {
            if ($_POST['package_type'] < PACKAGE_TYPE) {
                Message::error(__('downgrade_not_allowed'));
                $this->request->redirect('package/account_plan');
            }
            $this->session->set('package_type', $_POST['package_type']);
        }
        $getadmin_profile_info = $package->getadmin_profile_info();

        $get_site_info = $package->get_site_info();

        if (isset($get_site_info[0]['domain_name'])) {
            $business_name = $get_site_info[0]['domain_name'];
        } else {
            $business_name = '';
        }
        $package_type_session = $this->session->get('package_type');
        $setup_cost = 0.00;
        if(PACKAGE_TYPE==0){
        $setup_cost = 1000.00;
        }
        if ($package_type_session == 1) {
            $subscription_cost_month = 250.00;
            $driver_count = 20;
        } else if ($package_type_session == 2) {
            $subscription_cost_month = 750.00;
            $driver_count = 75;
        } else {
            $subscription_cost_month = '';
            Message::error(__('invalid_access'));
            $this->request->redirect('package/account_plan');
        }

        $post_values = Securityvalid::sanitize_inputs($postvalue);
        //$get_country_from_ip=$package->get_country_from_ip();


        $billing_card_info_details = $package->billing_card_info_details();
        if (empty($billing_card_info_details)) {
            $billing_info_id = '';
        } else {
            $billing_info_id = $billing_card_info_details[0]['_id'];
        }
        if (isset($upgrade_plan) && Validation::factory($_POST)) {
            $validator = $package->upgrade_plan_validate(arr::extract($post_values, array('cardnumber', 'cvv', 'expirydate', 'firstName', 'lastname', 'address', 'postal_code', 'terms', 'city', 'state', 'country')), $userid);
            if ($validator->check()) {
                $billing_options = $postvalue['billing-options'];
                $cardnumber = $postvalue['cardnumber'];
                $cvv = $postvalue['cvv'];
                $expirydate = $postvalue['expirydate'];
                $firstname = $postvalue['firstName'];
                $lastname = $postvalue['lastname'];
                $address = $postvalue['address'];
                $city = $postvalue['city'];
                $country = $postvalue['country'];
                $state = $postvalue['state'];
                $postal_code = $postvalue['postal_code'];
                if ($subscription_cost_month != '') {
                    $package_upgrade_time = PACKAGE_UPGRADE_TIME;
                    //$current_time=CURRENT_TIMEZONE_DATE;
                    if ($billing_options == 1) {
                        $subscription_cost = $subscription_cost_month;
                        $expiry_date_time = date('Y-m-d', strtotime($package_upgrade_time . ' + 30 days'));
                        $expiry_date_time = new DateTime($expiry_date_time);
                        $expiry_date_time = $expiry_date_time->format('F j, Y');
                    } elseif ($billing_options == 2) {
                        $subscription_cost = $subscription_cost_month * 10;
                        $expiry_date_time = date('Y-m-d', strtotime($package_upgrade_time . ' + 1 year'));
                        $expiry_date_time = new DateTime($expiry_date_time);
                        $expiry_date_time = $expiry_date_time->format('F j, Y');
                    } elseif ($billing_options == 3) {
                        $subscription_cost = $subscription_cost_month * 20;
                        $expiry_date_time = date('Y-m-d', strtotime($package_upgrade_time . ' + 2 year'));
                        $expiry_date_time = new DateTime($expiry_date_time);
                        $expiry_date_time = $expiry_date_time->format('F j, Y');
                    } elseif ($billing_options == 4) {
                        $subscription_cost = $subscription_cost_month * 30;
                        $expiry_date_time = date('Y-m-d', strtotime($package_upgrade_time . ' + 3 year'));
                        $expiry_date_time = new DateTime($expiry_date_time);
                        $expiry_date_time = $expiry_date_time->format('F j, Y');
                    }
                }
                if ($country == 'India') {
                    $cloud_service_tax=CLOUD_SERVICE_TAX;
                    $service_tax = (CLOUD_SERVICE_TAX / 100);
                    $total_cost = ($subscription_cost + $setup_cost);
                    $service_tax_cost = $total_cost * $service_tax;
                    $plan_amt = $total_cost + $service_tax_cost;
                } else {
                    $plan_amt = $subscription_cost + $setup_cost;
                    $cloud_service_tax=0;
                }

                $this->userPost['subscription_cost'] = $subscription_cost;
                $this->userPost['setup_cost'] = $setup_cost;
                $this->userPost['total_amount'] = $plan_amt;
                $this->userPost['package_type'] = $package_type_session;
                $this->userPost['driver_count'] = $driver_count;
                $this->userPost['payment_terms'] = $billing_options;
                $this->userPost['name'] = $getadmin_profile_info['name'] . " " . $getadmin_profile_info['lastname'];
                $this->userPost['email'] = $getadmin_profile_info['email'];
                $this->userPost['phone'] = $getadmin_profile_info['phone'];
                $this->userPost['pay_amount_code'] = 'USD';
                $this->userPost['currency'] = 'USD';
                $this->userPost['product_id'] = 1;
                $this->userPost['createdate'] = $package_upgrade_time;
                $this->userPost['startdate'] = $package_upgrade_time;
                $this->userPost['expirydate'] = $expiry_date_time;
                $this->userPost['billing-options'] = $billing_options;
                $this->userPost['business_name'] = $business_name;
                $this->userPost['country'] = $country;
                $this->userPost['city'] = $city;
                $this->userPost['state'] = $state;
                $this->userPost['postal_code'] = $postal_code;
                $this->userPost['address'] = $address;
                if (isset($service_tax_cost)) {
                    $this->userPost['service_tax_cost'] = $service_tax_cost;
                    $this->userPost['service_tax'] = CLOUD_SERVICE_TAX;
                }

                $cardnumber = preg_replace('/\s+/', '', $cardnumber);
                $this->userPost['card_number'] = $cardnumber;
                $this->userPost['cvv'] = $cvv;
                $expirydate = explode('/',$expirydate);
                $expiry_month = $expirydate[0];
                $expiry_year = $expirydate[1];
                $this->userPost['expirationMonth'] = $expiry_month;
                $this->userPost['expirationYear'] = $expiry_year;
                $this->userPost['firstName'] = $firstname;
                $this->userPost['lastname'] = $lastname;
                $this->userPost['address'] = $address;
                $this->userPost['city'] = $city;
                $this->userPost['country'] = $country;
                $this->userPost['state'] = $state;
                $this->userPost['postal_code'] = $postal_code;
                $this->userPost['createdate'] = $package_upgrade_time;
                $this->userPost['email'] = $getadmin_profile_info['email'];
                $this->userPost['currency'] = CLOUD_CURRENCY_FORMAT;
                
                $invoice_id = $package->payment_data($this->userPost);
                $billing_info = $package->billing_info_update($this->userPost, $invoice_id, $billing_info_id);

                $this->userPost['invoice_id'] = $invoice_id;


                //$this->session->set('payment_postvalues', $this->userPost);
                if ($invoice_id) {             
                    if(class_exists('Cloudpayment')){                    
                        $customer_id=isset($billing_card_info_details[0]['customer_id'])?$billing_card_info_details[0]['customer_id']:'';
                        if($customer_id==''){
                            $customer_info=Cloudpayment::cloudpayment_createcustomer($this->userPost,$cloud_service_tax);
                        }else{
                            if($billing_card_info_details[0]['customer_id']!=''){
                                $this->userPost['customer_id']=$billing_card_info_details[0]['customer_id'];
                            $customer_info=Cloudpayment::cloudpayment_updatecustomer($this->userPost,$cloud_service_tax);
                            }else{
                                 $customer_info=Cloudpayment::cloudpayment_createcustomer($this->userPost,$cloud_service_tax);
                            }
                        }                       
                        
                                                
                        if($customer_info['data_response']==1){   
                             $get_recent_package_info=$package->get_recent_package_paid_info();
                             $recent_subscription_id= isset($get_recent_package_info[0]['subscription_id'])?$get_recent_package_info[0]['subscription_id']:'';
                            if(count($get_recent_package_info)>0 && $recent_subscription_id!=''){
                                $customer_unsubscribe=Cloudpayment::cancel_subscription($recent_subscription_id,$this->userPost['package_type'].'_'.$billing_options);
                            } 
                            
                                  $customer_subscribe=Cloudpayment::create_subscription($customer_info['customer_id'],$this->userPost['package_type'].'_'.$billing_options,$cloud_service_tax);
                                  $this->userPost['data_response']=$customer_subscribe['data_response'];
                                  if($customer_subscribe['data_response']==1){
                                                                        
                                      $this->userPost['data_response']=$customer_subscribe['data_response'];
                                      $this->userPost['subscription_id']=$customer_subscribe['subscription_id'];
                                      $this->userPost['customer_id']=$customer_subscribe['customer_id'];
                                      
                                      $this->cloudpaymentsuccess($this->userPost);
                                      $this->session->set("payment_postvalues", $this->userPost);                                      
                                      $this->request->redirect('package/cloudpaymentstatus');
                                      
                                  }else{
                                      //$this->request->redirect('package/cloudpaymentfailure');
                                      $this->userPost['data_response']=$customer_subscribe['data_response'];
                                      $this->userPost['subscription_id']='';
                                      $this->userPost['customer_id']='';
                                      $this->cloudpaymentfailure($this->userPost);
                                      $this->session->set("payment_postvalues", $this->userPost);                                      
                                      $this->request->redirect('package/cloudpaymentstatus');
                                  }
                                                         
                        }else{
                            $this->cloudpaymentfailure($this->userPost);
                            Message::error($customer_info['actual_response']);
                            
                        }
                       /* }else{
                            $subscription_id=$get_recent_package_info[0]['subscription_id'];
                             $customer_subscribe=Cloudpayment::update_subscription($subscription_id,$this->userPost['package_type'].'_'.$billing_options,$cloud_service_tax);
                             if($customer_subscribe['data_response']==1){
                                 $this->userPost['data_response']=$customer_subscribe['data_response'];
                                   $this->userPost['subscription_id']=$customer_subscribe['subscription_id'];
                                      $this->userPost['customer_id']=$customer_subscribe['customer_id'];
                                      
                                      $this->cloudpaymentsuccess($this->userPost);
                                      $this->session->set("payment_postvalues", $this->userPost);                                      
                                      $this->request->redirect('package/cloudpaymentstatus');
                             }else{
                                 $this->userPost['data_response']=$customer_subscribe['data_response'];
                                 $this->userPost['subscription_id']='';
                                      $this->userPost['customer_id']='';
                                      $this->cloudpaymentfailure($this->userPost);
                                      $this->session->set("payment_postvalues", $this->userPost);                                      
                                      $this->request->redirect('package/cloudpaymentstatus');
                             }
                        }*/
                    }else{
                         $this->request->redirect('/package/invalidrequest');
                    }
            
                } else {
                    $this->request->redirect('/package/invalidrequest');
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }




        $view = View::factory(ADMINVIEW . 'package_plan/billing_info')
                ->bind('postedvalues', $this->userPost)
                ->bind('errors', $errors)
                ->bind('getadmin_profile_info', $getadmin_profile_info)
                ->bind('subscription_cost_month', $subscription_cost_month)
                ->bind('billing_card_info_details', $billing_card_info_details)
                ->bind('setup_cost', $setup_cost)
                ->bind('business_name', $business_name)
                ->bind('all_country_list', $config_country['taxicountry'])
                ->bind('postvalue', $post_values);

        $this->template->title = CLOUD_SITENAME . " | " . __('billing_info');
        $this->template->page_title = __('billing_info');
        $this->template->content = $view;
    }
    
    /**
     * Custom and default Language and color code files upload page
     */
    public function action_preferences() {
        $package = Model::factory('package');
        $get_langcolor_info = $package->get_langcolor_info();
        $this->template->meta_description = CLOUD_SITENAME . " | Preferences ";
        $this->template->meta_keywords = CLOUD_SITENAME . " | Preferences ";
        $this->template->title = CLOUD_SITENAME . " | " . __('Preferences');
        $this->template->page_title = __('Preferences');
        $this->template->content = View::factory("admin/package_plan/preferences")->bind('langcolor_info', $get_langcolor_info);
    }

    /**
     * Account home page
     */
    public function action_home() {
        $package = Model::factory('package');
        $get_admin_info = $package->getadmin_profile_info();
        $get_site_info = $package->get_site_info();
        $get_payment_gateway_info = $package->get_payment_gateway_info();
        if (isset($get_payment_gateway_info['payment_gatway'])) {
            $payment_gateway = $get_payment_gateway_info['payment_gatway'];
        } else {
            $payment_gateway = '';
        }

        $this->template->title = CLOUD_SITENAME . " | " . __('account_breadcrumb');
        $this->template->page_title = __('account_breadcrumb');
        $this->meta_description = "";
        $this->template->content = View::factory("admin/package_plan/home")
                ->bind('admin_info', $get_admin_info)
                ->bind('get_site_info', $get_site_info)
                ->bind('get_payment_gateway_info', $payment_gateway);
    }

    /**
     * Custom web language file upload
     */
    public function action_web_language() {
        /*Message::error("For security purpose, we are blocking the customer to upload customized file in the trail pack");
        $this->request->redirect('/package/preferences');*/
        $package = Model::factory('package');
        $errors = array();
        $postvalue = $this->request->post();
        $action = $this->request->action();
        if(isset($postvalue['dynamic_lang']) && $postvalue['dynamic_lang']!=""){
            $dynamic_lang = $postvalue['dynamic_lang'];
        }
        $language_setting_array = WEB_DB_LANGUAGE;
        if (isset($postvalue['web_lang_radio']) && $postvalue['web_lang_radio'] == 2 && Validation::factory(array_merge($_FILES,$postvalue))) {
            $validator = $package->validate_web_language(array_merge($_FILES,$postvalue));
            if ($validator->check()) {
                $get_site_info=$package->get_site_info();
                $domain_name=$get_site_info[0]['domain_name'];
                if (!empty($_FILES['web_language_file']['name'])) {
                    $image_type = explode('.', $_FILES['web_language_file']['name']);
                    $image_type = end($image_type);
                    $image_name = $dynamic_lang.'_customize.' . $image_type;
                    $fileName = $dynamic_lang.'_customize.xml';
                    
                    $target_path=CUSTOMLANGPATH.'i18n/';
					if (!is_dir($target_path) ) {
						Message::error(__('mentioned directory not available'));
						$this->request->redirect('/package/preferences');
					}
                    
                    $illegal_words = array('unlink', 'unset', 'exit;', 'break;');
                    $file_handle = fopen($_FILES['web_language_file']['tmp_name'], "r");
                    while (!feof($file_handle)) {
                        $line_of_text = fgets($file_handle);
                        if ($this->match($illegal_words, strtolower($line_of_text))) {
                            Message::error(__('faile_upload_changes_made_info'));
                            $this->request->redirect('/package/preferences');
                        }
                    }
                    fclose($file_handle);
                    
                   

                   /* if (file_exists($target_path . $image_name) && file_exists($target_path . $fileName)) {
                        rename($target_path . $image_name, $target_path . 'en_customize.php');
                    } elseif (file_exists($target_path . $image_name)) {
                        rename($target_path . $image_name, $target_path . $fileName);
                    }*/
                    if (file_exists($target_path . $image_name)) {
                        unlink($target_path . $image_name);
                    }
                    
                    move_uploaded_file($_FILES['web_language_file']['tmp_name'], $target_path . $image_name);
                    //rename($target_path . $image_name, $target_path . $fileName);
                    chmod($target_path . $image_name, 0777);
					try {
						$xml_source = str_replace(array("&amp;", "&"), array("&", "&amp;"), file_get_contents($target_path.$image_name));
						$xml_system = simplexml_load_string($xml_source);
					} catch (Exception $ex) {
						throw new Exception($ex);
						//Message::error(__('fail_upload_checkfile_error_info'));
						//$this->request->redirect('/package/preferences');
					}
                    
					$child_array='';
					
					# define fields which are php variables in language			
					$langFields = array("$"."site_name" => SITE_NAME, 
								"date('Y')" => date('Y'), 
								"UNIT_NAME" => UNIT_NAME, 
								"URL_BASE" => URL_BASE, 
								"CURRENCY" => CURRENCY,
								"COMPANY_SITENAME" => COMPANY_SITENAME, 
								"COMPANY_CUSTOMER_APP_URL" => COMPANY_CUSTOMER_APP_URL, 
								"COMPANY_DRIVER_APP_URL" => COMPANY_DRIVER_APP_URL, 
								"$"."_SERVER['HTTP_HOST']" => $_SERVER['HTTP_HOST']
							);
                     
                     foreach ($xml_system->children()->string as $value) {           
                        
                        $name=(string)$value['name'];
                        
						foreach($langFields as $key => $replaceValue){
							# check lang fields in value and replace
							if (strpos($value, $key) !== false) {
								//echo $value;
								$value = str_replace($key, $replaceValue, $value);
							}
						}
											

                        $value_string=(string) ($value);
                        $value_string=htmlentities($value_string);
                        $value_string= str_replace('"', "'", $value_string);
                        $child_array.='"'.$name.'"'.'=>'.'"'. $value_string.'"'.',';
                     }      
                     //exit;
                     
                     if (file_exists($target_path .$dynamic_lang.'.php')) {
                        unlink($target_path.$dynamic_lang.'.php');
                    }
                     
                    $string="<?php defined('SYSPATH') or die('No direct script access.');"
                            . "return ";
                    
                    $fp = fopen($target_path.$dynamic_lang.'.php', 'w');
                    chmod($target_path . $dynamic_lang.'.php', 0777);
                    fwrite($fp, print_r($string, TRUE));
                    fwrite($fp, print_r('['.$child_array.']', TRUE));
                    fwrite($fp, print_r(';', TRUE));
                    fclose($fp);
                    
                    $language_setting_array[$dynamic_lang] = 2;
                    $data = array('website_language_settings', $language_setting_array);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    Message::error(__('fail_upload_error_info'));
                    $this->request->redirect('/package/preferences');
                }
            } else {
                $errors = $validator->errors('errors');
                Message::error(__('file_upload_warning_info'));
            }
        } else {
            if (isset($postvalue['web_lang_radio']) && $postvalue['web_lang_radio'] == 1) {
                $validator = $package->validate_web_language($postvalue);
                if ($validator->check()) {
                    $language_setting_array[$dynamic_lang] = 1;
                    $data = array('website_language_settings', $language_setting_array);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_default_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    $errors = $validator->errors('errors');
                    Message::error(__('fail_upload_default_info'));
                }
            } else {
                Message::error(__('fail_upload_default_info'));
                $this->request->redirect('/package/preferences');
            }
        }
        $this->template->meta_description = CLOUD_SITENAME . " | Preferences ";
        $this->template->meta_keywords = CLOUD_SITENAME . " | Preferences ";
        $this->template->title = CLOUD_SITENAME . " | " . __('Preferences');
        $this->template->page_title = __('Preferences');
        $this->template->content = View::factory("admin/package_plan/preferences")->bind('action', $action)->bind('postvalue', $postvalue)->bind('errors', $errors);
    }

    public function match($needles, $haystack) {
        foreach ($needles as $needle) {
            if (strpos($haystack, $needle) !== false) {
                return true;
            }
        }
        return false;
    }

    /**
     * Custom IOS language & color code upload
     */
    public function action_ios_language_colorcode() {
        $package = Model::factory('package');
        $errors = array();
        $postvalue = $this->request->post();
        $action = $this->request->action();
        if(isset($postvalue['dynamic_lang']) && $postvalue['dynamic_lang']!=""){
            $dynamic_lang = $postvalue['dynamic_lang'];
            $dynamic_lang_name = ucfirst(DYNAMIC_LANGUAGE_ARRAY[$dynamic_lang]);
        }
        $ios_db_driver_lang = IOS_DRIVER_LANG;
        $ios_db_passenger_lang = IOS_PASSENGER_LANG;
        $ios_db_driver_colorcode = IOS_DRIVER_COLORCODE;
        $ios_db_passenger_colorcode = IOS_PASSENGER_COLORCODE;
        if (isset($postvalue['ios_driver_lang_radio']) && $postvalue['ios_driver_lang_radio'] == 2 && Validation::factory(array_merge($_FILES,$postvalue))) {
            $validator = $package->validate_ios_driver_language(array_merge($_FILES,$postvalue));
            if ($validator->check()) {
                if (!empty($_FILES['ios_driver_language_file']['name'])) {
                    $image_type = explode('.', $_FILES['ios_driver_language_file']['name']);
                    $image_type = end($image_type);
                    $image_name = 'Localizable_'.$dynamic_lang_name.'.' . $image_type;
                    $fileName = 'Localizable_'.$dynamic_lang_name.'_default.strings';
                    $org_target_path = DOCROOT . SAMPLE_IOS_LANG_FILES . 'driver/';
                    $default_target_path = DOCROOT . IOS_DEFAULT_CUSTOMIZE_FILES . 'driver/';
                    if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . $fileName)) {
                        rename($org_target_path . $image_name, $default_target_path . 'Localizable_'.$dynamic_lang_name.'_customize.strings');
                    } elseif (file_exists($org_target_path . $image_name)) {
                        rename($org_target_path . $image_name, $default_target_path . $fileName);
                    }
                    move_uploaded_file($_FILES['ios_driver_language_file']['tmp_name'], $org_target_path . $image_name);
                    chmod($org_target_path . $image_name, 0777);
                    $ios_db_driver_lang[$dynamic_lang] = 2;
                    $data = array('ios_driver_language_settings', $ios_db_driver_lang);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    Message::error(__('fail_upload_error_info'));
                    //$this->request->redirect('/package/preferences');
                }
            } else {
                $errors = $validator->errors('errors');
                Message::error(__('file_upload_warning_info'));
            }
        } elseif (isset($postvalue['ios_driver_lang_radio']) && $postvalue['ios_driver_lang_radio'] == 1) {
             $validator = $package->validate_web_language($postvalue);
                if ($validator->check()) {
                    $image_name = 'Localizable_'.$dynamic_lang_name.'.strings';
                    $org_target_path = DOCROOT . SAMPLE_IOS_LANG_FILES . 'driver/';
                    $default_target_path = DOCROOT . IOS_DEFAULT_CUSTOMIZE_FILES . 'driver/';
                    if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . 'Localizable_'.$dynamic_lang_name.'_default.strings')) {
                        rename($org_target_path . $image_name, $default_target_path . 'Localizable_'.$dynamic_lang_name.'_customize.strings');
                        rename($default_target_path . 'Localizable_'.$dynamic_lang_name.'_default.strings', $org_target_path . $image_name);
                    }
                    $ios_db_driver_lang[$dynamic_lang] = 1;
                    $data = array('ios_driver_language_settings', $ios_db_driver_lang);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_default_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                }else {
                    $errors = $validator->errors('errors');
                    Message::error(__('fail_upload_default_info'));
                }
        } elseif (isset($postvalue['ios_passenger_lang_radio']) && $postvalue['ios_passenger_lang_radio'] == 2 && Validation::factory(array_merge($_FILES,$postvalue))) {
            $validator = $package->validate_ios_driver_language(array_merge($_FILES,$postvalue));
            if ($validator->check()) {
                if (!empty($_FILES['ios_passenger_language_file']['name'])) {
                    $image_type = explode('.', $_FILES['ios_passenger_language_file']['name']);
                    $image_type = end($image_type);
                    $image_name = 'Localizable_'.$dynamic_lang_name.'.' . $image_type;
                    $fileName = 'Localizable_'.$dynamic_lang_name.'_default.strings';
                    $org_target_path = DOCROOT . SAMPLE_IOS_LANG_FILES . 'passenger/';
                    $default_target_path = DOCROOT . IOS_DEFAULT_CUSTOMIZE_FILES . 'passenger/';
                    if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . $fileName)) {
                        rename($org_target_path . $image_name, $default_target_path . 'Localizable_'.$dynamic_lang_name.'_customize.strings');
                    } elseif (file_exists($org_target_path . $image_name)) {
                        rename($org_target_path . $image_name, $default_target_path . $fileName);
                    }
                    move_uploaded_file($_FILES['ios_passenger_language_file']['tmp_name'], $org_target_path . $image_name);
                    chmod($org_target_path . $image_name, 0777);
                    $ios_db_passenger_lang[$dynamic_lang] = 2;
                    $data = array('ios_passenger_language_settings', $ios_db_passenger_lang);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    Message::error(__('fail_upload_error_info'));
                    //$this->request->redirect('/package/preferences');
                }
            } else {
                $errors = $validator->errors('errors');
                Message::error(__('file_upload_warning_info'));
            }
        } elseif (isset($postvalue['ios_passenger_lang_radio']) && $postvalue['ios_passenger_lang_radio'] == 1) {
            $image_name = 'Localizable_'.$dynamic_lang_name.'.strings';
            $org_target_path = DOCROOT . SAMPLE_IOS_LANG_FILES . 'passenger/';
            $default_target_path = DOCROOT . IOS_DEFAULT_CUSTOMIZE_FILES . 'passenger/';
            if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . 'Localizable_'.$dynamic_lang_name.'_default.strings')) {
                rename($org_target_path . $image_name, $default_target_path . 'Localizable_'.$dynamic_lang_name.'_customize.strings');
                rename($default_target_path . 'Localizable_'.$dynamic_lang_name.'_default.strings', $org_target_path . $image_name);
            }
            $ios_db_passenger_lang[$dynamic_lang] = 1;
            $data = array('ios_passenger_language_settings', $ios_db_passenger_lang);
            $status = $package->update_language_colorcode($data);
            Message::success(__('file_default_upload_succ_info'));
            $this->request->redirect('/package/preferences');
        } elseif (isset($postvalue['ios_driver_colorcode_radio']) && $postvalue['ios_driver_colorcode_radio'] == 2 && Validation::factory(array_merge($_FILES,$postvalue))) {
            $validator = $package->validate_ios_driver_language(array_merge($_FILES,$postvalue));
            if ($validator->check()) {
                if (!empty($_FILES['ios_driver_colorcode_file']['name'])) {
                    $image_type = explode('.', $_FILES['ios_driver_colorcode_file']['name']);
                    $image_type = end($image_type);
                    $image_name = 'DriverAppColor.' . $image_type;
                    $fileName = 'DriverAppColor_default.xml';
                    $org_target_path = DOCROOT . SAMPLE_IOS_COLORCODE_FILES;
                    $default_target_path = DOCROOT . IOS_DEFAULT_CUSTOMIZE_FILES;
                    if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . $fileName)) {
                        rename($org_target_path . $image_name, $default_target_path . 'DriverAppColor_customize.xml');
                    } elseif (file_exists($org_target_path . $image_name)) {
                        rename($org_target_path . $image_name, $default_target_path . $fileName);
                    }
                    move_uploaded_file($_FILES['ios_driver_colorcode_file']['tmp_name'], $org_target_path . $image_name);
                    chmod($org_target_path . $image_name, 0777);
                    $ios_db_driver_colorcode[$dynamic_lang] = 2;
                    $data = array('ios_driver_colorcode_settings', $ios_db_driver_colorcode);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    Message::error(__('fail_upload_error_info'));
                    //$this->request->redirect('/package/preferences');
                }
            } else {
                $errors = $validator->errors('errors');
                Message::error(__('file_upload_warning_info'));
            }
        } elseif (isset($postvalue['ios_driver_colorcode_radio']) && $postvalue['ios_driver_colorcode_radio'] == 1) {
            $image_name = 'DriverAppColor.xml';
            $org_target_path = DOCROOT . SAMPLE_IOS_COLORCODE_FILES;
            $default_target_path = DOCROOT . IOS_DEFAULT_CUSTOMIZE_FILES;
            if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . 'DriverAppColor_default.xml')) {
                rename($org_target_path . $image_name, $default_target_path . 'DriverAppColor_customize.xml');
                rename($default_target_path . 'DriverAppColor_default.xml', $org_target_path . $image_name);
            }
            $ios_db_driver_colorcode[$dynamic_lang] = 1;
            $data = array('ios_driver_colorcode_settings', $ios_db_driver_colorcode);
            $status = $package->update_language_colorcode($data);
            Message::success(__('file_default_upload_succ_info'));
            $this->request->redirect('/package/preferences');
        } elseif (isset($postvalue['ios_passenger_colorcode_radio']) && $postvalue['ios_passenger_colorcode_radio'] == 2 && Validation::factory(array_merge($_FILES,$postvalue))) {
            $validator = $package->validate_ios_driver_language(array_merge($_FILES,$postvalue));
            if ($validator->check()) {
                if (!empty($_FILES['ios_passenger_colorcode_file']['name'])) {
                    $image_type = explode('.', $_FILES['ios_passenger_colorcode_file']['name']);
                    $image_type = end($image_type);
                    $image_name = 'PassengerAppColor.' . $image_type;
                    $fileName = 'PassengerAppColor_default.xml';
                    $org_target_path = DOCROOT . SAMPLE_IOS_COLORCODE_FILES;
                    $default_target_path = DOCROOT . IOS_DEFAULT_CUSTOMIZE_FILES;
                    if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . $fileName)) {
                        rename($org_target_path . $image_name, $default_target_path . 'PassengerAppColor_customize.xml');
                    } elseif (file_exists($org_target_path . $image_name)) {
                        rename($org_target_path . $image_name, $default_target_path . $fileName);
                    }
                    move_uploaded_file($_FILES['ios_passenger_colorcode_file']['tmp_name'], $org_target_path . $image_name);
                    chmod($org_target_path . $image_name, 0777);
                    $ios_db_passenger_colorcode[$dynamic_lang] = 2;
                    $data = array('ios_passenger_colorcode_settings', $ios_db_passenger_colorcode);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    Message::error(__('fail_upload_error_info'));
                    //$this->request->redirect('/package/preferences');
                }
            } else {
                $errors = $validator->errors('errors');
                Message::error(__('file_upload_warning_info'));
            }
        } elseif (isset($postvalue['ios_passenger_colorcode_radio']) && $postvalue['ios_passenger_colorcode_radio'] == 1) {
            $image_name = 'PassengerAppColor.xml';
            $org_target_path = DOCROOT . SAMPLE_IOS_COLORCODE_FILES;
            $default_target_path = DOCROOT . IOS_DEFAULT_CUSTOMIZE_FILES;
            if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . 'PassengerAppColor_default.xml')) {
                rename($org_target_path . $image_name, $default_target_path . 'PassengerAppColor_customize.xml');
                rename($default_target_path . 'PassengerAppColor_default.xml', $org_target_path . $image_name);
            }
            $ios_db_passenger_colorcode[$dynamic_lang] = 1;
            $data = array('ios_passenger_colorcode_settings', $ios_db_passenger_colorcode);
            $status = $package->update_language_colorcode($data);
            Message::success(__('file_default_upload_succ_info'));
            $this->request->redirect('/package/preferences');
        } else {
            Message::error(__('fail_upload_error_info'));
            // $this->request->redirect('/package/preferences');
        }

        $this->template->meta_description = CLOUD_SITENAME . " | Preferences ";
        $this->template->meta_keywords = CLOUD_SITENAME . " | Preferences ";
        $this->template->title = CLOUD_SITENAME . " | " . __('Preferences');
        $this->template->page_title = __('Preferences');
        $this->template->content = View::factory("admin/package_plan/preferences")->bind('action', $action)->bind('postvalue', $postvalue)->bind('errors', $errors);
    }

    /**
     * Custom Setup with Android Language & color code file upload
     */
    public function action_android_language_colorcode() {
        $package = Model::factory('package');
        $errors = array();
        $postvalue = $this->request->post();
        $action = $this->request->action();
        //echo '<pre>';print_r($postvalue);exit;
        if(isset($postvalue['dynamic_lang']) && $postvalue['dynamic_lang']!=""){
            $dynamic_lang = $postvalue['dynamic_lang'];
            $dynamic_lang_name = ucfirst(DYNAMIC_LANGUAGE_ARRAY[$dynamic_lang]);
        }
        $android_db_driver_lang = ANDROID_DRIVER_LANG;
        $android_db_passenger_lang = ANDROID_PASSENGER_LANG;
        $android_db_driver_colorcode = ANDROID_DRIVER_COLORCODE;
        $android_db_passenger_colorcode = ANDROID_PASSENGER_COLORCODE;
        if (isset($postvalue['android_driver_lang_radio']) && $postvalue['android_driver_lang_radio'] == 2 && Validation::factory(array_merge($_FILES,$postvalue))) {
            # customized language - driver
            $validator = $package->validate_android_driver_language(array_merge($_FILES,$postvalue));
            if ($validator->check()) {
                if (!empty($_FILES['android_driver_language_file']['name'])) {
                    $image_type = explode('.', $_FILES['android_driver_language_file']['name']);
                    $image_type = end($image_type);
                    $image_name = 'strings_'.$dynamic_lang_name.'.' . $image_type;
                    $fileName = 'strings_'.$dynamic_lang_name.'_default.xml';
                    $org_target_path = DOCROOT . SAMPLE_ANDROID_LANG_FILES . 'driver/';
                    $default_target_path = DOCROOT . ANDROID_DEFAULT_CUSTOMIZE_FILES . 'driver/';
                    if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . $fileName)) {
                        rename($org_target_path . $image_name, $default_target_path . 'strings_'.$dynamic_lang_name.'_customize.xml');
                    } elseif (file_exists($org_target_path . $image_name)) {
                        rename($org_target_path . $image_name, $default_target_path . $fileName);
                    }
                    move_uploaded_file($_FILES['android_driver_language_file']['tmp_name'], $org_target_path . $image_name);
                    chmod($org_target_path . $image_name, 0777);
                    $android_db_driver_lang[$dynamic_lang] = 2;
                    $data = array('android_driver_language_settings', $android_db_driver_lang);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    Message::error(__('fail_upload_error_info'));
                    //$this->request->redirect('/package/preferences');
                }
            } else {
                $errors = $validator->errors('errors');
                Message::error(__('file_upload_warning_info'));
            }
        } elseif (isset($postvalue['android_driver_lang_radio']) && $postvalue['android_driver_lang_radio'] == 1) {
            # default language - driver
            $image_name = 'strings_'.$dynamic_lang_name.'.xml';
            $org_target_path = DOCROOT . SAMPLE_ANDROID_LANG_FILES . 'driver/';
            $default_target_path = DOCROOT . ANDROID_DEFAULT_CUSTOMIZE_FILES . 'driver/';
            if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . 'strings_'.$dynamic_lang_name.'_default.xml')) {
                rename($org_target_path . $image_name, $default_target_path . 'strings_'.$dynamic_lang_name.'_customize.xml');
                rename($default_target_path . 'strings_'.$dynamic_lang_name.'_default.xml', $org_target_path . $image_name);
            }
            $android_db_driver_lang[$dynamic_lang] = 1;
            $data = array('android_driver_language_settings', $android_db_driver_lang);
            $status = $package->update_language_colorcode($data);
            Message::success(__('file_default_upload_succ_info'));
            $this->request->redirect('/package/preferences');
        } elseif (isset($postvalue['android_passenger_lang_radio']) && $postvalue['android_passenger_lang_radio'] == 2 && Validation::factory(array_merge($_FILES,$postvalue))) {
            # customized language - passenger
            $validator = $package->validate_android_driver_language(array_merge($_FILES,$postvalue));
            if ($validator->check()) {
                if (!empty($_FILES['android_passenger_language_file']['name'])) {
                    $image_type = explode('.', $_FILES['android_passenger_language_file']['name']);
                    $image_type = end($image_type);
                    $image_name = 'strings_'.$dynamic_lang_name.'.' . $image_type;
                    $fileName = 'strings_'.$dynamic_lang_name.'_default.xml';
                    $org_target_path = DOCROOT . SAMPLE_ANDROID_LANG_FILES . 'passenger/';
                    $default_target_path = DOCROOT . ANDROID_DEFAULT_CUSTOMIZE_FILES . 'passenger/';
                    if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . $fileName)) {
                        rename($org_target_path . $image_name, $default_target_path . 'strings_'.$dynamic_lang_name.'_customize.xml');
                    } elseif (file_exists($org_target_path . $image_name)) {
                        rename($org_target_path . $image_name, $default_target_path . $fileName);
                    }
                    move_uploaded_file($_FILES['android_passenger_language_file']['tmp_name'], $org_target_path . $image_name);
                    chmod($org_target_path . $image_name, 0777);
                    $android_db_passenger_lang[$dynamic_lang] = 2;
                    $data = array('android_passenger_language_settings', $android_db_passenger_lang);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    Message::error(__('fail_upload_error_info'));
                    //$this->request->redirect('/package/preferences');
                }
            } else {
                $errors = $validator->errors('errors');
                Message::error(__('file_upload_warning_info'));
            }
        } elseif (isset($postvalue['android_passenger_lang_radio']) && $postvalue['android_passenger_lang_radio'] == 1) {
            # default language - passenger
            $image_name = 'strings_'.$dynamic_lang_name.'.xml';
            $org_target_path = DOCROOT . SAMPLE_ANDROID_LANG_FILES . 'passenger/';
            $default_target_path = DOCROOT . ANDROID_DEFAULT_CUSTOMIZE_FILES . 'passenger/';
            if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . 'strings_'.$dynamic_lang_name.'_default.xml')) {
                rename($org_target_path . $image_name, $default_target_path . 'strings_'.$dynamic_lang_name.'_customize.xml');
                rename($default_target_path . 'strings_'.$dynamic_lang_name.'_default.xml', $org_target_path . $image_name);
            }
            $android_db_passenger_lang[$dynamic_lang] = 1;
            $data = array('android_passenger_language_settings', $android_db_passenger_lang);
            $status = $package->update_language_colorcode($data);
            Message::success(__('file_default_upload_succ_info'));
            $this->request->redirect('/package/preferences');
        } elseif (isset($postvalue['android_driver_colorcode_radio']) && $postvalue['android_driver_colorcode_radio'] == 2 && Validation::factory(array_merge($_FILES,$postvalue))) {
            # customized colorcode - driver
            $validator = $package->validate_android_driver_language(array_merge($_FILES,$postvalue));
            if ($validator->check()) {
                if (!empty($_FILES['android_driver_colorcode_file']['name'])) {
                    $image_type = explode('.', $_FILES['android_driver_colorcode_file']['name']);
                    $image_type = end($image_type);
                    $image_name = 'driverAppColors.' . $image_type;
                    $fileName = 'driverAppColors_default.xml';
                    $org_target_path = DOCROOT . SAMPLE_ANDROID_COLORCODE_FILES;
                    $default_target_path = DOCROOT . ANDROID_DEFAULT_CUSTOMIZE_FILES;
                    if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . $fileName)) {
                        rename($org_target_path . $image_name, $default_target_path . 'driverAppColors_customize.xml');
                    } elseif (file_exists($org_target_path . $image_name)) {
                        rename($org_target_path . $image_name, $default_target_path . $fileName);
                    }
                    move_uploaded_file($_FILES['android_driver_colorcode_file']['tmp_name'], $org_target_path . $image_name);
                    chmod($org_target_path . $image_name, 0777);
                    $android_db_driver_colorcode[$dynamic_lang] = 2;
                    $data = array('android_driver_colorcode_settings', $android_db_driver_colorcode);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    Message::error(__('fail_upload_error_info'));
                    //$this->request->redirect('/package/preferences');
                }
            } else {
                $errors = $validator->errors('errors');
                Message::error(__('file_upload_warning_info'));
            }
        } elseif (isset($postvalue['android_driver_colorcode_radio']) && $postvalue['android_driver_colorcode_radio'] == 1) {
            # default colorcode - driver
            $image_name = 'driverAppColors.xml';
            $org_target_path = DOCROOT . SAMPLE_ANDROID_COLORCODE_FILES;
            $default_target_path = DOCROOT . ANDROID_DEFAULT_CUSTOMIZE_FILES;
            if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . 'driverAppColors_default.xml')) {
                rename($org_target_path . $image_name, $default_target_path . 'driverAppColors_customize.xml');
                rename($default_target_path . 'driverAppColors_default.xml', $org_target_path . $image_name);
            }
            $android_db_driver_colorcode[$dynamic_lang] = 1;
            $data = array('android_driver_colorcode_settings', $android_db_driver_colorcode);
            $status = $package->update_language_colorcode($data);
            Message::success(__('file_default_upload_succ_info'));
            $this->request->redirect('/package/preferences');
        } elseif (isset($postvalue['android_passenger_colorcode_radio']) && $postvalue['android_passenger_colorcode_radio'] == 2 && Validation::factory(array_merge($_FILES,$postvalue))) {
            # customized colorcode - passenger
            $validator = $package->validate_android_driver_language(array_merge($_FILES,$postvalue));
            if ($validator->check()) {
                if (!empty($_FILES['android_passenger_colorcode_file']['name'])) {
                    $image_type = explode('.', $_FILES['android_passenger_colorcode_file']['name']);
                    $image_type = end($image_type);
                    $image_name = 'passengerAppColors.' . $image_type;
                    $fileName = 'passengerAppColors_default.xml';
                    $org_target_path = DOCROOT . SAMPLE_ANDROID_COLORCODE_FILES;
                    $default_target_path = DOCROOT . ANDROID_DEFAULT_CUSTOMIZE_FILES;
                    if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . $fileName)) {
                        rename($org_target_path . $image_name, $default_target_path . 'passengerAppColors_customize.xml');
                    } elseif (file_exists($org_target_path . $image_name)) {
                        rename($org_target_path . $image_name, $default_target_path . $fileName);
                    }
                    move_uploaded_file($_FILES['android_passenger_colorcode_file']['tmp_name'], $org_target_path . $image_name);
                    chmod($org_target_path . $image_name, 0777);
                    $android_db_passenger_colorcode[$dynamic_lang] = 2;
                    $data = array('android_passenger_colorcode_settings', $android_db_passenger_colorcode);
                    $status = $package->update_language_colorcode($data);
                    Message::success(__('file_upload_succ_info'));
                    $this->request->redirect('/package/preferences');
                } else {
                    Message::error(__('fail_upload_error_info'));
                    //$this->request->redirect('/package/preferences');
                }
            } else {
                $errors = $validator->errors('errors');
                Message::error(__('file_upload_warning_info'));
            }
        } elseif (isset($postvalue['android_passenger_colorcode_radio']) && $postvalue['android_passenger_colorcode_radio'] == 1) {
            # default colorcode - passenger
            $image_name = 'passengerAppColors.xml';
            $org_target_path = DOCROOT . SAMPLE_ANDROID_COLORCODE_FILES;
            $default_target_path = DOCROOT . ANDROID_DEFAULT_CUSTOMIZE_FILES;
            if (file_exists($org_target_path . $image_name) && file_exists($default_target_path . 'passengerAppColors_default.xml')) {
                rename($org_target_path . $image_name, $default_target_path . 'passengerAppColors_customize.xml');
                rename($default_target_path . 'passengerAppColors_default.xml', $org_target_path . $image_name);
            }
            $android_db_passenger_colorcode[$dynamic_lang] = 1;
            $data = array('android_passenger_colorcode_settings', $android_db_passenger_colorcode);
            $status = $package->update_language_colorcode($data);
            Message::success(__('file_default_upload_succ_info'));
            $this->request->redirect('/package/preferences');
        } else {
            Message::error(__('fail_upload_error_info'));
            //$this->request->redirect('/package/preferences');
        }
        $this->template->meta_description = CLOUD_SITENAME . " | Preferences ";
        $this->template->meta_keywords = CLOUD_SITENAME . " | Preferences ";
        $this->template->title = CLOUD_SITENAME . " | " . __('Preferences');
        $this->template->page_title = __('Preferences');
        $this->template->content = View::factory("admin/package_plan/preferences")->bind('action', $action)->bind('postvalue', $postvalue)->bind('errors', $errors);
    }

    /**
     * Setup with application payment gateway settings
     */
    public function action_payments() {
        $package = Model::factory('package');
        $postvalue = $errors = array();
        $postvalue = $this->request->post();
        $payment_gateway_id= isset($postvalue['payment_gateway_type'])?$postvalue['payment_gateway_type']:0;
        
        $payment_settings = $package->get_payment_details($payment_gateway_id);
        $paypal_payment_settings=$package->get_paypal_payment_details();
        //echo "<pre>"; print_r($payment_settings); exit;
        $this->template->meta_description = CLOUD_SITENAME . " | Payments ";
        $this->template->meta_keywords = CLOUD_SITENAME . " | Payments ";
        $this->template->title = CLOUD_SITENAME . " | " . __('Payments');
        $this->template->page_title = __('Payments');
        
        if (class_exists('Paymentgateway')) {                
                $payment_gateway_list = Paymentgateway::payment_auth_credentials_view();
              
            } else {
                trigger_error("Unable to load class: Paymentgateway", E_USER_WARNING);
            }
            
            $form_top_fields= isset($payment_gateway_list[1])?$payment_gateway_list[1]:[];
            $form_fields= isset($payment_gateway_list[2])?$payment_gateway_list[2]:[];
            $form_live_fields= isset($payment_gateway_list[3])?$payment_gateway_list[3]:[];
            $form_bottom_fields= isset($payment_gateway_list[4])?$payment_gateway_list[4]:[];
        $this->template->content = View::factory("admin/package_plan/payments")
                ->bind('payment_settings', $payment_settings)
                ->bind('paypal_payment_settings',$paypal_payment_settings)
                ->bind('form_top_fields', $form_top_fields)
                ->bind('form_fields', $form_fields)
                ->bind('form_live_fields', $form_live_fields)
                ->bind('form_bottom_fields', $form_bottom_fields)
                ->bind('payment_gateway_list',$payment_gateway_list[0])
                ->bind('postvalue', $postvalue)
                ->bind('errors', $errors);
    }

    public function action_direct_payment_gateway() {
        $package = Model::factory('package');
        $payment_settings = $package->get_payment_details();
        $signup_submit = arr::get($_REQUEST, 'submit_editpayment');
        $errors = $postvalue = array();   
        
        
        
          if (class_exists('Paymentgateway')) {                
                $payment_gateway_list = Paymentgateway::payment_auth_credentials_view();
              
            } else {
                trigger_error("Unable to load class: Paymentgateway", E_USER_WARNING);
            }
            
            $form_top_fields= [];
            $form_fields= [];
            $form_live_fields= [];
            $form_bottom_fields= [];
        if ($signup_submit && Validation::factory($_POST)) {
            $postvalue = Arr::map('trim', $this->request->post());
            $validator = $package->validate_editcompanypayment(arr::extract($postvalue, array('payment_gateway_type', 'payment_gateway_provider_id', 'description', 'currency_code', 'currency_symbol', 'payment_method', 'payment_gateway_username', 'payment_gateway_password', 'payment_gateway_signature', 'live_payment_gateway_username', 'live_payment_gateway_password', 'live_payment_gateway_signature')));
            if ($validator->check()) {
                $status = $package->editcompanypayment($postvalue);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_payment_gateway'));
                } elseif ($status == 2) {
                    Message::error(__('payment_status_error_info'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("package/payments");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $this->template->meta_description = SITENAME . " | Payments ";
        $this->template->meta_keywords = SITENAME . " | Payments ";
        $this->template->title = SITENAME . " | " . __('Payments');
        $this->template->page_title = __('Payments');
        $this->template->content = View::factory("admin/package_plan/payments")
                ->bind('payment_settings', $payment_settings)
                ->bind('postvalue', $postvalue)
                 ->bind('form_top_fields', $form_top_fields)
                ->bind('form_fields', $form_fields)
                ->bind('form_live_fields', $form_live_fields)
                ->bind('form_bottom_fields', $form_bottom_fields)
                ->bind('payment_gateway_list',$payment_gateway_list[0])
                ->bind('errors', $errors);
    }

    public function action_alternative_gateways_details() {
        $package = Model::factory('package');        
        $payment_gateway_type= isset($_POST['payment_gateway_id'])?$_POST['payment_gateway_id']:'';
        
        $paypal_payment_settings=$package->get_paypal_payment_details();
        if($payment_gateway_type!=""){
        $payment_settings = $package->get_payment_details($payment_gateway_type);
        
        
          if (class_exists('Paymentgateway')) {                
                $payment_gateway_list = Paymentgateway::payment_auth_credentials_view();
              
            } else {
                trigger_error("Unable to load class: Paymentgateway", E_USER_WARNING);
            }
            
            $form_top_fields= isset($payment_gateway_list[1])?$payment_gateway_list[1]:[];
            $form_fields= isset($payment_gateway_list[2])?$payment_gateway_list[2]:[];
            $form_live_fields= isset($payment_gateway_list[3])?$payment_gateway_list[3]:[];
            $form_bottom_fields= isset($payment_gateway_list[4])?$payment_gateway_list[4]:[];
        }
        
        $signup_submit = arr::get($_REQUEST, 'submit_edit_alternate_payment');
        
        $errors = $postvalue = array();
        if ($signup_submit && Validation::factory($_POST)) {
            $postvalue = Arr::map('trim', $this->request->post());            
            $field_list_array= Paymentgateway::get_payment_gateway_required_fields();           
            
            if(!empty($field_list_array)){
            //$validator = $package->validate_editcompanypayment(arr::extract($postvalue, array('payment_gateway_type', 'payment_gateway_provider_id', 'description', 'currency_code', 'currency_symbol', 'payment_method', 'payment_gateway_username', 'payment_gateway_password', 'payment_gateway_signature', 'live_payment_gateway_username', 'live_payment_gateway_password', 'live_payment_gateway_signature')));
                $validator = $package->validate_editcompanypayment(arr::extract($postvalue, $field_list_array));
            }else{
                throw new Exception('check payment gateway fields xml');
            }
            
            //$validator=$package->validate_editcompanypayment($postvalue);
            if ($validator->check()) {
                
                $status = $package->editcompanypayment($postvalue);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_payment_gateway'));
                } elseif ($status == 2) {
                    Message::error(__('payment_status_error_info'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("package/payments#top");
            } else {
                if (class_exists('Paymentgateway')) {                
                $payment_gateway_list = Paymentgateway::payment_auth_credentials_view();
              
            } else {
                trigger_error("Unable to load class: Paymentgateway", E_USER_WARNING);
            }
            
            $form_top_fields= isset($payment_gateway_list[1])?$payment_gateway_list[1]:[];
            $form_fields= isset($payment_gateway_list[2])?$payment_gateway_list[2]:[];
            $form_live_fields= isset($payment_gateway_list[3])?$payment_gateway_list[3]:[];
            $form_bottom_fields= isset($payment_gateway_list[4])?$payment_gateway_list[4]:[];
                $errors = $validator->errors('errors');                      
            }
        }else if($payment_gateway_type==''){
            $this->request->redirect("package/payments");
        }
        //send data to view file 
        $this->template->meta_description = SITENAME . " | Payments ";
        $this->template->meta_keywords = SITENAME . " | Payments ";
        $this->template->title = SITENAME . " | " . __('Payments');
        $this->template->page_title = __('Payments');
        $this->template->content = View::factory("admin/package_plan/payments")
                ->bind('payment_settings', $payment_settings)
                ->bind('paypal_payment_settings',$paypal_payment_settings)
                ->bind('postvalue', $postvalue)
                ->bind('form_top_fields', $form_top_fields)
                ->bind('form_fields', $form_fields)
                ->bind('form_live_fields', $form_live_fields)
                ->bind('form_bottom_fields', $form_bottom_fields)
                ->bind('payment_gateway_list',$payment_gateway_list[0])
                ->bind('errors', $errors);
    }

    /**
     
    public function action_cloud_sms_settings() {

        $usertype = $_SESSION['user_type'];
        $package = Model::factory('package');
        $errors = array();
        $smssettings_submit = arr::get($_REQUEST, 'btn_sms_activate');
        $post_values = array();
        $smssettings = $package->sms_settings();
        $sms_id = !empty($smssettings) ? 1 :'';
        
        if ($smssettings_submit) {
            $post_values = $_POST;            
			$status = $package->update_sms_settings($post_values,$sms_id);
			if ($status == 1) {
				Message::success(__('sucessful_settings_update'));
			} else {
				Message::error(__('not_updated'));
			}
			$this->request->redirect("package/cloud_sms_settings");            
        }

        $this->selected_page_title = __("sms_settings");
        $view = View::factory(ADMINVIEW . 'package_plan/sms_settings')
                ->bind('validator', $validator)
                ->bind('errors', $errors)
                ->bind('postvalue', $post_values)
                ->bind('smssettings', $smssettings);

        $this->template->title = CLOUD_SITENAME . " | " . __('sms_settings');
        $this->template->page_title = __('sms_settings');
        $this->template->content = $view;
    }*/
    
    #  Setup with SMS settings 
    public function action_cloud_sms_settings() {

        $usertype = $_SESSION['user_type'];

        $package = Model::factory('package');
        $errors = array();
        $smssettings_submit = arr::get($_REQUEST, 'btn_sms_activate');

        $post_values = array();

        $sms_id = '';
        $company_id = 1;
        $smssettings = $package->sms_settings();
        if (empty($smssettings)) {

            $smssettings[0]['sms_account_id'] = '';
            $smssettings[0]['sms_auth_token'] = '';
            $smssettings[0]['sms_from_number'] = '';
            $smssettings[0]['sms_id'] = '';
            $sms_id = $smssettings[0]['sms_id'];
        } else {
            $sms_id = 1;
        }

        if ($smssettings_submit && Validation::factory($_POST)) {
            $post_values = $_POST;

            $validator = $package->validate_update_smssettings(arr::extract($_POST, array('sms_account_id', 'sms_auth_token', 'sms_from_number')));
            //'site_city';
            if ($validator->check()) {
                $status = $package->update_sms_settings($_POST, $company_id, $sms_id);

                if ($status == 1) {
                    Message::success(__('sucessful_settings_update'));
                } else {
                    Message::error(__('not_updated'));
                }

                $this->request->redirect("package/cloud_sms_settings");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //$id = $this->request->param('id');
        // $id=1;

        $this->selected_page_title = __("sms_settings");
        $view = View::factory(ADMINVIEW . 'package_plan/sms_settings')
                ->bind('validator', $validator)
                ->bind('errors', $errors)
                ->bind('postvalue', $post_values)
                ->bind('smssettings', $smssettings);

        $this->template->title = CLOUD_SITENAME . " | " . __('sms_settings');
        $this->template->page_title = __('sms_settings');
        $this->template->content = $view;
    }

    /**
     * Setup with google map key settings
     */
    public function action_google_settings() {

        $package = Model::factory('package');
        $errors = array();
        $google_settings_submit = arr::get($_REQUEST, 'btn_google');

        $post_values = array();
        $google_settings = $package->google_settings();
        $get_mobile_key_info=$package->get_mobile_key_info();
        $get_mobile_key= isset($get_mobile_key_info->mobile_api_key)?$get_mobile_key_info->mobile_api_key:'';
                
        $google_id = 1;

        if ($google_settings_submit && Validation::factory($_POST)) {
            $post_values = $_POST;

            $validator = $package->validate_update_google_settings(arr::extract($_POST, array('ios_google_map_key', 'ios_google_geo_key', 'web_google_map_key', 'google_timezone_api_key', 'web_google_geo_key', 'android_google_api_key','web_foursquare_api_key','android_foursquare_api_key','ios_foursquare_api_key')));

            if ($validator->check()) {
                $status = $package->update_google_settings($_POST, $google_id);
                

                if ($status == 1) {
                    Message::success(__('sucessful_settings_update'));
                } else {
                    Message::error(__('not_updated'));
                }

                $this->request->redirect("package/google_settings");
            } else {
                $errors = $validator->errors('errors');
            }
        }

        $this->template->title = CLOUD_SITENAME . ' | ' . __('google_settings');
        $this->template->page_title = __('google_settings');
        $this->meta_description = "";
        $this->template->content = View::factory("admin/package_plan/google_settings")
                ->bind('errors', $errors)
                ->bind('google_settings', $google_settings)
                ->bind('get_mobile_key',$get_mobile_key)
                ->bind('postvalue', $post_values);
    }

    /**
     * Get the state information data   
     *    
     */
    public function action_getlist_state() {
        $package = Model::factory('package');
        $output = '';
        $country_id = arr::get($_REQUEST, 'country_id');
        $state_id = arr::get($_REQUEST, 'state_id');

        $getmodel_details = $package->getstate_details($country_id);

        if (isset($country_id)) {

            $count = count($getmodel_details);
            if ($count > 0) {

                /* $output .='<select name="state" id="state" onchange=change_city_drop("","","") class="form_control required" title="'.__('select_the_state').'">
                  <option value="">--Select--</option>'; */

                $output .= '<label>State</label><select class="form_control" name="state" id="state" onchange="change_city_drop();"><option>Select state</option>';

                foreach ($getmodel_details as $modellist) {
                    $output .= '<option value="' . $modellist["state_id"] . '"';
                    if ($state_id == $modellist["state_id"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $modellist["state_name"] . '</option>';
                }

                $output .= '</select>';
            } else {
                $output .= '<label>State</label><select class="form_control" name="state" id="state" onchange="change_city_drop();"><option>Select state</option>';
            }
        }
        echo $output;
        exit;
    }

    /**
     *  Get the city information data 
     * 
     */
    public function action_getcitylist() {
        $package = Model::factory('package');
        $output = '';
        $country_id = arr::get($_REQUEST, 'country_id');
        $state_id = arr::get($_REQUEST, 'state_id');
        $city_id = arr::get($_REQUEST, 'city_id');


        $getmodel_details = $package->getcity_details($country_id, $state_id);

        if (isset($country_id)) {

            $count = count($getmodel_details);
            if ($count > 0) {

                $output .= '<label>City</label><select class="form_control" name="city" id="city" onchange="change_info();"><option>Select city</option>';


                foreach ($getmodel_details as $modellist) {
                    $output .= '<option value="' . $modellist["city_id"] . '"';
                    if ($city_id == $modellist["city_id"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $modellist["city_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                /* $output .='<select name="city" id="city" title=" '.__('select_the_city').'" class="required">
                  <option value="">--Select--</option></select>'; */
                $output .= '<label>City</label><select class="form_control" name="city" id="city" onchange="change_info();"><option>Select city</option>';
            }
        }
        echo $output;
        exit;
    }

    /**
     *  Payment Gateway Integration 
     * 
     */
    public function billing_gateway_confirm() {
        $this->postedvalues = $this->session->get("payment_postvalues");
        if (empty($this->postedvalues)) {
            //url::redirect('/payments.html');
        } else {

            $cname = $this->postedvalues['name'];
            $cemail = $this->postedvalues['email'];
            $cinvoice = $this->postedvalues['invoice'];
            $ccurrency = CLOUD_CURRENCY_FORMAT;
            if ($this->session->get('pay_amount_code')) {
                $ccurrency = $this->session->get('pay_amount_code');
            }

            if (isset($this->postedvalues['currency'])) {
                $this->session->set('pay_amount_code', $this->postedvalues['currency']);
            } else {
                $this->session->set('pay_amount_code', CLOUD_CURRENCY_FORMAT);
            }
            $price = $this->session->get('price');
            if ($price != "") {
                $camount = $this->postedvalues['total_amount'];
            } else {
                $camount = $this->postedvalues['total_amount'];
            }
            $ctele = $this->postedvalues['phone'];
            //$cservice = $_POST['service_desc'];
            //$cinvoice_id = $this->session->get('pay_id');
            $cinvoice_id = $cinvoice;

            if ($_POST) {

                //$path = "http://" . $_SERVER['HTTP_HOST'] . "/ICICIMerchant/payment.php";
                //$path = "http://" . $_SERVER['HTTP_HOST'] . "/IPG_PHP_SSL/ipg-connectsh_oid.php";
                $path = "https://www4.ipg-online.com/connect/gateway/processing";

                $name = 'name';
                $email = 'email';
                $invoice = 'invoice';
                $amount = 'amount';
                $telephone = 'telephone';
                $service = 'service';
                //$invoice_id = 'invoice_id';

                $camount = $camount * CLOUD_CURRENCY_CONVERSION_RATE;

                $timezone = 'timezone';
                $timezone_value = 'IST';
                $authenticateTransaction = 'authenticateTransaction';
                $authenticateTransaction_value = "TRUE";
                $txntype = 'txntype';
                $txntype_value = 'sale';
                $txndatetime = 'txndatetime';
                $txndatetime_value = $this->getDateTime();

                $currency = 'currency';
                $currency_value = CLOUD_CURRENCY_NUM;
                $mode = 'mode';
                $mode_value = 'payonly';
                $storename = 'storename';
                $storename_value = '3332004988';
                $chargetotal = 'chargetotal';
                $chargetotal_value = $camount;
                $sharedsecret = 'sharedsecret';
                $sharedsecret_value = 'buZeZZ83!<';

                $CT = $camount;
                $hash = 'hash';
                $hash_value = $this->createHash($CT, $currency_value, $storename_value, $sharedsecret_value);

                $invoice_id = 'oid';
                $invoice_id_value = $cinvoice_id;

                $hash_algorithm = 'hash_algorithm';
                $hash_algorithm_value = 'SHA1';
                $responseSuccessURL = 'responseSuccessURL';
                $responseSuccessURL_value = 'http://' . $_SERVER['HTTP_HOST'] . '/package/paymentsuccess';
                $responseFailURL = 'responseFailURL';
                $responseFailURL_value = 'http://' . $_SERVER['HTTP_HOST'] . '/package/paymentfailure';

                $package_type = 'package_type';
                $package_type_value = $this->postedvalues['package_type'];
                $driver_count = 'driver_count';
                $driver_count_value = $this->postedvalues['driver_count'];
                $payment_terms = 'payment_terms';
                $payment_terms_value = $this->postedvalues['payment_terms'];






                echo "<head><title>Processing Payment...</title></head>\n";
                echo '<link rel="stylesheet" type="text/css" href="/public/common/css/style.css" />';
                echo '<link rel="stylesheet" type="text/css" href="/public/common/css/common.css" />';
                echo '<link rel="stylesheet" type="text/css" href="/public/common/css/glide.css" media="screen" />';
                echo "<body onLoad=\"document.forms['checkout_confirm'].submit();\">\n";
                echo '<div class="contianer_outer">';
                echo '<div class="contianer_inner">';
                echo '<div class="contianer">';
                echo "<center><h2>Please wait, your order is being processed and you";
                echo " will be redirected to the  website.</h2></center>\n";
                echo "<form method=\"post\" name=\"checkout_confirm\" ";
                echo "action=\"" . $path . "\">\n";
                /*  echo "<input type=\"hidden\" name=\"$name\" value=\"$cname\"/>\n";
                  echo "<input type=\"hidden\" name=\"$email\" value=\"$cemail\"/>\n";
                  echo "<input type=\"hidden\" name=\"$invoice\" value=\"$cinvoice\"/>\n";
                  echo "<input type=\"hidden\" name=\"$amount\" value=\"$camount\"/>\n";
                  echo "<input type=\"hidden\" name='currency' value=" . $ccurrency . ">";
                  echo "<input type=\"hidden\" name=\"$telephone\" value=\"$ctele\"/>\n";
                  echo "<input type=\"hidden\" name=\"$service\" value=\"$cservice\"/>\n";
                  echo "<input type=\"hidden\" name=\"$invoice_id\" value=\"$cinvoice_id\"/>\n"; */
                echo "<input type=\"hidden\" name=\"$timezone\" value=\"$timezone_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$authenticateTransaction\" value=\"$authenticateTransaction_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$txntype\" value=\"$txntype_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$txndatetime\" value=\"$txndatetime_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$hash\" value=\"$hash_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$currency\" value=\"$currency_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$mode\" value=\"$mode_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$storename\" value=\"$storename_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$chargetotal\" value=\"$chargetotal_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$sharedsecret\" value=\"$sharedsecret_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$invoice_id\" value=\"$invoice_id_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$responseSuccessURL\" value=\"$responseSuccessURL_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$responseFailURL\" value=\"$responseFailURL_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$hash_algorithm\" value=\"$hash_algorithm_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$package_type\" value=\"$package_type_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$driver_count\" value=\"$driver_count_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$payment_terms\" value=\"$payment_terms_value\"/>\n";

                echo "<center><br/><br/>If you are not automatically redirected to ";
                echo "NDOT Website within 5 seconds...<br/><br/>\n";
                echo "</form>\n";
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo "</body></html>\n";
                exit;
            }
            url::redirect('/payments.html');
        }
    }

    /**
     *  Payment Gateway Integration 
     * 
     */
    public function billing_gateway_confirm_parent() {
        $this->postedvalues = $this->session->get("payment_postvalues");
        if (empty($this->postedvalues)) {
            //url::redirect('/payments.html');
        } else {

            $cname = $this->postedvalues['name'];
            $cemail = $this->postedvalues['email'];
            $cinvoice = $this->postedvalues['invoice'];
            $ccurrency = CLOUD_CURRENCY_FORMAT;
            if ($this->session->get('pay_amount_code')) {
                $ccurrency = $this->session->get('pay_amount_code');
            }

            if (isset($this->postedvalues['currency'])) {
                $this->session->set('pay_amount_code', $this->postedvalues['currency']);
            } else {
                $this->session->set('pay_amount_code', CLOUD_CURRENCY_FORMAT);
            }
            $price = $this->session->get('price');
            if ($price != "") {
                $camount = $this->postedvalues['total_amount'];
            } else {
                $camount = $this->postedvalues['total_amount'];
            }
            $ctele = $this->postedvalues['phone'];
            //$cservice = $_POST['service_desc'];
            //$cinvoice_id = $this->session->get('pay_id');
            $cinvoice_id = $cinvoice;

            if ($_POST) {
                $path = "http://" . PAYMENT_REDIRECT_HOST . "/online-payment-process.html";
                $camount = $camount * CLOUD_CURRENCY_CONVERSION_RATE;

                $invoice_id = 'oid';
                $invoice_id_value = $cinvoice_id;
                $chargetotal = 'chargetotal';
                $chargetotal_value = $camount;
                $package_type = 'package_type';
                $package_type_value = $this->postedvalues['package_type'];
                $driver_count = 'driver_count';
                $driver_count_value = $this->postedvalues['driver_count'];
                $payment_terms = 'payment_terms';
                $payment_terms_value = $this->postedvalues['payment_terms'];
                $expirydate = 'expirydate';
                $expirydate_value = $this->postedvalues['expirydate'];

                $payment_success_url = 'payment_success_url';
                $payment_success_url_value = URL_BASE . 'package/paymentsuccess';
                $payment_failure_url = 'payment_failure_url';
                $payment_failure_url_value = URL_BASE . 'package/paymentfailure';
                echo "<head><title>Processing Payment...</title></head>\n";
                echo '<link rel="stylesheet" type="text/css" href="/public/common/css/style.css" />';
                echo '<link rel="stylesheet" type="text/css" href="/public/common/css/common.css" />';
                echo '<link rel="stylesheet" type="text/css" href="/public/common/css/glide.css" media="screen" />';
                echo "<body onLoad=\"document.forms['checkout_confirm'].submit();\">\n";
                echo '<div class="contianer_outer">';
                echo '<div class="contianer_inner">';
                echo '<div class="contianer">';
                echo "<center><h2>Please wait, your order is being processed and you";
                echo " will be redirected to the  website.</h2></center>\n";
                echo "<form method=\"post\" name=\"checkout_confirm\" ";
                echo "action=\"" . $path . "\">\n";


                echo "<input type=\"hidden\" name=\"$chargetotal\" value=\"$chargetotal_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$invoice_id\" value=\"$invoice_id_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$package_type\" value=\"$package_type_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$driver_count\" value=\"$driver_count_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$payment_terms\" value=\"$payment_terms_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$payment_success_url\" value=\"$payment_success_url_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$payment_failure_url\" value=\"$payment_failure_url_value\"/>\n";
                echo "<input type=\"hidden\" name=\"$expirydate\" value=\"$expirydate_value\"/>\n";

                echo "<center><br/><br/>If you are not automatically redirected to ";
                echo "NDOT Website within 5 seconds...<br/><br/>\n";
                echo "</form>\n";
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo "</body></html>\n";
                exit;
            }
            url::redirect('/payments.html');
        }
    }

    // Generate PDF *******************/
    public function action_genpdf() {
        $post = Request::current()->post();

        $package = Model::factory('package');
        $id = $post['pdf-id'];

        $paid_package_info = $package->get_package_invoice_info($id);
        $purchase_invoice_id= isset($paid_package_info[0]['purchase_inv_id'])?$paid_package_info[0]['purchase_inv_id']:'';
        $paid_billing_info=$package->get_billing_invoice_info($purchase_invoice_id);

        $city = '';
        $state = '';
        $country = '';
        $address = '';
        $email='';
        $postal_code='';
        $name='';
        $get_package_business = $package->get_site_info();
        if (isset($get_package_business[0]['domain_name'])) {
            $business_name = $get_package_business[0]['domain_name'];
        } else {
            $business_name = '';
        }
        if (isset($paid_billing_info[0]['city'])) {
            $city = $paid_billing_info[0]['city'];
        }
        if (isset($paid_billing_info[0]['state'])) {
            $state = $paid_billing_info[0]['state'];
        }
        if (isset($paid_billing_info[0]['country'])) {
            $country = $paid_billing_info[0]['country'];
        }

        if (isset($paid_billing_info[0]['address'])) {
            $address = $paid_billing_info[0]['address'];
        }
        if (isset($paid_billing_info[0]['email'])) {
            $email = $paid_billing_info[0]['email'];
        }
        if (isset($paid_billing_info[0]['postal_code'])) {
            $postal_code = $paid_billing_info[0]['postal_code'];
        }
        
        if(isset($paid_billing_info[0]['firstname'])) {
            $name=$paid_billing_info[0]['firstname'];
        }
        $payment_terms = '-';
        if (isset($paid_package_info[0]['payment_terms'])) {
            if ($paid_package_info[0]['payment_terms'] == 1) {
                $payment_terms = '30 days';
            } else if ($paid_package_info[0]['payment_terms'] == 2) {
                $payment_terms = '1 year';
            } else if ($paid_package_info[0]['payment_terms'] == 3) {
                $payment_terms = '2 years';
            } else if ($paid_package_info[0]['payment_terms'] == 4) {
                $payment_terms = '3 years';
            }
        }
        $package_type='';
        if(isset($paid_package_info[0]['package_type'])){
            if($paid_package_info[0]['package_type']==1){
                $package_type=__('basic').' Plan';
            }else if($paid_package_info[0]['package_type']==2){
                $package_type=__('plantinum').' Plan';
            }
        }
       $setup_cost=0;
        $service_tax_cost=0;
        $service_tax_percent=0;
         if(isset($paid_package_info[0]['setup_cost'])){
            if($paid_package_info[0]['setup_cost']>0){
                $setup_cost=number_format($paid_package_info[0]['setup_cost'],2);
            }
        }
        if(isset($paid_package_info[0]['service_tax'])){
            if($paid_package_info[0]['service_tax']>0){
                $service_tax_percent=$paid_package_info[0]['service_tax'];
            }
        }
        if(isset($paid_package_info[0]['service_tax_cost'])){
            if($paid_package_info[0]['service_tax_cost']>0){
                $service_tax_cost= number_format($paid_package_info[0]['service_tax_cost'],2);
            }
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
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $name. '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $address . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $city . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $state . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $country . '</div>
                        <div style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;width:100%;margin:0;line-height:3px;padding:0;">' . $postal_code . '</div>
                        
                </td>
                 
                <td>
                   
                    <table width="100%" cellpadding="5" cellspacing="0">
                    <tr><td><label style="width:85pt;font-family:helvetica,sans serif;font-weight:bold;font-size:11pt;color:#000;float:left;text-align:right;padding-right:10pt;line-height:1pt;">INVOICE NO.</label></td><td><p style="width:100%;font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;margin:0;float:left;line-height:1pt;">' . $paid_package_info[0]['purchase_inv_id'] . '</p></td></tr>
                    <tr><td><label style="width:85pt;font-family:helvetica,sans serif;font-weight:bold;font-size:11pt;color:#000;float:left;text-align:right;padding-right:10pt;line-height:1pt;">DATE</label></td><td><p style="width:100%;font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;margin:0;float:left;line-height:1pt;">' . Commonfunction::convertphpdate('d-m-Y', $paid_package_info[0]['createddate']) . '</p></td></tr>
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
                <td align="left" colspan="2" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">Taxi-'.$package_type.' - Product:Taxi Mobility Custom Branding on Mobile + Before Uploading default application in Client server
                </td>
                <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">1</td>
                <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">' . number_format($paid_package_info[0]['subscription_cost'], 2) . '</td>
                <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">' . number_format($paid_package_info[0]['subscription_cost'], 2) . '</td>
            </tr>';
        if($setup_cost>0){
          $Tophtml.= '<tr>
                        <td align="right" colspan="5" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">Setup Cost</td>
                        <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">'.$setup_cost.'</td>
                      </tr>';
              
        }
        if($service_tax_percent>0){
          $Tophtml.= '<tr>
                        <td align="right" colspan="5" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">Service Tax('.$service_tax_percent.'%)</td>
                        <td align="right" style="font-family:helvetica,sans serif;font-weight:normal;font-size:11pt;color:#000;">'.$service_tax_cost.'</td>
                      </tr>';              
        }
        $Tophtml.='<tr><td colspan="6"><div style="height:5pt;width:100%:"></div></td></tr>
            <tr><td colspan="6"><div style="width:100%;border-top:1pt dashed #8BB5D2;"></div></td></tr>
            <tr>
                <td align="right" colspan="3"><p class="bal_due" style="font-family:helvetica,sans serif;font-weight:normal;font-size:13pt;color:#000;">Total Amount</p></td>
                <td colspan="3" align="right"><p class="tot_amt" style="font-family:helvetica,sans serif;font-size:13pt;color:#000;">USD ' . number_format($paid_package_info[0]['amount'], 2) . '</p></td>
            </tr>

            </table>
            </td></tr> </table>';
        $html = $Tophtml . $Middle_html . $Endhtml;
        ob_clean();
        $filename = __('INVOICE') . '-' . date('m-d-y-s');

        $generate_pdf = $package->generate_pdf($html, $filename);
        exit;
    }
    
    private function country_info(){
        return array(
			'1'=>'India',
			'2'=>'Afghanistan',
			'3'=>'Albania',
			'4'=>'Algeria',
			'5'=>'America',
			'6'=>'American Samoa',
			'7'=>'Andorra',
			'8'=>'Anguilla',
			'9'=>'Antarctica',
			'10'=>'Antigua and Barbuda',
			'11'=>'Argentina',
			'12'=>'Armenia',
			'13'=>'Aruba',
			'14'=>'Australia',
			'15'=>'Austria',
			'16'=>'Azerbaijan',
			'17'=>'Bahamas',
			'18'=>'Bahrain',
			'19'=>'Barbados',
			'20'=>'Belarus',
			'21'=>'Belgium',
			'22'=>'Belize',
			'23'=>'Benin',
			'24'=>'Bermuda',
			'25'=>'Bhutan',
			'26'=>'Bolivia',
			'27'=>'Bosnia and Herzegovina',
			'28'=>'Botswana',
			'29'=>'Bouvet Island',
			'30'=>'Brasil',
			'31'=>'British Indian Ocean Territory',
			'32'=>'British Virgin Islands',
			'33'=>'Brunei',
			'34'=>'Bulgaria',
			'35'=>'Burkina Faso',
			'36'=>'Burundi',
			'37'=>'Cambodia',
			'38'=>'Cameroon',
			'39'=>'Canada',
			'40'=>'Cape Verde',
			'41'=>'Cayman Islands',
			'42'=>'Central African Republic',
			'43'=>'Chad',
			'44'=>'Chile',
			'45'=>'China',
			'46'=>'Christmas Island',
			'47'=>'Cocos Islands',
			'48'=>'Colombia',
			'49'=>'Comoros',
			'50'=>'Cook Islands',
			'51'=>'Costa Rica',
			'52'=>'Croatia',
			'53'=>'Cuba',
			'54'=>'Cyprus',
			'55'=>'Czech Republic',
			'56'=>'Democratic Republic of the Congo',
			'57'=>'Djibouti',
			'58'=>'Dominica',
			'59'=>'Dominican Republic',
			'60'=>'Dubai',
			'61'=>'East Timor',
			'62'=>'Ecuador',
			'63'=>'Egypt',
			'64'=>'El Salvador',
			'65'=>'Equatorial Guinea',
			'66'=>'Eritrea',
			'67'=>'Estonia',
			'68'=>'Ethiopia',
			'69'=>'Falkland Islands',
			'70'=>'Faroe Islands',
			'71'=>'Fiji',
			'72'=>'Finland',
			'73'=>'France',
			'74'=>'French Guiana',
			'75'=>'French Polynesia',
			'76'=>'French Southern Territories',
			'77'=>'Gabon',
			'78'=>'Gambia',
			'79'=>'Georgia',
			'80'=>'Germany',
			'81'=>'Ghana',
			'82'=>'Gibraltar',
			'83'=>'Greece',
			'84'=>'Greenland',
			'85'=>'Grenada',
			'86'=>'Guadeloupe',
			'87'=>'Guam',
			'88'=>'Guatemala',
			'89'=>'Guinea',
			'90'=>'Guinea-Bissau',
			'91'=>'Guyana',
			'92'=>'Haiti',
			'93'=>'Heard Island and McDonald Islands',
			'94'=>'Honduras',
			'95'=>'Hong Kong',
			'96'=>'Hungary',
			'97'=>'Iceland',
			'98'=>'Iran',
			'99'=>'Iraq',
			'100'=>'Ireland',
			'101'=>'Israel',
			'102'=>'Italy',
			'103'=>'Ivory Coast',
			'104'=>'Jamaica',
			'105'=>'Japan',
			'106'=>'Jordan',
			'107'=>'Kazakhstan',
			'108'=>'KENYA',
			'109'=>'Kiribati',
			'110'=>'Kyrgyzstan',
			'111'=>'Laos',
			'112'=>'Latvia',
			'113'=>'Lesotho',
			'114'=>'Liberia',
			'115'=>'Libya',
			'116'=>'Liechtenstein',
			'117'=>'Lithuania',
			'118'=>'Luxembourg',
			'119'=>'Macao',
			'120'=>'Macedonia',
			'121'=>'Madagascar',
			'122'=>'Malawi',
			'123'=>'Malaysia',
			'124'=>'Maldives',
			'125'=>'Mali',
			'126'=>'Malta',
			'127'=>'Marshall Islands',
			'128'=>'Martinique',
			'129'=>'Mauritania',
			'130'=>'Mauritius',
			'131'=>'Mayotte',
			'132'=>'Mexico',
			'133'=>'Micronesia',
			'134'=>'Moldova',
			'135'=>'Monaco',
			'136'=>'Mongolia',
			'137'=>'Montserrat',
			'138'=>'Morocco',
			'139'=>'Mozambique',
			'140'=>'Namibia',
			'141'=>'Nauru',
			'142'=>'Nepal',
			'143'=>'Netherlands',
			'144'=>'Netherlands Antilles',
			'145'=>'New Caledonia',
			'146'=>'New Zealand',
			'147'=>'Nicaragua',
			'148'=>'Niger',
			'149'=>'Nigeria',
			'150'=>'Niue',
			'151'=>'Norfolk Island',
			'152'=>'North Korea',
			'153'=>'Northern Mariana Islands',
			'154'=>'Norway',
			'155'=>'Oman',
			'156'=>'Pakistan',
			'157'=>'Palau',
			'158'=>'Palestinian Territory',
			'159'=>'Panama',
			'160'=>'Papua New Guinea',
			'161'=>'Paraguay',
			'162'=>'Peru',
			'163'=>'Philippines',
			'164'=>'Pitcairn',
			'165'=>'Poland',
			'166'=>'Portugal',
			'167'=>'Puerto Rico',
			'168'=>'Qatar',
			'169'=>'Republic of the Congo',
			'170'=>'Reunion',
			'171'=>'Romania',
			'172'=>'Russia',
			'173'=>'Russian Federation',
			'174'=>'Rwanda',
			'175'=>'Saint Helena',
			'176'=>'Saint Kitts and Nevis',
			'177'=>'Saint Lucia',
			'178'=>'Saint Pierre and Miquelon',
			'179'=>'Saint Vincent and the Grenadines',
			'180'=>'Samoa',
			'181'=>'San Marino',
			'182'=>'Sao Tome and Principe',
			'183'=>'Saudi Arabia',
			'184'=>'Schweiz',
			'185'=>'Senegal',
			'186'=>'Serbia and Montenegro',
			'187'=>'Seychelles',
			'188'=>'Sierra Leone',
			'189'=>'Singapore',
			'190'=>'Slovakia',
			'191'=>'Slovenia',
			'192'=>'Solomon Islands',
			'193'=>'Somalia',
			'194'=>'South Africa',
			'195'=>'South Georgia and the South Sandwich Islands',
			'196'=>'South Korea',
			'197'=>'Spain',
			'198'=>'Sri Lanka',
			'199'=>'Sudan',
			'200'=>'Suriname',
			'201'=>'Svalbard and Jan Mayen',
			'202'=>'Swaziland',
			'203'=>'Sweden',
			'204'=>'Switzerland',
			'205'=>'Syria',
			'206'=>'Taiwan',
			'207'=>'Tajikistan',
			'208'=>'Tanzania',
			'209'=>'Togo',
			'210'=>'Tokelau',
			'211'=>'Tonga',
			'212'=>'Trinidad and Tobago',
			'213'=>'Tunisia',
			'214'=>'Turkey',
			'215'=>'Turkmenistan',
			'216'=>'Turks and Caicos Islands',
			'217'=>'Tuvalu',
			'218'=>'U.S. Virgin Islands',
			'219'=>'Uganda',
			'220'=>'Ukraine',
			'221'=>'United Kingdom',
			'222'=>'United States',
			'223'=>'United States Minor Outlying Islands',
			'224'=>'Uruguay',
			'225'=>'Uzbekistan',
			'226'=>'Vanuatu',
			'227'=>'Vatican',
			'228'=>'Venezuela',
			'229'=>'Vietnam',
			'230'=>'Wallis and Futuna',
			'231'=>'Western Sahara',
			'232'=>'Yemen',
			'233'=>'Zambia',
			'234'=>'Zimbabwe',
        );
    }
    
    private function country_details($country = ''){
		
		
        $country_details = array(
            'Afghanistan' => ['AFG','93','AFN','AFN'],
			'Albania' => ['ALB','355','ALL','ALL'],
			'Algeria' => ['DZA','213','DZD','دج'],
			'America' => ['USA','1','USD','$'],
			'American Samoa' => ['ASM','1684','USD','WS$'],
			'Andorra' => ['AND','376','EUR','€'],
			'Anguilla' => ['AIA','1264','XCD','EC$'],
			'Antarctica' => ['ATA','672','XCD','A$'],
			'Antigua and Barbuda' => ['ATG','1268','XCD','$'],
			'Argentina' => ['ARG','54','ARS','AR$'],
			'Armenia' => ['ARM','374','AMD','դր'],
			'Aruba' => ['ABW','297','AWG','ƒ'],
			'Australia' => ['AUS','61','AUD','AU$'],
			'Austria' => ['AUT','43','EUR','€'],
			'Azerbaijan' => ['AZE','994','AZN','ман'],
			'Bahamas' => ['BHS','1242','BSD','BS$'],
			'Bahrain' => ['BHR','973','BHD','ب.د'],
			'Barbados' => ['BRB','1246','BBD','Bds$'],
			'Belarus' => ['BLR','375','BYR','Br'],
			'Belgium' => ['BEL','32','EUR','€'],
			'Belize' => ['BLZ','501','BZD','BZ$'],
			'Benin' => ['BEN','229','XOF','₣'],
			'Bermuda' => ['BMU','1441','BMD','BD$'],
			'Bhutan' => ['BTN','975','INR','Nu'],
			'Bolivia' => ['BOL','591','BOB','Bs'],
			'Bosnia and Herzegovina' => ['BIH','387','BAM','KM'],
			'Botswana' => ['BWA','267','BWP','P'],
			'Bouvet Island' => ['BVT','47','NOK','NOK'],
			'Brasil' => ['BRA','55','BRL','R$'],
			'British Indian Ocean Territory' => ['IOT','246','USD','£'],
			'British Virgin Islands' => ['VGB','1284','USD','US$'],
			'Brunei' => ['BRN','673','BND','B$'],
			'Bulgaria' => ['BGR','359','BGN','лв'],
			'Burkina Faso' => ['BFA','226','XOF','₣'],
			'Burundi' => ['BDI','257','BIF','FBu'],
			'Cambodia' => ['KHM','855','KHR','៛'],
			'Cameroon' => ['CMR','237','XAF','₣'],
			'Canada' => ['CAN','1','CAD','CA$'],
			'Cape Verde' => ['CPV','238','CVE','CV$'],
			'Cayman Islands' => ['CYM','1345','KYD','CI$'],
			'Central African Republic' => ['CAF','236','XAF','₣'],
			'Chad' => ['TCD','235','XAF','₣'],
			'Chile' => ['CHL','56','CLP','CL$'],
			'China' => ['CHN','86','CNY','CN¥'],
			'Christmas Island' => ['CXR','61','AUD','AU$'],
			'Cocos Islands' => ['CCK','61','AUD','AU$'],
			'Colombia' => ['COL','57','COU','Col$'],
			'Comoros' => ['COM','269','KMF','KMF'],
			'Cook Islands' => ['COK','682','NZD','NZ$'],
			'Costa Rica' => ['CRI','506','CRC','₡'],
			'Croatia' => ['HRV','385','HRK','kn'],
			'Cuba' => ['CUB','53','CUP','CU$'],
			'Cyprus' => ['CYP','357','EUR','CY£'],
			'Czech Republic' => ['CZE','420','CZK','Kč'],
			'Democratic Republic of the Congo' => ['COD','243','CDF','FC'],
			'Djibouti' => ['DJI','253','DJF','Fdj'],
			'Dominica' => ['DMA','1767','XCD','EC$'],
			'Dominican Republic' => ['DOM','1809, 1829, 1849','DOP','RD$'],
			'Dubai' => ['ARE','971','AED','AED'],
			'East Timor' => ['TLS','670','USD','US$'],
			'Ecuador' => ['ECU','593','USD','US$'],
			'Egypt' => ['EGY','20','EGP','ج.م'],
			'El Salvador' => ['SLV','503','USD','US$'],
			'Equatorial Guinea' => ['GNQ','240','XAF','₣'],
			'Eritrea' => ['ERI','291','ERN','Nfk'],
			'Estonia' => ['EST','372','EUR','KR'],
			'Ethiopia' => ['ETH','251','ETB','Br'],
			'Falkland Islands' => ['FLK','500','FKP','£'],
			'Faroe Islands' => ['FRO','298','DKK','kr'],
			'Fiji' => ['FJI','679','FJD','FJ$'],
			'Finland' => ['FIN','358','EUR','€'],
			'France' => ['FRA','33','EUR','€'],
			'French Guiana' => ['GUF','594','EUR','€'],
			'French Polynesia' => ['PYF','689','XPF','CFP'],
			'French Southern Territories' => ['ATF','262','EUR','€'],
			'Gabon' => ['GAB','241','XAF','₣'],
			'Gambia' => ['GMB','220','GMD','D'],
			'Georgia' => ['GEO','995','GEL','GEL'],
			'Germany' => ['DEU','49','EUR','€'],
			'Ghana' => ['GHA','233','GHS','₵'],
			'Gibraltar' => ['GIB','350','GIP','GI£'],
			'Greece' => ['GRC','30','EUR','€'],
			'Greenland' => ['GRL','299','DKK','ø'],
			'Grenada' => ['GRD','1473','XCD','EC$'],
			'Guadeloupe' => ['GLP','590','EUR','€'],
			'Guam' => ['GUM','1671','USD','US$'],
			'Guatemala' => ['GTM','502','GTQ','Q'],
			'Guinea' => ['GIN','224','GNF','FG'],
			'Guinea-Bissau' => ['GNB','245','XOF','₣'],
			'Guyana' => ['GUY','592','GYD','GY$'],
			'Haiti' => ['HTI','509','USD','G'],
			'Heard Island and McDonald Islands' => ['HMD','1672','AUD','AU$'],
			'Honduras' => ['HND','504','HNL','L'],
			'Hong Kong' => ['HKG','852','HKD','HK$'],
			'Hungary' => ['HUN','36','HUF','Ft'],
			'Iceland' => ['ISL','354','ISK','ISK'],
			'India' => ['IND','91','INR','IN₨'],
			'Iran' => ['IRN','98','IRR','ريال'],
			'Iraq' => ['IRQ','964','IQD','ع.د'],
			'Ireland' => ['IRL','353','EUR','€'],
			'Israel' => ['ISR','972','ILS','₪'],
			'Italy' => ['ITA','39','EUR','€'],
			'Ivory Coast' => ['CIV','225','XOF','XOF'],
			'Jamaica' => ['JAM','1876','JMD','JA$'],
			'Japan' => ['JPN','81','JPY','JP¥'],
			'Jordan' => ['JOR','962','JOD','JD'],
			'Kazakhstan' => ['KAZ','7','KZT','KZT'],
			'KENYA' => ['KEN','254','KES','KSh'],
			'Kiribati' => ['KIR','686','AUD','AU$'],
			'Kyrgyzstan' => ['KGZ','996','KGS','KGS'],
			'Laos' => ['LAO','856','LAK','₭'],
			'Latvia' => ['LVA','371','EUR','Ls'],
			'Lesotho' => ['LSO','266','ZAR','L'],
			'Liberia' => ['LBR','231','LRD','L$'],
			'Libya' => ['LBY','218','LYD','ل.د'],
			'Liechtenstein' => ['LIE','423','CHF','CHF'],
			'Lithuania' => ['LTU','370','EUR','Lt'],
			'Luxembourg' => ['LUX','352','EUR','€'],
			'Macao' => ['MAC','853','MOP','MOP$'],
			'Macedonia' => ['MKD','389','MKD','MKD'],
			'Madagascar' => ['MDG','261','MGA','MGA'],
			'Malawi' => ['MWI','265','MWK','MK'],
			'Malaysia' => ['MYS','60','MYR','RM'],
			'Maldives' => ['MDV','960','MVR','MRf'],
			'Mali' => ['MLI','223','XOF','₣'],
			'Malta' => ['MLT','356','EUR','Lm'],
			'Marshall Islands' => ['MHL','692','USD','US$'],
			'Martinique' => ['MTQ','596','EUR','€'],
			'Mauritania' => ['MRT','222','MRO','UM'],
			'Mauritius' => ['MUS','230','MUR','MU₨'],
			'Mayotte' => ['MYT','262','EUR','€'],
			'Mexico' => ['MEX','52','MXV','Mex$'],
			'Micronesia' => ['FSM','691','USD','US$'],
			'Moldova' => ['MDA','373','MDL','MDL'],
			'Monaco' => ['MCO','377','EUR','€'],
			'Mongolia' => ['MNG','976','MNT','₮'],
			'Montserrat' => ['MSR','1664','XCD','EC$'],
			'Morocco' => ['MAR','212','MAD','د.م'],
			'Mozambique' => ['MOZ','258','MZN','MTn'],
			'Namibia' => ['NAM','264','ZAR','N$'],
			'Nauru' => ['NRU','674','AUD','AU$'],
			'Nepal' => ['NPL','977','NPR','NP₨'],
			'Netherlands' => ['NLD','31','EUR','€'],
			'Netherlands Antilles' => ['ANT','599','ANG','NAƒ'],
			'New Caledonia' => ['NCL','687','XPF','CFP'],
			'New Zealand' => ['NZL','64','NZD','NZ$'],
			'Nicaragua' => ['NIC','505','NIO','C$'],
			'Niger' => ['NER','227','XOF','₣'],
			'Nigeria' => ['NGA','234','NGN','₦'],
			'Niue' => ['NIU','683','NZD','NZ$'],
			'Norfolk Island' => ['NFK','6723','AUD','AU$'],
			'North Korea' => ['PRK','850','KPW','₩'],
			'Northern Mariana Islands' => ['MNP','1670','USD','US$'],
			'Norway' => ['NOR','47','NOK','øre'],
			'Oman' => ['OMN','968','OMR','ر.ع'],
			'Pakistan' => ['PAK','92','PKR','PKRs'],
			'Palau' => ['PLW','680','USD','US$'],
			'Palestinian Territory' => ['PSE','970','ILS','ILS'],
			'Panama' => ['PAN','507','USD','PAB'],
			'Papua New Guinea' => ['PNG','675','PGK','K'],
			'Paraguay' => ['PRY','595','PYG','₲'],
			'Peru' => ['PER','51','PEN','S/.'],
			'Philippines' => ['PHL','63','PHP','₱'],
			'Pitcairn' => ['PCN','64','NZD','NZ$'],
			'Poland' => ['POL','48','PLN','zł'],
			'Portugal' => ['PRT','351','EUR','€'],
			'Puerto Rico' => ['PRI','1787, 1939','USD','US$'],
			'Qatar' => ['QAT','974','QAR','ر.ق'],
			'Republic of the Congo' => ['COG','242','XAF','FCFA'],
			'Reunion' => ['REU','262','EUR','€'],
			'Romania' => ['ROU','40','RON','ROL'],
			'Russia' => ['RUS','7','RUB','₽'],
			'Russian Federation' => ['RUS','7','RUB','₽'],
			'Rwanda' => ['RWA','250','RWF','RF'],
			'Saint Helena' => ['SHN','290','SHP','£'],
			'Saint Kitts and Nevis' => ['KNA','1869','XCD','XCD'],
			'Saint Lucia' => ['LCA','1758','XCD','XCD'],
			'Saint Pierre and Miquelon' => ['SPM','508','EUR','€'],
			'Saint Vincent and the Grenadines' => ['VCT','1784','XCD','XCD'],
			'Samoa' => ['WSM','685','WST','WS$'],
			'San Marino' => ['SMR','378','EUR','€'],
			'Sao Tome and Principe' => ['STP','239','STD','STD'],
			'Saudi Arabia' => ['SAU','966','SAR','ر.س'],
			'Schweiz' => ['CHE','41','CHF','CHF'],
			'Senegal' => ['SEN','221','XOF','₣'],
			'Serbia and Montenegro' => ['SCG','381','RSD','RSD'],
			'Seychelles' => ['SYC','248','SCR','SRe'],
			'Sierra Leone' => ['SLE','232','SLL','Le'],
			'Singapore' => ['SGP','65','SGD','S$'],
			'Slovakia' => ['SVK','421','EUR','Sk'],
			'Slovenia' => ['SVN','386','EUR','€'],
			'Solomon Islands' => ['SLB','677','SBD','SI$'],
			'Somalia' => ['SOM','252','SOS','Sh'],
			'South Africa' => ['ZAF','27','ZAR','SAR'],
			'South Georgia and the South Sandwich Islands' => ['SGS','500','GBP','£'],
			'South Korea' => ['KOR','82','KRW','KRW'],
			'Spain' => ['ESP','34','EUR','€'],
			'Sri Lanka' => ['LKA','94','LKR','LK₨'],
			'Sudan' => ['SDN','249','SDG','£Sd'],
			'Suriname' => ['SUR','597','SRD','SR$'],
			'Svalbard and Jan Mayen' => ['SJM','47','NOK','NOK'],
			'Swaziland' => ['SWZ','268','SZL','SZL'],
			'Sweden' => ['SWE','46','SEK','kr'],
			'Switzerland' => ['CHE','41','CHW','CHF'],
			'Syria' => ['SYR','963','SYP','S£'],
			'Taiwan' => ['TWN','886','TWD','NT$'],
			'Tajikistan' => ['TJK','992','TJS','TJS'],
			'Tanzania' => ['TZA','255','TZS','TSh'],
			'Togo' => ['TGO','228','XOF','₣'],
			'Tokelau' => ['TKL','690','NZD','NZ$'],
			'Tonga' => ['TON','676','TOP','PT$'],
			'Trinidad and Tobago' => ['TTO','1868','TTD','TT$'],
			'Tunisia' => ['TUN','216','TND','د.ت'],
			'Turkey' => ['TUR','90','TRY','YTL'],
			'Turkmenistan' => ['TKM','993','TMT','m'],
			'Turks and Caicos Islands' => ['TCA','1649','USD','US$'],
			'Tuvalu' => ['TUV','688','AUD','AU$'],
			'U.S. Virgin Islands' => ['VIR','1340','USD','US$'],
			'Uganda' => ['UGA','256','UGX','USh'],
			'Ukraine' => ['UKR','380','UAH','₴'],
			'United Kingdom' => ['GBR','44','GBP','£'],
			'United States' => ['USA','1','USD','$'],
			'United States Minor Outlying Islands' => ['UMI','1808','USD','$'],
			'Uruguay' => ['URY','598','UYU','UR$'],
			'Uzbekistan' => ['UZB','998','UZS','UZS'],
			'Vanuatu' => ['VUT','678','VUV','Vt'],
			'Vatican' => ['VAT','379','EUR','€'],
			'Venezuela' => ['VEN','58','VEF','Bs'],
			'Vietnam' => ['VNM','84','VND','₫'],
			'Wallis and Futuna' => ['WLF','681','XPF','XPF'],
			'Western Sahara' => ['ESH','212','MAD','MAD'],
			'Yemen' => ['YEM','967','YER','YER'],
			'Zambia' => ['ZMB','260','ZMW','ZK'],
			'Zimbabwe' => ['ZWE','263','ZWL','Z$'],
        ); 
        if($country != '')
			return $country_details[$country];
		else
			return $country_details;
    }
    
    public function cloudpaymentsuccess($postdata) {
        //$this->input = Request::current()->post();
        //if (!empty($this->input) && (isset($this->input)) && (!empty($this->session->get('payment_postvalues')))) {
        $this->input=$postdata;
        
        if (!empty($this->input) && (isset($this->input))) {
            $package = Model::factory('package');
            //$this->inputsession = $this->session->get('payment_postvalues');
            /*$package_data['Message'] = $this->input['status'];
            $package_data['TxnID'] = $this->input['endpointTransactionId'];
            $package_data['ePGTxnID'] = $this->input['ipgTransactionId'];            
            $package_data['amount'] = $this->input["chargetotal"];
            $package_data['currency'] = $this->input['currency'];
            $package_data['currency_symbol'] = $this->input['currency_symbol'];
            $package_data['ResponseCode'] = $this->input["processor_response_code"];*/
            $package_data['amount'] = $this->input["total_amount"];
            $package_data['invoice_id'] = $this->input["invoice_id"];
            $package_data['name'] = $this->input["name"];
            $package_data['phone'] = $this->input["phone"];
            $package_data['email'] = $this->input["email"];
            $package_data['business_name'] = $this->input['business_name'];
            $package_data['address'] = $this->input['address'];
            $package_data['country'] = $this->input['country'];
            $package_data['city'] = $this->input['city'];
            $package_data['state'] = $this->input['state'];
            $package_data['postal_code'] = $this->input['postal_code'];
            $package_data['createdate'] = strtotime($this->input['createdate']);
            $package_data['expirydate'] = $this->input["expirydate"];
            $package_data['package_type'] = $this->input['package_type'];
            $package_data['driver_count'] = $this->input['driver_count'];
            $package_data['payment_terms'] = $this->input['payment_terms'];
            $package_data['payment_status']=0;
            $package_data['subscription_id'] = $this->input['subscription_id'];
            $package_data['customer_id'] = $this->input['customer_id'];
            if (isset($this->input['service_tax_cost'])) {
                $package_data['service_tax'] = $this->input['service_tax'];
                $package_data['service_tax_cost'] = $this->input['service_tax_cost'];
            } else {
                $package_data['service_tax_cost'] = 0;
                $package_data['service_tax'] = 0;
            }
            if ($package_data['package_type'] == 1) {
                $subscription_details = __('basic');
            } else if ($package_data['package_type'] == 2) {
                $subscription_details = __('plantinum');
            } else if ($package_data['package_type'] == 3) {
                $subscription_details = __('enterprise');
            }
            $this->currency='';
            if (isset($this->input["currency"])) {
                $this->currency = $this->input["currency"];
            }
            $package_upgrade_time = PACKAGE_UPGRADE_TIME;
            $billing_options = $package_data['payment_terms'];
            if ($billing_options == 1) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 30 days'));
            } elseif ($billing_options == 2) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 1 year'));
            } elseif ($billing_options == 3) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 2 year'));
            } elseif ($billing_options == 4) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 3 year'));
            }
            $expiry_date_time = date('Y-m-d H:i:s', strtotime($expiry_date_time . '  - 1 day'));
            if (PACKAGE_TYPE == 0) {
                if (TRIAL_EXPIRY_DAYS == 1) {
                    $trial_expiry_day = ' +1 day';
                } else {
                    $trial_expiry_day = TRIAL_EXPIRY_DAYS . ' days';
                }
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($expiry_date_time . $trial_expiry_day));
            }
            $package_data['paid_status']=1;
            $package_data['expiry_date_time']=$expiry_date_time;
            $package_data['pay_mode']=1;
            $this->update = $package->update_package_info($package_data, 1);
            $this->update_info = $package->update_siteinfo($package_data['package_type'], $this->input['driver_count'],$this->input['payment_terms'], $expiry_date_time);
            $this->send_mail_payment_success('success', $package_data['email'], $this->input['name'], $this->input['invoice_id']);
            $product_id = $this->input['product_id'];
            if ($product_id != "") {
                /* CURL FUNCTION FOR CONTACT CRM */
                $json_value = json_encode($_POST);
                $data_array = [];
                $data_array['name'] = $package_data['name'];
                $data_array['email'] = $package_data['email'];
                $data_array['phone'] = $package_data['phone'];
                $data_array['currency'] = $this->currency;
                $data_array['domain'] = $package_data['business_name'];
                $data_array['product'] = $product_id;
                $data_array['payment_response'] = $json_value;
                $data_array['createdate'] =$package_data['createdate'];
                $data_array['expirydate'] = $package_data['expirydate'];
                $data_array['amount'] = $package_data['amount'];
                $data_array['transaction_id'] = $package_data['subscription_id'];
                $data_array['ePGTxnID'] = $package_data['customer_id'];
               /* $data_array['transaction_id'] = $this->input['TxnID'];
                $data_array['ePGTxnID'] = $this->input['ePGTxnID'];*/
                $data_array['invoice_id'] = $package_data['invoice_id'];
                $data_array['subscription_details'] = $subscription_details;
                $data_array['payment_reason'] = '';
                $data_array['payment_status_data'] = '';
                $data_array['payment_status'] = 1;
                $data_array['payment_terms'] = $package_data['payment_terms'];
                $data_array['service_tax_cost'] = $package_data['service_tax_cost'];
                $data_array['service_tax'] = $package_data['service_tax_cost'];
                $data_array['country'] = $package_data['country'];
                $data_array['authentication_accesskey']=CRM_PAYMENT_AUTHENTICATION_ACCESSKEY;
                $data = $data_array;
                /*if (CRM_UPDATE_ENABLE == 1 && class_exists('Thirdpartyapi')) {
                        if (method_exists('Thirdpartyapi', 'cloud_payment_success')) {
                            $thirdpartyapi = Thirdpartyapi::instance('alternate');
                            $thirdpartyapi->cloud_payment_success($data_array);
                        }
                    }*/
                //url-ify the data for the POST
                $fields_string = '';
                foreach ($data as $key => $value) {
                    $fields_string .= $key . '=' . $value . '&';
                }
                $fields_string = rtrim($fields_string, '&');
                /* CURL FUNCTION FOR CONTACT CRM */
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_PORT => CRM_PORT,
                    CURLOPT_URL => CRM_HOST_URL,
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
                    echo "cURL Error #:" . $err;
                } else {
                    echo $response;
                }
            }
            /*$this->postedvalues = $this->session->get("payment_postvalues");
            $this->template->title = 'NDOT Technologies | Successful ';
            $this->template->page_title = __('payment_success');
            $this->meta_description = "Thank you for believing in NDOT. We are continuously working towards the growth of client's business by providing industry-standard products.";
            $this->template->content = View::factory(ADMINVIEW . "package_plan/payment_status")
                    ->bind('ResponseCode', $this->ResponseCode)
                    ->bind('Message', $this->Message)
                    ->bind('TxnID', $this->TxnID)
                    ->bind('ePGTxnID', $this->ePGTxnID)
                    ->bind('amount', $this->amount)
                    ->bind('currency_sym', $this->currency_symbol)
                    ->bind('pay_amount_code', $this->session->get['payment_postvalues']['pay_amount_code'])
                    ->bind('postvalue', $this->input);
            $this->session->delete('payment_postvalues');*/
        } else {
            Message::error(__('invalid_access'));
            $this->request->redirect("package/account_plan");
        }
    }
    
     public function cloudpaymentfailure($postdata) {
       // $this->input = Request::current()->post();
        //$this->session = Session::instance();
         $this->input=$postdata;
        if (!empty($this->input) && (isset($this->input))) {
            $package = Model::factory('package');
            //$this->inputsession = $this->session->get('payment_postvalues');
            /*$package_data['Message'] = $this->input['fail_reason'] . "-" . $this->input['status'];
            $package_data['TxnID'] = isset($this->input['endpointTransactionId']) ? $this->input['endpointTransactionId'] : "";
            $package_data['ePGTxnID'] = $this->input['ipgTransactionId'];           
            $package_data['amount'] = $this->input["chargetotal"];
            $package_data['currency'] = $this->input['currency'];
            $package_data['currency_symbol'] = $this->input['currency_symbol'];
            $package_data['ResponseCode'] = $this->input["fail_rc"];*/
            $package_data['currency_symbol'] = '$';
            $package_data['amount'] = $this->input["total_amount"];
            $package_data['invoice_id'] = $this->input["invoice_id"];
            $package_data['name'] = $this->input["name"];
            $package_data['phone'] = $this->input["phone"];
            $package_data['email'] = $this->input["email"];
            $package_data['business_name'] = $this->input['business_name'];
            $package_data['country'] = $this->input['country'];
            $package_data['createdate'] = strtotime($this->input['createdate']);
            $package_data['expirydate'] = $this->input["expirydate"];
            $package_data['package_type'] = $this->input['package_type'];
            $package_data['payment_terms'] = $this->input['payment_terms'];
            $package_data['subscription_id'] = isset($this->input['subscription_id'])?$this->input['subscription_id']:'';
            $package_data['customer_id'] = isset($this->input['customer_id'])?$this->input['customer_id']:'';
            if ($package_data['package_type'] == 1) {
                $subscription_details = __('basic');
            } else {
                $subscription_details = __('plantinum');
            }
            if (isset($this->input['service_tax_cost'])) {
                $package_data['service_tax'] = $this->input['service_tax'];
                $package_data['service_tax_cost'] = $this->input['service_tax_cost'];
            } else {
                $package_data['service_tax_cost'] = 0;
                $package_data['service_tax'] = 0;
            }
            $package_upgrade_time = PACKAGE_UPGRADE_TIME;
            $billing_options = $package_data['payment_terms'];
            if ($billing_options == 1) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 30 days'));
            } elseif ($billing_options == 2) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 1 year'));
            } elseif ($billing_options == 3) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 2 year'));
            } elseif ($billing_options == 4) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 3 year'));
            }
            $expiry_date_time = date('Y-m-d H:i:s', strtotime($expiry_date_time . '  - 1 day'));
            if (PACKAGE_TYPE == 0) {
                if (TRIAL_EXPIRY_DAYS == 1) {
                    $trial_expiry_day = ' +1 day';
                } else {
                    $trial_expiry_day = TRIAL_EXPIRY_DAYS . ' days';
                }
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($expiry_date_time . $trial_expiry_day));
            }
            $package_data['expiry_date_time']=$expiry_date_time;
            $package_data['pay_mode'] = 1;
            $package_data['paid_status']=0;
            $this->update = $package->update_package_info($package_data);
            $this->send_mail_payment_failure('invoice_failure', $package_data['email'], $package_data['name'], $package_data['invoice_id'], $package_data['amount'], $package_data['currency_symbol']);
            $product_id = $this->input['product_id'];
            if ($product_id != "") {
                /* CURL FUNCTION FOR CONTACT CRM */
                $json_value = json_encode($_POST);
                $data_array = [];
                $data_array['name'] = $this->input['name'];
                $data_array['email'] = $this->input['email'];
                $data_array['phone'] = $this->input['phone'];
                $data_array['currency'] = $this->input['currency'];
                $data_array['domain'] = $this->input['business_name'];
                $data_array['product'] = $product_id;
                $data_array['payment_response'] = $json_value;
                $data_array['createdate'] = $this->input['createdate'];
                $data_array['expirydate'] = $this->input['expirydate'];
                $data_array['amount'] = $this->input['total_amount'];
                $data_array['transaction_id'] = '';
                $data_array['ePGTxnID'] = '';
                $data_array['invoice_id'] = $this->input['invoice_id'];
                $data_array['subscription_details'] = $subscription_details;
                $data_array['payment_reason'] = '';
                $data_array['payment_status_data'] = '';
                $data_array['payment_status'] = 2;
                $data_array['payment_terms'] = $this->input['payment_terms'];
                $data_array['service_tax_cost'] = $package_data['service_tax_cost'];
                $data_array['service_tax'] = $package_data['service_tax'];
                $data_array['country'] = $this->input['country'];
                $data_array['authentication_accesskey']=CRM_PAYMENT_AUTHENTICATION_ACCESSKEY;
                $data = $data_array;
                
                /*if (CRM_UPDATE_ENABLE == 1 && class_exists('Thirdpartyapi')) {
                        if (method_exists('Thirdpartyapi', 'cloud_payment_failure')) {
                            $thirdpartyapi = Thirdpartyapi::instance('alternate');
                            $thirdpartyapi->cloud_payment_failure($data_array);
                        }
                   }*/
                //url-ify the data for the POST
                $fields_string = '';
                $fields_string = http_build_query($data);
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_PORT => CRM_PORT,
                    CURLOPT_URL => CRM_HOST_URL,
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
                    echo "cURL Error #:" . $err;
                } else {
                    echo $response;
                }
            }
            /*$this->template->title = CLOUD_SITENAME . ' | Payment Status ';
            $this->meta_description = "Our support team is active round the clock to hear from you. There may be several reasons for payment declined, kindly re-check formalities";
            $this->template->page_title = __('payment_failure');
            $this->template->content = View::factory(ADMINVIEW . "package_plan/payment_status")
                    ->bind('ResponseCode', $this->ResponseCode)
                    ->bind('Message', $this->Message)
                    ->bind('TxnID', $this->TxnID)
                    ->bind('ePGTxnID', $this->ePGTxnID)
                    ->bind('amount', $this->amount)
                    ->bind('currency_sym', $this->currency_symbol)
                    ->bind('pay_amount_code', $this->session->get['payment_postvalues']['pay_amount_code']);*/
            $this->session->delete('payment_postvalues');
        } else {
            Message::error(__('invalid_access'));
            $this->request->redirect("package/account_plan");
        }
    }
    public function action_cloudpaymentstatus(){
        $payment_post_values=$this->session->get('payment_postvalues');
         $this->template->title = 'NDOT Technologies | Successful ';
                                      $this->template->page_title = __('payment_success');
                                      $this->meta_description = "Thank you for believing in NDOT. We are continuously working towards the growth of client's business by providing industry-standard products.";
                                      $this->template->content = View::factory(ADMINVIEW . "package_plan/payment_status")
                                            /*->bind('ResponseCode', $this->ResponseCode)
                                            ->bind('Message', $this->Message)
                                            ->bind('TxnID', $this->TxnID)
                                            //->bind('ePGTxnID', $this->ePGTxnID)
                                            ->bind('amount', $this->amount)
                                            ->bind('currency_sym', $this->currency_symbol)
                                            ->bind('pay_amount_code', $this->session->get['payment_postvalues']['pay_amount_code'])*/
                                            ->bind('postvalue', $payment_post_values);
                                    
    }
    
    public function action_resendmail(){
        $email=$_POST['email'];
        if($email==''){            
            return 0;
        }
         if (CRM_UPDATE_ENABLE == 1 && class_exists('Thirdpartyapi')) {
                        if (method_exists('Thirdpartyapi', 'crm_resend_email')) {
                            $thirdpartyapi = Thirdpartyapi::instance();                            
                            echo $thirdpartyapi->crm_resend_email($email);
                            exit;
                            
                        }
                    }
        exit;
    }
    
    
   /* public function action_ajax_preference_settings(){
        $postvalue = $this->request->post();
        $languageID = $postvalue['languageID'];
        $web_lang_array = WEB_DB_LANGUAGE;
        $ios_db_driver_lang = IOS_DRIVER_LANG;
        $ios_db_passenger_lang = IOS_PASSENGER_LANG;
        $ios_db_driver_colorcode = IOS_DRIVER_COLORCODE;
        $ios_db_passenger_colorcode = IOS_PASSENGER_COLORCODE;
        $android_db_driver_lang = ANDROID_DRIVER_LANG;
        $android_db_passenger_lang = ANDROID_PASSENGER_LANG;
        $android_db_driver_colorcode = ANDROID_DRIVER_COLORCODE;
        $android_db_passenger_colorcode = ANDROID_PASSENGER_COLORCODE;
        
        $web_lang = $ios_driver_lang = $ios_passenger_lang = $ios_driver_colorcode = $ios_passenger_colorcode = $android_driver_lang = $android_passenger_lang = $android_driver_colorcode = $android_passenger_colorcode = "";
        if(array_key_exists($languageID,$web_lang_array)){ $web_lang = $web_lang_array[$languageID]; }
        if(array_key_exists($languageID,$ios_db_driver_lang)){ $ios_driver_lang = $ios_db_driver_lang[$languageID]; }
        if(array_key_exists($languageID,$ios_db_passenger_lang)){ $ios_passenger_lang = $ios_db_passenger_lang[$languageID]; }
        if(array_key_exists($languageID,$ios_db_driver_colorcode)){ $ios_driver_colorcode = $ios_db_driver_colorcode[$languageID]; }
        if(array_key_exists($languageID,$ios_db_passenger_colorcode)){ $ios_passenger_colorcode = $ios_db_passenger_colorcode[$languageID]; }
        if(array_key_exists($languageID,$android_db_driver_lang)){ $android_driver_lang = $android_db_driver_lang[$languageID]; }
        if(array_key_exists($languageID,$android_db_passenger_lang)){ $android_passenger_lang = $android_db_passenger_lang[$languageID]; }
        if(array_key_exists($languageID,$android_db_driver_colorcode)){ $android_driver_colorcode = $android_db_driver_colorcode[$languageID]; }
        if(array_key_exists($languageID,$android_db_passenger_colorcode)){ $android_passenger_colorcode = $android_db_passenger_colorcode[$languageID]; }
        //echo  json_encode($dns_details);
        foreach($postvalue['inputradio_id'] as $value){
            print_r($value);
            if($value){
                
            }
        }exit;
        echo $web_lang."==".$ios_driver_lang."==".$ios_passenger_lang."==".$ios_driver_colorcode."==".$ios_passenger_colorcode."==".$android_driver_lang."==".$android_passenger_lang."==".$android_driver_colorcode."==".$android_passenger_colorcode; exit;
    }*/
    
   
    
    /* public function action_subscription_extend(){
        $package_upgrade_time = PACKAGE_UPGRADE_TIME;
            $billing_options = 2;
            if ($billing_options == 1) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 30 days'));
            } elseif ($billing_options == 2) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 1 year'));
            } elseif ($billing_options == 3) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 2 year'));
            } elseif ($billing_options == 4) {
                $expiry_date_time = date('Y-m-d H:i:s', strtotime($package_upgrade_time . ' + 3 year'));
            }
            $expiry_date_time = date('Y-m-d H:i:s', strtotime($expiry_date_time . '  - 1 day'));
            $package= Model::factory('package');
        $update_siteinfo=$package->update_siteinfo(2,28,$billing_options,$expiry_date_time);
        exit;
    }*/
    
     public function xml_entity_decode($s) {
    // here an illustration (by user-defined function) 
    // about how the hypothetical PHP-build-in-function MUST work
    static $XENTITIES = array('&amp;','&gt;','&lt;');
    static $XSAFENTITIES = array('#_x_amp#;','#_x_gt#;','#_x_lt#;');
    $s = str_replace($XENTITIES,$XSAFENTITIES,$s); 

    //$s = html_entity_decode($s, ENT_NOQUOTES, 'UTF-8'); // any php version
    $s = html_entity_decode($s, ENT_HTML5|ENT_NOQUOTES, 'UTF-8'); // PHP 5.3+

    $s = str_replace($XSAFENTITIES,$XENTITIES,$s);
    return $s;
  } 
  
	public function action_country_details()
    {
        $country = arr::get($_REQUEST, 'country');
        $allcountry_details = $this->country_details();
        if (isset($country)) {
			
			# selected country details
            $country_details = $this->country_details($country);
            $iso_code = $country_details[0];
            $currency_code = $country_details[2];
            $currency_symbol = $country_details[3];
            
            $explode_telephone = explode(',',$country_details[1]);
			$telephone_code = $explode_telephone[0];
            
			$field_type = '';
			$iso_options = $telephone_options = $code_options = $symbol_options = '';
			# all country details
			foreach($allcountry_details as $key => $value){
				
				$iso_list = $value[0];
				$currency_list = $value[2];
				$symbol_list = $value[3];
				
				$explode_telephone = explode(',',$value[1]);
				$telephone_list = $explode_telephone[0];
				
				$iso_checked = ($iso_list == $iso_code) ? ' selected' :' ';
				$currency_checked = ($currency_list == $currency_code) ? ' selected' :' ';
				$symbol_checked = ($symbol_list == $currency_symbol) ? ' selected' :' ';
				
				$iso_options .= '<option value='.$iso_list.$iso_checked.'>'.$iso_list.'</option>';
				$code_options .= '<option value='.$currency_list.$currency_checked.'>'.$currency_list.'</option>';
				$symbol_options .= '<option value='.$symbol_list.$symbol_checked.'>'.$symbol_list.'</option>';
				
				# country with multiple telephone code
				if(count($explode_telephone)>1){
					foreach($explode_telephone as $tele){
						$telephone_checked = ($tele == $telephone_code) ? ' selected' :' ';
						$telephone_options .= '<option value='.$tele.$telephone_checked.'>'.$tele.'</option>';
					}
				}else{
					$telephone_checked = ($telephone_list == $telephone_code) ? ' selected' :' ';
					$telephone_options .= '<option value='.$telephone_list.$telephone_checked.'>'.$telephone_list.'</option>';
				}		
			} 
            
            $select1 = '<select name="iso_code" id="iso_code" class="required" title="'.__("select_the_taximodel").'"><option value="">--Select--</option>'.$iso_options.'</select>';
            $select2 = '<select name="telephone_code" id="telephone_code" class="required" title="'.__("select_the_taximodel").'"><option value="">--Select--</option>'.$telephone_options.'</select>';
            $select3 = '<select name="currency_code" id="currency_code" class="required" title="'.__("select_the_taximodel").'"><option value="">--Select--</option>'.$code_options.'</select>';
            $select4 = '<select name="currency_symbol" id="currency_symbol" class="required" title="'.__("select_the_taximodel").'"><option value="">--Select--</option>'.$symbol_options.'</select>';
            $select = ['select1' => $select1, 'select2' => $select2, 'select3' => $select3, 'select4' => $select4];
            
            echo $select1.'@'.$select2.'@'.$select3.'@'.$select4;
		}
        exit;
    }
}
  
// End Welcome
?>
