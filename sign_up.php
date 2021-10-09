
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Home</title>
		<meta charset="utf-08"/>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="jquery-2.2.4.js">
		</script>
		<link rel="stylesheet" href="jqueryui-custom/jquery-ui.structure.css"/>
		<link rel="stylesheet" href="jqueryui-custom/jquery-ui.theme.css"/>
		<script src="jqueryui-custom/jquery-ui.js"></script>
		<style>
			form{
				opacity:0.65;
			}
			form:hover{
				opacity:1;
			}
			body{
				background-image:url("images/pl.jpg");
				background-repeat:no-repeat;
				background-position:center;
				height:100%;
				width:100;
			}
			.row{
				margin-top:22px;
				
			}
			
			label{
				color:white;
				font-size:20px;
				font-weight:500;
			}
			h1{
				font: 40px Montserrat, sans-serif;
				text-align:center;
				margin-top:50px;
				color:#fff;
				letter-spacing: 10px; 
			}
		</style>
		<script type="text/javascript">//java script for signup
		function fill()
			{
				var fname=document.getElementById("fname").value;
				var lname=document.getElementById("lname").value;
				var email=document.getElementById("email").value;
				var dob=document.getElementById("dob").value;
				var male=document.getElementById("male").checked;
				var female=document.getElementById("female").checked;
				
				var mob=document.getElementById("mob").value;
				var pwd=document.getElementById("pwd").value;
				var cpwd=document.getElementById("cpwd").value;
				var compare=pwd.localeCompare(cpwd);
				if(((fname==""||lname=="")||(email==""||dob==""))||((male==false&&female==false)||(mob==""||pwd=="")||(cpwd==""||(compare!=0))))
					
					{
							if(fname=="")
								alert("Please enter the First Name");
							else 
								if(lname=="")
									alert("Please enter your Last Name");
								else if( email=="")
									alert("Please select your e-mail id");
									else if(dob=="")
										alert("Enter your Date-of-Birth");
										else if(male==false&&female==false)
											alert("Choose your gender");
											else if(mob=="")
												alert("Enter your mobile number");
												else if(pwd=="")
													alert("Please enter your password");
													else if(pwd.length<8)
														alert("Your password is very short. Your password must have atleast 8 charecters.");
														else if(cpwd=="")
															alert("Please enter the password confirmation field.");
															else if(compare!=0)
																alert("Password confirmation is wrong. Please enter the correct password.");
							return false;								
					}
				return true;
			}
			function login()
				{
				var email=document.getElementById('email_login').value;
				var password=document.getElementById('pwd_login').value;
					if(email=="")
						alert("Please enter your e-mail id.");
					else if(password=="")
						alert("Please enter your password.");
					if(email!=""&&password!="")
						return true;
					else 
						return false;
				}
			function change()
				{
				var hide=document.getElementById('right_show');
				var show=document.getElementById('right_login');
				hide.style="visibility:hidden;";
				show.style="visibility:visible;";
					
				}
	</script>
	</head>
	<body>
		<?php
		setcookie('page_name','index.php');
		if(isset($_REQUEST['err']))
					echo"<script>alert('Invalid username and password');</script>";
		if(isset($_REQUEST['error']))
					echo"<script>alert('Account already existing with this email. Please select another email id.');</script>";

		?>
<!-------beginign of carousel ------------>
		<div class="container">
			<h1>Welcome to tech-hits</h1>
			<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-6">
						<div id="right_login" style="visibility:hidden;">
							<form class="form-inline" action="fetch.php" method="post" onsubmit="return login();">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input type="text" class="form-control"  name="email" placeholder="Email" id="email_login"/>
									</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" name="pwd" class="form-control" id="pwd_login" placeholder="Password">
								</div>
								<input type="submit" value="Log in" class="form-control btn btn-default"/>						
							</form>
						</div>
					</div>
					<div class="col-sm-3">
						<div id="right_show" style="visibility:visible;">
							<input type="button" class="btn btn-info" name="enter" value="Log In to Existing Account" onclick="change();"/>
						</div>
					</div>
			</div>
		</div>
			<div class="container">
				<form action="put.php" method="post" onsubmit="return fill();">
				<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-3">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name"/>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"/>
							</div>
						</div>
						<div class="col-sm-3">
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
								<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" class="form-control"  name="email" placeholder="Email" id="email"/>
								</div>
						</div>
						<div class="col-sm-3">
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon">DOB</span>
									<input type="text" class="form-control date" name="dob" placeholder="Date of Birth" id="dob"/>
								</div>
						</div>
						<div class="col-sm-3">
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
						<div class="row">	
							<div class="col-xs-2">
							</div>
							<div class="col-xs-2">
								
									<label><input type="radio" name="gender" value="Male" id='male'/><p style="font-color:black">Male</p></label>
									
							</div>
							<div class="col-xs-4">
							</div>
							<div class="col-xs-3">
									
										<label><input type="radio" name="gender" value="Female" id='female'/><p>Female</p></label>
									
							</div>
							<div class="col-xs-1">
							</div>
						</div>
						</div>
						<div class="col-sm-3">
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
									<input type="text" id="mob" name="mob" class="form-control" placeholder="Mobile">
								</div>
						</div>
						<div class="col-sm-3">
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password">
								</div>
						</div>
						<div class="col-sm-3">
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" class="form-control" id='cpwd' name="cpwd" placeholder="Confirm Password">
								</div>
						</div>
						<div class="col-sm-3">
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-3">
							<input type="submit" class="btn btn-success form-control"value="Sign Up" id="submit"/>	
						</div>
						<div class="col-sm-3">
							<input type="reset" class="btn btn-default form-control" value="Reset" id="reset"/>	
						</div>
						<div class="col-sm-3">
						</div>
					</div>
				</form>
			</div>
		<script>
		$(document).ready(function(){
		$("#dob").datepicker({ minDate:new Date(1970,0,12),changeYear:true,
										changeMonth:true,maxDate:new Date(2017,11,31),
										showOtherMonths:true,showButtonPanel:true,
										yearPreffix:"AC",
										yearRange: '1970:2017'
										
				});
		});
	</script>
	</body>
</html>