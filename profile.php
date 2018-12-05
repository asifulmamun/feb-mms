<?php 
/*
	This page is for User Porfile
*/
	// include configuration for database connection and other power
	include 'function/connection.php'; // connection
	include 'function/user_functions.php'; // connection
	if(empty($_SESSION['feb_wp_get_current_user_id'])){
		header("Location:login.php");
	}// if

	// Start here Dashboard For @administrator Editable or anythings
	elseif(!empty($_SESSION['feb_wp_get_current_user_id'])){
		
			$feb_wp_get_current_user = $_SESSION['feb_wp_get_current_user_id'];
			// $feb_user_id_check = feb_user_id_check($feb_wp_get_current_user_id);

			echo $feb_wp_get_current_user;






		// query for insert data
 		// 	$insert = "SELECT * FROM `nrb_feb_user_information` WHERE 1";
		
		// if (mysqli_query($feb_db_connection, $insert)) {
		// 	echo "inserted";
		// } else {
		// 	echo "<br><br>" . $insert . "<br>" . mysqli_error($feb_db_connection);

		// }

		// mysqli_close($feb_db_connection);




		// feb_get_user_id();

	}// elseif
?>