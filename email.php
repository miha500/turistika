
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $email =$_GET['email'];
        ?>
        
        <form action="indexx.php" method="post">
    <input type="hidden" name="email" value ="<?php echo $email; ?>" />
    subject: <input type="text" name="subject" /><br />
    sporočilo: <input type="textarea" name="message" /></texarea> <br />
    <input type="submit" value="Pošlji" />
</form>
        
        
    </body>
</html>
