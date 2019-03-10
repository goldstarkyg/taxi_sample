<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-21 05:06:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
2017-08-21 05:06:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 329 ]
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
2017-08-21 05:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-21 05:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-21 05:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-21 05:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-21 05:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-21 05:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-21 05:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-21 05:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-21 05:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-21 05:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-21 06:03:59 --- ERROR: ErrorException [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/common_config.php [ 861 ]
2017-08-21 06:03:59 --- STRACE: ErrorException [ 0 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/common_config.php [ 861 ]
--
#0 {main}
2017-08-21 06:04:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:04:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:05:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:05:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:05:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:05:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:06:34 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:06:34 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:06:38 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:06:38 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:06:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:06:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:07:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:07:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:07:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:07:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:08:22 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/mobile_common_config.php [ 13 ]
2017-08-21 06:08:22 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/mobile_common_config.php [ 13 ]
--
#0 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 13, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:08:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/mobile_common_config.php [ 13 ]
2017-08-21 06:08:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/mobile_common_config.php [ 13 ]
--
#0 /var/www/vhosts/loadtest/application/classes/mobile_common_config.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 13, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitymobileapi118.php(20): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilityMobileapi118->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:08:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:08:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:08:48 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:08:48 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:08:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:08:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-21 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-21 06:09:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:09:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:09:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:09:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:09:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:09:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:09:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:09:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:10:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:10:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:11:13 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:11:13 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-21 06:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-21 06:11:18 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:11:18 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:11:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:11:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:11:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:11:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:11:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:11:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 06:11:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:11:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:12:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:12:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:13:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:13:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:13:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:13:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 06:14:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
2017-08-21 06:14:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SUB_DOMAIN_NAME - assumed 'SUB_DOMAIN_NAME' ~ APPPATH/classes/common_config.php [ 15 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/vhosts...')
#2 [internal function]: Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#7 {main}
2017-08-21 07:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-21 07:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-21 07:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-21 07:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-21 07:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-21 07:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-21 07:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-21 07:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-21 07:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-21 07:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-21 09:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-21 09:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/favicon/5901d84b1fecefavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-21 09:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-21 09:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardRevenueVsExpensesChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-21 09:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-21 09:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardUserRevenueChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-21 09:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-08-21 09:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/dashboardMissedRevenueBarChart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#3 {main}
2017-08-21 12:14:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-21 12:14:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 330, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}
2017-08-21 17:48:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-21 17:48:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
--
#0 /var/www/vhosts/loadtest/application/classes/common_config.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 330, Array)
#1 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/vhosts...')
#2 /var/www/vhosts/loadtest/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/vhosts/loadtest/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/vhosts/loadtest/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/loadtest/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#8 {main}