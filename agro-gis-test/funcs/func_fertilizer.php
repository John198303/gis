<?php
function save_mess_fertilizer(){
	global $db1;
	$name_fertilizer = mysqli_real_escape_string($db1, $_POST['name_fertilizer']);
	$class_fertilizer = mysqli_real_escape_string($db1, $_POST['class_fertilizer']);
	$review_fertilizer = mysqli_real_escape_string($db1, $_POST['review_fertilizer']);	
	$query_fertilizer = "INSERT INTO `fertilizer` (name_fertilizer, class_fertilizer, review_fertilizer) VALUE ('$name_fertilizer', '$class_fertilizer', '$review_fertilizer')";
	
	$insert_fertilizer = mysqli_query($db1, $query_fertilizer);
	
	
	}