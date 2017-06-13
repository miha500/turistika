<?php
 include_once 'database.php';
    
    $title = $_POST['title'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $admin = 1;
    
    if (!empty($user_name) && !empty($email) && !empty($pass) && ($pass == $pass2)) {
        //vse ok
        $pass = $salt.$pass; //geslu dodam salt
        $pass = sha1($pass); //zakodiram geslo
        $query = sprintf("INSERT INTO agencies (title, user_name, pass, email, admin) 
                          VALUES ('%s','%s','$pass','%s',$admin)",
                        mysqli_real_escape_string($link, $title),
                        mysqli_real_escape_string($link, $user_name),
                        
                        mysqli_real_escape_string($link, $email));
        mysqli_query($link, $query);
        
        //preusmeritev na prijavo
        header("Location: login.php");
    }
    else {
        //neustrezni podatki
        header("Location: registration_agencies.php");
    }   

?>