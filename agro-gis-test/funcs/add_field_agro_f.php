<?php
function save_mess_fields1(){
	global $db1;
	$name_fields = mysqli_real_escape_string($db1, $_POST['name_fields']);
	$name_region = mysqli_real_escape_string($db1, $_POST['name_region']);
	$kadastr_fields = mysqli_real_escape_string($db1, $_POST['kadastr_fields']);	
	$square_fields = mysqli_real_escape_string($db1, $_POST['square_fields']);
	$query_fields = "INSERT INTO `fields` (name_fields, name_region, kadastr_fields, square_fields) VALUE ('$name_fields', '$name_region', '$kadastr_fields', '$square_fields')";
	
	global $insert_fields;
	$insert_fields = mysqli_query($db1, $query_fields);
	
	
	}