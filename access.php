<?php
require_once("admin/controllers/User.php");

if(isset($_COOKIE['login']) && isset($_COOKIE['pass'])){

  $access = new User();

  $access->accessUser($_COOKIE['login'], $_COOKIE['pass']);

}


?>
