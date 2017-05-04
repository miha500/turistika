<?php
    include_once 'database.php';
    include_once 'session.php';
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    $www = $_POST['www'];
    $lat = $_POST['lat'];
    $alt = $_POST['alt'];
    $country_id = $_POST['country_id'];
    
    $id = (int) $_POST['id'];
    
    $query = sprintf("UPDATE destinations 
                            SET title = '%s', 
                            description = '%s', 
                            www  = '%s', 
                            lat  = '%s', 
                            alt = '%s',
                            country_id = %s
                      WHERE id = $id",
            mysqli_real_escape_string($link, $title),
            mysqli_real_escape_string($link, $description),
            mysqli_real_escape_string($link, $www),
            mysqli_real_escape_string($link, $lat),
            mysqli_real_escape_string($link, $alt),
            mysqli_real_escape_string($link, $country_id));
    //pošljemo podatke v bazo
    mysqli_query($link, $query);
    //echo $query; die();
    //preusmeritev na seznam destinacij
    header("Location: destinations.php");
?>