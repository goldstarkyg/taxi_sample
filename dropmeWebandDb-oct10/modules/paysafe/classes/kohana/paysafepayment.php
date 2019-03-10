<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Paysafe payment gateway module
 *
 * @uses       Paysafe 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Paysafepayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_Paysafe_gateway_connection;

    public function __construct() {
		
		require_once(MODPATH.'paysafe/vendor/source/paysafe/Environment.php');
        
    }

    /**
     * Paysafe payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // Paysafe sandbox environment 
                if ($pay_type == "T") {
					
						 $paysafeApiKeyId = $connection_string[0]['payment_gateway_username'];
						 $paysafeApiKeySecret = $connection_string[0]['payment_gateway_password'];
						 $paysafeAccountNumber = $connection_string[0]['payment_gateway_signature'];
					// The currencyCode should match the currency of your Paysafe account.
					// The currencyBaseUnitsMultipler should in turn match the currencyCode.
						//$currencyCode = CURRENCY_CODE; // for example: CAD
						
					
                     
                }
                //Paysafe production environment 
                else if ($pay_type == "L") {
					
						$paysafeApiKeyId = $connection_string[0]['live_payment_gateway_username'];
						$paysafeApiKeySecret = $connection_string[0]['live_payment_gateway_password'];
						$paysafeAccountNumber = $connection_string[0]['live_payment_gateway_signature'];
					// The currencyCode should match the currency of your Paysafe account.
					// The currencyBaseUnitsMultipler should in turn match the currencyCode.
						//$currencyCode = CURRENCY_CODE; // for example: CAD
						
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
                
               
                
                return $client = new Paysafe\PaysafeApiClient($paysafeApiKeyId, $paysafeApiKeySecret,Paysafe\Environment::TEST, $paysafeAccountNumber);
               
               					
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
     * Paysafe payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function paysafe_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
                        
			$paysafe_connect = self::connect($connection_string);
			
			$currencyBaseUnitsMultiplier = '100'; // for example: 100
			$merchant_ref_num = substr(mt_rand() . microtime(), 0,10);
			//Try to submit a Card Payment
				try {
					$zipcode=isset($shipping_info['zipcode'])?$shipping_info['zipcode']:'';
							$auth = new Paysafe\CardPayments\Authorization(array(
								 'merchantRefNum' => $merchant_ref_num,
								 'amount' => $transaction_amount*$currencyBaseUnitsMultiplier,
								 'settleWithAuth' => true,
								 'card' => array(
									  'cardNum' => $card_info['card_number'],
									  'cvv' => $card_info['cvv'],
									  'cardExpiry' => array(
											'month' => (int)$card_info['expirationMonth'],
											'year' => (int)$card_info['expirationYear'],
									  )
								 ),
								/* 'billingDetails' => array(
									  'zip' => $zipcode
								 )*/
							));
						$response = $paysafe_connect->cardPaymentService()->authorize($auth);
						

					if($response->status=='COMPLETED'){
						$payment_response['payment_response'] = $response->status;
                       $payment_response['CORRELATIONID'] = $response->merchantRefNum;
                        $payment_response['TRANSACTIONID'] = $response->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = $response->card->type;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tresponse['message'];
					}
					
				} catch (Paysafe\PaysafeException $e) {
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getMessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Paysafe payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function paysafe_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		$paysafe_connect = self::connect($connection_string);
			
			$currencyBaseUnitsMultiplier = '100'; // for example: 100
			$merchant_ref_num = substr(mt_rand() . microtime(), 0,10);
			//Try to submit a Card Payment
				try {
                                    $zipcode=isset($shipping_info['zipcode'])?$shipping_info['zipcode']:'';
					
							$auth = new Paysafe\CardPayments\Authorization(array(
								 'merchantRefNum' => $merchant_ref_num,
								 'amount' => $transaction_amount*$currencyBaseUnitsMultiplier,
								 'settleWithAuth' => false,
								 'card' => array(
									  'cardNum' => $card_info['card_number'],
									  'cvv' => $card_info['cvv'],
									  'cardExpiry' => array(
											'month' => (int)$card_info['expirationMonth'],
											'year' => (int)$card_info['expirationYear'],
									  )
								 ),
								/* 'billingDetails' => array(
									  'zip' => $zipcode
								 )*/
							));
						$response = $paysafe_connect->cardPaymentService()->authorize($auth);
						
					if($response->status=='COMPLETED'){
						$payment_response['payment_response'] = $response->status;
                       $payment_response['CORRELATIONID'] = $response->merchantRefNum;
                        $payment_response['TRANSACTIONID'] = $response->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = $response->card->type;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tresponse['message'];
					}
					
				} catch (Paysafe\PaysafeException $e) {
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getMessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Paysafe settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function paysafe_settlement($connection_string = [], $authorizationID = '',$amount = null,$transact_param = []) {
			$paysafe_connect = self::connect($connection_string);
			$payment_response = [];
			
                        $amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			$correlationId=isset($transact_param['CORRELATIONID'])?$transact_param['CORRELATIONID']:'';
                        $merchantRefNum=$correlationId;
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
				$response = $paysafe_connect->cardPaymentService()->settlement(new Paysafe\CardPayments\Settlement(array(
						 //'merchantRefNum' => "8771143100",
						'merchantRefNum' => $merchantRefNum,
						  //'amount' => 500,
						  'amount' => $amount,
						 //'authorizationID' => "98f19448-1e5f-4734-98ad-cb9fd9bed25d"
						 'authorizationID' => $authorizationID
							)));
							
					if($response->status=='COMPLETED' || $response->status=="PENDING"){
						$payment_response['payment_response'] = $response->status;
                       $payment_response['CORRELATIONID'] = $response->merchantRefNum;
                        $payment_response['TRANSACTIONID'] = $response->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = "";
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $tresponse['message'];
                                                 $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
					}
					
				} catch (Paysafe\PaysafeException $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getMessage();
                                                 $payment_response['TRANSACTIONID'] ='';
                                                $payment_response['CORRELATIONID']='';
				}

		//print_r($payment_response);die;
					
       return $payment_response;
    }
    
     /**
     * Paysafe void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function paysafe_void($connection_string = [], $authorizationId = '',$amount = null,$merchantRefNum = null) {
			$paysafe_connect = self::connect($connection_string);
			$payment_response = [];
			
			$currencyBaseUnitsMultiplier = '100'; // for example: 100
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				try {
					
				$authReversal = new Paysafe\CardPayments\AuthorizationReversal(array(
						'merchantRefNum' => $merchantRefNum,
						//'merchantRefNum' => "1168290300",
						 //'amount' => $amount*$currencyBaseUnitsMultiplier,
						 //'amount' => 51500,
						 'authorizationID' => $authorizationId
						// 'authorizationID' => "48c257bd-c1b7-4be8-ac36-2f578f466510"
							));
 
							$response = $paysafe_connect->cardPaymentService()->reverseAuth($authReversal);
				if($response->status=='COMPLETED'){
						$payment_response['payment_response'] = $response->status;
                       $payment_response['CORRELATIONID'] = $response->merchantRefNum;
                        $payment_response['TRANSACTIONID'] = $response->id;
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] = "";
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $response->status;
					}
			
				}catch (Paysafe\PaysafeException $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getMessage();
				}

			//print_r($payment_response);die;
					
       return $payment_response;
    }
    
  

    

}
