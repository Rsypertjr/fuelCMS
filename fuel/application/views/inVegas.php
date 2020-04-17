
<script type="text/javascript">
        $(document).ready(function(){
        	 var vacationingPhotos = new Array();
					var localRecreationPhotos = new Array();
					var funInTheParkPhotos = new Array();
					var localAmusementPhotos = new Array();
					var tennisTownPhotos = new Array();
					var headerImages = new Array();
					
					var street = "<?php echo $vars['street']; ?>"; 
				    var sun = "<?php echo $vars['sun']; ?>";
				    var moon = "<?php echo $vars['moon']; ?>";
				    var sun2 = "<?php echo $vars['sun2']; ?>";
				    var birdFly1 = "<?php echo $vars['birdFly1']; ?>";
				    var birdFly2 = "<?php echo $vars['birdFly2']; ?>";
				    var kidsPlaying = "<?php echo $vars['kidsPlaying']; ?>";  
					
			
				    <?php 
				    
				        $config2 = array();
				        $config2['hostname'] = "localhost";
						$config2['username'] = "rlsworks_richard";
						$config2['password'] = "syp3rt";
						$config2['database'] = "fuel_cms";
						$config2['dbdriver'] = "mysqli";
						$config2['dbprefix'] = "";
						$config2['pconnect'] = FALSE;
						$config2['db_debug'] = TRUE;
						$config2['cache_on'] = FALSE;
						$config2['cachedir'] = "";
						$config2['char_set'] = "utf8";
						$config2['dbcollat'] = "utf8_general_ci";
							    
				        $CI =& get_instance();
				    	$CI->load->model('appimages_model','',$config2);
						$CI->appimages_model->initialize();
				    
				        $vacationingPhotos = $CI->appimages_model->get_vacationing();
						 $funInTheParkPhotos = $CI->appimages_model->get_funinthepark();
						 $localRecreationPhotos = $CI->appimages_model->get_localrecreation();
						 $localAmusementPhotos = $CI->appimages_model->get_localamusement();
						 $tennisTownPhotos = $CI->appimages_model->get_tennistown();
				        
				    
				    
				    
						if (isset($vacationingPhotos))
							   foreach($vacationingPhotos as $photo)
									{ ?>
										vacationingPhotos.push("<?php echo img_path($photo->link);?>");
					<?php	} 
							
						if (isset($localRecreationPhotos))
								 foreach($localRecreationPhotos as $photo)
									{ ?>
										localRecreationPhotos.push("<?php echo img_path($photo->link);?>");
					<?php	} 
						if (isset($funInTheParkPhotos))
								 foreach($funInTheParkPhotos as $photo)
									{ ?>
										funInTheParkPhotos.push("<?php echo img_path($photo->link);?>");
					<?php	} 	
						if (isset($localAmusementPhotos))
								 foreach($localAmusementPhotos as $photo)
									{ ?>
										localAmusementPhotos.push("<?php echo img_path($photo->link);?>");
					<?php	} 		
						if (isset($tennisTownPhotos))
								 foreach($tennisTownPhotos as $photo)
									{ ?>
										tennisTownPhotos.push("<?php echo img_path($photo->link);?>");
					<?php	} 	?>
					
					// Apply images to animation
					$('.birdFly1 > img').attr('src',birdFly1);
					$('.birdFly2 > img').attr('src',birdFly2);
					$('.secondbirdFly1 > img').attr('src',birdFly1);
					$('.secondbirdFly2 > img').attr('src',birdFly2);
					$('.thirdbirdFly1 > img').attr('src',birdFly1);
					$('.thirdbirdFly2 > img').attr('src',birdFly2);
				    $('.kidsPlay > img').attr('src',kidsPlaying);
						
					// Apply background image to scene
					$('.scene').css('background-image','url('+ street + ')');
    
					$('.playerBase').css('display','none');
					$('.playerBase2').css('display','block');
					$('.container')
						.animate({top:"+=200"},2000);
					$('.moon').css('opacity','0.0');
					setInterval(function(){
					
							// Sun visibly going across sky	
							$('.sun').html("<img src='"+sun+"' alt='Sun' height='40' width='40'>")
								.animate({opacity:0.7,
										  top:"30"},2500)
								.animate({opacity:0.7,
										  left:"+=90",
										  zoom:"-=50%",
										  top:"-=22"},1500)
								.animate({opacity:0.7
										  },1000)		  
								.animate({opacity:0.7,
										  left:"+=90",
										  zoom:"+=50%",
										  top:"+=22"},1500)
								.animate({opacity:0.0},2500)
								.animate({opacity:0.0},1000)
								.css('display','block');
								
								
                             // Background scene of street
							$('.scene').add('.shade')
								.animate({opacity:0.8},2500)
								.animate({opacity:0.7},1500)
								.animate({opacity:0.7},1000)
								.animate({opacity:0.8},1500)
								.animate({opacity:0.9},2500)
								.animate({opacity:1.0},1000)
								.animate({opacity:0.9},2500)
								.animate({opacity:0.9},1500)
								.animate({opacity:0.9},1000)
								.animate({opacity:0.9},1500)
								.animate({opacity:1.0},2500)
								.animate({opacity:1.0},1000);
							
							
							// Sun invisibly retracing across sky
							$('.sun')
								.animate({opacity:0.0,top:"30"},2500)
								.animate({opacity:0.0,
										  left:"-=90",
										  top:"-=22"},1500)
								.animate({opacity:0.0},1000)		  
								.animate({opacity:0.0,
										  left:"-=90",
										  top:"+=22"},1500)
								.animate({opacity:0.0},2500)
								.animate({opacity:0.0},1000)
								.css('display','block');
								
							// Moon invisibly doing initial trace across sky	
							$('.moon')
								.animate({opacity:0.0,
										  top:"30"},2500)
								.animate({opacity:0.0,
										  left:"+=90",
										  top:"-=22"},1500)
								.animate({opacity:0.0},1000)		  
								.animate({opacity:0.0,
										  left:"+=90",
										  top:"+=22"},1500)
								.animate({opacity:0.0},2500)
								.animate({opacity:0.0},1000);	
								
							// Moon visibly retracing across sky
							$('.moon')
							    .html("<img src='"+moon+"' alt='Moon' height='40' width='40'>")
								.animate({opacity:0.7,
										  top:"30"},2500)
								.animate({opacity:0.7,
										  left:"-=90",
										   zoom:"-=50%",
										  top:"-=22"},1500)
								.animate({opacity:0.7},1000)		  
								.animate({opacity:0.7,
										  left:"-=90",
										   zoom:"+=50%",
										  top:"+=22"},1500)
								.animate({opacity:0.0},2500)
								.animate({opacity:0.0},1000);
	
							$('.kidsPlay')
								.animate({opacity:0.0,
										  left:"+=2",
										  top:"-=2"
										  },2500)
								.animate({opacity:1.0,
										  left:"+=2",
										  top:"-=2"
										  },2500)
								.animate({opacity:1.0,
								          left:"-=2",
										  top:"+=2",
										  },2500)
								
								.animate({opacity:1.0,
										  left:"-=2",
										  top:"+=2"
										  },2500)		  
								.animate({opacity:0.0},1000)
								.animate({opacity:0.0},9000);
		
							
						},50);
						
			        var introMessages = new Array();
					introMessages[0] =  "<p class='clkmess' style='font-size:1.2em;color:green'>FAMILY OPTIONS IN LAS VEGAS</p><br/>" +
										"<p>Finding out options for Family Living in Las Vegas can be a challenge.  The cultural options for family enjoyment are not obvious at first. " +
					                    "But some discovery over the years has provided my family some satifactory options for Good Clean Fun!</p>" +
										"<br/><p style='font-size:1.2em'><span class='clkmess' style='color:green;padding:0px'>SCROLL LEFT&nbsp</span> to Find Out More</p>";

					introMessages[1] = "<p class='clkmess' style='font-size:1.2em;color:green'>LOCAL RECREATION</p><br/>" +
									   "<p>One Discovery is that Las Vegas, NV is a Desert Recreational Area which provides several month's opportunity for " +
									   "hiking climbing, biking, sking, camping, and more in many nearby mountainous areas.  <span class='hlight'><a style='color:brown' href='http://www.redrockcanyonlv.org/redrockcanyon/recreation/'>Redrock Canyon Recreational</a></span> and" +
									   "<span class='hlight'><a style='color:red' href='http://parks.nv.gov/parks/valley-of-fire-state-park/'> Valley of Fire</a></span> provide great exercise and site-seeing " +
									   "during the fairer weather months.  <span class='hlight'><a style='color:green' href='http://www.gomtcharleston.com/'>Mount Charleston</a></span> is best during the hot Vegas mid-summer as you escape 110-115 degrees " +
									   "for 80-90 degrees, only 30 minutes away!  Where you find camping, resort lodging, dining, and more.  Mount Charleston actually has a ski slope, lodges, and slay rides for " +
									   " winter fun!</p>";
					introMessages[2] = "<p class='clkmess'  style='font-size:1.2em;color:green'>VACATIONING</p><br/>" +
									   "Las Vegas is also is a great location to travel away to surrounding states for Vacation and Recreation. " +
					                   "California, Arizona, and Utah have very nice destinations.  My families favorites have been:  <a style='color:red' href='https://disneyland.disney.go.com/'>Disneyland and Disneyland Adventure Parks</a>, " +
									   "<a style='color:green' href='http://www.legoland.com/'>LegoLand</a>, <a style='color:blue' href='http://seaworldparks.com/en/seaworld-sandiego/'>SeaWorld</a>, <a style='color:purple' href='http://www.universalstudioshollywood.com/'>Universal Studios Hollywood</a>, " +
									   "<a style='color:#5F9EA0' href='https://www.knotts.com/'>Knotts Berry Farm</a>, " +
									   "<a style='color:#DAA520' href='http://www.smgov.net/portals/beach/'>Santa Monica State Beach</a>, <a style='color:#800000' href='http://www.balboapark.org/'>Balboa Park</a>, <a style='color:#B0E0E6' href='http://www.catalinachamber.com/'>Catalina Island</a>, " +
									   "<a style='color:#F08080' href='www.californiacruises.com/'>cruises to Mexico</a>," +
									   "with these options being in California.  In Arizona:  the <a style='color:#FF8C00' href='http://phoenixzoo.org/'>Phoenix Zoo</a>," +
									   "the <a style='color:#B0C4DE' href='http://www.azscience.org/'>Arizona Science Center</a>, and the <a style='color:#008B8B' href='http://www.visitsedona.com/'>city of Sedona</a>.  " +
									   "In Utah:  <a style='color:#ADFF2F' href='http://www.nps.gov/zion/index.htm'>Zion National Park</a>, and <a style='color:#000080' href='http://www.nps.gov/brca/index.htm'>Bryce Canyon Nat'l Park</a>, both for outstanding, awe-inspiring site-seeing and hiking!";
					introMessages[3] = "<p class='clkmess' style='font-size:1.2em;color:green'>FUN IN THE PARK</p><br/>" +
									   "Las Vegas also has a beautiful and diverse system of parks and swimming pools within the city.  During the Spring, Summer, and Fall months " +
					                   "Vegas has an abundance of events that include a variety of concert music, food, carnival rides, play events for children, movies, swimming, " +
									   "free prizes and other free stuff.  The events are sponsored by city and private organizations.  They are usually organized for family fun at " +
									   "modest cost.  But on many occassions all (or much) is free!  My kids have grown up enjoying several of these events a year.  Event lists for each " +
									   "can be found weekly in the newspaper, seasonally at the <a style='color:#F4A460' href='http://www.clarkcountynv.gov/Depts/parks/Events/Pages/default.aspx'>Clark County Parks Events website</a>, or you can find many private listings of notices and calendars online " +
									   "(i.e. <a  style='color:#708090' href='http://www.vegas4locals.com/lasvegasevents.html'>Las Vegas 4locals</a>) if you Google Search.";
					introMessages[4] = "<p class='clkmess' style='font-size:1.2em;color:green'>LOCAL AMUSEMENT</p><br/>" +
									   "Las Vegas has a popular set of amusement park and arcade attractions.  <a style='color:#8B0000' href='http://www.chuckecheese.com/'>Chucky E. Cheese's</a> is a combination of restaurant, arcade, and amusement park features that particularly draws parents who are " +
									   "kids at heart, along with their kids. <a style='color:#696969' href='http://www.lvmgp.com/'>Las Vegas Mini Gran Prix</a> has an arcade inside and an amusement park outside that includes one fast go-Kart track, and another faster, larger-scale race car track."; 
					
                    introMessages[5] = "<p class='clkmess' style='font-size:1.2em;color:green'>TENNIS TOWN</p><br/>" +
									   "Las Vegas is also a tennis town with a favorable year-round climate and a great many tennis training facilities that cater to children and adults.  The <a  style='color:#0000FF' href='http://tennislink.usta.com/Dashboard/Main/'>USTA</a> has a strong presence in town with multiple" +
					                   " tournaments hosted monthly at various sites for all levels of players.  The great tennis pro Andre Agassi is from Las Vegas and he has endorsed the <a style='color:#DC143C' href='http://www.darlingtenniscenter.net/'>Amanda and Stacy Darling Tennis Center</a> as one of the finest training facilities in the country.  It is a USTA training facility " +
									   "and is located in the Summerlin Park area of the Las Vegas community";
					
					$('#middleScreen').html(introMessages[0]);
					$('#rightScreenContent').html(introMessages[1]);
					
					 $('#leftPointer').css('opacity','0.0');
					 $('#rightPointer').css('opacity','1.0');

					var indx = 0;
					var numItems = 0;
					var photoset = 0;
					var numEntries = 0;
					
					var photoArr = new Array();	
					$('#leftPointer').click(function()
						{
							 if($(this).css('opacity').toString() == '0')
							    {
						
						
									 $('#rightPointer').css('opacity','0.0');
									 
									
									 numItems = introMessages.length;
									 
									 indx++;
									 photoset = indx;
									 numEntries++; 
									if(photoset == 1)
											photoArr = localRecreationPhotos;
									else if(photoset == 2)
											photoArr = vacationingPhotos;
									else if(photoset == 3)
											photoArr = funInTheParkPhotos;
									else if(photoset == 4)
											photoArr = localAmusementPhotos;
									else if(photoset == 5)
											photoArr = tennisTownPhotos;
									else
											;
									
								
								//	var marginTops = $('.playerBase').css('margin-top');
									
									if(photoArr.length > 0 && photoset<=5)
										{
											$('#middlePhoto').html("<img src='"+photoArr[1]+"' alt='Photo' height='200' width='300'><div id='popBig'>Point to Enlarge Photo</div>");
											$('#rightPhotoContent').html("<img src='"+photoArr[2]+"' alt='Photo' height='200' width='300'>");
											$('#leftPhotoContent').html("<img src='"+photoArr[0]+"' alt='Photo' height='200' width='300'>");
										
										
											$('.playerBase2').css('display','none');
											$('.playerBase').css('opacity','1.0').css('margin-top','34%').stop().fadeIn(500).animate({marginTop:"+=19%"},1000);
												
										}
									else if(photoset>=6)
										{
											$('.playerBase').css('display','none');
											$('.playerBase2').css('display','block');
										}
									  
									 if(indx <= 5)
										{
											 $('#leftScreenContent').html(introMessages[indx-1]);
											 if((indx) <= numItems-1)
												{
												if(indx == 0)
													$('#middleScreen').css('color','brown');
												else
													$('#middleScreen').css('color','black');
													
												$('#middleScreen').html(introMessages[indx]);
																		
												// Put focus on first link in middleScreen	
												$("#middleScreen a").first().focus();
												
												 // Remove right scroll symbol
												 if(indx == 5)
														$('#leftPointer').css('opacity','1.0');
														
												
												if((indx+1) <= numItems-1)
													$('#rightScreenContent').html(introMessages[indx+1]);
												else
													$('#rightScreenContent').html('');
													
												}
											 else if((indx)>(numItems-1))
												{
													$('#middleScreen').html('');
													$('#leftPointer').css('background-color','#4D4D4D');
													$('#rightPointer').css('opacity','0.0');
													indx = numItems;
												}
										}		
							
					
								}
							
							
						
						});
					
					$('#rightPointer').click(function()
						{
						  if($(this).css('opacity').toString() == '0')
							{
										 $('#leftPointer').css('opacity','0.0');
										 
										
										 
										 numItems = introMessages.length;
										 
										 indx--;	
										 photoset = indx;
										 
										if(photoset == 1)
												photoArr = localRecreationPhotos;
										else if(photoset == 2)
												photoArr = vacationingPhotos;
										else if(photoset == 3)
												photoArr = funInTheParkPhotos;
										else if(photoset == 4)
												photoArr = localAmusementPhotos;
										else if(photoset == 5)
												photoArr = tennisTownPhotos;
										else 
												;
									
										if(photoArr.length > 0 && photoset > 0)
											{
											
												$('#middlePhoto').html("<img src='"+photoArr[1]+"' alt='Photo' height='200' width='300'><div id='popBig'>Point to Enlarge Photo</div>");
												$('#leftPhotoContent').html("<img src='"+photoArr[0]+"' alt='Photo' height='200' width='300'>");
												$('#rightPhotoContent').html("<img src='"+photoArr[2]+"' alt='Photo' height='200' width='300'>");
																			
																
												
												$('.playerBase2').css('display','none');
												$('.playerBase').css('opacity','1.0').css('margin-top','34%').stop().fadeIn(500).animate({marginTop:"+=19%"},1000);
											 

											}
										else if(photoset <= 0)
											{
												$('.playerBase').css('display','none');
												$('.playerBase2').css('display','block');
											}
										
										 
										 $('#rightScreenContent').html(introMessages[indx+1]);
										 if((indx) >= 0)
											{
											if(indx == 0)
												$('#middleScreen').css('color','brown');
											else
												$('#middleScreen').css('color','black');
												
											$('#middleScreen').html(introMessages[indx]);
											// Put focus on first link in middleScreen	
											$("#middleScreen a").first().focus();
											
											 // Remove right scroll symbol
											 if(indx == 0)
													$('#rightPointer').css('opacity','1.0');
													
											
											if((indx-1) >= 0)
												$('#leftScreenContent').html(introMessages[indx-1]);
											else
												$('#leftScreenContent').html('');
											
											}
										 else if((indx) < 0)
											{
												$('#middleScreen').html('');
												$('#rightPointer').css('background-color','#4D4D4D');
												$('#leftPointer').css('opacity','0.0');
												indx = -1;
											}
										
					
						
							}
						
						});
						
					
					
						
						
					var indx2 = 0;
					$('#rightPhotoPointer').click(function()
						{
					
						 numItems = photoArr.length;
						 photoset = indx2;
						 var scroll = false;
						 indx2--;
						 if((indx2) < 0)
						    {
								indx2 = numItems-1;
								scroll = true;
							}
						
							$('#leftPhotoContent').html("<img src='"+photoArr[indx2]+"' alt='Photo' height='200' width='300'>");
							var indx3 = indx2;
							if(scroll == true)
								indx3 = -1;
							$('#middlePhoto').html("<img src='"+photoArr[indx3+1]+"' alt='Photo' height='200' width='300'><div id='popBig'>Point to Enlarge Photo</div>");
							var indx4 = indx3;
							if(indx4 == numItems-2)
								indx4 = -2;
							$('#rightPhotoContent').html("<img src='"+photoArr[indx4+2]+"' alt='Photo' height='200' width='300'>");
						
						});
					
					
						
					$('#leftPhotoPointer').click(function()
						{	
							 numItems = photoArr.length;
							 photoset = indx2;
							 indx2++;
							 var scroll = false;
							 var scroll2 = false;
							 if((indx2+2) > (numItems-1))
								scroll = true;
								
							if((indx2+1) > (numItems-1))
								{
									scroll2 = true;
									scroll = false;
								}
								
							$('#leftPhotoContent').html("<img src='"+photoArr[indx2]+"' alt='Photo' height='200' width='300'>");
							var indx3 = indx2;
							if(scroll2 == true)
								{
								indx3 = -1;
								indx2 = -1;
								}
								
							$('#middlePhoto').html("<img src='"+photoArr[indx3+1]+"' alt='Photo' height='200' width='300'><div id='popBig'>Point to Enlarge Photo</div>");
							var indx4 = indx3;
							if(scroll == true)
								indx4 = -2;
							$('#rightPhotoContent').html("<img src='"+photoArr[indx4+2]+"' alt='Photo' height='200' width='300'>");
						
						});
						
						
						setInterval(function(){
									
									$('.clkmess')	
										.animate({opacity:'0.5'},500)
										.animate({opacity:'1.0'},500);
										
									$('#popBig')	
										.animate({opacity:'0.8'},1500)
										.animate({opacity:'0.0'},500)
										.animate({opacity:'0.0'},4000);
										
									$('#headr').css('display','block')
										.animate({opacity:1.0},1000,function(){$(this).css('background-color','tan');})
										.animate({opacity:1.0},1000,function(){$(this).css('background-color','beige');});
										
									$('#headr')	
										.animate({opacity:1.0},1000,function(){$(this).css('border','15px solid #333333');})
										.animate({opacity:1.0},1000,function(){$(this).css('border','15px solid black');});
										
									$('#headr')	
										.animate({opacity:1.0},1000,function(){$(this).css('color','green');})
										.animate({opacity:1.0},1000,function(){$(this).css('color','brown');});
								},25);
						
						
						$('#middlePhoto').mouseover(function()
							{
								$('#middleScreen').css('top','-180%');		
								$(this).mouseleave(function()
									{
										$('#middleScreen').css('top','-80%');	
										$('#popBig').css('display','block');
									
									});
									
								$('#popBig').css('display','none');
										
							});
						
				      
					//$('#hmenuContainer').css('zoom','140%');		
        	
        });
       
		function JQFunctions()
				{
					
				
				
				}
				
				
				
				
			
	</script>

    <div id="llvOutFrame"  class="viewer" >
		<div id="llvContainer">
			<div class="topWindow">
				
				<div class="scene"><span class="shade"></span>
						<div id="headr">Discovering Good Living In Las Vegas</div>
						  <div class="birdFly1">
							<img src="" alt="FlyingBird1" height="73" width="77">
						  </div>
						  <div class="birdFly2">
							<img src="" alt="FlyingBird2" height="73" width="77">
						  </div>
						  <div class="secondbirdFly1">
							<img src="" alt="FlyingBird1" height="73" width="77">
						  </div>
						  <div class="secondbirdFly2">
							<img src="" alt="FlyingBird2" height="73" width="77">
						  </div>
						  <div class="thirdbirdFly1">
							<img src="" alt="FlyingBird1" height="73" width="77">
						  </div>
						  <div class="thirdbirdFly2">
							<img src="" alt="FlyingBird2" height="73" width="77">
						  </div>
						  <div class="sun">
							
								<div class="street">
									<div class="kidsPlay"></div>
								</div>
							
						  </div>
						  <div class="moon">
						  </div>
						  <div class="kidsPlay">
							<img src="" alt="Kids Playing" height="225" width="225">
						  </div>
						  <div id="cloudContainer">
							  <div id="clouds">
								<div class="cloud x1"></div>
								<div class="cloud x2"></div>
								<div class="cloud x3"></div>
								<div class="cloud x4"></div>
								<div class="cloud x5"></div>
							  </div>
						  </div>
				
						  
					
				</div>
				
				<div class="container">
					<div>
						<div class="displayer">
							<div id="leftPointer"></div>
							<div id="leftScreen"><div id="leftScreenContent"></div></div>
							<div id="middleScreen"></div>
							<div id="rightScreen"><div id="rightScreenContent"></div></div>
							<div id="rightPointer"></div>
							<div class="playerBase2"></div>
							<div class="playerBase">
									<div id="leftPhotoPointer"></div>
									<div id="leftPhoto"><div id="leftPhotoContent"></div></div>
									<div id="middlePhoto">
										<div id="popBig">Point to Enlarge Photo</div>
									</div>
									<div id="rightPhoto"><div id="rightPhotoContent"></div></div>
									<div id="rightPhotoPointer"></div>
								
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>