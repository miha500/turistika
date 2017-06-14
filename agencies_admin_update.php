<?php
    include_once 'database.php';
    if(isset($_POST['id']))
    $query = "UPDATE agencies SET admin=2 WHERE id = $id";
    header("Location: agencies_validation.php");
    
    ?>