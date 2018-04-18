<?php
require_once("app/Controller.php");
require_once("admin/model/user_model.php");

class User extends Controller{

  function __construct(){
		$this->model = new Model_User();
		$this->view = new View();
	}

  public function index(){

    $this->view->generate('admin/views/login_view.php', 'app/template/template.php');
  }

  public function userIdentytu(){

      if(isset($_SESSION)){

        $data = $this->model->get_user($_SESSION['login'], $_SESSION['pass']);

        if($_SESSION['login'] == $data['login'] && $_SESSION['pass'] == $data['pass']){
          return true;
        }
      }
  }

  public function accessUser($login, $passwor){

    $data = $this->model->get_user($login, $passwor);

    if($data != false){
      session_start();
      $_SESSION['login'] = $data['login'];
      $_SESSION['pass'] = $data['pass'];
    }

  }

  public function login(){

    if(!empty($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])){

        $data = $this->model->get_user($_POST['login'], $_POST['pass']);

        if(!empty($data)){
          session_start();
          $_SESSION['login'] = $data['login'];
          $_SESSION['pass'] = $data['pass'];
          setcookie('login', $data['login'], time() + 3600*24, '/');
          setcookie('pass', $data['pass'], time() + 3600*24, '/');

          $current = $this->currentHostName();
          $this->redirect($current);
        }
        else{
          $data = 'Неверный логин или пароль';
          $this->view->generate('admin/views/login_view.php', 'app/template/template.php', $data);
        }
    }
  }

  public function logout(){

    session_start();
    session_unset();
    session_destroy();
    setcookie('login', '', time() - 3600*24, '/');
    setcookie('pass', '', time() - 3600*24, '/');
    setcookie('PHPSESSID', '', time() - 3600*24, '/');
    $current = $this->currentHostName();
    $this->redirect($current);

  }

}

?>
