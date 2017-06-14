<?php
include_once 'session.php';
    include_once 'database.php';
    
    $id = (int) $_GET['id'];
    $user_id = $_SESSION['user_id'];
    //podatek s katere destinacije je komentar
    
    
    $query = "SELECT agency_id FROM agency_comments
              WHERE id=$id";
    $result = mysqli_query($link, $query);
    $agency = mysqli_fetch_array($result);
    $aid = $agency['agency_id'];
    
    $query = "DELETE FROM agency_comments
              WHERE id = $id AND user_id = $user_id";
    
    mysqli_query($link, $query);
    
    header("Location: agency.php?id=$aid");