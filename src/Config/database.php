<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(

	'use'=>'default',

	'default' => array
	(
		'type'		 => 'mysql',
		'hostname'   => 'localhost',
		'database'   => 'database',
		'username'   => 'user_name',
		'password'   => 'pass',
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => TRUE,
		'profiling'    => FALSE,
	),
);