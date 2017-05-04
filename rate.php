<?php
    include_once 'session.php';
    include_once 'database.php';

    $destination_id = (int) $_GET['id'];
    $rate = (int) $_GET['rate'];
    
    $user_id = $_SESSION['user_id'];
    //zaščita pred večkratim glasovanjem
    $query = "SELECT * 
              FROM rates 
              WHERE destination_id = $destination_id 
              AND user_id = $user_id";
    $result = mysqli_query($link, $query);
    //preverimo, če tak obstaja v bazi
    if (mysqli_num_rows($result)) {
        $_SESSION['error'] = "Ne spamaj";
        header("Location: destination.php?id=$destination_id");
        die();
    } 
    
    $query = "INSERT INTO rates 
              (user_id, destination_id, rate, date_add)
              VALUES($user_id, $destination_id, $rate, NOW())";
    
    mysqli_query($link, $query);
    
    header("Location: destination.php?id=$destination_id");    
?>