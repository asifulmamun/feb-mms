<?php
	
	// Check Page Method
	if ($_SERVER['REQUEST_METHOD'] !== "POST") {
		header("Location: edit-profile.php");
		die();
	}
	
	// include configuration for database connection and other power
	include '../function/connection.php'; // connection
	include '../function/user_functions.php'; // include user function

	$feb_wp_get_current_user_id = $_SESSION['feb_wp_get_current_user_id']; // declare current user id in variable
	$feb_user_id_checks = feb_user_id_check($_SESSION['feb_wp_get_current_user_id']); // check this id stored in feb user table - if user stored result true or false with count 0 or 1

	// if wp_user_id is not exist in database return 0 and insert id with this condition
	if ($feb_user_id_checks == 1) {

		/*
			@Hidden Input
		*/
		$permission_edit_profile = 0; // Passport Number

		/*
			@Personal Information
		*/
		$name = $_POST['name']; // Name
		$fathersName = $_POST['fathersName']; // Father's Name
		$mothersName = $_POST['mothersName']; // Mother's Name
		$gender = $_POST['gender']; // Gender
		$relegion = $_POST['relegion']; // Relegion
		$region = $_POST['region']; // Region
		$country = $_POST['country']; // Country
		$email = $_POST['email']; // Email
		$mobileNumber = $_POST['mobileNumber']; // Mobile Number
		$nearestBangladeshMission = $_POST['nearestBangladeshMission']; // Nearest Bangladeshi Mission
		$nidSmartCardNo = $_POST['nidSmartCardNo']; // NID or Smart Card No

		/*
			@Present Address
		*/
		$pFlantHouseNo = $_POST['pFlantHouseNo']; // Flat/House No
		$pRoadNo = $_POST['pRoadNo']; // Road No
		$pCityTown = $_POST['pCityTown']; // City/Town
		$pZipPostCode = $_POST['pZipPostCode']; // Zip/Post Code

		/*
			@Parmanent Address
		*/
		$peFlatHouseNo = $_POST['peFlatHouseNo']; // Flat/House No
		$peRoadNo = $_POST['peRoadNo']; // Road No
		$peCityTown = $_POST['peCityTown']; // City/Town
		$peZipPostCode = $_POST['peZipPostCode']; // Zip/Post Code

		/*
			@Passport Details
		*/
		$passportNumber = $_POST['passportNumber']; // Passport Number

		/*
			@Convert Date of Birth
		*/
		$get_dateOfBirth = $_POST['dateOfBirth']; // Get from Input
		$convert_dateOfBirth = strtotime($get_dateOfBirth); // Convert Input
		$dateOfBirth = date('Y-m-d',$convert_dateOfBirth); // Date of Birth


		/*
			@Convert Passport Issue Date
		*/
		$get_passportIssueDate = $_POST['passportIssueDate']; // Passport Issue Date
		$convert_passportIssueDate = strtotime($get_passportIssueDate); // Passport Issue Date
		$passportIssueDate = date('Y-m-d',$convert_passportIssueDate); // Passport Issue Date

		/*
			@Convert Passport Expire Date
		*/
		$get_passportExpireDate = $_POST['passportExpireDate']; // Passport Expire Date
		$convert_passportExpireDate = strtotime($get_passportExpireDate); // Passport Expire Date
		$passportExpireDate = date('Y-m-d',$convert_passportExpireDate); // Passport Expire Date

		
			
			$update = "UPDATE $tprefix_feb_user_information SET
				`name`='$name',
				`date_of_birth`='$dateOfBirth',
				`fathers_name`='$fathersName',
				`mothers_name`='$mothersName',
				`gender`='$gender',
				`religion`='$relegion',
				`region`='$region',
				`country`='$country',
				`mobile`='$mobileNumber',
				`nearest_bangladeshi_mission`='$nearestBangladeshMission',
				`national_or_smart_id`='$nidSmartCardNo',
				`pr_flat_house_no`='$pFlantHouseNo',
				`pr_road_no`='$pRoadNo',
				`pr_city_town`='$pCityTown',
				`pr_zip_post`='$pZipPostCode',
				`pe_flat_house_no`='$peFlatHouseNo',
				`pe_road_no`='$peRoadNo',
				`pe_city_town`='$peCityTown',
				`pe_zip_post`='$peZipPostCode',
				`passport_number`='$passportNumber',
				`passport_issue`='$passportIssueDate',
				`passport_expire`='$passportExpireDate'
				WHERE `wp_user_id`='$feb_wp_get_current_user_id'";

			if (mysqli_query($feb_db_connection, $update)) {
			?>
				<script type="text/javascript">alert("Your Information have saved.");</script>
			<?php
				header("Location: profile-update-success.php");
			} else {
			    echo "Error updating record: " . mysqli_error($conn);
			} // If Update Msg

	} // User ID exist if feb_user_id_checks

 ?>