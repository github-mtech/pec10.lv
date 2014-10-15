<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-10 07:51:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: plugins ~ APPPATH/classes/Controller/Web/Welcome.php [ 20 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php:20
2014-10-10 07:51:40 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 20, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php:20
2014-10-10 07:51:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: plugins ~ APPPATH/classes/Controller/Web/Welcome.php [ 20 ] in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php:20
2014-10-10 07:51:41 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Toms/Des...', 20, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#7 {main} in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php:20
2014-10-10 07:54:19 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Config::load(), called in /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php on line 11 and defined ~ SYSPATH/classes/Kohana/Config.php [ 89 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Config.php:89
2014-10-10 07:54:19 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Config.php(89): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Toms/Des...', 89, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(11): Kohana_Config->load()
#2 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#8 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Config.php:89
2014-10-10 08:29:45 --- EMERGENCY: Database_Exception [ 1054 ]: :error [ :query ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-10 08:29:45 --- DEBUG: #0 /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `alias`,...', false, Array)
#1 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/I18n.php(25): Kohana_Database_Query->execute()
#2 /Users/Toms/Desktop/web-app/kohana.dev/app-env/application/classes/Controller/Web/Welcome.php(12): I18n::init(Array)
#3 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Controller.php(69): Controller_Web_Welcome->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#6 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/kohana.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/kohana.dev/app-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/kohana.dev/kohana/modules/database/classes/Kohana/Database/Query.php:251