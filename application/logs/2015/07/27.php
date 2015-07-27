<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-27 09:36:57 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'sdsystem.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/vitas/www/sdsystem/modules/database/classes/Kohana/Database/MySQL.php:359
2015-07-27 09:36:57 --- DEBUG: #0 /home/vitas/www/sdsystem/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(222): Kohana_ORM::factory('myuser')
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#13 {main} in /home/vitas/www/sdsystem/modules/database/classes/Kohana/Database/MySQL.php:359
2015-07-27 09:37:16 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'sdsystem.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/vitas/www/sdsystem/modules/database/classes/Kohana/Database/MySQL.php:359
2015-07-27 09:37:16 --- DEBUG: #0 /home/vitas/www/sdsystem/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(222): Kohana_ORM::factory('myuser')
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#13 {main} in /home/vitas/www/sdsystem/modules/database/classes/Kohana/Database/MySQL.php:359
2015-07-27 09:39:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 09:39:08 --- DEBUG: #0 /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 1567, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(160): Kohana_ORM->add('roles', Object(Model_Role))
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/modules/orm/classes/Kohana/ORM.php:1567
2015-07-27 09:43:48 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Common.php [ 18 ] in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:18
2015-07-27 09:43:48 --- DEBUG: #0 /home/vitas/www/sdsystem/application/classes/Controller/Common.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vitas/www...', 18, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(14): Controller_Common->before()
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:18
2015-07-27 09:45:20 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Common.php [ 17 ] in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:17
2015-07-27 09:45:20 --- DEBUG: #0 /home/vitas/www/sdsystem/application/classes/Controller/Common.php(17): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vitas/www...', 17, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(14): Controller_Common->before()
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:17
2015-07-27 09:45:21 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Common.php [ 17 ] in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:17
2015-07-27 09:45:21 --- DEBUG: #0 /home/vitas/www/sdsystem/application/classes/Controller/Common.php(17): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vitas/www...', 17, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(14): Controller_Common->before()
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:17
2015-07-27 09:45:50 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Common.php [ 18 ] in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:18
2015-07-27 09:45:50 --- DEBUG: #0 /home/vitas/www/sdsystem/application/classes/Controller/Common.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vitas/www...', 18, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(14): Controller_Common->before()
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:18
2015-07-27 09:45:51 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Common.php [ 18 ] in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:18
2015-07-27 09:45:51 --- DEBUG: #0 /home/vitas/www/sdsystem/application/classes/Controller/Common.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vitas/www...', 18, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(14): Controller_Common->before()
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/application/classes/Controller/Common.php:18
2015-07-27 09:46:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/my_template.php [ 23 ] in /home/vitas/www/sdsystem/application/views/my_template.php:23
2015-07-27 09:46:13 --- DEBUG: #0 /home/vitas/www/sdsystem/application/views/my_template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 23, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#10 {main} in /home/vitas/www/sdsystem/application/views/my_template.php:23
2015-07-27 09:46:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/my_template.php [ 23 ] in /home/vitas/www/sdsystem/application/views/my_template.php:23
2015-07-27 09:46:14 --- DEBUG: #0 /home/vitas/www/sdsystem/application/views/my_template.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 23, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#10 {main} in /home/vitas/www/sdsystem/application/views/my_template.php:23
2015-07-27 09:47:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view auth could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 09:47:25 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename('auth')
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct('auth', NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(33): Kohana_View::factory('auth')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 09:48:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Common_Controller' not found ~ APPPATH/classes/Controller/Auth.php [ 3 ] in file:line
2015-07-27 09:48:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 09:51:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
    Username:
    
    
    Password:
    
    
    Login
  could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 09:51:38 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(35): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 09:59:29 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/login.php [ 1 ] in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 09:59:29 --- DEBUG: #0 /home/vitas/www/sdsystem/application/views/login.php(1): Kohana_Core::error_handler(8, 'Array to string...', '/home/vitas/www...', 1, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem/application/views/my_template.php(33): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#6 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:04:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Auth.php [ 34 ] in file:line
2015-07-27 10:04:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 10:04:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Controller/Auth.php [ 34 ] in file:line
2015-07-27 10:04:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 10:25:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view auth could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:25:24 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename('auth')
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct('auth', NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory('auth')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:27:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/login.php [ 1 ] in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:27:07 --- DEBUG: #0 /home/vitas/www/sdsystem/application/views/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 1, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_Response->body(Object(View))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#12 {main} in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:27:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
    Username:
    
    
    Password:
    
    
    Login
  could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:27:44 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:27:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
    Username:
    
    
    Password:
    
    
    Login
  could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:27:45 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/login.php [ 1 ] in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:28:24 --- DEBUG: #0 /home/vitas/www/sdsystem/application/views/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 1, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(263): Kohana_Core::find_file('views', Object(View))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#12 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#15 {main} in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:28:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/login.php [ 1 ] in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:28:24 --- DEBUG: #0 /home/vitas/www/sdsystem/application/views/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 1, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(267): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#11 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#14 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#17 {main} in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:28:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: data
	
		APPPATH/views/login.php [ 1 ]
		1 &lt;? print_r($data);?&gt;
2 &lt;form method="post" accept-charset="utf-8"&gt;
3     &lt;label for="username"&gt;Username:&lt;/label&gt;
4     &lt;input id="username" type="text" name="login" /&gt;
5     &lt;br /&gt;
6     &lt;label for="password"&gt;Password:&lt;/label&gt;
		
					
				
					
													APPPATH/views/login.php [ 1 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(24) "Undefined variable: data"
						
											
							2
							string(52) "/home/vitas/www/sdsystem/application/views/login.php"
						
											
							3
							integer 1
						
											
							4
							array(2) (
    "kohana_view_filename" => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
    "kohana_view_data" => array(0) 
)
						
										
				
													1 &lt;? print_r($data);?&gt;
2 &lt;form method="post" accept-charset="utf-8"&gt;
3     &lt;label for="username"&gt;Username:&lt;/label&gt;
4     &lt;input id="username" type="text" name="login" /&gt;
5     &lt;br /&gt;
6     &lt;label for="password"&gt;Password:&lt;/label&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(52) "/home/vitas/www/sdsystem/application/views/login.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(52) "/home/vitas/www/sdsystem/application/views/login.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 267 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
        protected _data => array(0) 
    }
)
						
										
				
													262 	{
263 		if (($path = Kohana::find_file('views', $file)) === FALSE)
264 		{
265 			throw new View_Exception('The requested view :file could not be found', array(
266 				':file' =&gt; $file,
267 			));
268 		}
269 
270 		// Store the file path locally
271 		$this-&gt;_file = $path;
272 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 145 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
    protected _data => array(0) 
}
						
										
				
													140 	 */
141 	public function __construct($file = NULL, array $data = NULL)
142 	{
143 		if ($file !== NULL)
144 		{
145 			$this-&gt;set_filename($file);
146 		}
147 
148 		if ($data !== NULL)
149 		{
150 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/classes/Controller/Auth.php [ 36 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
    protected _data => array(0) 
}
						
										
				
													31        }
32         $view = View::factory('login');
33         // $view-&gt;data = $data;
34         // $this-&gt;template-&gt;content = View::factory($view);
35         // $this-&gt;template-&gt;content = $view;
36         $this-&gt;response-&gt;body(View::factory($view)); 
37     }    
38     public function action_hashpass(){
39 	   //Создание обьекта авторизации
40 	   $auth = Auth::instance();
41        $this-&gt;template-&gt;content =  $auth-&gt;hash_password('admin');        

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 84 ]
											
					&raquo;
					Controller_Auth->action_index()
				
													79 				array(':uri' =&gt; $this-&gt;request-&gt;uri())
80 			)-&gt;request($this-&gt;request);
81 		}
82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Auth(2) {
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(4) "main"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(4) "Auth"
        protected _action => string(5) "index"
        protected _uri => string(4) "auth"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(3) (
            "5f1642422754bd06df79b03435682aa4" => NULL
            "ee366ffa379f8288570f81a89c377a80" => NULL
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "main"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Auth"
    protected _action => string(5) "index"
    protected _uri => string(4) "auth"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(3) (
        "5f1642422754bd06df79b03435682aa4" => NULL
        "ee366ffa379f8288570f81a89c377a80" => NULL
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "main"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Auth"
    protected _action => string(5) "index"
    protected _uri => string(4) "auth"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(3) (
        "5f1642422754bd06df79b03435682aa4" => NULL
        "ee366ffa379f8288570f81a89c377a80" => NULL
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 133 ]
											
					&raquo;
					Kohana_Request->execute()
				
													128 	/**
129 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
130 	 * If no source is specified, the URI will be automatically detected.
131 	 */
132 	echo Request::factory(TRUE, array(), FALSE)
133 		-&gt;execute()
134 		-&gt;send_headers(TRUE)
135 		-&gt;body();
136 }

							
							
	
	Environment
	
				Included files (83)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					MODPATH/userguide/init.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/config/userguide.php
				
								
					MODPATH/userguide/config/userguide.php
				
								
					MODPATH/orm/config/userguide.php
				
								
					MODPATH/image/config/userguide.php
				
								
					MODPATH/database/config/userguide.php
				
								
					MODPATH/auth/config/userguide.php
				
								
					SYSPATH/classes/Config/Group.php
				
								
					SYSPATH/classes/Kohana/Config/Group.php
				
								
					SYSPATH/classes/Cookie.php
				
								
					SYSPATH/classes/Kohana/Cookie.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Auth.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					MODPATH/auth/classes/Auth.php
				
								
					MODPATH/auth/classes/Kohana/Auth.php
				
								
					MODPATH/auth/config/auth.php
				
								
					SYSPATH/classes/Session.php
				
								
					SYSPATH/classes/Kohana/Session.php
				
								
					APPPATH/config/auth.php
				
								
					MODPATH/orm/classes/Auth/ORM.php
				
								
					MODPATH/orm/classes/Kohana/Auth/ORM.php
				
								
					SYSPATH/config/session.php
				
								
					MODPATH/database/config/session.php
				
								
					SYSPATH/classes/Session/Native.php
				
								
					SYSPATH/classes/Kohana/Session/Native.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/login.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
							
		
				Loaded extensions (59)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					curl
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					session
				
								
					intl
				
								
					json
				
								
					ldap
				
								
					mbstring
				
								
					mcrypt
				
								
					mssql
				
								
					standard
				
								
					mysqlnd
				
								
					mysqli
				
								
					mysql
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_pgsql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					imap
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					exif
				
								
					sybase_ct
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					xsl
				
								
					zip
				
								
					apache2handler
				
								
					mhash
				
							
		
						$_SESSION
		
			
								
					last_active
					integer 1438010865
				
								
					AUTH_REDIRECT
					string(21) "/public/sdsystem/auth"
				
								
					USER_NAME
					NULL
				
							
		
												$_COOKIE
		
			
								
					5f1642422754bd06df79b03435682aa4
					string(4) "sdfg"
				
								
					ee366ffa379f8288570f81a89c377a80
					string(15) "sdfgs@sdfsdf.kj"
				
								
					session
					string(26) "n3rs20ce4ija4tpdk497nlomb6"
				
							
		
						$_SERVER
		
			
								
					REDIRECT_UNIQUE_ID
					string(24) "VbZOGH8AAQEAABiJFUMAAAAK"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					UNIQUE_ID
					string(24) "VbZOGH8AAQEAABiJFUMAAAAK"
				
								
					HTTP_HOST
					string(5) "xampp"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(105) "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(35) "ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4"
				
								
					HTTP_COOKIE
					string(125) "5f1642422754bd06df79b03435682aa4=sdfg; ee366ffa379f8288570f81a89c377a80=sdfgs%40sdfsdf.kj; session=n3rs20ce4ija4tpdk497nlomb6"
				
								
					PATH
					string(60) "/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin"
				
								
					LD_LIBRARY_PATH
					string(29) "/opt/lampp/lib:/opt/lampp/lib"
				
								
					SERVER_SIGNATURE
					string(0) ""
				
								
					SERVER_SOFTWARE
					string(76) "Apache/2.4.7 (Unix) OpenSSL/1.0.1e PHP/5.5.6 mod_perl/2.0.8-dev Perl/v5.16.3"
				
								
					SERVER_NAME
					string(5) "xampp"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(17) "/opt/lampp/htdocs"
				
								
					REQUEST_SCHEME
					string(4) "http"
				
								
					CONTEXT_PREFIX
					string(0) ""
				
								
					CONTEXT_DOCUMENT_ROOT
					string(17) "/opt/lampp/htdocs"
				
								
					SERVER_ADMIN
					string(17) "admin@mysite1.dev"
				
								
					SCRIPT_FILENAME
					string(43) "/opt/lampp/htdocs/public/sdsystem/index.php"
				
								
					REMOTE_PORT
					string(5) "56423"
				
								
					REDIRECT_URL
					string(21) "/public/sdsystem/auth"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(21) "/public/sdsystem/auth"
				
								
					SCRIPT_NAME
					string(26) "/public/sdsystem/index.php"
				
								
					PATH_INFO
					string(5) "/auth"
				
								
					PATH_TRANSLATED
					string(22) "/opt/lampp/htdocs/auth"
				
								
					PHP_SELF
					string(31) "/public/sdsystem/index.php/auth"
				
								
					REQUEST_TIME_FLOAT
					float 1438010904.686
				
								
					REQUEST_TIME
					integer 1438010904
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:24 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/login.php [ 1 ] in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:28:25 --- DEBUG: #0 /home/vitas/www/sdsystem/application/views/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 1, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(263): Kohana_Core::find_file('views', Object(View))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#12 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#15 {main} in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:28:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/login.php [ 1 ] in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:28:25 --- DEBUG: #0 /home/vitas/www/sdsystem/application/views/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 1, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(267): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#11 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#14 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#17 {main} in /home/vitas/www/sdsystem/application/views/login.php:1
2015-07-27 10:28:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: data
	
		APPPATH/views/login.php [ 1 ]
		1 &lt;? print_r($data);?&gt;
2 &lt;form method="post" accept-charset="utf-8"&gt;
3     &lt;label for="username"&gt;Username:&lt;/label&gt;
4     &lt;input id="username" type="text" name="login" /&gt;
5     &lt;br /&gt;
6     &lt;label for="password"&gt;Password:&lt;/label&gt;
		
					
				
					
													APPPATH/views/login.php [ 1 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(24) "Undefined variable: data"
						
											
							2
							string(52) "/home/vitas/www/sdsystem/application/views/login.php"
						
											
							3
							integer 1
						
											
							4
							array(2) (
    "kohana_view_filename" => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
    "kohana_view_data" => array(0) 
)
						
										
				
													1 &lt;? print_r($data);?&gt;
2 &lt;form method="post" accept-charset="utf-8"&gt;
3     &lt;label for="username"&gt;Username:&lt;/label&gt;
4     &lt;input id="username" type="text" name="login" /&gt;
5     &lt;br /&gt;
6     &lt;label for="password"&gt;Password:&lt;/label&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(52) "/home/vitas/www/sdsystem/application/views/login.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(52) "/home/vitas/www/sdsystem/application/views/login.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 267 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
        protected _data => array(0) 
    }
)
						
										
				
													262 	{
263 		if (($path = Kohana::find_file('views', $file)) === FALSE)
264 		{
265 			throw new View_Exception('The requested view :file could not be found', array(
266 				':file' =&gt; $file,
267 			));
268 		}
269 
270 		// Store the file path locally
271 		$this-&gt;_file = $path;
272 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 145 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
    protected _data => array(0) 
}
						
										
				
													140 	 */
141 	public function __construct($file = NULL, array $data = NULL)
142 	{
143 		if ($file !== NULL)
144 		{
145 			$this-&gt;set_filename($file);
146 		}
147 
148 		if ($data !== NULL)
149 		{
150 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/classes/Controller/Auth.php [ 36 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(52) "/home/vitas/www/sdsystem/application/views/login.php"
    protected _data => array(0) 
}
						
										
				
													31        }
32         $view = View::factory('login');
33         // $view-&gt;data = $data;
34         // $this-&gt;template-&gt;content = View::factory($view);
35         // $this-&gt;template-&gt;content = $view;
36         $this-&gt;response-&gt;body(View::factory($view)); 
37     }    
38     public function action_hashpass(){
39 	   //Создание обьекта авторизации
40 	   $auth = Auth::instance();
41        $this-&gt;template-&gt;content =  $auth-&gt;hash_password('admin');        

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 84 ]
											
					&raquo;
					Controller_Auth->action_index()
				
													79 				array(':uri' =&gt; $this-&gt;request-&gt;uri())
80 			)-&gt;request($this-&gt;request);
81 		}
82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Auth(2) {
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(4) "main"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(4) "Auth"
        protected _action => string(5) "index"
        protected _uri => string(4) "auth"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(3) (
            "5f1642422754bd06df79b03435682aa4" => NULL
            "ee366ffa379f8288570f81a89c377a80" => NULL
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "main"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Auth"
    protected _action => string(5) "index"
    protected _uri => string(4) "auth"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(3) (
        "5f1642422754bd06df79b03435682aa4" => NULL
        "ee366ffa379f8288570f81a89c377a80" => NULL
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "main"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Auth"
    protected _action => string(5) "index"
    protected _uri => string(4) "auth"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(3) (
        "5f1642422754bd06df79b03435682aa4" => NULL
        "ee366ffa379f8288570f81a89c377a80" => NULL
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 133 ]
											
					&raquo;
					Kohana_Request->execute()
				
													128 	/**
129 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
130 	 * If no source is specified, the URI will be automatically detected.
131 	 */
132 	echo Request::factory(TRUE, array(), FALSE)
133 		-&gt;execute()
134 		-&gt;send_headers(TRUE)
135 		-&gt;body();
136 }

							
							
	
	Environment
	
				Included files (83)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					MODPATH/userguide/init.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/config/userguide.php
				
								
					MODPATH/userguide/config/userguide.php
				
								
					MODPATH/orm/config/userguide.php
				
								
					MODPATH/image/config/userguide.php
				
								
					MODPATH/database/config/userguide.php
				
								
					MODPATH/auth/config/userguide.php
				
								
					SYSPATH/classes/Config/Group.php
				
								
					SYSPATH/classes/Kohana/Config/Group.php
				
								
					SYSPATH/classes/Cookie.php
				
								
					SYSPATH/classes/Kohana/Cookie.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Auth.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					MODPATH/auth/classes/Auth.php
				
								
					MODPATH/auth/classes/Kohana/Auth.php
				
								
					MODPATH/auth/config/auth.php
				
								
					SYSPATH/classes/Session.php
				
								
					SYSPATH/classes/Kohana/Session.php
				
								
					APPPATH/config/auth.php
				
								
					MODPATH/orm/classes/Auth/ORM.php
				
								
					MODPATH/orm/classes/Kohana/Auth/ORM.php
				
								
					SYSPATH/config/session.php
				
								
					MODPATH/database/config/session.php
				
								
					SYSPATH/classes/Session/Native.php
				
								
					SYSPATH/classes/Kohana/Session/Native.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/login.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
							
		
				Loaded extensions (59)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					curl
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					session
				
								
					intl
				
								
					json
				
								
					ldap
				
								
					mbstring
				
								
					mcrypt
				
								
					mssql
				
								
					standard
				
								
					mysqlnd
				
								
					mysqli
				
								
					mysql
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_pgsql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					imap
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					exif
				
								
					sybase_ct
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					xsl
				
								
					zip
				
								
					apache2handler
				
								
					mhash
				
							
		
						$_SESSION
		
			
								
					last_active
					integer 1438010904
				
								
					AUTH_REDIRECT
					string(21) "/public/sdsystem/auth"
				
								
					USER_NAME
					NULL
				
							
		
												$_COOKIE
		
			
								
					5f1642422754bd06df79b03435682aa4
					string(4) "sdfg"
				
								
					ee366ffa379f8288570f81a89c377a80
					string(15) "sdfgs@sdfsdf.kj"
				
								
					session
					string(26) "n3rs20ce4ija4tpdk497nlomb6"
				
							
		
						$_SERVER
		
			
								
					REDIRECT_UNIQUE_ID
					string(24) "VbZOGX8AAQEAABjzLQYAAAAG"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					UNIQUE_ID
					string(24) "VbZOGX8AAQEAABjzLQYAAAAG"
				
								
					HTTP_HOST
					string(5) "xampp"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(105) "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(35) "ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4"
				
								
					HTTP_COOKIE
					string(125) "5f1642422754bd06df79b03435682aa4=sdfg; ee366ffa379f8288570f81a89c377a80=sdfgs%40sdfsdf.kj; session=n3rs20ce4ija4tpdk497nlomb6"
				
								
					PATH
					string(60) "/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin"
				
								
					LD_LIBRARY_PATH
					string(29) "/opt/lampp/lib:/opt/lampp/lib"
				
								
					SERVER_SIGNATURE
					string(0) ""
				
								
					SERVER_SOFTWARE
					string(76) "Apache/2.4.7 (Unix) OpenSSL/1.0.1e PHP/5.5.6 mod_perl/2.0.8-dev Perl/v5.16.3"
				
								
					SERVER_NAME
					string(5) "xampp"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(17) "/opt/lampp/htdocs"
				
								
					REQUEST_SCHEME
					string(4) "http"
				
								
					CONTEXT_PREFIX
					string(0) ""
				
								
					CONTEXT_DOCUMENT_ROOT
					string(17) "/opt/lampp/htdocs"
				
								
					SERVER_ADMIN
					string(17) "admin@mysite1.dev"
				
								
					SCRIPT_FILENAME
					string(43) "/opt/lampp/htdocs/public/sdsystem/index.php"
				
								
					REMOTE_PORT
					string(5) "56424"
				
								
					REDIRECT_URL
					string(21) "/public/sdsystem/auth"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(21) "/public/sdsystem/auth"
				
								
					SCRIPT_NAME
					string(26) "/public/sdsystem/index.php"
				
								
					PATH_INFO
					string(5) "/auth"
				
								
					PATH_TRANSLATED
					string(22) "/opt/lampp/htdocs/auth"
				
								
					PHP_SELF
					string(31) "/public/sdsystem/index.php/auth"
				
								
					REQUEST_TIME_FLOAT
					float 1438010905.584
				
								
					REQUEST_TIME
					integer 1438010905
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:25 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
    Username:
    
    
    Password:
    
    
    Login
  could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:30 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
    Username:
    
    
    Password:
    
    
    Login
  could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:44 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
    Username:
    
    
    Password:
    
    
    Login
  could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:28:44 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:29:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
    Username:
    
    
    Password:
    
    
    Login
  could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:29:25 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:29:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
    Username:
    
    
    Password:
    
    
    Login
  could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:29:25 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:29:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view 


Internet Dreams


 
 



	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
			
		
		
			Username
			
		
		
			Password
			
		
		
			
			
		
		
	
	
 	
	
 
 






 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:29:58 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:29:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view 


Internet Dreams


 
 



	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
			
		
		
			Username
			
		
		
			Password
			
		
		
			
			
		
		
	
	
 	
	
 
 






 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:29:58 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:30:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view 


Internet Dreams


 
 



	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
			
		
		
			Username
			
		
		
			Password
			
		
		
			
			
		
		
	
	
 	
	
 
 






 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:30:48 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(145): Kohana_View->set_filename(Object(View))
#1 /home/vitas/www/sdsystem/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(36): Kohana_View::factory(Object(View))
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#9 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/View.php:145
2015-07-27 10:31:23 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Auth.php [ 35 ] in /home/vitas/www/sdsystem/application/classes/Controller/Auth.php:35
2015-07-27 10:31:23 --- DEBUG: #0 /home/vitas/www/sdsystem/application/classes/Controller/Auth.php(35): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/vitas/www...', 35, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#7 {main} in /home/vitas/www/sdsystem/application/classes/Controller/Auth.php:35
2015-07-27 10:42:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/auth/classes/Kohana/Auth.php [ 77 ] in file:line
2015-07-27 10:42:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 10:47:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ MODPATH/auth/classes/Kohana/Auth.php [ 32 ] in /home/vitas/www/sdsystem/modules/auth/classes/Kohana/Auth.php:32
2015-07-27 10:47:39 --- DEBUG: #0 /home/vitas/www/sdsystem/modules/auth/classes/Kohana/Auth.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 32, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Common.php(9): Kohana_Auth::instance()
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(69): Controller_Common->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/modules/auth/classes/Kohana/Auth.php:32
2015-07-27 10:53:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING), expecting function (T_FUNCTION) ~ MODPATH/auth/classes/Kohana/Auth/File.php [ 12 ] in file:line
2015-07-27 10:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 10:53:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ MODPATH/auth/classes/Kohana/Auth/File.php [ 11 ] in file:line
2015-07-27 10:53:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 10:54:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ MODPATH/auth/classes/Kohana/Auth/File.php [ 11 ] in file:line
2015-07-27 10:54:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 10:55:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Auth' not found ~ MODPATH/auth/classes/Kohana/Auth/File.php [ 11 ] in file:line
2015-07-27 10:55:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:04:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/auth/classes/Kohana/Auth.php [ 26 ] in file:line
2015-07-27 11:04:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:22:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 26 ] in file:line
2015-07-27 11:22:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:22:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 10 ] in file:line
2015-07-27 11:22:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:23:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 10 ] in file:line
2015-07-27 11:23:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:23:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 48 ] in file:line
2015-07-27 11:23:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:23:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 26 ] in file:line
2015-07-27 11:23:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:27:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 48 ] in file:line
2015-07-27 11:27:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:28:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 26 ] in file:line
2015-07-27 11:28:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:33:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-07-27 11:33:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:34:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_roles' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-07-27 11:34:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:35:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Main.php [ 162 ] in file:line
2015-07-27 11:35:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:38:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/menu.php [ 24 ] in file:line
2015-07-27 11:38:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:38:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/menu.php [ 24 ] in file:line
2015-07-27 11:38:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:44:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Main.php [ 200 ] in file:line
2015-07-27 11:44:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:53:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/my_template.php [ 22 ] in file:line
2015-07-27 11:53:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 11:53:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/my_template.php [ 22 ] in file:line
2015-07-27 11:53:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 13:06:17 --- EMERGENCY: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /home/vitas/www/sdsystem/application/classes/Controller/Main.php on line 43 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 211 ] in /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php:211
2015-07-27 13:06:17 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/home/vitas/www...', 211, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(43): Kohana_Validation->rule('name', 'not_empty', 'trtwyeurhweuhrb')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php:211
2015-07-27 13:06:18 --- EMERGENCY: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /home/vitas/www/sdsystem/application/classes/Controller/Main.php on line 43 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 211 ] in /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php:211
2015-07-27 13:06:18 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/home/vitas/www...', 211, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(43): Kohana_Validation->rule('name', 'not_empty', 'trtwyeurhweuhrb')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php:211
2015-07-27 13:06:19 --- EMERGENCY: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /home/vitas/www/sdsystem/application/classes/Controller/Main.php on line 43 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 211 ] in /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php:211
2015-07-27 13:06:19 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/home/vitas/www...', 211, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(43): Kohana_Validation->rule('name', 'not_empty', 'trtwyeurhweuhrb')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php:211
2015-07-27 13:06:22 --- EMERGENCY: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /home/vitas/www/sdsystem/application/classes/Controller/Main.php on line 43 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 211 ] in /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php:211
2015-07-27 13:06:22 --- DEBUG: #0 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/home/vitas/www...', 211, Array)
#1 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(43): Kohana_Validation->rule('name', 'not_empty', 'trtwyeurhweuhrb')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php:211
2015-07-27 13:19:29 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:29 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:30 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:30 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:30 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:30 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:30 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:30 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:37 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:37 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/messages/validation.php [ 3 ] in /home/vitas/www/sdsystem/application/messages/validation.php:3
2015-07-27 13:19:38 --- DEBUG: #0 /home/vitas/www/sdsystem/application/messages/validation.php(3): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/vitas/www...', 3, Array)
#1 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(829): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem/system/classes/Kohana/Core.php(960): Kohana_Core::load('/home/vitas/www...')
#3 /home/vitas/www/sdsystem/system/classes/Kohana/Validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 /home/vitas/www/sdsystem/application/classes/Controller/Main.php(79): Kohana_Validation->errors('models')
#5 /home/vitas/www/sdsystem/system/classes/Kohana/Controller.php(84): Controller_Main->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home/vitas/www/sdsystem/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem/application/messages/validation.php:3