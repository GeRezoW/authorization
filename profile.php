<?php
session_start();

if (!$_SESSION['user']) 
    {
        header('Location: index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Успех</title>
</head>
<body>
    <form class="authorization">
        <div class="authorization__body">
            <img src="<?= $_SESSION['user']['avatar'] ?> " width="100" alt="">
            <h1> <?= $_SESSION['user']['full_name'] ?> </h1>
            <h2> <?= $_SESSION['user']['email'] ?> </h2>
            <button>
                <a href="include/logout.php">Выход</a>
            </button>
        </div>
    </form>
</body>
</html>