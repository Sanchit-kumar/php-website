<?php
ob_start();
	function login($conn){
		if(isset($_POST['login_submit']))
		{
			$email=$_POST['email'];
			$pwd=$_POST['pwd'];
			$query="SELECT * FROM info WHERE pass='$pwd' AND email='$email'";
			$sql=mysqli_query($conn,$query);
			if(!$sql)
			{
				header("location:sign_up.php?err=1");			
			}
			$rows=mysqli_fetch_assoc($sql);
				if(isset($rows['email']))
				{	
					echo"
						<div class='modal fade text-center' id='em' role='dialog'>
							<div class='modal-dialog'>
								<div class='modal-content'>
									<div class='modal-header'>
										<button type='button' class='close' data-dismiss='modal'>&times;</button>
										<h4 class='modal-title'>LOG IN</h4>
									</div>
									<div class='modal-body'>
										<h3>Wrong username or password </h3>
									</div>
									<div class='modal-footer'> 
										<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
									</div>
								</div>
							</div>
						</div> ";
					
					//header("Location:comments.php?err=1");
				}
			$first=$rows['first_name'];
			$last=$rows['last_name'];
			setcookie('email',$email,time()+(86400*30),"/");
			setcookie('fname',$first,time()+(86400*30),"/");
			setcookie('lname',$last,time()+(86400*30),"/");

			//header("location:index.php");
			location();
		}
	}
	function signup($conn){
		if(isset($_POST['sign_up']))
		{
			$host='localhost';
			$first=$_POST['fname'];
			$last=$_POST['lname'];
			$email=$_POST['email'];
			$dob=$_POST['dob'];
			$gender=$_POST['gender'];
			$mobile=$_POST['mob'];
			$pswd=$_POST['pwd'];
			
			$query="insert into info values('$first','$last','$email','$dob','$gender','$mobile','$pswd')";
			$result=mysqli_query($conn,$query);
			if(!$result)
						header('location:sign_up.php?error=1');
			echo"
			<form method='post' action='index.php'>
				<input type='hidden' name='email' value='$email'/>
				<input type='hidden' name='fname' value='$first'/>
				<input type='hidden' name='lname' value='$last'/>
				
			</form> ";
			setcookie('email',$email,time()+(86400*30),"/");
			setcookie('fname',$first,time()+(86400*30),"/");
			setcookie('lname',$last,time()+(86400*30),"/");

			//header("location:index.php");
			location();
		}
	} 
	function  setcomments($conn)
	{
	if(isset($_COOKIE['email']))
		if(isset($_POST['sub']))
		{
			$email=$_COOKIE['email'];
			$cid=$_POST['cid'];
			$message=$_POST['message'];
			$date=$_POST['date'];
			
			$sql="insert into comm(cid,email,date,message) values('$cid','$email','$date','$message')";
			$result=mysqli_query($conn,$sql);
				if(!$result)
						die("Date not inserted".mysqli_connect_error());
			//echo $cid." ".$email." ".$message;
			//header("location:index.php");
		//	location();
			
		}
	}
	function getcomments($conn,$cid)
	{
		//$cid=$_POST['cid'];
		$query="SELECT * FROM comm,info WHERE cid='$cid' AND comm.email=info.email ORDER BY date desc";
		$sql=mysqli_query($conn,$query);
		if(!$sql)
			die("oops....get query not performed".mysqli_connect_errno());
		
		while($row=mysqli_fetch_assoc($sql))
		{	echo "<blockquote style='border-left:5px solid #00cc66;border-bottom:1px solid #00cc66;'>";
				$flag=(isset($_COOKIE['email'])&&($_COOKIE['email']==$row['email']));
								echo"<div class='row' style='color:grey;opacity:0.6;font-size:12px;';>
									<div class='col-xs-6'>";
										echo $row['date'];	
									echo"
									</div>
									<div class='col-xs-1'>";
								if($flag)	
								{	
									echo"
									<form class='form-inline text-right' method='post' action='editcomment.php'>
										<input type='hidden' name='uid' value='".$row['uid']."'/>
										<input type='hidden' name='cid' value='".$row['cid']."'/>
										<input type='hidden' name='date' value='".$row['date']."'/>
										<input type='hidden' name='message' value='".$row['message']."'/>
										<button class='btn btn-link form-control'>Edit</button>
									</form> ";
								}
								echo"
									</div>
									<div class='col-xs-1'>
									</div>
									<div class='col-xs-1'>";
								if($flag){
								echo"
									<form class='form-inline text-right' method='post' action='".deletecomments($conn)."'>
										<input type='hidden' name='uid' value='".$row['uid']."'/>
										<button class='form-control btn btn-link' name='del'>Delete</button>
									</form> ";
								}									
								echo"	</div>
								<div class='col-xs-3'>
									</div>
								</div> ";
							
			echo"<div style='font-size:16px;'>";
			echo nl2br($row['message']);
				echo"</div>";
					echo"<footer>";
							if(isset($row['first_name']))
											{	
												$first=$row['first_name'];
												echo $first." ";
											}
							if(isset($row['last_name']))
											{
												$last=$row['last_name'];
												echo $last;
											}
					echo"</footer>";
			echo"</blockquote>";
		}
		
	}
	function editcomments($conn)
	{	if(isset($_POST['Edit']))
		{
		$message=$_POST['message'];
		$uid=$_POST['uid'];
		$query="UPDATE comm SET message='$message' WHERE uid='$uid'";
		$result=mysqli_query($conn,$query);
		if(!$result)
				die("\n Message not edited".mysqli_connect_errno());
		//header("location:index.php");
	//	location();
		}
	}
	function deletecomments($conn){
		if(isset($_POST['del']))
		{
			$uid=$_POST['uid'];
			$query="DELETE FROM comm where uid='$uid'";
			$result=mysqli_query($conn,$query);
			//if(!$result)
			//		die("Comment not deletede".mysqli_connect_error());
		//header("location:index.php");
		location();
		}
	}
	function countcomments($conn,$cid)
	{
		$query="SELECT * FROM comm where cid='$cid'";
		$result=mysqli_query($conn,$query);
		$num_of_row=mysqli_num_rows($result);
		echo"<img class='comment' src='c.png' height='20' width='20'/>Comment(";
		echo $num_of_row.")";
	}
	function location()
	{
		$loc=$_COOKIE['page_name'];
		header("location:index.php");
	}
?>