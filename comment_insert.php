<?php
    include_once 'session.php';
    include_once 'database.php';
    
    $destination_id = (int) $_POST['destination_id'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];
    
    $query = sprintf("INSERT INTO comments(destination_id, 
                                           user_id, 
                                           content, 
                                           date_add) 
                      VALUES ($destination_id, 
                              $user_id,
                              '%s',
                              NOW())", 
                    mysqli_real_escape_string($link, $content));
    //zapišemo komentar v bazo
    mysqli_query($link, $query);
    //preusmeritev nazaj na destinacijo
    header("Location: destination.php?id=$destination_id");
    
?>