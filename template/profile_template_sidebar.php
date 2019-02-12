<div class="card-panel grey lighten-5 z-depth-1">
  <div class="row valign-wrapper">
    <div class="col s2">
      <img
        src="http://0.gravatar.com/avatar/<?php echo md5(feb_wp_get_email($_SESSION['feb_wp_get_current_user_id'])); ?>"
        alt="<?php echo feb_get_name($_SESSION['feb_wp_get_current_user_id']); ?>"
        title="Username = <?php echo feb_wp_get_username($_SESSION['feb_wp_get_current_user_id']); ?>"
        class="circle responsive-img">
    </div>

    <div class="col s10">
      <span class="black-text">
        <b title="Her User Name = <?php echo feb_wp_get_username($_SESSION['feb_wp_get_current_user_id']); ?>"><?php echo feb_get_name($_SESSION['feb_wp_get_current_user_id']); ?></b>
      </span>
    </div>
  </div>
  
   <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">About of <?php echo feb_get_name($_SESSION['feb_wp_get_current_user_id']); ?></span>
           <div class="progress"><div class="determinate"></div></div>
          <p><?php echo feb_wp_get_user_description($_SESSION['feb_wp_get_current_user_id'], 'description'); ?></p>
        </div>
        <div class="card-action">
          <a href="#"><?php echo feb_wp_get_email($_SESSION['feb_wp_get_current_user_id']); ?></a>
        </div>
      </div>
</div>