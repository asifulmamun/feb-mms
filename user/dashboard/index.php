<?php 
/*
  This is form for user edit ther profile if have permission to for edit
*/
  // some required variatble variable
  $pageName = "index.php"; // page name
  $framework = "materialize"; //framework name for design
  include ('../../header.php');

 ?>
 <!--
 	/*
 	* Included Header
	* @header.php
	* This is just header for global page
  */
 -->  

	 <!-- Notice and welcome message -->
	 <div class="card-panel teal lighten-2">
	   <center><b><h5><a style="color:#fff;" href="<?php echo $root_web_install; ?>wp-admin/profile.php">Click here for to Direct or BIG size Dashboard...!</a></h5></b></center>
	</div>
	<center><iframe style="width:85%;min-height:700px;" src="<?php echo $root_web_install; ?>wp-admin/profile.php"></iframe></center>
			


<!--
	* Included Footer
	* @footer.php
	* This is just footer for global page
 -->
<?php include ('../../footer.php'); ?> <!-- included footer -->



