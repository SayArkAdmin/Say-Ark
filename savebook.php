<?php
    session_start();
    include "connection.php";

if(isset($_SESSION['login_user'])){

// Make sure id is passed into the script and convert it to an integer
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$user="dbo.lrn".$_SESSION['st_roll'];
$stuser="lrn".$_SESSION['st_roll'];
$count=0;
$sql="SELECT bid FROM $stuser where bid = $id";
$res=mysqli_query($bm,$sql);
$sql1="SELECT * FROM `books` where bid = $id";
$res1=mysqli_query($db,$sql1);
$row1=mysqli_fetch_assoc($res1);
while($row=mysqli_fetch_assoc($res))
        {
            if($row['bid']==$id)
            {
                $count=$count+1;
            }
        }
        if($count==0)
    {
    mysqli_query($bm,"INSERT INTO `$stuser` VALUES ('$row1[bid]','$row1[nm]','$row1[authors]','$row1[edtn]','$row1[sts]','$row1[qty]','$row1[dept]');");
    ?>
    <?php
    ?><script>alert("Oks, Noted");</script><?php
    echo '<script>showAlert();window.setTimeout(function () {HideAlert();},1000);</script>';  
    echo "<meta http-equiv='refresh' content='0;url=books.php'>";
    exit();
    }
    else{
        ?><script>alert("Meron Ka Na Boi");</script><?php
        echo '<script>showAlert();window.setTimeout(function () {HideAlert();},1000);</script>';  
        echo "<meta http-equiv='refresh' content='0;url=books.php'>";
        exit();   
    }}
    else{
        ?><script>alert("Login Ka Muna Boi");</script><?php
        echo '<script>showAlert();window.setTimeout(function () {HideAlert();},1000);</script>';  
        echo "<meta http-equiv='refresh' content='0;url=books.php'>";
        exit();   
    }

?>