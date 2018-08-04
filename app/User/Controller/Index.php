<?php 

namespace User\Controller;

class Index extends \FrontController {

	public function actionIndex() {
		
		echo $this->request->param('id');
		$model = new \Model\Test('test');
		//Подтягиваем вьюху Home\Views\Index
		echo $this->content = \View::factory('Index');
		
	}
} 
