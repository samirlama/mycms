<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" href="../css/styleprofile.css" type="text/css">
</head>
<body>
	<div class="wrapper_up">
		<form class="form_up" action="update-action.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
			<label><b>UPLOAD</b></label><br /><br />
			<input type="file" name="photo"><br /><br />
			<label>ADD DESCRIPTION</label><br><br>
			<textarea name="desc" rows="20" cols="50">this is a photo.....</textarea><br><br>
			<input type="submit" value="Upload">
		</form>	
	</div>
</bo
</html>