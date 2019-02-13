<?php 
/*
  This is form for user edit ther profile if have permission to for edit
*/
  // some required variatble variable
  $pageName = "profile_template.php"; // page name
  $framework = "materialize"; //framework name for design
 ?>
 <?php include ('header.php'); ?>
 <!--
 	/*
 	* Included Header
	* @header.php
	* This is just header for global page
  */
 -->  
 <!-- Notice and welcome message -->
<!--  <div class="card-panel teal lighten-2">
    <center><b style="color:#fff;"><h5>Welecome to you profile.</h5></b></center>
    <center>
      <marquee behavior="scroll" direction="left">
        <span>This is notice.</span>
      </marquee>
    </center>
  </div> -->

<div class="row">
	<div class="col m4 s12">
        <!-- INCLUDED SIDEBAR -->
        <?php include 'template/profile_template_sidebar.php'; ?>
  </div>

  <div class="col m8 s12">
        <!-- INCLUDED SIDEBAR -->
        <?php include 'template/profile_template_page.php'; ?>
  </div>
</div><!-- .row -->


<!--
	* Included Footer
	* @footer.php
	* This is just footer for global page
 -->
<?php include ('footer.php'); ?>