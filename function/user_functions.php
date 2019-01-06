<?php 
/*
	Here is all user fuction
*/

		// feb id check
	function feb_user_id_check($wp_user_id){
		global $feb_db_connection;

		$sql = "SELECT `wp_user_id` FROM `nrb_feb_user_information` WHERE `wp_user_id`=$wp_user_id";

		$result = mysqli_query($feb_db_connection,$sql);
		$count = mysqli_num_rows($result);
		return $count;
	} // function feb_user_id_check

	


	// Get user Passport Number
	function feb_get_user_passport_number($wp_user_id){
		global $feb_db_connection;
	    	$temp_feb_dashboard_table_name = $_SESSION['feb_db_table_prefix']."feb_user_information";
			$sql = "SELECT * FROM `nrb_feb_user_information` WHERE `wp_user_id`=$wp_user_id";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
					
					echo $row["wp_user_id"]."<br>";
			    	echo $row["passport_number"]."<br>";
			    	
				} // while
			} // if
				 
	} // function feb_get_user_passport_number





 ?>