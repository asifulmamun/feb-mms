<?php 
/*
	This file is connection with database and all configuration included here.
*/

	$servername = "localhost"; // Server/Host Name
	$username = "root"; // Database User Name
	$password = ""; // Database Password
	$dbname = "nrbrms"; // Database Table Name
	$tprefix = "nrb_";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());

	}
 ?>