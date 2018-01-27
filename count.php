<?php
$server='localhost';
$username='root';
$password='';
$database='bankers';
if(mysql_connect($server,$username,$password))
{
	if(mysql_select_db($database)){
		$found=true;
	}
}else {
	'not connected';
}
?>