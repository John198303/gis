<?php
function save_mess_culture(){
	global $db1;
	$name_culture = mysqli_real_escape_string($db1, $_POST['name_culture']);	
	$query_culture = "INSERT INTO `culture` (name_culture) VALUE ('$name_culture')";
	
	$insert_culture = mysqli_query($db1, $query_culture);
	
	
	}
	
	


