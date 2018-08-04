<?php 

namespace Blog\Controller;

class Index extends \FrontController {

	public function actionIndex() {
		$this->content = 'This blog page';
	}
} 
