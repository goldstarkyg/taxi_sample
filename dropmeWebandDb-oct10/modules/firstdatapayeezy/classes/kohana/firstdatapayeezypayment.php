<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Firstdatapayeezy payment gateway module
 *
 * @uses       Firstdatapayeezy 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Firstdatapayeezypayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
   
    
    
   // public static $payeezy;

    public function __construct() {
	    
    }

    /**
     * Firstdatapayeezy payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // Firstdatapayeezy sandbox environment 
                if ($pay_type == "T") {
					
						$apikey = $connection_string[0]['payment_gateway_username'];
						$secretKey = $connection_string[0]['payment_gateway_password'];
						$token = $connection_string[0]['payment_gateway_signature'];
						$url = "https://api-cert.payeezy.com/v1/transactions";
						$token_url = "https://api-cert.payeezy.com/v1/transactions/tokens";
						
                }
                //Firstdatapayeezy production environment 
                else if ($pay_type == "L") {
					
						$apikey = $connection_string[0]['live_payment_gateway_username'];
						$secretKey = $connection_string[0]['live_payment_gateway_password'];
						$token = $connection_string[0]['live_payment_gateway_signature'];
						$url = "https://api.payeezy.com/v1/transactions";
						$token_url = "https://api-cert.payeezy.com/v1/transactions/tokens";
						
					
						
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
               $payeezy = new Payeezy();
               $payeezy->setApiKey($apikey);
               $payeezy->setApiSecret($secretKey);
				$payeezy->setMerchantToken($token);
				$payeezy->setTokenUrl($token_url);
				$payeezy->setUrl($url);
                
                return $payeezy;
               
               					
            } catch (Exception $message) {
                echo $message;
                exit;
            }
            return true;
        } else {
            return false;
        }
    }
    
    
    public static function processInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return strval($data);
    }
    public static function cardtype($card)
    {
		 $cardtype = array(
								"VISA"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
								"MASTERCARD" => "/^5[1-5][0-9]{14}$/",
								"AMEX"       => "/^3[47][0-9]{13}$/",
								"DINERS"  => "/^3(?:0[0-5]|[68][0-9])[0-9]{11}$/",
								"JCB" => "/^(?:2131|1800|35\d{3})\d{11}$/"
							);
							
							if (preg_match($cardtype['VISA'],$card)){$type= "Visa";}
							elseif (preg_match($cardtype['MASTERCARD'],$card)){$type= "Mastercard";}
							elseif (preg_match($cardtype['AMEX'],$card)){$type= "American Express";}
							elseif (preg_match($cardtype['DINERS'],$card)){$type= "Diners";}
							elseif (preg_match($cardtype['JCB'],$card)){$type= "JCB";}
							else{$type="";}
							return $type;
	}
    

    /**
     * Firstdatapayeezy payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function firstdatapayeezy_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		//print_r($card_info);die;
			$firstdatapayeezy_connect = self::connect($connection_string);
			
			 $cardtype = self::cardtype($card_info['card_number']);
			$payment_response = [];
			//$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
                        $month_year=$card_info['expirationYear']."-".$card_info['expirationMonth'];
			$expire=$card_info['expirationMonth'].date('y',strtotime($month_year));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
				try {
					
					 $card_holder_name = $card_number = $card_type = $card_cvv = $card_expiry = $currency_code = $merchant_ref="";
							$card_holder_name = self::processInput($shipping_info['firstName']);
							$card_number = self::processInput($card_info['card_number']);
							$card_type = self::processInput($cardtype);
							$card_cvv = self::processInput($card_info['cvv']);
							$card_expiry = self::processInput($expire);
							$amount = self::processInput($transaction_amount*100);
							$currency_code = self::processInput($card_info['currency']);
							$merchant_ref = self::processInput("jallicart Sale");
							$method = self::processInput("credit_card");
							$transaction_type = self::processInput("purchase");
							
							
							$primaryTxPayload = array(
										"amount"=> $amount,
										"card_number" => $card_number,
										"card_type" => $card_type,
										"card_holder_name" => $card_holder_name,
										"card_cvv" => $card_cvv,
										"card_expiry" => $card_expiry,
										"merchant_ref" => $merchant_ref,
										"currency_code" => $currency_code,
										"method"=>$method,
										"transaction_type"=>$transaction_type,
										"partial_redemption"=> "false",
										
										
									);
											
																       
					$primaryTxResponse_JSON = json_decode($firstdatapayeezy_connect->purchase($primaryTxPayload));
					
					
							
					if($primaryTxResponse_JSON->transaction_status == "approved"){
						$payment_response['payment_response'] = $primaryTxResponse_JSON->transaction_status;
                       $payment_response['CORRELATIONID'] = $primaryTxResponse_JSON->transaction_tag;
                        $payment_response['TRANSACTIONID'] = $primaryTxResponse_JSON->transaction_id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $primaryTxResponse_JSON->card->type;
					}else
					{
						
						$payment_response['payment_status'] = 0;
						//~ $payment_response['payment_response'] = $primaryTxResponse_JSON->transaction_status;
						$payment_response['payment_response'] = isset($primaryTxResponse_JSON->Error->messages[0]->description) ? $primaryTxResponse_JSON->Error->messages[0]->description :$primaryTxResponse_JSON->transaction_status;
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
				}
				
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Firstdatapayeezy payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function firstdatapayeezy_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		
		$firstdatapayeezy_connect = self::connect($connection_string);
			$cardtype = self::cardtype($card_info['card_number']);
			$payment_response = [];
			//$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
                        $month_year=$card_info['expirationYear']."-".$card_info['expirationMonth'];
			$expire=$card_info['expirationMonth'].date('y',strtotime($month_year));
                        
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
				try {
					
					 $card_holder_name = $card_number = $card_type = $card_cvv = $card_expiry = $currency_code = $merchant_ref="";
							$card_holder_name = self::processInput($shipping_info['firstName']);
							$card_number = self::processInput($card_info['card_number']);
							$card_type = self::processInput($cardtype);
							$card_cvv = self::processInput($card_info['cvv']);
							$card_expiry = self::processInput($expire);
							$amount = self::processInput($transaction_amount*100);
							$currency_code = self::processInput($card_info['currency']);
							$merchant_ref = self::processInput("Payment Sale");
							$method = self::processInput("credit_card");
							$transaction_type = self::processInput("authorize");
							
							
							$primaryTxPayload = array(
										"amount"=> $amount,
										"card_number" => $card_number,
										"card_type" => $card_type,
										"card_holder_name" => $card_holder_name,
										"card_cvv" => $card_cvv,
										"card_expiry" => $card_expiry,
										"merchant_ref" => $merchant_ref,
										"currency_code" => $currency_code,
										"method"=>$method,
										"transaction_type"=>$transaction_type,
										
									);
															       
					$primaryTxResponse_JSON = json_decode($firstdatapayeezy_connect->authorize($primaryTxPayload));
					
											
					if($primaryTxResponse_JSON->transaction_status == "approved"){
						$payment_response['payment_response'] = $primaryTxResponse_JSON->transaction_status;
                       $payment_response['CORRELATIONID'] = $primaryTxResponse_JSON->transaction_tag;
                        $payment_response['TRANSACTIONID'] = $primaryTxResponse_JSON->transaction_id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $primaryTxResponse_JSON->card->type;
					}else
					{
						
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = isset($primaryTxResponse_JSON->Error->messages[0]->description) ? $primaryTxResponse_JSON->Error->messages[0]->description :$primaryTxResponse_JSON->transaction_status;
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
				}
				
				//~ print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Firstdatapayeezy settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function firstdatapayeezy_settlement($connection_string = [], $transactionID = '',$transact_param=[]) {
		
			$firstdatapayeezy_connect = self::connect($connection_string);
			$payment_response = [];
                        $amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			$correlationId=isset($transact_param['CORRELATIONID'])?$transact_param['CORRELATIONID']:'';
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
                                $currency_code= isset($transact_param['currency'])?$transact_param['currency']:'';
				try {
					
					$amount=$amount*100;
					$secondaryTxPayload = array(
										 "amount"=> $amount,
										"transaction_tag" => $correlationId,
										"transaction_id" => $transactionID,
										"transaction_type"=> "capture",
										"currency_code" => $currency_code
										);
								
				$secondaryTxResponse_JSON = json_decode($firstdatapayeezy_connect->capture($secondaryTxPayload));
				
				
							
				if($secondaryTxResponse_JSON->transaction_status == "approved"){
						$payment_response['payment_response'] = $secondaryTxResponse_JSON->transaction_status;
                       $payment_response['CORRELATIONID'] = $secondaryTxResponse_JSON->transaction_tag;
                        $payment_response['TRANSACTIONID'] = $secondaryTxResponse_JSON->transaction_id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						//~ $payment_response['payment_response'] =$secondaryTxResponse_JSON->transaction_status;
						$payment_response['payment_response'] =isset($secondaryTxResponse_JSON->Error->messages[0]->description) ? $secondaryTxResponse_JSON->Error->messages[0]->description :$secondaryTxResponse_JSON->transaction_status;
                                                 $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getMessage();
                                                 $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
				}

		//print_r($payment_response);die;
					
       return $payment_response;
    }
    
     /**
     * Firstdatapayeezy void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function firstdatapayeezy_void($connection_string = [], $transactionID = '',$transact_param = []) {
			$firstdatapayeezy_connect = self::connect($connection_string);
			$payment_response = [];
			
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
					
					
					$amount=$transact_param['preTransactAmount']*100;
                                        if($amount!=0){
					$secondaryTxPayload = array(
										 "amount"=>(double) $amount,
										"transaction_tag" => $transact_param['CORRELATIONID'],
										"transaction_id" => $transactionID,
										"transaction_type"=> "void",
										"currency_code" => $transact_param['currency']
										);
										
					$secondaryTxResponse_JSON = json_decode($firstdatapayeezy_connect->void($secondaryTxPayload));
				
					
					if($secondaryTxResponse_JSON->transaction_status == "approved"){
						$payment_response['payment_response'] = $secondaryTxResponse_JSON->transaction_status;
                       $payment_response['CORRELATIONID'] = $secondaryTxResponse_JSON->transaction_tag;
                        $payment_response['TRANSACTIONID'] = $secondaryTxResponse_JSON->transaction_id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = "";
					}else
					{
						
						$payment_response['payment_status'] = 0;
						//~ $payment_response['payment_response'] =$secondaryTxResponse_JSON->transaction_status;
						$payment_response['payment_response'] =isset($secondaryTxResponse_JSON->Error->messages[0]->description) ? $secondaryTxResponse_JSON->Error->messages[0]->description :$secondaryTxResponse_JSON->transaction_status;
					}
				}else{
					//~ $payment_response['payment_response'] = $secondaryTxResponse_JSON->transaction_status;                                             
					$payment_response['payment_response'] = isset($secondaryTxResponse_JSON->Error->messages[0]->description) ? $secondaryTxResponse_JSON->Error->messages[0]->description :$secondaryTxResponse_JSON->transaction_status;
					$payment_response['payment_status'] = 1;
					$payment_response['cardType'] = "";
				}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
				}
				

		//print_r($payment_response);die;
					
       return $payment_response;
    }
    
  

    

}
