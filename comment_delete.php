<?php
    include_once 'session.php';
    include_once 'database.php';
    
    $id = (int) $_GET['id'];
    $user_id = $_SESSION['user_id'];
    //podatek s katere destinacije je komentar
    $query = "SELECT destination_id FROM comments
              WHERE id=$id";
    $result = mysqli_query($link, $query);
    $destination = mysqli_fetch_array($result);
    $did = $destination['destination_id'];
    
    $query = "DELETE FROM comments
              WHERE id = $id AND user_id = $user_id";
    
    mysqli_query($link, $query);
    
    header("Location: destination.php?id=$did");
    
?>