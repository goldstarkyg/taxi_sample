<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Checkout payment gateway module
 *
 * @uses       Checkout 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Checkoutpayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_Checkout_gateway_connection;

    public function __construct() {
        
    }

    /**
     * Checkout payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // checkout sandbox environment 
                if ($pay_type == "T") {
					$secret_key=$connection_string[0]['payment_gateway_username'];

					$apiClient = new \com\checkout\ApiClient($secret_key);

                     
                }
                //checkout production environment 
                else if ($pay_type == "L") {
					$secret_key=$connection_string[0]['live_payment_gateway_username'];
                   $apiClient = new \com\checkout\ApiClient($secret_key);

					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
               		return $charge = $apiClient->chargeService();	
				
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
     * Checkout payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function checkout_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
			$checkout_connect = self::connect($connection_string);
			
			$payment_response = [];
			$transaction_amount=$transaction_amount*100;
			$trackid = substr(mt_rand() . microtime(), 0,10);
		
			$cardChargePayload = new \com\checkout\ApiServices\Charges\RequestModels\CardChargeCreate();
			//initializing model to generate payload
				$baseCardCreateObject = new \com\checkout\ApiServices\Cards\RequestModels\BaseCardCreate();

				$billingDetails = new \com\checkout\ApiServices\SharedModels\Address();
				$phone = new  \com\checkout\ApiServices\SharedModels\Phone();

				$phone->setNumber(isset($shipping_info['phone'])?$shipping_info['phone']:'');
				//$phone->setCountryCode("91");

				$billingDetails->setAddressLine1(isset($shipping_info['street'])?$shipping_info['street']:'');
				$billingDetails->setPostcode(isset($shipping_info['zipcode'])?$shipping_info['zipcode']:'');
				$billingDetails->setCountry(isset($shipping_info['country_code'])?$shipping_info['country_code']:'');
				$billingDetails->setCity(isset($shipping_info['city'])?$shipping_info['city']:'');
				$billingDetails->setPhone($phone);

				$baseCardCreateObject->setNumber($card_info['card_number']);
				$baseCardCreateObject->setName(isset($shipping_info['firstName'])?$shipping_info['firstName']:'');
				$baseCardCreateObject->setExpiryMonth($card_info['expirationMonth']);
				$baseCardCreateObject->setExpiryYear($card_info['expirationYear']);
				$baseCardCreateObject->setCvv($card_info['cvv']);
				$baseCardCreateObject->setBillingDetails($billingDetails);

				$cardChargePayload->setEmail(isset($shipping_info['email'])?$shipping_info['email']:'');
				$cardChargePayload->setAutoCapture('Y');
				$cardChargePayload->setAutoCaptime('0');
				$cardChargePayload->setValue($transaction_amount);
				$cardChargePayload->setCurrency($card_info['currency']);
				$cardChargePayload->setTrackId($trackid);
				$cardChargePayload->setBaseCardCreate($baseCardCreateObject);
				
				 $payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';

				try {
					/** @var ResponseModels\CardChargeCreate $ChargeResponse **/
					
					$ChargeResponse = $checkout_connect->chargeWithCard($cardChargePayload);
					
					$tresponse=json_decode($ChargeResponse->json);
					
					if($tresponse->responseMessage=="Approved")
					{
						$payment_response['payment_response'] = $tresponse->responseMessage;
                        $payment_response['CORRELATIONID'] = $tresponse->trackId;
                        $payment_response['TRANSACTIONID'] = $tresponse->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = $tresponse->card->paymentMethod;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tresponse->responseMessage;
						
					}

				}catch (com\checkout\helpers\ApiHttpClientCustomException $e) {
						//echo 'Caught exception Message: ',  $e->getErrorMessage(), "\n";
						//echo 'Caught exception Error Code: ',  $e->getErrorCode(), "\n";
						//echo 'Caught exception Event id: ',  $e->getEventId(), "\n";
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getErrorMessage();
					}
					//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    
    /**
     * Checkout payment sale preauthorization
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
     public static function checkout_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
			$checkout_connect = self::connect($connection_string);
			$payment_response = [];
			$transaction_amount=$transaction_amount*100;
			$trackid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		
			$cardChargePayload = new \com\checkout\ApiServices\Charges\RequestModels\CardChargeCreate();
			//initializing model to generate payload
				$baseCardCreateObject = new \com\checkout\ApiServices\Cards\RequestModels\BaseCardCreate();

				$billingDetails = new \com\checkout\ApiServices\SharedModels\Address();
				$phone = new  \com\checkout\ApiServices\SharedModels\Phone();

				$phone->setNumber(isset($shipping_info['phone'])?$shipping_info['phone']:'');
				//$phone->setCountryCode("91");

				$billingDetails->setAddressLine1(isset($shipping_info['street'])?$shipping_info['street']:'');
				$billingDetails->setPostcode(isset($shipping_info['zipcode'])?$shipping_info['zipcode']:'');
				$billingDetails->setCountry(isset($shipping_info['country_code'])?$shipping_info['country_code']:'');
				$billingDetails->setCity(isset($shipping_info['city'])?$shipping_info['city']:'');
				$billingDetails->setPhone($phone);

				$baseCardCreateObject->setNumber($card_info['card_number']);
				$baseCardCreateObject->setName(isset($shipping_info['firstName'])?$shipping_info['firstName']:'');
				$baseCardCreateObject->setExpiryMonth($card_info['expirationMonth']);
				$baseCardCreateObject->setExpiryYear($card_info['expirationYear']);
				$baseCardCreateObject->setCvv($card_info['cvv']);
				$baseCardCreateObject->setBillingDetails($billingDetails);

				$cardChargePayload->setEmail(isset($shipping_info['email'])?$shipping_info['email']:'');
				$cardChargePayload->setAutoCapture('N');
				$cardChargePayload->setAutoCaptime('0');
				$cardChargePayload->setValue($transaction_amount);
				$cardChargePayload->setCurrency($card_info['currency']);
				$cardChargePayload->setTrackId($trackid);
				$cardChargePayload->setBaseCardCreate($baseCardCreateObject);
				
				 $payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
            $payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';

				try {
					/** @var ResponseModels\CardChargeCreate $ChargeResponse **/
					
					$ChargeResponse = $checkout_connect->chargeWithCard($cardChargePayload);
					
					$tresponse=json_decode($ChargeResponse->json);
					
					if($tresponse->responseMessage=="Approved")
					{
						$payment_response['payment_response'] = $tresponse->responseMessage;
                        $payment_response['CORRELATIONID'] = $tresponse->trackId;
                        $payment_response['TRANSACTIONID'] = $tresponse->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = $tresponse->card->paymentMethod;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tresponse->responseMessage;
						
					}

				}catch (com\checkout\helpers\ApiHttpClientCustomException $e) {
						//echo 'Caught exception Message: ',  $e->getErrorMessage(), "\n";
						//echo 'Caught exception Error Code: ',  $e->getErrorCode(), "\n";
						//echo 'Caught exception Event id: ',  $e->getEventId(), "\n";
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getErrorMessage();
					}
					
				return $payment_response;

        
    }
    
    /**
     * checkout Settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $amount
     * @return boolean|int
     * @throws Exception
     */
    
      public static function checkout_settlement($connection_string = [], $transactionId = '', $transact_param=[]) {
		  $checkout_connect = self::connect($connection_string);
			$payment_response = [];
                        $amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			$amount = $amount * 100;
				$chargeCapturePayload = new \com\checkout\ApiServices\Charges\RequestModels\ChargeCapture();

				//$chargeCapturePayload->setChargeId('charge_test_407B9665CE5Y79AEBED8');
				$chargeCapturePayload->setChargeId($transactionId);
				//$chargeCapturePayload->setValue('772500');
				$chargeCapturePayload->setValue($amount);
                                $payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
					$ChargeResponse = $checkout_connect->CaptureCardCharge($chargeCapturePayload);
					$tresponse=json_decode($ChargeResponse->json);
					if($tresponse->responseMessage=="Approved"){
						$payment_response['payment_response'] = $tresponse->responseMessage;
                        $payment_response['TRANSACTIONID'] = $tresponse->id;
                        $payment_response['transaction_status'] = $tresponse->status;
                        $payment_response['payment_status'] = 1;
					}else
					{
						// Transaction failure response
                        $payment_response['payment_response'] = $tresponse->responseMessage;
                        $payment_response['payment_status'] = 0;
                        $payment_response['transaction_status']='';
                        $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
					}

				}catch (com\checkout\helpers\ApiHttpClientCustomException $e) {
						//echo 'Caught exception Message: ',  $e->getErrorMessage(), "\n";
						//echo 'Caught exception Error Code: ',  $e->getErrorCode(), "\n";
						//echo 'Caught exception Event id: ',  $e->getEventId(), "\n";
						$payment_response['payment_response'] = $e->getErrorMessage();
                        $payment_response['payment_status'] = 0;
                        $payment_response['transaction_status']='';
                        $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
					}
			//print_r($payment_response);die;
			return $payment_response;
		  
	  }
 
    /**
     * Checkout void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function checkout_void($connection_string = [], $transactionId = '',$transact_param = []) {
			$checkout_connect = self::connect($connection_string);
			$payment_response = [];
			$chargePayload = new \com\checkout\ApiServices\Charges\RequestModels\ChargeVoid();
			//$chargeId = 'charge_test_31FFE665CE5U79AEBEB4'; //authorize charge id
			$chargeId = $transactionId; //authorize charge id
			//$chargePayload->setTrackId('Demo-0001');
                        
			$correlationId= isset($transact_param['CORRELATIONID'])?$transact_param['CORRELATIONID']:'';
			$chargePayload->setTrackId($correlationId);
			
				$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			

				try {
						$ChargeResponse = $checkout_connect->voidCharge($chargeId,$chargePayload);
						
						$tresponse=json_decode($ChargeResponse->json);
						 if($tresponse->responseMessage=="Approved")
					{
						$payment_response['payment_response'] = $tresponse->responseMessage;
                        $payment_response['CORRELATIONID'] = $tresponse->trackId;
                        $payment_response['TRANSACTIONID'] = $tresponse->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = "";
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tresponse->responseMessage;
						
					}

					}catch (com\checkout\helpers\ApiHttpClientCustomException $e) {
							//echo 'Caught exception Message: ',  $e->getErrorMessage(), "\n";
							//echo 'Caught exception Error Code: ',  $e->getErrorCode(), "\n";
							//echo 'Caught exception Event id: ',  $e->getEventId(), "\n";
							
							$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getErrorMessage();
					}
					
       return $payment_response;
    }

    

}
