<?php 
    include_once 'header.php';
    include_once 'database.php';

    $query = "SELECT a.title AS atitle, a.id AS aid
              FROM agencies a";
    $result = mysqli_query($link, $query);
?>

<?php 
    if ($_SESSION['admin'] == 1) {
?>
  


<?php 
    }
?>
    
<div id="destinations"> 
    <?php
        while ($row = mysqli_fetch_array($result)) {
            echo '<div class="destination">';
                echo '<div class="destination_modify">';
                    echo '<a href="agency_delete.php?id='.$row['aid'].'" 
                        onclick="return confirm(\'Ste prepričani?\')">Izbriši</a>';
                    echo ' <a href="agencies_edit.php?id='.$row['aid'].'">Uredi</a>';
                echo '</div>';
                echo '<a href="agency.php?id='.$row['aid'].'">';
                
                echo '<a href="agency.php?id='.$row['aid'].'">';
                $query = "SELECT avatar
                          FROM agencies
                          WHERE id=".$row['aid'].'
                          LIMIT 1'; 
                //echo $query;
                $r = mysqli_query($link, $query);
                $picture = mysqli_fetch_array($r);
                if (empty($picture['avatar'])) {
                    echo '<img src="slike/no-photo.jpg" alt="" />';
                }
                else {
                    echo '<img src="'.$picture['avatar'].'" alt="" />';
                }
       
                echo '</a>';
                echo '<span class="destination_name">'.$row['atitle'].'</span>';
                
            echo '</div>';    
        }
    ?>

    <div class="clear"></div>
</div>

<?php
    include_once 'footer.php';
?>