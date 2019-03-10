<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Domain extends Controller_Siteadmin {

    public $template = 'admin/packagetemplate';

    public function __construct(Request $request, Response $response) {
        parent::__construct($request, $response);
        $this->is_login();
        
    }
    
       public function is_login()
    {
        $session = Session::instance();
        //get current url and set it into session
        //========================================
        $this->session->set('requested_url', Request::detect_uri());
        /**To check Whether the user is logged in or not**/
        if (!isset($this->session) || (!$this->session->get('userid')) && !$this->session->get('id')) {
            Message::error(__('login_access'));
            $this->request->redirect("/admin/login/");
        }
        return;
    }

    public function action_domains() {
        $postvalue = $this->request->post();
        $domain = Model::factory('domain');
        /* $host=$_SERVER['HTTP_HOST'];
          $host_explode=explode('.',$host);
          $access_key=$host_explode[0]; */
        $access_key = SUBDOMAIN_NAME;

        $redirect_submit = arr::get($_REQUEST, 'save_redirect');

        $get_live_domain_info = $domain->get_live_domain_info($access_key);
        $live_domain_name = '';
        // $redirect_enable_status = 0;
       if (count($get_live_domain_info) > 0) {
            foreach ($get_live_domain_info as $get_live_domain_info_detail) {
                //$post_domain_name = isset($get_live_domain_info_detail->post_domain) ? $get_live_domain_info_detail->post_domain : '';
                //$redirect_enable_status = isset($get_live_domain_info_detail->redirect_enable) ? $get_live_domain_info_detail->redirect_enable : 0;
                $live_host_domain_name_detail = isset($get_live_domain_info_detail->live_host_domain) ? $get_live_domain_info_detail->live_host_domain : '';
                $live_domain_name_detail = isset($get_live_domain_info_detail->live_domain) ? $get_live_domain_info_detail->live_domain : '';
            }
        }
         /*if ($redirect_submit) {
          $redirect_status = 0;
          $postvalue = Arr::map('trim', $this->request->post());*/
          if (isset($postvalue['save_redirect'])) {

          //$redirect_status = 1;
              $postvalue = Arr::map('trim', $this->request->post());
              
              if($postvalue['primary_domain']!= $live_domain_name_detail){                               
                $domain->update_domain(SUBDOMAIN_NAME,$postvalue['primary_domain'],$live_domain_name_detail);
                 $get_live_domain_info = $domain->get_live_domain_info($access_key);
           if (count($get_live_domain_info) > 0) {
            foreach ($get_live_domain_info as $get_live_domain_info_detail) {
                //$post_domain_name = isset($get_live_domain_info_detail->post_domain) ? $get_live_domain_info_detail->post_domain : '';
                //$redirect_enable_status = isset($get_live_domain_info_detail->redirect_enable) ? $get_live_domain_info_detail->redirect_enable : 0;
                $live_host_domain_name_detail = isset($get_live_domain_info_detail->live_host_domain) ? $get_live_domain_info_detail->live_host_domain : '';
                $live_domain_name_detail = isset($get_live_domain_info_detail->live_domain) ? $get_live_domain_info_detail->live_domain : '';
            }
        }
              }
          
          
          }
         

          /*$update_redirect = $domain->update_redirectdomain($access_key, $redirect_status, $live_domain_name);
          } */



        if ($live_host_domain_name_detail == '') {
            $this->request->redirect(URL_BASE . 'domain/add_domain');
        }
        $view = View::factory('domains')
                ->bind('live_domain_name', $live_domain_name_detail)
                ->bind('live_host_domain_name', $live_host_domain_name_detail);
        // ->bind('redirect_enable_status', $redirect_enable_status);

        $this->template->content = $view;
        $this->template->meta_description = CLOUD_SITENAME . " | Admin ";
        $this->template->meta_keywords = CLOUD_SITENAME . "  | Admin ";
        $this->template->title = "Domains";
        $this->template->page_title = "Domains";
    }

    public function action_add_domain() {
        $domain = Model::factory('domain');
        $edit_domain = isset($_REQUEST['domain']) ? $_REQUEST['domain'] : '';
        $post_values = Arr::map('trim', $this->request->post());
        $btn_next = arr::get($_REQUEST, 'btn_next');
        /* $host=$_SERVER['HTTP_HOST'];
          $host_explode=explode('.',$host);
          $access_key=$host_explode[0]; */
        $access_key = SUBDOMAIN_NAME;

        $get_live_domain_info = $domain->get_live_domain_info($access_key);

        
        $live_domain_name = '';
        $post_domain_name = '';
        $live_host_domain_name='';
        //if(count($get_live_domain_info)>0){
        foreach ($get_live_domain_info as $get_live_domain_info_detail) {

             $live_host_domain_name = isset($get_live_domain_info_detail->live_host_domain) ? $get_live_domain_info_detail->live_host_domain : '';
             $live_domain_name = isset($get_live_domain_info_detail->live_domain) ? $get_live_domain_info_detail->live_domain : '';
           
            // $post_domain_name = isset($get_live_domain_info_detail->post_domain) ? $get_live_domain_info_detail->post_domain : '';
        }
        
        if ($live_host_domain_name != '' && $edit_domain == '') {
            $this->request->redirect(URL_BASE . 'domain/domains');
        }

        if (isset($btn_next) && Validation::factory($post_values)) {
            
            // Post domain value
            $parsedUrl = parse_url($post_values['domain_name']);            
            if(isset($parsedUrl['scheme'])){
                 $host = explode('.', $parsedUrl['host']);
            }else{
            $host = explode('.', $parsedUrl['path']);            
            }           
            $subdomains = array_slice($host, 0, count($host) - 2 );            
            $maindomain_detect=0;
            if(empty($subdomains) || (isset($subdomains[0])&&($subdomains[0]=='www'))){
                $maindomain_detect=1;
            }            
            $post_domain_http = str_replace('http://', '', $post_values['domain_name']);
            $post_domain = str_replace('www.', '', $post_domain_http);
            $post_values['replace_domain_name'] = $post_domain_http;
            
            //Live domain update            
            $live_parsedUrl=parse_url($_SERVER['HTTP_HOST']);
            
             if(isset($live_parsedUrl['scheme'])){
                 $live_host = explode('.', $live_parsedUrl['host']);
            }else{
            
            $live_host = isset($live_parsedUrl['path'])?explode('.', $live_parsedUrl['path']):explode('.', $live_parsedUrl['host']);            
                      
            }            
            $live_subdomains = array_slice($live_host, 0, count($live_host) - 2 );            
            $live_maindomain_detect=0;
            if(empty($live_subdomains) || (isset($live_subdomains[0])&&($live_subdomains[0]=='www'))){
                $live_maindomain_detect=1;
            }
            
            $live_domain_http = str_replace('http://', '', $_SERVER['HTTP_HOST']);
            $live_domain = str_replace('www.', '', $live_domain_http);
            
            
            
            $validator = $domain->add_domain_validate(arr::extract($post_values, array('domain_name', 'replace_domain_name')));

            if ($validator->check()) {                
                if (count($get_live_domain_info) == 0) {
                    Message::error('please contact your support team');
                    $this->request->redirect(URL_BASE . 'domain/add_domain');
                }
                $get_all_domain_info = $domain->get_all_domain_info($access_key);
                
                foreach ($get_all_domain_info as $domain_info) {
                    if (isset($domain_info->live_domain) && $domain_info->live_domain != '') {
                        $get_live_host_domain='';
                        $get_all_domain = str_replace('http://', '', $domain_info->live_domain);
                        $get_all_domain = str_replace('www.', '', $get_all_domain);
                        
                        if(isset($domain_info->live_host_domain)){
                        $get_live_host_domain = str_replace('http://', '', $domain_info->live_host_domain);
                        $get_live_host_domain = str_replace('www.', '', $get_live_host_domain);
                        }

                        if(($get_all_domain == $post_domain || ($get_live_host_domain!='' && $get_live_host_domain == $post_domain))) {                           
                            $edit_domain_validate= str_replace('http://', '', $edit_domain);
                            $edit_domain_validate= str_replace('www.','',$edit_domain_validate);
                            if($edit_domain_validate!=$post_domain){
                            Message::error('This domain name already exists');
                            }
                            $this->request->redirect(URL_BASE . 'domain/add_domain');
                        }
                    }
                }
                
                if($maindomain_detect==1){
                    $post_domain='www.'.$post_domain;
                }
                
                if($live_maindomain_detect==1){
                    $live_domain='www.'.$live_domain;
                }
                $add_domain = $domain->add_domain($access_key, $post_domain,$edit_domain,$live_domain);


                $this->request->redirect(URL_BASE . 'domain/domain_connect');
            } else {
                $errors = $validator->errors('errors');
            }
        }
        
        $view = View::factory('add_domain')
                ->bind('errors', $errors)
                ->bind('live_domain_name', $live_domain_name)
                ->bind('live_host_domain_name', $live_host_domain_name);

        $this->template->content = $view;
        $this->template->meta_description = CLOUD_SITENAME . " | Add domain ";
        $this->template->meta_keywords = CLOUD_SITENAME . "  | Add domain ";
        $this->template->title = "Add Domain";
        $this->template->page_title = "Add Domain";
    }

    public function action_edit_domain() {
        $view = View::factory('edit_domain');

        $this->template->content = $view;
        $this->template->meta_description = CLOUD_SITENAME . " | Admin ";
        $this->template->meta_keywords = CLOUD_SITENAME . "  | Admin ";
        $this->template->title = "Edit Domain";
        $this->template->page_title = "Edit Domain";
    }

    public function action_domain_details() {
        $view = View::factory('domain_details');

        $this->template->content = $view;
        $this->template->meta_description = CLOUD_SITENAME . " | Admin ";
        $this->template->meta_keywords = CLOUD_SITENAME . "  | Admin ";
        $this->template->title = "Domain Details";
        $this->template->page_title = "Domain Details";
    }

    public function action_domain_connect() {
        $package = Model::factory('domain');

        $postvalue = $this->request->post();
        $manual_connect = isset($postvalue['manual_connect']) ? $postvalue['manual_connect'] : '';
        $verify_connect = isset($postvalue['domain_verify_conn']) ? $postvalue['domain_verify_conn'] : '';
        /* $host=$_SERVER['HTTP_HOST'];
          $host_explode=explode('.',$host);
          $access_key=$host_explode[0]; */
        $access_key = SUBDOMAIN_NAME;
        $get_live_domain_info = $package->get_live_domain_info($access_key);

        $live_domain_name = '';

        if (count($get_live_domain_info) > 0) {
            foreach ($get_live_domain_info as $get_live_domain_info_detail) {
                $live_domain_name = isset($get_live_domain_info_detail->live_domain) ? $get_live_domain_info_detail->live_domain : '';
                $live_host_domain_name = isset($get_live_domain_info_detail->live_host_domain) ? $get_live_domain_info_detail->live_host_domain : '';
            }
        }

        $view = View::factory('domain_connect')
                ->bind('live_domain_name', $live_domain_name)
                ->bind('live_host_domain_name', $live_host_domain_name)
                ->bind('manual_connect', $manual_connect)
                ->bind('verify_connect', $verify_connect);


        $this->template->content = $view;
        $this->template->meta_description = CLOUD_SITENAME . " | Admin ";
        $this->template->meta_keywords = CLOUD_SITENAME . "  | Admin ";
        $this->template->title = "Connect Domain";
        $this->template->page_title = "Connect Domain";
    }

    public function action_domain_verify() {
        $postvalue = $this->request->post();
        $domain= Model::factory('domain');
        $verify_connect = isset($postvalue['domain_verify_conn']) ? $postvalue['domain_verify_conn'] : '';
        //Posted domain name
        $domain_name = isset($postvalue['domain_name']) ? $postvalue['domain_name'] : '';
        $dns_details = [];

        if ($verify_connect != '') {
            //Get dns information for posted domain
            $get_dns_details = dns_get_record((string) $domain_name,DNS_ALL);
            

             $access_key = SUBDOMAIN_NAME;
        $get_live_domain_info = $domain->get_live_domain_info($access_key);

        $live_domain_name = '';

        if (count($get_live_domain_info) > 0) {
            foreach ($get_live_domain_info as $get_live_domain_info_detail) {
                $live_domain_name = isset($get_live_domain_info_detail->live_domain) ? $get_live_domain_info_detail->live_domain : '';
                  $live_host_domain_name = isset($get_live_domain_info_detail->live_host_domain) ? $get_live_domain_info_detail->live_host_domain : '';
            }
        }

            
            //Get current hosted domain dns information
            //$get_correct_dns_record = dns_get_record($_SERVER['HTTP_HOST']);
        $get_correct_dns_record = dns_get_record($live_domain_name,DNS_ALL);
        

            //Correct information get here from current hosted
            $correct_dns_type = isset($get_correct_dns_record[0]['type']) ? $get_correct_dns_record[0]['type'] : '';
            $correct_cname = '';
            $correct_IP = '';
            if ($correct_dns_type == 'CNAME' || $correct_dns_type == 'A') {
                $correct_cname = isset($get_correct_dns_record[0]['target']) ? $get_correct_dns_record[0]['target'] : '';
                $correct_IP = isset($get_correct_dns_record[0]['ip']) ? $get_correct_dns_record[0]['ip'] : '';
            }
            //Get posted domain information        
            $dns_type = isset($get_dns_details[0]['type']) ? $get_dns_details[0]['type'] : '';

            //Define reponse parameters
            $dns_details['dns_status'] = 0;
            $dns_details['current_cname'] = '';
            $dns_details['dns_status_name'] = 'CNAME Or A Record entered incorrectly';
            $dns_details['correct_cname'] = $correct_cname;

            //Cname is empty we will check ip address
            if ($correct_cname == '') {
                $dns_details['correct_cname'] = $correct_IP;
            }


            if ($dns_type == 'CNAME' || $dns_type == 'A') {

                $current_cname = isset($get_dns_details[0]['target']) ? $get_dns_details[0]['target'] : '';
                $current_IP = isset($get_dns_details[0]['ip']) ? $get_dns_details[0]['ip'] : '';

                if ($correct_cname != '' && $correct_cname == $current_cname) {
                    $dns_details['dns_status'] = 1;
                    $cname = 'CNAME is matched';

                    $dns_details['dns_status_name'] = $cname;
                    
                   
                } else if ($correct_IP != '' && $correct_IP == $current_IP) {
                    $dns_details['dns_status'] = 1;
                    $cname = 'A Record is matched';
                    $dns_details['dns_status_name'] = $cname;
                    
                }
                if ($correct_cname != '') {
                    $dns_details['current_cname'] = $current_cname;
                }
                if ($current_cname == '') {
                    $dns_details['current_cname'] = $current_IP;
                }
            }
            echo json_encode($dns_details);
        }
        exit;
    }

    public function action_domain_delete() {
        $package = Model::factory('domain');
        /* $host=$_SERVER['HTTP_HOST'];
          $host_explode=explode('.',$host);
          $access_key=$host_explode[0]; */
        $access_key = SUBDOMAIN_NAME;
        $domain_delete = $package->delete_domain($access_key);

        Message::success('Domain deleted sucessfully');
        $this->request->redirect(URL_BASE . 'domain/add_domain');

        exit;
    }

}
