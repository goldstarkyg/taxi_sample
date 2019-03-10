<?php defined( 'SYSPATH' ) or die( 'No direct script access.' );
/******************************************
* Contains Tdispatch details
* @Package: Taximobility
* @Author: taxi Team
* @URL : taximobility.com
********************************************/
class Controller_TaximobilityTdispatch extends Controller_Siteadmin
{
    /**
     ****__construct()****
     * 
     */
    public function __construct( Request $request, Response $response )
    {
        parent::__construct( $request, $response );
        $this->currentdate_bytimezone     = Commonfunction::createdateby_user_timezone();
        $this->is_login();
    }
    public function is_login()
    {
        $session = Session::instance();
        //get current url and set it into session
        //========================================
        $this->session->set( 'requested_url', Request::detect_uri() );
        /**To check Whether the user is logged in or not**/
        if ( !isset( $this->session ) || ( !$this->session->get( 'userid' ) ) && !$this->session->get( 'id' ) ) {
            Message::error( __( 'login_access' ) );
            $this->request->redirect( "/company/login/" );
        }
        return;
    }
    public function action_getDistanceandtime()
    {
        $output           = '';
        $current_location = arr::get( $_REQUEST, 'current_location' );
        $drop_location    = arr::get( $_REQUEST, 'drop_location' );
        $current_location = urlencode( $current_location );
        $drop_location    = urlencode( $drop_location );
        $json             = file_get_contents( 'https://maps.googleapis.com/maps/api/directions/json?origin=' . $current_location . '&destination=' . $drop_location . '&waypoints=&sensor=false&key=' . GOOGLE_GEO_API_KEY );
        $details          = json_decode( $json, TRUE );
        $distance         = $details['routes'][0]['legs']['0']['distance']['text'];
        $duration         = $details['routes'][0]['legs']['0']['duration']['text'];
        $output           = $distance . ',' . $duration;
        echo $output;
        exit;
    }
    /** Manage Tdispatch settings **/
    public function action_tdispatch_settings()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ( $usertype == 'A' && $usertype == 'S' ) {
            $this->request->redirect( "admin/login" );
        }
        $settings        = Model::factory( 'tdispatch' );
        $submit_settings = arr::get( $_REQUEST, 'submit_settings' );
        $post_values     = $errors = array();
        if ( $submit_settings && Validation::factory( $this->request->post() ) ) {
            $post      = Arr::map( 'trim', $this->request->post() );
            $validator = $settings->validate_dispatchsetting( arr::extract( $post, array(
                 'labelname' 
            ) ) );
            if ( $validator->check() ) {
                $status = $settings->update_dispatchsetting( $post );
                if ( $status == 1 ) {
                    Message::success( __( 'sucessful_settings_update' ) );
                } else {
                    Message::error( __( 'not_updated' ) );
                }
                $this->request->redirect( "tdispatch/tdispatch_settings" );
            } else {
                $errors = $validator->errors( 'errors' );
            }
        }
        $tdispatch_settings         = $settings->tdispatch_settings();
        $this->selected_page_title  = __( "site_settings" );
        $view                       = View::factory( 'admin/tdispatch/manage_tdispatch_settings' )->bind( 'postvalue', $post_values )->bind( 'errors', $errors )->bind( 'tdispatch_settings', $tdispatch_settings );
        $this->template->title      = SITENAME . " | " . __( 'tdispatch_setting' );
        $this->template->page_title = __( 'tdispatch_setting' );
        $this->template->content    = $view;
    }
    public function action_get_citymodel_fare_details()
    {
        $company_id           = $_SESSION['company_id'];
        $tdispatch_model      = Model::factory( 'tdispatch' );
        $common_model         = Model::factory( 'commonmodel' );
        $total_min            = $_REQUEST['total_min'];
        $taxi_fare_details    = $tdispatch_model->get_citymodel_fare_details( $_REQUEST['model_id'], $_REQUEST['city_name'], $_REQUEST['city_id'], $company_id );
       
        $tax = TAX;
        if(FARE_SETTINGS == 2 && $company_id != 0){
			$tax = isset($taxi_fare_details[0]->company_tax) ? $taxi_fare_details[0]->company_tax : 0;
		}    
        $base_fare            = $taxi_fare_details[0]->base_fare;
        $min_km_range         = $taxi_fare_details[0]->min_km;
        $min_fare             = $taxi_fare_details[0]->min_fare;
        $cancellation_fare    = $taxi_fare_details[0]->cancellation_fare;
        $below_above_km_range = $taxi_fare_details[0]->below_above_km;
        $below_km             = $taxi_fare_details[0]->below_km;
        $above_km             = $taxi_fare_details[0]->above_km;
       
        $night_charge         = $taxi_fare_details[0]->night_charge;
        $night_timing_from    = $taxi_fare_details[0]->night_timing_from;
        $night_timing_to      = $taxi_fare_details[0]->night_timing_to;
        $night_fare           = $taxi_fare_details[0]->night_fare;
        
		$evening_charge         = $taxi_fare_details[0]->evening_charge;
        $evening_timing_from    = $taxi_fare_details[0]->evening_timing_from;
        $evening_timing_to      = $taxi_fare_details[0]->evening_timing_to;
        $evening_fare           = $taxi_fare_details[0]->evening_fare;
        
        $waiting__per_hour    = $taxi_fare_details[0]->waiting_time;
        $minutes_fare         = $taxi_fare_details[0]->minutes_fare;
        //Waiting Time Charge for an company
        $total_fare           = $distance = $total = 0;
        $distance = $_REQUEST['distance_km'];
        if(UNIT_NAME != 'KM'){
			//~ $distance = $distance * 1.60934;
		}	
        
        $total_fare           = $base_fare;
        if ( FARE_CALCULATION_TYPE == 1 || FARE_CALCULATION_TYPE == 3 ) {
            if ( $distance < $min_km_range ) {
                $total_fare = $min_fare;
            } else if ( $distance <= $below_above_km_range ) {
                $fare       = $distance * $below_km;
                $total_fare = $fare + $base_fare;
            } else if ( $distance > $below_above_km_range ) {
                $fare       = $distance * $above_km;
                $total_fare = $fare + $base_fare;
            }
        }
        if ( FARE_CALCULATION_TYPE == 2 || FARE_CALCULATION_TYPE == 3 ) {
            /********** Minutes fare calculation ************/
            $minutes = round( $total_min / 60 );
            if ( $minutes_fare > 0 ) {
                $minutes_cost = $minutes * $minutes_fare;
                $total_fare   = $total_fare + $minutes_cost;
            }
            /************************************************/
        }
		
		$trip_time = $this->currentdate_bytimezone;
		
        # Night Fare Calculation
		$parsed = date_parse($night_timing_from);
		$night_from_seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];

		$parsed = date_parse($night_timing_to);
		$night_to_seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];

		$nightfare_applicable = $date_difference=0;
		if ($night_charge != 0) 
		{			
			$night_start_date ='';
			$night_end_date ='';

			$night_start_date= date('Y-m-d')." ".$night_timing_from;
			$night_timing_to_value=$night_timing_to;
			$night_timing_from_value=$night_timing_from;
			$night_end_date= date('Y-m-d')." ".$night_timing_to;
			//~ echo $night_end_date.$night_start_date;exit;
			if(strtotime($night_end_date) < strtotime($night_start_date))
			{
				$night_start_date=date('Y-m-d', strtotime('-1 day'))." ".$night_timing_from_value;
			}
			else
			{
				$night_start_date= date('Y-m-d')." ".$night_timing_from_value;
			}
			
			if( strtotime($trip_time) >= strtotime($night_start_date) && strtotime($trip_time) <= strtotime($night_end_date))
			{
				$nightfare_applicable = 1;
				$nightfare = ($night_fare/100)*$total_fare;//night_charge%100;      
				$total_fare  = $nightfare + $total_fare;
			}
		}							
		
		# Evening Fare Calculation
		$parsed = explode(':',date('H:i:s', strtotime($trip_time)));
		$pickup_seconds = $parsed[0] * 3600 + $parsed[1] * 60 + $parsed[2];
						
		$parsed_eve = date_parse($evening_timing_from);
		$evening_from_seconds = $parsed_eve['hour'] * 3600 + $parsed_eve['minute'] * 60 + $parsed_eve['second'];

		$parsed_eve = date_parse($evening_timing_to);
		$evening_to_seconds = $parsed_eve['hour'] * 3600 + $parsed_eve['minute'] * 60 + $parsed_eve['second'];

		$eveningfare = 0; $evefare_applicable=$date_difference=0;
		if ($evening_charge != 0) 
		{
			if( $pickup_seconds >= $evening_from_seconds && $pickup_seconds <= $evening_to_seconds)
			{
				$evefare_applicable = 1;
				$eveningfare = ($evening_fare/100)*$total_fare;//night_charge%100;
				$total_fare  = $eveningfare + $total_fare;
			}
		}
		
		
        /** Edited By Logeswaran
         *  TAX Added Here Removed in script.js
         */
        $total_fare = number_format( ( ( $total_fare * $tax / 100 ) + $total_fare ), 2, '.', ' ' );
        echo $total_fare;
        exit;
    }
}
?>
