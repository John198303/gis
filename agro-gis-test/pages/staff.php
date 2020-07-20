<?php
error_reporting(-1);
require_once '../inc/connect.php';
require_once '../funcs/funcs.php';
require_once '../funcs/func_culture.php';
require_once '../funcs/func_works.php';
require_once '../funcs/func_szr.php';
require_once '../funcs/func_fertilizer.php';
require_once '../funcs/func_fields.php';

if(!empty($_POST['name'])){
	save_mess();
	
} elseif(!empty($_POST['name_culture'])){
	save_mess_culture();
} elseif(!empty($_POST['name_works'])){
	save_mess_works();
} elseif(!empty($_POST['name_szr'])){
	save_mess_szr();
} elseif(!empty($_POST['name_fertilizer'])){
	save_mess_fertilizer();
} elseif(!empty($_POST['name_fields'])){
	save_mess_fields();
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Агро - Эксперт</title>
    <meta charset="utf-8" />	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="../scripts/diag1.js"></script>
	<script type="text/javascript" src="../scripts/diag2.js"></script>
    <script type="text/javascript" src="../scripts/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../scripts/popup.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>		
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/up.css" rel="stylesheet">
	<link href="../css/bar.css" rel="stylesheet">
	<link href="../css/diag.css" rel="stylesheet">
	<link href="../css/staff.css" rel="stylesheet">
	<link href="../css/catalog.css" rel="stylesheet">
	<link href="../css/button.css" rel="stylesheet">
	<link href="../css/popup.css" rel="stylesheet">
	<link href="../css/form.css" rel="stylesheet">
	
	
</head>

<body>
	<?php include "../includes/header_sidebar.php"; ?>
	<?php include "../includes/bar.php"; ?>
	<div class="header_top">
		<div class="header_block1">Добавление сотрудника</div>
		<div class="header_block2">Персонал</div>
		<div class="header_block3">Данные</div>
	</div>
	<div class="main">
		<div class="main1">
			<div id="knopka"><button data-popup-target="#store_popup" class="button">Добавить Сотрудника</button></div>
			<div id="knopka"><button data-popup-target="#store_popup_culture" class="button">Добавить Культуру</button></div>
			<div id="knopka"><button data-popup-target="#store_popup_works" class="button">Добавить работы</button></div>
			<div id="knopka"><button data-popup-target="#store_popup_szr" class="button">Добавить СЗР</button></div>
			<div id="knopka"><button data-popup-target="#store_popup_fertilizer" class="button">Добавить Удобрения</button></div>
			<div id="knopka"><button data-popup-target="#store_popup_fields" class="button">Добавить Поле</button></div>
			<!--<div id="knopka"><button data-popup-target="#store_popup" class="button">Добавить Технику</button></div>
			<div id="knopka"><button data-popup-target="#store_popup" class="button">Урожай за пр. года</button></div>-->
						
				<!--<form method = "post" action="../pages/staff.php" id="form_staff">				
					<p>
						<label for="name">Имя:</label><br>
						<input type="text" name="name" id="name">
					</p>
					<p>
						<label for="name2">Отчество:</label><br>
						<input type="text" name="name2" id="name2">
					</p>
					<p>
						<label for="nome">Фамилия:</label><br>
						<input type="text" name="nome" id="nome">
					</p>
					<p>
						<label for="phone">Телефон:</label><br>
						<input type="text" name="phone" id="phone">
					</p>
					<p>
						<label for="email">E-Mail:</label><br>
						<input type="email" name="email" id="email">
					</p>
					<p>
						<label for="address">Адрес:</label><br>
						<textarea name="address" id="address"></textarea>
					</p>
					
					<p>
						<label for="text">Характеристика:</label><br>
						<textarea name="text" id="text"></textarea>
					</p><hr><hr><br>
					
					
					<button type="submit" class="button2">Добавить</button>
				
				</form>			-->	
						
		</div>
	
			
		<div class="main2"></div>
		<div class="main3"></div>
	</div>
	
	
					<div class="popup-overlay"></div>
					<div id="store_popup" class="popup">
						<div class="popup-body">  <span class="popup-exit"></span>
							<div class="popup-content">
								<h2 class="popup-title">Добавление Сотрудника</h2>
								<div class="flex_container">
									<form method = "post" action="../pages/staff.php" class="form_staff">				
										<p>
											<label for="name">Имя:</label><br>
											<input type="text" name="name" id="name" placeholder="Введите имя">
										</p>
										<p>
											<label for="name2">Отчество:</label><br>
											<input type="text" name="name2" id="name2" placeholder="Введите Отчество">
										</p>
										<p>
											<label for="nome">Фамилия:</label><br>
											<input type="text" name="nome" id="nome" placeholder="Введите фамилию">
										</p>
										<p>
											<label for="phone">Телефон:</label><br>
											<input type="text" name="phone" id="phone" placeholder="Введите телефон">
										</p>
										<p>
											<label for="email">E-Mail:</label><br>
											<input type="email" name="email" id="email">
										</p>
										<p>
											<label for="text">Комментарии:</label><br>
											<textarea name="text" id="text"></textarea>
										</p><hr><hr><br>
										
										
										<button type="submit" class="button2">Добавить</button>
									</form>	
								</div>
							</div>
						</div>
					</div>
					<div class="popup-overlay"></div>
					<div id="store_popup_culture" class="popup">
						<div class="popup-body">  <span class="popup-exit"></span>
							<div class="popup-content">
								<h2 class="popup-title">Добавить Культуру</h2>
								<div class="flex_container">
									<form method = "post" action="../pages/staff.php" class="form_staff">				
											<p>
												<label for="name_culture">Введите название:</label><br>
												<input type="text" name="name_culture" id="name" placeholder="Наименование культуры">
											</p>										
											<button type="submit" id="button_culture">Добавить</button>
									</form>	
								</div>
							</div>
						</div>
					</div>
					<div class="popup-overlay"></div>
					<div id="store_popup_works" class="popup">
						<div class="popup-body">  <span class="popup-exit"></span>
							<div class="popup-content">
								<h2 class="popup-title">Добавить Работу</h2>
								<div class="flex_container">
									<form method = "post" action="../pages/staff.php" class="form_staff">				
											<p>
												<label for="name_works">Введите название работы:</label><br>
												<input type="text" name="name_works" id="name" placeholder="Наименование работы">
											</p>										
											<button type="submit" id="button_culture">Добавить</button>
									</form>	
								</div>
							</div>
						</div>
					</div>
					<div class="popup-overlay"></div>
					<div id="store_popup_szr" class="popup">
						<div class="popup-body">  <span class="popup-exit"></span>
							<div class="popup-content">
								<h2 class="popup-title">Добавить СЗР</h2>
								<div class="flex_container">
									<form method = "post" action="../pages/staff.php" class="form_staff">				
											<p>
												<label for="name_works">Введите название СЗР:</label><br>
												<input type="text" name="name_szr" id="name" placeholder="Наименование СЗР">
											</p>
											<p>
												<label for="name_szr"><span id="szr-span">Выберите класс СЗР:</span></label><br>
												<input type="radio" name="class_szr" value="Инсектицид" id="class1"><label for="class1">Инсектицид</label><br>
												<input type="radio" name="class_szr" value="Гербицид" id="class2"><label for="class2">Гербицид</label><br>
												<input type="radio" name="class_szr" value="Фунгицид" id="class3"><label for="class3">Фунгицид</label><br>
											</p>										
											<button type="submit" id="button_culture">Добавить</button>
									</form>	
								</div>
							</div>
						</div>
					</div>
					<div class="popup-overlay"></div>
					<div id="store_popup_fertilizer" class="popup">
						<div class="popup-body">  <span class="popup-exit"></span>
							<div class="popup-content">
								<h2 class="popup-title">Добавить Удобрение</h2>
								<div class="flex_container">
									<form method = "post" action="../pages/staff.php" class="form_staff">				
											<p>
												<label for="name_fertilizer">Введите название Удобрения:</label><br>
												<input type="text" name="name_fertilizer" id="name" placeholder="Наименование удобрения">
											</p>
											<p>
												<label for="name_fertilizer"><span id="szr-span">Выберите класс удобрения:</span></label><br>
												<input type="radio" name="class_fertilizer" value="Азотные" id="asot"><label for="asot">Азотные</label><br>
												<input type="radio" name="class_fertilizer" value="Фосфорные" id="phosphor"><label for="phosphor">Фосфорные</label><br>
												<input type="radio" name="class_fertilizer" value="Калийные" id="kaliy"><label for="kaliy">Калийные</label><br>
												<input type="radio" name="class_fertilizer" value="Калийные" id="isvest"><label for="isvest">Известковые</label><br>
											</p>
											<p>
												<label for="review_fertilizer">Краткое описание:</label><br>
												<textarea name="review_fertilizer" id="review_fertilizer"></textarea>
											</p>										
											<button type="submit" id="button_culture">Добавить</button>
									</form>	
								</div>
							</div>
						</div>
					</div>
					<div class="popup-overlay"></div>
					<div id="store_popup_fields" class="popup">
						<div class="popup-body">  <span class="popup-exit"></span>
							<div class="popup-content">
								<h2 class="popup-title">Добавить Поле</h2>
								<div class="flex_container">
									<form method = "post" action="../pages/staff.php" class="form_staff">				
											<p>
												<label for="name_fields">Введите название:</label><br>
												<input type="text" name="name_fields" id="name" placeholder="Наименование Поля">
											</p>
											<p>
												<label for="name_region">Введите название региона:</label><br>
												<input type="text" name="name_region" id="name" placeholder="Регион">
											</p>
											<p>
												<label for="kadastr_fields">Введите кадастр:</label><br>
												<input type="text" name="kadastr_fields" id="name" placeholder="Кадастр Поля">
											</p>
											<p>
												<label for="square_fields">Площадь поля в Га:</label><br>
												<input type="text" name="square_fields" id="name" placeholder="площадь Поля">
											</p>
																				
											<button type="submit" id="button_culture">Добавить</button>
									</form>	
								</div>
							</div>
						</div>
					</div>
	
	
	
	
	
	<!-- Меню добаления полей 
	
	<div class="popup-overlay"></div>
	<div id="store_popup" class="popup">
					<div class="popup-body">  <span class="popup-exit"></span>

						<div class="popup-content">
							<h2 class="popup-title">Добавление Сотрудника</h2>
							<div class="flex_container">
								<div class="flex1"><p><strong>&nbsp &nbsp &nbsp &nbsp &nbspОтрисовать на карте<strong></p>
									<div class="flex1_text">
										Создать поля, отмечая контуры на карте.
									</div>
									<div class="flex2_text">
										<a href="../pages/map.php"><img src="../img/map1.png" 
										width="119" height="125" align="bottom"  alt="map1"></a>
										
									</div>
								</div>
								<div class="flex2"><p><strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbspВыбрать KML</strong></p>
									<div class="flex1_text">
										Импортировать списки полей из заранее подготовленного KML файла
									</div>
									<div class="flex3_text">
										<a href="http://www.ya.ru"><img src="../img/map2.png" 
										width="119" height="125" align="bottom"  alt="map2"></a>
									</div>
								</div>
							</div>

						</div>
					</div>
	</div>-->

</body>
</html>