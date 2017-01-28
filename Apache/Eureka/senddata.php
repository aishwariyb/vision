<?php
include "database.php";

if(empty($_POST['uname']) )
{
	echo "Completely Fill the Form";
	exit(0);
}


if(empty($_POST['college']))
{
		echo "Completely Fill the Form";
	 exit(0);
}

if(empty($_POST['year']))
{
	echo "Completely Fill the Form";
	exit(0);
}

if(empty($_POST['semester']))
{
		echo "Completely Fill the Form";
	exit(0);
}

if(empty($_POST['contact']))
{
		echo "Completely Fill the Form";
	exit(0);
}

$un=$_POST['uname'];
$p=$_POST['college'];
$fn= $_POST['year'];
$ln= $_POST['semester'];
$e= $_SESSION['email'];
$c= $_POST['contact'];

$sql="INSERT INTO `USERDB` SET `uname`='$un',`college`='$p',`year`='$fn',`semester`='$ln',`email`='$e',`contact`='$c'";
$re=$db->query($sql);

header("location: index.php")
	


?>