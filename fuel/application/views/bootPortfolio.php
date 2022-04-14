<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Portfolio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href = "<?php echo $vars['bootPortfolioCSS'];?>" rel="stylesheet" type="text/css" />

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
		
		<style></style>
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
				//alert(work1);
				var work2 = "<?php echo $vars['mechEngImage2']; ?>";
				var work3 = "<?php echo $vars['engImg']; ?>";
				var work4 = "<?php echo $vars['topLabel']; ?>";
				var work5 = "<?php echo $vars['compSciImage']; ?>";
				var work6 = "<?php echo $vars['mathhonorimg']; ?>";
				var work7 = "<?php echo $vars['procprojengimg']; ?>";
				var work8 = "<?php echo $vars['techWriter']; ?>";
				var work9 = "<?php echo $vars['dataanalysis']; ?>";
				var work10 = "<?php echo $vars['websiteconstruction']; ?>";
				
				
				$(".carousel-inner .item:nth-child(1) img").attr('src',work1);
				$(".carousel-inner .item:nth-child(2) img").attr('src',work2);
				$(".carousel-inner .item:nth-child(3) img").attr('src',work3);
				$(".carousel-inner .item:nth-child(4) img").attr('src',work4);
				$(".carousel-inner .item:nth-child(5) img").attr('src',work5);
				$(".carousel-inner .item:nth-child(6) img").attr('src',work6);
				$(".carousel-inner .item:nth-child(7) img").attr('src',work7);
				$(".carousel-inner .item:nth-child(8) img").attr('src',work8);
				$(".carousel-inner .item:nth-child(9) img").attr('src',work9);
				$(".carousel-inner .item:nth-child(10) img").attr('src',work10);

				
				$(".carousel-inner .item img").css('width','13em').css('height','6em').css('zoom','400%').css('border','2px solid lightBlue');
			});
		</script>
		<!-- loaded from framework -->
		<script src="<?php echo $vars['jsBootPortfolio']; ?>"></script>


			<div id="tophdr" class="container">
			   <div class="jumbotron">

			   <div id="myJumboCarousel"  class="carousel slide" data-ride="carousel"> 
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<!--li data-target="#myCarousel" data-slide-to="4"></li-->
				  </ol> 
				
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
						<h3 style="text-align:center;background-color:darkgray;color:whitesmoke;margin:1% 15%">Richard L. Sypert Jr's Portfolio</h3> 
						<p style="margin:0 15% 2% 15%">This site shows my experience as a Software Developer, Technical Writer, and Engineer.  I have recent working experience with PHP and node.js on the backend
							and Vue.js and Semantic UI on the front end (Please see: <a href="#resume">My Resume</a> menu tab).  This experience also included PHPUnit testing on controller and
							service classes of enterprise software.
						</p>
					</div>				
					<div class="item">
						<h3 style="text-align:center;background-color:darkgray;color:whitesmoke;margin:1% 15%">Digital Ocean Cloud-based computing and Ubuntu Linux Virtual Hosting</h3> 
						<p style="margin:0 15% 2% 15%">  This site is hosted on Ubuntu 18.04 Digital Ocean Droplets, utilizing Apache Virtual Hosting.  Some apps have been deployed to Heroku Server.
						Microsoft Visual Studio Code using Virtual Linux (wsl) is the development environment for this portfolio.  VirtualBox Ubuntu 18.04 machine is used for direct ssh access to the droplets, and 
						sshfs to the files on the droplets.
						</p> 
					</div>				
					<div class="item">
						<h3 style="text-align:center;background-color:darkgray;color:whitesmoke;margin:1% 15%">PHP-based and JavaScript-based technologies and frameworks featured</h3>
						<p style="margin:0 15% 2% 15%"> Fuel CMS framework (CodeIgniter-based), <a href="https://angularvotes.rsypertjr.com/votes">Angular</a>, <a href="voteparser">Vue.js</a>,Node.js, Ng, NPM, Laravel, Bootstrap, JQuery, JQueryUI, SVG, XML, CSS are some of the technologies used.  Framework-based applications are at the <a href="#frameworks">Software Development->Frameworks</a> menu tab.
							PHP-based applications are located at the <a href="#lamp">Software Development->LAMP-based</a> menu tab.
						</p>
					</div>					
					 <!--div class="item">
					 	<h3 style="text-align:center">Docker Technology</h3>
						<p>Docker technology is used in terms of Docker Engine for implementing an Angular javascript app that contains a Dockerfile and a 
						Docker-compose file for implementations of development and production versions. Karma and Protractor unit testing of code is also included.
						Link to this code is <a href="https://github.com/Rsypertjr/dockerVoteParser/tree/dockerVoteParser" target="_blank">Docker Angular Code</a>
						</p>
					</div-->					
					 <div class="item">
					 	<h3 style="text-align:center;background-color:darkgray;color:whitesmoke;margin:1% 15%">Laravel-Mix MVC, React/Bootstrap/JQuery/ChartJs Component-based front end</h3> 
						<p style="margin:0 15% 2% 15%">Laravel (Mix) with React.js, React Router, Chart.js, and Bootstrap is used in this app: <a href="http://laravelvotes.rsypertjr.com/votes-table" 
						target="_blank">Laravel(Mix)/React/Chart.js/Bootstrap.js Vote Parser</a>.  This app uses React Hooks like UseEffect and UseState for functional components.
						Here is code link: <a href="https://github.com/Rsypertjr/Laravel-React-Chartjs-Votes-Parser/tree/latest2" target="_blank">Laravel(Mix)/React/Chart.js/Bootstrap.js Vote Parser Code</a>.
						</p>				
					</div>
				  </div>
				  
				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myJumboCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myJumboCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				  </a>
			  </div> <!-- end of myCarousel -->
			</div></div>	
			
			<nav class="navbar navbar-inverse" id="topNav">
			  
			  <div class="container-fluid">
				<div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>                        
				  </button>
				  <a class="navbar-brand" href="#">Bootstrap Work Portfolio</a>
				</div>
				<div>
				  <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="#home">Home/Code Repos</a></li>
					  <li><a href="#about">About</a></li>
					  <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Software Development <span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="#lamp">LAMP - based</a></li>
						  <li><a href="#mobile">JQuery Mobile</a></li>
						  <li><a href="#frameworks">Frameworks</a></li>
						</ul>
					  </li>
					  <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Technical Writing <span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="#manuals">Production and Maintenance Manuals</a></li>
						  <li><a href="#specifications">Technical Specification Manuals</a></li>
						</ul>
					  </li>
					  <li><a href="#resume">My Resume</a></li>
					  <li><a href="#living">Living In Vegas</a></li>
					  <li><a href="#front">Non-Bootstrap Portfolio</a></li>
					  <li><a href="#laravelreact">Laravel React Bootstrap Portfolio</a></li>
					</ul>
				  </div>
				</div>
			  </div>
			</nav>    
			

			<!---- End of Navigation Header --------------------------------->		   

				<div id="myCarousel"  class="carousel slide" data-ride="carousel"> 
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
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
				
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					  <img src="" alt="Work1" style="width:100%">
					</div>
				
					<div class="item">
					  <img src="" alt="Work2" style="width:100%">
					</div>
				
					<div class="item">
					  <img src="" alt="Work3" style="width:100%">
					</div>
					
					 <div class="item">
					  <img src="" alt="Work4" style="width:100%">
					</div>
					
					 <div class="item">
					  <img src="" alt="Work5" style="width:100%">
					</div>
					
					 <div class="item">
					  <img src="" alt="Work6" style="width:100%">
					</div>
					
					 <div class="item">
					  <img src="" alt="Work7" style="width:100%">
					</div>
					
					 <div class="item">
					  <img src="" alt="Work8" style="width:100%">
					</div>
					
					 <div class="item">
					  <img src="" alt="Work9" style="width:100%">
					</div>
					
					 <div class="item">
					  <img src="" alt="Work10" style="width:100%">
					</div>
				  
				  </div>
				  
				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				  </a>
			  </div> <!-- end of myCarousel -->
			   
		
				<div id="home" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>Home/Code Repos</span>	
							<span class="glyphicon glyphicon-home"></span>
						</div>
						<div class="panel-body">
							<!--<li class="list-group-item list-group-item-success">
								<img class="img-circle" src="<?php echo $vars['fuelCMS']; ?>" alt="Fuel CMS">
								<a href="fuel/login" target="_blank">
									<p  class="sectionTitle" >
										<a href="fuel/login" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Technologies Used!">Log-In to FUEL-CMS</a>	
									</p>
								</a>
								<object data="loggingIn" height="200" width="300"></object>
								<p>Login to the FUEL-CMS Content Management System. Use the Username and Password 
								(guest).Log-in to the FUEL-CMS
								</p>
							</li>-->
							<li class="list-group-item list-group-item-warning">
								<a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF" target="_blank">
									<p  class="sectionTitle" >
										<a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Sites GIT Repo!">FUEL-CMS Git Repository</a>	
									</p>
								</a>
								<p>Link to GIT Repository for this FuelCMS-based Site</p>
							</li>							
						</div>
					</div>
			  
				   <div id="homeCovr" class="container-fluid covr" style="height:130%">
						<div class="cvrimg">
							<span class="glyphicon glyphicon-home"></span>
						</div>
						<div class="cvrbody">
							<h1>&nbsp;&nbsp;Home/Code Repos</h1>
							<p>Beneath are links to FuelCMS-based site Code</p>
						</div>
					</div>>
				</div>
				  
				
		
				  <div id="about" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>About</span>	
							<span class="glyphicon glyphicon-wrench"></span>
						</div> 
						<div class="panel-body">
							<li class="list-group-item list-group-item-success">
								<img class="img-circle" src="<?php echo $vars['technologyideas']; ?>" alt="Technologies">
								<a href="webTech" target="_blank">
									<p  class="sectionTitle" >
										<a href="webTech" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click to See Technologies!">Web Page Technologies Used</a>	
									</p>
								</a>
								<p>This is a page that gives explanation of the programming technologies used on this site.</p>
							</li>
							<li class="list-group-item list-group-item-warning">
								<a href="emailno" target="_blank">
									<p  class="sectionTitle" >	
										<a href="emailno" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click to Email Me!">Making Contact</a>	
									</p>
								</a>
								<p>You can email me if you like. Also more contact info is given in my resume.</p>
							</li>
							<li class="list-group-item list-group-item-warning">
								<img class="img-circle" src="<?php echo $vars['myFace']; ?>" alt="My Profile">
								<a href="linkedIn" target="_blank">
									<p class="sectionTitle">
										<a href="linkedIn" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click to See My Profile!">Personal Profile</a>
									</p>
								</a>
								<p>You can view my Linked-In Personal Profile for more info on me.</p>
							</li>
						</div>
					</div>
				  
					 <div id="aboutCovr" class="container-fluid covr">
						<div class="cvrimg">
							<span class="glyphicon glyphicon-wrench"></span>
						</div>
						<div class="cvrbody">
							<h1>About</h1>
							<p>Beneath there is a page about technologies that I've used, and an email
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
							<li class="list-group-item list-group-item-success">
								<img class="img-circle" src="<?php echo $vars['dataanalysis']; ?>" alt="Data Anaysis">
								<a href="amino" target="_blank">
									<p class="sectionTitle">
										<a href="amino" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Amino Acid Code Sequence Analyzer</a>	
									</p>
								
								</a>
								<object data="amino" height="200" width="300"></object>
								<p>This program gives statistics for all combinations of 
								amino acid sequences within a protein. The protein sequence is 
								parsed by regex techniques from a text file, into a MySQL database. 
								The first and last amino acid is chosen in the GUI, as well as, 
								the desired statistical output. The database accessed by JavaScript-AJAX to PHP-MySQL 
								on the server side which returns the statistics.<br>The Code for PHP-based apps is
					            here: <a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF/fuel/application" target="_blank">PHP Code</a>
								</p>
							 </li>
							 <li class="list-group-item list-group-item-warning">
								<a href="orominer1" target="_blank">
									<p  class="sectionTitle" >
										<a href="orominer1" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Human Organ System Analyzer 1</a>	
									</p>
								</a>
								<object data="orominer1" height="200" width="300"></object>
								<p>The Orominer program shows a hierarchical organization of the human body constitution. 
								Its top level is Organ Systems.  It uses JavaScript, JQuery for event synchronization between 
								hierarchical display and graphic display, as well as, dynamic generation of SVG graphical elements 
								based on DOM HTML elements.  MySQL Database information is converted into XML format using PHP 
								for up front access by the code for generation of Hierachical Display. Unfortunately ONLY THE 
								First 3 NODES Of DATA was developed at Project Completion.<br>The Code for PHP-based apps is
					            here: <a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF/fuel/application" target="_blank">PHP Code</a>
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
									<br>The Code for PHP-based apps is here: <a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF/fuel/application" target="_blank">PHP Code</a>
								</p>
							 </li>
							 <li class="list-group-item">
								<img class="img-circle" src="<?php echo $vars['othellogameimage']; ?>" alt="Game Coding">
								<a href="othello" target="_blank">
									<p  class="sectionTitle" >	
										<a href="othello" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Play Othello Game thru AJAX</a>
									</p>
								</a>
								<object data="othello" height="200" width="300"></object>
								<p>Play the Othello Game using AJAX technology which will eliminate Page Reloads.
								   <br>The Code for PHP-based apps is here: <a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF/fuel/application" target="_blank">PHP Code</a>
								</p>
							 </li>
							 <!--li class="list-group-item">
								<a href="voteparser" target="_blank">
									<p  class="sectionTitle" >	
										<a href="voteparser" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">2020 Presidential Election Vote Parser</a>
									</p>
								</a>
								<object data="voteparser" height="200" width="300"></object>
								<p>See Tabular and Graphic Parser of 2020 Presidential Election Voting which uses Vue.js, JQuery, Bootstrap, Datatables, and JChartfx, on the front-end, and PHP on the backend 
									to create a dashboard and charts of elections data for all states. It pulls actual election data from the New York Times website and parses the JSON formatted data.   
								   <br>The Code for PHP-based apps is here: <a href="https://github.com/Rsypertjr/voteparser/blob/voteparser/parse_votes.php" target="_blank">PHP Code</a>
								</p>
							 </li-->
							
						</div>
					</div>
					
					 <div id="lampCovr" class="container-fluid covr">
						<div class="cvrimg">
							<span class="glyphicon glyphicon-lamp"></span>
						</div>
						<div class="cvrbody">
							<h1>LAMP Technologies</h1>
							<p>PHP/MySQL is used on the back-end for these apps. Regex is used to parse text files into a database.  
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
							<li class="list-group-item list-group-item-success">
								<img class="img-circle" src="<?php echo $vars['mobiledevelopmentimage']; ?>" alt="Mobile Development">
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
						</div>
					</div>
				   
					<div id="mobileCovr" class="container-fluid covr">
						<div class="cvrimg">
							<span class="glyphicon glyphicon-phone"></span>
					   </div>
					   <div class="cvrbody">
							<h1>Mobile Portfolio</h1>
							<p>Beneath is a JQuery Mobile version of my portfolio that is mobile-device-responsive</p>
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
							<li class="list-group-item list-group-item-danger">
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
							</li>
							<li class="list-group-item list-group-item-success">
								<a href="angularApp" target="_blank">
									<p  class="sectionTitle">
										<a href="angularApp" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Angular2 JavaScript and Redux State Container</a>
									</p>
								</a>
								<object data="angularApp" height="200" width="300"></object>
								<p>Angular2 App with Redux deployed to Heroku Server.<br>
								Here is the code: <a href="https://github.com/Rsypertjr/angularRedux" target="_blank">Angular Code</a>
								</p>
							</li>
							<li class="list-group-item list-group-item-success">
								<a href="https://angularvotes.rsypertjr.com" target="_blank">
									<p  class="sectionTitle">
										<a href="https://angularvotes.rsypertjr.com" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Angular version of Vote Parser</a>
									</p>
								</a>
								<object type="text/html" data="https://angularvotes.rsypertjr.com" height="200" width="300"></object>
								<p>Angular used with Bootstrap, JQuery Datatable, JQuery, Node.js, NPM.  Angular utilizes Components, Services, and Routing.<br>
								Here is the code: <a href="https://github.com/Rsypertjr/AngularVoteParser/tree/voteParser" target="_blank">Angular Code</a>
								<br/>This same app has a Docker implementation that uses Docker Engine and contains Dockerfile and Docker-compose<br> 
								implementations of development and production versions. Karma and Protractor unit testing of code is included.<br> 
								Link to this code is <a href="https://github.com/Rsypertjr/dockerVoteParser/tree/dockerVoteParser" target="_blank">Docker Angular Code</a>
								</p> 
								
							</li>
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
										<a href="https://laravelvotes.rsypertjr.com/votes-table" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Laravel(Mix)/React/Chart.js/Bootstrap.js Vote Parser</a>
									</p>
								</a>
								<object data="https://laravelvotes.rsypertjr.com/votes-table" height="200" width="300"></object>
								<p>The app uses Laravel (Mix) with React.js (including React Router).  Composer is used to 
								   manage PHP dependencies, and NPM is used to managed the Node-based React.js dependencies. 
								   Laravel routing is used to serve main page and React routing for fast rendering of tables 
								   and charts. Table and paging is a custom code and charts utilize Chart.js.
								</p>
							</li>
						</div>
					 </div> 
					
					  <div id="frameworksCovr" class="container-fluid covr">
						<div class="cvrimg">
							<span  class="glyphicon glyphicon-tree-conifer"></span>
						</div>
						<div class="cvrbody">
							<h1>Frameworks</h1>
							<p>Programming I've done using:<br>Node.js based technologies of Vue, Angular, and React,<br>Laravel MVC Framework</p>
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
							<li class="list-group-item list-group-item-success">
								<img class="img-circle" src="<?php echo $vars['technicalwritingimage']; ?>" alt="Technical Writing">
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
						</div>
					 </div> 
				  
					 <div id="manualsCovr" class="container-fluid covr">
						<div class="cvrimg">
							<span class="glyphicon glyphicon-edit"></span>
						</div>
						<div class="cvrbody">
							<h1>Production Manuals</h1>
							<p>Operation and Maintenance Manuals for an Electro-Mechanical Application</p>
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
								<img class="img-circle" src="<?php echo $vars['engProcessSpec']; ?>" alt="Technical Writing">
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
							
						</div>
					</div>
					
					<div id="specificationsCovr" class="container-fluid covr">
						<div class="cvrimg">
							<span class="glyphicon glyphicon-edit"></span>
						</div>
						<div class="cvrbody">
							<h1>Technical Specifications</h1>
							<p>Technology Explanation (White Paper) and Business Process Description</p>
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
								<img class="img-circle" src="<?php echo $vars['jobdone']; ?>" alt="Resume">
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
						<div class="cvrimg">
							<span class="glyphicon glyphicon-book"></span>
						</div>
						<div class="cvrbody">
							<h1>Resume</h1>
							<p>A Dynamic HTML and CSS version of my Resume.  Also a Download Link for a PDF version</p>
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
						<div class="cvrimg">
							<span class="glyphicon glyphicon-camera"></span>
						</div>
						<div class="cvrbody">
							<h1>Living In Vegas</h1>
							<p>How to Have Family Fun in and around Vegas!&nbsp;&nbsp;Although a little dated.</p>
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
							<img class="img-rounded" src="<?php echo $vars['lampTechs']; ?>" alt="Lamp Technologies">
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
				<div class="cvrimg">
					<span class="glyphicon glyphicon-lamp"></span>
				</div>
				<div class="cvrbody">
					<h1>Non-Bootstrap Portfolio</h1>
					<p>CodeIgniter,Fuel CMS, and Lamp technologies are used as the MVC framework. They are based on PHP/LAMP technologies. 
					Includes lot of built-in routing, modular storage of code in a database, and Active Object database access.  
					On the front-end, CSS 2-D and 3-D tranformations are used to produce animations.</p>
				</div>
				</div>
			</div>

			<div id="laravelreact" class="container-fluid">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span>Laravel Mix/React/Bootstrap Portfolio</span>	
						<img class="img-circle" src="<?php echo $vars['laravelMVC.jpg']; ?>" alt="Resume">
					</div> 
					<div class="panel-body">
						<li class="list-group-item list-group-item-success">
							<img class="img-rounded" src="<?php echo $vars['lampTechs']; ?>" alt="Lamp Technologies">
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
				<div class="cvrimg">
					<span class="glyphicon glyphicon-lamp"></span>
				</div>
				<div class="cvrbody">
					<h1>Non-Bootstrap Portfolio</h1>
					<p>CodeIgniter,Fuel CMS, and Lamp technologies are used as the MVC framework. They are based on PHP/LAMP technologies. 
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
	 </body>
</html>