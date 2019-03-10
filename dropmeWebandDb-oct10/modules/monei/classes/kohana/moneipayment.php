<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Monei payment gateway module
 *
 * @uses       Monei 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Moneipayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_Monei_gateway_connection;

     /**
     * Monei payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // Monei sandbox environment 
                if ($pay_type == "T") {
					
						$UserId = $connection_string[0]['payment_gateway_username'];
						$Password = $connection_string[0]['payment_gateway_password'];
						$entityId=$connection_string[0]['payment_gateway_signature'];
						$url = "https://test.monei-api.net/v1/payments";
                     
                }
                //Monei production environment 
                else if ($pay_type == "L") {
					
						$UserId = $connection_string[0]['live_payment_gateway_username'];
						$Password = $connection_string[0]['live_payment_gateway_password'];
						$entityId=$connection_string[0]['live_payment_gateway_signature'];
						$url = "https://monei-api.net/v1/payments";
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
                
               
                
                return $payment = array("userid"=>$UserId,"password"=>$Password,"entityid"=>$entityId,"url"=>$url);
               
               					
            } catch (Exception $message) {
                echo $message;
                exit;
            }
            return true;
        } else {
            return false;
        }
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
							
							if (preg_match($cardtype['VISA'],$card)){$type= "VISA";}
							elseif (preg_match($cardtype['MASTERCARD'],$card)){$type= "MASTER";}
							elseif (preg_match($cardtype['AMEX'],$card)){$type= "AMEX";}
							elseif (preg_match($cardtype['DINERS'],$card)){$type= "DINERS";}
							elseif (preg_match($cardtype['JCB'],$card)){$type= "JCB";}
							else{$type="";}
							return $type;
	}

    /**
     * Monei payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function monei_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		
			$monei_connect = self::connect($connection_string);
			
			 $cardtype = self::cardtype($card_info['card_number']);
			$payment_response = [];
			$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
					
				try {
					
							$url = $monei_connect['url'];
							 $data = "authentication.userId=".$monei_connect['userid'] .
									"&authentication.password=".$monei_connect['password'] .
									"&authentication.entityId=".$monei_connect['entityid'] .
									"&amount=".$transaction_amount .
									"&currency=".$card_info['currency'] .
									//"&currency=".$card_info['currency'] .
									"&paymentBrand=$cardtype" .
									"&paymentType=DB" .
									"&card.number=".$card_info['card_number'] .
									"&card.holder=".$shipping_info['firstName'] .
									"&card.expiryMonth=".$card_info['expirationMonth'] .
									"&card.expiryYear=".$card_info['expirationYear'] .
									"&card.cvv=".$card_info['cvv']	;
						
								$response = json_decode(self::hash_call($url,$data));
							
					if($response->result){
						$payment_response['payment_response'] = $response->result->description;
                       $payment_response['CORRELATIONID'] = $response->ndc;
                        $payment_response['TRANSACTIONID'] = $response->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $response->paymentBrand;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getmessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Monei payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function monei_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		$monei_connect = self::connect($connection_string);
		 $cardtype = self::cardtype($card_info['card_number']);
			$payment_response = [];
			$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
				try {
					
							$url = $monei_connect['url'];
							$data = "authentication.userId=".$monei_connect['userid'] .
									"&authentication.password=".$monei_connect['password'] .
									"&authentication.entityId=".$monei_connect['entityid'] .
									"&amount=".$transaction_amount .
									"&currency=".$card_info['currency'] .
									//"&currency=".$card_info['currency'] .
									"&paymentBrand=$cardtype" .
									"&paymentType=PA" .
									"&card.number=".$card_info['card_number'] .
									"&card.holder=".$shipping_info['firstName'] .
									"&card.expiryMonth=".$card_info['expirationMonth'] .
									"&card.expiryYear=".$card_info['expirationYear'] .
									"&card.cvv=".$card_info['cvv']	;
						
								$response = json_decode(self::hash_call($url,$data));
							
							
					if($response->result){
						$payment_response['payment_response'] = $response->result->description;
                       $payment_response['CORRELATIONID'] = $response->ndc;
                        $payment_response['TRANSACTIONID'] = $response->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $response->paymentBrand;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
                                                $payment_response['TRANSACTIONID']="";
                                                $payment_response['CORRELATIONID']="";
					}
					
				} catch (Exception $e) {
                                                $getmessage="Preauthorization failed";
                                                if(is_object($e->getMessage())){
                                                    $getmessage=$e->getMessage();
                                                }
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $getmessage;
                                                $payment_response['TRANSACTIONID']=$getmessage;
                                                $payment_response['CORRELATIONID']="";
				}
				
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Monei settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function monei_settlement($connection_string = [], $transactionId = '',$transact_param = []) {
			$monei_connect = self::connect($connection_string);
			$payment_response = [];
			$amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
					//$transactionID="8a8294495c0c67d0015c15d681a720c0";
					$url = $monei_connect['url'].'/'.$transactionId;
					$data = "authentication.userId=".$monei_connect['userid'] .
							"&authentication.password=".$monei_connect['password'] .
							"&authentication.entityId=".$monei_connect['entityid'] .
							"&amount=".$amount .
							"&currency=EUR" .
							"&paymentType=CP";
							
							$response = json_decode(self::hash_call($url,$data));
							
					if($response->result){
						$payment_response['payment_response'] = $response->result->description;
						$payment_response['CORRELATIONID'] = $response->ndc;
                        $payment_response['TRANSACTIONID'] = $response->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
                                                $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getmessage();
                                                $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
				}

		//print_r($payment_response);die;
					
       return $payment_response;
    }
    
     /**
     * Monei void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function monei_void($connection_string = [], $transactionId = '') {
			$monei_connect = self::connect($connection_string);
			$payment_response = [];
			
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
			$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
					//$transactionID="8a8294495c0c67d0015c15d681a720c0";
					$url = $monei_connect['url'].'/'.$transactionId;
					$data = "authentication.userId=".$monei_connect['userid'] .
							"&authentication.password=".$monei_connect['password'] .
							"&authentication.entityId=".$monei_connect['entityid'] .
							"&paymentType=RV";
							
							$response = json_decode(self::hash_call($url,$data));
							
					if($response->result){
						$payment_response['payment_response'] = $response->result->description;
						$payment_response['CORRELATIONID'] = $response->ndc;
                        $payment_response['TRANSACTIONID'] = $response->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = "";
                                                $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getmessage();
                                                $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
				}

		//print_r($payment_response);die;
					
       return $payment_response;
    }
    public static function hash_call($url = null,$data = null)
    {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$responseData = curl_exec($ch);
			
			if(curl_errno($ch)) {
				return curl_error($ch);
			}
			curl_close($ch);
			return $responseData;
	}
  

    

}
