<div class="card-panel grey lighten-5 z-depth-1">
  <div class="row valign-wrapper">
    <div class="col s2">
      <img
        src="http://0.gravatar.com/avatar/<?php echo md5(feb_wp_get_email($_SESSION['feb_wp_get_current_user_id'])); ?>?s=200"
        alt="<?php echo feb_get_name($_SESSION['feb_wp_get_current_user_id']); ?>"
        data-position="bottom"
        data-tooltip="Click this image for view big size Image."
        class="materialboxed tooltipped"
        style="width: 60px;height: auto;border-radius: 50%;">
    </div>

    <div class="col s10">
      <span class="black-text">
        <b title="Her User Name = <?php echo feb_wp_get_username($_SESSION['feb_wp_get_current_user_id']); ?>"><?php echo feb_get_name($_SESSION['feb_wp_get_current_user_id']); ?></b>
      </span>
      <br>
      <small>
        <span
          data-position="bottom"
          data-tooltip="Date Of Birth"
          class="tooltipped">
          <?php
            /*
              @Convert Date of Birth
            */
            $get_dateOfBirth = feb_get_date_of_birth($_SESSION['feb_wp_get_current_user_id']); // Get from Input
            $convert_dateOfBirth = strtotime($get_dateOfBirth); // Convert Input
            echo $dateOfBirth = date('d M, Y',$convert_dateOfBirth); // Date of Birth
          ?>
        </span>
      </small>
    </div>
     <img src="https://www.countryflags.io/<?php
          $feb_get_country = feb_get_country($_SESSION['feb_wp_get_current_user_id']);
          echo $feb_get_country;
         ?>/flat/64.png" data-position="bottom"
          data-tooltip="<?php 
            $countryJson = file_get_contents("http://country.io/names.json"); // get json
            $countryJson = utf8_encode($countryJson); // encode utf8
            $countryArray = json_decode($countryJson); // decode json
            $feb_get_country = $countryArray->$feb_get_country; // decalere country full name from decoded json array
            var_dump($countryJson) ; // print country full name
          ?>"
        class="tooltipped"
        style="cursor:pointer;">
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
