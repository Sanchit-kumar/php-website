<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Benchmarks</title>
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
	setcookie('page_name','bench.php');
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
							<li class="active"><a href="#"> Benchmarks</a></li>
							<li><a href="soft.php"> Software</a></li>
							<li><a href="rank.php"> Rankings</a></li>
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
		
			<h3><center>NEW BENCHMARKS OF COMPUTING WORLD</center></h3>
			
				
					<div class="container">
						<h4>Antutu Ranking for Top 10 Fastest, Most Powerful Smartphones in 2016</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/screen.jpg" class="img-responsive thumbnail" style="height:750px;" alt=""/>
							</div>
							<div class="col-sm-8">
										<p>The List of Top 2016 Fastest Smartphones is based on the benchmark app Antutu. The scores or ratings listed below are generated through actual testing of the device and do not follow the ranking of Antutu. There is a slight difference in our actual test versus Antutu’s ranking. We prefer to put the actual scores as the device is tested in the real world environment rather than the laboratory.</p>
										<p>AnTuTu Benchmark is a comprehensive Android Benchmarking application. It includes "Memory Performance", "CPU Integer Performance", "CPU Floating Point Performance", "2D 3D Graphics Performance", "SD card read-write speed", "Database IO" performance testing.</p>
										<p style="font-weight:500;font-size:20px;letter-spacing:4px;text-align:center;">AnTuTu Scores</p>
								<div id="h1" class="collapse in"> <!----collapse div -->
										<table class="table table-responsive table-striped table-bordered">
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
				
					<div class="container slideanim">
						<h4>Benhmarks of the most powerful supercomputers on Earth</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/supercomputers.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p>R<sub>max</sub> and R<sub>peak</sub> values are in TFlops. For more details about other fields, check the TOP500 description.

									R<sub>peak</sub> values are calculated using the advertised clock rate of the CPU. For the efficiency of the systems you should take into account the Turbo CPU clock rate where it applies.</p>
								<br/>
								<h4>BENCHMARKS SCORES OF TOP 5 SUPERCOMPUTERS</h4>
							</div>
						</div>
						<div id="h2" class="collapse in"> <!----collapse div -->
									<table class="table table-responsive table-striped table-bordered">
										<thead>
											<tr class="slideanim">
												<th>Rank</th>
												<th>Location</th>
												<th>Name of System</th>
												<th>Cores</th>
												<th>R<sub>max</sub>(TFlops/s)</th>
												<th>R<sub>peak</sub>(TFlops/s)</th>
												
											</tr>
										</thead>
										<tbody>
											<tr class="slideanim">
												<td>1</td>
												<td>	National Supercomputing Center in Wuxi
														<br/>China</td>
												<td>Sunway TaihuLight - Sunway MPP, Sunway SW26010 260C 1.45GHz, Sunway</td>
												<td>10,649,600</td>
												<td>93,014.6</td>
												<td>125,435.9</td>
											</tr>
											<tr class="slideanim">
												<td>2</td>
												<td>National Super Computer Center in Guangzhou
														<br/>China</td>
												<td>Tianhe-2 (MilkyWay-2) - TH-IVB-FEP Cluster, Intel Xeon E5-2692 12C 2.200GHz, TH Express-2, Intel Xeon Phi 31S1P </td>
												<td>3,120,000</td>
												<td>33,862.7</td>
												<td>54,902.4</td>
											</tr>
											<tr class="slideanim">
												<td>3</td>
												<td>DOE/SC/Oak Ridge National Laboratory <br/>United State</td>
												<td>Titan - Cray XK7 , Opteron 6274 16C 2.200GHz, Cray Gemini interconnect, NVIDIA K20x </td>
												<td>560,640</td>
												<td>17,590.0</td>
												<td>27,112.5</td>
											</tr>
											<tr class="slideanim">
												<td>4</td>
												<td>DOE/NNSA/LLNL
													<br/>United States</td>
												<td>United States	Sequoia - BlueGene/Q, Power BQC 16C 1.60 GHz, Custom </td>
												<td>1,572,864</td>
												<td>17,173.2</td>
												<td>20,132.7</td>
											</tr>
											
											<tr class="slideanim">
												<td>5</td>
												<td>RIKEN Advanced Institute for Computational Science (AICS)
													<br/>Japan</td>
												<td>K computer, SPARC64 VIIIfx 2.0GHz, Tofu interconnect </td>
												<td>705,024</td>
												<td>10,510.0</td>
												<td>11,280.4</td>
											</tr>
										</tbody>
									</table>
						</div>
					</div>
				
					<div class="container slideanim">
						<h4>EEBMC PROCESSOR CORES BENCHMARKS</h4>
						
								<p>EEMBC, an industry alliance, develops benchmarks to help system designers select the optimal processors and understand the performance and energy characteristics of their systems. EEMBC has benchmark suites targeting cloud and big data, mobile devices (for phones and tablets), networking, ultra-low power microcontrollers, the Internet of Things (IoT), digital media, automotive, and other application areas. EEMBC also has benchmarks for general-purpose performance analysis including CoreMark, MultiBench (multicore), and FPMark (floating-point).</p>
								<br/>
								<h4>EEBMC Processor CoreMark Scores</h4>
									<table class="table table-responsive table-striped table-bordered">
										<thead>
											<tr class="slideanim">
												<th>Rank</th>
												<th>Processor</th>
												<th>Operating Speed in Mhz</th>
												<th>CoreMark/MHz</th>
												<th>CoreMark</th>
											</tr>
										</thead>
										<tbody>
											<tr class="slideanim">
												<td>1</td>
												<td>Tilera TILE-Gx8072</td>
												<td>1200</td>
												<td>231.32</td>
												<td>277578.70</td>
											</tr>
											<tr class="slideanim">
												<td>2</td>
												<td>Tilera TILEPro64 (TLR36480BG-9C)</td>
												<td>866</td>
												<td>167.60</td>
												<td>145153.74</td>
											</tr>
											<tr class="slideanim">
												<td>3</td>
												<td>Intel Xeon E5-2650</td>
												<td>2000</td>
												<td>145.98</td>
												<td>291957.48</td>
											</tr>
											<tr class="slideanim">
												<td>4</td>
												<td>Tilera TILE-Gx36</td>
												<td>1400</td>
												<td>118.05</td>
												<td>165276.25</td>
											</tr>
											
											<tr class="slideanim">
												<td>5</td>
												<td>Intel Xeon E5 2687W (2P, 16C, 32T)</td>
												<td>3400</td>
												<td>117.68</td>
												<td>400116.70</td>
											</tr>
											<tr class="slideanim">
												<td>6</td>
												<td>NXP T4240</td>
												<td>1800</td>
												<td>104.37</td>
												<td>187873.61</td>
											</tr>
											<tr class="slideanim">
												<td>7</td>
												<td>CAVIUM OCTEON II CN6880</td>
												<td>1500</td>
												<td>102.32</td>
												<td>153477.22</td>
											</tr>
											
											<tr class="slideanim">
												<td>8</td>
												<td>NXP T4240</td>
												<td>1800</td>
												<td>99.87</td>
												<td>179763.04 </td>
											</tr>
											<tr class="slideanim">
												<td>9</td>
												<td>Adapteva Epiphany-IV E64G401</td>
												<td>800</td>
												<td>98.44</td>
												<td>78748.80</td>
											</tr>
											<tr class="slideanim">
												<td>10</td>
												<td>IBM POWER7</td>
												<td>3550</td>
												<td>94.70</td>
												<td>336196.25</td>
											</tr>
											
										</tbody>
									</table>
						
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
					-->
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