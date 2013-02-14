<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'boston123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'users';
mysql_select_db($dbname);
?>