<?php
    include("connection.php");
    session_start();
    
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Student Login
    </title>
    <link rel="stylesheet" type="text/css" href="dump.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!--------------------------------------------------------------------------------------------------------------------STYLE/CSS-------------------------------------------------------------------------------------------------------------------->
    <style type="text/css">

    </style>


<!-------------------------------------------------------------------------------------------------------------------STYLE/CSS-------------------------------------------------------------------------------------------------->





<!--------------------------------------------------------------------SCRIPT/JS------------------------------------------------------------------------------->


    <script type="text/javascript">
        function showpass() {
        var x = document.getElementById("myInput");
            if (x.type === "password")
            {
            x.type = "text";
            
            } 
            else {
            x.type = "password";
  }
}

    </script>
</head>



<!--------------------------------------------------------------------SCRIPT/JS------------------------------------------------------------------------------->





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





<!-------------------------------------------------------------------------LOGINPUT---------------------------------------------------------------------------->
<body>

    <div class="wrapper">
        <section>
        <div class="stlogin_img">
            
            
            <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form 
       
       $myemail = mysqli_real_escape_string($db,$_POST['email']);
       $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
       
       $sql = "SELECT * FROM students WHERE email = '$myemail' and passcode = '$mypassword'";
       $result = mysqli_query($db,$sql);
       
       $count = mysqli_num_rows($result);
         
       if($count == 1) {
        $username = "SELECT * FROM students WHERE email = '$myemail' and passcode = '$mypassword'";
        $user = mysqli_query($db,$username);
          while($name= mysqli_fetch_assoc($user))
        {
        $_SESSION['login_user'] = $name['username'];
        $_SESSION['st_roll'] = $name['roll'];
        $_SESSION['pfp'] = $name['pfp'];
        }

        ?>
        
        <script type="text/javascript">
            alert ("Welcome Back Pre");
            window.location.href = 'home.php';
        </script>
        <?php
        //header("location: home.php");
        //location.replace("home.php");
       }else {
          ?>
          <!--<script type="text/javascript">
            alert("MaliBoi");
          </script>-->
          <div class="alert alert-warning" style="width:100%; margin-top:-20px; text-align: center; font-size:20px;">
                <strong>Mali Boi</strong>
            <div style="font-size:15px;">
                (Or Wala Ka Pang Account, Ewan Ko, Mag Sign Up Ka Or Something,
                <br>Wala Ko Pake. Basta Ayusin Mo)
            </div>
       </div>
          <?php
       }
    }
    ?>
            <br><br><br>
            <div class="box1 form-control">
                <h1 style="text-align: center; font-size: 35px;font-family: Helvetica neue;">HTP Library</h1>
                <h1 style="text-align: center; font-size: 20px;">Student Login Form</h1>
                <form style="text-align: center;"name="login" action="" method="post" autocomplete="off">

                    <div class="studentlogin">
                        <div class="col-sm-10" style="display: inline-block; float: none; margin: 0 auto;">
                            <input class="form-control" type="text" name="email" placeholder="Email" required oninvalid="this.setCustomValidity('Tanga Ka?')" oninput="this.setCustomValidity('')">
                            <br>
                            <input class="form-control" id="myInput" type="password" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('Puta Ayusin Mo')" oninput="this.setCustomValidity('')">
                            <br>
                            <label class="chk"><input class="hidden"style="width: 50px;height: 20px; margin-top:7px;" type="checkbox" onclick="showpass()">Show Password</label>
                            <br>
                            <input class="btn btn-default" type="submit" name="submit" value="Login" style="width: 70px;height: 30px;"></button>
                    </div>
                <p style="text-align: center;">
                    <br>
                    <a style="color: white"href="">Forgor???</a><br>
                    Newcomer?<a style="color:white;" href="register.php">&nbspSign Up!!</a>
                </p>

                </form>
            </div>
        </div>
        </section>
    </div>


    <!-------------------------------------------------------------------------LOGINPUT---------------------------------------------------------------------------->

</body>
<footer></footer>
</html>