<?php
function save_mess_staff(){
	global $db1;
	$name_staff = mysqli_real_escape_string($db1, $_POST['name_staff']);
	$name2_staff = mysqli_real_escape_string($db1, $_POST['name2_staff']);
	$nome = mysqli_real_escape_string($db1, $_POST['nome']);	
	$phone = mysqli_real_escape_string($db1, $_POST['phone']);
	$query_staff = "INSERT INTO `staff` (name, name2, nome, phone) VALUE ('$name_staff', '$name2_staff', '$nome', '$phone')";
	
	global $insert_staff;
	$insert_staff = mysqli_query($db1, $query_staff);
	
	
	}