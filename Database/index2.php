<?php
	session_start();
	if($_SESSION['user']){
		header('Location: main.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
</head>
<body>
<!--регистрация-->
<form action="include/sign.php" method="post">
	<label>Логин</label>
	<input type="text" name="login" placeholder="Введите свой логин">
	<label>Пароль</label>
	<input type="password" name="password" placeholder="Введите пароль">
	<button type="submit">Войти</button>
	<p>
		У вас нет аккаунта? - <a href="/registr.php">Зарегистрируйтесь</a>!
	</p>
	<?php
		if ($_SESSION['message']){
			echo '<p class="mess"> ' . $_SESSION['message'] . ' </p>';
		}
		unset($_SESSION['message']);
	?>
</form>
</body>
</html>