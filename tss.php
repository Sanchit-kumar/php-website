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
		<style>
			label{
				font-weight:300;
			}
			#time{
				position:fixed;
				top:20px;
				right:20px;
				font-size:30px;
			}
		</style>
		<script type="text/javascript">
			setInterval(
				function post(s)
					{
						
					 
						$.ajax
						({
						  type: 'post',
						  url: 'timer.php',
						  data:
						  {
	
						  },
						  success: function (response) 
						  {
							  $("timer").empty();
							document.getElementById("timer").innerHTML=response;
					  
						  }
						});
					  
					  
					  return false;
					},1000);
					</script>
	</head>
	<body>
	<?php
	if(isset($_COOKIE['timeup']))
		header("location:score.php");
	if(!isset($_COOKIE['email']))
		header("location:../index.php");
	date_default_timezone_set('Asia/Kolkata');
	$end=strtotime(date("Y-m-d H:i:s",strtotime("+1 minutes")));	
		if(!isset($_COOKIE['end']))
			setcookie('end',$end,time()+86400);
	?>
		<div class='container'>
			<form action='tss_submit.php' method='post'>
				<!------------------------------>
					<ol>
						<li>
							<div>
								<p><strong>Who is the new President of Usa</strong></p>
								<div class='row'>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r1' value='A'/> A: Donald Trump</p></label>
									</div>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r1' value='B'/> B: Hillary Clinton</p></label>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r1' value='C'/> C: Barak Obama</p></label>
									</div>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r1' value='D'/> D: Abrahon Linkon</p></label>
									</div>
								</div>
							</div>
						</li>
							<!--------------------------------->
							<!------------------------------>
						<li>
							<div>
								<p><strong>Who is the new President of Usa</strong></p>
								<div class='row'>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r2' value='A'/> A: Donald Trump</p></label>
									</div>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r2' value='B'/> B: Hillary Clinton</p></label>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r2' value='C'/> C: Barak Obama</p></label>
									</div>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r2' value='D'/> D: Abrahon Linkon</p></label>
									</div>
								</div>
							</div>
						</li>
							<!--------------------------------->
						
							<!------------------------------>
						<li>	
							<div>
								<p><strong>Who is the new President of Usa</strong></p>
								<div class='row'>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r3' value='A'/> A: Donald Trump</p></label>
									</div>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r3' value='B'/> B: Hillary Clinton</p></label>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r3' value='C'/> C: Barak Obama</p></label>
									</div>
									<div class='col-md-6'>
										<label><p><input type='radio' name='r3' value='D'/> D: Abrahon Linkon</p></label>
									</div>
								</div>
							</div>
						</li>
							<!--------------------------------->
					</ol>
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-2">
							<?php /*
								if(isset($_COOKIE['submit']))
									echo"
								<input type='hidden' name='submit' value='submit'/>
							<input type='submit' class='btn btn-info form-control' value='Submit All' id='submit'/>	";
							else 
								echo"<input type='hidden' name='resubmit' value='resubmit'/>
									<input type='submit' class='btn btn-info form-control' value='Resubmit' id='resubmit'/>";
							*/
							?>
							<input type='submit' class='btn btn-info form-control' value='Submit All' id='submit'/>
						</div>
						
						<div class="col-sm-7">
						</div>
					</div>
			</form>
			<div id='time'>
				<span id='timer'></span>
			</div>
		</div>
	</body>
</html>