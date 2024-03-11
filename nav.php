
<!DOCTYPE html>
<html>
<head>
</head>


<link rel="stylesheet" type="text/css" href="dump.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <header>
                <div class="container-fluid">
                <div class="navbar-header">
                    <img class="logo img"src=images/logo.jpg>
                    <p style="color:white;"class="navbar-brand active"><br>Hide The Pain Library</p>
                </div> 
                <nav>
                  <div class="topnav a" id="myTopnav">
                    <div class="ui">
                        <a href="studentlogin.php"class="hid a"><span class="glyphicon glyphicon-log-in a"></span> LOGIN</a>
                        <a href="register.php"class="hid a"><span class="glyphicon glyphicon-user"></span> REGISTER</a> 
                        <a href="home.php"class="a">HOME</a>   
                        <a href="books.php"class="a">BOOKS</a>
                        <a href="studentbook.php"class="a">MYBOOKS</a>
                        <a href="feedback.php"class="a">FEEDBACK</a>
                        <a href="javascript:void(0);" class="icon a" onclick="hamborger()">
                        <i class="fa fa-bars"></i></a>
                      </div>
                </nav>
                  <div class="user">
                    <div class="topnav a"id="myTopnav">
                    <a href="studentlogin.php"class="a"><span class="glyphicon glyphicon-log-in a"></span> LOGIN</a>
                        <a href="register.php"class="a"><span class="glyphicon glyphicon-user"></span> REGISTER</a> 
                  </div>
                  </div>
                </div>                 
                  </header>


                

<style type="text/css">

nav
{
    float: left;
    word-spacing: 30px;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-right: -10px;

}
.user
{
    float: right;
    word-spacing: 30px;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-right: -10px;
}
.ui .hid
{
  display:none;
}
  header
{
    height:110px;
    width: 100%;
    background-color: darkslategray;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 14px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover 
{
  background-color: #ddd;
  color: black;
}
.topnav a.active
{
  background-color: #04AA6D;
  color: white;
}
.topnav .icon 
{
  display: none;
}

@media screen and (max-width:1100px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 1100px) {
  .topnav.responsive {position: relative;}
  header
  {
    height:auto;
    padding-bottom:40px;
  }
  .container-fluid
  {
    padding-bottom:0px;
    padding-left:0px;
    padding-right:0px;
  }
  .ui .hid{
    display: inline;
  }
  .user
  {
    display: none;
  }
  nav
  {
    width:100%;
    background-color: #1a2b2bc2;
  }
  .navbar-header{
    top: -15px;
    display: flex;
    justify-content: center;
    align-items:center;
    height:120px;
    width: 100%;
    position:relative;
  }
  .logo
  {
    height: 90px;
    top:-20px;
  }
  .navbar-brand
  {
    position:absolute;

    bottom:-10px;
    left:0;
    width:100%;
    text-align: center;
  }
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    background-color: rgba(0,0,0,0.7);
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

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
<?php

?>