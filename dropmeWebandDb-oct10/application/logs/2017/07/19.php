<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-19 10:38:26 --- ERROR: ErrorException: Use of undefined constant DBDATABASENAME - assumed 'DBDATABASENAME' in /var/www/vhosts/loadtest/modules/mangodb/config/mangoDB.php:7
Stack trace:
#0 /var/www/vhosts/loadtest/modules/mangodb/config/mangoDB.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 7, Array)
#1 /var/www/vhosts/loadtest/system/classes/kohana/core.php(800): include('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/var/www/vhosts...')
#3 /var/www/vhosts/loadtest/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('mangoDB')
#4 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(51): Kohana_Config->load('mangoDB')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(16): Kohana_MangoDB::instance('default')
#6 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): Model_TaximobilityCommonmodel->__construct()
#7 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(49): Kohana_Model::factory('commonmodel')
#8 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#9 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/vhosts/loadtest/index.php(135): Kohana_Request->execute()
#14 {main}
2017-07-19 10:38:35 --- ERROR: ErrorException: Use of undefined constant DBDATABASENAME - assumed 'DBDATABASENAME' in /var/www/vhosts/loadtest/modules/mangodb/config/mangoDB.php:7
Stack trace:
#0 /var/www/vhosts/loadtest/modules/mangodb/config/mangoDB.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 7, Array)
#1 /var/www/vhosts/loadtest/system/classes/kohana/core.php(800): include('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/var/www/vhosts...')
#3 /var/www/vhosts/loadtest/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('mangoDB')
#4 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(51): Kohana_Config->load('mangoDB')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(16): Kohana_MangoDB::instance('default')
#6 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): Model_TaximobilityCommonmodel->__construct()
#7 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(49): Kohana_Model::factory('commonmodel')
#8 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#9 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/vhosts/loadtest/index.php(135): Kohana_Request->execute()
#14 {main}
2017-07-19 10:40:14 --- ERROR: ErrorException: Use of undefined constant DBDATABASENAME - assumed 'DBDATABASENAME' in /var/www/vhosts/loadtest/modules/mangodb/config/mangoDB.php:7
Stack trace:
#0 /var/www/vhosts/loadtest/modules/mangodb/config/mangoDB.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 7, Array)
#1 /var/www/vhosts/loadtest/system/classes/kohana/core.php(800): include('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/var/www/vhosts...')
#3 /var/www/vhosts/loadtest/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('mangoDB')
#4 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(51): Kohana_Config->load('mangoDB')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(16): Kohana_MangoDB::instance('default')
#6 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): Model_TaximobilityCommonmodel->__construct()
#7 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(49): Kohana_Model::factory('commonmodel')
#8 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#9 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/vhosts/loadtest/index.php(135): Kohana_Request->execute()
#14 {main}
2017-07-19 10:40:16 --- ERROR: ErrorException: Use of undefined constant DBDATABASENAME - assumed 'DBDATABASENAME' in /var/www/vhosts/loadtest/modules/mangodb/config/mangoDB.php:7
Stack trace:
#0 /var/www/vhosts/loadtest/modules/mangodb/config/mangoDB.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 7, Array)
#1 /var/www/vhosts/loadtest/system/classes/kohana/core.php(800): include('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/var/www/vhosts...')
#3 /var/www/vhosts/loadtest/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('mangoDB')
#4 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(51): Kohana_Config->load('mangoDB')
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(16): Kohana_MangoDB::instance('default')
#6 /var/www/vhosts/loadtest/system/classes/kohana/model.php(26): Model_TaximobilityCommonmodel->__construct()
#7 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(49): Kohana_Model::factory('commonmodel')
#8 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#9 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/vhosts/loadtest/index.php(135): Kohana_Request->execute()
#14 {main}
2017-07-19 11:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-19 11:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-19 13:00:45 --- ERROR: ErrorException: Undefined index: date in /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php:799
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-12 00:0...', '2017-07-19 18:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-19 14:19:40 --- ERROR: ErrorException: Undefined index: date in /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php:799
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-12 00:0...', '2017-07-19 19:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-19 14:27:56 --- ERROR: ErrorException: Undefined index: date in /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php:799
Stack trace:
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-12 00:0...', '2017-07-19 19:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-19 14:37:07 --- ERROR: MongoDB\Driver\Exception\BulkWriteException: E11000 duplicate key error collection: loadtest.driver_request_details index: _id_ dup key: { : 349 } in /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php:89
Stack trace:
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/InsertOne.php(89): MongoDB\Driver\Server->executeBulkWrite('loadtest.driver...', Object(MongoDB\Driver\BulkWrite), Object(MongoDB\Driver\WriteConcern))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(737): MongoDB\Operation\InsertOne->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(532): MongoDB\Collection->insertOne(Array, Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(370): Kohana_MangoDB->_call('insertOne', Array, Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi117extended.php(139): Kohana_MangoDB->insertOne('driver_request_...', Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(3435): Model_TaximobilityMobileapi117extended->insert_request_details(Array)
#6 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}