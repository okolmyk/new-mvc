<?php
require_once("app/Controller.php");
require_once("app/Route.php");
require_once("admin/controllers/User.php");
require_once("admin/model/admin_model.php");
require_once("access.php");

class Admin extends Controller{

  public function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}

  public function index(){

      $user = new User();
      $dentytu = $user->userIdentytu();

      if($dentytu == true){

        $data = $this->model->get_data_all();

        $this->view->generate('admin/views/admin_index_view.php', 'app/template/template.php', $data);

      }
      else{
        $this->view->generate('admin/views/403_view.php', 'app/template/template.php');
      }
  }

  public function create_form(){

    $this->view->generate('admin/views/admin_create_form_view.php', 'app/template/template.php');
  }

  public function create(){

    $data = $this->model->create($_POST);
    if($data == true){
      $current = $this->currentHostName();
      $this->redirect($current."/Admin");
    }
  }

  public function update_form($id){

    $data = $this->model->update_form($id);

    $this->view->generate('admin/views/admin_update_form_view.php', 'app/template/template.php', $data);

  }

  public function update(){

    $data = $this->model->update($_POST);

    if($data == true){
      $current = $this->currentHostName();
      $this->redirect($current."/Admin");
    }
  }

  public function up($id){

    $data = $this->model->up_down($id, 'up');

    if($data == true){
      $current = $this->currentHostName();
      $this->redirect($current."/Admin");
    }
  }

  public function down($id){

    $data = $this->model->up_down($id, 'down');

    if($data == true){
      $current = $this->currentHostName();
      $this->redirect($current."/Admin");
    }
  }

  public function delete($id){

    $data = $this->model->delete($id);

    if($data == true){
      $current = $this->currentHostName();
      $this->redirect($current."/Admin");
    }
  }
}

?>
