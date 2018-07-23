<?php 

abstract class Controller {

	public $request;

	public function __construct(Request $request){
		$this->request = $request;
		return $this;
	}
	
	abstract function before();
	abstract function after();

}
