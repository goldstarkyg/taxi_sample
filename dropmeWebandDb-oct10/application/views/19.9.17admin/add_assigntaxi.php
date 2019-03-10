<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/common/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/common/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/common/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/common/js/validation/jquery.validate.js"></script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="registration_form" class="form" id="registration_form" action="" method="post" enctype="multipart/form-data" data-form="server-form">
         <table border="0" cellpadding="5" cellspacing="0" width="100%">
           
<tr>
	<?php if($_SESSION['user_type'] =='A' || $_SESSION['user_type'] =='DA' || $_SESSION['user_type'] =='S')
	{ ?>
	<?php $field_type =''; if(isset($postvalue) && array_key_exists('company_name',$postvalue)){ $field_type =  $postvalue['company_name']; } ?>
	<td valign="top" width="20%"><label><?php echo __('taxicompany'); ?></label><span class="star">*</span></td>
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
	<div id="taxicompany_list">
		<select name="company_name" id="company_name" onchange="change_info();getcountry(this.value);">
		<option value="">--Select--</option>
		<?php
		foreach($taxicompany_details as $company_list) {
			$companyName = (isset($company_list['company_brand_type']) && $company_list['company_brand_type'] == 'S') ? ucfirst($company_list["company_name"]).' - Admin' : ucfirst($company_list["company_name"]);
			  ?>
		<option value="<?php echo $company_list['cid']; ?>" <?php if($field_type == $company_list['cid']) { echo 'selected=selected'; } ?> ><?php echo $companyName; ?></option>
		<?php	} ?>
		</select>
	</div>	
		</div></div>
              <?php if(isset($errors) && array_key_exists('company_name',$errors)){ echo "<span class='error'>".ucfirst($errors['company_name'])."</span>"; }?>
        </td>      
	</tr>   
	<?php }
	else { ?>
	<tr>
	<td valign="top" width="20%"></td>
	<td>
	<div class="new_input_field">		
		<input type="hidden" name="company_name" id="company_name" value="<?php echo $_SESSION['company_id']; ?>">
		<?php if(isset($errors) && array_key_exists('company_name',$errors)){ echo "<span class='error'>".ucfirst($errors['company_name'])."</span>"; }?>
	</div>
	</td>
	</tr>		
	<?php } ?>
	
	<?php if($_SESSION['user_type'] !='M')
	{ ?>
	<tr>
	<?php $field_type =''; if(isset($postvalue) && array_key_exists('country',$postvalue)){ $field_type =  $postvalue['country']; }else{ $field_type = $country_company;} ?>
	<td valign="top" width="20%"><label><?php echo __('country_label'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
		<select onchange="change_info();"  <?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> name="countrys" disabled <?php }else{ ?> name="country" id="country" <?php } ?>>
              <option value=""><?php echo __('select_label'); ?></option>
              <?php foreach($country_details as $country_list) { ?>
              <option value="<?php echo $country_list['country_id']; ?>" <?php if($field_type == $country_list['country_id']) { echo 'selected=selected'; }elseif($field_type =='' && $country_list['country_id'] == DEFAULT_COUNTRY) { echo 'selected=selected'; } ?>><?php echo ucfirst($country_list['country_name']); ?></option>
              <?php } ?>
              </select>
<?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> <input type="hidden" name="country" id="country" value="<?php echo $field_type; ?>"> <?php } ?>
        </div>
	</div>
              <?php if(isset($errors) && array_key_exists('country',$errors)){ echo "<span class='error'>".ucfirst($errors['country'])."</span>";}?>
	</td>   	
	</tr>

	<tr>
	<?php $field_type =''; if(isset($postvalue) && array_key_exists('state',$postvalue)){ $field_type =  $postvalue['state']; }else{ $field_type = $state_company;} ?>
	<td valign="top" width="20%"><label><?php echo __('state_label'); ?></label><span class="star">*</span></td>
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
	<div id="state_list">
		<select name="state" id="state" onchange="change_city_drop('','',''); change_info();">
		<option value=""><?php echo __('select_label'); ?></option>
		<?php
		foreach($state_details as $state_list) {  ?>
		<option value="<?php echo $state_list['state_id']; ?>" <?php if($field_type == $state_list['state_id']) { echo 'selected=selected'; }elseif($state_list['state_id'] == DEFAULT_STATE) { echo 'selected=selected'; } ?> ><?php echo ucfirst($state_list["state_name"]); ?></option>
		<?php } ?>
		</select>
	</div>	
		</div></div>
              <?php if(isset($errors) && array_key_exists('state',$errors)){ echo "<span class='error'>".ucfirst($errors['state'])."</span>"; }?>
        </td>      
	</tr>


	<tr>
	<?php $field_type =''; if(isset($postvalue) && array_key_exists('city',$postvalue)){ $field_type =  $postvalue['city']; }else{ $field_type = $city_company;} ?>
	<td valign="top" width="20%"><label><?php echo __('city_label'); ?></label><span class="star">*</span></td>
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
	<div id="city_list">
		<select name="city" id="city" onchange="change_info();">
		<option value=""><?php echo __('select_label'); ?></option>
		<?php
		foreach($city_details as $city_list) {  ?>
		<option value="<?php echo $city_list['city_id']; ?>" <?php if($field_type == $city_list['city_id']) { echo 'selected=selected'; }elseif($city_list['city_id'] == DEFAULT_CITY) { echo 'selected=selected'; } ?> ><?php echo ucfirst($city_list["city_name"]); ?></option>

		<?php	} ?>
		</select>
	</div>	
		</div></div>
              <?php if(isset($errors) && array_key_exists('city',$errors)){ echo "<span class='error'>".ucfirst($errors['city'])."</span>"; }?>
        </td>      
	</tr>
	<?php } 
	else { ?>
		<input type="hidden" name="country" id="country" value="<?php echo $_SESSION['country_id']; ?>">
		<input type="hidden" name="state" id="state" value="<?php echo $_SESSION['state_id']; ?>">
		<input type="hidden" name="city" id="city" value="<?php echo $_SESSION['city_id']; ?>">
	<?php }?>
	<tr>
	<?php $field_type =''; if(isset($postvalue) && array_key_exists('driver',$postvalue)){ $field_type =  $postvalue['driver']; } ?>
	<td valign="top" width="20%"><label><?php echo __('driver'); ?></label><span class="star">*</span></td>
	<td>
	<div id="driver_list" class="assign_driver_list new_input_field">
		<select name="driver" id="driver" class="assign_txi" onchange="change_info();" size=5>
		<option value=""><?php echo __('select_label'); ?></option>
		<?php
		foreach($driver_details as $driver_list) { ?>
		<option value="<?php echo $driver_list['id']; ?>" <?php if($field_type == $driver_list['id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($driver_list["name"]); ?></option>
		<?php	} ?>
		</select>
	</div>	

              <?php if(isset($errors) && array_key_exists('driver',$errors)){ echo "<span class='error'>".ucfirst($errors['driver'])."</span>"; }?>
        </td>      
	</tr>
	<tr>
	<?php $field_type =''; if(isset($postvalue) && array_key_exists('taxi',$postvalue)){ $field_type =  $postvalue['taxi']; } ?>
	<td valign="top" width="20%"><label><?php echo __('taxi'); ?></label><span class="star">*</span></td>
	<td >
	<div id="taxi_list" class="assign_taxi_list new_input_field">
		<select name="taxi" id="taxi" class="assign_txi" onchange="change_info();" size=5>
		<option value=""><?php echo __('select_label'); ?></option>
		<?php
		foreach($taxi_details as $taxi_list) {  ?>
		<option value="<?php echo $taxi_list['taxi_id']; ?>" <?php if($field_type == $taxi_list['taxi_id']) { echo 'selected=selected'; echo 'class="active"'; } ?> ><?php echo ucfirst($taxi_list["taxi_no"]); ?></option>
		<?php	} ?>
		</select>
	</div>	
         <?php if(isset($errors) && array_key_exists('taxi',$errors)){ echo "<span class='error'>".ucfirst($errors['taxi'])."</span>"; }?>
        </td> 
	</tr>
<?php /*
	<tr>
	<td></td>
	<td><div class="button blackB"><input type="button" id="show_date" value="<?php echo __('button_add'); ?>" /></div>
	</td>
	</tr>
*/ ?>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('from_date'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="startdate" name="startdate" value="<?php if(isset($postvalue) && array_key_exists('startdate',$postvalue)){ echo $postvalue['startdate']; }?>"  />
              <?php if(isset($errors) && array_key_exists('startdate',$errors)){ echo "<span class='error' id='start_error'>".ucfirst($errors['startdate'])."</span>";}?>
              <span id="startdate_error" class="error" style="display:none;"><?php echo __('startdate_greater'); ?> </span>
	</div>
	</td>   	
	</tr>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('end_date'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="enddate" name="enddate" value="<?php if(isset($postvalue) && array_key_exists('enddate',$postvalue)){ echo $postvalue['enddate']; }?>"  />
              <?php if(isset($errors) && array_key_exists('enddate',$errors)){ echo "<span class='error'>".ucfirst($errors['enddate'])."</span>";}?>
              
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
							<input type="text" name="submit_addassigntaxi" value="form" style="display:none;"/>
                            <div class="new_button">     <input type="button" value="<?php echo __('button_back'); ?>" title="<?php echo __('button_back'); ?>"  onclick="window.history.go(-1)" /></div>
                            <div class="new_button">  <input type="submit" value="<?php echo __('btn_submit' );?>" name="submit_addassigntaxi" title="<?php echo __('btn_submit' );?>"  /></div>
                            <div class="new_button">   <input type="reset" id="reset" onclick="change_state('<?php echo DEFAULT_COUNTRY; ?>','<?php echo DEFAULT_STATE; ?>');change_city_drop('<?php echo DEFAULT_COUNTRY; ?>','<?php echo DEFAULT_STATE; ?>','<?php echo DEFAULT_CITY; ?>');" value="<?php echo __('button_reset'); ?>" onclick="tester()" title="<?php echo __('button_reset'); ?>" /></div>
                            
                            <div class="clr">&nbsp;</div>
                        </td>
                    </tr> 
 	

                </table>

        </form>
        
        
        </div>
        <div id="show_driver_information" class="assign_taxi_driver_det"></div>
    </div>
</div>  

<?php

$date = new DateTime('now', new DateTimeZone(TIMEZONE));
$current_time = $date->format('Y-m-d H:i:s');

?>

<script type="text/javascript">

$(document).ready(function(){



 $("#companyname").focus(); 
change_state('','');	
//change_citylist('','','');
change_city_drop('','','');
change_info();
$("#startdate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
minDateTime : new Date(),
stepSecond: 1
} );

$("#enddate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
minDateTime : new Date(), 
stepSecond: 1
} );



	var cityid= $("#city").val();
	if(cityid == '')
	{
		//change_citylist();	
	}

     $("#country").change(function() {

      		var countryid= $("#country").val();

		  $.ajax({
			url:"<?php echo URL_BASE;?>add/getassignstatelist",
			type:"get",
			data:"country_id="+countryid,
			success:function(data){

			$('#state_list').html();
			$('#state_list').html(data);
			change_city_drop('','','');
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    });
    

function change_citylist()
{

	var countryid= $("#country").val();
	var stateid= $("#state").val();
	var cityid= $("#city").val();
	$.ajax({
		url:"<?php echo URL_BASE;?>add/getassigntaxilist",
		type:"get",
		data:"country_id="+countryid+"&state_id="+stateid+"&city_id="+cityid,
		success:function(data){

		$('#city_list').html();
		$('#city_list').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});	
    
}
    
       
    
    	
});



 $("#startdate").change(function() {
 	change_info();
 });
 $("#enddate").change(function() {
 	change_info(); 
 });
 
 function change_city_drop(country_id,state_id,city_id){
		var countryid= $("#country").val();
		var stateid= $("#state").val();
		var cityid= $("#city").val();
		
		if(country_id != '' && state_id != '' && city_id != '') {
			countryid = country_id;
			stateid = state_id;
			cityid = city_id;
		}
		
		$.ajax({
			url:"<?php echo URL_BASE;?>add/getassigntaxilist",
			type:"get",
			data:"assigntaxi=1&country_id="+countryid+"&state_id="+stateid+"&city_id="+cityid,
			success:function(data){
			$('#city_list').html(data);
			change_driverinfo();
			change_taxiinfo();
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    } 
    
    
function change_state(country_id,state_id)
{

		var countryid= $("#country").val();
		var stateid= $("#state").val();
		if(country_id != '' && state_id != '') {
			countryid = country_id;
			stateid= state_id;
		}

		  $.ajax({
			url:"<?php echo URL_BASE;?>add/getassignstatelist",
			type:"get",
			data:"country_id="+countryid+"&state_id="+stateid,
			success:function(data){

			$('#state_list').html();
			$('#state_list').html(data);
			
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    
}
 
function change_info()
{

      		var countryid = $("#country").val();
      		var stateid = $("#state").val();
      		var city_id = $("#city").val();
      		var company_name = $("#company_name").val();

      		var driver_id ='';
      		var taxi_id ='';
     		if( $("#driver").val() !='' && $("#driver").val() !=null )
     		{
	     		driver_id = $("#driver").val();
     		}
     		if( $("#taxi").val() !='' && $("#taxi").val() !=null )
     		{
	     		taxi_id = $("#taxi").val();
     		}

     		var startdate = $("#startdate").val();
     		var enddate = $("#enddate").val();
		var page_no = '1';
		  $.ajax({
			url:"<?php echo URL_BASE;?>add/getassignedlist",
			type:"get",
			data:"country_id="+countryid+"&state_id="+stateid+"&city_id="+city_id+"&company_name="+company_name+"&driver_id="+driver_id+"&taxi_no="+taxi_id+"&startdate="+startdate+"&enddate="+enddate+"&page="+page_no,
			success:function(data){
			$('#show_driver_information').html();
			$('#show_driver_information').html(data);
			change_driverinfo();
			change_taxiinfo();
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    
}

function pagin_info(page_no)
{

      		var countryid = $("#country").val();
      		var stateid = $("#state").val();
      		var city_id = $("#city").val();
      		var company_name = $("#company_name").val();

      		var driver_id ='';
      		var taxi_id ='';
     		if( $("#driver").val() !='' && $("#driver").val() !=null )
     		{
	     		driver_id = $("#driver").val();
     		}
     		if( $("#taxi").val() !='' && $("#taxi").val() !=null )
     		{
	     		taxi_id = $("#taxi").val();
     		}

     		var startdate = $("#startdate").val();
     		var enddate = $("#enddate").val();

		  $.ajax({
			url:"<?php echo URL_BASE;?>add/getassignedlist",
			type:"get",
			data:"country_id="+countryid+"&state_id="+stateid+"&city_id="+city_id+"&company_name="+company_name+"&driver_id="+driver_id+"&taxi_no="+taxi_id+"&startdate="+startdate+"&enddate="+enddate+"&page="+page_no,
			success:function(data){
			$('#show_driver_information').html();
			$('#show_driver_information').html(data);
			change_driverinfo();
			change_taxiinfo();
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    
}

function change_driverinfo()
{
      		var countryid = $("#country").val();
      		var state_id = $("#state").val();
      		var city_id = $("#city").val();
      		var company_name = $("#company_name").val();
      		var driver_id ='';
      		if( $("#driver").val() !='' && $("#driver").val() !=null )
     		{
	     		driver_id = $("#driver").val();
     		}
     		
		  $.ajax({
			url:"<?php echo URL_BASE;?>add/getdriverlist",
			type:"get",
			data:"country_id="+countryid+"&state_id="+state_id+"&city_id="+city_id+"&company_name="+company_name+"&driver_id="+driver_id+"&type=1",
			success:function(data){
			$('#driver_list').html('');
			$('#driver_list').html(data);
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    
}

function change_taxiinfo()
{
      		var countryid = $("#country").val();
      		var state_id = $("#state").val();
      		var city_id = $("#city").val();
      		var company_name = $("#company_name").val();
      		var taxi_id ='';
    		if( $("#taxi").val() !='' && $("#taxi").val() !=null )
     		{
	     		taxi_id = $("#taxi").val();
     		}
		  $.ajax({
			url:"<?php echo URL_BASE;?>add/gettaxilist",
			type:"get",
			data:"country_id="+countryid+"&state_id="+state_id+"&city_id="+city_id+"&company_name="+company_name+"&taxi_id="+taxi_id+"&type=1",
			success:function(data){
			$('#taxi_list').html();
			$('#taxi_list').html(data);
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    
}


var tester = function () {
	$('#taxi').html('');
	$('#driver').html('');
};

function getcountry(company_id)
{
	$.ajax({
		url:"<?php echo URL_BASE;?>add/getcountry",
		type:"get",
		data:"company_id="+company_id,
		success:function(data){
			var res = data.split("~");
			$('#country').html(res[0]);
			change_country(res[1],res[2]);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});	
}

function change_country(state_id,city_id)
{
	var countryid= $("#country").val();

	$.ajax({
		url:"<?php echo URL_BASE;?>add/getlist_state",
		type:"get",
		data:"country_id="+countryid+"&state_id="+state_id,
		success:function(data){
			$('#state_list').html(data);
			change_city_drop(countryid,state_id,city_id);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
}

function change_city(country_id,state_id,city_id)
{
	var stateid= $("#state").val();
	var countryid= $("#country").val();
	var cityid= $("#city").val();
	if(country_id != '' && state_id != '' && city_id != '') {
		countryid = country_id;
		stateid = state_id;
		cityid = city_id;
	}
	  $.ajax({
		url:"<?php echo URL_BASE;?>add/getcitylist",
		type:"get",
		data:"country_id="+countryid+"&state_id="+stateid+"&city_id="+cityid,
		success:function(data) {
			$('#city_list').html();
			$('#city_list').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
}

</script>
