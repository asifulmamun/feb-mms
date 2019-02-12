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