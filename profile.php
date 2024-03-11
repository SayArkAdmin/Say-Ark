<?php
    include "connection.php";
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dump.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>PROFILE</title>
</head>
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
<div class="wrapper">
        <section>
        <div class="sec_img">
            <br><br>
            <div class="box3 form-control">
                <form action="" method="post">
                    <button class="btn btn-default" style="float:right;" name="submit1">EDIT</button>

</form>
</div>
</div>
</section>
</div>
<footer></footer>