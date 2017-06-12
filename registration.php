<?php
    include_once 'header.php';
?>
<h1>Registracija</h1>
<form action="user_insert.php" method="post">
    Ime: <input type="text" name="first_name" placeholder="Vnesi ime ..." /><br />
    Priimek: <input type="text" name="last_name" placeholder="Vnesi priimek ..." required="required" /><br />
    E-pošta: <input type="email" name="email" placeholder="Vnesi e-pošto ..."  required="required" /><br />
    Geslo: <input type="password" name="pass" placeholder="Vnesi geslo ..."  required="required" /><br />
    Geslo (ponovi): <input type="password" name="pass2" placeholder="Vnesi geslo ..." required="required" /><br />
    <input type="submit" value="Vnesi" />
    <input type="reset" value="Prekliči" />
</form>

<?php 
    include_once 'footer.php';
?>