<?php

require_once("app/View.php");

class Controller {

	public $model;
	public $view;

	public function __construct()
	{
		$this->view = new View();
	}

	public function currentHostName(){

      $name_current_host = 'http://'.$_SERVER['HTTP_HOST'];

      return $name_current_host;
  }

	public function redirect($url){
			echo '<script type="text/javascript">
						// Javascript URL redirection
							window.location.replace("'.$url.'");
							</script>';
	}

}





?>
