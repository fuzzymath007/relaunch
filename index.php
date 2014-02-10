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
				<div class="slider" id="top-image">
					<div class="container"> 
						<div class ="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="top-left">
								<h1>Welcome</h1>
								<h3>Home of Matthew Chess</h3>
							</div>
							<div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="top-right">
								<p>A cut into my life and passions. I use this site as a test ground to play and write about my pasions as a technologlist and man. Feel free to look</p>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="col-md-12">
						<div id="divider">
							<div class="learn-more">
								<h5><a href="#about">Learn More &#9660;</a></h5>
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
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<h3>Matthew Chess</h3>
								</div>
								<div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<h5>Learning to code consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slider" id="resume">
					<div class="container"> 
						<div class ="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h1>Resume</h1>
								<h3>Click to view</h3>
							</div>
							<div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<p>This is my resume</p>
							</div>
						</div>
					</div>
				</div>
				<div class="slider" id="pi-dev">
					<div class="container">        
						<div class ="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h1>Pi Dev</h1>
								<h3>Click to view</h3>
							</div>
							<div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<p>Info about pi project</p>
							</div>
						</div>
					</div>
				</div>
				<div class="slider" id="projects">
					<div class="containter">
						<div class ="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h1>Current Projects</h1>
							</div>
							<div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h3>Here is a list of current projects I am working on. Many are addtional features to this site.</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="slider" id="blog">
					<div class="container">
						<div class="row"> 
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<img src="http://placehold.it/150x150">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<p>blog</p>
							</div>
						</div>
					</div>
				</div>
				<div class="slider" id="contact">
					<div class="container">
						<div class="row"> 
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h1>Contact Me</h1>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h3>If you would like to get in touch with me there are many ways...</h3>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h3>Or you may fill out my form</h3>
								<form class="form-horizontal" role="form">
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" id="inputEmail3" placeholder="Your Name">
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
									    <div class="col-sm-6">
									      <input type="email" class="form-control" id="inputEmail3" placeholder="Your Email">
									    </div>
									  </div>
									  <textarea class="form-control" rows="3"></textarea>
									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									      <button type="submit" class="btn btn-default">Submit</button>
									    </div>
									  </div>
								</form>
							</div>
						</div>  
					</div>  
				</div>
			</div>
		</div>

	</body>
	<?php include(ROOT_PATH . 'inc/footer.php'); ?>
	<script src="app.js" type="text/javascript"></script>
