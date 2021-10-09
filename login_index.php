<!DOCTYPE html>
<html>
	<head>
		<style>
		</style>
	</head>
	<body>
		<?php
			$host='localhost';
			$email=$_POST['email'];
			$pswd=$_POST['pwd'];
			
			$conn=mysqli_connect($host,'root');
			if(!$conn)
			{	if(isset($_COOKIE['page_name']))
					{
						$loc=$_COOKIE['page_name'];
						header("location:$loc?err=1");
					}
				else
					header("location:index.php?err=1");
				die("<h1>Sorry..connection can not be establish to the root directory.</h1>".sqli_error($conn));
			}
			$db=mysqli_select_db($conn,'tech-hits');
			if(!$db){
					if(isset($_COOKIE['page_name']))
					{
						$loc=$_COOKIE['page_name'];
						header("location:$loc?err=1");
					}
				else
					header("location:index.php?err=1");
					die("<br/><h1>Sorry...database not connected</h1>".mysqli_error($conn));
			}
		$query="SELECT * FROM info WHERE pass='$pswd' AND email='$email'";
			
			$sql=mysqli_query($conn,$query);
			
			$dob='dob';
			if(!$sql)
			{		if(isset($_COOKIE['page_name']))
					{
						$loc=$_COOKIE['page_name'];
						header("location:$loc?err=1");
					}
				else
					header("location:index.php?err=1");
					die("<br/><h1>Sorry...Query not performed on the database</h1>".mysqli_error($conn));
			}
			$rows=mysqli_fetch_assoc($sql);
				if(!$rows)
				{	
					if(isset($_COOKIE['page_name']))
					{
						$loc=$_COOKIE['page_name'];
						header("location:$loc?err=1");
					}
				else
					header("location:index.php?err=1");
					echo "<br/><h1>Sorry...no username and password match. Re-enter it.";
					exit();
				}
			//setting the cookie
			$first=$rows['first_name'];
			$last=$rows['last_name'];
			setcookie('email',$email,time()+(86400*30),"/");
			setcookie('fname',$first,time()+(86400*30),"/");
			
			header("location:index.php");
			
			?>
	</body>
</html>