
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Registracija za Agencije</h1>
<form action="agencies_add.php.php" method="post">
    Ime: <input type="text" name="title" placeholder="Vnesi ime ..." /><br />
    Uporabniško Ime: <input type="text" name="user_name" placeholder="Vnesi uporabniško ime ..." required="required" /><br />
    E-pošta: <input type="email" name="email" placeholder="Vnesi e-pošto ..."  required="required" /><br />
    Geslo: <input type="password" name="pass" placeholder="Vnesi geslo ..."  required="required" /><br />
    Geslo (ponovi): <input type="password" name="pass2" placeholder="Vnesi geslo ..." required="required" /><br />
    <input type="submit" value="Vnesi" />
    <input type="reset" value="Prekliči" />
</form>

    </body>
</html>
