<?php
    require_once 'connect.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE products SET 
    title = :title, price = :price, description = :description 
    WHERE products.id = :id";
    $update = $connect->prepare($sql);
    $update->execute([
        'title' => $title,
        'price' => $price,
        'description' => $description,
        'id' => $id
    ]);

    header('Location:../product.php');
?>