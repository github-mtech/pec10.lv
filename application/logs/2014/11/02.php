<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-02 07:20:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/web/tmp/html.php [ 131 ] in /Users/Toms/Desktop/web-app/pec10.dev/dev-env/application/views/web/tmp/html.php:131
2014-11-02 07:20:45 --- DEBUG: #0 /Users/Toms/Desktop/web-app/pec10.dev/dev-env/application/views/web/tmp/html.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Toms/Des...', 131, Array)
#1 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php(61): include('/Users/Toms/Des...')
#2 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Toms/Des...', Array)
#3 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Toms/Desktop/web-app/pec10.dev/dev-env/application/classes/Controller/Web/Welcome.php(54): Kohana_Controller_Template->after()
#5 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Controller.php(87): Controller_Web_Welcome->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#8 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Toms/Desktop/web-app/pec10.dev/dev-env/index.php(134): Kohana_Request->execute()
#11 {main} in /Users/Toms/Desktop/web-app/pec10.dev/dev-env/application/views/web/tmp/html.php:131
2014-11-02 07:24:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view :file could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php:137
2014-11-02 07:24:00 --- DEBUG: #0 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('web/section/add')
#1 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('web/section/add', NULL)
#2 /Users/Toms/Desktop/web-app/pec10.dev/dev-env/application/classes/Controller/Web/Welcome.php(50): Kohana_View::factory('web/section/add')
#3 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Web_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#6 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/pec10.dev/dev-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php:137
2014-11-02 07:24:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view :file could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php:137
2014-11-02 07:24:13 --- DEBUG: #0 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/web/section/ad...')
#1 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('/web/section/ad...', NULL)
#2 /Users/Toms/Desktop/web-app/pec10.dev/dev-env/application/classes/Controller/Web/Welcome.php(50): Kohana_View::factory('/web/section/ad...')
#3 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Controller.php(84): Controller_Web_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Welcome))
#6 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Toms/Desktop/web-app/pec10.dev/dev-env/index.php(134): Kohana_Request->execute()
#9 {main} in /Users/Toms/Desktop/web-app/pec10.dev/kohana/system/classes/Kohana/View.php:137