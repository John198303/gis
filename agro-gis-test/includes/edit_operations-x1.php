<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Редактирование</title>
	<style> 
input[type=text] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	background: #dce8e8;
}
input[type=submit] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	background: #1fa7a7;
    color: white;
	cursor: pointer;
}
#container{
	margin: 0 auto;
    position: relative;
    max-width: 550px;
}
</style>
</head>

<body>

<?php

require_once '../inc/connect.php';

$id =  $_GET['id'];

$result = mysqli_query($db1," SELECT id, date_operations,operations,main,trailer,driver,done FROM `operations-x1`
                         WHERE id='$id'   
");

$row = mysqli_fetch_assoc($result);

if(isset($_POST['save']))
{
    $date_operations = strip_tags(trim($_POST['date_operations']));
    $operations = strip_tags(trim($_POST['operations']));
    $main = strip_tags(trim($_POST['main']));
	$trailer = strip_tags(trim($_POST['trailer']));
	$driver = strip_tags(trim($_POST['driver']));
	$done = strip_tags(trim($_POST['done']));
    
   $result3 = mysqli_query($db1, " UPDATE `operations-x1` SET date_operations='$date_operations', operations='$operations', main='$main', trailer='$trailer', driver='$driver', done='$done' WHERE id='$id' ");
    
	if ($result3 == TRUE){
		echo "Данные успешно изменены";
		header("Location: ../../../../agro-gis-test/pages/shuya/field1x.php");
		}else{
			header("Location: ../../../../agro-gis-test/pages/false.php");
		};
	
    mysqli_close($db1);
}

?>
<div id="container">
<form id="form" class="topBefore" method="post" action="edit_operations-x1.php?id=<?php echo $id; ?>">

<br />
<label style="font-weight: bold;" for="date_operations">Дата:</label><br>
<input id="name" type="text" name="date_operations" value="<?php echo $row['date_operations']; ?>" /><br><br>

 <br />
 <label style="font-weight: bold;" for="text">Операция:</label><br>
<input id="email" type="text" name="operations" value="<?php echo $row['operations']; ?>" /><br /><br>

<br />
<label style="font-weight: bold;" for="text">Техника:</label><br>
<input id="name" type="text" name="main" value="<?php echo $row['main']; ?>" /><br /><br /><br>
<label style="font-weight: bold;" for="text">Прицепные:</label><br>
<input id="name" type="text" name="trailer" value="<?php echo $row['trailer']; ?>" /><br /><br /><br>
<label style="font-weight: bold;" for="text">Исполнитель:</label><br>
<input id="name" type="text" name="driver" value="<?php echo $row['driver']; ?>" /><br /><br /><br>
<label style="font-weight: bold;" for="text">Обработано:</label><br>
<input id="name" type="text" name="done" value="<?php echo $row['done']; ?>" /><br /><br /><br>





<div id="lower">
<input id="submit" type="submit" name="save" value="Сохранить" />
</div>
</form>
</div>

</body>
</html>