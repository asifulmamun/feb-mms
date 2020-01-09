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

	// Start here Dashboard For @administrator Editable or do anythings
	elseif(!empty($_SESSION['feb_wp_get_current_user_id'])){
		/*
			$feb_user_id_check is store value 0 or 1.
				if wp user information has stored in feb database result will 1  and stored in variable
				if wp user information has not stored in feb database result will 0 and stored in variable
			@Then this variable will use for true or false mens boolion Algebra
		*/
		$feb_user_id_checks = feb_user_id_check($_SESSION['feb_wp_get_current_user_id']); // check this id stored in feb user table - if user stored result true or false with count 0 or 1

		// if wp_user_id is not exist in database return 0 and insert id with this condition
		if ($feb_user_id_checks == 0) {
			$feb_wp_get_current_user_id = $_SESSION['feb_wp_get_current_user_id']; // declare current user id in variable
			$feb_wp_get_username = feb_wp_get_username($_SESSION['feb_wp_get_current_user_id']);// wp current user name
			$feb_wp_get_email = feb_wp_get_email($_SESSION['feb_wp_get_current_user_id']);// wp current user email
			$passport_number = feb_wp_get_email($_SESSION['feb_wp_get_current_user_id']);// default passport number (email for unique db customer can change it from edit profile)
			$national_or_smart_id = feb_wp_get_email($_SESSION['feb_wp_get_current_user_id']);// default national or smart Id (email for unique db customer can change it from edit profile)
			$permission_edit_profile = 1; // default first time edit permission for her profile
			echo "need to insert data <br>";
			// query for insert data - user id in data base
	 		$insert = "INSERT INTO $tprefix_feb_user_information (`wp_user_id`,`username`,`email`,`permission_edit_profile`,`passport_number`,`national_or_smart_id`) VALUES ($feb_wp_get_current_user_id, '$feb_wp_get_username', '$feb_wp_get_email', '$permission_edit_profile', '$passport_number', '$national_or_smart_id')";
			
			if (mysqli_query($feb_db_connection, $insert)) {
				echo "inserted";
				// header('Location:profile.php');
			} else {
				echo "Data is not inserted. Error:";
			} // else

		  // if wp_user_id exist in data base return 1 in variable: $feb_user_id_checks and work this elsif condition
		} elseif ($feb_user_id_checks == 1) {

			/*
				include Porfile Templete of User
			*/
			include 'template/profile_template.php';


		} // elseif
			
	}// elseif !empty $_SESSION['feb_wp_get_current_user_id']
?>
