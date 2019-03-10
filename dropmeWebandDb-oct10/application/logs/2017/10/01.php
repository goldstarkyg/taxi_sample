<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-10-01 01:14:31 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-10-01 01:14:31 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9251): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1025): Model_Taximobilitymobileapi118->get_favouritepopularplaces('2520', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-10-01 02:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 02:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 03:19:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-10-01 03:19:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-10-01 06:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 06:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 06:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 06:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 07:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 07:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 08:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 08:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 10:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 10:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 11:26:14 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-10-01 11:26:14 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-10-01 11:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 11:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 11:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 11:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 12:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 12:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 12:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 12:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plugins/wp-phpmyadmin/wp-phpmyadmin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 12:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plugins/wp-phpmyadmin/wp-phpmyadmin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-01 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-01 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 13:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 13:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 16:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 16:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 18:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 18:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-01 23:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-01 23:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}