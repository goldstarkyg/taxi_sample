<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-08 01:21:19 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-08 01:21:19 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
--
#0 /var/www/html/application/classes/common_config.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 330, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-08 02:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-08 02:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-08 03:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recordings//theme/main.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 03:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recordings//theme/main.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 04:46:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-08 04:46:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
--
#0 /var/www/html/application/classes/common_config.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 330, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-08 05:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-08 05:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-08 06:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 06:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 06:33:45 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-08 06:33:45 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-08 06:33:45 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 574 ]
2017-09-08 06:33:45 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 574 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 06:33:47 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1941 ]
2017-09-08 06:33:47 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1941 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 06:33:48 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4285 ]
2017-09-08 06:33:48 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4285 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 06:33:49 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '**' (T_POW) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5638 ]
2017-09-08 06:33:49 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '**' (T_POW) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5638 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 06:33:49 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''driver_earnin' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5833 ]
2017-09-08 06:33:49 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''driver_earnin' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5833 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 06:34:27 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 949 ]
2017-09-08 06:34:27 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 949 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/html/application/classes/model/mobileapi118.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/html/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(82): Kohana_Model::factory('mobileapi118')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-08 06:34:29 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 6050 ]
2017-09-08 06:34:29 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 6050 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/html/application/classes/model/mobileapi118.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/html/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(82): Kohana_Model::factory('mobileapi118')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-08 06:34:29 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ';' or '{' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 7161 ]
2017-09-08 06:34:29 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ';' or '{' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 7161 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/html/application/classes/model/mobileapi118.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/html/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(82): Kohana_Model::factory('mobileapi118')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-08 06:34:29 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 8492 ]
2017-09-08 06:34:29 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 8492 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/html/application/classes/model/mobileapi118.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/html/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(82): Kohana_Model::factory('mobileapi118')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-08 07:13:46 --- ERROR: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
2017-09-08 07:13:46 --- STRACE: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
--
#0 /var/www/html/application/views/themes/default/website_user/dashboard.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 257, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/themes/default/template.php(102): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(136): Kohana_Request->execute()
#13 {main}
2017-09-08 07:14:06 --- ERROR: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
2017-09-08 07:14:06 --- STRACE: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
--
#0 /var/www/html/application/views/themes/default/website_user/dashboard.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 257, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/themes/default/template.php(102): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(136): Kohana_Request->execute()
#13 {main}
2017-09-08 07:14:19 --- ERROR: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
2017-09-08 07:14:19 --- STRACE: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
--
#0 /var/www/html/application/views/themes/default/website_user/dashboard.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 257, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/themes/default/template.php(102): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(136): Kohana_Request->execute()
#13 {main}
2017-09-08 07:14:25 --- ERROR: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
2017-09-08 07:14:25 --- STRACE: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
--
#0 /var/www/html/application/views/themes/default/website_user/dashboard.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 257, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/themes/default/template.php(102): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(136): Kohana_Request->execute()
#13 {main}
2017-09-08 07:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 07:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 07:22:46 --- ERROR: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
2017-09-08 07:22:46 --- STRACE: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
--
#0 /var/www/html/application/views/themes/default/website_user/dashboard.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 257, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/themes/default/template.php(102): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(136): Kohana_Request->execute()
#13 {main}
2017-09-08 07:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 07:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 12:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 12:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 12:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 12:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 12:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 12:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 13:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 13:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 13:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 13:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 13:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 13:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 14:45:56 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-08 14:45:56 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
--
#0 /var/www/html/application/classes/common_config.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 330, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-08 14:51:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
2017-09-08 14:51:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-08 14:51:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
2017-09-08 14:51:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-08 14:51:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
2017-09-08 14:51:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-08 14:51:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
2017-09-08 14:51:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-08 15:35:49 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''pickup_latitude' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5225 ]
2017-09-08 15:35:49 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''pickup_latitude' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5225 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:37:03 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9088 ]
2017-09-08 15:37:03 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9088 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:37:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4469 ]
2017-09-08 15:37:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4469 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:38:33 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''android_foursquare' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 297 ]
2017-09-08 15:38:33 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''android_foursquare' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 297 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Background-Image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 15:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Background-Image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 15:40:49 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6915 ]
2017-09-08 15:40:49 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6915 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:48:10 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2660 ]
2017-09-08 15:48:10 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2660 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:48:10 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2660 ]
2017-09-08 15:48:10 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2660 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:48:45 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-08 15:48:45 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-08 15:48:46 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1742 ]
2017-09-08 15:48:46 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1742 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:50:45 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5496 ]
2017-09-08 15:50:45 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5496 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:51:12 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-08 15:51:12 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-08 15:51:59 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''referral_code_am' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2055 ]
2017-09-08 15:51:59 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''referral_code_am' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2055 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 15:51:59 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3573 ]
2017-09-08 15:51:59 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3573 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 16:12:35 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8963 ]
2017-09-08 16:12:35 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8963 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-08 16:15:20 --- ERROR: ErrorException [ 8 ]: Undefined index: drop_latitude ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7727 ]
2017-09-08 16:15:20 --- STRACE: ErrorException [ 8 ]: Undefined index: drop_latitude ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7727 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(7727): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 7727, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-08 16:17:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
2017-09-08 16:17:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-08 16:20:37 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default/website_user/signup_popup.php [ 133 ]
2017-09-08 16:20:37 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default/website_user/signup_popup.php [ 133 ]
--
#0 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#1 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#2 /var/www/html/application/views/themes/default/header-demo_1.php(34): Kohana_View->__toString()
#3 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#4 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#5 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /var/www/html/application/views/themes/default/template.php(98): Kohana_View->__toString()
#7 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#8 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#9 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#12 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/index.php(136): Kohana_Request->execute()
#15 {main}
2017-09-08 16:20:42 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default/website_user/signup_popup.php [ 133 ]
2017-09-08 16:20:42 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default/website_user/signup_popup.php [ 133 ]
--
#0 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#1 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#2 /var/www/html/application/views/themes/default/header-demo_1.php(34): Kohana_View->__toString()
#3 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#4 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#5 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /var/www/html/application/views/themes/default/template.php(98): Kohana_View->__toString()
#7 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#8 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#9 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#12 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/index.php(136): Kohana_Request->execute()
#15 {main}
2017-09-08 16:29:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/Logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 16:29:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/Logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 16:29:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Background-Image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 16:29:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Background-Image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 16:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 16:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 16:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 16:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 17:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 17:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 21:15:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-08 21:15:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-08 21:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 21:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 21:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 21:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 21:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 21:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 21:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 21:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 21:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 21:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _pHpMyAdMiN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _pHpMyAdMiN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-08 22:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-08 22:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}