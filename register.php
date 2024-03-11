<?php
    include "connection.php";
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Student Register
    </title>
    <link rel="stylesheet" type="text/css" href="dump.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-------------------------------------------------------------------------STYLE/CSS---------------------------------------------------------------------------------->


    <style type="text/css">
        

        input[type=number] {
          -moz-appearance: textfield;
        }
        
        
    </style>


<!--------------------------------------------------------------------STYLE/CSS-------------------------------------------------------------------------------------->





<!-------------------------------------------------------------------SCRIPT/JS------------------------------------------------------------------------------------------>


    <script type="text/javascript">

function validateEmail(input) {
  const email = input.value.trim();
  if (email.endsWith('@depedsantarosa.ph')) {
    input.setCustomValidity('');
  } else {
    input.setCustomValidity('Deped Po Thanks');
  }
}
        function showpass() 
        {
        var x = document.getElementById("myInput");
        var y = document.getElementById("y");
            if (x.type === "password")
                {
                  x.type = "text";
                  y.classList.add('fa-eye-slash');
                      }  else 
                        {
                          if (y.classList.contains('fa-eye')) 
                      {
                          x.type = "password";
                          y.classList.remove('fa-eye-slash');
                        }
                }
        }
    </script>
</head>
<body>



<!-------------------------------------------------------------------SCRIPT/JS------------------------------------------------------------------------------------------>





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





<!-------------------------------------------------------------------REGINPUT------------------------------------------------------------->

<section>
    <div class="wrapper">
    
        <div class="stlogin_img">
            <br><br><br>
            <div class="box2">
                <h1 style="text-align: center; font-size: 35px;font-family: Helvetica neue;">HTP Library</h1>
                <h1 style="text-align: center; font-size: 20px;">Student Registration Form</h1>
                <form style="text-align: center;"name="registration" action="" method="post" autocomplete="off">
                    <br>
                    <div class="registration">
                        <div class="col-sm-9" style="
                        display: inline-block; float: none; margin: 0 auto;">
                            <input class="form-control" type="text" name="firstname" placeholder="First Name" required oninvalid="this.setCustomValidity('Ayusin Mo Kasi Puta')" oninput="this.setCustomValidity('')">
                            <br>
                            <input class="form-control" type="text" name="lastname" placeholder="Last Name" required oninvalid="this.setCustomValidity('Ayusin Mo Kasi Puta')" oninput="this.setCustomValidity('')">
                            <br>
                            <input class="form-control" type="text" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('Ayusin Mo Kasi Puta')" oninput="this.setCustomValidity('')">
                            <br>
                            <input class="form-control" id="myInput"type="password" name="passcode" placeholder="Password" required oninvalid="this.setCustomValidity('Ayusin Mo Kasi Puta')" oninput="this.setCustomValidity('')">
                            <br>
                            <label class="chk"><input class="hidden"style="width: 50px;height: 10px; margin-top:3px;" type="checkbox" onclick="showpass()"><i id="y"class="fa fa-eye"></i>Show Password</label>
                            <div class="reg">
                            <br>
                            <input class="form-control" type="text" maxlength="12" inputmode="numeric" name="roll" placeholder="Roll No" required oninvalid="this.setCustomValidity('Ayusin Mo Kasi Puta')" oninput="this.setCustomValidity('')">
                            <br>
                            <input class="form-control" type="text" name="email" placeholder="Email" id="emailInput" oninput="validateEmail(this)" required oninvalid="this.setCustomValidity('Ayusin Mo Kasi Puta')" oninput="this.setCustomValidity('')">
                            <br>
                            <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="width: 70px;height: 30px;"></button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        
    


<!-------------------------------------------------------------------REGINPUT------------------------------------------------------------->





<!---------------------------------------------------------------------------------------------DATABASE------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    
    
    <?php
    if(isset($_POST['submit']))
    {
        $count=0;
        $sql="SELECT email FROM `students`";
        $res=mysqli_query($db,$sql);
        
        while($row=mysqli_fetch_assoc($res))
        {
            if($row['email']==$_POST['email'])
            {
                $count=$count+1;
            }
        }
    if($count==0)
    {
        mysqli_query($db,"INSERT INTO `students` values('$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[passcode]', '$_POST[roll]', '$_POST[email]', 'def.jpg');");
    ?>
        <script type="text/javascript">
            alert("AYARN Geh Login ka na");
        </script>
    <?php
    echo '<script>showAlert();window.setTimeout(function () {HideAlert();},1000);</script>';  
    echo "<meta http-equiv='refresh' content='0;url=studentlogin.php'>";
    exit();
    }
        else
        {
            ?>
                <script type="text/javascript">
                alert("luh paulit ulit? isang email lng boi");
                </script>
            <?php
        echo '<script>showAlert();window.setTimeout(function () {HideAlert();},1000);</script>';  
        echo "<meta http-equiv='refresh' content='0;url=register.php'>";
        exit();
        }
    
    }
    
    ?>

<!-------------------------------------------------------------------------------------------------------------------------END DATABASE---------------------------------------------------------------------------------------------------------------------------------------------------->
    </div>
</section>
<footer></footer>
    
</body>