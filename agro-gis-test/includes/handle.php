<?php

include('includes/config.php');
$login = $_POST['log'];
$password = $_POST['pass'];
$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($count) == 0 )
{
	echo "Вы не зарегистированы";
}else
{
	echo "Добро пожаловать";
}

