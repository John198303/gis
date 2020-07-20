<?php
	session_start();
	if(isset($_GET['do']) && $_GET['do'] == "exit"){
		unset($_SESSION['admin']);
		header("Location: http://192.168.100.83/agro-gis-test/aut.php");
	}
	
	if(!isset($_SESSION['admin'])){
		header("Location: http://192.168.100.83/agro-gis-test/aut.php");
		echo "Вы не авторизованы";		
		die;
		
	}
	
	
?>
<head>
	
</head>
<div class="up">
	<div>
		<div><h1 class="p1">ГИС АГРО-ЭКСПЕРТ</h1>
			<!--<div class="form">
				<form method="POST" action="includes/config.php">								
					<input type="text" placeholder="Ваш логин" name="log">
					<input type="password" placeholder="Ваш пароль" name="pass">	
					<input type="submit" value="Войти">
					<a href="http://192.168.100.83/gis/index.php?do=exit" id="a1">Выйти </a>
				</form>			
	
			</div> -->
		</div>	
	</div>
	<!--<div>	
		<p class="p2">выберите сезон</p>
			<form method="POST" action="includes/config.php">
					<select type="text" id="datepicker" name="year">
						<option value="2014">2014 год</option>
						<option value="2015">2015 год</option>
						<option value="2016">2016 год</option>
						<option value="2017">2017 год</option>
						<option value="2018">2018 год</option>
					</select>
				<input type="submit" value="выбрать" id="option">
				
			</form>
			
	</div>-->
</div>
		