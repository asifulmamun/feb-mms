<?php 
/*
	This page is for user profile
*/
	// include configuration for database connection and other power
	include 'function/connection.php'; // connection
	session_start(); // Start Session
	if(empty($_SESSION['wp_get_current_user'])){
		echo "no id";
	}

elseif(!empty($_SESSION['wp_get_current_user'])){
echo "yes id";
$_SESSION['home'];

}



 ?>