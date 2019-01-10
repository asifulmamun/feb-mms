<?php 
/*
	Here is all user fuction
*/

	// feb id check
	function feb_user_id_check($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'wp_user_id'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
		$result = mysqli_query($feb_db_connection,$sql);
		$count = mysqli_num_rows($result);
		return $count;
	} // function feb_user_id_check

	// get wp username from wordpress
	function feb_wp_get_username($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix; // table name with prefix
		$table = $tprefix.'users'; // get table prefix and users table and make full table
		$select_column_name_search_data = 'user_login'; // column name which is need result to out or get data
		$column_name_key_1 = 'ID'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $table WHERE $column_name_key_1=$wp_user_id";
		$result = $feb_db_connection->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
				$feb_wp_get_username = $row["user_login"];
				return $feb_wp_get_username;
			} // while
		} // if		 
	} // function feb_wp_get_username

	// get passport number
	function feb_get_user_passport_number($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'passport_number'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					echo $row["passport_number"];
				} // while
			} // if 
	} // function feb_get_user_passport_number








 ?>