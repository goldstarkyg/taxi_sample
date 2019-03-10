<?php
defined('SYSPATH') OR die("No direct access allowed.");


$correct_cname='';
$current_cname='';
$cname_status='';
if(!empty($dns_details)){
    $status=$dns_details['dns_status'];    
    $cname_status='CNAME entered correctly';
    if($status==0){
        $cname_status='CNAME entered incorrectly';
    }
    $correct_cname=$dns_details['correct_cname'];
    $current_cname=$dns_details['current_cname'];
}
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/common/js/validation/jquery.validate.js"></script>

<div style="display: none;">
    
    
    <svg version="1.1" id="connect_www" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
<style type="text/css">
	.st0{display:none;}
	.st1{display:inline;fill:#03386E;}
	.st2{display:inline;fill:#1B4F7F;}
	.st3{fill-rule:evenodd;clip-rule:evenodd;fill:#5F5370;}
	.st4{fill-rule:evenodd;clip-rule:evenodd;fill:#43B8C9;}
	.st5{fill-rule:evenodd;clip-rule:evenodd;fill:#FFDB79;}
	.st6{fill-rule:evenodd;clip-rule:evenodd;fill:#9BDDE7;}
	.st7{fill-rule:evenodd;clip-rule:evenodd;fill:#F77B55;}
	.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
	.st9{fill-rule:evenodd;clip-rule:evenodd;fill:#CCCCCC;}
	.st10{fill-rule:evenodd;clip-rule:evenodd;fill:#ADECF7;}
	.st11{fill-rule:evenodd;clip-rule:evenodd;fill:#F26D6E;}
	.st12{fill-rule:evenodd;clip-rule:evenodd;fill:#A6A9AB;}
	.st13{fill-rule:evenodd;clip-rule:evenodd;fill:#E62C34;}
	.st14{fill-rule:evenodd;clip-rule:evenodd;fill:#08C6A2;}
	.st15{fill-rule:evenodd;clip-rule:evenodd;fill:#FEFEFE;}
</style>
<g id="Background" class="st0">
	<rect id="Background_1" class="st1" width="1200" height="1200"/>
	<circle id="Background_2" class="st2" cx="600" cy="600" r="399"/>
</g>
<path class="st3" d="M210.6,333.3h775.7c12.5,0,22.7,10.3,22.7,22.7v511c0,12.4-10.2,22.6-22.7,22.6H210.6
	c-12.4,0-22.6-10.2-22.6-22.6V356C188,343.6,198.1,333.3,210.6,333.3L210.6,333.3z"/>
<g>
	<path class="st4" d="M204.4,333.3h788c9.1,0,16.6,7.5,16.6,16.6v50.8c0,0.7-0.6,1.4-1.4,1.4H188v-52.2
		C188,340.8,195.4,333.3,204.4,333.3L204.4,333.3z"/>
	<path class="st5" d="M228.5,382c8.3,0,15.1-6.8,15.1-15.1c0-8.3-6.8-15.1-15.1-15.1c-8.3,0-15.1,6.8-15.1,15.1
		C213.4,375.2,220.2,382,228.5,382L228.5,382z"/>
	<path class="st6" d="M270.6,382c8.3,0,15.1-6.8,15.1-15.1c0-8.3-6.8-15.1-15.1-15.1c-8.3,0-15.1,6.8-15.1,15.1
		C255.6,375.2,262.3,382,270.6,382L270.6,382z"/>
	<path class="st7" d="M312.8,382c8.3,0,15.1-6.8,15.1-15.1c0-8.3-6.8-15.1-15.1-15.1c-8.3,0-15.1,6.8-15.1,15.1
		C297.7,375.2,304.5,382,312.8,382L312.8,382z"/>
	<rect x="350.7" y="354.3" class="st8" width="634.9" height="28.6"/>
</g>
<path class="st8" d="M279.2,490.2h647.6c11.4,0,20.7,9.3,20.7,20.7v99.5c0,11.4-9.3,20.7-20.7,20.7H279.2
	c-11.5,0-20.8-9.3-20.8-20.7v-99.5C258.4,499.6,267.8,490.2,279.2,490.2L279.2,490.2z"/>
<rect x="515.4" y="441.3" class="st9" width="174.8" height="12.7"/>
<rect x="301.8" y="441.3" class="st9" width="174.9" height="12.7"/>
<rect x="735.1" y="441.3" class="st9" width="174.8" height="12.7"/>
<path class="st3" d="M303.5,596.9L283,529H295l10.8,39.2l3.9,14.5c0.2-0.7,1.2-5.3,3.5-14l10.6-39.7h11.9l10.1,39.4l3.4,12.9
	l3.9-13.1l11.7-39.2h11.2l-21.3,67.9h-11.9l-10.8-40.6l-2.7-11.7l-13.7,52.3H303.5z M398,596.9L377.5,529h12.1l10.8,39.2l3.7,14.5
	c0.2-0.7,1.4-5.3,3.5-14l10.8-39.7h11.7l10.3,39.4l3.4,12.9l3.9-13.1l11.7-39.2h11.2l-21.3,67.9h-11.9l-10.8-40.6l-2.7-11.7
	l-13.8,52.3H398z M492.4,596.9L472,529h11.9l10.8,39.2l3.9,14.5c0.2-0.7,1.4-5.3,3.5-14l10.8-39.7h11.7l10.3,39.4l3.2,12.9l3.9-13.1
	l11.9-39.2h11.2l-21.3,67.9h-12.1l-10.6-40.6l-2.8-11.7l-13.7,52.3H492.4z M570.7,596.9v-13.1h13.1v13.1H570.7z"/>
<path class="st10" d="M535.5,814c33.2,0,60.3-27.1,60.3-60.3c0-33.2-27.1-60.3-60.3-60.3c-33.2,0-60.3,27.1-60.3,60.3
	C475.2,786.9,502.2,814,535.5,814L535.5,814z"/>
<polygon class="st11" points="502,740.9 533.4,794.4 607.4,673.1 535.2,755.8 "/>
<rect x="655.5" y="724.4" class="st12" width="284.2" height="9"/>
<rect x="765.5" y="750.1" class="st12" width="170.5" height="9"/>
<rect x="648.4" y="775.6" class="st12" width="186.7" height="9.1"/>
<rect x="882.5" y="775.6" class="st12" width="53.4" height="9.1"/>
<rect x="682" y="750.1" class="st12" width="30.1" height="9"/>
<path class="st13" d="M171.7,668.5h214.5c13.7,0,25,11.2,25,25v197.6c0,13.7-11.2,25-25,25H171.7c-13.7,0-24.9-11.2-24.9-25V693.5
	C146.8,679.7,158,668.5,171.7,668.5L171.7,668.5z"/>
<rect x="146.8" y="752.6" class="st14" width="264.3" height="79.4"/>
<path class="st15" d="M268.9,876.6c0,3.9,0.8,6.7,2.5,8.6c1.7,2,3.8,2.9,6.4,2.9c2.5,0,4.7-1,6.3-2.9c1.7-1.9,2.6-4.8,2.6-8.8
	c0-3.7-0.9-6.6-2.6-8.5c-1.7-1.9-3.8-2.9-6.3-2.9c-2.6,0-4.7,0.9-6.4,2.9C269.7,869.9,268.9,872.7,268.9,876.6L268.9,876.6z
	 M263.7,876.6c0-5.6,1.6-9.7,4.6-12.4c2.6-2.2,5.8-3.4,9.5-3.4c4.1,0,7.5,1.4,10.2,4.1c2.6,2.7,3.9,6.5,3.9,11.3
	c0,3.9-0.6,6.9-1.8,9.1c-1.2,2.2-2.9,3.9-5.1,5.2c-2.2,1.2-4.6,1.8-7.3,1.8c-4.2,0-7.6-1.3-10.3-4
	C265,885.6,263.7,881.7,263.7,876.6L263.7,876.6z M250.6,891.7v-26.2h-4.6v-3.9h4.6v-3.2c0-2,0.2-3.5,0.5-4.6
	c0.5-1.3,1.4-2.4,2.6-3.2c1.2-0.8,3-1.2,5.2-1.2c1.4,0,3,0.1,4.8,0.5l-0.7,4.5c-1.1-0.1-2.1-0.3-3.1-0.3c-1.6,0-2.6,0.3-3.3,1
	c-0.7,0.6-1,1.9-1,3.7v2.8h5.8v3.9h-5.8v26.2H250.6z M217,891.7v-30.2h4.6v4.3c2.2-3.3,5.4-5,9.6-5c1.8,0,3.5,0.3,5,1
	c1.5,0.6,2.7,1.5,3.4,2.6c0.7,1,1.3,2.3,1.6,3.7c0.2,1,0.3,2.6,0.3,5v18.6h-5.2v-18.4c0-2.1-0.2-3.7-0.5-4.7c-0.4-1-1.2-1.8-2.2-2.4
	c-1-0.6-2.2-1-3.5-1c-2.2,0-4,0.7-5.6,2.1c-1.6,1.4-2.3,4-2.3,7.9v16.5H217z M204.1,891.7v-30.2h5.1v30.2H204.1z M204.1,855.9V850
	h5.1v5.8H204.1z M189.4,891.7v-5.8h5.8v5.8H189.4z"/>
<path class="st15" d="M280,805.2l0.7,4.6c-1.4,0.3-2.7,0.5-3.9,0.5c-1.8,0-3.3-0.3-4.3-0.9c-1-0.6-1.8-1.4-2.2-2.3
	c-0.4-1-0.6-3-0.6-6.1v-17.4h-3.8v-4h3.8v-7.4l5.1-3.1v10.5h5.2v4h-5.2v17.7c0,1.4,0.1,2.4,0.3,2.8c0.2,0.4,0.5,0.7,0.9,1
	c0.4,0.3,1,0.3,1.8,0.3C278.3,805.4,279.1,805.3,280,805.2L280,805.2z M240.4,791.8h16.8c-0.2-2.5-0.9-4.4-1.9-5.7
	c-1.6-2-3.7-2.9-6.3-2.9c-2.4,0-4.4,0.8-5.9,2.3C241.4,787,240.5,789.2,240.4,791.8L240.4,791.8z M257.1,800l5.3,0.7
	c-0.8,3.1-2.4,5.5-4.6,7.1c-2.2,1.7-5.1,2.6-8.6,2.6c-4.4,0-7.9-1.4-10.5-4.1c-2.6-2.7-3.9-6.5-3.9-11.4c0-5,1.3-9,3.9-11.8
	c2.6-2.8,6-4.2,10.1-4.2c4,0,7.3,1.4,9.9,4.1c2.6,2.8,3.9,6.7,3.9,11.6c0,0.3-0.1,0.7-0.1,1.4H240c0.2,3.3,1.2,5.8,2.9,7.6
	c1.6,1.7,3.7,2.6,6.3,2.6c1.9,0,3.5-0.5,4.8-1.4C255.3,803.8,256.4,802.2,257.1,800L257.1,800z M204.1,809.8v-30.3h4.6v4.3
	c2.2-3.3,5.4-4.9,9.6-4.9c1.8,0,3.5,0.3,5,1c1.5,0.7,2.7,1.6,3.4,2.6c0.8,1.1,1.3,2.3,1.6,3.8c0.2,1,0.3,2.6,0.3,5v18.6h-5.1v-18.4
	c0-2.1-0.2-3.7-0.6-4.7c-0.3-1-1.1-1.8-2.1-2.4c-1-0.6-2.2-0.9-3.5-0.9c-2.2,0-4.1,0.7-5.6,2.1c-1.6,1.4-2.4,3.9-2.4,7.8v16.5H204.1
	z M189.4,809.8V804h5.8v5.8H189.4z"/>
<path class="st15" d="M265.6,726v-30.2h4.6v4.3c0.9-1.5,2.2-2.7,3.7-3.6c1.6-0.9,3.3-1.4,5.4-1.4c2.2,0,4.1,0.5,5.5,1.4
	c1.4,0.9,2.4,2.2,3,3.9c2.4-3.5,5.5-5.3,9.4-5.3c3,0,5.3,0.8,6.9,2.5c1.6,1.6,2.4,4.2,2.4,7.6V726h-5.2v-19c0-2-0.1-3.5-0.5-4.4
	c-0.3-0.9-1-1.6-1.8-2.1c-0.9-0.6-1.9-0.9-3.1-0.9c-2.1,0-3.9,0.7-5.3,2.1c-1.4,1.4-2.1,3.7-2.1,6.8V726h-5.1v-19.6
	c0-2.3-0.4-4-1.3-5.2c-0.8-1.1-2.2-1.7-4.1-1.7c-1.4,0-2.8,0.4-4,1.2c-1.2,0.7-2.1,1.8-2.7,3.3c-0.5,1.4-0.8,3.5-0.8,6.3V726H265.6z
	 M236.6,711c0,3.9,0.8,6.7,2.5,8.6c1.7,2,3.8,2.9,6.4,2.9c2.5,0,4.7-1,6.3-2.9c1.7-1.9,2.6-4.8,2.6-8.8c0-3.7-0.9-6.6-2.6-8.5
	c-1.7-1.9-3.8-2.9-6.3-2.9c-2.6,0-4.7,1-6.4,2.9C237.4,704.2,236.6,707.1,236.6,711L236.6,711z M231.3,711c0-5.6,1.6-9.7,4.6-12.4
	c2.6-2.2,5.8-3.4,9.5-3.4c4.1,0,7.5,1.4,10.2,4.1c2.6,2.7,3.9,6.5,3.9,11.3c0,3.9-0.6,6.9-1.8,9.1c-1.2,2.2-2.9,3.9-5.1,5.2
	c-2.2,1.2-4.6,1.8-7.3,1.8c-4.2,0-7.6-1.3-10.3-4C232.6,719.9,231.3,716.1,231.3,711L231.3,711z M223.8,715l5,0.7
	c-0.5,3.4-2,6.1-4.2,8c-2.2,2-5,2.9-8.4,2.9c-4.1,0-7.4-1.3-9.9-4c-2.5-2.7-3.7-6.6-3.7-11.6c0-3.3,0.5-6.1,1.6-8.6
	c1-2.4,2.7-4.3,4.9-5.5c2.2-1.2,4.6-1.8,7.2-1.8c3.3,0,6,0.8,8,2.5c2.1,1.6,3.4,4,4,7.1l-5,0.7c-0.5-2-1.3-3.5-2.5-4.6
	c-1.2-1-2.7-1.6-4.4-1.6c-2.6,0-4.7,1-6.3,2.8c-1.6,1.8-2.4,4.8-2.4,8.7c0,4.1,0.7,7,2.3,8.8c1.6,1.8,3.6,2.8,6.1,2.8
	c2,0,3.7-0.6,5-1.8C222.6,719.5,223.5,717.6,223.8,715L223.8,715z M189.4,726v-5.8h5.8v5.8H189.4z"/>
</svg>

    
    
    <svg version="1.1" id="question_mart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 92 92" style="enable-background:new 0 0 92 92;" xml:space="preserve">
        <g>
            <path d="M45.386,0.004C19.983,0.344-0.333,21.215,0.005,46.619c0.34,25.393,21.209,45.715,46.611,45.377
                c25.398-0.342,45.718-21.213,45.38-46.615C91.656,19.986,70.786-0.335,45.386,0.004z M45.25,74l-0.254-0.004
                c-3.912-0.116-6.67-2.998-6.559-6.852c0.109-3.788,2.934-6.538,6.717-6.538l0.227,0.004c4.021,0.119,6.748,2.972,6.635,6.937
                C51.904,71.346,49.123,74,45.25,74z M61.705,41.341c-0.92,1.307-2.943,2.93-5.492,4.916l-2.807,1.938
                c-1.541,1.198-2.471,2.325-2.82,3.434c-0.275,0.873-0.41,1.104-0.434,2.88l-0.004,0.451H39.43l0.031-0.907
                c0.131-3.728,0.223-5.921,1.768-7.733c2.424-2.846,7.771-6.289,7.998-6.435c0.766-0.577,1.412-1.234,1.893-1.936
                c1.125-1.551,1.623-2.772,1.623-3.972c0-1.665-0.494-3.205-1.471-4.576c-0.939-1.323-2.723-1.993-5.303-1.993
                c-2.559,0-4.311,0.812-5.359,2.478c-1.078,1.713-1.623,3.512-1.623,5.35v0.457H27.936l0.02-0.477
                c0.285-6.769,2.701-11.643,7.178-14.487C37.947,18.918,41.447,18,45.531,18c5.346,0,9.859,1.299,13.412,3.861
                c3.6,2.596,5.426,6.484,5.426,11.556C64.369,36.254,63.473,38.919,61.705,41.341z"/>
        </g>
    </svg>
    <svg id="remove" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
        <g>
        <path d="M19.5 22c-.2 0-.5-.1-.7-.3L12 14.9l-6.8 6.8c-.2.2-.4.3-.7.3-.2 0-.5-.1-.7-.3l-1.6-1.6c-.1-.2-.2-.4-.2-.6 0-.2.1-.5.3-.7L9.1 12 2.3 5.2C2.1 5 2 4.8 2 4.5c0-.2.1-.5.3-.7l1.6-1.6c.2-.1.4-.2.6-.2.3 0 .5.1.7.3L12 9.1l6.8-6.8c.2-.2.4-.3.7-.3.2 0 .5.1.7.3l1.6 1.6c.1.2.2.4.2.6 0 .2-.1.5-.3.7L14.9 12l6.8 6.8c.2.2.3.4.3.7 0 .2-.1.5-.3.7l-1.6 1.6c-.2.1-.4.2-.6.2z"/>
        </g>
    </svg>
    <svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 426.67 426.67" style="enable-background:new 0 0 426.67 426.67;" xml:space="preserve">
	 <g>
	<path fill="#2CB801" d="M153.504,366.839c-8.657,0-17.323-3.302-23.927-9.911L9.914,237.265
	c-13.218-13.218-13.218-34.645,0-47.863c13.218-13.218,34.645-13.218,47.863,0l95.727,95.727l215.39-215.386
	c13.218-13.214,34.65-13.218,47.859,0c13.222,13.218,13.222,34.65,0,47.863L177.436,356.928
	C170.827,363.533,162.165,366.839,153.504,366.839z"/>
	</g>

    </svg>
    
    <svg id="close_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;">
        <g>
            <path d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                  c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                  l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                  c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
        </g>
    </svg>

    
</div>

<div class="domains_card_width_limit">
    <form action="" method="post" name="frm_manual_connect" id="frm_manual_connect">
    <div class="rgt_lay">
        <h2 class="comm_tit">Connect existing domain</h2>
        <div class="edt_domain">
            <p><?php echo $live_host_domain_name;?></p>
            <a href="add_domain?domain=<?php echo $live_host_domain_name;?>" title="Edit">Edit</a>
            <input type="hidden" name="hid_domain_name" id="hid_domain_name" value="<?php echo $live_host_domain_name;?>"/>
        </div>
    </div>
    <?php if($manual_connect=='' && $verify_connect==''){ ?>
    <div class="rgt_lay connect_godaddy">
         <div class="connect_ser">
        <h2 class="comm_tit">Connect existing domain</h2>
        <div class="godaddy_conn_det">
                <p>To connect this domain to your store, you need to log into domain control panel. Once logged in, your DNS settings will be modified and your domain will connect instantly.</p>
                <div class="connect_web">
                    <svg role="img" viewBox="0 0 16 16" class="size_100"><g><use xlink:href="#connect_www" class="size_100"></use></g></svg>
                </div>
        </div>
         </div>
        <div class="bottom_butt_sec_1">
            <div class="align_right">
                <input type="submit" value="Connect manually" class="btn_primary" name="manual_connect" id="manual_connect"/>
            </div>
        </div>
    </div>
    <?php } ?>
    </form>
<!--    <form action="" method="post" name="frm_manual_connect" id="frm_manual_connect">-->
    <?php if($manual_connect!=''){ ?>
    <div class="rgt_lay connect_godaddy">
        <div class="connect_ser">
        <h2 class="comm_tit">Connect your domain</h2>
        <div class="godaddy_conn_det">
                <p>To connect your domain, you need to log in to your domain control panel account and change your settings. Follow the domain setup step-by-step instructions.</p>
                <div class="connect_web">
                    <svg role="img" viewBox="0 0 16 16" class="size_100"><g><use xlink:href="#connect_www" class="size_100"></use></g></svg>
                </div>
                <a href="javascript:;" class="common_butt domain_instructions">Follow the domain setup instructions</a>
                
        </div>
        </div>
        <div class="connect_butt_sec_1">
            <div class="conn_bot_conn"><p> Verify the connection to make sure your domain is set up correctly.</p></div>
            <div class="align_right">
                <input type="submit" name="domain_verify_conn" id="domain_verify_conn" value="Verify connection" class="btn_primary"/>
            </div>
        </div>
    </div>
    <?php } ?>
<!--    </form>-->
    <?php //if($verify_connect!=''){ ?>
<div class="rgt_lay connect_godaddy" style="display:none">
        <div class="connect_ser">
        <h2 class="comm_tit">Connect your domain</h2>
        <div class="godaddy_conn_det">
                <p>To connect your domain, you need to log in to your domain control account and change your settings. Follow the Domain setup  step-by-step instructions.</p>
                <div class="connect_web">
                    <svg role="img" viewBox="0 0 16 16" class="size_100"><g><use xlink:href="#connect_www" class="size_100"></use></g></svg>
                </div>
                <a href="#" class="btn_primary" target="_blank">Follow the domain setup instructions</a>
                
        </div>
        </div>
        <div class="check_connection">
            <div class="domain_loading_img" id="domain_loading_img" >
                <img src="<?php echo URL_BASE;?>public/cloud_package/domain-connection-loading.gif"/>
            </div>
            <h2 class="comm_tit cname_status"><?php echo $cname_status;?></h2>
<!--            <div class="server_det">
                <h3>A RECORD <span>(@)</span><svg role="img" viewBox="0 0 16 16" class="icon_20"><g><use xlink:href="#remove" class="icon_20"></use></g></svg></h3>
                <div class="ip_addr">
                    <span>Current IP address: </span>
                    <strong>34.206.123.172</strong>
                </div>
                <div class="ip_addr_1">
                    <span>Correct IP address: </span>
                    <strong>23.227.38.32</strong>
                    <a href="#">Copy</a>
                </div>
            </div>-->
            <div class="server_det">
                <h3>CNAME Or A Record <span>(www)</span><svg role="img" viewBox="0 0 16 16" class="icon_20"><g><use xlink:href="#remove" class="icon_20"></use></g></svg></h3>
                <div class="ip_addr">
                    <span>Current value: </span>
                    <p id="current_value"></p>
                </div>
                <div class="ip_addr_1">
                    <span>Correct value: </span>
                    <p id="correct_value"></p>
<!--                    <a href="#">Copy</a>-->
                </div>
            </div>
<div class="server_det succ_det" style="margin:0;">
                <h3>CNAME <span>(www)</span><svg role="img" viewBox="0 0 16 16" class="icon_20"><g><use xlink:href="#tick" class="icon_20"></use></g></svg></h3>
                <div class="ip_addr">
<!--                    <span>Current value: </span>-->
                    <p id="current_value_success"></p>
                   
                    <a href="<?php echo URL_BASE;?>domain/domains" class="common_butt"/>OK</a>
                </div>
<!--                <div class="ip_addr_1">
                    <span>Correct value: </span>
                    <span id="correct_value_success"></span>
                    <a href="#">Copy</a>
                </div>-->
            </div>


        </div>
        <div class="connect_butt_sec_1" id="verify_again">
            <div class="conn_bot_conn"><p>Follow the <a class="domain_instructions" href="javascript:;">step-by-step guide</a> and verify your connection again.</p></div>
            <div class="align_right">
                <input type="submit" name="domain_verify_again" id="domain_verify_again" value="Verify again" class="common_butt"/>
            </div>
        </div>
    </div>
    <?php //} ?>
</div>
<div class="ui_footer_help">
    <div class="ui_footer_help_content">
        <div class="help_icon">
            <svg role="img" viewBox="0 0 53 53" class="icon_24"><g><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#question_mart" class="icon_24"></use></g></svg>
        </div>
        <div><p>Learn more about  domains<!--<a href="#">domains</a>!--> at the DropMe Help Center.</p></div>
    </div>
</div>

<div class="domain_instruction_popup_out">
    <div class="domain_instruction_popup">
        <div class="popup_top">
            <h1>Domain Setup instructions</h1>
            <a class="close_ico">
                <svg role="img" viewBox="0 0 212.982 212.982" class="icon_12"><g><use xlink:href="#close_icon" class="icon_12"></use></g></svg>
            </a>
        </div>
    <div class="popup_middle">
        <div class="popup_scroll">
             <div class="popup_content">
                 <p>Your domain is set up</p>
                 <ol>
                     <li>Log in to your domain control panel account.</li>
                     <li>Set your <strong>A</strong> record for www to verified <strong>A Record</strong>.So check verify connection and update correct value to your <strong>A Record.</strong></li>
                 </ol>
<!--                 <span>Find out how to set up domains at the taximobility Help Center</span>-->
            </div>
        </div>
    </div>
            
    </div>
</div>

<div id="fade"></div>


<script>

$(document).ready(function () {	
	
        $(function() {
        $("#domain_verify_conn,#domain_verify_again").bind("click",function() {
            var domain_verify_conn=$(this).val();
            var domain_name=$("#hid_domain_name").val();
            $('.connect_ser').hide();
            $('.connect_butt_sec_1').hide();
            $('.server_det').hide();
            $('.connect_godaddy').show();
            $('.domain_loading_img').show();
            $('.cname_status').html(''); 
		  $.ajax({
			url:"<?php echo URL_BASE;?>domain/domain_verify",
			type:"POST",
			data:"domain_verify_conn="+domain_verify_conn+"&domain_name="+domain_name,
			success:function(data){                            
                            $('.domain_loading_img').hide(); 
                            var obj = $.parseJSON(data);    
                                  
                            
                            if(obj.dns_status==1){
                            
                            $('.server_det').hide();
                            $('.succ_det').show();
                            $('#current_value_success').html("Your domain setup successfully");
                            $('#correct_value_success').html("");
                            }else{                            
                                $('.cname_status').html(obj.dns_status_name);
                                $('#current_value').html(obj.current_cname);
                                $('#correct_value').html(obj.correct_cname);
                                $('.server_det').show();
                                $('.succ_det').hide();
                                $('#verify_again').show();
                            }
                            
			},
			error:function(data)
			{
				//alert(cid);
			}
		});		
                });
                
                $('.domain_instructions').click(function(){
                    $('.domain_instruction_popup_out').show();
                    $('.domain_instruction_popup_out').addClass('popup_open');
                    $('#fade').show();
                });
                $('.close_ico').click(function(){
                    $('.domain_instruction_popup_out').hide();
                    $('.domain_instruction_popup_out').removeClass('popup_open');
                    $('#fade').hide();
                });
                
                
                });
});
</script>


