<?php
$mysql_hostname = "jftechnology.com.au";
$mysql_user = "jftechno";
$mysql_password = "Tuba12R0x//";
$mysql_database = "jftechno_simple_login";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>