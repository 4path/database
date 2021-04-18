<?php
	session_start();
	if($_SESSION['user']){
		header('Location: main.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorization</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
</head>
<body>
<!--регистрация-->
<form action="include/sign.php" method="POST" enctype="multipart/form-data">
	<label>Имя</label>
	<input type="text" name="name" placeholder="Введите свое имя">
	<label>Логин</label>
	<input type="text" name="login"  placeholder="Введите свой логин">
	<label>Изображение профиля</label>
	<input type="file" name="photo">
	<label>Почта</label>
	<input type="email" name="email" placeholder="Введите свою почту">
	<label>Пароль</label>
	<input type="password" name="password" placeholder="Введите пароль">
	<label>Подтверждение пароля</label>
	<input type="password" name="password_conf" placeholder="Подтвердите свой пароль">
	<button type="submit">Создать</button>
	<p>
		У вас уже есть аккаунт? - <a href="index.php">Войдите</a>!
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