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
	}// if
	// Start here Dashboard For @administrator Editable or anythings
	elseif(!empty($_SESSION['feb_wp_get_current_user_id'])){
		// all server and connection information from wp-config.php
		$servername = $_SESSION['feb_host']; // Server/Host Name from wp config
		$dbusername = $_SESSION['feb_db_user_name']; // Database User Name from wp config
		$dbpassword = $_SESSION['feb_db_user_password']; // Database Password from wp config
		$dbname = $_SESSION['feb_db_name']; // Database Name from wp from wp config
		$tprefix = $_SESSION['feb_db_table_prefix']; // Tabel prefix from wp config

		// Declare data
		$feb_table_name_user_information = "feb_user_information"; // table name feb user information
		$tprefix_feb_user_information = $tprefix.$feb_table_name_user_information; // Table Name with prefix user information 

		// Create connection
		$feb_db_connection = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
		// Check connection
		if (!$feb_db_connection) {
		    die("Connection Failed..!<br><b>Problem: </b> " . mysqli_connect_error());
		}
	}// elseif
 ?>