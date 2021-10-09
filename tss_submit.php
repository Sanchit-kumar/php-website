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
			if(!isset($_COOKIE['email']))
				header("location:../index.php");
			$host='localhost';
			$score=0;
			$email=$_COOKIE['email'];
			$ans=array('A','A','A','-','-','-','-','-');
			
			if(isset($_COOKIE['score']))
			{
					$s=$_COOKIE['score'];
					echo"<center><br/><br/><h2>New submition not allowed...</h2>";
						echo"<br/><br/><h3>Your previous score was:$s/3</h3>";
						echo"<br/><a type='button' class='btn btn-default' href='../index.php'>Click to go back</a></center>";
					exit;
			}
			for($i=0;$i<8;$i++)
			{
					$s='r'.($i+1);
					if(isset($_POST[$s]))
					{
						$r[$i]=$_POST[$s];
						
					}
					else
						$r[$i]='';
					if($r[$i]==$ans[$i])
						$score++;
			}
			if(!isset($_COOKIE['score']))
				setcookie('score',$score,time()+60,"/");
			
			//////////////logic to calculate score come here
			
			$conn=mysqli_connect($host,'root');
			if(!$conn)
			{	//header("location:sign_up.php?error=1");
				//setcookie('error',mysqli_error($conn));
				//die("Connection can not be establish to root".mysqli_error($conn));
			
			}
			echo"connection establish";
			$db=mysqli_select_db($conn,'tech-hits');
			if(!$db)
			{	//header("location:sign_up.php?error=1");
				//die("<br/>database mismatch ".mysqli_error($conn));
			}
	
			//$email=$_COOKIE['email'];
			//if(isset($_POST['submit']))
				//{
				//setcookie('submit','1',time()+(86400*30),"/");
					//		setcookie('submit','1');

				$query="insert into tss(email,r1,r2,r3,r4,r5,r6,r7,r8,score) values('$email','$r[0]','$r[1]','$r[2]','$r[3]','$r[4]','$r[5]','$r[6]','$r[7]','$score')";
				$ret=mysqli_query($conn,$query);
				if(!$ret)
				{	//header("location:sign_up.php?error=1");
					//die("Query not performed".mysqli_error($conn));
				}
			//}
			/*else if(isset($_POST['resubmit']))
			{
					//$query="UPDATE tss SET r1='$r[0]',r2='$r[1]',r3='$r[2]',r4='$r[3]',r5='$r[4]',r6='$r[5]',r7='$r[6]',r8='$r[7]' WHERE email='$email'";
					$query="update tss set r1='$r[0]' where email='$email'";
					$ret=mysqli_query($conn,$query);
					if(!$ret)
				{	//header("location:sign_up.php?error=1");
					die("Query not performed at update".mysqli_error($conn));
				}
			} */
			//echo"<alert>Successful</alert>";
			header("location:score.php");
		?>	
		<h1>
	</body>
</html>