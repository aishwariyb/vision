<?php
extract($_GET);
include('database.php');
$sql = "UPDATE v_user set active=1 where hash='".$_GET['v']."'";
$result = $db->query($sql);
if(!$db->affected_rows){
	echo '<script>alert("Please click on the link mailed to you.");</script>';
	echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
}
else{
	$sql = "SELECT * from v_user where hash='".$_GET['v']."'";
	$result = $db->query($sql);
	$row = $result->fetch_object();

	$_SESSION['email'] = $row->email;
	echo '<script>alert("Email has been activated.\nLogin to continue.");</script>';
	header('Location: Login.php'); 
}
?>