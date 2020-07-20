<?php

include('includes/db.php');
$login = $_GET['log'];
$password = $_GET['pass'];
$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($count) == 0 )
{
	echo "Вы не зарегистированы";
}else
{
	echo "Добро пожаловать";
}

