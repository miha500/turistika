<?php
include_once 'header.php';
include_once 'database.php';
$query = "SELECT * FROM countries";
$result = mysqli_query($link, $query);
?>

<a href="country_add.php">Dodaj državo</a>

<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td>ID</td>
        <td>Naslov</td>
        <td>Kratica</td>
        <td>Akcije</td>
    </tr>

<?php
while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>';
    echo $row['id'];
    echo '</td>';
    echo '<td>';
    echo $row['title'];
    echo '</td>';
    echo '<td>';
    echo $row['short'];
    echo '</td>';
    
    echo '<td>';
    echo '<a href="country_delete.php?id='.$row['id'].'" 
                onclick="return confirm(\'Ste prepričani?\')">Izbriši</a>';
    echo ' <a href="country_edit.php?id='.$row['id'].'">Uredi</a>';
    echo '</td>';    
    
    echo '</tr>';
}
?>
</table>

<?php
include_once 'footer.php';
?>