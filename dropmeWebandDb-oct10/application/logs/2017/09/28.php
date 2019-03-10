<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-28 00:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 00:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 01:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-28 01:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-28 03:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-28 03:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-28 05:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-28 05:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-28 06:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 06:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 08:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 08:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 10:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 10:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 14:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-28 14:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-28 15:05:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:05:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:05:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:05:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:07:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:07:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:08:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:08:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:08:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:08:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:08:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:08:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:10:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:10:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:13:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:13:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:14:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:14:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:32:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:32:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:35:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:35:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:35:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:35:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:49:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:49:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:49:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:49:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 15:49:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
2017-09-28 15:49:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: driver_status ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 3937 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(3937): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/m...', 3937, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-28 20:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 20:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 20:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 20:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 20:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 20:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 20:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 20:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 21:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 21:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 21:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 21:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 21:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 21:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 21:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 21:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 21:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 21:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 21:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 21:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 22:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-28 22:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-28 23:07:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-09-28 23:07:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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