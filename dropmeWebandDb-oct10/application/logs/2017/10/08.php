<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-10-08 00:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL loginWithSetCookie was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-08 00:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL loginWithSetCookie was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-08 01:00:35 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-10-08 01:00:35 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9251): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1025): Model_Taximobilitymobileapi118->get_favouritepopularplaces('5756', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-10-08 02:28:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-10-08 02:28:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-10-08 07:07:16 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-10-08 07:07:16 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9251): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1025): Model_Taximobilitymobileapi118->get_favouritepopularplaces('5899', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-10-08 07:56:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-10-08 07:56:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-10-08 08:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-08 08:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-08 08:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 08:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 08:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/db_setup.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 09:07:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-08 09:07:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-08 09:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 09:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 11:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 11:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 12:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-08 12:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-08 14:51:08 --- ERROR: MongoDB\Driver\Exception\UnexpectedValueException [ 0 ]: Got invalid UTF-8 value serializing '‚Å     ,,BLMMRSaaaaaddegggiiklllnnooorsyz' ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 274 ]
2017-10-08 14:51:08 --- STRACE: MongoDB\Driver\Exception\UnexpectedValueException [ 0 ]: Got invalid UTF-8 value serializing '‚Å     ,,BLMMRSaaaaaddegggiiklllnnooorsyz' ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 274 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(274): MongoDB\Driver\Command->__construct(Array)
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(203): MongoDB\Operation\Aggregate->createCommand(Object(MongoDB\Driver\Server), true)
#2 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#4 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#5 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(5304): Kohana_MangoDB->aggregate('csc', Array)
#6 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1060): Model_Taximobilitymobileapi118->get_modelfare_details('', '1', '126/B Maligagod...')
#7 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#8 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(137): Kohana_Request->execute()
#12 {main}
2017-10-08 14:51:21 --- ERROR: MongoDB\Driver\Exception\UnexpectedValueException [ 0 ]: Got invalid UTF-8 value serializing '‚Å     ,,BLMMRSaaaaaddegggiiklllnnooorsyz' ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 274 ]
2017-10-08 14:51:21 --- STRACE: MongoDB\Driver\Exception\UnexpectedValueException [ 0 ]: Got invalid UTF-8 value serializing '‚Å     ,,BLMMRSaaaaaddegggiiklllnnooorsyz' ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 274 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(274): MongoDB\Driver\Command->__construct(Array)
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(203): MongoDB\Operation\Aggregate->createCommand(Object(MongoDB\Driver\Server), true)
#2 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#4 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#5 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(5304): Kohana_MangoDB->aggregate('csc', Array)
#6 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1060): Model_Taximobilitymobileapi118->get_modelfare_details('', '3', '126/B Maligagod...')
#7 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#8 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(137): Kohana_Request->execute()
#12 {main}
2017-10-08 14:51:22 --- ERROR: MongoDB\Driver\Exception\UnexpectedValueException [ 0 ]: Got invalid UTF-8 value serializing '‚Å     ,,BLMMRSaaaaaddegggiiklllnnooorsyz' ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 274 ]
2017-10-08 14:51:22 --- STRACE: MongoDB\Driver\Exception\UnexpectedValueException [ 0 ]: Got invalid UTF-8 value serializing '‚Å     ,,BLMMRSaaaaaddegggiiklllnnooorsyz' ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 274 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(274): MongoDB\Driver\Command->__construct(Array)
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(203): MongoDB\Operation\Aggregate->createCommand(Object(MongoDB\Driver\Server), true)
#2 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#4 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#5 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(5304): Kohana_MangoDB->aggregate('csc', Array)
#6 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1060): Model_Taximobilitymobileapi118->get_modelfare_details('', '1', '126/B Maligagod...')
#7 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#8 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(137): Kohana_Request->execute()
#12 {main}
2017-10-08 19:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 19:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 19:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 19:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 19:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 19:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 19:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 19:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 19:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 19:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 19:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 19:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 20:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2billing/admin/Public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 20:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2billing/admin/Public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 21:23:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 21:23:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 22:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 22:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-08 23:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-08 23:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}