<?php
echo"<div class='modal fade text-center' id='log' role='dialog'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal'>&times;</button>
				<h4 class='modal-title'>LOG IN</h4>
			</div>
			<div class='modal-body'>
				<form class='form-inline' method='post' action='login_index.php' >
								<div class='input-group'>
									<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
									<input type='text' class='form-control'  name='email' placeholder='Username/Email' id='email_login'/>
									</div>
								<br/>
								<br/>
								<div class='input-group'>
									<span class='input-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
									<input type='password' name='pwd' class='form-control' id='email_login' placeholder='Password'>
								</div>
								<br/>
								<br/>
								<div class='row'>
									<div class='col-xs-2'>
									</div>
									<div class='col-xs-3'>
										<a type='button' class='btn btn-success' href='sign_up.php'>Sign Up</a>
									</div>
									<div class='col-xs-1'>
									</div>
									<div class='col-xs-3'>
										<input type='submit' value='Log in' name='login_submit' class='form-control btn btn-default'/>						
										
									</div>
									<div class='col-xs-3'>
									</div>
								</div>
							</form>
			</div>
			<div class='modal-footer'> 
				<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
			</div>
		</div>
	</div>
</div>
";