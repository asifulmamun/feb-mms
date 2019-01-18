<?php 
/*
  This is form for user edit ther profile if have permission to for edit
*/

  include ('../header.php');
 ?>



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
	    <div class="input-field col s6">
	      <input id="email" type="email" class="validate">
	      <label for="email">Email</label>
	    </div>
	    <div class="input-field col s6">
	      <input id="last_name" type="text" class="validate">
	      <label for="last_name">Mobile Number</label>
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
	    <div class="input-field col s3">


	      <input id="last_name" type="text" class="validate">
	      <label for="last_name">Country</label>



	    </div>
	  </div>

	  


  
<input type="submit" name="submit" value="Submit">
	</form> 
</div> <!-- container form row -->
        



 <?php include ('../footer.php'); ?>



	    	<?php 
				$countryJson = file_get_contents('http://country.io/names.json'); // get json
				$countryArray = json_decode($json, TRUE); // decode json

				foreach ($countryArray as $key => $value) {
					echo $value;
				}


	    	 ?>