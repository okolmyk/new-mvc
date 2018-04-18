<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Создать</title>
</head>
<body>
<?php
require_once("admin/controllers/Admin.php");

	$admin = new Admin();
	$current = $admin->currentHostName();
?>

	<h1>Это Admin Create view </h1>

  <form id="create_banner" name="create_banner" method="post" action="<?= $current ?>/Admin/create" enctype="multipart/form-data">

		<br>Название:</br>
    <input id="inp_create_form_name" type="text" name="name">

		</br>

    <br>Картинка:</br>
		<input type="file" name="pictures" id="pictures"></input></br>

		</br>

		<br>Высота картинки:</br>
    <input id="inp_create_form_height" type="text" name="height">

		</br>

		<br>Ширина картинки:</br>
    <input id="inp_create_form_width" type="text" name="width">

		</br>

    <br>URL-адрес:</br>
    <input id="inp_create_form_url_adress" type="text" name="url_adress">

		</br>

    <br>Статус:</br>
    <input id="inp_create_form_status" type="text" name="status">

		</br>

    <br>Позиция в списке:</br>
    <input id="inp_create_form_position" type="text" name="position">

		</br>

		</br>
		<input class="prob" id="inp_create_banner" type="submit" value="Создать">
  </form>

</body>
</html>
