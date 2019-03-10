<?php defined('SYSPATH') or die('No direct script access.');
/******************************************

* Contains Cron details

* @Package: Taximobility

* @Author: taxi Team

* @URL : taximobility.com

********************************************/
class Controller_Cronbooking extends Controller_TaximobilityCronbooking
{
	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		$this->cronbooking_model = Model::factory('cronbooking');
		//$this->common_model = Model::factory('cronbooking');
	}
	// ****************** for deduct driver daily due of insurance and mobile due amount start here ************
	public function action_cron_driverdailydeduction()
	{	

		//echo 'inside'; exit;
		//$insurance_amnt_res = $this->cronbooking_model->select_site_settings('');
		//$insurance_amnt = isset($insurance_amnt_res[0]['insurance_amount'])?$insurance_amnt_res[0]['insurance_amount']:0;
		$driver_list_res = $this->cronbooking_model->due_drivers_list('');
		//echo '<pre>'; print_r($driver_list_res);exit();	
		foreach($driver_list_res as $driver_res)
		{
			$cal_total_paid = 0; $total_payable_due = 0; $previous_balance_wallet = 0; $cal_bal_wallet =0;
			$total_due_amount_mobile = isset($driver_res['total_due_amount_mobile'][0])?$driver_res['total_due_amount_mobile'][0]:0;
			$daily_deduction_amount = isset($driver_res['daily_deduction_amount'][0])?$driver_res['daily_deduction_amount'][0]:0;
			$wallet_amount = isset($driver_res['wallet_amount'][0])?$driver_res['wallet_amount'][0]:0; 
			$device_token = isset($driver_res['device_token'])?$driver_res['device_token']:0;
			$device_type = isset($driver_res['device_type'])?$driver_res['device_type']:0;
			$id = isset($driver_res['id'])?$driver_res['id']:'';   
			$wallet_notification_status = isset($driver_res['wallet_notification_status'][0])?$driver_res['wallet_notification_status'][0]:'';
			$wallet_notification_date = isset($driver_res['wallet_notification_date'][0])?$driver_res['wallet_notification_date'][0]:''; 
			$total_paid_due_amount_mobile1 = isset($driver_res['total_paid_due_amount_mobile'][0])?$driver_res['total_paid_due_amount_mobile'][0]:'';
			$insurance_total_due_amount = isset($driver_res['insurance_total_due_amount'][0])?$driver_res['insurance_total_due_amount'][0]:0;
			$insurance_amnt = isset($driver_res['insurance_daily_deduction_amount'][0])?$driver_res['insurance_daily_deduction_amount'][0]:0;
			$total_paid_due_amount_insurance = isset($driver_res['total_paid_due_amount_insurance'][0])?$driver_res['total_paid_due_amount_insurance'][0]:0;
			//print_r($driver_res['total_paid_due_amount_insurance']); exit;

			/** #Devirani**/
			$balance_mobile_amount = $total_due_amount_mobile - $total_paid_due_amount_mobile1;
			if( $balance_mobile_amount > 0 )
			{
				if( $balance_mobile_amount < $daily_deduction_amount )	
					$daily_deduction_amount = $balance_mobile_amount;
			}
			else
				$daily_deduction_amount = 0;
			//echo $insurance_total_due_amount;exit;
			$balance_insurance_amount = $insurance_total_due_amount - $total_paid_due_amount_insurance;
			//echo $balance_insurance_amount;exit;
			if( $balance_insurance_amount > 0 )
			{
				if( $balance_insurance_amount < $insurance_amnt )	
					$insurance_amnt = $balance_insurance_amount;
			}
			else
				$insurance_amnt = 0;

			$total_paid_due_amount_insurance = isset($driver_res['total_paid_due_amount_insurance'][0])?$driver_res['total_paid_due_amount_insurance'][0]:0;

			//print_r($$driver_res['total_paid_due_amount_mobile']); exit;
			/*if($total_due_amount_mobile <= $total_paid_due_amount_mobile1)
			{  				
				$daily_deduction_amount = 0;
			}
			if($insurance_total_due_amount <= $total_paid_due_amount_insurance)
			{  				
				$insurance_amnt = 0;
			}*/			
			//echo $total_paid_due_amount_mobile1; exit;
			$total_payable_due = $insurance_amnt + $daily_deduction_amount;
			$cal_paid_due = $total_paid_due_amount_mobile1 + $daily_deduction_amount;
			$cal_paid_due_ins = $total_paid_due_amount_insurance + $insurance_amnt;

			$previous_balance_wallet = $wallet_amount;
			$cal_bal_wallet = $wallet_amount - $total_payable_due;
			$this->cronbooking_model->update_driver_wallet($id,$cal_bal_wallet); 
			$insert_wallet_log = $this->cronbooking_model->insert_driver_wallet_log($id,$cal_bal_wallet,$total_payable_due, $previous_balance_wallet,$daily_deduction_amount, $insurance_amnt,$balance_mobile_amount, $balance_insurance_amount); 
			//$this->cronbooking_model->update_driver_wallet_paid($id,$cal_bal_wallet);  

			if($total_payable_due <= $wallet_amount)
			{	
				//$previous_balance_wallet = $wallet_amount;
				//$cal_bal_wallet = $wallet_amount - $total_payable_due;
				$this->cronbooking_model->update_driver_wallet_paid($id,$cal_paid_due,$cal_paid_due_ins);  
				//$this->cronbooking_model->update_driver_wallet($id,$cal_bal_wallet); 
				//$insert_wallet_log = $this->cronbooking_model->insert_driver_wallet_log($id,$cal_bal_wallet,$total_payable_due, $previous_balance_wallet); 
				if($total_payable_due > $cal_bal_wallet && $device_token != '' && $wallet_notification_status != '1')
				{   	
					$pushMessage = array("message" => __('insufficient_wallet_amount'),"driver_notes"=>'',"badge"=>1, "status" => 35);

					//$pushMessage = __('insufficient_wallet_amount');
					$this->commonmodel->send_pushnotification($device_token,$device_type,$pushMessage);
					$this->cronbooking_model->update_driver_wallet_notifi($id,'1');
				}
			} // check driver wallet amount is sufficient
			else
			{ 	
						
				if($wallet_notification_status != '1' && $device_token != '')
				{  //echo $device_token.'<br>'; 
					//$this->cronbooking_model->update_driver_wallet($id,$cal_bal_wallet);
			//if($id == 7){ echo $wallet_notification_status; exit; }	
					$pushMessage = array("message" => __('insufficient_wallet_amount'),"driver_notes"=>'',"badge"=>1, "status" => 35);
					//echo $device_token.'sss'; exit;
					$this->commonmodel->send_pushnotification($device_token,$device_type,$pushMessage); 
					$this->cronbooking_model->update_driver_wallet_notifi($id,'1'); 
				}
			} // check driver wallet amount is insufficient

			
		} // driver foreach
		exit;
		//print_r($driver_list_res); exit;

		//$status = $this->cronbooking_model->cron_recurrentbooking();		
	}

	/*public function action_cron_driverdailydeduction()
	{	

		//echo 'inside'; exit;
		//$insurance_amnt_res = $this->cronbooking_model->select_site_settings('');
		//$insurance_amnt = isset($insurance_amnt_res[0]['insurance_amount'])?$insurance_amnt_res[0]['insurance_amount']:0;
		$driver_list_res = $this->cronbooking_model->due_drivers_list('');
		//echo '<pre>'; print_r($driver_list_res);exit();	
		foreach($driver_list_res as $driver_res)
		{
			$cal_total_paid = 0; $total_payable_due = 0; $previous_balance_wallet = 0; $cal_bal_wallet =0;
			$total_due_amount_mobile = isset($driver_res['total_due_amount_mobile'][0])?$driver_res['total_due_amount_mobile'][0]:0;
			$daily_deduction_amount = isset($driver_res['daily_deduction_amount'][0])?$driver_res['daily_deduction_amount'][0]:0;
			$wallet_amount = isset($driver_res['wallet_amount'][0])?$driver_res['wallet_amount'][0]:0; 
			$device_token = isset($driver_res['device_token'])?$driver_res['device_token']:0;
			$device_type = isset($driver_res['device_type'])?$driver_res['device_type']:0;
			$id = isset($driver_res['id'])?$driver_res['id']:'';   
			$wallet_notification_status = isset($driver_res['wallet_notification_status'][0])?$driver_res['wallet_notification_status'][0]:'';
			$wallet_notification_date = isset($driver_res['wallet_notification_date'][0])?$driver_res['wallet_notification_date'][0]:''; 
			$total_paid_due_amount_mobile1 = isset($driver_res['total_paid_due_amount_mobile'][0])?$driver_res['total_paid_due_amount_mobile'][0]:'';
			$insurance_total_due_amount = isset($driver_res['insurance_total_due_amount'][0])?$driver_res['insurance_total_due_amount'][0]:0;
			$insurance_amnt = isset($driver_res['insurance_daily_deduction_amount'][0])?$driver_res['insurance_daily_deduction_amount'][0]:0;
			//print_r($driver_res['total_paid_due_amount_insurance']); exit;
			$total_paid_due_amount_insurance = isset($driver_res['total_paid_due_amount_insurance'][0])?$driver_res['total_paid_due_amount_insurance'][0]:0;

			//print_r($$driver_res['total_paid_due_amount_mobile']); exit;
			
			$balance_mobile_amount = $total_due_amount_mobile - $total_paid_due_amount_mobile1;
			if( $balance_mobile_amount > 0 )
			{
				if( $balance_mobile_amount < $daily_deduction_amount )	
					$daily_deduction_amount = $balance_mobile_amount;
			}
			else
				$daily_deduction_amount = 0;
			//echo $insurance_total_due_amount;exit;
			$balance_insurance_amount = $insurance_total_due_amount - $total_paid_due_amount_insurance;
			//echo $balance_insurance_amount;exit;
			if( $balance_insurance_amount > 0 )
			{
				if( $balance_insurance_amount < $insurance_amnt )	
					$insurance_amnt = $balance_insurance_amount;
			}
			else
				$insurance_amnt = 0;

			$total_payable_due = $insurance_amnt + $daily_deduction_amount;
			if( $total_payable_due > 0 )
			{
				if($total_payable_due <= $wallet_amount)
				{	
					$cal_paid_due = $total_paid_due_amount_mobile1 + $daily_deduction_amount;
					$cal_paid_due_ins = $total_paid_due_amount_insurance + $insurance_amnt;

					$previous_balance_wallet = $wallet_amount;
					$cal_bal_wallet = $wallet_amount - $total_payable_due;
					$this->cronbooking_model->update_driver_wallet($id,$cal_bal_wallet); 
					$insert_wallet_log = $this->cronbooking_model->insert_driver_wallet_log($id,$cal_bal_wallet,$total_payable_due, $previous_balance_wallet,$daily_deduction_amount, $insurance_amnt, $balance_mobile_amount, $balance_insurance_amount ); 
					//$this->cronbooking_model->update_driver_wallet_paid($id,$cal_bal_wallet);  

				
					$this->cronbooking_model->update_driver_wallet_paid($id,$cal_paid_due,$cal_paid_due_ins);  
					//$this->cronbooking_model->update_driver_wallet($id,$cal_bal_wallet); 
					
				}
				else if($total_payable_due > $cal_bal_wallet && $device_token != '' && $wallet_notification_status != '1')
				{   	
					$pushMessage = array("message" => __('insufficient_wallet_amount'),"driver_notes"=>'',"badge"=>1, "status" => 35);

					//$pushMessage = __('insufficient_wallet_amount');
					$this->commonmodel->send_pushnotification($device_token,$device_type,$pushMessage);
					$this->cronbooking_model->update_driver_wallet_notifi($id,'1');
				}
			} // check driver wallet amount is sufficient
			
		} // driver foreach
		exit;
		//print_r($driver_list_res); exit;

		//$status = $this->cronbooking_model->cron_recurrentbooking();		
	}*/

	// ****************** for deduct driver daily due of insurance and mobile due amount end here ************
}
?>
