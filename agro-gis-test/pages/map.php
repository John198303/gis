<?php
require "../includes/db.php"
?>
<!DOCTYPE html>
<html>

<head>
    <title>Агро - Эксперт</title>
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
	<link href="../css/map.css" rel="stylesheet">
</head>

<body>
	<?php include "../includes/header_sidebar.php"; ?>
	<?php include "../includes/bar.php"; ?>
	<div class="map_top"></div>
	<div class="full_map">
		<!--<div id="map"><iframe src="http://log2:8080/test/#6/56.8210/41.6011"  width="100%" height="850px" allowfullscreen></iframe></div>-->
		<div id="map"><iframe src="http://192.168.100.94:8080/web-service/#11/56.8210/41.6011"  width="100%" height="850px"></iframe></div>
	</div>
</body>
</html>