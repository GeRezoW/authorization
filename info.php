<?php
    require_once 'include/connect.php';

    $product_id = $_GET['id'];

    $sql_product = "SELECT * FROM `products` WHERE `id` = ? ";
    $product = $connect->prepare($sql_product);
    $product->execute([$product_id]);
    $row_product = $product->fetch(PDO::FETCH_ASSOC);

    $sql_comments = "SELECT * FROM `comments` WHERE `product_id` = '$product_id'";
    $comments = $connect->query($sql_comments);
    $comments->execute([]);
    $row_comments = $comments->fetchAll();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Title: <?= $row_product['title'] ?></h2>
    <h4>Price: <?= $row_product['price'] ?></h4>
    <p>Description: <?= $row_product['description'] ?></p><br>

    <form action="include/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $row_product['id'] ?>"> <br>
        <textarea name="body"></textarea><br>
        <button type="submit">Add comment</button> 
    </form><br>

    <h3>Comments</h3>
    <ul>
        <?php
            foreach ($row_comments as $row_comment) 
            { 
             ?>
                <li><?= $row_comment[2] ?></li>
             <?php
            }
        ?>
    </ul>
</body>
</html>