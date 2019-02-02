</div> <!-- .container -->
	<!-- Jquery for all pages -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- if page is for edit profile then include edit profile js -->
	<?php if ($pageName == "edit-profile.php"): ?>
		<!-- materialize Compiled and minified JavaScript -->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<!-- customize or helper initial js for meterial -->
		<script src="<?php $feb_install_dir->path(); ?>/assets/js/materialize-custom.js"></script>
	<?php endif ?>

	

	<!-- if page is for edit profile then include edit profile js -->
	<?php if ($pageName == "edit-profile.php"): ?>
		<script src="<?php $feb_install_dir->path(); ?>/assets/js/edit-profile.js"></script>
	<?php endif ?>

	<!-- theme js -->
	<script src="<?php $feb_install_dir->path(); ?>/assets/js/theme.js"></script>
	</body>
</html>