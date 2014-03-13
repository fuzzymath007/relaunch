<?php
$pageTitle = "Home";
require_once('inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>
<meta name="viewport" content="width=device-width">
<body>
	<div id="container">
		<nav id="sidebar" class="navigation" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="glyphicon glyphicon-list"></span>
					</button>
					<p class="navbar-brand">MC</p>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav" id="nav-links">
						<li><a href="#top-image">Top</a></li>
						<li><a href="#about">About Me</a></li>
						<li><a href="#resume">Resume</a></li>
						<li><a href="#pi-dev">Dev</a></li>
						<li><a href="#projects">Current Projects</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="page-content">
			<div class="alert alert-warning under_construction_alert_off">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong>I am sorry!</strong> That feature is still in development.
			</div>
			<div class="slider" id="top-image">
				<div class="container"> 
					<div class ="row">
						<div id="greating">
							<H1>Home of Matthew Chess</H1>
							<h2> 1/3 part Analyst, 1/3 part Developer, 1/3 part Marketer</h2>
							<h3>I combine all those parts to make technology work for customers. Sorry C-level executives. Data drives design, efficiency drives Development and results drive Marketing.</h3>
							<h4 class="learn-more">Use the navigation to the right or scroll down the page.</h4>
							<a href="#about" class="btn btn-default learn-more">Learn More &#9660;</a>
						</div>
					</div>
				</div>
			</div>
			<div class="slider" id="about">
				<div class="container">
					<div class ="row">
						<div class="col-md-12">
							<h1>About Me</h1>
						</div>
						<div class ="row">
							<div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h4>My name is Matthew Chess. In June 2013, I graduated from the University of Michigan with a degree in Art History. My formal education was in the liberal arts but I learned technology on the streets(and at home). Over the years I have worked various IT positions from desktop support to web analyst. Each experience depend my understanding of IT and kept me asking more questions.</h4>
								<h4>My experience in web development started two years ago when I worked for an e-commence company.</h4>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="about_me_glifs">
								<img src="inc/Linecons/PNG/Original/study.png"><h5>A graduate of the University of Michigan. If you would like to see past essays of mine click here. <button type="button" class="btn btn-default btn-xs under_construction">Link to Essays</button></h5>
								<img src="inc/Linecons/PNG/Original/camera.png"><h5>My artistic skill might need some work but I love flexing some technical skill with a camera to take fun pictures. <button type="button" class="btn btn-default btn-xs under_construction">Link to Photo Gallery</button></h5>
								<img src="inc/Linecons/PNG/Original/cup.png"><h5>Coffee and tea are like air and watter.</h5>
								<img src="inc/Linecons/PNG/Original/display.png"><h5>You say nerd I say passionately geeky.</h5>
								<!-- <img src="inc/Linecons/PNG/Original/data.png"><h5></h5> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider" id="resume">
				<div class="container"> 
					<div class ="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Resume <span class="resume_intro">Click a position to see past responsibilities</span></h1>
							<h3 class="section">Work Experience</h3>
							<h4 class="job">Marketing Intelligence Analyst, Search Optics - June 2013 to Current</h4>
							<ul class="resume_bullets">
								<li>Analyzed paid and non-paid marketing data from Google Analytics, Piwik, Marin and other in-house tools</li>
								<li>Investigated data using statical packages (R, PSPP) for regression analysis and A-B testing</li>
								<li>Use online tools and APIs to automate monthly reporting and decrease reporting errors</li>
								<li>Troubleshooted tagging issues and researched client and server side fixes</li>
								<li>Studied databases and ETL processes for data quality assurance</li>
								<li>Certified in Google Analytics, Google Advanced Search/Display, Bing Ads, and Marin</li>
								<li>Intermediate knowledge of HTML/CSS, Javascript, and PHP</li>
							</ul>
							<h4 class="job">Computer Consultant, University of Michigan School of Dentistry - September 2011 to June 2013</h4>
							<ul class="resume_bullets">	
								<li>Provided desktop support for our administrative, teaching and research departments</li>
								<li>Resolved connectivity issues related to DHCP registrations, Group Policy, and Kerberos</li>
								<li>Troubleshooted hardware and software failures quickly in high pressure environments </li>
								<li>Quickly adapted and learned new technologies to deliver up to date support</li>
							</ul> 
							<h4 class="job">Network Support Technician, Sterling 411 Lofts - September 2012 to June 2013</h4>
							<ul class="resume_bullets">
								<li>Supported a network of 400 residents, leasing office and computer lab</li>
								<li>Installed new network equipment (switches, routers, APs, Firewalls, etc.)</li>
								<li>Ensured network reliability and low latency using diagnostic tools</li>
								<li>Escalated problems efficiency and took ownership to see they were resolved</li>
							</ul>
							<h3 class="section">Internships</h3>
							<h4 class="job">Marketing Intern, Nandahome - May 2012 to November 2012</h4>
							<ul class="resume_bullets">
								<li>Developed online marketing strategy to better customer experience </li>
								<li>Programmed website tracking code to improve performance and data quality</li>
								<li>Audited our website’s user experience and suggested code fixes </li>
								<li>Worked autonomously from home, remaining attentive to email and deadlines to meet expectations</li>
							</ul>
							<h3 class="section">Education</h3>
							<h4 class="job">University of Michigan, History of Art BA, June 2010 to June 2013</h4>
							<ul class="resume_bullets">
								<li>Used qualitative and quantitative research to support visual analysis</li>
								<li>Studied 7 semesters of Spanish including traveling to Costa Rica for volunteer work</li>
								<li>Worked as part of a team to develop a gallery exhibit of George Bellows for the Toledo Art Museum</li>
								<li>Additional coursework in Economics, Business Strategy, Finance, and Statistics</li>
							</ul>

						</div>
						<div class ="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<button type="button" class="btn btn-default btn-xs under_construction">Download Resume as PDF</button>
						</div>
					</div>
				</div>
			</div>
			<div class="slider" id="pi-dev">
				<div class="container">        
					<div class ="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Pi Dev </h1><h4 style="float:right;">This is a smaller project I have been working on to build a Raspberry Pi to host the temperature of my room.</h4>
							<ul id='timeline'>
								<li class='work'>
									<input class='radio' id='work5' name='works' type='radio' >
									<div class="relative">
										<label for='work5'>Soder bord</label>
										<span class='date'>Step One</span>
										<span class='circle'></span>
									</div>
									<div class='content'>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus 
										</p>
									</div>
								</li>
								<li class='work'>
									<input class='radio' id='work4' name='works' type='radio'>
									<div class="relative">
										<label for='work4'>Text bord</label>
										<span class='date'>Step Two</span>
										<span class='circle'></span>
									</div>
									<div class='content'>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab pr
										</p>
									</div>
								</li>
								<li class='work'>
									<input class='radio' id='work3' name='works' type='radio'>
									<div class="relative">
										<label for='work3'>Install PHP/local host</label>
										<span class='date'>Step Three</span>
										<span class='circle'></span>
									</div>
									<div class='content'>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obca
										</p>
									</div>
								</li>
								<li class='work'>
									<input class='radio' id='work2' name='works' type='radio'>
									<div class="relative">
										<label for='work2'>Get PHP to read temp</label>
										<span class='date'>Step Four</span>
										<span class='circle'></span>
									</div>
									<div class='content'>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias 
										</p>
									</div>
								</li>
								<li class='work'>
									<input class='radio' id='work1' name='works' type='radio' checked>
									<div class="relative">
										<label for='work1'>Get data on web</label>
										<span class='date'>Step Five</span>
										<span class='circle'></span>
									</div>
									<div class='content'>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate
										</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="slider" id="projects">
				<div class="containter">
					<div class ="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h1>Current Projects</h1>
							<h4>Blog</h4>
							<h5>blog.wineflaneur.com</h5>
						</div>
						<div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h3>Here is a list of current projects I am working on. Many are additional features to this site.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="slider" id="contact">
				<div class="container">
					<div class="row"> 
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h1>Contact Me</h1>
							<h3>If you would like to get in touch with me there are many ways...</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<a href="http://www.twitter.com/fuzzymath007"><img src="inc/Social/twitter.png" height="100px" width="100px">   Visit Matthew Chess @Twitter</a>
						</div>
					</div>
					<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<a href="http://www.linkedin.com/in/matthewchess"><img src="inc/Social/linkedin.png" height="100px" width="100px">   Visit Matthew Chess on Linked In</a>
					</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<a href="http://github.com/fuzzymath007"><img src="inc/Social/Github.png"  height="100px" width="100px">   View coding projects on Github</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		</div>  
	</div>  
</body>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>
<script src="app.js" type="text/javascript"></script>
<script src="res.js" type="text/javascript"></script>
