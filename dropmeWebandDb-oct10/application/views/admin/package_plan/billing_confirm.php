<?php defined('SYSPATH') OR die("No direct access allowed.");
   
   $session= Session::instance();
   
                 $currency = "USD";
                 $postedvalues =$session->get("payment_postvalues");
                 
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
               $service_desc='DropMe';
               $service_id=1;
               $service_name='taxi';
               $package_type=$postedvalues['package_type'];
               $billing_options=$postedvalues['billing-options'];
               $selected_plan='';
               if($package_type==1){
                   $selected_plan=__('basic');
               }else if($package_type==2){
                   $selected_plan=__('plantinum');
               }
               
               $bill_payment_terms='';
                if($billing_options==1){
                        $bill_payment_terms=__('monthly');
                        
                    }elseif ($billing_options==2) {
                        $bill_payment_terms=__('yearly');
                        
                    }elseif ($billing_options==3) {
                        $bill_payment_terms=__('biennial');
                        
                    }elseif ($billing_options==4) {
                        $bill_payment_terms=__('triennial');
                    }
   	      /*$service_desc = $postedvalues['service_desc'];
   
                  $invoice_id = $this->session->get('pay_id');
   		
   	     $service_id = $this->session->get('product_id');
   
   	     $service_name = $this->session->get('product_name');*/
    
   ?>


<div class="cancel_order_outer">
    <div class="cancel_tit"><h1>Confirm Order</h1></div>
    <form name="checkout" method="post" action="<?php echo URL_BASE;?>package/billing_gateway_confirm" >
         <input type="hidden" name="invoice_id" value="<?php echo $invoice_id; ?>" />	
    <div class="order_details">
        <div class="order_mid_det">
            <div class="driverinfo_common cancel_ord_info">
            <ul>
               <li>
                  <label><?php echo __('name_label'); ?></label>                    
                  <p><?php echo $name; ?></p>
                  <input type="hidden" class="required" name="name"  value="<?php echo $name; ?>"  /> 
               </li>
               <li>
                  <label><?php echo __('email_id'); ?></label>      
                  <p><?php echo $email; ?></p>
                  <input type="hidden"  name="email"  value="<?php echo $email; ?>"  />
               </li>
               <?php  if ($invoice) {?>                
               <li>
                  <label><?php echo __('invoice_id'); ?></label> 
                  <p><?php echo $invoice; ?></p>
                  <input type="hidden"   name="invoice"  value="<?php echo $invoice; ?>"/>
               </li>
               <?php } ?>  
               <?php  if($service_desc!="") {?>
               <li>
                  <label><?php echo __('service'); ?></label> 
                  <p><?php echo $service_desc; ?></p>
                  <input type="hidden"   name="service_desc"  value="<?php echo $service_desc; ?>"/>
               </li>
               <?php } else {?>
               <li>
                  <label><?php echo __('service'); ?></label> 
                  <p><?php echo $service_name; ?></p>
                  <input type="hidden"   name="service_desc"  value="<?php echo $service_id; ?>"/>
               </li>
               <?php } ?>
               
                <?php  if($bill_payment_terms!="") {?>
               <li>
                  <label><?php echo __('payment_terms');?></label> 
                  <p><?php echo $bill_payment_terms; ?></p>
                  <input type="hidden"   name="bill_payment_terms"  value="<?php echo $billing_options; ?>"/>
               </li>
               <?php } ?>
                </ul>
                <ul>
               <li>
                   <label><?php echo __('selected_plan_name');?></label>
                   <p><?php echo $selected_plan; ?></p>
               </li>
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
        <p class="note_checkout"><span class="required"><?php echo __('note_label'); ?></span> : <?php echo __('business_entity_des'); ?></p>
    </div>
    <div class="butt_det">
         <div class="pay_buttom new_button">
            <input type="submit" value="<?php echo __('confirm'); ?>" id="confirm" name="checkout" class="black_but" title="<?php echo __('confirm'); ?>"  />
         </div>
    </div>
     </div>
     </form>    
</div>

