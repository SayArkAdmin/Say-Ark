<?php
    include "connection.php";
    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
        <link rel="stylesheet" type="text/css" href="dump.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>


<!-----------------------------------------------------------------------------------------------------STYLE/CSS------------------------------------------------------------------------------------->


<style type="text/css">
    </style>


<!---------------------------------------------------------------------------------------------------------------------STYLE/CSS----------------------------------------------------------------------------------->





<!-------------------------------------------------------NAVBAR------------------------------------------------------------------->


<?php 
if(isset($_SESSION['login_user']))
{
     include "navlog.php"; 
}
else
{
    include "nav.php";
}?>


<!-------------------------------------------------------NAVBAR------------------------------------------------------------------->




<!-----------------------------------------------------------------------SCRIPT/JS---------------------------------------------------------------------------->


<script type="text/javascript">

function hamborger() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>


<!-----------------------------------------------------------------------SCRIPT/JS---------------------------------------------------------------------------->





<!--------------------------------------------------------------------------------MAINCODE--------------------------------------------------------------------------------->


<div class="wrapper">
        <section>
        <div class="fb_img">
            <br>
            <div class="box">
                <br>
                <h1 style="text-align: center; font-size: 30px;"><b>If You Have Any Suggestion, Please Keep Them To Yourself</b></h1>
                <h1 style="text-align: center; font-size: 20px;">Your Opinion Does Not Matter</h1><br>
            
                <form style="text-align: center;"name="login" action="" method="post" autocomplete="off">
                
                    <div class="studentlogin">
                        <div class="col-sm-10" style="display: inline-block; float: none; margin: 0 auto;">
                            <input class="form-control" type="text" name="feedback" placeholder="Joke Lang Pre" required oninvalid="this.setCustomValidity('Di Naman Mabiro')" oninput="this.setCustomValidity('')">
                            
                            <input class="btn btn-default" type="submit" name="submit" value="Submit" style="width: 70px;height: 30px;"></button>
                    </div>
                    <div>
        <?php
        if(isset($_SESSION['login_user']))
        {
            if(isset($_POST['submit']))
            {
                $sql="INSERT INTO `comments`(`username`, `Suggestions`) VALUES ('$_SESSION[login_user]', '$_POST[feedback]');";
                if(mysqli_query($db,$sql))
                {
                    $q="SELECT * FROM `comments` ORDER BY `id` DESC";
                $res=mysqli_query($db,$q);
                
                echo "<table class=' table-fb table-borderd'>"; 
                echo "<tr>";
                echo "<th>"; echo "User"; echo"</th>";
                echo "<th>"; echo "|         |"; echo "Feedback"; echo"</th>";
                echo "</tr>";
                while($row=mysqli_fetch_assoc($res))
                {
                echo "<tr>";
                    echo "<td>"; echo $row['username']; echo "</td>";
                    echo "<td>"; echo "|         |"; echo $row['Suggestions']; echo "</td>";
                echo "</tr>";
                 } 
                echo "</table>";
            echo '<script>showAlert();window.setTimeout(function () {HideAlert();},1000);</script>';  
            echo "<meta http-equiv='refresh' content='0;url=feedback.php'>";
            exit();
            }
            }
        else
        {
          $q="SELECT * FROM `comments` ORDER BY `id` DESC";
          $res=mysqli_query($db,$q);
          echo "<table class=' table-fb table-borderd'>";  
          echo "<th>"; echo "User"; echo"</th>";
          echo "<th>"; echo "|         |"; echo "Feedback"; echo"</th>";
          while($row=mysqli_fetch_assoc($res))
          {
          echo "<tr>";
              echo "<td>"; echo $row['username']; echo "</td>";
              echo "<td>"; echo "|         |"; echo $row['Suggestions']; echo "</td>";
          echo "</tr>";
           } 
           echo "</table>";
        }
        }
        else
        {
          $q="SELECT * FROM `comments` ORDER BY `id` DESC";
                $res=mysqli_query($db,$q);
                
                echo "<table class=' table-fb table-borderd'>"; 
                echo "<tr>";
                echo "<th>"; echo "User"; echo"</th>";
                echo "<th>"; echo "|         |"; echo "Feedback"; echo"</th>";
                echo "</tr>";
                while($row=mysqli_fetch_assoc($res))
                {
                echo "<tr>";
                    echo "<td>"; echo $row['username']; echo "</td>";
                    echo "<td>"; echo "|         |"; echo $row['Suggestions']; echo "</td>";
                echo "</tr>";
                
                 }
                 echo "</table>";
        }
        ?>
    </div>
            </div>
        </div>
        
        </section>
<footer></footer>
    
    </body>

</html>
