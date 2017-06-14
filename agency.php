<?php

include_once 'header.php';
include_once 'database.php';

$agency_id = $_GET['id'];

$query = "SELECT * FROM agencies WHERE id = $agency_id";
$result = mysqli_query($link, $query);
$agency = mysqli_fetch_array($result);
    
?>

<p><?php echo $agency['title'];?></p>
<form method="post" action="agency_comment_add.php">
    <input type="hidden" name="agency_id"
               value="<?php echo $agency_id; ?>" />
    <textarea rows="5" cols="5" name="comment"></textarea>
    <input type="submit" name="submit">
    
</form>

<?php 
include_once 'footer.php';
?>
