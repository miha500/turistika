<?php 
include_once 'header.php';
include_once 'database.php';

$query = "SELECT * FROM agencies";
$result = mysqli_query($link, $query);

while($row = mysqli_fetch_array($result)) 
{
 echo '<a href="agency.php?id='.$row['id'].'">';

}

?>

<?php
 include_once 'footer.php';
?>
