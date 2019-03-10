<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>   
<div class="walkthrough_section">
    <div class="walk_content_section">
        <div id="step_1">
            <div class="ico_sec"><span class="menu_ico">
             <svg role="img" viewBox="0 0 511.99 511.99" class="icon_24"><g><use xlink:href="#dispatch_ico" class="icon_24"></use></g></svg></span></div>
            <h1><?php echo __('walkthrough1_heading') ?></h1>
            <p><?php echo __('walkthrough1_description') ?></p>
            <a class="next next_step_2" title="Next"><?php echo __('next') ?></a>
            <a class="close_walk" title="Close"><?php echo __('close') ?></a>
        </div>
        <div id="step_2" style="display: none;">
            <div class="ico_sec">
                <span class="menu_ico"><svg role="img" viewBox="0 0 22 23" class="icon_24"><g><use xlink:href="#taxi_driver" class="icon_24"></use></g></svg></span>
            </div>
            <h1><?php echo __('walkthrough2_heading') ?></h1>
            <p><?php echo __('walkthrough2_description') ?></p>
            <a class="next next_step_3" title="Next"><?php echo __('next') ?></a>
            <a class="close_walk" title="Close"><?php echo __('close') ?></a>
        </div>
        <div id="step_3" style="display: none;">
            <div class="ico_sec">
                <span class="menu_ico">
                    <svg role="img" viewBox="0 0 24 24" class="icon_24"><g><use xlink:href="#company" class="icon_24"></use></g></svg>
                </span>
            </div>
            <h1><?php echo __('walkthrough3_heading') ?></h1>
            <p><?php echo __('walkthrough3_description') ?></p>
            <a class="next next_step_4" title="Next"><?php echo __('next') ?></a>
            <a class="close_walk" title="Close"><?php echo __('close') ?></a>
        </div>
        <div id="step_4" style="display: none;">
            <div class="ico_sec">
                <span class="menu_ico">
                    <svg role="img" viewBox="0 0 24 24" class="icon_24"><g><use xlink:href="#general_setting" class="icon_24"></use></g></svg>
                </span>
            </div>
            <h1><?php echo __('walkthrough1_heading') ?></h1>
            <p><?php echo __('walkthrough1_description') ?></p>
            <a class="next next_step_5" title="Next"><?php echo __('next') ?></a>
            <a class="close_walk" title="Close"><?php echo __('close') ?></a>
        </div>
        <div id="step_5" style="display: none;">
            <div class="ico_sec">
                <span class="menu_ico">
                    <svg role="img" viewBox="0 0 24 24" class="icon_24"><g><use xlink:href="#payments" class="icon_24"></use></g></svg>
                </span>
            </div>
            <h1><?php echo __('walkthrough1_heading') ?></h1>
            <p><?php echo __('walkthrough1_description') ?></p>
            <a class="next next_step_6" title="Next"><?php echo __('next') ?></a>
            <a class="close_walk" title="Close"><?php echo __('close') ?></a>
        </div>
        <div id="step_6" style="display: none;">
            <div class="ico_sec">
                <span class="menu_ico">
                    <svg role="img" viewBox="0 0 21 21" class="icon_24"><g><use xlink:href="#reports" class="icon_24"></use></g></svg>
                </span>
            </div>
            <h1><?php echo __('walkthrough1_heading') ?></h1>
            <p><?php echo __('walkthrough1_description') ?></p>
            <a class="next next_step_7" title="Next"><?php echo __('next') ?></a>
            <a class="close_walk" title="Close"><?php echo __('close') ?></a>
        </div>
        <div id="step_7" style="display: none;">
            <div class="ico_sec">
                <span class="menu_ico">
                    <svg role="img" viewBox="0 0 24 23" class="icon_24"><g><use xlink:href="#my_account" class="icon_24"></use></g></svg>
                </span>
            </div>
            <h1><?php echo __('walkthrough7_heading') ?></h1>
            <p><?php echo __('walkthrough7_description') ?></p>
            <a class="close_walk" title="Close"><?php echo __('close') ?></a>
        </div>
        

    </div>
</div>
<script>
$(document).ready(function(){
    $('#tour').click(function(){
        $('.walkthrough_section').show();
        $('body').addClass('walkthrough_process');
        $('#dispatch_li').addClass('walk_select');
		
		if($("#step_1").is(':visible') != true){
			$("#step_1").show();
		}
		$('#step_2,#step_3,#step_4,#step_5,#step_6,#step_7').hide();
		$('#walk_taxidrivers,#walk_company,#walk_payment,#walk_report,#walk_settings,#walk_myaccount').removeClass('walk_select');
    });
    $('#dispatch_li').click(function(){
       $('#step_1').show();
       $('#dispatch_li').addClass('walk_select');
       $('#step_2,#step_3,#step_4,#step_5,#step_6,#step_7').hide();
       $('#walk_taxidrivers,#walk_company,#walk_payment,#walk_report,#walk_settings,#walk_myaccount').removeClass('walk_select');
    }); 
    $('#walk_taxidrivers').click(function(){
        $('#step_2').show();
        $('#walk_taxidrivers').addClass('walk_select');
        $('#step_1,#step_3,#step_4,#step_5,#step_6,#step_7').hide();
        $('#dispatch_li,#walk_company,#walk_payment,#walk_report,#walk_settings,#walk_myaccount').removeClass('walk_select');
    }); 
    $('#walk_company').click(function(){
        $('#step_3').show();
        $('#walk_company').addClass('walk_select');
        $('#step_1,#step_2,#step_4,#step_5,#step_6,#step_7').hide();
        $('#walk_taxidrivers,#dispatch_li,#walk_payment,#walk_report,#walk_settings,#walk_myaccount').removeClass('walk_select');

    }); 

    $('#walk_settings').click(function(){
        $('#step_4').show();
        $('#walk_settings').addClass('walk_select');
        $('#step_1,#step_2,#step_3,#step_5,#step_6,#step_7').hide();
        $('#walk_taxidrivers,#walk_company,#dispatch_li,#walk_report,#walk_payment,#walk_myaccount').removeClass('walk_select');

    }); 
    $('#walk_payment').click(function(){
        $('#step_5').show();
        $('#walk_payment').addClass('walk_select');
        $('#step_1,#step_2,#step_3,#step_4,#step_6,#step_7').hide();
        $('#walk_taxidrivers,#walk_company,#walk_report,#dispatch_li,#walk_settings,#walk_myaccount').removeClass('walk_select');

    });
    $('#walk_report').click(function(){
        $('#step_6').show();
        $('#walk_report').addClass('walk_select');
        $('#step_1,#step_2,#step_3,#step_4,#step_5,#step_7').hide();
        $('#walk_taxidrivers,#walk_company,#walk_payment,#dispatch_li,#walk_settings,#walk_myaccount').removeClass('walk_select');

    }); 
    $('#walk_myaccount').click(function(){
        $('#step_7').show();
        $('#walk_myaccount').addClass('walk_select');
        $('#step_1,#step_2,#step_3,#step_4,#step_5,#step_6').hide();
        $('#walk_taxidrivers,#walk_company,#walk_payment,#dispatch_li,#walk_settings,#walk_report').removeClass('walk_select');

    });

    $('.next_step_2').click(function(){
        $('#step_2').show();
        $('#walk_taxidrivers').addClass('walk_select');
        $('#walk_company,#walk_payment,#walk_report').removeClass('walk_select');
        $('#step_1,#step_3,#step_4,#step_5,#step_6,#step_7').hide();
        $('#dispatch_li,#walk_company,#walk_settings,#walk_payment,#walk_report,#walk_myaccount').removeClass('walk_select');
    }); 
    $('.next_step_3').click(function(){
        $('#step_3').show();
        $('#walk_company').addClass('walk_select');
        $('#dispatch_li,#walk_taxidrivers,#walk_settings,#walk_payment,#walk_report,#walk_myaccount').removeClass('walk_select');
        $('#step_1,#step_2,#step_4,#step_5,#step_6,#step_7').hide();
    });
    $('.next_step_4').click(function(){
        $('#step_4').show();
        $('#walk_settings').addClass('walk_select');
        $('#dispatch_li,#walk_taxidrivers,#walk_company,#walk_payment,#walk_report,#walk_myaccount').removeClass('walk_select');
        $('#step_1,#step_2,#step_3,#step_5,#step_6,#step_7').hide();
    });
    $('.next_step_5').click(function(){
        $('#step_5').show();
        $('#walk_payment').addClass('walk_select');
        $('#dispatch_li,#walk_taxidrivers,#walk_company,#walk_settings,#walk_report,#walk_myaccount').removeClass('walk_select');
        $('#step_1,#step_2,#step_3,#step_4,#step_6,#step_7').hide();
    });
    $('.next_step_6').click(function(){
        $('#step_6').show();
        $('#walk_report').addClass('walk_select');
        $('#dispatch_li,#walk_taxidrivers,#walk_company,#walk_settings,#walk_payment,#walk_myaccount').removeClass('walk_select');
        $('#step_1,#step_2,#step_3,#step_4,#step_5,#step_7').hide();
    });
    $('.next_step_7').click(function(){
        $('#step_7').show();
        $('#walk_myaccount').addClass('walk_select');
        $('#dispatch_li,#walk_taxidrivers,#walk_company,#walk_settings,#walk_payment,#walk_report').removeClass('walk_select');
        $('#step_1,#step_2,#step_3,#step_4,#step_5,#step_6').hide();
    });

    $('.close_walk').click(function(){
        $('.walkthrough_section').hide();
        $('#step_1,#step_2,#step_3,#step_4,#step_5,#step_6,#step_7').hide();
        $('#dispatch_li,#walk_taxidrivers,#walk_company,#walk_settings,#walk_payment,#walk_report,#walk_myaccount').removeClass('walk_select');
		$('body').removeClass('walkthrough_process');
    }); 
});
</script>
