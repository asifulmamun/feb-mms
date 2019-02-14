<?php 
/*
  This is form for user edit ther profile if have permission to for edit
*/
  // some required variatble variable
  $pageName = "profile-update-success.php"; // page name
  $framework = "materialize"; //framework name for design
  include ('../header.php');

  	// include configuration for database connection and other power
	include '../function/connection.php'; // connection
	include '../function/user_functions.php'; // include user function

 ?>
 <!--
 	/*
 	* Included Header
	* @header.php
	* This is just header for global page
  */
 -->  
<br><br><center><h1>You have Success to  Log in.<br>You will be redirected in <span id="counter">5</span> second(s) from here to your Dashboard.<br>If you want you can manually go to your dashboard through Menu or Click below button.<br>Thank you.</h1></center>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = '/feb-mms';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>

<!--
	* Included Footer
	* @footer.php
	* This is just footer for global page
 -->
<?php include ('../footer.php'); ?> <!-- included footer -->