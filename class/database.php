<?php
$db_host		= 'sql203.byethost.com';
$db_user		= 'b8_26063965';
$db_pass		= 'Tanvir3430';
$db_database	= 'b8_26063965_tn'; 
$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');
mysql_select_db($db_database,$link);

function formatDate($date) {
	return date('d/m/Y (g:i a)', strtotime($date));
}
mysql_query("SET names UTF8");


?>