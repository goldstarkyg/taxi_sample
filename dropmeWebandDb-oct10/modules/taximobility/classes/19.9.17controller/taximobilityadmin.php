<?php defined( 'SYSPATH' ) or die( 'No direct script access.' );
/****************************************************************
 * Contains admin details
* @Package: Taximobility
* @Author: taxi Team
* @URL : taximobility.com
 ********************************************************************/
class Controller_TaximobilityAdmin extends Controller_Siteadmin
{
    /**
     ****__construct()****
     * Common Function in this controller
     */
    public function __construct( Request $request, Response $response )
    {
        parent::__construct( $request, $response );
        //Models Installation
        $this->model_settings = Model::factory( 'admin' );
    }
    public function action_index()
    {
        $this->urlredirect->redirect( 'admin/login' );
    }


    public function action_import()
    {

        $mongo_db = MangoDB::instance('default'); 
        $api = Model::factory('mobileapi118'); 
        $filename   = file_get_contents(DOCROOT.'passengerdrpme.csv');
        @chmod($filename, 0777);
        # include parseCSV class.
        require_once(DOCROOT.'parsecsv.lib.php');
        # create new parseCSV object.

        $csv = new parseCSV();
      
        # Parse '_books.csv' using automatic delimiter detection...
        $csv->auto($filename);

        $data=array();
        $getEmail=array();
        $getPhoneNumber=array();
        $exitsEmail=array();
        $exitsPhone=array();
        foreach ($csv->data as $key => $row) 
        {
            $md_pwd =isset($row['password'])?md5($row['password']):md5(12345);
            $inc_id = Commonfunction::get_auto_id(MDB_PASSENGERS);
            $otp = text::random($type = 'numeric', $length = 4);
            $auto_referral_code = commonfunction::randomkey_generator('6');
            $current_time = date('Y-m-d H:i:s');

            $p_email=isset($row['email'])?$row['email']:"";
            $p_phone=isset($row['mobile'])?$row['mobile']:"";

            $email_exist = $api->check_email_passengers($p_email,0);
            $phone_exist = $api->check_phone_passengers($p_phone,0,'');
            if($email_exist >0)
            {
                $exitsEmail[]=$p_email;
            }else if($phone_exist >0)
            {
                $exitsPhone[]=$p_phone;
            }
            if($email_exist ===0 && $phone_exist===0)
            {
                $fieldname_array = array(
                        '_id' => (int)$inc_id,
                        'name' => isset($row['name'])?$row['name']:"",
                        'lastname' => '',
                        'email' => isset($row['email'])?$row['email']:"",
                        'password' => $md_pwd,
                        'org_password'=> $row['password'], 
                        'otp' => $otp,
                        'country_code' => 94,
                        'split_fare' =>'',
                        'skip_credit_card' =>'',
                        'forgot_password' =>'',
                        'phone' => isset($row['mobile'])?$row['mobile']:"",
                        'address' => null,
                        'referral_code' => $auto_referral_code,
                        'referral_code_amount' => (float)125,
                        'referral_code_limit' => 1,
                        'activation_key' => null,
                        'activation_status' => 1,
                        'user_status' => 'A',
                        'created_date' => Commonfunction::MongoDate(strtotime($current_time)),
                        'updated_date' => Commonfunction::MongoDate(strtotime($current_time)),
                        'passenger_cid' => (int)1,
                        'device_token'=> '',
                        'device_id' => '',
                        'device_type' => '',
                        'fb_user_id' => '',
                        'fb_access_token' => '',
                        'discount' => (float)0,
                        'salutation' => '',
                        'profile_image' => ""
                );  
               $insert      = $mongo_db->insertOne(MDB_PASSENGERS,$fieldname_array);
            }

           }
          
        exit();
    }

    /**
     * ****action_login()****
     * @return admin login page
     */
    public function action_login()
    {
        if ( $this->userid ) {
            $this->urlredirect->redirect( 'admin/dashboard' );
        }
        $error_msg = $success_msg = $userid = "";
        $submit = $this->request->post( 'admin_login' );
        $form_values = Arr::extract( $_REQUEST, array(
             'email',
            'password',
            'remember_me'
        ) );
        if ( PACKAGE_TYPE != 0 ) {
            if ( isset( $_GET['Authtoken'] ) && isset( $_GET['Auth'] ) ) {
                $form_values['password'] = $form_values['email'] = '';
            }
        } else {
            if ( isset( $_GET['Authtoken'] ) && isset( $_GET['Auth'] ) ) {
                $form_values['email']    = base64_decode( base64_decode( $_GET['Authtoken'] ) );
                $form_values['password'] = base64_decode( base64_decode( $_GET['Auth'] ) );
            }
        }
        
        //Cloud Email verification update to CRM
        if(isset($_GET['authmail']) && (CLOUD_EMAIL_VERIFICATION==0)){
              $authmail = base64_decode(base64_decode($_GET['authmail']));
              //Cloud email verification
                    if (CRM_UPDATE_ENABLE==1 && class_exists('Thirdpartyapi')) {
                        if (method_exists('Thirdpartyapi','crm_email_verification')) {                                    
                                    $thirdpartyapi= Thirdpartyapi::instance();
                                    $thirdpartyapi->crm_email_verification();                
                                }
                    }
        }
        $validate = $this->authorize->login_validate( $form_values );
        if ( isset( $submit ) || isset( $_GET['Authtoken'] ) ) {
            if ( $validate->check() ) {
                $select_result = $this->authorize->adminlogin_details( $form_values['email'], md5( $form_values['password'] ), FALSE );
                if ( count( $select_result ) > 0 ) {
                    $user_time_zone = $this->commonmodel->select_site_settings( 'user_time_zone', SITEINFO );
                    $userid         = $select_result[0]['id'];
                    $this->session->set( "userid", $select_result[0]['id'] );
                    $this->session->set( "user_type", $select_result[0]['user_type'] );
                    $this->session->set( "name", $select_result[0]['name'] );
                    $this->session->set( "username", $select_result[0]['username'] );
                    $this->session->set( "email", $select_result[0]['email'] );
                    $this->session->set( "company_id", $select_result[0]['company_id'] );
                    $this->session->set( "city_id", $select_result[0]['login_city'] );
                    $this->session->set( "state_id", $select_result[0]['login_state'] );
                    $this->session->set( "country_id", $select_result[0]['login_country'] );
                    $this->session->set( "timezone", $user_time_zone );
                    $usrid = $this->session->get( 'userid' );
                    if(isset($form_values['remember_me'])) {
						setcookie( "admin_email",$select_result[0]['email'],time() + (86400 * 30) );
						setcookie( "admin_password",$form_values['password'],time() + (86400 * 30) );
					}
                    $id    = $usrid;
                    //Last Login updated with Crm
                    if (CRM_UPDATE_ENABLE==1 && class_exists('Thirdpartyapi')) {
                        if (method_exists('Thirdpartyapi','crm_last_login_update')) {                                    
                                    $thirdpartyapi= Thirdpartyapi::instance();
                                    $thirdpartyapi->crm_last_login_update();                
                                }
                            }
                    Message::success( __( 'succesful_login_flash_front' ) . SITENAME );
                    $this->urlredirect->redirect( 'admin/dashboard' );
                } else {
                    Message::error( __( 'login_failure' ));
                }
            } else {
                $errors = $validate->errors( 'errors' );
            }
        }
        $this->template->page_title = __( 'page_login_title' );
        $view                       = View::factory( ADMINVIEW . 'login' )->bind( 'validate', $validate )->bind( 'form_values', $form_values )->bind( 'errors', $errors );
        $this->template->content    = $view;
    }
    /**
     *****action_changepassword()****
     * @return admin change password
     */
    public function action_changepassword()
    {
        $this->is_login();
        $errors         = array();
        $changepassword = arr::get( $_REQUEST, 'submit_changepassword' );
        /**To get current logged user id from session**/
        $usrid          = $this->session->get( 'userid' );
        $id             = $usrid;
        if ( isset( $changepassword ) && Validation::factory( $_POST ) ) {
            $postvalue = $_POST;
            $post      = Arr::map( 'trim', $this->request->post() );
            $validator = $this->authorize->changepassword_validate( arr::extract( $post, array(
                'oldpassword',
                'password',
                'repassword'
            ) ), $id );
            if ( $validator->check() ) {
                $update            = $this->authorize->changepassword( $post['password'], $this->userid );
                $adminname = isset($update['name']) ? ucfirst($update['name']):'';
                $adminemail = isset($update['email']) ? $update['email']:'';
                $mail              = "";
                $replace_variables = array(
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => $this->app_name,
                    REPLACE_USERNAME => $adminname,
                    REPLACE_EMAIL => $adminemail,
                    REPLACE_PASSWORD => $post['password'],
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => $this->siteemail,
                    REPLACE_SITEURL => URL_BASE,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR 
                );
                //~ $message           = $this->emailtemplate->emailtemplate( DOCROOT . TEMPLATEPATH . 'changepassword.html', $replace_variables );
                //~ $from              = $this->siteemail;
               
                $emailTemp = $this->commonmodel->get_email_template('admin_change_password');
				if(isset($emailTemp['status']) && ($emailTemp['status'] == '1')){
					
					$email_description = isset($emailTemp['description']) ? $emailTemp['description']: '';
					$subject = isset($emailTemp['subject']) ? $emailTemp['subject']: '';
					$message           = $this->emailtemplate->emailtemplate($email_description, $replace_variables);
					$to                = $adminemail;
					$from              = CONTACT_EMAIL;
					//~ $subject           = __( 'reset_password_label' ) . " - " . $this->app_name . "admin";
					$subject           = $subject . " - " . $this->app_name . "admin";
					$redirect          = "admin/changepassword";
					$mail_model        = Model::factory( 'add' );
					$smtp_result       = $mail_model->smtp_settings();
					if ( !empty( $smtp_result ) && ( $smtp_result[0]['smtp'] == 1 ) ) {
						include( $_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php" );
					} else {
						// To send HTML mail, the Content-type header must be set
						$headers = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						// Additional headers
						$headers .= 'From: ' . $from . '' . "\r\n";
						$headers .= 'Bcc: ' . $to . '' . "\r\n";
						mail( $to, $subject, $message, $headers );
					}
				}
                
                //$mail=array("to" => $update[0]['email'],"from"=>$this->siteemail,"subject"=>__("reset_password_label")." - ".$this->app_name."admin","message"=>$message);            
                //        $emailstatus = $this->email_send($mail,'smtp');
                Message::success( __( 'sucessful_change_password' ) );
                $this->request->redirect( "admin/changepassword" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $view                             = View::factory( ADMINVIEW . 'authorize/changepassword' )->bind( 'errors', $errors )->bind( 'postvalue', $postvalue );
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __( 'changepassword_label' );
        $this->template->page_title       = __( 'changepassword_label' );
    }
    /**
     *****action_editprofile()****
     * @return admin edit profile
     */
    public function action_editprofile()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype == 'C' ) {
            $this->request->redirect( "company/login" );
        }
        if ( $usertype == 'M' ) {
            $this->request->redirect( "manager/login" );
        }
        //get current page segment id 
        $usrid  = $this->request->param( 'userid' );
        $id     = $this->request->param( 'id' );
        $userid = isset( $usrid ) ? $usrid : $id;
        if ( $_SESSION['userid'] != $userid ) {
            Message::error( __( 'invalid_access' ) );
            $this->request->redirect( "admin/dashboard" );
        }
        //check current action
        $action = $this->request->action();
        $action .= "/" . $userid;
        $postvalue       = Arr::map( 'trim', $this->request->post() );
        $add_company     = Model::factory( 'add' );
        $country_details = $add_company->country_details();
        $city_details    = $add_company->city_details();
        $state_details   = $add_company->state_details();
        //getting request for form submit
        $editprofile     = arr::get( $_REQUEST, 'submit_editprofile' );
        $errors          = array();
        if ( isset( $editprofile ) && Validation::factory( $_POST ) ) {
            $post_values          = Securityvalid::sanitize_inputs( $postvalue );
            $post_values['image'] = $_FILES['image'];
            $validator            = $this->authorize->editprofile_validate( arr::extract( $post_values, array(
				'firstname',
                'lastname',
                'email',
                'phone',
                'address',
                'country',
                'state',
                'city',
                'image' 
            ) ), $userid );
            if ( $validator->check() ) {
                $status = $this->authorize->edit_people( $userid, $post_values, $_FILES );
                if ( $status == 1 ) {
                    Message::success( __( 'profile_updated_successfully' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/editprofile/" . $userid );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $login_details                    = $this->authorize->login_details_byid( $userid );
        $email                            = $_SESSION['email'];
        $view                             = View::factory( ADMINVIEW . 'authorize/editprofile' )->bind( 'errors', $errors )->bind( 'action', $action )->bind( 'validate', $validate )->bind( 'user_exists', $user_exists )->bind( 'postvalue', $postvalue )->bind( 'country_details', $country_details )->bind( 'city_details', $city_details )->bind( 'state_details', $state_details )->bind( 'login_detail', $login_details )->bind( 'email', $email );
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . "  | Admin ";
        $this->template->title            = "Edit Profile";
        $this->template->page_title       = "Edit Profile";
    }
    public function action_edituserprofile()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype == 'C' ) {
            $this->request->redirect( "company/login" );
        }
        if ( $usertype == 'M' ) {
            $this->request->redirect( "manager/login" );
        }
        //get current page segment id 
        $usrid  = $this->request->param( 'userid' );
        $id     = $this->request->param( 'id' );
        $userid = isset( $usrid ) ? $usrid : $id;
        //check current action
        $action = $this->request->action();
        $action .= "/" . $userid;
        $postvalue       = array();
        $add_company     = Model::factory( 'add' );
        $country_details = $add_company->country_details();
        $city_details    = $add_company->city_details();
        $state_details   = $add_company->state_details();
        //getting request for form submit
        $editprofile     = arr::get( $_REQUEST, 'submit_editprofile' );
        $errors          = array();
        if ( isset( $editprofile ) && Validation::factory( $_POST ) ) {
            $postvalue = Securityvalid::sanitize_inputs( Arr::map( 'trim', $this->request->post() ) );
            $validator = $this->authorize->editprofile_validate( arr::extract( $postvalue, array(
                 'firstname',
                'lastname',
                'email',
                'phone',
                'address',
                'country',
                'state',
                'city' 
            ) ), $userid );
            if ( $validator->check() ) {
                $status = $this->authorize->edit_people( $userid, $postvalue ,$files='');
                if ( $status == 1 ) {
                    Message::success( __( 'profile_updated_successfully' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "manageusers/index" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $login_details = $this->authorize->login_details_byid( $userid );
        if ( empty( $login_details ) ) {
            $this->request->redirect( "manageusers/index" );
        }
        $view                             = View::factory( ADMINVIEW . 'authorize/edituserprofile' )->bind( 'errors', $errors )->bind( 'action', $action )->bind( 'validate', $validate )->bind( 'user_exists', $user_exists )->bind( 'postvalue', $postvalue )->bind( 'country_details', $country_details )->bind( 'city_details', $city_details )->bind( 'state_details', $state_details )->bind( 'login_detail', $login_details );
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . "  | Admin ";
        $this->template->title            = SITENAME . " | Edit Profile";
        $this->template->page_title       = "Edit Profile";
    }
    /**
     *****action_editpassenger()****
     * @return admin edit passenger
     */
    public function action_editpassenger()
    {
        $add_model = Model::factory( 'add' );
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype == 'C' ) {
            $this->request->redirect( "company/login" );
        }
        if ( $usertype == 'M' ) {
            $this->request->redirect( "manager/login" );
        }
        //get current page segment id 
        $usrid  = $this->request->param( 'userid' );
        $id     = $this->request->param( 'id' );
        $userid = isset( $usrid ) ? $usrid : $id;
        //check current action
        $action = $this->request->action();
        $action .= "/" . $userid;
        $postvalue     = array();
        $login_details = $this->authorize->login_details_by_passengerid( $userid );
        if ( count( $login_details ) == 0 ) {
            $this->request->redirect( "manageusers/passengers" );
        }
        //getting request for form submit
        $editprofile = arr::get( $_REQUEST, 'submit_editprofile' );
        $errors      = array();
        if ( isset( $editprofile ) && Validation::factory( $_POST ) ) {
            $postvalue = Securityvalid::sanitize_inputs( Arr::map( 'trim', $this->request->post() ) );
            $validator = $this->authorize->editpassenger_validate( arr::extract( $postvalue, array(
                 'name',
                'email',
                'phone',
                'address',
                'discount' 
            ) ), $userid );
            if ( $validator->check() ) {
                $status = $this->authorize->edit_passenger( $userid, $postvalue );
                if ( $status == 1 ) {
                    Message::success( __( 'profile_updated_successfully' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "manageusers/passengers" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $taxicompany_details              = $add_model->taxicompany_details();
        $view                             = View::factory( ADMINVIEW . 'authorize/editpassenger' )->bind( 'errors', $errors )->bind( 'action', $action )->bind( 'validate', $validate )->bind( 'user_exists', $user_exists )->bind( 'postvalue', $postvalue )->bind( 'taxicompany_details', $taxicompany_details )->bind( 'login_detail', $login_details );
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Passenger ";
        $this->template->meta_keywords    = SITENAME . "  | Passenger ";
        $this->template->title            = SITENAME . " | " . __( 'editprofile_label' );
        $this->template->page_title       = __( 'editprofile_label' );
    }
    /**
     *****action_logout()****
     * @return admin logout from site
     */
    public function action_logout()
    {
        $this->session->destroy();
        Cookie::delete( 'userid' );
        Cookie::delete( 'login_user' );
        Cookie::delete( 'user_type_openvbx' );
        $this->request->redirect( "/admin/login" );
    }
    /**
     *****action_forgotpassword()****
     * @return admin forgot password
     */
    public function action_forgot_password()
    {
        $errors         = array();
        $forgotpassword = arr::get( $_REQUEST, 'submit_forgot_password_admin' );
        if ( isset( $forgotpassword ) && Validation::factory( $_POST ) ) {
            $postvalue = $_POST;
            $post      = Arr::map( 'trim', $this->request->post() );
            $validator = $this->authorize->forgotpassword_validate( arr::extract( $post, array(
                 'email' 
            ) ) );
            if ( $validator->check() ) {
                $user_detail = $this->authorize->select_users_byemail( $post['email'], "" );
                $password    = Text::random();
                $this->authorize->changepassword( $password, $user_detail[0]['id'] );
                $mail              = "";
                $replace_variables = array(
                     REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => $this->app_name,
                    REPLACE_USERNAME => ucfirst( $user_detail[0]['name'] ),
                    REPLACE_EMAIL => $post['email'],
                    REPLACE_PASSWORD => $password,
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => $this->siteemail,
                    REPLACE_SITEURL => URL_BASE,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR 
                );
                //~ $message           = $this->emailtemplate->emailtemplate( DOCROOT . TEMPLATEPATH . 'forgotpassword.html', $replace_variables );
                
                $emailTemp = $this->commonmodel->get_email_template('admin_forgot_password');
				if(isset($emailTemp['status']) && ($emailTemp['status'] == '1')){
					
					$email_description = isset($emailTemp['description']) ? $emailTemp['description']: '';
					$subject = isset($emailTemp['subject']) ? $emailTemp['subject']: '';
					$message           = $this->emailtemplate->emailtemplate($email_description, $replace_variables);
					$to                = $post['email'];
					$from              = CONTACT_EMAIL;					
					$subject           = $subject . " - " . $this->app_name;
					$redirect          = "admin/login";
					$mail_model        = Model::factory( 'add' );
					$smtp_result       = $mail_model->smtp_settings();
					if ( !empty( $smtp_result ) && ( $smtp_result[0]['smtp'] == 1 ) ) {
						include( $_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php" );
					} else {
						// To send HTML mail, the Content-type header must be set
						$headers = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						// Additional headers
						$headers .= 'From: ' . $from . '' . "\r\n";
						$headers .= 'Bcc: ' . $to . '' . "\r\n";
						mail( $to, $subject, $message, $headers );
					}
				}
                
                Message::success( __( 'sucessful_forgot_password' ) );
                $this->request->redirect( "admin/login" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $view                             = View::factory( ADMINVIEW . 'forgot_password' )->bind( 'errors', $errors )->bind( 'postvalue', $postvalue );
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __( 'forgot_password' );
        $this->template->page_title       = __( 'forgot_password' );
    }
    
    public function action_delete()
    {
        $this->is_login();
        //get current page segment id 
        $userid      = $this->request->param( 'id' );
        //user image delete and unlink that image
        $user_delete = $this->authorize->check_userphoto( $userid );
        if ( file_exists( DOCROOT . USER_IMGPATH . $user_delete ) && $user_delete != '' ) {
            unlink( DOCROOT . USER_IMGPATH . $user_delete );
        }
        if ( file_exists( DOCROOT . USER_IMGPATH_THUMB . $user_delete ) && $user_delete != '' ) {
            unlink( DOCROOT . USER_IMGPATH_THUMB . $user_delete );
        }
        //perform delete action 
        $status = $this->authorize->delete_people( $userid );
        //Flash message 
        Message::success( __( 'user_delete_flash' ) );
        //redirects to index page after deletion
        $this->request->redirect( "manageusers/index" );
    }
    /**
     * ****action_is_login()****
     * @return check user logged or not
     */
    public function is_login()
    {
        $session = Session::instance();
        //get current url and set it into session
        //========================================
        $this->session->set( 'requested_url', Request::detect_uri() );
        /**To check Whether the user is logged in or not**/
        if ( !isset( $this->session ) || ( !$this->session->get( 'userid' ) ) ) // && !$this->session->get('id')        
            {
            Message::error( __( 'login_access' ) );
            $this->request->redirect( "/admin/login/" );
        }
        return;
    }
    // Block or Unblock user
    //===============================
    public function action_blkunblk()
    {
        $this->is_login();
        $userid       = $this->request->param( 'id' );
        $updatestatus = $this->request->param( 'sid' );
        $status       = $this->authorize->activate_deactivate_people( $userid, $updatestatus );
        //Flash message 
        Message::success( 'User status has been changed successfully' );
        //redirects to index page after deletion
        $this->request->redirect( "manageusers/index" );
    }
    // Block or Unblock passenger
    //===============================
    public function action_blkunblk_passenger()
    {
        $this->is_login();
        $userid       = $this->request->param( 'id' );
        $updatestatus = $this->request->param( 'sid' );
        $status       = $this->authorize->activate_deactivate_passenger( $userid, $updatestatus );
        //Flash message 
        Message::success( __( 'passenger_bulk_block' ) );
        //redirects to index page after deletion
        $this->request->redirect( "manageusers/passengers" );
    }
    /** Manage Site Settings **/
    public function action_manage_site()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $errors         = array();
        $signup_submit  = arr::get( $_REQUEST, 'editsettings_submit' );
        $post_values    = Securityvalid::sanitize_multiple_array_inputs( Arr::map( 'trim', $this->request->post()));
        $data_array = array();
        if(isset($post_values['site_language']) && is_array($post_values['site_language'])){
            if($post_values['site_language'][0]=='' && count($post_values['site_language']) == 1){
                $post_values['site_language'] = array();
            }else{
                foreach($post_values['site_language'] as $v){
                    if($v!=""){
                       $data_array[]=$v;
                    }
                }
                $post_values['site_language'] = $data_array;
            }
        }
        $content_fields = Arr::extract( $this->request->post(), array(
            'banner_content',
            'app_content',
            'about_us_content',
            'contact_us_content',
        ) );
        $post_values    = array_merge( $post_values, $content_fields );
        if ( $signup_submit && Validation::factory( $post_values, $_FILES ) ) {
            $post_values        = arr::merge( $post_values, $_FILES );
            $validator          = $this->model_settings->validate_updatesiteinfo( arr::extract( $post_values, array(
				'app_name',
                'app_description',
                'contact_email',
                'phone_number',
                'meta_keyword',
                'meta_description',
                'site_tagline',
                'notification_settings',
                'admin_commission',
                'sms_enable',
                'default_unit',
                'skip_credit_card',
                'cancellation_fare',
                'tax',
                'insurance_amount',
                'fare_calculation',
                'price_settings',
                'show_map',
                'pagination_settings',
                'tell_to_friend_message',
                'continuous_request_time',
                'referral_settings',
                'referral_amount',
                'wallet_amount1',
                'wallet_amount2',
                'wallet_amount3',
                'wallet_amount_range',
                'driver_referral_setting',
                'driver_referral_amount',
                'ios_google_map_key',
                'ios_google_geo_key',
                'web_google_map_key',
                'web_google_geo_key',
                'google_timezone_api_key',
                'android_google_api_key',
                'default_miles',
                'date_time_format',
                'user_time_zone',
                'app_android_store_link',
                'app_ios_store_link',
                'passenger_app_android_store_link',
                'passenger_app_ios_store_link',
                'site_language'
            ) ), $_FILES );
            
            //'currency_code','site_currency',
            if ( $validator->check() ) {
                //to get previous referral amount to check whether new referral amount 
                $siteInfo       = $this->siteinfo;
                $referralAmount = $siteInfo[0]['referral_amount'];
                $status         = $this->model_settings->updatesiteinfo( $post_values );
                //set changed timezone settings to session
                $this->session->set( "timezone", $post_values['user_time_zone'] );
                if ( $referralAmount != $post_values['referral_amount'] ) {
                    $allPassList = $this->model_settings->passenger_list_referralcode();
                    $passArr     = array();
                    if ( count( $allPassList ) > 0 ) {
                        foreach ( $allPassList as $passengers ) {
                            $passArr[] = $passengers['id'];
                        }
                        $this->model_settings->update_wallet( $passArr, $post_values['referral_amount'] );
                    }
                }
                if ( $status == 1 ) {
					$selected_lang = $this->model_settings->get_selectedlang();
					if($selected_lang != ''){
						$this->currlang            = I18n::lang( $selected_lang.'def' );
					}
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/manage_site" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $currencysymbol             = $this->currencysymbol;
        $id                         = $this->request->param( 'id' );
        $email                      = $_SESSION['email'];
        $site_settings              = $this->siteinfo;
        $company_timezone           = ( isset( $site_settings[0]['user_time_zone'] ) && $site_settings[0]['user_time_zone'] != "" ) ? $site_settings[0]['user_time_zone'] : TIMEZONE;
        $this->selected_page_title  = __( "site_settings" );
        $view                       = View::factory( 'admin/add_settings_site' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'site_settings', $site_settings )->bind( 'email', $email )->bind( 'company_timezone', $company_timezone )->bind( 'currency_symbol', $currencysymbol );
        $this->template->title      = SITENAME . " | " . __( 'site_settings' );
        $this->template->page_title = __( 'site_settings' );
        $this->template->content    = $view;
    }
    /** Manage menu Settings **/
    public function action_menu_settings()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings      = Model::factory( 'admin' );
        $errors        = array();
        $signup_submit = arr::get( $_REQUEST, 'editsettings_submit' );
        $errors        = array();
        $post_values   = array();
        if ( $signup_submit && Validation::factory( $_POST ) ) {
            $post_values = $_POST;
            $post        = Arr::map( 'trim', $this->request->post() );
            $validator   = $settings->validate_update_menusettings( arr::extract( $post, array(
                 'menu_name',
                'menu_link' 
            ) ) );
            $validator1  = $settings->validate_update_menusettings1( arr::extract( $post, array(
                 'menu_name1',
                'menu_link1' 
            ) ) );
            if ( $validator->check() || $validator1->check() ) {
                if ( !empty( $post['cnt_contact'] ) ) {
                    $status = $settings->insert_menusettings( $post );
                }
                if ( !empty( $post['cnt_contact1'] ) ) {
                    $status = $settings->update_menusettings( $post );
                }
                if ( $status == 1 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/menu_settings" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $site_menu_settings         = $settings->get_menusettings();
        $this->selected_page_title  = __( "menu_settings" );
        $view                       = View::factory( 'admin/admin_menu_settings' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'site_menu_settings', $site_menu_settings )->bind( 'postvalue', $post_values );
        $this->template->title      = SITENAME . " | " . __( 'menu_settings' );
        $this->template->page_title = __( 'menu_settings' );
        $this->template->content    = $view;
    }
    //delete the menus
    public function action_delete_menus()
    {
        $this->is_login();
        $id           = $this->request->param( 'id' );
        $delete_menus = Model::factory( 'admin' );
        $delete_menu  = $delete_menus->delete_menus( $id );
        if ( $delete_menu ) {
            Message::success( __( 'Menu was deleted.' ) );
            $this->request->redirect( "admin/menu_settings" );
        }
    }
    /** Manage module Settings **/
    public function action_module_settings()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings      = Model::factory( 'admin' );
        $errors        = array();
        $signup_submit = arr::get( $_REQUEST, 'submit_modules' );
        $errors        = array();
        $post_values   = array();
        if ( $signup_submit && Validation::factory( $_POST, $_FILES ) ) {
            $post_values = $_POST;
            $post        = Securityvalid::sanitize_inputs( Arr::map( 'trim', $this->request->post() ) );
            $validator   = $settings->validate_update_module( arr::extract( $post, array(
                 'banner_image1',
                'banner_image2',
                'banner_image3',
                'banner_image4',
                'banner_image5' 
            ) ), $_FILES );
            if ( $validator->check() ) {
                $count                = $post['member'];
                $image_id             = $post['image_id'];
                $image_updated_status = '';
                if ( !empty( $_FILES['banner_image1']['name'] ) ) {
                    /* image1 */
                    $image_name1 = uniqid() . $_FILES['banner_image1']['name'];
                    $image_type  = explode( '.', $image_name1 );
                    $image_type  = end( $image_type );
                    $filename    = Upload::save( $_FILES['banner_image1'], $image_name1, DOCROOT . BANNER_IMGPATH );
                    //Image resize and crop for thumb image
                    $logo_image1 = Image::factory( $filename );
                    $path11      = DOCROOT . BANNER_IMGPATH;
                    $path1       = $image_name1;
                    Commonfunction::imageresize( $logo_image1, BANNER_SLIDER_WIDTH, BANNER_SLIDER_HEIGHT, $path11, $image_name1, 90 );
                    $image_updated_status = $settings->update_module_settings_images1( $path1, $image_id );
                }
                if ( !empty( $_FILES['banner_image2']['name'] ) ) {
                    /* image2 */
                    $image_name2 = uniqid() . $_FILES['banner_image2']['name'];
                    $image_type  = explode( '.', $image_name2 );
                    $image_type  = end( $image_type );
                    $filename    = Upload::save( $_FILES['banner_image2'], $image_name2, DOCROOT . BANNER_IMGPATH );
                    //Image resize and crop for thumb image
                    $logo_image2 = Image::factory( $filename );
                    $path22      = DOCROOT . BANNER_IMGPATH;
                    $path2       = $image_name2;
                    Commonfunction::imageresize( $logo_image2, BANNER_SLIDER_WIDTH, BANNER_SLIDER_HEIGHT, $path22, $image_name2, 90 );
                    $image_updated_status = $settings->update_module_settings_images2( $path2, $image_id );
                }
                if ( !empty( $_FILES['banner_image3']['name'] ) ) {
                    /* image3 */
                    $image_name3 = uniqid() . $_FILES['banner_image3']['name'];
                    $image_type  = explode( '.', $image_name3 );
                    $image_type  = end( $image_type );
                    $filename    = Upload::save( $_FILES['banner_image3'], $image_name3, DOCROOT . BANNER_IMGPATH );
                    //Image resize and crop for thumb image
                    $logo_image3 = Image::factory( $filename );
                    $path33      = DOCROOT . BANNER_IMGPATH;
                    $path3       = $image_name3;
                    Commonfunction::imageresize( $logo_image3, BANNER_SLIDER_WIDTH, BANNER_SLIDER_HEIGHT, $path33, $image_name3, 90 );
                    $image_updated_status = $settings->update_module_settings_images3( $path3, $image_id );
                }
                if ( !empty( $_FILES['banner_image4']['name'] ) ) {
                    /* image4 */
                    $image_name4 = uniqid() . $_FILES['banner_image4']['name'];
                    $image_type  = explode( '.', $image_name4 );
                    $image_type  = end( $image_type );
                    $filename    = Upload::save( $_FILES['banner_image4'], $image_name4, DOCROOT . BANNER_IMGPATH );
                    //Image resize and crop for thumb image
                    $logo_image4 = Image::factory( $filename );
                    $path44      = DOCROOT . BANNER_IMGPATH;
                    $path4       = $image_name4;
                    Commonfunction::imageresize( $logo_image4, BANNER_SLIDER_WIDTH, BANNER_SLIDER_HEIGHT, $path44, $image_name4, 90 );
                    $image_updated_status = $settings->update_module_settings_images4( $path4, $image_id );
                }
                if ( !empty( $_FILES['banner_image5']['name'] ) ) {
                    /* image5 */
                    $image_name5 = uniqid() . $_FILES['banner_image5']['name'];
                    $image_type  = explode( '.', $image_name5 );
                    $image_type  = end( $image_type );
                    $filename    = Upload::save( $_FILES['banner_image5'], $image_name5, DOCROOT . BANNER_IMGPATH );
                    //Image resize and crop for thumb image
                    $logo_image5 = Image::factory( $filename );
                    $path55      = DOCROOT . BANNER_IMGPATH;
                    $path5       = $image_name5;
                    Commonfunction::imageresize( $logo_image5, BANNER_SLIDER_WIDTH, BANNER_SLIDER_HEIGHT, $path55, $image_name5, 90 );
                    $image_updated_status = $settings->update_module_settings_images5( $path5, $image_id );
                }
                $status = $settings->update_module_settings( $post, $count );
                if ( $status == 1 ) {
                    $status = $status;
                } else {
                    $status = $image_updated_status;
                }
                if ( $status != 0 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/module_settings" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $site_settings              = $settings->site_module_settings();
        $site_info_settings         = $settings->site_info_settings();
        $this->selected_page_title  = __( "module_setting" );
        $view                       = View::factory( 'admin/site_module_settings' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'site_info_settings', $site_info_settings )->bind( 'site_settings', $site_settings );
        $this->template->title      = SITENAME . " | " . __( 'module_setting' );
        $this->template->page_title = __( 'module_setting' );
        $this->template->content    = $view;
    }
    /** Manage Site social settings **/
    public function action_social_network()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings              = Model::factory( 'admin' );
        $errors                = array();
        $socialsettings_submit = arr::get( $_REQUEST, 'editsocialsettings_submit' );
        $errors                = array();
        $post_values           = array();
        if ( $socialsettings_submit && Validation::factory( $_POST ) ) {
            $post_values = $_POST;
            $post        = Securityvalid::sanitize_inputs( Arr::map( 'trim', $this->request->post() ) );
            $validator   = $settings->validate_update_socialinfo( arr::extract( $post, array(
                 'facebook_key',
                'facebook_secretkey',
                'facebook_share',
                'twitter_share',
                'google_share',
                'linkedin_share', 
                'facebook_follow_link',
                'google_follow_link',
                'twitter_follow_link',
                'itune_passenger',
                'itune_driver',
                'fb_profile',
            ) ) );
            if ( $validator->check() ) {
                $status = $settings->update_socialinfo( $post );
                if ( $status == 1 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/social_network" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $id                         = $this->request->param( 'id' );
        $socialsettings             = $this->siteinfo;
        $this->selected_page_title  = __( "site_settings" );
        $view                       = View::factory( 'admin/socialnetwork_settings' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'socialsettings', $socialsettings );
        $this->template->title      = SITENAME . " | " . __( 'social_network_setting' );
        $this->template->page_title = __( 'social_network_setting' );
        $this->template->content    = $view;
    }
    public function action_payment_gateways()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings                = Model::factory( 'admin' );
        $errors                  = array();
        $payment_settings_submit = arr::get( $_REQUEST, 'editpaymentsettings_submit' );
        $errors                  = array();
        $post_values             = array();
        if ( $payment_settings_submit && Validation::factory( $_POST ) ) {
            $post_values = $_POST;
           
            //$validator = $settings->validate_update_payment_submit(arr::extract($_POST,array('payment_gatway_name','description','currency_code','currency_symbol','payment_method','paypal_api_username','paypal_api_password','paypal_api_signature')));
            //'site_city';
            //~ paymodstatus
            
            if ( !isset( $_POST['paymodstatus'] ) ) {
                $check_paystatus = 0;
            } else {
                if ( in_array( $_POST['default'][0], $_POST['paymodstatus'] ) ) {
                    $check_paystatus = 1;
                    if(!in_array('1',$_POST['paymodstatus']) && !in_array('2',$_POST['paymodstatus'])){
						$check_paystatus = 3;
					}
                } else {
                    $check_paystatus = 2;
                }
            }
            $check_default = $settings->check_array( $_POST['default'] );
            if ( $check_paystatus == 1 ) {
                $status = $settings->update_payment_submit( $_POST );
                if ( $status == 1 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/payment_gateways" );
            } else {
                //$errors = $validator->errors('errors');
                if ( $check_paystatus == 0 ) {
                    $errors['paymodstatus'] = 'Please select any one of the gateway';
                }else if ( $check_paystatus == 2 ) {
                    $errors['paymodstatus'] = 'Please select the default gateway';
                }else if ( $check_paystatus == 3 ) {
                    $errors['paymodstatus'] = 'credit card or cash is must be selected';
                }
            }
        }
        $id                         = $this->request->param( 'id' );
        $gatway_list                = $settings->get_payment_gateway_list();
        $gateway_name = array('1' => __('cash'),'2' => __('credit_card'),'3' => __('uncard'));
        $this->selected_page_title  = __( "site_settings" );
        $view                       = View::factory( 'admin/payment_gateway_settings' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'gatway_list', $gatway_list )->bind( 'gateway_name', $gateway_name );
        $this->template->title      = SITENAME . " | " . __( 'payment_gateway_module' );
        $this->template->page_title = __( 'payment_gateway_module' );
        $this->template->content    = $view;
    }
    public function action_payment_gateway_module()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings    = Model::factory( 'admin' );
        $update_post = arr::get( $_REQUEST, 'update' );
        $post        = array();
        if ( $update_post ) {
            $post = $_REQUEST;
            if ( isset( $post['default_payment'] ) ) {
                $id                     = $post['default_payment'];
                $update_default_country = $settings->update_default_payment( $id );
                if ( $update_default_country == 1 ) {
                    Message::success( __( 'changed_default_payment' ) );
                    $this->request->redirect( "admin/payment_gateway_module" );
                } else if ( $update_default_country == '-1' ) {
                    Message::error( __( 'select_the_activepayment' ) );
                    $this->request->redirect( "admin/payment_gateway_module" );
                } else {
                    Message::error( __( 'select_the_defaultpayment' ) );
                    $this->request->redirect( "admin/payment_gateway_module" );
                }
            } else {
                Message::error( __( 'not_updated' ) );
                $this->request->redirect( "admin/payment_gateway_module" );
            }
        }
        $count_company_list = $settings->count_paymentgateway_list();
        //pagination loads here
        //-------------------------
        $page_no            = isset( $_GET['page'] ) ? $_GET['page'] : 0;
        if ( $page_no == 0 || $page_no == 'index' )
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ( $page_no - 1 );
        $pag_data                   = Pagination::factory( array(
             'current_page' => array(
                 'source' => 'query_string',
                'key' => 'page' 
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb' 
        ) );
        $payment_settings           = $settings->get_payment_gateways( $offset, REC_PER_PAGE );
        $this->selected_page_title  = __( "site_settings" );
        $view                       = View::factory( 'admin/manage_payment_module' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'pag_data', $pag_data )->bind( 'payment_settings', $payment_settings )->bind( 'Offset', $offset );
        $this->template->title      = SITENAME . " | " . __( 'payment_gateway_setting' );
        $this->template->page_title = __( 'payment_gateway_setting' );
        $this->template->content    = $view;
    }
    public function action_edit_admin_gateways()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings                = Model::factory( 'admin' );
        $errors                  = array();
        $payment_settings_submit = arr::get( $_REQUEST, 'editadminpayment' );
        $errors                  = array();
        $post_values             = array();
        $id                      = $this->request->param( 'id' );
        if ( $payment_settings_submit && Validation::factory( $_POST ) ) {
            $post_values = $_POST;
            $validator   = $settings->validate_update_payment_submit( arr::extract( $_POST, array(
                 'payment_gatway_name',
                'description',
                'currency_code',
                'currency_symbol',
                'payment_method',
                'payment_gateway_username',
                'payment_gateway_password',
                'payment_gateway_signature' 
            ) ) );
            if ( $validator->check() ) {
                $status = $settings->admin_payment_submit( $_POST, $id );
                if ( $status == 1 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/payment_gateway_module" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $currencysymbol             = $this->currencysymbol;
        $currencycode               = $this->all_currency_code;
        $payment_settings           = $settings->get_payment_gateway_detail( $id );
        $this->selected_page_title  = __( "site_settings" );
        $view                       = View::factory( 'admin/edit_gateway_settings' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'payment_settings', $payment_settings )->bind( 'currency_symbol', $currencysymbol )->bind( 'currency_code', $currencycode );
        $this->template->title      = SITENAME . " | " . __( 'payment_gateway_setting' );
        $this->template->page_title = __( 'payment_gateway_setting' );
        $this->template->content    = $view;
    }
    public function action_mail_settings()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings      = Model::factory( 'admin' );
        $errors        = array();
        $signup_submit = arr::get( $_REQUEST, 'submit_editmailsetings' );
        $errors        = array();
        $post_values   = array();
        $id            = $this->request->param( 'id' );
        if ( $signup_submit && Validation::factory( $_POST ) ) {
            $post_values = $_POST;
            $post        = Securityvalid::sanitize_inputs( Arr::map( 'trim', $this->request->post() ) );
            $validator   = $settings->validate_mailsettings( arr::extract( $post, array(
                 'smtp_host',
                'smtp_port',
                'smtp_username',
                'smtp_password',
                'transport_layer_security',
                'smtp' 
            ) ) );
            if ( $validator->check() ) {
                $status = $settings->updatemailsetting( $post, $id );
                if ( $status == 1 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/mail_settings" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $mail_settings              = $settings->mail_settings( $id );
        $this->selected_page_title  = __( "site_settings" );
        $view                       = View::factory( 'admin/manage_mail_settings' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'mail_settings', $mail_settings );
        $this->template->title      = SITENAME . " | " . __( 'menu_mail_settings' );
        $this->template->page_title = __( 'menu_mail_settings' );
        $this->template->content    = $view;
    }
    public function action_sms_template()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings      = Model::factory( 'admin' );
        $id            = $this->request->param( 'id' );
        $sms_template               = $settings->sms_template( $id );
        $this->selected_page_title  = __( "sms_template" );
        $view                       = View::factory( 'admin/manage_sms_template' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'sms_template', $sms_template );
        $this->template->title      = SITENAME . " | " . __( 'sms_template' );
        $this->template->page_title = __( 'sms_template' );
        $this->template->content    = $view;
    }
    
    public function action_email_template()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings      = Model::factory( 'admin' );
        $id            = $this->request->param( 'id' );
        $sms_template               = $settings->email_template( $id );
        $this->selected_page_title  = __( "email_template" );
        $view                       = View::factory( 'admin/manage_email_template' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'sms_template', $sms_template );
        $this->template->title      = SITENAME . " | " . __( 'email_template' );
        $this->template->page_title = __( 'email_template' );
        $this->template->content    = $view;
    }
    
    public function action_activeusers_list()
    {
        $this->is_login();
        $dashboard        = Model::factory( 'admin' );
        $activeusers_list = $dashboard->get_activeusers_list();
        $output           = '';
        $output .= '<thead>
            <tr>
                <td width="80">' . __( 'name_label' ) . '</td>
                <td width="80">' . __( 'last_login' ) . '</td>
                <td width="80">' . __( 'phone_label' ) . '</td>
                <td width="80">' . __( 'address_label' ) . '</td>
                </tr>
        </thead>
        <tbody>';
        if ( isset( $activeusers_list ) && count( $activeusers_list ) > 0 ) {
            foreach ( $activeusers_list as $activeuserslist ) {
                $output .= '<tr>
                <td align="center"><a href="' . URL_BASE . 'manage/passengerinfo/' . $activeuserslist['id'] . '" title="' . $activeuserslist['name'] . '" >' . $activeuserslist['name'] . '</a></td>
                <td><span>' . $activeuserslist['last_login'] . '</span></td>
                <td><span >' . $activeuserslist['phone'] . '</span></td>
                <td><span >' . $activeuserslist['address'] . '</span></td>
            </tr>';
            }
        } else {
            $output .= '<tr><td colspan="4" align="center">' . __( 'no_data' ) . '</td> </tr>';
        }
        $output .= '</tbody>';
        echo $output;
        exit;
    }
    public function action_dashboard()
    {		
        if ( isset( $_SESSION['user_type'] ) ) {
            $usertype = $_SESSION['user_type'];
            if ( $usertype == 'M' ) {
                $this->urlredirect->redirect( 'manager/dashboard' );
            }
            if ( $usertype == 'C' ) {
                $this->urlredirect->redirect( 'company/dashboard' );
            }
        } else {
            $this->urlredirect->redirect( 'admin/login' );
        }
        $admin                      = Model::factory( 'admin' );
        $get_all_company            = $admin->get_single_multy_company();
        $driver_list                = $admin->get_driver_list( COMPANY_CID );
        $this->selected_page_title  = __( "dashboard" );
        $view                       = View::factory( 'admin/dashboard_new' )->bind( "driver_list", $driver_list )->bind( "getAllCompany", $get_all_company );
        $this->template->title      = SITENAME . " | " . __( 'dashboard' );
        $this->template->page_title = __( 'dashboard' );
        $this->template->content    = $view;
    }
    /** Manage Fund Request **/
    public function action_manage_fund_request()
    {
        $find_url = explode( '/', $_SERVER['REQUEST_URI'] );
        $split    = explode( '?', $find_url[3] );
        $list     = $split[0];
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $admin_model           = Model::factory( 'admin' );
        $transaction_model     = Model::factory( 'transaction' );
        $socialsettings_submit = arr::get( $_REQUEST, 'editsocialsettings_submit' );
        $errors                = array();
        $post_values           = array();
        if ( $list == 'all' ) {
            $page_title = __( "transaction_fr_all" );
        } elseif ( $list == 'approved' ) {
            $page_title = __( "approvedfundrequest" );
        } elseif ( $list == 'rejected' ) {
            $page_title = __( "rejectfundreq" );
        } elseif ( $list == 'success' ) {
            $page_title = __( "successfundreq" );
        } elseif ( $list == 'failed' ) {
            $page_title = __( "failedfundreq" );
        } elseif ( $list == 'pending' ) {
            $page_title = __( "pendingfundreq" );
        }
        $count_fundrequest_list = $admin_model->count_fundrequest_list( $list );
        $get_allcompany         = $transaction_model->get_allcompany_tranaction();
        //pagination loads here
        //-------------------------
        $page_no                = isset( $_GET['page'] ) ? $_GET['page'] : 0;
        if ( $page_no == 0 || $page_no == 'index' )
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ( $page_no - 1 );
        $pag_data                   = Pagination::factory( array(
             'current_page' => array(
                 'source' => 'query_string',
                'key' => 'page' 
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_fundrequest_list,
            'view' => 'pagination/punbb' 
        ) );
        $all_fundrequest_list       = $admin_model->all_fundreuest_list( $list, $offset, REC_PER_PAGE );
        $this->selected_page_title  = $page_title;
        $view                       = View::factory( 'admin/manage_fund_request' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'pag_data', $pag_data )->bind( 'get_allcompany', $get_allcompany )->bind( 'all_fundrequest_list', $all_fundrequest_list )->bind( 'Offset', $offset );
        $this->template->title      = SITENAME . " | " . $page_title;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    /** Manage Fund Request **/
    public function action_manage_fund_request_list()
    {
        $find_url = explode( '/', $_SERVER['REQUEST_URI'] );
        $split    = explode( '?', $find_url[3] );
        $list     = $split[0];
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $admin_model           = Model::factory( 'admin' );
        $transaction_model     = Model::factory( 'transaction' );
        $company_id            = trim( Html::chars( $_REQUEST['filter_company'] ) );
        $socialsettings_submit = arr::get( $_REQUEST, 'editsocialsettings_submit' );
        $errors                = array();
        $post_values           = array();
        if ( $list == 'all' ) {
            $page_title = __( "transaction_fr_all" );
        } elseif ( $list == 'approved' ) {
            $page_title = __( "approvedfundrequest" );
        } elseif ( $list == 'rejected' ) {
            $page_title = __( "rejectfundreq" );
        } elseif ( $list == 'success' ) {
            $page_title = __( "successfundreq" );
        } elseif ( $list == 'failed' ) {
            $page_title = __( "failedfundreq" );
        } elseif ( $list == 'pending' ) {
            $page_title = __( "pendingfundreq" );
        }
        $count_fundrequest_list = $admin_model->count_search_fundrequest_list( $list, $company_id );
        $get_allcompany         = $transaction_model->get_allcompany_tranaction();
        //pagination loads here
        //-------------------------
        $page_no                = isset( $_GET['page'] ) ? $_GET['page'] : 0;
        if ( $page_no == 0 || $page_no == 'index' )
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ( $page_no - 1 );
        $pag_data                   = Pagination::factory( array(
             'current_page' => array(
                 'source' => 'query_string',
                'key' => 'page' 
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_fundrequest_list,
            'view' => 'pagination/punbb' 
        ) );
        $all_fundrequest_list       = $admin_model->all_search_fundreuest_list( $list, $offset, REC_PER_PAGE, $company_id );
        $this->selected_page_title  = $page_title;
        $view                       = View::factory( 'admin/manage_fund_request' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'pag_data', $pag_data )->bind( 'get_allcompany', $get_allcompany )->bind( 'all_fundrequest_list', $all_fundrequest_list )->bind( 'srch', $_REQUEST )->bind( 'Offset', $offset );
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    public function action_payment_module()
    {
        $this->is_login();
        $find_url    = explode( '/', $_SERVER['REQUEST_URI'] );
        $split       = explode( '?', $find_url[3] );
        $pay_mod_id  = $split[0];
        $admin_model = Model::factory( 'admin' );
        $result      = $admin_model->delete_module( $pay_mod_id );
        if ( $result == 1 ) {
            Message::success( __( 'changesmodified' ) );
        }
        $this->request->redirect( "admin/payment_gateways" );
    }
    //Admin Transactions without Search action 
    public function action_account_report()
    {
        $this->is_login();
        $find_url       = explode( '/', $_SERVER['REQUEST_URI'] );
        $split          = explode( '?', $find_url[2] );
        $list           = $split[0];
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype == 'C' ) {
            $this->request->redirect( "company/login" );
        }
        if ( $usertype == 'M' ) {
            $this->request->redirect( "manager/login" );
        }
        $manage_transaction         = Model::factory( 'transaction' );
        $admin_model                = Model::factory( 'admin' );
        $common_model               = Model::factory( 'commonmodel' );
        $page_title                 = __( "account_report" );
        $list                       = 'all';
        $get_allcompany             = $manage_transaction->get_allcompany_tranaction( $usertype );
        $startdate                  = date( 'Y-m-d 00:00:00', strtotime( '-7 days' ) );
        $enddate                    = date( 'Y-m-d 24:59:59' );
        $grpahdata                  = $manage_transaction->getaccountreportvalues( $list, 'All', $startdate, $enddate, '' );
        $gateway_details            = $common_model->gateway_details();
        $all_transaction_list       = $manage_transaction->accountreport_details( $list, 'All', $startdate, $enddate, '' );
        $total_amount               = $manage_transaction->accountreport_details_payment( 'All', $startdate, $enddate, '' );
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory( 'admin/account_report' )->bind( 'Offset', $offset )->bind( 'action', $action )->bind( 'srch', $_REQUEST )->bind( 'pag_data', $pag_data )->bind( 'all_transaction_list', $all_transaction_list )->bind( 'payment_details', $payment_details )->bind( 'get_allcompany', $get_allcompany )->bind( 'payment_details', $payment_details )->bind( 'gateway_details', $gateway_details )->bind( 'package_details', $package_details )->bind( 'grpahdata', $grpahdata )->bind( 'id', $id )->bind( 'total_amount', $total_amount );
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    public function action_account_report_list()
    {
        $this->is_login();
        $find_url       = explode( '/', $_SERVER['REQUEST_URI'] );
        $split          = explode( '?', $find_url[2] );
        $list           = $split[0];
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype == 'C' ) {
            $this->request->redirect( "company/login" );
        }
        if ( $usertype == 'M' ) {
            $this->request->redirect( "manager/login" );
        }
        $page_title         = __( "account_report" );
        $list               = 'all';
        $company            = trim( Html::chars( $_REQUEST['filter_company'] ) );
        $startdate          = Commonfunction::ensureDatabaseFormat( trim( Html::chars( $_REQUEST['startdate'] ) ), 1 );
        $enddate            = Commonfunction::ensureDatabaseFormat( trim( Html::chars( $_REQUEST['enddate'] ) ), 2 );
        $payment_type       = trim( Html::chars( $_REQUEST['payment_type'] ) );
        $manage_transaction = Model::factory( 'transaction' );
        $common_model       = Model::factory( 'commonmodel' );
        $get_allcompany     = $manage_transaction->get_allcompany_tranaction();
        $managerlist        = $manage_transaction->getmanagerdetails( $company );
        if ( ( $company != "" ) && ( $company != "All" ) && $company != 0 ) {
            $total_amount = $manage_transaction->get_company_commission_amount( $company, $startdate, $enddate, $payment_type );
        } else {
            $total_amount = $manage_transaction->accountreport_details_payment( $company, $startdate, $enddate, $payment_type );
        }
        $all_transaction_list       = $manage_transaction->accountreport_details( $list, $company, $startdate, $enddate, $payment_type );
        $grpahdata                  = $manage_transaction->getaccountreportvalues( $list, $company, $startdate, $enddate, $payment_type );
        $gateway_details            = $common_model->gateway_details();
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory( 'admin/account_report' )->bind( 'Offset', $offset )->bind( 'action', $action )->bind( 'srch', $_REQUEST )->bind( 'pag_data', $pag_data )->bind( 'all_transaction_list', $all_transaction_list )->bind( 'taxilist', $taxilist )->bind( 'driverlist', $driverlist )->bind( 'managerlist', $managerlist )->bind( 'passengerlist', $passengerlist )->bind( 'get_allcompany', $get_allcompany )->bind( 'grpahdata', $grpahdata )->bind( 'payment_details', $payment_details )->bind( 'gateway_details', $gateway_details )->bind( 'id', $id )->bind( 'total_amount', $total_amount );
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }

    public function action_active_driver_report()
    {
        $find_url       = explode( '/', $_SERVER['REQUEST_URI'] );
        $split          = explode( '?', $find_url[2] );
        $list           = $split[0];
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype == 'C' ) {
            $this->request->redirect( "company/login" );
        }
        if ( $usertype == 'M' ) {
            $this->request->redirect( "manager/login" );
        }
        $company                 = isset( $_REQUEST['filter_company'] ) ? trim( Html::chars( $_REQUEST['filter_company'] ) ) : '';
        $startdate               = isset( $_REQUEST['startdate'] ) ? trim( Html::chars( $_REQUEST['startdate'] ) ) : '';
        $enddate                 = isset( $_REQUEST['enddate'] ) ? trim( Html::chars( $_REQUEST['enddate'] ) ) : '';
        $taxiid                  = isset( $_REQUEST['taxiid'] ) ? trim( Html::chars( $_REQUEST['taxiid'] ) ) : '';
        $driver_id               = isset( $_REQUEST['driver_id'] ) ? trim( Html::chars( $_REQUEST['driver_id'] ) ) : '';
        $manager_id              = isset( $_REQUEST['manager_id'] ) ? trim( Html::chars( $_REQUEST['manager_id'] ) ) : '';
        $passengerid             = isset( $_REQUEST['passengerid'] ) ? trim( Html::chars( $_REQUEST['passengerid'] ) ) : '';
        $admin_model             = Model::factory( 'admin' );
        $transaction_model       = Model::factory( 'transaction' );
        $get_allcompany          = $transaction_model->get_allcompany();
        $taxilist                = $transaction_model->gettaxidetails( $company, $manager_id );
        $passengerlist           = $transaction_model->getpassengerdetails( $company, '' );
        $driverlist              = $transaction_model->getdriverdetails( $company, $manager_id );
        $managerlist             = $transaction_model->getmanagerdetails( $company );
        $page_title              = __( "active_driver_report" );
        $list                    = 'all';
        $count_active_driverlist = $admin_model->count_active_driverlist( '', '', '', '', '', '', '' );
        //pagination loads here
        $page_no                 = isset( $_GET['page'] ) ? $_GET['page'] : 0;
        if ( $page_no == 0 || $page_no == 'index' )
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ( $page_no - 1 );
        $pag_data                   = Pagination::factory( array(
             'current_page' => array(
                 'source' => 'query_string',
                'key' => 'page' 
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_active_driverlist,
            'view' => 'pagination/punbb' 
        ) );
        $active_driverlist          = $admin_model->active_driverlist_details( '', '', '', '', '', '', '', $offset, REC_PER_PAGE );
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory( 'admin/activer_drivers' )->bind( 'Offset', $offset )->bind( 'action', $action )->bind( 'srch', $_REQUEST )->bind( 'pag_data', $pag_data )->bind( 'taxilist', $taxilist )->bind( 'driverlist', $driverlist )->bind( 'managerlist', $managerlist )->bind( 'passengerlist', $passengerlist )->bind( 'active_driverlist', $active_driverlist )->bind( 'get_allcompany', $get_allcompany )->bind( 'grpahdata', $grpahdata )->bind( 'id', $id );
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    public function action_active_driver_search()
    {
        $find_url       = explode( '/', $_SERVER['REQUEST_URI'] );
        $split          = explode( '?', $find_url[2] );
        $list           = $split[0];
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype == 'C' ) {
            $this->request->redirect( "company/login" );
        }
        if ( $usertype == 'M' ) {
            $this->request->redirect( "manager/login" );
        }
        $company                   = isset( $_REQUEST['filter_company'] ) ? trim( Html::chars( $_REQUEST['filter_company'] ) ) : '';
        $startdate                 = isset( $_REQUEST['startdate'] ) ? trim( Html::chars( $_REQUEST['startdate'] ) ) : '';
        $enddate                   = isset( $_REQUEST['enddate'] ) ? trim( Html::chars( $_REQUEST['enddate'] ) ) : '';
        $taxiid                    = isset( $_REQUEST['taxiid'] ) ? trim( Html::chars( $_REQUEST['taxiid'] ) ) : '';
        $driver_id                 = isset( $_REQUEST['driver_id'] ) ? trim( Html::chars( $_REQUEST['driver_id'] ) ) : '';
        $manager_id                = isset( $_REQUEST['manager_id'] ) ? trim( Html::chars( $_REQUEST['manager_id'] ) ) : '';
        $passengerid               = isset( $_REQUEST['passengerid'] ) ? trim( Html::chars( $_REQUEST['passengerid'] ) ) : '';
        $admin_model               = Model::factory( 'admin' );
        $transaction_model         = Model::factory( 'transaction' );
        $get_allcompany            = $transaction_model->get_allcompany();
        $taxilist                  = $transaction_model->gettaxidetails( $company, $manager_id );
        $passengerlist             = $transaction_model->getpassengerdetails( $company, '' );
        $driverlist                = $transaction_model->getdriverdetails( $company, $manager_id );
        $managerlist               = $transaction_model->getmanagerdetails( $company );
        $page_title                = __( "active_driver_report" );
        $list                      = 'all';
        $count_activedriver_search = $admin_model->count_active_driverlist( $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate );
        //pagination loads here
        $page_no                   = isset( $_GET['page'] ) ? $_GET['page'] : 0;
        if ( $page_no == 0 || $page_no == 'index' )
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ( $page_no - 1 );
        $pag_data                   = Pagination::factory( array(
             'current_page' => array(
                 'source' => 'query_string',
                'key' => 'page' 
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_activedriver_search,
            'view' => 'pagination/punbb' 
        ) );
        $active_driverlist          = $admin_model->active_driverlist_details( $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $offset, REC_PER_PAGE );
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory( 'admin/activer_drivers' )->bind( 'Offset', $offset )->bind( 'action', $action )->bind( 'srch', $_REQUEST )->bind( 'pag_data', $pag_data )->bind( 'taxilist', $taxilist )->bind( 'driverlist', $driverlist )->bind( 'managerlist', $managerlist )->bind( 'passengerlist', $passengerlist )->bind( 'active_driverlist', $active_driverlist )->bind( 'get_allcompany', $get_allcompany )->bind( 'grpahdata', $grpahdata )->bind( 'id', $id );
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    
    public function action_enable_template()
    {
        $admin_model    = Model::factory( 'admin' );
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype != 'A' && $usertype != 'S' ) {
            $this->request->redirect( "admin/dashboard" );
        }
        $this->is_login();
        $manage        = Model::factory( 'manage' );
        $email_sms = isset($_REQUEST['email_sms']) ? $_REQUEST['email_sms'] : 'sms';
        $status        = $admin_model->enable_template( $_REQUEST['uniqueId'], $_REQUEST['status'], $email_sms );
        $pagedata      = explode( "/", $_SERVER["REQUEST_URI"] );
        $page          = isset( $pagedata[3] ) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        if($email_sms == 'email'){
			$statusMessage = ( $_REQUEST['status'] == 1 ) ? __( "enable" ) : __( "disable" );
		}else{
			$statusMessage = ( $_REQUEST['status'] == 0 ) ? __( "enable" ) : __( "disable" );
		}
		
        if ( $status == 1 ) {
            Message::success( __( 'Checked requests have been changed to ' . strtolower( $statusMessage ) . ' status.' ) );
        } else {
            Message::error( __( 'Problem in update' ) );
        }
        $this->request->redirect( $_SERVER['HTTP_REFERER'] );
    }
    public function action_withdraw_payment_mode()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings = Model::factory( 'admin' );
        $count    = $settings->count_withdraw_payment_mode();
        //pagination loads here
        $page_no  = isset( $_GET['page'] ) ? $_GET['page'] : 0;
        if ( $page_no == 0 || $page_no == 'index' )
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ( $page_no - 1 );
        $pag_data                   = Pagination::factory( array(
             'current_page' => array(
                 'source' => 'query_string',
                'key' => 'page' 
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count,
            'view' => 'pagination/punbb' 
        ) );
        $withdraw_payment_mode      = $settings->get_withdraw_payment_mode( $offset, REC_PER_PAGE );
        $this->selected_page_title  = __( "site_settings" );
        $view                       = View::factory( 'admin/manage_withdraw_payment_mode' )->bind( 'pag_data', $pag_data )->bind( 'withdraw_payment_mode', $withdraw_payment_mode )->bind( 'count', $count )->bind( 'Offset', $offset );
        $this->template->title      = SITENAME . " | " . __( 'Withdraw Payment Mode' );
        $this->template->page_title = __( 'Withdraw Payment Mode' );
        $this->template->content    = $view;
    }
    
    public function action_setMenuEnable()
    {
        if ( isset($_GET["data"]) ) {
            $this->session->set( 'left_menu_enable', $_GET["data"] );
        }
        exit;
    }	
        
    /** Admin Theme Settings **/
    public function action_admin_theme_settings()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $errors         = array();
        $admin_theme_settings_submit  = arr::get( $_REQUEST, 'admin_theme_settings_submit' );
        $post_values    = Securityvalid::sanitize_multiple_array_inputs( Arr::map( 'trim', $this->request->post()));
        if ( $admin_theme_settings_submit && Validation::factory( $post_values ) ) {
            $validator          = $this->model_settings->validate_admin_theme_settings( arr::extract( $post_values, array(
                'header_background',
                'dispatch_header_background',
                'footer_background',
                'sidebar_background',
                'sidebar_sub_tab',
                'sidebar_icon',
                'sidebar_icon_active',
                'sidebar_icon_circle',
                'sidebar_active',
                'button_background',
                'button_hover_background',
                'dispatch_button_background',
                'dispatch_button_hover_background'
            ) ) );
            if ( $validator->check() ) {
               $data = array(
                    'admin_header_background' => $post_values['header_background'],
                    'dispatch_header_background' => $post_values['dispatch_header_background'],
                    'admin_footer_background' => $post_values['footer_background'],
                    'admin_sidebar_background' => $post_values['sidebar_background'],
                    'admin_sidebar_sub_tab' => $post_values['sidebar_sub_tab'],
                    'admin_sidebar_icon' => $post_values['sidebar_icon'],
                    'admin_sidebar_icon_active' => $post_values['sidebar_icon_active'],
                    'admin_sidebar_icon_circle' => $post_values['sidebar_icon_circle'],
                    'admin_sidebar_active' => $post_values['sidebar_active'],
                    'admin_button_background' => $post_values['button_background'],
                    'admin_button_hover_background' => $post_values['button_hover_background'],
                    'dispatch_button_background' => $post_values['dispatch_button_background'],
                    'dispatch_button_hover_background' => $post_values['dispatch_button_hover_background']
                );
                $status = $this->model_settings->updatethemesettings( $data );
                if ( $status == 1 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/admin_theme_settings" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        //$site_settings              = $this->siteinfo;
        $data_field = array('admin_header_background','dispatch_header_background','admin_footer_background','admin_sidebar_background','admin_sidebar_sub_tab','admin_sidebar_icon','admin_sidebar_icon_circle','admin_sidebar_active','admin_button_background','admin_button_hover_background','admin_sidebar_icon_active','dispatch_button_background','dispatch_button_hover_background');
        $site_settings              = $this->model_settings->getthemesettings($data_field);
        $view                       = View::factory( 'admin/admin_theme_settings' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'site_settings', $site_settings );
        $this->template->title      = SITENAME . " | " . __( 'admin_theme_settings' );
        $this->template->page_title = __( 'admin_theme_settings' );
        $this->template->content    = $view;
    }

    /** Website Theme Settings **/
    public function action_website_theme_settings()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $errors         = array();
        $website_theme_settings_submit  = arr::get( $_REQUEST, 'website_theme_settings_submit' );
        $post_values    = Securityvalid::sanitize_multiple_array_inputs( Arr::map( 'trim', $this->request->post()));
        if ( $website_theme_settings_submit && Validation::factory( $post_values ) ) {
            $validator          = $this->model_settings->validate_website_theme_settings( arr::extract( $post_values, array(
                "header_background",
                "footer_background",
                "sidebar_background",
                "sidebar_icon",
                "sidebar_icon_active",
                "sidebar_active",
                "button_background",
                "button_hover_background"
            ) ) );
            if ( $validator->check() ) {
                $data = array(
                    'website_header_background' => $post_values['header_background'],
                    'website_footer_background' => $post_values['footer_background'],
                    'website_sidebar_background' => $post_values['sidebar_background'],
                    'website_sidebar_icon' => $post_values['sidebar_icon'],
                    'website_sidebar_icon_active' => $post_values['sidebar_icon_active'],
                    'website_sidebar_active' => $post_values['sidebar_active'],
                    'website_button_background' => $post_values['button_background'],
                    'website_button_hover_background' => $post_values['button_hover_background']
                );
                $status = $this->model_settings->updatethemesettings( $data );
                if ( $status == 1 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/website_theme_settings" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        //$site_settings              = $this->siteinfo;
        $data_fields = array("website_header_background","website_footer_background","website_sidebar_background","website_sidebar_icon","website_sidebar_icon_active","website_sidebar_active","website_button_background","website_button_hover_background");
        $site_settings              = $this->model_settings->getthemesettings($data_fields);
        $view                       = View::factory( 'admin/website_theme_settings' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'site_settings', $site_settings );
        $this->template->title      = SITENAME . " | " . __( 'website_theme_settings' );
        $this->template->page_title = __( 'website_theme_settings' );
        $this->template->content    = $view;
    }
	/** Manage Site template settings **/
    public function action_template_settings()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype != 'A' ) {
            $this->request->redirect( "admin/login" );
        }
        $errors         = array();
        $signup_submit  = arr::get( $_REQUEST, 'template_submit' );
        $post_values    = Securityvalid::sanitize_multiple_array_inputs( Arr::map( 'trim', $this->request->post()));
        $data_array = array();
        $content_fields = Arr::extract( $this->request->post(), array(
            'banner_content',
            'app_content',
            'about_us_content',
            'contact_us_content',
        ) );
        $post_values    = array_merge( $post_values, $content_fields );
        if ( $signup_submit && Validation::factory( $post_values, $_FILES ) ) {
            $favicon_old        = $post_values['favicon_old'];
            $banner_img_old     = $post_values['banner_img_old'];
            $banner_img_1_old     = $post_values['banner_img_1_old'];
            $frontend_mobile_old     = $post_values['frontend_mobile_old'];
            $mobile_header_logo = $post_values['mobile_header_logo'];
            $flash_screen_logo  = $post_values['flash_screen_logo'];
            $post_values        = arr::merge( $post_values, $_FILES );
            $validator          = $this->model_settings->validate_templatesinfo( arr::extract( $post_values, array(
                'site_logo',
                'banner_image',
                'banner_content',
                'app_content',
                'app_bg_color',
                'about_us_content',
                'about_bg_color',
                'footer_bg_color',
                'contact_us_content',
                'email_site_logo',
                'site_favicon',
                'banner_image',
                'mobile_header_logo',
                'flash_screen_logo',
                'site_copyrights'
            ) ), $_FILES );
            
            if ( $validator->check() ) {
                //to get previous referral amount to check whether new referral amount 
                $siteInfo       = $this->siteinfo;
                $status         = $this->model_settings->update_templatesettings( $post_values );

                if ( !empty( $_FILES['site_logo']['name'] ) ) {
                    $image_name = 'logo.png';
                    $image_type = explode( '.', $image_name );
                    $image_type = end( $image_type );
                    $filename   = Upload::save( $_FILES['site_logo'], $image_name, DOCROOT . SITE_LOGO_IMGPATH );
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory( $filename );
                    $path11     = DOCROOT . SITE_LOGO_IMGPATH;
                    $path1      = $image_name;
                    Commonfunction::imageresize( $logo_image, 180, 40, $path11, $image_name, 90 );
                    $status = $this->model_settings->updatesiteinfo_image( $path1 );
                    $status = 1;
                }
                if ( !empty( $_FILES['email_site_logo']['name'] ) ) {
                    $image_name = 'site_email_logo.png';
                    $image_type = explode( '.', $image_name );
                    $image_type = end( $image_type );
                    $filename   = Upload::save( $_FILES['email_site_logo'], $image_name, DOCROOT . SITE_LOGO_IMGPATH );
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory( $filename );
                    $path11     = DOCROOT . SITE_LOGO_IMGPATH;
                    $path1      = $image_name;
                    Commonfunction::imageresize( $logo_image, 175, 35, $path11, $image_name, 90 );
                    $status = $this->model_settings->updatesite_email_einfo_image( $path1 );
                    $status = 1;
                }
                if ( !empty( $_FILES['site_favicon']['name'] ) ) {
                    if ( file_exists( DOCROOT . SITE_FAVICON_IMGPATH . $favicon_old ) ) {
                        unlink( DOCROOT . SITE_FAVICON_IMGPATH . $favicon_old );
                    }
                    $image_name = uniqid() . $_FILES['site_favicon']['name'];
                    $image_type = explode( '.', $image_name );
                    $image_type = end( $image_type );
                    $filename   = Upload::save( $_FILES['site_favicon'], $image_name, DOCROOT . SITE_FAVICON_IMGPATH );
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory( $filename );
                    $path11     = DOCROOT . SITE_FAVICON_IMGPATH;
                    $path1      = $image_name;
                    Commonfunction::imageresize( $logo_image, FAVICON_WIDTH, FAVICON_HEIGHT, $path11, $image_name, 90 );
                    $status = $this->model_settings->updatesiteinfo_faviconimage( $path1 );
                }
                if ( !empty( $_FILES['banner_image']['name'] ) ) {
                    if ( $banner_img_old != "" && file_exists( DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER . $banner_img_old ) ) {
                        unlink( DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER . $banner_img_old );
                    }
                    $image_name = uniqid() . $_FILES['banner_image']['name'];
                    $image_type = explode( '.', $image_name );
                    $image_type = end( $image_type );
                    $filename   = Upload::save( $_FILES['banner_image'], $image_name, DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER );
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory( $filename );
                    $path11     = DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER;
                    $path1      = $image_name;
                    Commonfunction::imageresize( $logo_image, SITE_BANNER_WIDTH, SITE_BANNER_HEIGHT, $path11, $image_name, 90 );
                    $field = 'banner_image';
                    //~ print_r($path1);exit;
                    $status = $this->model_settings->updatesiteinfo_bannerimage( $path1,$field );
                }
                if ( !empty( $_FILES['mobile_header_logo']['name'] ) ) {
                    if ( $mobile_header_logo != "" && file_exists( DOCROOT . MOBILE_LOGO_PATH . $mobile_header_logo ) ) {
                        unlink( DOCROOT . MOBILE_LOGO_PATH . $mobile_header_logo );
                    }
                    $image_name = 'signInLogo.png';
                    $image_type = explode( '.', $image_name );
                    $image_type = end( $image_type );
                    $filename   = Upload::save( $_FILES['mobile_header_logo'], $image_name, DOCROOT . MOBILE_LOGO_PATH );
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory( $filename );
                    $path11     = DOCROOT . MOBILE_LOGO_PATH;
                    Commonfunction::imageresize( $logo_image, 786, 132, $path11, $image_name, 90 );
                    $status = $this->model_settings->update_mobile_logo_image( 'mobile_header_logo', $image_name );
                }
                if ( !empty( $_FILES['flash_screen_logo']['name'] ) ) {
                    if ( $flash_screen_logo != "" && file_exists( DOCROOT . MOBILE_LOGO_PATH . $flash_screen_logo ) ) {
                        unlink( DOCROOT . MOBILE_LOGO_PATH . $flash_screen_logo );
                    }
                    $image_name = 'headerLogo.png';
                    $image_type = explode( '.', $image_name );
                    $image_type = end( $image_type );
                    $filename   = Upload::save( $_FILES['flash_screen_logo'], $image_name, DOCROOT . MOBILE_LOGO_PATH );
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory( $filename );
                    $path11     = DOCROOT . MOBILE_LOGO_PATH;
                    Commonfunction::imageresize( $logo_image, 210, 102, $path11, $image_name, 90 );
                    $status = $this->model_settings->update_mobile_logo_image( 'flash_screen_logo', $image_name );
                }
                # new theme images
                if ( !empty( $_FILES['banner_image_1']['name'] ) ) {
                    if ( $banner_img_old != "" && file_exists( DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER . $banner_img_old ) ) {
                        unlink( DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER . $banner_img_old );
                    }
                    $image_name = uniqid() . $_FILES['banner_image_1']['name'];
                    $image_type = explode( '.', $image_name );
                    $image_type = end( $image_type );
                    $filename   = Upload::save( $_FILES['banner_image_1'], $image_name, DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER );
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory( $filename );
                    $path11     = DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER;
                    $path1      = $image_name;
                    Commonfunction::imageresize( $logo_image, SITE_BANNER_WIDTH, SITE_BANNER_HEIGHT, $path11, $image_name, 90 );
					$field = 'banner_image_1';
                    $status = $this->model_settings->updatesiteinfo_bannerimage( $path1,$field );
                }
                # front page mobile image
                if ( !empty( $_FILES['frontend_mobile']['name'] ) ) {
                    if ( $frontend_mobile_old != "" && file_exists( DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER . $frontend_mobile_old ) ) {
                        unlink( DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER . $frontend_mobile_old );
                    }
                    $image_name = uniqid() . $_FILES['frontend_mobile']['name'];
                    $image_type = explode( '.', $image_name );
                    $image_type = end( $image_type );
                    $filename   = Upload::save( $_FILES['frontend_mobile'], $image_name, DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER );
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory( $filename );
                    $path11     = DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER;
                    $path1      = $image_name;
                    Commonfunction::imageresize( $logo_image, SITE_BANNER_WIDTH, SITE_BANNER_HEIGHT, $path11, $image_name, 90 );
                    $status = $this->model_settings->updatesiteinfo_frontimage($path1,$imagefield='frontend_mobile');
                }
                
                # front page car image
                if ( !empty( $_FILES['frontend_car']['name'] ) ) {
                    if ( $frontend_mobile_old != "" && file_exists( DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER . $frontend_mobile_old ) ) {
                        unlink( DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER . $frontend_mobile_old );
                    }
                    $image_name = uniqid() . $_FILES['frontend_car']['name'];
                    $image_type = explode( '.', $image_name );
                    $image_type = end( $image_type );
                    $filename   = Upload::save( $_FILES['frontend_car'], $image_name, DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER );
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory( $filename );
                    $path11     = DOCROOT . PUBLIC_UPLOADS_LANDING_FOLDER;
                    $path1      = $image_name;
                    Commonfunction::imageresize( $logo_image, SITE_BANNER_WIDTH, SITE_BANNER_HEIGHT, $path11, $image_name, 90 );
                    $status = $this->model_settings->updatesiteinfo_frontimage($path1,$imagefield='frontend_car');
                }
                
                if ( $status == 1 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "admin/template_settings" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $id                         = $this->request->param( 'id' );
        $email                      = $_SESSION['email'];
        $site_settings              = $this->siteinfo;        
        //~ echo '<pre>';print_r($site_settings);exit;
        $this->selected_page_title  = __( "site_settings" );
        $view                       = View::factory( 'admin/template_settings' )->bind( 'validator', $validator )->bind( 'errors', $errors )->bind( 'postvalue', $post_values )->bind( 'site_settings', $site_settings )->bind( 'email', $email );
        $this->template->title      = SITENAME . " | " . __( 'template_settings' );
        $this->template->page_title = __( 'template_settings' );
        $this->template->content    = $view;
    }
    
	
	
	
	
} // End siteadmin class
