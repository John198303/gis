<?php
function save_mess_operations_d2_1(){
	global $db1;
	$date_operations = mysqli_real_escape_string($db1, $_POST['date_operations']);
	$operations = mysqli_real_escape_string($db1, $_POST['operations']);	
	$main = mysqli_real_escape_string($db1, $_POST['main']);
	$trailer = mysqli_real_escape_string($db1, $_POST['trailer']);
	$driver = mysqli_real_escape_string($db1, $_POST['driver']);
	$done = mysqli_real_escape_string($db1, $_POST['done']);
	$query_operations2 = "INSERT INTO `operations-d2-1` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	
	$insert_operations2 = mysqli_query($db1, $query_operations2);
	
	
	}