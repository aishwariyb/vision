<?php
	$db = new mysqli('localhost','rootvision','rootvision','visiondatabase');
if ($db->connect_errno) {
//console_log();
printf("Connect failed: %s\n", $db->connect_error);

}
else
{

}
	
	// or die("Could not Connect My Sql");
?>
