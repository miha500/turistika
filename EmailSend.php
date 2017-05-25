<?php

 include_once 'database.php';
              
                $sql = "SELECT username FROM onlineusers ";
                $result = mysqli_query($link, $sql);

              /*  while ($row = mysqli_fetch_array($result)) {
                    $to = $row['username'];   
                    $subject = 'the subject';
                    $message = 'hello';
                    mail($to, "Your Subject", "A message set by you.", "If header information.");
                                }
                
                
                
?>