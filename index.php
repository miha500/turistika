<?php
    include_once 'header.php';
?>

<h1>Dobrodošli na spletni strani</h1>

<h2>Prijava na potovanje</h2>

<?php
/* [[TO PUSTE PR MER SAM KOMENTAR JE]]
include 'database.php';
$query = "SELECT * destinations";
$result = mysqli_query($link,$query);

while($dest = mysqli_fetch_array($result))
{
    print_r($dest);
    echo'<br>';
}
*/
?>

<form method="post" action="rate_insert.php">
<select name="destination">
  <option value="Trg mladost 3">Trg mladost 3</option>
  <option value="VELENJE">VELENJE</option>
  <option value="Bled">Bled</option>
  <option value="Hradčani222">Hradčani222</option>
</select>
    
    <input type="submit" name="submit" value="Vnesi">
    <input type="reset" name="reset" value="Prekliči">
</form>

<?php
    include_once 'footer.php';
?>