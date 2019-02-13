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
                  }
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

<?php echo feb_wp_get_user_description($_SESSION['feb_wp_get_current_user_id'], 'nickname'); ?>

