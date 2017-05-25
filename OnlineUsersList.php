<?php
    include_once 'header.php';
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
                <table border="1" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>EMAIL</td>
                    </tr>

        
        <?php
        
        include_once 'database.php';
              
                $sql = "SELECT username FROM onlineusers ";
                $result = mysqli_query($link, $sql);

                while ($row = mysqli_fetch_array($result)) {
                    echo '<tr>';
                    echo '<td>'.$row['username'].'</td>';
                    echo '</tr>';
                }
                
                
                
                ?>
                    </table>  
                        </body>
                </html>



<?php
include_once 'footer.php';
?>