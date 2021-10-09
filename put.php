<!DOCTYPE html>
<html>
	<head>
		<style>
			h1{
				font-family:Comic Sans MS;
				font-size:30px;
				color:rgb(42,69,221);
			}
		</style>
	</head>
	<body>
		<?php
			if(!isset($_POST['fname']))
					header("location:index.php");
			$host='localhost';
			$first=$_POST['fname'];
			$last=$_POST['lname'];
			$email=$_POST['email'];
			$dob=$_POST['dob'];
			$gender=$_POST['gender'];
			$mobile=$_POST['mob'];
			$pswd=$_POST['pwd'];
			$conn=mysqli_connect($host,'root');
			if(!$conn)
			{	header("location:sign_up.php?error=1");
				setcookie('error',mysqli_error($conn));
				die("Connection can not be establish to root".mysqli_error($conn));
			}
			echo"connection establish";
			$db=mysqli_select_db($conn,'tech-hits');
			if(!$db)
			{	header("location:sign_up.php?error=1");
				die("<br/>database mismatch ".mysqli_error($conn));
			}
		/*	echo "<br/>database connected";
			echo"<br/>functioning";		
			*/
			$query="insert into info values('$first','$last','$email','$dob','$gender','$mobile','$pswd')";
			$ret=mysqli_query($conn,$query);
			if(!$ret)
			{	header("location:sign_up.php?error=1");
				die("Query not performed".mysqli_error($conn));
			}
			//temprory cookie is set
			setcookie('email',$email,time()+(86400*30),"/");
			setcookie('fname',$first,time()+(86400*30),"/");
			if(isset($_REQUEST['page_name']))
					{
							$pg=$_COOKIE['page_name'];
							header("location:$pg");
					}
					else
			header("location:index.php");//direct directly to the index page
			/*echo "<br/><h1>You have signup "; */				
		?>	
		<h1>
	</body>
</html>