<?php 
/*
  This is form for user edit ther profile if have permission to for edit
*/
  // some required variatble variable
  $pageName = "edit-profile.php"; // page name
  $framework = "materialize"; //framework name for design
  

  	// include configuration for database connection and other power
	include '../function/connection.php'; // connection
	include ('../header.php'); // header
	include '../function/user_functions.php'; // include user function

 ?>
 <!--
 	/*
 	* Included Header
	* @header.php
	* This is just header for global page
  */
 -->  
<!-- full container -->
<br><br><br>
<div class="container">
	
	<div class="row">

		<div class="row">
			<div class="input-field col s6">
			   <img
		        src="http://0.gravatar.com/avatar/<?php echo md5(feb_wp_get_email($_SESSION['feb_wp_get_current_user_id'])); ?>?s=200"
		        alt="<?php echo feb_get_name($_SESSION['feb_wp_get_current_user_id']); ?>"
		        data-position="bottom"
		        data-tooltip="Click this image for view big size Image."
		        class="materialboxed tooltipped"
		        style="width: 60px;height: auto;border-radius: 50%;"><br>
		        <a class="waves-effect waves-light btn" href="https://en.gravatar.com/">Edit Your Profile Picture.</a>
			</div>
			<div class="input-field col s6">
				<h5><u><b>Change Photo Process:</b></u></h5>
				<p>
					First Sign Up or Login In Gravature Then Upload your high quality Image. Then you can use this image any Wbsite.
				</p>
				<p>
					Then you will not need re upload your another web site. Because this is global profile picture system.
				</p>
			</div>
		</div>

		<form class="col s12" action="edit-profile-update.php" method="post">
			<div class="row">
				<div class="input-field col s12"><p><u><b>Parsonal Information</b></u></p></div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">person</i>
				  <input name="name" id="Name" type="text" class="validate" value="<?php echo feb_get_name($_SESSION['feb_wp_get_current_user_id']); ?>">
				  <label for="Name">Name</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">date_range</i>
				  <input name="dateOfBirth" type="text" class="datepicker" value="<?php
			            /*
			              @Convert Date of Birth
			            */
			            $get_dateOfBirth = feb_get_date_of_birth($_SESSION['feb_wp_get_current_user_id']); // Get from Input
			            $convert_dateOfBirth = strtotime($get_dateOfBirth); // Convert Input
			            echo $dateOfBirth = date('M d, Y',$convert_dateOfBirth); // Date of Birth
		          	?>">
				  <label for="DateOfBirth">Date Of Birth</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
				  <i class="material-icons prefix">person</i>
				  <input name="fathersName" id="FathersName" type="text" class="validate" value="<?php echo feb_get_fathers_name($_SESSION['feb_wp_get_current_user_id']); ?>">
				  <label for="FathersName">Father's Name</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">person</i>
				  <input name="mothersName" id="MothersName" type="text" class="validate" value="<?php echo feb_get_mothers_name($_SESSION['feb_wp_get_current_user_id']); ?>">
				  <label for="MothersName">Mother's Name</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">person_outline</i>
					<select name="gender">
						<option value="<?php echo feb_get_gender($_SESSION['feb_wp_get_current_user_id']); ?>" selected><?php echo feb_get_gender($_SESSION['feb_wp_get_current_user_id']); ?></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select>
					<label>Select Gender</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">nature_people</i>
					<input name="religion" id="Religion" type="text" class="validate" value="<?php echo feb_get_religion($_SESSION['feb_wp_get_current_user_id']); ?>">
					<label for="Religion">Religion</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">map</i>
					<input name="region" id="Region" type="text" class="validate" value="<?php echo feb_get_region($_SESSION['feb_wp_get_current_user_id']); ?>">
					<label for="Region">Region</label>
				</div>
				<!-- country selecting option -->
				<div class="input-field col s6">
					<i class="material-icons prefix">place</i>
					<select name="country">
						<?php 
							$countryJson = '{"BD": "Bangladesh", "BE": "Belgium", "BF": "Burkina Faso", "BG": "Bulgaria", "BA": "Bosnia and Herzegovina", "BB": "Barbados", "WF": "Wallis and Futuna", "BL": "Saint Barthelemy", "BM": "Bermuda", "BN": "Brunei", "BO": "Bolivia", "BH": "Bahrain", "BI": "Burundi", "BJ": "Benin", "BT": "Bhutan", "JM": "Jamaica", "BV": "Bouvet Island", "BW": "Botswana", "WS": "Samoa", "BQ": "Bonaire, Saint Eustatius and Saba ", "BR": "Brazil", "BS": "Bahamas", "JE": "Jersey", "BY": "Belarus", "BZ": "Belize", "RU": "Russia", "RW": "Rwanda", "RS": "Serbia", "TL": "East Timor", "RE": "Reunion", "TM": "Turkmenistan", "TJ": "Tajikistan", "RO": "Romania", "TK": "Tokelau", "GW": "Guinea-Bissau", "GU": "Guam", "GT": "Guatemala", "GS": "South Georgia and the South Sandwich Islands", "GR": "Greece", "GQ": "Equatorial Guinea", "GP": "Guadeloupe", "JP": "Japan", "GY": "Guyana", "GG": "Guernsey", "GF": "French Guiana", "GE": "Georgia", "GD": "Grenada", "GB": "United Kingdom", "GA": "Gabon", "SV": "El Salvador", "GN": "Guinea", "GM": "Gambia", "GL": "Greenland", "GI": "Gibraltar", "GH": "Ghana", "OM": "Oman", "TN": "Tunisia", "JO": "Jordan", "HR": "Croatia", "HT": "Haiti", "HU": "Hungary", "HK": "Hong Kong", "HN": "Honduras", "HM": "Heard Island and McDonald Islands", "VE": "Venezuela", "PR": "Puerto Rico", "PS": "Palestinian Territory", "PW": "Palau", "PT": "Portugal", "SJ": "Svalbard and Jan Mayen", "PY": "Paraguay", "IQ": "Iraq", "PA": "Panama", "PF": "French Polynesia", "PG": "Papua New Guinea", "PE": "Peru", "PK": "Pakistan", "PH": "Philippines", "PN": "Pitcairn", "PL": "Poland", "PM": "Saint Pierre and Miquelon", "ZM": "Zambia", "EH": "Western Sahara", "EE": "Estonia", "EG": "Egypt", "ZA": "South Africa", "EC": "Ecuador", "IT": "Italy", "VN": "Vietnam", "SB": "Solomon Islands", "ET": "Ethiopia", "SO": "Somalia", "ZW": "Zimbabwe", "SA": "Saudi Arabia", "ES": "Spain", "ER": "Eritrea", "ME": "Montenegro", "MD": "Moldova", "MG": "Madagascar", "MF": "Saint Martin", "MA": "Morocco", "MC": "Monaco", "UZ": "Uzbekistan", "MM": "Myanmar", "ML": "Mali", "MO": "Macao", "MN": "Mongolia", "MH": "Marshall Islands", "MK": "Macedonia", "MU": "Mauritius", "MT": "Malta", "MW": "Malawi", "MV": "Maldives", "MQ": "Martinique", "MP": "Northern Mariana Islands", "MS": "Montserrat", "MR": "Mauritania", "IM": "Isle of Man", "UG": "Uganda", "TZ": "Tanzania", "MY": "Malaysia", "MX": "Mexico", "IL": "Israel", "FR": "France", "IO": "British Indian Ocean Territory", "SH": "Saint Helena", "FI": "Finland", "FJ": "Fiji", "FK": "Falkland Islands", "FM": "Micronesia", "FO": "Faroe Islands", "NI": "Nicaragua", "NL": "Netherlands", "NO": "Norway", "NA": "Namibia", "VU": "Vanuatu", "NC": "New Caledonia", "NE": "Niger", "NF": "Norfolk Island", "NG": "Nigeria", "NZ": "New Zealand", "NP": "Nepal", "NR": "Nauru", "NU": "Niue", "CK": "Cook Islands", "XK": "Kosovo", "CI": "Ivory Coast", "CH": "Switzerland", "CO": "Colombia", "CN": "China", "CM": "Cameroon", "CL": "Chile", "CC": "Cocos Islands", "CA": "Canada", "CG": "Republic of the Congo", "CF": "Central African Republic", "CD": "Democratic Republic of the Congo", "CZ": "Czech Republic", "CY": "Cyprus", "CX": "Christmas Island", "CR": "Costa Rica", "CW": "Curacao", "CV": "Cape Verde", "CU": "Cuba", "SZ": "Swaziland", "SY": "Syria", "SX": "Sint Maarten", "KG": "Kyrgyzstan", "KE": "Kenya", "SS": "South Sudan", "SR": "Suriname", "KI": "Kiribati", "KH": "Cambodia", "KN": "Saint Kitts and Nevis", "KM": "Comoros", "ST": "Sao Tome and Principe", "SK": "Slovakia", "KR": "South Korea", "SI": "Slovenia", "KP": "North Korea", "KW": "Kuwait", "SN": "Senegal", "SM": "San Marino", "SL": "Sierra Leone", "SC": "Seychelles", "KZ": "Kazakhstan", "KY": "Cayman Islands", "SG": "Singapore", "SE": "Sweden", "SD": "Sudan", "DO": "Dominican Republic", "DM": "Dominica", "DJ": "Djibouti", "DK": "Denmark", "VG": "British Virgin Islands", "DE": "Germany", "YE": "Yemen", "DZ": "Algeria", "US": "United States", "UY": "Uruguay", "YT": "Mayotte", "UM": "United States Minor Outlying Islands", "LB": "Lebanon", "LC": "Saint Lucia", "LA": "Laos", "TV": "Tuvalu", "TW": "Taiwan", "TT": "Trinidad and Tobago", "TR": "Turkey", "LK": "Sri Lanka", "LI": "Liechtenstein", "LV": "Latvia", "TO": "Tonga", "LT": "Lithuania", "LU": "Luxembourg", "LR": "Liberia", "LS": "Lesotho", "TH": "Thailand", "TF": "French Southern Territories", "TG": "Togo", "TD": "Chad", "TC": "Turks and Caicos Islands", "LY": "Libya", "VA": "Vatican", "VC": "Saint Vincent and the Grenadines", "AE": "United Arab Emirates", "AD": "Andorra", "AG": "Antigua and Barbuda", "AF": "Afghanistan", "AI": "Anguilla", "VI": "U.S. Virgin Islands", "IS": "Iceland", "IR": "Iran", "AM": "Armenia", "AL": "Albania", "AO": "Angola", "AQ": "Antarctica", "AS": "American Samoa", "AR": "Argentina", "AU": "Australia", "AT": "Austria", "AW": "Aruba", "IN": "India", "AX": "Aland Islands", "AZ": "Azerbaijan", "IE": "Ireland", "ID": "Indonesia", "UA": "Ukraine", "QA": "Qatar", "MZ": "Mozambique"}'; // get json
				            $countryJson = utf8_encode($countryJson); // encode utf8
				            $countryArray = json_decode($countryJson); // decode json
							$feb_get_country = feb_get_country($_SESSION['feb_wp_get_current_user_id']);
						?>
						<option value="<?php echo feb_get_country($_SESSION['feb_wp_get_current_user_id']); ?>" selected><?php echo $countryArray->$feb_get_country; ?></option>
						<?php foreach ($countryArray as $shortName => $fullName) { ?>
						<option value="<?php echo $shortName; ?>"><?php echo $fullName; ?></option>
						<?php
							}
						?>
					</select>
					<label>Select Country</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
				  <i class="material-icons prefix">email</i>
				  <input name="email" id="email" type="email" class="validate" value="<?php echo feb_wp_get_email($_SESSION['feb_wp_get_current_user_id']); ?>">
				  <label for="email">Email From Main Dashboard</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">phone</i>
				  <input name="mobileNumber" id="MobileNumber" type="text" class="validate" value="<?php echo feb_get_mobile($_SESSION['feb_wp_get_current_user_id']); ?>">
				  <label for="MobileNumber">Mobile Number</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
				   <i class="material-icons prefix">near_me</i>
				   <input name="nearestBangladeshMission" id="nearestBangladeshMission" type="text" class="validate" value="<?php echo feb_get_nearest_bangladeshi_mission($_SESSION['feb_wp_get_current_user_id']); ?>">
				   <label for="nearestBangladeshMission">Nearest Bangladesh Mission</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">credit_card</i>
				  <input name="nidSmartCardNo" id="NidSmartCardNo" type="text" class="validate" value="<?php echo feb_get_national_or_smart_id($_SESSION['feb_wp_get_current_user_id']); ?>">
				  <label for="NidSmartCardNo">NID/Samrt Card No</label>
				</div>
			</div>

			<div class="row">
				<!-- present Address -->
				<div class="input-field col s12">
					<p><u><b>Present Address</b></u></p>
					<div class="row">
						<div class="input-field col s6">
							<input name="pFlantHouseNo" id="pFlantHouseNo" type="text" class="validate" value="<?php echo feb_get_pr_flat_house_no($_SESSION['feb_wp_get_current_user_id']); ?>">
							<label for="pFlantHouseNo">Flat/House No</label>
						</div>
						<div class="input-field col s6">
							<input name="pRoadNo" id="pRoadNo" type="text" class="validate" value="<?php echo feb_get_pr_road_no($_SESSION['feb_wp_get_current_user_id']); ?>">
				  			<label for="pRoadNo">Road No</label>
						</div>
						<div class="input-field col s6">
							<input name="pCityTown" id="pCityTown" type="text" class="validate" value="<?php echo feb_get_pr_city_town($_SESSION['feb_wp_get_current_user_id']); ?>">
				  			<label for="pCityTown">City/Town</label>
						</div>
						<div class="input-field col s6">
							<input name="pZipPostCode" id="pZipPostCode" type="text" class="validate" value="<?php echo feb_get_pr_zip_post($_SESSION['feb_wp_get_current_user_id']); ?>">
				  			<label for="pZipPostCode">Zip/Post Code</label>
						</div>
					</div>
				</div>

				<!-- permanent Address -->
				<div class="input-field col s12">
					<p><u><b>Parmanent Address</b></u></p>
					<div class="row">
						<div class="input-field col s6">
							<input name="peFlatHouseNo" id="peFlatHouseNo" type="text" class="validate" value="<?php echo feb_get_pe_flat_house_no($_SESSION['feb_wp_get_current_user_id']); ?>">
							<label for="peFlatHouseNo">Flat/House No</label>
						</div>
						<div class="input-field col s6">
							<input name="peRoadNo" id="peRoadNo" type="text" class="validate" value="<?php echo feb_get_pe_road_no($_SESSION['feb_wp_get_current_user_id']); ?>">
				  			<label for="peRoadNo">Road No</label>
						</div>
						<div class="input-field col s6">
							<input name="peCityTown" id="peCityTown" type="text" class="validate" value="<?php echo feb_get_pe_city_town($_SESSION['feb_wp_get_current_user_id']); ?>">
				  			<label for="peCityTown">City/Town</label>
						</div>
						<div class="input-field col s6">
							<input name="peZipPostCode" id="peZipPostCode" type="text" class="validate" value="<?php echo feb_get_pe_zip_post($_SESSION['feb_wp_get_current_user_id']); ?>">
				  			<label for="peZipPostCode">Zip/Post Code</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<p><u><b>Passport Details</b></u></p>
				<div class="input-field col s6">
				   <i class="material-icons prefix">person_pin</i>
				   <input name="passportNumber" id="passportNumber" type="text" class="validate" value="<?php echo feb_get_passport_number($_SESSION['feb_wp_get_current_user_id']); ?>">
				   <label for="passportNumber">Passport Number</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">date_range</i>
				  <input name="passportIssueDate" id="passportIssueDate" type="text" class="datepicker" value="<?php
			            /*
			              @Convert Date of Birth
			            */
			            $get_passport_issue = feb_get_passport_issue($_SESSION['feb_wp_get_current_user_id']); // Get from Input
			            $convert_passport_issue = strtotime($get_passport_issue); // Convert Input
			            echo $passport_issue = date('M d, Y',$convert_passport_issue); // Date of Birth
		          	?>">
				  <label for="passportIssueDate">Passport Issue Date</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">date_range</i>
				  <input name="passportExpireDate" id="passportExpireDate" type="text" class="datepicker" value="<?php
			            /*
			              @Convert Date of Birth
			            */
			            $get_passport_expire = feb_get_passport_expire($_SESSION['feb_wp_get_current_user_id']); // Get from Input
			            $convert_passport_expire = strtotime($get_passport_expire); // Convert Input
			            echo $passport_expire = date('M d, Y',$convert_passport_expire); // Date of Birth
		          	?>">
				  <label for="passportExpireDate">Passport Expire Date</label>
				</div>
			</div>

			<!-- Submit Button -->
			<div class="edit_profile_submit_btn">
				<input class="waves-effect waves-light btn" type="submit" name="submit" value="Submit">
			</div>
		</form> 

	</div> <!-- .row -->

<br><br><br>
<!-- Full Container End -->
</div> <!-- .container -->
<!--
	* Included Footer
	* @footer.php
	* This is just footer for global page
 -->
<?php include ('../footer.php'); ?> <!-- included footer -->