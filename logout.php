<?php

    session_start();
    
     include_once 'database.php';
    include_once 'session.php';
    
    
    $email = $_SESSION['email'];
    
     $sql = "DELETE FROM onlineusers WHERE username = '$email'";
     mysqli_query($link, $sql);
    
    session_destroy(); 
    
    header("Location: index.php");
?>







        