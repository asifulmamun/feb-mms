<div class="card-panel grey lighten-5 z-depth-1">
  <div class="teal lighten-2">
    <center><b style="color:#fff;"><h5 style="padding: 13px 0;">Your Payment Information</h5></b></center>
  </div>
  <div class="row">
    <div class=" col m10">
        <table class="">
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
              <td>
                <?php
                  $paid_amount = feb_get_reg_fee($_SESSION['feb_wp_get_current_user_id']); //payment status check retun value
                  if ($paid_amount > 0) {
                ?>
                  <span>---</span>
                <?php
                  }else{
                    echo '<a class="waves-effect waves-light btn color-red">Pay Now..!</a>';
                  }
                ?>
              </td>
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
                  <a class="waves-effect waves-light btn-small">Download Certificate <sub><i class="material-icons">file_download</i></sub></a>
                <?php
                  }else{
                    echo '<a class="waves-effect waves-light btn color-red">Pay Now..!</a>';
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
        <table class="">
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
                    echo $countryArray->$feb_get_country; // variable declared profile_template_sidebar.php
                  ?>            
                </th>
            </tr>
            <tr>
                <th>E-mail</th>
                <th>:</th>
                <th><?php echo feb_get_email($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>Mobile</th>
                <th>:</th>
                <th><?php echo feb_get_mobile($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>Nearest Bangladesh Mission</th>
                <th>:</th>
                <th><?php echo feb_get_nearest_bangladeshi_mission($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
</div> <!-- .card-panel grey lighten-5 z-depth-1 -->


<div class="card-panel grey lighten-5 z-depth-1">
  <div class="teal lighten-2">
    <center><b style="color:#fff;"><h5 style="padding: 13px 0;">Present Address</h5></b></center>
  </div>
  <div class="row">
    <div class=" col m10">
        <table class="">
          <thead>
            <tr>
                <th>Flat/House No</th>
                <th>:</th>
                <th><?php echo feb_get_pr_flat_house_no($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
          </thead>

          <tbody>
            <tr>
                <th>Road No</th>
                <th>:</th>
                <th><?php echo feb_get_pr_road_no($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>City/Town</th>
                <th>:</th>
                <th><?php echo feb_get_pr_city_town($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>Zip/Post Code</th>
                <th>:</th>
                <th><?php echo feb_get_pr_zip_post($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
</div> <!-- .card-panel grey lighten-5 z-depth-1 -->

<div class="card-panel grey lighten-5 z-depth-1">
  <div class="teal lighten-2">
    <center><b style="color:#fff;"><h5 style="padding: 13px 0;">Parmanent Address</h5></b></center>
  </div>
  <div class="row">
    <div class=" col m10">
        <table class="">
          <thead>
            <tr>
                <th>Flat/House No</th>
                <th>:</th>
                <th><?php echo feb_get_pe_flat_house_no($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
          </thead>

          <tbody>
            <tr>
                <th>Road No</th>
                <th>:</th>
                <th><?php echo feb_get_pe_road_no($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>City/Town</th>
                <th>:</th>
                <th><?php echo feb_get_pe_city_town($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>Zip/Post Code</th>
                <th>:</th>
                <th><?php echo feb_get_pe_zip_post($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
</div> <!-- .card-panel grey lighten-5 z-depth-1 -->

<div class="card-panel grey lighten-5 z-depth-1">
  <div class="teal lighten-2">
    <center><b style="color:#fff;"><h5 style="padding: 13px 0;">Extra Information</h5></b></center>
  </div>
  <div class="row">
    <div class=" col m10">
        <table class="">
          <thead>
            <tr>
                <th>NID/Samrt Card No</th>
                <th>:</th>
                <th><?php echo feb_get_national_or_smart_id($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
          </thead>

          <tbody>
            <tr>
                <th>Passport No</th>
                <th>:</th>
                <th><?php echo feb_get_passport_number($_SESSION['feb_wp_get_current_user_id']); ?></th>
            </tr>
            <tr>
                <th>Passport Issued</th>
                <th>:</th>
                <th>
                  <?php
                    /*
                      @Convert Date of Birth
                    */
                    $get_passport_issue = feb_get_passport_issue($_SESSION['feb_wp_get_current_user_id']); // Get from Input
                    $convert_passport_issue = strtotime($get_passport_issue); // Convert Input
                    echo $passport_issue = date('M d, Y',$convert_passport_issue); // Date of Birth
                  ?>
                </th>
            </tr>
            <tr>
                <th>Passport Expire</th>
                <th>:</th>
                <th>
                  <?php
                    /*
                      @Convert Date of Birth
                    */
                    $get_passport_expire = feb_get_passport_expire($_SESSION['feb_wp_get_current_user_id']); // Get from Input
                    $convert_passport_expire = strtotime($get_passport_expire); // Convert Input
                    echo $passport_expire = date('M d, Y',$convert_passport_expire); // Date of Birth
                  ?>
                </th>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
</div> <!-- .card-panel grey lighten-5 z-depth-1 -->

<?php // echo feb_wp_get_user_description($_SESSION['feb_wp_get_current_user_id'], 'nickname'); // Get Data From WP User Meta Like as Nickname etc ?>