<?php
include '../config/database.php';
if(empty($_POST['old_password']))
{
	header('location:pswordchange.php?err=3');
	exit(0);
}
if(empty($_POST['new_password']))
{
	header('location:pswordchange.php?err=4');
	exit(0);
}
if(empty($_POST['renew_password']))
{
	header('location:pswordchange.php?err=5');
	exit(0);
}


$old_password=mysql_real_escape_string(htmlentities($_POST['old_password']));
$enc_old_password=md5($old_password);
$new_password=$_POST['new_password'];
$renew_password=$_POST['renew_password'];


 $query = "SELECT `id`, `username`, `password` FROM `login` WHERE password='$enc_old_password'";
 $r = mysql_query($query);
$data = mysql_fetch_array($r);
$id=$data['id'];
$password=$data['password'];
if($password==$enc_old_password)
{
	if($new_password==$renew_password)
	{
		$new_password=mysql_real_escape_string(htmlentities($_POST['new_password']));
		$enc_new_password=md5($new_password);
		$query_up="UPDATE `login` SET `password`='$enc_new_password' WHERE id='$id'";
		$r_up=mysql_query($query_up);
		$num = mysql_num_rows($r_up);
		if($num!=0)
		{
			header('location:pswordchange.php?err=6');
			exit(0);

		}
		else
		{
			header('location:index.php?successfull=1');
		}

	}
	else
	{
		header('location:pswordchange.php?err=8');
		exit(0);
	}
}
else
{
	header('location:pswordchange.php?err=9');
	exit(0);
}	

?>
	



