<?php 
/*
	This page is for User Porfile
*/
	// include configuration for database connection and other power
	include 'function/connection.php'; // connection
	include 'function/user_functions.php'; // include user function
	if(empty($_SESSION['feb_wp_get_current_user_id'])){
		header("Location:login.php");
	}// if

	// Start here Dashboard For @administrator Editable or anythings
	elseif(!empty($_SESSION['feb_wp_get_current_user_id'])){
		/*
			$feb_user_id_check is store value 0 or 1.
				if wp user information has stored in feb database result will 1  and stored in variable
				if wp user information has not stored in feb database result will 0 and stored in variable
			@Then this variable will use for true or false mens boolion Algebra
		*/
		$feb_user_id_checks = feb_user_id_check($_SESSION['feb_wp_get_current_user_id']); // check this id stored in feb user table - if user stored result 
		if ($feb_user_id_checks == 0) {
			$feb_wp_get_current_user_id = $_SESSION['feb_wp_get_current_user_id']; // declare current user id in variable
			echo "need insert data " . $feb_wp_get_current_user_id ."<br>";
			// query for insert data
	 		$insert = "INSERT INTO `nrb_feb_user_information`(`wp_user_id`) VALUES ($feb_wp_get_current_user_id)";
			
			if (mysqli_query($feb_db_connection, $insert)) {
				echo "inserted";
				header('Location:profile.php');
			} else {
				echo "<br><br>" . $insert . "<br>" . mysqli_error($feb_db_connection);

			} // else
			mysqli_close($feb_db_connection);
		} elseif ($feb_user_id_checks == 1) {
			echo "include profile template" . "<br>";
			echo feb_get_user_passport_number($_SESSION['feb_wp_get_current_user_id']);
		} // elseif
			
	}// elseif
?>