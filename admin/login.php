		<?php
	include '../config/database.php';
	session_start();
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		if(!empty($_POST['username']) && !empty($_POST['password']))

		{
			$username =mysql_real_escape_string(htmlentities($_POST['username']));
			$password =mysql_real_escape_string(htmlentities($_POST['password']));
			$pass_hash = md5($password);


			$query = " SELECT  `username`, `password` FROM `login` WHERE username='$username' AND password='$pass_hash'";
			$r = mysql_query($query);
			$num = mysql_num_rows($r);
			$data = mysql_fetch_array($r);
			$username1=$data['username'];
			$password1=$data['password'];
			if($username==$username1 && $pass_hash==$password1)
				{
					$_SESSION['login']=1;
					$_SESSION['username']='$username';
					header('Location: profile.php?success=1');
				}
			else
				{
					header('Location: index.php?err=1');
				}
			
		}
	}



?>