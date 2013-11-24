<?php
$mysql_hostname = "54.206.7.22";
$mysql_user = "ubuntu";
$mysql_password = "mrjs311";
$mysql_database = "chisholm_students";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>