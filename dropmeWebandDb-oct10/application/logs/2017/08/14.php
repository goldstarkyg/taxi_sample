<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-14 02:05:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-14 02:05:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-08-14 04:16:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-14 04:16:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-08-14 06:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-left.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-14 06:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-left.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-14 06:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-right.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-14 06:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-right.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-14 07:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 07:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 07:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 07:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 07:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-14 07:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-14 07:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 07:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 07:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-14 07:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-14 07:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-14 07:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-14 07:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 07:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 07:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 07:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 07:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 07:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 07:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-14 07:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-14 07:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 07:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 07:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 07:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 07:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 07:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 09:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 09:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 09:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 09:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 09:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-14 09:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-14 09:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 09:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 11:13:18 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Failed to send "find" command with database "loadtest": socket error or timeout ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-08-14 11:13:18 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Failed to send "find" command with database "loadtest": socket error or timeout ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('loadtest.csc', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/FindOne.php(90): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(544): MongoDB\Operation\FindOne->execute(Object(MongoDB\Driver\Server))
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(511): MongoDB\Collection->findOne(Array, Array)
#4 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(260): Kohana_MangoDB->_call('findOne', Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(827): Kohana_MangoDB->findOne('csc', Array, Array)
#6 /var/www/vhosts/loadtest/application/classes/common_config.php(340): Model_TaximobilityCommonmodel->common_currency_details()
#7 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydispatchadmin.php(30): require('/var/www/vhosts...')
#8 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(13): Controller_TaximobilityDispatchadmin->__construct(Object(Request), Object(Response))
#9 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#14 {main}
2017-08-14 11:13:18 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Failed to send "find" command with database "loadtest": socket error or timeout ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-08-14 11:13:18 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Failed to send "find" command with database "loadtest": socket error or timeout ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('loadtest.csc', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/FindOne.php(90): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(544): MongoDB\Operation\FindOne->execute(Object(MongoDB\Driver\Server))
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(511): MongoDB\Collection->findOne(Array, Array)
#4 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(260): Kohana_MangoDB->_call('findOne', Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(827): Kohana_MangoDB->findOne('csc', Array, Array)
#6 /var/www/vhosts/loadtest/application/classes/common_config.php(340): Model_TaximobilityCommonmodel->common_currency_details()
#7 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#8 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#13 {main}
2017-08-14 11:13:18 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-14 11:13:18 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(311): Kohana_MangoDB->aggregate('driver_driverin...', Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(477): Model_TaximobilityTaxidispatch->driver_status_details(Array)
#6 [internal function]: Controller_TaximobilityDashboard->action_dashboardLiveDispatchMap()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-14 11:13:18 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-14 11:13:18 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi118.php(9281): Kohana_MangoDB->aggregate('people', Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(615): Model_Taximobilitymobileapi118->check_driver_device('2048', '2', '584A2CE8-506E-4...')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-14 11:13:18 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-14 11:13:18 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi118.php(9281): Kohana_MangoDB->aggregate('people', Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(615): Model_Taximobilitymobileapi118->check_driver_device('2054', '1', '8d9d501864bd22a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-14 11:13:18 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-14 11:13:18 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-14 11:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-14 11:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-14 11:32:05 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-14 11:32:05 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#5 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#7 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-14 11:32:11 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-14 11:32:11 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#5 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#7 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-14 11:32:27 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-14 11:32:27 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#5 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#7 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-14 11:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-14 11:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-14 12:19:19 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-14 12:19:19 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-08-14 14:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 14:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 14:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 14:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 14:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-14 14:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-14 16:39:56 --- ERROR: ErrorException [ 2 ]: mdecrypt_generic(): An empty string was passed ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 93 ]
2017-08-14 16:39:56 --- STRACE: ErrorException [ 2 ]: mdecrypt_generic(): An empty string was passed ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 93 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/ndotcrypt.php(93): Kohana_Core::error_handler(2, 'mdecrypt_generi...', '/var/www/vhosts...', 93, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/ndot_trial_mobilekey_validate.php(37): NDOT_MCrypt->decrypt_decode('POST /mobileapi...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(94): require('/var/www/vhosts...')
#3 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}