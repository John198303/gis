<?php
function save_mess_works1(){
	global $db1;
	$name_works = mysqli_real_escape_string($db1, $_POST['name_works']);	
	$query_works = "INSERT INTO `works` (name_works) VALUE ('$name_works')";
	
	global $insert_works;
	$insert_works = mysqli_query($db1, $query_works);
	mysqli_close($db1);
	
	};