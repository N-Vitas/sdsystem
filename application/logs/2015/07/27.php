<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-27 22:40:44 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/vitas/www/sdsystem.vitas/modules/database/classes/Kohana/Database/MySQL.php:171
2015-07-27 22:40:44 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/vitas/www/sdsystem.vitas/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Common.php(11): Kohana_ORM::factory('myuser', NULL)
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(69): Controller_Common->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem.vitas/modules/database/classes/Kohana/Database/MySQL.php:171
2015-07-27 22:46:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:46:05 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1567, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:50:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:50:26 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1567, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:53:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:53:02 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1567, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:53:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:53:05 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1567, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:53:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:53:06 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1567, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:53:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:53:06 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1567, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 22:55:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:55:58 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:56:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:56:04 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:56:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: role ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:56:26 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('role', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:56:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: role ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:56:27 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('role', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: role ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:25 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('role', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: role ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:26 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('role', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: role ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:27 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('role', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: login ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:37 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('login', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: login ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:38 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('login', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roleuser ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:48 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roleuser', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roleuser ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:49 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roleuser', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roleuser ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:49 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roleuser', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:55 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:57:56 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:59:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fk_role_id ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:59:14 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('fk_role_id', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:59:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fk_role_id ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:59:15 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('fk_role_id', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:59:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 22:59:20 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 23:01:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1565 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565
2015-07-27 23:01:35 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(1565): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1565, Array)
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Main.php(161): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:1565