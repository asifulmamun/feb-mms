<?php 
/*
  This is form for user edit ther profile if have permission to for edit
*/

  include ('../header.php');
 ?> <!-- included header -->



<div class="row">
	<form class="col s12" action="edit-profile-update.php" method="post">
		<div class="row">
			<div class="input-field col s12"><p><u><b>Parsonal Information</b></u></p></div>
			<div class="input-field col s6">
			  <i class="material-icons prefix">person</i>
			  <input id="Name" type="text" class="validate">
			  <label for="Name">Name</label>
			</div>
			<div class="input-field col s6">
			  <i class="material-icons prefix">date_range</i>
			  <input name="DateOfBirth" type="text" class="datepicker">
			  <label for="DateOfBirth">Date Of Birth</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
			  <i class="material-icons prefix">person</i>
			  <input id="FathersName" type="text" class="validate">
			  <label for="FathersName">Father's Name</label>
			</div>
			<div class="input-field col s6">
			  <i class="material-icons prefix">person</i>
			  <input id="MothersName" type="text" class="validate">
			  <label for="MothersName">Mother's Name</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">person_outline</i>
				<select>
					<option value="" disabled selected>Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
				<label>Select Gender</label>
			</div>
			<div class="input-field col s6">
				<i class="material-icons prefix">nature_people</i>
				<input id="Relegion" type="text" class="validate">
				<label for="Relegion">Relegion</label>
			</div>
			<div class="input-field col s6">
				<i class="material-icons prefix">map</i>
				<input id="Region" type="text" class="validate">
				<label for="Region">Region</label>
			</div>
			<!-- country selecting option -->
			<div class="input-field col s6">
				<i class="material-icons prefix">place</i>
				<select>
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
			  <input id="email" type="email" class="validate">
			  <label for="email">Email</label>
			</div>
			<div class="input-field col s6">
			  <i class="material-icons prefix">phone</i>
			  <input id="MobileNumber" type="text" class="validate">
			  <label for="MobileNumber">Mobile Number</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
			   <i class="material-icons prefix">near_me</i>
			   <input id="nearestBangladeshMission" type="text" class="validate">
			   <label for="nearestBangladeshMission">Nearest Bangladesh Mission</label>
			</div>
			<div class="input-field col s6">
			  <i class="material-icons prefix">credit_card</i>
			  <input id="NidSmartCardNo" type="text" class="validate">
			  <label for="NidSmartCardNo">NID/Samrt Card No</label>
			</div>
		</div>

		<div class="row">
			<!-- present Address -->
			<div class="input-field col s12">
				<p><u><b>Present Address</b></u></p>
				<div class="row">
					<div class="input-field col s6">
						<input id="pFlanHouseNo" type="text" class="validate">
						<label for="pFlanHouseNo">Flat/House No</label>
					</div>
					<div class="input-field col s6">
						<input id="pRoadNo" type="text" class="validate">
			  			<label for="pRoadNo">Road No</label>
					</div>
					<div class="input-field col s6">
						<input id="pCityTown" type="text" class="validate">
			  			<label for="pCityTown">City/Town</label>
					</div>
					<div class="input-field col s6">
						<input id="pZipPostCode" type="text" class="validate">
			  			<label for="pZipPostCode">Zip/Post Code</label>
					</div>
				</div>
			</div>

			<!-- permanent Address -->
			<div class="input-field col s12">
				<p><u><b>Parmanent Address</b></u></p>
				<div class="row">
					<div class="input-field col s6">
						<input id="peFlatHouseNo" type="text" class="validate">
						<label for="peFlatHouseNo">Flat/House No</label>
					</div>
					<div class="input-field col s6">
						<input id="peRoadNo" type="text" class="validate">
			  			<label for="peRoadNo">Road No</label>
					</div>
					<div class="input-field col s6">
						<input id="peCityTown" type="text" class="validate">
			  			<label for="peCityTown">City/Town</label>
					</div>
					<div class="input-field col s6">
						<input id="peZipPostCode" type="text" class="validate">
			  			<label for="peZipPostCode">Zip/Post Code</label>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<p><u><b>Passport Details</b></u></p>
			<div class="input-field col s6">
			   <i class="material-icons prefix">person_pin</i>
			   <input id="passportNumber" type="text" class="validate">
			   <label for="passportNumber">Passport Number</label>
			</div>
			<div class="input-field col s6">
			  <i class="material-icons prefix">date_range</i>
			  <input id="passportIssueDate" type="text" class="datepicker">
			  <label for="passportIssueDate">Passport Issue Date</label>
			</div>
			<div class="input-field col s6">
			  <i class="material-icons prefix">date_range</i>
			  <input id="passportExpireDate" type="text" class="datepicker">
			  <label for="passportExpireDate">Passport Expire Date</label>
			</div>
		</div>

		<!-- Submit Button -->
		<div class="edit_profile_submit_btn">
			<input class="waves-effect waves-light btn" type="submit" name="submit" value="Submit">
		</div>
	</form> 

</div> <!-- container form row -->
        

 <?php include ('../footer.php'); ?> <!-- included footer -->



