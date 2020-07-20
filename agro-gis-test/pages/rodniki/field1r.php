<?php
error_reporting(-1);
require_once '../../inc/connect.php';
require_once '../../funcs/operations_r1.php';

if(!empty($_POST['date_operations'])){
	save_mess_operations_r1();
	header("Location: ../../pages/rodniki/field1r.php");
	die;
} 

$work = "SELECT * FROM `works`";
$result_work = mysqli_query($db1, $work);

$car = "SELECT * FROM `cars`";
$result_car = mysqli_query($db1, $car);

$driver = "SELECT * FROM `staff`";
$result_driver = mysqli_query($db1, $driver);

$trailer = "SELECT * FROM `trailer`";
$result_trailer = mysqli_query($db1, $trailer);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Агро - Эксперт</title>
    <meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
	<link rel="stylesheet" href="../../../agro-gis/css/reset.css"> <!-- CSS reset -->	
	<script src="../../../agro-gis/scripts/modernizr.js"></script> <!-- Modernizr -->
	
	
    <script type="text/javascript" src="../../../agro-gis/scripts/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../../../agro-gis/scripts/popup.js"></script>
	<script type="text/javascript" src="../../../agro-gis/scripts/drop_menu.js"></script>	
	<script type="text/javascript" src="../../scripts/jquery-1.8.2.min.js"> </script>	
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>	
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>				
	<link href="../../../agro-gis-test/css/style.css" rel="stylesheet"> 
	<link href="../../../agro-gis-test/css/up.css" rel="stylesheet">	
	<link href="../../../agro-gis-test/css/diag.css" rel="stylesheet">
	<link href="../../../agro-gis-test/css/field.css" rel="stylesheet">
	<link href="../../../agro-gis-test/css/button.css" rel="stylesheet">
	<link href="../../../agro-gis-test/css/popup.css" rel="stylesheet">
	<link href="../../../agro-gis-test/css/drop_menu.css" rel="stylesheet">
	<link href="../../../agro-gis-test/css/bar.css" rel="stylesheet">
	<link href="../../../agro-gis-test/css/form.css" rel="stylesheet">
	<link href="../../../agro-gis-test/css/galerry.css" rel="stylesheet">
	
		


</head>

<body>
    <?php include "../../../agro-gis-test/includes/header_sidebar.php"; ?>
	<?php include "../../../agro-gis-test/includes/bar.php"; ?>
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
					<input type="checkbox" name ="group-1" id="group-1" checked >
					<label for="group-1">Шуйский район</label>

					<ul class="drop">
						<li class="has-children">
							<input type="checkbox" name ="sub-group-1" id="sub-group-1">
							<label for="sub-group-1"><span class="pole">Дорожаево</span></label>

							<ul>
								<li><a href="../shuya/field1d.php">Поле № 1Д (127 Га)</a></li>
								<li><a href="../shuya/field2d.php">Поле № 2Д (137 Га)</a></li>
								<li><a href="../shuya/field2_1d.php">Поле № 2.1Д (31 Га)</a></li>
								<li><a href="../shuya/field3d.php">Поле № 3Д (18 Га)</a></li>
							</ul>
						</li>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-2" id="sub-group-2">
							<label for="sub-group-2"><span class="pole">Пустошь</span></label>

							<ul>
								
								<li><a href="../shuya/field1p.php">Поле № 1П (53 Га)</a></li>
								<li><a href="../shuya/field2p.php">Поле № 2П (90 Га)</a></li>
								<li><a href="../shuya/field3p.php">Поле № 3П (94 Га)</a></li>
								<li><a href="../shuya/field4p.php">Поле № 4П - 5П(60 Га)</a></li>
								<li><a href="../shuya/field6p.php">Поле № 6П (50 Га)</a></li>
								<li><a href="../shuya/field7p.php">Поле № 7П (60 Га)</a></li>
							</ul>
						</li>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-3" id="sub-group-3">
							<label for="sub-group-3"><span class="pole">Харитоново</span></label>

							<ul>
								<li><a href="../shuya/field1x.php">Поле № 1Х (92 Га)</a></li>
								<li><a href="../shuya/field2x.php">Поле № 2Х (46 Га)</a></li>
								<li><a href="../shuya/field3x.php">Поле № 3Х (42 Га)</a></li>
								<li><a href="../shuya/field3ax.php">Поле № 3аХ (22 Га)</a></li>
								<li><a href="../shuya/field4x.php">Поле № 4Х (56 Га)</a></li>
								<li><a href="../shuya/field4ax.php">Поле № 4аХ (42 Га)</a></li>
								<li><a href="../shuya/field5x.php">Поле № 5Х (23 Га)</a></li>
								<li><a href="../shuya/field6x.php">Поле № 6Х (124 Га)</a></li>
								
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
								<li><a href="../palesh/field4m.php">Поле № 4М (98 Га)</a></li>
								<li><a href="../palesh/field5m.php">Поле № 5М (174 Га)</a></li>
								<li><a href="../palesh/field5am.php">Поле № 5аМ (57 Га)</a></li>
								<li><a href="../palesh/field6m.php">Поле № 6М (60 Га)</a></li>
								<li><a href="../palesh/field6am.php">Поле № 6аМ (22 Га)</a></li>
								<li><a href="../palesh/field7m.php">Поле № 7М (164 Га)</a></li>
								<li><a href="../palesh/field8m.php">Поле № 8М (190 Га)</a></li>
								<li><a href="../palesh/field10m.php">Поле № 10М (90 Га)</a></li>
							</ul>
						</li>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-5" id="sub-group-5">
							<label for="sub-group-5"><span class="pole">Красное</span></label>

							<ul>
								<li><a href="../palesh/field1m.php">Поле № 1М (164 Га)</a></li>
								<li><a href="../palesh/field2m.php">Поле № 2М (100 Га)</a></li>
								<li><a href="../palesh/field3m.php">Поле № 3М (13 Га)</a></li>
								<li><a href="../palesh/field9m.php">Поле № 9М (103 Га)</a></li>
								<li><a href="../palesh/field11m.php">Поле № 11М (82 Га)</a></li>
								<li><a href="../palesh/field11am.php">Поле № 11аМ (15 Га)</a></li>
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
								<li><a href="../rodniki/field4r.php">Поле № 4Р (169 Га)</a></li>
								<li><a href="../rodniki/field4ar.php">Поле № 4аР (71 Га)</a></li>
								<li><a href="../rodniki/field4br.php">Поле № 4бР (61 Га)</a></li>
								<li><a href="../rodniki/field5r.php">Поле № 5Р (68 Га)</a></li>
								<li><a href="../rodniki/field6r.php">Поле № 6Р (101 Га)</a></li>
								<li><a href="../rodniki/field7r.php">Поле № 7Р - 8Р (78 Га)</a></li>
							</ul>
						</li>
						<li class="has-children">
							<input type="checkbox" name ="sub-group-7" id="sub-group-7">
							<label for="sub-group-7"><span class="pole">Кутилово</span></label>

							<ul>
								<li><a href="../rodniki/field1r.php">Поле № 1Р (49 Га)</a></li>
								<li><a href="../rodniki/field2r.php">Поле № 2Р (48 Га)</a></li>
								<li><a href="../rodniki/field2ar.php">Поле № 2аР (32 Га)</a></li>
								<li><a href="../rodniki/field3r.php">Поле № 3Р (62 Га)</a></li>
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
			<div class="field_map_text_2">
			<div id="field_d"><h2>Поле № 1Р(49 Га)</h2>
			<div class="season_block">	
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
			
			</div>
			
				
			</div>
			</div>
			
			
			<div class="korpus">				
	  			<input type="radio" name="odin" checked="checked" id="vkl1"/>
	  			<label for="vkl1">Актуальные данные</label>
	  			<input type="radio" name="odin" id="vkl2"/>
	  			<label for="vkl2">Аналитика</label>
	  			<input type="radio" name="odin" id="vkl3"/>
	  			<label for="vkl3">Карты</label>
	  			<input type="radio" name="odin" id="vkl4"/>
	  			<label for="vkl4">История поля</label>
	  			
	  			<!-- Переменные для meter -->
	  			<?php
					$sql2 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Сев');";
					$result2 = mysqli_query($db1, $sql2);												
					$followingdata = $result2->fetch_array(MYSQLI_ASSOC);
					
					$sql3 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Культивация');";
					$result3 = mysqli_query($db1, $sql3);
					$followingdata1 = $result3->fetch_array(MYSQLI_ASSOC);
					
					$sql4 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Боронование');";
					$result4 = mysqli_query($db1, $sql4);
					$followingdata2 = $result4->fetch_array(MYSQLI_ASSOC);
					
					$sql5 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Дискование');";
					$result5 = mysqli_query($db1, $sql5);												
					$followingdata3 = $result5->fetch_array(MYSQLI_ASSOC);
					
					$sql6 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Прикатывание');";
					$result6 = mysqli_query($db1, $sql6);												
					$followingdata4 = $result6->fetch_array(MYSQLI_ASSOC);
					
					$sql7 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Сбор камней');";
					$result7 = mysqli_query($db1, $sql7);												
					$followingdata5 = $result7->fetch_array(MYSQLI_ASSOC);
					
					$sql8 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Внесение удобрений');";
					$result8 = mysqli_query($db1, $sql8);												
					$followingdata6 = $result8->fetch_array(MYSQLI_ASSOC);
					
					$sql8 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Опрыскивание');";
					$result8 = mysqli_query($db1, $sql8);												
					$followingdata7 = $result8->fetch_array(MYSQLI_ASSOC);
					
					$sql9 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Подсев');";
					$result9 = mysqli_query($db1, $sql9);												
					$followingdata8 = $result9->fetch_array(MYSQLI_ASSOC);
				?>
	  			
  					<!-- Первая вкладака-->
  					<div id="field9">
						<!--<div class="field_map2">				
							<div id="map"><iframe src="http://log2:8080/whether/#14/56.68676/41.48047"  width="400px" height="307px" allowfullscreen></iframe></div>
						</div> -->
						
						
						
						<div class="total">
							<div class="total_block_title"><p>Обработано на <?php echo date("d-m-Y"); ?></p></div>
							<div class="table_div_total">
								<table>
									<tr>
										<td>Сев
											<meter value="<?php echo $followingdata["sum(`done`)"] ?>" max="49" low="0" high="120"></meter>
										</td>
										<td>
										<?php
												$sql2 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Сев');";
												$result2 = mysqli_query($db1, $sql2);												
												$followingdata = $result2->fetch_array(MYSQLI_ASSOC);
												
												echo "<span class='total_span'>" . $followingdata["sum(`done`)"].'&nbsp Га </span> <br> <span class=\'total_span_two\'>выполнено &nbsp'. round($percent = $followingdata["sum(`done`)"]/49*100, 1). "%"; ?>  
										
										</td>
									</tr>
									<tr>
										<td>Культивация
											<meter value="<?php echo $followingdata1["sum(`done`)"] ?>" max="49" low="0" high="120"></meter>
										</td>
										<td>
											<?php
												$sql3 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Культивация');";
												$result3 = mysqli_query($db1, $sql3);
												$followingdata1 = $result3->fetch_array(MYSQLI_ASSOC);
												
												echo "<span class='total_span'>" . $followingdata1["sum(`done`)"].'&nbsp Га </span> <br> <span class=\'total_span_two\'>выполнено &nbsp'. round($percent = $followingdata1["sum(`done`)"]/49*100, 1). "%"; ?> 	
										
										</td>
									</tr>
									<tr>
										<td>Боронование
											<meter value="<?php echo $followingdata2["sum(`done`)"] ?>" max="49" low="0" high="120"></meter>
										</td>
										<td>
											<?php
												$sql3 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Боронование');";
												$result3 = mysqli_query($db1, $sql3);
												$followingdata1 = $result3->fetch_array(MYSQLI_ASSOC);
												
												echo "<span class='total_span'>" . $followingdata1["sum(`done`)"].'&nbsp Га </span> <br> <span class=\'total_span_two\'>выполнено &nbsp'. round($percent = $followingdata1["sum(`done`)"]/49*100, 1). "%"; ?> 	
										
										</td>
									</tr>
									<tr>
										<td>Дискование
											<meter value="<?php echo $followingdata3["sum(`done`)"] ?>" max="49" low="0" high="120"></meter>
										</td>
										<td>
											<?php
												$sql4 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Дискование');";
												$result4 = mysqli_query($db1, $sql4);
												
												$followingdata2 = $result4->fetch_array(MYSQLI_ASSOC);
												
												echo "<span class='total_span'>" . $followingdata2["sum(`done`)"].'&nbsp Га </span> <br> <span class=\'total_span_two\'>выполнено &nbsp'. round($percent = $followingdata2["sum(`done`)"]/49*100, 1). "%"; ?>  		
										</td>
									</tr>
									<tr>
										<td>Прикатывание
											<meter value="<?php echo $followingdata4["sum(`done`)"] ?>" max="49" low="0" high="120"></meter>
										</td>
										<td>
											<?php
												$sql5 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Прикатывание');";
												$result5 = mysqli_query($db1, $sql5);
												
												$followingdata3 = $result5->fetch_array(MYSQLI_ASSOC);
												
												echo "<span class='total_span'>" . $followingdata3["sum(`done`)"].'&nbsp Га </span> <br> <span class=\'total_span_two\'>выполнено &nbsp'. round($percent = $followingdata3["sum(`done`)"]/49*100, 1). "%"; ?> 
										</td>
									</tr>
									<tr>
										<td>Сбор камней
											<meter value="<?php echo $followingdata5["sum(`done`)"] ?>" max="49" low="0" high="120"></meter>
										</td>
										<td>
											<?php
												$sql6 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Сбор камней');";
												$result6 = mysqli_query($db1, $sql6);
												
												$followingdata4 = $result6->fetch_array(MYSQLI_ASSOC);
												
												echo "<span class='total_span'>" . $followingdata4["sum(`done`)"].'&nbsp Га </span> <br> <span class=\'total_span_two\'>выполнено &nbsp'. round($percent = $followingdata4["sum(`done`)"]/49*100, 1). "%"; ?> 
										</td>
									</tr>
									<tr>
										<td>Внесение удобрений
											<meter value="<?php echo $followingdata6["sum(`done`)"] ?>" max="49" low="0" high="120" ></meter>
										</td>
										<td>
											<?php
												$sql7 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Внесение удобрений');";
												$result7 = mysqli_query($db1, $sql7);
												
												$followingdata5 = $result7->fetch_array(MYSQLI_ASSOC);
												
												echo "<span class='total_span'>" . $followingdata5["sum(`done`)"].'&nbsp Га </span> <br> <span class=\'total_span_two\'>выполнено &nbsp'. round($percent = $followingdata5["sum(`done`)"]/49*100, 1). "%"; ?>  
										</td>
									</tr>
									<tr>
										<td>Опрыскивание
											<meter value="<?php echo $followingdata7["sum(`done`)"] ?>" max="49" low="0" ></meter>
										</td>
										<td>
											<?php
												$sql8 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Опрыскивание');";
												$result8 = mysqli_query($db1, $sql8);
												
												$followingdata6 = $result8->fetch_array(MYSQLI_ASSOC);
												
												echo "<span class='total_span'>" . $followingdata6["sum(`done`)"].'&nbsp Га </span> <br> <span class=\'total_span_two\'>выполнено &nbsp'. round($percent = $followingdata6["sum(`done`)"]/49*100, 1). "%"; ?> 
												
										</td>
									</tr>
									<tr>
										<td>Подсев
											<meter value="<?php echo $followingdata8["sum(`done`)"] ?>" max="49" low="0" ></meter>
										</td>
										<td>
											<?php
												$sql9 =  "SELECT sum(`done`) FROM `operations-r1` WHERE `operations` in ('Подсев');";
												$result9 = mysqli_query($db1, $sql9);
												
												$followingdata7 = $result9->fetch_array(MYSQLI_ASSOC);
												
												echo "<span class='total_span'>" . $followingdata7["sum(`done`)"].'&nbsp Га </span> <br> <span class=\'total_span_two\'>выполнено &nbsp'. round($percent = $followingdata7["sum(`done`)"]/49*100, 1). "%"; 
												
												?> 
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="total-1">
							<div class="seed_consumption">
								<div class="total_block_title"><p>Расход семян на <?php echo date("d-m-Y"); ?></p></div>
								<div class="seed_consumption_table">
									<table class="seed_table">
										<thead>
											<tr>
												<th>Площадь, га</th>
												<th>План, тн</th>
												<th>Расход семян, тн</th>
												<th>Норма высева, кг/га</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>127</td>
												<td>1</td>
												<td>1</td>
												<td>1</td>
											</tr>
											<tr>
												<td colspan="2">Наименование</td>
												
												<td colspan="2"> Израсходовано %
													<br><meter value="59" max="49" low="0"></meter>
												</td>
												
											</tr>
										</tbody>
									
									</table>
								</div>
							</div>
							<div class="fertilizer_application">
								<div class="total_block_title"><p>Внесено удобрений на <?php echo date("d-m-Y"); ?></p></div>
								<div class="seed_consumption_table">
									<table class="seed_table">
										<thead>
											<tr>
												<th>Площадь, га</th>
												<th>План, тн</th>
												<th>Расход удобрений, тн</th>
												<th>Норма внесения, тн/га</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>127</td>
												<td>1</td>
												<td>1</td>
												<td>1</td>
											</tr>
											<tr>
												<td colspan="2">Наименование</td>
												
												<td colspan="2"> Израсходовано %
													<br><meter value="59"  max="49"></meter>
												</td>
												
											</tr>
										</tbody>
									
									</table>
								</div>
							</div>
							<div class="sprinkling">
								<div class="total_block_title"><p>Опрыскано на <?php echo date("d-m-Y"); ?></p></div>
								<div class="seed_consumption_table">
									<table class="seed_table">
										<thead>
											<tr>
												<th>Площадь, га</th>
												<th>План, тн</th>
												<th>Расход, л</th>
												<th>Норма внесения, л/га</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>127</td>
												<td>1</td>
												<td>1</td>
												<td>1</td>
											</tr>
											<tr>
												<td colspan="2">Наименование</td>
												
												<td colspan="2"> Израсходовано %
													<br><meter value="115" max="49" low="0"></meter>
												</td>
												
											</tr>
										</tbody>
									
									</table>
								</div>
							</div>
						</div>
						<div class="button_add_operations">
							<div id="operation"><button data-popup-target="#add_operations_popup" class="button9">Добавить Операцию</button></div>
						</div>
						
						<div class="table_div">  
   
							<div class="table-responsive">  
								<table id="editable_table" class="operation_table">
									 <thead>
									  <tr>
									   <th>ID</th>
									   <th>Время</th>
									   <th>Операция</th>
										<th>Основные</th>
										<th>Прицепные</th>
										<th>Исполнитель</th>
										<th>Га</th>
									  </tr>
									 </thead>
									 <tbody>
									 <?php
										$sql =  "SELECT  id, date_operations, operations, main, trailer, driver, done FROM `operations-r1` ORDER BY date_operations DESC LIMIT 20";
										$result = $db1-> query($sql);

									 
										 while($row = mysqli_fetch_array($result))
										 {
										  
										  echo "<tr><td>" . $row["id"] ."</td><td>" . $row["date_operations"] . "</td><td>" . $row["operations"] . "</td><td>" . $row["main"] . "</td><td>" . $row["trailer"] . "</td><td>" . $row["driver"] . "</td><td>" . $row["done"] .  '</td></tr>';
										 }
									 ?>
									 </tbody>
								</table>
						   </div>  
					  </div>  
						<!--<div class="harvesr_block">
							<div class="harvesr_block_title"><p>Урожайность</p></div>
							<div class="harvesr_block_date">
								<ul>
									<li>План</li>
									<li>Прогноз</li>
									<li>Пред. план</li>
									<li>Факт</li>
								</ul>
								<ul>
									<li><span>261 Га</span></li>
									<li><span>-</span></li>
									<li> 405 Га </li>
									<li><span>-</span></li>
								</ul>
								<ul>
									<li>Дата уборки</li>
									
									<li> - </li>
									<li> - </li>
									<li> - </li>
									
								</ul>
								
							</div>
						</div>
						<div class="square_block">
							<div class="square_block_title"><p>Площадь</p></div>
							<ul>
								<li>Кадастр</li>
								<li class="square_block_li"><span>140 Га</span></li>
							</ul>
							<ul>
								<li>Используемая</li>
								<li><span>127 Га</span></li>
							</ul>
						</div>
						<div class="technology">
							<ul>
								<li>Технология</li>
								<li><span>Стандартная</span></li>
								<li>Норма высева</li>
								<li>-</li>
							</ul>
							<ul>
								<li>Сорт\гибрид</li>
								<li><span>-</span></li>
								<li>Схема защиты</li>
								<li>-</li>
							</ul>
							<ul>
								<li>Дата сева</li>
								<li><span>-</span></li>
								<li>-</li>
								<li>-</li>
							</ul>
							
						</div>-->
					


					</div>
					<!-- Вторая вкладака-->	
					<div class="analitika">
						<div class="chart">							
							<?php
								include_once("../../includes/linked-chart-single-level.php");
							?>
						</div>
						<div class="chart_1">
							
							<div id="chart-container1"></div>
							<script>
								FusionCharts.ready(function () {
									    var revenueChart = new FusionCharts({
									        type: 'doughnut3d',
									        renderAt: 'chart-container1',
									        width: '550',
									        height: '300',
									        dataFormat: 'json',
									        dataSource: {
									            "chart": {
									                "caption": "Структура затрат на выращивание",
									                "subCaption": "2017-2018 год",
									                "numberPrefix": "$",
									                "paletteColors": "#0075c2,#1aaf5d,#f2c500,#f45b00,#8e0000",
									                "bgColor": "#ffffff",
									                "showBorder": "0",
									                "use3DLighting": "0",
									                "showShadow": "0",
									                "enableSmartLabels": "0",
									                "startingAngle": "310",
									                "showLabels": "0",
									                "showPercentValues": "1",
									                "showLegend": "1",
									                "legendShadow": "0",
									                "legendBorderAlpha": "0",                                
									                "decimals": "0",
									                "captionFontSize": "14",
									                "subcaptionFontSize": "14",
									                "subcaptionFontBold": "0",
									                "toolTipColor": "#ffffff",
									                "toolTipBorderThickness": "0",
									                "toolTipBgColor": "#000000",
									                "toolTipBgAlpha": "80",
									                "toolTipBorderRadius": "2",
									                "toolTipPadding": "5",
									            },
									            "data": [
									                {
									                    "label": "СЗР",
									                    "value": "28504"
									                }, 
									                {
									                    "label": "Удобрения",
									                    "value": "14633"
									                }, 
									                {
									                    "label": "Топливо",
									                    "value": "10507"
									                }, 
									                {
									                    "label": "Семяна",
									                    "value": "4910"
									                },
									                {
									                    "label": "Оплата труда",
									                    "value": "4915"
									                }
									                
									                
									            ]
									        }
									    }).render();
									});
							</script>
						</div>
						<div class="chart_2">
							<div id="chart-container"></div>
							<script>
								FusionCharts.ready(function(){
    var salesChart = new FusionCharts({
        type: 'scrollline2d',
        dataFormat: 'json',
        renderAt: 'chart-container',
        width: '550',
        height: '300',
        dataSource: {
            "chart": {
                "caption": "Затраты",
                "subCaption": "(с 2016 по 2018)",
                "xAxisName": "Квартал",
                "yAxisName": "В Рублях",
                "showValues": "0",
                "numberPrefix": "Руб",
                "showBorder": "0",
                "showShadow": "0",
                "bgColor": "#ffffff",
                "paletteColors": "#008ee4",
                "showCanvasBorder": "0",
                "showAxisLines": "0",
                "showAlternateHGridColor": "0",
                "divlineAlpha": "100",
                "divlineThickness": "1",
                "divLineIsDashed": "1",
                "divLineDashLen": "1",
                "divLineGapLen": "1",
                "lineThickness": "3",  
                "flatScrollBars": "1",
                "scrollheight": "10",
                "numVisiblePlot": "12",
                "showHoverEffect":"1"
            },
            "categories": [
                {
                    "category": [
                        { "label": "Весна 2016" },
                        { "label": "Лето 2016" },
                        { "label": "Осень 2016" },
                        { "label": "Зима 2016" },
                        { "label": "Весна 2017" },
                        { "label": "Лето 2017" },
                        { "label": "Осень 2017" },
                        { "label": "Зима 2017" },
                        { "label": "Весна 2018" },
                        { "label": "Лето 2018" },
                        { "label": "Осень 2018" },
                        { "label": "Зима 2018" }
                        
                    ]
                }
            ],
            "dataset": [
                {
                    "data": [
                        { "value": "27400" },
                        { "value": "29800" },
                        { "value": "25800" },
                        { "value": "26800" },
                        { "value": "29600" },
                        { "value": "32600" },
                        { "value": "31800" },
                        { "value": "36700" },
                        { "value": "29700" },
                        { "value": "31900" },
                        { "value": "34800" },
                        { "value": "24800" },
                        { "value": "26300" },
                        { "value": "31800" },
                        { "value": "30900" },
                        { "value": "33000" },
                        { "value": "36200" },
                        { "value": "32100" },
                        { "value": "37500" },
                        { "value": "38500" },
                        { "value": "35400" },
                        { "value": "38200" },
                        { "value": "33300" },
                        { "value": "38300" }
                    ]
                }
            ]
        }
    }).render();
});
								
							</script>
						</div>
						<div class="chart_3">
							<div id="chart-container4"></div>
							<script>
								FusionCharts.ready(function () {
    var revenueChart = new FusionCharts({
        type: 'stackedcolumn3dline',
        renderAt: 'chart-container4',
        width: '550',
        height: '300',
        dataFormat: 'json',
        dataSource: {            
            "chart": {
                "showvalues": "1",
                "caption": "Внесение удобрений",
                "subcaption": "По годам",
                "numberprefix": "",
                "xaxisname": "Год",
                "yaxisname": "Литр",
                "paletteColors": "#0075c2,#1aaf5d,#f2c500",
                "bgColor": "#ffffff",
                "borderAlpha": "20",               
                "showCanvasBorder": "0",
                "usePlotGradientColor": "0",
                "plotBorderAlpha": "10",
                "legendBorderAlpha": "0",
                "legendShadow": "0",
                "legendBgAlpha": "0",
                "valueFontColor": "#ffffff",               
                "showXAxisLine": "1",
                "xAxisLineColor": "#999999",
                "divlineColor": "#999999",               
                "divLineIsDashed": "1",
                "showAlternateHGridColor": "0",
                "subcaptionFontBold": "0",
                "subcaptionFontSize": "14",
                "numberscaleunit": "Л,EB",
                "showHoverEffect":"1"
            },
            "categories": [
                {
                    "category": [
                        {
                            "label": "2016"
                        },
                        {
                            "label": "2017"
                        },
                        {
                            "label": "2018"
                        },
                        {
                            "label": "2019"
                        }
                    ]
                }
            ],
            "dataset": [
                {
                    "seriesname": "План",
                    "data": [
                        {
                            "value": "235000"
                        },
                        {
                            "value": "225100"
                        },
                        {
                            "value": "222000"
                        },
                        {
                            "value": "230500"
                        }
                    ]
                },
                {
                    "seriesname": "Факт",
                    "data": [
                        {
                            "value": "230000"
                        },
                        {
                            "value": "143000"
                        },
                        {
                            "value": "198000"
                        },
                        {
                            "value": "327600"
                        }
                    ]
                },
                
            ]
        }
    }).render();    
});
							</script>
						</div>
					</div>
					<!-- Третья вкладака-->	
					<div class="karty"><p>Карты</p></div>
					<!-- Четвертая вкладка-->	
					<div class="history_field">
						<div class="history_wrap_title">
							<ul>
								<li> Год урожая </li>
								<li> Культура </li>
								<li> Технология </li>
								<li> Площадь </li>
								<li> Урожайность, Факт </li>
							</ul>
						</div>
						<div class="history_wrap">
							<div class="mini-menu">
							    <ul>
							          <li class="sub">
							            <a href="#">
							            	
							            		<div class="date">2018</div>
							            		<div class="date">Озимая пшеница</div>
							            		<div class="date">Классика</div>
							            		<div class="date">150</div>
							            		<div class="date">-</div>					            			   
							            	
							            </a>
							            <ul>
							               <li>
							               	<div class="sub-date">
							               		<div class="sub-date-first">
							               			<div class="sub-first">
							               				<div class="sub-first-position"><p style="font-weight: bold">культура</p></div>
							               				<div class="sub-first-position"><p>сорт</p></div>
							               				<div class="sub-first-position"><p>поколение</p></div>
							               				<div class="sub-first-position"><p>технология</p></div>
							               				<div class="sub-first-position"><p>дата сева</p></div>
							               				<div class="sub-first-position"><p>дата уборки</p></div>
							               				<div class="sub-first-position"><p>урожайность, факт, ц/га</p></div>
							               				<div class="sub-first-position"><p>урожайность, план, ц/га</p></div>
							               				<div class="sub-first-position"><p>общая площадь, га</p></div>
							               				<div class="sub-first-position"><p>обрабатываемая площадь, га</p></div>
							               				
							               			</div>
							               			<div class="sub-second">
							               				<div class="sub-first-position"><p align="center" style="font-weight: bold">Озимая пшеница</p></div>
							               				<div class="sub-first-position"><p align="center">-</p></div>
							               				<div class="sub-first-position"><p align="center">первое</p></div>
							               				<div class="sub-first-position"><p align="center">классика</p></div>
							               				<div class="sub-first-position"><p align="center">02.05.2018</p></div>
							               				<div class="sub-first-position"><p align="center">-</p></div>
							               				<div class="sub-first-position"><p align="center">-</p></div>
							               				<div class="sub-first-position"><p align="center">261</p></div>
							               				<div class="sub-first-position"><p align="center">150</p></div>
							               				<div class="sub-first-position"><p align="center">127</p></div>
							               			</div>
							               		</div>
											
												<div class="sub-date-second">  
							               			<div class="row">
													  <div class="column">
														<img src="../../img/D_2018/DJI_0680.JPG" style="width:100%" onclick="openModal1();currentSlide(1)" class="hover-shadow cursor">
													  </div>
													</div>

													<div id="myModal_d1" class="modal">
													  <span class="close cursor" onclick="closeModal1()">&times;</span>
													  <div class="modal-content">

														<div class="mySlides_gal_d1">
														  <div class="numbertext">1 / 4</div>
														  <img src="../../img/D_2018/DJI_0680.JPG" style="width:100%">														</div>

														<div class="mySlides_gal_d1">
														  <div class="numbertext">2 / 4</div>
														  <img src="../../img/D_2018/DJI_0681.JPG" style="width:100%">
														</div>

														<div class="mySlides_gal_d1">
														  <div class="numbertext">3 / 4</div>
														  <img src="../../img/D_2018/DJI_0684.JPG" style="width:100%">
														</div>
														
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0685.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0686.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0687.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0696.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0697.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0698.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0699.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0700.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0701.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0702.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0703.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0704.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0716.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0717.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0718.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0719.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0720.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0721.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0722.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0723.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0724.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0738.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0739.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0740.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0741.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0745.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0747.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0748.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0749.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0750.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0751.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0752.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0753.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0754.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0755.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0756.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0757.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0774.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0775.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0776.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0777.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0778.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0779.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0780.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0781.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0785.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0787.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0788.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0790.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0797.JPG" style="width:100%">
														</div>
														<div class="mySlides_gal_d1">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/D_2018/DJI_0798.JPG" style="width:100%">
														</div>
														<a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
														<a class="next" onclick="plusSlides1(1)">&#10095;</a>

														<div class="caption-container">
														  <p id="caption1"></p>
														</div>
													  </div>
													</div>		
												 </div>
												
							               		
							               		<div class="sub-date-fird">							               				

																		               		
							               		
							               		</div>
							               	</div>	
							               		
							               </li>
							               
							            </ul>
							        </li>
							        <li class="sub">
							            <a href="#">
							            	<div class="date">2017</div>
							            		<div class="date">Горох</div>
							            		<div class="date">Классика</div>
							            		<div class="date">150</div>
							            		<div class="date">386,5</div>								            	
							            </a>
							            <ul>
							               <li>
							               <div class="sub-date">
							               		<div class="sub-date-first">
							               			<div class="sub-first">
							               				<div class="sub-first-position"><p style="font-weight: bold">культура</p></div>
							               				<div class="sub-first-position"><p>сорт</p></div>
							               				<div class="sub-first-position"><p>поколение</p></div>
							               				<div class="sub-first-position"><p>технология</p></div>
							               				<div class="sub-first-position"><p>дата сева</p></div>
							               				<div class="sub-first-position"><p>дата уборки</p></div>
							               				<div class="sub-first-position"><p>урожайность, факт, ц/га</p></div>
							               				<div class="sub-first-position"><p>урожайность, план, ц/га</p></div>
							               				<div class="sub-first-position"><p>учетная площадь, га</p></div>
							               				<div class="sub-first-position"><p>расчетная площадь, га</p></div>
							               				
							               			</div>
							               			<div class="sub-second">
							               				<div class="sub-first-position"><p align="center" style="font-weight: bold">горох</p></div>
							               				<div class="sub-first-position"><p align="center">-</p></div>
							               				<div class="sub-first-position"><p align="center">первое</p></div>
							               				<div class="sub-first-position"><p align="center">классика</p></div>
							               				<div class="sub-first-position"><p align="center">02.05.2017</p></div>
							               				<div class="sub-first-position"><p align="center">15.09.2017</p></div>
							               				<div class="sub-first-position"><p align="center">386,5</p></div>
							               				<div class="sub-first-position"><p align="center">405</p></div>
							               				<div class="sub-first-position"><p align="center">150</p></div>
							               				<div class="sub-first-position"><p align="center">150</p></div>
							               			</div>
							               		</div>
							               		<div class="sub-date-second">
							               			<div class="row">
													  <div class="column">
														<img src="../../img/№ 1 Д (150 Га)/DJI_0462.JPG" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
													  </div>
													</div>

													<div id="myModal" class="modal">
													  <span class="close cursor" onclick="closeModal()">&times;</span>
													  <div class="modal-content">

														<div class="mySlides_gal">
														  <div class="numbertext">1 / 4</div>
														  <img src="../../img/№ 1 Д (150 Га)/DJI_0462.JPG" style="width:100%">
														</div>

														<div class="mySlides_gal">
														  <div class="numbertext">2 / 4</div>
														  <img src="../../img/№ 1 Д (150 Га)/DJI_0461.JPG" style="width:100%">
														</div>

														<div class="mySlides_gal">
														  <div class="numbertext">3 / 4</div>
														  <img src="../../img/№ 1 Д (150 Га)/DJI_0460.JPG" style="width:100%">
														</div>
														
														<div class="mySlides_gal">
														  <div class="numbertext">4 / 4</div>
														  <img src="../../img/№ 1 Д (150 Га)/DJI_0459.JPG" style="width:100%">
														</div>
														
														<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
														<a class="next" onclick="plusSlides(1)">&#10095;</a>

														<div class="caption-container">
														  <p id="caption"></p>
														</div>
													  </div>
													</div>		
												</div>	
												
												
												
												
												
												
							               		  
							               		 <div class="sub-date-fird">
							               											               		
							               		
							               		</div> 
							               		    		
							              </div>              		
							            </li>
							              
							            </ul>
							        </li>
							        <li class="sub">
							            <a href="#">
							            	<div class="date">2014</div>
							            		<div class="date">Пар</div>
							            		<div class="date">-</div>
							            		<div class="date">101</div>
							            		<div class="date">56</div>
							            </a>
							            <ul>
							                <li><div class="sub-date">
							                		
							                	
							                </div>
							                </li>
							                
							            </ul>
							        </li>
							        
							    </ul>
							</div>

						</div>
					
					
					
					</div>
					
				
				</div>	
			</div>
			<div class="popup-overlay"></div>
					<div id="add_operations_popup" class="popup">
						<div class="popup-body">  <span class="popup-exit"></span>
							<div class="popup-content">
								<h2 class="popup-title">Добавить Операцию</h2>
								<div class="flex_container">
									<form method = "post" action="../../pages/rodniki/field1r.php" class="form_staff">
										
										<p>
											<label for="date_operations">Дата:</label><br>
											<input type="datetime-local" format="dd/MM/yyyy" name="date_operations" id="name" placeholder="Введите имя">
										</p>
										<p>
											<label for="operations">Наименование работы</label><br>
											<select type="text" name="operations" id="name2">
												<?php while($row1 = mysqli_fetch_array($result_work)):;	?>
												<option ><?php echo $row1[1]; ?></option>
												<?php endwhile; ?>
											</select>
										</p>
										<p>
											<label for="main">Основные</label><br>
											<select type="text" name="main" id="name2" >
												<?php while($row1 = mysqli_fetch_array($result_car)):;	?>
												<option ><?php echo $row1[1]; ?></option>
												<?php endwhile; ?>
												
												
											</select>
										</p>
										<p>
											<label for="trailer">Прицепные:</label><br>
											<select type="text" name="trailer" id="name2" >
												<?php while($row1 = mysqli_fetch_array($result_trailer)):;	?>
												<option><?php echo $row1[1]; ?></option>
												<?php endwhile; ?>
												
											</select>
										</p>
										<p>
											<label for="driver">Исполнитель:</label><br>
											<select type="text" name="driver" id="name2">
												<?php while($row1 = mysqli_fetch_array($result_driver)):;	?>
												<option ><?php echo $row1[1];?> 
												<?php 
												echo $row1[3]; ?></option>
												<?php endwhile; ?>										
												
											</select>
										</p>
										<p>
											<label for="done">Обработано в Га:</label><br>
											<input type="number" name="done" id="name2">
										</p><hr><hr><br>
										
										
										<button type="submit" class="button2">Добавить</button>
									</form>	
								</div>
							</div>
						</div>
					</div>
<script src="../../../agro-gis/scripts/galerry.js"></script>
<script src="../../../agro-gis/scripts/galerry_d1.js"></script>
<script src="../../../agro-gis/scripts/jquery-2.1.4.js"></script>
<script src="../../../agro-gis/scripts/main.js"></script> <!-- Resource jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<!-- DropDown menu field history -->
<script type="text/javascript">
$(document).ready(function () {
    $('.sub > a').click(function(){
      $('.sub ul').slideUp();
       if ($(this).next().is(":visible")){
           $(this).next().slideUp();
       } else {
       $(this).next().slideToggle();
       }
      return false;
    });
       $('.mini-menu > ul > li > a').click(function(){
	   $('.mini-menu > ul > li > a, .sub a').removeClass('active');
	   $(this).addClass('active');
	}),
       $('.sub ul li a').click(function(){
	   $('.sub ul li a').removeClass('active');
	   $(this).addClass('active');
	});
});
</script>


</body>
</html>>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="../../scripts/jquery.tabledit.min.js"></script>
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'../../funcs/action_r1.php',
      columns:{
       identifier:[0, "id"],
       
       editable: [[1, 'date_operations'], [2, 'operations'], [3, 'main'], [4, 'trailer'], [5, 'driver'], [6, 'done']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>