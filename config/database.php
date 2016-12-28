<?php
	$conn = mysql_connect('localhost','root','');
	if(!@$conn)
	{
		die('connection failed!');
	}
	$r = mysql_select_db('gallery');
	if(!@$r)
	{
		die('database not selected');
	}
?>