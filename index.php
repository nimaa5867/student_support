<?php
    include_once 'header.php';
?>
    <div class="text">
    <h2>Hello <?php
    if(isset($_SESSION["username"])) {
      echo $_SESSION["username"].'!<br><br>';
      echo' <label id="lblGreetings"></label><br>';//greeting js echo
      echo'<a href="footerpage2.php"><button class="button-green">Explore</button></a><br>';
      echo'<a href="contents/embeded.php"><button class="button-green">Latest Videos</button></a>';
    } else {
        echo ' Welcome to Mal Koha & Friends PVT Ltd ! <br><br>';
        echo' <label id="lblGreetings"></label>';//greeting js echo
    }
    ?></h2>

    <script>//greeting js code
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';

    document.getElementById('lblGreetings').innerHTML =
        '<h2>' + greet + '</h2> and welcome!';
    </script> 
    </div>

<?php
    include_once 'footer.php';
?>