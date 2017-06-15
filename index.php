<?php
    include_once 'header.php';
?>

<h1>Dobrodošli na spletni strani</h1>
<img src="slike/jiff.gif" height="300" width="300">

<?php
session_start();
echo $_SESSION['agencies_id'];
echo $_SESSION['user_id'];

?>

<?php
    include_once 'footer.php';
?>