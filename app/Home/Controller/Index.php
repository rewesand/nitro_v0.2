<?php 

namespace Home\Controller;

class Index extends \Base\Controller {

	public function __construct($request) {
		
		parent::__construct($request);
		
    }
    
	public function actionIndex() {
		
		//Подтягиваем вьюху Home\Views\Index
		$this->content = \View::factory('Index');		
		
	}
} 
