<?php
    include "connection.php";
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Books of Self Help</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body>


<!-----------------------------------------------------------------------------------------------------STYLE/CSS------------------------------------------------------------------------------------->


<style type="text/css">
        section .books_img
        {
            margin-top: 0px;
            background-image: url("images/books.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }

        .wrapper
        {
            margin-top: -20px;
            margin-right:auto;
            margin-left: auto;
            height: 100%;
            max-width: 100%;
            background-color:cyan; 
        }
        .table.form-control
        {
            width: 700px;
            height: 500px;
        }

        .table
        {
            margin-top: -10px;
            background-color: rgba(255,255,255,0.9);
            color: black;
            max-width: 100%;
            max-height: 100%;
            overflow: auto;
        }
        .table-bordered
        {
            border: 2px solid;
        }
        .container-fluid
        {
            width:100%;
        }

       section
       {
        margin-bottom: -20px;
        margin-top: -20px;
       }
       nav .col-xl-9{
          float: right;
        }
        .search-bar
        {
          float:right;
          padding: 10px;
          width: 300px;
          height: 90px;
          background-color: rgba(0,0,0,0);
        }

      .alert{
        float: center;
      }

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

function refreshPage(){
    window.location.href="books.php";

} 

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
        <div class="books_img">
      

<!------------------------------------------------------------------SEARCHBAR----------------------------------------------------------------------->


<div class="search-bar">
  <form style ="background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,0);"class="form-control navbar-form" method="post"name="form1">
    
      <input style="width: 160px;"type="text" name="search" placeholder="Search" required oninvalid="this.setCustomValidity('Wag Ka Maghanap Ng Wala')" oninput="this.setCustomValidity('')">
      <button style="background-color: #215050;"type="submit" name="submit" class="btn btn-default"><span style="color:white;"class="glyphicon glyphicon-search"></span></button>
      <button style="background-color: #215050;"type="button" name="clear" class="btn btn-default" onClick="refreshPage()"><span style="color:white;"class="glyphicon glyphicon-remove"></span></button>

    
  </form>
</div>


<!------------------------------------------------------------------SEARCHBAR----------------------------------------------------------------------->

<!-------------------------------------------------------------PHPQUERY------------------------------------------------------------------------->


<?php
if(isset($_SESSION['login_user'])){
$table_name = "lrn".$_SESSION['st_roll'];
  if(isset($_POST['submit']))
  {
      
      $q=mysqli_query($bm,"SELECT * from `$table_name` where `nm` like '%$_POST[search]%'");

      if(mysqli_num_rows($q)==0)
      {
        $sql="SELECT * FROM `$table_name` ORDER BY `$table_name`.`nm` ASC";
            $res=mysqli_query($bm,$sql);
    echo "<table style='background-color: rgba(283,98,146,0.9);' class='table table-bordered table-hover form-control'>";
            echo "<tr style='color: white;background-color: #215050;'>";
                //TABLE HEADER
            
                echo "<th>"; echo "ID"; echo"</th>";
                echo "<th>"; echo "NAME"; echo"</th>";
                echo "<th>"; echo "AUTHOR/S"; echo"</th>";
                echo "<th>"; echo "EDITION"; echo"</th>";
                echo "<th>"; echo "STATUS"; echo"</th>";
                echo "<th>"; echo "QUANTITY"; echo"</th>";
                echo "<th>"; echo "DEPARTMENT"; echo"</th>";
            echo "</tr>";

        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['nm']; echo "</td>";
                echo "<td>"; echo $row['authors']; echo "</td>";
                echo "<td>"; echo $row['edtn']; echo "</td>";
                echo "<td>"; echo $row['sts']; echo "</td>";
                echo "<td>"; echo $row['qty']; echo "</td>";
                echo "<td>"; echo $row['dept']; echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
          
        ?>
            <script>
              setTimeout(function() {
        
        }, 700); // 1700 milliseconds = 1.7 seconds
        </script>
            <?php
      }
      
      else
      {
        echo "<table class='table table-bordered table-hover form-control'>";
            echo "<tr style='color: white;background-color: #215050;'>";
                //TABLE HEADER
            
                echo "<th>"; echo "ID"; echo"</th>";
                echo "<th>"; echo "NAME"; echo"</th>";
                echo "<th>"; echo "AUTHOR/S"; echo"</th>";
                echo "<th>"; echo "EDITION"; echo"</th>";
                echo "<th>"; echo "STATUS"; echo"</th>";
                echo "<th>"; echo "QUANTITY"; echo"</th>";
                echo "<th>"; echo "DEPARTMENT"; echo"</th>";
            echo "</tr>";

        while($row=mysqli_fetch_assoc($q))
        {
            echo "<tr>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['nm']; echo "</td>";
                echo "<td>"; echo $row['authors']; echo "</td>";
                echo "<td>"; echo $row['edtn']; echo "</td>";
                echo "<td>"; echo $row['sts']; echo "</td>";
                echo "<td>"; echo $row['qty']; echo "</td>";
                echo "<td>"; echo $row['dept']; echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
      }
  }
  else
  {
    $sql="SELECT * FROM `$table_name` ORDER BY `$table_name`.`nm` ASC";
            $res=mysqli_query($bm,$sql);
            
    echo "<table class='table table-bordered table-hover form-control'>";
            echo "<tr style='color: white;background-color: #215050;'>";
                //TABLE HEADER
            
                echo "<th>"; echo "ID"; echo"</th>";
                echo "<th>"; echo "NAME"; echo"</th>";
                echo "<th>"; echo "AUTHOR/S"; echo"</th>";
                echo "<th>"; echo "EDITION"; echo"</th>";
                echo "<th>"; echo "STATUS"; echo"</th>";
                echo "<th>"; echo "QUANTITY"; echo"</th>";
                echo "<th>"; echo "DEPARTMENT"; echo"</th>";
            echo "</tr>";

        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['nm']; echo "</td>";
                echo "<td>"; echo $row['authors']; echo "</td>";
                echo "<td>"; echo $row['edtn']; echo "</td>";
                echo "<td>"; echo $row['sts']; echo "</td>";
                echo "<td>"; echo $row['qty']; echo "</td>";
                echo "<td>"; echo $row['dept']; echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
  }
}


?>


<!-------------------------------------------------------------PHPQUERY------------------------------------------------------------------------->


        </div>
        </section>

    </body>
    <footer>
    </footer>
</html>
