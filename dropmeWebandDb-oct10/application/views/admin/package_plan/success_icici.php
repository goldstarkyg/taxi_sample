<?php
   //ICICI payment gateway response messages, codes and it's desc
   
   $pgResponseFormats = array("0"=>"Transaction Successful", "1"=>"Rejected by the Switch. Your transaction is declined by the issuing bank. Please check with your card issuing bank to find reason for denial of the transaction.", "2"=>"Rejected by the Payment Gateway"); 
   
   $pgMessageResponseFormats = array("Invalid Verification String" => "If card holder type incorrect values in capta image twice it will give this error", 
   "Authentication failed. Transaction cannot be authorized" => "The transactions which are decline by N 7(Authentication failed) are due to Cardholder unable to provide password of Internet Banking for 3D-secure.",
   "Authentication failed.Transaction cannot be authorized" => "The transactions which are decline by N 7(Authentication failed) are due to Cardholder unable to provide password of Internet Banking for 3D-secure.",
   "Country Not Supported By PG" => "If merchant is sending wrong country code in shipping and billing address",
   "Card Type Invalid" => "This error is due to wrong card Type entered by card holder",
   "Card Number Invalid" => "This error is due to wrong card entered by card holder");
   
   $ResponseCode = $this->ResponseCode;
   $Message = $this->Message;
   
   ?>

<div class="cancel_order_outer">
    <div class="cancel_tit"><h1><?php echo __('payment_success'); ?></h1></div>
    <div class="order_details">
        <div class="order_mid_det">
            <h2 class="pay_success"><?php echo __('payment_info_succes'); ?></h2>
            <div class="driverinfo_common cancel_ord_info">
                <ul>
                    <li>
                        <label><?php echo __('transaction_status'); ?></label>
                        <p><?php echo $this->Message;?></p>
                     </li>
                     <?php
                        /*
                        <li class="clearfix"><p>Transaction Description</p><b>:</b><span><?php echo $pgResponseFormats[$ResponseCode];?></span></li>
                     */
                     if($ResponseCode==2){
                     ?>
                     <li>
                        <label><?php echo __('transaction_description',array(':param' => 1)); ?></label>
                        <p><?php echo $pgResponseFormats[$ResponseCode];?></p>
                     </li>
                     <li>
                        <label><?php echo __('transaction_description',array(':param' => 2)); ?></label>
                        <p><?php echo $pgMessageResponseFormats[$Message];?></p>
                     </li>
                     <?php
                        }else{
                        if($pgResponseFormats[$ResponseCode]!=0){
                        ?>
                     <li>
                        <label><?php echo __('transaction_description',array(':param' => '')); ?></label>
                        <p><?php echo $pgResponseFormats[$ResponseCode];?></p>
                     </li>
                     <?php
                        }
                        }?>
                     <li>
                        <label><?php echo __('transactionid_label'); ?></label>
                        <p><?php echo $this->TxnID; ?></p>
                     </li>
                    </ul>
                    <ul>
                     <li>
                        <label><?php echo __('epg_transaction_id'); ?></label>
                        <p><?php echo $this->ePGTxnID ;?></p>
                     </li>
                     <li>
                        <label><?php echo __('paid_amount'); ?></label>
                        <p><?php echo $this->amount;?>&nbsp;<?php echo $this->session->get('pay_amount_code'); ?></p>
                     </li>
                     <li>
                        <label><?php echo __('Name'); ?></label>
                        <p><?php echo $this->name ; ?></p>
                     </li>
                     <li>
                        <label><?php echo __('email_id'); ?></label>
                        <p><?php echo $this->email;?></p>
                     </li>
                </ul>
         </div>
        </div>
    
    <div class="butt_det">
         <div class="pay_buttom new_button">
            <a href="<?php echo URL_BASE;?>package/account_plan" class="black_but" title="<?php echo __('go_to_plan_page'); ?>"><?php echo __('go_to_plan_page'); ?></a>
         </div>
    </div>
     </div>
</div>
<?php session_destroy(); ?>


