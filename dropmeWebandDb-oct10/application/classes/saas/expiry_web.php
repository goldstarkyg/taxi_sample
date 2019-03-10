<?php if ( !empty( $expiryTime ) && $expiryTime < $cTsatmp && CHECK_EXPIRY != 0 ) {
    $currentTime = date( 'Y-m-d H:i:s', strtotime( $currentTime ) );
    DEFINE( 'PACKAGE_UPGRADE_TIME', $currentTime );
    DEFINE( 'ACCOUNT_STATUS', 0 );
    $current_url = Request::$current->uri();
    if ( $current_url != 'admin' && $current_url != 'package/billing_gateway_confirm' && $current_url != 'package/billing_confirm' && $current_url != 'package/billing_info' && $current_url != 'package/editprofile_user/1' && $current_url != 'admin/forgot_password' && $current_url != 'package/sendmail' && $current_url != 'package/invaliddata' && $current_url != 'package/invalidrequest' && $current_url != 'package/paymentfailure' && $current_url != 'package/paymentsucess' && $current_url != 'package/confirm' && $current_url != 'package/checkout' && $current_url != 'package/upgrade_package' && $current_url != 'package/account_plan' && $current_url != 'admin/logout' && $current_url != 'admin/login' ) {
        if ( PACKAGE_TYPE != 0 ) {
            Message::error( __( 'Your current plan has been expired. kindly update your plans' ) );
        } else {
            Message::error( __( 'Your trial plan has expired. Please pick a plan.' ) );
        }
        if ( $session->get( 'email' ) != '' ) {
            Request::$current->redirect( 'package/account_plan' );
        }
        echo new View( "error/405" );
        exit;
    }
} else {
    $currentTime = date( 'Y-m-d H:i:s', strtotime( $currentTime ) );
    DEFINE( 'PACKAGE_UPGRADE_TIME', $currentTime );
    DEFINE( 'ACCOUNT_STATUS', 1 );
}


?>
