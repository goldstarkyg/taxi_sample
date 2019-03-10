<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-29 00:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL javascript: was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 00:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL javascript: was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 00:43:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-09-29 00:43:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-09-29 00:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.baidu.com:443 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 00:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.baidu.com:443 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 00:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.baidu.com:443 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 00:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.baidu.com:443 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 01:17:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 01:17:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 03:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 03:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 03:02:28 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 4 ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 122 ]
2017-09-29 03:02:28 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 4 ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 122 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/ndotcrypt.php(122): Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/m...', 122, Array)
#1 /var/www/html/modules/taximobility/classes/controller/ndotcrypt.php(97): NDOT_MCrypt->strippadding('{"trip_id":"","...')
#2 /var/www/html/modules/taximobility/classes/controller/ndot_trial_mobilekey_validate.php(37): NDOT_MCrypt->decrypt_decode('MK49IkV6Fy1kpVH...')
#3 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(94): require('/var/www/html/m...')
#4 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#5 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(137): Kohana_Request->execute()
#9 {main}
2017-09-29 03:02:46 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: missing terminating ] for character class at offset 5 ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 122 ]
2017-09-29 03:02:46 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: missing terminating ] for character class at offset 5 ~ MODPATH/taximobility/classes/controller/ndotcrypt.php [ 122 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/ndotcrypt.php(122): Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/m...', 122, Array)
#1 /var/www/html/modules/taximobility/classes/controller/ndotcrypt.php(97): NDOT_MCrypt->strippadding('{"trip_id":"","...')
#2 /var/www/html/modules/taximobility/classes/controller/ndot_trial_mobilekey_validate.php(37): NDOT_MCrypt->decrypt_decode('MK49IkV6Fy1kpVH...')
#3 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(94): require('/var/www/html/m...')
#4 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#5 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(137): Kohana_Request->execute()
#9 {main}
2017-09-29 03:48:13 --- ERROR: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
2017-09-29 03:48:13 --- STRACE: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/var/www/html/m...', 2303, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2303): imagecreatefromjpeg('/var/www/html/p...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(137): Kohana_Request->execute()
#7 {main}
2017-09-29 03:54:47 --- ERROR: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
2017-09-29 03:54:47 --- STRACE: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/var/www/html/m...', 2303, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2303): imagecreatefromjpeg('/var/www/html/p...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(137): Kohana_Request->execute()
#7 {main}
2017-09-29 03:54:57 --- ERROR: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
2017-09-29 03:54:57 --- STRACE: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/var/www/html/m...', 2303, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2303): imagecreatefromjpeg('/var/www/html/p...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(137): Kohana_Request->execute()
#7 {main}
2017-09-29 03:55:09 --- ERROR: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
2017-09-29 03:55:09 --- STRACE: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/var/www/html/m...', 2303, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2303): imagecreatefromjpeg('/var/www/html/p...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(137): Kohana_Request->execute()
#7 {main}
2017-09-29 03:55:20 --- ERROR: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
2017-09-29 03:55:20 --- STRACE: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/var/www/html/m...', 2303, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2303): imagecreatefromjpeg('/var/www/html/p...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(137): Kohana_Request->execute()
#7 {main}
2017-09-29 03:55:29 --- ERROR: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
2017-09-29 03:55:29 --- STRACE: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2303 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/var/www/html/m...', 2303, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2303): imagecreatefromjpeg('/var/www/html/p...')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(137): Kohana_Request->execute()
#7 {main}
2017-09-29 03:58:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-09-29 03:58:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-09-29 04:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 04:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 04:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 04:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 04:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 04:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b52bd45bd42Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 07:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: currentsetting.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 07:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: currentsetting.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 07:19:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: currentsetting.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 07:19:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: currentsetting.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 08:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 08:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 08:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 08:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 08:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 08:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 11:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hndUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 11:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hndUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 11:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 11:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 11:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL moo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 11:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL moo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 12:54:12 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 12:54:12 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 12:54:37 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 12:54:37 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 12:55:33 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 12:55:33 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 13:22:27 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 13:22:27 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 13:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 13:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:26:14 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 14:26:14 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 14:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL classes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL classes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 14:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 14:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL classes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL classes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/request/client/internal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 14:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/request/client/internal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 14:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL application was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL application was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL application was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL application was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL application was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL application was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 14:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 14:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 14:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 14:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 14:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 14:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wysiwyg/filebrowser was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wysiwyg/filebrowser was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL directory/graphics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL directory/graphics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL directory/graphics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL directory/graphics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:48:39 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 14:48:39 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 14:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 14:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 14:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 14:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 14:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 14:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 15:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 15:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 15:14:33 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 15:14:33 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:02:49 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:02:49 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:03:35 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:03:35 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:07:18 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:07:18 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:09:13 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:09:13 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:09:25 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:09:25 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:14:14 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:14:14 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:17:20 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:17:20 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:20:58 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:20:58 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:25:15 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:25:15 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:31:17 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:31:17 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:31:52 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:31:52 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:35:17 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:35:17 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL drivers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 16:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL drivers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 16:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL booking was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 16:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL booking was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 16:42:50 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 16:42:50 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 16:47:49 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 16:47:49 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 16:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/request/client/internal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 16:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/request/client/internal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 16:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 16:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 16:48:36 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 16:48:36 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 16:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 16:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 16:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/book_trip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 16:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/book_trip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 16:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 16:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 16:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/create_trip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 16:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/create_trip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 16:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 16:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 16:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 16:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 16:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 16:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 16:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 16:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/themes/default/web_booking.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 16:58:08 --- ERROR: View_Exception [ 0 ]: The requested view themes/default/find could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2017-09-29 16:58:08 --- STRACE: View_Exception [ 0 ]: The requested view themes/default/find could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/html/system/classes/kohana/view.php(137): Kohana_View->set_filename('themes/default/...')
#1 /var/www/html/system/classes/kohana/view.php(30): Kohana_View->__construct('themes/default/...', NULL)
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(21): Kohana_View::factory('themes/default/...')
#3 [internal function]: Controller_TaximobilityFind->action_index()
#4 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(137): Kohana_Request->execute()
#8 {main}
2017-09-29 16:58:27 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 16:58:27 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 16:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL find/users/getUpcomingTripAlert was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 16:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL find/users/getUpcomingTripAlert was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 16:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL find/driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 16:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL find/driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 16:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 16:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL find/driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 17:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL find/driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:00:03 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 17:00:03 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 17:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL find/users/getUpcomingTripAlert was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 17:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL find/users/getUpcomingTripAlert was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:03:05 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 17:03:05 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 17:04:29 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-29 17:04:29 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-29 17:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL drivers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL drivers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL drivers/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL drivers/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driver/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driver/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driver/add_driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driver/add_driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/add_driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 17:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/add_driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:12:35 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 17:12:35 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 17:12:49 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 17:12:49 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 17:20:03 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 17:20:03 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 17:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL completed-trips/555 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL completed-trips/555 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL completed-trips was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL completed-trips was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL completed-trips was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL completed-trips was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL completed-trips was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL completed-trips was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:25:28 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 17:25:28 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 17:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driver/586 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driver/586 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL drivers/586 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-29 17:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL drivers/586 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:26:47 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 17:26:47 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 17:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL find/driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 17:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL find/driver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL find/driver/56 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-29 17:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL find/driver/56 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-29 17:29:03 --- ERROR: View_Exception [ 0 ]: The requested view themes/default/find could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2017-09-29 17:29:03 --- STRACE: View_Exception [ 0 ]: The requested view themes/default/find could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/html/system/classes/kohana/view.php(137): Kohana_View->set_filename('themes/default/...')
#1 /var/www/html/system/classes/kohana/view.php(30): Kohana_View->__construct('themes/default/...', NULL)
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(21): Kohana_View::factory('themes/default/...')
#3 [internal function]: Controller_TaximobilityFind->action_index()
#4 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(137): Kohana_Request->execute()
#8 {main}
2017-09-29 17:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 17:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 17:32:47 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-29 17:32:47 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-29 19:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 19:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-29 20:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-29 20:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}