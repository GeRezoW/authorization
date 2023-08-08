<?php
    require_once 'connect.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE products.id = ?";

    $delete = $connect->prepare($sql);
    $delete->execute([$id]);

    header('Location:../product.php');   
?>