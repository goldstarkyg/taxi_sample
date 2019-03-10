<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-26 01:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 01:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 04:00:20 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-26 04:00:20 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-26 04:00:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-26 04:00:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-26 04:00:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-26 04:00:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 04:45:46 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 04:45:46 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 10:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 05:02:34 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/vhosts/loadtest/public/loadtest/trip_detail_map/457ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 3972 ]
2017-07-26 05:02:34 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/vhosts/loadtest/public/loadtest/trip_detail_map/457ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 3972 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/vhosts...', 3972, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3972): file_put_contents('/var/www/vhosts...', '\x89PNG\r\n\x1A\n\x00\x00\x00\rIHD...')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 05:10:41 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/vhosts/loadtest/public/loadtest/trip_detail_map/457ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 3972 ]
2017-07-26 05:10:41 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/vhosts/loadtest/public/loadtest/trip_detail_map/457ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 3972 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/vhosts...', 3972, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3972): file_put_contents('/var/www/vhosts...', '\x89PNG\r\n\x1A\n\x00\x00\x00\rIHD...')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 05:40:03 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 05:40:03 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 11:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 05:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 05:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 06:06:25 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1756 ]
2017-07-26 06:06:25 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1756 ]
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
2017-07-26 06:07:40 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
2017-07-26 06:07:40 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
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
2017-07-26 06:07:42 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4685 ]
2017-07-26 06:07:42 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4685 ]
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
2017-07-26 06:35:57 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9354 ]
2017-07-26 06:35:57 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9354 ]
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
2017-07-26 06:36:45 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 06:36:45 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 12:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 06:40:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/taximobility/classes/model/taximobilitytransaction.php [ 3025 ]
2017-07-26 06:40:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/taximobility/classes/model/taximobilitytransaction.php [ 3025 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytransaction.php(3025): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/vhosts...', 3025, Array)
#1 /var/www/vhosts/loadtest/application/views/admin/transaction_details.php(113): Model_TaximobilityTransaction->getaddress('', '')
#2 /var/www/vhosts/loadtest/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/loadtest/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/loadtest/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/vhosts/loadtest/application/views/admin/template.php(176): Kohana_View->__toString()
#6 /var/www/vhosts/loadtest/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#7 /var/www/vhosts/loadtest/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#8 /var/www/vhosts/loadtest/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Transaction))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#14 {main}
2017-07-26 06:45:31 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 06:45:31 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 12:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 06:58:23 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 06:58:23 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 12:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 07:21:12 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-07-26 07:21:12 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-26 07:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:31:20 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '$distance' (T_VARIABLE), expecting ',' or ';' ~ MODPATH/taximobility/classes/controller/taximobilitytdispatch.php [ 132 ]
2017-07-26 07:31:20 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '$distance' (T_VARIABLE), expecting ',' or ';' ~ MODPATH/taximobility/classes/controller/taximobilitytdispatch.php [ 132 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/vhosts/loadtest/application/classes/controller/tdispatch.php(3): spl_autoload_call('Controller_Taxi...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('controller_tdis...')
#4 [internal function]: spl_autoload_call('controller_tdis...')
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(85): class_exists('controller_tdis...')
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main}
2017-07-26 07:31:37 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '$distance' (T_VARIABLE), expecting ',' or ';' ~ MODPATH/taximobility/classes/controller/taximobilitytdispatch.php [ 132 ]
2017-07-26 07:31:37 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '$distance' (T_VARIABLE), expecting ',' or ';' ~ MODPATH/taximobility/classes/controller/taximobilitytdispatch.php [ 132 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/vhosts/loadtest/application/classes/controller/tdispatch.php(3): spl_autoload_call('Controller_Taxi...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('controller_tdis...')
#4 [internal function]: spl_autoload_call('controller_tdis...')
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(85): class_exists('controller_tdis...')
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main}
2017-07-26 07:48:19 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 07:48:19 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 13:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 07:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 07:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 07:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 08:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:15:04 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 08:15:04 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 13:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 08:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 08:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 08:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 08:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 08:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 08:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:25:22 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 08:25:22 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 13:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 08:46:37 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 08:46:37 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 14:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 08:53:31 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-26 08:53:31 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(782): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-07-26 08:53:31 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-26 08:53:31 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(782): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydispatchadmin.php(30): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(13): Controller_TaximobilityDispatchadmin->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-07-26 08:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 08:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:53:35 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-26 08:53:35 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(782): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-07-26 08:53:36 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-26 08:53:36 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(782): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydispatchadmin.php(30): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(13): Controller_TaximobilityDispatchadmin->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-07-26 08:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 08:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:53:37 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-26 08:53:37 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(782): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-07-26 08:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 08:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 08:53:41 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-26 08:53:41 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(782): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydispatchadmin.php(30): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(13): Controller_TaximobilityDispatchadmin->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-07-26 08:53:44 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-26 08:53:44 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(782): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-26 08:53:46 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-26 08:53:46 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(782): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydispatchadmin.php(30): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(13): Controller_TaximobilityDispatchadmin->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-07-26 09:18:39 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 09:18:39 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 14:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 09:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 09:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 09:24:15 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 7018 ]
2017-07-26 09:24:15 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 7018 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/manage.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_manage')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_manage')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymanage.php(7202): Kohana_Model::factory('manage')
#6 [internal function]: Controller_TaximobilityManage->action_popularplace()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-26 10:18:28 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 10:18:28 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 15:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 10:21:34 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 10:21:34 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 15:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 10:23:41 --- ERROR: Exception [ 0 ]: ErrorException: Undefined variable: stripe_result_status in /var/www/vhosts/loadtest/modules/stripe/classes/kohana/stripepayment.php:303
Stack trace:
#0 /var/www/vhosts/loadtest/modules/stripe/classes/kohana/stripepayment.php(303): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 303, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Stripepayment::stripe_void(Array, 'ch_1AjmfoJeIu5M...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8998): Kohana_Paymentgateway::payment_gateway_connect('void', 'ch_1AjmfoJeIu5M...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6038): Model_Taximobilitymobileapi117->voidTransaction_for_trip('526')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 10:23:41 --- STRACE: Exception [ 0 ]: ErrorException: Undefined variable: stripe_result_status in /var/www/vhosts/loadtest/modules/stripe/classes/kohana/stripepayment.php:303
Stack trace:
#0 /var/www/vhosts/loadtest/modules/stripe/classes/kohana/stripepayment.php(303): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 303, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Stripepayment::stripe_void(Array, 'ch_1AjmfoJeIu5M...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8998): Kohana_Paymentgateway::payment_gateway_connect('void', 'ch_1AjmfoJeIu5M...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6038): Model_Taximobilitymobileapi117->voidTransaction_for_trip('526')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8998): Kohana_Paymentgateway::payment_gateway_connect('void', 'ch_1AjmfoJeIu5M...', Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6038): Model_Taximobilitymobileapi117->voidTransaction_for_trip('526')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 10:39:40 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ';' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 939 ]
2017-07-26 10:39:40 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ';' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 939 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/mobileapi117.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(82): Kohana_Model::factory('mobileapi117')
#6 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-26 10:39:42 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 2774 ]
2017-07-26 10:39:42 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 2774 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/mobileapi117.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(82): Kohana_Model::factory('mobileapi117')
#6 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-26 12:09:44 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 12:09:44 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 17:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 12:19:34 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 12:19:34 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 17:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 12:30:31 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 12:30:31 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 18:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 12:41:54 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 12:41:54 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 12:42:52 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 12:42:52 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 12:44:25 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 12:44:25 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 12:52:27 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 12:52:27 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 13:05:49 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 13:05:49 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 13:07:07 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 13:07:07 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 13:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 13:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 13:20:37 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 13:20:37 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 51.79)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 13:21:34 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 218.12, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 218.12, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 218.12)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 13:21:34 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 218.12, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 218.12, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 218.12)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 218.12, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2049', '411111111111111...', '123', '08', '2024', 218.12)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 13:23:45 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 50.7, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 50.7, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2093', '411111111111111...', '123', 10, 2022, 50.7)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 13:23:45 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 50.7, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 50.7, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2093', '411111111111111...', '123', 10, 2022, 50.7)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 50.7, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2093', '411111111111111...', '123', 10, 2022, 50.7)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 13:24:44 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2093', '411111111111111...', '123', 10, 2022, 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-26 13:24:44 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: ACK in /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php:297
Stack trace:
#0 /var/www/vhosts/loadtest/modules/paypal/classes/kohana/paypalpayment.php(297): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 297, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Paypalpayment::paypal_preauthorization(Array, 51.79, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2093', '411111111111111...', '123', 10, 2022, 51.79)
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(7055): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 51.79, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3298): Model_Taximobilitymobileapi117->creditcardPreAuthorization('2093', '411111111111111...', '123', 10, 2022, 51.79)
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 13:25:42 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 13:25:42 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 18:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 13:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 13:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 13:30:43 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 13:30:43 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 19:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 14:10:33 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''booking_f' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 8889 ]
2017-07-26 14:10:33 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''booking_f' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 8889 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/mobileapi118.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(82): Kohana_Model::factory('mobileapi118')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-26 14:26:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Taximobilitymobileapi117' not found ~ APPPATH/classes/model/mobileapi117.php [ 13 ]
2017-07-26 14:26:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Taximobilitymobileapi117' not found ~ APPPATH/classes/model/mobileapi117.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-26 14:27:01 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 1523 ]
2017-07-26 14:27:01 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 1523 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/mobileapi117.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(82): Kohana_Model::factory('mobileapi117')
#6 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-26 14:28:11 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 1897 ]
2017-07-26 14:28:11 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 1897 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/mobileapi117.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(82): Kohana_Model::factory('mobileapi117')
#6 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-26 14:28:13 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 7636 ]
2017-07-26 14:28:13 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 7636 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/mobileapi117.php(13): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_mobileapi...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_mobileapi...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(82): Kohana_Model::factory('mobileapi117')
#6 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-26 14:33:37 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-26 14:33:37 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-26 14:33:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-26 14:33:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-26 14:34:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-26 14:34:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 14:48:37 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 14:48:37 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 20:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 14:49:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-26 14:49:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-26 15:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/loadtest/driver_image/5972f5a0df2b5signInLogo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-26 15:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/loadtest/driver_image/5972f5a0df2b5signInLogo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-26 16:01:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-26 16:01:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-26 16:27:18 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 16:27:18 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 21:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 16:42:27 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 1590 ]
2017-07-26 16:42:27 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 1590 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/vhosts/loadtest/application/classes/controller/mobileapi117.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main}
2017-07-26 16:46:20 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3994 ]
2017-07-26 16:46:20 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3994 ]
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
2017-07-26 16:46:21 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6159 ]
2017-07-26 16:46:21 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6159 ]
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
2017-07-26 16:58:17 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 16:58:17 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 22:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 17:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-26 17:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-26 17:47:28 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 17:47:28 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 23:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 18:02:03 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-26 18:02:03 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-19 00:0...', '2017-07-26 23:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-26 21:41:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-26 21:41:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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