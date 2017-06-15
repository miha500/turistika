<?php
include_once 'database.php';
include_once 'session.php';

    $title = $_POST['title'];
    $url = $_POST['url'];
    $destination_id = $_SESSION['destination_id'];
    
  
        $query = sprintf("INSERT INTO videos (destination_id, title, url) 
                          VALUES ($destination_id,'%s','%s')",
                        mysqli_real_escape_string($link, $title),
                        mysqli_real_escape_string($link, $url));
                        
        mysqli_query($link, $query);
        
        //preusmeritev na prijavo
        header("Location: destinations.php");
