<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-21 04:01:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-21 04:01:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-21 04:36:18 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-21 04:36:18 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-14 00:0...', '2017-07-21 10:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-21 05:09:47 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-21 05:09:47 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-14 00:0...', '2017-07-21 10:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-21 05:19:55 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-21 05:19:55 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-14 00:0...', '2017-07-21 10:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-21 05:55:09 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''$drop_' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 4743 ]
2017-07-21 05:55:09 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''$drop_' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 4743 ]
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
2017-07-21 05:57:36 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 5173 ]
2017-07-21 05:57:36 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 5173 ]
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
2017-07-21 05:57:39 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 7526 ]
2017-07-21 05:57:39 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 7526 ]
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
2017-07-21 05:58:18 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 1897 ]
2017-07-21 05:58:18 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 1897 ]
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
2017-07-21 06:10:14 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-21 06:10:14 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-14 00:0...', '2017-07-21 11:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-21 06:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-21 06:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-21 06:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-21 06:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-21 06:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-21 06:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-21 06:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-21 06:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-21 06:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-21 06:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-21 06:19:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: driverId ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 7498 ]
2017-07-21 06:19:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: driverId ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 7498 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymanage.php(7498): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 7498, Array)
#1 [internal function]: Controller_TaximobilityManage->action_complete_trip()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-21 07:08:03 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-21 07:08:03 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-14 00:0...', '2017-07-21 12:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-21 08:05:15 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-21 08:05:15 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi117->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-21 08:05:22 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-21 08:05:22 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi117->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-21 08:05:27 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-21 08:05:27 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymanage.php(15): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityManage->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-07-21 08:06:25 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-07-21 08:06:25 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi117->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-07-21 08:10:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
2017-07-21 08:10:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_TaximobilityCommonmodel' not found ~ APPPATH/classes/model/commonmodel.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-21 08:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-21 08:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-21 08:12:28 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''_id'] = (int)$driver_id;		' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitycommonmodel.php [ 1225 ]
2017-07-21 08:12:28 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''_id'] = (int)$driver_id;		' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/model/taximobilitycommonmodel.php [ 1225 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/commonmodel.php(10): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_commonmod...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_commonmod...')
#5 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(25): Kohana_Model::factory('commonmodel')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(20): require('/var/www/vhosts...')
#7 [internal function]: Controller_TaximobilityMobileapi117->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-07-21 08:23:01 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityManage' not found ~ APPPATH/classes/controller/manage.php [ 13 ]
2017-07-21 08:23:01 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityManage' not found ~ APPPATH/classes/controller/manage.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-21 08:42:20 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-21 08:42:20 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-14 00:0...', '2017-07-21 14:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-21 10:24:33 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-21 10:24:33 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-14 00:0...', '2017-07-21 15:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-21 10:55:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''preserveNullAndEm' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitycommonmodel.php [ 838 ]
2017-07-21 10:55:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''preserveNullAndEm' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitycommonmodel.php [ 838 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/vhosts/loadtest/application/classes/model/commonmodel.php(10): spl_autoload_call('Model_Taximobil...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/core.php(504): require('/var/www/vhosts...')
#3 [internal function]: Kohana_Core::auto_load('Model_commonmod...')
#4 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): spl_autoload_call('Model_commonmod...')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(28): Kohana_Model::factory('commonmodel')
#6 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}