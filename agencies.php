<?php 
include_once 'header.php';
include_once 'database.php';

$query = "SELECT * FROM agencies";
$result = mysqli_query($link, $query);

while($row = mysqli_fetch_array($result)) 
{
    $title = $row['title'];
 echo '<a href="agency.php?id='.$row['id'].'">'.$title.'</a>';
 echo '<br>';

}

?>

<?php
 include_once 'footer.php';
?>
