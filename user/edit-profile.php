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
	      <input type="text" class="datepicker">
	      <label for="last_name">Mother's Name</label>
	    </div>
	  </div>






	  <div class="row">
	    <div class="input-field col s12">
	      <input id="password" type="password" class="validate">
	      <label for="password">Password</label>
	    </div>
	  </div>

	  <div class="row">
	    <div class="input-field col s12">
	      <input id="email" type="email" class="validate">
	      <label for="email">Email</label>
	    </div>
	  </div>

  
<input type="submit" name="submit" value="Submit">
	</form> 
</div> <!-- container form row -->
        



 <?php include ('../footer.php'); ?>