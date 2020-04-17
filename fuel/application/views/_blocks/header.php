<!DOCTYPE html>
<html lang="en">
    <head>
	   <meta charset="UTF-8">
       <meta http-equiv="content-type" content="text/html;charset=UTF-8">
       
       <meta charset="utf-8">
	 	<title>
			<?php 
				if (!empty($is_blog)) :
					echo $CI->fuel->blog->page_title($page_title, ' : ', 'right');
				else:
					echo fuel_var('page_title', '');
				endif;
			?>
		</title>
	
		<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
		<meta name="description" content="<?php echo fuel_var('meta_description')?>">
	
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
		<?php
			//echo css('main').css($css);
	
			if (!empty($is_blog)):
				echo $CI->fuel->blog->header();
			endif;
		?>
		<?=jquery()?>
	       
     
	
		<link href = "<?php echo $vars['headerCSS']; ?>" rel="stylesheet" type="text/css" />
		<link href = "<?php echo $vars['footerCSS']; ?>" rel="stylesheet" type="text/css" />
		
		<!-- Custom ThemeRoller files -- excite bike  -->
  		<link href="<?php echo $vars['jqUiCSS']; ?>" rel="stylesheet">
		<script src="<?php echo $vars['jqJS']; ?>"></script>
		<script src="<?php echo $vars['jqUiJS']; ?>"></script>

		
		

		<?php $page =  $vars['whichPage'];
		     
		      if($page == "inVegas"){ ?>
				<link href = "<?php echo $vars['livingInLVCSS'];?>" rel="stylesheet" type="text/css" />
				<title>Living in Vegas</title>
		<?php 
		       $pageTitle = "Living in Las Vegas";
		       } ?>
		
		<?php $page =  $vars['whichPage'];
			    if($page == "front"){ ?>
				<link href = "<?php echo $vars['frontCSS'];?>" rel="stylesheet" type="text/css" />
				<title>Portfolio Front</title>
		<?php 
			    $pageTitle = "Portfolio Front Page";	 
		        } ?>	
		
		<?php   $page = $vars['whichPage'];
			    if($page == "amino"){?>
				<link href = "<?php echo $vars['miniMotifCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Input Form for Minimotif Search</title>
		<?php 
		        $pageTitle = "Protein Minimotif Search Program";
		        } ?>		
		<?php   $page = $vars['whichPage'];
			    if($page == "orominer1"){?>
				<link href = "<?php echo $vars['orominer1CSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Orominer Program</title>
		<?php 
		        $pageTitle = "Orominer Program"; 
		        } ?>	
		
		<?php   $page = $vars['whichPage'];
			    if($page == "orominer2"){?>
				<link href = "<?php echo $vars['orominer2CSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Orominer with Histology</title>	
		<?php 
		        $pageTitle = "Orominer with Histology Program";
		        } ?>
		
		
		<?php   $page = $vars['whichPage'];
			    if($page == "othello"){?>
				<link href = "<?php echo $vars['othelloCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Othello Game</title>	
		<?php   
		        $pageTitle = "Othello Game"; 
		        } ?>
		
		<?php   $page = $vars['whichPage'];
			    if($page == "techWriter"){?>
				<link href = "<?php echo $vars['techWriterCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Technical Writing</title>	
		<?php 
		        $pageTitle = "Technical Writing"; 
		        } ?>
		        
		<?php   $page = $vars['whichPage']; 
				if($page == "resumes"){?>
				<link href = "<?php echo $vars['resumesCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Resume Viewing</title>
				
		<?php   
		        $pageTitle = "Resume Viewing";  
		        } ?>
		        
		<?php   $page = $vars['whichPage'];
			    if($page == "whitePaper"){?>
				<link href = "<?php echo $vars['showPDFCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>White Paper</title>	
		<?php   
		        $pageTitle = "Technical White Paper";
		        } ?>
		        
		<?php   $page = $vars['whichPage'];
			    if($page == "engSpec"){?>
				<link href = "<?php echo $vars['showPDFCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Engineering Specification</title>	
		<?php  
		        $pageTitle = "Engineering Process Specification";
		        } ?>
		        
		<?php   $page = $vars['whichPage'];
			    if($page == "GraingerABCDE"){?>
				<link href = "<?php echo $vars['showPDFCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Grainger ABCDE Series B</title>	
		<?php  
		        $pageTitle = "Grainger ABCDE Series B Manual";
		        } ?>
		        
		<?php   $page = $vars['whichPage'];
			    if($page == "GraingerCDE"){?>
				<link href = "<?php echo $vars['showPDFCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Grainger CDE</title>	
		<?php 
		        $pageTitle = "Grainger CDE Manual"; 
				} ?>
				
		<?php   $page = $vars['whichPage'];
			    if($page == "mecProductManual"){?>
				<link href = "<?php echo $vars['showPDFCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>MEC Product Manual VT 1.6</title>	
		<?php   
		        $pageTitle = "MEC Product Manual VT 1.6";
		        } ?>
		        
		<?php   $page = $vars['whichPage'];
			    if($page == "codeDev"){?>
				<link href = "<?php echo $vars['codeDevCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Code Development Specification</title>	
		<?php   
		        $pageTitle = "Code Development Technical Specification";
				} ?>
				
		<?php   $page = $vars['whichPage'];
				if($page == "emailForm"){?>
				<link href = "<?php echo $vars['emailFormCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Making Contact</title>	
		<?php  
		        $pageTitle = "Making Contact With Me"; 
		        } ?>
		       
		<?php   $page = $vars['whichPage'];
				if($page == "webTech"){?>
				<link href = "<?php echo $vars['webTechCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Web Page Technologies Used</title>	
		<?php 
		        $pageTitle = "Web Page Technologies Used";
				} ?>
				
		<?php   $page = $vars['whichPage'];
				if($page == "viewPDFResume"){?>
				<link href = "<?php echo $vars['showPDFCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Show PDF Resume</title>	
		<?php 
		        $pageTitle = "Show PDF Resume";
				} ?>
		<?php   if($vars['hfSwitch'] == "on"){?>
				<link href = "<?php echo $vars['mobileSwitchCSS']; ?>" rel="stylesheet" type="text/css" />
				<title>Mobile Portfolio</title>
		<?php 
		        $pageTitle = "Mobile Portfolio using JQuery Mobile"; 
				} ?>
	
	   
	    <?php
		            
				$slugs = array('about','angular2a','caribCater','caribStore','codeStore','codetech','computeEng','engSpec','fuelLogin','fuelGIT',
				               'frontPage','gitRepo','GraingerABCDE','GraingerCDE','inVegas','laravelMVC','maintHeader', 'makeContact',
				               'mecProductManual','miniMotif','mobile','oroHist','orominer','othello','othelloAjax',
				               'profile','resume','resumeButton','rubyRails','software','techWritingButton',
				               'techWritingHeader','vegasFun','webTech','whitePaper','wpPortfolio');
			    $GLOBALS['menuOpts'] = array();
			    $GLOBALS['ind'] = 0;
			    $i = 0;
			    foreach($slugs as $slug){
						    $menuOpts[$i] = fuel_model('headMenuOpts',array('find' => 'one', 'where' => array('slug' => $slug)));
						    //echo $menuOpts[$i]->slug.'<br>';
			                $i++;
			   }
			
        ?>
	   
		
		<style>	
		 	
		</style>
		
		<script type="text/javascript">
		var viewer = 0;
		var pageTitleStr =  "";
		var pageT =  "";
		$(document).ready(function()
			{
					 var title = "<?php echo $pageTitle; ?>";
					 pageTitleStr = title;
					  
					//Set up Blinking Button and span
					setInterval(function(){
										$('#clickdiv1')	
											.animate({opacity:'0.5'},500)
											.animate({opacity:'1.0'},500);
										$('.clkmess')	
											.animate({opacity:'0.5'},500)
											.animate({opacity:'1.0'},500);
									},25);

					
                   // Browser Capatability for background images
				   var  httpAgent = <?php echo json_encode($_SERVER['HTTP_USER_AGENT']); ?>;
				   var chrome = httpAgent.search("Chrome");
				   var firefox = httpAgent.search("Firefox");
				   
				  if((chrome < 0))  // For Other than Google Chrome
						{
								$('#outframe, #outframebg').css('height','75em');
						
						}
				  if((chrome < 0) && (firefox < 0)) // Exclusively For Internet Explorer
						{
								$('#outframe, #outframebg').css('height','45em');
						
						}
				  if(firefox >= 0)  // For Firefox
						{
							    $('#footContainer').css('font-size','1.5em');
						
						}
				 	
				 /**************************  Manage Site Descriptor ************************************/
				     /**************************  Manage Site Descriptor ************************************/
				      var mobileUrl = "<?php echo $mobile; ?>";  //for Mobile Portfolio
				      $('#menuDescription').show().css('width','80%').css('height','auto').css('margin','2em 0em 0em 10%').css('padding','1em');
				      $('#lvImgDiv').hide();
				      $('#catchMenu').hide();
				      $('#imageHolder').hide();
				      $('#bDiv').hide();
				      $('#textDv').css('width','100%').css('padding','0em').css('margin','0em');
				      $('#bText').css('padding','0em').css('height','96%').css('margin','0em');
				
					  $('#menuDescription,#textDv,#bText').css('font-size','1.0em').css('left','0em').css('text-align','left').css('float','left');
			          $('#descrip').css('position','relative')
			                             .css('color','black') 
					                     .css('text-align','left')
										 .css('padding','0em')
										 .css('margin','0em')
										 .css('height','10em')
										 .css('width','100%')
										 .css('font-size','1.1em')
										 .css('z-index','750')
										 .css('display','block');
										 
										 
										 $('#bText').html('<p class="descHdr">Site Description</p><p>Hover over a Menu button to see a description Here of the Link contents.  This Site has been recently optimized to be more Responsive across devices in terms of CSS formatting, But not in Touch Events.'+
										       '&nbsp;&nbsp;See <a href="'+mobileUrl+'" style="color:blue">Mobile Web Portfolio</a> under the Software Development Tab for a mobile portfolio version developed with JQuery Mobile.'+
										       '&nbsp;&nbsp;The inline header menu above works better for Desktops and the vertical menu below works better for Mobile devices.</p>');
						
			 
				    $('#headbar').css('height','24em');
			        pageT = "<?php echo $pageTitle; ?>";
			     
				    $('#headbar').on('mouseleave',function(){
				    	   
						     $('#headbar').css('height','24em');
						     $('#catchMenu').hide();
				    	     $('#imageHolder').hide();
				    	     $('#lvImgDiv').hide();
				    	     $('#bDiv').hide();
				    	     $('#descrip,#textDv').css('width','96%');
				    	     
							 //$("[id^='btn']").children('div').css('display','none');
		        		     var el = $('#menuDescription').find('p#others').text();
		        		     if(pageTitleStr != ""){
		        		     	 
						           if(pageTitleStr != "Portfolio Front Page"){
						           	
						           	$('#menuDescription') 
						           		.css('position','relative')
						           		.css('height','1em')
						           		.css('padding','auto')
							           	.css('text-align','center')
		      							.css('color','blue')
		      							.css('font-size','1.5em'); 
		      							
		      							$('#descrip').css('text-align','center').css('height','100%').css('left','0em');
	      								$('#bText').css('position','relative').css('width','100%').css('height','100%').css('text-align','center');
	      							    $('#descrip,#textDv,#bText').css('margin','0em').css('padding','0em').css('font-size','1em');
							      	 if(el == '') 
							           	$('#bText').text(pageTitleStr);	 
								     else if(el != ''){
								        pageTitleStr = el;
								        pageT = el;
						      	    	$('#bText').text(pageTitleStr);	
						            }
					              }
					        	}
					         else if(pageTitleStr == ''){
					         	
					         	  $('#catchMenu').hide();
						          if(pageT != "Portfolio Front Page"){
						          	
						          	$('#menuDescription') 
							          	.css('position','relative')
						           		.css('height','1em')
						           		.css('padding','auto')
							           	.css('text-align','left')
		      							.css('color','blue')
		      							.css('font-size','1.3em'); 
		      					
		      						$('#descrip').css('text-align','center').css('height','100%').css('left','0em');
	      							$('#bText').css('position','relative').css('width','100%').css('height','100%').css('text-align','center');
	      							$('#descrip, #textDv, #bText').css('margin','0em').css('padding','0em').css('font-size','1em');
	      							
							      	 if(el == '') 
							           	$('#menuDescription #descrip #bText').text(pageT); 
					                		} 
				                     else	{
				                	     $('#catchMenu').css('visibility','hidden');
				                	     $('#catchMenu').css('display','none');
				                	     $('#bDiv').hide();
									     $('#textDv').css('width','100%').css('padding','0em').css('margin','0em');
									     $('#bText').css('padding','0em').css('height','96%').css('margin','0em');
				                	     
				                	     $('#menuDescription').css('width','80%').css('height','auto').css('text-align','left').css('padding','1em');
				                	     $('#menuDescription, #textDiv, #descrip').css('text-align','left').css('font-size','1.0em').css('left','0em').css('text-align','left').css('float','left');
				                	     
									     $('#descrip')
									    			 .css('position','relative')
									                 .css('display','block')
									    			 .css('height','10em')
								     				 .css('color','black') 
								                     .css('text-align','left')
													 .css('padding','0em')
													 .css('left','0em')
													 .css('margin','0em')
													 .css('width','100%');
													 
													 
										$('#bText').html('<p class="descHdr">Site Description</p><p>Hover over a Menu button to see a description Here of the Link contents.  This Site has been recently optimized to be more Responsive across devices in terms of CSS formatting, But not in Touch Events.'+
													       '&nbsp;&nbsp;See <a href="'+mobileUrl+'" style="color:blue">Mobile Web Portfolio</a> under the Software Development Tab for a mobile portfolio version developed with JQuery Mobile.'+
													       '&nbsp;&nbsp;The inline header menu above works better for Desktops and the vertical menu below works better for Mobile devices.</p><br>').css('margin','0em'); 
											       
											       
									    $('#headbar').css('height','26em');		       
								              
								   }  
					         }
									    
					      
			    		 });
			   	 
				   $('#menuDescription').find('a').mouseover(function(){
				   			$(this).css('color','grey');
				   			$(this).mouseleave(function(){
				   				$(this).css('color','green');
				   			});
				      });	
				 
		
				
			        $('.bCon').mouseenter(function(){
						$('.bCon>div').children().css('display','block');
					});
				 			
		/********************** End Manage Site Descriptor ***********************************************************************/		
		
	  
		 $('#arrowImg > img').attr('src',imagePath);
		
		
		/********************** HEADER IMAGES SECTION **************************************************************************/		 			
					        // Desktop Header Images
						
						
						
							var upArrow =  "<?php echo $vars['upArrow']; ?>";
							var laravelMVCImage =  "<?php echo $vars['laravelMVC']; ?>";
						
						
							var loaderImage =  "<?php echo $vars['spiral']; ?>";
							var mhImage1 =  "<?php echo $vars['worksImg']; ?>";
							var mhImage2 =  "<?php echo $vars['mechEngImage2']; ?>";
							var mhImage3 =  "<?php echo $vars['topLabel']; ?>";
							var mhImage4 =  "<?php echo $vars['engImg']; ?>";
							var mhImage5 =  "<?php echo $vars['compSciImage']; ?>";
							var mhImage6 =  "<?php echo $vars['mathhonorimg']; ?>";
							var mhImage7 =  "<?php echo $vars['procprojengimg']; ?>";
							var mhImage8 =  "<?php echo $vars['technicalwritingimage']; ?>";
							
				        // GET HEADER IMAGES for DESKTOP and MOBILE
						var hfSwitch = '<?php echo $vars['hfSwitch']; ?>';
						var pageTitleStr =  "";
				
					 
					      // Mobile Header Image Variables
					      var mhImages = new Array();
						  mhImages[0] = mhImage2;
						  mhImages[1] = mhImage3;
						  mhImages[2] = mhImage5;
						  mhImages[3] = mhImage6;
						  mhImages[4] = mhImage7;
						  mhImages[5] = mhImage8;
						  
		
			/***************************** MOBILE APP HEADER DISPLAY CODE ***************************************************************************/
						  
						  var viewer = 0;
						  //alert(hfSwitch);
					      var mobileAppHeaderAdjust = hfSwitch;
					      if(mobileAppHeaderAdjust == 'on')   // MOBILE APP
						 	{
								$('#headbar').css('opacity','0.0').css('zoom','1%').css('display','none');
								$('#footContainer').css('opacity','0.0').css('zoom','1%').css('display','none');
								$('.sys_id2').css('font-size','1em');
							
								
								// Adjust Mobile CSS settings per Page
								var whichPage = '<?php echo $page; ?>';
								if(whichPage == 'newOrominer')
									{
										//$('html').css('zoom','45%');
										$('#protitle').css('margin','auto');
										//$('#positDiv img').css('zoom','70%');
									
									}
									
								
								else if(whichPage == 'orominerHisto')
									{
										//$('html').css('zoom','60%');
										$('#outframe').css('margin','auto');
										
									}
									
							    else if(whichPage == 'othello')
									{
										//$('html').css('zoom','60%');
										//$('#oframe').css('margin-right','20%');
										
									}
									
								else if(whichPage == 'emailForm')
									{
									
									}
								
								
								
								$('#llvOutFrame').add('#mmContainer').css('zoom','75%');
							    $('body').prepend('<div id="pGraphic"><div id="positDiv"><h2>RLS Career Porfolio</h2><img src="'+ "<?php echo base_url('images/procprojengimg.jpg'); ?>"+'"/></div></div>');
								if(whichPage == 'newOrominer' || whichPage == 'orominerHisto' || whichPage == 'othello')
									{
										//$('#pGraphic').css('height','35em').css('margin-bottom','0.5em');
										$('#positDiv h2').css('font-size','3.5em');
									}
									
						        // Mobile Header Animation
								var i = 0;
								var mhImg = mhImage2;
								setInterval(function(){
										mhImg = mhImages[i];
										
										$('#pGraphic #positDiv').html('');	
										$('#pGraphic #positDiv').append('<h2>RLS Career Porfolio</h2><img src="'+mhImg+'"/>').fadeIn(1000);	
										$('#positDiv h2').css('font-size','3.5em');
										i++;
										if(i>(mhImages.length-1)) i = 0;	
									},3000);
									
							
								}
						 else if(mobileAppHeaderAdjust == 'off')   // DESKTOP APP
								{
									$('#headbar').css('opacity','1.0');
									$('#footContainer').css('opacity','1.0');
									
								}
								
						$('#headbar').mouseleave(
							function()
								{
									$('.aUl').css('display','none');
								});
								
				/******************* END MOBILE APP HEADER DISPLAY CODE *****************************************************************************************/
								
		
								
						/******************* HEADER BUTTON AND JQUERY UI CODE *********************************************************************************/		
										
								$('#btn1 button').button({
									icons: {
												primary: 'ui-icon-home'
										   }
									 });
									 
								$('#btn2 button,#btn3 button,#btn4 button,#btn5 button,#btn6 button').button({
									icons: {
												primary: 'ui-icon-locked'
										   }
									 });
								
							
								$('button').on('mouseenter',function()
									{
										var $thisButton = $(this);
										
										$('#twLi1').find('.aUl2').css('display','none'); 
										$('#twLi1').css('color','orange');
										$thisButton.css('border-style','none')
										           .parent()
											       .siblings()
												   .find('.aUl').css('display','none');
										$thisButton.parent()
													.siblings()	
												    .find('span.ui-icon-unlocked')
													   .removeClass('ui-icon-unlocked')
													   .addClass('ui-icon-locked');
										$thisButton.siblings('.aUl:first')
												   .css('border','none')
												   .css('display','block')
										           .each(function(){
														var $thisUl1 = $(this);
														$thisUl1.css('display','block')
															.fadeIn(1000)
															.css('opacity','1.0')
															.find('#triggerDiv .aLi, #triggerDiv #twLi1')
															.each(function()
																{
																var $thisLi = $(this);
																$thisLi
																//.css('color','white')
																.on('mouseenter',function()
																	{
																		$(this).find('.aUl,.aUl2').css('display','block').css('color','white'); 
																		$(this)//.addClass('ui-state-active')
																			   .css('color','blue'); 
																        $('#twLi1').css('color','orange');
																        $('.aUl2:nth-child(even)').css('color','white');
																	    $('.aUl2:nth-child(odd)').css('color','orange'); 
																
															
																	})
																.on('mouseleave',function()
																	 {
																		$(this).find('ul').css('display','none');
																		$(this).find('.aUl,.aUl2').css('display','none'); 
																		$(this).removeClass('ui-state-active');
																		//$(this).css('color','yellow');	
																		$(this).parent().find('.aLi:nth-child(even)').css('color','white');
																		$(this).parent().find('.aLi:nth-child(odd)').css('color','orange');
																   
																	 })
																})		// end of each $thisLi			
																.find('.aUl2')
																.each(function()
																		{
																		  var $thisUl2 = $(this);
																		  $thisUl2.on('mouseenter',function()
																				    {
																						$(this).addClass('ui-state-active')
																					   .css('color','blue')
																					   .css('display','block'); 
																				
																				  })	
																		        .on('mouseleave',function()
																				     {
																				 	  
																						$(this).removeClass('ui-state-active')
																							.css('color','white'); 
																			
																			    	  });
																		});  //end of find each $thisUl2
													});  // end of find each thisUl1		

							$('button .aUl .aLi .aUl2').css('display','none'); 
							// button state, color and list color
							$thisButton.addClass('ui-state-active')
									   .addClass('ui-state-focus')
									   .css('color','blue')
									   .find('.aUl')
									   .each(function()
											{
												$(this).css('color','white');
											});
								   
							
							var x = 0
							$thisButton.click(function(e)
							{
							
								if(x == 1)
									{
										$(this)
										   .find('span.ui-icon-locked')
										   .removeClass('ui-icon-locked')
										   .addClass('ui-icon-unlocked'); 
										$(this)
											.find('.aUl')
											.each(function()
												{
													$(this).css('display','block')
													$(this).css('color','white')
													$(this).fadeIn(1000).css('opacity','1.0');
												});
								
								
										$('button .aUl .aLi .aUl').css('display','none'); 
										$(this).addClass('ui-state-active')
											   .addClass('ui-state-focus');
										x = 0;
									}else{
										$(this).find('.aUl')
											   .each(function()
													{
													   $(this).css('display','none').fadeOut(2000)
													   $(this).css('opacity','0.0');
													});
										$(this).removeClass('ui-state-active')
											   .removeClass('ui-state-focus')
											   .find('span.ui-icon-unlocked')
												   .removeClass('ui-icon-unlocked')
												   .addClass('ui-icon-locked');
												   
										x = 1;
										}
										e.preventDefault();
							});
								   
							//unlock icon on mouse enter	   
							$thisButton.find('span.ui-icon-locked')
									   .removeClass('ui-icon-locked')
									   .addClass('ui-icon-unlocked');
						});   // end of each $thisButton		
				

					$('button').mouseleave(function()
						{
							$(this).css('color','white')
								   .css('border','2px solid white');
						});
						
			//Software Development Menu in Graphic Display	
					$('#triggerDiv #btn3').on('mouseenter',function(){ 
							 
							 $('#triggerDiv #sdUl1').css('display','none');
						     $('#imageHolder').show();
						     $('#menuDescription').css('padding','1.0em');
						     $('#textDv').css('width','65%').css('float','left').css('margin','0em');
						     $('#bText').css('width','100%');
						    
						     var el = $(this).find('#sdUl1').css('display','none').css('margin','0em 0em 0em 0em')
								                    .css('float','right').css('width','auto').css('height','98%')
								                    .css('position','relative').css('font-size','0.75em')
								                    .css('background-color','#adb7c1').css('padding','0.25em 0em 0.5em 1.25em');
					
							 el.hide();
					
		                     if(!$('#catchMenu #btn3').length){
								   el.find('.aLi').css('background-color','lightgray').css('width','46%');
								  
					
								   $('#catchMenu').html('')
												  .css('width','42%').css('height','98%')
												  .css('margin','0.5em 0em 0em 0.5em');
								   $('#catchMenu').append(el.find('.aLi').clone(true).show());
								   $('#catchMenu').find('.aLi').css('padding','3px').css('height','9%')
						                            .css('float','left').css('width','95%')
						                            .css('margin','0.25em')
						                            .parent().css('overflow','auto');
								   el.find('#sdUl1').css('display','none');
		                     }
		                 
					
					});
					
					$('#triggerDiv #btn3').on('mouseover',function(){
					  $('#triggerDiv #sdUl1').css('display','none');	
					  $('#catchMenu').css('display','block');
					     $('#catchMenu #sdUl1').css('display','block'); 
					     $('#catchMenu').css('visibility','visible');
					     $('#menuDescription').css('position','relative')
						     			  	  .css('color','black') 
											  .css('display','block');
										 	  
					      $('#menuDescription #descrip #imageHolder').css('position','relative')
					    							           .css('float','right')
					    							           .css('font-size','0.55em')
					    									   .css('height','50%')
						                                       .css('padding','auto')
						                                       .css('width','22%')
						                                       .css('margin','6% 0% 0% 0%');
									        
						    
					                                        
					      $('#menuDescription #imageHolder img').css('width','75%').css('height','75%').css('margin','1em');
					      if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
					        	 $('#menuDescription #imageHolder img').css('height','90%').css('width','90%').css('margin-top','1em');
					        	 
					      $('#descrip').css('width','55%').css('height','98%').css('left','0em')
					                   .css('float','right').css('padding','0em')
					                   .css('left','0em').css('top','0em')
					                   .css('margin','0em');
					      $('#menuDescription,#descrip,#textDv,#bText').css('text-align','left').css('font-size','1.0em');
						            
					    
					     
					       if($('#catchMenu #btn3').length > 0){
		                     	   
								   //$('#triggerDiv #sdUl1').css('visibility','hidden');
								   $('#triggerDiv #sdUl1').css('display','none');
								   $('#catchMenu #btn3').css('visibility','hidden');
								   $('#catchMenu').append(el.clone(true).show());	
								   $('#catchMenu #btn3').css('visibility','hidden');
								   $('#catchMenu #btn3 #sdUl1').css('visibility','visible');
								   
								   $('#menuDescription').on('mouseleave',function(){
										$(this).css('margin-top','0em').css('opacity','1.0em');
									});
					          }
		                    
					});
					
					
					
			
			
			       	//Technical Writing Menu in Graphic Display	
					$('#triggerDiv #btn4').on('mouseenter',function(){
		                     if(!$('#catchMenu #btn4').length){
								   var el = $(this).find('#twUl1').css('display','none');
								   el.hide();
								   $('#catchMenu').html('').css('transform','scale(1,1)');
								   $('#catchMenu').append(el.clone(true).css('display','block').css('visibility','visible')
								                					    .css('float','right').css('margin-right','0em'))
															                  .css('width','30%').css('height','98%')
															                  .css('font-size','0.90em').css('padding','0em')
															                  .css('margin','-0.5em 0em 0em 0em');	
								   //$('#catchMenu #btn4').add('#catchMenu #btn4 > button').css('padding','0em').css('visibility','hidden');
								   $('#catchMenu #twUl1').css('visibility','visible').css('background-color','#adb7c1').css('position','relative')
								                         .css('padding','1em').css('width','70%').css('height','95%').css('left','-2.5em');
								   $('#catchMenu #twUl1 .aLi').css('width','90%').css('background-color','lightgray')
								                              .css('padding','0.25em').css('margin-bottom','0.5em');
								   $('#catchMenu #twUl1 #twLi1').css('width','90%').css('font-size','1.2em')
								                               .css('padding','0.25em').css('margin-bottom','0.5em').css('background-color','lightgray');
								   $('#catchMenu #twUl1 #twLi1 .aUl2').css('font-size','0.80em');
								   $('#catchMenu #twUl1 #twLi1 #twUl2').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi1 #twUl3').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi1 #twUl4').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi2').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi3').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi4').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
							
								   $('#catchMenu #twUl1 #twLi1').on('mouseover',function(){
				                    	$(this).find('.aUl2').css('display','block');
				                    	$('##menuDescription').css('height','auto');
				                		 });
				                    
								   $('#catchMenu #twUl1 #twLi1').on('mouseleave',function(){
				                    	$(this).find('.aUl2').css('display','none');
				                		 });		  
								   el.find('#twUl1').css('display','none');
		                     }
						});
					
						$('#triggerDiv #btn4').on('mouseover',function(){
						    $('#triggerDiv #twUl1').css('display','none');
						     $('#catchMenu').css('display','block');
						     $('#catchMenu').css('visibility','visible');
						     $('#menuDescription').css('color','black');
						     
						    $('#menuDescription #descrip #imageHolder').css('position','relative')
					    							           .css('float','right')
					    							           .css('font-size','0.55em')
					    									   .css('height','50%')
						                                       .css('padding','auto')
						                                       .css('width','22%')
						                        		       .css('margin','6% 0% 0% 0%');
									        
						    
					                                          
					      $('#menuDescription #imageHolder img').css('width','75%').css('height','75%').css('margin','1em');
					      if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
					        	 $('#menuDescription #imageHolder img').css('height','90%').css('width','90%').css('margin-top','1em');
					        	 
						     $('#descrip').css('width','63%').css('height','98%').css('left','0em')
					                   .css('float','right').css('padding','0em')
					                   .css('margin','0em');
						     $('#textDv').css('width','50%').css('float','left').css('margin','0em');
					         $('#menuDescription,#descrip,#textDv,#bText').css('text-align','left').css('font-size','1.0em');
						     
					
		                     if($('#catchMenu #twUl1').length){
		                     	   
								   //$('#triggerDiv #sdUl1').css('visibility','hidden');
								   $('#triggerDiv #twUl1').css('display','none');
								   $('#catchMenu').append(el.clone(true).css('display','block')).css('padding','0em');
								   $('#catchMenu #twUl1').css('visibility','visible');
						    	   $('#imageHolder').show();
		                     }
		                
					});
			
			       	//Technical Writing Menu in Graphic Display	
					$('#triggerDiv #btn4').on('mouseenter',function(){
		                     if(!$('#catchMenu #btn4').length){
								   var el = $(this).find('#twUl1').css('display','none').css('margin','3em 0em 0em 3em')
								                    .css('transform','scale(1.3,1.3)');;
								   el.hide();
								   $('#catchMenu').html('').css('transform','scale(1,1)');
								   $('#catchMenu').append(el.clone(true).css('display','block').css('visibility','visible')
								                					    .css('float','right').css('margin-right','0em'))
															                  .css('width','30%').css('height','60em')
															                  .css('font-size','0.90em').css('padding','0em')
															                  .css('margin','-0.5em 0em 0em 0em');	
								   //$('#catchMenu #btn4').add('#catchMenu #btn4 > button').css('padding','0em').css('visibility','hidden');
								   $('#catchMenu #twUl1').css('visibility','visible').css('background-color','#adb7c1').css('position','relative')
								                         .css('padding','1em').css('width','70%').css('left','-2.5em');
								   $('#catchMenu #twUl1 .aLi').css('width','90%').css('background-color','lightgray')
								                              .css('padding','0.25em').css('margin-bottom','0.5em');
								   $('#catchMenu #twUl1 #twLi1').css('width','90%').css('font-size','1.2em')
								                               .css('padding','0.25em').css('margin-bottom','0.5em').css('background-color','lightgray');
								   $('#catchMenu #twUl1 #twLi1 .aUl2').css('font-size','0.80em');
								   $('#catchMenu #twUl1 #twLi1 #twUl2').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi1 #twUl3').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi1 #twUl4').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi2').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi3').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi4').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
							
								   $('#catchMenu #twUl1 #twLi1').on('mouseover',function(){
				                    	$(this).find('.aUl2').css('display','block');
				                    	$('##menuDescription').css('height','auto');
				                		 });
				                    
								   $('#catchMenu #twUl1 #twLi1').on('mouseleave',function(){
				                    	$(this).find('.aUl2').css('display','none');
				                		 });		  
								   el.find('#twUl1').css('display','none');
		                     }
						});
					
						$('#triggerDiv #btn4').on('mouseover',function(){
						    $('#triggerDiv #twUl1').css('display','none');
						     $('#catchMenu').css('display','block');
						     $('#catchMenu').css('visibility','visible');
						     $('#menuDescription').css('color','black');
						     
						    $('#menuDescription #descrip #imageHolder').css('position','relative')
					    							           .css('float','right')
					    							           .css('font-size','0.55em')
					    									   .css('height','50%')
						                                       .css('padding','auto')
						                                       .css('width','22%')
						                                       .css('margin','6% 0% 0% 0%');
									        
					                                          
					      $('#menuDescription #imageHolder img').css('width','75%').css('height','75%').css('margin','1em');
					      if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
					        	 $('#menuDescription #imageHolder img').css('height','90%').css('width','90%').css('margin-top','1em');
					        	 
						     $('#descrip').css('width','63%').css('height','98%').css('left','0em')
					                   .css('float','right').css('padding','0em')
					                   .css('margin','0em');
						     $('#textDv').css('width','50%').css('float','left').css('margin','0em');
					         $('#menuDescription,#descrip,#textDv,#bText').css('text-align','left').css('font-size','1.0em');
						     
					
		                     if($('#catchMenu #twUl1').length){
		                     	   
								   //$('#triggerDiv #sdUl1').css('visibility','hidden');
								   $('#triggerDiv #twUl1').css('display','none');
								   $('#catchMenu').append(el.clone(true).css('display','block')).css('padding','0em');
								   $('#catchMenu #twUl1').css('visibility','visible');
						    	   $('#imageHolder').show();
						    	   
						    	   
						    	 
					
		                     }
		                
					});
					
			      
					
					
			        $('#btn4,#btn5,#btn6').on('mouseenter',function(){
			        	  $('#catchMenu').css('display','none');
			        });
			
			
			
									
			/********************* END HEADER BUTTON AND JQUERY UI CODE ******************************************************************/				
							
									
			/*** Generating Header Animations  AND App Selection *******************************************/	
                
                var slug = [];
                var menuTag = [];
				var menuDescriptionHeight = [];
				var menuFontSize = [];
				var menuHTML = [];
				var imageHeader = [];
				var menuImage = [];
				var btnHTML = [];
				var descripHeight = [];
				var menuChoice = [];
				var imageHeight = [];
				var imageWidth = [];
				var imageStyle = [];
				var url1 =  [];
				var url2 =  []; 
				var bannerTitle = [];
				var headHeight = [];
				var extraFunction = [];
				var llvImages = [];
        
              
        		var index = "<?php foreach($menuOpts as $item){?>";
        		
        			slug.push("<?php echo $item->slug; ?>");
        			menuTag.push("<?php echo $item->menuTag; ?>");
        			menuDescriptionHeight.push("<?php echo $item->menuDescriptionHeight; ?>");
        			menuFontSize.push("<?php echo $item->menuFontSize; ?>");
        			menuHTML.push("<?php echo $item->menuHTML; ?>");
        			
        			
        			
        			imageHeader.push("<?php echo $item->imageHeader; ?>");
        			menuImage.push("<?php echo $item->menuImage; ?>");
        			btnHTML.push("<?php echo $item->btnHTML; ?>");
        			
        			
        			descripHeight.push("<?php echo $item->descripHeight; ?>");
        			
        			menuChoice.push("<?php echo $item->menuChoice; ?>");
        				
        			imageHeight.push("<?php echo $item->imageHeight; ?>");
        			
        			imageWidth.push("<?php echo $item->imageWidth; ?>");
        			
        			
        			imageStyle.push("<?php echo $item->imageStyle; ?>");
        			
        			url1.push("<?php echo $item->url1; ?>");
        			url2.push("<?php echo $item->url2; ?>");
        				
        			bannerTitle.push("<?php echo $item->bannerTitle; ?>");
        			headHeight.push("<?php echo $item->headHeight; ?>");
        			
        			extraFunction.push("<?php echo $item->extraFunction; ?>");
        			llvImages.push("<?php echo $item->llvImages; ?>");
        	
        		var index2 = "<?php } ?>";
     
        		
	        
          for(var i=0;i<menuTag.length;i++){
         	   if(extraFunction[i] == 'llv'){
         	   	  
         	   	  var llvImgs = [];
         	   	  llvImages[i] = llvImages[i].split(',');
         	   	  
         	   	  for(var j=0;j<llvImages[i].length;j++){
	         	   	  var siteUrl = "<?php echo site_url(); ?>";
			          siteUrl = siteUrl.replace('FUEL-CMS/','');
			          var imagePath = '"<?php echo img_path("'+ 'vegas/' + llvImages[i][j]  +'"); ?>"';
			          imagePath = imagePath.replace("\"","");
			          imagePath = imagePath.replace("jpg\"","jpg");
			          //alert(imagePath);
			          llvImages[i][j] = imagePath;
			        
         	   	  }
         	   	
         	   }
         	  //alert("here");  
	            headerAnimation(slug[i],menuTag[i],menuDescriptionHeight[i],menuFontSize[i], menuHTML[i], imageHeader[i], menuImage[i],btnHTML[i],
		        	descripHeight[i],menuChoice[i],imageHeight[i],imageWidth[i],imageStyle[i],url1[i],url2[i],bannerTitle[i],headHeight[i],extraFunction[i],llvImages[i]);
        
         }
          
		});   // End of Document Ready
		    

	
  function moveArrow(menuDescriptionHeight,menuFontSize,menuHTML){
  	        $('#catchMenu').hide();
  	        $('#bDiv').hide();
  	        $('#imageHolder').hide();
  	        $('#menuDescription').css('opacity','0.80');
			$('#descrip')
				.css('display','block')
				.css('z-index','200')
				.css('font-size',menuFontSize);
			$('#bText').html(menuHTML);
  }

  
   function laravelMVCExtra(laravelMVCImage){
     	    var el = $('<button id="lavApp1" class="lavApp">App 1</button><button id="lavApp2" class="lavApp">App 2</button><button id="lavApp3" class="lavApp">App 3</button>');
			$('#bDiv').show();					
     	    $('#bDiv').html(el);	
     	    $('#bText').css('height','60%');
			
			var el2 = $('<img src='+laravelMVCImage+'  alt="" height="160" width"187">');
		    $('#imageHolder').html(el2).css('font-size','0.55em');
		    $('#imageHolder').prepend('<h1>Laravel<br>MVC Development</h1>').css('text-align','center').addClass("doSpin");
		 	
		    $('#imageHolder > img').css('position','relative').css('width','80%').css('height','60%').css('margin','1em 0em 0em 0em');
									  							  
		 	
			$('#lavApp1').on('mousedown',function(){
					var url = "laravelApp1";  
				   	window.open(url,'_blank');
			});
			
		
	       	$('#lavApp1').on('mouseenter',function(){
						$('#bText').fadeIn(1000).html('<p class="descHdr">Laravel MVC -- Training</p><p>I was asked to complete Laravel MVC program in application for a jobs.' + 
			' I  learned the following technologies to complete the program in about 2 weeks:  Laravel MVC, Twitter Bootstrap, Active Campaign API, Facebook and GitHub authentication.' + 
			' The program uses Facebook and GitHub authentication and allows a user to create contacts and register them with Active Campaign.</p><div id="gLink" style="color:blue;font-style:italic">A Git Repo of the Code is Here</div>');
			
				$('#gLink').on('mousedown',function(){
					$(this).css('color','gray');
					var url = 'laravelApp1'
					window.open(url,'_blank');
				}).css('cursor','pointer');	
				
				$('#gLink').on('mouseover',function(){
					$(this).css('color','red');
						});
						
				$('#gLink').on('mouseleave',function(){
					$(this).css('color','blue');
						});
					
	
	       	});
	       
	       	$('#lavApp2').on('mouseenter',function(){
					$('#bText').fadeIn(1000).html('<p class="descHdr">Laravel MVC -- Training</p><p>I learned the Homestead development environment' + 
			'&nbsp;which utilizes Vagrant VM Linux Server, from which I deployed the finished application to Heroku.  PhpUnit testing was used to develop this code.&nbsp;&nbsp;</p>' +
			'<p><font color="blue" size="3">Code can be seen in the Git Repository tab above under (laravel-test).</font></p>');
	
			});
        
            $('#lavApp3').on('mouseenter',function(){
					$('#bText').fadeIn(1000).html('<p class="descHdr">Laravel MVC -- Training</p><p>I developed this application using Laravel Homestead Environment' + 
			'&nbsp;for calculating Homeschool grade transcripts for my kids.  This app is located by adding \'/cinp\' to the base url of Application 2.  This application is developed utilizing PHPUnit,'+
			'&nbsp;including Database seeding.&nbsp;&nbsp;</p>' +
			'<p><font color="blue" size="3">This code can be seen in the Git Repository tab above under (laravel-test).</font></p>');
	
			});

			$('#lavApp2').on('mousedown',function(){
					var url = "laravelApp2";  
				    window.open(url,'_blank');
			});
			
			$('#lavApp3').on('mousedown',function(){
					var url = "laravelApp3";  
				   	window.open(url,'_blank');
			});
     }	
			
			

	  function angular2Extra(){ 
	  	    
	  	       var el = $('<button id="angApp3" class="angApp">See App</button><button id="angApp1" class="angApp">Git Repo 1</button><button id="angApp2" class="angApp">Git Repo 2</button>');
			    $('#bDiv').show();	
		        $('#bDiv').html(el);
     	        $('#bText').css('height','60%');
     	        
				$('#angApp1').on('mousedown',function(){
						var url = "angularRepo1";
				      	window.open(url,'_blank');
				});
				
				$('#angApp2').on('mousedown',function(){
						var url = "angularRepo2";
				      	window.open(url,'_blank');
				});
				
				
				$('#angApp3').on('mousedown',function(){
						var url = "angularApp";
				       	window.open(url,'_blank');
				});
				
			
		       	$('#angApp1').on('mouseenter',function(){
						$('#bText').fadeIn(1000).html('<p class="descHdr">Git Repo #1</p><p>Click Here to see Git Repository for this app.</p>');
		       	});		
		       	
		       	$('#angApp2').on('mouseenter',function(){
						$('#bText').fadeIn(1000).html('<p class="descHdr">Git Repo #2</p><p>Click Here to see Git Repository for another version of this app that runs on localhost.&nbsp;&nbsp; '+
						'It also runs json-server on the localhost which emulates an API server with which this app performs REST functions with.</p>');
		       	});	
		       	
		       	$('#angApp3').on('mouseenter',function(){
						$('#bText').fadeIn(1000).html('<p class="descHdr">Angular2 JavaScript with Redux State Container</p><p>Angular2'+
						          '&nbsp;JavaScript with @ngrx Redux Store Container which gives centralized, immutable state management.</p>');
		       	});	
		       	
		       	
		       	A


	  }

 
  function llvExtra(llvImages,menuDescriptionHeight){
  	        $('#catchMenu').hide();
  	        $('#imageHolder').hide();
  	        $('#lvImgDiv').show();
		    var $el = $('<img src="'+llvImages[5]+'" alt="" height="252" width="600"></img>');
		
			$('#descrip').css('display','block')
								 .css('height','20em')
								 .css('width','60%')
								 .css('float','left')
								 .css('padding','0em')
								 .css('margin','0em')
								 .css('left','0em')
								 .css('font-size','1.0em');
								 
			$('#textDv').css('width','38%').css('padding','0em').css('font-size','1.0em').css('margin','0em');
		    $('#bText').html('<p class="descHdr">Living In Vegas</p><p>A link about Las Vegas is below this Button and a Slide Show starts in Just a Moment!</p>')
		               .css('font-size','1.2em').css('width','98%').css('text-align','left').css('margin','0em 0em 0em 0em').css('padding','0em');
		    $('#lvImgDiv').html($el); 
		 	$('.descHdr').css('margin','0em').css('padding','0em');
			$('#menuDescription').css('height',menuDescriptionHeight).css('padding','1em')
								 .css('font-size','1.0em');					 
								 
		    $('#lvImgDiv').css('position','relative').css('float','right').css('left','-5em').css('top','-20em').css('margin','0em')
		    			  .css('opacity','0.85').css('width','40%').css('height','85%')
		    			  .css('padding','auto').css('transform','scale(1,1)');
		    	
		    $('#lvImgDiv img').css('margin','0em').css('float','right').css('width','98%').css('height','98%');			  
			
		    $('#lvImgDiv').addClass('doSpin');
		  
			clearInterval(viewer);
			
				var i = 1;
				var nImgs = llvImages.length-1;
				viewer = setInterval(function(){
							  i++;
							  if(i>nImgs)
								i = 0;
			                
							 $('#descrip').css('display','block');
							 $('#menuDescription img').remove();
							 $('#menuDescription #lvImgDiv').html('<img src="' + llvImages[i] +'" alt="" height="262" width="600"></img>')
								.addClass('doBorder');
								    $('#lvImgDiv').css('position','relative').css('float','right').css('left','-5em').css('top','-20em').css('margin','0em')
		    			        .css('opacity','0.85').css('width','40%').css('height','85%')
			    			    .css('padding','auto').css('transform','scale(1,1)');
		    	
		    			    $('#lvImgDiv img').css('margin','0em').css('float','right').css('width','98%').css('height','98%').fadeOut(250).fadeIn(250);
				}, 4000);  
  }
  	

		  function headerAnimation(slug,menuTag, menuDescriptionHeight, menuFontSize, menuHTML, imageHeader, menuImage, 
             btnHTML, descripHeight,menuChoice,imageHeight,imageWidth,imageStyle,url1='',url2='',
             bannerTitle='',headHeight='', extraFunction='',llvImages=''){
      			$(menuTag)	
					.on('mouseenter',function()
						{
							$(this).focus();	
						   //alert(slug);
						  
  	        				$('#menuDescription').css('opacity','1.0');	
							$('#catchMenu').show();
  	        				$('#imageHolder').show();
  	        				$('#lvImgDiv').hide();
						    $('#bDiv').hide();
						    $('#bText').show().css('height','100%');
						    $('#descrip').css('height','100%').css('text-align','left');
						    $('#menuDescription').css('font-size','1.0em').css('text-align','left').css('float','left');
						  
							if(extraFunction != 'llv'){  // Do All Other Apps
										if(slug != 'frontPage'){
											
											//alert(menuDescriptionHeight);
										    $('#menuDescription').css('display','block')
											                     .css('width','90%')
											                     .css('position','relative')
											                     .css('margin','3em 0em 0em 3%')
															     .css('height',menuDescriptionHeight);
															     
											$('#menuDescription,#descrip,#textDv,#bText').css('text-align','left');				     
											$('#bText').html(menuHTML).css('width','98%');
										}
									   else if(slug == 'frontPage'){
									   			
											$('#catchMenu').hide();
									   		$('#lvImgDiv').hide();
									   		$('#imageHolder').hide();
									   		$('#menuDescription').css('height',menuDescriptionHeight).css('opacity','1.0');
									   		$('#descrip').css('height','98%')
									   					 .css('left','0em');
		    								$('#headbar').css('height',descripHeight);
										    $('#descrip,#textDv,#bText').css('padding','0em').css('margin','0em').css('text-align','center').css('width','98%');
										
											$('#bText').html(menuHTML).css('width','98%');
										
											$('#headbar').css('height','23em');
									   
									   }
									
										if(slug == 'frontPage' || slug == 'vegasFun' ){
											$('#catchMenu').hide();
									   		$('#lvImgDiv').hide();
									   		$('#imageHolder').hide();
									   		$('#bDiv').hide();
									   		$('#menuDescription').css('opacity','1.0').css('padding','0em')
									   		                     .css('left','0em').css('text-align','left').css('float','left');
									   		$('#descrip').css('width','96%').css('height','9em').css('padding','0em')
									   					 .css('margin','0em').css('left','0em')
									   					 .css('text-align','left');
		    								$('#headbar').css('height',descripHeight);
		    								$('#textDv').css('width','98%').css('margin','0em');
										
										
										
											if(slug == 'frontPage'){ 
												$('#bText').html(menuHTML).css('width','98%').css('margin','0em');
											    $('#descrip, #menuDescription').css('padding','1em');
											}
											
											if(slug == 'vegasFun'){
												$('#textDv').css('width','100%').css('margin','0em').css('padding','0em');
												$('#bText').html(menuHTML).css('text-align','center').css('width','100%').css('margin','1em 0em 0em 0em');
												$('#descrip').css('height','6em');
											}
											
											$('#headbar').css('height','23em');
										}	
												
										var imagePath = '"<?php echo img_path("'+ menuImage  +'"); ?>"';
										imagePath = imagePath.replace('"','');
										imagePath = imagePath.replace('"','');
										
										
									  
					     	          
										
								       if(slug != 'laravelMVC' || slug != 'makeContact' || menuImage == null){
					                        $el = $('<img src='+imagePath+ /*' style='+imageStyle+*/ ' alt="" height='+imageHeight+ ' width='+imageWidth+'>'); 
										    $('#imageHolder').html($el);
									   	   	$('#imageHolder').css('text-align','center').prepend(imageHeader).css('top','15em').addClass("doSpin").css('top','0em');
									  
									        $('#imageHolder > img').css('position','relative').css('width','80%').css('height','70%').css('margin','1em 0em 0em 0em');
									  
									   }
									   
									   if(extraFunction != null){
											if(extraFunction == 'angular2')
												angular2Extra();
										    if(extraFunction == 'laravelMVC')
												laravelMVCExtra(imagePath);
									   }
									 
										    
								    if(slug == 'makeContact'){
    										moveArrow(menuDescriptionHeight,menuFontSize,menuHTML);
    										var upArrow =  "<?php echo $vars['upArrow']; ?>";
    										$('#arrowImg > img').attr('src',imagePath);
    										$('#arrowImg').css('display','block').addClass('arrowMove');
								    }  
								    
								
								    
								   if(slug == 'profile' || slug == 'webTech' ||
								      slug == 'about'  || slug == 'fuelLogin' ||
								      slug == 'fuelGIT' || slug == 'resumeButton' ||
								      slug == 'resume'){
										$('#catchMenu').hide();
									   		$('#lvImgDiv').hide();
									   	//	$('#imageHolder').hide();
									   		$('#menuDescription').css('padding','1em').css('height',menuDescriptionHeight).css('width','90%').css('opacity','1.0').css('float','left').css('left','0em');
									   		$('#menuDescription #imageHolder').css('height','70%')
									   									      .css('width','11%')
									   									      .css('font-size','0.60em')
									   										  .css('padding','auto')
									   										  .css('margin','auto')
									   										  .css('float','right');
									   										  
									   	                      
									        $('#menuDescription #imageHolder img').css('width','60%').css('height','60%').css('margin','0em');
									        if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
									        	 $('#menuDescription #imageHolder img').css('height','90%').css('width','90%').css('margin-top','0em');	
									  	
									  	
									  	
									  		$('#descrip').css('width','96%').css('height','95%').css('padding','1em')
									   					 .css('margin','auto').css('float','left')
									   					 .css('text-align','left');
									   		$('#textDv').css('width','60%');
									   		if(descripHeight != '')
		    									$('#headbar').css('height',descripHeight);
		    								else
		    									$('#headbar').css('height','28em');
		    						
								   }
			
							}
						else if(extraFunction == 'llv')
							llvExtra(llvImages,menuDescriptionHeight);
							$('#headbar').css('height',descripHeight);
							
						})
					.on('mouseleave',function()
						{
						  // Determinine header container height
					      //  var $el = $('#menuDescription');
						 //  $('#headbar').append($el).css('height',descripHeight);
						    if(extraFunction == 'llv')
						    	clearInterval(viewer);	
						    	
						    if(!(extraFunction == 'llv')) 
								$('lvImgDiv').hide();
							
									   		
						    $('#textDv').css('margin','0em');
						    $('#arrowImg').hide();
					
					
						})
					.on('mousedown',function()
						{
										$(this).css('color','yellow');
										$('#catchCab').hide();
										$('#bDiv').hide();
										window.open(url1,'_blank');
						});	
										
						
						
						
      }
  /************************ END of HEADER ANIMATION and App Selection CODE ******************************************************************/		
				
	</script>
	</head>
	
	
<body>
	<div id="headbar" class="ui-widget ui-state-default">
		<div id="hmenuContainer"><div id="triggerDiv">
			<div id="btn1" class="bCon">
				<button>Home</button>
				<div id="hmUl1" class="aUl">
						<div id="hmLi2" class="aLi" >Log-in to FUEL-CMS</div>
						<div id="hmLi1" class="aLi" >FUEL-CMS Git Repository</div>
				</div>
			</div>
			<div id="btn2" class="bCon"> 
				<button>About</button>
				<div id="abUl1" class="aUl">
						<div id="abLi1" class="aLi">Web Page Technologies Used</div>
						<div id="abLi2" class="aLi" >Making Contact</div>
						<div id="abLi3" class="aLi" >Personal Profile</div>
				</div>
			</div>
			<div id="btn3" class="bCon">
				<button name='softDev'>Software Development</button>
				<div id="sdUl1" class="aUl">
					<div id="sdLi1" class="aLi">Amino Acid Code Sequence Analyzer</div>
					<div id="sdLi2" class="aLi">Human Organ System Analyzer 1</div>
					<div id="sdLi3" class="aLi">Human Organ System Analyzer 2</div>
					<div id="sdLi4" class="aLi">Vegas Caribbean Catering - in Development</div>
					<div id="sdLi5" class="aLi">Caribbean Food Store - in Development</div>
					<div id="sdLi6" class="aLi">WordPress Work Portfolio</div>
					<div id="sdLi7" class="aLi">Mobile Web Portfolio</div>
					<div id="sdLi8" class="aLi">Bootstrap CSS Portfolio</div>
					<div id="sdLi9" class="aLi">Code Repository</div>
					<div id="sdLi10" class="aLi">GIT Repository</div>
					<div id="sdLi11" class="aLi">Play Othello Game thru AJAX</div>
					<div id="sdLi12" class="aLi">Ruby On Rails -- Training</div>
					<div id="sdLi13" class="aLi">Laravel MVC</div>
					<div id="sdLi14" class="aLi">Google Compute Engine Deployment -- Discontinued</div>
					<div id="sdLi15" class="aLi">Angular2 JavaScript and Redux State Container</div>
					
				</div>
			</div>
			<div id="btn4" class="bCon">
				<button>Technical Writing</button>
				<div id="twUl1" class="aUl">
						<div id="twLi1"><span>Product and Maintenance Manuals</span>
							<div id="twUl2" class="aUl2">Grainger ABCDE Series B</div>
							<div id="twUl3" class="aUl2">Grainger CDE</div>
							<div id="twUl4" class="aUl2">MEC Product Manual VT 1.6</div>
						</div>
						<div id="twLi2" class="aLi">White Paper</div>
						<div id="twLi3" class="aLi">Engineering Specification</div>
						<div id="twLi4" class="aLi">Code Development Specification</div>
				</div>
			</div>
			<div id="btn5" class="bCon">
				<button>My Resume</button>
				<div id="mrUl1" class="aUl">
						<div id="mrLi1" class="aLi">Dynamic HTML Resume w/Downloads</div>
				</div>
				<div id="arrowImg"><img></img></div>
			</div>
			<div id="btn6" class="bCon">
				<button>Living In Vegas</button>
				<div id="lvUl1" class="aUl">
						<div id="lvLi1" class="aLi">Having Vegas Family Fun</div>
				</div>
			</div>
			</div>
			
	       
		</div>
		<div id="menuDescription">
			<div id="catchMenu"></div>
			<div id="descrip">
				<div id="textDv">
					<div id="bText"></div>
					<div id="bDiv"></div>
				</div>
				<div id="imageHolder"></div>
			</div>
			<div id="lvImgDiv"></div>
		</div>
	</div>