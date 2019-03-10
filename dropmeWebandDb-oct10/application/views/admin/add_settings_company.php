<?php
defined('SYSPATH') OR die("No direct access allowed.");
echo html::script('public/common/ckeditor/ckeditor.js');
$randy = md5( uniqid (rand(), 1) );
//print_r($site_settings);
?>
<?php /* <script type="text/javascript" src="<?php echo URL_BASE;?>public/common/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/common/js/validation/jquery.validate.js"></script> */ ?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">
		   
            <form method="POST" enctype="multipart/form-data" class="form" action="" name="settings" id="settings" >                
				<?php if(FARE_SETTINGS == 1){
					echo '<p class="language_note" style="margin:0;width:100%;">'.__('note').' : '.__('company_settings_info').'</p>';
				} ?>
                <table class="mt10 fl" cellpadding="5" cellspacing="0" width="100%">

                     <tr>
                        <td valign="top" width="20%"><label><?php echo __('tax'); ?></label><span class="star">*</span></td>
                        <td><div class="new_input_field" style="width:400px;"><input type="text" class="required" name="company_tax" id="company_tax"  title="<?php echo __('enter_tax'); ?>" maxlength="5" value="<?php  echo isset($postvalue['company_tax'])?(Arr::get($postvalue,'company_tax')):trim($site_settings[0]['company_tax']); ?>"></div>
                            <span class="error"><?php echo isset($errors['company_tax']) ? $errors['company_tax'] : ''; ?></span>
                            <span class="textclass fl clr"><?php echo __('note_tax'); ?></span>
                            </td>
                    </tr>
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('default_unit'); ?></label><span class="star">*</span></td>
                        <td><div class="new_input_field">
                        <?php $checked=isset($site_settings[0]['default_unit'])?$site_settings[0]['default_unit']:"1";
                        //echo $checked;?>
                        <input type="radio" name="default_unit" id="default_unit" title="<?php echo __('enter_payment_method'); ?>"  value="0" <?php if($checked=='0'){ echo 'checked=checked';}?> ><?php echo 'Kilometer'; ?>

                        <input type="radio" name="default_unit" id="default_unit" title="<?php echo __('enter_payment_method'); ?>"  value="1" <?php if($checked=='1'){ echo 'checked=checked';}?>><?php  echo 'Mile'; ?>
                        </div>
                        <?php if(isset($errors) && array_key_exists('default_unit',$errors)){ echo "<span class='error'>".ucfirst($errors['default_unit'])."</span>";}?></td>
                    </tr>
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('skip_credit_card'); ?></label><span class="star">*</span></td>
                        <td><div class="new_input_field">
                        <?php $checked=isset($site_settings[0]['skip_credit_card'])?$site_settings[0]['skip_credit_card']:"1";
                        //echo $checked;?>
                        <input type="radio" onclick="return skip_credit_cards('1');" name="skip_credit_card" id="skip_card_enable" title="<?php echo __('select_skip_credit_card'); ?>"  value="1" <?php if($checked=='1'){ echo 'checked=checked';}?> ><?php echo 'Enable'; ?>

                        <input type="radio" onclick="return skip_credit_cards('2');"  name="skip_credit_card" id="skip_card_disable" title="<?php echo __('select_skip_credit_card'); ?>"  value="0" <?php if($checked=='0'){ echo 'checked=checked';}?>><?php  echo 'Disable'; ?>
                        </div>
                        <?php if(isset($errors) && array_key_exists('skip_credit_card',$errors)){ echo "<span class='error'>".ucfirst($errors['skip_credit_card'])."</span>";}?></td>
                    </tr>
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('driver_commission'); ?></label><span class="star">*</span></td>
                        <td>
                            <div class="new_input_field" style="width:400px;">
                                <input type="text" name="driver_commission" id="driver_commission"  title="<?php echo __('driver_commission'); ?>" max="100" maxlength="5" value="<?php echo isset($site_settings) && (!array_key_exists('driver_commission', $errors)) ? $site_settings[0]['driver_commission'] : $validator['driver_commission']; ?>">
                            </div>
                            <span class="error"><?php echo isset($errors['driver_commission']) ? ucfirst($errors['driver_commission']) : ''; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('fare_calculation'); ?></label><span class="star">*</span></td>
                        <td><div class="new_input_field">
                <div class="formRight">
                    <div class="selector" id="uniform-user_type">
                        <select name="fare_calculation" id="fare_calculation" title="<?php echo __('fare_calculation'); ?>" >
                            <option value=""><?php echo __('select_label'); ?></option>
                            <option value="1" <?php if($site_settings[0]['fare_calculation_type'] == '1') { echo 'selected=selected'; } ?> ><?php echo __('distance');?></option>
                            <option value="2" <?php if($site_settings[0]['fare_calculation_type'] == '2') { echo 'selected=selected'; } ?> ><?php echo __('time');?></option>
                            <option value="3" <?php if($site_settings[0]['fare_calculation_type'] == '3') { echo 'selected=selected'; } ?> ><?php echo __('distance')." / ".__('time');?></option>
                        <?php echo isset($site_settings) && (!array_key_exists('fare_calculation', $errors)) ? $site_settings[0]['fare_calculation_type'] : $validator['fare_calculation']; ?></select>
                        </div>
                    </div>
                </div>
                            <span class="error"><?php echo isset($errors['fare_calculation']) ? $errors['fare_calculation'] : ''; ?></span></td>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label><?php echo __('cancellation_fare'); ?></label><span class="star">*</span></td>
                        <td><div class="new_input_field">
                <div class="formRight">
                    <div class="selector" id="uniform-user_type">
                        <?php $cancel_chk=isset($validator['cancellation_fare'])?$validator['cancellation_fare']:$site_settings[0]['company_cancellation'];
                        //echo $cancel_chk;?>
                        <select name="cancellation_fare" id="cancellation_fare" onchange="return check_cancelation_skip_cards(this.value);" class="required" title="<?php echo __('cancellation_fare'); ?>">
                            <option value=""><?php echo __('select_label'); ?></option>
                            <option value="1" <?php if($cancel_chk == 1) { echo 'selected=selected'; } ?> ><?php echo __('yes');?></option>
                            <option value="0" <?php if($cancel_chk == 0) { echo 'selected=selected'; } ?> ><?php echo __('no');?></option>
                        </select>
                        </div>
                    </div>
                </div>
                        <label for="cancellation_fare" generated="true" class="errorvalid" style="display:none"></label>
                        <span class="error"><?php echo isset($errors['cancellation_fare']) ? $errors['cancellation_fare'] : ''; ?></span></td>
                    </tr>




                <tr>
                    <td valign="top" width="20%"><label><?php echo __('selected_timezone'); ?></label><span class="star">*</span></td>
                    <td>
                        <div class="new_input_field">
                            <div class="formRight">
                                <div class="selector">
                                        <?php
                                                if($company_timezone!=""){
                                                        $company_timezone = $company_timezone;
                                                }elseif(isset($site_settings[0]['user_time_zone']) && $site_settings[0]['user_time_zone']!=""){
                                                        $company_timezone = $site_settings[0]['user_time_zone'];
                                                }else{
                                                        $company_timezone = "";
                                                }
                                        ?>
                                    <?php $format = isset($validator['user_time_zone']) ? $validator['user_time_zone'] : $company_timezone; ?>
                                    <select name="user_time_zone" title="<?php echo __('time_zone'); ?>" 	 >
                                        <?php
                                            $timezone = unserialize(SELECT_TIMEZONE);
                                            foreach($timezone as $key => $value) {
												if($company_timezone == $value) {  ?>
                                                <option value="<?php echo $value; ?>" ><?php echo ucfirst($value); ?></option>
                                                <?php }
												}
											?>
                                        <?php echo isset($site_settings) && (!array_key_exists('user_time_zone', $errors)) ? $company_timezone : $validator['user_time_zone']; ?>
                                    </select>
                                                                        <input type="hidden" name="user_time_zone" id="user_time_zone"  value="<?php echo $company_timezone; ?>">
                                </div>
                            </div>
                        </div>
                        <span class="error"><?php echo isset($errors['date_time_format']) ? $errors['date_time_format'] : ''; ?></span>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="20%"><label><?php echo __('date_time_format'); ?></label><span class="star">*</span></td>
                    <td>
                        <div class="new_input_field">
                            <div class="formRight">
                                <div class="selector">
                                    <?php $format = isset($validator['date_time_format'])?$validator['date_time_format']:$site_settings[0]['date_time_format']; ?>
                                    <select name="date_time_format" title="<?php echo __('date_time_format'); ?>" >
                                        <option value=""><?php echo __('select_label'); ?></option>
                                        <option value="Y-m-d H:i:s" <?php if($format == "Y-m-d H:i:s") { echo 'selected=selected'; } ?> ><?php echo "Y-m-d H:i:s"; ?></option>
                                        <option value="Y/m/d H:i:s" <?php if($format == "Y/m/d H:i:s") { echo 'selected=selected'; } ?> ><?php echo "Y/m/d H:i:s"; ?></option>
                                        <option value="d-m-Y H:i:s" <?php if($format == "d-m-Y H:i:s") { echo 'selected=selected'; } ?> ><?php echo "d-m-Y H:i:s"; ?></option>
                                        <option value="d/m/Y H:i:s" <?php if($format == "d/m/Y H:i:s") { echo 'selected=selected'; } ?> ><?php echo "d/m/Y H:i:s"; ?></option>
                                        <option value="D,dM-Y h:i:s A" <?php if($format == "D,dM-Y h:i:s A") { echo 'selected=selected'; } ?> ><?php echo "D,dM-Y h:i:s A"; ?></option>
                                        <?php echo isset($site_settings) && (!array_key_exists('date_time_format', $errors)) ? $site_settings[0]['date_time_format'] : $validator['date_time_format']; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <span class="error"><?php echo isset($errors['date_time_format']) ? $errors['date_time_format'] : ''; ?></span>
                    </td>
                </tr>

                     <tr>
                        <td valign="top" width="20%"><label><?php echo __('site_copyrights_label'); ?></label><span class="star">*</span></td>
                        <td>
                <div class="new_input_field" >
                    <input type="text" class="required" name="company_copyrights" id="site_copyrights" title="<?php echo __('enter_site_copyrights'); ?>" maxlength="100" value="<?php echo isset($site_settings) &&!array_key_exists('company_copyrights',$postvalue)? trim($site_settings[0]['company_copyrights']):$postvalue['company_copyrights']; ?>">
                </div>
                <?php if(isset($errors) && array_key_exists('company_copyrights',$errors)){ echo "<span class='error'>".$errors['company_copyrights']."</span>";}?>
            </td>
                    </tr>


                <?php /* 

				<tr>
					<td valign="top" width="20%"><label><?php echo __('company_logo_label'); ?></label><span class="star">*</span></td>
								<td>
						<div class="new_input_field">
							<?php if(empty($site_settings[0]['company_logo'])) { $cl="required"; } else{ $cl=""; }  ?>
							<input type="file" name="company_logo" id="site_logo" class="imageonly <?php echo $cl;?>" title="<?php echo __('select_taxi_image'); ?>" value="<?php echo isset($site_settings) &&!array_key_exists('company_logo',$postvalue)? trim($site_settings[0]['company_logo']):$postvalue['company_logo']; ?>">

						</div>
						<?php if(!empty($site_settings[0]['company_logo'])&&file_exists(DOCROOT.SITE_LOGO_IMGPATH.$site_settings[0]['company_logo'])){ ?>
						<div class="site_logo" style="width:160px;">
							<?php   ?>
						<img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.'/'.$site_settings[0]['company_logo'].'?'.$randy;?>" width="160">
						</div>
						<?php } ?>
						<small class="sub_note"><?php echo __('logo_desc'); ?></small>
						<?php if(isset($errors) && array_key_exists('company_logo',$errors)){ echo "<span class='error'>".$errors['company_logo']."</span>";}?>

					</td>
				</tr>

				<tr>
						<td valign="top" width="20%"><label><?php echo __('site_email_logo'); ?></label><span class="star">*</span></td>
						<td>
							<div class="new_input_field">
								<input type="file" name="email_site_logo" id="email_site_logo" class="imageonly" title="<?php echo __('select_taxi_image'); ?>" value="<?php echo isset($site_settings) &&!array_key_exists('email_site_logo',$postvalue)? trim($site_settings[0]['company_logo']):$postvalue['email_site_logo']; ?>">
							</div>
						<?php if(!empty($site_settings[0]['company_logo'])&&file_exists(DOCROOT.SITE_LOGO_IMGPATH.$_SESSION['company_id'].'_email_logo.png')){ ?>
						<div class="site_logo" style="width:160px;">
							<div class="email_site_logo" style="width:160px;">
								<img src="<?php echo URL_BASE.'public/'.UPLOADS.'/site_logo/'.$_SESSION['company_id'].'_email_logo.png';?>" width="160">
							</div>
							<?php } ?>
						<small class="sub_note"><?php echo __('email_logo_desc'); ?></small>
						<?php if(isset($errors) && array_key_exists('email_site_logo',$errors)){ echo "<span class='error'>".ucfirst($errors['email_site_logo'])."</span>";}?>

					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('company_favicon_label'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field">
							<?php if(empty($site_settings[0]['company_logo'])) { $cl="required"; } else{ $cl=""; }  ?>
							<input type="file" name="company_favicon" id="site_favicon" class="imageonly <?php echo $cl;?>" title="<?php echo __('select_taxi_image'); ?>" value="<?php echo isset($site_settings) &&!array_key_exists('company_favicon',$postvalue)? trim($site_settings[0]['company_favicon']):$postvalue['company_favicon']; ?>">

						</div>
						<input type="hidden" name="favicon_old" id="favicon_old" value="<?php echo $site_settings[0]['company_favicon']; ?>" />
						<?php if(!empty($site_settings[0]['company_favicon'])&&file_exists(DOCROOT.SITE_FAVICON_IMGPATH.$site_settings[0]['company_favicon'])){ ?>
						<div class="site_logo" style="width:220px;">
						<img src="<?php echo URL_BASE.SITE_FAVICON_IMGPATH.$site_settings[0]['company_favicon'].'?'.$randy;;?>">
						</div>
						<?php } ?>
										<small class="sub_note"><?php echo __('fav_desc'); ?></small>
						<?php if(isset($errors) && array_key_exists('company_favicon',$errors)){ echo "<span class='error'>".$errors['company_favicon']."</span>";}?>
					</td>
				</tr>
*/ ?>
                    <tr>
            <td class="empt_cel">&nbsp;</td>
                        <td colspan="" class="star">*<?php echo __('required_label'); ?></td>
                    </tr>
                    <tr>
                        <td valign="top">&nbsp;</td>
                        <td style="padding-left:0px;">
                            <div class="new_button">  <input type="submit" name="editsettings_submit" title ="<?php echo __('button_update'); ?>" value="<?php echo __('button_update'); ?>"></div>
                            <div class="new_button"> <input type="reset" name="editsettings_reset" title="<?php echo __('button_reset'); ?>" value="<?php echo __('button_reset'); ?>"></div>
                        </td></tr>
                </table>

            </form>
            <br/><br/>

        </div>

        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt" ></div></div>
    </div>

</div>
<script src="<?php echo SCRIPTPATH; ?>jscolor.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
 /*$(document).ready(function() {

jQuery.validator.addMethod("decimalTwo", function(value, element) {
    return this.optional(element) || /^(\d{1,3})(\.\d{2})$/.test(value);
}, "Must be in US currency format 0.99");

jQuery("#settings").validate();

$.validator.addMethod( "imageonly", function(value,element){
var pathLength = value.length; var lastDot = value.lastIndexOf( "."); var fileType = value.substring(lastDot,pathLength).toLowerCase(); return this.optional(element) || fileType.match(/(?:.jpg|.jpeg|.png)$/) }, "Please upload image file only");

//For Field Focus
//===============
var field_val = $("#app_name").val();
$("#app_name").focus().val("").val(field_val);

var cityid= $("#site_city").val();

    if(cityid == '')
    {
        //change_city();
    }


     $("#site_country").change(function() {

            var countryid= $("#site_country").val();

          $.ajax({
            url:"<?php echo URL_BASE;?>add/getcitylist",
            type:"get",
            data:"country_id="+countryid,
            success:function(data){

            $('#city_list').html();
            $('#city_list').html(data);
            },
            error:function(data)
            {
                //alert(cid);
            }
        });
    });

});

function change_city()
{

            var countryid= $("#site_country").val();

          $.ajax({
            url:"<?php echo URL_BASE;?>add/getcitylist",
            type:"get",
            data:"country_id="+countryid,
            success:function(data){

            $('#city_list').html();
            $('#city_list').html(data);
            },
            error:function(data)
            {
                //alert(cid);
            }
        });

} */


function skip_credit_cards(val)
{
    var cancel_fare_setting = $("#cancellation_fare").val();
    if(val == 1 && cancel_fare_setting == 1) {
        alert("<?php echo __('not_enable_skip_card_option'); ?>");
        $("#skip_card_enable").prop('checked', false);
        $("#skip_card_disable").prop('checked', true);
    }
}


function check_cancelation_skip_cards(val)
{

    var skip_credit_card_val = $('input[name="skip_credit_card"]:checked').val();
    if(val == 1 && skip_credit_card_val == 1) {
        alert("<?php echo __('not_enable_skip_card_option'); ?>");
        $("#cancellation_fare").val(0);
    }
}

</script>
