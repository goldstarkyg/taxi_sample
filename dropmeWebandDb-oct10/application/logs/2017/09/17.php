<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-17 02:16:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 02:16:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 03:22:59 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 03:22:59 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1329, '3653')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 03:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-17 03:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-17 03:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-17 03:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-17 04:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 04:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 05:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-17 05:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-17 06:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 06:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-17 06:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-17 06:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 06:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 07:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 07:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 08:27:08 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 122 ]
2017-09-17 08:27:08 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 122 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/ndotcrypt.php(122): Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/m...', 122, Array)
#1 /var/www/html/modules/taximobility/classes/controller/ndotcrypt.php(97): NDOT_MCrypt->strippadding('{"trip_id":"","...')
#2 /var/www/html/modules/taximobility/classes/controller/ndot_trial_mobilekey_validate.php(37): NDOT_MCrypt->decrypt_decode('MK49IkV6Fy1kpVH...')
#3 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(94): require('/var/www/html/m...')
#4 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#5 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-17 09:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 09:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 10:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 10:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 10:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 10:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 10:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 10:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 10:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 10:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 10:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 10:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b50d9928e4cunnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 10:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 10:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-17 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-17 13:34:26 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:34:26 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(7315): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(6779): Model_Taximobilitymobileapi118->get_booking_details('1460')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:34:33 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:34:33 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1460, '2127')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:42:25 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:42:25 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:42:36 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:42:36 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:42:48 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:42:48 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:43:24 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:43:24 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:52:52 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:52:52 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:53:02 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:53:02 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:53:10 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:53:10 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:53:24 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:53:24 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:54:15 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:54:15 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 13:54:31 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 13:54:31 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:47:46 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:47:46 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:47:54 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:47:54 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:48:06 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:48:06 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:51:04 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:51:04 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:51:24 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:51:24 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:51:54 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:51:54 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:52:10 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:52:10 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail('1460', '')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:52:38 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:52:38 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1460, '2127')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:55:33 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:55:33 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1460, '2127')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 14:55:45 --- ERROR: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
2017-09-17 14:55:45 --- STRACE: MongoDB\Driver\Exception\RuntimeException [ 16702 ]: $concat only supports strings, not int ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Aggregate.php(204): MongoDB\Driver\Server->executeCommand('dropmetaxi', Object(MongoDB\Driver\Command), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(198): MongoDB\Operation\Aggregate->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(520): MongoDB\Collection->aggregate(Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(332): Kohana_MangoDB->_call('aggregate', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(2179): Kohana_MangoDB->aggregate('passengers_logs', Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3984): Model_Taximobilitymobileapi118->get_trip_detail(1460, '2127')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 16:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 16:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59bba3ca4dbc8Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 16:51:23 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/958ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4120 ]
2017-09-17 16:51:23 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/958ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/html/m...', 4120, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4120): file_put_contents('/var/www/html/p...', '\x89PNG\r\n\x1A\n\x00\x00\x00\rIHD...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-09-17 16:51:23 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/958ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4120 ]
2017-09-17 16:51:23 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/958ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/html/m...', 4120, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4120): file_put_contents('/var/www/html/p...', '\x89PNG\r\n\x1A\n\x00\x00\x00\rIHD...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-09-17 16:53:33 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/958ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4120 ]
2017-09-17 16:53:33 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/958ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/html/m...', 4120, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4120): file_put_contents('/var/www/html/p...', '\x89PNG\r\n\x1A\n\x00\x00\x00\rIHD...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-09-17 17:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-17 17:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-17 17:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-17 17:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-17 17:49:18 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-09-17 17:49:18 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9163): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1034): Model_Taximobilitymobileapi118->get_favouritepopularplaces('4193', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 17:49:25 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-09-17 17:49:25 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9163): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1034): Model_Taximobilitymobileapi118->get_favouritepopularplaces('4193', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 17:49:33 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-09-17 17:49:33 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9163): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1034): Model_Taximobilitymobileapi118->get_favouritepopularplaces('4193', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 17:49:45 --- ERROR: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
2017-09-17 17:49:45 --- STRACE: MongoDB\Driver\Exception\ConnectionException [ 2 ]: invalid point in geo near query $geometry argument: { type: "Point", coordinates: [ -180.0, -180.0 ] }  longitude/latitude is out of bounds, lng: -180 lat: -180 ~ DOCROOT/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php [ 204 ]
--
#0 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Operation/Find.php(204): MongoDB\Driver\Server->executeQuery('dropmetaxi.popu...', Object(MongoDB\Driver\Query), Object(MongoDB\Driver\ReadPreference))
#1 /var/www/html/mongo-php-driver/vendor/mongodb/mongodb/src/Collection.php(510): MongoDB\Operation\Find->execute(Object(MongoDB\Driver\Server))
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(514): MongoDB\Collection->find(Array, Array)
#3 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(277): Kohana_MangoDB->_call('find', Array)
#4 /var/www/html/modules/taximobility/classes/model/taximobilitymobileapi118.php(9163): Kohana_MangoDB->find('popular_places', Array, Array)
#5 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(1034): Model_Taximobilitymobileapi118->get_favouritepopularplaces('4193', 2, '-180.0', '-180.0')
#6 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#7 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#8 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/index.php(136): Kohana_Request->execute()
#11 {main}
2017-09-17 18:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 18:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 19:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 19:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 19:44:30 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-17 19:44:30 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-17 19:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 19:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 19:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 19:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 20:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-17 20:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-17 22:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-17 22:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}