<?php
include '../config/database.php';
if(isset($_GET['id']))
{
	$id =$_GET['id'];
	
}
$query = "DELETE FROM `album` WHERE id='$id'";
$r = mysql_query($query);
if(!$r)
{
	header('location:view.php?err=1121');
	exit();
}
else
{
	header('location:view.php?success=1121');
	exit();
}

?>