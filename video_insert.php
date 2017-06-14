<?php
include_once 'session.php';
//sprejmemo id destinacije, za katero
//nalagamo slike

if (isset($_POST['submit']))
{
    $name = $_FILES ['file']['name'];
    $temp = $_FILES ['file']['temp_name'];
    
    move_uploaded_file($temp,"uploaded/". $name);
    $url = "http://localhost/phpmyadmin/video";
    mysql_query("INSERT INTO videos VALUES ('', '$name', '$url'");
}

?>