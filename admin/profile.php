<?php
session_start();
if(!isset($_SESSION['login']) && $_SESSION['login']!=1)
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
					<form class="form" action="file-upload.php" method="POST" enctype="multipart/form-data">
						<label>UPLOAD</label><br><br>
						<input type="file" name="photo"><br><br>
						<label>ADD DESCRIPTION</label><br><br>
						<textarea name="desc" rows="15" cols="50">this is a photo.....</textarea><br><br>
						<input type="submit" value="Upload">
					</form>					
		</div>
	
</body>
</html>


	
	