<?php 

	$time = $_POST['date_of_birth'];

	echo $time;









 ?>

<br>

 <?php 


 	$time = strtotime($time);

	$newformat = date('Y-m-d',$time);

	echo $newformat;

?>

<br>

 <?php 


 	$newformat = strtotime($time);

	$newformat = date('F',$time);

	echo $newformat;

