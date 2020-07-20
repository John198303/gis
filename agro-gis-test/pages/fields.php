<?php
require "../includes/db.php"

?>
<!DOCTYPE html>
<html>

<head>
    <title>Агро - Эксперт</title>
    <meta charset="utf-8" />
	<link href='https://fonts.googleapis.com/css?family=Jaldi:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->	
	<script src="../scripts/modernizr.js"></script> <!-- Modernizr -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="../scripts/diag1.js"></script>
	<script type="text/javascript" src="../scripts/diag2.js"></script>
    <script type="text/javascript" src="../scripts/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../scripts/popup.js"></script>
	<script type="text/javascript" src="../scripts/drop_menu.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>	
	<link href="../css/style.css" rel="stylesheet"> 
	<link href="../css/up.css" rel="stylesheet">	
	<link href="../css/diag.css" rel="stylesheet">
	<link href="../css/field.css" rel="stylesheet">
	<link href="../css/button.css" rel="stylesheet">
	<link href="../css/popup.css" rel="stylesheet">
	<link href="../css/drop_menu.css" rel="stylesheet">
</head>

<body>
    <?php include "../includes/header_sidebar.php"; ?>
	<?php include "../includes/bar.php"; ?>
	<div class="fil clearfix">	
		<div class="field">
			<div id="field1"> <h2>Поля</h2>				
			</div>
			<div id="field2">	
				<button data-popup-target="#store_popup" class="button">Добавить поле</button>				
			</div>
			
			<!-- class="dropdown-title clearfix">
					<div class="box">
						<div class="arrow clearfix"></div>
						<h2 class="title">Шуйский район</h2>
					</div>
					<ul>
						<li class="filter"><a href="#">Поле М78 (123 Га)</a></li>
						<li class="filter"><a href="#">Поле М78 (123 Га)</a></li>
						<li class="filter"><a href="#">Поле М78 (123 Га)</a></li>
					</ul>
			</div>-->
			<div class="menu_drop">
			<ul class="cd-accordion-menu animated">
				<li class="has-children">
					<input type="checkbox" name ="group-1" id="group-1" >
					<label for="group-1">Шуйский район</label>

					<ul class="drop">
						<li class="has-children">
							<input type="checkbox" name ="sub-group-1" id="sub-group-1">
							<label for="sub-group-1"><span class="pole">Дорожаево</span></label>

							<ul>
								<li><a href="./shuya/field1d.php">Поле № 1Д (150 Га)</a></li>
								<li><a href="./shuya/field2d.php">Поле № 2Д (168 Га)</a></li>
								<li><a href="./shuya/field2_1d.php">Поле № 2.1Д (170 Га)</a></li>
								<li><a href="./shuya/field3d.php">Поле № 3Д (18 Га)</a></li>
							</ul>
						</li>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-2" id="sub-group-2">
							<label for="sub-group-2"><span class="pole">Пустошь</span></label>

							<ul>
								
								<li><a href="./shuya/field1p.php">Поле № 1П (53 Га)</a></li>
								<li><a href="./shuya/field2p.php">Поле № 2П (90 Га)</a></li>
								<li><a href="./shuya/field3p.php">Поле № 3П (94 Га)</a></li>
								<li><a href="./shuya/field4p.php">Поле № 4П - 5П( Га)</a></li>
								<li><a href="./shuya/field6p.php">Поле № 6П (50 Га)</a></li>
								<li><a href="./shuya/field7p.php">Поле № 7П (60 Га)</a></li>
							</ul>
						</li>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-3" id="sub-group-3">
							<label for="sub-group-3"><span class="pole">Харитоново</span></label>

							<ul>
								<li><a href="./shuya/field1x.php">Поле № 1Х (92 Га)</a></li>
								<li><a href="./shuya/field2x.php">Поле № 2Х (46 Га)</a></li>
								<li><a href="./shuya/field3x.php">Поле № 3Х (42 Га)</a></li>
								<li><a href="./shuya/field3ax.php">Поле № 3аХ (22 Га)</a></li>
								<li><a href="./shuya/field4x.php">Поле № 4Х (56 Га)</a></li>
								<li><a href="./shuya/field4ax.php">Поле № 4аХ (42 Га)</a></li>
								<li><a href="./shuya/field5x.php">Поле № 5Х (23 Га)</a></li>
								<li><a href="./shuya/field6x.php">Поле № 6Х (124 Га)</a></li>
								
							</ul>
						</li>
					</ul>
				</li>

				<li class="has-children">
					<input type="checkbox" name ="group-2" id="group-2" >
					<label for="group-2">Палехский район</label>
					<ul>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-4" id="sub-group-4">
							<label for="sub-group-4"><span class="pole">Майдаково</span></label>

							<ul>
								<li><a href="./palesh/field4m.php">Поле № 4М (39 Га)</a></li>
								<li><a href="./palesh/field5m.php">Поле № 5М (116 Га)</a></li>
								<li><a href="./palesh/field5am.php">Поле № 5аМ (57 Га)</a></li>
								<li><a href="./palesh/field6m.php">Поле № 6М (46 Га)</a></li>
								<li><a href="./palesh/field6am.php">Поле № 6аМ ( Га)</a></li>
								<li><a href="./palesh/field7m.php">Поле № 7М ( Га)</a></li>
								<li><a href="./palesh/field8m.php">Поле № 8М (190 Га)</a></li>
								<li><a href="./palesh/field10m.php">Поле № 10М (95 Га)</a></li>
							</ul>
						</li>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-5" id="sub-group-5">
							<label for="sub-group-5"><span class="pole">Красное</span></label>

							<ul>
								<li><a href="./palesh/field1m.php">Поле № 1М (164 Га)</a></li>
								<li><a href="./palesh/field2m.php">Поле № 2М ( Га)</a></li>
								<li><a href="./palesh/field3m.php">Поле № 3М ( Га)</a></li>
								<li><a href="./palesh/field9m.php">Поле № 9М ( Га)</a></li>
								<li><a href="./palesh/field11m.php">Поле № 11М ( Га)</a></li>
								<li><a href="./palesh/field11am.php">Поле № 11аМ ( Га)</a></li>
							</ul>
						</li>
						
					</ul>
					
				</li>

				

				<li class="has-children">
					<input type="checkbox" name ="group-3" id="group-3" >
					<label for="group-3">Родниковский район</label>

					<ul>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-6" id="sub-group-6">
							<label for="sub-group-6"><span class="pole">Парское</span></label>

							<ul>
								<li><a href="./rodniki/field4r.php">Поле № 4Р (169 Га)</a></li>
								<li><a href="./rodniki/field4ar.php">Поле № 4аР ( Га)</a></li>
								<li><a href="./rodniki/field4br.php">Поле № 4бР (61 Га)</a></li>
								<li><a href="./rodniki/field5r.php">Поле № 5Р (68 Га)</a></li>
								<li><a href="./rodniki/field6r.php">Поле № 6Р (101 Га)</a></li>
								<li><a href="./rodniki/field7r.php">Поле № 7Р - 8Р (78 Га)</a></li>
							</ul>
						</li>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-7" id="sub-group-7">
							<label for="sub-group-7"><span class="pole">Кутилово</span></label>

							<ul>
								<li><a href="./rodniki/field1r.php">Поле № 1Р (49 Га)</a></li>
								<li><a href="./rodniki/field2r.php">Поле № 2Р (48 Га)</a></li>
								<li><a href="./rodniki/field2ar.php">Поле № 2аР (32 Га)</a></li>
								<li><a href="./rodniki/field3r.php">Поле № 3Р (62 Га)</a></li>
							</ul>
						</li>
						
					</ul>
				</li>
				<li class="has-children">
					<input type="checkbox" name ="group-4" id="group-4" >
					<label for="group-4">Верхнеландеховский район</label>

					<ul>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-8" id="sub-group-8">
							<label for="sub-group-8"><span class="pole">Мыт</span></label>

							<ul>
								<li><a href="../mit/mit1.php">Поле № 1Мыт (374 Га)</a></li>
								<li><a href="../mit/mit2.php">Поле № 2Мыт (160 Га)</a></li>
								<li><a href="../mit/mit3.php">Поле № 3Мыт (311 Га)</a></li>
								<li><a href="../mit/mit4.php">Поле № 4Мыт (216 Га)</a></li>
								<li><a href="../mit/mit5.php">Поле № 5Мыт (98 Га)</a></li>
								<li><a href="../mit/mit6.php">Поле № 6Мыт (42 Га)</a></li>
							</ul>
						</li>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-9" id="sub-group-9">
							<label for="sub-group-9"><span class="pole">--</span></label>

							<ul>
								<li><a href="#">Поле № </a></li>
								<li><a href="#">Поле № </a></li>
								<li><a href="#">Поле № </a></li>
								<li><a href="#">Поле № </a></li>
							</ul>
						</li>
						
					</ul>
				</li>

			</ul> <!-- cd-accordion-menu -->
		</div>		  
							
			
			
		</div>
		<div class="field_map_text">
			<div class="field_map_text_1"><h2>Карта</h2>
				
			</div>
			<div class="field_map">
				<div id="map1"><iframe src="http://192.168.100.94:8080/webmapping/#11/56.8210/41.6011"  width="860px" height="830px"></iframe></div>
			</div>
		</div>
	</div>
	<!--Всплывающее меню добавления полей -->
	<div class="popup-overlay"></div>
	<div id="store_popup" class="popup">
					<div class="popup-body">  <span class="popup-exit"></span>

						<div class="popup-content">
							<h2 class="popup-title">Добавление поля</h2>
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
				</div>
<script src="../scripts/jquery-2.1.4.js"></script>
<script src="../scripts/main.js"></script> <!-- Resource jQuery -->
</body>
</html>>