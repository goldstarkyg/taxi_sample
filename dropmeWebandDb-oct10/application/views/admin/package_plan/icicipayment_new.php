
 <script>

	$(document).keydown(function(event) {
       $(".phone").keydown(function(event) {
        var tele= document.payment_form.tele_phone.value.trim();
         //var phoneno =  /^[0-9-+()\s]+$/;
         var phoneno =  /^(?=.*[0-9])[0-9-+()\s]+$/;

            if (phoneno.test(tele))
            {    
                $("#tell_error").html("");}
            else{  $("#tell_error").html("Please enter valid phone number");
            }
              });
        });

	$(document).keydown(function(event) {
       $(".nam").keydown(function(event) {
      var names= document.payment_form.name.value.trim();
         var na =  /^[0-9A-Za-z-+\s\.]+$/;

            if (na.test(names))
            {    
                $("#name_error").html("");}
            else{  $("#name_error").html("Please enter valid name");
            }
              });
        });

	

    function  check_payvalidation(){

        var terms=$('#checky').is(":checked");
        $("#terms_error").html("");
        if(terms==false){
            $("#terms_error").html("Please accept terms and policy");
        }             
            
        var email = document.payment_form.email.value.trim();
        var names= document.payment_form.name.value.trim();
        var tele= document.payment_form.tele_phone.value.trim();
        var ser=document.payment_form.select_name.value;
        var amount=document.payment_form.amount.value.trim();
            
        var  a=b=c=d=e=f=h=t=0;
               
        var atpos=email.indexOf("@");
        var dotpos=email.lastIndexOf(".");
        var iChars = "!#$%^&*()+=[]\\\';,/{}|\":<>?";
                       
        for (var i = 0; i < document.payment_form.email.value.length; i++) {
            if (iChars.indexOf(document.payment_form.email.value.charAt(i)) != -1) {
                $('#email_error').html('Please Remove Special Characters');
                return false;
            }
        }

            
       if(tele == ''){ 
    t=8;
    }else{
                 
     
            //var phoneno =  /^[0-9-+\s]+$/;
            var phoneno =  /^(?=.*[0-9])[0-9-+()\s]+$/;

            if (phoneno.test(tele))
            {    
                $("#tell_error").html("");e=5;}
            else{  $("#tell_error").html("Please enter valid phone number");
            }
        }  
        

        if(amount == '' || amount=='0'){
            $("#amount_error").html("Enter your amount");    
        } else{
            var regex = /^[0-9]\d*(((,\d{3}){1})?(\.\d{0,2})?)$/;
            if (regex.test(amount))
            {    
                $("#amount_error").html("");d=4;}else{  $("#amount_error").html("Please enter valid amount");
            }}


                 
                 
        if(email==''){
            $("#email_error").html("Enter your email id");      
        } 
        else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
        {
            $('#email_error').html('Invalid Email');
        }
        else{
            $("#email_error").html("");
            a=6;
        }
            
        if(names == ''){
		
	     	
            $("#name_error").html("Enter your name"); 

             
        } 
	else{
	   var na =  /^[0-9A-Za-z-+\s\.]+$/;

            if (na.test(names))
            {    
                $("#name_error").html("");b=2;}
            else{  $("#name_error").html("Please enter valid name");
            }
              
        }  
        
        if(ser == ''){
            $("#select_error").html("Please select your service");    
        } 
        else{
            $("#select_error").html("");
            h=8;
        } 

        if(b ==2 && a==6  && d==4 && terms==true && h==8  && (e==5 || t==8)){
            
            $(".ndot_con_submit").hide();
            document.payment_form.submit();
            return true;
        }else{
            return false;
        }    
    }
</script>


 <!--Wrapper Outer Start -->
    <div class="wrapper_outer retail">
        <!--Wrapper Inner Start -->
        <div class="wrapper_inner">
            <!--Clear Fix Start -->
            
<div class="clearfix">
    <ul class="ic_step_title">
        <li class="active payment"><span>1</span><?php echo __('payment_process'); ?></li>
        <li><span>2</span><?php echo __('confirm_your_payment'); ?></li>
    </ul>
    </div>
                <form name="payment_form" method="post" onsubmit="return check_payvalidation();">

        <div class="ic_frm_block clearfix">		
                
                    <ul class="ic_frm_right payment_right conform_payment_right payment_logo_sec">
			<?php  $product_title=$this->session->get('product_name'); if($product_title!=""){ ?>
		      <li class="clearfix">    
                        <label>&nbsp; </label>                    
                        <div class="ic_frm_right_input nam">
                        <h1 class="payment_title"><?php echo $product_title; ?></h1>
                       </div>
                    </li>
			<?php } ?>
                    <li class="clearfix">    
                        <label><?php echo __('Name'); ?> <span class="required">*</span></label>                    
                        <div class="ic_frm_right_input nam">
                        <input type="text" class="required pay_input" name="name" maxlength="50" placeholder="<?php echo __('enter_name'); ?>" title="<?php echo __('enter_name'); ?>" value="<?php if (!isset($this->form_error['name']) && isset($this->userPost['name'])) { echo $this->userPost['name'];
} ?>"  />
                        
                        <span id="name_error" class="ic_error_valid required error_message"><?php if (isset($this->form_error["name"])) {
    echo $this->form_error["name"];
} ?></span><div class="clearfix special_char"><?php echo __('special_chara_info'); ?></div>
                        </div>
                    </li>
                    <li class="clearfix">    
                        <label><?php echo __('email_id'); ?><span class="required">*</span></label>      
                        <div class="ic_frm_right_input">
                        <input class="pay_input" type="text" maxlength="60" name="email" placeholder="<?php echo __('enter_your_email_id'); ?>" title="<?php echo __('enter_your_email_id'); ?>" value="<?php if (!isset($this->form_error['email']) && isset($this->userPost['email'])) { echo $this->userPost['email'];} ?>" />
                        <span class="ic_error_valid required error_message" id="email_error"><?php if (isset($this->form_error["email"])) {
    echo $this->form_error["email"];
} ?></span><div class="clearfix special_char"><?php echo __('ex_email_info'); ?></div></div>
                    </li>                     <li class="clearfix">    
                        <label><?php echo __('invoice_id'); ?> <span></span></label> 
                        <div class="ic_frm_right_input">
                         <input class="pay_input ic_sm_input" type="text"  maxlength="32" name="invoice" placeholder="<?php echo __('enter_invoice_id'); ?>" title="<?php echo __('enter_invoice_id'); ?>" value="<?php if (!isset($this->form_error['invoice']) && isset($this->userPost['invoice'])) { echo $this->userPost['invoice']; } ?>"/> <div class="clearfix special_char" ><?php echo __('optional_info'); ?></div>
                        </div>
                    </li> 
		    <?php  $product_id=$this->session->get('product_id'); if($product_id!=""){ ?>
			<input type="hidden" name="select_name" value="<?php echo $product_id;?>"/>
			<?php }else{ ?>  
                    <li class="clearfix">    
                        <label><?php echo __('service'); ?><span class="required">*</span></label>  
                        <div class="ic_frm_right_input">
                        <select class="pay_input" id="sel" name="select_name">
                             <option value=""><?php echo __('please_select_your_service'); ?></option>
                            <option value="1"<?php echo(isset($_POST['select_name']) && ($_POST['select_name'] == 1) ? ' selected="selected"' : ''); ?>><?php echo __('web_application_deve'); ?></option>
                            <option value="2"<?php echo(isset($_POST['select_name']) && ($_POST['select_name'] == 2) ? ' selected="selected"' : ''); ?>><?php echo __('mobile_app_deve'); ?></option>
                            <option value="3"<?php echo(isset($_POST['select_name']) && ($_POST['select_name'] == 3) ? ' selected="selected"' : ''); ?>><?php echo __('loyalty_app_deve_service'); ?></option>
                            <option value="4"<?php echo(isset($_POST['select_name']) && ($_POST['select_name'] == 4) ? ' selected="selected"' : ''); ?>><?php echo __('ecommerce_services'); ?></option>
                            <option value="5"<?php echo(isset($_POST['select_name']) && ($_POST['select_name'] == 5) ? ' selected="selected"' : ''); ?>><?php echo __('auction_script'); ?></option>
                            <option value="6"<?php echo(isset($_POST['select_name']) && ($_POST['select_name'] == 6) ? ' selected="selected"' : ''); ?>><?php echo __('group_deals_script'); ?></option>
							<option value="7"<?php echo(isset($_POST['select_name']) && ($_POST['select_name'] == 6) ? ' selected="selected"' : ''); ?>><?php echo __('tagmy_taxi'); ?></option>
                        </select>                        
                        <span id="select_error" style="color:red" class="ic_error_valid"><?php if (isset($this->form_error["select"])) {
    echo $this->form_error["select"];
} ?></span>   </div></li>
			<?php } ?>
                    <li class="clearfix">    
                        <label><?php echo __('amount'); ?>(<?php echo CURRENCY_SYMB; ?>)<span class="required">*</span></label>            
                        <div class="ic_frm_right_input">
			<?php $price=$this->session->get('price'); if($price!=""){ ?>
			<input class="pay_input ic_sm_input amt" type="text" readonly  name="amount"  maxlength="10" value="<?php echo $price; ?>"/><span class="frm_help_txt"> &nbsp;</span>
			<?php }else{ ?>
                        <input class="pay_input ic_sm_input amt" type="text"   name="amount" placeholder="<?php echo __('enter_your_amount'); ?>" maxlength="10" title="<?php echo __('enter_your_amount'); ?>"   value="<?php if (!isset($this->form_error['amount']) && isset($this->userPost['amount'])) { echo $this->userPost['amount']; } ?>"/><span class="frm_help_txt"> &nbsp;</span>
                        <span id="amount_error" style="color:red" class="ic_error_valid"><?php if (isset($this->form_error["amount"])) { echo $this->form_error["amount"]; } ?></span> <div class="clearfix special_char"><?php echo __('amount_shouldbe_round_accpt_info'); ?></div></div>
                    </li>
			<?php } ?>
                    <li class="clearfix">    
                        <label><?php echo __('phone_label'); ?> </label>   
                        <div class="ic_frm_right_input">
                        <input class="pay_input ic_sm_input phone" type="text" name="tele_phone" placeholder="<?php echo __('enter_phone_number'); ?>"  maxlength="25" title="<?php echo __('enter_phone_number'); ?>"   value="<?php if (!isset($this->form_error['telephone']) && isset($this->userPost['telephone'])) { echo $this->userPost['telephone'];} ?>"/> 
			<span class="ic_error_valid required error_message" id="tell_error"><?php if (isset($this->form_error["tele_phone"])) {
                            echo $this->form_error["telephone"];
                        } ?></span><div class="clearfix special_char"><?php echo __('eg_phone_number_info'); ?></div>
                        </div>
                    </li>
                    <li class="clearfix">
						<label>&nbsp;</label>

						<?php if(isset($this->product_id) && $this->product_id==108) { ?>

							<div class="ic_frm_right_input pay_frm_check">
								<div class="clearfix">
									<input type="checkbox" name="terms" id="checky" value="<?php echo __('accept_label'); ?>" ><p> <?php echo __('iagree_toterms_of_service'); ?>
									<a href="http://www.taximobility.com/privacypolicy.html" target="_blank"> <?php echo __('privacy_policy'); ?>  </a>&nbsp;<?php echo __('and'); ?>&nbsp;
									<a style="vertical-align:top" href="http://www.taximobility.com/termsconditions.html" target="_blank" /><?php echo __('terms_and_conditions'); ?></a>.</p>
								</div>
								<span id="terms_error" style="color:red" class="ic_error_valid">
									<?php if (isset($this->form_error["terms"])) { echo $this->form_error["terms"]; } ?>
								</span> 
							</div>
						
						<?php } else { ?>

							<div class="ic_frm_right_input pay_frm_check">
								<div class="clearfix">
									<input type="checkbox" name="terms" id="checky" value="<?php echo __('accept_label'); ?>"><p> <?php echo __('iagree_toterms_of_service'); ?><a href="http://www.ndottech.com/refund-policy.html" target="_blank"> <?php echo __('refund_policy'); ?> </a><?php echo __('and'); ?> <a style="vertical-align:top" href="http://www.ndottech.com/delivery-shipping.html" target="_blank" /> <?php echo __('delivery_shipping'); ?></a>.</p>
								</div>
								<span id="terms_error" style="color:red" class="ic_error_valid">
									<?php if (isset($this->form_error["terms"])) { echo $this->form_error["terms"]; } ?>
								</span> 
							</div>
						<?php  } ?>
                    </li>
					

                    <li class="clearfix">  
                        <label>&nbsp;</label>
                        <div class="ic_frm_right_input">
                            <div>
                                <input class="black_but" type="submit" title="<?php echo __('pay'); ?>" value="<?php echo __('pay'); ?>">
                            </div>
                        </div>
                    </li>
                </ul> 
				<div class="success_payment_right confirm_right_img payment_logo_sec">
					
						 <div class="payment_logo"> <span><?php echo __('accept_label'); ?> :</span><img src="/public/common/images/payments.png" alt="Payments" /></div>
						
						 </div>
</div>        
    </form>

                <!--Enter Prise Inner End -->
        </div>
        <!--Clear Fix End -->   
        </div>
        <!--Wrapper Inner End -->

<?php //session_destroy();
 /* $timeout = 240; // Number of seconds until it times out.
 
// Check if the timeout field exists.
if(isset($_SESSION['timeout'])) {
    // See if the number of seconds since the last
    // visit is larger than the timeout period.
    $duration = time() - (int)$_SESSION['timeout'];
    if($duration > $timeout) {
        // Destroy the session and restart it.
        //session_destroy();
		unset($_SESSION['price']);
       // session_start();
    }
}
 
// Update the timout field with the current time.
$_SESSION['timeout'] = time(); */
?>

