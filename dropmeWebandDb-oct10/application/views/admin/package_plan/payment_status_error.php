<div class="cancel_order_outer">
    <div class="cancel_tit"><h1><?php echo __('error_occurs'); ?></h1></div>
    <div class="order_details">
        <div class="order_mid_det">
            <div class="driverinfo_common cancel_ord_info">
            <ul>
                <?php if(isset($user_dataerr)){ ?>
                <li><label><?php echo __('error_message'); ?></label><p><?php echo $user_dataerr; ?></p></li>
                <?php }else{ ?> 
                <li><label><?php echo __('error_code'); ?></label><p><?php echo $checkcode; ?></p></li>
                <li><label><?php echo __('error_message'); ?></label><p><?php echo $checkmsg; ?></p></li>
                <?php } ?>
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
