<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Usaepay payment gatusaepay module
 *
 * @uses       Usaepay 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Usaepaypayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
   
        
   // public static $payeezy;

    public function __construct() {
	    
    }

    /**
     * Usaepay payment gatusaepay connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
				
				 $tran=new umTransaction;
				 
                // Usaepay sandbox environment 
                if ($pay_type == "T") {
					
						$apiKey = $connection_string[0]['payment_gateway_username'];
						$pin = $connection_string[0]['payment_gateway_password'];
						$tran->key=$apiKey;
						$tran->pin=$pin;
						$tran->usesandbox=true;
						
						
												
                }
                //Usaepay production environment 
                else if ($pay_type == "L") {
					
						$apiKey = $connection_string[0]['live_payment_gateway_username'];
						$pin = $connection_string[0]['live_payment_gateway_password'];
						$tran->key=$apiKey;
						$tran->pin=$pin;
						//$tran->usesandbox=true;
						
					
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
              
              
              return $tran;
                
            } catch (Exception $message) {
                echo $message;
                exit;
            }
            return true;
        } else {
            return false;
        }
    }
    
    public static function getCurrency($currency_code = "")
    {
		$currencies=array(
            'ARS' => array('numeric' => '032', 'decimals' => 2),'AUD' => array('numeric' => '036', 'decimals' => 2),'BOB' => array('numeric' => '068', 'decimals' => 2),'BRL' => array('numeric' => '986', 'decimals' => 2),'BTC' => array('numeric' => null, 'decimals' => 8),'CAD' => array('numeric' => '124', 'decimals' => 2),'CHF' => array('numeric' => '756', 'decimals' => 2),'CLP' => array('numeric' => '152', 'decimals' => 0),
            'CNY' => array('numeric' => '156', 'decimals' => 2),'COP' => array('numeric' => '170', 'decimals' => 2),'CRC' => array('numeric' => '188', 'decimals' => 2),'CZK' => array('numeric' => '203', 'decimals' => 2),'DKK' => array('numeric' => '208', 'decimals' => 2),'DOP' => array('numeric' => '214', 'decimals' => 2),'EUR' => array('numeric' => '978', 'decimals' => 2),'FJD' => array('numeric' => '242', 'decimals' => 2),
            'GBP' => array('numeric' => '826', 'decimals' => 2),'GTQ' => array('numeric' => '320', 'decimals' => 2),'HKD' => array('numeric' => '344', 'decimals' => 2),'HUF' => array('numeric' => '348', 'decimals' => 2),'ILS' => array('numeric' => '376', 'decimals' => 2),'INR' => array('numeric' => '356', 'decimals' => 2),'JPY' => array('numeric' => '392', 'decimals' => 0),'KRW' => array('numeric' => '410', 'decimals' => 0),
            'LAK' => array('numeric' => '418', 'decimals' => 0),'MXN' => array('numeric' => '484', 'decimals' => 2),'MYR' => array('numeric' => '458', 'decimals' => 2),'NOK' => array('numeric' => '578', 'decimals' => 2),'NZD' => array('numeric' => '554', 'decimals' => 2),'PEN' => array('numeric' => '604', 'decimals' => 2),'PGK' => array('numeric' => '598', 'decimals' => 2),'PHP' => array('numeric' => '608', 'decimals' => 2),
            'PLN' => array('numeric' => '985', 'decimals' => 2),'PYG' => array('numeric' => '600', 'decimals' => 0),'SBD' => array('numeric' => '090', 'decimals' => 2),'SEK' => array('numeric' => '752', 'decimals' => 2),'SGD' => array('numeric' => '702', 'decimals' => 2),'THB' => array('numeric' => '764', 'decimals' => 2),'TOP' => array('numeric' => '776', 'decimals' => 2),'TRY' => array('numeric' => '949', 'decimals' => 2),
            'TWD' => array('numeric' => '901', 'decimals' => 2),'USD' => array('numeric' => '840', 'decimals' => 2),'UYU' => array('numeric' => '858', 'decimals' => 2),'VEF' => array('numeric' => '937', 'decimals' => 2),'VND' => array('numeric' => '704', 'decimals' => 0),'VUV' => array('numeric' => '548', 'decimals' => 0),'WST' => array('numeric' => '882', 'decimals' => 2),'ZAR' => array('numeric' => '710', 'decimals' => 2),
        );
        return $currencies[$currency_code]['numeric'];
        
	}
    
    /**
     * Usaepay payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function usaepay_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
			$usaepay_connect = self::connect($connection_string);
			$payment_response = [];
			$invoice = substr(mt_rand() . microtime(), 0,5);
			$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
			$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//get currency code
			 $cur=self::getCurrency($card_info['currency']);
			//Try to submit a Card Payment
				try {
							$usaepay_connect->command="cc:sale";//multicurrency
							$usaepay_connect->card=$card_info['card_number'];		
							$usaepay_connect->exp=$expire;			
							$usaepay_connect->amount=$transaction_amount;
							$usaepay_connect->currency = $cur;	//multi currency 		
							$usaepay_connect->invoice=$invoice;   		
							$usaepay_connect->cardholder=$shipping_info['firstName']; 	
							$usaepay_connect->street=isset($shipping_info['company'])?$shipping_info['company']:"";	
							$usaepay_connect->zip=isset($shipping_info['zipcode'])?$shipping_info['zipcode']:"";			
							$usaepay_connect->description=SITE_NAME.'-Sale';	
							$usaepay_connect->cvv2=$card_info['cvv'];	
							$usaepay_connect->Process();	
									
																
					if($usaepay_connect->result=="Approved"){
						$payment_response['payment_response'] = $usaepay_connect->result;
                       $payment_response['CORRELATIONID'] = $usaepay_connect->authcode;
                        $payment_response['TRANSACTIONID'] = $usaepay_connect->refnum;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $usaepay_connect->error;
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getMessage();
				}
				
			//print_r($payment_response);die;
				return $payment_response;
			

        
    }
    
    /**
     * Usaepay payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function usaepay_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
			$usaepay_connect = self::connect($connection_string);
			$payment_response = [];
			$invoice = substr(mt_rand() . microtime(), 0,5);
			$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
			$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//get currency code
			$cur=self::getCurrency($card_info['currency']);
			//Try to submit a Card Payment
							
						
				try {
							$usaepay_connect->command="cc:authonly";
							$usaepay_connect->card=$card_info['card_number'];		
							$usaepay_connect->exp=$expire;			
							$usaepay_connect->amount=$transaction_amount;	
							$usaepay_connect->currency = $cur;	//multi currency		
							$usaepay_connect->invoice=$invoice;   		
							$usaepay_connect->cardholder=$shipping_info['firstName']; 	
							$usaepay_connect->street=isset($shipping_info['company'])?$shipping_info['company']:"";	
							$usaepay_connect->zip=isset($shipping_info['zipcode'])?$shipping_info['zipcode']:"";			
							$usaepay_connect->description=SITE_NAME.'-Sale';	
							$usaepay_connect->cvv2=$card_info['cvv'];	
							$usaepay_connect->Process();	
									
																
					if($usaepay_connect->result=="Approved"){
						$payment_response['payment_response'] = $usaepay_connect->result;
                       $payment_response['CORRELATIONID'] = $usaepay_connect->authcode;
                        $payment_response['TRANSACTIONID'] = $usaepay_connect->refnum;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $usaepay_connect->error;
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getMessage();
				}
				
				//~ print_r($payment_response);die;
				return $payment_response;
        
    }
    
    /**
     * Usaepay settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function usaepay_settlement($connection_string = [], $transactionId = '',$transact_param=[]) {
		
			$usaepay_connect = self::connect($connection_string);
			$payment_response = [];
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
			$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
                        $amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			//Try to submit a Card Payment
				//$transactionId = "124063183";			
					
				try {
							$usaepay_connect->command="cc:capture"; 
							$usaepay_connect->refnum=$transactionId;
                                                        $usaepay_connect->amount=$amount;
							$usaepay_connect->Process();	
									
																
					if($usaepay_connect->result=="Approved"){
						$payment_response['payment_response'] = $usaepay_connect->result;
                       $payment_response['CORRELATIONID'] = "";
                        $payment_response['TRANSACTIONID'] = $usaepay_connect->refnum;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $usaepay_connect->error;
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getMessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;
    }
    
     /**
     * Usaepay void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function usaepay_void($connection_string = [], $transactionId = '',$transact_param=[]) {
			$usaepay_connect = self::connect($connection_string);
			$payment_response = [];
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
			$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
							
						
				try {
							//$usaepay_connect->command="void:release"; // void:release speeds up the process of releasing customer's funds.  
							$usaepay_connect->command="creditvoid"; 
							$usaepay_connect->refnum=$transactionId;
							$usaepay_connect->Process();	
									
																
					if($usaepay_connect->result=="Approved"){
						$payment_response['payment_response'] = $usaepay_connect->result;
                       $payment_response['CORRELATIONID'] = "";
                        $payment_response['TRANSACTIONID'] = $usaepay_connect->refnum;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $usaepay_connect->error;
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getMessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;
    }
    
  

    

}
