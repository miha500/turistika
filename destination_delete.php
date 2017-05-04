<?php
    include_once 'session.php';
    include_once 'database.php';
    
    $id = (int) $_GET['id'];
    
    $query = "DELETE FROM destinations 
              WHERE id = $id";
    mysqli_query($link, $query);
    //preusmerim nazaj
    header("Location: destinations.php");
?>