<?php
require_once("app/View.php");

class Route{

  public function __construct()
	{
		$this->view = new View();
	}

  public function start(){

      $url = explode('/', $_SERVER['REQUEST_URI']);

      $contoller_name = "Main";

      $action_name = "index";

      if(!empty($url[1])){
        $contoller_name = $url[1];
      }

      if(!empty($url[2])){
        $action_name = $url[2];
      }

      if(!empty($url[3])){
        $value_name = $url[3];
      }

      $controller_file = $contoller_name.'.php';

      if(file_exists("front/controllers/".$controller_file)){
          $result = require_once "front/controllers/".$controller_file;
      }
      else if(file_exists("admin/controllers/".$controller_file)){
          $result = require_once "admin/controllers/".$controller_file;
      }
      else{
          $this->ErrorPage404();
      }

      if(class_exists($contoller_name)){

          $controller = new $contoller_name();

          $action = $action_name;

          if(method_exists($controller, $action)){

            if(!empty($value_name)){
              $controller->$action($value_name);
            }
            else{
              $controller->$action();
            }
          }
          else{
              $this->ErrorPage404();
      		}
     }
     else{
       $this->ErrorPage404();
     }

  }

  public function ErrorPage404(){
      $this->view->generate('admin/views/404_view.php', 'app/template/template.php');
  }

}


?>
