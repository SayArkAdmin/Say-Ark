<?php
  include "connection.php";
  session_start();  

  if(isset($_SESSION['login_user']))
  {
  $table_name = "lrn".$_SESSION['st_roll'];
  $sql = "SHOW TABLES LIKE '$table_name'";
  $result = $bm->query($sql);
  
    if ($result->num_rows == 0) {
    $sql = "CREATE TABLE $table_name (
        bid int(100),
        nm varchar(100),
        authors varchar(100),
        edtn varchar(100),
        sts varchar(100),
        qty int(100),
        dept varchar(100)
      )" ;
  
    $bm->query($sql);
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Hide The Pain Library
    </title>
    <link rel="stylesheet" type="text/css" href="dump.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<!-----------------------------------------------------------------------------------------------------------STYLE/CSS------------------------------------------------------------------------->


<style type="text/css">


</style>


<body>



<!--------------------------------------------------------------------STYLE/CSS-------------------------------------------------------------------------------------->





<!-------------------------------------------------------------------SCRIPT/JS-------------------------------------------------------------------------------------->


<script type="text/javascript">
    
    </script>



<!--------------------------------------------------------------------SCRIPT/JS------------------------------------------------------------------------------------------------>





<!-------------------------------------------------------NAVBAR------------------------------------------------------------------->


<?php 
if(isset($_SESSION['login_user']))
{
     include "navlog.php"; 
}
else
{
    include "nav.php";
}
?>


<!-------------------------------------------------------NAVBAR------------------------------------------------------------------->





<!--------------------------------------------------------------------------MAINCODE------------------------------------------------------------------------>

    <div class="wrapper">
        <section>
        <div class="sec_img">
            <br><br><br>
            <div class="box0 form-control">
                <br>
                <h1 style="text-align: center; font-size: 30px;"><b>Welcome To HTP Library</b></h1>
                <br>
                <h1 style="text-align: center; font-size: 20px;"><b>Opens at:</b> <i>Whenever The Fuck You Want</i></h1><br>
                <h1 style="text-align: center; font-size: 20px;"><b>Closes at:</b> <i>Governber 32, 56726</i></h1><br>
            </div>
        </div>
        
        </section>

        
    </div>

</body>
<footer>
            
            <p style="max-width:100%; color:turquoise;text-align: center;">
                    Email:&nbsp SuicideHotline@gmail.com
                    <br>
                    Mobile No.:&nbsp 0966-351-****
            </p>
        </footer>
</html>