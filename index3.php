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
		<script src="slideanimation.js"></script>
		<link rel="stylesheet" href="main.css"/>
	</head>
	<body id="pg" data-spy="scroll" data-target=".navbar" data-offset="50">
<!--------------- navigatio bar--->
		<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lines">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<a href="#" class="navbar-brand" style="font-size:25px;">Tech-hits</a>
					</div>
				<small class="text-uppercase">	
					<div class="collapse navbar-collapse" id="lines">
					<ul class="nav navbar-nav navbar-right">
						
						<li><a href="#recent"> Recent Hits</a></li>
							<li><a href="#os"> OS</a></li>
							<li><a href="#hack"> Hacker</a></li>
							<li><a href="#innov"> Innovation</a></li>
							<li><a href="#bench"> Benchmarks</a></li>
							<li><a href="#soft"> Software</a></li>
							<li><a href="#rank"> Rankings</a></li>
							<li><a href="#upcom"> Upcomings</a></li>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<span class="caret"></span></a>
								<ul class="dropdown-menu" id=>
									<li><a href="#home">What we offer</a></li>
									<li><a href="#bottom">More..</a></li>
								</ul> 
							</li>
					</ul>
					</div>
				</small>
				</div>
			</nav>
	<!----end of navigation bar --->
<!-------beginign of carousel ------------>
		
						<div class="carousel slide bg" data-ride="carousel" id="mycarousel">
							<ol class="carousel-indicators">
								<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
								<li data-target="#mycarousel" data-slide-to="1"></li>
								<li data-target="#mycarousel" data-slide-to="2"></li>
							</ol>
							<!-- WRAPER CLASS -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="images/pl.jpg"/>
									<div class="carousel-caption">
										<h3 style="color:white; font-size:30px;">PROJECT LOOM</h3>
										<p>BALLOON-POWERED INTERNET FOR EVERYONE</p>
									</div>
								</div>
								<div class="item">
									<img src="images/sc.jpg">
										<div class="carousel-caption">
										<h3  style="color:white; font-size:30px;"class="text-uppercase">Sunway TaihuLight </H3>
										<p>WORLD'S FASTEST SUPERCOMPUTER WITH 10649600 CORES AND 125435.9 R<sub>peak</sub>(TFlops/s)</p>
										</div>
								</div>
								<div class="item">
									<img src="images/eh.jpg"/>
										<div class="carousel-caption">
										<h3 style="color:white; font-size:30px;">EHANG 184</h3>
										<p>WORLD'S FIRST PASSENGER DRONE</p>
										</div>
								</div>
								<div class="item">
									<img src="images/diet2.jpg"/>
										<div class="carousel-caption">
										<h3 style="font-size:30px;">DIET SENSOR</h3>
										<p class="text-uppercase">The SCiO device that can read chemical makeup of materials</p>
										</div>
								</div>
								
								
								<div class="item">
									<img src="images/pd.jpg"/>
										<div class="carousel-caption">
										<h3 style="color:white; font-size:30px;">PARROT DISCO</h3>
										<p class="text-uppercase">famous for its entry level drones</p>
										</div>
								</div>
							</div>
						<!-- left and right clicks -->
							<a href="#mycarousel" class="left carousel-control" role="button"
									data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" arial-hidden="true"></span>
									<span class="sr-only"></span>
							</a>
							<a href="#mycarousel" class="right carousel-control" role="button"
									data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" arial-hidden="true"
									></span>
									<span class="sr-only"></span>
							</a>
						</div>
		
<!---------end of the carousel ------------>
		<!-- --------HOME --->
		
		
		<!-----------RECENT HITS ----->
		<div class="container text-center bg" id="recent">
			<H3 class="slideanim">RECENT HITS</H3>
			<div class="row slideanim">
				<div class="col-sm-4  slideanim">
					<h4 class="text-uppercase">Raspberry Pi Foundation releases Pixel, an OS for Windows and Apple x86 platforms</h4>
					<div class="thumbnail">
						<img src="images/rs.jpg" data-toggle="tooltip" title="Home screen of Resberry Pi" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#r1">Description <span class="caret"></span></button>
							</small>
					</div>
					<div id="r1" class="collapse"> <!----collapse div -->
										<p>LOVELY CHARITABLE FOUNDATION, THE RASPBERRY PI LOT, have taken taken the debian operating system and adapted it specifically for the Raspberry Pi wonder computer as Pixel, an experiment that users can try out.</p>
								<p>Pixel is exactly the software that the Foundation has always had in mind, according to founder Eben Upton, and builds upon the all the other efforts that the charity has made to make computing cheaper and more accessible.</p>
								<a href="recent.php" role="button"class="btn btn-success">Read more</a>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<h4 class="text-uppercase">Microsoft compiles Windows 10 milestone build 15000 internally </h4>
					<div class="thumbnail">
						<img src="images/windows10.jpg" data-toggle="tooltip" title="Windows 10" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#r2">Description <span class="caret"></span></button>
							</small>
					</div>
					<div id="r2" class="collapse"> <!----collapse div -->
										<p>Microsoft has surpassed another incredible build milestone internally today, as we're hearing build 15000 of Windows has been compiled. It's been almost 2 years since the company compiled build 10000, which was arguably the last huge build number milestone Windows had surpassed.</p>
										<p>Now, for those paying close attention, you'll already know build 15000 isn't exactly an accurate number for the amount of Windows builds ever compiled. Microsoft have been known to jump builds in the past, making build 15000 not a true count of build creations. Regardless, build 15000 has now been compiled and is being flighted internally at Microsoft.</p>
										<a href="recent.php" role="button"class="btn btn-success">Read more</a>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<h4 class="text-uppercase">Oracle denies it's ramping up a program that fines customers for using software they thought was free </h4>
					<div class="thumbnail">
						<img src="images/oracle-co-ceo.jpg" data-toggle="tooltip" title="Oracle co-CEO Mark Hurd" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#r3">Description <span class="caret"></span></button>
							</small>
					</div>
					<div id="r3" class="collapse"> <!----collapse div -->
										<p>Oracle originally declined to comment on the reports it was increasingly targeting Java users (and it declined comment for The Register's article, too). But it just changed its mind and sent us this statement saying the company isn't doing anything new:</p>
										<p>Oracle's commitment to Java and its community remains stronger than ever, as shared recently at JavaOne. Oracle is not ramping Java SE compliance activity or hiring of compliance staff. The licensing model and policies for Java SE have remained unchanged since before the acquisition of Sun Microsystems. It is incorrect to imply that it's easy for users to accidentally use Java SE Advanced features.</p>
											<a href="recent.php" role="button"class="btn btn-success">Read full article.</a>

								</div>
				</div>
			</div>
			<!--
			<div class="row slideanim">
				<div class="col-sm-2">
					
				</div>
				<div class="col-sm-4 slideanim">
					<div class="thumbnail">
						<img src="004.jpg" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#r21">Description</button>
							</small>
								<div id="r21" class="collapse">
										<p> It is the best</p>
								</div>
					</div>
				</div>
				<div class="col-sm-4 slideanim">
					<div class="thumbnail">
						<img src="004.jpg" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#r22">Description</button>
							</small>
								<div id="r22" class="collapse">
										<p> It is the best</p>
								</div>
					</div>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			-->
			<div class="hr slideanim">
				<hr/>
					<a href="recent.php" role="button"class="btn btn-default">Go to full page</a>
				<hr/>
			</div>
		</div>
		<!------------END RECENT HITS --->
		<!------------OS------>
		<div >
		<div class="container text-center bg" id="os">
			<h3 class="slideanim">OPERATING SYSTEM GIANTS</h3>
			<div class="row">
				<div class="col-sm-4 slideanim">
						<h4>Google Is Working on a Brand New Operating System<br/><strong>FUSCHIA</strong></h4>
					<div class="thumbnail">
						<img src="images/fusc.jpg" data-toggle="tooltip" title="Google Fuschia" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#os1">Description <span class="caret"></span></button>
							</small>
								
					</div>
					<div id="os1" class="collapse"> <!----collapse div -->
										<p>Google is working on a new operating system. But exactly what it’s designed to do is unknown.</p>
										<p>Google-tracking site Android Police spotted a recently published page on coding site GitHub where Google asks for help from outside programmers to build an operating system called Fuchsia. While Google GOOGL -0.71%  is keeping most details about the project secret, it acknowledged on the page that its goal it to create a new operating system. As a hint at, well, something, Google also wrote: “Pink + Purple = Fuchsia.”</p>
										<small>
										<a href="os.php" role="button" class="btn btn-success">Go to full page</a>
									</small>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<h4>Firefox is an Operating System Now?</h4>
					<div class="thumbnail">
						<img src="images/firefox-os.jpg" data-toggle="tooltip" title="Mozilla Firefox" class="img-responsive"  style="height:288px;" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#os2">Description <span class="caret"></span></button>
							</small>
								
					</div>
					<div id="os2" class="collapse"> <!----collapse div -->
									<p>Did you know that Mozilla is creating a new operating system built on top of Firefox, dubbed Firefox OS? This isn't an operating system for your computer--Firefox OS is Mozilla's attempt at a smartphone OS.</p>
									<small>
										<a href="os.php" role="button" class="btn btn-success">Go to full page</a>
									</small>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<h4>Red Hat releases new flagship Linux operating system</h4>
					<div class="thumbnail">
						<img src="images/Red Hat.jpg" data-toggle="tooltip" title="Red Hat" class="img-responsive" style="height:288px;" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#os3">Description <span class="caret"></span></button>
							</small>
					</div>
								<div id="os3" class="collapse"> <!----collapse div -->
										<p>Red Hat Enterprise Linux 7.3 includes new features and enhancements built around performance, security, and reliability. The release also introduces new capabilities around Linux containers and the Internet of Things.</p>
										<small>
										<a href="os.php" role="button" class="btn btn-success">Go to full page</a>
									</small>
								</div>
				</div>
			</div>
			<div class="hr slideanim">
				<hr/>
					<a href="os.php" role="button"class="btn btn-success">Go to full page</a>
				<hr/>
			</div>
		</div>
		</div>
		<!-------END OS ------>
		<!----------HACKER WORLD ---->
		<div class="container text-center bg" id="hack">
			<h3 class="slideanim">HACKER'S CORNER</h3>
			<div class="row">
				<div class="col-sm-4 slideanim">
					<h4 class="text-uppercase">NBC News: Intelligence officials say Putin personally involved in election hack</h4>
					<div class="thumbnail">
						<img src="images/russia.jpg" data-toggle="tooltip" title="Senate Majority Leader Mitch McConnell-USA" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h1">Description <span class="caret"></span></button>
							</small>	
					</div>
					<div id="h1" class="collapse"> <!----collapse div -->
										<p>Russian President Vladimir Putin was personally involved in efforts to intervene in the 2016 U.S. presidential election, NBC News reported, citing two unnamed "senior U.S. intelligence officials."</p>
										<p>New intelligence links Putin directly to the leaks from hacked Democratic National Committee emails, the officials told NBC News with "a high level of confidence."</p>
										<p>A high-level intelligence source said the campaign began as a "vendetta" against Hillary Clinton, NBC News reported. The goal grew into an effort to expose corruption in U.S. politics and to undermine America's international credibility, according to NBC.</p>
										<p>Russian Foreign Minister Sergei Lavrov dismissed the report Thursday as "nonsense," according to Russia's TASS news agency.</p>
										<a href="hacker.php" role="button" class="btn btn-success">Read more</a>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<h4 class="text-uppercase">Google Pixel Hacked in 1-min & Microsoft Edge in 18s at PwnFest</h4>
					<div class="thumbnail">
						<img src="images/g-pixel.jpg"  data-toggle="tooltip" title="Qihoo 360-Hacker's Team" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h2">Description <span class="caret"></span></button>
							</small>
					</div>
					<div id="h2" class="collapse"> <!----collapse div -->
										<p>The brand new Android smartphone launched by Google just a few months back has been hacked by Chinese hackers just in less than a minute.</p>
								<p>Yes, the Google's latest Pixel smartphone has been hacked by a team white-hat hackers from Qihoo 360, besides at the 2016 PwnFest hacking competition in Seoul.</p>
								<p>The Qihoo 360 team demonstrated a proof-of-concept exploit that used a zero-day vulnerability in order to achieve remote code execution (RCE) on the target smartphone.</p>
								<a href="hacker.php" role="button" class="btn btn-success">Read more</a>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<h4 class="text-uppercase">Netflix Twitter Account Hacked </h4>
					<div class="thumbnail">
						<img src="images/netflix-h.png" data-toggle="tooltip" title="Tweet on hacked Netflix twitter account" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h3">Description <span class="caret"></span></button>
							</small>
					</div>
					<div id="h3" class="collapse"> <!----collapse div -->
										<p>The Netflix US Twitter account which has over 2.5 million followers got hacked by a hacker group. The group, which goes by the name of OurMine, Tweeted about its own website and product in the Twitter account of Netflix US. The tweets did not stay long, though, as they were removed an hour after the first one appeared.</p>
										<p>This is not the first time the hacker group is doing this this year. The group has hacked a number of high-profile Twitter accounts including those of Wikipedia co-founder Jimmy Wales, Facebook co-founder Mark Zuckerberg, and Google chief Executive Sundar Pichai.</p>
										<a href="hacker.php" role="button" class="btn btn-success">Read more</a>
								</div>
				</div>
			</div>
				<div class="hr slideanim">
					<hr/>
						<a href="hacker.php" role="button" class="btn btn-default">Go to full page</a>
					<hr/>
				</div>
		</div>
		<!--------END OF HACKER WORLD ---->
		<!--------INNOVATIVE PROJECTS ---->
		<div class="container text-center bg" id="innov">
			<h3 class="slideanim">NEW INNOVATION</h3>
			<div class="row">
				<div class="col-sm-4 slideanim">
					<h4>PARROT DISCO</h4>
					<div class="thumbnail">
						<img src="images/parrot disk.jpg" data-toggle="tooltip" title="Parrot Disco" class="img-responsive" alt=""/>
						<!--
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#in1">Description</button>
							</small>
						-->		
					</div>
						<div id="in1"> <!--class="collapse"> <!----collapse div -->
										<p>The Parrot Disco has two wings that let take off more like a kite than a traditional drone. With just a toss in the air, the Disco can pick up enough momentum to stay afloat. This thing can also fly at speeds up to 50mph, stay up for as long as 45 minutes, comes with a 1080p camera at the nose, and has a number of assisted flying modes.</p>
										<small>
										<a href="innov.php" role="button" class="btn btn-success">Go to full page to continue..</a>
									</small>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<h4>EHANG 184-A PASSENGER DRONE</h4>
					<div class="thumbnail">
						<img src="images/hover-drone.jpg" data-toggle="tooltip" title="EHANG 184-A" class="img-responsive" alt=""/>
						<!--<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#in2">Description</button>
							</small> -->
								
					</div>
					<div id="in2"> <!--class="collapse"> <!----collapse div -->
									<p> Chinese manufacturer Ehang has unveiled the world's first passenger-carrying drone, which will transport individuals through the air without a pilot </p>
									<small>
										<a href="innov.php" role="button" class="btn btn-success">Go to full page to continue..</a>
									</small>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
						<h4>DIET SENSOR</h4>
					<div class="thumbnail">	
						<img src="images/diet2.jpg" data-toggle="tooltip" title="DIET SENSOR" class="img-responsive" alt=""/>
					</div>
				</div>
					<div id="in3"> <!----collapse div -->
								<p>The SCiO device, which is developed by Israeli company Consumer Physics, claims to be able read the chemical makeup of materials. It's non-intrusive and doesn't need to touch the object. You simply point and scan.</p>
								<small>
										<a href="innov.php" role="button" class="btn btn-success">Go to full page to continue..</a>
								</small>
					</div>
			</div>
				<div class="hr slideanim">
				<hr/>
					<a href="innov.php" role="button"class="btn btn-primary">Switch to full innovation page</a>
				<hr/>
			</div>
		</div>	
		<!--------END OF INNOVATIVE PROJECTS---->
		<!--- NEW BENCHMARKS SET IN THE COMPUTING WORLD -->
		<div class="container text-center bg" id="bench">
			<h3 class="slideanim">NEW BENCHMARKS-COMPUTING</h3>
			<div class="row">
				
				<div class="col-sm-6 slideanim">
						<h4 class="text-uppercase">Antutu Ranking for Top 10 Fastest, Most Powerful Smartphones in 2016</h4>
					<small><table class="table table-responsive table-striped table-bordered">
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
									</table></small>
				</div>
				<div class="col-sm-6 slideanim">
					<h4>EEBMC FASTEST PROCESSOR CORES BENCHMARKS</h4>
						<small>
							<table class="table table-responsive table-striped table-bordered">
										<thead>
											<tr class="slideanim">
												<th>Rank</th>
												<th>Processor</th>
												<th>Operating Speed in Mhz</th>
												<th>CoreMark/MHz</th>
												
											</tr>
										</thead>
										<tbody>
											<tr class="slideanim">
												<td>1</td>
												<td>Tilera TILE-Gx8072</td>
												<td>1200</td>
												<td>231.32</td>
												
											</tr>
											<tr class="slideanim">
												<td>2</td>
												<td>Tilera TILEPro64 (TLR36480BG-9C)</td>
												<td>866</td>
												<td>167.60</td>
												
											</tr>
											<tr class="slideanim">
												<td>3</td>
												<td>Intel Xeon E5-2650</td>
												<td>2000</td>
												<td>145.98</td>
												
											</tr>
											<tr class="slideanim">
												<td>4</td>
												<td>Tilera TILE-Gx36</td>
												<td>1400</td>
												<td>118.05</td>
											
											</tr>
											
											<tr class="slideanim">
												<td>5</td>
												<td>Intel Xeon E5 2687W (2P, 16C, 32T)</td>
												<td>3400</td>
												<td>117.68</td>
												
											</tr>
											<tr class="slideanim">
												<td>6</td>
												<td>NXP T4240</td>
												<td>1800</td>
												<td>104.37</td>
												
											</tr>
											<tr class="slideanim">
												<td>7</td>
												<td>CAVIUM OCTEON II CN6880</td>
												<td>1500</td>
												<td>102.32</td>
												
											</tr>
											
											<tr class="slideanim">
												<td>8</td>
												<td>NXP T4240</td>
												<td>1800</td>
												<td>99.87</td>
												
											</tr>
											<tr class="slideanim">
												<td>9</td>
												<td>Adapteva Epiphany-IV E64G401</td>
												<td>800</td>
												<td>98.44</td>
												
											</tr>
											<tr class="slideanim">
												<td>10</td>
												<td>IBM POWER7</td>
												<td>3550</td>
												<td>94.70</td>
											
											</tr>
											
										</tbody>
									</table>
						</small>
				</div>
				<!--<div class="col-sm-4 slideanim">
					<div class="thumbnail">
						<img src="004.jpg" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#b3">Description</button>
							</small>
								<div id="b3" class="collapse">
										<p> It is the best</p>
								</div>
					</div>
				</div> -->
			</div>
			<div class="hr slideanim">
				<hr/>
					<a href="bench.php" role="button"class="btn btn-default">View More Benchmarks</a>
				<hr/>
			</div>
		</div>
		<!----END TO BENCHMARKS COMPUTING ---->
		<!-----SOFTWARE WORLD ---->
		<div class="container text-center bg" id="soft">
			<h3 class="slideanim">SOFTWARE WORLD</h3>
			<div class="row">
				<div class="col-sm-6 slideanim">
					<h4>THE BEST ANTIVIRUS PROTECTION FOR 2017</h4>
					<div>
						<img src="images/mcAfee.jpg" data-toggle="tooltip" title="McAfee" class="img-responsive" alt=""/>
						<small>
								<button type="button" style="border:solid 2px #2aa32e;"class="btn btn-default" data-toggle="collapse" data-target="#s1">View top 10 list <span class="caret"></span</button>
							</small>
					</div>
					<div id="s1" class="collapse"> <!----collapse div -->
									<small>
										<table class="table table-responsive table-striped table-bordered">
										<thead>
											<tr class="slideanim">
												<th><p>Rank</p></th>
												<th><p><center>Name</center></p></th>
											</tr>
										</thead>
										<tbody>
											<tr class="slideanim">
												<td>1</td>
												<td>McAfee AntiVirus Plus (2017)</td>
											</tr>
											<tr class="slideanim" >
												<td>2</td>
												<td>Webroot SecureAnywhere AntiVirus </td>
											</tr>
											<tr  class="slideanim">
												<td>3</td>
												<td>Bitdefender Antivirus Plus 2017 </td>
											</tr>
											<tr class="slideanim">
												<td>4</td>
												<td>Symantec Norton AntiVirus Basic </td>
											</tr>
											
											<tr class="slideanim">
												<td>5</td>
												<td>Kaspersky Anti-Virus (2017) </td>
											</tr>
											<tr class="slideanim">
												<td>6</td>
												<td>Avast Pro Antivirus 2016 </td>
											</tr>
											<tr class="slideanim">
												<td>7</td>
												<td>Emsisoft Anti-Malware 11.0 </td>
											</tr>
											<tr class="slideanim">
												<td>8</td>
												<td>ESET NOD32 Antivirus 10 </td>
											</tr>
											<tr class="slideanim">
												<td>9</td>
												<td>F-Secure Anti-Virus (2017) </td>
												
											</tr>
											<tr class="slideanim">
												<td>10</td>
												<td>Trend Micro Antivirus+ Security (2017) </td>
												
											</tr>
										</tbody>
									</table>
									</small>
								</div>
				</div>
				<div class="col-sm-6 slideanim">
					<h4>APPLE JUST REVEALED THE MOST-DOWNLOADED APP OF 2016</h4>
					<div>
						<img src="images/apple.png" data-toggle="tooltip" title="Apple Play Store" class="img-responsive" style="height:210px;"alt=""/>
						<small>
								<button type="button" style="border:solid 2px #2aa32e;"class="btn btn-default" data-toggle="collapse" data-target="#s2">View top 10 list <span class="caret"></span</button>
							</small>
					</div>
						<div id="s2" class="collapse"> <!----collapse div -->	
								<small>
								<table class="table table-responsive table-striped">
										<thead>
											<tr class="slideanim">
												<th>Rank</th>
												<th>Name of the app</th>
											</tr>
										</thead>
										<tbody>
											<tr class="slideanim">
												<td>1</td>
												<td>Snapchat</td>
											</tr>
											<tr class="slideanim">
												<td>2</td>
												<td>Messenger</td>
											</tr>
											<tr class="slideanim">
												<td>3</td>
												<td>Pokémon GO</td>
											</tr>
											<tr class="slideanim">
												<td>4</td>
												<td>Instagram</td>
											</tr>
											<tr class="slideanim">
												<td>5</td>
												<td>Facebook</td>
											</tr>
											<tr class="slideanim">
												<td>6</td>
												<td>YouTube</td>
											</tr>
											<tr class="slideanim">
												<td>7</td>
												<td>Google Maps</td>
											</tr>
											<tr class="slideanim">
												<td>8</td>
												<td>Pandora</td>
											</tr>
											<tr class="slideanim">
												<td>9</td>
												<td>Netflix</td>
											</tr>
											<tr class="slideanim">
												<td>10</td>
												<td>Spotify Music</td>
											</tr>
										</tbody>
									</table>
									</small>
						</div>
				</div>
				<!--
				<div class="col-sm-4 slideanim">
					<div class="thumbnail">
						<img src="004.jpg" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#s3">Description</button>
							</small>
								<div id="s3" class="collapse">
										<p> It is the best</p>
								</div>
					</div>
				</div>
				-->
			</div>
				<div class="hr slideanim">
				<hr/>
					<a href="soft.php" role="button"class="btn btn-success">Go to full page</a>
				<hr/>
			</div>
		</div>
		<!-----END OF SOFTWARE WORLD--->
		<!----RANKINGS ---->
		<div class="container text-center bg" id="rank">
			<h3 class="slideanim">RANKINGS CORNER</h3>
			<div class="row">
				<div class="col-sm-4 slideanim">
					<h4>Bill Gates again on the top of Forbes billionaires list</h4>
					<div class="thumbnail">
						<img src="images/bill.jpg" data-toggle="tooltip" title="Bill Gates" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#ra1">See top 10 billionaires form Tech world <span class="caret"></span></button>
							</small>
								
					</div>
							<div id="ra1" class="collapse"> <!----collapse div -->
									<small>
									<table class="table table-responsive table-striped table-bordered">
										<thead>
											<tr class="slideanim">
												<th><p>Rank</p></th>
												<th><p>Name</p></th>
												<th><p>Net Worth</p></th>
												<th><p>Source of Wealth</p></th>
												
											</tr>
										</thead>
										<tbody>
											<tr class="slideanim">
												<td><p>1</p></td>
												<td><p>Bill Gates</p></td>
												<td><p>$78 billion</p></td>
												<td>Microsoft</td>
											</tr>
											<tr class="slideanim">
												<td><p>2</p></td>
												<td><p>Jeff Bezos</p></td>
												<td><p>$66.2 billion</p></td>
												<td><p>Amazon</p></td>
											</tr>
											<tr class="slideanim">
												<td><p>3</p></td>
												<td><p>Mark Zuckerberg</p></td>
												<td><p>$54 billion</p></td>
												<td><p>Facebook</p></td>
											</tr>
											<tr class="slideanim">
												<td><p>4</p></td>
												<td><p>Larry Ellison</p></td>
												<td><p>$51.7 billion</p></td>
												<td><p>Oracle</p></td>
											</tr>
											<tr class="slideanim">
												<td><p>5</p></td>
												<td><p>Larry Page</p></td>
												<td><p>$39 billion</p></td>
												<td><p>Google</p></td>
											</tr>
											<tr class="slideanim">
												<td><p>6</p></td>
												<td><p>Sergey Brin</p></td>
												<td><p>$38.2 billion</p></td>
												<td><p>Google</p></td>
											</tr>
											<tr class="slideanim">
												<td><p>7</p></td>
												<td><p>Steve Ballmer</p></td>
												<td><p>$27.7 billion</p></td>
												<td><p>Microsoft</p></td>
											</tr>
											<tr class="slideanim">
												<td><p>8</p></td>
												<td><p>Jack Ma</p></td>
												<td><p>$25.8 billion</p></td>
												<td><p>Alibaba</p></td>
											</tr>
											<tr class="slideanim">
												<td><p>9</p></td>
												<td><p>Ma Huateng</p></td>
												<td><p>$22 billion</p></td>
												<td><p>Tencent</p></td>
											</tr>
											<tr class="slideanim">
												<td><p>10</p></td>
												<td><p>Mitchael Dell</p></td>
												<td><p>$20 billion</p></td>
												<td><p>Dell</p></td>
											</tr>
										</tbody>
									</table>
									</small>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<h4>TOP 10 IT COMPANIES IN WORLD 2016-IBM ON TOP(PROFIT WISE)</h4>
					<div class="thumbnail">
						<img src="images/ibm.jpg" data-toggle="tooltip" title="IBM-Maximum profit earning IT-company in 2016" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#ra2">See top 10 list <span class="caret"></span></button>
							</small>
								
					</div>
					<div id="ra2" class="collapse">
							<small>
								<table class="table table-responsive table-striped table-bordered">
							<thead>
								<tr class="slideanim">
									<th>Rank</th>
									<th>Company Name</th>
									<th>Revenue (Billion$)</th>
									<th>Profit (Billion$)</th>
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
							</small>
					</div>
				</div>
				<div class="col-sm-4 slideanim">
					<h4>TOP 10 PC GAME RELEASES BY SCORE IN 2016</h4>
					<div class="thumbnail">
						<img src="images/witche.jpg" data-toggle="tooltip" title="The WITCHER Wild Hunt" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#ra3">See the top 10 list<span class="caret"></span></button>
							</small>
					</div>
					<div id="ra3" class="collapse"> <!----collapse div -->
										<small>
										<table class="table table-responsive table-striped table-bordered">
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
									</small>
								</div>
				</div>
			</div>
				<div class="hr slideanim">
				<hr/>
					<a href="rank.php" role="button"class="btn btn-default">See more ranking-go to rankings page</a>
				<hr/>
			</div>
		</div>
		<!----END OF RANKINGS --->
		<!------COOMING SOON ---------->
		<div class="container text-center bg" id="upcom">
			<h3 class="slideanim">FUTURE PROJECTS. COMING SOON...</h3>
			<div class="row">
				<div class="col-sm-4 slideanim">
					<div class="thumbnail">
						<h4>PROJECT LOOM-BALLOON POWERED INTERNET
									FOR EVERYONE</h4>
						<img src="images/loom.jpg" data-toggle="tooltip" title="Project Loom" class="img-responsive" alt=""/>
							<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#c1">Description <span class="caret"></span></button>
							</small>
								
					</div>
								<div id="c1" class="collapse"> <!----collapse div -->
									<p>Project Loon balloons float in the stratosphere, twice as high as airplanes and the weather. In the stratosphere, there are many layers of wind, and each layer of wind varies in direction and speed. Loon balloons go where they’re needed by rising or descending into a layer of wind blowing in the desired direction of travel. By partnering with Telecommunications companies to share cellular spectrum we’ve enabled people to connect to the balloon network directly from their phones and other LTE-enabled devices. The signal is then passed across the balloon network and back down to the global internet on Earth.</p>
									<small>
										<a href="upcom.php" role="button" class="btn btn-success">Read More...</a>
									</small>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<div class="thumbnail">
						<h4>3D PRINTED FOOD-3D PRINTING</H4>
							<img src="images/3Dfood.jpg" data-toggle="tooltip" title="3D Printed Food" class="img-responsive" alt=""/>
							<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#c2">Description <span class="caret"></span></button>
							</small>
								
					</div>
					<div id="c2" class="collapse"> <!----collapse div -->
									<p>German company, Biozoon, is harnessing the power of 3D printing to create seneoPro, a range of 3D-printable powder mixtures that solidifies when printed but also very quickly melts when eaten. The main target for this new 3D-printable food are elderly patients who suffer from dysphagia, or the inability to swallow.</p>
									<small>
											<a href="upcom.php" role="button" class="btn btn-success">Read More...</a>
										</small>
								</div>
				</div>
				<div class="col-sm-4 slideanim">
					<div class="thumbnail">
						<h4>GOOGLE SMART CONTACT LENS</h4>
						<img src="images/lense.jpg" data-toggle="tooltip" title="Google Smart Contact Lense" class="img-responsive" alt=""/>
						<small>
								<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#c3">Description <span class="caret"></span></button>
							</small>
					</div>
							<div id="c3" class="collapse"> <!----collapse div -->
									<p>Google Contact Lens is a smart contact lens .The project aims to assist people with diabetes by constantly measuring the glucose levels in their tears.The project is being carried out by Verily and it is currently being tested using prototypes.</p>
									<small>
										<a href="upcom.php" role="button" class="btn btn-success">Read More...</a>
									</small>
							</div>
				</div>
			</div>
				<div class="hr slideanim">
				<hr/>
					<a href="upcom.php" role="button"class="btn btn-success">Go to full page</a>
				<hr/>
			</div>
		</div>
		<!-------END OF COOMING SOON--->
		
		<div class="container text-center" id="home">
			<h3 class="slideanim">ABOUT US</h3>
			<h3 class="slideanim">GET YOURSELF IN TOUCH WITH</h3>
			<div class="row">
				<div class="col-sm-4 slideanim">
					<img src="home-icons/recent.png" height="80" width="80"/>
					<br/>
					<p>Recent hit news from IT Industry.</p>
				</div>
				<div class="col-sm-4 slideanim">
					<img src="home-icons/os.png" height="80" width="250"/>
					<p>What's new in the operating system market?</p>
				</div>
				<div class="col-sm-4 slideanim">
					<img src="home-icons/hackers.png" height="80" width="100"/>
					<br/>
					<p>What's happening in the hacker's world.<p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 slideanim">
					<span class="glyphicon glyphicon-signal"></span>
					<br/>
					<p>New benchmarks of computing world.</p>
				</div>
				<div class="col-sm-4 slideanim">
					<img src="home-icons/soft.jpg" height="80" width="80"/>
					<br/>
					<p>Software changing the way computers ever used.</p> 
				</div>
				<div class="col-sm-4 slideanim">
					<img src="home-icons/cart.png" height="80" width="80"/>
					<br/>
					<p>Game changing products in the market.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<!-- this is blank just use for adjustment -->
				</div>
				<div class="col-sm-4 slideanim">
					<img src="home-icons/ranking.png" height="80" width="80"/>
					<br/>
					<p>Interesting rankings of the IT Industry in various categories.</p>
				</div>
				<div class="col-sm-4 slideanim">
					<span class="glyphicon glyphicon-earphone"></span>
					<br/>
					<p>Contact Us</p>
				</div>
				<div class="col-sm-2">
					<!-- this is blank just use for adjustment -->
				</div>
			</div>
			
		</div>
		<!-- --------HOME END--->
		<footer class="text-center" id="bottom" slideanim>
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
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
		<script>
		$(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip(); 
		  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
			if (this.hash !== "") {
			  event.preventDefault();
			  var hash = this.hash;
			  $('html, body').animate({
				scrollTop: $(hash).offset().top
			  }, 900, function(){
				   window.location.hash = hash;
			  });
			} 
		  });
		  	
		})
</script>
	</body>
</html>