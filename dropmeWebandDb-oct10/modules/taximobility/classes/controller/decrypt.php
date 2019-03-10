 <?php 
 header('Access-Control-Allow-Origin: *'); 
 Class Controller_Decrypt  extends Controller
{
	public function action_index()
	{
		
		require Kohana::find_file('classes/controller', 'ndotcrypt');
		$mobile_data_ndot_crypt=new NDOT_MCrypt();
		

		/*echo $txt = strtolower('PARCEL
DELIVERY/COLLECTION
SAME DAY UNDER 50KM
- FIXED RATES APPLY'); exit;*/


		//$data = file_get_contents('php://input');
		
		//print_r($_REQUEST);exit;
		
		//$input_param ="y60xVAl+6sgNc+qhgbMLeISvbMzuGMtgltjQrAFsyaC/C5jHHcafkoyoIpWjvZlGxwMe//fP1RcUwhYZIl211iOpSWCkWqytrSxmrkvrrikJ9+pN7dGKC6cpVV7UD+t5KQ1khrv4GQem5MwSa0b4htMzEXdUhclxxH3VpcPKtErm3kUOkHaKjezaTDaaWVUS4JRV9t41DK7sxAzHfJ7FTzbgEymoxRCw2q4CGhiAPrkkey8W+Qa/hlu/OvknHSgQFfzt0hjkaNSvaJvEdP05gBmpWFM3AYIw7ZIDLGhAIIkqDMY5L3Crl+awT3GBd/J9z9ocDm1WkmERzAgOp0X8NP1oC4ceFJ7dcgBm5M69ZdJXoJq1R0LQuld3daWunSkXPBaEk40QkIKQuVhjSN6GKrI20wdppp7dBijrzsFU2xSLot6xrCBCrYQ5vXNi7bRijtNgvhrv3bUy9M+LaaDRwtuofePY7CPdEInGZMVcFlqIkuOM6gUr8GFeTSc3Pan3CoWX5/M8hu2VM/+A9ynttAbTGedbHghcnUftB4bvgZrrcRquFOkfpT/U/zd6nz7nt30ckHAEiR8RI6Taz/otn/owzjCtUuTw3jfWHzPf9KQJtc9bTx2PvbcxjqjIwJK0JuA21wiK66KH0/To3PQRkXA4TCTRO1Q2veYc1CNk4FLDoqkP+wKxE+n8BN5bmVCJMC+ED70cNddb3iCU7oZrKcUMguvakttpb4RmVpeWEwxgtStkqJY54DEbSp//T7dkMRR3zHVJTZNAOIVBN7Y6bQ==";		
		//$input_param =$_REQUEST['value'];
		
		$input_param ='GGJ5R22VnohfPUasiHFcN6JbttG5nIMuu9KBxz/vzsdzh+KeU78VTu9avSkZkUdhA67+4jZm3i8yf8d084L5tA==';		
		$mobile_decryptdata=$mobile_data_ndot_crypt->decrypt_decode($input_param);
		//echo "here";
		echo $mobile_decryptdata;exit;
	}
	public function action_encrypt()
	{
		require Kohana::find_file('classes/controller', 'ndotcrypt');
		 $mobile_data_ndot_crypt=new NDOT_MCrypt();
		$additional_param=[];
		
		/*$input_param 
		='{"trip_id":"1","passengers_id":"","booking_category_udrop":"3"}';*/
		$input_param =$_REQUEST['input'];
		
 /*$input_array  =array('card_type' => 'P' ,'creditcard_no' => 
 '4000015372250142','email' => 'andalpriyadharshini@ndot.in', 
 'expdatemonth' => '7', 'expdateyear' => '2028', 'passenger_id' => 
 '13', 'creditcard_cvv' => '123', 'default' => '1' );*/
 //$message=array("message" => __('try_again'),"status"=>-5);
		
	
		$mobile_decryptdata=$mobile_data_ndot_crypt->encrypt_encode($input_param);
		//echo "here";
		print_r($mobile_decryptdata);exit;
	}
}
  ?>
