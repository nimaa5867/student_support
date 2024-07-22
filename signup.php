<?php
    include_once 'header.php';
?>
        <div class="form">
            <h1>Malkoha & Friends</h1> 
        <form action="includes/signup.inc.php" method="post">

        <input type="text" id="fname" name="name" placeholder="Name">
        <input type="text" id="lname" name="email" placeholder="Email">
        <input type="text" id="lname" name="uid" placeholder="Username">
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password">
        <button name="submit" type="submit">Register</button>
    </form>

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo'<div class="error">Fill in the all fields</div>';
            }elseif ($_GET["error"] == "invaliduid"){
                echo'<div class="error">Invalid username</div>';
            }elseif ($_GET["error"] == "invalidemail"){
                echo'<div class="error">Invalid Email</div>';
            }elseif ($_GET["error"] == "passwordsdontmatch"){
                echo'<div class="error">Password not matching</div>';
            }elseif ($_GET["error"] == "stmfailed"){
                echo'<div class="error">Something went wrong</div>';
            }elseif ($_GET["error"] == "none"){
                echo'<div class="error">Account created</div>';
            }elseif ($_GET["error"] == "usernametaken"){
                echo'<div class="error">Username / E mail already used</div>';
            }
        }
    ?>
    <p>Already have an account?  <a href="login.php">Login.</a></P>
</div>
    
<?php
    include_once 'footer.php';
?>