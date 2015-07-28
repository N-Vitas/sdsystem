<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-28 02:08:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: data ~ APPPATH/classes/Controller/Auth.php [ 46 ] in /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php:46
2015-07-28 02:08:06 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(46): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 46, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#7 {main} in /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php:46
2015-07-28 02:08:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Validation::chek() ~ APPPATH/classes/Controller/Auth.php [ 50 ] in file:line
2015-07-28 02:08:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:12:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password_old ~ APPPATH/views/chanepass.php [ 6 ] in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:12:35 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/views/chanepass.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 6, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem.vitas/application/views/my_template.php(37): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:13:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password_old ~ APPPATH/views/chanepass.php [ 6 ] in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:13:26 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/views/chanepass.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 6, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem.vitas/application/views/my_template.php(37): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:13:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password_old ~ APPPATH/views/chanepass.php [ 6 ] in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:13:31 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/views/chanepass.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 6, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem.vitas/application/views/my_template.php(37): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:16:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password_old ~ APPPATH/views/chanepass.php [ 6 ] in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:16:10 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/views/chanepass.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 6, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem.vitas/application/views/my_template.php(37): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:17:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password_old ~ APPPATH/views/chanepass.php [ 6 ] in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:17:02 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/views/chanepass.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 6, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem.vitas/application/views/my_template.php(37): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:17:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password_old ~ APPPATH/views/chanepass.php [ 6 ] in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:17:03 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/views/chanepass.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 6, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem.vitas/application/views/my_template.php(37): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:17:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password_old ~ APPPATH/views/chanepass.php [ 6 ] in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:17:04 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/views/chanepass.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 6, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem.vitas/application/views/my_template.php(37): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:17:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password_old ~ APPPATH/views/chanepass.php [ 6 ] in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:17:10 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/views/chanepass.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 6, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/vitas/www/sdsystem.vitas/application/views/my_template.php(37): Kohana_View->__toString()
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(62): include('/home/vitas/www...')
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vitas/www...', Array)
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#14 {main} in /home/vitas/www/sdsystem.vitas/application/views/chanepass.php:6
2015-07-28 02:19:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Auth.php [ 59 ] in /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php:59
2015-07-28 02:19:19 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 59, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#7 {main} in /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php:59
2015-07-28 02:33:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Auth.php [ 51 ] in file:line
2015-07-28 02:33:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:33:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Controller/Auth.php [ 51 ] in file:line
2015-07-28 02:33:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:34:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Controller/Auth.php [ 51 ] in file:line
2015-07-28 02:34:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:35:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Controller/Auth.php [ 51 ] in file:line
2015-07-28 02:35:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:35:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Controller/Auth.php [ 50 ] in file:line
2015-07-28 02:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:36:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:102
2015-07-28 02:36:58 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/home/vitas/www...', 102, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Valid.php(548): Kohana_Validation->offsetGet('password')
#2 [internal function]: Kohana_Valid::matches(Object(Validation), 'password', 'password_confir...')
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(52): Kohana_Validation->check()
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#11 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:102
2015-07-28 02:42:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Validation::$password_new ~ APPPATH/classes/Controller/Auth.php [ 54 ] in /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php:54
2015-07-28 02:42:39 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/vitas/www...', 54, Array)
#1 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#7 {main} in /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php:54
2015-07-28 02:43:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The password property does not exist in the Model_Item class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:702
2015-07-28 02:43:17 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', '11cc346175eeb74...')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(54): Kohana_ORM->__set('password', '11cc346175eeb74...')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/modules/orm/classes/Kohana/ORM.php:702
2015-07-28 02:45:02 --- EMERGENCY: ReflectionException [ 0 ]: Function not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:45:02 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(53): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:46:18 --- EMERGENCY: ReflectionException [ 0 ]: Function not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:46:18 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(56): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:49:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'went' (T_STRING) ~ APPPATH/classes/Controller/Auth.php [ 42 ] in file:line
2015-07-28 02:49:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:50:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'went' (T_STRING) ~ APPPATH/classes/Controller/Auth.php [ 42 ] in file:line
2015-07-28 02:50:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:50:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'went' (T_STRING) ~ APPPATH/classes/Controller/Auth.php [ 42 ] in file:line
2015-07-28 02:50:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:50:42 --- EMERGENCY: ReflectionException [ 0 ]: Function not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:50:42 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(59): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:51:43 --- EMERGENCY: ReflectionException [ 0 ]: Function not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:51:43 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:52:13 --- EMERGENCY: ReflectionException [ 0 ]: Function not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:52:13 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:52:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'went' (T_STRING) ~ APPPATH/classes/Controller/Auth.php [ 42 ] in file:line
2015-07-28 02:52:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:52:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'went' (T_STRING) ~ APPPATH/classes/Controller/Auth.php [ 42 ] in file:line
2015-07-28 02:52:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:53:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'wrong' (T_STRING) ~ APPPATH/classes/Controller/Auth.php [ 42 ] in file:line
2015-07-28 02:53:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 02:53:07 --- EMERGENCY: ReflectionException [ 0 ]: Function not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:53:07 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:53:49 --- EMERGENCY: ReflectionException [ 0 ]: Function not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:53:49 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:53:50 --- EMERGENCY: ReflectionException [ 0 ]: Function not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:53:50 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:53:52 --- EMERGENCY: ReflectionException [ 0 ]: Function not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:53:52 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:55:05 --- EMERGENCY: ReflectionException [ 0 ]: Class self does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:55:05 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('self', 'not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:55:23 --- EMERGENCY: ReflectionException [ 0 ]: Class self does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:55:23 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('self', 'not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:55:25 --- EMERGENCY: ReflectionException [ 0 ]: Class self does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:55:25 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('self', 'not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:55:26 --- EMERGENCY: ReflectionException [ 0 ]: Class self does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:55:26 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('self', 'not_password')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:56:33 --- EMERGENCY: ReflectionException [ 0 ]: Class self does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:56:33 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('self', 'not_password()')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:56:34 --- EMERGENCY: ReflectionException [ 0 ]: Class self does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:56:34 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('self', 'not_password()')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:407
2015-07-28 02:57:38 --- EMERGENCY: ReflectionException [ 0 ]: Function $this->not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:57:38 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('$this->not_pass...')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:57:40 --- EMERGENCY: ReflectionException [ 0 ]: Function $this->not_password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 02:57:40 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('$this->not_pass...')
#1 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#8 {main} in /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php:396
2015-07-28 03:00:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'б' (T_STRING), expecting ']' ~ APPPATH/messages/chanepass.php [ 5 ] in file:line
2015-07-28 03:00:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 03:14:49 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Model/myuser.php [ 21 ] in file:line
2015-07-28 03:14:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 03:15:01 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Model/myuser.php [ 21 ] in file:line
2015-07-28 03:15:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 03:15:02 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Model/myuser.php [ 21 ] in file:line
2015-07-28 03:15:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 03:15:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/classes/Model/myuser.php [ 21 ] in /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php:21
2015-07-28 03:15:08 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 21, Array)
#1 [internal function]: Model_Myuser::not_password('dfsdf')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#10 {main} in /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php:21
2015-07-28 03:15:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/classes/Model/myuser.php [ 21 ] in /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php:21
2015-07-28 03:15:09 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vitas/www...', 21, Array)
#1 [internal function]: Model_Myuser::not_password('dfsdf')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#10 {main} in /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php:21
2015-07-28 03:24:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Model/myuser.php [ 22 ] in file:line
2015-07-28 03:24:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 03:24:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Model/myuser.php [ 22 ] in file:line
2015-07-28 03:24:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 03:25:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$password ~ APPPATH/classes/Model/myuser.php [ 22 ] in /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php:22
2015-07-28 03:25:53 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/vitas/www...', 22, Array)
#1 [internal function]: Model_Myuser::not_password('gfhjkm123')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#10 {main} in /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php:22
2015-07-28 03:25:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$password ~ APPPATH/classes/Model/myuser.php [ 22 ] in /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php:22
2015-07-28 03:25:54 --- DEBUG: #0 /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/vitas/www...', 22, Array)
#1 [internal function]: Model_Myuser::not_password('gfhjkm123')
#2 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/vitas/www/sdsystem.vitas/application/classes/Controller/Auth.php(60): Kohana_Validation->check()
#4 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hashpass()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vitas/www/sdsystem.vitas/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vitas/www/sdsystem.vitas/index.php(133): Kohana_Request->execute()
#10 {main} in /home/vitas/www/sdsystem.vitas/application/classes/Model/myuser.php:22
2015-07-28 03:29:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Model/myuser.php [ 24 ] in file:line
2015-07-28 03:29:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 03:29:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Model/myuser.php [ 24 ] in file:line
2015-07-28 03:29:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line