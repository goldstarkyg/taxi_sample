<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-15 02:31:01 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-15 02:31:01 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitymobileapi118.php(2402): Kohana_MangoDB->aggregate('passengers_logs', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(6280): Model_Taximobilitymobileapi118->get_request_detail('2157', '883')
#5 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#6 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#10 {main}
2017-08-15 03:25:35 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-15 03:25:35 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-15 06:50:38 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-15 06:50:38 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-15 21:17:46 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-15 21:17:46 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-15 22:31:32 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-15 22:31:32 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}