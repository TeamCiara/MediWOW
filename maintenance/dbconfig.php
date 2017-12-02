<?php
	error_reporting(0);
	$host = "localhost";
	$user = "root";
	$password = "";
	$datbase = "test";
	$res = mysql_connect($host,$user,$password);
	if(!$res){
		echo "<p>Could not connect ". mysql_error()." </p>";
	}
	else{
		echo "<p>COnnected Successfully</p>";
	}
	
	$db_selected = mysql_select_db($datbase, $res);
	
	if(!$db_selected){
		echo "<p>NOT SELECTED</p>";
	}
	else{
		echo "<p>SELECTED</p>";
	}
?>