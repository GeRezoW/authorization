<?php
    require_once 'connect.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (id, title, price, description) VALUES (NULL, :title, :price, :description)";
    $create = $connect->prepare($sql); 
    $create->execute([
        'title' => $title,
        'price' => $price,
        'description' => $description
    ]);


    header('Location:../product.php');
?>