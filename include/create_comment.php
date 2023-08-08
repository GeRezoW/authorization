<?php

    require_once 'connect.php';

    $id = $_POST['id'];
    $body = $_POST['body'];

    $create = $connect->query("INSERT INTO `comments` (`id`, `product_id`, `body`) VALUES (NULL, '$id', '$body')"); 

    header('Location:../info.php?id=' . $id);
?>