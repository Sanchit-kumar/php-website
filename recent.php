<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Recent Hits</title>
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
	setcookie('page_name','recent.php');
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
				<small>
					<div class="collapse navbar-collapse text-uppercase" id="lines">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li class="active"><a href="#"> Recent Hits</a></li>
							<li><a href="os.php"> OS</a></li>
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
	<!----------recent hits ---->
		
			<h3><center>RECENT HITS</center></h3>
			
				
					<div class="container">
						<h4>Microsoft compiles Windows 10 milestone build 15000 internally </h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/windows10.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
										<p>Microsoft has surpassed another incredible build milestone internally today, as we're hearing build 15000 of Windows has been compiled. It's been almost 2 years since the company compiled build 10000, which was arguably the last huge build number milestone Windows had surpassed.</p>
										<p>Now, for those paying close attention, you'll already know build 15000 isn't exactly an accurate number for the amount of Windows builds ever compiled. Microsoft have been known to jump builds in the past, making build 15000 not a true count of build creations. Regardless, build 15000 has now been compiled and is being flighted internally at Microsoft.</p>
										
										<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h1">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
								<div id="h1" class="collapse"> <!----collapse div -->
										<p>Although a huge milestone (number wise) for the company, we're told build 15000 doesn't include any noteworthy changes or features, which is to be expected considering it's the holiday's and most people working on Windows are home with their families. With that in mind, build 15000 likely won't see itself flighted to Insiders, as the Insider program is on a bit of a break right now. In the new year however, normal build flighting will resume.</p>
										<p>We're about 3/4 way through the development cycle of the Creators Update at this point, meaning in the new year Microsoft will begin finalizing code and start signing off on features and enhancements that are scheduled to show up in the next public release. We're still expecting a few user-interface improvements and new features to show up for Insiders before the company is ready to sign off, and with only a couple months left of development, those changes should begin popping up very soon.</p>
										<p>It's an exciting time for Windows Insiders, as 2017 will be packed with lots of new builds, spanning across two different Windows 10 releases and featuring a lot of new changes. Make sure you stay tuned at Windows Central for more news regarding Windows 10, the Insider Program and builds!</p>
								</div>
					</div>
				
					<div class="container slideanim">
						<h4>Oracle denies it's ramping up a program that fines customers for using software they thought was free </h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/oracle-co-ceo.jpg" data-toggle="tooltip" title="Oracle co-CEO Mark Hurd" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p>Oracle is denying that it is increasing audits of customers using a flavor of its popular Java software that is mostly, but not completely, free.</p>
								<p>Earlier this week, Business Insider reported on the industry scuttlebutt that Oracle had hired more people in its auditing department to help it target Java users. The goal would be to find companies who have been using, but not paying for, the parts of that software that Oracle charges for.</p>
								<p>At issue is a hugely popular version of Java called Java Standard Edition (or Java SE), that anyone can download from the Oracle website, reports The Register's Gavin Clarke. Java is a programming language and a development platform for apps.</p>
								<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h2">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
						<div id="h2" class="collapse"> <!----collapse div -->
										<p>Oracle originally declined to comment on the reports it was increasingly targeting Java users (and it declined comment for The Register's article, too). But it just changed its mind and sent us this statement saying the company isn't doing anything new:</p>
										<p>Oracle's commitment to Java and its community remains stronger than ever, as shared recently at JavaOne. Oracle is not ramping Java SE compliance activity or hiring of compliance staff. The licensing model and policies for Java SE have remained unchanged since before the acquisition of Sun Microsystems. It is incorrect to imply that it's easy for users to accidentally use Java SE Advanced features.</p>
										<p>Oracle obtained Java when it acquired Sun Microsystems in 2010. Using the programming language to write an app is free and always has been. But if you want to use some of the tools that help you distribute the app to, says, Windows users, or use other advanced options, Oracle charges for that. Prices range from $40 to $300 per user, or from $5,000 to $15,000 per processor on the computer running the software, Clarke reports.</p>
										<p>Oracle isn't the only enterprise software company that conducts audits. It's a common tactic used by all the giant enterprise software companies (Oracle, IBM, SAP, Microsoft). They have complex legal rules for how customers pay for software and its so easy for companies to misunderstand the rules, there's an entire industry called software asset management to help them navigate licensing contracts and audits.</p>
										<header style="text-align:right"> -Business Insider report</header>
								</div>
					</div>
				
					<div class="container slideanim">
						<h4>Raspberry Pi Foundation releases Pixel, an OS for Windows and Apple x86 platforms</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/rs.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p>LOVELY CHARITABLE FOUNDATION, THE RASPBERRY PI LOT, have taken taken the debian operating system and adapted it specifically for the Raspberry Pi wonder computer as Pixel, an experiment that users can try out.</p>
								<p>Pixel is exactly the software that the Foundation has always had in mind, according to founder Eben Upton, and builds upon the all the other efforts that the charity has made to make computing cheaper and more accessible.</p>
								<p>"Pixel represents our best guess as to what the majority of users are looking for in a desktop environment: a clean, modern user interface; a curated suite of productivity software and programming tools, both free and proprietary; and the Chromium web browser with useful plugins, including Adobe Flash, preinstalled," said Upton.</p>
								
								
								<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h3">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
						<div id="h3" class="collapse"> <!----collapse div -->
										<p>"And all of this is built on top of Debian, providing instant access to thousands of free applications. Put simply, it's the GNU/Linux we would want to use."</p>
										<p>It is nice to have a desktop alternative, particularly at the end of a year when Microsoft decided to crowbar Windows 10 into people's lives, and makes some sense when the Foundation announced that it has sold ten million of its own pocket-friendly computers. It obviously needs some room to grow.</p>
										<p>"Back in the summer, we asked ourselves one simple question: if we like PIXEL so much, why ask people to buy Raspberry Pi hardware in order to run it? There is a massive installed base of PC and Mac hardware out there, which can run x86 Debian just fine. Could we do something for the owners of those machines?," added Upton.</p>
										<p>"So, after three months of hard work from Simon and Serge, we have a Christmas treat for you: an experimental version of Debian+PIXEL for x86 platforms. Simply download the image, burn it onto a DVD or flash it onto a USB stick, and boot straight into the familiar PIXEL desktop environment on your PC or Mac."</p>
										
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
		<!--------END OF recent hits ---->
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