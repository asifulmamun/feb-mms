<?php 
/*
  This is form for user edit ther profile if have permission to for edit
*/

  include ('../header.php');
 ?> <!-- included header -->



<div class="row">
	<form class="col s12" action="edit-profile-update.php" method="post">
		<div class="row">
			<div class="input-field col s6">
			  <input id="last_name" type="text" class="validate">
			  <label for="last_name">Name</label>
			</div>
			<div class="input-field col s6">
			  <input name="date_of_birth" type="text" class="datepicker">
			  <label for="last_name">Date Of Birth</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
			  <input id="last_name" type="text" class="validate">
			  <label for="last_name">Father's Name</label>
			</div>
			<div class="input-field col s6">
			  <input id="last_name" type="text" class="validate">
			  <label for="last_name">Mother's Name</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s3">
				<select>
					<option value="" disabled selected>Gender</option>
					<option value="m">Male</option>
					<option value="f">Female</option>
					<option value="o">Other</option>
				</select>
				<label>Select Gender</label>
			</div>
			<div class="input-field col s3">
				<input id="last_name" type="text" class="validate">
				<label for="last_name">Relegion</label>
			</div>
			<div class="input-field col s3">
				<input id="last_name" type="text" class="validate">
				<label for="last_name">Region</label>
			</div>
			<!-- country selecting option -->
			<div class="input-field col s3">
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
			  <input id="last_name" type="text" class="validate">
			  <label for="last_name">Mobile Number</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
			   <input id="last_name" type="text" class="validate">
			  <label for="last_name">Nearest Bangladesh Mission</label>
			</div>
			<div class="input-field col s6">
			  <input id="last_name" type="text" class="validate">
			  <label for="last_name">NID/Samrt Card No</label>
			</div>
		</div>

		<div class="row">
			<!-- present Address -->
			<div class="input-field col s6">
				<p><u><b>Present Address</b></u></p>
				<div class="row">
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Flat/House No</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
			  			<label for="last_name">Road No</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
			  			<label for="last_name">City/Town</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
			  			<label for="last_name">Zip/Post Code</label>
					</div>
				</div>
			</div>

			<!-- permanent Address -->
			<div class="input-field col s6">
				<p><u><b>Parmanent Address</b></u></p>
				<div class="row">
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Flat/House No</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
			  			<label for="last_name">Road No</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
			  			<label for="last_name">City/Town</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
			  			<label for="last_name">Zip/Post Code</label>
					</div>
				</div>
			</div>
		</div>



		<div>
			
		</div>







	  
		<input type="submit" name="submit" value="Submit">
	</form> 

</div> <!-- container form row -->
        


 <?php include ('../footer.php'); ?> <!-- included footer -->



