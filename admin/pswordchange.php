<?php
	include '../config//database.php';
	if(!isset($_SESSION['login']) && $_SESSION['login']=!1)
	{
		header('location:index.php?err=2');
		exit(0);
	}
?>
<!doctype html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/styleprofile.css" type="text/css">

</head>
<body>
		<div class="wrapper">
				<div class="sidebar">
					<ul>
						<li><a href="profile.php">Add new photo</a></li>
						<li><a href="view.php">View</a></li>
						<li><a href="pswordchange.php">Change password</a></li>
						<li><a href="logout.php">logout</a></li>

					</ul>	

				</div>
				<div class="content">
					<form class="newform" action="pswordchange-action.php" method="POST">
						<label><b>OLd password</b></label><br><br>
						<input type="text" name="old_password" placeholder="Username"><br><br>
						<label><b>New Password</b></label><br><br>
						<input type="text" name="new_password" placeholder="Password"><br><br>
						<label><b>Retype Password</b></label><br><br>
						<input type="text" name="renew_password" placeholder="Password"><br><br>
						<input class="login" type="submit" value="LOGIN">

					</form>
				</div>
		</div>
	
</body>