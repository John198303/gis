<?php

function save_mess(){
	global $db1;
	$name = mysqli_real_escape_string($db1, $_POST['name']);
	$name2 = mysqli_real_escape_string($db1, $_POST['name2']);
	$nome = mysqli_real_escape_string($db1, $_POST['nome']);
	$phone = mysqli_real_escape_string($db1, $_POST['phone']);
	$email = mysqli_real_escape_string($db1, $_POST['email']);
	/*$address = mysqli_real_escape_string($db1, $_POST['address']);*/ 
	$text = mysqli_real_escape_string($db1, $_POST['text']);
	$query = "INSERT INTO `staff` (name, name2, nome, phone, email, text) VALUE ('$name', '$name2', '$nome', '$phone', '$email', '$text')";
	$insert = mysqli_query($db1, $query);
	
}



function get_mess(){
	global $db1;
	$query = "SELECT * FROM `staff` ORDER BY id DESC";
	$res = mysqli_query($db1, $query);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}