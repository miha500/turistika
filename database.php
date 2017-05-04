<?php
//povezava na bazo
$username = 'turistika';
$password = 'turistika';
$database = 'turistika';
$server = 'localhost';
//povezali smo se na bazasdasdas
$link = mysqli_connect($server, $username, $password, $database);
//težava php in utf-8
mysqli_query($link, "SET NAMES 'utf8'");
//povezava je uspešna in končana :)

$salt = 'lskdfh394kjfd9834sdfg';
?>