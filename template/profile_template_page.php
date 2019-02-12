<div class="card-panel grey lighten-5 z-depth-1">
  <img src="https://www.countryflags.io/<?php echo feb_get_country($_SESSION['feb_wp_get_current_user_id']); ?>/flat/64.png">




  <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content">
          You have permission.
        </div>
      </div>
    </div>
  </div>





</div>

<?php echo feb_wp_get_user_description($_SESSION['feb_wp_get_current_user_id'], 'nickname'); ?>

