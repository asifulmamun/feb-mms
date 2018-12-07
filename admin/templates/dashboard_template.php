<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

		<!-- Head Of List -->
		<div class="col-md-12 col-sm-12">
			<!-- list of member -->
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">SL</th>
			      <th scope="col">Name</th>
			      <th scope="col">Date</th>
			      <th scope="col">Paymnet Status</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 

			    	$temp_feb_dashboard_table_name = $_SESSION['feb_db_table_prefix']."users";
					$sql = "SELECT * FROM $temp_feb_dashboard_table_name";
					$result = $feb_db_connection->query($sql);
					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
				?>
			    <tr>
			      <th><?php echo $row["ID"]; ?></th>
			      <td><?php echo $row["user_nicename"]; ?></td>
			    </tr>
			     <?php
					    } // while
					} // if
				 ?>
			  </tbody>
			</table>
		</div>

</body>
</html>