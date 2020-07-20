<?php
function save_mess_trailer(){
	global $db1;
	$name_trailer = mysqli_real_escape_string($db1, $_POST['name_trailer']);	
	$query_trailer = "INSERT INTO `trailer` (name) VALUE ('$name_trailer')";
	
	global $insert_trailer;
	$insert_trailer = mysqli_query($db1, $query_trailer);
	mysqli_close($db1);
	
	}