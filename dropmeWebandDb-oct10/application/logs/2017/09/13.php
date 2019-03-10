<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-13 00:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 00:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 01:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 01:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 01:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 01:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 01:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 01:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 01:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 01:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 01:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 01:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 01:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 01:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 01:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 01:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 01:21:53 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 0 ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 122 ]
2017-09-13 01:21:53 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 0 ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 122 ]
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
2017-09-13 02:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 02:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 02:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 02:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b810966c90bIMG_20170912_221355 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 03:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 03:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 03:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 03:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 03:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 03:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 04:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 04:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 04:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 04:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 04:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apple-app-site-association was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 04:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apple-app-site-association was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 04:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 04:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 05:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 05:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 06:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b63e638a4e0Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 06:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b63e638a4e0Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 06:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b63e638a4e0Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 06:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b63e638a4e0Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 07:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 07:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 08:17:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 08:17:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 08:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 08:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b77f0a14b86Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 08:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 08:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 08:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 08:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 08:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 08:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 08:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 08:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 08:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 08:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 08:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 08:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b6398928d12unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 09:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 09:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 09:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 09:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 09:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 09:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 09:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 09:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 09:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 09:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b53c9899d6dDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 10:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 10:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 10:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 10:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 10:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 10:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 10:58:51 --- ERROR: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
2017-09-13 10:58:51 --- STRACE: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(239): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 239, Array)
#1 [internal function]: Controller_TaximobilityFind->action_signup()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 11:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 11:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 11:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 11:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 11:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 11:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 11:30:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-13 11:30:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-13 12:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/common.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 12:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/common.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 12:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stssys.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 12:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stssys.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 12:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: command.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 12:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: command.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 12:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 12:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 12:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 12:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 13:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 13:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 13:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 13:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 13:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 13:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b905daeff00Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 13:08:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:08:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:09:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:09:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:09:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:09:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:09:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:09:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:09:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:09:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:09:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:09:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:09:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:09:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:09:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:09:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:09:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:09:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:09:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:09:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:10:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:10:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:10:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:10:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:10:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:10:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:10:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:10:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:10:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:10:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:10:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:10:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:10:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:10:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:10:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:10:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:10:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:10:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:11:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:11:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:12:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:12:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:12:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:12:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:12:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:12:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:12:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:12:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:12:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:12:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:14:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:14:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:14:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:14:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 13:17:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
2017-09-13 13:17:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3858 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3858): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3858, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-13 14:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 14:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 15:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hedwig.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 15:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hedwig.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 15:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 15:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 17:22:12 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/879ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4108 ]
2017-09-13 17:22:12 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/html/public/dropmetaxi/trip_detail_map/879ss.png): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 4108 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/html/m...', 4108, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(4108): file_put_contents('/var/www/html/p...', '\x89PNG\r\n\x1A\n\x00\x00\x00\rIHD...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-09-13 18:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/sqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql/mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql/mysqlmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phppma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phppma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shopdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shopdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL MyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL MyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL program was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL program was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL database was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL database was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-13 18:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-13 18:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-13 18:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-13 18:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/php-myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmy-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/templates/default/css/popup.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 18:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/templates/default/css/popup.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 18:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/webadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/dbweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/dbweb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/websql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/webdb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/db-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpmyadmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db/phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin-3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2012 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2014 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma2016 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2017 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 18:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 18:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2018 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 19:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/templates/default/css/popup.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-13 19:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/templates/default/css/popup.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-13 19:11:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-13 19:11:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-13 19:12:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-13 19:12:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-13 19:14:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-13 19:14:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-13 21:12:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-13 21:12:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-13 22:05:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-13 22:05:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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