<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Cronbooking extends Model_TaximobilityCronbooking
{
	//Get Common config
    public function select_site_settings($company_id)
    {  
        if ($company_id != '') {  
			$arguments = array(array('$unwind'=>'$companyinfo'),
						array('$match'=>array('_id'=>(int)$company_id)),
						array('$project' => array(		
						    '_id' =>0,											
							'site_currency' => '$companyinfo.company_currency',
							'facebook_key' => '$companyinfo.company_facebook_key',
							'facebook_secretkey' => '$companyinfo.company_facebook_secretkey',
							'facebook_share' => '$companyinfo.company_facebook_share',
							'twitter_share' => '$companyinfo.company_twitter_share',
							'cancellation_fare_setting' => '$companyinfo.cancellation_fare',
							'site_logo' => '$companyinfo.company_logo',
							'google_business_key' => '$companyinfo.google_business_key',			
						))					
					);
			$result = $this->mongo_db->aggregate(MDB_COMPANY,$arguments);			
        } else {
			 
			$projection_field = array(		
							'_id' =>0,											
							'app_name' => '$app_name',
							'site_country' => '$site_country',
							'site_currency' => '$site_currency',
							'facebook_key' => '$facebook_key',
							'facebook_secretkey' => '$facebook_secretkey',
							'facebook_share' => '$facebook_share',
							'twitter_share' => '$twitter_share',
							'google_business_key' => '$google_business_key',
							'ios_google_map_key' => '$ios_google_map_key',
							'ios_google_geo_key' => '$ios_google_geo_key',
							'android_google_api_key' => '$android_google_key',	
							'cancellation_fare_setting'	=> '$cancellation_fare_setting',
							'ios_driver_language' => '$ios_driver_language_status',
							'ios_passenger_language' => '$ios_passenger_language_status',
							'ios_driver_colorcode' => '$ios_driver_colorcode_status',
							'ios_passenger_colorcode' => '$ios_passenger_colorcode_status',
							'android_driver_language' => '$android_driver_language_status',
							'android_passenger_language' => '$android_passenger_language_status',
							'android_passenger_colorcode' => '$android_passenger_colorcode_status',
							'android_driver_colorcode' => '$android_driver_colorcode_status',
							'android_foursquare_api_key' => '$android_foursquare_api_key',
							'ios_foursquare_api_key' => '$ios_foursquare_api_key',
							'android_foursquare_status' => '$android_foursquare_status',
							'ios_foursquare_status' => '$ios_foursquare_status',
							'itune_passenger' => '$itune_passenger',
							'itune_driver' => '$itune_driver',
							'fb_profile' => '$fb_profile',
							'site_logo' => '$themesettings.site_logo',
							'insurance_amount' => '$insurance_amount',
						);
			$args = array(
					array('$lookup' => 
							array('from' => MDB_THEME_SETTINGS,
								'localField' => '_id',
								'foreignField' => '_id',
								'as' => 'themesettings'
							)
						),
                array('$unwind' =>  array( 'path' =>  '$themesettings', 'preserveNullAndEmptyArrays' =>  true ) ),
                array('$match' => array('_id' =>1)),
                array('$project' => $projection_field),
                array('$limit' => 1)
            );
			$result = $this->mongo_db->aggregate(MDB_SITEINFO,$args);
        }
        //print_r($result);exit;
        return (!empty($result['result'])) ? $result['result']: array();
    }
    // **************** get driver list for deduct daily due start here **************
    public function due_drivers_list()
    {
    	//$user_createdby                  = $this->userid;
		$usertype                        = 'D';
		//$company_id                      = $this->company_id;
		//$country_id                      = $this->country_id;
		//$state_id                        = $this->state_id;
		//$city_id                         = $this->city_id;
		$match_query                     = array();
		$match_query['people.user_type'] = 'D';
		//$peoples = $details = array();
		
		//$people_list = $this->mongo_db->Find(MDB_PEOPLE,array(),array('_id','name'));		
                 ## fields_projection code added to support LAMP 7.0 and its mongo version 3.4.0
                $options=[
                    'projection'=>[
                        '_id'=>1,
                        'name'=>1
                    ]
                ];
                $people_list = $this->mongo_db->find(MDB_PEOPLE,[],$options);		
		/*if(!empty($people_list)){
			foreach($people_list as $p){
				$peoples[$p['_id']] = $p['name'];
			}
		}*/
		
		/*if ($usertype == 'M') {
			$match_query['people.company_id']    = (int) $company_id;*/
			/*$match_query['_id'] = (int) $country_id;
			$match_query['stateinfo.state_id']   = (int) $state_id;
			$match_query['cityinfo.city_id']    = (int) $city_id;
			$match_query['people.login_country'] = (int) $country_id;
			$match_query['people.login_state']   = (int) $state_id;
			$match_query['people.login_city']    = (int) $city_id;*/
			
		/*} else if ($usertype == 'C') {
			$match_query['people.company_id'] = (int) $company_id;
		}*/
		//echo "<pre>"; print_r($match_query); exit;
		$common_arguments = array(
			array(
				'$unwind' => '$stateinfo'
			),
			array(
				'$unwind' => '$stateinfo.cityinfo'
			),
			array(
				'$lookup' => array(
					'from' => MDB_PEOPLE,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'login_country',
					'foreignField' => 'login_city',
					'as' => 'people'
				)
			),
			array(
				'$unwind' => '$people'
			),
			array(
				'$lookup' => array(
					'from' => MDB_COMPANY,
					'localField' => 'people.company_id',
					'foreignField' => '_id',
					'as' => 'company'
				)
			),
			//array('$unwind' => '$company'),
			array(
				'$lookup' => array(
					'from' => MDB_DRIVER_INFO,
					'localField' => 'people._id',
					'foreignField' => '_id',
					'as' => 'driver'
				)
			),
			//array('$unwind' => '$driver'),
			array('$match' => $match_query),
		);
		$field_arguments = array(
				
				array(
					'$project' => array(
						'id' => '$people._id',
						//'user_createdby' => '$people.user_createdby',
						'name' => '$people.name',
						'username' => '$people.username',
						'email' => '$people.email',
						'company_name' => '$company.companydetails.company_name',
						'address' => '$people.address',
						'availability_status' => '$people.availability_status',
						'status' => '$people.status',
						'driver_license_id' => '$people.driver_license_id',
						'shift_status' => '$driver.shift_status',
						'phone' => '$people.phone',
						'country_name' => '$country_name',
						'state_name' => '$stateinfo.state_name',
						'city_name' => '$stateinfo.cityinfo.city_name',
						'userid' => '$company.companydetails.userid',
						'photo' => '$people.profile_picture',
						'driver_status' => '$people.status',
						'total_due_amount_mobile' => '$driver.total_due_amount_mobile',
						'daily_deduction_amount' => '$driver.daily_deduction_amount',
						'wallet_amount' => '$driver.wallet_amount',
						'total_paid_due_amount_mobile' => '$driver.total_paid_due_amount_mobile',
						'device_token' => '$people.device_token',
						'device_type' => '$people.device_type',
						'wallet_notification_status' => '$driver.wallet_notification_status',
						'wallet_notification_date' => '$driver.wallet_notification_date',
						'insurance_total_due_amount' => '$driver.insurance_total_due_amount',
						'insurance_daily_deduction_amount' => '$driver.insurance_daily_deduction_amount',
						'total_paid_due_amount_insurance' => '$driver.total_paid_due_amount_insurance',
					)
				),
				array(
					'$sort' => array( 
						'id' => -1
					),
				)				
			); 
		/*if($find_count != true){
			
			$field_arguments[]['$skip'] = (int)$offset;
			$field_arguments[]['$limit'] = (int)$val;
		}*/
		$merge_arguments = array_merge($common_arguments, $field_arguments);
		$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);	
		//print_r($result)	; exit;
		if(!empty($result['result'])){
			foreach($result['result'] as $key => $res)		
			{					
				//$details[$key]['created_by'] = $this->userNamebyId($res['user_createdby']);			
				/*$details[$key]['created_by'] = (isset($res['user_createdby']) && array_key_exists($res['user_createdby'],$peoples)) ? $peoples[$res['user_createdby']] : '';*/
				$details[$key]['name'] = isset($res['name']) ? $res['name']: '';
				$details[$key]['username'] = isset($res['username']) ? $res['username']: '';
				$details[$key]['email'] = isset($res['email']) ? $res['email']: '';			
				$details[$key]['status'] = isset($res['driver_status']) ? $res['driver_status']: '';
				$details[$key]['id'] = isset($res['id']) ? $res['id']: '';				
				$details[$key]['shift_status'] = isset($res['shift_status'][0]) ? $res['shift_status'][0]: '';
				$details[$key]['phone'] = isset($res['phone']) ? $res['phone']: '';
				$details[$key]['country_name'] = isset($res['country_name']) ? $res['country_name']: '';			
				$details[$key]['driver_status'] = isset($res['driver_status']) ? $res['driver_status']: '';
				$details[$key]['driver_status'] = isset($res['driver_status']) ? $res['driver_status']: '';
				$details[$key]['total_due_amount_mobile'] = isset($res['total_due_amount_mobile']) ? $res['total_due_amount_mobile']: '';
				$details[$key]['daily_deduction_amount'] = isset($res['daily_deduction_amount']) ? $res['daily_deduction_amount']: ''; 
				$details[$key]['wallet_amount'] = isset($res['wallet_amount']) ? $res['wallet_amount']: ''; 
				$details[$key]['device_token'] = isset($res['device_token']) ? $res['device_token']: ''; 
				$details[$key]['device_type'] = isset($res['device_type']) ? $res['device_type']: ''; 	
				$details[$key]['wallet_notification_status'] = isset($res['wallet_notification_status']) ? $res['wallet_notification_status']: '';
				$details[$key]['wallet_notification_date'] = isset($res['wallet_notification_date']) ? $res['wallet_notification_date']: ''; 
				$details[$key]['total_paid_due_amount_mobile'] = isset($res['total_paid_due_amount_mobile']) ? $res['total_paid_due_amount_mobile']: '';
				$details[$key]['insurance_total_due_amount'] = isset($res['insurance_total_due_amount']) ? $res['insurance_total_due_amount']: '';
				$details[$key]['insurance_daily_deduction_amount'] = isset($res['insurance_daily_deduction_amount']) ? $res['insurance_daily_deduction_amount']: ''; 
				$details[$key]['total_paid_due_amount_insurance'] = isset($res['total_paid_due_amount_insurance']) ? $res['total_paid_due_amount_insurance']: 0;		
			}
		}
		//echo '<pre>';print_r($result);exit;
		return $details;
    }
    // **************** get driver list for deduct daily due end here *****************

    // **************** Update driver balance driver wallet amount start here **********
    public function update_driver_wallet($id,$cal_bal_wallet)
    {    	
		$set_array = array();
		//Set Array		
		if(isset($cal_bal_wallet)) { $set_array['wallet_amount'] = (double)$cal_bal_wallet; }
		$current_dt_time = date('Y-m-d H:i:s');
		$set_array['wallet_amount_updated_datetime'] = Commonfunction::MongoDate(strtotime($current_dt_time));
		$set_array['wallet_amount_updated_datetime'] = Commonfunction::MongoDate(strtotime($current_dt_time));
		//$set_array['total_due_amount_mobile' = 
		
		$result = $this->mongo_db->updateOne(MDB_DRIVER_INFO,array('_id' => (int)$id),array('$set'=>$set_array),array('upsert'=>false));
        return (empty($result->getwriteErrors())) ? 1 : 0;
    
    }
    public function insert_driver_wallet_log($id,$cal_bal_wallet,$total_payable_due, $previous_balance_wallet,$daily_deduction_amount, $insurance_amnt, $balance_mobile_amount, $balance_insurance_amount)
    {
    	$current_time = date('Y-m-d H:i:s');
    	$options=[
				'projection'=>[
				   '_id'=>1,                               
					],
				'sort'=>[
					'_id'=>-1
					 ],
				'limit'=>1
			];
		$res = $this->mongo_db->find(MDB_DRIVER_WALLET_DEDUCTION_LOG,[],$options);
		$res = (!empty($res))?array($res[0]['_id']=>0):array(1);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
        $fieldname_array = array(
			'_id' => (int)$inc_id,
            'driver_id'=>(int)$id,
            'total_wallet_balance'=> (double)$cal_bal_wallet,            
            'paid_amount'=> (double)$total_payable_due,
            'previous_wallet_total'=> (double)$previous_balance_wallet,
            'balance_mobile_amount' => (double)$balance_mobile_amount,
            'balance_insurance_amount' => (double)$balance_insurance_amount, 
            'daily_deduct_mobile'=> (double)$daily_deduction_amount,
            'daily_insurance_deduct'=> (double)$insurance_amnt,           
            'updated_date'=> Commonfunction::MongoDate(strtotime($current_time))            
        );
		$result = $this->mongo_db->insertOne(MDB_DRIVER_WALLET_DEDUCTION_LOG,$fieldname_array);
		return true;
    }
    // **************** Update driver balance driver wallet amount end here  **********
    // *************** Update driver wallet notification status  ****************
    public function update_driver_wallet_notifi($id, $not_status)
    {  
    	$current_time = date('Y-m-d H:i:s');
    	$set_array = array(); 
		//Set Array			
		//$current_dt_time = date('Y-m-d H:i:s');
		$set_array['wallet_notification_status'] = (int)$not_status;
		$set_array['wallet_notification_date'] = Commonfunction::MongoDate(strtotime($current_time));

		$result = $this->mongo_db->updateOne(MDB_DRIVER_INFO,array('_id' => (int)$id),array('$set'=>$set_array),array('upsert'=>false)); 
        return (empty($result->getwriteErrors())) ? 1 : 0; 
    }
    // *************** Update driver wallet notification status *****************

    // **************** Update driver total paid driver due amount start here **********
    public function update_driver_wallet_paid($id,$cal_total_paid, $cal_paid_due_ins)
    {    	
		$set_array = array();
		//Set Array		
		
		//$current_dt_time = date('Y-m-d H:i:s');
		//$set_array['wallet_amount_updated_datetime'] = Commonfunction::MongoDate(strtotime($current_dt_time));		
		$set_array['total_paid_due_amount_mobile'] = (double) $cal_total_paid;
		$set_array['total_paid_due_amount_insurance'] = (double) $cal_paid_due_ins;
		
		$result = $this->mongo_db->updateOne(MDB_DRIVER_INFO,array('_id' => (int)$id),array('$set'=>$set_array),array('upsert'=>false));
        return (empty($result->getwriteErrors())) ? 1 : 0;
    
    }
    // **************** Update driver total paid driver due amount end here **********
}
?>
