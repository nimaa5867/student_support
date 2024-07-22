<?php
include_once 'header.php';
?>
<div class="margin"></div>
<h1 class="logintext">Login</h1>
<h1 class="kohatext">Malkoha & Friends</h1>

<div class="form">
    <form action="includes/login.inc.php" method="post">

        <input type="text" id="fname" name="uid" placeholder="Username">
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <button name="submit" type="submit">Login</button>
    </form>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo '<div class="error">Fill in the all fields</div>';
        } elseif ($_GET["error"] == "wronglogin") {
            echo '<div class="error">Invalid details</div>';
        } elseif ($_GET["error"] == "stmfailed") {
            echo '<div class="error">Something went wrong</div>';
        } elseif ($_GET["error"] == "none") {
            echo '<div class="error">Account created</div>';
        }
    }
    ?>

    <p><h2 class="kohatext"><a href="forgot-password.php">Forgot password.</a></h2></p> 
    <p><h2 class="kohatext"><a href="malkoha/malkoha.php">Malkoha Maths & P6</a></h2></p> 

</div>

<?php
include_once 'footermain.php';
?>