<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-09 07:26:56 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:26:56 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
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
2017-08-09 07:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-09 07:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-09 07:27:02 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:27:02 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-09 07:27:02 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:27:02 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-09 07:27:14 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:27:14 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-09 07:27:30 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-09 07:27:30 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#5 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydispatchadmin.php(30): require('/var/www/vhosts...')
#7 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(13): Controller_TaximobilityDispatchadmin->__construct(Object(Request), Object(Response))
#8 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#13 {main}
2017-08-09 07:27:31 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:27:31 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-09 07:27:31 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:27:31 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-09 07:27:40 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-09 07:27:40 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#5 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydispatchadmin.php(30): require('/var/www/vhosts...')
#7 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(13): Controller_TaximobilityDispatchadmin->__construct(Object(Request), Object(Response))
#8 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#13 {main}
2017-08-09 07:27:44 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:27:44 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-09 07:27:45 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-08-09 07:27:45 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 4 ]: Stream is closed ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('loadtest', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#5 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydispatchadmin.php(30): require('/var/www/vhosts...')
#7 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitytaxidispatch.php(13): Controller_TaximobilityDispatchadmin->__construct(Object(Request), Object(Response))
#8 [internal function]: Controller_TaximobilityTaxidispatch->__construct(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#13 {main}
2017-08-09 07:27:50 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:27:50 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(40): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-09 07:28:13 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:28:13 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-09 07:28:44 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-09 07:28:44 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection closed calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(28): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#6 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#7 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#11 {main}
2017-08-09 08:29:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Taximobilitymobileapi118' not found ~ APPPATH/classes/model/mobileapi118.php [ 13 ]
2017-08-09 08:29:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Taximobilitymobileapi118' not found ~ APPPATH/classes/model/mobileapi118.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-08-09 09:13:05 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-09 09:13:05 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-09 21:09:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-09 21:09:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}