<?php
    include_once 'header.php';
?>

<form action="country_insert.php" method="post">
    Ime države: <input type="text" name="title" placeholder="Vnesi državo ..." /><br />
    Kratica: <input type="text" name="short" placeholder="Vnesi kratico ..." /><br />
    <input type="submit" value="Vnesi" />
    <input type="reset" value="Prekliči" />
</form>

<?php 
// MEMELORD 420 BLAZE IT BOI
    include_once 'footer.php';
?>