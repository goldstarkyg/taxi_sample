<?php defined('SYSPATH') OR die("No direct access allowed.");
//For search values
//=================
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :'';
$status_val = isset($srch["status"]) ? $srch["status"] :'';
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :'';
//For CSS class deefine in the table if the data's available
//===========================================================
$total_users = count($all_user_list);

$table_css = $export_excel_button="";
?>

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
		<form method="get" class="form" name="frmusers" id="frmusers" action="company_passenger_search">
			<table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
                    <tr>
                        <td valign="top"><label><?php echo __('keyword_label'); ?></label></td>
                        <td >
                            <div class="ser_input_field">
                                <input type="text" name="keyword"  maxlength="256" id="keyword" value="<?php echo isset($srch['keyword']) ? trim($srch['keyword']) : ''; ?>" />
                            </div>
                            <span class="search_info_label"><?php echo __('srch_info_passenger_keyword'); ?></span>
                        </td>
                         <?php /*
                        <td valign="top">
                            <label><?php echo __('usertype_label'); ?></label>
                        </td>
                       <td valign="top">
                            <div class="formRight">
                                <select class="select2" name="user_type" id="user_type" onchange="this.form.submit()">
                                <option value=""><?php echo __('select_label'); ?></option>    
                                    <?php
                                    $selected_user_type = "";
                                    foreach ($filter as $user_type_key => $usertype_text) {
                                        $selected_user_type = ($user_type_key == $user_type_val) ? " selected='selected' " : "";
                                        ?>
                                        <option value="<?php echo $user_type_key; ?>"  <?php echo $selected_user_type; ?>><?php echo $usertype_text; ?></option>
                                    <?php }  ?>
                                </select>
                            </div> 
                        </td> */ ?>
                          
                        <td valign="top"><label><?php echo __('status_label'); ?></label></td>
                        <td valign="top">						
						<div class="selector ser_input_field" id="uniform-user_type">
                            <select class="select2" name="status" id="status" onchange="this.form.submit()">
                            <option value=""><?php echo __('select_label'); ?></option> 
                                
                                <?php
                                foreach ($status as $status_key => $allstatus) {

                                    $selected_status = ($status_val == $status_key) ? ' selected="selected" ' : " ";
                                    ?>  
                                    <option value="<?php echo $status_key; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($allstatus); ?></option>
                                <?php }  ?>
                            </select>
                            </div>
                        </td>
                                                                   
                        </tr>
                        <tr>
                        <td valign="top"><label>&nbsp;</label></td>
                        <td>
                            <div class="new_button">
                                <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                            </div>
                            <div class="new_button">
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>company/passengers'" />
                            </div>
                        </td>
                    </tr>
                </table>
				<div class="over_all">
                  <div class="widget"  style="margin-bottom:0px !important;">
                        <div class="title"><h6><?php echo $page_title; ?></h6>
                           <div class="exp_menu_right">
                                <?php  if($total_users > 0){ $export_table_count=count($all_list); include_once(APPPATH.'views/admin/export_menu.php'); } ?>
                           </div>    
                        </div>
                  </div>
                        
<?php if($total_users > 0){ ?>
	<div class="overflow-block"><?php } ?>
	<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if ($total_users > 0) { ?>
		<thead>
		    <tr>
		<?php if($_SESSION['user_type'] =='C'){ ?><td align="left" width="5%"></td><?php } ?>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" width="15%"><?php echo ucfirst(__('name')); ?></td>
		<td align="left" width="10%"><?php echo __('email_label'); ?></td>
		<td align="left" width="10%"><?php echo __('phone'); ?></td>
		<?php /*<td align="left" width="20%"><?php echo __('address'); ?></td>*/ ?>
		<td align="left" width="10%"><?php echo __('created_date'); ?></td>
		<td align="left" width="10%"><?php echo __('account_type'); ?></td>
		<td align="left" width="10%"><?php echo __('status_label'); ?></td>
		<?php if($_SESSION['user_type'] =='C'){ ?><td align="left" width="10%" ><?php echo __('action_label'); ?></td><?php }?>
		    </tr>
		</thead>
                  <tbody>               
                         
		<?php

		$sno=$Offset; /* For Serial No */
		//print_r($all_user_list);
		 foreach($all_user_list as $listings) {
		 
		 //S.No Increment
		 //==============
		 $sno++;
         $country_code = (!empty($listings['country_code'])) ? $listings['country_code'].'-' : '';
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
		 
        ?>     

	<tr class="<?php echo $trcolor; ?>">

		<?php if($_SESSION['user_type'] =='C'){ ?>
		<td align="center"><input type="checkbox" name="uniqueId[]" id="trxn_chk<?php echo $listings['id'];?>" value="<?php echo $listings['id'];?>" /></td>
		<?php } ?>
		<td align="center"><?php echo $sno; ?></td>
		<td><a href="<?php echo URL_BASE.'manage/passengerinfo/'.$listings['id'];?>"><?php echo wordwrap(ucfirst($listings['name']),30,'<br/>',1); ?></a></td>
		<td><?php echo wordwrap($listings['email'],25,'<br />',1); ?></td>
		<td align="center"><?php echo $country_code.$listings['phone']; ?></td>
		<!--<td><?php echo wordwrap($listings['address'],25,'<br />',1); ?></td>-->
		<td><?php echo wordwrap(Commonfunction::getDateTimeFormat($listings['created_date'],1),25,'<br />',1); ?></td>
		<td><?php echo __('passenger'); ?></td>

		<td align="center"> 
		<?php 
		if($listings['user_status']=='A')
		{  $txt = __('active'); $class ="unsuspendicon";    }
		elseif($listings['user_status']=='T')
		{$txt = "Trash"; $class ="trashicon";}
		else{  $txt = __('blocked'); $class ="blockicon";      }


		echo '<a href="javascript:void(0);" title ='.$txt.' class='.$class.'></a>' ;  
		?>
		</td> 
		
		<?php if($_SESSION['user_type'] =='C'){ ?><td align="center" width="20" colspan='3'>
		<?php echo '<br/><a href='.URL_BASE.'transaction/companytransaction_list/all/?manager_id=&taxiid=All&driver_id=All&passengerid='.$listings['id'].'&startdate=&enddate=&transaction_id=&payment_type=All&search_user=Search" title ="'.__("view_transaction").'" class="transactionicon"></a>' ; ?>
		</td>
		<?php } ?>

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

                    <?php if ($total_users > 0) { ?>
                        </div>
                            <?php } ?>
</form>
</div>
</div>
</div>
 <div class="bottom_contenttot">
<!--** Multiple select starts Here ** -->
<?php if(count($all_user_list) > 0)
       { ?>
          <?php if($_SESSION['user_type'] =='C'){ ?>
          <div class="select_all">
              <ul><li>
                <b><a href="javascript:selectToggle(true, 'frmusers');"><?php echo __('all_label');?></a></b></li>
                  <li><span class="pr5 pl5">|</span></li><li><b><a href="javascript:selectToggle(false, 'frmusers');"><?php echo __('select_none');?></a></b></li></ul>

              <span class="more_selection">
                    <select name="more_action" id="more_action">
                        <option value=""><?php echo __('change_status'); ?></option>
                        <option value="block_passenger_request" ><?php echo __('block'); ?></option>
                        <option value="active_passenger_request" ><?php echo __('active'); ?></option>
                        <option value="trash_passenger_request" ><?php echo __('trash'); ?></option>
                    </select>
                 </span>
	        </div>
        <?php
       } } ?>
<!--** Multiple select ends Here ** -->


<div class="pagination">
		<?php if($total_users > 0): ?>
		 <?php echo $pag_data->render(); ?>
		<?php endif; ?> 
  </div>
 </div>
</div>
</div>
<script type="text/javascript" language="javascript">
//For Delete the users
//=====================
function frmdel_user(userid)
{
   var answer = confirm("<?php echo __('delete_alert2');?>");
    
	if (answer){
        window.location="<?php echo URL_BASE;?>company/delete_passenger/"+userid;
    }
    
    return false;  
}  
function frmblk_user(userid,status)
{   
    window.location="<?php echo URL_BASE;?>admin/blkunblk_passenger/"+userid+"/"+status;    
    return false;  
}  

</script>
<script type="text/javascript">
 $(document).ready(function(){
	$("input[type='text']:first", document.forms[0]).focus();
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

					case "block_passenger_request":
					var confirm_msg =  "<?php echo __('areyou_sure_wanttoblock_request');?>";
	
					//Find checkbox whether selected or not and do more action
					//============================================================
					if($('input[type="checkbox"]').is(':checked'))
					{
				   		 var ans = confirm(confirm_msg)
				   		 if(ans){
							 document.frmusers.action="<?php echo URL_BASE;?>company/block_passenger_request";
							 document.frmusers.submit();
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

					case "active_passenger_request":
					var confirm_msg =  "<?php echo __('areyousure_wantto_activate_request');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.frmusers.action="<?php echo URL_BASE;?>company/active_passenger_request";
								 document.frmusers.submit();
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

					case "trash_passenger_request":
					var confirm_msg =  "<?php echo __('are_yousure_wanttomove_request_to_trash');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.frmusers.action="<?php echo URL_BASE;?>company/trash_passenger_request";
								 document.frmusers.submit();
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
