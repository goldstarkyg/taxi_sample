<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Beanstream payment gateway module
 *
 * @uses       Beanstream 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Beanstreampayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_Beanstream_gateway_connection;

    public function __construct() {
        
    }

    /**
     * Beanstream payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // Beanstream sandbox environment 
                if ($pay_type == "T") {
					
					$merchant_id = $connection_string[0]['payment_gateway_username']; //INSERT MERCHANT ID (must be a 9 digit string)
					$api_key = $connection_string[0]['payment_gateway_password']; //INSERT API ACCESS PASSCODE
					$api_version = 'v1'; //default
					$platform = 'www'; //default
					
                     
                }
                //Beanstream production environment 
                else if ($pay_type == "L") {
					
					$merchant_id = $connection_string[0]['payment_gateway_username']; //INSERT MERCHANT ID (must be a 9 digit string)
					$api_key = $connection_string[0]['payment_gateway_password']; //INSERT API ACCESS PASSCODE
					$api_version = 'v1'; //default
					$platform = 'www'; //default
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
                return $beanstream = new Beanstream\Gateway($merchant_id, $api_key, $platform, $api_version);
               
               					
            } catch (Exception $message) {
                echo $message;
                exit;
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * Beanstream payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function beanstream_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		//print_r($shipping_info);die;
			$beanstream_connect = self::connect($connection_string);
			
			$exp_year= date("y",strtotime($card_info['expirationYear']));
			$order_number = substr(mt_rand() . microtime(), 0,10);
			$payment_response = [];
			
			$payment_data = array(
						'order_number' => $order_number,
						'amount' => $transaction_amount,
						'payment_method' => 'card',
						'card' => array(
						'name' => $shipping_info['firstName'],
						'number' =>$card_info['card_number'],
						'expiry_month' => $card_info['expirationMonth'],
						'expiry_year' => $exp_year,
						'cvd' => $card_info['cvv']
						)
						
						
				);
				$complete = TRUE; //set to FALSE for PA
				
				 $payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';

				//Try to submit a Card Payment
				
				try {

					$result = $beanstream_connect->payments()->makeCardPayment($payment_data, $complete);
					
					if($result['approved']==1){
						$payment_response['payment_response'] = $result['message'];
                       $payment_response['CORRELATIONID'] = $result['order_number'];
                        $payment_response['TRANSACTIONID'] = $result['id'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = $result['card']['card_type'];
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $result['message'];
					}
					
				} catch (\Beanstream\Exception $e) {
					$payment_response['payment_status'] = 0;
					$payment_response['payment_response'] = $e->getMessage();
				}
				
				//print_r($payment_response);die;
					return $payment_response;

        
    }
    
    /**
     * Beanstream payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function beanstream_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		//print_r($shipping_info);die;
			$beanstream_connect = self::connect($connection_string);
			
			$exp_year= date("y",strtotime($card_info['expirationYear']));
			$order_number = substr(mt_rand() . microtime(), 0,10);
			$payment_response = [];
			
			$payment_data = array(
						'order_number' => $order_number,
						'amount' => $transaction_amount,
						'payment_method' => 'card',
						'card' => array(
						'name' => $shipping_info['firstName'],
						'number' =>$card_info['card_number'],
						'expiry_month' => $card_info['expirationMonth'],
						'expiry_year' => $exp_year,
						'cvd' => $card_info['cvv']
						)
						
						
				);
				$complete = FALSE; //set to FALSE for PA
				
				 $payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';

				//Try to submit a Card Payment
				try {

					$result = $beanstream_connect->payments()->makeCardPayment($payment_data, $complete);
					
					if($result['approved']==1){
						$payment_response['payment_response'] = $result['message'];
                        $payment_response['CORRELATIONID'] = $result['order_number'];
                        $payment_response['TRANSACTIONID'] = $result['id'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = $result['card']['card_type'];
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tresponse['message'];
					}
					
				} catch (\Beanstream\Exception $e) {
					$payment_response['payment_status'] = 0;
                                        
                                        $payment_response['payment_response']=$e->getMessage();
				}
				
				//print_r($payment_response);die;
					return $payment_response;

        
    }
    
    /**
     * Beanstream settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function beanstream_settlement($connection_string = [], $transactionId = '',$transact_param = []) {
			$beanstream_connect = self::connect($connection_string);
			$payment_response = [];
			$amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			//$transactionId="10000003";
			//$amount='103.00';
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
				$result= $beanstream_connect->payments()->complete($transactionId, $amount);
				
					if($result['approved']==1){
						$payment_response['payment_response'] = $result['message'];
                        $payment_response['CORRELATIONID'] = $result['id'];
                        $payment_response['TRANSACTIONID'] = $result['order_number'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = $result['card']['card_type'];
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tresponse['message'];
                                                 $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
					}
			
				}catch (\Beanstream\Exception $e) {
					$payment_response['payment_status'] = 0;
                                        $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
				}


			//print_r($payment_response);die;
					
       return $payment_response;
    }
    
     /**
     * Beanstream void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function beanstream_void($connection_string = [], $transactionId = '',$amount = null) {
			$beanstream_connect = self::connect($connection_string);
			$payment_response = [];
			
			//$transactionId="10000037";
			//$amount='413.03';
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
				$result= $beanstream_connect->payments()->voidPayment($transactionId, $amount);
				
					if($result['approved']==1){
						$payment_response['payment_response'] = $result['message'];
                        $payment_response['CORRELATIONID'] = $result['id'];
                        $payment_response['TRANSACTIONID'] = $result['order_number'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = $result['card']['card_type'];
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tresponse['message'];
					}
			
				}catch (\Beanstream\Exception $e) {
					$payment_response['payment_status'] = 0;
				}


			//print_r($payment_response);die;
					
       return $payment_response;
    }
    
  

    

}
