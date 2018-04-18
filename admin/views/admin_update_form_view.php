<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактировать</title>
</head>
<body>
<?php
require_once("admin/controllers/Admin.php");

$admin = new Admin();
$current = $admin->currentHostName();

?>

	<h1>Это Admin Update view </h1>

  <form id="update_banner" name="update_banner" method="post" action="<?= $current ?>/Admin/update" enctype="multipart/form-data">
		<!--<br>id: -->
    <input id="inp_create_form" type="hidden" id="id" name="id" value="<?= $data['id'] ?>">

		</br>

		<br>Название:</br>
    <input id="inp_update_form_name" type="text" name="name" value="<?= $data['name'] ?>">

		</br>

		<br>Картинка:</br>
		<input type="file" name="pictures" id="pictures"></input></br>

		</br>

		<br>Высота картинки:</br>
    <input id="inp_update_form_height" type="text" name="height" value="<?= $data['height'] ?>">

		</br>

		<br>Ширина картинки:</br>
    <input id="inp_update_form_width" type="text" name="width" value="<?= $data['width'] ?>">

		</br>

    <br>URL-адрес:</br>
    <input id="inp_update_form_url_adress" type="text" name="url_adress" value="<?= $data['url'] ?>">

		</br>

    <br>Статус:</br>
    <input id="inp_update_form_url_status" type="text" name="status" value="<?= $data['status'] ?>">

		</br>

    <br>Позиция в списке:</br>
    <input id="inp_update_form_url_position" type="text" name="position" value="<?= $data['position'] ?>">

		</br>

		</br>
		<input id="inp_update_banner" type="submit" value="Отправить">
  </form>

</body>
</html>
