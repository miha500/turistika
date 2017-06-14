<?php
    include_once 'database.php';
        $id = $_GET['id'];
    $query = "UPDATE agencies SET admin=2 WHERE id = $id";
    mysqli_query($link, $query);
    header("Location: agencies_validation.php");
    
    ?>