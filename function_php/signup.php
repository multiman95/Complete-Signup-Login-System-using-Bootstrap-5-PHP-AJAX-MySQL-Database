<?php
	include('../database.php');

	$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
	$userEmail = mysqli_real_escape_string($connection, $_POST['userEmail']);
	$phone_number = mysqli_real_escape_string($connection, $_POST['phone_number']);
	$userPass = md5($_POST['userPass']);
	// $confirm_pass = mysqli_real_escape_string($connection, $_POST['confirm_pass']);

	//validation.
	$fetchUsers = "SELECT * FROM `users` WHERE userEmail='$userEmail' LIMIT 1";
	$run_fetchUsers = mysqli_query($connection, $fetchUsers) or die(mysqli_error($connection));
	$countUser = mysqli_num_rows($run_fetchUsers);


	if($countUser == 1){
		echo "<br/><span class='alert alert-danger mt-5'>User already exist</span>";
	}
	else{
		//insert new user into database.
		$insertQuery = "INSERT INTO `users`(`fname`, `lname`, `userEmail`, `phone_no`, 
											`userPass`, `status`, `date_registered`) 
		                VALUES('$firstname', '$lastname', '$userEmail', '$phone_number', 
		            			'$userPass', 1, NOW())";
		$run_Query = mysqli_query($connection, $insertQuery) or die(mysqli_error($connection));

		if($run_Query ==  true){
			echo "<br/><span class='alert alert-success mt-5'>User successfully registered</span>";
		}
		else{
			echo "<br/><span class='alert alert-danger mt-5'Failed to register user.</span>";
		}
	}
?>
