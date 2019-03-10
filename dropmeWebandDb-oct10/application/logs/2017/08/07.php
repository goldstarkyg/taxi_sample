<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-07 03:27:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-07 03:27:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-07 06:58:01 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 06:58:01 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:12:09 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$evening_charge ~ MODPATH/taximobility/classes/controller/taximobilitytdispatch.php [ 105 ]
2017-08-07 07:12:09 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$evening_charge ~ MODPATH/taximobility/classes/controller/taximobilitytdispatch.php [ 105 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytdispatch.php(105): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/vhosts...', 105, Array)
#1 [internal function]: Controller_TaximobilityTdispatch->action_get_citymodel_fare_details()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:49:54 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 07:49:54 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:50:10 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 07:50:10 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:51:55 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 07:51:55 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:52:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_TaximobilityTdispatch' not found ~ APPPATH/classes/model/tdispatch.php [ 2 ]
2017-08-07 07:52:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_TaximobilityTdispatch' not found ~ APPPATH/classes/model/tdispatch.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-08-07 07:53:03 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 07:53:03 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:53:07 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 07:53:07 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:54:01 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 07:54:01 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:55:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_Taximobilitymobileapi118' not found ~ APPPATH/classes/model/mobileapi118.php [ 13 ]
2017-08-07 07:55:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_Taximobilitymobileapi118' not found ~ APPPATH/classes/model/mobileapi118.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-08-07 07:55:51 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 07:55:51 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:56:03 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 07:56:03 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 07:56:57 --- ERROR: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
2017-08-07 07:56:57 --- STRACE: ErrorException [ 8 ]: Undefined index: card_holder_name ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5342 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(5342): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 5342, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-08-07 08:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 08:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 09:33:09 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5283 ]
2017-08-07 09:33:09 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5283 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/vhosts/loadtest/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main}
2017-08-07 09:33:09 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6226 ]
2017-08-07 09:33:09 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6226 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/vhosts/loadtest/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main}
2017-08-07 10:20:37 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-07 10:20:37 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-07 10:20:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-07 10:20:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-07 12:04:52 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-07 12:04:52 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-07 12:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 12:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 12:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 12:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 13:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 13:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 13:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 13:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 13:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 13:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 13:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 13:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 13:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 13:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 13:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 13:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 14:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 14:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 14:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 14:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 14:25:03 --- ERROR: ErrorException [ 2 ]: fopen(/var/www/vhosts/loadtest/public/loadtest/passenger/thumb_750737538431662.jpg): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2175 ]
2017-08-07 14:25:03 --- STRACE: ErrorException [ 2 ]: fopen(/var/www/vhosts/loadtest/public/loadtest/passenger/thumb_750737538431662.jpg): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2175 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/var/www/...', '/var/www/vhosts...', 2175, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2175): fopen('/var/www/vhosts...', 'w')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-07 14:25:45 --- ERROR: ErrorException [ 2 ]: fopen(/var/www/vhosts/loadtest/public/loadtest/passenger/thumb_750737538431662.jpg): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2175 ]
2017-08-07 14:25:45 --- STRACE: ErrorException [ 2 ]: fopen(/var/www/vhosts/loadtest/public/loadtest/passenger/thumb_750737538431662.jpg): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2175 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/var/www/...', '/var/www/vhosts...', 2175, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2175): fopen('/var/www/vhosts...', 'w')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-07 14:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 14:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:37:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-07 15:37:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-07 15:37:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-07 15:37:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-07 15:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 15:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-07 15:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-07 16:07:18 --- ERROR: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: cannot use the part (stateinfo of stateinfo.cityinfo.1) to traverse the element ({stateinfo: [ { state_id: 1, state_name: "Tamil Nadu", state_countryid: 1, state_status: "A", default: 0, cityinfo: [ { city_id: 1, city_name: "Coimbatore", zipcode: "654677", city_status: "A", city_countryid: 1, city_stateid: 1, city_model_fare: 15, default: 1 } ] }, { state_id: 2, state_name: "Madhya Pradesh", state_countryid: 1, state_status: "A", default: 1, cityinfo: [ { city_id: 2, city_name: "kadappa", zipcode:  ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Update.php [ 143 ]
2017-08-07 16:07:18 --- STRACE: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: cannot use the part (stateinfo of stateinfo.cityinfo.1) to traverse the element ({stateinfo: [ { state_id: 1, state_name: "Tamil Nadu", state_countryid: 1, state_status: "A", default: 0, cityinfo: [ { city_id: 1, city_name: "Coimbatore", zipcode: "654677", city_status: "A", city_countryid: 1, city_stateid: 1, city_model_fare: 15, default: 1 } ] }, { state_id: 2, state_name: "Madhya Pradesh", state_countryid: 1, state_status: "A", default: 1, cityinfo: [ { city_id: 2, city_name: "kadappa", zipcode:  ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Update.php [ 143 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Update.php(143): MongoDB\Driver\Server->executeBulkWrite('loadtest.csc', Object(MongoDB\Driver\BulkWrite), Object(MongoDB\Driver\WriteConcern))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/UpdateOne.php(78): MongoDB\Operation\Update->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(828): MongoDB\Operation\UpdateOne->execute(Object(MongoDB\Driver\Server))
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(524): MongoDB\Collection->updateOne(Array, Array, Array)
#4 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(353): Kohana_MangoDB->_call('updateOne', Array, Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilityedit.php(1545): Kohana_MangoDB->updateOne('csc', Array, Array, Array)
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityedit.php(722): Model_TaximobilityEdit->editcity('2', Array)
#7 [internal function]: Controller_TaximobilityEdit->action_city()
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-07 16:14:48 --- ERROR: ErrorException [ 8 ]: Undefined index: city_name ~ MODPATH/taximobility/classes/model/taximobilityedit.php [ 1481 ]
2017-08-07 16:14:48 --- STRACE: ErrorException [ 8 ]: Undefined index: city_name ~ MODPATH/taximobility/classes/model/taximobilityedit.php [ 1481 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilityedit.php(1481): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 1481, Array)
#1 [internal function]: Model_TaximobilityEdit::checkcityname('kadappa', '1', '1', '2')
#2 /var/www/vhosts/loadtest/system/classes/kohana/validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityedit.php(721): Kohana_Validation->check()
#4 [internal function]: Controller_TaximobilityEdit->action_city()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main}
2017-08-07 16:15:09 --- ERROR: ErrorException [ 8 ]: Undefined index: city_name ~ MODPATH/taximobility/classes/model/taximobilityedit.php [ 1481 ]
2017-08-07 16:15:09 --- STRACE: ErrorException [ 8 ]: Undefined index: city_name ~ MODPATH/taximobility/classes/model/taximobilityedit.php [ 1481 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilityedit.php(1481): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 1481, Array)
#1 [internal function]: Model_TaximobilityEdit::checkcityname('kadappa', '1', '1', '2')
#2 /var/www/vhosts/loadtest/system/classes/kohana/validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityedit.php(721): Kohana_Validation->check()
#4 [internal function]: Controller_TaximobilityEdit->action_city()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main}
2017-08-07 16:27:21 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ')' ~ MODPATH/taximobility/classes/model/taximobilityedit.php [ 1549 ]
2017-08-07 16:27:21 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ')' ~ MODPATH/taximobility/classes/model/taximobilityedit.php [ 1549 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/edit.php(14): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_edit')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_edit')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityedit.php(700): Kohana_Model::factory('edit')
#6 [internal function]: Controller_TaximobilityEdit->action_city()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-07 16:27:26 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ')' ~ MODPATH/taximobility/classes/model/taximobilityedit.php [ 1549 ]
2017-08-07 16:27:26 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ')' ~ MODPATH/taximobility/classes/model/taximobilityedit.php [ 1549 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/edit.php(14): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_edit')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_edit')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityedit.php(700): Kohana_Model::factory('edit')
#6 [internal function]: Controller_TaximobilityEdit->action_city()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-07 23:24:57 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-07 23:24:57 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}