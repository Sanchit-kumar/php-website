
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>software</title>
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
	setcookie('page_name','upcom.php');
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
							<li class="active"><a href="#"> Software</a></li>
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
		
			<h3><center>SOFTWARE CORNER</center></h3>
			
				
					<div class="container">
						<h4 class="text-uppercase">The Best Antivirus Protection for 2017</h4>
						<p>Here is the ranking of the top 10 antivirus present in the market on the basis of their cost,
							on-demand malware scan,on-access malware scan,website ratings,malicious URL blocking,
							phishing protection,behavior-based detection and vulnerability scan.</p>
						<table class="table table-responsive table-striped">
										<thead>
											<tr>
												<th>Rank</th>
												<th>Name</th>
												<th>On-Demand Malware Scan</th>
												<th>On-Access Malware Scan</th>
												<th>Website Rating</th>
												<th>Malicious URL Blocking</th>
												<th>Phishing Protection</th>
												<th>Behavior-Based Detection</th>
												<th>Bonus: Vulnerability Scan</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>McAfee AntiVirus Plus (2017)</td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												
											</tr>
											<tr >
												<td>2</td>
												<td>Webroot SecureAnywhere AntiVirus </td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
											</tr>
											<tr >
												<td>3</td>
												<td>Bitdefender Antivirus Plus 2017 </td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
											</tr>
											<tr>
												<td>4</td>
												<td>Symantec Norton AntiVirus Basic </td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
											</tr>
											
											<tr>
												<td>5</td>
												<td>Kaspersky Anti-Virus (2017) </td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
											</tr>
											<tr class="slideanim">
												<td>6</td>
												<td>Avast Pro Antivirus 2016 </td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
											</tr>
											<tr class="slideanim">
												<td>7</td>
												<td>Emsisoft Anti-Malware 11.0 </td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
											</tr>
											<tr class="slideanim">
												<td>8</td>
												<td>ESET NOD32 Antivirus 10 </td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
											</tr>
											<tr class="slideanim">
												<td>9</td>
												<td>F-Secure Anti-Virus (2017) </td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
											</tr>
											<tr class="slideanim">
												<td>10</td>
												<td>Trend Micro Antivirus+ Security (2017) </td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-ok"></span></td>
												<td><span class="glyphicon glyphicon-remove"></span></td>
											</tr>
										</tbody>
									</table>
					</div>
				
					<div class="container slideanim">
						<h4 class="text-uppercase"><strong>Apple just revealed the most-downloaded app of 2016</strong></h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/apple.png" class="img-responsive thumbnail" style="width:400px;height:300px;" alt=""/>
								<br/>
								<p>Though much of the list will come as little surprise as Facebook, Instagram, Google Maps and YouTube regularly land the top spots in the App Store, the order may be less expected. Facebook's much-maligned app, Messenger (which currently has an average App Store rating of just three stars) landed the second spot, while the summer's massive hit Pokémon Go came in at number three.</p>
							</div>
							<div class="col-sm-8">
								<p>Apple just revealed the most downloaded apps of 2016 and the top spot should come as little surprise to those who have been paying attention: Snapchat.</p>
								<p>As if we needed more proof that Evan Spiegel's app was having its best year ever,  Snapchat beat out Facebook, Instagram and Pokémon Go to be the most-downloaded free app in the App Store in 2016, according to Apple.</p>	
									
									<br/>
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
							</div>
						</div>
					</div>
				
					<div class="container slideanim">
						<h4 class="text-uppercase">Best video editing tool:<strong> AVS Video Editor</strong></h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/avs.png" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								
								<p>AVS Video Editor can be the first choice of yours when you are looking for an easy to use, professional-quality-rich & quick video editor for your Windows computers. AVS Video Editor, developed by Online Media Technologies, offers a number of notable features such as a huge amount of effects, support for Blu-ray videos, multilingual support, ability to share videos directly through platforms like Facebook, Flick and MySpace and useful features such as stabilization. Considering these, VPS Video Editor is one of the best video editing software for Windows.</p>
								<br/>
							
								
							</div>
						</div>
						<div id="h3" class="collapse in"> <!----collapse div -->
										<br/>
										<h4 class="slideanim">KEY FEATURES OF AVS</h4>
										<h4 class="slideanim">Process Various Video Formats</h4>
											<p>AVS Video Editor supports all key video formats. Edit & save video files in AVI, VOB, MP4, DVD, WMV, 3GP, MOV, MKV, using popular codecs H.264, MPEG-4, H.263 etc. Process video with different frame sizes: HD, Full HD, 2K Quad HD and 4K Ultra HD. See a full list of supported video formats</p>
										<br/>
										<h4 class="slideanim">Edit Your Video with Fantasy</h4>
											<p>Trim, cut, split, merge, rotate and mix videos with AVS Video Editor. Select between 300 innovative video effects and transitions. Insert menus, audio, text comments and subtitles. Stabilize video camera shaky recordings.</p>
										<br/>	
										<h4 class="slideanim">Speed Up HD-Videos Editing</h4>
											<p>Edit AVI HD, WMV HD, TOD, AVCHD, MOD, MTS/M2TS, etc. with AVS Video Editor. Due to the integrated video cache technology, HD-video editing becomes faster.</p>
										<br/>
										<h4 class="slideanim">Record Your Video</h4>
											<p>Transfer video from DV/HDV cameras, webcams or VHS cameras and save video on hard drive or burn DVD discs. Record media files from your PC screen and create video guides, training videos or demos.</p>
										<br/>
										<h4 class="slideanim">Make Stunning Slideshows</h4>
											<p>Capture memorable events and turn them into amazing slideshows. Import images, add your voice or favourite audio tracks, captions and impressive video effects and transitions.</p>
										<br/>
										<h4 class="slideanim">Create Blu-ray Videos</h4>
											<p>Open and edit your Blu-ray videos with AVS Video Editor. Apply effects and add specially designed menus. Add audio, video and images to your videos. Choose between numerous themes and stylish menu templates.</p>
										<br/>
										<h4 class="slideanim">Share Your Video</h4>
											<p>Tell your story in different ways. Save the newly-made video in the desired format on your computer, burn a DVD/Blu-ray disc, adjust video for your iOS and Android devices or publish your creative work in social networks.</p>
								</div>
					</div>
					<!-----------
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