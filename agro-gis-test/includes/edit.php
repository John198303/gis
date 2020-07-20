<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Редактирование</title>
</head>

<body>

<?php

require_once '../inc/connect.php';

$id =  $_GET['id'];

$result = mysqli_query($db1," SELECT id, date_operations,operations,main,trailer,driver,done FROM `operations-r7-8`
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
    
   $result2 = mysqli_query($db1, " UPDATE `operations-r7-8` SET date_operations='$date_operations', operations='$operations', main='$main', trailer='$trailer', driver='$driver', done='$done' WHERE id='$id' ");
    
	if ($result2 == TRUE){
		echo "Данные успешно изменены";
		header("Location: ../../../../agro-gis-test/pages/rodniki/field7r.php");
		}else{
			header("Location: ../../../../agro-gis-test/pages/false.php");
		};
	
    mysqli_close($db1);
}

?>

<form method="post" action="edit.php?id=<?php echo $id; ?>">

<br />
<input type="text" name="date_operations" value="<?php echo $row['date_operations']; ?>" /><br />

 <br />
<input type="text" name="operations" value="<?php echo $row['operations']; ?>" /><br />

<br />
<input type="text" name="main" value="<?php echo $row['main']; ?>" /><br /><br />

<input type="text" name="trailer" value="<?php echo $row['trailer']; ?>" /><br /><br />

<input type="text" name="driver" value="<?php echo $row['driver']; ?>" /><br /><br />

<input type="text" name="done" value="<?php echo $row['done']; ?>" /><br /><br />






<input type="submit" name="save" value="Изменить" />

</form>


</body>
</html>