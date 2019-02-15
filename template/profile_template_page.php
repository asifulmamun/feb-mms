<div class="card-panel grey lighten-5 z-depth-1">
  <div class="teal lighten-2">
    <center><b style="color:#fff;"><h5 style="padding: 13px 0;">Your Payment Information</h5></b></center>
  </div>
  <div class="row">
    <div class=" col m10">
        <table class="responsive-table">
          <thead>
            <tr>
                <th>Payment Details</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><b>Registration Fee</b></td>
              <td>
                <?php
                  $paid_amount = feb_get_reg_fee($_SESSION['feb_wp_get_current_user_id']); //payment status check retun value
                  if ($paid_amount > 0) {
                ?>
                  <span style="color:green;" class="tooltipped" data-position="bottom" data-tooltip="Paid For Registration."><sub><i style="color:green;" class="material-icons">done</i></sub> <?php echo $paid_amount; ?></span>
                <?php
                  }else{
                    echo '<b style="color:#ff0000;"><sub><i class="material-icons">clear</i></sub>Unpaid<b>';
                  }
                ?>
              </td>
              <td><span>---</span></td>
            </tr>
            <tr>
              <td><b>Certificate Fee</b></td>
              <td>
                <?php
                  $paid_amount = feb_get_certificate_fee($_SESSION['feb_wp_get_current_user_id']); //payment status check retun value
                  if ($paid_amount > 0) {
                ?>
                  <span style="color:green;" class="tooltipped" data-position="bottom" data-tooltip="Paid For Certificate. You can now download your Certificate."><sub><i style="color:green;" class="material-icons">done</i></sub> <?php echo $paid_amount; ?></span>
                <?php
                  }else{echo '<b style="color:#ff0000;"><sub><i class="material-icons">clear</i></sub>Unpaid<b>';}
                ?>
              </td>
              <td>
                <?php
                  $paid_amount = feb_get_certificate_fee($_SESSION['feb_wp_get_current_user_id']); //payment status check retun value
                  if ($paid_amount > 0) {
                ?>
                  <a class="waves-effect waves-light btn-small">Download <sub><i class="material-icons">file_download</i></sub></a>
                <?php
                  }
                ?>          
              </td>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
</div> <!-- .card-panel grey lighten-5 z-depth-1 -->

<div class="card-panel grey lighten-5 z-depth-1">
  <div class="teal lighten-2">
    <center><b style="color:#fff;"><h5 style="padding: 13px 0;">Personal Information</h5></b></center>
  </div>
  <div class="row">
    <div class=" col m10">
        <table class="responsive-table">
          <thead>
            <tr>
                <th>Name</th>
                <th>:</th>
                <th><?php echo feb_get_name($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
          </thead>

          <tbody>
            <tr>
                <th>Father's Name</th>
                <th>:</th>
                <th><?php echo feb_get_fathers_name($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>Mother's Name</th>
                <th>:</th>
                <th><?php echo feb_get_mothers_name($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
              <tr>
                <th>Date Of Birth</th>
                <th>:</th>
                <th>
                  <?php
                    /*
                      @Convert Date of Birth
                    */
                    $get_dateOfBirth = feb_get_date_of_birth($_SESSION['feb_wp_get_current_user_id']); // Get from Input
                    $convert_dateOfBirth = strtotime($get_dateOfBirth); // Convert Input
                    echo $dateOfBirth = date('M d, Y',$convert_dateOfBirth); // Date of Birth
                  ?>
                </th>
            </tr>
            <tr>
                <th>Religion</th>
                <th>:</th>
                <th><?php echo feb_get_religion($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>Country</th>
                <th>:</th>
                <th>
                  <?php 
                    $countryJson = file_get_contents("http://country.io/names.json"); // get json
                    $countryArray = json_decode($countryJson); // decode json
                    $feb_get_country = feb_get_country($_SESSION['feb_wp_get_current_user_id']);
                    echo $countryArray->$feb_get_country;
                  ?>                  
                </th>
            </tr>
            <tr>
                <th>E-mail</th>
                <th>:</th>
                <th><?php echo feb_get_email($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>E-mail</th>
                <th>:</th>
                <th><?php echo feb_get_email($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
</div> <!-- .card-panel grey lighten-5 z-depth-1 -->

<?php echo feb_wp_get_user_description($_SESSION['feb_wp_get_current_user_id'], 'nickname'); ?>

