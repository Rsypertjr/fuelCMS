<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Portfolio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
		
		<style>
			body {
					position:relative;
					height:auto;
					background-color:lightGrey;
					-webkit-transition: height 2s; /* Safari */
					transition: height 2s;
					padding:0em 1em 1em 1em;
					margin-bottom:50%;
			}
			.glyphicon {margin-left:1em;}
			.caret {margin-left:0.5em;}
			.btn-group {margin-right:0.25em;}
			.badge {margin-left:0.35em;}
			.abutton {position:relative;zoom:100%;}
			/*.outer {position:relative;zoom:70%;}*/
			li {font-size:0.75em;height:auto}
			.list-group-item {position:relative;padding:0em 20%;}
			.list-group-item img {display:block;height:7em;width:7em;padding:0em;margin-left:auto;margin-right:auto}
			.list-group-item img.img-rounded {width:14em;}
			.list-group-item h2 {width:100%;text-align:center;color:black}
		  
			
			#topNav.affix {
				top: 0;
				width: 100%;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
				background-color: #3c3c3c;
				border-color: #3c3c3c;
				z-index: 9999 !important;
			}
			
			
			.affix .dropdown>a, .affix ul.nav>li>a {
				color: #fff !important;
				padding: 15px !important;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
			}
			
			#myNavbar > ul > li.dropdown.open > ul > li > a{
				color: #333;
			}
			
			#topNav.affix-top {
				position: static;
				top: -35px;
			}
						
			#topNav.affix-top a {
				padding: 25px !important;
			}

			.navbar {
				  margin-bottom: 0px;
			  }
	
			
		   #home{  
				   position:relative;
				   height:auto;
				   margin:2em 0;
				   color: #fff; 
				   -webkit-transition: all .5s ease-in-out;
				   transition: all .5s ease-in-out;
		   }
		   #homeCovr {
				position:absolute;
				height:100%;
				width:100%;
				opacity:0.0;
				top:0;
				left:0;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
	
		   
		   
		   #about {
					position:relative;
					height:auto;
					margin:2em 0;
					color: #fff; 
					-webkit-transition: all .5s ease-in-out;
					transition: all .5s ease-in-out;
				   }
				   
		  #aboutCovr {
				position:absolute;
				height:100%;
				width:100%;
				opacity:0.0;
				top:0;
				left:0;
				padding:1em;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
				
		   }

		   #lamp {
			position:relative;
			height:auto;
			margin:2em 0;
			color: #fff; 
			-webkit-transition: all .5s ease-in-out;
			transition: all .5s ease-in-out;
			
		   }
		   
		   #lampCovr {
				position:absolute;
				height:100%;
				width:100%;
				opacity:0.0;
				top:0;
				left:0;
				padding:1em;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   
	
		   
		   
		   #wordPress {
			position:relative;
			height:auto;
			margin:2em 0;
			color: #fff; 
			-webkit-transition: all .5s ease-in-out;
			transition: all .5s ease-in-out;
		   }
		   
			#wordPressCovr {
				position:absolute;
				height:100%;
				width:100%;
				opacity:0.0;
				top:0;
				left:0;
				padding:1em;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   

		   
		   #mobile{
				position:relative;
				height:auto;
				margin:2em 0;
				color: #fff; 
				padding:1em;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   
		   #mobileCovr {
				position:absolute;
				height:100%;
				width:100%;
				opacity:0.0;
				top:0;
				left:0;
				padding:1em;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   

		  
		   
	
		   
		   #frameworks {
				position:relative;
				height:auto;
				margin:2em 0;
				color: #fff; 
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   
		   #frameworksCovr {
				position:absolute;
				height:100%;
				width:100%;
				opacity:0.0;
				top:0;
				left:0;
				padding:1em;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out; 
		   }
		   

		   
		   #manuals {
				position:relative;
				height:auto;
				margin:2em 0;
				color: #fff; 
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   
		   
		   #manualsCovr {
				position:absolute;
				height:100%;
				width:100%;
				margin:auto;
				opacity:0.0;
				top:0;
				left:0;
				padding:1em;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out; 
		   }
		   

		   
		   
		   #specifications {
					position:relative;
					height:auto;
					margin:2em 0;
					color: #fff; 
					-webkit-transition: all .5s ease-in-out;
					transition: all .5s ease-in-out;
		   }
		   
		   #specificationsCovr {
				position:absolute;
				height:100%;
				width:100%;
				opacity:0.0;
				top:0;
				left:0;
				padding:1em;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }

		   #resume {
				position:relative;
				height:auto;
				margin:2em 0;
				color: #fff; 
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   
			#resumeCovr {
				position:absolute;
				height:100%;
				width:100%;
				opacity:0.0;
				top:0;
				left:0;
				padding:1em;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   

		   
		   
		   #living {
				position:relative;
				height:auto;
				margin:2em 0;
				color: #fff; 
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   
			#livingCovr {
				position:absolute;
				height:100%;
				width:100%;
				opacity:0.0;
				top:0;
				left:0;
				padding:1em;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   
	
		   
		   
		   
			#front {
				position:relative;
				height:auto;
				margin:2em 0;
				color: #fff; 
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
		   }
		   
			#frontCovr {
				position:absolute;
				height:100%;
				width:100%;
				top:0;
				left:0;
				padding:1em;
				opacity:0.0;
				background-color:black;
				-webkit-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out; 
		   }

		   
		   #footer {
						height:auto;
						color: lightBlue; 
						background-color:black;
						padding:3em 0;
						-webkit-transition: all .5s ease-in-out;
						transition: all .5s ease-in-out;
		   }
		   
		   #footer .panel-default>.panel-heading {
				color: lightBlue;
				background-color: black;
				border-color: black;
			}
		   
		   #footer .panel-title {font-size:0.6em;}
		   
		   #footer .panel-default {
				position:relative;
				height:auto;
				border-color: black;
				
			}	
					
			#footer .row button {position:relative;transform:scale(.65,.65);margin-left:-2em}
			
			#footer .row {padding-left:5em;}
					
			#footer .panel-body {padding:0.125em;margin:0em}
			#footer .panel-body p  {position:relative;width:95%;margin:0.125em 2.5%;padding:0.25em;text-align:left;font-size:0.80em}
			
			#footer .panel-body p:nth-child(even) {background-color:black} 
			#footer .panel-body p:nth-child(odd) {background-color:black}
			
			#footer .panel-body p:nth-child(even) a {color:lightBlue} 
			#footer .panel-body p:nth-child(odd) a {color:lightBlue}
			#footer .panel-body p a {position:relative;width:100%;text-align:left}
			
			
			
			#myCarousel {margin:6em 0 6em 0}
			
		   .nav-tabs
				  {
					position: fixed;
					z-index: 9;
					background-color: #fff;
				  }
				  
		 
		
		.carousel-inner>.item {
		  width: 100%;

			}
		
		object {
				position:relative;
				width:90%;
				margin:auto 5%;
				display:none;
				padding:0em;
				border:10px solid grey;
				background:linear-gradient(lightGrey,lightBlue);
				-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
				-webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
				animation-name: example;
				animation-duration: 4s;
				animation-iteration-count: infinite;
			
		}
		a[data-toggle='tooltip']  {position:relative;text-align:center;font-size:1.5em;width:100%;height:auto;padding:2px;margin-bottom:0.5em}
		
	
		
		
		#home .panel-body li>p, #about .panel-body li>p, #mobile .panel-body li>p,#wordPress .panel-body li>p,
		
		#resume .panel-body li>p ,#living .panel-body li>p   	{position:relative;height:auto;width:100%}
		#lamp > div > div.panel-body > li:nth-child(4) > p:nth-child(6) {color:black}
		
		.panel-body li {
			position:relative;
			padding:3em;
			border:10px solid lightGrey;
			margin:3em;
			background:linear-gradient(to right, lightGrey,lightBlue);
			-webkit-transition: all 1s ease-in-out;
			transition: all 1s ease-in-out;
		}
		
		.panel-heading {font-size:1.5em;}
		.panel {border:none;}
		.panel-body li>p {position:relative;width:100%;height:auto;padding:2px;text-align:center;font-size:2em}
	
		.panel-body li p {margin:1em 0;color:black}
	  
		div.panel-body > li.list-group-item > p:last-child {border:5px solid grey; padding:5px}
		
		.cvrimg {
			position:relative;
			height:40%;
			width:100%;
			margin:0em;
			padding-top:1em;
			
		}
		
		.cvrimg span{
			position:relative;
			transform:scale(12,12);
			top:50%;
			left:50%;
		}
		
		.cvrbody{
			
			 position:relative;
			 height:60%;
			 width:100%;
			 margin:0em;
			 padding:0em;
			 font-size:2.0em;
			 margin:0em 0em 0em 0em;
			 text-align:center;
		}
		
		.cvrbody h1 {
			text-align:center;
			margin:0.5em 0em 0.5em 0em;
			font-size:2.0em
			
		}
		
		
		
	  
			/* Safari 4.0 - 8.0 */
			@-webkit-keyframes example {
				0%   {background:linear-gradient(lightGrey,lightBlue);}
				20%   {background:linear-gradient(to right,lightGrey,lightBlue);}
				40%   {background:linear-gradient(to left,lightBlue,lightGreen);}
				60%   {background:linear-gradient(lightGreen,beige);}
				80% {background:linear-gradient(to right, beige,lightGrey);}
				100% {background:linear-gradient(to left, lightBlue,lightGrey);}
			}
			
			/* Standard syntax */
			@keyframes example {
				0%   {background:linear-gradient(lightGrey,lightBlue);}
				20%   {background:linear-gradient(to right,lightGrey,lightBlue);}
				40%   {background:linear-gradient(to left,lightBlue,lightGreen);}
				60%   {background:linear-gradient(lightGreen,beige);}
				80% {background:linear-gradient(to right, beige,lightGrey);}
				100% {background:linear-gradient(to left, lightBlue,lightGrey);}
			}
		
		
		
		
		
		
		#tophdr {position:relative;}
	  
		</style>
		
		
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
				
				var anyShowing = '';
				
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
			  
		
				 $('body').on('mouseover mousemove mouseleave mousedown mouseup',function(){
					
					  anyShowing = $('.row#content').find('div.collapse').filter(function(index){
						return $(this).css('display') === 'block';
					   }).length;
				 
					  
				 }); 
			   
		
				  $('.nav ul.dropdown-menu li.panelPart a,.nav li.panelPart a ').on('mouseup',function(){
					 
					 var target = $(this).attr('data-target');
					// alert(target);
				  
					 var isTarget = $('.row#content').find(target).css('display') == 'block';
					// alert(isTarget);
					  if(isTarget == true)  //You are closing content
								anyShowing--;
					  else if(isTarget == false)  // You are opening content
								anyShowing++;
					
					//alert(anyShowing);			
								
					if(anyShowing == 0)
						$('#myCarousel').show();
					else if(anyShowing > 0)
						$('#myCarousel').hide();
				 
				  });
				 
			
			   $("ul.dropdown-menu li a[href='#lamp']").add("ul.dropdown-menu li a[href='#wordPress']").add("ul.dropdown-menu li a[href='#mobile']")
					   .add("ul.dropdown-menu li a[href='#frameworks']").add("ul li a[href='#resume']").add("ul.dropdown-menu li a[href='#manuals']")
					   .add("ul.dropdown-menu li a[href='#specifications']").add("ul li a[href='#living']").add("ul li a[href='#front']")
					   .add("ul li a[href='#home']")
					   .on('mousedown',function(){
					
					$('object').css('display','none');
					 var hrf = $(this).attr('href');
					 //alert(hrf);
					 var sel = hrf+" > div > div.panel-body > li > object";
					 
					 //#living > div > div.panel-body > li > object
					 //alert(sel);
					 $(sel).css('display','block');
			   
			   }); 
			   
			   $(document).ready(function(){
						$('[data-toggle="tooltip"]').tooltip(); 
					});  
					
	
			   
			   $('ul.nav li').on('mousedown mouseenter mouseover',function(){
					$(this).addClass('active');
			   });
			   
				 $('ul.nav li').on('mouseleave',function(){
					$(this).removeClass('active');
			   });
			   
			   
				$("#topNav.navbar").affix({offset: {top: $("#tophdr").outerHeight(true)} });
		   
				$( window ).scroll(function() {
					
					// Adjusting Cover Panels
						$('#home').on('mouseenter',function(){
							$('#homeCovr').css('opacity','0.85');
							var height1 = $('#homeCovr').height();
							var height2 = $('#homeCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#homeCovr .container').css('margin-top',margin);
					
						});
						
						
			  
						$('#about').on('mouseenter',function(){
							$('#aboutCovr').css('opacity','0.85');
							var height1 = $('#aboutCovr').height();
							var height2 = $('#aboutCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#aboutCovr .container').css('margin-top',margin);
					
						});
							
			  
						$('#lamp').on('mouseenter',function(){
							$('#lampCovr').css('opacity','0.85');
							var height1 = $('#lampCovr').height();
							var height2 = $('#lampCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#lampCovr .container').css('margin-top',margin);
					
						});
						
						
						$('#wordPress').on('mouseenter',function(){
							$('#wordPressCovr').css('opacity','0.85');
							var height1 = $('#wordPressCovr').height();
							var height2 = $('#wordPressCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#wordPressCovr .container').css('margin-top',margin);
						});
						
						
			   
						$('#mobile').on('mouseenter',function(){
							$('#mobileCovr').css('opacity','0.85');
							var height1 = $('#mobileCovr').height();
							var height2 = $('#mobileCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#mobileCovr .container').css('margin-top',margin);
						});
							
			  
			
						$('#frameworks').on('mouseenter',function(){
							$('#frameworksCovr').css('opacity','0.85');
							var height1 = $('#frameworksCovr').height();
							var height2 = $('#frameworksCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#frameworksCovr .container').css('margin-top',margin);
						});
							
						
		   
						$('#manuals').on('mouseenter',function(){
							$('#manualsCovr').css('opacity','0.85');
							var height1 = $('#manualsCovr').height();
							var height2 = $('#manualsCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#manualsCovr .container').css('margin-top',margin);
						});
		
						$('#specifications').on('mouseenter',function(){
							$('#specificationsCovr').css('opacity','0.85');
							var height1 = $('#specificationsCovr').height();
							var height2 = $('#specificationsCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#specificationsCovr .container').css('margin-top',margin);
						});
		  
						$('#resume').on('mouseenter',function(){
							$('#resumeCovr').css('opacity','0.85');
							var height1 = $('#resumeCovr').height();
							var height2 = $('#resumeCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#resumeCovr .container').css('margin-top',margin);
						});
						
			  
						$('#living').on('mouseenter',function(){
							$('#livingCovr').css('opacity','0.85');
							var height1 = $('#livingCovr').height();
							var height2 = $('#livingCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#livingCovr .container').css('margin-top',margin);
						});
			   
						$('#front').on('mouseenter',function(){
							$('#frontCovr').css('opacity','0.85');
							var height1 = $('#frontCovr').height();
							var height2 = $('#frontCovr .container').height();
							var margin = (height1-height2)/2.0;
							$('#frontCovr .container').css('margin-top',margin);
						});
						
						
									
				$('#frontCovr').add('#homeCovr').add('#aboutCovr').add('#lampCovr').add('#wordPressCovr')
							   .add('#mobileCovr').add('#frameworksCovr').add('#manualsCovr')
							   .add('#specificationsCovr').add('#resumeCovr').add('#livingCovr')
							   .on('mousedown',function(){
								
								var el = $(this).css('z-index','-1');
								var par = $(this).parent();
								el.css('opacity','0');
							 
								
								par.find('li img').css('zoom','300%');
									
												
								par.on('mouseenter',function(){
									el.css('opacity','0.85').css('z-index','100');
									
								
								});
								
								
								
											
								par.on('mouseleave',function(){
									el.css('opacity','0.85').css('z-index','100');
									
									
									
										$(this).on('mouseleave',function(){
											$(this).find('li img').css('zoom','100%');
										});
								});
								
							
						});
			});
				
        var ht = $('object').css('height');
		var wd = $('object').css('width');
		
		$('object').on('mouseenter', function(){
			$(this).animate({height:'900'}); 
		});
				
		$('object').on('mouseleave', function(){
			$(this).animate({height:ht,width:wd}); 
		});	

	

				
				
	});
			
	
		
</script>
			<div id="tophdr" class="container">
			   <div class="jumbotron">
				<h1>Richard L. Sypert Jr's Portfolio</h1> 
				<p>This site shows my experience as a Software Developer, Technical Writer, and Engineer.  I have recent working experience with PHP and node.js on the backend
				 	and Vue.js and Semantic UI on the front end (Please see: <a href="#resume">My Resume</a> menu tab).  This site is hosted on Digital Ocean Droplets.  Some apps have been deployed to Heroku Server.
				</p>
				<p>One droplet is Ubuntu 16 with nginx server utilizing Express.js/Node.js application framework.  It has an application using Pug templating, Bootstrap, 
				   Mongo/Mongoose document-based database, Nodemon, Pm2, NPM, and other technologies. This app is found under the <a href="#frameworks">Software Development->Frameworks</a> menu tab, as 
				   <a href="http://206.189.211.36/">Express/Node JavaScript App</a>.
				</p> 
				<p>This site is mostly hosted on a Digital Ocean droplet containing Ubuntu 18.04 LAMP setup.  Fuel CMS framework (CodeIgniter-based), Bootstrap, JQuery, JQueryUI, SVG, XML, CSS are the main 
				    technologies used.  Laravel, Vue.js, and Angular2 applications are under the <a href="#frameworks">Software Development->Frameworks</a> menu tab.
					PHP-based applications are located at the <a href="#lamp">Software Development->LAMP - based</a> menu tab
				</p>
			  </div>
			</div>	
			
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
						  <li><a href="#wordPress">WordPress</a></li>
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
							<li class="list-group-item list-group-item-warning">
								<a href="https://github.com/Rsypertjr/wordpress/tree/sshwordpress" target="_blank">
									<p  class="sectionTitle" >
										<a href="https://github.com/Rsypertjr/wordpress/tree/sshwordpress" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Sites GIT Repo!">WordPress Git Repository</a>	
									</p>
								</a>
								<p>Link to GIT Repository for a Simple WordPress Portfolio Version</p>
							</li>
						</div>
					</div>
			  
				   <div id="homeCovr" class="container-fluid covr" style="height:130%">
						<div class="cvrimg">
							<span class="glyphicon glyphicon-home"></span>
						</div>
						<div class="cvrbody">
							<h1>&nbsp;&nbsp;Home/Code Repos</h1>
							<p>Beneath are links to FuelCMS-based site Code and WordPress-based site Code</p>
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
							 <li class="list-group-item">
								<a href="voteparser" target="_blank">
									<p  class="sectionTitle" >	
										<a href="voteparser" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">2020 Presidential Election Vote Parser</a>
									</p>
								</a>
								<object data="voteparser" height="200" width="300"></object>
								<p>See Tabular and Graphic Parser of 2020 Presidential Election Voting which uses Vue.js, JQuery, Bootstrap, Datatables, and JChartfx, on the front-end, and PHP on the backend 
									to create a dashboard and charts of elections data for all states. It pulls actual election data from the New York Times website and parses the JSON formatted data.   
								   <br>The Code for PHP-based apps is here: <a href="https://github.com/Rsypertjr/fuelCMS/tree/fuelPF/fuel/application" target="_blank">PHP Code</a>
								</p>
							 </li>
							 <li class="list-group-item list-group-item-success">
								<a href="http://presvote.tk:4200/votes" target="_blank">
									<p  class="sectionTitle">
										<a href="http://presvote.tk:4200/votes" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Angular version of Vote Parser</a>
									</p>
								</a>
								<object data="http://presvote.tk:4200/votes" height="200" width="300"></object>
								<p>Angular used with Bootstrap, JQuery Datatable, JQuery, Node.js, NPM.  Angular utilizes Components, Services, and Routing.<br>
								Here is the code: <a href="https://github.com/Rsypertjr/AngularVoteParser/tree/voteParser" target="_blank">Angular Code</a>
								</p>
							</li> 
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
				  
				<div id="wordPress" class="container-fluid">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span>WordPress Apps</span>
							<span class="glyphicon glyphicon-tasks"></span>
						</div>
						<div class="panel-body">
						  <li class="list-group-item list-group-item-success">
							<img class="img-circle" src="<?php echo $vars['wordpressimage']; ?>" alt="WordPress">
							<a href="http://159.65.100.7/wordpress" target="_blank">
								<p  class="sectionTitle" >
									<a href="http://159.65.100.7/wordpress" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Wordpress Work Portfolio</a>
								</p>
							</a>
							<object data="http://159.65.100.7/wordpress" height="200" width="300"></object>
							<p>A Simple WordPress version of my Word Portfolio.</p>
						  </li>
						 
						</div>
					</div>
					
					 <div id="wordPressCovr" class="container-fluid covr">
						<div class="cvrimg">
							<span class="glyphicon glyphicon-tasks"></span>
						</div>
						<div class="cvrbody">
							<h1>WordPress Apps</h1>
							<p>Beneath is a WordPress version of my work portfolio</p>
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
						   <li class="list-group-item list-group-item-warning">
								<a href="vueapp" target="_blank">
									<p  class="sectionTitle">
										<a href="apitest" target="_blank"  data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Vue Javascript App</a>
									</p>
								</a>
								<object data="apitest" height="200" width="300"></object>
								<p>A Vue JS based app that accesses an API to create a Dynamic List converted from a static HMTL page.  Added Paging Function and Select Page Size.<br>GitHub link
								   to Code is here <a href="https://github.com/Rsypertjr/vueapp/tree/vueapp" target="_blank">Vue App Code</a>
								</p>
							</li>
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
								<a href="http://presvote.tk:4200/votes" target="_blank">
									<p  class="sectionTitle">
										<a href="http://presvote.tk:4200/votes" target="_blank" data-toggle="tooltip" data-placement="right"  title="Click for Full Page App!">Angular version of Vote Parser</a>
									</p>
								</a>
								<object data="http://presvote.tk:4200/votes" height="200" width="300"></object>
								<p>Angular used with Bootstrap, JQuery Datatable, JQuery, Node.js, NPM.  Angular utilizes Components, Services, and Routing.<br>
								Here is the code: <a href="https://github.com/Rsypertjr/AngularVoteParser/tree/voteParser" target="_blank">Angular Code</a>
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
							<p>Programming I've done using:<br>Vue Javascript,<br>Express/Node JavaScript,<br>Laravel MVC with Homestead Development Environment,<br>and Angular2 JavaScript with Redux app using Central Store/State management.</p>
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