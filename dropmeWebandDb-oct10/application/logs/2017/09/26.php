<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-26 00:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 00:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 00:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 00:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 00:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 00:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 00:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 00:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 00:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 00:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 00:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 00:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 00:45:21 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 00:45:21 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2360', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 00:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL javascript: was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 00:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL javascript: was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 02:18:54 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 02:18:54 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(7402): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(6846): Model_Taximobilitymobileapi118->get_booking_details('2474')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 02:19:01 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 02:19:01 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail(2474, '3659')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 02:21:53 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-09-26 02:21:53 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9251): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1025): Model_Taximobilitymobileapi118->get_favouritepopularplaces('4541', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 02:21:55 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-09-26 02:21:55 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9251): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1025): Model_Taximobilitymobileapi118->get_favouritepopularplaces('4541', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:19:39 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 03:19:39 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail(1998, '3335')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:41:01 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 03:41:01 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:41:24 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 03:41:24 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:41:32 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 03:41:32 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:41:49 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 03:41:49 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:42:20 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 03:42:20 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:44:26 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 03:44:26 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:44:53 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 03:44:53 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:45:25 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 03:45:25 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 03:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 03:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 04:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 04:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 04:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 04:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 04:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 04:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 05:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 05:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 05:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 05:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 06:14:07 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 06:14:07 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(7402): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(6846): Model_Taximobilitymobileapi118->get_booking_details('2498')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 06:14:15 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 06:14:15 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail(2498, '3587')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 06:14:37 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 06:14:37 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2498', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 06:14:46 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 06:14:46 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail(2498, '3587')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 06:15:11 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 06:15:11 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2498', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 06:15:34 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 06:15:34 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2498', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 07:02:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 07:02:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail(2498, '3587')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 07:32:32 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 07:32:32 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 08:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 08:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 08:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 08:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 08:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 08:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 08:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 08:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 10:03:05 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:03:05 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:03:16 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:03:16 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:03:30 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:03:30 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:03:39 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:03:39 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 10:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 10:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 10:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 10:16:42 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:16:42 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:24:12 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-09-26 10:24:12 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-09-26 10:27:53 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:27:53 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:28:15 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:28:15 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:28:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:28:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:28:45 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:28:45 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:29:15 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:29:15 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:29:28 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:29:28 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:29:54 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:29:54 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:30:12 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:30:12 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:30:23 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:30:23 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:30:35 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:30:35 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:31:59 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:31:59 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:33:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:33:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:34:23 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:34:23 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:34:55 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:34:55 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:35:24 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:35:24 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:35:48 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:35:48 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 10:36:03 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 10:36:03 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('1491', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 11:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.ttx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 11:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.ttx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 11:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 11:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 11:50:23 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:50:23 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:50:32 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:50:32 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:50:49 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:50:49 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:51:10 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:51:10 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:51:27 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:51:27 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:51:48 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:51:48 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:52:10 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:52:10 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:52:20 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:52:20 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:52:30 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:52:30 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:53:17 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:53:17 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail(1998, '3335')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 11:54:17 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:54:17 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:54:29 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:54:29 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:55:32 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:55:32 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 11:56:52 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 11:56:52 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 12:05:48 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:05:48 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 12:06:12 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:06:12 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 12:11:26 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:11:26 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
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
2017-09-26 12:22:37 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:22:37 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:22:47 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:22:47 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('1490', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 316 ]
2017-09-26 12:43:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 316 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 316 ]
2017-09-26 12:43:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 316 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 2212 ]
2017-09-26 12:43:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 2212 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 2212 ]
2017-09-26 12:43:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 2212 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected '"', expecting variable (T_VARIABLE) or quoted-string and whitespace (T_ENCAPSED_AND_WHITESPACE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 2301 ]
2017-09-26 12:43:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected '"', expecting variable (T_VARIABLE) or quoted-string and whitespace (T_ENCAPSED_AND_WHITESPACE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 2301 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''$multip' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 2982 ]
2017-09-26 12:43:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''$multip' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 2982 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''$transac' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 4741 ]
2017-09-26 12:43:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''$transac' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 4741 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''$transac' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 4741 ]
2017-09-26 12:43:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''$transac' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 4741 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:51 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''$transac' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 4741 ]
2017-09-26 12:43:51 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''$transac' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 4741 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:51 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 7319 ]
2017-09-26 12:43:51 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 7319 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:51 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 7319 ]
2017-09-26 12:43:51 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 7319 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:43:51 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 9621 ]
2017-09-26 12:43:51 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 9621 ]
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
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:44:23 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:44:23 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:44:59 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:44:59 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:45:36 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:45:36 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:45:43 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:45:43 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:47:57 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:47:57 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:51:25 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:51:25 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 12:51:39 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-26 12:51:39 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2181): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4051): Model_Taximobilitymobileapi118->get_trip_detail('2474', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-09-26 15:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 15:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 16:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 16:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 16:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 16:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 17:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 17:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 18:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/ie8.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 18:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/ie8.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 19:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-26 19:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-26 21:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 21:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 21:47:03 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-09-26 21:47:03 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-09-26 22:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-26 22:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59bb650455121dropMe.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-26 23:26:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-09-26 23:26:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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