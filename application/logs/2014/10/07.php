<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-07 03:43:00 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php:12
2014-10-07 03:43:00 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(12): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/Toms/Des...', 12, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(121): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php:12
2014-10-07 03:49:45 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in file:line
2014-10-07 03:49:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 12, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(12): preg_replace('/http://www./', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(121): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 03:53:31 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): No ending delimiter '/' found ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in file:line
2014-10-07 03:53:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 12, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(12): preg_replace('/^(http?:\/\/)', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(121): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 03:53:42 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): No ending delimiter '/' found ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in file:line
2014-10-07 03:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 12, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(12): preg_replace('/^(http?:\/\/)?', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(121): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 03:53:43 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): No ending delimiter '/' found ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in file:line
2014-10-07 03:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 12, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(12): preg_replace('/^(http?:\/\/)?', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(121): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 04:00:45 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php:11
2014-10-07 04:00:45 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(11): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/Toms/Des...', 11, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(127): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php:11
2014-10-07 04:16:59 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Unknown modifier '[' ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in file:line
2014-10-07 04:16:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 12, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(12): preg_replace('[http://][www.]', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(127): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 04:20:53 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH/classes/Controller/Welcome.php [ 16 ] in file:line
2014-10-07 04:20:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 16, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(16): preg_replace('www.', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(127): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 04:20:54 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH/classes/Controller/Welcome.php [ 16 ] in file:line
2014-10-07 04:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 16, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(16): preg_replace('www.', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(127): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 04:20:54 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH/classes/Controller/Welcome.php [ 16 ] in file:line
2014-10-07 04:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 16, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(16): preg_replace('www.', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(127): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 04:20:54 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH/classes/Controller/Welcome.php [ 16 ] in file:line
2014-10-07 04:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 16, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(16): preg_replace('www.', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(127): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 04:20:54 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH/classes/Controller/Welcome.php [ 16 ] in file:line
2014-10-07 04:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 16, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(16): preg_replace('www.', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(127): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 04:20:55 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH/classes/Controller/Welcome.php [ 16 ] in file:line
2014-10-07 04:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Toms/Des...', 16, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(16): preg_replace('www.', '', 'http://www.app....', 1)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(127): Kohana_Request->execute()
#8 {main} in file:line
2014-10-07 05:52:22 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php on line 7 and defined ~ MODPATH/database/classes/Kohana/DB.php [ 42 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/DB.php:42
2014-10-07 05:52:22 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/DB.php(42): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 42, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(7): Kohana_DB::query('select * from u...')
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/DB.php:42
2014-10-07 06:20:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php:10
2014-10-07 06:20:36 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 10, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php:10
2014-10-07 06:20:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:46 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:47 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:47 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:48 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:48 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:20:48 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:22:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Config_File_Database' not found ~ APPPATH/bootstrap.php [ 122 ] in file:line
2014-10-07 06:22:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:22:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Config_File_Database' not found ~ APPPATH/bootstrap.php [ 122 ] in file:line
2014-10-07 06:22:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:22:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Config_File_Database' not found ~ APPPATH/bootstrap.php [ 122 ] in file:line
2014-10-07 06:22:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:22:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Config_File_Database' not found ~ APPPATH/bootstrap.php [ 122 ] in file:line
2014-10-07 06:22:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:22:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Config_File_Database' not found ~ APPPATH/bootstrap.php [ 122 ] in file:line
2014-10-07 06:22:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:26:42 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:26:42 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:27:43 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:27:43 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:27:44 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:27:44 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:27:44 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:27:44 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:27:44 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:27:44 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:29:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:51 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:52 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:53 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:53 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:53 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:29:53 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:30:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:30:39 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:30:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:30:40 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:30:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:30:40 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:30:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:30:55 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:05 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:05 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:05 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:06 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:16 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:18 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:18 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:18 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:18 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:19 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:19 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:19 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:19 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:20 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:20 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:20 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:21 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:21 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:31:21 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:40:53 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:40:53 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:41:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:41:01 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 06:42:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:42:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:43:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:45:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:45:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:46:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:46:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:46:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:46:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:46:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:46:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:46:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:46:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:46:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:47:47 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:47:47 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(133): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 06:48:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::../app-config/() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 06:48:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 06:48:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/bootstrap.php [ 125 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 06:48:59 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 125, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(117): require('/Users/Toms/Des...')
#2 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 06:49:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/bootstrap.php [ 125 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 06:49:00 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 125, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(117): require('/Users/Toms/Des...')
#2 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 06:49:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/bootstrap.php [ 125 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 06:49:00 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 125, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(117): require('/Users/Toms/Des...')
#2 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 06:49:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/bootstrap.php [ 125 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 06:49:00 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 125, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(117): require('/Users/Toms/Des...')
#2 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 06:49:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/bootstrap.php [ 125 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 06:49:01 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 125, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(117): require('/Users/Toms/Des...')
#2 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:125
2014-10-07 07:14:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:14:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:14:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:14:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:14:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:14:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:14:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:14:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:14:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:14:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:14:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:14:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:14:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:14:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:16:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:16:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:16:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:16:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:16:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:16:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/bootstrap.php [ 125 ] in file:line
2014-10-07 07:16:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:42 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:16:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:43 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:16:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:43 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:16:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:43 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:16:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:16:43 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:16:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:17:28 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:17:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:17:29 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:17:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:17:29 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:17:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:17:29 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:17:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:17:29 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:17:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:17:29 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:17:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:17:41 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$appConfig ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:17:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:53 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:54 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:54 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:54 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:54 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:54 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:54 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:55 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:55 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:18:55 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$data ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:18:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:19:26 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Config as array ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:19:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:19:27 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Config as array ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:19:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:19:27 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Config as array ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:19:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:19:27 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Config as array ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:19:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:19:28 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Config as array ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:19:28 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Config as array ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:20:00 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/bootstrap.php [ 127 ] in file:line
2014-10-07 07:20:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:20:09 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:09 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(139): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:10 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:10 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(139): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:11 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:11 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(139): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:11 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:11 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(139): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:12 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:12 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(139): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:12 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:12 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(139): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:12 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:12 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(139): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:12 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:12 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(139): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:13 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:20:13 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(139): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:23:59 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:23:59 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:00 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:00 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:00 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:00 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:00 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:00 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:00 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:00 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:01 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:24:01 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:25:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 07:25:40 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 07:25:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 07:25:54 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 07:26:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 07:26:03 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 65, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database.php:65
2014-10-07 07:27:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: database ~ APPPATH/bootstrap.php [ 128 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:128
2014-10-07 07:27:16 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php(128): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 128, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(118): require('/Users/Toms/Des...')
#2 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:128
2014-10-07 07:27:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: database ~ APPPATH/bootstrap.php [ 128 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:128
2014-10-07 07:27:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php(128): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 128, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(118): require('/Users/Toms/Des...')
#2 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:128
2014-10-07 07:27:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: database ~ APPPATH/bootstrap.php [ 128 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:128
2014-10-07 07:27:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php(128): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 128, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(118): require('/Users/Toms/Des...')
#2 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:128
2014-10-07 07:27:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: database ~ APPPATH/bootstrap.php [ 128 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:128
2014-10-07 07:27:18 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php(128): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 128, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(118): require('/Users/Toms/Des...')
#2 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/bootstrap.php:128
2014-10-07 07:27:25 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:27:25 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:27:38 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:27:38 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-10-07 07:28:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-10-07 07:28:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:28:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-10-07 07:28:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:28:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-10-07 07:28:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:28:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-10-07 07:28:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:28:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-10-07 07:28:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 07:29:47 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (28000/1045): Access denied for user 'pec10'@'localhost' (using password: YES) ~ MODPATH/database/classes/Database/MySQLi.php [ 59 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:29:47 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(157): Database_MySQLi->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:56 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (28000/1045): Access denied for user 'pec10'@'localhost' (using password: YES) ~ MODPATH/database/classes/Database/MySQLi.php [ 59 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:56 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(157): Database_MySQLi->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:57 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (28000/1045): Access denied for user 'pec10'@'localhost' (using password: YES) ~ MODPATH/database/classes/Database/MySQLi.php [ 59 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:57 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(157): Database_MySQLi->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:57 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (28000/1045): Access denied for user 'pec10'@'localhost' (using password: YES) ~ MODPATH/database/classes/Database/MySQLi.php [ 59 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:57 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(157): Database_MySQLi->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:57 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (28000/1045): Access denied for user 'pec10'@'localhost' (using password: YES) ~ MODPATH/database/classes/Database/MySQLi.php [ 59 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:57 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(157): Database_MySQLi->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:58 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (28000/1045): Access denied for user 'pec10'@'localhost' (using password: YES) ~ MODPATH/database/classes/Database/MySQLi.php [ 59 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 07:33:58 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(157): Database_MySQLi->connect()
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Welcome.php(10): Kohana_Database_Query->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php:157
2014-10-07 08:03:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view web/errors/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:03:52 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('web/errors/404')
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('web/errors/404', NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/HTTP/Exception/404.php(14): Kohana_View::factory('web/errors/404')
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view web/errors/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:03 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('web/errors/404')
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('web/errors/404', NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/HTTP/Exception/404.php(14): Kohana_View::factory('web/errors/404')
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view web/errors/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:04 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('web/errors/404')
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('web/errors/404', NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/HTTP/Exception/404.php(14): Kohana_View::factory('web/errors/404')
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view web/errors/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:05 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('web/errors/404')
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('web/errors/404', NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/HTTP/Exception/404.php(14): Kohana_View::factory('web/errors/404')
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view web/errors/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:05 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('web/errors/404')
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('web/errors/404', NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/HTTP/Exception/404.php(14): Kohana_View::factory('web/errors/404')
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view web/errors/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:04:09 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('web/errors/404')
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('web/errors/404', NULL)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/HTTP/Exception/404.php(14): Kohana_View::factory('web/errors/404')
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php:137
2014-10-07 08:43:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2014-10-07 08:43:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 08:44:07 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2014-10-07 08:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 08:44:38 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2014-10-07 08:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 08:45:58 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for I18n::init(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ APPPATH/classes/I18n.php [ 86 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:45:58 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 86, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): I18n::init(Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:13 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for I18n::init(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ APPPATH/classes/I18n.php [ 86 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:13 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 86, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): I18n::init(Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:13 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for I18n::init(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ APPPATH/classes/I18n.php [ 86 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:13 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 86, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): I18n::init(Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:14 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for I18n::init(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ APPPATH/classes/I18n.php [ 86 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:14 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 86, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): I18n::init(Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:14 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for I18n::init(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ APPPATH/classes/I18n.php [ 86 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:14 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 86, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): I18n::init(Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:14 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for I18n::init(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ APPPATH/classes/I18n.php [ 86 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:14 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 86, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): I18n::init(Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:15 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for I18n::init(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ APPPATH/classes/I18n.php [ 86 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:15 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 86, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): I18n::init(Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:15 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for I18n::init(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ APPPATH/classes/I18n.php [ 86 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:15 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 86, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): I18n::init(Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:15 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for I18n::init(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ APPPATH/classes/I18n.php [ 86 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:15 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 86, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): I18n::init(Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:86
2014-10-07 08:46:37 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 118 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:118
2014-10-07 08:46:37 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(118): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 118, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(161): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(146): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:118
2014-10-07 08:48:25 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/I18n.php [ 119 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:119
2014-10-07 08:48:25 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(119): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 119, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(163): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(148): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:119
2014-10-07 08:48:55 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/I18n.php [ 121 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:121
2014-10-07 08:48:55 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(121): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 121, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:121
2014-10-07 08:49:15 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:15 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:16 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:16 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:17 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:17 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:17 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:18 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:18 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:18 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:18 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:18 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:18 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:19 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:19 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:41 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:49:41 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:50:14 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:50:14 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:50:15 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:50:15 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:50:15 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:50:15 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:50:22 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/I18n.php [ 122 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 08:50:22 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(122): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/Toms/Des...', 122, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(165): I18n::search(':error [ :query...', Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __(':error [ :query...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Database/MySQLi.php(176): Kohana_Kohana_Exception->__construct(':error [ :query...', Array, 1054)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `la...', false, Array)
#5 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(150): Kohana_Database_Query->execute()
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(24): I18n::add()
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#10 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#13 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php:122
2014-10-07 09:09:51 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:09:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:10:07 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:10:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:10:11 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:10:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:12:11 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:12:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:12:30 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:12:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:12:30 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:12:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:12:31 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:12:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:12:31 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:12:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:12:34 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:12:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:14:17 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:14:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:14:55 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:14:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:16:23 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:16:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:16:24 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:16:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:16:24 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:16:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:16:24 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:16:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(97): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:16:38 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:16:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(98): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:16:48 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/I18n.php [ 45 ] in file:line
2014-10-07 09:16:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/Toms/Des...', 45, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(45): array_key_exists(Array, Array)
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(98): I18n::search('The requested U...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Kohana/Exception.php(53): __('The requested U...', Array)
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(42): Kohana_Kohana_Exception->__construct('The requested U...', Array, 404, NULL)
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/HTTP/Exception.php(17): Kohana_HTTP_Exception->__construct('The requested U...', Array, NULL)
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#10 {main} in file:line
2014-10-07 09:26:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/web/error/404.php [ 7 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/views/web/error/404.php:7
2014-10-07 09:26:13 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/views/web/error/404.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 7, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(61): include('/Users/Toms/Des...')
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Toms/Des...', Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/HTTP/Exception/404.php(21): Kohana_View->render()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(114): HTTP_Exception_404->get_response()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/views/web/error/404.php:7