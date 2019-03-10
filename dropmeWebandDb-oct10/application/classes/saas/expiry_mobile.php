<?php
if ( !empty( $expiryTime ) && $expiryTime < $cTsatmp && CHECK_EXPAIRY != 0 ) {
    require Kohana::find_file('classes/controller', 'ndotcrypt');
    $headers = apache_request_headers();  
    $mobile_data_ndot_crypt=new NDOT_MCrypt();
    $mobile_decryptdata='';
    $additional_param=[];
    
    $message = array(
         "message" => "Your host has been expired",
        "status" => 2 
    );
    if(isset($headers['Authorization'])){  
         $additional_param['header_authorization']=$headers['Authorization'];
        
        
    }
    $mobile_data_ndot_crypt->encrypt_encode_json($message, $additional_param);
    exit;
}

?>
