<?php
    include_once 'database.php';    
    $title = $_POST['title'];
    $short = $_POST['short'];
    $id = (int) $_POST['id'];
    
    $query = sprintf("UPDATE countries SET title = '%s',
                                           short = '%s'
                      WHERE id = $id",
            mysqli_real_escape_string($link, $title),
            mysqli_real_escape_string($link, $short));  
    //pošljem podatke v bazo
    mysqli_query($link, $query);
    //preusmeritev nazaj
    header("Location: countries.php");
?>