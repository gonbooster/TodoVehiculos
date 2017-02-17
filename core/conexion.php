<?php
$username = "u219197018_tv";
$password = "tv1234";
$hostname = "mysql.hostinger.co";
$bd = "u219197018_tv"; 
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Imposible connectarse a MySQL");
mysql_select_db($bd,$dbhandle)or die("No se puede localizar la base de datos indicada");
?>