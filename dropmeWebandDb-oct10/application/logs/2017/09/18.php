<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-18 00:47:12 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-09-18 00:47:12 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9163): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1034): Model_Taximobilitymobileapi118->get_favouritepopularplaces('4207', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 00:47:29 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-09-18 00:47:29 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9163): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1034): Model_Taximobilitymobileapi118->get_favouritepopularplaces('4207', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 00:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hedwig.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 00:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hedwig.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 00:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 00:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 01:44:08 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 01:44:08 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(7315): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(6779): Model_Taximobilitymobileapi118->get_booking_details('1490')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 01:44:14 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 01:44:14 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1490, '1581')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:15:50 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:15:50 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:18:08 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:18:08 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:18:28 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:18:28 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:18:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:18:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:19:00 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:19:00 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:19:10 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:19:10 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(7315): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(6779): Model_Taximobilitymobileapi118->get_booking_details('1491')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:19:16 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:19:16 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1491, '1138')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:19:17 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:19:17 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:19:46 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:19:46 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:20:14 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:20:14 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:20:21 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:20:21 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:22:45 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:22:45 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:23:10 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:23:10 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:23:18 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:23:18 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:23:50 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:23:50 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:25:31 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:25:31 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:26:24 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:26:24 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:26:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:26:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:27:31 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:27:31 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:27:37 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:27:37 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:27:43 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:27:43 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:27:50 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:27:50 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:29:00 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:29:00 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:29:20 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:29:20 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:44:20 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 02:44:20 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 02:44:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-18 02:44:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-18 03:04:16 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 03:04:16 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1490, '1581')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 03:12:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-18 03:12:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-18 03:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 03:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 03:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 03:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 04:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 04:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 04:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 04:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 04:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 04:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 04:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 04:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 04:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 0094l-F-vWfM6kbCUIvzpHtAtHa5PKI753-FB8CSTxGmoaBRJmR5FmrS3oaniLi3lCRM-vptQ9G-vmYdxk1fOieLwdnrt2E3IIG-FwPCY5xm2D767LOh564v-vizkmg3bv5IiZJLFg9lXDiLHqTBXxQXUe5N9aVJnFTc4byf9kH89A8iPuKimJm3aVqqX16LDrI6TPfBXpGNs8ICi-v9nEc-d was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 04:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 0094l-F-vWfM6kbCUIvzpHtAtHa5PKI753-FB8CSTxGmoaBRJmR5FmrS3oaniLi3lCRM-vptQ9G-vmYdxk1fOieLwdnrt2E3IIG-FwPCY5xm2D767LOh564v-vizkmg3bv5IiZJLFg9lXDiLHqTBXxQXUe5N9aVJnFTc4byf9kH89A8iPuKimJm3aVqqX16LDrI6TPfBXpGNs8ICi-v9nEc-d was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 04:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 04:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 04:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 04:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b517db783e8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 05:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 05:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 05:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 06:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 06:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 06:45:52 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 06:45:52 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 06:46:11 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 06:46:11 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 06:46:18 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 06:46:18 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 06:46:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 06:46:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 06:57:13 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 06:57:13 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 07:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 07:42:08 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:42:08 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(7315): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(6779): Model_Taximobilitymobileapi118->get_booking_details('1536')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:42:15 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:42:15 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:42:45 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:42:45 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:43:07 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:43:07 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:43:37 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:43:37 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:43:59 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:43:59 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:45:01 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:45:01 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:45:30 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:45:30 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:46:12 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:46:12 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:48:47 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:48:47 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:50:36 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:50:36 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:51:21 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:51:21 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:53:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:53:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:54:11 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:54:11 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:54:59 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:54:59 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:58:37 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:58:37 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 07:58:37 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 07:58:37 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 08:01:06 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 08:01:06 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 08:04:19 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 08:04:19 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 08:20:36 --- ERROR: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
2017-09-18 08:20:36 --- STRACE: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(239): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 239, Array)
#1 [internal function]: Controller_TaximobilityFind->action_signup()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-18 08:21:56 --- ERROR: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
2017-09-18 08:21:56 --- STRACE: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(239): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 239, Array)
#1 [internal function]: Controller_TaximobilityFind->action_signup()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-18 08:26:01 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 08:26:01 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 08:26:21 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 08:26:21 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1536, '1669')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 08:53:11 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-18 08:53:11 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-18 09:03:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-18 09:03:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-18 09:05:12 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-18 09:05:12 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-18 09:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b65d35c754fScreenshot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 09:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b65d35c754fScreenshot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 09:44:34 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 09:44:34 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 09:46:00 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 09:46:00 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 09:46:59 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 09:46:59 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1536', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 10:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b4f43bf3f15Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 10:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b4f43bf3f15Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 10:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b4f43bf3f15Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 10:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b4f43bf3f15Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 10:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b4f43bf3f15Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 10:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b4f43bf3f15Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 11:04:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 11:04:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 11:22:30 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 11:22:30 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 11:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 11:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 11:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 11:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 11:27:54 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 11:27:54 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 11:28:07 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 11:28:07 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 11:44:27 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 11:44:27 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 11:46:02 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 11:46:02 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 11:48:44 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 11:48:44 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 11:52:25 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 11:52:25 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 11:53:44 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 11:53:44 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:00:09 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:00:09 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:00:47 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:00:47 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:01:00 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:01:00 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:09:20 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:09:20 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:09:30 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:09:30 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:09:50 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:09:50 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:13:55 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:13:55 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:14:08 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:14:08 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:14:15 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:14:15 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:38:50 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:38:50 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:39:06 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:39:06 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:39:52 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:39:52 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:40:17 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:40:17 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:40:28 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:40:28 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:41:27 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:41:27 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:41:48 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:41:48 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:42:24 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:42:24 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:42:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:42:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 12:43:05 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 12:43:05 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:03:57 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:03:57 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:04:08 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:04:08 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:06:22 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:06:22 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:07:04 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:07:04 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:07:37 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:07:37 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:07:45 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:07:45 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:13:24 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:13:24 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b4f43bf3f15Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 13:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b4f43bf3f15Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 13:15:17 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:15:17 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:15:25 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:15:25 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:15:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 13:15:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 13:22:22 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-18 13:22:22 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-18 13:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 13:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 13:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 13:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 14:05:22 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:05:22 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:06:17 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:06:17 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:08:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:08:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(7315): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(6779): Model_Taximobilitymobileapi118->get_booking_details('1597')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:08:47 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:08:47 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1597, '2839')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:08:59 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:08:59 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:09:13 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:09:13 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:09:31 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:09:31 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:09:45 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:09:45 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:10:16 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:10:16 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:10:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:10:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:10:55 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:10:55 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:11:06 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:11:06 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:11:23 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:11:23 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:11:30 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:11:30 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:11:41 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:11:41 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 14:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 14:12:25 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:12:25 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1597, '2839')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 14:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 14:13:03 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:13:03 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1597, '2839')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:13:16 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:13:16 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:13:26 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:13:26 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:13:38 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:13:38 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:14:32 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:14:32 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:14:45 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:14:45 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:14:56 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:14:56 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:15:06 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:15:06 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:16:01 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:16:01 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:16:39 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:16:39 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:17:12 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:17:12 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:17:25 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:17:25 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:18:44 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:18:44 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:18:55 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:18:55 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:19:05 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:19:05 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:19:16 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:19:16 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/Logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 14:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/Logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 14:19:34 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:19:34 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:19:57 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:19:57 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:20:08 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:20:08 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:21:52 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 14:21:52 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 14:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 14:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 15:10:15 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:10:15 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1329', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:10:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:10:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1329', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:10:37 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:10:37 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1329', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:10:46 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:10:46 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1329', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:11:07 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:11:07 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1329', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:11:19 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:11:19 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1329', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:16:03 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:16:03 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1329', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:16:12 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:16:12 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1329', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:17:49 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:17:49 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1329', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 15:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 15:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 15:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 15:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 15:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 15:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 15:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 15:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 15:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 15:37:11 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:37:11 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:39:15 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:39:15 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:40:37 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:40:37 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:40:49 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:40:49 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:41:21 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:41:21 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:41:36 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:41:36 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:41:50 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:41:50 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:42:16 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:42:16 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:44:04 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:44:04 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:44:14 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:44:14 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:44:25 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:44:25 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 15:47:01 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 15:47:01 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1597, '2839')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 16:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 16:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 16:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 16:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 16:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 16:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 16:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 16:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 16:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 16:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 16:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 16:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 16:55:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 16:55:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 16:55:56 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 16:55:56 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 16:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 16:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 16:56:14 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 16:56:14 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1597', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 17:08:26 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 17:08:26 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 17:08:31 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 17:08:31 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 17:08:51 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 17:08:51 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 17:28:14 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 17:28:14 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 18:39:56 --- ERROR: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
2017-09-18 18:39:56 --- STRACE: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(239): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 239, Array)
#1 [internal function]: Controller_TaximobilityFind->action_signup()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-18 18:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-18 18:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-18 19:51:27 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-18 19:51:27 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-18 20:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 20:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 20:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 20:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 22:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 22:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-18 22:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/Logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-18 22:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/Logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}