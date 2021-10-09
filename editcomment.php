<?php
include 'com_conn.php';
include 'commenting.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit comment</title>
		<meta charset="utf-08"/>
		<meta name='viewport' content='width=device-width,initial-scale=1'/>
		
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
		
		<!-- jQuery library -->
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

		<!-- Latest compiled JavaScript -->
		<style>
		body{
			background:#ddd;
		}
		textarea{
			width:100%;
			height:350px;
			font-size:18px;
		}
		/*.btn{
			padding-top:10px;
			padding-bottom:10px;
			border-radius:0px;
			 
		}
		.btn:hover{
			background:black;
			color:white;
		} */
		</style>
	</head>
	<body>
<?php	
		$cid=$_POST['cid'];
		$uid=$_POST['uid'];
		$date=$_POST['date'];
		$message=$_POST['message'];
		echo"
		<form class='form-inline' method='post' action='".editcomments($conn)."'>
			<input type='hidden' name='uid' value='".$uid."'/>
			<input type='hidden' name='cid' value='".$cid."'/>
			<input type='hidden' name='date' value='".$date."'/>
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div class='col-sm-6'>
				<textarea name='message'>".$message."</textarea><br/>
					<div class='row'>
						<div class='col-xs-2'>
						</div>
						<div class='col-xs-3'>
							<button name='Edit' class='btn btn-default'>EDIT DONE</button>
						</div>
						<div class='col-xs-2'>
						</div>
						<div class='col-xs-3'>
							<a type='button' class='btn btn-default' href='index.php'>CANCEL</a>
						</div>
						<div class='col-xs-2'>
						</div>
					</div>
				</div>
				<div class='col-sm-3'>
				</div>
			</div>
		</form> ";
	?>
	</body>