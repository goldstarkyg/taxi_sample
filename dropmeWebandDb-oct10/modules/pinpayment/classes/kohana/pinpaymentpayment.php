<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Pinpayment payment gateway module
 *
 * @uses       Pinpayment 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Pinpaymentpayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_Pinpayment_gateway_connection;
    public static $type;
    public function __construct() {
		
		//require_once(MODPATH.'pinpayment/vendor/src/domain/Card.php');
        
    }

     /**
     * Pinpayment payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // Pinpayment sandbox environment 
                if ($pay_type == "T") {
					
						$secret = $connection_string[0]['payment_gateway_username'];
						$publish = $connection_string[0]['payment_gateway_password'];
						$mode='test';
						$url="https://test-api.pin.net.au/1";
                     
                }
                //Pinpayment production environment 
                else if ($pay_type == "L") {
					
						$secret = $connection_string[0]['live_payment_gateway_username'];
						$publish = $connection_string[0]['live_payment_gateway_password'];
						$mode='live';
						$url="https://api.pin.net.au/1";
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
                
               $gateway=array("secret"=>$secret,"publish"=>$publish,"url"=>$url);
                 
                return $gateway;
               
               					
            } catch (Exception $message) {
                echo $message;
                exit;
            }
            return true;
        } else {
            return false;
        }
    }
    
    public static function create_cardToken($pinpayment_connect,$card_info,$shipping_info)
    {
		$company=isset($shipping_info['company'])?$shipping_info['company']:"";
		$city=isset($shipping_info['city'])?$shipping_info['city']:"";
		$state=isset($shipping_info['state'])?$shipping_info['state']:"";
		$zipcode=isset($shipping_info['zipcode'])?$shipping_info['zipcode']:"";
		$country=isset($shipping_info['country'])?$shipping_info['country']:"";
                $lastname=isset($shipping_info['lastName'])?$shipping_info['lastName']:"";
							$url = $pinpayment_connect['url'].'/cards';
							$data = "publishable_api_key=".$pinpayment_connect['publish'] .
									"&number=".$card_info['card_number'] .
									"&expiry_month=".$card_info['expirationMonth'] .
									"&expiry_year=".$card_info['expirationYear'] .
									"&cvc=".$card_info['cvv'] .
									"&name=".$shipping_info['firstName'].' '. $lastname;
									/*"&address_line1=".$company .
									"&address_line2=".$company .
									"&address_city=".$city .
									"&address_postcode=".$zipcode .
									"&address_state=".$state .
									"&address_country=".$country 	;*/
									
									return $response = json_decode(self::hash_call($url,$data));
	}
    
     /**
     * Pinpayment payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function pinpayment_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		//print_r($shipping_info);die;
			$pinpayment_connect = self::connect($connection_string);
			$cardToken = self::create_cardToken($pinpayment_connect,$card_info,$shipping_info);
			
			$payment_response = [];
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
			
			$amount=$transaction_amount*100;
			$company=isset($shipping_info['company'])?$shipping_info['company']:"";
			$city=isset($shipping_info['city'])?$shipping_info['city']:"";
			$state=isset($shipping_info['state'])?$shipping_info['state']:"";
			$zipcode=isset($shipping_info['zipcode'])?$shipping_info['zipcode']:"";
			$country=isset($shipping_info['country'])?$shipping_info['country']:"";
                        $lastname=isset($shipping_info['lastName'])?$shipping_info['lastName']:"";
			 
			
				try {
							$user=$pinpayment_connect['secret'];
							$url = $pinpayment_connect['url'].'/charges';
							$data = "amount=".$amount .
									"&description=test charge" .
									"&email=" .$shipping_info['email'] .
									"&ip_address=".$_SERVER['REMOTE_ADDR'].
									"&card[number]=".$card_info['card_number'] .
									"&card[expiry_month]=". $card_info['expirationMonth'].
									"&card[expiry_year]=".$card_info['expirationYear'] .
									"&card[cvc]=".$card_info['cvv'] .
									"&card[name]=".$shipping_info['firstName'].' '.$lastname;
									/*"&card[address_line1]=".$company .
									"&card[address_city]=".$city .
									"&card[address_postcode]=".$zipcode	.
									"&card[address_state]=".$state	.
									"&card[address_country]=".$country	;*/
								
							$response = json_decode(self::hash_call($url,$data,$user));
							//echo "<pre>"; print_r($response->response);die;
							
					if(isset($response->response) && $response->response->success==1){
						$payment_response['payment_response'] = $response->response->status_message;
                       $payment_response['CORRELATIONID'] = "";
                        $payment_response['TRANSACTIONID'] = $response->response->token;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $response->response->card->scheme;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $response->messages[0]->message;
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getmessage();
				}
			
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Pinpayment payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function pinpayment_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
				
			$pinpayment_connect = self::connect($connection_string);
			$cardToken = self::create_cardToken($pinpayment_connect,$card_info,$shipping_info);
			
			$payment_response = [];
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
			
			 $amount=$transaction_amount*100;
			 $company=isset($shipping_info['company'])?$shipping_info['company']:"";
			$city=isset($shipping_info['city'])?$shipping_info['city']:"";
			$state=isset($shipping_info['state'])?$shipping_info['state']:"";
			$zipcode=isset($shipping_info['zipcode'])?$shipping_info['zipcode']:"";
			$country=isset($shipping_info['country'])?$shipping_info['country']:"";
                        $lastname=isset($shipping_info['lastName'])?$shipping_info['lastName']:"";
			 
			
				try {
							$user=$pinpayment_connect['secret'];
							$url = $pinpayment_connect['url'].'/charges';
							$data = "amount=".$amount .
									"&capture=false".
									"&description=test charge" .
									"&email=" .$shipping_info['email'] .
									"&ip_address=".$_SERVER['REMOTE_ADDR'].
									"&card[number]=".$card_info['card_number'] .
									"&card[expiry_month]=". $card_info['expirationMonth'].
									"&card[expiry_year]=".$card_info['expirationYear'] .
									"&card[cvc]=".$card_info['cvv'] .
									"&card[name]=".$shipping_info['firstName'].' '.$lastname ;
									/*"&card[address_line1]=".$company .
									"&card[address_city]=".$city .
									"&card[address_postcode]=".$zipcode	.
									"&card[address_state]=".$state	.
									"&card[address_country]=".$country	;*/
								
							$response = json_decode(self::hash_call($url,$data,$user));
							
							
					if(isset($response->response) && $response->response->success==1){
						$payment_response['payment_response'] = $response->response->status_message;
                       $payment_response['CORRELATIONID'] = "";
                        $payment_response['TRANSACTIONID'] = $response->response->token;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $response->response->card->scheme;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $response->messages[0]->message;
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						echo $payment_response['payment_response'] = $e->getmessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Pinpayment settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function pinpayment_settlement($connection_string = [], $transactionID = '',$amount = null ) {
			
			$pinpayment_connect = self::connect($connection_string);
			$payment_response = [];
			
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
			$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			
			
			// $transactionID='ch_hIBMnHLXS_lf5w_BThIeNg';
			
			
				try {
						 $user=$pinpayment_connect['secret'];
						 $url = $pinpayment_connect['url'].'/charges/'.$transactionID.'/capture';
						$response = json_decode(self::hash_call2($url,$user));
						
					if(isset($response->response) && $response->response->success==1){
						$payment_response['payment_response'] = $response->response->status_message;
                       $payment_response['CORRELATIONID'] = "";
                        $payment_response['TRANSACTIONID'] = $response->response->token;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $response->response->card->scheme;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $response->messages[0]->message;
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
     * Pinpayment void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    /* public static function pinpayment_void($connection_string = [], $transactionID = '',$correlatioID='') {
			$pinpayment_connect = self::connect($connection_string);
			$payment_response = [];
			
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
			$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			
			//$correlatioID='1496036769279815';
			//$transactionID='ezQ4QzJEMzBBLUJCOThEMA';
			
			
				try {
						$request = ( new com\pinpaymentpayments\remote\sdk\domain\payment\PaymentRequest() )
							->addMerchantId( $pinpayment_connect['merchantId'] )
							->addType( com\pinpaymentpayments\remote\sdk\domain\payment\PaymentType::VOID )
							->addOrderId($transactionID)
							->addPaymentsReference($correlatioID);
						$client   = new com\pinpaymentpayments\remote\sdk\PinpaymentClient( $pinpayment_connect['secret'] );
						$response = $client->send( $request );
							
					if($response->getresult()=='00'){
						$payment_response['payment_response'] = $response->getmessage();
                       $payment_response['CORRELATIONID'] = $response->getpaymentsReference();
                        $payment_response['TRANSACTIONID'] = $response->getorderId();
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  "";
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $response->getmessage();
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						echo $payment_response['payment_response'] = $e->getmessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;
    }*/
   public static function hash_call($url = null,$data = null,$user = null)
    {
		
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			if($user!=''){
				curl_setopt($ch, CURLOPT_USERPWD, $user . ":" . "");
				}
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$responseData = curl_exec($ch);
			
			if(curl_errno($ch)) {
				return curl_error($ch);
			}
			curl_close($ch);
			return $responseData;
	}
	
	public static function hash_call2($url = null,$user = null)
	{
		
						
				$ch = curl_init();

				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

				curl_setopt($ch, CURLOPT_USERPWD, $user . ":" . "");

				$result = curl_exec($ch);
				if (curl_errno($ch)) {
					echo 'Error:' . curl_error($ch);
				}
				curl_close ($ch);
				
				return $result;

	}

    

}
