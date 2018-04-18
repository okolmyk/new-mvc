<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Меню банеров</title>
</head>
<body>

<h1>Меню банеров</h1>

<p>
<div id="but_create_banner">
		<a id="but_create_banner_a" href="<?= $current ?>/Admin/create_form">Создать</a>
</div>
<p>
<p>

<?php
require_once("admin/controllers/Admin.php");

$admin = new Admin();
$current = $admin->currentHostName();
?>

<div id="wraper">
	<div id="table_wrap">

		<table id="table">
				<thead>
						<tr>
								<th>№ п/п</th>
								<th>ID</th>
								<th>Название</th>
								<th>Картинка</th>
								<th>URL-адрес</th>
								<th>Статус</th>
								<th>Позиция в списке</th>
								<th>Опции</th>
						</tr>
				</thead>
				<tbody>
							<?php
								foreach($data as $key =>  $value){
							?>
							<tr>
								<td><?= $key + 1 ?></td>
								<td><?= $value['id'] ?></td>
								<td><?= $value['name'] ?></td>
								<td><img id="img_pictures_table" src="<?= $value['pictures'] ?>"></td>
								<td><?= $value['url'] ?></td>
								<td><?= $value['status'] ?></td>
								<td><?= $value['position'] ?></td>
								<td>
									<a href="<?= $current ?>/Admin/up/<?= $value['id'] ?>"><img src="/style/style-img/arrow_up.png" width='20px' height='20px' title="Вверх в списке"><!--Поднять в списке--></a></br>
									<a href="<?= $current ?>/Admin/down/<?= $value['id'] ?>"><img src="/style/style-img/arrow_down.png" width='20px' height='20px' title="Вниз в списке"><!--Опустить в списке--></a>
									<a href="<?= $current ?>/Admin/update_form/<?= $value['id'] ?>"><img src="/style/style-img/pen.png" width='20px' height='20px' title="Редактировать"><!--Редактировать--></a>
									<a href="<?= $current ?>/Admin/delete/<?= $value['id'] ?>"><img src="/style/style-img/basket.png" width='20px' height='20px' title="Удалить"><!--Удалить--></a></br>
								</td>
							</tr>
							<?php
								}
							?>
					</tbody>

		</table>

	</div>

</div>

</body>
</html>
