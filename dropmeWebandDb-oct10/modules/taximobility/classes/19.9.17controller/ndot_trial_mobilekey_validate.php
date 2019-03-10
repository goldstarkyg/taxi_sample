<?php

$headers = apache_request_headers();
$mobile_data_ndot_crypt = new NDOT_MCrypt();
//~ print_r($headers);exit;
//Get Header Authorization key
if (isset($headers['Authorization'])) {
    $additional_param['header_authorization'] = $headers['Authorization'];

    $company_api_key = $headers['Authorization'];


    if ($company_api_key == '') {
        $message = array("message" => __('api key not given'), "status" => -8);
        $mobile_data_ndot_crypt->encrypt_encode_json($message, $additional_param);
        exit;
    }

	$api_key_encrypt='FNpfuspyEAzhjfoh2ONpWK0rsnClVL6OCaasqDQtWdI=';

    if ($method != 'check_companydomain') {      		            
        

        if ($api_key_encrypt == '') {
            $message = array("message" => "please contact support team", "status" => -8);
            $mobile_data_ndot_crypt->encrypt_encode_json($message, $additional_param);
            exit;
        }
        if ($company_api_key != $api_key_encrypt) {
            $message = array("message" => __('invalid_company'), "status" => -8);
            $mobile_data_ndot_crypt->encrypt_encode_json($message, $additional_param);
            exit;
        }
    }

    if ($mobile_encodeddata != '') {
        $mobile_decryptdata = $mobile_data_ndot_crypt->decrypt_decode($mobile_encodeddata);
    }
    
}else{
     $message = array("message" => __('invalid_company'), "status" => -8);
            $mobile_data_ndot_crypt->encrypt_encode_json($message, $additional_param);
            exit;
}
?>
