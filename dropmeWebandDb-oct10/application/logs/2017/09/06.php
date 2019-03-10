<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-06 00:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-06 00:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-06 00:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-06 00:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-06 02:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL recordings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-06 02:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL recordings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-06 02:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2billing/admin/Public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 02:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2billing/admin/Public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 02:58:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-06 02:58:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-06 04:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 04:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 04:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 04:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 08:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59af7f1392d70cargils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-06 08:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59af7f1392d70cargils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-06 09:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 09:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 09:52:45 --- ERROR: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_location_history index: _id_ dup key: { : 48 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
2017-09-06 09:52:45 --- STRACE: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_location_history index: _id_ dup key: { : 48 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php(89): MongoDB\Driver\Server->executeBulkWrite('dropmetaxi.driv...', Object(MongoDB\Driver\BulkWrite), Object(MongoDB\Driver\WriteConcern))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(737): MongoDB\Operation\InsertOne->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(532): MongoDB\Collection->insertOne(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(370): Kohana_MangoDB->_call('insertOne', Array, Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(1811): Kohana_MangoDB->insertOne('driver_location...', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(829): Model_Taximobilitymobileapi118->save_driver_location_history(Array, '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-06 10:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 10:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 10:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 10:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 13:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/manage_sitehttp://34.197.229.1/admin/manage_site ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 13:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/manage_sitehttp://34.197.229.1/admin/manage_site ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 13:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 13:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 13:58:58 --- ERROR: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
2017-09-06 13:58:58 --- STRACE: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
--
#0 /var/www/html/modules/taximobility/classes/model/taximobilitymanage.php(1009): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 1009, Array)
#1 [internal function]: Model_TaximobilityManage->{closure}(Array)
#2 /var/www/html/modules/taximobility/classes/model/taximobilitymanage.php(1013): array_map(Object(Closure), Array)
#3 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(388): Model_TaximobilityManage->all_fare_list(1, 0, '10')
#4 [internal function]: Controller_TaximobilityManage->action_fare()
#5 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 13:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 13:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 13:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 13:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 13:59:17 --- ERROR: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
2017-09-06 13:59:17 --- STRACE: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
--
#0 /var/www/html/modules/taximobility/classes/model/taximobilitymanage.php(1009): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 1009, Array)
#1 [internal function]: Model_TaximobilityManage->{closure}(Array)
#2 /var/www/html/modules/taximobility/classes/model/taximobilitymanage.php(1013): array_map(Object(Closure), Array)
#3 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(388): Model_TaximobilityManage->all_fare_list(1, 0, '10')
#4 [internal function]: Controller_TaximobilityManage->action_fare()
#5 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:00:16 --- ERROR: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
2017-09-06 14:00:16 --- STRACE: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
--
#0 /var/www/html/modules/taximobility/classes/model/taximobilitymanage.php(1009): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 1009, Array)
#1 [internal function]: Model_TaximobilityManage->{closure}(Array)
#2 /var/www/html/modules/taximobility/classes/model/taximobilitymanage.php(1013): array_map(Object(Closure), Array)
#3 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(388): Model_TaximobilityManage->all_fare_list(1, 0, '10')
#4 [internal function]: Controller_TaximobilityManage->action_fare()
#5 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 14:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 14:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-06 14:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-06 14:30:04 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ MODPATH/domain/classes/model/domain.php [ 97 ]
2017-09-06 14:30:04 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ MODPATH/domain/classes/model/domain.php [ 97 ]
--
#0 /var/www/html/modules/domain/classes/model/domain.php(97): MongoDB\Driver\Manager->executeQuery('dropmetaxi.comp...', Object(MongoDB\Driver\Query))
#1 /var/www/html/modules/domain/classes/controller/domain.php(109): Model_Domain->get_live_domain_info('dropmetaxi')
#2 [internal function]: Controller_Domain->action_add_domain()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Domain))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-09-06 14:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 14:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 14:45:17 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ MODPATH/domain/classes/model/domain.php [ 97 ]
2017-09-06 14:45:17 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ MODPATH/domain/classes/model/domain.php [ 97 ]
--
#0 /var/www/html/modules/domain/classes/model/domain.php(97): MongoDB\Driver\Manager->executeQuery('dropmetaxi.comp...', Object(MongoDB\Driver\Query))
#1 /var/www/html/modules/domain/classes/controller/domain.php(109): Model_Domain->get_live_domain_info('dropmetaxi')
#2 [internal function]: Controller_Domain->action_add_domain()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Domain))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-09-06 14:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59af7f1392d70cargils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-06 14:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59af7f1392d70cargils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-06 14:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 14:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 14:56:35 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:35 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:35 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:35 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:36 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:36 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:36 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:36 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:36 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:36 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:36 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:36 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:37 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:37 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:37 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:37 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:37 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:37 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:37 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:37 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:37 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:37 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:38 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:38 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:38 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:38 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:38 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:38 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:39 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
2017-09-06 14:56:39 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi118' not found ~ APPPATH/classes/controller/mobileapi118.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-06 14:56:40 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1201 ]
2017-09-06 14:56:40 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1201 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:41 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1565 ]
2017-09-06 14:56:41 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 1565 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:42 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3146 ]
2017-09-06 14:56:42 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3146 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:42 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3542 ]
2017-09-06 14:56:42 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3542 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:42 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3573 ]
2017-09-06 14:56:42 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3573 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4686 ]
2017-09-06 14:56:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4686 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4742 ]
2017-09-06 14:56:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4742 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''driver_pho' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4848 ]
2017-09-06 14:56:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''driver_pho' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4848 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5407 ]
2017-09-06 14:56:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5407 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6123 ]
2017-09-06 14:56:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6123 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6314 ]
2017-09-06 14:56:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6314 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or '{' or '$' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6470 ]
2017-09-06 14:56:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or '{' or '$' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6470 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:56:43 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6976 ]
2017-09-06 14:56:43 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 6976 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-06 14:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 14:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 14:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 14:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 15:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loc/2017_09_06_14.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 15:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loc/2017_09_06_14.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 15:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loc/2017_09_06_14.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 15:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loc/2017_09_06_14.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 18:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL check_proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-06 18:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL check_proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-06 19:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/common.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 19:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/common.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 19:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stssys.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 19:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stssys.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 19:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: command.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 19:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: command.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 20:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-06 20:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-06 20:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 20:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 20:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 20:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 20:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 20:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 20:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 20:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 20:15:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-06 20:15:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-06 20:40:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-06 20:40:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-06 22:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-06 22:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}