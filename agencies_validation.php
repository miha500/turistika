
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <table border="2">
    <tr>
        <td>title</td>
    </tr>

   
        <?php
        
include 'database.php';
echo '<form action= "agencies_validation.php" method="post">'; 
$valid_query = "SELECT * FROM agencies ";
$valid_result = mysqli_query($link, $valid_query);

while ($row = mysqli_fetch_array($valid_result)) {
    echo '<tr>';
    $id = $row['id'];
    echo '<td>'.$row['title'].'</td>';
     echo  "<td><a href='agencies_validation.php?'>Delete</a></td>";
    echo '<tr>';
}

        ?>

    <?php
    include 'database.php';
    $id = $_POST['id'];
    $query = "DELETE FROM agencies WHERE id = '$id'";
    ?>

        </table>

    </body>
</html>
