<!DOCTYPE html>
<html lang="en">
    <head>
	   <meta charset="UTF-8">
       <meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<!--  the following two lines load the jQuery library and JavaScript files -->
	
		<!-- include JQuery and JQuery UI -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<link href = "<?php echo $headerCSS; ?>" rel="stylesheet" type="text/css" />
		<link href = "<?php echo $footerCSS; ?>" rel="stylesheet" type="text/css" />
		
		<!-- Custom ThemeRoller files -- excite bike  -->
  		<link href="<?php echo $jqUiCSS; ?>" rel="stylesheet">
		<script src="<?php echo $jqJS; ?>"></script>
		<script src="<?php echo $jqUiJS; ?>"></script>

		
		<?php  $page = "";	 ?>	
		
		<?php $page =  $whichPage; 
		      if($page == "livingInLV"){ ?>
				<link href = "<?php echo $livingInLVCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Living in Vegas</title>
		<?php 
		       $pageTitle = "Living in Las Vegas";
		       } ?>
		
		<?php $page =  $whichPage;
			    if($page == "front"){?>
				<link href = "<?php echo $frontCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Portfolio Front</title>
		<?php 
			    $pageTitle = "Portfolio Front Page";	 
		        } ?>	
		
		<?php   $page = $whichPage;
			    if($page == "miniMotif"){?>
				<link href = "<?php echo $miniMotifCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Input Form for Minimotif Search</title>
		<?php 
		        $pageTitle = "Protein Minimotif Search Program";
		        } ?>		
		<?php   $page = $whichPage;
			    if($page == "newOrominer"){?>
				<link href = "<?php echo $newOrominerCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Orominer Program</title>
		<?php 
		        $pageTitle = "Orominer Program"; 
		        } ?>	
		
		<?php   $page = $whichPage;
			    if($page == "orominerHisto"){?>
				<link href = "<?php echo $orominerHistoCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Orominer with Histology</title>	
		<?php 
		        $pageTitle = "Orominer with Histology Program";
		        } ?>
		
		
		<?php   $page = $whichPage;
			    if($page == "othello"){?>
				<link href = "<?php echo $othelloCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Othello Game</title>	
		<?php   
		        $pageTitle = "Othello Game"; 
		        } ?>
		
		<?php   $page = $whichPage;
			    if($page == "techWriter"){?>
				<link href = "<?php echo $techWriterCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Technical Writing</title>	
		<?php 
		        $pageTitle = "Technical Writing"; 
		        } ?>
		        
		<?php   $page = $whichPage; 
				if($page == "resumes"){?>
				<link href = "<?php echo $resumesCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Resume Viewing</title>
				
		<?php   
		        $pageTitle = "Resume Viewing";  
		        } ?>
		        
		<?php   $page = $whichPage;
			    if($page == "whitePaper"){?>
				<link href = "<?php echo $showPDFCSS; ?>" rel="stylesheet" type="text/css" />
				<title>White Paper</title>	
		<?php   
		        $pageTitle = "Technical White Paper";
		        } ?>
		        
		<?php   $page = $whichPage;
			    if($page == "engSpec"){?>
				<link href = "<?php echo $showPDFCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Engineering Specification</title>	
		<?php  
		        $pageTitle = "Engineering Process Specification";
		        } ?>
		        
		<?php   $page = $whichPage;
			    if($page == "GraingerABCDE"){?>
				<link href = "<?php echo $showPDFCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Grainger ABCDE Series B</title>	
		<?php  
		        $pageTitle = "Grainger ABCDE Series B Manual";
		        } ?>
		        
		<?php   $page = $whichPage;
			    if($page == "GraingerCDE"){?>
				<link href = "<?php echo $showPDFCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Grainger CDE</title>	
		<?php 
		        $pageTitle = "Grainger CDE Manual"; 
				} ?>
				
		<?php   $page = $whichPage;
			    if($page == "mecProductManual"){?>
				<link href = "<?php echo $showPDFCSS; ?>" rel="stylesheet" type="text/css" />
				<title>MEC Product Manual VT 1.6</title>	
		<?php   
		        $pageTitle = "MEC Product Manual VT 1.6";
		        } ?>
		        
		<?php   $page = $whichPage;
			    if($page == "codeDev"){?>
				<link href = "<?php echo $codeDevCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Code Development Specification</title>	
		<?php   
		        $pageTitle = "Code Development Technical Specification";
				} ?>
				
		<?php   $page = $whichPage;
				if($page == "emailForm"){?>
				<link href = "<?php echo $emailFormCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Making Contact</title>	
		<?php  
		        $pageTitle = "Making Contact With Me"; 
		        } ?>
		        
		<?php   $page = $whichPage;
				if($page == "webTech"){?>
				<link href = "<?php echo $webTechCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Web Page Technologies Used</title>	
		<?php 
		        $pageTitle = "Web Page Technologies Used";
				} ?>
				
		<?php   $page = $whichPage;
				if($page == "viewPDFResume"){?>
				<link href = "<?php echo $showPDFCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Show PDF Resume</title>	
		<?php 
		        $pageTitle = "Show PDF Resume";
				} ?>
		<?php   if($hfSwitch == "on"){?>
				<link href = "<?php echo $mobileSwitchCSS; ?>" rel="stylesheet" type="text/css" />
				<title>Mobile Portfolio</title>
		<?php 
		        $pageTitle = "Mobile Portfolio using JQuery Mobile"; 
				} ?>
	
	   
		
		<style>	
		
		</style>
		
		<script type="text/javascript">
		var viewer = 0;
		var pageTitleStr = '';
		var pageT = '';
		$(document).ready(function()
			{
				   
					
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
				 
				      var mobileUrl = "<?php echo $mobile; ?>";  //for Mobile Portfolio
				      $('#menuDescription').show().css('height','auto').css('padding','1em')
				    					   .css('text-align','left');
				      $('#lvImgDiv').hide();
				      $('#catchMenu').hide();
				      $('#imageHolder').hide();
				      $('#bDiv').hide();
				      $('#textDv').css('width','100%').css('padding','0em');
				      $('#bText').css('padding','0em').css('height','96%');
				
					  $('#menuDescription,#textDv,#bText').css('font-size','1.0em');
			          $('#descrip').css('position','relative')
			                             .css('color','black') 
					                     .css('text-align','left')
										 .css('padding','0em')
										 .css('margin','0em')
										 .css('height','10em')
										 .css('width','100%')
										 .css('font-size','0.90em')
										 .css('z-index','750')
										 .css('display','block');
										 
										 
										 $('#bText').html('<p class="descHdr">Site Description</p><p>Hover over a Menu button to see a description Here of the Link contents.  This Site has been recently optimized to be more Responsive across devices in terms of CSS formatting, But not in Touch Events.'+
										       '&nbsp;&nbsp;See <a href="'+mobileUrl+'" style="color:blue">Mobile Web Portfolio</a> under the Software Development Tab for a mobile portfolio version developed with JQuery Mobile.'+
										       '&nbsp;&nbsp;The inline header menu above works better for Desktops and the vertical menu below works better for Mobile devices.</p><br><p><font color="blue">Also a FUEL-CMS (CodeIgniter-based) Content Management System version'+
										       ' of this portfolio can be accessed under the Home Top Menu button.</font></p>');
						
			 
				    $('#headbar').css('height','24em');
			        pageT = "<?php echo $pageTitle; ?>";
			        
				   $('#headbar').on('mouseleave',function(){
				    	     
						     $('#headbar').css('height','24em');
						     $('#catchMenu').hide();
				    	     $('#imageHolder').hide();
				    	     $('#lvImgDiv').hide();
				    	     $('#bDiv').hide();
				    	     $('#descrip,#textDv').css('width','98%');
				    	     
							 $("[id^='btn']").children('div').css('display','none');
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
							           	.css('text-align','center')
		      							.css('color','blue')
		      							.css('font-size','1.5em'); 
		      							
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
									     $('#textDv').css('width','100%').css('padding','0em');
									     $('#bText').css('padding','0em').css('height','100%');
				                	     
				                	     $('#menuDescription').css('height','auto').css('text-align','left');
				                	     $('#menuDescription, #textDv, #descrip, #bText').css('text-align','left').css('font-size','1.0em');
				                	     
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
													       '&nbsp;&nbsp;The inline header menu above works better for Desktops and the vertical menu below works better for Mobile devices.</p><br><p><font color="blue">Also a FUEL-CMS (CodeIgniter-based) Content Management System version'+
											       ' of this portfolio can be accessed under the Home Top Menu button.</font></p>')
											       .css('margin','0em'); 
											       
											       
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
		
	  
		
		
		/********************** HEADER IMAGES SECTION **************************************************************************/		 			
					        // Desktop Header Images
							var codeStorageImage = '';
					        var websiteConstructionImage = ''; 
							var dataAnalysisImage = '';
							var wordPressImage = '';
							var technologiesImage = '';
							var technicalWritingImage = '';
							var techWriter = '';
							var mobileDevelopmentImage = '';
						
							var othelloGameImage = '';
							var jobDoneImage = '';
							var engProcessSpec =  '';
							var explainTechnology  = '';
							var myImage = '';
							var upArrow = '';
							var softwareTechWriting = '';
							var rubyRailsImage = '';
							var laravelMVCImage = '';
						
							var llvImage1 = '';
							var llvImage2 = '';
							var llvImage3 = '';
							var llvImage4 = '';
							var llvImage5 = '';
							var llvImage6  = '';
							var llvImage7 = '';
							var llvImage8 = '';
						
							var loaderImage = '';
							var mhImage1 = '';
							var mhImage2 = '';
							var mhImage3 = '';
							var mhImage4 = '';
							var mhImage5 = '';
							var mhImage6 = '';
							var mhImage7 = '';
							var mhImage8 = '';
							
				        // GET HEADER IMAGES for DESKTOP and MOBILE
						var hfSwitch = '<?php echo $hfSwitch; ?>';
						var pageTitleStr = '';
					  
						<?php 
						$CI =& get_instance();
						if (isset($headerImages)) 
						   foreach($headerImages as $image)
									{ ?>
									    <?php if($image->name == 'codeStorageImage') { ?>
											codeStorageImage = "<?php echo img_path($image->link); ?>";
					    			    <?php  } 	?>	
					    			  
					    			  	<?php if($image->name == 'websiteConstructionImage') { ?>
											websiteConstructionImage  = "<?php echo img_path($image->link); ?>";
									    <?php  } 	?>	
									    
										<?php if($image->name == 'dataAnalysisImage')  { ?>
											dataAnalysisImage  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>
										
										<?php if($image->name == 'wordPressImage')  { ?>
											 wordPressImage  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'technologiesImage') { ?>
											 technologiesImage  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'technicalWritingImage') { ?>
											 technicalWritingImage  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
               					  	    <?php if($image->name == 'techWriter') { ?>
											 techWriter  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'mobileDevelopmentImage') { ?>
											 mobileDevelopmentImage  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>
								 
									    <?php if($image->name == 'othelloGameImage') { ?>
											 othelloGameImage  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'jobDoneImage') { ?>
											 jobDoneImage  = "<?php echo img_path($image->link); ?>";
									    <?php  } 	?>		 
											 
										<?php if($image->name == 'engProcessSpec') { ?>
											 engProcessSpec  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'explainTechnology') { ?>
											 explainTechnology  = "<?php echo img_path($image->link); ?>";											 
										<?php  } 	?>	 
											 
										<?php if($image->name == 'myImage') { ?>
											 myImage  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'upArrow') { ?>
											 upArrow  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
						     			<?php if($image->name == 'softwareTechWriting') { ?>
											 softwareTechWriting  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>
											 
									    <?php if($image->name == 'rubyRailsImage') { ?>
											 rubyRailsImage  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
										
										<?php if($image->name == 'laravelMVC') { ?>
											 laravelMVCImage  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
									    <?php if($image->name == 'llvImage1') { ?>
											 llvImage1  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'llvImage2') { ?>
											 llvImage2  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'llvImage3') { ?>
											 llvImage3  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
									    <?php if($image->name == 'llvImage4') { ?>
											 llvImage4  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'llvImage5') { ?>
											 llvImage5  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'llvImage6') { ?>
											 llvImage6  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	
											 
										<?php if($image->name == 'llvImage7') { ?>
											 llvImage7  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'llvImage8') { ?>
											 llvImage8  = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>
									
										<?php if($image->name == 'loaderImage') { ?>
											 loaderImage = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>
										
										<?php if($image->name == 'mhImage1')  { ?>
											 mhImage1 = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'mhImage2')  { ?>
											 mhImage2 = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'mhImage3') { ?>
											 mhImage3 = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'mhImage4') { ?>
											 mhImage4 = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'mhImage5') { ?>
											 mhImage5 = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'mhImage6') { ?>
											 mhImage6 = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>
										
										<?php if($image->name == 'mhImage7') { ?>
											 mhImage7 = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>	 
											 
										<?php if($image->name == 'mhImage8') { ?>
											 mhImage8 = "<?php echo img_path($image->link); ?>";
										<?php  } 	?>
											 
					    <?php  } 	?>
					     
		                $('#arrowImg > img').attr('src',upArrow);
					    
					      // Mobile Header Image Variables
					      var mhImages = new Array();
						  mhImages[0] = mhImage2;
						  mhImages[1] = mhImage3;
						  mhImages[2] = mhImage5;
						  mhImages[3] = mhImage6;
						  mhImages[4] = mhImage7;
						  mhImages[5] = mhImage8;
						  
			/***************************** End GET HEADER IMAGES ************************************************************************/
			
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
							    $('body').prepend('<div id="pGraphic"><div id="positDiv"><h2>RLS Career Porfolio</h2><img src="'+ "<?php echo secure_base_url('images/procprojengimg.jpg'); ?>"+'"/></div></div>');
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
										$('#descrip').css('text-align','left');
									
										$('#twLi1').find('.aUl2').css('display','none'); 
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
																		
																	
																		$('#menuDescription').css('text-align','justify');
																   
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
																					 
																					alert($(this).text());			 	 
																					 if( $(this).is(':contains("Grainger")').length){
																					 	$(this).css('color','red');
																					 	alert("here");
																					 }
																					   
																					   //$(this).filter(function() {
																					//	  return $(this).text() == 'ABCDE';
																						//})
																				  })	
																		        .on('mouseleave',function()
																				     {
																				 	  
																						$(this).removeClass('ui-state-active')
																							.css('color','white'); 
																						
																						$(this).parent().find('.aUl2:nth-child(even)').css('color','white');
																						$(this).parent().find('.aUl2:nth-child(odd)').css('color','orange');
																			         
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
							 
						     $('#imageHolder').show();
						     $('#menuDescription').css('padding','1.0em');
						     $('#textDv').css('width','65%').css('float','left').css('margin','0em');
						     $('#bText').css('width','100%');
						    
						     var el = $(this).find('#sdUl1').css('display','none').css('margin','0em 0em 0em 0em')
								                    .css('float','right').css('width','auto').css('height','auto')
								                    .css('position','relative').css('font-size','0.80em')
								                    .css('background-color','#adb7c1').css('padding','0.25em 0em 0.5em 1.25em');
								                    
						     el.find('.aLi').css('padding','3px').css('height','auto');
							 el.hide();
							 
					
		                     if(!$('#catchMenu #btn3').length){
								   
								   el.find('.aLi').css('background-color','lightgray').css('width','44%');
								  
								   $('#catchMenu').html('')
												  .css('width','30%').css('height','30em')
												  .css('margin','0.5em 0em 0em 0.5em');
								   $('#catchMenu').append(el.clone(true).show());
								
								   el.find('#sdUl1').css('display','none');
		                     }
					});
					
					$('#triggerDiv #btn3').on('mouseover',function(){
						
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
						                                       .css('margin','0em');
						    
					                                        
					      $('#menuDescription #imageHolder img').css('width','75%').css('height','75%').css('margin','1em');
					      if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
					        	 $('#menuDescription #imageHolder img').css('height','90%').css('width','90%').css('margin-top','1em');
					        	 
					      $('#descrip').css('width','63%').css('height','98%').css('left','0em')
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
						                                       .css('margin','1em 0em 0em 0em');
						    
					                                          
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
				var url1 =  [];
				var url2 =  []; 
				var bannerTitle = [];
				var headHeight = [];
				var extraFunction = [];
				var llvImages = [];
                  
                  
                  
                  
                   
               // Dynamic HTML Resume
				 menuTag[0]= 'div.aLi:contains("Dynamic HTML Resume")';
				 menuDescriptionHeight[0] = '15em';
				 menuFontSize[0] = '1.0em';
				 menuHTML[0] = '<p class="descHdr">Dynamic HTML Resume w/Downloads</p><p>Resume for Richard L. Sypert Jr. in Html and PDF formats.  The HTML Resume Format Only Uses CSS and no JavaScript!</p>';
				 imageHeader[0] = '<h1>Dynamic Resume</h1>';
				 menuImage[0] = jobDoneImage;
				 btnHTML[0] = 'div#btn5.bCon';
				 descripHeight[0] = '35em';
				 menuChoice[0] = null;
				 imageHeight[0] = '160';
				 imageWidth[0] = '187';
				 url1[0] = 'dynResume';
				 url2[0] =  null;  
				 bannerTitle[0] = null;
				 headHeight[0] = null;
				 extraFunction[0] = null;
				 llvImages[0] = null;
			 
			
				// White Paper Technical Writing 
				 menuTag[1] = 'div.aLi:contains("White Paper")';
				 menuDescriptionHeight[1] = "21em";
				 menuFontSize[1] = "1.0em";
				 menuHTML[1] = '<p class ="descHdr">White Paper</p><p>This is a technical specification called a White Paper' + 
						' which explains the technology behind a companies\' product.  In this case an Electrical Motor Energy Efficiency Device.</p>';
				 imageHeader[1] = '<h1>White Paper<br>Technology Explanation</h1>';
				 menuImage[1] = explainTechnology;
				 btnHTML[1] = 'div#btn4.bCon';
				 descripHeight[1] = '39em';
				 menuChoice[1] = null;
				 imageHeight[1] = '160';
				 imageWidth[1] = '187';
				 url1[1] = 'whitePaper';
				 url2[1] =  null;  
				 bannerTitle[1] = null;
				 headHeight[1] = null;
				 extraFunction[1] = null;
				 llvImages[1] = null;
			
				
				// Engineering Specification Technical Writing
				 menuTag[2] = 'div.aLi:contains("Engineering Specification")';
				 menuDescriptionHeight[2] = "21em";
				 menuFontSize[2] = "1.0em";
				 menuHTML[2] = '<p class="descHdr">Engineering Specification</p><p>This is a technical specification for' + 
						' the Clark County Land Development Approval process.<br>I authored it as an Environmental Health Engineer for Southern Nevada Health District.</p>';
				 imageHeader[2] = '<h1>Engineering Process</br>Specification</h1>';
				 menuImage[2] = engProcessSpec;
				 btnHTML[2] = 'div#btn4.bCon';
				 descripHeight[1] = '39em';
				 menuChoice[2] = null;
				 imageHeight[2] = '200';
				 imageWidth[2] = '175';
				 url1[2] = 'engSpec';
				 url2[2] =  null;  
				 bannerTitle[2] = null;
				 headHeight[2] = null;
				 extraFunction [2] = null;
				 llvImages[2] = null;
			
				
			
                // Code Developement Specification Technical Writing
               	 menuTag[3] = 'div.aLi:contains("Code Development Specification")';
				 menuDescriptionHeight[3] = "21em";
				 menuFontSize[3] = "1.0em";
				 menuHTML[3] = '<p class ="descHdr">Code Development Specification</p><p>This is a technical specification for' + 
						' guidance in developing Object Oriented Code.&nbsp;&nbsp;It was written as a HTML document.</p>';
				 imageHeader[3] = '<h1>Software Technical</br>Specification</h1>';
				 menuImage[3] = softwareTechWriting;
				 btnHTML[3] = 'div#btn4.bCon';
				 descripHeight[3] = '39em';
				 menuChoice[3] = null;
				 imageHeight[3] = '160';
				 imageWidth[3] = '187';
				 url1[3] = 'softwareTW';
				 url2[3] =  null;  
				 bannerTitle[3] = null;
				 headHeight[3] = null;
				 extraFunction[3] = null;
				 llvImages[3] = null;
			
			
				// Grainger ABCDE Series B Manual
				 menuTag[4] = '#twLi1 #twUl2';
				 menuDescriptionHeight[4] = "21em";
				 menuFontSize[4] = "1.0em";
				 menuHTML[4] = '<p class ="descHdr">Grainger ABCDE Series B</p><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a ' +
' Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it using Adobe InDesign according to the customers style rules</p>';
				 imageHeader[4] = '<h1>Technical Manuals</h1>';
				 menuImage[4] = technicalWritingImage;
				 btnHTML[4] = 'div#btn4.bCon';
				 descripHeight[4] = '39em';
				 menuChoice[4] = null;
				 imageHeight[4] = '160';
				 imageWidth[4] = '187';
				 url1[4] = 'graingerABCDE';
				 url2[4] =  null;  
				 bannerTitle[4] = null;
				 headHeight[4] = null;
				 extraFunction[4] = null;
				 llvImages[4] = null;
			
				
			    // Grainger CDE Manual
				 menuTag[5] ='#twLi1 #twUl3';
				 menuDescriptionHeight[5] = "21em";
				 menuFontSize[5] = "1.0em";
				 menuHTML[5] = '<p class ="descHdr">Grainger CDE</p><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a ' +
														' Motor Efficiency Controller (MEC).  It is a new generation product manual.'+  
														'I wrote it in Adobe InDesign according to the customer\'s style rules</p>';
				 imageHeader[5] = '<h1>Technical Manuals</h1>';
				 menuImage[5] = technicalWritingImage;
				 btnHTML[5] = 'div#btn4.bCon';
				 descripHeight[5] = '39em';
				 menuChoice[5] = null;
				 imageHeight[5] = '160';
				 imageWidth[5] = '187';
				 url1[5] = 'graingerCDE';
				 url2[5] =  null;  
				 bannerTitle[5] = null;
				 headHeight[5] = null;
				 extraFunction[5] = null;
				 llvImages[5] = null;
			
			
				// MEC Product Manual VT 1.6			
				 menuTag[6] ='#twUl4';
				 menuDescriptionHeight[6] = "21em";
				 menuFontSize[6] = "1.0em";
				 menuHTML[6] = '<p class ="descHdr">MEC Product Manual VT 1.6</p><p>This is a Product Manual for a ' +
													' Motor Efficiency Controller (MEC).  It is a new generation product manual.' +
													'&nbsp;&nbsp;I wrote it in Adobe InDesign according to the customer\'s style rules</p>';
				 imageHeader[6] = '<h1>Technical Manuals</h1>';
				 menuImage[6] = technicalWritingImage;
				 btnHTML[6] = 'div#btn4.bCon';
				 descripHeight[6] = '39em';
				 menuChoice[6] = null;
				 imageHeight[6] = '160';
				 imageWidth[6] = '187';
				 url1[6] = 'mecPManual';
				 url2[6] =  null;  
				 bannerTitle[6] = null;
				 headHeight[6] = null;
				 extraFunction[6] = null;
				 llvImages[6] = null;
			
				
			    // Product and Maintenance Manuals Header
				 menuTag[7] ='#twLi1 span';
				 menuDescriptionHeight[7] = "15em";
				 menuFontSize[7] = "1.0em";
				 menuHTML[7] = '<p class ="descHdr">Product and Maintenance Manuals</p><p>Below are links to new product manuals for ' +
					' Motor Efficiency Controller (MEC) devices.  They were produced primarily with Adobe InDesign.</p>';
				 imageHeader[7] = '<h1>Technical Manuals</h1>';
				 menuImage[7] = technicalWritingImage;
				 btnHTML[7] = 'div#btn4.bCon';
				 descripHeight[7] = '39em';
				 menuChoice[7] = null;
				 imageHeight[7] = '160';
				 imageWidth[7] = '187';
				 url1[7] = null;
				 url2[7] =  null;  
				 bannerTitle[7] = null;
				 headHeight[7] = null;
				 extraFunction[7] = null;
				 llvImages[7] = null;
			
			
				// Google Code Repository 
				 menuTag[8] ='div.aLi:contains("Code Repository")';
				 menuDescriptionHeight[8] = "21em";
				 menuFontSize[8] = "1.0em";
				 menuHTML[8] = '<p class ="descHdr">Code Repository</p><p>Link to Repository of Code I have written.  See the Git Repository link for the code' +
											' of this site done within the CodeIgniter MVC Framework.</p>';
				 imageHeader[8] = '<h1>Code Storage</h1>';
				 menuImage[8] = codeStorageImage;
				 btnHTML[8] = 'div#btn3.bCon';
				 descripHeight[8] = '38em';
				 menuChoice[8] = null;
				 imageHeight[8] = '160';
				 imageWidth[8] = '187';
				 url1[8] =  "https://drive.google.com/file/d/0Bw4sGq8fpAAnSDhMU3NBNTJSS1k/view";
				 url2[8] =  null;  
				 bannerTitle[8] = null;
				 headHeight[8] = null;
				 extraFunction[8] = null;
				 llvImages[8] = null;
			

				// GIT Code Repository			
				 menuTag[9] ='div.aLi:contains("GIT Repository")';
				 menuDescriptionHeight[9] = "21em";
				 menuFontSize[9] = "1.0em";
				 menuHTML[9] = '<p class ="descHdr">GIT Repository</p><p>Link to GIT code repository provided thru' +
											' BitBucket.</p>';
				 imageHeader[9] = '<h1>Code Storage</h1>';
				 menuImage[9] = codeStorageImage;
				 btnHTML[9] = 'div#btn3.bCon';
				 descripHeight[9] = '38em';
				 menuChoice[9] = null;
				 imageHeight[9] = '160';
				 imageWidth[9] = '187';
				 url1[9] =  "https://bitbucket.org/Rsypertjr/profile/repositories?visibility[9] =all";
				 url2[9] =  null;  
				 bannerTitle[9] = null;
				 headHeight[9] = null;
				 extraFunction[9] = null;
				 llvImages[9] = null;
				
							
			    // WordPress Work Portfolio
				 menuTag[10] ='div.aLi:contains("WordPress Work Portfolio")';
				 menuDescriptionHeight[10] = "21em";
				 menuFontSize[10] = "1.0em";
				 menuHTML[10] = '<p class ="descHdr">WordPress Work Portfolio</p><p>Link to a WordPress version of My work portfolio</p>';
				 imageHeader[10] = '<h1>WordPress Site</br>Development</h1>';
				 menuImage[10] = wordPressImage;
				 btnHTML[10] = 'div#btn3.bCon';
				 descripHeight[10] = '38em';
				 menuChoice[10] = null;
				 imageHeight[10] = '160';
				 imageWidth[10] = '187';
				 url1[10] =  null;
				 url2[10] =  "http://rlsworks.wordpress.com/";
				 bannerTitle[10] = 'WordPress Work Portfolio';
				 headHeight[10] = '15em';
				 extraFunction[10] = null;
				 llvImages[10] = null;[10]
			
							
				//Mobile Web Portfolio App			
				 menuTag[11] ='div.aLi:contains("Mobile Web Portfolio")';
				 menuDescriptionHeight[11] = "21em";
				 menuFontSize[11] = "1.0em";
				 menuHTML[11] = '<p class ="descHdr">Mobile Web Portfolio</p><p>Link to a Mobile version of My work portfolio.&nbsp;&nbsp;'+
							 'I developed it using JQuery Mobile and it should run on Android devices at:</p><p style[11] ="color:red;zoom:110%">http://www.rlsworks.com/ci/mobile</p>';
			
				 imageHeader[11] = '<h1>Mobile Web</br>Development</h1>';
				 menuImage[11] = mobileDevelopmentImage;
				 btnHTML[11] = 'div#btn3.bCon';
				 descripHeight[11] = '38em';
				 menuChoice[11] = null;
				 imageHeight[11] = '160';
				 imageWidth[11] = '187';
				 url1[11] =  null;
				 url2[11] =  'mobile'; 
				 bannerTitle[11] = 'Mobile Web Portfolio';
				 headHeight[11] = '12em';
				 extraFunction[11] = null;
				 llvImages[11] = null;
			

				// Play Othello Game App			
				 menuTag[12] = 'div#sdLi10';
				 menuDescriptionHeight[12] = "21em";
				 menuFontSize[12] = "1.0em";
				 menuHTML[12] = '<p class ="descHdr">Play Othello Game</p><p>This is an adaptation of the Classic Othello game where one player competes with the Computer.'+
'Two Player Play could be implemented, as well as, making levels of difficulty for game play.</p>';
				 imageHeader[12] = '<h1>A Little</br>Game Coding</h1>';
				 menuImage[12] = othelloGameImage;
				 btnHTML[12] = 'div#btn3.bCon';
				 descripHeight[12] = '38em';
				 menuChoice[12] = null;
				 imageHeight[12] = '160';
				 imageWidth[12] = '187';
				 url1[12] = 'othello';
				 url2[12] =  null;  
				 bannerTitle[12] = null;
				 headHeight[12] = null;
				 extraFunction[12] = null;
				 llvImages[12] = null;
			
							
				//Angular2 JavaScript App							
				 menuTag[13] = 'div#sdLi12';
				 menuDescriptionHeight[13] = "21em";
				 menuFontSize[13] = "1.0em";
				 menuHTML[13] = '<p class ="descHdr">Angular2 JavaScript with Redux State Container</p><p>Angular2 JavaScript with @ngrx Redux Store Container which gives centralized, immutable state management.</p><p style="color:blue">Click Menu Tab to See App, or Click Tabs in this description to See Code.</p>';
				 imageHeader[13] = '<h1>Angular2/Redux</h1>';
				 menuImage[13] = myImage;
				 btnHTML[13] = 'div#btn3.bCon';
				 descripHeight[13] = '38em';
				 menuChoice[13] = null;
				 imageHeight[13] = '160';
				 imageWidth[13] = '187';
				 url1[13] =  null;
				 url2[13] =  "https://young-wildwood-41737.herokuapp.com";  
				 bannerTitle[13] = "Angular2 JavaScript with Redux";
				 headHeight[13] = '38em';
				 extraFunction[13] = 'angular2';
				 llvImages[13] = null;
			
			
				// Play Othello with AJAX App
				 menuTag[14] = 'div#sdLi11';
				 menuDescriptionHeight[14] = "21em";
				 menuFontSize[14] = "1.0em";
				 menuHTML[14] = '<p class ="descHdr">Play Othello Game</p><p>Play the Othello Game using AJAX technology which will eliminate Page Reloads.</p>';
				 imageHeader[14] = '<h1>A Little</br>Game Coding</h1>';
				 menuImage[14] = othelloGameImage;
				 btnHTML[14] = 'div#btn3.bCon';
				 descripHeight[14] = '38em';
				 menuChoice[14] = null;
				 imageHeight[14] = '160';
				 imageWidth[14] = '187';
				 url1[14] = 'othello';
				 url2[14] =  null;  
				 bannerTitle[14] = null;
				 headHeight[14] = null;
				 extraFunction[14] = null;
				 llvImages[14] = null;
			
						
				//Vegas Caribbean Catering - in Development App		
				 menuTag[15] ='div.aLi:contains("Vegas Caribbean Catering - in Development")';
				 menuDescriptionHeight[15] = "21em";
				 menuFontSize[15] = "1.0em";
				 menuHTML[15] = '<p class ="descHdr">Vegas Caribbean Catering - in Development</p><p>A Simple WordPress skeleton site for a friends\' Catering business.' +
										' The Woo Commerce Plug-in could be used for online ordering and payment transactions, but the client wants it kept simple.</p>';
				 imageHeader[15] = '<h1>WordPress Site</br>Development</h1>';
				 menuImage[15] = wordPressImage;
				 btnHTML[15] = 'div#btn3.bCon';
				 descripHeight[15] = '38em';
				 menuChoice[15] = null;
				 imageHeight[15] = '160';
				 imageWidth[15] = '187';
				 url1[15] =  null;
				 url2[15] =  "http://rlsworks.com/wordpress/vcc";   
				 bannerTitle[15] = "Vegas Caribbean Catering";
				 headHeight[15] = '15em';
				 extraFunction[15] = null;
				 llvImages[15] = null;
			
				
				// Caribbean Food Store - in Development App		
				 menuTag[16] = 'div.aLi:contains("Caribbean Food Store")';
				 menuDescriptionHeight[16] =  "21em";
				 menuFontSize[16] =  "1.0em";
				 menuHTML[16] =  '<p class = "descHdr">Caribbean Food Store - in Development</p><p>A Sample WordPress site for a friends Caribbean Food Catering' +
										' The Woo Commerce Plug-in is utilized ordering and payment transactions.</p>';
				 imageHeader[16] =  '<h1>WordPress Site</br>Development</h1>';
				 menuImage[16] =  wordPressImage;
				 btnHTML[16] =  'div#btn3.bCon';
				 descripHeight[16] = '38em';
				 menuChoice[16] =  null;
				 imageHeight[16] =  '160';
				 imageWidth[16] =  '187';
				 url1[16] =   null;
				 url2[16] =  "http://rlsworks.com/cfs/wordpress";   
				 bannerTitle[16] =  "Caribbean Food Store";
				 headHeight[16] =  '15em';
				 extraFunction[16] =  null;
				 llvImages[16] =  null;
			
				   
			   // Human Organ System Analyzer 1	   
				  menuTag[17] = 'div.aLi:contains("Human Organ System Analyzer 1")';
				  menuDescriptionHeight[17] = "21em";
				  menuFontSize[17] = "1.0em";
				  menuHTML[17] = '<p class ="descHdr">Human Organ System Analyzer 1</p><p>The Orominer program shows a hierarchical organization of the human body constitution.'+
		' Its top level is Organ Systems. <p>It uses JavaScript, JQuery for event synchronization between hierarchical display and graphic display, as well as, ' +
									'dynamic generation of SVG graphical elements based on DOM HTML elements.</p>MySQL Database information is converted into XML format using PHP for up front access by the code for generation of Hierachical Display.  Unfortunately ONLY THE First 3 NODES Of DATA was developed at Project Completion.</p>';
				  imageHeader[17] = '<h1>Scientific Data<br>Analysis Software</h1>';
				  menuImage[17] = dataAnalysisImage;
				  btnHTML[17] = 'div#btn3.bCon';
				  descripHeight[17] = '38em';
				  menuChoice[17] = null;
				  imageHeight[17] = '160';
				  imageWidth[17] = '187';
				  url1[17] = 'orominer1';
				  url2[17] =  null;  
				  bannerTitle[17] = null;
				  headHeight[17] = null;
				  extraFunction[17] = null;
				  llvImages[17] = null;
			
		
				// Human Organ System Analyzer 2	   
				 menuTag[18] = 'div.aLi:contains("Human Organ System Analyzer 2")';
				 menuDescriptionHeight[18] = "21em";
				 menuFontSize[18] = "1.0em";
				 menuHTML[18] = '<p class ="descHdr">Human Organ System Analyzer 2</p><p>This orominer program contains Histological Data within the Hierarchical Organization of Human Body makeup.  Histological Data is information about' +
											  ' Human Organs and their tissues and cells.&nbsp;&nbsp;This application uses JavaScript Objects to store active data requests from which graphics is generated.</p>';
				 imageHeader[18] = '<h1>Scientific Data<br>Analysis Software</h1>';
				 menuImage[18] = dataAnalysisImage;
				 btnHTML[18] = 'div#btn3.bCon';
				 descripHeight[18] = '38em';
				 menuChoice[18] = null;
				 imageHeight[18] = '160';
				 imageWidth[18] = '187';
				 url1[18] = 'orominer2';
				 url2[18] =  null;  
				 bannerTitle[18] = null;
				 headHeight[18] = null;
				 extraFunction[18] = null;
				 llvImages[18] = null;
			

                // Ruby On Rails Training App
				 menuTag[19] ='div.aLi:contains("Ruby On Rails -- Training")';
				 menuDescriptionHeight[19] = "21em";
				 menuFontSize[19] = "1.0em";
				 menuHTML[19] = '<p class ="descHdr">Ruby on Rails -- Training</p><p>I am engaging in self-directed study of Ruby-On-Rails, which involves MVC application development' +
											  ' based on REST architecture.</p>';
				 imageHeader[19] = '<h1>Ruby On Rails</br>Development</h1>';
				 menuImage[19] = rubyRailsImage;
				 btnHTML[19] = 'div#btn3.bCon';
				 descripHeight[19] = '38em';
				 menuChoice[19] = null;
				 imageHeight[19] = '160';
				 imageWidth[19] = '187';
				 url1[19] =  'https://obscure-dawn-69167.herokuapp.com/'; 
				 url2[19] =  null;  
				 bannerTitle[19] = null;
				 headHeight[19] = null;
				 extraFunction[19] = null;
				 llvImages[19] = null;
			
		              
		        // Laravel MVC Apps    
		         menuTag[20] = 'div.aLi:contains("Laravel MVC")';
				 menuDescriptionHeight[20] = "21em";
				 menuFontSize[20] = "1.0em";
				 menuHTML[20] = '<p class ="descHdr">Laravel MVC -- Training</p><p>I was asked to complete Laravel MVC programs in application for a jobs.' + 
										' I  have recently learned the following technologies:  Laravel MVC, Twitter Bootstrap, Active Campaign API, Facebook and GitHub authentication, Homestead Development, Vagrant Virtual Server.' + 
										' I have coded a 2 programs for job applications and they can be accessed by the buttons below.</p>';
				 imageHeader[20] = '<h1>Laravel<br>MVC Development</h1>';
				 menuImage[20] = laravelMVCImage;
				 btnHTML[20] = 'div#btn3.bCon';
				 descripHeight[20] = '38em';
				 menuChoice[20] = null;
				 imageHeight[20] = '160';
				 imageWidth[20] = '187';
				 url1[20] =  "https://protected-dawn-70064.herokuapp.com";
				 url2[20] =  null;  
				 bannerTitle[20] = null;
				 headHeight[20] = null;
				 extraFunction[20] = 'laravelMVC';
				 llvImages[20] = null;
			
		       
				// Amino Acid Code Sequence Analyzer App	   
				 menuTag[21] = 'div.aLi:contains("Amino Acid Code Sequence Analyzer")';
				 menuDescriptionHeight[21] = "21em";
				 menuFontSize[21] = "1.0em";
				 menuHTML[21] = '<p class ="descHdr">Amino Acid Code Sequence Analyzer</p><p>This program gives statistics for all combinations of amino acid sequences within a protein.  The protein sequence is parsed by regex techniques from a text file, into a MySQL database.'+
										'The first and last amino acid is chosen in the GUI, as well as, the desired statistical output.  The database accessed by JavaScript-AJAX to PHP-MySQL on the server side which returns the statistics.'+
										'</p>';
				 imageHeader[21] = '<h1>Scientific Data<br>Analysis Software</h1>';
				 menuImage[21] = dataAnalysisImage;
				 btnHTML[21] = 'div#btn3.bCon';
				 descripHeight[21] = '38em';
				 menuChoice[21] = null;
				 imageHeight[21] = '160';
				 imageWidth[21] = '187';
				 url1[21] =  'amino';
				 url2[21] =  null;  
				 bannerTitle[21] = null;
				 headHeight[21] = null;
				 extraFunction[21] = null;
				 llvImages[21] = null;
			
					
				// Web Technologies Used	   
				 menuTag[22] = 'div.aLi:contains("Web Page Technologies Used")';
				 menuDescriptionHeight[22] = "12em";
				 menuFontSize[22] = "1.0em";
				 menuHTML[22] = '<p class ="descHdr">Web Page Technologies Used</p><p>This is a page that gives ' + 
											' explanation<br>of the programming technologies used on this site.</p>';
				 imageHeader[22] = '<h1>Technologies I Used</h1>';
				 menuImage[22] = technologiesImage;
				 btnHTML[22] = 'div#btn2.bCon';
				 descripHeight[22] = '38em';
				 menuChoice[22] = null;
				 imageHeight[22] = '160';
				 imageWidth[22] = '187';
				 url1[22] =  'webTech';
				 url2[22] =  null;  
				 bannerTitle[22] = null;
				 headHeight[22] = null;
				 extraFunction[22] = null;
				 llvImages[22] = null;
			
						
				// Personal Profile			
				 menuTag[23] ='div.aLi:contains("Personal Profile")';
				 menuDescriptionHeight[23] = "10em";
				 menuFontSize[23] = "1.0em";
				 menuHTML[23] = '<p class ="descHdr">My Personal Profile</p><p class ="descBdy">You can view my Linked-In Personal Profile for more info on me.</p>';
				 imageHeader[23] = '';
				 menuImage[23] = myImage;
				 btnHTML[23] = 'div#btn2.bCon';
				 descripHeight[23] = '38em';
				 menuChoice[23] = null;
				 imageHeight[23] = '160';
				 imageWidth[23] = '187';
				 url1[23] = "https://www.linkedin.com/in/rlsworks";
				 url2[23] =  null;  
				 bannerTitle[23] = null;
				 headHeight[23] = null;
				 extraFunction[23] = null;
				 llvImages[23] = null;
			
			
			    // Compute Engine		
				 menuTag[24] ='div.aLi:contains("Compute Engine")';
				 menuDescriptionHeight[24] = "21em";
				 menuFontSize[24] = "1.0em";
				 menuHTML[24] = '<p class ="descHdr">Google Compute Engine Deployment</p><p class ="descBdy">Deployment of the FUEL-CMS version of my web portfolio to Google Compute Engine. '+
								'This site is developed on Cloud9 IDE and a Git Repo copy is uploaded to Google Cloud Virtual Machine.'+
								'The site also uses a sub-domain of my primary site.  Portions of the applications were changed to incorporate database storage in place of server file storage,'+
								'&nbsp;as Google Compute Engine does not support local file access during runtime.</p>';
				 imageHeader[24] = '';
				 menuImage[24] = myImage;
				 btnHTML[24] = 'div#btn3.bCon';
				 descripHeight[24] = '38em';
				 menuChoice[24] = null;
				 imageHeight[24] = '160';
				 imageWidth[24] = '187';
				 url1[24] = "http://www.appeng.rlsworks.com"; 
				 url2[24] =  null;  
				 bannerTitle[24] = null;
				 headHeight[24] = null;
				 extraFunction[24] = null;
				 llvImages[24] = null;
			
                
				// Home Page	   
				 menuTag[25] = 'button:contains("Home")';
				 menuDescriptionHeight[25] = "7em";
				 menuFontSize[25] = "1.1em";
				 menuHTML[25] = '<p class ="descHdr">Home</p><p>Return to the Front Page, which is a GUI of its own that enables navigation of this site.' +
													   '  If you are using Google, check-out the 3-D File Cabinet below as it also allows site navigation</p>';
				 imageHeader[25] = '';
				 menuImage[25] = null;
				 btnHTML[25] = 'div#btn1.bCon';
				 descripHeight[25] = '25em';
				 menuChoice[25] = null;
				 imageHeight[25] = '';
				 imageWidth[25] = '';
			     url1[25] =  'front';
				 url2[25] =  null;  
				 bannerTitle[25] = null;
				 headHeight[25] = null;
				 extraFunction[25] = 'home';
				 llvImages[25] = null;
			
		
				// About Page Button Menu Top	   
				 menuTag[26] = 'button:contains("About")';
				 menuDescriptionHeight[26] = "11.5em";
				 menuFontSize[26] = "1.1em";
				 menuHTML[26] = '<p class ="descHdr">About</p><p>Choose links below to find out about the technologies used to program this site, or to' +
													' Send the author of this site \(Me\) an email.</p>';
				 imageHeader[26] = '<h1>Web Technology</h1>';
				 menuImage[26] = technologiesImage;
				 btnHTML[26] = 'div#btn2.bCon';
				 descripHeight[26] = '39em';
				 menuChoice[26] = null;
				 imageHeight[26] = '160';
				 imageWidth[26] = '187';
				 url1[26] =  null;
				 url2[26] =  null;  
				 bannerTitle[26] = null;
				 headHeight[26] = null;
				 extraFunction[26] = null;
				 llvImages[26] = null;
			
		
		       	// Software Development Button Menu Top	   
				 menuTag[27] = 'button:contains("Software Development")';
				 menuDescriptionHeight[27] = "21em";
				 menuFontSize[27] = "1.0em";
				 menuHTML[27] = '<p class ="descHdr">Software Development</p><p>See links below for software applications I have programmed.' +
									'This site which utilizes the CodeIgniter MVC Framework.  A link to a Code Repository is provided in the list.  Also links for WordPress, Laravel MVC, and Ruby On Rails are provided.</p>';
				 imageHeader[27] = '';
				 menuImage[27] = websiteConstructionImage;
				 btnHTML[27] = 'div#btn3.bCon';
				 descripHeight[27] = '38em';
				 menuChoice[27] = null;
				 imageHeight[27] = '160';
				 imageWidth[27] = '187';
				 url1[27] =  null;
				 url2[27] =  null;  
				 bannerTitle[27] = null;
				 headHeight[27] = null;
				 extraFunction[27] = null;
				 llvImages[27] = null;
			
				
				// Technical Writing Button Menu Top	   
				 menuTag[28] = 'button:contains("Technical Writing")';
				 menuDescriptionHeight[28] = "21em";
				 menuFontSize[28] = "1.0em";
				 menuHTML[28] = '<p class ="descHdr">Technical Writing</p><p>I am also a Technical Writer and the list below includes' +
													' documents I have written using Microsoft Word, Adobe InDesign, as well as, OpenOffice Writer and Illustrator programs.</p>';
				 imageHeader[28] = '<h1>Technical Writing</h1>';
				 menuImage[28] = techWriter;
				 btnHTML[28] = 'div#btn4.bCon';
				 descripHeight[28] = '39em';
				 menuChoice[28] = null;
				 imageHeight[28] = '160';
				 imageWidth[28] = '187';
				 url1[28] =  null;
				 url2[28] =  null;  
				 bannerTitle[28] = null;
				 headHeight[28] = null;
				 extraFunction[28] = null;
				 llvImages[28] = null;
			
				
				// My Resume Button Menu Top	   
				 menuTag[29] = '#btn5 > button';
				 menuDescriptionHeight[29] = "12em";
				 menuFontSize[29] = "1.0em";
				 menuHTML[29] = '<p class ="descHdr">My Resume</p><p>A link to my Resume is below.</p>';
				 imageHeader[29] = '<h1>My Resume</h1>';
				 menuImage[29] = jobDoneImage;
				 btnHTML[29] = 'div#btn5.bCon';
				 descripHeight[29] = '36em';
				 menuChoice[29] = null;
				 imageHeight[29] = '160';
				 imageWidth[29] = '187';
				 url1[29] =  null;
				 url2[29] =  null;  
				 bannerTitle[29] = null;
				 headHeight[29] = null;
				 extraFunction[29] = null;
				 llvImages[29] = null;
			
				
			    
			
		       
		       
		       // Living In Las Vegas Button Menu Top	   
				 menuTag[30] = '#btn6 > button';
				 menuDescriptionHeight[30] = "14em";
				 menuFontSize[30] = "1.0em";
				 menuHTML[30] = '<p class ="descHdr">Living In Vegas</p><p>A link about Las Vegas is below this Button and a Slide Show starts in Just a Moment!</p>';
				 imageHeader[30] = '<h1>My Resume</h1>';
				 menuImage[30] = jobDoneImage;
				 btnHTML[30] = 'div#btn5.bCon';
				 descripHeight[30] = '37em';
				 menuChoice[30] = null;
				 imageHeight[30] = '160';
				 imageWidth[30] = '187'; 
				 url1[30] =  null;
				 url2[30] =  null;  
				 bannerTitle[30] = null;
				 headHeight[30] = null;
				 extraFunction[30] = 'llv';
				 llvImages[30] = [
									llvImage1,
									llvImage2,
									llvImage3,
									llvImage4,
									llvImage5,
									llvImage6,
									llvImage7,
									llvImage8
								  ];
		      
		     //FUEL-CMS Portfolio version Git Repo
				 menuTag[31] = '#hmLi1';
				 menuDescriptionHeight[31] = "16em";
				 menuFontSize[31] = "1.2em";
				 menuHTML[31] = '<p class=\"descHdr\">FUEL-CMS GIT Repository</p><p>Link to GIT Repository for the FUEL-CMS Content Management System.</p>';
				 imageHeader[31] = '<p><center>FUEL-CMS</center></p><p><center> Git Repository</center></p>';
				 menuImage[31] = myImage;
				 btnHTML[31] = 'div#btn1.bCon'
				 descripHeight[31] = '35em';
				 menuChoice[31] = null;
				 imageHeight[31] = '160';
				 imageWidth[31] = '187';
				 url1[31] =  "https://bitbucket.org/Rsyp3rtjr/fuelcms.git";
				 url2[31] =  null;  
				 bannerTitle[31] = null;
				 headHeight[31] = null;
				 extraFunction[31] = null;
				 llvImages[31] = null; 
				 
			//FUEL-CMS Portfolio version CMS Login
				 menuTag[32] = '#hmLi2';
				 menuDescriptionHeight[32] = "16em";
				 menuFontSize[32] = "1.2em";
				 menuHTML[32] = '<p class=\"descHdr\">FUEL-CMS Login</p><p>Login to the FUEL-CMS Content Management System.  Use the Username and Password (guest).</p>';
				 imageHeader[32] = '<p><center>FUEL-CMS</center></p><p><center> Login</center></p>';
				 menuImage[32] = myImage;
				 btnHTML[32] = 'div#btn1.bCon'
				 descripHeight[32] = '35em';
				 menuChoice[32] = null;
				 imageHeight[32] = '160';
				 imageWidth[32] = '187';
				 url1[32] =  "fuel/login";
				 url2[32] =  null;  
				 bannerTitle[32] = null;
				 headHeight[32] = null;
				 extraFunction[32] = null;
				 llvImages[32] = null; 	 
				 
		        
		     //Making Contact
				 menuTag[33] = '#abLi2';
				 menuDescriptionHeight[33] = "7em";
				 menuFontSize[33] = "0.95em";
				 menuHTML[33] = '<p class="descHdr">Making Contact</p><p class="descBdy">You can email me if you like.<br>Also more contact info is given in my resume.</p>';
				 imageHeader[33] = '';
				 menuImage[33] = myImage;
				 btnHTML[33] = 'div#btn2.bCon'
				 descripHeight[33] = '31em';
				 menuChoice[33] = null;
				 imageHeight[33] = '';
				 imageWidth[33] = '';
				 url1[33] =  "email";
				 url2[33] =  null;  
				 bannerTitle[33] = null;
				 headHeight[33] = null;
				 extraFunction[33] = 'arrow';
				 llvImages[33] = null; 
				 
				 
				 
				 //Having Vegas Family Fun
				 menuTag[34] = '#lvLi1';
				 menuDescriptionHeight[34] = "5em";
				 menuFontSize[34] = "0.95em";
				 menuHTML[34] = '<p class="descHdr">Having Vegas Family Fun</p><p>Discover Las Vegas Fun!</p>';
				 imageHeader[34] = '';
				 menuImage[34] = null;
				 btnHTML[34] = 'div#btn6.bCon'
				 descripHeight[34] = '28em';
				 menuChoice[34] = null;
				 imageHeight[34] = '';
				 imageWidth[34] = '';
				 url1[34] =  'inVegas';
				 url2[34] =  null;  
				 bannerTitle[34] = null;
				 headHeight[34] = null;
				 extraFunction[34] = 'vegasFun';
				 llvImages[34] = null;  
		       
		
	        for(var i=0;i<menuTag.length;i++){
	        	
	        		headerAnimation(menuTag[i],menuDescriptionHeight[i],menuFontSize[i], menuHTML[i], imageHeader[i], menuImage[i],btnHTML[i],
					descripHeight[i],menuChoice[i],imageHeight[i],imageWidth[i],url1[i],url2[i],bannerTitle[i],headHeight[i],extraFunction[i],llvImages[i]);
	        }	
		
		});   // End of Document Ready
		    

	
			
     function laravelMVCExtra(laravelMVCImage){
     	    
     	    
     	    var el = $('<button id="lavApp1" class="lavApp">App 1</button><button id="lavApp2" class="lavApp">App 2</button><button id="lavApp3" class="lavApp">App 3</button>');
			$('#bDiv').show();					
     	    $('#bDiv').html(el);
     	    $('#descrip').css('height','97%');
     	    $('#textDv').css('height','95%');
	  	    $('#bText').css('height','65%');
	  	    $('#bDiv').css('height','30%');
			
			var el2 = $('<img src='+laravelMVCImage+'  alt="" height="160" width"187">');
		    $('#imageHolder').html(el2);
		    $('#imageHolder').prepend('<h1>Laravel<br>MVC Development</h1>').css('text-align','center').addClass("doSpin");
		 
			$('#menuDescription #imageHolder img').css('width','75%').css('height','75%').css('margin','1em');
					      if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
					        	 $('#menuDescription #imageHolder img').css('height','15em').css('width','15em').css('margin-top','1em');						  	
		 	
		 	
			$('#lavApp1').on('mousedown',function(){
					var url = "https://protected-dawn-70064.herokuapp.com";  
				    $(location).attr('href',url);
			});
			
		
	       	$('#lavApp1').on('mouseenter',function(){
					$('#bText').fadeIn(1000).html('<p class="descHdr">Laravel MVC -- Training</p><p>I was asked to complete Laravel MVC program in application for a jobs.' + 
			' I  learned the following technologies to complete the program in about 2 weeks:  Laravel MVC, Twitter Bootstrap, Active Campaign API, Facebook and GitHub authentication.' + 
			' The program uses Facebook and GitHub authentication and allows a user to create contacts and register them with Active Campaign.&nbsp;&nbsp;<font color="blue">Code can be seen at:&nbsp;&nbsp;</p><p>https://Rsypertjr@bitbucket.org/Rsypertjr/learnlaravel.git</font></p>');
	
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
					var url = "https://safe-bayou-92699.herokuapp.com/";  
				    $(location).attr('href',url);
			});
			
			$('#lavApp3').on('mousedown',function(){
					var url = "https://safe-bayou-92699.herokuapp.com/cinp";  
				    $(location).attr('href',url);
			});
     }	
			
			

	  function angular2Extra(){ 
	  	    
	  	       var el = $('<button id="angApp1" class="angApp">Git Repo 1</button><button id="angApp2" class="angApp">Git Repo 2</button>');
     	        $('#descrip').css('height','97%');
	  	        $('#textDv').css('height','95%');
	  	        $('#bText').css('height','65%');
	  	        $('#bDiv').css('height','30%');
			    $('#bDiv').show();	
		        $('#bDiv').html(el);
				$('#angApp1').on('mousedown',function(){
						var url = "https://github.com/Rsypertjr/angularRedux.git";
				        $(location).attr('href',url);
				});
				
				
				$('#angApp2').on('mousedown',function(){
						var url = "https://github.com/Rsypertjr/angReduxJServer.git";
				        $(location).attr('href',url);
				});
				
			
		       	$('#angApp1').on('mouseenter',function(){
						$('#bText').fadeIn(1000).html('<p class="descHdr">Git Repo #1</p><p>Click Here to see Git Repository for this app.</p>');
		       	});		
		       	
		       	$('#angApp2').on('mouseenter',function(){
						$('#bText').fadeIn(1000).html('<p class="descHdr">Git Repo #2</p><p>Click Here to see Git Repository for another version of this app that runs on localhost.&nbsp;&nbsp; '+
						'It also runs json-server on the localhost which emulates an API server with which this app performs REST functions with.</p>');
		       	});	
										  
	  }

   function arrow(){
   	       	$('#catchMenu').hide();
			$('#imageHolder').hide();
			$('#bDiv').hide();
			
			$('#descrip')
			    .css('height','5em')
				.css('display','block')
				.css('z-index','200')
				.css('font-size','1.0em');
		
			$('#menuDescription').css('opacity','0.80');
		
			$('#headbar').css('height','31em');
			$('#arrowImg').css('display','block').css('z-index','700').addClass('arrowMove');
   }

  function llvExtra(llvImages){
  	        $('#catchMenu').hide();
  	        $('#imageHolder').hide();
  	        $('#lvImgDiv').show();
		    var $el = $('<img src="'+llvImages[5]+'" alt="" height="252" width="600"></img>');
		
			$('#descrip').css('display','block')
								 .css('height','20em')
								 .css('width','60%')
								 .css('padding','0em')
								 .css('margin','0em')
								 .css('left','0em')
								 .css('font-size','1.0em');
								 
			$('#textDv').css('width','38%').css('padding','0em').css('font-size','1.0em').css('margin','0em');
		    $('#bText').html('<p class="descHdr">Living In Vegas</p><p>A link about Las Vegas is below this Button and a Slide Show starts in Just a Moment!</p>')
		               .css('font-size','1.2em').css('width','98%').css('text-align','left').css('margin','0em 0em 0em 0em').css('padding','0em');
		    $('#lvImgDiv').html($el); 
		 	$('.descHdr').css('margin','0em').css('padding','0em');
			$('#menuDescription').css('height','auto').css('padding','1em')
								 .css('font-size','1.0em');					 
								 
		    $('#lvImgDiv').css('position','relative').css('float','right').css('left','27em').css('top','0em').css('margin','auto')
		    			  .css('opacity','0.85').css('width','54%').css('height','85%')
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
								
							 $('#lvImgDiv').css('position','relative').css('float','right').css('left','27em').css('top','0em').css('margin','auto')
						    			   .css('opacity','0.85').css('width','54%').css('height','85%')
						    			   .css('padding','auto').css('transform','scale(1,1)');
		    	
		    				 $('#lvImgDiv img').css('margin','0em').css('float','right').css('width','98%').css('height','98%').fadeOut(250).fadeIn(250);			  
				
							 
							  }, 4000);  
  }
  	


      function headerAnimation(menuTag, menuDescriptionHeight, menuFontSize, menuHTML, imageHeader, menuImage, 
             btnHTML, descripHeight,menuChoice,imageHeight,imageWidth,url1=null,url2=null,
             bannerTitle=null,headHeight=null, extraFunction=null,llvImages=null)     {
      			$(menuTag)	
					.on('mouseenter',function()
						{
						
						    //alert(menuTag);
						   
						    var $el = $('#menuDescription');
						    $('#headbar').append($el).css('height',descripHeight);
						    $('#catchMenu').show();
  	        				$('#imageHolder').show();
  	        				$('#lvImgDiv').hide();
						    $('#bDiv').hide();
						    $('#bText').show().css('font-size','1.0em');
						    
						    
						    $('#menuDescription').css('height','24em')
						                         .css('left','0em').css('text-align','left').css('float','left');
						                         
						                         
						    
							if(extraFunction != 'llv'){  // Do All Other Apps
							
						
									if(extraFunction == 'home' || extraFunction == 'vegasFun'){
											$('#catchMenu').hide();
									   		$('#lvImgDiv').hide();
									   		$('#imageHolder').hide();
									   		$('#menuDescription').css('height',menuDescriptionHeight).css('opacity','1.0');
									   		$('#descrip').css('height','98%')
									   					 .css('left','0em');
		    								$('#headbar').css('height',descripHeight);
										    $('#descrip,#textDv,#bText').css('padding','0em').css('margin','0em').css('text-align','center').css('width','98%');
										
											$('#bText').html(menuHTML)
											           .css('font-size','1.4em');
										
											$('#headbar').css('height','23em');
										}
									else if(extraFunction != 'home'){
											
											    $('#menuDescription').css('height',menuDescriptionHeight);
												$('#textDv').css('width','60%');
												$('#imageHolder').css('width','25%');
												$('#bText').html(menuHTML).css('width','98%');
												$('#descrip,#textDv,#bText').css('padding','0em').css('margin','0em');
																  
										}
									  
								     
									   
									   if(extraFunction != 'laravelMVC' || menuImage == null){
					                        $el = $('<img src='+ menuImage + ' alt="">'); 
										    $('#imageHolder').html($el);
									   	   	$('#imageHolder').css('text-align','center').prepend(imageHeader).css('top','15em').addClass("doSpin").css('top','0em');
												   	                                     
									        
									        $('#menuDescription #descrip #imageHolder')
									        	   .css('position','relative')
		    							           .css('float','right')
		    							           .css('font-size','0.55em')
		    									   .css('height','60%')
			                                       .css('padding','auto')
			                                       .css('width','22%')
			                                       .css('margin','0em');
									        
									        
									        $('#menuDescription #imageHolder img').css('width','75%').css('height','75%').css('margin','1em');
									        if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
									        	 $('#menuDescription #imageHolder img').css('height','70%').css('width','70%').css('margin-top','1.5em');
									   }
									
									   if(extraFunction != null){
											if(extraFunction == 'angular2')
												angular2Extra();
										    if(extraFunction == 'laravelMVC')
												laravelMVCExtra(menuImage);
											if(extraFunction == 'arrow')
												arrow();
									   }
									   else if(menuTag == '#hmLi1' || menuTag == '#hmLi2' ||
									           menuTag == 'div.aLi:contains("Dynamic HTML Resume")' ||
									           menuTag == '#btn5 > button' ||
									           menuTag == 'button:contains("About")' ||
									           menuTag == 'div.aLi:contains("Web Page Technologies Used")' ||
									           menuTag == 'div.aLi:contains("Personal Profile")'){   // Fuel CMS
									           
									           
									   		$('#catchMenu').hide();
									   		$('#lvImgDiv').hide();
									   	//	$('#imageHolder').hide();
									   		$('#menuDescription').css('padding','1em').css('height','16em').css('opacity','1.0');
									   		
									   	    $('#menuDescription #descrip #imageHolder').css('position','relative')
					    							           .css('float','right')
					    							           .css('font-size','0.6em')
					    									   .css('height','70%')
						                                       .css('padding','auto')
						                                       .css('width','12%')
						                                       .css('margin','0em');
						    
					                                        
									        $('#menuDescription #imageHolder img').css('width','60%').css('height','60%').css('margin','1em');
									        if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
									        	 $('#menuDescription #imageHolder img').css('height','80%').css('width','80%').css('margin-top','1em');	
									   		
									   		$('#descrip').css('width','98%').css('height','98%').css('padding','1em')
									   					 .css('margin','auto').css('float','left')
									   					 .css('text-align','left');
									   		$('#textDv').css('width','60%');
									   		
									   		$('#menuDescription,#textDv,#descrip,#bText').css('text-align','left').css('font-size','1.0em');
									   		
									   		if(descripHeight != '')
		    									$('#headbar').css('height',descripHeight);
		    								else
		    									$('#headbar').css('height','28em');
								   }
								   
								
									    
							}
						else if(extraFunction == 'llv')
								llvExtra(llvImages);
						else if(extraFunction == 'arrow')
								arrow();		
							
							
						})
					.on('mouseleave',function()
						{
						  // Determinine header container height
					        var $el = $('#menuDescription');
					        $el.css('opacity','1.0');
						    $('#headbar').append($el).css('height',descripHeight);
						    if(extraFunction == 'llv')
						    	clearInterval(viewer);	
						    	
						  if(!(extraFunction == 'llv')) 
								$('lvImgDiv').hide();
								
						  $('#textDv').css('margin','0em');
						  $('#arrowImg').hide();
					
						})
					.on('mousedown touchstart',function()
						{
							if(menuChoice != null){
									$(this).css('color','yellow');
									$("#itemform input[name='itemchoice']").val(menuChoice);
									$("#itemform input[name='itemchoice2']").val('none');
									$('#itemform').submit();
							}
							if(url1 != null || url2 != null){
								    url = url1;
								    if(url == null)
								    	url = url2;
									$(this).css('color','yellow');
									if(url.indexOf('http') >= 0){
											window.open(url,'_blank');
										}
									else
										$(location).attr('href',url);
							}
							
					
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
					<div id="sdLi8" class="aLi">Code Repository</div>
					<div id="sdLi9" class="aLi">GIT Repository</div>
					<div id="sdLi11" class="aLi">Play Othello Game thru AJAX</div>
					<div id="sdLi12" class="aLi">Angular2 JavaScript and Redux State Container</div>
					<div id="sdLi13" class="aLi">Google Compute Engine Deployment</div>
					<div id="sdLi14" class="aLi">Laravel MVC</div>
					<div id="sdLi15" class="aLi">Ruby On Rails -- Training</div>
					
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
				<div id="lvImgDiv"></div>
			</div>
		</div>
	</div>
  </div>
	
