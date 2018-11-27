<?php 
/*
	This page is for user profile
*/
	// include configuration for database connection and other power
	include 'function/connection.php'; // connection
	session_start(); // Start Session
	if(empty($_SESSION['feb_wp_get_current_user'])){
		echo "no id";
	}// if

	// Start here main work
	elseif(!empty($_SESSION['feb_wp_get_current_user'])){




		echo "yes id";
		echo $_SESSION['feb_home'] . "<br>"; 
		echo $_SESSION['power'] . "<br> is her power"; 

	}// elseif

 ?>