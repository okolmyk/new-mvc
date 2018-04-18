<?php
require_once("app/Controller.php");
require_once("front/model/main_model.php");
require_once("access.php");

class Main extends Controller{

  public function __construct()
  {
    $this->model = new Model_Main();
    $this->view = new View();
  }

  public function index(){

    $data = $this->model->get_data_all();

    $this->view->generate('front/views/main_view.php', 'app/template/template.php', $data);

  }

}

?>
