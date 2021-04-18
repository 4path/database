<?php

    session_start();
    require_once 'inc.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];

    if ($password === $password_conf) {

        $path = 'photos/' . time() . $_FILES['photo']['name'];
        if (!move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../registr.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `photo`) VALUES (NULL, '$name', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../registr.php');
    }

?>
