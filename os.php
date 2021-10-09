<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>OS</title>
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
	setcookie('page_name','os.php');
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
							<li class="active"><a href="#"> OS</a></li>
							<li><a href="hacker.php"> Hacker</a></li>
							<li><a href="innov.php"> Innovation</a></li>
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
		
			<h3><center>WHAT'S NEW IN OPERATING SYSTEM WORLD</center></h3>
			
				<div class="container">
						<h4>Google Is Working on a Brand New Operating System<br/><br/><strong>FUSCHIA</strong></h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/fuschia.jpg" class="img-responsive thumbnail" title="Fuschia-Google upcoming os" data-toggle="tooltip" alt="" style="height:280px; width:360px;"/>
							</div>
							<div class="col-sm-8">
								<p>Google is working on a new operating system. But exactly what it's designed to do is unknown.</p>
								<p>Google-tracking site Android Police spotted a recently published page on coding site GitHub where Google asks for help from outside programmers to build an operating system called Fuchsia. While Google GOOGL -0.71%  is keeping most details about the project secret, it acknowledged on the page that its goal it to create a new operating system. As a hint at, well, something, Google also wrote: "Pink + Purple = Fuchsia."</p>
								<p>Google makes the most used mobile operating system, Android. The company also has Chrome OS for computers and Android Wear for wearable devices, among other operating systems. However, all of those operating systems have one thing in common: They're built on the open-source operating system Linux. Fuchsia, on the other hand, is designed to be built atop a Linux alternative called Magenta.</p>
								<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h4">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
						<div id="h4" class="collapse"> <!----collapse div -->
										<p>The GitHub page also suggests Google is using different programming languages to create apps for the operating system that it doesn't use in Android or Chrome OS.</p>
										<p>The question, then, is what is Google up to? While the company declined a Fortune request for comment, that hasn't stopped the technology community from speculating. Android Police, for instance, believes that Google’s use of Magenta instead of Linux is telling, and that the project could be an operating system designed for several "embedded" devices, like an in-car infotainment system with GPS functionality.</p>
										<p>Other online postings by the public, including on Twitter, have suggested that Fuchsia could find its way into computers Google could eventually produce. Some have even gone so far as to say that Fuchsia could one day replace Android and Chrome OS by becoming a single operating system for all Google-based devices. But that is unlikely considering how popular both operating systems have already become.</p>
										<p>Ultimately, it's hard to say what Google plans to do. Companies often publicly test technologies so that outside developers can spot problems and help get the software into hardware more quickly. Companies also often ditch technologies before they ever incorporate them into hardware. Fuchsia could meet a similar fate. And it's important to note that Google has a numberof open-source projects that are at various stages of development, which makes this one of many things the company is working on that could ultimately fade away.</p>
								</div>
					</div>
					
				
					<div class="container slideanim">
						<h4>Firefox is an Operating System Now? Firefox OS Explained</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/firefox-os.jpg" class="img-responsive thumbnail slideanim" title="Firefox" data-toggle="tooltip" alt=""/>
							</div>
							<div class="col-sm-8">
								<p>Did you know that Mozilla is creating a new operating system built on top of Firefox, dubbed Firefox OS? This isn't an operating system for your computer--Firefox OS is Mozilla's attempt at a smartphone OS.</p>
								<br/>
								<h4>Firefox OS is For Smartphones (and Tablets)</h4>
								<p>Mozilla's Firefox OS is a smartphone operating system. It won't be available on laptops or desktops any time soon. However, Mozilla is planning to release tablets running Firefox OS.</p>	
								<p>Firefox OS isn't something you'll install on your own devices. Instead, it's an operating system that will come on new devices--you'd pick up a new smartphone or tablet that would run Firefox OS instead of Android, iOS, or Windows.</p>
								<small>
									<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#h2">Why Mozilla is Creating Firefox OS <span class="glyphicon glyphicon-chevron-down"></span></button>
								</small>
							</div>
						</div>
						<div id="h2" class="collapse"> <!----collapse div -->
										<br/>
										<h4>Why Mozilla is Creating Firefox OS</h4>
										<p>Mozilla is a non-profit organization dedicated to making the web better, unlike other browser manufacturers-Microsoft, Google, and Apple — who are for-profit corporations. Mozilla sees Firefox OS as important competition in the mobile market.</p>
										<p>Mozilla believes in web-based software on the open web, and wants to replace native applications with browser-based ones built on open standards. This is more and more the case on desktops and laptops, where people spend most of the time in their browser. Whether it's checking email or watching videos, people probably do it in a web browser and there's a good chance they're using Firefox to do it.</p>
										<p>However, smartphone and tablet users spend much of their time in native apps. These apps must be written specifically for each platform and are generally distributed in app stores. Apple, Google, and Microsoft all have their own ecosystems with their own apps that will only run on certain operating systems.</p>
										<p>Mozilla wants to create a mobile operating system based on web standards, bringing first-class web apps to the mobile world and fighting back against the new trend towards proprietary ecosystems with their own incompatible apps.</p>
										<br/>
										<h4>How Firefox OS is Different</h4>
										<p>As you might expect given Firefox OS's name and Mozilla's vision, Firefox OS doesn't run traditional "native" apps. Instead, every app on Firefox OS is a web app written in HTML and JavaScript. Much of the code in these apps may run locally, but they're still written in web technologies.</p>
										<p>To accomplish this, Mozilla has added a variety of APIs that allow web apps to interface with hardware features. For example, on Firefox OS, the dialer you use to dial numbers is written entirely in HTML and JavaScript. It runs locally, but is implemented with web technologies. You could theoretically "view source" on the dialer to view its code, just as you could view a web page's source code.</p>
										<p>Mozilla provides their own app store in the form of the Firefox Marketplace, which is the official source of Firefox OS apps. Mobile carriers can also set up their own Firefox OS app stores. Web apps could also be accessed from outside the store as typical websites, of course.</p>
										<p>Mozilla also wants these apps to be portable. For example, Mozilla creates a full-featured version of Firefox for Android. In theory, you could one day install Firefox for Android and access the Firefox Marketplace to use Firefox OS apps on Android.</p>
								</div>
					</div>
					<div class="container slideanim">
						<h4>Red Hat releases new flagship Linux operating system</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/Red Hat.jpg" class="img-responsive thumbnail slideanim" title="RedHat" data-toggle="tooltip" alt=""/>
							</div>
							<div class="col-sm-8">
								<h5>Red Hat Enterprise Linux 7.3 includes new features and enhancements built around performance, security, and reliability. The release also introduces new capabilities around Linux containers and the Internet of Things.</h5>
								<p>Once upon a time, the saying was "Nobody ever got fired for buying IBM." Today, for Linux servers -- with all due respect to Canonical's Ubuntu and SUSE's SUSE Linux Enterprise Server (SLES) -- you can't get fired for running Red Hat's Red Hat Enterprise Linux (RHEL) on your Linux server. Today, Red Hat gave its customers more reason to stay the course with the release of RHEL 7.3,</p>
								<p>This latest update to RHEL includes new features and enhancements built around performance, security, and reliability. The release also introduces new capabilities around Linux containers and the Internet of Things (IoT). From the top, here are the latest improvements:</p>
								
								<small>
									<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#h3">See the list of improvements</button>
								</small>
							</div>
						</div>
						<div id="h3" class="collapse"> <!----collapse div -->
										<br/>
										<h4>Performance</h4>
										<p>RHEL 7.3 helps address the need for faster networking, with the addition of lightweight tunnels. These enable guest instances of RHEL 7.3 to be more secure, efficient, scalable, and flexible. Additionally, bulk packet memory allocator enhancements improve performance for both 40 and 100GB networking interfaces.</p>
										<p>At the same time, high-transaction applications like databases, event processing, and virtual machines need improved input-output (IO) rates and lower latencies. New hardware technologies like non-volatile memory address these concerns, and RHEL 7.3 supports these next-generation memory devices. In addition, RHEL 7.3 makes performance-sensitive Parallel NFS (pNFS) clusters easier to manage, with support for the Block SCSI layout format and the Flex Files layout format.</p>
											<br/>
										<h4>Security and Identity Management</h4>
										<p>RHEL 7.3 also introduces several new and enhanced security features. These include:</p>
											<ul>
												<li><p>Updates to SELinux, a mechanism for enforcing granular, system-level access control policies for faster policy creation and improved overall ease of use. SELinux is notoriously hard to use. Siddharth Nagar, RHEL's product manager, promises, "RHEL 7.3 provides what is really an ease-of-use enhancement to SELinux."</p></li>
												<li><p>RHEL 7.3 now provides a consistent compliance checking mechanism across containerized and traditional non-container workloads for better overall operations efficiency. This is provided through enhancements to OpenSCAP, an open source implementation of the Security Content Automation Protocol (SCAP). This provides a standardized compliance-checking solution for enterprise-level Linux infrastructure. Configuring SCAP-based policies with the OpenSCAP Workbench graphical user interface has also been made easier.</p></li>
												<li><p>Improvements to Red Hat's Identity Management solution. These include better performance for large installations, support for smart card authentication with Active Directory, and support for configurable authentication strength across individual hosts and services.</p></li>
											</ul>
										
										<br/>
										<h4>Reliability</h4>
											<p>RHEL 7.3 has improved its built-in disaster recovery solution. Specific enhancements in support of this include:</p>
												<ul>
														<li><p>The ability to configure pacemaker to manage multi-site and stretch clusters across geo-locations for disaster recovery and scalability. </p></li>
														<li><p>The ability to better configure and trigger notifications when the status of a managed cluster changes with the introduction of enhanced pacemaker alerts.</p></li>
														
													</ul>
										<br/>
										<h4>Linux Containers</h4>
											<p>RHEL 7.3 bolsters support for Linux containers via numerous incremental improvements in addition to enhanced management tools (Atomic CLI / Cockpit) and an updated container runtime (docker engine). It also includes a new container-signing capability as a Technology Preview.</p>
										<br/>
										<h4>Internet of Things</h4>
											<p>RHEL 7.3 introduces two key features for industrial IoT implementations.</p>
											<ul>
												<li><p>Bluetooth LE (Low Energy) devices - an extension of the Bluetooth standard, Bluetooth LE is specifically designed for low energy devices like IoT sensors.</p></li>
												<li><p>Kernel support for the Controller Area Network bus (CANbus) protocol - CANbus is a controller area network used in automobiles and high-end industrial controllers.</p></li>
											</ul>
								</div>
					</div>
					
					<div class="container slideanim">
						<h4> Linux Mint 18.1 'Serena' is here now.</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/linux2.jpg" class="img-responsive thumbnail slideanim" title="Linux Mint" data-toggle="tooltip" alt=""/>
							</div>
							<div class="col-sm-8">
										<p>Linux Mint is an operating system that I simultaneously love and hate. I love it because it makes Linux easy to use for home users. I sometimes hate Linux Mint because it is essentially just a tweaked version of Ubuntu -- I'd rather see users choose Canonical's OS as intended. True, Mint's tweaks are actually very good, but I am not sure it warrants an entirely different operating system -- even if the final product is rewarding.</p>
										<p>But OK, if you love Linux Mint and use it regularly, I have very good news -- version 18.1 'Serena' is finally here. Yes, Santa Claus has delivered an early Christmas gift! There are two desktop environments from which to choose -- Cinnamon and Mate. Thankfully there is no KDE version to further confuse things, but I digress. Will you download Linux Mint 18.1?</p>
										<p>Most users will want to target the Cinnamon desktop environment version of the operating system, as it offers a more modern appearance with greater eye candy. Don't get me wrong, Mate has its place too -- ideally on machines with lower-end hardware -- but some folks with high-end machines prefer the simpler design. Different strokes for different folks, as they say. Right, Willis?</p>
										<small>
									<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#h1">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
								<div id="h1" class="collapse"> <!----collapse div -->
										<p>Linux Mint 18.1 comes with the updated Cinnamon 3.2 which looks to be wonderful. The Mint team touts a new screensaver/ login screen in the desktop environment, and yeah, it looks good. I know what you are thinking -- does that matter? Uh, yeah! All the little things add up to the overall user experience.</p>
										<p>
											Linux Mint 18.1 'Serena' is here for Christmas! Will you install this open source holiday gift?

											By Brian FagioliPublished 3 days ago
											32 Comments
											inShare
											1Tweet
											ChristmasPenguinLinux
											
											Linux Mint is an operating system that I simultaneously love and hate. I love it because it makes Linux easy to use for home users.</p><p>I sometimes hate Linux Mint because it is essentially just a tweaked version of Ubuntu -- I'd rather see users choose Canonical's OS as intended. True, Mint's tweaks are actually very good, but I am not sure it warrants an entirely different operating system -- even if the final product is rewarding.

											But OK, if you love Linux Mint and use it regularly, I have very good news -- version 18.1 'Serena' is finally here. Yes, Santa Claus has delivered an early Christmas gift! There are two desktop environments from which to choose -- Cinnamon and Mate. Thankfully there is no KDE version to further confuse things, but I digress. Will you download Linux Mint 18.1?</p>
											<div class="row">
												<div class="col-sm-4">
														<img src="images/linux-mint.jpg" class="img-responsive thumbnail slideanim" alt="" style="width:400px; height:400px;text-align:right;"/>
												</div>
												<div class="col-sm-8">
														<p>Most users will want to target the Cinnamon desktop environment version of the operating system, as it offers a more modern appearance with greater eye candy. Don't get me wrong, Mate has its place too -- ideally on machines with lower-end hardware -- but some folks with high-end machines prefer the simpler design. Different strokes for different folks, as they say. Right, Willis?
											

														Linux Mint 18.1 comes with the updated Cinnamon 3.2 which looks to be wonderful. The Mint team touts a new screensaver/ login screen in the desktop environment, and yeah, it looks good. I know what you are thinking -- does that matter? Uh, yeah! All the little things add up to the overall user experience. You can read the full release notes here.

														cinnamon332mint

														"Background slideshows set in Cinnamon continue to play in the new screensaver. On laptops the battery power is shown, so you can see if you're running low without having to log in. We also thought about music fans. You no longer need to unlock the screen to mute the sound, and if you're throwing a party and using your computer as a jukebox, you can have the media controls right there in the screensaver, so you can let people skip to the next song without giving them access to your session. The screensaver can also show if you missed notifications (not their content, for privacy reasons, but how many)", says Clement Lefebvre, Linux Mint founder.</p>
													</div>
											</div>
											<p>But what about, Linux Mint 18.1 Mate? It too is receiving many updates, as you can read here. One of the most significant changes, however, is regarding search and privacy on Mate 1.16. Understandably, some Linux users are concerned about Google's "spying" and data collection, so by default, the MintMenu application menu will use DuckDuckGo search instead. You can also disable online search entirely if you prefer.</p>
													<p>Regardless of which version you choose, please know that it is based on Ubuntu 16.04, which offers long term support (LTS). In other words, Linux Mint 18.1 will be supported until 2021.</p>
												
								</div>
					</div>
					<!--
					<div class="container slideanim">
						<h4> </h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="004.jpg" class="img-responsive thumbnail slideanim" alt=""/>
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