<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-07 02:14:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-07 02:14:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-07 04:23:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-07 04:23:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-07 05:02:55 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ MODPATH/domain/classes/model/domain.php [ 97 ]
2017-09-07 05:02:55 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ MODPATH/domain/classes/model/domain.php [ 97 ]
--
#0 /var/www/html/modules/domain/classes/model/domain.php(97): MongoDB\Driver\Manager->executeQuery('dropmetaxi.comp...', Object(MongoDB\Driver\Query))
#1 /var/www/html/modules/domain/classes/controller/domain.php(109): Model_Domain->get_live_domain_info('dropmetaxi')
#2 [internal function]: Controller_Domain->action_add_domain()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Domain))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-09-07 05:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 05:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 05:05:02 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ MODPATH/domain/classes/model/domain.php [ 97 ]
2017-09-07 05:05:02 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ MODPATH/domain/classes/model/domain.php [ 97 ]
--
#0 /var/www/html/modules/domain/classes/model/domain.php(97): MongoDB\Driver\Manager->executeQuery('dropmetaxi.comp...', Object(MongoDB\Driver\Query))
#1 /var/www/html/modules/domain/classes/controller/domain.php(109): Model_Domain->get_live_domain_info('dropmetaxi')
#2 [internal function]: Controller_Domain->action_add_domain()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Domain))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-09-07 05:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 05:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 05:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 05:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 05:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 05:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 05:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 05:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 05:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 05:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 05:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 05:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 05:13:18 --- ERROR: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
2017-09-07 05:13:18 --- STRACE: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
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
2017-09-07 05:13:54 --- ERROR: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
2017-09-07 05:13:54 --- STRACE: ErrorException [ 8 ]: Undefined index: fare_status ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 1009 ]
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
2017-09-07 06:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59af7f1392d70cargils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 06:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59af7f1392d70cargils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 06:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59af7f1392d70cargils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 06:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59af7f1392d70cargils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 07:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 07:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 07:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 07:26:00 --- ERROR: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_location_history index: _id_ dup key: { : 85 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
2017-09-07 07:26:00 --- STRACE: MongoDB\Driver\Exception\BulkWriteException [ 0 ]: E11000 duplicate key error collection: dropmetaxi.driver_location_history index: _id_ dup key: { : 85 } ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php [ 89 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php(89): MongoDB\Driver\Server->executeBulkWrite('dropmetaxi.driv...', Object(MongoDB\Driver\BulkWrite), Object(MongoDB\Driver\WriteConcern))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(737): MongoDB\Operation\InsertOne->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(532): MongoDB\Collection->insertOne(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(370): Kohana_MangoDB->_call('insertOne', Array, Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(1811): Kohana_MangoDB->insertOne('driver_location...', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(844): Model_Taximobilitymobileapi118->save_driver_location_history(Array, '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 07:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 07:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 07:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phppma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phppma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shopdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shopdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL MyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL MyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL program was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL program was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL database was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL database was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 07:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 07:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/sysadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 07:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/sysadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/sqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 07:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/sqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 07:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 07:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 07:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/sqlweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/sqlweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/sqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/sqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/sql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/sql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/dbweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/dbweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-my-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-my-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 07:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 07:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 08:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 08:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 08:01:42 --- ERROR: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 1524 ]
2017-09-07 08:01:42 --- STRACE: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ MODPATH/taximobility/classes/model/taximobilitymobileapi118.php [ 1524 ]
--
#0 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(1524): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 1524, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobile104.php(672): Model_Taximobilitymobileapi118->passenger_transdetails('148')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(8422): Controller_TaximobilityMobile104->send_mail_passenger('148', 1)
#3 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#4 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-07 08:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 08:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 10:38:18 --- ERROR: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
2017-09-07 10:38:18 --- STRACE: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
--
#0 /var/www/html/application/views/themes/default/website_user/dashboard.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 257, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/themes/default/template.php(102): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(136): Kohana_Request->execute()
#13 {main}
2017-09-07 10:38:59 --- ERROR: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
2017-09-07 10:38:59 --- STRACE: ErrorException [ 8 ]: Undefined index: used_wallet_amount ~ APPPATH/views/themes/default/website_user/dashboard.php [ 257 ]
--
#0 /var/www/html/application/views/themes/default/website_user/dashboard.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 257, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/themes/default/template.php(102): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Users))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(136): Kohana_Request->execute()
#13 {main}
2017-09-07 10:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 10:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 11:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 11:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/model_image/thumb_act_.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 12:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phppma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phppma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shopdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shopdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL MyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL MyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL program was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL program was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL database was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL database was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 12:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 12:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/sysadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 12:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/sysadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/sqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 12:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/sqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 12:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 12:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 12:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/sqlweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/sqlweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/sqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/sqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/sql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/sql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/dbweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/dbweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-my-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-my-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2011 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:20:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 12:20:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 12:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 12:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 12:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 12:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 13:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 13:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 14:53:19 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:19 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:19 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:19 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:19 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:19 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:19 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:19 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:19 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:19 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:19 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:19 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:20 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:20 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:20 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:20 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:21 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:21 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:21 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:21 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:21 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:21 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:21 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:21 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:23 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:23 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/common_config.php(41): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:24 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:24 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/html/a...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-07 14:53:27 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-09-07 14:53:27 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '34.197.197.136:48018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(813): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/common_config.php(41): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#6 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(136): Kohana_Request->execute()
#12 {main}
2017-09-07 15:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-07 15:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 15:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 15:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 15:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 15:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 15:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 15:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 15:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 15:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 15:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 15:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 15:50:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-07 15:50:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-07 17:24:05 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-07 17:24:05 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-07 18:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-07 18:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-07 20:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 20:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-07 20:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-07 20:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}