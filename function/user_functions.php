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
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_name
	
	// get feb_get_date_of_birth
	function feb_get_date_of_birth($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'date_of_birth'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_date_of_birth

	// get feb_get_fathers_name
	function feb_get_fathers_name($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'fathers_name'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_fathersname

	// get feb_get_mothers_name
	function feb_get_mothers_name($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'mothers_name'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_mothers_name

	// get feb_get_gender
	function feb_get_gender($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'gender'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_gender

	// get feb_get_religion
	function feb_get_religion($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'religion'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_religion

	// get feb_get_region
	function feb_get_region($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'region'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_region

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
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_country

	// get feb_get_email
	function feb_get_email($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'email'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_email

	// get feb_get_mobile
	function feb_get_mobile($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'mobile'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_mobile

	// get feb_get_nearest_bangladeshi_mission
	function feb_get_nearest_bangladeshi_mission($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'nearest_bangladeshi_mission'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_nearest_bangladeshi_mission

	// get feb_get_national_or_smart_id
	function feb_get_national_or_smart_id($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'national_or_smart_id'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_national_or_smart_id


/*
	@ Present Address
*/

	// get feb_get_pr_flat_house_no
	function feb_get_pr_flat_house_no($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'pr_flat_house_no'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_pr_flat_house_no

	// get feb_get_pr_road_no
	function feb_get_pr_road_no($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'pr_road_no'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_pr_road_no

	// get feb_get_pr_city_town
	function feb_get_pr_city_town($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'pr_city_town'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_pr_city_town
	
	// get feb_get_pr_zip_post
	function feb_get_pr_zip_post($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'pr_zip_post'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_pr_zip_post


/*
	@ Parmanent Address
*/

	// get feb_get_pe_flat_house_no
	function feb_get_pe_flat_house_no($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'pe_flat_house_no'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_pe_flat_house_no

	// get feb_get_pe_road_no
	function feb_get_pe_road_no($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'pe_road_no'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_pe_road_no

	// get feb_get_pe_city_town
	function feb_get_pe_city_town($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'pe_city_town'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_pe_city_town
	
	// get feb_get_pe_zip_post
	function feb_get_pe_zip_post($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'pe_zip_post'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_pe_zip_post



/*
	@ Passport Information
*/

	// get feb_get_passport_number
	function feb_get_passport_number($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'passport_number'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_passport_number

	// get feb_get_passport_issue
	function feb_get_passport_issue($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'passport_issue'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_passport_issue

	// get feb_get_passport_expire
	function feb_get_passport_expire($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'passport_expire'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_passport_expire



/*
	@ Get Others Infromtation Pyament etc from feb database
*/
	// get feb_get_reg_fee
	function feb_get_reg_fee($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'reg_fee'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_reg_fee
	
	// get feb_get_certificate_fee
	function feb_get_certificate_fee($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'certificate_fee'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_certificate_fee

	// get permission_edit_profile
	function feb_get_permission_edit_profile($wp_user_id){
		global $feb_db_connection; // database connection
		global $tprefix_feb_user_information; // table name with prefix
		$select_column_name_search_data = 'permission_edit_profile'; // column name which is need result to out or get data
		$column_name_key_1 = 'wp_user_id'; // which data is exist in this column
		$sql = "SELECT $select_column_name_search_data FROM $tprefix_feb_user_information WHERE $column_name_key_1=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					return $row[$select_column_name_search_data];
				} // while
			} // if 
	} // function feb_get_permission_edit_profile

 ?>
