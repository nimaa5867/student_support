<?php

if (!isset($_SESSION['useruid'])) { //&& isset($_SESSION['username'])) {

	include "dbh.inc.php";
	require_once 'functions.inc.php';

	if (								
		isset($_POST['useruid']) && isset($_POST['userpwd'])
		
	) {

		$op = validate($_POST['useruid']);//username
		$np = validate($_POST['userpwd']);
		$c_np = validate($_POST['userpwdrepeat']);
		 
		if (empty($op)) {
			header("Location:../forgot-password.php?error=Username is required");
			exit();
		} else if (empty($np)) {
			header("Location:../forgot-password.php?error=New Password is required");
			exit();
		} else if ($np !== $c_np) {
			header("Location:../forgot-password.php?error=The confirmation password  does not match");
			exit();
		} else {
			// hashing the password
			$op = $op;
			$np = password_hash($np,PASSWORD_DEFAULT);
			// $id = $_SESSION['id'];

			$sql = "SELECT usersPwd
                FROM users WHERE 
                usersUid='$op'";
			$result = mysqli_query($conn, $sql);
			if ($result->num_rows > 0) {
				
					$sql_2 = "UPDATE users
        	          SET usersPwd='$np'
        	          WHERE usersUid='$op'";
					$results=mysqli_query($conn, $sql_2);
					if ($results === TRUE) {
					header("Location:../forgot-password.php?success=Your password has been changed successfully");//change-password.php?success=
					exit();
					}else{
						header("Location:../forgot-password.php?error=Incorrect password");
					}
					
			} else {
				header("Location:../forgot-password.php?error=Your username is invalid");
				exit();
			}
		}
	}
} else {
	header("Location:../forgot-password.php");
	exit();
}
