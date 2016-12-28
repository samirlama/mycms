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
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">

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
						<?php
						$query = "SELECT * FROM `album`";
						$r = mysql_query($query);
						$num = mysql_num_rows($r);
						for($i=1;$i<=$num;$i++)
							{
								$data = mysql_fetch_array($r);
						?>
						<div class="photo">
							<div class="image">
								<img src="../images/<?php echo $data['photo']; ?>" height="200px" width="150px">
							</div>
							<div class="desc">
								<p>Published on <?php echo $date; ?></p>
								<p><?php echo $data['description']; ?></p>
							</div>
							<ul class="list">
								<li><a href="update.php?id=<?php echo $data['id']; ?>"><div class="update">Update</div></a></li>
								<li><a href="delete.php?id=<?php echo $data['id']; ?>"><div class="delete">Delete</div></a></li>
							</ul>	

						</div>	
						<?php
							}			
						?>
				</div>
		</div>
	
</body>