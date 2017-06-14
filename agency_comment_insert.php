<?php


    include_once 'session.php';
    include_once 'database.php';
    
    $agency_id = (int) $_POST['agency_id'];
    
    $content = $_POST['comment'];
   
    $user_id = $_SESSION['user_id'];
    
    
    $query = sprintf("INSERT INTO agency_comments(agency_id, 
                                           user_id, 
                                           content, 
                                           date_add) 
                      VALUES ($agency_id, 
                              $user_id,
                              '%s',
                              NOW())", 
                    mysqli_real_escape_string($link, $content));
    //zapišemo komentar v bazo
    mysqli_query($link, $query);
    //preusmeritev nazaj na agencijo
   header("Location: agency.php?id=$agency_id");
    
?>