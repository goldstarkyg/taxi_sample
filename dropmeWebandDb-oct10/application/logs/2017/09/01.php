<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-01 04:57:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-09-01 04:57:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 04:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 04:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 04:57:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-09-01 04:57:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:02:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-09-01 05:02:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:02:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-09-01 05:02:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:14:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
2017-09-01 05:14:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/common_config.php [ 342 ]
--
#0 /var/www/html/application/classes/common_config.php(342): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 342, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitywebsite.php(51): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityusers.php(15): Controller_TaximobilityWebsite->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityUsers->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:19:31 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:19:31 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:19:34 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:19:34 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:20:29 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:20:29 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:20:33 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:20:33 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:21:20 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:21:20 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:21:25 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:21:25 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:23:43 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:23:43 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:23:47 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:23:47 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:26:23 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:26:23 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:45:43 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:45:43 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:46:02 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:46:02 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:46:09 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:46:09 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:46:26 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:46:26 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:46:29 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:46:29 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:47:07 --- ERROR: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
2017-09-01 05:47:07 --- STRACE: ErrorException [ 8 ]: Undefined index: meta_keyword ~ APPPATH/classes/common_config.php [ 66 ]
--
#0 /var/www/html/application/classes/common_config.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 66, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitysiteadmin.php(30): require('/var/www/html/a...')
#2 /var/www/html/modules/taximobility/classes/controller/taximobilityadmin.php(16): Controller_TaximobilitySiteadmin->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_TaximobilityAdmin->__construct(Object(Request), Object(Response))
#4 /var/www/html/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(136): Kohana_Request->execute()
#8 {main}
2017-09-01 05:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/favicon/592d09ff7519dfavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/favicon/592d09ff7519dfavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/default_banner.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/banner_iosstore.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/banner_iosstore.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/banner_androidstore.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/banner_androidstore.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page/theme_1/about_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page/theme_1/about_left.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/frontend_mobile.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/frontend_mobile.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/app_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/landing_page//theme_1/play_store.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/favicon/592d09ff7519dfavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/favicon/592d09ff7519dfavicon.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo-small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/site_logo/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 05:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/company/no_image.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 05:49:50 --- ERROR: ErrorException [ 2 ]: opendir(/var/www/html/public/dropmetaxi/android/language/passenger/): failed to open dir: No such file or directory ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 333 ]
2017-09-01 05:49:50 --- STRACE: ErrorException [ 2 ]: opendir(/var/www/html/public/dropmetaxi/android/language/passenger/): failed to open dir: No such file or directory ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 333 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/var/ww...', '/var/www/html/m...', 333, Array)
#1 /var/www/html/modules/taximobility/classes/controller/taximobilitymobileapi117.php(333): opendir('/var/www/html/p...')
#2 [internal function]: Controller_TaximobilityMobileapi117->action_index()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mobileapi117))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(136): Kohana_Request->execute()
#7 {main}
2017-09-01 06:09:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:09:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 06:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 06:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 06:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 06:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 06:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 06:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 06:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 06:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 06:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 06:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 07:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 07:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 07:17:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-01 07:17:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-01 07:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 07:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 07:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 07:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 07:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 07:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 08:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 08:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 09:17:12 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 36 ]
2017-09-01 09:17:12 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 36 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 36, Array)
#1 [internal function]: Controller_TaximobilityManage->action_company()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-01 09:17:14 --- ERROR: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 36 ]
2017-09-01 09:17:14 --- STRACE: ErrorException [ 8 ]: Undefined index: userid ~ MODPATH/taximobility/classes/controller/taximobilitymanage.php [ 36 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilitymanage.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 36, Array)
#1 [internal function]: Controller_TaximobilityManage->action_company()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-01 09:17:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 09:17:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 09:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 09:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 10:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 10:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 10:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 10:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobileapi118/index//mobileapi118/index/dGF4aV9hbGw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 11:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dispatcher/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-01 11:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dispatcher/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-01 13:20:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-01 13:20:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-01 15:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 138.197.223.235:43 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 15:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 138.197.223.235:43 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 17:32:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-01 17:32:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-01 18:43:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-01 18:43:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-01 20:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hndUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 20:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hndUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 20:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-01 20:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-01 20:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL moo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-01 20:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL moo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}