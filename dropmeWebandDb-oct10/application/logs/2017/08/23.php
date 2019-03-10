<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-23 06:16:03 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-08-23 06:16:03 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('loadtest.popula...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi118.php(9162): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(994): Model_Taximobilitymobileapi118->get_favouritepopularplaces('2166', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-23 10:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-23 10:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-23 11:00:18 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-08-23 11:00:18 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('loadtest.popula...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8960): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(995): Model_Taximobilitymobileapi117->get_favouritepopularplaces('2173', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-23 11:01:03 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-08-23 11:01:03 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('loadtest.popula...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8960): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(995): Model_Taximobilitymobileapi117->get_favouritepopularplaces('2173', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-23 11:01:18 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-08-23 11:01:18 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('loadtest.popula...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117.php(8960): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(995): Model_Taximobilitymobileapi117->get_favouritepopularplaces('2173', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-23 12:25:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-23 12:25:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 330, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-23 14:42:29 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-23 14:42:29 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 330, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-23 19:24:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-23 19:24:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 330, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-23 21:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-23 21:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}