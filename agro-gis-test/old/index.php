<?php
$connection = mysqli_connect('127.0.0.1', 'root', 'cntfh[dbh', 'articles');
if($connection==false)
{
	echo "Не удалось подключиться к базе <br>" ;
	echo mysqli_connect_error();
	exit();
} 

$result = mysqli_query($connection, "SELECT * FROM `articles_categories`" );
if (mysqli_num_rows($result) == 0)
{
	echo "Записей не найдено";
}else
{?>
<ul>
	<?php
		while( ($cat = mysqli_fetch_assoc($result)) )
		{
			$articles_count = mysqli_query($connection, "SELECT COUNT('id') AS `total_count` FROM `articl` WHERE `categories_id` = " . $cat['id']);
			$articles_count_result = mysqli_fetch_assoc($articles_count);
			echo '<li>' . $cat['title'] . '('. $articles_count_result['total_count'].')</li>';
		}
	?>
</ul>
<?php
}
?>	
<?php
mysqli_close($connection);
?>
<hr>
<?php
echo date('d.m.Y H:y:s');
?>
<form method="GET" action="/handle.php">
	<br>
	<input type="text" placeholder="Ваш логин" name="log">
	<input type="text" placeholder="Ваш пароль" name="pass">
	<hr>
	<input type="submit" value="Войти">
</form>
