<?php
include_once 'header.php';
?>
<?php
if (isset($_SESSION['useruid'])) { //&& isset($_SESSION['user_name'])) {
}
?>

<div class="margin"></div>
<div class="form">
<form action="includes/changep.inc.php" method="post">
	<h2 class="kohatext">Change Password</h2>
	<?php if (isset($_GET['error'])) { ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
	<?php } ?>

	<?php if (isset($_GET['success'])) { ?>
		<p class="success"><?php echo $_GET['success']; ?></p>
	<?php } ?>

	<input type="text" name="useruid" placeholder="Username">
	<br>

	<!--<label>New Password</label>-->
	<input type="password" name="userpwd" placeholder="New Password">
	<br>

	<input type="password" name="userpwdrepeat" placeholder="Confirm New Password">
	<br>

	<button type="submit">CHANGE</button>
	<h6 class="kohatext"><a href="index.php" class="ca">HOME</a></h6>
</form>
</div>

<?php
include_once 'footermain.php';
?>