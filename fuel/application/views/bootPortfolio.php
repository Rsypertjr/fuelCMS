<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Portfolio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<!-- Bootstrap CSS -->
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
		<link href = "<?php echo $vars['bootPortfolioCSS'];?>" rel="stylesheet" type="text/css" />
		<!-- Semantic UI -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet" />
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js">
    </script>
		<style>

			.carousel-item, .carousel-item.active{
				position:relative;
				text-align:center;
				height:auto;
				overfloww:scroll;
			}

			#myJumboCarousel .carousel-item {	
				margin-bottom:3em;
			}

			#myJumboCarousel {	
				background-image: linear-gradient(white, grey);
				font-size:1.25em;
			}

			#myCarousel .carousel-item {				
				margin-bottom:5em;
				background-color:lightgrey;
				padding:1em 0;
				height:25em;
			}

			.carousel-item h4 {
				background-color: black;
				color: white;
				padding:1em;
				margin:1em;	
			}

			.carousel-item p {
				background-color: lightblue;
				padding: 0.5em;				
				max-width:80%;
				margin-left:10%;
			}

			.carousel-item img {
				position:relative;
				max-width:100%;
				height: 100%;
			}

			#myCarousel {
				margin-top: 2em;
			}

			.nav-item {
				margin: 0 1em;
				font-size:1.25em;
				padding:1em 0;
			}

			.nav-item * {
				font-size:1.25em;
				padding:0.5em;
			}

			object {
				display:block;
			}

			.list-group-item > p:last-child {
				background-color:#e6f9ff;
				padding:1em;
				border-radius: 5px;
			}

			

		

			
		</style>
	
		<!-- needed in this file first -->
		<script type="text/javascript">
			$(document).ready(function(){
				
				var vegas1 = "<?php echo $vars['vegas1']; ?>";
				var vegas2 = "<?php echo $vars['vegas2']; ?>";
				var vegas3 = "<?php echo $vars['vegas3']; ?>";
				var vegas4 = "<?php echo $vars['vegas4']; ?>";
				var vegas5 = "<?php echo $vars['vegas5']; ?>";
				var vegas6 = "<?php echo $vars['vegas6']; ?>";
				var vegas7 = "<?php echo $vars['vegas7']; ?>";
				var vegas8 = "<?php echo $vars['vegas8']; ?>";
				
				var work1 = "<?php echo $vars['worksImg']; ?>";
				//alert(work1);fuel
				var work8 = "<?php echo $vars['techWriter']; ?>";
				var work9 = "<?php echo $vars['dataanalysis']; ?>";
				var work10 = "<?php echo $vars['websiteconstruction']; ?>";
				
				
				$(".carousel-inner .carousel-item:nth-child(1) img").attr('src',work1);
				$(".carousel-inner .carousel-item:nth-child(2) img").attr('src',work2);
				$(".carousel-inner .carousel-item:nth-child(3) img").attr('src',work3);
				$(".carousel-inner .carousel-item:nth-child(6) img").attr('src',work6);
				$(".carousel-inner .carousel-item:nth-child(7) img").attr('src',work7);
				$(".carousel-inner .carousel-item:nth-child(8) img").attr('src',work8);
				$(".carousel-inner .carousel-item:nth-child(9) img").attr('src',work9);
				$(".carousel-inner .carousel-item:nth-child(10) img").attr('src',work10);

				
				$(".carousel-inner .item img").css('width','13em').css('height','6em').css('zoom','400%').css('border','2px solid lightBlue');
			});
		</script>
		
		<!-- loaded from framework -->
		
		</head>
		<body>

			
			<div id="tophdr" class="container pt-2">
			   <div class="jumbotron p-0">
					<h1 class="d-flex justify-content-center pt-2" >Richard L. Sypert Jr's Work Portfolio</h1>
					<div id="myJumboCarousel"  class="carousel slide text-break mt-2" data-ride="carousel"> 
						
						
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<h4>Professional Experience</h4> 
								<p class="text-break">This site shows my experience as a Software Developer,&nbsp;Technical Writer,&nbsp;and Engineer.&nbsp;&nbsp;It has been updated to Bootstrap 4.0.&nbsp;&nbsp;
									This carousel presents Information about my Work History.
							</div>				
							<div class="carousel-item">
								<h4>Digital Ocean Cloud-based computing and Ubuntu Linux Virtual Hosting</h4> 
								<p style="margin:0 15% 2% 15%">This site is hosted on Ubuntu 18.04 Digital Ocean Droplets,&nbsp;utilizing Apache Virtual Hosting.&nbsp;&nbsp; Some apps have been deployed to Heroku Server.&nbsp;&nbsp;
								Visual Studio Code is the development environment for this portfolio.
								</p> 
							</div>				
							<div class="carousel-item">
								<h4>PHP-based and JavaScript-based technologies and frameworks featured</h4>
								<p> Fuel CMS framework (CodeIgniter-based),&nbsp;Angular&nbsp;Vue.js,&nbsp;Node.js,&nbsp;Ng,&nbsp;NPM,&nbsp;Laravel,&nbsp;Bootstrap,&nbsp;JQuery,&nbsp;JQueryUI,&nbsp;SVG,&nbsp;XML,&nbsp;CSS are some of the technologies used.&nbsp;&nbsp;Framework-based applications are at the&nbsp;<a href="#frameworks">
									Software Development->Frameworks</a> menu tab.&nbsp;&nbsp;
									PHP-based applications are located at the&nbsp;<a href="#lamp"&nbsp;>Software Development->LAMP-based</a> menu tab.
								</p>
							</div>		
							</div-->					
							<div class="carousel-item">
							<h4>Laravel-Mix MVC, React/Bootstrap/JQuery/ChartJs Component-based Front End</h4> 
								<p>Laravel (Mix) with React.js,&nbsp;React Router,&nbsp;Chart.js,&nbsp;and Bootstrap is used in this app:&nbsp;<a href="https://laravelvotes.rsypertjr.net/votes-table" 
								target="_blank">See App</a>.&nbsp;&nbsp;This app uses React Hooks like UseEffect and UseState for functional components.&nbsp;&nbsp;
								Here is code link:&nbsp;<a href="https://github.com/Rsypertjr/Laravel-React-Chartjs-Votes-Parser/tree/latest2" target="_blank">See Code</a>.
								</p>	
							</div>
							<div class="carousel-item">
								<h4>Docker Laravel-9 Vite,React 17/Bootstrap/Chartjs Vote Parser Implementation</h4>
								<p>Also included is the code for another Vote Parer implementation using Docker/Docker-compose of Laravel 9 with Vite for React 17 javascript compilation. React Bootstrap and Chartjs is also utilized as before.
								Link to this code is <a href="https://github.com/Rsypertjr/Docker-Laravel-Vite-React-Bootstrap-Chartjs/tree/docker-laravel-vite" target="_blank">See Code</a>
								</p>
							</div>
							<div class="carousel-item">
								<h4>Vue3 Composition API, Vue3/Bootstrap/JQuery/ChartJs Component-based front end</h4> 
								<p>Vue 3 Composition API,&nbsp;Chart.js,&nbsp;and Bootstrap is used in this app:&nbsp;<a href="http://vuevotes.rsypertjr.net" 
								target="_blank">See App</a>.&nbsp;&nbsp;This app uses Vue3 Composition API which allows more function-based writing of components,&nbsp;inspired by React Hooks.&nbsp;&nbsp;
								Here is code link:&nbsp;<a href="https://github.com/Rsypertjr/Vue3-Chartjs-Bootstrap.git" target="_blank">See Code</a>.
								</p>
							</div>		
							<div class="carousel-item">
								<h4>Check Out the Newest Implementation of Vote Parser</h4> 
								<p>It is a Docker-Compose networked implementation using Laravel 10, php 8.2, nginx, mysql 8.0, with Composer and NPM package management.</p>
								<p>Included are: React, React-Bootstrap, Chartjs Javascript technologies, and 'Vite' technology is used to bundle front-end assets, 									
								and 'InertialJS' enables React components to be routed like Laravel Views.&nbsp;&nbsp;<a href="https://preselections.rsypertjr.net" target="_blank">See App</a></p>
								<p>Please see README file in the following code repo for an explanation all included technologies, services, and utilities: 
								<a href="https://github.com/Rsypertjr/Vue3-Chartjs-Bootstrap.git" target="_blank">See Code</a>.
								</p>
							</div>		
							<div class="carousel-item">
								<h4>React using Google Programmable API with Express Backend using ATLAS Cloud API with Webpack and NPM compiling and PM2 process management.</h4> 
								<p>Google Programmable API is used to target searches at selected Web Sites and Customize Return Info:&nbsp;&nbsp;<a href="https://wbcarinfo.rsypertjr.net" target="_blank">See App</a><br>
									React-Bootstrap Components are used to enhance responsiveness.&nbsp;&nbsp;<a href="https://github.com/Rsypertjr/Docker-Laravel-Vite-React-Bootstrap-Chartjs/tree/lar-vite-chart-boot" target="_blank">See Code</a>.
								</p>
							</div>						
						</div>
						<div>
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myJumboCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myJumboCarousel" data-slide-to="1"></li>
								<li data-target="#myJumboCarousel" data-slide-to="2"></li>
								<li data-target="#myJumboCarousel" data-slide-to="3"></li>
								<li data-target="#myJumboCarousel" data-slide-to="4"></li>
							</ol> 
						</div>
						<div>
							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#myJumboCarousel" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#myJumboCarousel" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

					</div> <!-- end of myCarousel -->
				</div>
				
			</div>	
			
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-break" id="topNav">
				<a class="navbar-brand d-none" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				
				<div class="collapse navbar-collapse d-flex justify-content-center" id="myNavbar">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#home">Home/Code Repos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About This</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false" >Software Development <span class="caret"></span></a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#lamp">LAMP - based</a>
								<a class="dropdown-item" href="#mobile">JQuery Mobile</a>
								<a class="dropdown-item" href="#frameworks">Frameworks</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false" >Technical Writing <span class="caret"></span></a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#manuals">Production and Maintenance Manuals</a>
								<a class="dropdown-item" href="#specifications">Technical Specification Manuals</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="#resume">My Resume</a></li>
						<li class="nav-item"><a class="nav-link"  href="#living">Living In Vegas</a></li>
						<li class="nav-item" ><a class="nav-link"  href="#front">Non-Bootstrap Portfolio</a></li>
						<li class="nav-item d-none"><a class="nav-link"  href="laravelreact" target="_blank">Laravel React Bootstrap Portfolio</a></li>
					</ul>
			</nav>    
			

			<!---- End of Navigation Header --------------------------------->		   

				<div id="myCarousel"  class="carousel slide" data-ride="carousel" > 
				 
				
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="" alt="Work1" class="img-fluid">
					</div>
				
					<div class="carousel-item">
					  <img src="" alt="Work2" class="img-fluid">
					</div>
				
					<div class="carousel-item">
					  <img src="" alt="Work3" class="img-fluid">
					</div>
					
					 <div class="carousel-item">
					  <img src="" alt="Work4" class="img-fluid">
					</div>
					
					 <div class="carousel-item">
					  <img src="" alt="Work5" class="img-fluid">
					</div>
					
					 <div class="carousel-item">
					  <img src="" alt="Work6" class="img-fluid">
					</div>
					
					 <div class="carousel-item">
					  <img src="" alt="Work7"class="img-fluid" >
					</div>
					
					 <div class="carousel-item">
					  <img src="" alt="Work8" class="img-fluid">
					</div>
					
					 <div class="carousel-item">
					  <img src="" alt="Work9" class="img-fluid" >
					</div>
					
					 <div class="carousel-item">
					  <img src="" alt="Work10" class="img-fluid">
					</div>Vue3(Compostion API)/Chart.js/Bootstrap.js Vote Parser
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
						<li data-target="#myCarousel" data-slide-to="6"></li>
						<li data-target="#myCarousel" data-slide-to="7"></li>
						<li data-target="#myCarousel" data-slide-to="8"></li>
						<li data-target="#myCarousel" data-slide-to="9"></li>  
					</ol> 
				  </div>
				 
				  <div>
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			  </div> <!-- end of myCarousel -->
			   
		
				<div id="home" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>Home/Code Repos</span>
						</div>
						<div class="panel-body">						
							<ul>
								<li class="list-group-item list-group-item-warning">
									<a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF" target="_blank">
										<p  class="sectionTitle" >
											<a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF" target="_blank" data-toggle="tooltip"
												data-placement="right" title="Click for Sites GIT Repo!">FUEL-CMS Git Repository</a>
										</p>
									</a>
									<p>Link to GIT Repository for this FuelCMS-based Site</p>
								</li>
							</ul>
						</div>
					</div>
			  
				   <div id="homeCovr" class="container-fluid">
						<div class="row justify-content-center cvrimg align-items-center">
							<span>
								<i class="home icon"></i>
							</span>
						</div>
						<div class="row cvrtitle justify-content-center align-items-center">
							<p>Home/Code Repos</p>
						</div>
						<div class="row cvrbody justify-content-center align-items-center">
							<p class="text-center">Beneath are links to FuelCMS-based site Code</p>
						</div>						
					</div>
				</div>
				  
				
		
				  <div id="about" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>About This</span>
						</div>
						<div class="panel-body">
							<ol>
								<li class="list-group-item list-group-item-success">
									<img class="img-circle img-fluid" src="<?php echo $vars['technologyideas']; ?>" alt="Technologies">
									<a href="webTech" target="_blank">
										<p  class="sectionTitle" >
											<a href="webTech" target="_blank" data-toggle="tooltip" data-placement="right"
												title="Click to See Technologies!">Web Page Technologies Used</a>
										</p>
									</a>
									<p>This is a page that gives explanation of the programming technologies used on this site.</p>
								</li>
								<li class="list-group-item list-group-item-warning">
									<a href="emailno" target="_blank">
										<p  class="sectionTitle">
											<a href="emailno" target="_blank" data-toggle="tooltip" data-placement="right"
												title="Click to Email Me!">Making Contact</a>
										</p>
									</a>
									<p>You can email me if you like.&nbsp;&nbsp;Also more contact info is given in my resume.</p>
								</li>
								<li class="list-group-item list-group-item-warning">
									<img class="img-circle img-fluid" src="<?php echo $vars['myFace']; ?>" alt="My Profile">
									<a href="linkedIn" target="_blank">
										<p class="sectionTitle">
											<a href="linkedIn" target="_blank" data-toggle="tooltip" data-placement="right"
												title="Click to See My Profile!">Personal Profile</a>
										</p>
									</a>
									<p>You can view my Linked-In Personal Profile for more info on me.</p>
								</li>
							</ol>
						</div>
					</div>
				  
					 <div id="aboutCovr" class="container-fluid covr">
						<div class="row justify-content-center cvrimg align-items-center">
							<span>								
								<i class="wrench icon"></i>
							</span>
						</div>
						<div class="row cvrtitle justify-content-center align-items-center">
							<p>About</p>
						</div>
						<div class="row cvrbody justify-content-center align-items-center">
							<p class="text-center">Beneath there is a page about technologies that I've used, and an email
							 contact page.  Also you can see more about me on my LinkedIn profile page.  Click this cover panel to see.</p>
						</div>
					 </div>
				  </div>
				  
				  <div id="lamp" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>Software Development</span>
							<span class="glyphicon glyphicon-lamp"></span>
						</div>
						<div class="panel-body">
							<ol>
								<li class="list-group-item list-group-item-success">
									<img class="img-circle img-fluid" src="<?php echo $vars['dataanalysis']; ?>" alt="Data Anaysis">
									<a href="amino" target="_blank">
										<p class="sectionTitle">
											<a href="amino" target="_blank" data-toggle="tooltip" data-placement="right"
												title="Click for Full Page App!">Amino Acid Code Sequence Analyzer</a>
										</p>
									</a>
									<object data="amino" height="200" width="300"></object>
									<p>This program gives statistics for all combinations of 
									amino acid sequences within a protein. The protein sequence is 
									parsed by regex techniques from a text file, into a MySQL database. 
									The first and last amino acid is chosen in the GUI, as well as, 
									the desired statistical output. The database accessed by JavaScript-AJAX to PHP-MySQL 
									on the server side which returns the statistics.<br>The Code for PHP-based apps is
									here: <a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF/fuel/application"
										target="_blank">PHP Code</a>
									</p>
								</li>
								<li class="list-group-item list-group-item-warning">
									<a href="orominer1" target="_blank">
										<p  class="sectionTitle" >
											<a href="orominer1" target="_blank"  data-toggle="tooltip" data-placement="right"
												title="Click for Full Page App!">Human Organ System Analyzer 1</a>	
										</p>
									</a>
									<object data="orominer1" height="200" width="300"></object>
									<p>The Orominer program shows a hierarchical organization of the human body constitution. 
									Its top level is Organ Systems.  It uses JavaScript, JQuery for event synchronization between 
									hierarchical display and graphic display, as well as, dynamic generation of SVG graphical elements 
									based on DOM HTML elements.  MySQL Database information is converted into XML format using PHP 
									for up front access by the code for generation of Hierachical Display. Unfortunately ONLY THE 
									First 3 NODES Of DATA was developed at Project Completion.<br>The Code for PHP-based apps is
									here: <a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF/fuel/application"
										target="_blank">PHP Code</a>
									</p>
								</li>
								<li class="list-group-item list-group-item-danger">
									<a href="orominer2" target="_blank">
										<p  class="sectionTitle" >	
											<a href="orominer2" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Human Organ System Analyzer 2</a>	
										</p>
									</a>
									<object data="orominer2" height="200" width="300"></object>
									<p>This orominer program contains Histological Data within the Hierarchical Organization of Human Body 
										makeup. Histological Data is information about Human Organs and their tissues and cells. This 
										application uses JavaScript Objects to store active data requests from which graphics is generated.
										<br>The Code for PHP-based apps is here: 
											<a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF/fuel/application"	target="_blank">PHP Code</a>
									</p>
								</li>
								<li class="list-group-item">
									<img class="img-circle img-fluid" src="<?php echo $vars['othellogameimage']; ?>" alt="Game Coding">
									<a href="othello" target="_blank">
										<p  class="sectionTitle" >	
											<a href="othello" target="_blank" data-toggle="tooltip" data-placement="right"
												title="Click for Full Page App!">Play Othello Game thru AJAX</a>
										</p>
									</a>
									<object data="othello" height="200" width="300"></object>
									<p>Play the Othello Game using AJAX technology which will eliminate Page Reloads.
									<br>The Code for PHP-based app is here: 
											<a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF/fuel/application" target="_blank">Othello Game Code</a>
									</p>
								</li>
							
							</ol>
						
						</div>
					</div>
					
					 <div id="lampCovr" class="container-fluid covr">
						<div class="row justify-content-center cvrimg align-items-center">
							<span class="glyphicon glyphicon-lamp">
							 	<i class="lightbulb outline icon"></i>
							</span>
						</div>
						<div class="row cvrtitle justify-content-center align-items-center">
							<p>LAMP Technologies</p>
						</div>
						<div class="row cvrbody justify-content-center align-items-center">							
							<p class="text-center">PHP/MySQL is used on the back-end for these apps. Regex is used to parse text files into a database.  
							I programmatically converted flat non-relational tables into a relational-XMLfile for app data.  PHP/SQL is
							used to query database and send tabular results to front-end.  Javascript/JQuery is used for dynamic DOM manipulation
							and SVG graphic element generation. AJAX is also used to update and process game-board data, as well as
							load XML data files.  Click on this Panel to see apps.</p>
						</div>
					 </div>
				 </div>
				  
				
				 
				 
				 <div id="mobile" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>Mobile Portfolio</span>
							<span class="glyphicon glyphicon-phone"></span>
						</div>
						<div class="panel-body">
							<ol>
								<li class="list-group-item list-group-item-success">
									<img class="img-circle img-fluid" src="<?php echo $vars['mobiledevelopmentimage']; ?>" alt="Mobile Development">
									<a href="mobile" target="_blank">
										<p  class="sectionTitle" >
											<a href="mobile#" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">JQuery Mobile Web Portfolio</a>
										</p>
									</a>
									<object data="mobile" height="200" width="300"></object>
									<p>Link to a Mobile version of My work portfolio. I developed it using JQuery Mobile
									and it should run on Android devices.
									</p>
								</li>
							</ol>
						</div>
					</div>
				   
					<div id="mobileCovr" class="container-fluid covr">
						<div class="row justify-content-center cvrimg align-items-center">
							<span>
								<i class="phone icon"></i>								
							</span>
						</div>
						<div class="row cvrtitle justify-content-center align-items-center">
							<p>Mobile Portfolio</p>
						</div>
						<div class="row cvrbody justify-content-center align-items-center">							
							<p class="text-center">Beneath is a JQuery Mobile version of my portfolio that is mobile-device-responsive</p>
						</div>
					 </div>
				 </div>
				 
				 
				  
				  
				  <div id="frameworks" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>Frameworks</span>
							<span class="glyphicon glyphicon-tree-conifer"></span>
						</div>
						<div class="panel-body">
							<ol>
								<!--li class="list-group-item list-group-item-warning">
									<a href="apitest" target="_blank">
										<p  class="sectionTitle">
											<a href="apitest" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Vue Javascript App</a>
										</p>
									</a>
									<object data="apitest" height="200" width="300"></object>
									<p>A Vue JS based app that accesses an API to create a Dynamic List converted from a static HMTL page.  Added Paging Function and Select Page Size.<br>GitHub link
									to Code is here <a href="https://github.com/Rsypertjr/vueapp/tree/vueapp" target="_blank">Vue App Code</a>
									</p>
								</li-->
								<!--li class="list-group-item list-group-item-warning">
									<a href="expressApp1" target="_blank">
										<p  class="sectionTitle">
											<a href="http://206.189.211.36/" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Express/Node Javascript App</a>
										</p>
									</a>
									<object data="http://206.189.211.36/" height="200" width="300"></object>
									<p>A Simple App based on a Digital Ocean droplet with Ubuntu 16 OS and nginx server installed.<br>Express.js/Node.js application framework is used and it also
									utilizes Pug templating, Bootstrap, Mongo/Mongoose document-based database, Nodemon, Pm2, NPM, and other technologies.<br>
									Here is the code: <a href="https://github.com/Rsypertjr/expressnode" target="_blank">Express/Node Code</a>
									</p>
								</li-->
								<!--li class="list-group-item list-group-item-danger">
									<a href="laravelApp2" target="_blank">
										<p  class="sectionTitle">
											<a href="laravelApp2" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Simple Laravel App</a>
										</p>
									</a>
									<object data="laravelApp2" height="200" width="300"></object>
									<p>Originally developed using Homestead development environment which utilizes Vagrant VM Linux Server, and deployed to Heroku server.<br>
									Here is the code: <a href="https://bitbucket.org/Rsypertjr/laravel-test/src/master/" target="_blank">Laravel Code</a>
									</p>
								</li>
								<li class="list-group-item list-group-item-info">
									<a href="laravelApp3" target="_blank">
										<p  class="sectionTitle">
											<a href="laravelApp3" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Another Laravel App</a>
										</p>
									</a>
									<object data="laravelApp3" height="200" width="300"></object>
									<p>Developed using Laravel Homestead Environment for generating Homeschool grade transcripts for my kids.<br>
									Here is the code: <a href="https://github.com/Rsypertjr/transcriptor" target="_blank">Laravel Code</a>
									</p>
								</li-->
								
								<li class="list-group-item">
									<a href="tictactoe" target="_blank">
										<p  class="sectionTitle">
											<a href="tictactoe" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">React Javascript Tic-Tac-Toe</a>
										</p>
									</a>
									<object data="tictactoe" height="200" width="300"></object>
									<p>React Javascript Tic Tac Toe app with CSS animations for victory celebration.<br>
									Here is the code: <a href="https://github.com/Rsypertjr/fuelCMS/blob/newfuel/fuel/application/views/tictactoe.php" target="_blank">React Javascript Code</a>
									</p>
								</li> 							
								<li class="list-group-item list-group-item-success">
									<a href="https://laravelvotes.rsypertjr.com/votes-table" target="_blank">
										<p  class="sectionTitle">
											<a href="https://laravelvotes.rsypertjr.net/votes-table" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Laravel(Mix) w/React & Chart.js & Bootstrap.js Vote Parser</a>
										</p>
									</a>
									<object data="https://laravelvotes.rsypertjr.net/votes-table" height="200" width="300"></object>
									<p>The app uses Laravel (Mix) with React.js (including React Router).  Composer is used to 
									manage PHP dependencies, and NPM is used to managed the Node-based React.js dependencies. 
									Laravel routing is used to serve main page and React routing for fast rendering of tables 
									and charts. Table and paging is a custom code and charts utilize Chart.js. Here is code link: 
									<a href="https://github.com/Rsypertjr/Laravel-React-Chartjs-Votes-Parser/tree/latest2" target="_blank">Laravel(Mix)/React/Chart.js/Bootstrap.js Vote Parser Code</a>
									</p>
								</li>
								<li class="list-group-item list-group-item-success">
									<a href="https://vuevotes.rsypertjr.net" target="_blank">
										<p  class="sectionTitle">
											<a href="https://vuevotes.rsypertjr.net" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Vue 3 Composition API & Chart.js & Bootstrap.js Vote Parser</a>
										</p>
									</a>
									<object data="https://vuevotes.rsypertjr.net" height="200" width="300"></object>
									<p>The app uses Vue 3 Composition API. NPM is used to managed the Node-based Vue 3 dependencies. 
									Vue 3 Composition API allows for function-based components which is inspired by React w/Hooks.  Here is code link: 
									<a href="https://github.com/Rsypertjr/Vue3-Chartjs-Bootstrap.git" target="_blank">Vue3(Composition API)/Chart.js/Bootstrap.js Vote Parser Code</a>
									</p>
								</li>
								<li class="list-group-item list-group-item-success">
										<a href="https://preselections.rsypertjr.net" target="_blank">
												<p  class="sectionTitle">
														<a href="https://preselections.rsypertjr.net" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Docker/Laravel/Vite/React/Boostrap/Chartjs 2020 Presidential Election Parser</a>
												</p>
										</a>
										<object data="https://preselections.rsypertjr.net" height="200" width="300"></object>
										<p>It is a Docker-Compose networked implementation using Laravel 10, php 8.2, nginx, mysql 8.0, with Composer and NPM package management.<br/>
										Included are: React, React-Bootstrap, Chartjs Javascript technologies, and 'Vite' technology is used to bundle front-end assets, 									
										and 'InertialJS' enables React components to be routed like Laravel Views.&nbsp;&nbsp;
										<a href="https://github.com/Rsypertjr/Docker-Laravel-Vite-React-Bootstrap-Chartjs/tree/docker-laravel-vite" target="_blank">See Code</a></p>									
								</li>
								<li class="list-group-item list-group-item-success">
										<a href="https://wbcarinfo.rsypertjr.net" target="_blank">
												<p  class="sectionTitle">
														<a href="https://wbcarinfo.rsypertjr.net" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">React-Bootstrap with Express ATLAS Cloud MongoDb Backend</a>
												</p>
										</a>
										<object data="https://wbcarinfo.rsypertjr.net" height="200" width="300"></object>
										<p>A MERN Stack application that uses Google Programmable API to make customized searches for Car Information within React-Bootstrap. 
										<a href="https://github.com/Rsypertjr/react_carinfo_server" target="_blank">Server Code</a><a href="https://github.com/Rsypertjr/react_carinfo_client" target="_blank">Client Code</a>
										</p>
								</li>
							</ol>
						</div>
					 </div> 
					
					  <div id="frameworksCovr" class="container-fluid covr">
						<div class="row justify-content-center cvrimg align-items-center">
							<span>
								<i class="tree icon"></i>
							</span>
						</div>
						<div class="row cvrtitle justify-content-center align-items-center">
							<p>Frameworks</p>
						</div>
						<div class="row cvrbody justify-content-center align-items-center">
							<p class="text-center">Programming I've done using:<br>Node.js based technologies of Vue, Angular, and React,<br>Some utilization of the Laravel MVC Framework and Node Express.
                                                         Docker and Docker Compose Technologies used withth NPM and Webpack dependency management.</p>
						</div>
					  </div>
				  </div>
					
				<div id="manuals" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>Production Maintenance Manuals</span>
							<span class="glyphicon glyphicon-edit"></span>
						</div>
						<div class="panel-body">
							<ol>
								<li class="list-group-item list-group-item-success">
									<img class="img-circle img-fluid" src="<?php echo $vars['technicalwritingimage']; ?>" alt="Technical Writing">
									<a href="graingerABCDE" target="_blank">
										<p  class="sectionTitle" >
											<a href="graingerABCDE" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click to See it Full Page!">Grainger ABCDE Series B</a>
										</p>
									</a>
									<object data="graingerABCDE" height="200" width="300"></object>
									<p>This is a Maintenance and Product Information Manual tailored for a customers implementation 
									of a Motor Efficiency Controller (MEC). It is a new generation product manual. I wrote it
									using Adobe InDesign according to the customers style rules
									</p>
								</li>
								<li class="list-group-item list-group-item-warning">
									<a href="graingerCDE" target="_blank">
										<p  class="sectionTitle" >
											<a href="graingerCDE" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click to See it Full Page!">Grainger CDE</a>
										</p>
									</a>
									<object data="graingerCDE" height="200" width="300"></object>
									<p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a 
									Motor Efficiency Controller (MEC). It is a new generation product manual. I wrote it in Adobe InDesign 
									according to the customer's style rules.
									</p>
								</li>
								<li class="list-group-item list-group-item-danger">
									<a href="mecPManual" target="_blank">
										<p class="sectionTitle"> 
											<a href="mecPManual" target="_blank"  data-toggle="tooltip"  data-placement="right" title="Click to it Full Page!">MEC Product Manual VT 1.6</a>
										</p>
									</a>
									<object data="mecPManual" height="200" width="300"></object>
									<p>This is a Product Manual for a Motor Efficiency Controller (MEC). It is a new generation product manual. 
									I wrote it in Adobe InDesign according to the customer's style rules.
									</p>
								</li>
								</ol>
								
							</div>
						</div> 
					
						<div id="manualsCovr" class="container-fluid covr">							
							<div class="row justify-content-center cvrimg align-items-center">
								<span>
									<i class="edit icon"></i>
								</span>
							</div>
							<div class="row cvrtitle justify-content-center align-items-center">
								<p>Production Manuals</p>
							</div>
							<div class="row cvrbody justify-content-center align-items-center">							
								<p class="text-center">Operation and Maintenance Manuals for an Electro-Mechanical Application</p>
							</div>
						</div>
					</div>
					
					
					<div id="specifications" class="container-fluid">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<span>Technical Specification Documents</span>
								<span class="glyphicon glyphicon-edit"></span>
							</div>
							<div class="panel-body">
								<li class="list-group-item list-group-item-success">
									<img class="img-circle img-fluid" src="<?php echo $vars['engProcessSpec']; ?>" alt="Technical Writing">
									<a href="whitePaper" target="_blank">
										<p  class="sectionTitle" >
											<a href="whitePaper" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click to See it Full Page!">White Paper</a>
										</p>
									</a>
									<object data="whitePaper" height="200" width="300"></object>
									<p>This is a technical specification called a White Paper which explains the technology behind 
										a companies product. In this case an Electrical Motor Energy Efficiency Device.
										</p>
								</li>
								<li class="list-group-item list-group-item-warning">
									<a href="engSpec" target="_blank">
										<p  class="sectionTitle">
											<a href="engSpec" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click to See it Full Page!">Engineering Specification</a>
										</p>
									</a>
									<object data="engSpec" height="200" width="300"></object>
									<p>This is a technical specification for the Clark County Land Development Approval process. 
									I authored it as an Environmental Health Engineer for Southern Nevada Health District.
									</p>
								</li>
							</ol>	
						</div>
					</div>
					
					<div id="specificationsCovr" class="container-fluid covr">
						<div class="row justify-content-center cvrimg align-items-center">
							<span>
								<i class="edit icon"></i>
							</span>
						</div>
						<div class="row cvrtitle justify-content-center align-items-center">
							<p>Technical Specifications</p>
						</div>
						<div class="row cvrbody justify-content-center align-items-center">							
							<p class="text-center">Technology Explanation (White Paper) and Business Process Description</p>
						</div>
					 </div>
				  </div>
			  
			  <div id="resume" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>Resume</span>	
							<span class="glyphicon glyphicon-book"></span>
						</div>
						<div class="panel-body">
							<li class="list-group-item list-group-item-success">
								<img class="img-circle img-fluid" src="<?php echo $vars['jobdone']; ?>" alt="Resume">
								<a href="dynResume" target="_blank">
									<p  class="sectionTitle" >
										<a href="dynResume" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click to See It Full Page!">Dynamic HTML Resume w/Downloads</a>
									</p>
								</a>
								<object data="dynResume" height="200" width="300"></object>
								<p>Here is a link to my resume which uses dynamic CSS formatting.</p>
							</li>
						 </div>	
					 </div>
					
					<div id="resumeCovr" class="container-fluid covr">
						<div class="row justify-content-center cvrimg align-items-center">
							<span>
								<i class="book icon"></i>
							</span>							
						</div>
						<div class="row cvrtitle justify-content-center align-items-center">
							<p>Resume</p>
						</div>
						<div class="row cvrbody justify-content-center align-items-center">
							<p class="text-center">A Dynamic HTML and CSS version of my Resume.  Also a Download Link for a PDF version</p>
						</div>
					 </div>
				  </div>
		
			  
			 <div id="living" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>Living In Las Vegas</span>	
							<span class="glyphicon glyphicon-camera"></span>
						</div> 
						<div class="panel-body">
							<li class="list-group-item list-group-item-success">
								<a href="inVegas" target="_blank">
									<p class="sectionTitle">
										<a href="inVegas" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click to See It Full Page!">Having Vegas Family Fun</a>
									</p>
								</a>
								<object data="inVegas" height="200" width="300"></object>
								<p>See a slide show and facts about Family Fun In Vegas.</p>
							</li>
						</div>
					</div>
					
					 <div id="livingCovr" class="container-fluid covr">
						<div class="row justify-content-center cvrimg align-items-center">
							<span>
								<i class="camera retro icon"></i>
							</span>
						</div>
						<div class="row cvrtitle justify-content-center align-items-center">
							<p>Living In Vegas</p>
						</div>
						<div class="row cvrbody justify-content-center align-items-center">
							<p class="text-center">How to Have Family Fun in and around Vegas!&nbsp;&nbsp;Although a little dated.</p>
						</div>
					 </div>
				  </div>
			 
			 
			 
			 <div id="front" class="container-fluid">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span>Non Bootstrap Portfolio</span>	
						<span class="glyphicon glyphicon-lamp"></span>
					</div> 
					<div class="panel-body">
						<li class="list-group-item list-group-item-success">
							<img class="img-rounded img-fluid" src="<?php echo $vars['lampTechs']; ?>" alt="Lamp Technologies">
							<a href="frontCMS" target="_blank">
								<p class="sectionTitle">
									<a href="frontCMS"  target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click to See It Full Page!">Non-Bootstrap Work Portfolio</a>
								</p>
							</a>
							<object data="frontCMS" height="200" width="300"></object>
							<p>My old work portfolio using LAMP technologies including  CodeIgniter MVC Framework,FUEL-CMS
							(a CodeIgniter-based Content Management System), PHP, MySQL, HTML, JavaScript,
							JQuery, JQuery UI, JQuery Mobile, Angular JS, ReactJS (ngrx) CSS, CSS3, SVG, AJAX, XML,
							JSON, Regex, DOM, Notepad++, Cloud9 IDE, GIT, Heroku Server, Laravel MVC, GitHub API,
							Facebook API, Active Campaign API, Bootstrap, WordPress, Ruby On Rails,
							Google Developer Tools, Homestead Dev, Vagrant VMs, Adobe InDesign,
							GIMP (like Photoshop), and other technologies.</p>
						</li>
					</div>
				</div>
			
				<div id="frontCovr" class="container-fluid covr">
					<div class="row justify-content-center cvrimg align-items-center">
						<span class="glyphicon glyphicon-lamp">
							<i class="lightbulb icon"></i>
						</span>
					</div>
					<div class="row cvrtitle justify-content-center align-items-center">
						<p>Non-Bootstrap Portfolio</p>
					</div>
					<div class="row cvrbody justify-content-center align-items-center">
						<p class="text-center">CodeIgniter,Fuel CMS, and Lamp technologies are used as the MVC framework. They are based on PHP/LAMP technologies. 
						Includes lot of built-in routing, modular storage of code in a database, and Active Object database access.  
						On the front-end, CSS 2-D and 3-D tranformations are used to produce animations.</p>
					</div>
				</div>
			</div>

			
			  
		  <div id="footer" class="container-fluid">

			  <div class="row">
				   <div class="col-sm-2" style="color:black">
						<div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse1">Software Development</a>
								  </h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse">
									  <div class="panel-body">
											<p><a href="amino" target="_blank" >Amino Acid Sequence Analyzer</a></p>
											<p><a href="orominer1" target="_blank" >Human Organ System Analyzer 1</a></p>
											<p><a href="orominer2" target="_blank" >Human Organ System Analyzer 2</a></p>													
											<p><a href="mobile" target="_blank" >Mobile Web Portfopo</a></p>	
											<p><a href="gitRepo" target="_blank" >GIT Repository</a></p>
											<p><a href="othello" target="_blank" >Play Othello Game</a></p>
											<p><a href="laravelApp2" target="_blank" >Sample Laravel 1</a></p>
											<p><a href="laravelApp3" target="_blank" >Sample Laravel 2</a></p>
											<p><a href="angularApp" target="_blank" >Angular JavaScript</a></p>
									  </div>
								</div>
						</div>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
					<div class="panel panel-default">
							<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse2">Technical Writing</a>
								  </h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								  <div class="panel-body">
											<p><a href="graingerABCDE" target="_blank" >Grainger ABCDE Series B Product Manual</a></p>
											<p><a href="graingerCDE" target="_blank" >Grainger CDE Product Manual</a></p>
											<p><a href="mecPManual" target="_blank" >MEC Product Manual VT 1.6</a></p>	
											<p><a href="whitePaper" target="_blank" >Technology White Paper</a></p>
											<p><a href="engSpec" target="_blank" >Engineering Specification</a></p>
								 </div>
						   </div>
					</div>
				</div>
				
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
					  <div class="panel panel-default">
							<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse3">Resumes</a>
								  </h4>  
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								  <div class="panel-body">
											<p><a href="pdfResume" target="_blank" >PDF Resume</a></p>
											<p><a href="dynResume" target="_blank" >Dynamic Resume</a></p>
								 </div>
							</div>
					   </div>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
				  <div class="panel panel-default">
						<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse4">Contact</a>
							  </h4>  
						</div>
						<div id="collapse4" class="panel-collapse collapse">
							  <div class="panel-body">
										<p><a href="emailno" target="_blank" >Email</a></p>
										<p><a href="linkedIn" target="_blank" >Linked In Profile</a></p>
							 </div>
						</div>
				   </div>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>  

		<script src="<?php echo $vars['jsBootPortfolio']; ?>"></script>
	 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->	
	 </body>
</html>
