

<?php defined('SYSPATH') OR die('No direct access allowed.');
   //ICICI payment gateway response messages, codes and it's desc
   
   //$pgResponseFormats = array("0"=>"Transaction Successful", "1"=>"Rejected by the Switch. Your transaction is declined by the issuing bank. Please check with your card issuing bank to find reason for denial of the transaction.", "2"=>"Rejected by the Payment Gateway"); 
$pgResponseFormats = array("0"=>"Transaction Successful", "1"=>"Rejected by the Switch. Your transaction is declined by the issuing bank. Please check with your card issuing bank to find reason for denial of the transaction.", "2"=>"Rejected by the Payment Gateway"); 
   
   $pgMessageResponseFormats = array("Invalid Verification String" => "If card holder type incorrect values in capta image twice it will give this error", 
   "Authentication failed. Transaction cannot be authorized" => "The transactions which are decline by N 7(Authentication failed) are due to Cardholder unable to provide password of Internet Banking for 3D-secure.",
   "Authentication failed.Transaction cannot be authorized" => "The transactions which are decline by N 7(Authentication failed) are due to Cardholder unable to provide password of Internet Banking for 3D-secure.",
   "Country Not Supported By PG" => "If merchant is sending wrong country code in shipping and billing address",
   "Card Type Invalid" => "This error is due to wrong card Type entered by card holder",
   "Card Number Invalid" => "This error is due to wrong card entered by card holder");
   
   /*$ResponseCode = $this->ResponseCode;
   $Message = $this->Message;*/
   $session= Session::instance();
   $ResponseCode=(int)$postvalue['data_response'];
   $SubID=$postvalue['subscription_id'];
   $paid_amount=$postvalue['total_amount'];
   
   if($ResponseCode==1){
       $transaction_message='Your payment has been successfully processed. Please find the transaction details below,';
       $class_name="pay_success";
       $btn_link= URL_BASE."admin/dashboard";
       $go_to=__('go_to_dash');
   }else{
       $transaction_message='We are sorry , the transaction failed. Please find the transaction details and reason for failure below,';
       $class_name="pay_failer";
       $btn_link= URL_BASE."package/account_plan";
       $go_to=__('go_to_plan');
   }
   //$currency_sym=CURRENCY_SYMB;
   ?>


<div class="cancel_order_outer">
    <div class="cancel_tit"><h1><?php echo __('payment_transaction_process'); ?></h1></div>
    <div class="order_details">
        <div class="order_mid_det">
            <h2 class="<?php echo $class_name;?>"><?php echo $transaction_message;?></h2>
            <div class="driverinfo_common cancel_ord_info">
            <ul>
                <?php if (isset($Message)) { ?>
                <li>
                   <label><?php echo __('transaction_status'); ?></label>
                   <p><?php echo $Message;?></p>
                </li>
                <?php } ?>
                <li>
                <label><?php echo __('subscription_id'); ?></label>
                <p><?php echo $SubID; ?></p>
                </li>
<!--                <li>
                   <label>Epg Transaction ID</label>
                   <p><?php //echo $ePGTxnID ;?></p>
                </li>-->
                <li>
                   <label><?php echo __('amount'); ?></label>
                   <p><?php echo 'USD ';?><?php echo $paid_amount;?>&nbsp;<?php //echo $pay_amount_code; ?></p>
                </li>
            </ul>
         </div>
        </div>
    
    <div class="butt_det">
         <div class="pay_buttom new_button">
            <a href="<?php echo $btn_link;?>" class="black_but" title="<?php $go_to;?>"><?php echo $go_to;?></a>
         </div>
    </div>
     </div>
</div>

<?php 
   $session->delete('payment_postvalues');
   //session_destroy(); ?>
<!--Wrapper Inner End -->

<!--Wrapper Outer End -->

