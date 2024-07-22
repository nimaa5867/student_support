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
        <link rel="stylesheet" href="styles1.css" />
        <link rel="icon" type="image/x-icon" href="../images/titleimg.jpg">
        <script src="script.js" defer></script>
        <script
            src="https://kit.fontawesome.com/d47dffcf4c.js"
            crossorigin="anonymous"
        ></script>
        <script src="https://kit.fontawesome.com/4dc862254d.js" crossorigin="anonymous"></script>
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
                    echo '<li style="float:right"><a href="login.php">login</a></li>';
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
                    header('location:../index.php');
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
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbNK8GKW_8U-wY8K1OWfKOnv"
                                    ><div id="content-names">
                                        <div>Introduction</div>
                                    </div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbO45oS4dyY-7-PrdDyGt6k3"
                                    ><div id="content-names">Dimensions and Units</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbNdyScfJ8umunVm5aHrHhqU"
                                    ><div id="content-names">Linear Motion </div></a
                                >
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
                                <a href="https://youtube.com/playlist?list=PLed4Ta-AnBbNwb8a4mYAnQMlww_98lQvY&si=wzTO4b-X8biMxlRc"
                                    ><div id="content-names">Intensive</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbMQZx5RmGb2bibz63x11-xM"
                                    ><div id="content-names">Linear Algebra</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbM2Wffi6trCgwZ8fMpKSpSg"
                                    ><div id="content-names">Exponents & Log:</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbPgvWdt90UzrGZXD1XFNB1-"
                                    ><div id="content-names">Set and Logic</a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbNJsdSA2-AHBs2yLt5du6zY"
                                    ><div id="content-names">Functions and Their Graphs</a
                                >
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
                            <label for="third"><h3>English</h3></label>
                            <div class="content">  
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbP2GuSsNUZlD8P60GENINNO"
                                    ><div id="content-names">Mr.Shantha Kumara</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbNoblqWFcEOrNzBSJeqqwCv"
                                    ><div id="content-names">Mr.P.L.N.Abeywardhana</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbNgQUqp7Nb3S1YQdFIb_WFb"
                                    ><div id="content-names">Ms.Thishara Rajapaksha</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbMK-bLmBpwAOunYIUwK-9TM"
                                    ><div id="content-names">Ms.Tharindra Abeynayake </div></a
                                >
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
                            <label for="fourth"><h3>Electronics</h3></label>
                            <div class="content">
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbOHBPJ72UpfnRmM_mCWUnwH"
                                    ><div id="content-names">Introduction</div></a
                                >
                                <!--<a href="#"
                                    ><div id="content-names">Slides</div></a
                                >
                                <a href="#"
                                    ><div id="content-names">Notes</div></a
                                >-->
                            </div>
                        </li>
                    </ul>

                    <ul class="accordion">
                        <li>
                            <input
                                type="checkbox"
                                name="accordion"
                                id="fifth"
                            />
                            <label for="fifth"><h3>Computer Programming</h3></label>
                            <div class="content">
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbP1E2cnVeXjiHzBxbpKgO5X"
                                    ><div id="content-names">Introduction</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbOnmnfW9p1rtPobRF0QKE5A"
                                    ><div id="content-names">Algorithm</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbNOCZB3jQoKeHEnmQomgRzd"
                                    ><div id="content-names">Flowcharts</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbPzr6Ws5PFYgxf9dma2jL01"
                                    ><div id="content-names">C Programming Language Practical</a
                                >
                            </div>
                        </li>
                    </ul>

                    <ul class="accordion">
                        <li>
                            <input
                                type="checkbox"
                                name="accordion"
                                id="sixth"
                            />
                            <label for="sixth"><h3>Productivity Tools</h3></label>
                            <div class="content">
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbNW7i8xguTH0e5rDNmbLDXS"
                                    ><div id="content-names">Practical</div></a
                                >
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbPte7uqoXjkvfVzAQjlyKdA"
                                    ><div id="content-names">Theory</div></a
                                >
                                <!--<a href="#"
                                    ><div id="content-names"></div></a
                                >-->
                            </div>
                        </li>
                    </ul>

                    <ul class="accordion">
                        <li>
                            <input
                                type="checkbox"
                                name="accordion"
                                id="seventh"
                            />
                            <label for="seventh"><h3>Personality Dev:</h3></label>
                            <div class="content">
                                <a href="https://www.youtube.com/playlist?list=PLed4Ta-AnBbNIO_ZFGHXnCMURWOqeTN7m"
                                    ><div id="content-names">Recording</div></a
                                >
                                <!--<a href="#"
                                    ><div id="content-names">Theory</div></a
                                >
                                <a href="#"
                                    ><div id="content-names">Notes</div></a
                                >-->
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

    </body>

<footer>
<br>
<a href="about.html">About Us</a> <br> <a href="mailto:rajaratamalkoha@gmail.com">Contact Us</a> <br>
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
