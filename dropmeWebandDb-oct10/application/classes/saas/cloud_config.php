<?php defined( 'SYSPATH' ) or die( "No direct script access." );
if ( $_SERVER['SERVER_PORT'] == "443" ) {
    DEFINE( 'PROTOCOL', 'https' );
} else {
    DEFINE( 'PROTOCOL', 'http' );
}
DEFINE( 'URL_BASE', url::base( PROTOCOL, TRUE ) );
define( 'PUBLIC_FOLDER', "public/admin" );
define( 'PUBLIC_FOLDER_IMGPATH', PUBLIC_FOLDER . '/' . 'images' );
define( 'PUBLIC_IMGPATH', URL_BASE . 'public/common/images' );
DEFINE('CLOUD_SITENAME','Taximobility');
DEFINE('SITE_COPYRIGHT','&copy;2017');
DEFINE('COPYRIGHT_YEAR','2017');
define( "REPLACE_LOGO", "##LOGO##" );
define( "REPLACE_NAME", "##NAME##" );
define( "REPLACE_USERNAME", "##USERNAME##" );
define( "REPLACE_SHAREDUSER", "##SHAREDUSER##" );
define( "REPLACE_CONTROLLERNAME", "##CONTROLLERNAME##" );
define( "REPLACE_PASSWORD", "##PASSWORD##" );
define( "REPLACE_SUBJECT", "##SUBJECT##" );
define( "RESET_LINK", "##RESET_LINK##" );
define( "REPLACE_PHONE", "##PHONE##" );
define( "REPLACE_MESSAGE", "##MESSAGE##" );
define( "REPLACE_PROMOCODE", "##PROMOCODE##" );
define( "REPLACE_OTP", "##OTP##" );
define( "REPLACE_EMAIL", "##EMAIL##" );
define( "REPLACE_SALES_PERSON_EMAIL", "##SALES_PERSONEMAIL##" );
define( "REPLACE_MOBILE", "##MOBILE##" );
define( "REPLACE_SITENAME", "##SITENAME##" );
define( "REPLACE_COPYRIGHTYEAR", "##COPYYEAR##" );
define( "REPLACE_DOMAINNAME", "##DOMAINNAME##" );
define( "REPLACE_EMAIL_LOGO", "##EMAILLOGO##" );
define( "REPLACE_SITELINK", "##SITELINK##" );
define( "REPLACE_SITEURL", "##SITEURL##" ); //
define( "REPLACE_ACTLINK", "##ACTLINK##" ); //
define( "REPLACE_REQMESSAGE", "##REQMESSAGE##" );
define( "REPLACE_ORDERLIST", "##ORDERS_LIST##" );
define( "REPLACE_DELIVERYADDRESS", "##DELIVERY_ADDRESS##" );
define( "REPLACE_ORDERID", "##ORDERID##" );
define( "REPLACE_SITEEMAIL", "##SITEEMAIL##" );
define( "REPLACE_NOOFTAXI", "##NOOFTAXI##" );
define( "REPLACE_COMPANY", "##COMPANY##" );
define( "REPLACE_CLIENT_NAME", "##CLIENT_NAME##" );
define( "REPLACE_COUNTRY", "##COUNTRY##" );
define( "REPLACE_CITY", "##CITY##" );
define( "CONTACT_NO", "##CONTACT_NO##" );
define( "REPLACE_PICKUP", "##PICKUP##" );
define( "REPLACE_MAPURl", "##MAPURL##" );
define( "REPLACE_DROP", "##DROP##" );
define( "REPLACE_CURRENCY", "##CURRENCY##" );
define( "REPLACE_PACKAGE", "##PACKAGE_NAME##" );
define( "REPLACE_TAXIS", "##NO_OF_TAXIS##" );
define( "REPLACE_CHARGE", "##CHARGE_PER_TAXI##" );
define( "REPLACE_AMOUNT", "##TOTAL_AMOUNT##" );
define( "REPLACE_COPYRIGHTS", "##COPYRIGHTS##" );
define( "REPLACE_INSTALLATIONTYPE", "##REPLACE_INSTALLATIONTYPE##" );
define( "REPLACE_ANDROID_PASSENGER_APP", "##ANDROID_PASSENGER_APP##" );
define( "REPLACE_IOS_PASSENGER_APP", "##IOS_PASSENGER_APP##" );
define( "REPLACE_ANDROID_DRIVER_APP", "##ANDROID_DRIVER_APP##" );
DEFINE( 'PRIVACY_URL', 'https://www.taximobility.com/privacypolicy.html' );
DEFINE( 'CONTACT_URL', 'https://www.taximobility.com/contact-us.html' );
DEFINE( 'FAQ_URL', 'https://www.taximobility.com/faq.html' );
DEFINE( 'REPLACE_CONTACT_URL', "##CONTACT_URL##" );
DEFINE( 'REPLACE_PRIVACY_URL', "##PRIVACY_URL##" );
DEFINE( 'REPLACE_FAQ_URL', "##FAQ_URL##" );

$template_path = "public/common/emailtemplate/";

DEFINE( "TEMPLATEPATH", $template_path );
DEFINE( 'TEMPLATE_CONTENT', '##TEMPLATE_CONTENT##' );
DEFINE('SMTP',1);
DEFINE('COMPANY_CID',0);
DEFINE('SITE_NAME','Taximobility');


?>
