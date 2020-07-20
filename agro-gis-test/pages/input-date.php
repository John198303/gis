<?php

error_reporting(-1);
require_once '../inc/connect.php';
require_once '../funcs/add_field.php';

if(!empty($_POST['field'])){
	save_mess_field();	
	if ($insert_field == TRUE){
		header("Location: ../../../../agro-gis-test/pages/succes.php");
		}else{
			header("Location: ../../../../agro-gis-test/pages/false.php");
		};
	
	die;
	
}; 




$work = "SELECT * FROM `works`";
$result_work = mysqli_query($db1, $work);

$car = "SELECT * FROM `cars`";
$result_car = mysqli_query($db1, $car);

$field = "SELECT * FROM `fields`";
$result_fields = mysqli_query($db1, $field);
$driver = "SELECT * FROM `staff` ORDER BY nome ASC";
$result_driver = mysqli_query($db1, $driver);
$trailer = "SELECT * FROM `trailer`";
$result_trailer = mysqli_query($db1, $trailer);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Агро - Эксперт</title>
    <meta charset="utf-8" />		
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="../../../agro-gis-test/scripts/jquery-3.2.1.min.js"></script>
	<link href="../../../agro-gis-test/css/input-field.css" rel="stylesheet">
	
	<link rel="stylesheet" href="../css/input-date.css">
</head>
<body>	
	
	
	
					<div id="add_operations_popup" class="popup"><span class="title_header">Сервис-Профи</span>
						<div class="popup-body">  <span class="popup-exit"></span>
							<div class="popup-content">
								<h2 class="popup-title">Добавить Операцию</h2>
								<div class="flex_container">
									<form method = "post" action="../../../../agro-gis-test/pages/input-date.php" class="form_staff">
										<div id="form_p">
										<p>
											<label for="trailer"><span class="span_input">Поле:</span></label><br>
											<select type="text" name="field" id="name2" >
												<?php while($row1 = mysqli_fetch_array($result_fields)):;	?>
												<option ><?php echo $row1[1]; ?>
												
												</option>
												<?php endwhile; ?>
											</select>
											
										</p>
										</div>
										<div id="form_a">
										<a href="../../../../agro-gis-test/pages/add_field_agro.php"><img src="../../../../agro-gis-test/img/Add.png" width="30" height="30" alt="Пример"></a>	
										</div>
										<div id="form_time">
										<p>
											<label for="date_operations">Дата:</label><br>
											<input type="datetime-local" format="dd/MM/yyyy" name="date_operations" id="name2" >
										</p>
										</div>
										<div id="form_p_operations">
										<p>
											<label for="operations">Наименование работы</label><br>
											<select type="text" name="operations" id="name2">
												<?php while($row1 = mysqli_fetch_array($result_work)):;	?>
												<option ><?php echo $row1[1]; ?></option>
												<?php endwhile; ?>
											</select>
										</p>
										</div>
										<div id="form_a">
										<a href="../../../../agro-gis-test/pages/add_work_agro.php"><img src="../../../../agro-gis-test/img/Add.png" width="30" height="30" alt="Пример"></a>	
										</div>
										<div id="form_p_operations">
										<p>
											<label for="main">Основные</label><br>
											<select type="text" name="main" id="name2" >
												<?php while($row1 = mysqli_fetch_array($result_car)):;	?>
												<option ><?php echo $row1[1]; ?></option>
												<?php endwhile; ?>
												
												
											</select>
										</p>
										</div>
										<div id="form_a_operations">
										<a href="../../../../agro-gis-test/pages/add_car_agro.php"><img src="../../../../agro-gis-test/img/Add.png" width="30" height="30" alt="Пример"></a>	
										</div>
										<div id="form_p_operations">
										<p>
											<label for="trailer">Прицепные:</label><br>
											<select type="text" name="trailer" id="name2" >
												<?php while($row1 = mysqli_fetch_array($result_trailer)):;	?>
												<option><?php echo $row1[1]; ?></option>
												<?php endwhile; ?>
												
												
											</select>
										</p>
										</div>
										<div id="form_a_operations">
										<a href="../../../../agro-gis-test/pages/add_trailer_agro.php"><img src="../../../../agro-gis-test/img/Add.png" width="30" height="30" alt="Добавить поле"></a>	
										</div>
										<div id="form_p_operations">
										<p>
											<label for="driver">Исполнитель:</label><br>
											<select type="text" name="driver" id="name2">
												<?php while($row1 = mysqli_fetch_array($result_driver)):;	?>
												<option ><?php echo $row1[3];?> 
												<?php 
												echo $row1[1]; ?></option>
												<?php endwhile; ?>										
												
											</select>
										</p>
										</div>
										<div id="form_a_operations">
										<a href="../../../../agro-gis-test/pages/add_staff_agro.php"><img src="../../../../agro-gis-test/img/Add.png" width="30" height="30" alt="Пример"></a>	
										</div>
										<div id="form_time">
										<p>
											<label for="done">Обработано в Га:</label><br>
											<input type="number" name="done" id="name2">
										</p></div><br>
										
										
										<button type="submit" class="button2">Добавить</button>
										<div class="output">
											
										</div>
									</form>	
								</div>
							</div>
						</div>
					<span class="copyright">&#169 Potekhin 2017 - <?php echo date("Y"); ?></span></div>
	
</body>		
</html>