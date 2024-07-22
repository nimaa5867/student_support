<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
        <title>Mal Koha</title>
        <link rel="stylesheet" href="../contents/styles1.css" />
        <link rel="icon" type="image/x-icon" href="../images/titleimg.jpg">
        <script src="script.js" defer></script>
        <script
            src="https://kit.fontawesome.com/d47dffcf4c.js"
            crossorigin="anonymous"
        ></script>

        <style>
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
            </style>
            </head>
            
            <body>
            
            <ul>
              <li><a class="active" href="../index.php">Home</a></li>

              <li style="float:right">
                <?php
                if(isset($_SESSION["username"])) {
                  echo ' <li style="float:right"><a href="#">'.$_SESSION["username"].'</a></li>';
                  echo ' <li style="float:right"><a href="../includes/logout.inc.php">Logout</a></li>';
                  
                } else {
                    echo '<li style="float:right"><a href="../login.php">login</a></li>';
                }
                ?>
              
            </ul>
                <div class="container" style="margin:20px;">
                </div> 
            
            <!-- This is the body part begin location-->
            <!--login checking if not loging redirect indexphp 110-120-->
            <div class="notice-blue">
            <?php
                if(isset($_SESSION["username"])) {
                  echo 'Helloo 1...<br><br>';
                  echo 'This is my first site with login...<br>';
                }else{
                   // header('location:../index.php');
                   echo'This file access can only for you';
                  }
            ?>
            </div>

<!--css cards begin-->

            <div class="courses">
                <div class="subjects">
                    <ul class="accordion">
                        <li>
                            <input
                                type="checkbox"
                                name="accordion"
                                id="first"
                            />
                            <label for="first"><h3>Physics</h3></label>
                            <div class="content">
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbOkRHteg7-3dpY1yaEkiOhi"
                                    ><div id="content-names">
                                        <div>Dimensions and Units</div>
                                    </div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbOIbg8RVSbpdvTLrTz6i8l2"
                                    ><div id="content-names">Linear Motion</div></a
                                >
                                <!--<a href="#"
                                    ><div id="content-names">Test</div></a
                                >-->
                            </div>
                        </li>
                    </ul>

                    <ul class="accordion">
                        <li>
                            <input
                                type="checkbox"
                                name="accordion"
                                id="second"
                            />
                            <label for="second"><h3>Maths</h3></label>
                            <div class="content">
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbMSFluwqGpIx5md3TnTHXO0"
                                    ><div id="content-names">Trigonometry</div></a
                                >
                                <!--<a href="#"
                                    ><div id="content-names">Test</div></a
                                >
                                <a href="#"
                                    ><div id="content-names">Test</div></a
                                >-->
                            </div>
                        </li>
                    </ul>

                    <ul class="accordion">
                        <li>
                            <input
                                type="checkbox"
                                name="accordion"
                                id="third"
                            />
                            <label for="third"><h3>Electronics</h3></label>
                            <div class="content">
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbMqxjbrP3D7adun-N4YjBOw"
                                    ><div id="content-names">Recordings</div></a
                                >
                                <!--<a href="#"
                                    ><div id="content-names">Test</div></a
                                >
                                <a href="#"
                                    ><div id="content-names">Test</div></a
                                >-->
                            </div>
                        </li>
                    </ul>

                    <ul class="accordion">
                        <li>
                            <input
                                type="checkbox"
                                name="accordion"
                                id="fourth"
                            />
                            <label for="fourth"><h3>Materials</h3></label>
                            <div class="content">
                                <a href="https://drive.google.com/drive/folders/1AISyeBs4u79ora_lZAwbMeAgFXCaPegw"
                                    ><div id="content-names">Maths</div></a
                                >
                                <a href="https://drive.google.com/drive/folders/1vupxnijJPgh_74OlNsIfCdhaU43Uns15"
                                    ><div id="content-names">Physics</div></a
                                >
                                <!--<a href="#"
                                    ><div id="content-names">Test</div></a
                                >-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

    </body>

<footer>
<br>
<a href="../contents/about.html">About Us</a> <br> <a href="mailto:rajaratamalkoha@gmail.com">Contact Us</a> <br>
<a href="https://www.facebook.com/profile.php?id=100094072383165&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>  <a href="https://youtube.com/@MalKohaFriendsPVTLTD?si=wEdRjEf1UmJlTZm8"><i class="fa-brands fa-youtube"></i></a>
<h4>© 2023 Mal Koha PVT Ltd</h4>
<h4>All right reserved</h4>
<br>
</footer>

<!--script part-->
<script>
const togglebutton = document.getElementsByClassName("toggle-button")[0];
const navbarlinks = document.getElementsByClassName("navbar-links")[0];

togglebutton.addEventListener("click", () => {
navbarlinks.classList.toggle("active");
});
</script>
    
</html>
