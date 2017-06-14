<?php
include 'database.php';

session_start();
$destination_id = $_SESSION['destination_id'];
$user_id = $_SESSION['user_id'];

$query = sprintf("INSERT INTO users_destinations (user_id, destination_id, date) 
                          VALUES ($user_id, $destination_id, CURRENT_TIMESTAMP)");
                        
        mysqli_query($link, $query);
        