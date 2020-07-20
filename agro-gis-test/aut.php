<?php

session_start();

define('ADMIN', 'admin');
define('PASS', 'agroex2007');
define('HARVEST', 'harvest');
define('PASS1', 'harvest');

if(!empty($_POST['login']) && ($_POST['pass'])){
	if($_POST['login'] === ADMIN && $_POST['pass'] === PASS){
		$_SESSION['admin'] = ADMIN;
	
		
	
		
		
		
	}else{
		$_SESSION['res'] = 'Неверный логин или пароль';
	}
	header("Location: ../agro-gis-test/pages/fields.php");
	die;
}

?>


<h1 style="margin-top: 650px;">
<?php  
	if(isset($_SESSION['res'])){
		echo $_SESSION['res'];
		unset($_SESSION['res']);
	}
?>
</h1>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>LogIn Form</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  
  
      <link rel="stylesheet" href="css/forma.css">

  
</head>

<body>
  <div id="login-button">
  <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
  </img>
</div>
<div id="container">
  <h1>ГИС Агро-Эксперт</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form method="post" action="">
    <input type="text" name="login" placeholder="Введите логин" id="inp">
    <input type="password" name="pass" placeholder="Введите пароль">
	<p><button type="submit" name="but" id="aut">Войти</button></p>
    <!--<a href="#">Log in</a> -->
    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Запомнить меня</span>
      <span id="forgotten">Забыли пароль?</span>
    </div>
</form>
</div>

<!-- Forgotten Password Container -->
<div id="forgotten-container">
   <h1>Восстановление</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form>
    <input type="email" name="email" placeholder="E-mail">
    <a href="#" class="orange-btn">Получить новый пароль</a>
</form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="scripts/index.js"></script>

</body>
</html>
