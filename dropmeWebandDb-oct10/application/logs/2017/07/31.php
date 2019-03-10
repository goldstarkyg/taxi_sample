<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-31 05:48:00 --- ERROR: ErrorException [ 2 ]: fopen(/var/www/vhosts/loadtest/public/loadtest/passenger/thumb_750737538431662.jpg): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2096 ]
2017-07-31 05:48:00 --- STRACE: ErrorException [ 2 ]: fopen(/var/www/vhosts/loadtest/public/loadtest/passenger/thumb_750737538431662.jpg): failed to open stream: Permission denied ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2096 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/var/www/...', '/var/www/vhosts...', 2096, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(2096): fopen('/var/www/vhosts...', 'w')
#2 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-31 11:34:55 --- ERROR: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
2017-07-31 11:34:55 --- STRACE: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1388): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 1388, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1157): Controller_TaximobilityMobile104->paymentProcess(Array, 2.1, Array, '703', 2108, 1, Array, '2017-07-31 17:0...', '', '2')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(8325): Controller_TaximobilityMobile104->trippayment(Array, '')
#3 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-07-31 11:35:09 --- ERROR: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
2017-07-31 11:35:09 --- STRACE: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1388): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 1388, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1157): Controller_TaximobilityMobile104->paymentProcess(Array, 2.1, Array, '703', 2108, 1, Array, '2017-07-31 17:0...', '', '2')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(8325): Controller_TaximobilityMobile104->trippayment(Array, '')
#3 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-07-31 11:39:48 --- ERROR: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
2017-07-31 11:39:48 --- STRACE: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1388): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 1388, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1157): Controller_TaximobilityMobile104->paymentProcess(Array, 2.1, Array, '703', 2108, 1, Array, '2017-07-31 17:0...', '', '2')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(8325): Controller_TaximobilityMobile104->trippayment(Array, '')
#3 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-07-31 11:40:54 --- ERROR: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
2017-07-31 11:40:54 --- STRACE: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1388): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 1388, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1157): Controller_TaximobilityMobile104->paymentProcess(Array, 2.1, Array, '703', 2108, 1, Array, '2017-07-31 17:0...', '', '2')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(8325): Controller_TaximobilityMobile104->trippayment(Array, '')
#3 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-07-31 11:41:31 --- ERROR: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
2017-07-31 11:41:31 --- STRACE: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1388): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 1388, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1157): Controller_TaximobilityMobile104->paymentProcess(Array, 7.55, Array, '707', 2115, 1, Array, '2017-07-31 17:1...', '', '2')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(8325): Controller_TaximobilityMobile104->trippayment(Array, '')
#3 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-07-31 11:44:41 --- ERROR: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
2017-07-31 11:44:41 --- STRACE: ErrorException [ 8 ]: Undefined index: TRANSACTIONID ~ MODPATH/taximobility/classes/controller/taximobilitymobile104.php [ 1388 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1388): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 1388, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobile104.php(1157): Controller_TaximobilityMobile104->paymentProcess(Array, 7.56, Array, '708', 2108, 1, Array, '2017-07-31 17:1...', '', '2')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(8325): Controller_TaximobilityMobile104->trippayment(Array, '')
#3 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-07-31 12:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-right.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 12:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-right.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 12:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-left.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 12:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-left.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 12:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-right.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 12:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-right.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 12:32:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-left.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 12:32:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-left.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:06:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:06:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-31 14:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-31 14:18:52 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-31 14:18:52 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-31 14:19:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-31 14:19:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-31 14:28:27 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-31 14:28:27 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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