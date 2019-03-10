<?php defined('SYSPATH') OR die("No direct access allowed."); 
   //For search values
   //=================
   $user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :''; 
   $status_val = isset($srch["status"]) ? $srch["status"] :''; 							
   $keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 
   
   //For CSS class deefine in the table if the data's available
   //===========================================================
   $total_company=count($all_company_list);
   
   
   $table_css=$export_excel_button="";
   if($total_company>0)
   { 
   	$table_css='class="table_border"'; 
   
   	$export_excel_button='
   	<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" 
   	onclick="location.href=\''.URL_BASE.'manage/export?keyword='.$keyword.'&status='.$status_val.'&type='.$user_type_val.'\'" />
   	';
   }?>
<div class="container_content fl clr">
<div class="cont_container mt15 mt10">
   <div class="content_middle">
      <form method="get" class="form" name="manage_model" id="manage_model" action="modelsearch">
         <table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
            <tr>
               <td valign="top"><label><?php echo __('keyword_label'); ?></label></td>
               <td >
                  <div class="ser_input_field">
                     <input type="text" name="keyword"  maxlength="55" id="keyword" value="<?php echo isset($srch['keyword']) ? trim($srch['keyword']) : ''; ?>" />
                  </div>
                  <span class="search_info_label"><?php echo __('search_by_company_modelname'); ?></span>
               </td>
               <td valign="top"><label><?php echo __('status_label'); ?></label></td>
               <td valign="top">
                  <div class="formRight">
                     <div class="selector ser_input_field" id="uniform-user_type">
                        <span><?php echo __('status_label'); ?></span>
                        <select class="select2" name="status" id="status" onchange="this.form.submit()">
                           <option value=""><?php echo __('status_label'); ?></option>
                           <?php
                              foreach ($status as $status_key => $allstatus) {
                              
                                  $selected_status = ($status_val == $status_key) ? ' selected="selected" ' : " ";
                                  ?>  
                           <option value="<?php echo $status_key; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($allstatus); ?></option>
                           <?php }  ?>
                        </select>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td valign="top"><label>&nbsp;</label></td>
               <td>
                  <!--[if IE]>
                  <input type="text" style="display: none;" disabled="disabled" size="1" />
                  <![endif]-->
                  <div class="new_button">
                     <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                  </div>
                  <div class="new_button">
                     <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manage/model'" />
                  </div>
               </td>
            </tr>
         </table>
          <div class="over_all">
          <div class="widget">
            <div class="title">
               <h6><?php echo $page_title; ?></h6>
               <div class="exp_menu_right" style="margin: 4px 3px;">
                  <div class="button greyishB"> <?php //echo $export_excel_button; ?></div>
               </div>
            </div>
            <?php if($total_company > 0){ ?>
            <div class= "overflow-block">
               <?php } ?>
               <table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
                  <?php if($total_company > 0){ ?>
                  <thead>
                     <tr>
                        <td align="center" width="100"><?php echo __('select'); ?></td>
                        <td align="center" width="100" ><?php echo __('status_label'); ?></td>
                        <td align="center" width="100"><?php echo __('sno_label'); ?></td>
                        <td align="center" width="150"><?php echo __('model_name'); ?></td>
                        <td align="center" width="100"><?php echo __('motorcompanyname'); ?></td>
                        <td align="center" width="200" ><?php echo __('action_label'); ?></td>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        $sno=$Offset; /* For Serial No */
                        
                        foreach($all_company_list as $listings) {
                        
                        //S.No Increment
                        //==============
                        $sno++;
                        
                        //For Odd / Even Rows
                        //===================
                        $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
                        
                        ?>     
                     <tr class="<?php echo $trcolor; ?>">
                        <td align="center" width="100"><input type="checkbox" name="uniqueId[]" id="trxn_chk<?php echo $listings['model_id'];?>" value="<?php echo $listings['model_id'];?>" />
                        </td>
                        <td align="center" width="100"> 
                           <?php 
                              if($listings['model_status']=='A')
                              {  $txt = __('active'); $class ="unsuspendicon";  }
                              elseif($listings['model_status']=='T')
                              { $txt = __('trash'); $class ="trashicon"; }
                              else{ $txt = __('deactive'); $class ="blockicon";   }
                              
                              
                              echo '<a  title ='.$txt.' class='.$class.'></a>' ;  
                              ?>  
                        </td>
                        <td align="center" width="100"><?php echo $sno; ?></td>
                        <td align="center" width="150"><a title="<?php echo ucfirst($listings['model_name']); ?>" href="<?php echo URL_BASE.'manage/modelinfo/'.$listings['model_id']; ?>"><?php echo isset($listings['model_name'])?wordwrap(ucfirst($listings['model_name']),30,'<br/>',1):wordwrap(ucfirst($listings['model_name']),30,'<br/>',1); ?></a></td>
                        <td align="center" width="200"><?php echo isset($listings['motor_name'])?wordwrap(ucfirst($listings['motor_name']),30,'<br/>',1):wordwrap(ucfirst($listings['motor_name']),30,'<br/>',1); ?></td>
                        <td align="center" width="20" colspan='3' ><?php echo '<a href='.URL_BASE.'edit/model/'.$listings['model_id'].' " title ="'.__("edit").'" class="editicon"></a>' ; ?></td>
                     </tr>
                     <?php } 
                        } 
                        
                        //For No Records
                        //==============
                          else{ ?>
                     <tr>
                        <td class="nodata"><?php echo __('no_data'); ?></td>
                     </tr>
                     <?php } ?>
                  </tbody>
               </table>
      </form>
      </div>
          </div>
      </div>
      </form>
	  </div>
      <div class="bottom_contenttot">
         <!--** Multiple select starts Here ** -->
         <?php if(count($all_company_list) > 0)
            { ?>
         <div class="select_all manage_fag">
             <ul>
			<li>
                            <b><a href="javascript:selectToggle(true, 'manage_model');"><?php echo __('all_label');?></a></b></li>
                        <li>
                            <span class="pr5 pl5">|</span></li>
                        <li><b><a href="javascript:selectToggle(false, 'manage_model');"><?php echo __('select_none');?></a></b></li>
             </ul>
                      
             <span class="more_selection">
               <select name="more_action" id="more_action">
                  <option value=""><?php echo __('change_status'); ?></option>
                  <option value="block_model_request" ><?php echo __('block'); ?></option>
                  <option value="active_model_request" ><?php echo __('active'); ?></option>
                  <option value="trash_model_request" ><?php echo __('trash'); ?></option>
               </select>
            </span>
         </div>
         <?php
            } ?>
         <!--** Multiple select ends Here ** -->
         <div class="pagination">
            <?php if($total_company > 0): ?>
            <?php echo $pag_data->render(); ?>
            <?php endif; ?> 
         </div>
      </div>
   
</div>
</div>
<script type="text/javascript">
   $(document).ready(function(){
    $("#keyword").focus(); 
   	
   });
</script>
<script type="text/javascript">
   function selectToggle(toggle, form) {
   	var myForm = document.forms[form];
   	for( var i=0; i < myForm.length; i++ ) { 
   	    if(toggle) {
   	        myForm.elements[i].checked = "checked";
   	    } 
   	    else
   	    { myForm.elements[i].checked = ""; }
   	}
   }
   
   
   //for More action Drop Down
   //=========================
   $('#more_action').change(function() {
   
   	//select drop down option value
   	//======================================
   	var selected_val= $('#more_action').val(); 
   	
   		//perform more action reject withdraw
   		//===================================		
   		switch (selected_val){
   
   
   				//	Current Action "reject"//block 
   				//===================================
   
   				case "block_model_request":
   				//~ var confirm_msg =  "<?php echo __('Are you sure want to block Request(s)?');?>";
   				var confirm_msg =  "<?php echo __('block_model_info');?>";
   
   				//Find checkbox whether selected or not and do more action
   				//============================================================
   				if($('input[type="checkbox"]').is(':checked'))
   				{
   			   		 var ans = confirm(confirm_msg)
   			   		 if(ans){
   						 document.manage_model.action="<?php echo URL_BASE;?>manage/block_model_request/index";
   						 document.manage_model.submit();
   					 }else{
   					 	$('#more_action').val('');
   					 }
   
   				}
   				else{
   				        //alert for no record select
   				        //=============================
   					    alert("<?php echo __('please_select_atleast_oneormore_record_todo_thisaction');?>")	
   					    $('#more_action').val('');
   				}					
   				break;
   
   
   
   				//	Current Action "approve"
   				//=========================
   
   				case "active_model_request":
   				var confirm_msg =  "<?php echo __('areyousure_wantto_activate_request');?>";
   
   
   					//Find checkbox whether selected or not and do more action
   					//============================================================
   					if($('input[type="checkbox"]').is(':checked'))
   					{
   				   		 var ans = confirm(confirm_msg)
   				   		 if(ans){
   							 document.manage_model.action="<?php echo URL_BASE;?>manage/active_model_request/index";
   							 document.manage_model.submit();
   						 }else{
   						 	$('#more_action').val('');
   						 }		
   					}
   					else{
   					        //alert for no record select
   					        //=============================
   						    alert("<?php echo __('please_select_atleast_oneormore_record_todo_thisaction');?>")	
   						    $('#more_action').val('');
   					}						
   
   				break;
   
   
                  	//	Current Action "trash"
   				//==========================
   
   				case "trash_model_request":
   				//~ var confirm_msg =  "<?php echo __('Are you sure want to move Request(s) to Trash ?');?>";
   				var confirm_msg =  "<?php echo __('block_model_info');?>";
   
   
   					//Find checkbox whether selected or not and do more action
   					//============================================================
   					if($('input[type="checkbox"]').is(':checked'))
   					{
   				   		 var ans = confirm(confirm_msg)
   				   		 if(ans){
   							 document.manage_model.action="<?php echo URL_BASE;?>manage/trash_model_request/index";
   							 document.manage_model.submit();
   						 }else{
   						 	$('#more_action').val('');
   						 }		
   					}
   					else{
   					        //alert for no record select
   					        //=============================
   						    alert("<?php echo __('please_select_atleast_oneormore_record_todo_thisaction');?>")	
   						    $('#more_action').val('');
   					}						
   
   				break;
   			}		
   		return false;  
   });
</script>