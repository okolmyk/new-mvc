<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Логинизация</title>
</head>
<body>

<?php
require_once('admin/controllers/User.php');

	$user = new User();
	$current = $user->currentHostName();
?>

	<h1>Логинизация</h1>

	<?php
			if(!empty($data)){
				echo '<span id="incorrect_log_or_pass">'.$data.'</span>';
			}
	?>

  <form id="loginization" name="loginization" method="post" action="<?= $current ?>/User/login">
	    <br>Логин:</br>
	    <input type="text" id="inp_log" name="login">

			</br>

			<br>Пароль:</br>
	    <input type="text" id="inp_pass" name="pass">

	    <br>
			</br>
	    <input id="inp_create_banner" type="submit" value="Войти">
	  </form>

</body>
</html>
