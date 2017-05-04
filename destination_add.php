<?php
    include_once 'header.php';
    include_once 'database.php';
?>

<form action="destination_insert.php" method="post">
    Ime: <input type="text" name="title" placeholder="Vnesi destinacijo ..." /><br />
    Država: 
    <select name="country_id">
        <?php 
            $query = "SELECT * FROM countries ORDER BY title";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
            }
        ?>
    </select>    
    Opis: <textarea name="description" cols="5" rows="10" placeholder="Vnesi opis ..."></textarea><br />
    Spletna stran: <input type="text" name="www" /><br />
    Langitude: <input type="text" name="lat" /><br />
    Longitude: <input type="text" name="alt" /><br />
    <input type="submit" value="Vnesi" />
    <input type="reset" value="Prekliči" />
</form>

<?php
    include_once 'footer.php';
?>