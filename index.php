<?php

if (version_compare(phpversion(), '5.5.0', '<') == true) { die ('>PHP5.5 Only'); }

define('SITE_MODE', 'PROD');
define('DEBUG_MODE', false);

//Состояние системы, может быть два: DEV и PROD
define('SITE_MODE', 'DEV');

define('EXT', '.php');
define('DS', DIRECTORY_SEPARATOR);

define('DOCROOT', realpath(__DIR__) . DS);

require_once (DOCROOT.'system/Bootstrap.php');

\Bootstrap::addClassesPath('MAIN_DIR', 'src/');
\Bootstrap::addClassesPath('APP_DIR', 'app/');
\Bootstrap::addClassesPath('LIB_DIR', 'lib/');

//Инициализируем класс обработки запроса
$request = new \Request();

\Request::$base_url = '/';
			
//Загружаем конфиг файл с роутами \main\Config\routes.php
$routes = \Config::load('routes');

//базовая директрия рабочего урла.
//пример example.com/ - $base_url = '/';
//пример example.com/cus/ - $base_url = 'cus/';
\Request::$base_url = '/';

//и передаем ему конфиг роутов
$request->addRoutes($routes);

//выполняем запрос
$response = $request->execute();

//и отображаем результат выполнения запроса
echo $response->body();

/* */