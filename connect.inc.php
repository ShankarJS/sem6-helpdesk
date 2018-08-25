<?php

$mysql_hostname="localhost";
$mysql_username="root";
$mysql_password="";

$mysql_db="helps";

if(!mysql_connect($mysql_hostname,$mysql_username,$mysql_password) || !mysql_select_db($mysql_db))
{
	die(mysql_error());
}

?>