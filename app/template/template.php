<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<!--<script type="text/javascript" src="script/jquery-3.3.1.min.js"></script>-->
	<script type="text/javascript" src="/script/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="/script/jquery.validate.js"></script>
	<script type="text/javascript" src="/script/main.js"></script>
	<link href='/style/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
	require_once("admin/controllers/User.php");
	require_once("app/Route.php");
	?>
	<div id="heder">

		<?php
		$user = new User();
		$identytu = $user->userIdentytu();
		$current = $user->currentHostName();

			if($identytu == true){
		?>
			<div id="my_navbar_bloc">
					<ul id="my_navbar">
					  <li><a id="nav" href=<?= $current ?>>Главная</a></li>
					  <li><a id="nav" href=<?= $current ?>/Contacts>Контакты</a></li>
						<li><a id="nav" href=<?= $current ?>/Admin>Админ</a></li>
						<li><a id="nav" href=<?= $current ?>/User/logout>Выйти (<?= $_SESSION['login'] ?>)</a></li>
					</ul>
			</div>

		<?php
			}
			else{
		?>
		<div id="my_navbar_bloc">
					<ul id="my_navbar">
					  <li><a id="nav" href=<?= $current ?>>Главная</a></li>
					  <li><a id="nav" href=<?= $current ?>/Contacts>Контакты</a></li>
						<li><a id="nav" href=<?= $current ?>/User>Войти</a></li>
					</ul>
		</div>
		<?php
			}
		?>

	</div>

<div id="content">

	<?php

	require_once($content_view);

	?>

</div>

</body>
</html>
