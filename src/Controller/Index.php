<?php 

namespace Controller;

class Index extends \FrontController {

	public function actionIndex() {
		
		$model = new \Model\Test('test');
		
		echo $m->ggg();
		
		$this->content = \View::factory('Index');
	}
	
} 
