<?php
include '../config/database.php';
	if(isset($_POST['desc']) && !empty($_POST['desc']))
	{
		$desc=$_POST['desc'];
	}
	$date=date("Y-m-d");
	
	
	$file_name = $_FILES['photo']['name'];
	$file_tmp_name = $_FILES['photo']['tmp_name'];
	$file_loc="../images/";
	$file_last_name=rand(1,1000)."-".$file_name;
	if(move_uploaded_file(	$file_tmp_name , $file_loc.$file_last_name))
	{
		$query = "INSERT INTO `album`(`id`, `photo`, `description`, `date`) VALUES (NULL,'$file_last_name','$desc','$date')";
		$r = mysql_query($query);
		header('location:profile.php?success=1');
	}
	else
	{
		die('not inserted');
	}

?>