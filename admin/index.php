
<!doctype html>
<head>
<title>admin</title>
<link rel="stylesheet" href="../css/stylesheet.css" type="text/css">

</head>
<body>
	<div class="wrapper">
	<br>
	<br>
	<h1>ADMIN PANEL</h1>
	<br>
	<br>
		<form action="login.php" method="POST">
			<label><b>Username</b></label><br><br>
			<input type="text" name="username" placeholder="Username"><br><br>
			<label><b>Password</b></label><br><br>
			<input type="text" name="password" placeholder="Password"><br><br>
			<div><?php if(isset($_GET['err']) && $_GET['err']==1) echo 'username or password incorrect';?></div>
			<input class="login" type="submit" value="LOGIN">

		</form>
	</div>	
</body>