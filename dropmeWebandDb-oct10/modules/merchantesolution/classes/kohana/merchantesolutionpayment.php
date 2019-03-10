<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Merchantesolution payment gateway module
 *
 * @uses       Merchantesolution 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Merchantesolutionpayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
   
    
    
   // public static $payeezy;

    public function __construct() {
	    
    }

    /**
     * Merchantesolution payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // Merchantesolution sandbox environment 
                if ($pay_type == "T") {
					
						$profileID = $connection_string[0]['payment_gateway_username'];
						$merchatkey = $connection_string[0]['payment_gateway_password'];
						$url = "https://cert.merchante-solutions.com/mes-api/tridentApi";
												
                }
                //Merchantesolution production environment 
                else if ($pay_type == "L") {
					
						$profileID = $connection_string[0]['live_payment_gateway_username'];
						$merchatkey = $connection_string[0]['live_payment_gateway_password'];
						$url = "https://cert.merchante-solutions.com/mes-api/tridentApi";
					
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
              return $mes=array('profileID'=>$profileID,'merchatkey'=>$merchatkey,'url'=>$url);
                
                
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
     * Merchantesolution payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function merchantesolution_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
			$merchantesolution_connect = self::connect($connection_string);
			$payment_response = [];
			$invoice = substr(mt_rand() . microtime(), 0,10);
                        $month_year=$card_info['expirationYear']."-".$card_info['expirationMonth'];
			$expire=$card_info['expirationMonth'].date('y',strtotime($month_year));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
			
				try {
							$tran = new TpgSale($merchantesolution_connect['profileID'],$merchantesolution_connect['merchatkey']);
                                                        //If you need AVS Cerification system you uncomment below code
							//$tran->setAvsRequest($shipping_info['company'], $shipping_info['zipcode']);
							$tran->setRequestField('cvv2', $card_info['cvv']);
							$tran->setRequestField('invoice_number',$invoice);
							$tran->setTransactionData($card_info['card_number'], $expire, $transaction_amount);
							$tran->setHost($merchantesolution_connect['url']);
							$response=$tran->execute();						       
							
							
					if($tran->ResponseFields['error_code'] == "000"){
						$payment_response['payment_response'] = $tran->ResponseFields['auth_response_text'];
                       $payment_response['CORRELATIONID'] = $tran->RequestFields['invoice_number'];
                        $payment_response['TRANSACTIONID'] = $tran->ResponseFields['transaction_id'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tran->ResponseFields['auth_response_text'];
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
				}
				
				
				return $payment_response;

        
    }
    
    /**
     * Merchantesolution payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function merchantesolution_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		$merchantesolution_connect = self::connect($connection_string);
			$payment_response = [];
			$invoice = substr(mt_rand() . microtime(), 0,10);
			
                        $month_year=$card_info['expirationYear']."-".$card_info['expirationMonth'];
			$expire=$card_info['expirationMonth'].date('y',strtotime($month_year));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
			
			
					
				try {
					
					$tran = new TpgPreAuth($merchantesolution_connect['profileID'],$merchantesolution_connect['merchatkey']);
                                                        //If you need AVS Cerification system you uncomment below code
							//$tran->setAvsRequest($shipping_info['company'], $shipping_info['zipcode']);
							$tran->setRequestField('cvv2', $card_info['cvv']);
							$tran->setRequestField('invoice_number',$invoice);
							$tran->setTransactionData($card_info['card_number'], $expire, $transaction_amount);
							$tran->setHost($merchantesolution_connect['url']);
							$response=$tran->execute();
							
					if($tran->ResponseFields['error_code'] == "000"){
						$payment_response['payment_response'] = $tran->ResponseFields['auth_response_text'];
                       $payment_response['CORRELATIONID'] = $tran->RequestFields['invoice_number'];
                        $payment_response['TRANSACTIONID'] = $tran->ResponseFields['transaction_id'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tran->ResponseFields['auth_response_text'];
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
				}
				
				//print_r($payment_response);die;
				return $payment_response;
        
    }
    
    /**
     * Merchantesolution settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function merchantesolution_settlement($connection_string = [], $transactionId = '',$transact_param =[]) {
		
			$merchantesolution_connect = self::connect($connection_string);
			$payment_response = [];
			 $amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				
						
				try {
					
					//$transactionID='c167c6ded3b33f2bbfdbaa8affd149a1';
					//$amount="60.00";
						$tran = new TpgSettle($merchantesolution_connect['profileID'],$merchantesolution_connect['merchatkey'],$transactionId,$amount);
						$tran->setHost($merchantesolution_connect['url']);
						$tran->execute();
						
					
					if($tran->ResponseFields['error_code'] == "000"){
						$payment_response['payment_response'] = $tran->ResponseFields['auth_response_text'];
                       $payment_response['CORRELATIONID'] = "";
                        $payment_response['TRANSACTIONID'] = $tran->ResponseFields['transaction_id'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tran->ResponseFields['auth_response_text'];
                                                 $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
                                                $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
				}
				
				
		//print_r($payment_response);die;
					
       return $payment_response;
    }
    
     /**
     * Merchantesolution void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function merchantesolution_void($connection_string = [], $transactionId = '') {
			$merchantesolution_connect = self::connect($connection_string);
			$payment_response = [];
			
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				
						
				try {
					
					//$transactionID='8afabc54b14a3aa99d276a45ab9f4632';
						$tran = new TpgVoid($merchantesolution_connect['profileID'],$merchantesolution_connect['merchatkey'],$transactionId);
						$tran->setHost($merchantesolution_connect['url']);
						$tran->execute();
						
					
					if($tran->ResponseFields['error_code'] == "000"){
						$payment_response['payment_response'] = $tran->ResponseFields['auth_response_text'];
                       $payment_response['CORRELATIONID'] = "";
                        $payment_response['TRANSACTIONID'] = $tran->ResponseFields['transaction_id'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tran->ResponseFields['auth_response_text'];
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
				}
				
				
		//print_r($payment_response);die;
					
       return $payment_response;
    }
    
  

    

}
