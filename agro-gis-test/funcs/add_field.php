<?php

function save_mess_field(){
	global $db1;
	$name_field = mysqli_real_escape_string($db1, $_POST['field']);
	$date_operations = mysqli_real_escape_string($db1, $_POST['date_operations']);
	$operations = mysqli_real_escape_string($db1, $_POST['operations']);	
	$main = mysqli_real_escape_string($db1, $_POST['main']);
	$trailer = mysqli_real_escape_string($db1, $_POST['trailer']);
	$driver = mysqli_real_escape_string($db1, $_POST['driver']);
	$done = mysqli_real_escape_string($db1, $_POST['done']);
	if ($name_field == '1Д'){
	$query_field = "INSERT INTO `operations-d1` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '2Д'){
	$query_field = "INSERT INTO `operations-d2` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '2.1Д'){
	$query_field = "INSERT INTO `operations-d2-1` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '3Д'){
	$query_field = "INSERT INTO `operations-d3` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '1П'){
	$query_field = "INSERT INTO `operations-p1` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '2П'){
	$query_field = "INSERT INTO `operations-p2` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '3П'){
	$query_field = "INSERT INTO `operations-p3` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '4П и 5П'){
	$query_field = "INSERT INTO `operations-p4-5` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '6П'){
	$query_field = "INSERT INTO `operations-p6` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '7П'){
	$query_field = "INSERT INTO `operations-p7` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '1Х'){
	$query_field = "INSERT INTO `operations-x1` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '2Х'){
	$query_field = "INSERT INTO `operations-x2` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '3Х'){
	$query_field = "INSERT INTO `operations-x3` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '3аХ'){
	$query_field = "INSERT INTO `operations-x3a` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '4Х'){
	$query_field = "INSERT INTO `operations-x4` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '4аХ'){
	$query_field = "INSERT INTO `operations-x4a` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '5Х'){
	$query_field = "INSERT INTO `operations-x5` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '6Х'){
	$query_field = "INSERT INTO `operations-x6` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '1М'){
	$query_field = "INSERT INTO `operations-m1` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '2М'){
	$query_field = "INSERT INTO `operations-m2` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '3М'){
	$query_field = "INSERT INTO `operations-m3` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '4М'){
	$query_field = "INSERT INTO `operations-m4` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '5М'){
	$query_field = "INSERT INTO `operations-m5` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '5аМ'){
	$query_field = "INSERT INTO `operations-m5a` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '6М'){
	$query_field = "INSERT INTO `operations-m6` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '6аМ'){
	$query_field = "INSERT INTO `operations-m6a` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '7М'){
	$query_field = "INSERT INTO `operations-m7` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '8М'){
	$query_field = "INSERT INTO `operations-m8` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '9М'){
	$query_field = "INSERT INTO `operations-m9` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '10М'){
	$query_field = "INSERT INTO `operations-m10` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '11М'){
	$query_field = "INSERT INTO `operations-m11` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '11аМ'){
	$query_field = "INSERT INTO `operations-m11a` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '1Р'){
	$query_field = "INSERT INTO `operations-r1` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '2Р'){
	$query_field = "INSERT INTO `operations-r2` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '2аР'){
	$query_field = "INSERT INTO `operations-r2a` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '3Р'){
	$query_field = "INSERT INTO `operations-r3` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '4Р'){
	$query_field = "INSERT INTO `operations-r4` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '4аР'){
	$query_field = "INSERT INTO `operations-r4a` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '4бР'){
	$query_field = "INSERT INTO `operations-r4b` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '5Р'){
	$query_field = "INSERT INTO `operations-r5` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '6Р'){
	$query_field = "INSERT INTO `operations-r6` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '7-8Р'){
	$query_field = "INSERT INTO `operations-r7-8` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '12М'){
	$query_field = "INSERT INTO `operations-m12` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '1Мыт'){
	$query_field = "INSERT INTO `operations-mit1` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '2Мыт'){
	$query_field = "INSERT INTO `operations-mit2` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '3Мыт'){
	$query_field = "INSERT INTO `operations-mit3` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '4Мыт'){
	$query_field = "INSERT INTO `operations-mit4` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '5Мыт'){
	$query_field = "INSERT INTO `operations-mit5` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	}elseif($name_field == '6Мыт'){
	$query_field = "INSERT INTO `operations-mit6` (date_operations, operations, main, trailer, driver, done) VALUE ('$date_operations', '$operations', '$main', '$trailer', '$driver', '$done')";
	};
	
	
	
	global $insert_field;
	$insert_field = mysqli_query($db1, $query_field);
	
	
	}