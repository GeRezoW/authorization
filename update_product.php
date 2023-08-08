<?php
    require_once 'include/connect.php';

    $product_id = $_GET['id'];

    $sql = "SELECT * FROM `products` WHERE `id` = ? ";
    $product = $connect->prepare($sql);
    $product->execute([$product_id]);
    $row = $product->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
</head>
<body>
    <h3>UPDATE PRODUCT</h3>
    <form action="include/update.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <p>Title</p>
        <input type="text" name="title" value="<?= $row['title'] ?>" >
        <p>Description</p>
        <textarea name="description"><?= $row['description'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $row['price'] ?>"> <br><br> 
        <button type="submit">Update</button>
    </form>
</body>
</html>