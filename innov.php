<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Innovation</title>
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
	setcookie('page_name','innov.php');
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
							<li class="active"><a href="#"> Innovation</a></li>
							<li><a href="bench.php"> Benchmarks</a></li>
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
		
			<h3><center>THE MOST INNOVATIVE PROJECTS</center></h3>
			
				
					<div class="container">
						<h4>PARROT DISCO</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/parrot disk.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
										<p>Disco is a fascinating project: a fast, smart, ultra-light drone with around 45 minutes of flight time. This will be the first “ready-to-fly” wing-shaped drone, and the first everyone can easily pilot.</P>
										<p>Drones made a huge splash at CES this year, 
											but the biggest standout was the Parrot Disco. Parrot 
											has already been made famous for its entry level drones,
											but the Disco looks and feels like something else
											entirely. The Parrot Disco has two wings that let
											take off more like a kite than a traditional drone.
											With just a toss in the air, the Disco can pick up 
											enough momentum to stay afloat. This thing can also
											fly at speeds up to 50mph, stay up for as long as 45
											minutes, comes with a
											1080p camera at the nose, and has a number of assisted
											flying modes.</p>
										<small>
									<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#h1">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
								<div id="h1" class="collapse"> <!----collapse div -->
										<p>Just mount the wings to the body and throw it in the air. No piloting skills are required.</p>
										<p>It’s truly a drone: it connects to the Parrot ecosystem through Wi-Fi and you pilot it with the Skycontroller or the Flight Plan app using the embedded GPS for waypoints.</p>
									<p>Additionally, a new “Autopilot” mode mimics the flight thrills of a seasoned pilot. We are designing a totally innovative piloting system based on assisted control: the computer controls the drone and the pilot can play with the pitch without the risk of a bad maneuver or a stall.</p>
									<p>At any time, Disco can go into “Loiter” mode and orbit around a point of interest. Compatible with immersive glasses (FPV), flying Disco will make you feel like a falcon with incredible speed and precision.</p>
									<p>We conceived this wing with the help of senseFly engineers, the leaders in commercial fixed wing drones. As an example, the autopilot code was tested in their HQ in Lausanne, Switzerland, and benefits from years of flight experience.</p>
									<small>
										<a href="https://www.youtube.com/watch?v=imtqooJj0I4" role="button" class="btn btn-success">Click to watch full video</a>
									</small>
								</div>
					</div>
				
					<div class="container slideanim">
						<h4>EHANG 184-A PASSENGER DRONE </h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/hover-drone.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p> Chinese manufacturer Ehang has unveiled the world's first passenger-carrying drone, which will transport individuals through the air without a pilot </P>
									<p>The Ehang 184 drone measures around 1.4 metres high, and features eight propellors held on four arms that can be folded into the vehicle's body for storage.</p>
									<p>The 184 AAV is designed with full redundancy – If one set of the power system are operating abnormal, the vehicle can still operate a normal flight plan and ensure the safety of the passenger together with the vehicle.
										The 184 was designed to be a 100% with green technology, and is powered by electricity only.</p>
			
								<small>
									<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#h2">More description <span class="caret"></span></button>
								</small>
							</div> 
						</div>
						<div id="h2" class="collapse"> <!----collapse div -->
										<p>Ehang CEO Huazhi Hu began designing the one-seater electric drone a couple of years ago, after two of his pilot friends were killed in plane crashes. He decided that people needed a form of short-to-medium-distance personal air transport that didn't require them to have a pilot's license, and that took much of the danger out of low-altitude flight.</p>
											
											<p>The idea behind the Chinese-built 184 is that users will simply get in, power it up, select their destination using a 12-inch touchscreen tablet display, then press the "take-off" button. The drone's automated flight systems will take over from there, managing tasks such as communication with air traffic control and other aircraft, obstacle avoidance, and of course navigation – it will always choose the fastest yet safest route between its present location and its destination.</p>
											<p>The current incarnation of the 184 features a carbon fiber/epoxy composite body, an aerial aluminum alloy frame, and eight motors putting out 142 hp/106 kW to eight propellers – those props are divided into four groups of two, each pair located on the top and bottom of one of four arms. Those arms can fold up when the drone is parked on the ground, allowing it to take up less space.</p>
											<p>Charging of its 14.4-kWh battery pack takes four hours in trickle mode or two hours in fast-charge, with a full charge reportedly being sufficient to keep one passenger airborne for up to 23 minutes at sea level. The whole thing weighs 440 lb (200 kg), can carry up to 264 lb (120 kg), has a maximum speed of 62 mph (100 km/h) and can reach a maximum altitude of 11,480 ft (3,499 m).</p>
											<p>According to the Ehang rep we spoke to, the 184 is already fully functional, with a worldwide series of demo flights scheduled to begin soon. They claim that it should be commercially available later this year(!), priced somewhere between US$200,000 and $300,000.</p>
										<small>
										<a href="https://www.youtube.com/watch?v=_vGd1Oy7Cw0" role="button" class="btn btn-success">Click to watch full video</a>
									</small>
								</div>
					</div>
				
					<div class="container slideanim">
						<h4>DIET SENSOR</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/diet2.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p>Scan your food, manage your health. Meet DietSensor, the first nutritional coaching app specifically designed for iOS and Android devices that helps users better manage diabetes, weight, and improve fitness. Developed on the top of SCiO platform, powered by Consumer Physics.</p>
								<p>The SCiO device, which is developed by Israeli company Consumer Physics, claims to be able read the chemical makeup of materials. It's non-intrusive and doesn't need to touch the object. You simply point and scan.</p>
								<p>Here's how they say it works: The handheld scanner sends an infrared beam on the surface of the food or beverage. It then captures the reflected wavelengths that carry the signature of its composition. The DietSensor app will then interpret the data and create a meal profile that provides you with the nutritional facts, along with some general tips about how many calories, carbs, or proteins you should eat for the meal.</p>
								<small>
									<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#h3">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
						<div id="h3" class="collapse"> <!----collapse div -->
										<p>Sounds cool, right? The idea is interesting, but it's not perfect. The scanner can only read homogeneous foods, those with a single level such as chicken, crackers, bread, cheese, and cereal. It was unable to determine the nutrition of the Snickers bar I had with me. While the DietSensor app lets you manually input nutritional data in these situations, that's no different than apps like MyFitnessPal and Lose It.</p>
										<p>I saw the sensor and app in action. While it was able to get the fill the app with nutritional data, I didn't have the specific food label with me to verify whether the information was correct or not.</p>
										<p>The DietSensor is also pricey. The small SCiO scanner will set you back $249, while the Dietsensor app will include a monthly subscription of between $10 to $20. The total cost over a year would be just under $500 (AU$700 or £340, converted directly). I'm left wondering, perhaps we are just better off scheduling a few sessions with a professional nutritionist.</p>
										<small>
										<a href="https://www.youtube.com/watch?v=Ng7fsQbd4d4" role="button" class="btn btn-success">Click to watch full video</a>
									</small>
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