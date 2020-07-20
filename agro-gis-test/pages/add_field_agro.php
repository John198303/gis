<?php

error_reporting(-1);
require_once '../inc/connect.php';
require_once '../funcs/add_field_agro_f.php';

if(!empty($_POST['name_fields'])){
	save_mess_fields1();
	if ($insert_fields == TRUE){
		header("Location: ../../../../agro-gis-test/pages/succes.php");
		}else{
			header("Location: ../../../../agro-gis-test/pages/false.php");
		};

};
 

 
?>


<!DOCTYPE html>
<html>
<head>
    <title>Агро - Эксперт</title>
    <meta charset="utf-8" />		
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="../scripts/popup.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="../../../agro-gis-test/scripts/jquery-3.2.1.min.js"></script>
	<link href="../../../agro-gis-test/css/input-field.css" rel="stylesheet">
	
	
	<link rel="stylesheet" href="../css/input-date.css">
</head>
<body>


<div class="popup-overlay"></div>
					<div id="store_popup_fields" class="popup">
						<div class="popup-body">  <span class="popup-exit"></span>
							<div class="popup-content">
								<h2 class="popup-title">Добавить Поле</h2>
								<div class="flex_container">
									<form method = "post" action="../pages/add_field_agro.php" class="form_staff">				
											<p>
												<label for="name_fields">Введите название:</label><br><br>
												<input type="text" name="name_fields" id="name" placeholder="Например: 2М">
											</p>
											<p>
												<label for="name_region">Введите название региона:</label><br><br>
												<input type="text" name="name_region" id="name" placeholder="Например: Пустошь">
											</p>
											<p>
												<label for="kadastr_fields">Введите кадастр:</label><br><br>
												<input type="text" name="kadastr_fields" id="name" placeholder="Например: 37:11:010589:335
">
											</p>
											<p>
												<label for="square_fields">Площадь поля в Га:</label><br><br>
												<input type="text" name="square_fields" id="name" placeholder="Например: 150">
											</p>
																				
											<button type="submit" class="button_agro">Добавить поле в базу</button>
									</form>	
								</div>
							</div>
						</div>
							<form action="../../../../agro-gis-test/pages/input-date.php">
								<button class="succes_button_agro" >Вернуться назад
								</button>
							</form>
							
					</div>
					

</body>
</html>