<?php defined('SYSPATH') OR die("No direct access allowed."); 
	echo html::script('public/common/ckeditor/ckeditor.js'); 
   
	$dynamic_language_array = DYNAMIC_LANGUAGE_ARRAY;
    if(isset($postvalue['selected_language']) && $postvalue['selected_language']!=""){
        $selected_language = $postvalue['selected_language'];
    }else{
        $selected_language = SELECTED_LANGUAGE;
    }
    $selected_language_name = ucfirst($dynamic_language_array[$selected_language]);
    $dynamin_lang_input = '<input type="hidden" class="dynamic_lang" name="dynamic_lang" value="'.$selected_language.'">';  
    $confirm_message = __('are_u_confirm_template_changes');
    ?>
    
    <form name="edit_sms_template" id="edit_sms_template" class="form" action="" method="post" enctype="multipart/form-data" onsubmit="return confirm('<?php echo  $confirm_message ?>');">
	<div class="select_language email_templatelang">
		<label><?php echo __('select_language'); ?><span class="star">*</span></label>
			<div class="formRight">
			<div class="selector" id="uniform-user_type">
			<div id="taxicompany_list">
				<select class="required" id="selected_language" name="selected_language">
					
					<?php foreach($dynamic_language_array as $key => $value){ 
						
					   $selected = ($selected_language == $key)?"selected='selected'":"";
					?>
					<option value="<?php echo $key; ?>" <?php echo $selected; ?> ><?php echo ucfirst($value)?></option>
					<?php } ?>
				</select>
			</div>
			</div>
			<?php if(isset($errors) && array_key_exists('selected_language',$errors)){  $dynamic_style = "style='display:block'"; }else{ $dynamic_style = "style='display:none'"; } ?>
			<em <?php echo $dynamic_style; ?> class="errorvalid language_error" ><?php echo __('select_language'); ?></em>
		</div>
	</div>  

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">   
      <div class="content_middle">
            <table border="0" cellpadding="5" cellspacing="0" width="100%">
               <tr>
                  <td valign="top" width="20%"><label><?php echo __('email_title'); ?></label><span class="star">*</span></td>
                  <td>
                     <div class="new_input_field2">
                        <label><?php echo $email_template[0]['email_title']; ?></label>
                     </div>
                  </td>
               </tr>
               </table>
               <?php
			# Language based subject & description
			
			foreach($dynamic_language_array as $key => $value){
					$description_name = "description_".$key;
					$description_value = $email_template[0][$description_name];
					$subject_name = "subject_".$key;
					$subject_value = $email_template[0][$subject_name]; ?>
				<table border="0" cellpadding="5" cellspacing="0" width="100%" class="langauge_description" id="<?php echo $key ?>">
					<tr>
					  <td valign="top" width="20%"><label><?php echo __($subject_name); ?></label><span class="star">*</span></td>
					  <td>
						 <div class="new_input_field2">
							<input type="text" name="<?php echo $subject_name ?>" value="<?php echo $subject_value; ?>" maxlength="100">
						 </div>
						 <?php if(isset($errors) && array_key_exists($subject_name,$errors)){ ?> 
							<em><?php echo __($subject_name).' '.__('must_not_empty'); ?></em>	 
						<?php } ?>
					  </td>
				   </tr>
					<tr>
					  <td valign="top" width="20%"><label><?php echo __($description_name); ?></label><span class="star">*</span></td>
					  <td>
						<div class="new_input_field2">
							<textarea name="<?php echo $description_name ?>" class="ckeditor"  id="<?php echo $description_name ?>" title="<?php echo __('description'); ?>" rows="7" cols="35"><?php echo $description_value;  ?></textarea>
							
						</div>
						<?php if(isset($errors) && array_key_exists($description_name,$errors)){ ?> 
							<em><?php echo __($description_name).' '.__('must_not_empty'); ?></em>	 
						<?php } ?>						
					  </td>
				   </tr>
				</table>
			<?php } ?>              
               
               
            <table border="0" cellpadding="5" cellspacing="0" width="100%">
				<tr>
                  <td valign="top" width="20%"><label><?php echo __('email_template_status'); ?></label><span class="star">*</span></td>
                  <td>
                     <div class="new_input_field2">
						<label class="radio-inline">
						<input type="radio" name="template_status" value="1" <?php if($email_template[0]['status'] == 1) { ?>checked<?php } ?>><?php echo __("enable"); ?></radio></label>
						<label class="radio-inline">
						<input type="radio" name="template_status" value="0" <?php if($email_template[0]['status'] == 0) { ?>checked<?php } ?>><?php echo __("disable"); ?></radio></label>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="empt_cel">&nbsp;</td>
                  <td colspan="" class="star">*<?php echo __('required_label'); ?></td>
               </tr>
               <tr>
                  <td>&nbsp;</td>
                  <td colspan="">
                     <br />
                     <div class="new_button"><input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
					  <div class="new_button"><input type="submit" value="<?php echo __('submit' );?>" name="submit_edit_template" title="<?php echo __('submit' );?>" /></div>
                     <div class="new_button">   <input type="button" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" onclick="resetvalues()" /></div>
                    
                     <div class="clr">&nbsp;</div>
                  </td>
               </tr>
            </table>
         </form>
      </div>
      <div class="content_bottom">
         <div class="bot_left"></div>
         <div class="bot_center"></div>
         <div class="bot_rgt"></div>
      </div>
   </div>
</div>
<script>
$(document).ready(function(){
	$(".langauge_description").each(function(){			
		var selectedId = $("#selected_language").val();
		$("#"+selectedId).css("visiblity", "visible");
		// make others invisible
		$(".langauge_description").each(function(){			
			var id = this.id;
			if(id != selectedId){
				$("#"+id).css("display", "none");
			}
		});
	}); 
		
	$("#selected_language").change(function(){
		var selectedId = this.value;
		$("#"+selectedId).css("display", "block");
		// make others invisible
		$(".langauge_description").each(function(){			
			var id = this.id;
			if(id != selectedId){
				$("#"+id).css("display", "none");
			}
		});
	});
});
</script>
