<?php 
/*
  This is form for user edit ther profile if have permission to for edit
*/
  // some required variatble variable
  $pageName = "edit-profile.php"; // page name
  $framework = "materialize"; //framework name for design
  include ('../header.php');

 ?>
 <!--
 	/*
 	* Included Header
	* @header.php
	* This is just header for global page
  */
 -->  
<!-- full container -->
<div class="container">
	
	<div class="row">
		<form class="col s12" action="edit-profile-update.php" method="post">
			<div class="row">
				<div class="input-field col s12"><p><u><b>Parsonal Information</b></u></p></div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">person</i>
				  <input name="name" id="Name" type="text" class="validate">
				  <label for="Name">Name</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">date_range</i>
				  <input name="dateOfBirth" type="text" class="datepicker">
				  <label for="DateOfBirth">Date Of Birth</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
				  <i class="material-icons prefix">person</i>
				  <input name="fathersName" id="FathersName" type="text" class="validate">
				  <label for="FathersName">Father's Name</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">person</i>
				  <input name="mothersName" id="MothersName" type="text" class="validate">
				  <label for="MothersName">Mother's Name</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">person_outline</i>
					<select name="gender">
						<option value="gender" selected>Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select>
					<label>Select Gender</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">nature_people</i>
					<input name="relegion" id="Relegion" type="text" class="validate">
					<label for="Relegion">Relegion</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">map</i>
					<input name="region" id="Region" type="text" class="validate">
					<label for="Region">Region</label>
				</div>
				<!-- country selecting option -->
				<div class="input-field col s6">
					<i class="material-icons prefix">place</i>
					<select name="country">
						<?php 
							$countryJson = file_get_contents("http://country.io/names.json"); // get json
							$countryArray = json_decode($countryJson); // decode json
							foreach ($countryArray as $shortName => $fullName) {
						?>	
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
				  <input name="email" id="email" type="email" class="validate" value="asifulmamun@gmail.com">
				  <label for="email">Email</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">phone</i>
				  <input name="mobileNumber" id="MobileNumber" type="text" class="validate">
				  <label for="MobileNumber">Mobile Number</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
				   <i class="material-icons prefix">near_me</i>
				   <input name="nearestBangladeshMission" id="nearestBangladeshMission" type="text" class="validate">
				   <label for="nearestBangladeshMission">Nearest Bangladesh Mission</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">credit_card</i>
				  <input name="nidSmartCardNo" id="NidSmartCardNo" type="text" class="validate">
				  <label for="NidSmartCardNo">NID/Samrt Card No</label>
				</div>
			</div>

			<div class="row">
				<!-- present Address -->
				<div class="input-field col s12">
					<p><u><b>Present Address</b></u></p>
					<div class="row">
						<div class="input-field col s6">
							<input name="pFlantHouseNo" id="pFlantHouseNo" type="text" class="validate">
							<label for="pFlantHouseNo">Flat/House No</label>
						</div>
						<div class="input-field col s6">
							<input name="pRoadNo" id="pRoadNo" type="text" class="validate">
				  			<label for="pRoadNo">Road No</label>
						</div>
						<div class="input-field col s6">
							<input name="pCityTown" id="pCityTown" type="text" class="validate">
				  			<label for="pCityTown">City/Town</label>
						</div>
						<div class="input-field col s6">
							<input name="pZipPostCode" id="pZipPostCode" type="text" class="validate">
				  			<label for="pZipPostCode">Zip/Post Code</label>
						</div>
					</div>
				</div>

				<!-- permanent Address -->
				<div class="input-field col s12">
					<p><u><b>Parmanent Address</b></u></p>
					<div class="row">
						<div class="input-field col s6">
							<input name="peFlatHouseNo" id="peFlatHouseNo" type="text" class="validate">
							<label for="peFlatHouseNo">Flat/House No</label>
						</div>
						<div class="input-field col s6">
							<input name="peRoadNo" id="peRoadNo" type="text" class="validate">
				  			<label for="peRoadNo">Road No</label>
						</div>
						<div class="input-field col s6">
							<input name="peCityTown" id="peCityTown" type="text" class="validate">
				  			<label for="peCityTown">City/Town</label>
						</div>
						<div class="input-field col s6">
							<input name="peZipPostCode" id="peZipPostCode" type="text" class="validate">
				  			<label for="peZipPostCode">Zip/Post Code</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<p><u><b>Passport Details</b></u></p>
				<div class="input-field col s6">
				   <i class="material-icons prefix">person_pin</i>
				   <input name="passportNumber" id="passportNumber" type="text" class="validate">
				   <label for="passportNumber">Passport Number</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">date_range</i>
				  <input name="passportIssueDate" id="passportIssueDate" type="text" class="datepicker">
				  <label for="passportIssueDate">Passport Issue Date</label>
				</div>
				<div class="input-field col s6">
				  <i class="material-icons prefix">date_range</i>
				  <input name="passportExpireDate" id="passportExpireDate" type="text" class="datepicker">
				  <label for="passportExpireDate">Passport Expire Date</label>
				</div>
			</div>

			<!-- Submit Button -->
			<div class="edit_profile_submit_btn">
				<input class="waves-effect waves-light btn" type="submit" name="submit" value="Submit">
			</div>
		</form> 

	</div> <!-- .row -->


<!-- Full Container End -->
</div> <!-- .container -->
<!--
	* Included Footer
	* @footer.php
	* This is just footer for global page
 -->
<?php include ('../footer.php'); ?> <!-- included footer -->



