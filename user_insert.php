<?php
    include_once 'database.php';
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $status = $_POST['status'];
    
    if ($status == "user") 
        {
        if (!empty($last_name) && !empty($email) && !empty($pass)
                && ($pass == $pass2)) {
            //vse ok
            $pass = $salt.$pass; //geslu dodam salt
            $pass = sha1($pass); //zakodiram geslo
            $query = sprintf("INSERT INTO users (first_name, last_name, email, pass) 
                          VALUES ('%s','%s','%s','$pass')",
                        mysqli_real_escape_string($link, $first_name),
                        mysqli_real_escape_string($link, $last_name),
                        mysqli_real_escape_string($link, $email));
            mysqli_query($link, $query);
        
        
        //preusmeritev na prijavo
        header("Location: login.php");
        }
        else {
            //neustrezni podatki
            header("Location: registration.php");
             }   
       }  
    
    else
        {
        if (!empty($last_name) && !empty($email) && !empty($pass)
                && ($pass == $pass2)) {
            //vse ok
            $pass = $salt.$pass; //geslu dodam salt
            $pass = sha1($pass); //zakodiram geslo
            $query = sprintf("INSERT INTO users (first_name, last_name, email, pass) 
                          VALUES ('%s','%s','%s','$pass')",
                        mysqli_real_escape_string($link, $first_name),
                        mysqli_real_escape_string($link, $last_name),
                        mysqli_real_escape_string($link, $email));
            mysqli_query($link, $query);
        
        
        //preusmeritev na prijavo
        header("Location: login.php");
        }
        else {
            //neustrezni podatki
            header("Location: registration.php");
             }   
        }
?>