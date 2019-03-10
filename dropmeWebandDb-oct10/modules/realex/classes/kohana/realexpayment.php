<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Realex payment gateway module
 *
 * @uses       Realex 
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Realexpayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_Realex_gateway_connection;
    public static $type;
    public function __construct() {
		
		//require_once(MODPATH.'realex/vendor/src/domain/Card.php');
        
    }

     /**
     * Realex payment gateway connection establishment
     * 
     * @param type $connection_string
     * @return boolean
     * @throws Exception
     */
    public static function connect($connection_string = []) {

     
        if (isset($connection_string[0]['payment_method'])) {
            $pay_type = $connection_string[0]['payment_method'];
            try {
                // Realex sandbox environment 
                if ($pay_type == "T") {
					
						$merchantId = $connection_string[0]['payment_gateway_username'];
						$secret = $connection_string[0]['payment_gateway_password'];
						
                     
                }
                //Realex production environment 
                else if ($pay_type == "L") {
					
						$merchantId = $connection_string[0]['live_payment_gateway_username'];
						$secret = $connection_string[0]['live_payment_gateway_password'];
						
					
                } else {
                    throw new Exception('payment method is not valid');
                }
                
                
               
                
                return $payment = array("merchantId"=>$merchantId,"secret"=>$secret);
               
               					
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
     * Realex payment sale transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function realex_sale($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
		
		
			$realex_connect = self::connect($connection_string);
			$cardtype = self::cardtype($card_info['card_number']);
			$payment_response = [];
			$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
			
			$amount=$transaction_amount*100;
			 
			
				try {
					$card = ( new com\realexpayments\remote\sdk\domain\Card() )
									->addNumber( $card_info['card_number'] );
										if($cardtype=="VISA"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::VISA);
										}elseif($cardtype=="MASTER"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::MASTERCARD);
										}elseif($cardtype= "AMEX"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::AMEX);
										}elseif($cardtype= "DINERS"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::DINERS);
										}elseif($cardtype= "JCB"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::JCB);
										}
										
									$card=$card->addCardHolderName( $shipping_info['firstName'] )
									->addCvn( $card_info['cvv'] )
									->addCvnPresenceIndicator( com\realexpayments\remote\sdk\domain\PresenceIndicator::CVN_PRESENT )
									->addExpiryDate( $expire );
								 
								$request = ( new com\realexpayments\remote\sdk\domain\payment\PaymentRequest() )
									->addMerchantId($realex_connect['merchantId'])
									->addType( com\realexpayments\remote\sdk\domain\payment\PaymentType::AUTH )
									->addAmount( $amount )           
									->addCurrency( $card_info['currency'] )                  
									->addCard( $card )       
									->addAutoSettle( ( new com\realexpayments\remote\sdk\domain\payment\AutoSettle() )
									->addFlag( com\realexpayments\remote\sdk\domain\payment\AutoSettleFlag::TRUE ) );
								
								$client   = new com\realexpayments\remote\sdk\RealexClient($realex_connect['secret']);
								$response = $client->send( $request );
							
							
					if($response->getresult()=='00'){
						$payment_response['payment_response'] = $response->getmessage();
                       $payment_response['CORRELATIONID'] = $response->getpaymentsReference();
                        $payment_response['TRANSACTIONID'] = $response->getorderId();
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $cardtype;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $response->getmessage();
						if (strpos($payment_response['payment_response'], '[ test system ]') !== false) {
							$payment_response['payment_response']  = str_replace('[ test system ]','',$payment_response['payment_response']);
						}
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getmessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Realex payment preauthorization transaction 
     * 
     * @param type $connection_string
     * @param type $transaction_amount
     * @param type $card_info
     * @param type $shipping_info
     * @param type $additional_parameters
     * @return boolean|int
     * @throws Exception
     */
    public static function realex_preauthorization($connection_string = [], $transaction_amount = null, $card_info = [], $shipping_info = [], $additional_parameters = []) {
				
			$realex_connect = self::connect($connection_string);
			$cardtype = self::cardtype($card_info['card_number']);
			$payment_response = [];
			$expire=$card_info['expirationMonth'].date('y',strtotime($card_info['expirationYear']));
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
				$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			//Try to submit a Card Payment
			$amount=$transaction_amount*100;
			  			
				try {
					$card = ( new com\realexpayments\remote\sdk\domain\Card() )
									->addNumber( $card_info['card_number'] );
									if($cardtype=="VISA"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::VISA);
										}elseif($cardtype=="MASTER"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::MASTERCARD);
										}elseif($cardtype= "AMEX"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::AMEX);
										}elseif($cardtype= "DINERS"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::DINERS);
										}elseif($cardtype= "JCB"){
											$card=$card->addType( com\realexpayments\remote\sdk\domain\CardType::JCB);
										}
										
									$card=$card->addCardHolderName( $shipping_info['firstName'] )
									->addCvn( $card_info['cvv'] )
									->addCvnPresenceIndicator( com\realexpayments\remote\sdk\domain\PresenceIndicator::CVN_PRESENT )
									->addExpiryDate( $expire );
								 
								$request = ( new com\realexpayments\remote\sdk\domain\payment\PaymentRequest() )
									->addMerchantId($realex_connect['merchantId'])
									->addType( com\realexpayments\remote\sdk\domain\payment\PaymentType::AUTH )
									->addAmount( $amount )           
									->addCurrency( $card_info['currency'] )                  
									->addCard( $card )       
									->addAutoSettle( ( new com\realexpayments\remote\sdk\domain\payment\AutoSettle() )
									->addFlag( com\realexpayments\remote\sdk\domain\payment\AutoSettleFlag::FALSE ) );
								
								$client   = new com\realexpayments\remote\sdk\RealexClient($realex_connect['secret']);
								$response = $client->send( $request );
							
							
					if($response->getresult()=='00'){
						$payment_response['payment_response'] = $response->getmessage();
                       $payment_response['CORRELATIONID'] = $response->getpaymentsReference();
                        $payment_response['TRANSACTIONID'] = $response->getorderId();
                        $payment_response['payment_status'] = 1;
                        $payment_response['cardType'] =  $cardtype;
					}else
					{
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $response->getmessage();
						
						if (strpos($payment_response['payment_response'], '[ test system ]') !== false) {
							$payment_response['payment_response']  = str_replace('[ test system ]','',$payment_response['payment_response']);
						}
						
						//~ $payment_response['payment_response'] = ( $payment_response['payment_response'] == '[ test system ] DECLINED') ? 'Declined' : $payment_response['payment_response'];
						//~ print_r($response);
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						//~ $payment_response['payment_response'] = $e->getmessage();
						$payment_response['payment_response'] = 'Invalid expiry month/year';
				}
				
				//~ print_r($payment_response);die;
				return $payment_response;

        
    }
    
    /**
     * Realex settlement transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function realex_settlement($connection_string = [], $transactionID = '',$transact_param =[]) {
			
			$realex_connect = self::connect($connection_string);
			$payment_response = [];
			$amount= isset($transact_param['preTransactAmount'])?$transact_param['preTransactAmount']:null;
			$correlationId=isset($transact_param['CORRELATIONID'])?$transact_param['CORRELATIONID']:'';
                        $currency_code=isset($transact_param['currency'])?$transact_param['currency']:'';
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
			$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			
			//$correlatioID='149571278428099';
			//$transactionID='e0UyQ0JDRTZDLURFMjk2MA';
			
			
				try {
						$request = ( new com\realexpayments\remote\sdk\domain\payment\PaymentRequest() )
							->addMerchantId( $realex_connect['merchantId'] )
							->addType( com\realexpayments\remote\sdk\domain\payment\PaymentType::SETTLE )
							->addOrderId($transactionID)
							->addAmount( 1001 )           
							->addCurrency( $currency_code )                  
							->addPaymentsReference($correlationId);
						$client   = new com\realexpayments\remote\sdk\RealexClient( $realex_connect['secret'] );
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
						if (strpos($payment_response['payment_response'], '[ test system ]') !== false) {
							$payment_response['payment_response']  = str_replace('[ test system ]','',$payment_response['payment_response']);
						}
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
     * Realex void transaction
     * 
     * @param type $connection_string
     * @param type $transactionId
     * @param type $correlationId
     * @return boolean|int
     * @throws Exception
     */
    public static function realex_void($connection_string = [], $transactionID = '',$transact_param = []) {
			$realex_connect = self::connect($connection_string);
			$payment_response = [];
			
			$payment_response['payment_method'] = isset($connection_string[0]['payment_method']) ? $connection_string[0]['payment_method'] : '';
			$payment_response['payment_gateway_id'] = isset($connection_string[0]['payment_gateway_id']) ? $connection_string[0]['payment_gateway_id'] : '';
			
			//$correlatioID='1496036769279815';
			//$transactionID='ezQ4QzJEMzBBLUJCOThEMA';
			
			$correlatioID= isset($transact_param['CORRELATIONID']) ? $transact_param['CORRELATIONID'] : '';
				try {
						$request = ( new com\realexpayments\remote\sdk\domain\payment\PaymentRequest() )
							->addMerchantId( $realex_connect['merchantId'] )
							->addType( com\realexpayments\remote\sdk\domain\payment\PaymentType::VOID )
							->addOrderId($transactionID)
							->addPaymentsReference($correlatioID);
						$client   = new com\realexpayments\remote\sdk\RealexClient( $realex_connect['secret'] );
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
						if (strpos($payment_response['payment_response'], '[ test system ]') !== false) {
							$payment_response['payment_response']  = str_replace('[ test system ]','',$payment_response['payment_response']);
						}
					}
					
				} catch (Exception $e) {
					
						$payment_response['payment_status'] = 0;
						$payment_response['payment_response'] = $e->getmessage();
				}
				
				//print_r($payment_response);die;
				return $payment_response;
    }
   

    

}
