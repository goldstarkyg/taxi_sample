<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-11 00:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 00:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 00:39:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-11 00:39:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-11 01:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 01:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 01:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 01:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 01:08:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/bootstrap-theme.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 01:08:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/bootstrap-theme.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 01:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 01:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 04:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 04:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 04:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 04:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 04:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 04:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 04:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 04:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 05:38:00 --- ERROR: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
2017-09-11 05:38:00 --- STRACE: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(239): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 239, Array)
#1 [internal function]: Controller_TaximobilityFind->action_signup()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-11 05:38:12 --- ERROR: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
2017-09-11 05:38:12 --- STRACE: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(239): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 239, Array)
#1 [internal function]: Controller_TaximobilityFind->action_signup()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-11 06:55:39 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2058 ]
2017-09-11 06:55:39 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2058 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-11 06:55:39 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2058 ]
2017-09-11 06:55:39 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 2058 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-11 06:55:39 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5347 ]
2017-09-11 06:55:39 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 5347 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-11 06:55:40 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7054 ]
2017-09-11 06:55:40 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7054 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-11 06:55:40 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7054 ]
2017-09-11 06:55:40 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7054 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-11 06:55:40 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7054 ]
2017-09-11 06:55:40 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file, expecting ')' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 7054 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-11 06:55:40 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ' = str_r' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8422 ]
2017-09-11 06:55:40 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ' = str_r' ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi118.php [ 8422 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi118.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-11 06:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 06:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 06:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 06:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 06:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 06:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 06:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 06:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 07:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 07:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 07:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 07:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 07:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 07:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 07:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b63e638a4e0Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 07:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b63e638a4e0Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 08:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b63e638a4e0Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 08:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b63e638a4e0Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 08:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b532a91fb42unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 08:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b532a91fb42unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 09:52:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-11 09:52:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-11 09:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59b65d35c754fScreenshotfrom2017-09-0823:03:25.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 09:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/dropmetaxi/driver_image/59b65d35c754fScreenshotfrom2017-09-0823:03:25.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 11:37:22 --- ERROR: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi117' not found ~ APPPATH/classes/controller/mobileapi117.php [ 14 ]
2017-09-11 11:37:22 --- STRACE: ErrorException [ 1 ]: Class 'Controller_TaximobilityMobileapi117' not found ~ APPPATH/classes/controller/mobileapi117.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-11 11:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 11:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 11:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 11:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 12:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b66e8ec76e4Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 12:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b66e8ec76e4Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 12:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b66e8ec76e4Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 12:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b66e8ec76e4Dropme was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 12:28:44 --- ERROR: ErrorException [ 0 ]: Call to undefined method Model_mobileapi117::get_sms_settings() ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 9167 ]
2017-09-11 12:28:44 --- STRACE: ErrorException [ 0 ]: Call to undefined method Model_mobileapi117::get_sms_settings() ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 9167 ]
--
#0 {main}
2017-09-11 12:30:39 --- ERROR: ErrorException [ 0 ]: Call to private method Model_TaximobilityCommonmodel::get_sms_settings() from context 'Model_Taximobilitymobileapi117' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 9168 ]
2017-09-11 12:30:39 --- STRACE: ErrorException [ 0 ]: Call to private method Model_TaximobilityCommonmodel::get_sms_settings() from context 'Model_Taximobilitymobileapi117' ~ MODPATH/taximobility/classes/model/taximobilitymobileapi117.php [ 9168 ]
--
#0 {main}
2017-09-11 12:44:51 --- ERROR: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
2017-09-11 12:44:51 --- STRACE: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(239): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 239, Array)
#1 [internal function]: Controller_TaximobilityFind->action_signup()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-11 13:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 13:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 13:57:48 --- ERROR: ParseError [ 0 ]: syntax error, unexpected ''t' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 6167 ]
2017-09-11 13:57:48 --- STRACE: ParseError [ 0 ]: syntax error, unexpected ''t' (T_ENCAPSED_AND_WHITESPACE) ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 6167 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi117.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-11 14:10:50 --- ERROR: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 1863 ]
2017-09-11 14:10:50 --- STRACE: ParseError [ 0 ]: syntax error, unexpected end of file ~ MODPATH/taximobility/classes/controller/taximobilitymobileapi117.php [ 1863 ]
--
#0 [internal function]: Kohana_Core::auto_load('Controller_Taxi...')
#1 /var/www/html/application/classes/controller/mobileapi117.php(14): spl_autoload_call('Controller_Taxi...')
#2 /var/www/html/system/classes/kohana/core.php(504): require('/var/www/html/a...')
#3 [internal function]: Kohana_Core::auto_load('controller_mobi...')
#4 [internal function]: spl_autoload_call('controller_mobi...')
#5 /var/www/html/system/classes/kohana/request/client/internal.php(85): class_exists('controller_mobi...')
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(136): Kohana_Request->execute()
#9 {main}
2017-09-11 15:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 15:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 17:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon-120x120-precomposed.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 17:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon-120x120-precomposed.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 19:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 19:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 19:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-11 19:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/dropmetaxi/driver_image/59b602f628424unnamed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-11 21:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 21:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 23:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 23:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-11 23:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-11 23:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}