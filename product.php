<?php

    require_once 'include/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/normalize.css">
    <link rel="stylesheet" href="./assets/styles/table.css">
    <title>Продукты</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>View</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>     

        <?php
            $products = $connect->query("SELECT * FROM products ")->fetchAll();
            foreach($products as $product) 
            {
                ?>
                <tr>
                    <td><?= $product[0]?></td>
                    <td><?= $product[1]?></td>
                    <td><?= $product[3]?></td>
                    <td><?= $product[2]?>$</td>
                    <td><a href="info.php?id=<?= $product[0]?>">View</a></td>
                    <td><a href="update_product.php?id=<?= $product[0]?>">Update</a></td>
                    <td><a href="include/delete.php?id=<?= $product[0]?>">Delete</a></td>
                </tr>
                <?php

            }
        ?>
    </table>
    <h3>ADD NEW PRODUCT</h3>
    <form action="include/create.php" method="post">
        <p>Title</p>
        <input type="text" name="title">
        <p>Description</p>
        <textarea name="description"></textarea>
        <p>Price</p>
        <input type="number" name="price"> <br><br> 
        <button type="submit">Add new product</button>
    </form>
</body>
</html>