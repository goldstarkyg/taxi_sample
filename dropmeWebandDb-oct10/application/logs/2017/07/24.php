<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-24 02:05:50 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-24 02:05:50 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-24 04:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:21:39 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 04:21:39 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 09:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 04:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:42:39 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 04:42:39 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 10:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 04:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:44:24 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 04:44:24 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 10:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 04:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-left.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/nav-left.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:47:02 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 04:47:02 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 10:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:47:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:47:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:51:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:51:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:51:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:51:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:51:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:51:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 04:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 04:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/star-matrix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/star-matrix.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:04:33 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 05:04:33 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 10:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 05:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_waiting_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_incactive_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_available_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/images/dashboard_icons/map_shiftout_icon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:09:18 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 05:09:18 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 10:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 05:26:40 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 05:26:40 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 10:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 05:27:32 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 05:27:32 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 10:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 05:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dispatch/vendor/bootstrap/css/arabic_style/media_style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:46:55 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 05:46:55 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 11:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 05:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 05:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/arabic_style/admin_new/admin_reset.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 05:51:12 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 05:51:12 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 11:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 05:55:43 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 05:55:43 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('17', '2017-07-17 00:0...', '2017-07-24 11:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 06:56:08 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 06:56:08 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 12:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 08:43:18 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 08:43:18 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 14:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 08:43:37 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 08:43:37 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 14:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 08:43:42 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 08:43:42 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 14:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 08:43:58 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 08:43:58 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 14:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 08:44:32 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 08:44:32 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 14:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 08:44:48 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 08:44:48 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 14:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 08:50:55 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 08:50:55 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 14:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 09:02:22 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-24 09:02:22 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-24 09:55:37 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 09:55:37 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 15:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 10:23:47 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 10:23:47 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('17', '2017-07-17 00:0...', '2017-07-24 15:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 10:24:02 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 10:24:02 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('17', '2017-07-17 00:0...', '2017-07-24 15:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 10:25:26 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 10:25:26 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 15:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 10:31:50 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 10:31:50 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 16:0...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 10:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/loadtest/driver_image/5972f5a0df2b5signInLogo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-24 10:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/loadtest/driver_image/5972f5a0df2b5signInLogo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-24 11:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 11:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 11:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 11:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 11:48:07 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 11:48:07 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 17:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 12:02:16 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-24 12:02:16 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-24 12:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-24 12:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-24 13:40:51 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 13:40:51 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 19:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-24 14:56:25 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-24 14:56:25 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-17 00:0...', '2017-07-24 20:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}