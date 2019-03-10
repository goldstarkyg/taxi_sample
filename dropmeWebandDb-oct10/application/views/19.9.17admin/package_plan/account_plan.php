<?php
defined('SYSPATH') OR die("No direct access allowed.");
if (isset($errors) && array_key_exists('plan_amt', $errors)) {
    echo "<span class='error plan_toperror'>" . ucfirst($errors['plan_amt']) . "</span>";
}
if (isset($errors) && array_key_exists('package_type', $errors)) {
    echo "<span class='error plan_toperror'>" . ucfirst($errors['package_type']) . "</span>";
}
if (isset($errors) && array_key_exists('payment_terms', $errors)) {
    echo "<span class='error plan_toperror'>" . ucfirst($errors['payment_terms']) . "</span>";
}

$expiryTime=new DateTime(EXPIRT_DATETIME_FORMAT);
$expiryTime_format=$expiryTime->format('F jS Y');
$currency = CLOUD_CURRENCY_FORMAT;
$currency_sym=CLOUD_CURRENCY_SYMB;

    $choose_plan=__('choose_plan');
    $setup_cost="$1000";
            if(PACKAGE_TYPE==0){
                $str_message=__('free_trial');
                $choose_plan=__('choose_plan');
                $setup_cost="$1000";
            }else if(PACKAGE_TYPE==1){
                $str_message=__('basic').' plan';
                $choose_plan=__('upgrade_plan');
                $setup_cost="-";
            }else if(PACKAGE_TYPE==2){
                $str_message=__('plantinum').' plan';
                $choose_plan=__('upgrade_plan');
                $setup_cost="-";
            }else if(PACKAGE_TYPE==3){
                $str_message=__('enterprise').' plan';
                $choose_plan=__('upgrade_plan');
            }
            if (!empty(EXPIRY_TIME) && EXPIRY_TIME < strtotime(CURRENT_TIMEZONE_DATE))
            {
                $expiry_day_message= str_replace('##plan_name##', $str_message,__('expired_message'));
                $pick_plan_msg=__('plan_choose_msg');
            }else{ 
                $str_trail_expiry_days= str_replace('+','',TRIAL_EXPIRY_DAYS);
                if(TRIAL_EXPIRY_DAYS==0)
                {
                    $expiry_day_message=str_replace('##plan_name##', $str_message,__('expired_message_today'));
                    $pick_plan_msg=__('plan_choose_msg');
                }else{
                    $expiry_days=str_replace('##expiry_days##',$str_trail_expiry_days,__('trial_expiry_days'));
                    $expiry_day_message=str_replace('##plan_name##',$str_message,$expiry_days);                    
                    $pick_plan_msg=str_replace('##expiryTime_format##',$expiryTime_format,__('pick_plan_msg'));
                }
            }
            

?>


<div class="pricing_outer">
    <div class="pricing_top_det">
        <h1><?php echo $expiry_day_message;?></h1>
        <p><?php echo $pick_plan_msg;?></p>
    </div>
    <div class="pricing_bot_det">
        <div class="responsive_price_tab">
                <ul class="plan-tabs">
                    <li><a class="plan-tabs__tab" href="javascript:;" id="small_menu"><?php echo __('small'); ?></a></li>
                    <li><a class="plan-tabs__tab" href="javascript:;" id="mid_menu"><?php echo __('midscale'); ?></a></li>
                    <li><a class="plan-tabs__tab" href="javascript:;" id="enterprise_menu"><?php echo __('enterprise'); ?></a></li>
                </ul>
        </div>
        <table class="new_pricing_table" cellspacing="0" cellpadding="0" border="0">
            <thead>
                <tr>
                    <th>
                        <strong><?php echo __('Plans'); ?></strong></th>
                    <th class="small_col">
                        <strong><?php echo __('small'); ?></strong> <span><?php echo __('all_basicsfor'); ?><br>
                            <?php echo __('starting_anew_business'); ?></span></th>
                    <th class="mid_col">
                        <strong><?php echo __('midscale'); ?></strong> <span><?php echo __('everything_youneed_for'); ?><br>
                            <?php echo __('a_growing_business'); ?></span></th>
                    <th class="enter_col">
                        <strong><?php echo __('enterprise'); ?></strong> <span><?php echo __('advanced_features_for'); ?><br>
                            <?php echo __('scaling_your_business'); ?></span></th>
                </tr>
            </thead>
            <tbody>
                <tr class="price_bar">
                    <td>
                        <?php echo __('pricing_term'); ?></td>
                    <td class="small_col">
                        <sup><?php echo __('currency_info'); ?></sup>
                        <div class="new_price_bold">
                            <?php echo __('250'); ?><span style="font-size:16px;"><?php echo __('month_info'); ?></span></div>
                            <p class="per_dri"><?php echo __('billed_annually');?></p>
                        </td>
                    <td class="mid_col">
                        <sup><?php echo __('currency_info'); ?></sup>
                        <div class="new_price_bold">
                            <?php echo __('750'); ?><span style="font-size:16px;"><?php echo __('month_info'); ?></span></div>
                    <p class="per_dri"><?php echo __('billed_annually');?></p>
                    </td>
                    
                    <td class="enter_col">
                        -
                    </td>
                </tr>
                <tr>
                    <td><?php echo __('choose_plan');  ?></td>
                    <td class="small_col">
                         <form action="<?php echo URL_BASE.'package/billing_info';?>" name="frmaccountplan" id="frmaccountplan" method="post">
                            <input type="hidden" name="package_type" id="package_type" value="1">
                           <?php if(PACKAGE_TYPE<=1){?><input class="blue_but" type="submit" name="upgrade_plan" id="upgrade_plan" value="<?php echo $choose_plan;?>"><?php } else{ echo '-';}?>
                         </form>
                    </td>
                    <td class="mid_col">
                        <form action="<?php echo URL_BASE.'package/billing_info';?>" name="frmaccountplan" id="frmaccountplan" method="post">
                            <input type="hidden" name="package_type" id="package_type" value="2">
                           <?php if(PACKAGE_TYPE<=2){?> <input class="blue_but" type="submit" name="upgrade_plan" id="upgrade_plan" value="<?php echo $choose_plan;?>"><?php } else{ echo '-';}?>
                         </form>
                    </td>
                    <td class="enter_col"><a href="<?php echo CONTACT_URL;?>" class="blue_but" title="Contact us" target="_blank"><?php echo __('contactus_label'); ?></a></td>
                </tr>
                <tr>
                        <!--<td>
                                Pricing Term</td>-->
                        <!--<td class="small_col">
                                Billed annually </td>-->
                        <!--<td class="mid_col">
                                Billed annually</td>-->
                        <!--<td class="enter_col">-</td>-->
                </tr>
                <tr>
                    <td>
                        <?php echo __('support_hosting_cost'); ?></td>
                    <td class="small_col">
                        <?php echo __('free'); ?></td>
                    <td class="mid_col">
                        <?php echo __('free'); ?></td>
                <!--<td class="enter_col">
                        Starting from $500 /month</td>-->
                </tr>
                <tr>
                    <td>
                        <?php echo __('setup_cost'); ?></td>
                    <td class="small_col">
                        <?php echo $setup_cost;?></td>
                    <td class="mid_col">
                        <?php echo $setup_cost;?></td>
                    <td class="enter_col">
                        <?php echo __('free'); ?></td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('drivers_label'); ?></td>
                    <td class="small_col">
                        <?php echo __('20'); ?></td>
                    <td class="mid_col">
                        <?php echo __('75'); ?></td>
                    <td class="enter_col">
                        <?php echo __('unlimited'); ?></td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('private_cloud_deployment'); ?></td>
                    <td class="small_col">
                        <div class="pricing_no">
                            -</div>
                    </td>
                    <td class="mid_col">
                        <div class="pricing_no">
                            -</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr class="pricing_feature_text">
                    <td colspan="4">
                        <span><?php echo __('features'); ?></span></td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('auto_dispatching'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('scheduled_advanced_booking'); ?></td>
                    <td class="small_col">					
                       <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('real_time_tracking'); ?></td>
                    <td class="small_col">					
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('online_payment'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('promo_code_option'); ?></td>
                    <td class="small_col">					
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">					
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">					
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('ride_sharing'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('manage_drivers'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('manage_dispatchers'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('add_companies'); ?></td>
                    <td class="small_col">
                        <?php echo __('unlimited'); ?></td>
                    <td class="mid_col">
                        <?php echo __('unlimited'); ?></td>
                    <td class="enter_col">
                        <?php echo __('unlimited'); ?></td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('fare_estimation'); ?></td>
                    <td class="small_col">					
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('distance_calculation'); ?></td>
                    <td class="small_col">				
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">				
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('google_map_integration'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('customer_feedback'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('driver_referral'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('push_notifications'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">					
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('trip_history'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr class="pricing_feature_text">
                    <td colspan="4">
                        <span><?php echo __('deliverables'); ?></span></td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('branded_customer_app'); ?></td>
                    <td class="small_col">
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('branded_driver_app'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('additional_payment_gateways'); ?></td>
                    <td class="small_col">
                        <div class="pricing_no">
                            -</div>
                    </td>
                    <td class="mid_col">
                        <div class="pricing_no">
                            -</div>
                    </td>
                    <td class="enter_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('customization'); ?></td>
                    <td class="small_col">
                        <div class="pricing_no">
                            -</div>
                    </td>
                    <td class="mid_col">
                        <div class="pricing_no">
                            -</div>
                    </td>
                    <td class="enter_col">					
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('android_iOS_Apps'); ?></td>
                    <td class="small_col">						
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="mid_col">					
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                    <td class="enter_col">					
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
              
                <tr>
                    <td>
                        <?php echo __('multi_language'); ?></td>
                    <td class="small_col">
                        <div class="pricing_no">
                            -</div>
                    </td>
                    <td class="mid_col">
                        <div class="pricing_no">
                            -</div>
                    </td>
                    <td class="enter_col">				
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                
                  <tr>
                    <td>
                        <?php echo __('customer_web_portal'); ?></td>
                    <td class="small_col">
                        <div class="pricing_no">-</div>
                    </td>
                    <td class="mid_col">
                        <div class="pricing_no">-</div>
                    </td>
                    <td class="enter_col">
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo __('company_website'); ?></td>                    <td class="small_col">
                        <div class="pricing_no">-</div>
                    </td>
                    <td class="mid_col">
                        <div class="pricing_no">-</div>
                    </td>
                    <td class="enter_col">
                        <div class="pricing_yes">&nbsp;</div>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <?php /*
        <div class="prcing_sec">
            <div class="price_list">
                <div class="prc_list_inn">
                    <h3 class="plan_tit"><?php echo __('basic');?></h3>
                    <h1 class="pricing_tag">
                        <span><?php echo $currency_sym;?></span>250<span>/month</span>
                    </h1>
<!--                    <small class="der_mon">Driver/month</small>-->
                    <h2 class="pricing_tag_yearly">
<!--                        <span><?php echo $currency_sym;?></span>2500<span>/year</span>-->
                        <strong><?php echo __('billed_annually');?></strong>
                        <p>Save upto 15%</p>
                    </h2>
                    <div class="choose_plan">
                        <form action="<?php echo URL_BASE.'package/billing_info';?>" name="frmaccountplan" id="frmaccountplan" method="post">
                            <input type="hidden" name="package_type" id="package_type" value="1">
                            <input type="submit" name="upgrade_plan" id="upgrade_plan" value="Choose plan">
                         </form>
                     </div>
                    
<!--                    <div class="prc_dec">Start selling your products on your secure and beautiful online store.</div>-->
                    <div class="feature_det">
                        <h4>Support & Hosting Cost</h4>
<!--                        <p>Included</p>-->
                        <p>Free</p>
                    </div>
                    <div class="feature_det">
                        <h4>Setup Cost</h4>
                        <p>Free</p>
<!--                        <p><?php echo $currency_sym;?>1000</p>-->
                    </div>
                    <div class="feature_det">
                        <h4>Add Drivers</h4>
                        <p>20</p>
                    </div>
                    <div class="feature_tit">
                    <h4>Features</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Auto Dispatching</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Scheduled / Advanced Booking</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Real Time Tracking</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Online Payment</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Promo Code Option</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Ride Sharing</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Manage Drivers</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Manage Dispatchers</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Add Companies <span>(Unlimited)</span></h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Fare Estimation</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Distance Calculation</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Google Map Integration</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Customer Feedback</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Driver Referral</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Push Notifications</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Trip History</h4>
                    </div>
                    <div class="feature_tit">
                    <h4>Deliverables</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Branded Customer App</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Branded Driver App</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Android & iOS Apps</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Customer Web Portal</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="prcing_sec">
            <div class="price_list">
                <div class="price_tit"><h3>Most popular</h3></div>
                 <div class="prc_list_inn">
                     <h3 class="plan_tit"><?php echo __('plantinum');?></h3>
                    <h1 class="pricing_tag">
                        <span><?php echo $currency_sym;?></span>750<span>/month</span>
                    </h1>
<!--                     <small class="der_mon">Driver/month</small>-->
                     <h2 class="pricing_tag_yearly">
<!--                         <span><?php echo $currency_sym;?></span>10000<span>/year</span> -->
                         <strong><?php echo __('billed_annually');?></strong>
                         <p>Save upto 10%</p>
                    </h2>
                     <div class="choose_plan">
                         <form action="<?php echo URL_BASE.'package/billing_info';?>" name="frmaccountplan" id="frmaccountplan" method="post">
                            <input type="hidden" name="package_type" id="package_type" value="2">
                            <input type="submit" name="upgrade_plan" id="upgrade_plan" value="Choose plan">
                         </form>
                     </div>
                     
<!--                     <div class="prc_dec">Start selling your products on your secure and beautiful online store.</div>-->
                     <div class="feature_det">
                        <h4>Support & Hosting Cost</h4>
<!--                        <p>Included</p>-->
                        <p>Free</p>
                    </div>
                     <div class="feature_det">
                        <h4>Setup Cost</h4>
<!--                        <p><?php //echo $currency_sym;?>1000</p>-->
                        <p>Free</p>
                    </div>
                     <div class="feature_det">
                        <h4>Add Drivers</h4>
                        <p>75</p>
                    </div>
                     <div class="feature_tit">
                    <h4>Features</h4>
                    </div>
                     <div class="feature_det_1">
                        <h4>Auto Dispatching</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Scheduled / Advanced Booking</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Real Time Tracking</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Online Payment</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Promo Code Option</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Ride Sharing</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Manage Drivers</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Manage Dispatchers</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Add Companies <span>(Unlimited)</span></h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Fare Estimation</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Distance Calculation</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Google Map Integration</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Customer Feedback</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Driver Referral</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Push Notifications</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Trip History</h4>
                    </div>
                     <div class="feature_tit">
                    <h4>Deliverables</h4>
                    </div>
                     <div class="feature_det_1">
                        <h4>Branded Customer App</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Branded Driver App</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Android & iOS Apps</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Customer Web Portal</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="prcing_sec">
            <div class="price_list">
                 <div class="prc_list_inn">
                     <h3 class="plan_tit"><?php echo __('enterprise');?></h3>
                    <h1 class="pricing_tag"> - </h1>
                    <h2 class="pricing_tag_yearly">
<!--                        --->
                        <strong>&nbsp;</strong>
                        <p>&nbsp;</p>
                    </h2>
                    <div class="choose_plan">
                        <a href="<?php echo CONTACT_URL;?>" title="Contact us" target="_blank">Contact us</a>
                     </div>
                    
<!--                    <div class="prc_dec">Start selling your products on your secure and beautiful online store.</div>-->
                    <div class="feature_det">
                        <h4>&nbsp;</h4>
                        <p>&nbsp;<?php //echo $currency_sym;?></p>
                    </div>
                    <div class="feature_det">
                        <h4>Setup Cost</h4>
<!--                        <p><?php //echo $currency_sym;?>1000</p>-->
                        <p>Free</p>
                    </div>
                    <div class="feature_det">
                        <h4>Add Drivers</h4>
                        <p>Unlimited</p>
                    </div>
                    <div class="feature_det_1">
                       <span><?php echo __('private_cloud');?></span>
                    </div>
                    <div class="feature_tit">
                    <h4>Features</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Auto Dispatching</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Scheduled / Advanced Booking</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Real Time Tracking</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Online Payment</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Promo Code Option</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Ride Sharing</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Manage Drivers</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Manage Dispatchers</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Add Companies <span>(Unlimited)</span></h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Fare Estimation</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Distance Calculation</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Google Map Integration</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Customer Feedback</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Driver Referral</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Push Notifications</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Trip History</h4>
                    </div>
                    <div class="feature_tit">
                    <h4>Deliverables</h4>
                    </div>
                    
                    <div class="feature_det_1">
                        <h4>Branded Customer App</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Branded Driver App</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Additional Payment Gateways</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Customization</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Android & iOS Apps</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Customer Web Portal</h4>
                    </div>
                    <div class="feature_det_1">
                        <h4>Multi Language</h4>
                    </div>
                </div>
            </div>
        </div>
        
        */?>
    </div>
</div>

<script>
    $("#small_menu").click(function(){
        $(".mid_col").hide();
        $(".enter_col").hide();
        $(".small_col").show();
    });
    $("#mid_menu").click(function(){
        $(".mid_col").show();
        $(".small_col").hide();
        $(".enter_col").hide();
    });
    $("#enterprise_menu").click(function(){
        $(".enter_col").show();
        $(".small_col").hide();
        $(".mid_col").hide();
    });
</script>
