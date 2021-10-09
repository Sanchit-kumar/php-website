<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>TSS# CONTEST</title>
		<meta charset="utf-08"/>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
			<?php
				if(!isset($_COOKIE['email']))
					header("location:../index.php");
				if(isset($_COOKIE['score']))
						$score=$_COOKIE['score'];
				else
						$score=0;
						echo"<center><br/><br/><h2>Thanks for participating.....</h2>";
						echo"<br/><br/><h3>Your score:$score/3</h3>";
						echo"<br/><a type='button' class='btn btn-default' href='../index.php'>Click to go back</a></center>";
			?>
	</body>
</html>