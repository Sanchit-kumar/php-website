<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Rankings</title>
		<meta charset="utf-08"/>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<script src="slideanimation.js"></script>

		<link rel="stylesheet" href="sub-main.css"/>
	</head>
	<body id="pg">
	
	<?php
	date_default_timezone_set('Asia/Kolkata');
	if(isset($_REQUEST['err']))
	echo"<script>alert('Invalid username and password');</script>";
	setcookie('page_name','rank.php');
	include 'modal_login.php';
	include 'login_error.php';
	ob_start();
	
?>
		<!--------------- navigatio bar--->
		<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lines">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<a href="#" class="navbar-brand" style="font-size:25px;"> Tech-hits</a>
					</div>
				<small class="text-uppercase">		
					<div class="collapse navbar-collapse" id="lines">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="recent.php"> Recent Hits</a></li>
							<li><a href="os.php"> OS</a></li>
							<li><a href="hacker.php"> Hacker</a></li>
							<li><a href="innov.php"> Innovation</a></li>
							<li><a href="bench.php"> Benchmarks</a></li>
							<li><a href="soft.php"> Software</a></li>
							<li class="active"><a href="#"> Rankings</a></li>
							<li><a href="upcom.php"> Upcomings</a></li>
							<?php 
								if(!isset($_COOKIE['email']))
								{
									echo"<li> &nbsp;&nbsp;<button id='bbb' style='margin-top:8px;' type='button' class='btn btn-default' data-toggle='modal' data-target='#log'><span class='glyphicon glyphicon-log-in'></span> LOG IN</button></li>";
								}
								else{
								echo "<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
								echo 'Hi '.$_COOKIE['fname']; 
								echo "<span class='caret'></span></a>
								<ul class='dropdown-menu'>
									<li><a href='logout.php'>LOG OUT</a></li>
									<li><a href='#bottom'>ABOUT US</a></li>
								</ul>";
								echo'</li>';
								}
							?>
					</ul>
					</div>
				</small>
				</div>
			</nav>
	<!----end of navigation bar --->
	<!----------HACKER WORLD ---->
		
			<h3><center>RANKING IN IT WORLD</center></h3>
			
				
					<div class="container text-center">
						<h4 class="text-uppercase">Top 10 Information Technology (IT) Companies in World 2016</h4>
						<br/>
						<p>IT sector is one of the fastest growing sector in the world. With information technology now at the center of businesses, the current time is really great for the sector. The market is growing and IT adoption rates are rising every year. New fields like cloud, mobility are leading the services now. All companies are now offering a big spectrum of IT services ranging from conventional IT services to modern technology offerings. The top IT companies in the world have companies like IBM, Accenture, Microsoft followed by companies like TCS, Capgemini and enterprise software giants Oracle & SAP. Cognizant and CSC are also in the list. Here is the list of top 10 IT companies in the world 2016 on the basis of Revenue and Profit.</p>
							<table class="table table-responsive table-hover table-striped table-bordered">
							<thead>
								<tr class="slideanim">
									<th>Rank</th>
									<th>Company Name</th>
									<th>Revenue(Billion$)</th>
									<th>Profit(Billion$)</th>
								</tr>
							</thead>
							<tbody>
								<tr class="slideanim">
									<td>1</td>
									<td>IBM</td>
									<td>72.155</td>
									<td>11.691</td>
								</tr>
								<tr class="slideanim">
									<td>2</td>
									<td>Microsoft Corporation</td>
									<td>63.055</td>
									<td>8.156</td>
								</tr>
								<tr class="slideanim">
									<td>3</td>
									<td>Accenture</td>
									<td>33.037</td>
									<td> 3.250</td>
								</tr>
								<tr class="slideanim">
									<td>4</td>
									<td>Oracle Corporation</td>
									<td>29.037</td>
									<td>9.198</td>
								</tr>
								<tr class="slideanim">
									<td>5</td>
									<td>Hewlett Packard Enterprise</td>
									<td>24.200</td>
									<td>1.200</td>
								</tr>
								<tr class="slideanim">
									<td>6</td>
									<td>SAP</td>
									<td>23.346</td>
									<td>3.429</td>
								</tr>
								<tr class="slideanim">
									<td>7</td>
									<td>Tata Consultancy Services (TCS)</td>
									<td>16.238</td>
									<td>3.719</td>
								</tr>
								<tr class="slideanim">
									<td>8</td>
									<td>Capgemini</td>
									<td>13.370</td>
									<td>1.242</td>
								</tr>
								<tr class="slideanim">
									<td>9</td>
									<td>Cognizant Technology Solutions</td>
									<td>12.416</td>
									<td>1.623</td>
								</tr>
								<tr class="slideanim">
									<td>10</td>
									<td>CSC or Computer Sciences Corporation </td>
									<td>10.132</td>
									<td>0.395</td>
								</tr>
							</tbody>
						</table>
					</div>
				
					<div class="container slideanim">
						<h4 class="text-uppercase">The world's top 10 richest tech billionaries 2016</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/bill.jpg" data-toggle="popover" data-trigger="hover" data-placement="right" title="Bill Gates" data-content="The richest billionarie with net wealth of $78 billion. He is the founder of Microsoft." class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p>It's been a tumultuous start to 2016 for many public companies, but tech billionaires continue to dominate the ranks of the world’s wealthiest people. Four of the 10 richest people on the planet made their fortunes in tech. In total, there are 159 tech billionaires on the FORBES 2016 Billionaires List, worth a combined $818.7 billion.</p>
								<p>Soaring stock prices for Facebook FB -0.62% and Amazon, both up more than 30% in the past 12 months, have propelled the CEOs of those two tech giants into the ranks of the world’s 10 richest people. Facebook CEO Mark Zuckerberg is the biggest gainer in the world this year, adding $11.2 billion to his fortune and climbing 10 spots in a year to become the sixth richest person in the world.</p>
								
							</div>
						</div>
						<div id="h2" class="collapse in"> <!----collapse div -->
								<table class="table table-responsive table-hover table-striped table-bordered">
										<thead>
											<tr class="slideanim">
												<th>Rank</th>
												<th>Name</th>
												<th>Net Worth</th>
												<th>Source of Wealth</th>
												
											</tr>
										</thead>
										<tbody>
											<tr class="slideanim">
												<td>1</td>
												<td>Bill Gates</td>
												<td>$78 billion</td>
												<td>Microsoft</td>
											</tr>
											<tr class="slideanim">
												<td>2</td>
												<td>Jeff Bezos</td>
												<td>$66.2 billion</td>
												<td>Amazon</td>
											</tr>
											<tr class="slideanim">
												<td>3</td>
												<td>Mark Zuckerberg</td>
												<td>$54 billion</td>
												<td>Facebook</td>
											</tr>
											<tr class="slideanim">
												<td>4</td>
												<td>Larry Ellison</td>
												<td>$51.7 billion</td>
												<td>Oracle</td>
											</tr>
											<tr class="slideanim">
												<td>5</td>
												<td>Larry Page</td>
												<td>$39 billion</td>
												<td>Google</td>
											</tr>
											<tr class="slideanim">
												<td>6</td>
												<td>Sergey Brin</td>
												<td>$38.2 billion</td>
												<td>Google</td>
											</tr>
											<tr class="slideanim">
												<td>7</td>
												<td>Steve Ballmer</td>
												<td>$27.7 billion</td>
												<td>Microsoft</td>
											</tr>
											<tr class="slideanim">
												<td>8</td>
												<td>Jack Ma</td>
												<td>$25.8 billion</td>
												<td>Alibaba</td>
											</tr>
											<tr class="slideanim">
												<td>9</td>
												<td>Ma Huateng</td>
												<td>$22 billion</td>
												<td>Tencent</td>
											</tr>
											<tr class="slideanim">
												<td>10</td>
												<td>Mitchael Dell</td>
												<td>$20 billion</td>
												<td>Dell</td>
											</tr>
										</tbody>
									</table>
								</div>
					</div>
				
					<div class="container slideanim">
						<h4 class="text-uppercase">Top 10 PC game releases by Score in 2016</h4>
							<p>Here is the list of top 10 pc games of 2016.<strong> Out of the Park Baseball 17 </strong>secure the first position with the maximum score of 92 which was release on Mar 22, 2016. It is followed by<strong> The Witcher 3: Wild Hunt - Blood and Wine</strong> which secured 2nd rank with again 92 scores.</p>
						<div class="row">
						
								<table class="table table-responsive table-hover table-striped table-bordered">
										<thead>
											<tr class="slideanim">
												<th>Rank</th>
												<th>Name of the Game</th>
												<th>Score</th>
												<th>Date of Release</th>
												
											</tr>
										</thead>
										<tbody>
											<tr class="slideanim">
												<td>1</td>
												<td>Out of the Park Baseball 17</td>
												<td>92</td>
												<td>Mar 22, 2016</td>
											</tr>
											<tr class="slideanim">
												<td>2</td>
												<td>The Witcher 3: Wild Hunt - Blood and Wine</td>
												<td>92</td>
												<td>May 30, 2016</td>
											</tr>
											<tr class="slideanim">
												<td>3</td>
												<td>Overwatch</td>
												<td>91</td>
												<td>May 23, 2016</td>
											</tr>
											<tr class="slideanim">
												<td>4</td>
												<td>Stephen's Sausage Roll</td>
												<td>90</td>
												<td>Apr 18, 2016</td>
											</tr>
											
											<tr class="slideanim">
												<td>5</td>
												<td>Kentucky Route Zero - Act IV</td>
												<td>90</td>
												<td>Jul 20, 2016</td>
											</tr>
											<tr class="slideanim">
												<td>6</td>
												<td>Dark Souls III</td>
												<td>89</td>
												<td>Apr 11, 2016</td>
											</tr>
											<tr class="slideanim">
												<td>7</td>
												<td>Owlboy</td>
												<td>89</td>
												<td>Nov 1, 2016</td>
											</tr>
											<tr class="slideanim">
												<td>8</td>
												<td>Stardew Valley</td>
												<td>88</td>
												<td>Feb 26, 2016</td>
											</tr>
											<tr class="slideanim">
												<td>9</td>
												<td>Ori and the Blind Forest: Definitive Edition</td>
												<td>88</td>
												<td>Apr 27, 2016</td>
											</tr>
											<tr class="slideanim">
												<td>10</td>
												<td>XCOM 2</td>
												<td>88</td>
												<td>Feb 5, 2016</td>
											</tr>
											
										</tbody>
									</table>
										<!--
										<div class="col-sm-4">
											<img src="004.jpg" class="img-responsive thumbnail" alt=""/>
										</div>
										<div class="col-sm-8">
											<p> content is here</p>
											<small>
												<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h3">Description</button>
											</small>
											 -->
							</div>
					
						
					</div>
					<!--
					<div class="container slideanim">
						<h4> </h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="004.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p> content is here</p>
								<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h4">Description</button>
								</small>
							</div>
						</div>
						<div id="h4" class="collapse"> 
										<p> It is the best</p>
								</div>
					</div>
					
					<div class="container slideanim">
						<h4> </h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="004.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p> content is here</p>
								<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h5">Description</button>
								</small>
							</div>
						</div>
						<div id="h5" class="collapse"> 
										<p> It is the best</p>
								</div>
					</div>
					------------->
					<div class="container slideanim">
						<h4 class="text-uppercase">Antutu Ranking for Top 10 Fastest, Most Powerful Smartphones in 2016</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/screen.jpg" class="img-responsive thumbnail slideanim" data-toggle="tooltip" title="Antutu Score for Le2 (Le X526)" style="height:750px;" alt=""/>
							</div>
							<div class="col-sm-8">
										<p>The List of Top 2016 Fastest Smartphones is based on the benchmark app Antutu. The scores or ratings listed below are generated through actual testing of the device and do not follow the ranking of Antutu. There is a slight difference in our actual test versus Antutu’s ranking. We prefer to put the actual scores as the device is tested in the real world environment rather than the laboratory.</p>
										<p>AnTuTu Benchmark is a comprehensive Android Benchmarking application. It includes "Memory Performance", "CPU Integer Performance", "CPU Floating Point Performance", "2D 3D Graphics Performance", "SD card read-write speed", "Database IO" performance testing.</p>
										<br/>
										<h4>AnTuTu Benchmark Scores</h4>
								<div id="h1" class="collapse in"> <!----collapse div -->
										<table class="table table-responsive table-hover table-striped table-bordered">
										<thead>
											<tr class="slideanim">
												<th>Rank</th>
												<th>Name</th>
												<th>Antutu Benchmark Score</th>
												<th>Price</th>
												
											</tr>
										</thead>
										<tbody>
											<tr class="slideanim">
												<td>1</td>
												<td>iPhone 7 Plus</td>
												<td>170,000+</td>
												<td>72,000</td>
											</tr>
											<tr class="slideanim">
												<td>2</td>
												<td>OnePlus 3T </td>
												<td>164,523</td>
												<td>30,000</td>
											</tr>
											<tr class="slideanim">
												<td>3</td>
												<td>Google Pixel</td>
												<td>145,815</td>
												<td>56,884</td>
											</tr>
											<tr class="slideanim">
												<td>4</td>
												<td>OnePlus 3 </td>
												<td>140,801</td>
												<td>28,000</td>
											</tr>
											
											<tr class="slideanim">
												<td>5</td>
												<td>Samsung Galaxy Note 7</td>
												<td>133,565</td>
												<td>50,900</td>
											</tr>
											<tr class="slideanim">
												<td>6</td>
												<td>iPhone 6s Plus</td>
												<td>132,620</td>
												<td>46,000</td>
											</tr>
											<tr class="slideanim">
												<td>7</td>
												<td>Sony Xperia X Performance</td>
												<td>131,570</td>
												<td>N/A</td>
											</tr>
											<tr class="slideanim">
												<td>8</td>
												<td>Samsung Galaxy S7 (Exynos 8890) </td>
												<td>126,314</td>
												<td>50,900</td>
											</tr>
											<tr class="slideanim">
												<td>9</td>
												<td>LG G5</td>
												<td>38,990</td>
												<td>122,152</td>
											</tr>
											<tr class="slideanim">
												<td>10</td>
												<td>Xiaomi Mi5</td>
												<td> 112,719</td>
												<td>20,000</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
								
					</div>
		<!--------END OF HACKER WORLD ---->
		<footer class="text-center" id="bottom">
			<a href="#pg"  data-toggle="tooltip" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></a>
			<br/>
			<div class="row" style="padding-top:5px">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4 text-center">
					<div style="color:white">
						<p> Develop by:<strong> Sanchit Kumar</strong></p>
						Follow at:
						<a href="https://twitter.com/tech_hit" role="button" data-toggle="tooltip" title="Twitter"><img src="icons/tw.png" class="img-circle" alt="Twitter" height="30" width="30"/>
							</a>
						<a href="https://www.instagram.com/sanchit_dabgotra/" role="button" data-toggle="tooltip" title="Instagram">  <img src="icons/insta.png" class="img-circle"  alt="Instagram" height="30" width="30"/>
							</a>
						<a href="https://plus.google.com/u/0/101717145016510004226" role="button" data-toggle="tooltip" title="Google+">  <img src="icons/g+.jpg" class="img-circle" alt="Google+" height="30" width="30"/>
							</a>
							<p></p>
					</div>
				</div>
				<div class="col-sm-4 text-center">
					<p><span class="glyphicon glyphicon-phone"></span> Phone: +919780313848</p>
					<p><span class="glyphicon glyphicon-envelope"></span> Email: sanchit.dabgotra@gmail.com</p>
				</div>
			</div>
		</footer>
		<script>
			$(document).ready(function(){
				$('[data-toggle="popover"]').popover();
				$('[data-toggle="tooltip"]').tooltip();
			});
</script>
	</body>
</html>