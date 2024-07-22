<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" type="image/x-icon" href="images/titleimg.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
    <script src="https://kit.fontawesome.com/4dc862254d.js" crossorigin="anonymous"></script>
    <title>Mal Koha</title>
<style>
a{
text-decoration:none;
color:white;
}
a:hover{
  color:#00FFFF;
}
    *{
        margin:0%;
    }
    /*menu bar*/
ul {        
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: "Exo 2", sans-serif;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
    /*forms*/
    input[type=text], input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px blue;
    border-radius: 6px;
    box-sizing: border-box;
    border-radius:10px;
    outline-color: #475ce2;
    outline-style: solid;
    outline-width: 3px;
    }

    button {
    width: 100%;
    background-color: #475ce2;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    .form{
      width:70%;
      margin-left:auto;
      margin-right:auto;
      text-align:center;
    }
/*error display*/
.error{
    color : red;
    border : 1px solid red;
    padding:8px;
    font-size:16px;
    margin-bottom:10px;
}
.success{
    color : white;
    border : 1px solid blue;
    padding:8px;
    font-size:16px;
    margin-bottom:10px;
}

</style>
</head>

<body oncontextmenu="return false;" > <!--this is right click disable body tag-->
<!--loading animation-->
<div class="loader-wrapper">
  <span class="loader"><span class="loader-inner"></span></span>
</div>

<script>
            window.onload = function(){
      setTimeout(function(){
          var loader = document.getElementsByClassName("loader-wrapper")[0];
          loader.style.display = "none";
      },3000)
  }
 </script>
<!--end-->

<div class="powr-popup" id="e06986c3_1699455721"></div><script src="https://www.powr.io/powr.js?platform=html"></script>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <!--<li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>-->
  <li style="float:right">
    <?php
    if(isset($_SESSION["username"])) {
      echo ' <li style="float:right"><a href="#">'.$_SESSION["username"].'</a></li>';
      echo ' <li style="float:right"><a href="includes/logout.inc.php">Logout</a></li>';
      
    } else {
        echo '<li style="float:right"><a href="login.php">login</a></li>';
    }
    ?>
  </li>
</ul>



<script type="text/javascript"> //this is right click disable js
function disableRightClick() 
{ 
alert("Sorry, right click is not allowed !!"); 
return false; 
} 
</script> 
<body oncontextmenu=" return disableRightClick();">

    <div class="" style="margin:0px;">