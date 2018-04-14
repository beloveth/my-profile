<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Ilesanmi Samuel Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
    <script src="assets/js/Chart.js"></script>


  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="smoothScroll" href="#about" title="About"><i class="icon-user"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#resume" title="Resume"><i class="icon-file"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#work" title="Works"><i class="icon-briefcase"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#contact" title="Contact"><i class="icon-envelope"></i></a></li>
						</ul>
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<div class="clear"></div>
		</div>
	</div>
	
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>Ilesanmi Samuel Ayanfejesu</h1>
					<h3>Web Developer | dbeloveth@gmail.com</h3>
				</div>
			</div>
		</div>
	</div>
	

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5>ABOUT</h5>
				</div>
				<div class="col-lg-6">
				<p>	I am a graphics designer & front-end web developer with two years of professional experience. I'm currently undergoing a training session at <a href="https://join.slack.com/t/hnginternship4/shared_invite/enQtMzQwOTU4NzAwNjExLWQ0NWFlZDBmNjRkMTRkNGZmYjQ5MzA0YmUzZDBiZDEzOTBkZGE1ZWUxZTI1YjkxMTQ5N2MyZTMyMzBmMTEyOWM …">HNG Internship 4.0</a> in order to learn more and to boost my horizons in web development. My major focus is on designing & developing web. I also have skills in other fields like system engineering, photo&video editing, database management. I am good with linux, windows and macintosh operating system</p>
				</div>
				
			</div>
		</div>
	</div>

	<section id="resume" name="resume"></section>
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Front-End Web Developer</t><br/>
						Microsoft Professional Programs <br/>
						<i>3 months online Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>MARCH 2018</sm><br/>
					</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Btech in Computer Science</t><br/>
						Federal University of technology Akure <br/>
						<i>5 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>APRIL 2014</sm></p>
				</div>
	
		</div>
		<br>
		<hr>
	</div>
	<!--WORK DESCRIPTION-->	
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>WORK</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Prospective Web Designer - Intern</t><br/>	
					HNG Internship 4.0 <br/>
					</p>
					</div>
				<div class="col-lg-3">
					<p><sm>CURRENT</sm></p>
				</div>
	
		</div>
		<br>
		<hr>
	</div>
	
	<!--SKILLS DESCRIPTION -->
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="javascript" height="130" width="130"></canvas>
						<p>Javascript</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="bootstrap" height="130" width="130"></canvas>
						<p>Bootstrap</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 90,
										color:"#1abc9c"
									},
									{
										value : 10,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="wordpress" height="130" width="130"></canvas>
						<p>Node js</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 65,
										color:"#1abc9c"
									},
									{
										value : 35,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					
					<div class="col-lg-3 col-lg-offset-3 centered">
						<canvas id="html" height="130" width="130"></canvas>
						<p>HTML/CSS</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("html").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="photoshop" height="130" width="130"></canvas>
						<p>Jquery</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("photoshop").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="illustrator" height="130" width="130"></canvas>
						<p>System Engineering</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 50,
										color:"#1abc9c"
									},
									{
										value : 50,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("illustrator").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

			</div>
			<br>
		</div>
	</div>
	<section id="work" name="work"></section>
	
	<!--PORTFOLIO DESCRIPTION -->
	<div class="container desc">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>PORTFOLIO</h5>
				</div>
				<div class="col-lg-6">
					<p><img class="img-responsive" src="assets/img/clock.gif" alt="current time"></p>
				</div>
				<div class="col-lg-3">
					<p>HNG Internship 4.0</p>
					Stage One
				<P><more>current time application
				</more></P>
				<div class="background">
					<div class = "frame">
					<div class = "hng_bg"> </div>
					<div class="stage_bg"> </div>
					<div class= "date_bg"></div>   
					<p class="date">
						<?php
							date_default_timezone_set("Nigeria/Lagos");
							
							  echo "Today is " . date("l-d-m-Y") . "<br>";
							   "<br>";
							  echo "Current time is " . date("h:i:sa"); 
						?></p>
					
					<p class="dbeloveth">@dbeloveth</p>
					</div>
					</div>
					
				</div>
		</div>
		<br>
		<br>
	</div>

	<section id="contact" name="contact"></section>
	
	<!--FOOTER DESCRIPTION -->
	<div id="footwrap">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-2 col-lg-offset-1">
					<h5>CONTACT</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Email</t><br/>
						dbeloveth@gmail.com <br/>
					</p>
					<p><t>Adress</t><br/>
						Akoka <br/>
						Yaba <br/>
						Lagos, Nigeria. <br/>
					</p>
					<p><t>Phone</t><br/>
						(+234)7035633570 <br/>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>SOCIAL LINKS</sm></p>
					<p>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-linkedin"></i></a>
						<a href="#"><i class="icon-apple"></i></a>

					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="c">
		<div class="container">
		
		</div>
	</div>
	
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>