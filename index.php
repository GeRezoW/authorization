<?php 
    session_start();

    if ($_SESSION['user']) 
    {
        header('Location: profile.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/index.css">
    <link rel="stylesheet" href="./assets/styles/normalize.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="wrapper">
    <form class="authorization" action="include/signin.php" method="post">
        <div class="authorization__body">
            <div class="authorization__header">
                <div class="authorization__title title">Авторизация</div>
                <div class="authorization__subtitle">Авторизируцйтесь с помощью логина и пароля</div>
            </div>
            <div class="field">
                <label class="field__text" for="login">Логин</label><br>
                <input class="field__input" type="text" name="login"><br>
            </div>
            <div class="field">
                <label class="field__text" for="password">Пароль</label><br>
                <input class="field__input" type="password" name="password"><br>
            </div>
            <button class="authorization__in">
                <a>Войти</a></button><br>
            <button class="authorization__reg" type="submit">
                <a href="reg.php">Зарегистрироваться</a></button><br>
            <?php 
            if ($_SESSION['message']) {
                echo '<p class="authorization__msg"> ' . $_SESSION['message'] . ' </p> ';
            }
                unset($_SESSION['message']);
            ?> 
            <a href="product.php">Продукты</a>
        </div> 
       
    </form>
</div>
</body>
</html>