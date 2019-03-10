<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-09 00:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hndUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 00:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hndUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 00:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 00:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmUnblock.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 00:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL moo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-09 00:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL moo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-09 04:37:36 --- ERROR: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
2017-09-09 04:37:36 --- STRACE: ErrorException [ 8 ]: Undefined index: credit_card_number ~ MODPATH/taximobility/classes/controller/taximobilityfind.php [ 239 ]
--
#0 /var/www/html/modules/taximobility/classes/controller/taximobilityfind.php(239): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/m...', 239, Array)
#1 [internal function]: Controller_TaximobilityFind->action_signup()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Find))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(136): Kohana_Request->execute()
#6 {main}
2017-09-09 05:28:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-09 05:28:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-09 06:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 06:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 07:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-09 07:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-09 10:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 10:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 10:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 10:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 10:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 10:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropme.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 10:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/bootstrap-theme.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 10:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/bootstrap-theme.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 10:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 10:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index_files/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 15:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logon.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 15:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logon.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 15:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-09-09 15:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-09 16:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-09 16:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(136): Kohana_Request->execute()
#3 {main}
2017-09-09 17:11:14 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
2017-09-09 17:11:14 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 330 ]
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
2017-09-09 17:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 17:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 17:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 17:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w00tw00t.at.blackhats.romanian.anti-sec:) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 17:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 17:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 17:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 17:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 17:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 17:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 17:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 17:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 17:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 17:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 22:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 22:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}
2017-09-09 22:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2017-09-09 22:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(136): Kohana_Request->execute()
#1 {main}