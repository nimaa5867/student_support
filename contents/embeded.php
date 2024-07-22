<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../styles.css">
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
    margin:0;
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
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

button {
width: 100%;
background-color: #4CAF50;
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
padding:12px;
font-size:22px;
margin-bottom:10px;
}
/*center video*/
iframe {
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top:20px;
    border-radius:15px;
}

</style>
</head>

<body>

<ul>
  <li><a class="active" href="../index.php">Home</a></li>
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
  
</ul>
    <div class="container" style="margin:20px;">
    </div> 

<!-- This is the body part begin location-->
<!--login checking if not loging redirect indexphp 110-120-->
<div class="notice">
<?php
    if(isset($_SESSION["username"])) {
      echo '<h1>Section of latest videos</h1>';
      //echo 'This is my first site with login...<br>';
    }else{
      header('location:../index.php');
    }
    ?>
  </div>
<div class="kohatext">Functions</div>
<iframe width="70%" height="315" src="https://www.youtube-nocookie.com/embed/mTwmSG59H0Q?si=LTgRIBzGcLHw_jME" frameborder="0" modestbranding="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<div class="kohatext">Thevenin's Theorem</div>
<iframe width="70%" height="315" src="https://www.youtube.com/embed/GBkCwcBLD4Y?si=s1IhCf8j3zSSgHND" frameborder="0" modestbranding="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="kohatext">
Steps<br>
1. Remove Load Resistance (R<sub>L)<br>
2. Find V<sub>th</sub><br>
3. Find R<sub>th</sub> [Voltage source => Short Circuits]<br>
            [Curnent source => Open Circuits]<br>
4. Draw Thevinin's equivalent circuit<br>
5. Find It
</div>

<footer>
<br>
<a href="about.html">About Us</a> <br> <a href="mailto:rajaratamalkoha@gmail.com">Contact Us</a> <br>
<a href="https://www.facebook.com/profile.php?id=100094072383165&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>  <a href="https://youtube.com/@MalKohaFriendsPVTLTD?si=wEdRjEf1UmJlTZm8"><i class="fa-brands fa-youtube"></i></a>
<h4>© 2023 Mal Koha PVT Ltd</h4>
<h4>All right reserved</h4>
<br>
</footer>

</html>