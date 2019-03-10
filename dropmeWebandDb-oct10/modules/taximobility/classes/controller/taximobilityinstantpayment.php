<?php

defined('SYSPATH') or die('No direct script access.');
/* * ****************************************
 * Contains Users details
 * @Package: Taximobility
 * @Author: taxi Team
 * @URL : taximobility.com
 * ****************************************** */

Class Controller_TaximobilityInstantpayment extends Controller_Website {

    /**
     * ***__construct()****
     */
    public function __construct(Request $request, Response $response) {
        parent::__construct($request, $response);
        /*         * To Set Errors Null to avoid error if not set in view* */

        $this->template = USERVIEW . "template";
    }

    public function action_charge() {
        $host_url=$_SERVER['HTTP_HOST'];
        
        if($host_url=='mongo.taximobility.com'){
        
        require_once(DOCROOT . 'modules/stripe/vendor/stripe-php-4.9.1/init.php');
        $stripe = array(
            "secret_key" => "sk_test_u8PLV6JvR49uE2L5mlRzAvs6",
            "publishable_key" => "pk_test_KSlJoSVKjk2qOFn3WI9ANOJ2"
        );

        \Stripe\Stripe::setApiKey($stripe['secret_key']);

        $base_url = URL_BASE . 'instantpayment/charge';
        echo '<form action=' . $base_url . ' method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="' . $stripe['publishable_key'] . '"
          data-description="Taximobility card payment"
          data-amount="500000"
          data-locale="auto"
          data-name="Taximobility"
          data-image='.URL_BASE.'public/cloud_package/loader.gif></script>
</form>';
        
        if (isset($_POST['stripeToken'])) {
            $token = $_POST['stripeToken'];
            $email = $_POST['stripeEmail'];
            
            $customer = \Stripe\Customer::create(array(
                        'email' => $email,
                        'source' => $token
            ));

            $charge = \Stripe\Charge::create(array(
                        'customer' => $customer->id,
                        'amount' => 500000,
                        'currency' => 'usd',
                        'description'=>'charge for taximobility- direct online payment'
            ));

            echo '<h2>Successfully charged $5000.00!</h2>';
            exit;
        }
        exit;
        }else{
              echo 'check your connection';
              exit;
        }
        
    }
   

}
