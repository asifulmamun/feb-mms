<?php 
/*
	This page is for Admin Dashboard
*/
	// include configuration for database connection and other power
	include '../function/connection.php'; // connection
	if(empty($_SESSION['feb_wp_get_current_user_id'])){
		// header('Location:profile.php');
		echo "no id so no permit to dashboard<br>";
	}// if

	// Start here Dashboard For @administrator Editable or anythings
	elseif(!empty($_SESSION['feb_wp_get_current_user_id']) && $_SESSION['feb_power'] == "administrator" ){
		include 'templates/dashboard_template.php'; // Include Template
	}// elseif
?>