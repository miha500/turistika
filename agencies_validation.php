<?php
include_once 'header.php';
include_once 'database.php';
?>

        <table border="2">
    <tr>
        <td>title</td>
    </tr>

   
        <?php
        
include_once 'database.php';
echo '<form action= "agencies_admin_update.php" method="get">'; 
$valid_query = "SELECT * FROM agencies ";
$valid_result = mysqli_query($link, $valid_query);

while ($row = mysqli_fetch_array($valid_result)) {
    echo '<tr>';
    
    $id = $row['id'];
    echo '<td>'.$row['title'].'</td>';
    echo  "<td><a href='agencies_admin_update.php?id=" . $id . "'>prava agencija?</a></td>";
    echo '<tr>';
}
    echo '</form>';
        ?>
    <a href="index.php"/>nazaj </a>
        </table>

<?php
    include_once 'footer.php';
?>