</div>

<div class="notice" id="c1">
<?php
    if(isset($_SESSION["username"])) {
      echo 'User guidelines:- <br><br>';
      echo '• You can find all your learning materials easily in one place. <br><br>';
      echo '• Once you log in you can keep logged in until you decide to log out. <br><br>';
      echo "• Keep your user name confidential. <br><br>";
      echo '• Help us to make Mal Koha better by giving your honest comments & suggestions <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZLsowJEB8SoPd3BBXbdA6u2-fkS9Kqg5SVkfqLFP6FCpvmQ/viewform">here...</a><br><br>';
      //echo '<a href="contents/subpage1.php">2nd page</a>';      
    } else {
        echo 'First, You should <a href="login.php">login...</a>';
    }
?>
</div>
<div class="margin"></div>

<!--<footer>
<br>
About Us <br> <a href="mailto:rajaratamalkoha@gmail.com">Contact Us</a> <br>
<a href="https://www.facebook.com/profile.php?id=100094072383165&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>  <a href="https://youtube.com/@MalKohaFriendsPVTLTD?si=wEdRjEf1UmJlTZm8"><i class="fa-brands fa-youtube"></i></a>
<h4>© 2023 Mal Koha PVT Ltd</h4>
<h4>All right reserved</h4>
<br>
</footer>-->
<?php
  include_once 'footermain.php';
?>
</html> 

