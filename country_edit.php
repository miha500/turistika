<?php
    include_once 'header.php';
    include_once 'database.php';
    
    $id = (int) $_GET['id'];
    
    $query = "SELECT * FROM countries WHERE id = $id";
    $result = mysqli_query($link, $query);
    //shranim si podatke o državi, ki jo želim urejat
    $country = mysqli_fetch_array($result);    
?>

<form action="country_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    Ime države: <input type="text" name="title" 
                value="<?php echo $country['title']; ?>" /><br />
    Kratica: <input type="text" name="short" 
                value="<?php echo $country['short']; ?>" /><br />
    <input type="submit" value="Posodobi" />
    <input type="reset" value="Prekliči" />
</form>

<?php 
    include_once 'footer.php';
?>