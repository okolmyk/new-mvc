<?php
require_once("app/Model.php");

class Model_Main extends Model{

  public function get_data_all(){

    $query = $this->db->prepare("SELECT * FROM banners_mvc WHERE status = 1 ORDER BY position ASC");

    $query->execute();

    $baners = $query->fetchAll();

    return $baners;
  }

}


?>
