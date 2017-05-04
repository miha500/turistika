<?php
    session_start(); //vključimo sejo
    
    //zaščita pred nepooblaščenimi pristopi
    if (!isset($_SESSION['user_id']) && 
       ($_SERVER['REQUEST_URI'] != '/turistika/login.php') && 
       ($_SERVER['REQUEST_URI'] != '/turistika/index.php') && 
       ($_SERVER['REQUEST_URI'] != '/turistika/registration.php') &&
       ($_SERVER['REQUEST_URI'] != '/turistika/login_check.php')) {
        //preusmeritev na pijavo
        header("Location: login.php");
        
    }
    
?>