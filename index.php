<?php

//Конастанта режима работы сайта
//Пока два состояния сайта это PROD or DEV
// Если SITE_MODE не равно DEV то mark_debug_time, show_debug_time не обрабатываются
define('SITE_MODE', 'PROD'); 

//Прописываю основные дирректории в которых будет совершаться поиск классов
define('DOCROOT', realpath(__DIR__).DIRECTORY_SEPARATOR);
define('MAINPATH', DOCROOT.'main'.DIRECTORY_SEPARATOR);
define('MODPATH', DOCROOT.'modules'.DIRECTORY_SEPARATOR);
define('APPPATH', DOCROOT.'app'.DIRECTORY_SEPARATOR);

//Подключаем класс автолоадера
require_once (DOCROOT.'system/autoload.php');

//Устанавливаем маркер старта
mark_debug_time('start: load autoload class');

//Загружаем конфиг файл с роутами \main\Config\routes.php
$routes = \Config::load('routes');

//базовая директрия рабочего урла.
//пример example.com/ - $base_url = '/';
//пример example.com/cus/ - $base_url = 'cus/';
\Request::$base_url = '/';

//подтягиваем класс обработки запроса
$request = new \Request;

//и передаем ему конфиг роутов
$request->addRoutes($routes);

//выполняем запрос
$response = $request->execute();

//и отображаем результат выполнения запроса
echo $response->body();

// Ставим финишную метку, и выводим лист меток
// Если SITE_MODE не равно DEV то метки не будут отображены
mark_debug_time('finish: echo request body');

/* */