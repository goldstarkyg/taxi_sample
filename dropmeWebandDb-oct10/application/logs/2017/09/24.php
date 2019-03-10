<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-24 00:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-24 00:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-24 01:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wallet.dat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 01:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wallet.dat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 01:22:31 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:22:31 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:22:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:22:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:23:25 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:23:25 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:24:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:24:30 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:24:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:24:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:25:01 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:25:01 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:25:09 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:25:09 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:27:57 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:27:57 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:33:04 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:33:04 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:33:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:33:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 01:35:45 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 01:35:45 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('1849', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 03:10:04 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 03:10:04 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail(2153, '1212')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 03:19:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-24 03:19:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-24 04:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-24 04:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-24 05:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 05:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 06:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 06:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 07:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 07:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 07:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-24 07:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-24 08:56:59 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 08:56:59 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail(2153, '1212')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 09:04:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 09:04:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail(2153, '1212')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 09:09:18 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 09:09:18 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('1849', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 09:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-24 09:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-24 09:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://34.197.229.1:80 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 09:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://34.197.229.1:80 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 10:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 10:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 11:10:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-09-24 11:10:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
--
#0 /var/www/html/application/classes/common_config.php(331): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 331, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(137): Kohana_Request->execute()
#8 {main}
2017-09-24 11:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://34.197.229.1:80 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 11:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://34.197.229.1:80 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 12:07:57 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 12:07:57 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2153', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 12:11:11 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 12:11:11 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('1657', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 12:17:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-24 12:17:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('1849', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-24 13:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 13:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 13:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 13:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 13:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 13:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 14:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 14:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 14:15:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 14:15:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 14:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 14:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 15:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-24 15:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-24 16:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-24 16:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-24 16:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-24 16:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-24 18:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-24 18:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-24 18:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-24 18:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-24 19:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-24 19:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}