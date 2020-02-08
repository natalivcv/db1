<?php

$db1 = mysql_connect('localhost', 'root1', 'toor');
mysql_select_db('ajax');
mysql_query("SET NAMES utf8");

mysql_query("INSERT INTO 'qqq1' (a, b, c,) VALUES ('" . $_POST['a'] . "', '" . $_POST['b'] . "', '" . $_POST['c'] . "')");
?>