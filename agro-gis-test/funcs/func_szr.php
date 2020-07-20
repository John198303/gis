<?php
function save_mess_szr(){
	global $db1;
	$name_szr = mysqli_real_escape_string($db1, $_POST['name_szr']);
	$class_szr = mysqli_real_escape_string($db1, $_POST['class_szr']);	
	$query_szr = "INSERT INTO `szr` (name_szr, class_szr) VALUE ('$name_szr', '$class_szr')";
	
	$insert_szr = mysqli_query($db1, $query_szr);
	
	
	}