<?php
include ('database.php');
/*
echo '<script>';
echo 'alert("I was Called")';
echo '</script>';*/
//$name= $_POST['uname'];
if(isset ($_POST['uname']))
{
    $name=$_POST['uname'];
    if($res=$db->query(" SELECT uname FROM USERDB WHERE uname='$name' "))
    {
       //echo $name;
        //echo $res->num_rows; 
        
        if($res->num_rows>0)
        echo "Username Already Exists";
    else
        echo "OK";
}
}
?>