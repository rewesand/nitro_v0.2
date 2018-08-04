<?php

return array
(

	'user' => array(
		'uri' => 'user(/<id>(/<action>))',
		'default' => array('app'=>'User', 'controller' => 'Index', 'action'=>'Index')
	),
	
	'blog' => array(
		'uri' => 'blog(/<action>(/<id>))',
		'default' => array('app'=>'Blog', 'controller' => 'Index', 'action'=>'Index')
	),
	
	'my' => array(
		'uri' => 'my(/<action>(/<id>))',
		'default' => array('app'=>'My', 'controller' => 'Index', 'action'=>'Index')
	),

	'index' => array(
		'uri' => '(<controller>(/<action>(/<id>)))',
		'default' => array('controller' => 'Index', 'action'=>'Index')
	),
);