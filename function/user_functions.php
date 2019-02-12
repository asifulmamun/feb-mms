<?php 
/*
	Here is all user fuction
*/


/*
	@ Get Data from Wordpress Table

*/

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
				$feb_wp_get_username = $row[$select_column_name_search_data];
				return $feb_wp_get_username;
			} // while
		} // if		 
	} // function feb_wp_get_username

	// get wp email from wordpress
	function feb_wp_get_email($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix; // table name with prefix
		$table = $tprefix.'users'; // get table prefix and users table and make full table
		$select_column_name_search_data = 'user_email'; // column name which is need result to out or get data
		$column_name_key_1 = 'ID'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $table WHERE $column_name_key_1=$wp_user_id";
		$result = $feb_db_connection->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
				$feb_wp_get_username = $row[$select_column_name_search_data];
				return $feb_wp_get_username;
			} // while
		} // if		 
	} // function feb_wp_get_email

	/*
		@ This resutl will show from wp user meta table
		*
		* Documentatio for Results
		*
		// get wp description from User Meta get resutl with this code: <?php echo feb_wp_get_user_description($_SESSION['feb_wp_get_current_user_id'], 'meta_key');

		* meta_key is your meta_key like as description or nickname etc
	*/

	// user meta description
	function feb_wp_get_user_description($wp_user_id, $meta_key){
		global $feb_db_connection; // database connection
		global $tprefix; // table name with prefix
		$table = $tprefix.'usermeta'; // get table prefix and users table and make full table
		$select_column_name_search_data = 'meta_value'; // column name which is need result to out or get data
		$column_name_key_1 = 'user_id'; // which data is exist in this column
		$column_name_key_2 = 'meta_key'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $table WHERE $column_name_key_1='$wp_user_id' AND $column_name_key_2='$meta_key' ";
		$result = $feb_db_connection->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
				$feb_wp_get_username = $row[$select_column_name_search_data];
				return $feb_wp_get_username;
			} // while
		} // if		 
	} // function feb_wp_get_user_description



/*
	@ Get Data from Feb Database

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

	// get Name
	function feb_get_name($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'name'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					echo $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_name
	
	// get country
	function feb_get_country($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'country'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					echo $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_country

	
	




 ?>