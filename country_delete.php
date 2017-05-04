<?php
    include_once 'database.php';
    
    $id = (int) $_GET['id'];
    
    $query = "DELETE FROM countries 
              WHERE id = $id";
    mysqli_query($link, $query);
    //preusmerim nazaj
    header("Location: countries.php");
?>

