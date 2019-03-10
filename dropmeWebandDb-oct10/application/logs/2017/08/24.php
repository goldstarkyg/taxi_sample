<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-24 03:48:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-24 03:48:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-08-24 06:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-24 06:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-24 06:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-24 06:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-24 07:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-24 07:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-24 07:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-24 07:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-24 07:17:02 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:17:02 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 973, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:17:08 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:17:08 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 973, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:17:12 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:17:12 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 973, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:17:18 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:17:18 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 973, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:17:21 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:17:21 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 973, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:18:01 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:18:01 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 974, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:18:07 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:18:07 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 974, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:18:11 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:18:11 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 974, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:18:17 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:18:17 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 974, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:18:21 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
2017-08-24 07:18:21 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/taximobility/classes/model/taximobilitytaxidispatch.php [ 2715 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/var/www/vhosts...', 2715, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitytaxidispatch.php(2715): explode(',', Object(MongoDB\Model\BSONArray))
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(1114): Model_TaximobilityTaxidispatch->check_new_request_tripid('', '', 974, 0, '2017-08-24 12:4...', '')
#3 [internal function]: Controller_TaximobilityTaxidispatch->action_all_booking_list_manage()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-24 07:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-24 07:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-24 10:01:18 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16604 ]: geoNear command failed: { ok: 0.0, errmsg: "'near' field must be point", code: 17304, codeName: "Location17304" } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-24 10:01:18 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16604 ]: geoNear command failed: { ok: 0.0, errmsg: "'near' field must be point", code: 17304, codeName: "Location17304" } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilityfind114.php(82): Kohana_MangoDB->aggregate('driver_driverin...', Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3418): Model_TaximobilityFind114->getNearestDrivers('1', '-180.0', '-180.0', '2017-08-24 15:3...', '', '105', '0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-24 13:44:41 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-08-24 13:44:41 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
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