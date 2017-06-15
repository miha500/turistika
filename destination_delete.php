<?php


    include_once 'session.php';
    include_once 'database.php';
    
        if(isset($_SESSION['admin_id']) && $agency['id'] == $_SESSION['admin_id']) 
        {
    $id = (int) $_GET['id'];
    
    $query = "DELETE FROM destinations 
              WHERE id = $id";
    mysqli_query($link, $query);
    //preusmerim nazaj
    header("Location: destinations.php");
        }
        
        else
            
        {
            header("Location: destinations.php");
        }
        
?>


 