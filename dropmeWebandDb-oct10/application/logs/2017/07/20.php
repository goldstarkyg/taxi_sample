<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-20 04:46:11 --- ERROR: ErrorException: Undefined index: date in /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php:799
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 10:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 05:15:24 --- ERROR: ErrorException: Undefined index: date in /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php:799
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 10:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 05:15:27 --- ERROR: ErrorException: Undefined index: date in /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php:799
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 10:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 05:21:52 --- ERROR: ParseError: syntax error, unexpected end of file, expecting case (T_CASE) or default (T_DEFAULT) or '}' in /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php:4500
Stack trace:
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
2017-07-20 05:32:46 --- ERROR: ParseError: syntax error, unexpected end of file in /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php:7026
Stack trace:
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
2017-07-20 06:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-20 06:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-20 06:39:40 --- ERROR: ErrorException: Undefined index: date in /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php:799
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 12:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 06:44:16 --- ERROR: ErrorException: Undefined index: date in /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php:799
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 12:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 07:22:59 --- ERROR: ErrorException: Undefined index: date in /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php:799
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 12:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 07:32:33 --- ERROR: Exception: ErrorException: Undefined index: CORRELATIONID in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:335
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 335, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_void(Array, 'e0JEOTAxMkZDLTZ...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php:96
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 07:32:52 --- ERROR: Exception: ErrorException: Undefined index: CORRELATIONID in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:335
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 335, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_void(Array, 'e0JEOTAxMkZDLTZ...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php:96
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 07:35:44 --- ERROR: Exception: ErrorException: Undefined index: CORRELATIONID in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:335
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 335, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_void(Array, 'e0JEOTAxMkZDLTZ...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php:96
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 07:38:27 --- ERROR: Exception: ErrorException: Undefined index: CORRELATIONID in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:335
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 335, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_void(Array, 'e0JEOTAxMkZDLTZ...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php:96
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 07:39:57 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: CORRELATIONID in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:335
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 335, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_void(Array, 'e0JEOTAxMkZDLTZ...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-20 07:39:57 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: CORRELATIONID in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:335
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 335, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_void(Array, 'e0JEOTAxMkZDLTZ...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 07:41:23 --- ERROR: Exception [ 0 ]: ErrorException: Undefined index: CORRELATIONID in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:335
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 335, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_void(Array, 'e0JEOTAxMkZDLTZ...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-20 07:41:23 --- STRACE: Exception [ 0 ]: ErrorException: Undefined index: CORRELATIONID in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:335
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 335, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_void(Array, 'e0JEOTAxMkZDLTZ...', Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#4 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8997): Kohana_Paymentgateway::payment_gateway_connect('void', 'e0JEOTAxMkZDLTZ...', Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(6820): Model_Taximobilitymobileapi117->voidTransaction_for_trip('372')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 09:59:27 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-20 09:59:27 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 15:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 10:18:24 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-20 10:18:24 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 15:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 11:08:11 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-20 11:08:11 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 16:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 14:36:11 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-20 14:36:11 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 20:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 14:39:20 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-20 14:39:20 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 20:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 14:39:30 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-20 14:39:30 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 20:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 14:41:50 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-20 14:41:50 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 20:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 14:55:50 --- ERROR: ErrorException [ 0 ]: syntax error, unexpected ''se' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ APPPATH/i18n/endef.php [ 2033 ]
2017-07-20 14:55:50 --- STRACE: ErrorException [ 0 ]: syntax error, unexpected ''se' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ APPPATH/i18n/endef.php [ 2033 ]
--
#0 {main}
2017-07-20 15:23:20 --- ERROR: ErrorException [ 0 ]: syntax error, unexpected ''There is a problem in posting' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH/i18n/endef.php [ 2549 ]
2017-07-20 15:23:20 --- STRACE: ErrorException [ 0 ]: syntax error, unexpected ''There is a problem in posting' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH/i18n/endef.php [ 2549 ]
--
#0 {main}
2017-07-20 15:31:28 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-20 15:31:28 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-13 00:0...', '2017-07-20 21:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-20 15:32:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Taximobilitymobileapi117' not found ~ APPPATH/classes/model/mobileapi117.php [ 13 ]
2017-07-20 15:32:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Taximobilitymobileapi117' not found ~ APPPATH/classes/model/mobileapi117.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}