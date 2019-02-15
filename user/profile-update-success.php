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
  <center>
   <br><br><br><br>
    <div class="row">
      <div class="col s12 m12">
        <div class="card">
          <div class="card-content">
            <div style="color:green;">
             <center><h4>You have Success to  Update Your Information.<br>You will be redirected in <span id="counter" style="color:red;">5</span> second(s) from here to your Profile.<br>If you want you can manually go to your Profile through Menu or Click below button.<br>Thank you.</h4></center>
              <center><a class="waves-effect waves-light btn" href="<?php $feb_install_dir->path(); ?>/user/dashboard">button</a></center>
            </div>
          </div>
        </div>
      </div>
     <br><br><br><br>
    </div>
 
  </center>      





<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = '<?php $feb_install_dir->path(); ?>/user/dashboard';
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