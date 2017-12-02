<?php
	error_reporting(0);
	$host = "localhost";
	$user = "root";
	$password = "";
	$datbase = "test";
	$res = mysql_connect($host,$user,$password);
	$db_selected = mysql_select_db($datbase, $res);

?>