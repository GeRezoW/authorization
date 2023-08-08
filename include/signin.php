<?php 

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = $connect->prepare ('SELECT * 
                                      FROM users 
                                      WHERE login = :login AND  password = :password ');
    $check_user->bindParam(':login', $login);
    $check_user->bindParam(':password', $password);
    $check_user->execute();
    
    //$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE  `login` = '$login' AND  `password` = '$password' ");
    
    if ($check_user-> rowCount() > 0) 
    {
        
        $user = $check_user-> fetch(PDO::FETCH_ASSOC);

        $_SESSION['user'] = 
        [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];        

        header('Location: ../profile.php');
    }

    else 
    {
        $_SESSION['message'] = 'Не верный логин или пароль';
        // header('Location: ../index.php');
    }

?>    