<?php
include_once 'session.php';
include_once 'database.php';

$destination = $_POST['destination'];

$dest_query = "SELECT id FROM destinations WHERE title='$destination'";
$destination_id = mysqli_query($link, $dest_query);


$user_id = $_SESSION['id'];
$first_name = $_SESSION['first_name'];
$email = $_SESSION['email'];


$query = sprintf("INSERT INTO rates (user_id, destination_id, date_add,rate) 
                          VALUES ('%s','%s','2017-1-1',500)",
                        mysqli_real_escape_string($link,$user_id ),
                        mysqli_real_escape_string($link, $destination_id));
                        
                      
        mysqli_query($link, $query);
        
        header("Location:index.php");
