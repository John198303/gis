<?php

$db1 = @mysqli_connect('localhost', 'root', 'cntfh[dbh', 'gb') or die('Ошибка соединения с базой данных');

mysqli_set_charset($db1, "utf8") or die('Кодировака не установлена');