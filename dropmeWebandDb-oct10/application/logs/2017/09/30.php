<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-30 00:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 00:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 01:00:38 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-30 01:00:38 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-30 01:03:39 --- ERROR: View_Exception [ 0 ]: The requested view themes/default/find could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2017-09-30 01:03:39 --- STRACE: View_Exception [ 0 ]: The requested view themes/default/find could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2017-09-30 01:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 01:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 01:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 01:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 01:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manage/newdriver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-30 01:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manage/newdriver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 01:52:09 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 30 ]
2017-09-30 01:52:09 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 30 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanageusers.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 30, Array)
#1 [internal function]: Controller_TaximobilityManageusers->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manageusers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 01:54:58 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 30 ]
2017-09-30 01:54:58 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 30 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanageusers.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 30, Array)
#1 [internal function]: Controller_TaximobilityManageusers->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manageusers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 01:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manageusers/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-30 01:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manageusers/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 01:55:14 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 30 ]
2017-09-30 01:55:14 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 30 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanageusers.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 30, Array)
#1 [internal function]: Controller_TaximobilityManageusers->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manageusers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 01:55:33 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
2017-09-30 01:55:33 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ MODPATH/taximobility/classes/controller/taximobilitymanageusers.php [ 127 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanageusers.php(127): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 127, Array)
#1 [internal function]: Controller_TaximobilityManageusers->action_passengers()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manageusers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 01:58:56 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 3095 ]
2017-09-30 01:58:56 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 3095 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(3095): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3095, Array)
#1 [internal function]: Controller_TaximobilityManage->action_passengerinfo()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:00:46 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 7728 ]
2017-09-30 02:00:46 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 7728 ]
--
#0 /var/www/html/modules/taximobility/classes/model/taximobilitymanage.php(7728): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 7728, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(1886): Model_TaximobilityManage->count_manager_list()
#2 [internal function]: Controller_TaximobilityManage->action_manager()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(137): Kohana_Request->execute()
#7 {main}
2017-09-30 02:01:53 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4130 ]
2017-09-30 02:01:53 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4130 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(4130): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 4130, Array)
#1 [internal function]: Controller_TaximobilityManage->action_managerdetails()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:06:25 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4130 ]
2017-09-30 02:06:25 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4130 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(4130): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 4130, Array)
#1 [internal function]: Controller_TaximobilityManage->action_managerdetails()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:06:46 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4130 ]
2017-09-30 02:06:46 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4130 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(4130): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 4130, Array)
#1 [internal function]: Controller_TaximobilityManage->action_managerdetails()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:17:55 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 7728 ]
2017-09-30 02:17:55 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/model/taximobilitymanage.php [ 7728 ]
--
#0 /var/www/html/modules/taximobility/classes/model/taximobilitymanage.php(7728): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 7728, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(1886): Model_TaximobilityManage->count_manager_list()
#2 [internal function]: Controller_TaximobilityManage->action_manager()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(137): Kohana_Request->execute()
#7 {main}
2017-09-30 02:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driverinfonew/driverinfo/460 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 02:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driverinfonew/driverinfo/460 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 02:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driverinfonew/driverinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 02:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driverinfonew/driverinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 02:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL driverinfonew was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 02:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL driverinfonew was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 02:18:59 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
2017-09-30 02:18:59 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(664): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 664, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driver()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:20:34 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
2017-09-30 02:20:34 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(664): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 664, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driver()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:23:22 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 36 ]
2017-09-30 02:23:22 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 36 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 36, Array)
#1 [internal function]: Controller_TaximobilityManage->action_company()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:24:32 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
2017-09-30 02:24:32 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(664): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 664, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driver()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:28:20 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4130 ]
2017-09-30 02:28:20 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4130 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(4130): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 4130, Array)
#1 [internal function]: Controller_TaximobilityManage->action_managerdetails()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:29:31 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
2017-09-30 02:29:31 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(664): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 664, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driver()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:30:29 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4083 ]
2017-09-30 02:30:29 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 4083 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(4083): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 4083, Array)
#1 [internal function]: Controller_TaximobilityManage->action_companydetails()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 02:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 02:41:27 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-30 02:41:27 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-30 02:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 02:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 02:59:15 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 3095 ]
2017-09-30 02:59:15 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 3095 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(3095): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3095, Array)
#1 [internal function]: Controller_TaximobilityManage->action_passengerinfo()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 02:59:24 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
2017-09-30 02:59:24 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(664): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 664, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driver()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 03:00:11 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 3129 ]
2017-09-30 03:00:11 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 3129 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(3129): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3129, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driverinfo()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 03:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 03:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 03:04:13 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 3129 ]
2017-09-30 03:04:13 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 3129 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(3129): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3129, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driverinfo()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 03:05:18 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
2017-09-30 03:05:18 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_log_id ~ MODPATH/taximobility/classes/controller/taximobilityusers.php [ 3414 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(3414): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 3414, Array)
#1 [internal function]: Controller_TaximobilityUsers->action_cancel_trip()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 03:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/make_trip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-30 03:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/make_trip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 03:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/create_trip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-30 03:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/create_trip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 03:06:19 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
2017-09-30 03:06:19 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(664): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 664, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driver()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 03:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/driver/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-30 03:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/driver/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 03:06:44 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
2017-09-30 03:06:44 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(664): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 664, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driver()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 03:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manage/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-30 03:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manage/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 03:06:57 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
2017-09-30 03:06:57 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(664): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 664, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driver()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 03:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 03:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/common/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 03:17:48 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-30 03:17:48 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-30 03:18:31 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-30 03:18:31 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-30 03:20:34 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-30 03:20:34 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-30 03:20:54 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-30 03:20:54 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-30 04:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 04:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 04:10:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-09-30 04:10:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-09-30 06:42:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
2017-09-30 06:42:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 331 ]
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
2017-09-30 07:20:15 --- ERROR: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
2017-09-30 07:20:15 --- STRACE: ErrorException [ 2 ]: fopen(map.txt): failed to open stream: Permission denied ~ APPPATH/views/themes/default/web_booking.php [ 717 ]
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
2017-09-30 07:26:04 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
2017-09-30 07:26:04 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 664 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(664): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 664, Array)
#1 [internal function]: Controller_TaximobilityManage->action_driver()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 07:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 07:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 07:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mangodb/config/mangoDB.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 07:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mangodb/config/mangoDB.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 07:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 07:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 09:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 09:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 10:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 10:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 10:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b51c91cff9bDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 10:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b51c91cff9bDropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 10:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 10:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 10:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 10:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b5257b433a3Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 12:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hndUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 12:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hndUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 12:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 12:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 12:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL moo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 12:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL moo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 12:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcfg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 12:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcfg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 13:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 13:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 14:09:47 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
2017-09-30 14:09:47 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(9588): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/m...', 9588, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 14:10:46 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
2017-09-30 14:10:46 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(9588): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/m...', 9588, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 14:11:20 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
2017-09-30 14:11:20 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(9588): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/m...', 9588, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 14:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-30 14:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 14:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 14:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b527e949a12Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 15:00:16 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
2017-09-30 15:00:16 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(9588): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/m...', 9588, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 15:02:12 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
2017-09-30 15:02:12 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$is_split_trip ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 9588 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi118.php(9588): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/m...', 9588, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(137): Kohana_Request->execute()
#6 {main}
2017-09-30 16:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 16:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 19:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 19:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/mobileapi118 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 20:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/mobileapi118 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 20:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:17:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:17:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 20:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 20:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}
2017-09-30 23:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL recordings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-30 23:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL recordings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(137): Kohana_Request->execute()
#3 {main}
2017-09-30 23:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2billing/admin/Public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-30 23:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a2billing/admin/Public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(137): Kohana_Request->execute()
#1 {main}