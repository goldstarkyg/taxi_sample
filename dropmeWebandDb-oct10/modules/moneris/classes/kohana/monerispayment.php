<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Moneris payment gateway module
 *
 * @uses       Moneris 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Monerispayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_Moneris_gateway_connection;

     /**
     * Moneris payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // Moneris sandbox environment 
                if ($pay_type == "T") {
					
						$storeId = $connection_string[0]['payment_gateway_username'];
						$Apitoken = $connection_string[0]['payment_gateway_password'];
						$mode = true;
											
                     
                }
                //Moneris production environment 
                else if ($pay_type == "L") {
					
						$storeId = $connection_string[0]['live_payment_gateway_username'];
						$Apitoken = $connection_string[0]['live_payment_gateway_password'];
						$mode = false;
												
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
                return $payment = array("storeId"=>$storeId,"Apitoken"=>$Apitoken,"mode"=>$mode);
               					
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
     * Moneris payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function moneris_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		
			$moneris_connect = self::connect($connection_string);
			$payment_response = [];
			  $order_number = 'ord-'.substr(mt_rand() . microtime(), 0,7);
			$commcard_invoice = 'Invoice '.substr(mt_rand() . microtime(), 0,5);
			$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
			
				try {
					
					$txnArray=array('type'=>'purchase',  
							 'order_id'=>$order_number,
							 'cust_id'=>'cust',
							 'amount'=>number_format($transaction_amount,2,'.',''),
							 'pan'=>$card_info['card_number'],
							 'expdate'=>$expire,
							 'crypt_type'=>'7', 
							 'commcard_invoice'=>$commcard_invoice,
							'commcard_tax_amount'=>'0.00',
							 'dynamic_descriptor'=>""
           );
           
           $mpgTxn = new mpgTransaction($txnArray);
           $mpgRequest = new mpgRequest($mpgTxn);
           $mpgRequest->setProcCountryCode("US"); //"CA" for sending transaction to Canadian environment
			$mpgRequest->setTestMode($moneris_connect['mode']); //false or comment out this line for production transactions
					
			$mpgHttpPost  =new mpgHttpsPost($moneris_connect['storeId'],$moneris_connect['Apitoken'],$mpgRequest);
			$mpgResponse=$mpgHttpPost->getMpgResponse();
			
					if($mpgResponse->responseData['Message']=="APPROVED*"){
						$payment_response['payment_response'] = $mpgResponse->responseData['Message'];
                       $payment_response['CORRELATIONID'] = $mpgResponse->responseData['TransID'];
                        $payment_response['TRANSACTIONID'] = $mpgResponse->responseData['ReceiptId'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $mpgResponse->responseData['CardType'];
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $mpgResponse->responseData['Message'];
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getmessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Moneris payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function moneris_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		
			$moneris_connect = self::connect($connection_string);
			$payment_response = [];
			  $order_number = 'ord-'.substr(mt_rand() . microtime(), 0,7);
			$commcard_invoice = 'Invoice '.substr(mt_rand() . microtime(), 0,5);
			$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
			
				try {
					
					$txnArray=array('type'=>'preauth',  
							 'order_id'=>$order_number,
							 'cust_id'=>'cust',
							 'amount'=>number_format($transaction_amount,2,'.',''),
							 'pan'=>$card_info['card_number'],
							 'expdate'=>$expire,
							 'crypt_type'=>'7', 
							 'commcard_invoice'=>$commcard_invoice,
							'commcard_tax_amount'=>'0.00',
							 'dynamic_descriptor'=>""
           );
           
           $mpgTxn = new mpgTransaction($txnArray);
           $mpgRequest = new mpgRequest($mpgTxn);
           $mpgRequest->setProcCountryCode("US"); //"CA" for sending transaction to Canadian environment
			$mpgRequest->setTestMode($moneris_connect['mode']); //false or comment out this line for production transactions
					
			$mpgHttpPost  =new mpgHttpsPost($moneris_connect['storeId'],$moneris_connect['Apitoken'],$mpgRequest);
			$mpgResponse=$mpgHttpPost->getMpgResponse();
			
					if($mpgResponse->responseData['Message']=="APPROVED*"){
						$payment_response['payment_response'] = $mpgResponse->responseData['Message'];
                       $payment_response['CORRELATIONID'] = $mpgResponse->responseData['TransID'];
                        $payment_response['TRANSACTIONID'] = $mpgResponse->responseData['ReceiptId'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $mpgResponse->responseData['CardType'];
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $mpgResponse->responseData['Message'];
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getmessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Moneris settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function moneris_settlement($connection_string = [], $orderid = '',$transact_param =[]) {
			$moneris_connect = self::connect($connection_string);
			$payment_response = [];
                        $amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			$correlationId=isset($transact_param['CORRELATIONID'])?$transact_param['CORRELATIONID']:'';
			$commcard_invoice = 'Invoice '.substr(mt_rand() . microtime(), 0,5);
			
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				
				//$orderid='ord-5615861';
				//$compamount='20.00';
				//$correlationId='27-0_25';
					
				try {
					
					$txnArray=array('type'=>'completion',  
								 'order_id'=>$orderid,
								 'comp_amount'=> number_format($amount,2,'.',''),
								 'txn_number'=>$correlationId,
								 'crypt_type'=>'7', 
								 'commcard_invoice'=>$commcard_invoice,
								 'commcard_tax_amount'=>'0.00',
								 'dynamic_descriptor'=>""
								   );
           
           $mpgTxn = new mpgTransaction($txnArray);
           $mpgRequest = new mpgRequest($mpgTxn);
           $mpgRequest->setProcCountryCode("US"); //"CA" for sending transaction to Canadian environment
			$mpgRequest->setTestMode($moneris_connect['mode']); //false or comment out this line for production transactions
					
			$mpgHttpPost  =new mpgHttpsPost($moneris_connect['storeId'],$moneris_connect['Apitoken'],$mpgRequest);
			$mpgResponse=$mpgHttpPost->getMpgResponse();
			
					if($mpgResponse->responseData['Message']=="APPROVED*"){
						$payment_response['payment_response'] = $mpgResponse->responseData['Message'];
                       $payment_response['CORRELATIONID'] = $mpgResponse->responseData['TransID'];
                        $payment_response['TRANSACTIONID'] = $mpgResponse->responseData['ReceiptId'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $mpgResponse->responseData['CardType'];
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $mpgResponse->responseData['Message'];
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
     * Moneris void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function moneris_void($connection_string = [], $orderid = '',$transact_param = []) {
			$moneris_connect = self::connect($connection_string);
			$payment_response = [];
			  
			$commcard_invoice = 'Invoice '.substr(mt_rand() . microtime(), 0,5);
			$correlationId=$transact_param['CORRELATIONID'];
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
				
				//$orderid='ord-3697223';
				//$correlationId='30-0_25';
			
			try {
					
					$txnArray=array('type'=>'purchasecorrection',  
								 'order_id'=>$orderid,
								 'txn_number'=>$correlationId,
								 'crypt_type'=>'7', 
								);
								   
           $mpgTxn = new mpgTransaction($txnArray);
           $mpgRequest = new mpgRequest($mpgTxn);
           $mpgRequest->setProcCountryCode("US"); //"CA" for sending transaction to Canadian environment
			$mpgRequest->setTestMode($moneris_connect['mode']); //false or comment out this line for production transactions
					
			$mpgHttpPost  =new mpgHttpsPost($moneris_connect['storeId'],$moneris_connect['Apitoken'],$mpgRequest);
			$mpgResponse=$mpgHttpPost->getMpgResponse();
			
					if($mpgResponse->responseData['Message']=="APPROVED*"){
						$payment_response['payment_response'] = $mpgResponse->responseData['Message'];
                       $payment_response['CORRELATIONID'] = $mpgResponse->responseData['TransID'];
                        $payment_response['TRANSACTIONID'] = $mpgResponse->responseData['ReceiptId'];
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $mpgResponse->responseData['CardType'];
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $mpgResponse->responseData['Message'];
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getmessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;
    }
   

    

}
