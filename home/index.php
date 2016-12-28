<?php
include '../config/database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="stylehome.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

</head>
<body>
	<div class="wrapper">
	<h1>MY MEMOS</h1>
		
		<div class="album">
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
					<img src="../images/<?php echo $data['photo']; ?>" height="300px" width="200px">
				</div>
				<div class="desc">
				<p>Published on <?php echo $data['date']; ?></p>
					<p><?php echo $data['description']; ?></p>
				</div>

				
			</div>	
		<?php
			}			
		?>
		</div>
	</div>
	
</body>
</html>		