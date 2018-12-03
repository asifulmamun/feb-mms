<?php 
/*
	This file is connection with database and all configuration included here.
*/
	session_start(); // Start Session

	/*
		@ Database Connection and Configuratin Start from here.
	*/
	if(empty($_SESSION['feb_wp_get_current_user_id'])){
		// header('Location:profile.php');
		die ("Login Problem...!<br>");
	}// if
	// Start here Dashboard For @administrator Editable or anythings
	elseif(!empty($_SESSION['feb_wp_get_current_user_id'])){
		$servername = $_SESSION['feb_host']; // Server/Host Name
		$dbusername = $_SESSION['feb_db_user_name']; // Database User Name
		$dbpassword = $_SESSION['feb_db_user_password']; // Database Password
		$dbname = $_SESSION['feb_db_name']; // Database Table Name
		$tprefix = $_SESSION['feb_db_table_prefix'];

		// Create connection
		$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection Failed..!<br><b>Problem: </b> " . mysqli_connect_error());
		}
		elseif ($conn) {
			echo "connection okk <br>";
		}
	}// elseif
 ?>