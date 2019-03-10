<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-25 03:43:43 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 03:43:43 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 09:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 04:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/driver_image/5972f5a0df2b5signInLogo(1).png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-25 04:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/driver_image/5972f5a0df2b5signInLogo(1).png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-25 04:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/driver_image/5972f5a0df2b5signInLogo(1).png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-25 04:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/loadtest/driver_image/5972f5a0df2b5signInLogo(1).png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-25 04:59:56 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 04:59:56 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 10:2...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 05:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-25 05:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-25 05:44:22 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 05:44:22 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 11:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 06:10:57 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 06:10:57 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 11:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 07:25:18 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 07:25:18 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 12:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 08:05:05 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 08:05:05 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 13:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 09:00:20 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-25 09:00:20 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-25 09:00:21 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-25 09:00:21 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-25 09:00:21 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-25 09:00:21 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-25 09:00:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-25 09:00:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-25 09:00:52 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-25 09:00:52 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-25 09:00:52 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-25 09:00:52 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(329): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 329, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 09:48:03 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 09:48:03 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 15:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 11:05:41 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 11:05:41 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 16:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 11:07:23 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 11:07:23 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 16:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 11:07:54 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 11:07:54 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 16:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 11:08:45 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 11:08:45 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 16:3...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 12:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-25 12:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-25 12:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-25 12:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-25 12:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-25 12:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-25 12:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-07-25 12:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-07-25 12:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-25 12:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-25 12:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-25 12:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-25 12:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-25 12:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-25 12:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-25 12:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-25 12:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-25 12:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-25 12:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-07-25 12:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobileapi118/index/dGF4aV9hbGw was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-07-25 12:22:46 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 12:22:46 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 17:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 12:23:34 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 12:23:34 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 17:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 12:23:55 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 12:23:55 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 17:5...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 12:52:44 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-25 12:52:44 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-25 13:12:27 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 13:12:27 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 18:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 13:22:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 13:22:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 13:27:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 13:27:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 13:39:09 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 13:39:09 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 13:42:47 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 13:42:47 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 19:1...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 14:07:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 14:07:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 14:09:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-07-25 14:09:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-07-25 14:12:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 14:12:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 14:12:04 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 14:12:04 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 19:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 15:20:04 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
2017-07-25 15:20:04 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/taximobility/classes/model/taximobilitydashboard.php [ 799 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/model/taximobilitydashboard.php(799): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 799, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitydashboard.php(452): Model_TaximobilityDashboard->getCompanyRevenueChart('0', '2017-07-18 00:0...', '2017-07-25 20:4...')
#2 [internal function]: Controller_TaximobilityDashboard->action_dashboardcompanyRevenueChart()
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-07-25 15:39:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:39:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:39:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:39:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:39:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:39:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:39:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:39:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:39:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:39:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:39:56 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:39:56 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:39:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:39:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:02 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:02 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:03 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:03 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:06 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:06 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:07 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:07 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:08 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:08 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:13 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:13 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:14 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:14 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:15 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:15 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:17 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:17 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:18 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:18 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:20 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:20 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:25 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:25 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:26 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:26 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:31 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:31 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:34 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:34 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:35 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:35 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:37 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:37 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:38 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:38 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:43 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:43 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:47 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:47 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:48 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:48 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:50 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:55 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:55 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:40:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:40:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:02 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:02 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:09 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:09 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:13 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:13 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:15 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:15 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:17 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:17 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:18 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:18 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:20 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:20 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:24 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:24 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:26 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:26 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:29 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:29 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:31 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:31 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:34 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:34 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:35 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:35 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:37 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:37 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:38 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:38 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:47 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:47 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:55 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:55 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:41:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:41:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:02 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:02 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:13 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:13 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:15 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:15 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:17 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:17 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:20 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:20 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:24 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:24 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:26 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:26 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:29 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:29 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:34 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:34 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:35 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:35 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:37 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:37 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:45 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:45 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:47 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:47 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:48 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:48 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:50 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:56 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:56 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:42:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:42:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:00 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:00 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:03 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:03 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:06 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:06 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:42 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:42 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:47 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:47 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:50 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:50 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:55 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:55 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:43:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:43:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:03 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:03 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:06 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:06 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:07 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:07 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:09 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:09 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:14 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:14 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:15 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:15 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:16 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:16 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:18 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:18 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:22 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:22 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:24 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:24 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:25 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:25 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:31 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:31 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:34 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:34 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:35 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:35 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:37 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:37 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:38 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:38 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:43 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:43 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:47 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:47 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:48 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:48 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:50 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:56 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:56 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:44:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:44:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:00 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:00 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:02 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:02 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:03 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:03 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:06 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:06 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:08 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:08 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:09 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:09 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:13 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:13 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:13 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:13 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:15 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:15 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:16 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:16 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:18 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:18 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:22 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:22 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:24 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:24 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:25 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:25 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:31 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:31 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:33 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:33 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:34 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:34 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:36 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:36 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:37 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:37 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:42 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:42 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:43 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:43 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:45 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:45 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:48 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:48 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:55 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:55 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:56 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:56 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:45:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:45:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:00 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:00 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:02 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:02 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:07 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:07 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:13 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:13 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:15 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:15 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:17 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:17 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:25 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:25 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:34 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:34 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:36 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:36 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:43 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:43 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:47 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:47 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:50 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:56 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:56 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:46:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:46:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:47:00 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:47:00 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:47:03 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:47:03 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:47:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:47:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:47:07 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:47:07 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:47:09 --- ERROR: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
2017-07-25 15:47:09 --- STRACE: ErrorException [ 8 ]: Use of undefined constant TELEPHONECODE - assumed 'TELEPHONECODE' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 207 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(207): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 207, Array)
#1 [internal function]: Controller_TaximobilityMobileapi118->action_index()
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi118))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:47:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant COMPANY_CID - assumed 'COMPANY_CID' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 27 ]
2017-07-25 15:47:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant COMPANY_CID - assumed 'COMPANY_CID' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 27 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 27, Array)
#1 [internal function]: Controller_TaximobilityMobileapi117->__construct(Object(Request), Object(Response))
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}
2017-07-25 15:47:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant COMPANY_CID - assumed 'COMPANY_CID' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 27 ]
2017-07-25 15:47:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant COMPANY_CID - assumed 'COMPANY_CID' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 27 ]
--
#0 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi117.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 27, Array)
#1 [internal function]: Controller_TaximobilityMobileapi117->__construct(Object(Request), Object(Response))
#2 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#6 {main}