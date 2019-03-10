<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Bluepay payment gateway module
 *
 * @uses       Bluepay 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Bluepaypayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_Bluepay_gateway_connection;

    public function __construct() {
		
		
        
    }

    /**
     * Bluepay payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // Bluepay sandbox environment 
                if ($pay_type == "T") {
					
						$accountID = $connection_string[0]['payment_gateway_username'];
						$secretKey = $connection_string[0]['payment_gateway_password'];
						$mode = "TEST";//Transaction mode of either LIVE or TEST (default)
					
                }
                //Bluepay production environment 
                else if ($pay_type == "L") {
					
						$accountID = $connection_string[0]['live_payment_gateway_username'];
						$secretKey = $connection_string[0]['live_payment_gateway_password'];
						$mode = "LIVE";
						
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
                
                return $payment = new Bluepay($accountID,$secretKey,$mode);
               
               					
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
     * Bluepay payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
     
    public static function bluepay_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		
			$bluepay_connect = self::connect($connection_string);
			$payment_response = [];
			//$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
                        $month_year=$card_info['expirationYear']."-".$card_info['expirationMonth'];
			$expire=$card_info['expirationMonth'].date('y',strtotime($month_year));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
						
				try {
					
							$bluepay_connect->setCustomerInformation(array(
									'firstName' => isset($shipping_info['firstName'])?$shipping_info['firstName']:"", 
									'lastName' => isset($shipping_info['lastName'])?$shipping_info['lastName']:"", 
									'addr1' => isset($shipping_info['company'])?$shipping_info['company']:"", 
									'addr2' => isset($shipping_info['company'])?$shipping_info['company']:"", 
									'city' => isset($shipping_info['city'])?$shipping_info['city']:"", 
									'state' => isset($shipping_info['state'])?$shipping_info['state']:"", 
									'zip' =>isset($shipping_info['zipcode'])?$shipping_info['zipcode']:"", 
									'country' => isset($shipping_info['country'])?$shipping_info['country']:"", 
									'phone' => isset($shipping_info['phone'])?$shipping_info['phone']:"", 
									'email' => isset($shipping_info['email'])?$shipping_info['email']:"" 
									));
							$bluepay_connect->setCCInformation(array(
									'cardNumber' => $card_info['card_number'],
									'cardExpire' => $expire,
									'cvv2' => $card_info['cvv'] 
								));
								 
							$bluepay_connect->sale($transaction_amount);
							
							$bluepay_connect->process();
							
					if($bluepay_connect->isSuccessfulResponse()){
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
                       $payment_response['CORRELATIONID'] = $bluepay_connect->getAuthCode();
                        $payment_response['TRANSACTIONID'] = $bluepay_connect->getTransID();
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $bluepay_connect->getCardType();
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
				}
				$payment_response['payment_response'] = ($payment_response['payment_response'] == '' || $payment_response['payment_response'] =='Missing CC_EXPIRES') ? 'Invalid expiry month/year' :$payment_response['payment_response'];
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Bluepay payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function bluepay_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		$bluepay_connect = self::connect($connection_string);
			$payment_response = [];
			//$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
                        $month_year=$card_info['expirationYear']."-".$card_info['expirationMonth'];
			$expire=$card_info['expirationMonth'].date('y',strtotime($month_year));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
				try {
					
							$bluepay_connect->setCustomerInformation(array(
									'firstName' => isset($shipping_info['firstName'])?$shipping_info['firstName']:"", 
									'lastName' => isset($shipping_info['lastName'])?$shipping_info['lastName']:"", 
									'addr1' => isset($shipping_info['company'])?$shipping_info['company']:"", 
									'addr2' => isset($shipping_info['company'])?$shipping_info['company']:"", 
									'city' => isset($shipping_info['city'])?$shipping_info['city']:"", 
									'state' => isset($shipping_info['state'])?$shipping_info['state']:"", 
									'zip' =>isset($shipping_info['zipcode'])?$shipping_info['zipcode']:"", 
									'country' => isset($shipping_info['country'])?$shipping_info['country']:"", 
									'phone' => isset($shipping_info['phone'])?$shipping_info['phone']:"", 
									'email' => isset($shipping_info['email'])?$shipping_info['email']:"" 
									));
							$bluepay_connect->setCCInformation(array(
									'cardNumber' => $card_info['card_number'],
									'cardExpire' => $expire,
									'cvv2' => $card_info['cvv'] 
								));
								 
							$bluepay_connect->auth($transaction_amount);
							
							$bluepay_connect->process();
							
					if($bluepay_connect->isSuccessfulResponse()){
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
                       $payment_response['CORRELATIONID'] = $bluepay_connect->getAuthCode();
                        $payment_response['TRANSACTIONID'] = $bluepay_connect->getTransID();
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $bluepay_connect->getCardType();
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
				}
				$payment_response['payment_response'] = ($payment_response['payment_response'] == '' || $payment_response['payment_response'] =='Missing CC_EXPIRES') ? 'Invalid expiry month/year' :$payment_response['payment_response'];
				//~ print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Bluepay settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function bluepay_settlement($connection_string = [], $transactionId = '',$transact_param=[]) {
			$bluepay_connect = self::connect($connection_string);
			$payment_response = [];
                        $amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
					//$transactionID='100433698078';
					//$transaction_amount='51.00';
				$bluepay_connect->capture($transactionId,$amount);
				$bluepay_connect->process();
							
					if($bluepay_connect->isSuccessfulResponse()){
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
                       $payment_response['CORRELATIONID'] = $bluepay_connect->getAuthCode();
                        $payment_response['TRANSACTIONID'] = $bluepay_connect->getTransID();
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $bluepay_connect->getCardType();
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
                                                $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
                                                  $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
				}

		//print_r($payment_response);die;
		$payment_response['payment_response'] = ($payment_response['payment_response'] == '' || $payment_response['payment_response'] =='Missing CC_EXPIRES') ? 'Invalid expiry month/year' :$payment_response['payment_response'];
		return $payment_response;
    }
    
     /**
     * Bluepay void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function bluepay_void($connection_string = [], $transactionId = '',$transact_param = []) {
			$bluepay_connect = self::connect($connection_string);
			$payment_response = [];
			
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
					//$transactionID='100433697751';
					//$transaction_amount='45.00';
				$bluepay_connect->void($transactionId,$transact_param['preTransactAmount']);
				$bluepay_connect->process();
							
					if($bluepay_connect->isSuccessfulResponse()){
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
                       $payment_response['CORRELATIONID'] = $bluepay_connect->getAuthCode();
                        $payment_response['TRANSACTIONID'] = $bluepay_connect->getTransID();
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $bluepay_connect->getCardType();
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $bluepay_connect->getMessage();
				}

		//print_r($payment_response);die;
		$payment_response['payment_response'] = ($payment_response['payment_response'] == '' || $payment_response['payment_response'] =='Missing CC_EXPIRES') ? 'Invalid expiry month/year' :$payment_response['payment_response'];			
       return $payment_response;
    }
    
  

    

}
