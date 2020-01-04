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
 


<?php echo md5(feb_wp_get_email($_SESSION['feb_wp_get_current_user_id'])); ?>







 
<?php include ('../footer.php'); ?> <!-- included footer -->