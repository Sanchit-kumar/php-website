<?php
				echo"
				<div id='log_in_box' hidden>		
						<form class='form-inline' action="."login()"." method='post'>
								<div class='input-group'>
									<span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
									<input type='text' class='form-control'  name='email' placeholder='Email' id='email_login'/>
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
										<input type='submit' value='Log in' class='form-control btn btn-default'/>						
									</div>
									<div class='col-xs-3'>
									</div>
								</div>
							</form>
				</div>
				";
?>