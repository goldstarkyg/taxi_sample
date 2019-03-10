<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-31 01:43:37 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-31 01:43:37 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(41): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-31 04:29:24 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-31 04:29:24 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection refused calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/vhosts/loadtest/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/vhosts/loadtest/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/vhosts/loadtest/application/classes/common_config.php(41): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#6 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-31 11:30:18 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-31 11:30:18 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/common_config.php(41): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#6 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-31 11:30:36 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-31 11:30:36 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/common_config.php(41): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#6 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-31 11:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 11:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-31 11:31:07 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-31 11:31:07 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/common_config.php(41): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#6 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-31 11:32:06 --- ERROR: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
2017-08-31 11:32:06 --- STRACE: MongoDB\Driver\Exception\ConnectionTimeoutException [ 13053 ]: No suitable servers found (`serverSelectionTryOnce` set): [connection timeout calling ismaster on '172.31.61.23:27018'] ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php [ 177 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(177): MongoDB\Driver\Manager->selectServer(Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#3 /var/www/html/modules/taximobility/classes/model/taximobilitycommonmodel.php(781): Kohana_MangoDB->aggregate('siteinfo', Array)
#4 /var/www/html/application/classes/common_config.php(41): Model_TaximobilityCommonmodel->common_site_info(Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#6 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(201): Kohana_Request->execute()
#12 {main}
2017-08-31 11:32:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 11:32:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-31 13:50:58 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 13:50:58 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 13:51:54 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 13:51:54 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:00:36 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:00:36 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:00:40 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:00:40 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:00:45 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:00:45 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:01:06 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:01:06 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:01:07 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:01:07 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:01:10 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:01:10 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:02:01 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:02:01 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:02:04 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:02:04 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:02:07 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:02:07 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:02:08 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:02:08 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:02:10 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-08-31 14:02:10 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:10:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-08-31 14:10:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:13:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-08-31 14:13:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:13:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-08-31 14:13:27 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:13:29 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-08-31 14:13:29 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:14:45 --- ERROR: ErrorException [ 8 ]: Use of undefined constant රු - assumed 'රු' ~ APPPATH/classes/common_config.php [ 342 ]
2017-08-31 14:14:45 --- STRACE: ErrorException [ 8 ]: Use of undefined constant රු - assumed 'රු' ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:16:09 --- ERROR: ErrorException [ 8 ]: Use of undefined constant රු - assumed 'රු' ~ APPPATH/classes/common_config.php [ 342 ]
2017-08-31 14:16:09 --- STRACE: ErrorException [ 8 ]: Use of undefined constant රු - assumed 'රු' ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:16:27 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'currency_code' ~ APPPATH/classes/common_config.php [ 346 ]
2017-08-31 14:16:27 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'currency_code' ~ APPPATH/classes/common_config.php [ 346 ]
--
#0 /var/www/html/application/classes/common_config.php(346): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 346, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:18:57 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'currency_code' ~ APPPATH/classes/common_config.php [ 346 ]
2017-08-31 14:18:57 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'currency_code' ~ APPPATH/classes/common_config.php [ 346 ]
--
#0 /var/www/html/application/classes/common_config.php(346): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 346, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:19:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant USER_SELECTED_TIMEZONE - assumed 'USER_SELECTED_TIMEZONE' ~ MODPATH/commonfunction/classes/kohana/commonfunction.php [ 435 ]
2017-08-31 14:19:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant USER_SELECTED_TIMEZONE - assumed 'USER_SELECTED_TIMEZONE' ~ MODPATH/commonfunction/classes/kohana/commonfunction.php [ 435 ]
--
#0 /var/www/html/modules/commonfunction/classes/kohana/commonfunction.php(435): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/m...', 435, Array)
#1 /var/www/html/modules/taximobility/classes/model/taximobilitysiteusers.php(20): Kohana_Commonfunction::createdateby_user_timezone()
#2 /var/www/html/system/classes/kohana/model.php(26): Model_TaximobilitySiteusers->__construct()
#3 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(53): Kohana_Model::factory('siteusers')
#4 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#5 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#6 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(136): Kohana_Request->execute()
#10 {main}
2017-08-31 14:20:14 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
2017-08-31 14:20:14 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
--
#0 /var/www/html/application/classes/common_config.php(348): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 348, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:21:30 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
2017-08-31 14:21:30 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
--
#0 /var/www/html/application/classes/common_config.php(348): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 348, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:22:16 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
2017-08-31 14:22:16 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
--
#0 /var/www/html/application/classes/common_config.php(348): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 348, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:22:18 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
2017-08-31 14:22:18 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
--
#0 /var/www/html/application/classes/common_config.php(348): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 348, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:22:34 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
2017-08-31 14:22:34 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
--
#0 /var/www/html/application/classes/common_config.php(348): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 348, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:22:38 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'currency_code' ~ APPPATH/classes/common_config.php [ 350 ]
2017-08-31 14:22:38 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'currency_code' ~ APPPATH/classes/common_config.php [ 350 ]
--
#0 /var/www/html/application/classes/common_config.php(350): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 350, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:23:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ‎රු - assumed '‎රු' ~ APPPATH/classes/common_config.php [ 351 ]
2017-08-31 14:23:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ‎රු - assumed '‎රු' ~ APPPATH/classes/common_config.php [ 351 ]
--
#0 /var/www/html/application/classes/common_config.php(351): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 351, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:23:21 --- ERROR: ErrorException [ 0 ]: syntax error, unexpected ''රු'' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ')' ~ APPPATH/classes/common_config.php [ 351 ]
2017-08-31 14:23:21 --- STRACE: ErrorException [ 0 ]: syntax error, unexpected ''රු'' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ')' ~ APPPATH/classes/common_config.php [ 351 ]
--
#0 {main}
2017-08-31 14:24:56 --- ERROR: ErrorException [ 0 ]: syntax error, unexpected ''රු'' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ')' ~ APPPATH/classes/common_config.php [ 351 ]
2017-08-31 14:24:56 --- STRACE: ErrorException [ 0 ]: syntax error, unexpected ''රු'' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ')' ~ APPPATH/classes/common_config.php [ 351 ]
--
#0 {main}
2017-08-31 14:24:59 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
2017-08-31 14:24:59 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
--
#0 /var/www/html/application/classes/common_config.php(348): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 348, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:25:51 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
2017-08-31 14:25:51 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'telephone_code' ~ APPPATH/classes/common_config.php [ 348 ]
--
#0 /var/www/html/application/classes/common_config.php(348): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 348, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:25:56 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'currency_code' ~ APPPATH/classes/common_config.php [ 350 ]
2017-08-31 14:25:56 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'currency_code' ~ APPPATH/classes/common_config.php [ 350 ]
--
#0 /var/www/html/application/classes/common_config.php(350): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/a...', 350, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:26:32 --- ERROR: ErrorException [ 8 ]: Constant TELEPHONECODE already defined ~ APPPATH/classes/common_config.php [ 353 ]
2017-08-31 14:26:32 --- STRACE: ErrorException [ 8 ]: Constant TELEPHONECODE already defined ~ APPPATH/classes/common_config.php [ 353 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Constant TELEPH...', '/var/www/html/a...', 353, Array)
#1 /var/www/html/application/classes/common_config.php(353): define('TELEPHONECODE', '+94')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#3 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#4 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-08-31 14:27:04 --- ERROR: ErrorException [ 8 ]: Undefined index: date_time_format_script ~ APPPATH/classes/common_config.php [ 356 ]
2017-08-31 14:27:04 --- STRACE: ErrorException [ 8 ]: Undefined index: date_time_format_script ~ APPPATH/classes/common_config.php [ 356 ]
--
#0 /var/www/html/application/classes/common_config.php(356): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 356, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:28:20 --- ERROR: ErrorException [ 8 ]: Undefined index: tell_to_friend_message ~ APPPATH/classes/common_config.php [ 486 ]
2017-08-31 14:28:20 --- STRACE: ErrorException [ 8 ]: Undefined index: tell_to_friend_message ~ APPPATH/classes/common_config.php [ 486 ]
--
#0 /var/www/html/application/classes/common_config.php(486): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 486, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:29:43 --- ERROR: ErrorException [ 8 ]: Undefined index: default_unit ~ APPPATH/classes/common_config.php [ 487 ]
2017-08-31 14:29:43 --- STRACE: ErrorException [ 8 ]: Undefined index: default_unit ~ APPPATH/classes/common_config.php [ 487 ]
--
#0 /var/www/html/application/classes/common_config.php(487): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 487, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:30:37 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/model/taximobilitycommonmodel.php [ 340 ]
2017-08-31 14:30:37 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ',' or ')' ~ MODPATH/taximobility/classes/model/taximobilitycommonmodel.php [ 340 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/html/application/classes/model/commonmodel.php(10): spl_autoload_call('Model_Taximobil...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('Model_commonmod...')
#4 /var/www/html/system/classes/kohana/model.php(26): spl_autoload_call('Model_commonmod...')
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(49): Kohana_Model::factory('commonmodel')
#6 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(136): Kohana_Request->execute()
#12 {main}
2017-08-31 14:30:41 --- ERROR: ErrorException [ 8 ]: Undefined index: skip_credit_card ~ APPPATH/classes/common_config.php [ 488 ]
2017-08-31 14:30:41 --- STRACE: ErrorException [ 8 ]: Undefined index: skip_credit_card ~ APPPATH/classes/common_config.php [ 488 ]
--
#0 /var/www/html/application/classes/common_config.php(488): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 488, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:38:30 --- ERROR: ErrorException [ 8 ]: Undefined index: skip_credit_card ~ APPPATH/classes/common_config.php [ 488 ]
2017-08-31 14:38:30 --- STRACE: ErrorException [ 8 ]: Undefined index: skip_credit_card ~ APPPATH/classes/common_config.php [ 488 ]
--
#0 /var/www/html/application/classes/common_config.php(488): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 488, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:38:32 --- ERROR: ErrorException [ 8 ]: Undefined index: skip_credit_card ~ APPPATH/classes/common_config.php [ 488 ]
2017-08-31 14:38:32 --- STRACE: ErrorException [ 8 ]: Undefined index: skip_credit_card ~ APPPATH/classes/common_config.php [ 488 ]
--
#0 /var/www/html/application/classes/common_config.php(488): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 488, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:39:55 --- ERROR: ErrorException [ 8 ]: Undefined index: cancellation_fare_setting ~ APPPATH/classes/common_config.php [ 490 ]
2017-08-31 14:39:55 --- STRACE: ErrorException [ 8 ]: Undefined index: cancellation_fare_setting ~ APPPATH/classes/common_config.php [ 490 ]
--
#0 /var/www/html/application/classes/common_config.php(490): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 490, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:44:12 --- ERROR: ErrorException [ 8 ]: Undefined index: cancellation_fare_setting ~ APPPATH/classes/common_config.php [ 490 ]
2017-08-31 14:44:12 --- STRACE: ErrorException [ 8 ]: Undefined index: cancellation_fare_setting ~ APPPATH/classes/common_config.php [ 490 ]
--
#0 /var/www/html/application/classes/common_config.php(490): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 490, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:45:28 --- ERROR: ErrorException [ 8 ]: Undefined index: cancellation_fare_setting ~ APPPATH/classes/common_config.php [ 490 ]
2017-08-31 14:45:28 --- STRACE: ErrorException [ 8 ]: Undefined index: cancellation_fare_setting ~ APPPATH/classes/common_config.php [ 490 ]
--
#0 /var/www/html/application/classes/common_config.php(490): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 490, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:45:36 --- ERROR: ErrorException [ 8 ]: Undefined index: ios_driver_language_settings ~ APPPATH/classes/common_config.php [ 1142 ]
2017-08-31 14:45:36 --- STRACE: ErrorException [ 8 ]: Undefined index: ios_driver_language_settings ~ APPPATH/classes/common_config.php [ 1142 ]
--
#0 /var/www/html/application/classes/common_config.php(1142): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1142, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:46:45 --- ERROR: ErrorException [ 8 ]: Undefined index: ios_passenger_language_settings ~ APPPATH/classes/common_config.php [ 1143 ]
2017-08-31 14:46:45 --- STRACE: ErrorException [ 8 ]: Undefined index: ios_passenger_language_settings ~ APPPATH/classes/common_config.php [ 1143 ]
--
#0 /var/www/html/application/classes/common_config.php(1143): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1143, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:48:10 --- ERROR: ErrorException [ 8 ]: Undefined index: ios_passenger_language_settings ~ APPPATH/classes/common_config.php [ 1143 ]
2017-08-31 14:48:10 --- STRACE: ErrorException [ 8 ]: Undefined index: ios_passenger_language_settings ~ APPPATH/classes/common_config.php [ 1143 ]
--
#0 /var/www/html/application/classes/common_config.php(1143): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1143, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:50:11 --- ERROR: ErrorException [ 8 ]: Undefined index: ios_passenger_language_settings ~ APPPATH/classes/common_config.php [ 1143 ]
2017-08-31 14:50:11 --- STRACE: ErrorException [ 8 ]: Undefined index: ios_passenger_language_settings ~ APPPATH/classes/common_config.php [ 1143 ]
--
#0 /var/www/html/application/classes/common_config.php(1143): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1143, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:50:13 --- ERROR: ErrorException [ 8 ]: Undefined index: ios_passenger_language_settings ~ APPPATH/classes/common_config.php [ 1143 ]
2017-08-31 14:50:13 --- STRACE: ErrorException [ 8 ]: Undefined index: ios_passenger_language_settings ~ APPPATH/classes/common_config.php [ 1143 ]
--
#0 /var/www/html/application/classes/common_config.php(1143): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1143, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:50:14 --- ERROR: ErrorException [ 8 ]: Undefined index: ios_passenger_colorcode_settings ~ APPPATH/classes/common_config.php [ 1145 ]
2017-08-31 14:50:14 --- STRACE: ErrorException [ 8 ]: Undefined index: ios_passenger_colorcode_settings ~ APPPATH/classes/common_config.php [ 1145 ]
--
#0 /var/www/html/application/classes/common_config.php(1145): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1145, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 14:56:26 --- ERROR: ErrorException [ 8 ]: Undefined index: ios_passenger_colorcode_settings ~ APPPATH/classes/common_config.php [ 1145 ]
2017-08-31 14:56:26 --- STRACE: ErrorException [ 8 ]: Undefined index: ios_passenger_colorcode_settings ~ APPPATH/classes/common_config.php [ 1145 ]
--
#0 /var/www/html/application/classes/common_config.php(1145): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1145, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 15:04:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-31 15:04:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-08-31 15:13:29 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitycommonmodel.php [ 815 ]
2017-08-31 15:13:29 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/model/taximobilitycommonmodel.php [ 815 ]
--
#0 [internal function]: Kohana_Core::auto_load('Model_Taximobil...')
#1 /var/www/html/application/classes/model/commonmodel.php(10): spl_autoload_call('Model_Taximobil...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('Model_commonmod...')
#4 /var/www/html/system/classes/kohana/model.php(26): spl_autoload_call('Model_commonmod...')
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(49): Kohana_Model::factory('commonmodel')
#6 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#8 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(136): Kohana_Request->execute()
#12 {main}
2017-08-31 15:13:41 --- ERROR: ErrorException [ 8 ]: Undefined index: android_passenger_colorcode_settings ~ APPPATH/classes/common_config.php [ 1149 ]
2017-08-31 15:13:41 --- STRACE: ErrorException [ 8 ]: Undefined index: android_passenger_colorcode_settings ~ APPPATH/classes/common_config.php [ 1149 ]
--
#0 /var/www/html/application/classes/common_config.php(1149): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1149, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 15:18:50 --- ERROR: ErrorException [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/common_config.php [ 862 ]
2017-08-31 15:18:50 --- STRACE: ErrorException [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/common_config.php [ 862 ]
--
#0 {main}
2017-08-31 15:18:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: web_language ~ APPPATH/classes/common_config.php [ 1151 ]
2017-08-31 15:18:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: web_language ~ APPPATH/classes/common_config.php [ 1151 ]
--
#0 /var/www/html/application/classes/common_config.php(1151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 1151, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 15:19:27 --- ERROR: ErrorException [ 0 ]: syntax error, unexpected ''TAXI_CH' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH/classes/common_config.php [ 302 ]
2017-08-31 15:19:27 --- STRACE: ErrorException [ 0 ]: syntax error, unexpected ''TAXI_CH' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH/classes/common_config.php [ 302 ]
--
#0 {main}
2017-08-31 15:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/daddytaxi/favicon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-08-31 15:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/daddytaxi/favicon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-08-31 15:19:56 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'en' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 42 ]
2017-08-31 15:19:56 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'en' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 42 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(42): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/html/m...', 42, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#3 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-08-31 15:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:21:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
2017-08-31 15:21:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(50): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/m...', 50, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#3 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-08-31 15:22:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 62 ]
2017-08-31 15:22:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 62 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 62, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#3 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-08-31 15:23:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
2017-08-31 15:23:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(50): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/m...', 50, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#3 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-08-31 15:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/daddytaxi/favicon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-08-31 15:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/daddytaxi/favicon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-08-31 15:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:27:09 --- ERROR: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
2017-08-31 15:27:09 --- STRACE: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(50): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/m...', 50, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#3 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-08-31 15:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:27:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
2017-08-31 15:27:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(50): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/m...', 50, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#3 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-08-31 15:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/upload/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/upload/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/about_rgt.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/google_pluse.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/twitter.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 15:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/daddytaxi/landing_page/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 15:34:36 --- ERROR: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
2017-08-31 15:34:36 --- STRACE: ErrorException [ 8 ]: Use of undefined constant LANG_INFO - assumed 'LANG_INFO' ~ MODPATH/taximobility/classes/controller/taximobilitysiteadmin.php [ 50 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(50): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/m...', 50, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#3 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-08-31 18:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wallet.dat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-31 18:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wallet.dat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-08-31 18:14:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-08-31 18:14:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-08-31 21:58:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-08-31 21:58:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}