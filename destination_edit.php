<?php
    include_once 'header.php';
    include_once 'database.php';
    

    $id = (int) $_GET['id']; //id destinacije, ki jo urejamo
    $query = "SELECT * FROM destinations WHERE id = $id";
    $result = mysqli_query($link, $query);
    //si shranimo v spremenljivko 
    //vse podatke o destinaciji, ki jo urejamo
    $destination = mysqli_fetch_array($result);
?>

<form action="destination_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $destination['id']; ?>" />
    Ime: <input type="text" name="title" value="<?php echo $destination['title']; ?>" /><br />
    Država: 
    <select name="country_id">        
        <?php 
            $query = "SELECT * FROM countries ORDER BY title";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) {
                if ($row['id'] == $destination['country_id']) {
                    echo '<option value="'.$row['id'].'" selected="selected">'.$row['title'].'</option>';
                }
                else {
                    echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
                }
            }
        ?>
    </select>    
    Opis: <textarea name="description" cols="5" rows="10"><?php echo $destination['description']; ?></textarea><br />
    Spletna stran: <input type="text" name="www" value="<?php echo $destination['www']; ?>" /><br />
    Langitude: <input type="text" name="lat" value="<?php echo $destination['lat']; ?>" /><br />
    Longitude: <input type="text" name="alt" value="<?php echo $destination['alt']; ?>" /><br />
    <input type="submit" value="Posodobi" />
    <input type="reset" value="Prekliči" />
    
    <input type="text"/> <?php echo $destination['update']; ?>" <br/>
</form>

<?php
    include_once 'footer.php';
?>