<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-10-03 03:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 03:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 03:43:41 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-10-03 03:43:41 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-10-03 05:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 05:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 05:04:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 05:04:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 05:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 05:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 05:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 05:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 05:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 05:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 06:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 06:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 06:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 06:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 06:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 06:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 06:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 06:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 06:53:03 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-10-03 06:53:03 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-10-03 06:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 06:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 08:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 08:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 08:45:30 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-10-03 08:45:30 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 08:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driverapi205/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 08:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driverapi205/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 08:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driverapi205 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 08:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driverapi205 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 08:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driverapi201 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 08:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driverapi201 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 08:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driverapi101 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 08:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driverapi101 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 08:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driverapi117 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 08:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driverapi117 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 08:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi117/= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-10-03 08:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi117/= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 09:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 09:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 10:53:00 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
2017-10-03 10:53:00 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanageusers.php(127): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 127, Array)
#1 [internal function]: Controller_TaximobilityManageusers->action_passengers()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manageusers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 10:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manage/passengers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-10-03 10:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manage/passengers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 10:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 10:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 10:56:30 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
2017-10-03 10:56:30 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanageusers.php(127): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 127, Array)
#1 [internal function]: Controller_TaximobilityManageusers->action_passengers()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manageusers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 11:04:21 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
2017-10-03 11:04:21 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanageusers.php(127): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 127, Array)
#1 [internal function]: Controller_TaximobilityManageusers->action_passengers()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manageusers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 11:04:22 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
2017-10-03 11:04:22 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanageusers.php(127): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 127, Array)
#1 [internal function]: Controller_TaximobilityManageusers->action_passengers()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manageusers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 11:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 11:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 11:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 11:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 11:13:11 --- ERROR: ErrorException [ 0 ]: Call to undefined method Model_Siteusers::logged_user_status() ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 1154 ]
2017-10-03 11:13:11 --- STRACE: ErrorException [ 0 ]: Call to undefined method Model_Siteusers::logged_user_status() ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 1154 ]
--
#0 {main}
2017-10-03 11:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL siteusers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 11:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL siteusers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 11:15:26 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-10-03 11:15:26 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 11:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/modules/taximobility/classes/controller/taximobilityusers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 11:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/modules/taximobility/classes/controller/taximobilityusers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 11:17:05 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-10-03 11:17:05 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 11:17:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 11:17:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 11:17:29 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-10-03 11:17:29 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 11:17:39 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-10-03 11:17:39 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 11:18:01 --- ERROR: ErrorException [ 8 ]: Undefined index: remarks ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3415 ]
2017-10-03 11:18:01 --- STRACE: ErrorException [ 8 ]: Undefined index: remarks ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3415 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3415): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3415, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 11:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 11:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 11:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 11:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 11:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 11:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 11:34:15 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-10-03 11:34:15 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-10-03 11:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 11:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 12:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 12:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b8e7c8d66aaDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 14:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 14:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 14:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 14:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 14:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 14:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 14:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 14:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b410fd8d3dfDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 14:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 14:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 14:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 14:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 15:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-10-03 15:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/site_logo//_email_logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-10-03 16:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL launch/launch_views/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-10-03 16:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL launch/launch_views/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-10-03 19:19:11 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-10-03 19:19:11 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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