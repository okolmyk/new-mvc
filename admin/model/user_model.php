<?php

require_once("app/Model.php");

class Model_User extends Model{

  public function get_user($login, $pass){

    $query = $this->db->prepare("SELECT * FROM user_mvc WHERE login='$login' and pass='$pass'");

    $query->execute();

    $user = $query->fetch();

    return $user;

  }
}


?>
