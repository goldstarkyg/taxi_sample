<?php  defined('SYSPATH') OR die('No direct access allowed.');

return array(
    /**
     * Configuration Name	 
     *
     */
   'default' => array(
        'options' => array(
            // authentication           
            'CRM_HOST_PROFILE_UPDATE_URL'=>'http://192.168.1.35:1212/CRM_Live/api/lastlogin_profile_accesscount_update',
            'CRM_HOST_PORT'=>'1212',
            'authentication_accesskey'=>'NdotTrail2017DateUpdate',
        )
    ),
    'alternate' => array(
        'options' => array(
            // authentication           
            'CRM_HOST_PROFILE_UPDATE_URL'=>'http://192.168.1.35:1212/CRM_Live/api/PaymentResponse',
            'CRM_HOST_PORT'=>'1212',
            'authentication_accesskey'=>'NdotTrail2017DateUpdate',
        )
    )
);
