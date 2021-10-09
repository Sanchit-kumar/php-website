<?php
	$host='localhost';
	$conn=mysqli_connect($host,'root');
	if(!$conn)
			die("Not connected to database".mysqli_connect_erro());
	$db=mysqli_select_db($conn,'tech-hits');
		if(!$db)
			die("Not connected to database----db not found".mysqli_connect_erro());

?>