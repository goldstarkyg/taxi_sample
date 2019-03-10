<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Stripe payment gateway module - cloud Payment
 *
 * @uses       Stripe (v1.0)
 * @package    Custom
 * @author     NDOT Team 
 * @copyright  (c) 2017-2020 Ndot Team 
 */
class Kohana_Cloudpayment {

    /**
     * Declare static variable
     * 
     * @var type 
     */
    protected static $_stripe_gateway_connection;
    protected static $_merchant_id='sk_test_u8PLV6JvR49uE2L5mlRzAvs6';

    public function __construct() {
        
    }

    /**
     * Create a customer record in stripe
     * 
     * @param type $customer_info
     * @return boolean
     * @throws Exception
     */
    public static function cloudpayment_createcustomer($customer_info = [], $cloud_service_tax = 0) {

        $error = '';

        $validate = self::validate_customer_info($customer_info);

        if ($validate->check()) {
            try {

                $params = [];
                $options = [];
                $merchantId = self::$_merchant_id;
                
                $strip_connect = \Stripe\Stripe::setApiKey($merchantId);
                // Stripe payment settled to merchant use retrieve  method
                $stripe_result = \Stripe\Customer::create([
                            "description" => "Customer for - " . $customer_info['email'],
                            "email" => $customer_info['email'],
                            "shipping"=>["name"=>$customer_info['firstName'],
                                         "address"=>["line1"=>$customer_info['address'],
                                                     "city"=>$customer_info['city'],
                                                     "state"=>$customer_info['state'],                                                    
                                                     "country"=>$customer_info['country'],
                                                     "postal_code"=>$customer_info['postal_code'],
                                            ]
                                        ],
                            "source"  =>["object"=>"card",
                                         "number" => $customer_info['card_number'],
                                         "exp_month" => (int) $customer_info['expirationMonth'],
                                         "exp_year" => (int) $customer_info['expirationYear'],
                                         "cvc" => $customer_info['cvv'],
                                         "name"=>$customer_info['firstName'].' '.$customer_info['lastname'], 
                                         "address_city"=>$customer_info['city'],
                                         "address_country"=>$customer_info['country'],
                                         "address_line1"=>$customer_info['address'],
                                         "address_state"=>$customer_info['state'],
                                         "address_zip"=>$customer_info['postal_code']
                                        ]
                ]);
                $stripe_result->jsonSerialize();
            } catch (Stripe_CardError $e) {
                $error = $e->getMessage();
            } catch (Stripe_InvalidRequestError $e) {
                // Invalid parameters were supplied to Stripe's API
                $error = $e->getMessage();
            } catch (Stripe_AuthenticationError $e) {
                // Authentication with Stripe's API failed
                $error = $e->getMessage();
            } catch (Stripe_ApiConnectionError $e) {
                // Network communication with Stripe failed
                $error = $e->getMessage();
            } catch (Stripe_Error $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
                $error = $e->getMessage();
            } catch (Exception $e) {
                // Something else happened, completely unrelated to Stripe
                $error = $e->getMessage();
            }


            $customer_response = [];


            // Transaction success response
            if (isset($stripe_result['id']) && $stripe_result['id'] != '' && $error == '') {

                $customer_response['customer_id'] = $stripe_result['id'];

                $customer_response['data_response'] = 1;
                
                //$stripe_result->sources->create(array("source" => $card_token));
                if(isset($customer_info['setup_cost']) &&($customer_info['setup_cost']>0)){
                if($cloud_service_tax<=0){
                $amount = $customer_info['setup_cost'] * 100;
                $taxinfo='No tax added';
                }else{
                 $setup_tax=($customer_info['setup_cost'])*($cloud_service_tax/100);
                 $taxinfo='Tax added amount '.$customer_info['currency'].$setup_tax.'('.$cloud_service_tax.'%)';
                 $amount = ($customer_info['setup_cost']+$setup_tax) * 100;    
                }
               
                $invoice_item = \Stripe\InvoiceItem::create( 
                array(
                    'customer'    => $stripe_result['id'], // the customer to apply the fee to
                    'amount'      => $amount, // amount in cents
                    'currency'    => $customer_info['currency'],
                    'metadata'=>['tax_info'=>$taxinfo],
                    'description' => 'One-time setup fee +'.$taxinfo // our fee description
                    )
                );
            $invoice = \Stripe\Invoice::create( array(
                    'customer'    => $stripe_result['id'], // the customer to apply the fee to
                    ));
            $invoice->pay();
                }

            }
            // Transaction failure response
            else {
                $customer_response['actual_response'] = $error;
                $customer_response['data_response'] = 0;
            }
            return $customer_response;
        } else {
            $errors = $validate->errors('errors');
            throw new Exception($errors);
            return false;
        }
    }
     /**
     * Create a customer record in stripe
     * 
     * @param type $customer_info
     * @return boolean
     * @throws Exception
     */
    public static function cloudpayment_updatecustomer($customer_info = [],$cloud_service_tax=0) {

        $error = '';

        $validate = self::validate_customer_info($customer_info);

        if ($validate->check()) {
            try {

                $params = [];
                $options = [];
                $merchantId = self::$_merchant_id;
                
                $strip_connect = \Stripe\Stripe::setApiKey($merchantId);
                // Stripe payment settled to merchant use retrieve  method
                
                $stripe_result = \Stripe\Customer::update($customer_info['customer_id'],[
                             
                            "description" => "Customer for - " . $customer_info['email'],
                            "email" => $customer_info['email'],
                            "shipping"=>["name"=>$customer_info['firstName'],
                                         "address"=>["line1"=>$customer_info['address'],
                                                     "city"=>$customer_info['city'],
                                                     "state"=>$customer_info['state'],                                                    
                                                     "country"=>$customer_info['country'],
                                                     "postal_code"=>$customer_info['postal_code'],
                                            ]
                                        ],
                            "source"  =>["object"=>"card",
                                         "number" => $customer_info['card_number'],
                                         "exp_month" => (int) $customer_info['expirationMonth'],
                                         "exp_year" => (int) $customer_info['expirationYear'],
                                         "cvc" => $customer_info['cvv'],
                                         "name"=>$customer_info['firstName'].' '.$customer_info['lastname'], 
                                         "address_city"=>$customer_info['city'],
                                         "address_country"=>$customer_info['country'],
                                         "address_line1"=>$customer_info['address'],
                                         "address_state"=>$customer_info['state'],
                                         "address_zip"=>$customer_info['postal_code']
                                        ]
                ]);
                
                $stripe_result->jsonSerialize();
            } catch (Stripe_CardError $e) {
                $error = $e->getMessage();
            } catch (Stripe_InvalidRequestError $e) {
                // Invalid parameters were supplied to Stripe's API
                $error = $e->getMessage();
            } catch (Stripe_AuthenticationError $e) {
                // Authentication with Stripe's API failed
                $error = $e->getMessage();
            } catch (Stripe_ApiConnectionError $e) {
                // Network communication with Stripe failed
                $error = $e->getMessage();
            } catch (Stripe_Error $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
                $error = $e->getMessage();
            } catch (Exception $e) {
                // Something else happened, completely unrelated to Stripe
                $error = $e->getMessage();
            }


            $customer_response = [];


            // Transaction success response
            if (isset($stripe_result['id']) && $stripe_result['id'] != '' && $error == '') {

                $customer_response['customer_id'] = $stripe_result['id'];

                $customer_response['data_response'] = 1;
                //$stripe_result->sources->create(array("source" => $card_token));
            }
            // Transaction failure response
            else {
                $customer_response['actual_response'] = $error;
                $customer_response['data_response'] = 0;
            }
            return $customer_response;
        } else {
            $errors = $validate->errors('errors');
            throw new Exception($errors);
            return false;
        }
    }

    public static function create_card_token_info($customer_info = []) {
        $error = '';
//          
        try {

            $params = [];
            $options = [];
            $merchantId = self::$_merchant_id;
            $strip_connect = \Stripe\Stripe::setApiKey($merchantId);
            // Stripe payment settled to merchant use retrieve  method
            $stripe_result = \Stripe\Token::create(array(
                        "card" => array(
                            "number" => $customer_info['card_number'],
                            "exp_month" => (int) $customer_info['expirationMonth'],
                            "exp_year" => (int) $customer_info['expirationYear'],
                            "cvc" => $customer_info['cvv'])
            ));
            $stripe_result->jsonSerialize();
        } catch (Stripe_CardError $e) {
            $error = $e->getMessage();
        } catch (Stripe_InvalidRequestError $e) {
            // Invalid parameters were supplied to Stripe's API
            $error = $e->getMessage();
        } catch (Stripe_AuthenticationError $e) {
            // Authentication with Stripe's API failed
            $error = $e->getMessage();
        } catch (Stripe_ApiConnectionError $e) {
            // Network communication with Stripe failed
            $error = $e->getMessage();
        } catch (Stripe_Error $e) {
            // Display a very generic error to the user, and maybe send
            // yourself an email
            $error = $e->getMessage();
        } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            $error = $e->getMessage();
        }


        $create_card_token_response = [];



        // Transaction success response
        if (isset($stripe_result['id']) && $stripe_result['id'] != '' && $error == '') {

            //$create_card_token_response['subscription_id']=$stripe_result['id'];
            $create_card_token_response['data_response'] = 1;
            //$create_card_token_response=self::cloudpayment_createcustomer($customer_info, $stripe_result['id']);
        }
        // Transaction failure response
        else {
            $create_card_token_response['actual_response'] = $error;
            $create_card_token_response['data_response'] = 0;
        }
        return $create_card_token_response;
//            
    }

    public static function create_subscription($customer_id = '', $plan_id = '',$cloud_service_tax=0) {

        $error = '';
        $validate_array['customer_id'] = $customer_id;
        $validate_array['plan_id'] = $plan_id;
        $validate = self::validate_subscription_data($validate_array);

        if ($validate->check()) {
            try {
                
                $params = [];
                $options = [];
                $merchantId = self::$_merchant_id;
                $strip_connect = \Stripe\Stripe::setApiKey($merchantId);
                // Stripe payment settled to merchant use retrieve  method
                $stripe_result = \Stripe\Subscription::create(array(
                            "customer" => $customer_id,
                            "plan" => $plan_id,
                            "tax_percent"=>$cloud_service_tax,
                            "metadata"=>['order_id'=>$plan_id.'_'.$customer_id]
                            ));

                $stripe_result->jsonSerialize();
                
                
            } catch (Stripe_CardError $e) {
                $error = $e->getMessage();
            } catch (Stripe_InvalidRequestError $e) {
                // Invalid parameters were supplied to Stripe's API
                $error = $e->getMessage();
            } catch (Stripe_AuthenticationError $e) {
                // Authentication with Stripe's API failed
                $error = $e->getMessage();
            } catch (Stripe_ApiConnectionError $e) {
                // Network communication with Stripe failed
                $error = $e->getMessage();
            } catch (Stripe_Error $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
                $error = $e->getMessage();
            } catch (Exception $e) {
                // Something else happened, completely unrelated to Stripe
                $error = $e->getMessage();
            }


            $subscription_response = [];


            // Transaction success response
            if (isset($stripe_result['id']) && $stripe_result['id'] != '' && $error == '') {                
                $subscription_response['subscription_id'] = $stripe_result['id'];
                $subscription_response['customer_id']=$stripe_result['customer'];
                $subscription_response['data_response']=1;
            }
            // Transaction failure response
            else {
                $subscription_response['actual_response'] = $error;
                $subscription_response['data_response']=0;
            }
            return $subscription_response;
        } else {
            $errors = $validate->errors('errors');
            throw new Exception($errors);
            return false;
        }
    }

    public static function update_subscription($subscription_id = '', $plan_id = '',$cloud_service_tax=0) {

        $error = '';
        $validate_array['customer_id'] = $subscription_id;
        $validate_array['plan_id'] = $plan_id;
        $validate = self::validate_subscription_data($validate_array);

        if ($validate->check()) {
            try {

                $params = [];
                $options = [];
                $merchantId = self::$_merchant_id;
                $strip_connect = \Stripe\Stripe::setApiKey($merchantId);
                // Stripe payment settled to merchant use retrieve  method
                $stripe_result = \Stripe\Subscription::retrieve($subscription_id);
                
                $stripe_result->plan = $plan_id;
                $stripe_result->tax_percent=$cloud_service_tax;
                $stripe_result->save();
            

                $stripe_result->jsonSerialize();
                
            } catch (Stripe_CardError $e) {
                $error = $e->getMessage();
            } catch (Stripe_InvalidRequestError $e) {
                // Invalid parameters were supplied to Stripe's API
                $error = $e->getMessage();
            } catch (Stripe_AuthenticationError $e) {
                // Authentication with Stripe's API failed
                $error = $e->getMessage();
            } catch (Stripe_ApiConnectionError $e) {
                // Network communication with Stripe failed
                $error = $e->getMessage();
            } catch (Stripe_Error $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
                $error = $e->getMessage();
            } catch (Exception $e) {
                // Something else happened, completely unrelated to Stripe
                $error = $e->getMessage();
            }

            
            $subscription_response = [];


            // Transaction success response
            if (isset($stripe_result['id']) && $stripe_result['id'] != '' && $error == '') {                
                $subscription_response['subscription_id'] = $stripe_result['id'];
                $subscription_response['customer_id']=$stripe_result['customer'];
                $subscription_response['data_response']=1;
            }
            // Transaction failure response
            else {
                $subscription_response['actual_response'] = $error;
                $subscription_response['data_response']=0;
            }
            return $subscription_response;
        } else {
            $errors = $validate->errors('errors');
            throw new Exception($errors);
            return false;
        }
    }
    
    public static function cancel_subscription($subscription_id = '',$plan_id='') {

        $error = '';
        $validate_array['customer_id'] = $subscription_id;
        $validate_array['plan_id'] = $plan_id;
        $validate = self::validate_subscription_data($validate_array);

        if ($validate->check()) {
            try {

                $params = [];
                $options = [];
                $merchantId = self::$_merchant_id;
                $strip_connect = \Stripe\Stripe::setApiKey($merchantId);
                
                // Stripe payment settled to merchant use retrieve  method
                $stripe_result = \Stripe\Subscription::retrieve($subscription_id);
                
                $stripe_result->cancel();
                
            

                $stripe_result->jsonSerialize();
                
                
            } catch (Stripe_CardError $e) {
                $error = $e->getMessage();
            } catch (Stripe_InvalidRequestError $e) {
                // Invalid parameters were supplied to Stripe's API
                $error = $e->getMessage();
            } catch (Stripe_AuthenticationError $e) {
                // Authentication with Stripe's API failed
                $error = $e->getMessage();
            } catch (Stripe_ApiConnectionError $e) {
                // Network communication with Stripe failed
                $error = $e->getMessage();
            } catch (Stripe_Error $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
                $error = $e->getMessage();
            } catch (Exception $e) {
                // Something else happened, completely unrelated to Stripe
                $error = $e->getMessage();
            }

            
            $subscription_response = [];


            // Transaction success response
            if (isset($stripe_result['id']) && $stripe_result['id'] != '' && $error == '') {                
                $subscription_response['subscription_id'] = $stripe_result['id'];
                $subscription_response['customer_id']=$stripe_result['customer'];
                $subscription_response['data_response']=1;
            }
            // Transaction failure response
            else {
                $subscription_response['actual_response'] = $error;
                $subscription_response['data_response']=0;
            }
            return $subscription_response;
        } else {
            $errors = $validate->errors('errors');
            throw new Exception($errors);
            return false;
        }
    }


    /**
     * 
     * @param type $customer_id
     * @return type
     */
    private static function validate_subscription_data($customer_id) {
        return Validation::factory($customer_id)
                        ->rule('customer_id', 'not_empty')
                        ->rule('plan_id', 'not_empty');
    }

    /**
     * validate payment transaction parameters
     * 
     * @param type $payment_info
     * @return type
     */
    private static function validate_customer_info($customer_info) {

        return Validation::factory($customer_info)
                        ->rule('card_number', 'not_empty')
                        ->rule('expirationMonth', 'not_empty')
                        ->rule('expirationYear', 'not_empty')
                        ->rule('cvv', 'not_empty')
                        ->rule('currency', 'not_empty')
                        ->rule('email', 'not_empty')
                        ->rule('firstName', 'not_empty');
    }
 
}
