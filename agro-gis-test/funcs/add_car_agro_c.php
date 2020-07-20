<?php
function save_mess_car(){
	global $db1;
	$name_car = mysqli_real_escape_string($db1, $_POST['name_car']);	
	$query_car = "INSERT INTO `cars` (car) VALUE ('$name_car')";
	
	global $insert_car;
	$insert_car = mysqli_query($db1, $query_car);
	mysqli_close($db1);
	
	}