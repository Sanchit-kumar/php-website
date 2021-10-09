<?php
	unset($_COOKIE["email"]);
	setcookie('email','',time()-(86400*30),"/");
	unset($_COOKIE["fname"]);
	setcookie('fname','',time()-(86400*30),"/");
	header("location:index.php");
	
	?>