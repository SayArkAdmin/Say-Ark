<?php
     session_start();
    if(isset($_SESSION['login_user']))
    {  
        
        unset($SESSION['login_user']);
  
        
    }
    

session_destroy();
      header("location:home.php");
      
      exit;
?>