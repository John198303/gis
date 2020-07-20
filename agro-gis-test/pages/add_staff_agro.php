<?php

error_reporting(-1);
require_once '../inc/connect.php';
require_once '../funcs/add_staff_agro_s.php';

if(!empty($_POST['name_staff'])){
	save_mess_staff();
	if ($insert_staff == TRUE){
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
								<h2 class="popup-title">Добавить Сотрудника</h2>
								<div class="flex_container">
									<form method = "post" action="../pages/add_staff_agro.php" class="form_staff">				
											<p>
												<label for="name_fields">Введите имя:</label><br><br>
												<input type="text" name="name_staff" id="name" placeholder="Например: Иван">
											</p>
											<p>
												<label for="name_region">Введите отчество:</label><br><br>
												<input type="text" name="name2_staff" id="name" placeholder="Например: Иванович">
											</p>
											<p>
												<label for="kadastr_fields">Введите фамилию:</label><br><br>
												<input type="text" name="nome" id="name" placeholder="Например: Иванов
">
											</p>
											<p>
												<label for="square_fields">Введите телефон:</label><br><br>
												<input type="text" name="phone" id="name" placeholder="Например: 8-910-690-4587">
											</p>
																				
											<button type="submit" class="button_agro">Добавить сотрудника в базу</button>
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