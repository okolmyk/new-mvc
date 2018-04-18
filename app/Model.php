<?php

class Model
{
    public $db;

    function __construct()
  	{

      $opt = array(
              PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              PDO::ATTR_EMULATE_PREPARES   => false,
          );

      $dbc = new PDO('mysql:host=localhost; dbname=new-mvc; charset=utf8', 'root', '123456', $opt);

      $this->db = $dbc;

    }
}







?>
