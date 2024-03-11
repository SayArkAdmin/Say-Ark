<?php
    $db=mysqli_connect("localhost","root","","htplib"); 
    $bm=mysqli_connect("localhost","root","","student_bookmark");
                    /*server name, username, pass, database*/

                    if (!$db || !$bm) {

                        echo "Connection failed!";
                    
                    }
    
?>