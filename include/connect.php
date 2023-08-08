<?php 
     try {
        $connect = new PDO('mysql:dbname=auth;host=localhost', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
?>