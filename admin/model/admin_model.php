<?php

require_once("app/Model.php");

class Model_Admin extends Model{

  public function get_data_all(){

    $query = $this->db->prepare("SELECT * FROM banners_mvc ORDER BY position ASC");

    $query->execute();

    $baners = $query->fetchAll();

    return $baners;
  }

  public function create($val = []){

    if(is_uploaded_file($_FILES['pictures']['tmp_name'])){

				$dir = "admin/uploud/".$_FILES['pictures']['name'];

				if(move_uploaded_file($_FILES['pictures']['tmp_name'], $dir)){

            $this->resizeImage($dir, $val['width'], $val['height']);
        }
		}

    $query = $this->db->prepare("INSERT INTO banners_mvc (name, pictures, height, width, url, status, position) VALUES ('".$val['name']."', '".$dir."', '".$val['height']."', '".$val['width']."', '".$val['url_adress']."', '".$val['status']."', '".$val['position']."')");

    $result_ins = $query->execute();

    if($result_ins == true){
      return true;
    }
  }

  public function update_form($id){

    $query = $this->db->prepare("SELECT * FROM banners_mvc WHERE id = '".$id."'");

    $query->execute();

    $result_up_sel = $query->fetch();

    return $result_up_sel;

  }

  public function update($val = []){

    if(is_uploaded_file($_FILES['pictures']['tmp_name'])){

				$dir = "admin/uploud/".$_FILES['pictures']['name'];

				if(move_uploaded_file($_FILES['pictures']['tmp_name'], $dir)){

            $this->resizeImage($dir, $val['width'], $val['height']);
        }
		}

    if(!empty($dir))
    {
        $query = $this->db->prepare("UPDATE banners_mvc SET name = '".$val['name']."', pictures = '".$dir."', height = '".$val['height']."', width = '".$val['width']."',  url = '".$val['url_adress']."', status = '".$val['status']."', position = '".$val['position']."' WHERE id = '".$val['id']."'");
    }
    else{
        $query = $this->db->prepare("UPDATE banners_mvc SET name = '".$val['name']."', height = '".$val['height']."', width = '".$val['width']."', url = '".$val['url_adress']."', status = '".$val['status']."', position = '".$val['position']."' WHERE id = '".$val['id']."'");
    }
        $result_up_end = $query->execute();

    if($result_up_end == true){
        return true;
    }
  }

  public function delete($id){

    $query = $this->db->prepare("DELETE FROM banners_mvc WHERE id = '".$id."'");

    $result_del = $query->execute();

    if($result_del == true){
      return true;
    }

  }

  public function up_down($id, $pos){

    $query_sel = $this->db->prepare("SELECT * FROM banners_mvc WHERE id ='".$id."'");

    $query_sel->execute();

    $baners = $query_sel->fetch();

    if($pos == 'up'){
      $query_sel_2 = $this->db->prepare("SELECT * FROM banners_mvc WHERE position < '".$baners['position']."' ORDER BY position DESC");
    }
    if($pos == 'down'){
      $query_sel_2 = $this->db->prepare("SELECT * FROM banners_mvc WHERE position > '".$baners['position']."' ORDER BY position ASC");
    }

    $query_sel_2->execute();

    $baners_2 = $query_sel_2->fetch();

    $query_up = $this->db->prepare("UPDATE banners_mvc AS one INNER JOIN banners_mvc AS two SET one.position = '".$baners_2['position']."', two.position ='".$baners['position']."' WHERE one.id = '".$baners['id']."' AND two.id = '".$baners_2['id']."'");

    $result_up = $query_up->execute();

    return $result_up;
  }

  public function resizeImage($filename, $max_width, $max_height){

      list($orig_width, $orig_height, $mime) = getimagesize($filename);
      $wert = getimagesize($filename);

      $width = $orig_width;
      $height = $orig_height;


      if ($height > $max_height) {
          $width = ($max_height / $height) * $width;
          $height = $max_height;
      }


      if ($width > $max_width) {
          $height = ($max_width / $width) * $height;
          $width = $max_width;
      }

      $image_p = imagecreatetruecolor($width, $height);


      if ($wert['mime'] == 'image/png') {
          $src = imagecreatefrompng($filename);
      } else if ($wert['mime'] == 'image/jpeg') {
          $src = imagecreatefromjpeg($filename);
      } else if ($wert['mime'] == 'image/gif') {
          $src = imagecreatefromgif($filename);
      } else {
          return false;
      }

      imageAlphaBlending($image_p, false);
      imageSaveAlpha($image_p, true);
      imagecopyresampled($image_p, $src, 0, 0, 0, 0,
                                       $width, $height, $orig_width, $orig_height);

      return imagepng($image_p, $filename);
  }

}




?>
