<?php
    include_once 'database.php';
    
    $title = $_POST['title'];
    $short = $_POST['short'];
    
    $query = sprintf("INSERT INTO countries(title,short)
              VALUES ('%s','%s')",
 mysqli_real_escape_string($link, $title),
 mysqli_real_escape_string($link, $short));
    //podatke pošljemo v bazo
    mysqli_query($link, $query);
    
    //preusmeritev nazaj
    header("Location: countries.php");
?>
