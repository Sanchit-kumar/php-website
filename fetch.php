<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$host='localhost';
			$email=$_POST['email'];
			$pswd=$_POST['pwd'];
			
			$conn=mysqli_connect($host,'root');
			if(!$conn)
			{	header("location:sign_up.php?err=1");
				die("<h1>Sorry..connection can not be establish to the root directory.</h1>".sqli_error($conn));
			}
			$db=mysqli_select_db($conn,'tech-hits');
			if(!$db){
					header("location:sign_up.php?err=1");
					die("<br/><h1>Sorry...database not connected</h1>".mysqli_error($conn));
			}
		$query="SELECT * FROM info WHERE pass='$pswd' AND email='$email'";
			
			$sql=mysqli_query($conn,$query);
			
			$dob='dob';
			if(!$sql)
			{		header("location:sign_up.php?err=1");
					die("<br/><h1>Sorry...Query not performed on the database</h1>".mysqli_error($conn));
			}
			$rows=mysqli_fetch_assoc($sql);
				if(!$rows)
				{	header("location:sign_up.php?err=1");
					echo "<br/><h1>Sorry...no username and password match. Re-enter it.";
					exit();
				}
			//setting the cookie
				else
				{
					$first=$rows['first_name'];
					$last=$rows['last_name'];
					setcookie('email',$email,time()+(86400*30),"/");
					setcookie('fname',$first,time()+(86400*30),"/");
					if(isset($_REQUEST['page_name']))
					{
							$pg=$_COOKIE['page_name'];
							header("location:$pg");
					}
					else
					header("location:index.php");
				}
			?>
	</body>
</html>