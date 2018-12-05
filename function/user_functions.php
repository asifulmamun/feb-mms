<?php 
/*
	Here is all user fuction
*/

	// Get
	function feb_get_user_id(){
		global $feb_db_connection;
	    	$temp_feb_dashboard_table_name = $_SESSION['feb_db_table_prefix']."feb_user_information";
			$sql = "SELECT * FROM $temp_feb_dashboard_table_name";
			$result = $feb_db_connection->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
				
			    	echo $row["wp_user_id"]."<br>";
			      
			    
				} // while
			} // if
				 
	} // function feb_get_user_id


	function feb_user_id_check($wp_user_id){
		global $feb_db_connection;

		$sql = "SELECT * FROM `nrb_feb_user_information` WHERE `wp_user_id`='$wp_user_id'";
		$result = mysqli_query($feb_db_connection,$sql);
		$count = mysqli_num_rows($result);
		return $count;
	}






 ?>