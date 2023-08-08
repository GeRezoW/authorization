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
    <title>Регистрация</title>
</head>
<body>
    <div class="wrapper">
    <form class="authorization" action="include/signup.php" method="post" enctype="multipart/form-data">
        <div class="authorization__body">
            <div class="authorization__header">
                <div class="authorization__title title">Регистрация</div>
            </div>
            <div class="field">
                <label class="field__text" for="full_name">ФИО</label><br>
                <input class="field__input" type="text" name="full_name"><br>
            </div>
            <div class="field">
                <label class="field__text" for="login">Логин</label><br>
                <input class="field__input" type="text" name="login"><br>
            </div>
            <div class="field">
                <label class="field__text" for="email">Email</label><br>
                <input class="field__input" type="email" name="email"><br>
            </div>
            <div class="field">
                <label class="field__text" for="avatar">Аватар</label><br>
                <input class="field__input" type="file" name="avatar"><br>
            </div>
            <div class="field">
                <label class="field__text" for="password">Пароль</label><br>
                <input class="field__input" type="password" name="password"><br>
            </div>
            <div class="field">
                <label class="field__text" for="password_confirm">Подтверждение пароля</label><br>
                <input class="field__input" type="password" name="password_confirm"><br>
            </div>
            <button class="authorization__reg" type="submit">
                <a >Зарегистрироваться</a>
            </button> <br>
            <button class="authorization__reg">
                <a href="index.php">Назад</a>
            </button>

            <?php 
            if ($_SESSION['message']) {
                echo '<p class="authorization__msg"> ' . $_SESSION['message'] . ' </p> ';
            }
                unset($_SESSION['message']);
            ?>

            
        </div>
    </form>
    </div>
</body>
</html>