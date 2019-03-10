<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-28 03:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-08-28 03:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/vhosts/loadtest/index.php(201): Kohana_Request->execute()
#1 {main}
2017-08-28 03:18:57 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-28 03:18:57 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-08-28 16:41:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-28 16:41:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-08-28 17:14:05 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-08-28 17:14:05 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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