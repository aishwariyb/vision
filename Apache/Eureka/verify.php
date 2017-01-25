<?php
extract($_GET);
include('database.php');
$sql = "UPDATE p_user set active=1 where hash='".$_GET['v']."'";
$result = $db->query($sql);
if(!$db->affected_rows){
	echo '<script>alert("Please click on the link mailed to you.");</script>';
	echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
}
else{
	$sql = "SELECT * from p_user where hash='".$_GET['v']."'";
	$result = $db->query($sql);
	$row = $result->fetch_object();

	$_SESSION['email'] = $row->email;
	echo '<script>alert("Email has been activated.\nLogin to continue.");</script>';
	echo "<script>setTimeout(\"location.href = 'Login Form.php';\",0);</script>";
}
?>