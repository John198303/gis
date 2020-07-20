<?php
require "../includes/config.php"
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $config['title'];?></title>
    <meta charset="utf-8" />	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="../scripts/diag1.js"></script>
	<script type="text/javascript" src="../scripts/diag2.js"></script>
    <script type="text/javascript" src="../scripts/jquery-3.2.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>		
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/up.css" rel="stylesheet">
	<link href="../css/bar.css" rel="stylesheet">
	<link href="../css/diag.css" rel="stylesheet">
</head>

<body>
	<?php include "../includes/header_sidebar.php"; ?>
	<?php include "../includes/bar.php"; ?>
	<div id="chart_div"></div>
	<div id="donutchart"></div>
	<div><p>Правая панель</p> </div><hr size="10"; color="green">
</body>
</html>