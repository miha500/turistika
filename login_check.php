<?php
    include_once 'database.php';
    include_once 'session.php';
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
     
    $pass = $salt.$pass; //geslu dodam "sol"
    //zakodiram geslo, zdaj ga lahko primerjam
    //z geslom v bazi
    $pass = sha1($pass); 
    
    $query = sprintf("SELECT * FROM users 
                      WHERE email = '%s' AND 
                      pass = '$pass'",
        mysqli_real_escape_string($link, $email));
    $result = mysqli_query($link, $query);
    
    if (mysqli_num_rows($result) == 1) {
        // vse je ok
       
        
        $user = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['email'] = $user['email']; //SPREMEMBA!
        //preusmeritev na domov (index)
        header("Location: index.php");
        
         $sql = "INSERT INTO onlineusers (username) VALUES ('$email')";
             mysqli_query($link, $sql);
          
        
    }
    else {
        //napaka v podatkih, preusmeritev nazaj
        //na login
        header("Location: login.php?e=1");        
    }
?>
