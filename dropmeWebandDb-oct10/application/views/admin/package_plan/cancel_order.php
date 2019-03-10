<?php defined('SYSPATH') OR die("No direct access allowed.");
   $path = "http://".$_SERVER['HTTP_HOST'];
   $session= Session::instance();
   
                 $currency = "USD";
                 $postedvalues =$session->get("icici_postvalues");
                 
                 if($postedvalues['pay_amount_code']){
                   //echo $currency = $postedvalues['pay_amount_code'];
                 }
                 
                 $name = $postedvalues['name'];
   
                 $email = $postedvalues['email'];
                 $invoice = $postedvalues['invoice'];
                 $invoice_id = $postedvalues['invoice'];   
                 $subscription_cost = $postedvalues['subscription_cost'];
                 $setup_cost = $postedvalues['setup_cost'];
                 $total_amount = $postedvalues['total_amount'];
   
                 $phone = $postedvalues['phone'];
               $service_desc='test';
               $service_id=1;
               $service_name='taxi';
   	      /*$service_desc = $postedvalues['service_desc'];
   
                  $invoice_id = $this->session->get('pay_id');
   		
   	     $service_id = $this->session->get('product_id');
   
   	     $service_name = $this->session->get('product_name');*/
    
   ?>
<div class="cancel_order_outer">
    <div class="cancel_tit"><h1><?php echo __('cancel_order'); ?></h1></div>
    <form name="checkout" method="post" action="<?php echo $path;?>/package/confirm" >
         <input type="hidden" name="invoice_id" value="<?php echo $invoice_id; ?>" />	 
    <div class="order_details">
        <div class="order_mid_det">
            <div class="driverinfo_common cancel_ord_info">
                 <ul>
               <li>
                  <label><?php echo __('your_current_plan_name'); ?></label>                    
                  <p><?php echo $name; ?></p>
                  <input type="hidden" class="required" name="name"  value="<?php echo $name; ?>"  /> 
               </li>
               <li>
                  <label><?php echo __('your_current_plan_start_date'); ?></label>                    
                  <p><?php echo $name; ?></p>
                  <input type="hidden" class="required" name="name"  value="<?php echo $name; ?>"  /> 
               </li>
               <li>
                  <label><?php echo __('your_current_plan_enddate'); ?></label>                    
                  <p><?php echo $name; ?></p>
                  <input type="hidden" class="required" name="name"  value="<?php echo $name; ?>"  /> 
               </li>
               <li>
                  <label><?php echo __('registered_name'); ?></label>                    
                  <p><?php echo $name; ?></p>
                  <input type="hidden" class="required" name="name"  value="<?php echo $name; ?>"  /> 
               </li>
               <li>
                  <label><?php echo __('registered_emailid'); ?></label>
                  <p><?php echo $email; ?></p>
                  <input type="hidden" name="email"  value="<?php echo $email; ?>"  />
               </li>
               <?php  if ($invoice) {?>                
               <li>
                  <label><?php echo __('invoice_id'); ?></label> 
                  <p><?php echo $invoice; ?></p>
                  <input type="hidden" name="invoice"  value="<?php echo $invoice; ?>"/>
               </li>
               <?php } ?>  
                 </ul>
                <ul>
               <?php  if($service_desc!="") {?>
               <li>
                  <label><?php echo __('services'); ?></label> 
                  <p><?php echo $service_desc; ?></p>
                  <input type="hidden"   name="service_desc"  value="<?php echo $service_desc; ?>"/>
               </li>
               <?php } else {?>
               <li>
                  <label><?php echo __('services'); ?></label> 
                  <p><?php echo $service_name; ?></p>
                  <input type="hidden"   name="service_desc"  value="<?php echo $service_id; ?>"/>
               </li>
               <?php } ?>
                <li>
                  <label><?php echo __('subscription_cost'); ?></label>                   
                  <p><?php echo $currency; ?>&nbsp;<?php echo $subscription_cost; ?></p>
               </li>
                <li>
                  <label><?php echo __('setup_cost'); ?></label>                   
                  <p><?php echo $currency; ?>&nbsp;<?php echo $setup_cost; ?></p>
               </li>
                <li>
                  <label><?php echo __('total_amount'); ?></label> 
                  <input type="hidden" name="currency"  value="<?php echo $currency; ?>" readonly="readonly"/>
                  <p><?php echo $currency; ?>&nbsp;<?php echo $total_amount; ?></p>
<!--                  <input type="hidden"   name="amount"  value="<?php echo $total_amount; ?>" readonly="readonly"/>-->
               </li>
               
               <?php if ($phone) {?>    
               <li>
                  <label><?php echo __('phone'); ?></label> 
                  <p><?php echo $phone; ?></p>
                  <input type="hidden"   name="telephone" value="<?php echo $phone; ?>"/> 
               </li>
               <?php } ?> 
            </ul>
         </div>
        </div>
        <div class="order_bot_det">
        <div class="terms">
         <p> <input type="checkbox" name="terms" id="checky" value="Accept"> <?php echo __('iagree_toterms_of_service'); ?> <a href="http://www.ndottech.com/refund-policy.html" target="_blank"> <?php echo __('refund_policy'); ?>  </a><?php echo __('and'); ?> <a style="vertical-align:top" href="http://www.ndottech.com/delivery-shipping.html" target="_blank"> <?php echo __('delivery_shipping'); ?></a>.</p>
        </div>
        <span id="terms_error" style="color:red" class="ic_error_valid"></span>
	<p class="note_checkout"><span class="required"><?php echo __('note_label'); ?></span> : </p><?php echo __('business_entity_des'); ?></span> 
        </div>
        <div class="butt_det">
            <div class="pay_buttom new_button">
                <input type="submit" value="<?php echo __('cancel_order');?>" id="confirm" name="checkout" class="black_but" title="<?php echo __('cancel_order');?>" onclick="return validate_cancelorder();"  />
            </div>
        </div>
    </div>
   </form>
</div>

