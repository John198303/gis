<head>
    <title>Агро - Эксперт</title>
    <meta charset="utf-8" />			
	<link href="../../../agro-gis-test/css/input-field.css" rel="stylesheet">
	
	
</head>
<body>
<div class="wrapper_false">
<?php
echo "<h2>Данные НЕ ДОСТАВЛЕНЫ на сервер ГИС 'Сервис-Профи'</h2><br>
<h3>Нажмите 'Назад', чтобы повторить попытку.</h3>";
header("refresh: 5; 'Location: ../../../../agro-gis-test/pages/input-date.php'");
?><br><br>
<form action="../../../../agro-gis-test/pages/input-date.php">
<button class="false_button">Назад</button>
</form>
</div>
</body>