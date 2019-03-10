<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-10-02 02:05:25 --- ERROR: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_location_history index: _id_ dup key: { : 1330 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
2017-10-02 02:05:25 --- STRACE: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_location_history index: _id_ dup key: { : 1330 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php(89): MongoDB\Driver\Server->executeBulkWrite('dropmetaxi.driv...', Object(MongoDB\Driver\BulkWrite), Object(MongoDB\Driver\WriteConcern))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(737): MongoDB\Operation\InsertOne->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(532): MongoDB\Collection->insertOne(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(370): Kohana_MangoDB->_call('insertOne', Array, Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(1813): Kohana_MangoDB->insertOne('driver_location...', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(849): Model_Taximobilitymobileapi118->save_driver_location_history(Array, '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-10-02 02:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-02 02:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-02 02:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-02 02:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-02 02:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-02 02:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-02 03:26:26 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-10-02 03:26:26 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(map.txt):...', '/var/www/html/a...', 717, Array)
#1 /var/www/html/application/views/themes/default/web_booking.php(717): fopen('map.txt', 'wb')
#2 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#3 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#4 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/html/application/views/themes/default/template.php(102): Kohana_View->__toString()
#6 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#7 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#8 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Find))
#11 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/index.php(137): Kohana_Request->execute()
#14 {main}
2017-10-02 03:26:59 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-10-02 03:26:59 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 03:57:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-10-02 03:57:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-10-02 04:27:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-10-02 04:27:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-10-02 04:31:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:31:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:31:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:31:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:31:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:31:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:31:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:31:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:31:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:31:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:31:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:31:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:31:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:31:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:34:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:34:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:35:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:35:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:35:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:35:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 04:52:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-10-02 04:52:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-02 05:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-02 05:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-02 05:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-02 05:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-02 05:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-02 05:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-02 06:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-02 06:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-02 06:58:09 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-10-02 06:58:09 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
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
2017-10-02 06:58:16 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-10-02 06:58:16 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
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
2017-10-02 06:58:31 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-10-02 06:58:31 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
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
2017-10-02 08:18:52 --- ERROR: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_shift_history index: _id_ dup key: { : 5472 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
2017-10-02 08:18:52 --- STRACE: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_shift_history index: _id_ dup key: { : 5472 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php(89): MongoDB\Driver\Server->executeBulkWrite('dropmetaxi.driv...', Object(MongoDB\Driver\BulkWrite), Object(MongoDB\Driver\WriteConcern))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(737): MongoDB\Operation\InsertOne->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(532): MongoDB\Collection->insertOne(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(370): Kohana_MangoDB->_call('insertOne', Array, Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi117extended.php(384): Kohana_MangoDB->insertOne('driver_shift_hi...', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(7732): Model_TaximobilityMobileapi117extended->insert_drivershift(Array)
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-10-02 08:30:13 --- ERROR: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.passengers_logs index: _id_ dup key: { : 3253 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
2017-10-02 08:30:13 --- STRACE: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.passengers_logs index: _id_ dup key: { : 3253 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php(89): MongoDB\Driver\Server->executeBulkWrite('dropmetaxi.pass...', Object(MongoDB\Driver\BulkWrite), Object(MongoDB\Driver\WriteConcern))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(737): MongoDB\Operation\InsertOne->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(532): MongoDB\Collection->insertOne(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(370): Kohana_MangoDB->_call('insertOne', Array, Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(8107): Kohana_MangoDB->insertOne('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(9870): Model_Taximobilitymobileapi118->save_street_trip(Array)
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-10-02 08:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-02 08:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-02 09:36:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-10-02 09:36:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-10-02 10:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-02 10:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-02 10:41:18 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/943ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4187 ]
2017-10-02 10:41:18 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/943ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4187 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/html/m...', 4187, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4187): file_put_contents('/var/www/html/p...', '\x89PNG\r\n\x1A\n\x00\x00\x00\rIHD...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(137): Kohana_Request->execute()
#7 {main}
2017-10-02 11:15:06 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-10-02 11:15:06 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
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
2017-10-02 11:15:08 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-10-02 11:15:08 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
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
2017-10-02 14:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-02 14:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-02 16:19:31 --- ERROR: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_shift_history index: _id_ dup key: { : 5597 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
2017-10-02 16:19:31 --- STRACE: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_shift_history index: _id_ dup key: { : 5597 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php(89): MongoDB\Driver\Server->executeBulkWrite('dropmetaxi.driv...', Object(MongoDB\Driver\BulkWrite), Object(MongoDB\Driver\WriteConcern))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(737): MongoDB\Operation\InsertOne->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(532): MongoDB\Collection->insertOne(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(370): Kohana_MangoDB->_call('insertOne', Array, Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi117extended.php(384): Kohana_MangoDB->insertOne('driver_shift_hi...', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(7732): Model_TaximobilityMobileapi117extended->insert_drivershift(Array)
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(137): Kohana_Request->execute()
#11 {main}
2017-10-02 17:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-02 17:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-02 20:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL javascript: was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-02 20:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL javascript: was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-02 23:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-02 23:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-02 23:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-02 23:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}