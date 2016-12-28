<?php
	include '../config/database.php';
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}
	if(empty($_FILES['photo']['name']) && empty($_POST['desc']))
	{
		header('location:view.php?err=11');
		exit(0);
	}
	$desc=$_POST['desc'];
	$file_name=$_FILES['photo']['name'];
	$file_tmp=$_FILES['photo']['tmp_name'];
	$file_loc="../images/";
	$file_tmp_name=rand(1,1000)."-".$file_name;
	if(move_uploaded_file($file_tmp,$file_loc.$file_tmp_name))
	{
		$query = "UPDATE `album` SET `photo`='$file_tmp_name',`description`='$desc' WHERE id='$id'";
		$r = mysql_query($query); 
		header('location:view.php?success=1');

	}
	else
	{
		header('location:view.php?err=11');
		exit(0);
	}


?>