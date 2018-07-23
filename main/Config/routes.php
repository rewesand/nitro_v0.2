<?php

return array
(

	'test' => array(
		'uri' => 'hello(/<action>(/<id>))',
		'default' => array('app'=>'Home', 'controller' => 'Index', 'action'=>'Hello')
	),
	
	'index' => array(
		'uri' => '(<controller>(/<action>(/<id>)))',
		'default' => array('app'=>'Home', 'controller' => 'Index', 'action'=>'Index')
	),
	
	

);