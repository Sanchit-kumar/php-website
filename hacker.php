<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Hackers World</title>
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
	setcookie('page_name','hacker.php');
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
						
						<a href="#" class="navbar-brand" style="font-size:25px;">Tech-hits</a>
					</div>
				<small>
					<div class="collapse navbar-collapse text-uppercase" id="lines">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="recent.php"> Recent Hits</a></li>
							<li><a href="os.php"> OS</a></li>
							<li class="active"><a href="#"> Hacker</a></li>
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
		
			<h3><center>HACKER'S CORNER</center></h3>
			
				
					<div class="container">
						<h4>NBC News: Intelligence officials say Putin personally involved in election hack</h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="thumbnail">
									<img src="images/russia.jpg" class="img-responsive" alt=""/>
									
										<p style="font-size:12px;">Senate Majority Leader Mitch McConnell condemns Russian hacking of U.S. political organizations, as President-elect Donald Trump continues to downplay the CIA’s confidential assessment that Russia hacked into the DNC. </p>
									
								</div>
							</div>
							<div class="col-sm-8">
										<p>Russian President Vladimir Putin was personally involved in efforts to intervene in the 2016 U.S. presidential election, NBC News reported, citing two unnamed "senior U.S. intelligence officials."</p>
										<p>New intelligence links Putin directly to the leaks from hacked Democratic National Committee emails, the officials told NBC News with "a high level of confidence."</p>
										<p>A high-level intelligence source said the campaign began as a "vendetta" against Hillary Clinton, NBC News reported. The goal grew into an effort to expose corruption in U.S. politics and to undermine America's international credibility, according to NBC.</p>
										<p>Russian Foreign Minister Sergei Lavrov dismissed the report Thursday as "nonsense," according to Russia's TASS news agency.</p>
										
										<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h1">Read more description</button>
								</small>
							</div>
						</div>
								<div id="h1" class="collapse"> <!----collapse div -->
									<p>"I was astonished when I saw it," Lavrov said. "I think, this is nothing but nonsense, there is not a chance that anybody could believe that."</p>
									<p>The NBC News report comes after last week's report from The Washington Post, also citing unnamed intelligence sources, which said the CIA believed that Russia not only interfered in the election, but did so with the intention of helping Donald Trump win. Although U.S. intelligence agencies agree Russia was behind several hacks during the campaign, including that of the DNC, the CIA is thus far the only agency reported to have reached the conclusion that the efforts were explicitly meant to benefit Trump.</p>
									<p>On Oct. 7, the Department of Homeland Security and Office of the Director of National Intelligence issued a joint statement on behalf of the U.S. Intelligence Community expressing confidence that the "Russian Government directed the recent compromises of e-mails from US persons and institutions, including from US political organizations." The ODNI and FBI do not believe there is enough evidence to conclude the cyber attacks were intended to help Trump win, however.</p>
									<p>Given Putin's authoritarian control over the Russian government, it is logical that any intervention in the U.S. election would have required the former KGB officer's approval. In the October statement, the 17 American intelligence agencies said, "We believe, based on the scope and sensitivity of these efforts, that only Russia's senior-most officials could have authorized these activities."</p>										
								</div>
					</div>
					<!--
					<div class="container slideanim">
						<h4>Macantosh </h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="004.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p> content is here</p>
								<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h2">Description</button>
								</small>
							</div>
						</div>
						<div id="h2" class="collapse">
										<p> It is the best</p>
								</div>
					</div>
					-->
					<div class="container slideanim">
						<h4>Google Pixel Hacked in 1-min Microsoft Edge in 18s at PwnFest</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/g-pixel.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p>The brand new Android smartphone launched by Google just a few months back has been hacked by Chinese hackers just in less than a minute.</p>
								<p>Yes, the Google's latest Pixel smartphone has been hacked by a team white-hat hackers from Qihoo 360, besides at the 2016 PwnFest hacking competition in Seoul.</p>
								<p>The Qihoo 360 team demonstrated a proof-of-concept exploit that used a zero-day vulnerability in order to achieve remote code execution (RCE) on the target smartphone.</p>
								
							</div>
						</div>
						<div id="h3"> <!----collapse div -->
								<p>The exploit then launched the Google Play Store on the Pixel smartphone before opening Google Chrome and displaying a web page that read "Pwned By 360 Alpha Team," the Reg media reports.</p>
								<p>Qihoo 360 won $120,000 cash prize for hacking the Pixel.</p>
								<p>Google will now work to patch the vulnerability.</p>
								<h3>Hackers Compromised Microsoft Edge is just 18 seconds</h3>
								<p>Researchers from Qihoo 360 and South Korean security researcher Junghoon Lee, aka LokiHardt, completely hacked the Microsoft Edge web browser operating on Windows 10 Red Stone 1 in just 18 seconds.</p>
									<img src="images/windows-10.jpg" class="img-responsive thumbnail" alt=""/>					
								<p>The security experts gained SYSTEM-level remote code execution on Edge, although they denied disclosing details of the vulnerability until the affected vendors come with a fix. Both researchers earned $140,000 for their Edge exploit.</p>
								<p>Another Qihoo hacker team and Lee both, for the first time, remotely compromised VMware Workstation 12.5.1 without user interaction, bagging $150,000 for their exploits.</p>
								<p>Details of all the exploits will be reported to the respected companies so that they can patch their software before black-hat hackers use them for malicious purposes.</p>
								<p>The Qihoo 360 team of hackers walked away with a total prize money of $520,000.</p>
								
								</div>
					</div>
				
					<div class="container slideanim">
						<h4>Netflix Twitter Account Hacked </h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/netflix.png" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p>The Netflix US Twitter account which has over 2.5 million followers got hacked by a hacker group. The group, which goes by the name of OurMine, Tweeted about its own website and product in the Twitter account of Netflix US. The tweets did not stay long, though, as they were removed an hour after the first one appeared.</p>
								<p>This is not the first time the hacker group is doing this this year. The group has hacked a number of high-profile Twitter accounts including those of Wikipedia co-founder Jimmy Wales, Facebook co-founder Mark Zuckerberg, and Google chief Executive Sundar Pichai.</p>
								
								<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h4">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
						<div id="h4" class="collapse"> <!----collapse div -->
										<br/>
										<p>The big websites, Techcruch and Buzzfeed were also hit, as were the Twitter and Vine accounts of Jack Dorsey.</p>
											<img src="images/netflix-h2.png" class="img-responsive thumbnail" alt="" style="width:550px; height:340px;"/>
								<p>One of the first Tweets read, “Don’t worry, we are just testing how secure you are.” The hackers told reporters that they could still access the accounts and that they were still tweeting under Netflix but Twitter support kept deleting them.”</p>
					</div>
					
					<div class="container slideanim">
						<h4>Russia-linked DNC hackers 'targeted Ukrainian army'</h4>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/dnc.jpg" class="img-responsive thumbnail" alt=""/>
							</div>
							<div class="col-sm-8">
								<p>The Russian hackers who attacked the Democratic National Convention used a variant of the same malware to target Ukrainian troops fighting Russian-backed separatists in eastern Ukraine, US security experts have said.</p>
								<p>Crowd Strike, the California-based cyber security firm that investigated the DNC hack, said on Thursday that it had found malware associated with the Fancy Bear hacking group infecting a targeting app used by Ukrainian artillery officers. </p>
								<p>Fancy Bear, or APT 28, is one of two Russian-linked groups that penetrated the DNC computers. Crowdstrike concluded following its investigation that the group is run by the GRU, Russia’s military intelligence agency.</p>
								
								<small>
									<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#h5">More description <span class="caret"></span></button>
								</small>
							</div>
						</div>
						<div id="h5" class="collapse"> <!----collapse div -->
										<p>Adam Meyer, the company's vice president of intelligence, said on Thursday that the company had found a previously unknown Android variant of X-agent or Sofacy, the software Fancy Bear used used to remotely access the DNC’s computers, infecting an app used by Ukrainian soldiers to speed up artillery targeting.</p>
										<p>Information gathered by the program, which is used exclusively by Fancy Bear, could have been used by the Russian military to locate and destroy Ukrainian forces, he said.</p>
										<p> "The ability of this malware to retrieve communications and gross locational data from an infected device makes it an attractive way to identify the general location of Ukrainian artillery forces and engage them," Mr Meyer wrote in a blog post. </p>
										<p>The infected Android app was originally developed by a Ukrainian artillery officer called Yaroslov Sherstuk to streamline the processing of targeting data for the D30 122mm howitzer, a Soviet-designed artillery piece widely used in the war in Donbas. </p>
										<p>Ukrainian press reports in Autumn 2014 reported that Mr Sherstuk’s application reduced the targeting time for the D30 from minutes to seconds -a potentially life-saving advantage in the artillery duels that have defined the war in east Ukraine. It has reportedly been used by up to 9,000 soldiers. </p>
										<p>Mr Meyer told the Telegraph that he believes Russian hackers set up a fake social networking site where they tricked Ukrainian servicemen into downloading a contaminated version of the software.</p>
										<p>He said that the malware would have allowed attackers to monitor Ukrainian units' rough position on the battlefield "in real time" using GPS. </p>
										<p>"We believe it was very likely used in that way," he said, adding that drones may have been used to clarify a unit's position once the app had located their approximate whereabouts.  </p>
										<p>It is unclear how many servicemen were using a contaminated version, rather than genuine, version of the program.</p>
										<p>Mr Sherstuk was dismissive of the Crowdstrike report, writing on Facebook that the article was "delusional and written for amateurs."</p>
										<p>"So it is clear to everyone, distribution of the software is still under my control and is not in the public domain, and the activation is controlled personally by me," he wrote.  "Without any doubts you can continue to download from me personally," he added.</p>
										
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