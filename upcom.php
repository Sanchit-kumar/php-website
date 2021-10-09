
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Upcomings</title>
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
							<li><a href="soft.php"> Software</a></li>
							<li><a href="rank.php"> Rankings</a></li>
							<li class="active"><a href="#"> Upcomings</a></li>
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
		
			<h3><center>THE MOST AWAITED. COMING SOON...</center></h3>
			
				
					
				
					<div class="container">
						<h3 style="margin-top:30px;">PROJECT LOON</h3>
							<h4>BALLOON-POWERED INTERNET
									FOR EVERYONE</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/loom.jpg" class="img-responsive thumbnail" data-toggle="tooltip" title="Google Loon Project" alt="" style="height:280px"/>
							</div>
							<div class="col-sm-8">
								<h4>What is Project Loon?</h4>
								<p>Many of us think of the internet as a global community. But two-thirds of the world’s population does not yet have internet access. Project Loon is a network of balloons traveling on the edge of space, designed to connect people in rural and remote areas, help fill coverage gaps, and bring people back online after disasters. </p>
								<br/>
								<h4>How does Project Loon work?</h4>
								
							</div>
						</div>
						<div id="h2"> <!----collapse div -->
									<p>Project Loon balloons float in the stratosphere, twice as high as airplanes and the weather. In the stratosphere, there are many layers of wind, and each layer of wind varies in direction and speed. Loon balloons go where they’re needed by rising or descending into a layer of wind blowing in the desired direction of travel. By partnering with Telecommunications companies to share cellular spectrum we’ve enabled people to connect to the balloon network directly from their phones and other LTE-enabled devices. The signal is then passed across the balloon network and back down to the global internet on Earth.</p>
									<small>
									<a href="https://x.company/loon/" role="button" class="btn  btn-success">Visit full website</a>
									</small>
								</div>
					</div>
				
					<div class="container slideanim">
						<h4 class="text-uppercase slideanim">Google Contact Lens </h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/lense.jpg" class="img-responsive thumbnail slideanim"  style="height:300px" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="Google smart contact lense" data-content="The project aims to assist people with diabetes by constantly measuring the glucose levels in their tears." alt=""/>
							</div>
							<div class="col-sm-8">
								<p>Google Contact Lens is a smart contact lens .The project aims to assist people with diabetes by constantly measuring the glucose levels in their tears.The project is being carried out by Verily and it is currently being tested using prototypes.</p>
								<h4>Design</h4>
								<p>The lens consists of a wireless chip and a miniaturized glucose sensor. A tiny pinhole in the lens allows for tear fluid to seep into the sensor to measure blood sugar levels.Both of the sensors are embedded between two soft layers of lens material. The electronics lie outside of both the pupil and the iris so there is no damage to the eye. There is a wireless antenna inside of the contact that is thinner than a human’s hair, which will act as a controller to communicate information to the wireless device. The controller will gather, read, and analyze data that will be sent to the external device via the antenna. Power will be drawn from the device which will communicate data via the wireless technology RFID. Plans to add small LED lights that could warn the wearer by lighting up when the glucose levels have crossed above or below certain thresholds have been mentioned to be under consideration. The performance of the contact lenses in windy environments and teary eyes is unknown.</p>
							<!--	<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h3">Description</button>
								</small> -->
							</div>
						</div>
						<!--<div id="h3" class="collapse">
										<p> It is the best</p>
								</div> -->
					</div>
					
				
					<div class="container slideanim">
						<h4 class="text-uppercase slideanim">3D Printed Food</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/3Dfood.jpg" class="img-responsive thumbnail slideanim" data-toggle="tooltip" title="3D printed food" alt="3d food"/>
							</div>
							<div class="col-sm-8">
								<p>3D printing has taken the world by storm, and slowly but surely people are being won over by the idea that it’s for more than just gadgets. Food is also something that can be feasily 3D printed.</p>
								<p>German company, Biozoon, is harnessing the power of 3D printing to create seneoPro, a range of 3D-printable powder mixtures that solidifies when printed but also very quickly melts when eaten. The main target for this new 3D-printable food are elderly patients who suffer from dysphagia, or the inability to swallow.</p>
								<p>Such a technology would definitely reduce the risk of choking, and the 3D-printed nature of seneoPro means that caregivers and family members can very easily mix and match the powders to create all types of dishes. And you can also add coloring agents and texturizers to make the food even more appealing.</p>
							</div>
						</div>
						
					</div>
					<div class="container">
						<h4 class="slideanim">Google Is Working on a Brand New Operating System<br/><br/><strong>FUSCHIA</strong></h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/fuschia.jpg" class="img-responsive thumbnail slideanim" title="Fuschia-Google upcoming os" data-toggle="tooltip" alt="" style="height:280px; width:360px;"/>
							</div>
							<div class="col-sm-8">
								<p>Google is working on a new operating system. But exactly what it’s designed to do is unknown.</p>
								<p>Google-tracking site Android Police spotted a recently published page on coding site GitHub where Google asks for help from outside programmers to build an operating system called Fuchsia. While Google GOOGL -0.71%  is keeping most details about the project secret, it acknowledged on the page that its goal it to create a new operating system. As a hint at, well, something, Google also wrote: “Pink + Purple = Fuchsia.”</p>
								<p>Google makes the most used mobile operating system, Android. The company also has Chrome OS for computers and Android Wear for wearable devices, among other operating systems. However, all of those operating systems have one thing in common: They’re built on the open-source operating system Linux. Fuchsia, on the other hand, is designed to be built atop a Linux alternative called Magenta.</p>
								<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h4">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
						<div id="h4" class="collapse"> <!----collapse div -->
										<p>The GitHub page also suggests Google is using different programming languages to create apps for the operating system that it doesn’t use in Android or Chrome OS.</p>
										<p>The question, then, is what is Google up to? While the company declined a Fortune request for comment, that hasn’t stopped the technology community from speculating. Android Police, for instance, believes that Google’s use of Magenta instead of Linux is telling, and that the project could be an operating system designed for several “embedded” devices, like an in-car infotainment system with GPS functionality.</p>
										<p>Other online postings by the public, including on Twitter, have suggested that Fuchsia could find its way into computers Google could eventually produce. Some have even gone so far as to say that Fuchsia could one day replace Android and Chrome OS by becoming a single operating system for all Google-based devices. But that is unlikely considering how popular both operating systems have already become.</p>
										<p>Ultimately, it’s hard to say what Google plans to do. Companies often publicly test technologies so that outside developers can spot problems and help get the software into hardware more quickly. Companies also often ditch technologies before they ever incorporate them into hardware. Fuchsia could meet a similar fate. And it’s important to note that Google has a numberof open-source projects that are at various stages of development, which makes this one of many things the company is working on that could ultimately fade away</p>
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