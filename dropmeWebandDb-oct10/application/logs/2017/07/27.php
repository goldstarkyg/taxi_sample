<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-27 05:22:13 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 05:22:13 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 10:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 06:04:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_TaximobilityTaxidispatch' not found ~ APPPATH/classes/model/taxidispatch.php [ 2 ]
2017-07-27 06:04:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_TaximobilityTaxidispatch' not found ~ APPPATH/classes/model/taxidispatch.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-27 06:05:30 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 06:05:30 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 11:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 06:09:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-27 06:09:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-27 06:09:51 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitytaxidispatch.php [ 244 ]
2017-07-27 06:09:51 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitytaxidispatch.php [ 244 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/vhosts/loadtest/application/classes/controller/taxidispatch.php(5): spl_autoload_call('Controller_Taxi...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('controller_taxi...')
#4 [internal function]: spl_autoload_call('controller_taxi...')
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(85): class_exists('controller_taxi...')
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main}
2017-07-27 06:13:22 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1692 ]
2017-07-27 06:13:22 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1692 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:15:05 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''compa' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2010 ]
2017-07-27 06:15:05 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''compa' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2010 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:18:32 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 06:18:32 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 11:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 06:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-27 06:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-27 06:26:36 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1692 ]
2017-07-27 06:26:36 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1692 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:26:37 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1926 ]
2017-07-27 06:26:37 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1926 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:29:10 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 913 ]
2017-07-27 06:29:10 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 913 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:29:24 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 913 ]
2017-07-27 06:29:24 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 913 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:32:09 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 913 ]
2017-07-27 06:32:09 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 913 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:32:47 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 06:32:47 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 12:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 06:33:44 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 317 ]
2017-07-27 06:33:44 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 317 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:36:09 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1707 ]
2017-07-27 06:36:09 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1707 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(476): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityDashboard->action_dashboardLiveDispatchMap()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:36:10 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1707 ]
2017-07-27 06:36:10 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1707 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 06:36:11 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 3019 ]
2017-07-27 06:36:11 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 3019 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 07:25:49 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''resu' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 317 ]
2017-07-27 07:25:49 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''resu' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 317 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 07:25:51 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''$pickup_latit' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1824 ]
2017-07-27 07:25:51 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''$pickup_latit' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1824 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 07:25:52 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 3040 ]
2017-07-27 07:25:52 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 3040 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 07:29:14 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''resu' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 317 ]
2017-07-27 07:29:14 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''resu' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 317 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 07:29:15 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1230 ]
2017-07-27 07:29:15 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 1230 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 07:29:17 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '!' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2496 ]
2017-07-27 07:29:17 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '!' ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2496 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/taxidispatch.php(2): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_taxidispa...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_taxidispa...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(18): Kohana_Model::factory('taxidispatch')
#6 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-27 07:39:27 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 07:39:27 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 13:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 07:45:07 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
2017-07-27 07:45:07 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
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
2017-07-27 07:45:07 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '/' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 439 ]
2017-07-27 07:45:07 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '/' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 439 ]
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
2017-07-27 07:45:08 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 577 ]
2017-07-27 07:45:08 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 577 ]
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
2017-07-27 07:45:08 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1192 ]
2017-07-27 07:45:08 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1192 ]
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
2017-07-27 07:45:10 --- ERROR: ParseError [ 0 ]: syntax error, unexpected 'un' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3203 ]
2017-07-27 07:45:10 --- STRACE: ParseError [ 0 ]: syntax error, unexpected 'un' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3203 ]
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
2017-07-27 07:45:11 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4162 ]
2017-07-27 07:45:11 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4162 ]
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
2017-07-27 07:46:56 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-07-27 07:46:56 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-27 07:46:59 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
2017-07-27 07:46:59 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
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
2017-07-27 07:46:59 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3243 ]
2017-07-27 07:46:59 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3243 ]
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
2017-07-27 07:47:01 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8510 ]
2017-07-27 07:47:01 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8510 ]
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
2017-07-27 07:49:12 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
2017-07-27 07:49:12 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
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
2017-07-27 07:49:14 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4967 ]
2017-07-27 07:49:14 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4967 ]
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
2017-07-27 07:49:14 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6087 ]
2017-07-27 07:49:14 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6087 ]
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
2017-07-27 07:49:32 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-07-27 07:49:32 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-27 07:49:33 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2044 ]
2017-07-27 07:49:33 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2044 ]
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
2017-07-27 07:50:08 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4697 ]
2017-07-27 07:50:08 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4697 ]
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
2017-07-27 07:50:09 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9358 ]
2017-07-27 07:50:09 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9358 ]
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
2017-07-27 08:15:54 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 577 ]
2017-07-27 08:15:54 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 577 ]
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
2017-07-27 08:15:54 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1192 ]
2017-07-27 08:15:54 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1192 ]
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
2017-07-27 08:15:55 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
2017-07-27 08:15:55 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
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
2017-07-27 08:15:56 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '?' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3270 ]
2017-07-27 08:15:56 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '?' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3270 ]
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
2017-07-27 08:17:42 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-07-27 08:17:42 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-27 08:17:42 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
2017-07-27 08:17:42 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
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
2017-07-27 08:17:44 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2044 ]
2017-07-27 08:17:44 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2044 ]
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
2017-07-27 08:17:44 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
2017-07-27 08:17:44 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
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
2017-07-27 08:19:19 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
2017-07-27 08:19:19 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
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
2017-07-27 08:19:19 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 577 ]
2017-07-27 08:19:19 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 577 ]
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
2017-07-27 08:19:20 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1588 ]
2017-07-27 08:19:20 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1588 ]
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
2017-07-27 08:19:22 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5675 ]
2017-07-27 08:19:22 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5675 ]
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
2017-07-27 09:21:47 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
2017-07-27 09:21:47 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
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
2017-07-27 09:33:44 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-07-27 09:33:44 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-27 09:41:46 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5738 ]
2017-07-27 09:41:46 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5738 ]
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
2017-07-27 09:42:23 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
2017-07-27 09:42:23 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
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
2017-07-27 10:11:53 --- ERROR: ErrorException [ 8 ]: Undefined index: pay_mod_id ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8088 ]
2017-07-27 10:11:53 --- STRACE: ErrorException [ 8 ]: Undefined index: pay_mod_id ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8088 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(8088): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 8088, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-27 10:13:16 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
2017-07-27 10:13:16 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2313 ]
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
2017-07-27 10:13:16 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2759 ]
2017-07-27 10:13:16 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2759 ]
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
2017-07-27 10:13:17 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3777 ]
2017-07-27 10:13:17 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3777 ]
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
2017-07-27 10:13:18 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''old_pass_incorre' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5961 ]
2017-07-27 10:13:18 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''old_pass_incorre' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5961 ]
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
2017-07-27 10:13:37 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1756 ]
2017-07-27 10:13:37 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1756 ]
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
2017-07-27 10:17:36 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''/model_image/android/' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 231 ]
2017-07-27 10:17:36 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''/model_image/android/' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 231 ]
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
2017-07-27 10:17:39 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2426 ]
2017-07-27 10:17:39 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2426 ]
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
2017-07-27 10:17:42 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''old_pass_incorre' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5961 ]
2017-07-27 10:17:42 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''old_pass_incorre' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5961 ]
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
2017-07-27 10:17:42 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6818 ]
2017-07-27 10:17:42 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6818 ]
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
2017-07-27 10:17:45 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '$wallet_upd' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8594 ]
2017-07-27 10:17:45 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '$wallet_upd' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8594 ]
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
2017-07-27 10:18:06 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1192 ]
2017-07-27 10:18:06 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1192 ]
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
2017-07-27 10:18:09 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7039 ]
2017-07-27 10:18:09 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7039 ]
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
2017-07-27 10:26:42 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 10:26:42 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 15:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 10:29:29 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or '{' or '$' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3110 ]
2017-07-27 10:29:29 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or '{' or '$' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3110 ]
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
2017-07-27 10:29:31 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or '{' or '$' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7750 ]
2017-07-27 10:29:31 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or '{' or '$' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7750 ]
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
2017-07-27 10:29:49 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''invalid_user'),"status"=>-3);' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2891 ]
2017-07-27 10:29:49 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''invalid_user'),"status"=>-3);' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2891 ]
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
2017-07-27 10:29:51 --- ERROR: ParseError [ 0 ]: syntax error, unexpected 'm', expecting variable (T_VARIABLE) or quoted-string and whitespace (T_ENCAPSED_AND_WHITESPACE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5286 ]
2017-07-27 10:29:51 --- STRACE: ParseError [ 0 ]: syntax error, unexpected 'm', expecting variable (T_VARIABLE) or quoted-string and whitespace (T_ENCAPSED_AND_WHITESPACE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5286 ]
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
2017-07-27 10:31:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3777 ]
2017-07-27 10:31:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3777 ]
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
2017-07-27 10:32:24 --- ERROR: ParseError [ 0 ]: syntax error, unexpected 'm', expecting variable (T_VARIABLE) or quoted-string and whitespace (T_ENCAPSED_AND_WHITESPACE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2850 ]
2017-07-27 10:32:24 --- STRACE: ParseError [ 0 ]: syntax error, unexpected 'm', expecting variable (T_VARIABLE) or quoted-string and whitespace (T_ENCAPSED_AND_WHITESPACE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2850 ]
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
2017-07-27 10:35:05 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9057 ]
2017-07-27 10:35:05 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9057 ]
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
2017-07-27 10:35:12 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or '{' or '$' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2340 ]
2017-07-27 10:35:12 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or '{' or '$' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2340 ]
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
2017-07-27 10:39:10 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-07-27 10:39:10 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-27 10:39:45 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
2017-07-27 10:39:45 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
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
2017-07-27 10:42:25 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1588 ]
2017-07-27 10:42:25 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1588 ]
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
2017-07-27 10:46:25 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
2017-07-27 10:46:25 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 291 ]
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
2017-07-27 10:49:27 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1588 ]
2017-07-27 10:49:27 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1588 ]
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
2017-07-27 10:49:55 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4508 ]
2017-07-27 10:49:55 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4508 ]
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
2017-07-27 10:50:56 --- ERROR: Exception [ 0 ]: ErrorException: Undefined variable: response in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:250
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(250): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 250, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_preauthorization(Array, 0, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi118.php(7171): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 0, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2730): Model_Taximobilitymobileapi118->creditcardPreAuthorization('2101', '426397192100130...', '123', '7', '2020', 0)
#4 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
2017-07-27 10:50:56 --- STRACE: Exception [ 0 ]: ErrorException: Undefined variable: response in /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php:250
Stack trace:
#0 /var/www/vhosts/loadtest/modules/realex/classes/kohana/realexpayment.php(250): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 250, Array)
#1 /var/www/vhosts/loadtest/modules/paymentgateway/classes/kohana/paymentgateway.php(83): Kohana_Realexpayment::realex_preauthorization(Array, 0, Array, Array, Array)
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi118.php(7171): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 0, Array, Array, Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2730): Model_Taximobilitymobileapi118->creditcardPreAuthorization('2101', '426397192100130...', '123', '7', '2020', 0)
#4 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#9 {main} ~ MODPATH/paymentgateway/classes/kohana/paymentgateway.php [ 96 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi118.php(7171): Kohana_Paymentgateway::payment_gateway_connect('preauthorizatio...', 0, Array, Array, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2730): Model_Taximobilitymobileapi118->creditcardPreAuthorization('2101', '426397192100130...', '123', '7', '2020', 0)
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 10:59:09 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''name' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1941 ]
2017-07-27 10:59:09 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''name' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1941 ]
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
2017-07-27 11:34:07 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 11:34:07 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 17:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 11:41:56 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3566 ]
2017-07-27 11:41:56 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3566 ]
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
2017-07-27 11:41:58 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '"', expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9814 ]
2017-07-27 11:41:58 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '"', expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9814 ]
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
2017-07-27 11:49:44 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''1')){' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1875 ]
2017-07-27 11:49:44 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''1')){' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1875 ]
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
2017-07-27 11:49:46 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6124 ]
2017-07-27 11:49:46 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6124 ]
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
2017-07-27 11:49:47 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8511 ]
2017-07-27 11:49:47 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8511 ]
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
2017-07-27 11:53:33 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 11:53:33 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 17:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 11:58:18 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2044 ]
2017-07-27 11:58:18 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2044 ]
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
2017-07-27 11:58:20 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3879 ]
2017-07-27 11:58:20 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3879 ]
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
2017-07-27 11:58:22 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '(arra' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5106 ]
2017-07-27 11:58:22 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '(arra' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5106 ]
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
2017-07-27 11:58:25 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6294 ]
2017-07-27 11:58:25 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6294 ]
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
2017-07-27 11:58:26 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6958 ]
2017-07-27 11:58:26 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6958 ]
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
2017-07-27 11:58:28 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8388 ]
2017-07-27 11:58:28 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8388 ]
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
2017-07-27 11:58:44 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 861 ]
2017-07-27 11:58:44 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 861 ]
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
2017-07-27 11:58:46 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4060 ]
2017-07-27 11:58:46 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4060 ]
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
2017-07-27 11:58:47 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6088 ]
2017-07-27 11:58:47 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6088 ]
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
2017-07-27 13:11:30 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 13:11:30 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 18:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 14:22:09 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 14:22:09 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 19:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 14:57:57 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 621 ]
2017-07-27 14:57:57 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 621 ]
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
2017-07-27 15:22:42 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-27 15:22:42 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-20 00:0...', '2017-07-27 20:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-27 16:16:46 --- ERROR: ErrorException [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ APPPATH/i18n/endef.php [ 1623 ]
2017-07-27 16:16:46 --- STRACE: ErrorException [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ APPPATH/i18n/endef.php [ 1623 ]
--
#0 {main}
2017-07-27 16:16:47 --- ERROR: ErrorException [ 0 ]: syntax error, unexpected ''Please wait. Server is search' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH/i18n/endef.php [ 1928 ]
2017-07-27 16:16:47 --- STRACE: ErrorException [ 0 ]: syntax error, unexpected ''Please wait. Server is search' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH/i18n/endef.php [ 1928 ]
--
#0 {main}
2017-07-27 16:23:23 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 1696 ]
2017-07-27 16:23:23 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 1696 ]
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
2017-07-27 16:23:25 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 6599 ]
2017-07-27 16:23:25 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 6599 ]
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