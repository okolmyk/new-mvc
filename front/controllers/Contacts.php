<?php
require_once("access.php");
require_once("app/Controller.php");

class Contacts extends Controller{

  function index(){

      //echo "Это метод Индекс класса Contacts";

      $this->view->generate('front/views/contacts_view.php', 'app/template/template.php');

  }

}



?>
