<?php
defined('SYSPATH') OR die("No direct access allowed.");

$currency = CLOUD_CURRENCY_FORMAT;
$currency_sym=CLOUD_CURRENCY_SYMB;

$service_desc = 'DropMe';
$service_id = 1;
$service_name = 'taxi';
$session= Session::instance();

$package_type = $session->get('package_type');
$selected_plan = '';
if ($package_type == 1) {
    $selected_plan = __('basic');
} else if ($package_type == 2) {
    $selected_plan = __('plantinum');
}
$tax_cost_year='';
$tax_cost_biennial='';
$tax_cost_triennial='';
$inr_tax_cost_year='';
$inr_tax_cost_biennial='';
$inr_tax_cost_triennial='';
$inr_total_amount_year='';
$inr_total_amount_biennial='';
$inr_total_amount_triennial='';
$inr_setup_cost=$setup_cost*CLOUD_CURRENCY_CONVERSION_RATE;

 $package_upgrade_time = PACKAGE_UPGRADE_TIME;
 

$expiry_date_time_monthly = date('Y-m-d', strtotime($package_upgrade_time . ' + 30 days'));
$expiry_date_time_monthly=date('Y-m-d', strtotime($expiry_date_time_monthly . ' - 1 day'));
$one_time_setup_cost_string='';
if($setup_cost>0){
$one_time_setup_cost_string=' + one time setup cost '.$currency_sym . number_format($setup_cost,2);
}
if(PACKAGE_TYPE==0)
{
    if(TRIAL_EXPIRY_DAYS==1)
    {
        $trial_expiry_day=' +1 day';
    }
    else
    {
        $trial_expiry_day=TRIAL_EXPIRY_DAYS.' days';
    }             
    $expiry_date_time_monthly = date('Y-m-d H:i:s', strtotime($expiry_date_time_monthly.$trial_expiry_day));
}
$expiry_date_time_monthly = new DateTime($expiry_date_time_monthly);
$expiry_date_time_monthly = $expiry_date_time_monthly->format('F j, Y');
$per_month=$subscription_cost_month . $one_time_setup_cost_string;


$expiry_date_time_yearly = date('Y-m-d', strtotime($package_upgrade_time . ' + 1 year'));
$expiry_date_time_yearly=date('Y-m-d', strtotime($expiry_date_time_yearly . ' - 1 day'));
if(PACKAGE_TYPE==0)
{
    if(TRIAL_EXPIRY_DAYS==1)
    {
        $trial_expiry_day=' +1 day';
    }
    else
    {
        $trial_expiry_day=TRIAL_EXPIRY_DAYS.' days';
    }             
    
    $expiry_date_time_yearly = date('Y-m-d H:i:s', strtotime($expiry_date_time_yearly.$trial_expiry_day));
}
$expiry_date_time_yearly = new DateTime($expiry_date_time_yearly);
$expiry_date_time_yearly = $expiry_date_time_yearly->format('F j, Y');
$per_year=number_format(($subscription_cost_month * 10),2) . $one_time_setup_cost_string;
$save_per_year=($subscription_cost_month * 12) - ($subscription_cost_month * 10);
$subscription_cost_year=$subscription_cost_month*10;
$inr_subscription_cost_month=$subscription_cost_month*CLOUD_CURRENCY_CONVERSION_RATE;
$inr_subscription_cost_year=$subscription_cost_year*CLOUD_CURRENCY_CONVERSION_RATE;
$total_amount_year=$subscription_cost_year+$setup_cost;
$total_amount_month=$subscription_cost_month+$setup_cost;
$inr_total_amount_year=$total_amount_year*CLOUD_CURRENCY_CONVERSION_RATE;

$expiry_date_time_biennial = date('Y-m-d', strtotime($package_upgrade_time . ' + 2 year'));
$expiry_date_time_biennial=date('Y-m-d', strtotime($expiry_date_time_biennial . ' - 1 day'));
if(PACKAGE_TYPE==0)
{
    if(TRIAL_EXPIRY_DAYS==1)
    {
        $trial_expiry_day=' +1 day';
    }
    else
    {
        $trial_expiry_day=TRIAL_EXPIRY_DAYS.' days';
    }             
    $expiry_date_time_biennial = date('Y-m-d H:i:s', strtotime($expiry_date_time_biennial.$trial_expiry_day));
}
$expiry_date_time_biennial = new DateTime($expiry_date_time_biennial);
$expiry_date_time_biennial = $expiry_date_time_biennial->format('F j, Y');
$per_biennial=($subscription_cost_month * 20) . $one_time_setup_cost_string; 
$save_per_biennial=($subscription_cost_month * 24) - ($subscription_cost_month * 20);
$subscription_cost_biennial=$subscription_cost_month*20;
$inr_subscription_cost_biennial=$subscription_cost_biennial*CLOUD_CURRENCY_CONVERSION_RATE;
$total_amount_biennial=$subscription_cost_biennial+$setup_cost;
$total_amount_month=$subscription_cost_month+$setup_cost;
$inr_total_amount_biennial=$total_amount_biennial*CLOUD_CURRENCY_CONVERSION_RATE;
$inr_total_amount_month=$total_amount_month*CLOUD_CURRENCY_CONVERSION_RATE;
        
$expiry_date_time_triennial = date('Y-m-d', strtotime($package_upgrade_time . ' + 3 year'));
$expiry_date_time_triennial=date('Y-m-d', strtotime($expiry_date_time_triennial . ' - 1 day'));
if(PACKAGE_TYPE==0)
{
    if(TRIAL_EXPIRY_DAYS==1)
    {
        $trial_expiry_day=' +1 day';
    }
    else
    {
        $trial_expiry_day=TRIAL_EXPIRY_DAYS.' days';
    }             
    $expiry_date_time_triennial = date('Y-m-d H:i:s', strtotime($expiry_date_time_triennial.$trial_expiry_day));
}
$expiry_date_time_triennial = new DateTime($expiry_date_time_triennial);
$expiry_date_time_triennial = $expiry_date_time_triennial->format('F j, Y');
$per_triennial=($subscription_cost_month * 30) . $one_time_setup_cost_string;
$save_per_triennial=($subscription_cost_month * 36) - ($subscription_cost_month * 30);
$subscription_cost_triennial=$subscription_cost_month*30;
$inr_subscription_cost_triennial=$subscription_cost_triennial*CLOUD_CURRENCY_CONVERSION_RATE;
$total_amount_triennial=$subscription_cost_triennial+$setup_cost;
$inr_total_amount_triennial=$total_amount_triennial*CLOUD_CURRENCY_CONVERSION_RATE;


$service_tax=(CLOUD_SERVICE_TAX/100);
$tax_cost_month=($total_amount_month)*($service_tax); 
$tax_cost_year=($total_amount_year)*($service_tax); 
$tax_cost_biennial=($total_amount_biennial)*($service_tax);
$tax_cost_triennial=($total_amount_triennial)*($service_tax);

$ind_total_amount_month=$total_amount_month+$tax_cost_month;
$ind_total_amount_year=$total_amount_year+$tax_cost_year;
$ind_total_amount_biennial=$total_amount_biennial+$tax_cost_biennial;
$ind_total_amount_triennial=$total_amount_triennial+$tax_cost_triennial;
$ind_inr_total_amount=$total_amount_month+$tax_cost_month;
        
$inr_tax_cost_year=($inr_total_amount_year)*($service_tax); 
$inr_tax_cost_biennial=($inr_total_amount_biennial)*($service_tax);
$inr_tax_cost_triennial=($inr_total_amount_triennial)*($service_tax);
$inr_tax_cost_month=($inr_total_amount_month)*($service_tax);
        
$ind_inr_total_amount_month=$inr_total_amount_month+$inr_tax_cost_month;
$ind_inr_total_amount_year=$inr_total_amount_year+$inr_tax_cost_year;
$ind_inr_total_amount_biennial=$inr_total_amount_biennial+$inr_tax_cost_biennial;
$ind_inr_total_amount_triennial=$inr_total_amount_triennial+$inr_tax_cost_triennial;

$package_upgrade_format = new DateTime(PACKAGE_UPGRADE_TIME);
$package_upgrade_format = $package_upgrade_format->format('F j, Y');

//$firstname = $getadmin_profile_info['name'];
//$lastname = $getadmin_profile_info['lastname'];
$email= $getadmin_profile_info['email'];
//$address = $getadmin_profile_info['address'];
//$postal_code = $getadmin_profile_info['postal_code'];


if(!empty($billing_card_info_details) &&(isset($billing_card_info_details[0]['cardnumber']))){
    $cardnumber=$billing_card_info_details[0]['cardnumber'];
    $cardnumber = encrypt_decrypt('decrypt',$cardnumber);
    $cvv=$billing_card_info_details[0]['cvv'];
    $expiry_month=$billing_card_info_details[0]['expiry_month'];
    $expiry_year=$billing_card_info_details[0]['expiry_year'];
    $expirydate=$expiry_month.'/'.$expiry_year;
    $firstname = $billing_card_info_details[0]['firstname'];
    $lastname = $billing_card_info_details[0]['lastname'];
   // $email= $billing_card_info_details[0]['email'];
    $address = $billing_card_info_details[0]['address'];    
    if(isset($billing_card_info_details[0]['postal_code']))
    {    
        $postal_code = $billing_card_info_details[0]['postal_code'];
    }else{
        $postal_code ='';
    }
    $country = $billing_card_info_details[0]['country'];
    if(isset($postvalue) && array_key_exists('country',$postvalue)){
        $country=$postvalue['country'];
    }
    if($country=='India'){
        /*$service_tax=(15/100);
        $tax_cost_year=($total_amount_year)*($service_tax); 
        $tax_cost_biennial=($total_amount_biennial)*($service_tax);
        $tax_cost_triennial=($total_amount_triennial)*($service_tax);
        $total_amount_year=$total_amount_year+$tax_cost_year;
        $total_amount_biennial=$total_amount_biennial+$tax_cost_biennial;
        $total_amount_triennial=$total_amount_triennial+$tax_cost_triennial;
        
        $inr_tax_cost_year=($inr_total_amount_year)*($service_tax); 
        $inr_tax_cost_biennial=($inr_total_amount_biennial)*($service_tax);
        $inr_tax_cost_triennial=($inr_total_amount_triennial)*($service_tax);
        $inr_total_amount_year=$inr_total_amount_year+$inr_tax_cost_year;
        $inr_total_amount_biennial=$inr_total_amount_biennial+$inr_tax_cost_biennial;
        $inr_total_amount_triennial=$inr_total_amount_triennial+$inr_tax_cost_triennial;*/
    }else{
        $service_tax='';       
    }
    $state = $billing_card_info_details[0]['state'];
    $city = $billing_card_info_details[0]['city'];
    
}else{
    $cardnumber='';
    $cvv='';
    $expirydate='';
    $firstname='';
    $lastname = '';   
    $address = '';
    $postal_code='';
    $country = '';
    $state = '';
    $city = '';
}


$inr_tax_cost_data='';
                        if(isset($postvalue) && array_key_exists('billing-options',$postvalue))
                                {
                                    if($postvalue['billing-options']==1){
                                        $subscription_cost_data=$subscription_cost_month;
                                        $inr_subscription_cost_data=$inr_subscription_cost_month;
                                        $expiry_date_time_data=$expiry_date_time_monthly;                                        
                                        $tax_cost_data=$tax_cost_month;
                                        if($country=='India'){
                                        $total_amount_data=$ind_total_amount_month;
                                        $inr_total_amount_data=$ind_inr_total_amount_month;
                                        $inr_tax_cost_data=$inr_tax_cost_month;
                                        }else{
                                        $total_amount_data=$total_amount_month;  
                                        $inr_total_amount_data=$inr_total_amount_month;
                                        }
                                        }
                                    else if($postvalue['billing-options']==2){
                                        $subscription_cost_data=$subscription_cost_year;
                                        $inr_subscription_cost_data=$inr_subscription_cost_year;
                                        $expiry_date_time_data=$expiry_date_time_yearly;                                        
                                        $tax_cost_data=$tax_cost_year;
                                        if($country=='India'){
                                        $total_amount_data=$ind_total_amount_year;
                                        $inr_total_amount_data=$ind_inr_total_amount_year;
                                        $inr_tax_cost_data=$inr_tax_cost_year;
                                        }else{
                                        $total_amount_data=$total_amount_year;  
                                        $inr_total_amount_data=$inr_total_amount_year;
                                        }
                                        }else if($postvalue['billing-options']==3){                                    
                                        $subscription_cost_data=$subscription_cost_biennial;  
                                        $inr_subscription_cost_data=$inr_subscription_cost_biennial;
                                        $expiry_date_time_data=$expiry_date_time_biennial;                                        
                                        $tax_cost_data=$tax_cost_biennial;
                                        $total_amount_data=$total_amount_biennial;
                                         if($country=='India'){
                                        $total_amount_data=$ind_total_amount_biennial;                                        
                                        $inr_total_amount_data=$ind_inr_total_amount_biennial;
                                        $inr_tax_cost_data=$inr_tax_cost_biennial;
                                        }else{
                                        $total_amount_data=$total_amount_biennial;  
                                        $inr_total_amount_data=$inr_total_amount_biennial;
                                        }
                                        }else if($postvalue['billing-options']==4){
                                        $subscription_cost_data=$subscription_cost_triennial;
                                        $inr_subscription_cost_data=$inr_subscription_cost_triennial;
                                        $expiry_date_time_data=$expiry_date_time_triennial;                                        
                                        $tax_cost_data=$tax_cost_triennial;
                                         if($country=='India'){
                                        $total_amount_data=$ind_total_amount_triennial;
                                        $inr_total_amount_data=$ind_inr_total_amount_triennial;
                                        $inr_tax_cost_data=$inr_tax_cost_triennial;
                                        }else{
                                        $total_amount_data=$total_amount_triennial;   
                                        $inr_total_amount_data=$inr_total_amount_triennial;
                                        }
                                    }                                
                                }else
                                    { 
                                    $subscription_cost_data=$subscription_cost_year;
                                    $inr_subscription_cost_data=$inr_subscription_cost_year;
                                    $expiry_date_time_data=$expiry_date_time_yearly;                                    
                                    $tax_cost_data=$tax_cost_year;
                                   /*  $subscription_cost_data=$subscription_cost_month;
                                    $inr_subscription_cost_data=$inr_subscription_cost_month;
                                    $expiry_date_time_data=$expiry_date_time_monthly;
                                    $tax_cost_data=$tax_cost_month;*/
                                     if($country=='India'){
                                        $total_amount_data=$ind_total_amount_year;
                                        $inr_total_amount_data=$ind_inr_total_amount_year;
                                        $inr_tax_cost_data=$inr_tax_cost_year;
                                        /* $total_amount_data=$ind_total_amount_month;
                                        $inr_total_amount_data=$ind_inr_total_amount_month;
                                        $inr_tax_cost_data=$inr_tax_cost_month;*/
                                        }else{
                                        $total_amount_data=$total_amount_year;
                                        $inr_total_amount_data=$inr_total_amount_year;
                                        /*$total_amount_data=$total_amount_month;
                                        $inr_total_amount_data=$inr_total_amount_month;*/
                                        }
                                    
                                    
                                    }
                                    
                                    
$check_confirm_bill_update='';
$confirm_update_billing='';
if(PACKAGE_TYPE!=0){
    if(TRIAL_EXPIRY_DAYS>0){
        if(PACKAGE_TYPE==1){
            $subscribed_plan_name=__('basic') .' plan';
        }else if(PACKAGE_TYPE==2){
            $subscribed_plan_name=__('plantinum') .' plan';
        }
        
        $choose_plan_name=$selected_plan .' plan';
        $confirm_update_billing=__('confirm_update_billing');
       // $confirm_update_billing= str_replace('##subscribed_plan_name##',$subscribed_plan_name,__('confirm_update_billing'));
        //$confirm_update_billing= str_replace('##choose_plan_name##', $choose_plan_name, $confirm_update_billing);
        
        $check_confirm_bill_update='  onclick="return check_confirm_bill_update();"';
    }
}
?>
<script type="text/javascript" src="<?php echo URL_BASE; ?>public/common/js/validation/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/frontend/logged_in/js/jquery.formance.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/frontend/logged_in/js/awesome_form.js"></script>

<div class="page_loader" id="loading" style="display: none"><div class="load_img"><img src="<?php echo URL_BASE;?>public/cloud_package/loader.gif"></div></div>
<div class="account_outer">
    <form action="" method="post" name="frmcheckout" id="frmcheckout" onsubmit="return validate_billinginfo();">
    <?php /*<form action="" method="post" name="frmcheckout" id="frmcheckout" > */ ?>
        <div class="account_det_list">
            <div class="account_lft_det">
                <div class="acc_tit"><h2><?php echo __('billing_info');?></h2></div>
                <div class="acc_det">
                    <p><?php echo __('provide_payment');?></p>
                </div>
            </div>
            <div class="account_rgt_det">
                <div class="rgt_lay add_crd_det">
                    <div class="form_group card_no">
                        <label><?php echo __('card_no'); ?></label>
                        <div class="crd">
                            <input class="form_control numbersonly" maxlength="20" x-autocompletetype="cc-number" type="text"  value="<?php if(isset($postvalue) && array_key_exists('cardnumber',$postvalue)){ echo $postvalue['cardnumber']; }else{ echo $cardnumber;}?>" name="cardnumber" id="cardnumber"/>
                            <span class="lock"></span>
                            <em id="cardnumber_error">
							<?php if (isset($errors) && array_key_exists('cardnumber', $errors)) { echo "<span class='error'>" . ucfirst($errors['cardnumber']) . "</span>"; }?>
							</em>
                        </div>
                    </div>
                    <div class="form_group">
                        <div class="div_lft">
                            <label><?php echo __('expires'); ?></label>
                            <input class="form_control credit_card_expiry" x-autocompletetype="cc-exp" placeholder="MM / YYYY " type="text" value="<?php if(isset($postvalue) && array_key_exists('expirydate',$postvalue)){ echo $postvalue['expirydate']; }else{ echo $expirydate;}?>" maxlength="9" onpaste="return false;" name="expirydate" id="expirydate"/>
                            <em id="expirydate_error">
                            <?php if (isset($errors) && array_key_exists('expirydate', $errors)) { echo "<span class='error'>" . ucfirst($errors['expirydate']) . "</span>";} ?>   
							</em>
                        </div>
                        <div class="div_rgt">
                            <label><?php echo __('credit_card_cvv'); ?><span class="info"><div class="tool_tip"><p><?php echo __('digit_security_code_info'); ?></p></div></span></label>
                            <input class="form_control numbersonly" type="text" value="<?php if(isset($postvalue) && array_key_exists('cvv',$postvalue)){ echo $postvalue['cvv']; }else{ echo $cvv;}?>" name="cvv" id="cvv" maxlength="5"/>
							<em id="cvv_error">
                            <?php if (isset($errors) && array_key_exists('cvv', $errors)) { echo "<span class='error'>" . ucfirst($errors['cvv']) . "</span>"; }?>
                            </em>
                        </div>
                    </div>
                    <div class="billing_info">
                        <h2><?php echo __('billing_address');?></h2>
                        <div class="form_group">
                            <div class="div_lft">
                                <label><?php echo __('firstname_label');?></label>
                                <input class="form_control" type="text" value="<?php if(isset($postvalue) && array_key_exists('firstName',$postvalue)){echo $postvalue['firstName'];}else{echo $firstname;} ?>" name="firstName" id="firstName" minlength="2" maxlength="50" />
								<em id="firstname_error">
								<?php if (isset($errors) && array_key_exists('firstName', $errors)) { echo "<span class='error'>" . ucfirst($errors['firstName']) . "</span>"; }?>
								</em>
                            </div>
                            <div class="div_rgt">
                                <label><?php echo __('lastname_label');?></label>
                                <input class="form_control" type="text" value="<?php if(isset($postvalue) && array_key_exists('lastname',$postvalue)){echo $postvalue['lastname'];}else{echo $lastname;} ?>" name="lastname" id="lastname" minlength="2" maxlength="50" />
								 <em id="lastname_error">
								 <?php if (isset($errors) && array_key_exists('lastname', $errors)) { echo "<span class='error'>" . ucfirst($errors['lastname']) . "</span>"; }?>
								 </em>
                            </div>
                        </div>
                        <div class="form_group card_no">
                            <label><?php echo __('street_address');?></label>
                            <input class="form_control" type="text" value="<?php if(isset($postvalue) && array_key_exists('address',$postvalue)){echo $postvalue['address'];}else{echo $address;} ?>" name="address" id="address" minlength="2"/>
                            <em id="address_error">
                            <?php if (isset($errors) && array_key_exists('address', $errors)) { echo "<span class='error'>" . ucfirst($errors['address']) . "</span>"; }?>
                            </em>
                        </div>
                        <div class="form_group">
                            <div class="div_lft" id="city_list">
                                <label><?php echo __('city_label');?></label>
								<input class="form_control" type="text" value="<?php if(isset($postvalue) && array_key_exists('city',$postvalue)){echo $postvalue['city'];}else{echo $city;} ?>" name="city" id="city" maxlength="50" minlength="2" />
							   <em id="city_error">
							   <?php if (isset($errors) && array_key_exists('city', $errors)) { echo "<span class='error'>" . ucfirst($errors['city']) . "</span>"; }?>
							   </em>
                            </div>
                            <div class="div_rgt">
                                <label><?php echo __('postal_code');?></label>
                                <input class="form_control" type="text" value="<?php if(isset($postvalue) && array_key_exists('postal_code',$postvalue)){echo $postvalue['postal_code'];}else{echo $postal_code;} ?>" name="postal_code" id="postal_code"  maxlength="10" minlength="2"/>
								<em id="postal_code_error">
								<?php if (isset($errors) && array_key_exists('postal_code', $errors)) { echo "<span class='error'>" . ucfirst($errors['postal_code']) . "</span>";}?>
								</em>   
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="div_lft">
                                <label><?php echo __('country_label');?></label>
                                <div class="small_sel">
                                <select class="form_control" name="country" id="country"><option value="">Select country</option>
                                    <?php                                
                                    if (isset($country) && !array_key_exists('country', $postvalue)) {
                                       
                                    } else {
                                        if (isset($postvalue['country'])) {
                                            $country = $postvalue['country'];
                                        } else {
                                            $country = "";
                                        }
                                    }
									foreach ($all_country_list as $key=>$country_list) {                         
									?>
                 
                                        ?>
                                        <option value="<?php echo $country_list; ?>" <?php if ($country == $country_list) {
                                        echo 'selected=selected';
                                    } ?>><?php echo ucfirst($country_list); ?></option>
                                        <?php } ?></select>
								<em id="country_error">
								<?php if (isset($errors) && array_key_exists('country', $errors)) { echo "<span class='error'>" . ucfirst($errors['country']) . "</span>"; }?>
								</em>
							</div>
                            </div>
                            <div class="div_rgt" id="state_list">
                                <label><?php echo __('state_label');?></label>

								<input class="form_control" type="text" value="<?php if(isset($postvalue) && array_key_exists('state',$postvalue)){echo $postvalue['state'];}else{echo $state;} ?>" name="state" id="state" maxlength="50" minlength="2" />
								<em id="state_error">
									<?php if (isset($errors) && array_key_exists('state', $errors)) { echo "<span class='error'>" . ucfirst($errors['state']) . "</span>";}?>
								</em>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="account_det_list">
            <div class="account_lft_det">
                <div class="acc_tit"><h2><?php echo __('billing_cycle');?></h2></div>
                <div class="acc_det">
                    <p><?php echo __('billing_cycle_desc');?></p>
                </div>
            </div>
            <div class="account_rgt_det">
                <div class="rgt_lay billing_cycle">
                    <!--<div class="radio_primary">
                        <input type="radio" id="billing-options" name="billing-options" value="1" checked="checked" data-end-date="<?php //echo $expiry_date_time_monthly; ?>" data-price="<?php //echo $subscription_cost_year+$setup_cost; ?>" data-payment-amount="<?php //echo $subscription_cost_month; ?>" data-period="<?php //echo __('monthly');?>" data-savings="" data-currency="<?php //echo $currency;?>"/>
                        <input type="radio" id="billing-options" name="billing-options" value="1"  <?php //if(isset($postvalue) && array_key_exists('billing-options',$postvalue)){ if($postvalue['billing-options']==1){echo 'checked=checked';}}else{echo 'checked=checked';}?> data-end-date="<?php echo $expiry_date_time_monthly; ?>" data-price-ind="<?php //echo $ind_total_amount_month;?>" data-price="<?php echo $total_amount_month; ?>" data-payment-amount="<?php echo $subscription_cost_month; ?>" data-period="<?php echo __('monthly');?>" data-savings="<?php echo ''; ?>" data-currency="<?php echo $currency;?>" data-sub-inr="<?php echo '(INR '.$inr_subscription_cost_month.')';?>" data-price-inr="<?php echo '(INR '.$inr_total_amount_data.')';?>" data-price-setup=" <?php echo '(INR '.$inr_setup_cost.')';?>" data-price-ind-inr=" <?php echo '(INR '.$ind_inr_total_amount.')';?>" tax-cost="<?php echo $tax_cost_month;?>" inr-tax-cost="<?php //echo '(INR '.$inr_tax_cost_month.')';?>"/>
                        <label for="1"><?php //echo __('bill_me_onceamonth'); ?><span class="monthly_price"><?php  echo $per_month; ?></span></label>
                    </div>!-->
                    <div class="radio_primary">
                        <input type="radio" id="billing-options" name="billing-options" value="2" checked="checked" <?php if(isset($postvalue) && array_key_exists('billing-options',$postvalue)){ if($postvalue['billing-options']==2){echo 'checked=checked';}}?> data-end-date="<?php echo $expiry_date_time_yearly; ?>" data-price-ind="<?php echo number_format($ind_total_amount_year,2);?>" data-price="<?php echo number_format($total_amount_year,2); ?>" data-payment-amount="<?php echo number_format($subscription_cost_year,2); ?>" data-period="<?php echo __('yearly');?>" data-savings="<?php echo number_format($save_per_year,2); ?>" data-currency="<?php echo $currency;?>" data-sub-inr="<?php echo '(INR '.$inr_subscription_cost_year.')';?>" data-price-inr="<?php echo '(INR '.$inr_total_amount_year.')';?>" data-price-setup=" <?php echo '(INR '.$inr_setup_cost.')';?>" data-price-ind-inr=" <?php echo '(INR '.$ind_inr_total_amount_year.')';?>" tax-cost="<?php echo number_format($tax_cost_year,2);?>" inr-tax-cost="<?php echo '(INR '.$inr_tax_cost_year.')';?>"/>
                        <label for="2"><?php echo __('bill_me_onceayear'); ?><?php echo $currency_sym;?><span class="annual_price"><?php echo $per_year; ?></span> and <span class="save_money"><span class="savings_biennial highlight">save <?php echo $currency_sym;?><?php echo number_format($save_per_year,2); ?></span> <?php echo __('every_years'); ?></span></label>
                    </div>
                   <!-- <div class="radio_primary">
                        <input type="radio" id="billing-options" name="billing-options" value="3" <?php if(isset($postvalue) && array_key_exists('billing-options',$postvalue)){if($postvalue['billing-options']==3){echo 'checked=checked';}}?> data-end-date="<?php echo $expiry_date_time_biennial; ?>" data-price-ind="<?php echo $ind_total_amount_biennial;?>" data-price="<?php echo $total_amount_biennial; ?>" data-payment-amount="<?php echo $subscription_cost_biennial; ?>" data-period="<?php echo __('biennial');?>" data-savings="<?php echo $save_per_biennial; ?>" data-currency="<?php echo $currency;?>" data-sub-inr="<?php echo '(INR '.$inr_subscription_cost_biennial.')';?>"data-price-inr="<?php echo '(INR '.$inr_total_amount_biennial.')';?>" data-price-setup=" <?php echo '(INR '.$inr_setup_cost.')';?>" data-price-ind-inr=" <?php echo '(INR '.$ind_inr_total_amount_biennial.')';?>" tax-cost="<?php echo $tax_cost_biennial;?>" inr-tax-cost="<?php echo '(INR '.$inr_tax_cost_biennial.')';?>"/>
                        <label for="3">Bill me every two years for <?php echo $currency_sym;?><span class="biennial_price"><?php echo $per_biennial;?></span> and <span class="save_money"><span class="savings_biennial highlight">save <?php echo $currency_sym;?><?php echo $save_per_biennial;?></span> every two years</span></label>
                    </div>
                    <div class="radio_primary">
                        <input type="radio" id="billing-options" name="billing-options" value="4" <?php if(isset($postvalue) && array_key_exists('billing-options',$postvalue)){if($postvalue['billing-options']==4){echo 'checked=checked';}}?> data-end-date="<?php echo $expiry_date_time_triennial; ?>" data-price-ind="<?php echo $ind_total_amount_triennial;?>" data-price="<?php echo $total_amount_triennial; ?>" data-payment-amount="<?php echo $subscription_cost_triennial; ?>" data-period="<?php echo __('triennial');?>" data-savings="<?php echo $save_per_triennial; ?>" data-currency="<?php echo $currency;?>" data-sub-inr="<?php echo '(INR '.$inr_subscription_cost_triennial.')';?>" data-price-inr="<?php echo '(INR '.$inr_total_amount_triennial.')';?>" data-price-setup=" <?php echo '(INR '.$inr_setup_cost.')';?>" data-price-ind-inr=" <?php echo '(INR '.$ind_inr_total_amount_triennial.')';?>" tax-cost="<?php echo $tax_cost_triennial;?>" inr-tax-cost="<?php echo '(INR '.$inr_tax_cost_triennial.')';?>"/>
                        <label for="4">Bill me every three years for <?php echo $currency_sym;?><span class="triennial_price"><?php echo $per_triennial;?></span> and <span class="save_money"><span class="savings_biennial highlight">save <?php echo $currency_sym;?><?php echo $save_per_triennial;?></span> every three years</span></label>
                    </div>-->
                    <p><?php echo __('you_will_be_charged'); ?> <span class="bill-desc-period"><?php echo __('yearly'); ?></span>
                        <span class="bill-desc-plan"><?php echo CLOUD_SITENAME;?></span><?php echo __('plan_of'); ?>
							<?php echo $currency_sym;?><span class="bill-payment-amount"><?php echo number_format($subscription_cost_data,2); 
                         ?></span> <?php echo $currency;?>
                        <?php echo __('on'); ?> <?php echo date('Y-m-d',strtotime($package_upgrade_time)); ?>. <?php echo __('this_will_cover_your'); ?> <?php echo CLOUD_SITENAME;?> <?php echo __('subscription_from'); ?>:
                        <span id="next-billing-date"><?php echo $package_upgrade_format; ?> </span>
                        <?php echo __('to'); ?> <span id="next-billing-received-date"><?php echo $expiry_date_time_data; ?></span></p>
                    <div class="service_tax"></div>
                </div>
            </div>
        </div>
        <div class="account_det_list" style="border: none;">
            <div class="account_lft_det">
                <div class="acc_tit"><h2><?php echo __('confirm_order');?></h2></div>
                <div class="acc_det">
                    <p><?php echo __('confirm_order_desc');?></p>
                </div>
            </div>
            <div class="account_rgt_det">
                <div class="rgt_lay">
                    <div class="confirm_ord">
                        <ul>
                             <li>
                                <label><?php echo __('business_name');?></label>
                                <p><?php echo $business_name;?></p>
                            </li>
                            <li>
                                <label><?php echo __('email');?></label>
                                <p><?php echo $email;?></p>
                            </li>
                            <li>
                                <label><?php echo __('payment_terms');?></label>
                                <p class="payment-period"><?php echo __('yearly');?></p>
                            </li>
                            <li>
                                <label><?php echo __('selected_plan_name');?></label>
                                <p><?php echo $selected_plan;?></p>
                            </li>
                            <li>
                                <label><?php echo __('subscription_cost');?></label>
                                <p class="subscription_cost"><?php echo $currency;?> <?php echo number_format($subscription_cost_year,2);?> <?php //echo '(INR '.$inr_subscription_cost_data.')';?></p>
                            </li>
                            <?php if($setup_cost>0) { ?>
                            <li>
                                <label><?php echo __('setup_cost');?></label>
                                <p><?php echo $currency;?> <?php echo number_format($setup_cost,2);?> <?php //echo '(INR '.$inr_setup_cost.')';?></p>
                            </li>                                                  
                            <?php }?>
                            <span class="tax_cost_india">
                                <?php if($country=='India'){?>
                                <li>
                                <label><?php echo __('service_tax').' ('.  CLOUD_SERVICE_TAX.'%)';?></label>
                                <p class="tax_cost"><?php echo $currency;?> <?php echo number_format($tax_cost_data,2);?> <?php //echo '(INR '.$inr_tax_cost_data.')';?></p>
                                </li>
                                <?php } ?>
                            </span>
                            <li>
                                <label><?php echo __('total_amount');?></label>
                                <p class="total_cost"><?php echo $currency;?> <?php echo number_format($total_amount_data,2);?> <?php //echo '(INR '.$inr_total_amount_data.')';?></p>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="order_bot_det">
                        <p class="note_checkout"><span class="required"><?php echo __('note_label'); ?></span> : <?php echo __('business_entity_des'); ?>.<?php //Your payment processed as INR.1 USD=<?php echo CLOUD_CURRENCY_CONVERSION_RATE; INR ?></p>
                    </div>
                    <div class="agree_term">
                        <div class="checkbox_custom"><input type="checkbox" id="terms" name="terms" value="1"/> 
                        <label for="terms"> <?php echo __('iagree_with'); ?> <a href="<?php echo TERMS_URL;?>" target="_blank"><?php echo strtolower(__('terms_and_conditions')); ?></a></label>
						<em id="terms_error">                        
						<?php if (isset($errors) && array_key_exists('terms', $errors)) { echo "<span class='error'>" . ucfirst($errors['terms']) . "</span>"; }?>
						</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_butt_sec">
            <div class="align_right">
                <!--<input class="btn_primary" type="button" value="cancel"/>!-->
                <a href="<?php echo URL_BASE;?>package/account_plan" class="btn_primary"><?php echo __('button_cancel'); ?></a>
                <?php /*<input class="common_butt" type="button" onclick="validate_billinginfo();" value="Confirm" name="btn_confirm" id="btn_confirm"   <?php echo $check_confirm_bill_update;?>/> */ ?>
                <input class="common_butt" type="submit" value="<?php echo __('confirm'); ?>" name="btn_confirm" id="btn_confirm"   <?php echo $check_confirm_bill_update;?>/>
            </div>
        </div>
    </form>
</div>

<script>
	
    $(document).ready(function () {  
       $('#loading').hide();
      
        //$('.service_tax').html('Service Tax 15 % applicable');
    <?php if($country=='India'){ ?>
        
         $('.service_tax').html('<p class="note_checkout"><span class="required"> *</span><?php echo __('service_tax_desc');?></p>');
                     
    <?php }
    ?>
    
       
        $('.billing_cycle input:radio').click(function () {
            var country_name = $("#country").val();
            $('.bill-desc-period').html($(this).attr('data-period'));
            //$('.bill-desc-price').html($(this).attr('data-price'));
            $('.bill-payment-amount').html($(this).attr('data-payment-amount'));
            $('.bill-desc-savings').html($(this).attr('data-savings'));
            $('#next-billing-received-date').html($(this).attr('data-end-date'));
            //$('.subscription_cost').html($(this).attr('data-currency')+' '+$(this).attr('data-payment-amount')+' '+$(this).attr('data-sub-inr'));
            $('.subscription_cost').html($(this).attr('data-currency')+' '+$(this).attr('data-payment-amount'));
           if(country_name=='India') {
            
            //$('.total_cost').html($(this).attr('data-currency')+' '+$(this).attr('data-price-ind')+' '+$(this).attr('data-price-ind-inr'));                        
             $('.total_cost').html($(this).attr('data-currency')+' '+$(this).attr('data-price-ind'));            
            $('.service_tax').html('<p class="note_checkout"><span class="required"> *</span><?php echo __('service_tax_desc');?></p>');
            $('.tax_cost_india').html("<li><label><?php echo __('service_tax').' ('.CLOUD_SERVICE_TAX.'%)';?></label><p class='tax_cost'></p></li>");
            //$('.tax_cost').html($(this).attr('data-currency')+' '+$(this).attr('tax-cost')+' '+$(this).attr('inr-tax-cost'));
            $('.tax_cost').html($(this).attr('data-currency')+' '+$(this).attr('tax-cost'));
            }else{
               $('.tax_cost_india').html('');
               //$('.total_cost').html($(this).attr('data-currency')+' '+$(this).attr('data-price')+' '+$(this).attr('data-price-inr'));            
                 $('.total_cost').html($(this).attr('data-currency')+' '+$(this).attr('data-price'));            
               $('.service_tax').html('');
            }
            $('.payment-period').html($(this).attr('data-period'));
        });
        
        $("#country").change(function () {

            var country_name = $("#country").val();
            console.log($('input[name=billing-options]:checked').attr('data-currency'));
            if(country_name=='India'){
              
            //$('.total_cost').html($('input[name=billing-options]:checked').attr('data-currency')+' '+$('input[name=billing-options]:checked').attr('data-price-ind')+' '+$('input[name=billing-options]:checked').attr('data-price-ind-inr'));            
            //$('.service_tax').html('<span class="required"> *</span><?php echo __('service_tax_desc');?>');
             $('.total_cost').html($('input[name=billing-options]:checked').attr('data-currency')+' '+$('input[name=billing-options]:checked').attr('data-price-ind'));            
            $('.service_tax').html('<span class="required"> *</span><?php echo __('service_tax_desc');?>');
            $('.tax_cost_india').html("<li><label><?php echo __('service_tax').' ('.CLOUD_SERVICE_TAX.'%)';?></label><p class='tax_cost'></p></li>");
            $('.tax_cost').html($('input[name=billing-options]:checked').attr('data-currency')+' '+$('input[name=billing-options]:checked').attr('tax-cost'));
            }else{
                $('.tax_cost_india').html('');
              // $('.total_cost').html($('input[name=billing-options]:checked').attr('data-currency')+' '+$('input[name=billing-options]:checked').attr('data-price')+' '+$('input[name=billing-options]:checked').attr('data-price-inr'));            
               $('.total_cost').html($('input[name=billing-options]:checked').attr('data-currency')+' '+$('input[name=billing-options]:checked').attr('data-price'));            
               $('.service_tax').html('');
            }
            
});



    $(".numbersonly").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

});
</script>
<script>

function validate_billinginfo()
{	
	var error = 1;
	var cardnumber = $("#cardnumber").val();
		cardnumber = cardnumber.replace(/\s/g, '');		
	var cardnumber_length = cardnumber.length;
	var expirydate =  $("#expirydate").val();
	var cvv =  $("#cvv").val();
	var firstname =  $("#firstname").val();
	var lastname =  $("#lastname").val();
	var address =  $("#address").val();
	var city =  $("#city").val();
	var postal_code =  $("#postal_code").val();
	var country =  $("#country").val();
	var state =  $("#state").val();
	var terms = $('#terms:checkbox:checked').length;	

	if(cardnumber == "") {
		$("#cardnumber_error").html("Please enter credit card number");
		error = 0;
	} else {
		if(cardnumber_length < 16 || cardnumber_length > 20 ){
			$("#cardnumber_error").html("Card number length should be 16 to 20");
		}else{
			$("#cardnumber_error").html("");
		}
	}		
	
	if(expirydate == "") {
		$("#expirydate_error").html("Please enter expiry month & year");
		error = 0;
	} else {		
		var exp_error = expiry_validation(expirydate);
		error = (exp_error == 0) ? exp_error : error;
	}
	
	if(cvv == "") {
		$("#cvv_error").html("Please enter cvv");
		error = 0;
	} else {
		var cvv_error = cvv_validation(cvv);
		error = (cvv_error == 0) ? cvv_error : error;
	}
	
	if(firstname == "") {
		$("#firstname_error").html("Please enter first name");
		error = 0;
	} else {
		$("#firstname_error").html("");
	}
	
	if(lastname == "") {
		$("#lastname_error").html("Please enter last name");
		error = 0;
	} else {
		$("#lastname_error").html("");
	}
	
	if(address == "") {
		$("#address_error").html("Please enter address");
		error = 0;
	} else {
		$("#address_error").html("");
	}
	
	if(city == "") {
		$("#city_error").html("Please enter city");
		error = 0;
	} else {
		$("#city_error").html("");
	}
	
	if(state == "") {
		$("#state_error").html("Please enter state");
		error = 0;
	} else {
		$("#state_error").html("");
	}
	
	if(country == "") {
		$("#country_error").html("Please select country");
		error = 0;
	} else {
		$("#country_error").html("");
	}		
	
	if(postal_code == "") {
		$("#postal_code_error").html("Please enter postal code");
		error = 0;
	} else {
		var numbers = postal_code.match(/\d+/);
		if (numbers == null) {
			$("#postal_code_error").html("Please includes number in postal code");
			error = 0;
		}else{ 
			$("#postal_code_error").html("");
		}
	}	
	
	if(!terms) {
		$("#terms_error").html("Please select terms");
		error = 0;
	} else {
		$("#terms_error").html("");
	}	
	
	if(error) {		
		//~ $.post( '<?php echo URL_BASE.'package/billing_info' ?>', $('form#frmcheckout').serialize(), function(data) {
			 
		//~ });
                  $('#loading').show();
		document.frmcheckout.submit();            
              
	} else {
            
		return false;
	}
}

function expiry_validation(creditcard_expiry_date){
	
	var error = 1;
	var d = new Date();
	var current_month = d.getMonth() + 1;
	current_month = (current_month <= 12) ? current_month : 1;
	var current_year = d.getFullYear();
	var data = creditcard_expiry_date.replace(/\s/g, '').split("/");
	if (parseInt(data[1]) < current_year) {
		$("#expirydate_error").html("<?php echo  __('card_year_expired'); ?>");
		error = 0;
	} else if (parseInt(data[1]) > current_year) {
		if((parseInt(data[0]) < 1 || parseInt(data[0]) > 12)) {
			$("#expirydate_error").html("<?php echo  __('card_month_expired'); ?>");
			error = 0;
		} else {
			$("#expirydate_error").html("");
		}
	} else if (parseInt(data[1]) == current_year) {
		if((parseInt(data[0]) < current_month) || (parseInt(data[0]) < 1 || parseInt(data[0]) > 12)) {
			$("#expirydate_error").html("<?php echo  __('card_month_expired'); ?>");
			error = 0;
		} else {
			$("#expirydate_error").html("");
		}
	} else {
		$("#expirydate_error").html("");
	}
	return error;
}

function cvv_validation(cvv){
	
	var error = 1;
	if(cvv.length >= 3 && cvv.length <= 4){
		$("#cvv_error").html("");
	} else {
		$("#cvv_error").html("<?php echo __("cvv_length_error"); ?>");
		error = 0;
	}
	return error;
}

function check_confirm_bill_update() {   
        //$('#loading').show();
	var strconfirm = confirm("<?php echo $confirm_update_billing;?>");
	if (strconfirm == true) {
		return true;
	} else {
		return false;
	}
}
</script>
