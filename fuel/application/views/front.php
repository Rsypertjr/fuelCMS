 <?php
	            
			$slugs = array('amino','dynResume','inVegas','orominer1','orominer2','othello','techWriter');
		    $GLOBALS['menuOpts'] = array();
		    $GLOBALS['ind'] = 0;
		    $i = 0;
		    foreach($slugs as $slug){
					    $menuOpts[$i] = fuel_model('frontMenuOpts',array('find' => 'one', 'where' => array('slug' => $slug)));
					    //echo $menuOpts[$i]->slug.'<br>';
		                $i++;
		   }
		   
		 /*  	$slugs = array('about','angular2a','caribCater','caribStore','codeStore','codetech','computeEng','engSpec','fuelLogin','fuelGIT',
				               'frontPage','gitRepo','GraingerABCDE','GraingerCDE','inVegas','laravelMVC','maintHeader', 'makeContact',
				               'mecProductManual','miniMotif','mobile','oroHist','orominer','othello','othelloAjax',
				               'profile','resume','resumeButton','rubyRails','software','techWritingButton',
				               'techWritingHeader','vegasFun','webTech','whitePaper','wpPortfolio');
		     $GLOBALS['menuOpts'] = array();
			    $GLOBALS['ind'] = 0;
			    $i = 0;
			    foreach($slugs as $slug){
						    $menuOpts[$i] = fuel_model('headMenuOpts',array('find' => 'one', 'where' => array('slug' => $slug)));
						    echo $menuOpts[$i]->slug.'<br>';
			                $i++;
			   }
		   
		   */
		
  ?>
  <script type="text/javascript">
		
		     function shuffle(array) {     //  Fisher-Yates (aka Knuth) Shuffle.
										  var currentIndex = array.length
											, temporaryValue
											, randomIndex
											;

										  // While there remain elements to shuffle...
										  while (0 !== currentIndex) {

											// Pick a remaining element...
											randomIndex = Math.floor(Math.random() * currentIndex);
											currentIndex -= 1;

											// And swap it with the current element.
											temporaryValue = array[currentIndex];
											array[currentIndex] = array[randomIndex];
											array[randomIndex] = temporaryValue;
										  }

										  return array;
									}
		
		
				
			$(document).ready(function()
					{
						 
						
					      // Browser Capatability for background images
						   var  httpAgent = <?php echo json_encode($_SERVER['HTTP_USER_AGENT']); ?>;
                           var chrome = httpAgent.search("Chrome");
						   var firefox = httpAgent.search("Firefox");
						   var ie =  httpAgent.search("Windows NT");
						   var edge =  httpAgent.search("Edge");
						   
						   if(chrome > 0 && !(edge>0)){
							// Inital Menu Descrip
							$('#clkmess').hide().css('width','70%').css('margin','2.5em 0em 0em 13%').css('cursor','pointer').css('padding','0.5em').text('Click Here to See a 3-D File Cabinet!').show();
						  	$('#catchCab').hide();
							$('#description').css('height','auto').css('padding','1em').show();
							$('#getHeight').html('Hover over Program or Work Item to the left for its Descripition.<p>Then \'Click\' Button'+
								' that will appear.</p>').css('width','96%').css('height','auto').css('margin','0em').css('padding','0em').css('font-size','1.1em').show();
							$('#outframe, #outframebg').css('height','45em');
							
							
							//Set up Blinking Button and span
							setInterval(function(){
												$('#clickdiv1')	
													.animate({opacity:'0.5'},500)
													.animate({opacity:'1.0'},500);
												$('#clkmess')	
													.animate({opacity:'0.5'},500)
													.animate({opacity:'1.0'},500);
											},25);
						   }
						   else{
						   		$('#getHeight').html('Hover over Program or Work Item to the left for its Descripition.<p>Then \'Click\' Button'+
							' that will appear.</p>');     
						   }
					
						  if(edge > 0)
								   {
							   			$('#container').css('display','none');
							   			$('#outframe, #outframebg').css('height','45em');
								   			
								   } 
								
						  if((chrome < 0) && (firefox < 0) && (edge < 0)) // For Internet Explorer
									{
										$('#container').css('display','none');
							
									}
						
					      $('.clkmess:contains("Click")').mousedown(function(){$(this).css('background-color','white');
														 	                   $(this).mouseup(function(){$(this).css('background-color','#ff8080');});
														 }) ; 
							
							
		/**********************    HIDE/SHOW FILE CABINET ********************************************************/
					     $('#clkmess').mousedown(getCab);   // Select whether to see 3-D File Cabinet				 	
		
				// Load Images ***********************************************************************************
						
					
						 var imgfile  = "<?php echo $vars['engImg']; ?>";
						 var tbimgfile  = "<?php echo $vars['mechEngImage2']; ?>";
						 var topLabel  = "<?php echo $vars['topLabel']; ?>";
						 var imgfile2  = "<?php echo $vars['worksImg']; ?>";
						 var csimagefile  = "<?php echo $vars['compSciImage']; ?>";
						 var mathhonorimg = "<?php echo $vars['mathhonorimg']; ?>";
						 var procprojengimg  = "<?php echo $vars['procprojengimg']; ?>";
						 var techwritingimg  = "<?php echo $vars['techwritingimg']; ?>";
						 var doorHandle  = "<?php echo $vars['doorhandle']; ?>";
									
								
				/**************  LEFT MENU LOGIC **********************************************************/
				
                                  $('#clickdiv1').hide();
                                  $('#clickdiv2').hide();
                                  $('#clickdiv3').hide();
                                  $('#clickdiv4').hide();
                                  $('#clickdiv5').hide(); 
                              //    $('#clickdiv6').hide();
                              //    $('#clickdiv7').hide(); 
								  $('#clickdiv8').hide();
								  $('#clickdiv9').hide(); 
								  
								  // Prepare Description to Show
								  $('#description').css('color','green');
								  //$('#description').css('padding','20px');
								//  $('#description').css('height','auto').animate({fontSize:'1.3em'},50);
								  $('#description').show(); 
													
                                  $('.menuitem').bind('mouseover',function()
                                    {
                                        $(this).css('background-color','tan');
                                        $('#description').css({'border': '40 ridge brown'});
                                    });
                                     
                                 $('.menuitem').bind('mouseleave',function()
	                                {
	                                    $(this).css('background-color','beige');
	                                    $('#description').css({'border': '20 ridge gray'});
	                                    
	                                    $('#outframebg').animate({opacity:'0.60'},"slow");
										$('#outframebg').animate({opacity:'0.30'},"slow");
										$('#outframebg').animate({opacity:'0.10'},"slow");
										$('#outframebg').animate({opacity:'0'},"slow");
										$('#outframebg').animate({opacity:'0.10'},"slow");
										$('#outframebg').animate({opacity:'0.30'},"slow");
										$('#outframebg').animate({opacity:'0.60'},"slow");
							
	                                }); 
                                    
                              	  $('#leftmenu').on('mouseover',function()
								   {
									   $('#description').css('border','solid 30px brown').css('padding','1em').css('height','auto');
									   $('#clkmess').hide();
									   $('#catchCab').hide();
									   $('#getHeight').css('width','96%').css('height','auto').css('margin','0em');
									   
									   
								   });
								   
                                  $('#leftmenu').on('mouseleave',function()
								   {
									    $('#description').css('border','ridge 20px grey').css('height','auto').css('padding','1em');
									    $('#catchCab').hide();	
									    $('#clkmess').show();
										$('#getHeight').html('<div>Hover over Program or Work Item to the left for its Descripition.<p>Then \'Click\' Button'+
										' that will appear.</p></div>').css('width','96%').css('height','auto')
										                               .css('font-size','1.1em').css('margin','0em').css('padding','0em').show();
										$('#clkmess').text('Click Here to See a 3-D File Cabinet!').css('width','70%').css('padding','0.5em').css('margin','2.5em 0em 0em 13%').css('cursor','pointer');
									
								   });
								   
								   
								$('#upPointer, #downPointer').on('mouseenter',function()
								   {
										$('#description').css('border','ridge 20px grey').css('height','auto').css('padding','1em'); 
									    $('#catchCab').hide();	
										$('#getHeight').html('Hover over Program or Work Item Below for its Descripition.<p>Then \'Click\' Button'+
										' that will appear.</p>').css('width','96%').css('height','auto').css('font-size','1.1em').css('margin','0em').css('padding','0em').show();
										$('#clkmess').show().text('Click Here to See a 3-D File Cabinet!').css('width','70%').css('padding','0.5em').css('margin','2.5em 0em 0em 13%').css('cursor','pointer');
									
								   });
								   
								    

								
							
									
                                $('.menuitem').on('mouseleave',function()
	                                {
	                                   $(this).css('background-color','beige');
									   $('.clkmess').stop();
								
	                                });    
                                    
								   
							   var dispHeight = $('#display').height();
							   var pos = 0;
							   var bot = 0;
							   
                                var slug = [];
                				var btnHTML = [];
								var menuHTML = [];
								var divNum = [];
								var url = [];
				              
				        		var index = "<?php foreach($menuOpts as $item){?>";
				        		
				        			slug.push("<?php echo $item->slug; ?>");
				        			btnHTML.push("<?php echo $item->btnHTML; ?>");
				        			menuHTML.push("<?php echo $item->menuHTML; ?>");
				        			url.push("<?php echo $item->url; ?>");
				        			divNum.push("<?php echo $item->divNum; ?>");
				        		var index2 = "<?php } ?>";
				     
                                for(var i=0;i<btnHTML.length;i++){
                                	//leftMenu(btnHTML[i],menuHTML[i],divNum[i],url[i]);
                                	$(btnHTML[i]).mouseover({mt:btnHTML[i],md:menuHTML[i],dn:divNum[i],url:url[i],ct:$('#catchCab #container')},leftMenu);
							    	$(btnHTML[i]).mousedown(getCab);
                                }
							   
							   
						        var position = $('#outframe').position();
								var left = position.left;
								var top = position.top;
								var width = $('#outframe').width();
								var height = $('#outframe').height();
								var width2 = $('#footContainer').width();
								
								$('#description').css('color','black');
								$('#outframebg').css('background-image','url('+imgfile+')');
								$('#outframebg').animate({opacity:'0.60'},"slow");
							
								
								// Display of Menu Items with Arrows
								$('#upPointer').css('display','block');
								$('#orominer').css('display','block');
								$('#oroHist').css('display','block');
								$('#othello').css('display','block');
								$('#miniMotif').css('display','block');
								$('#technicalWriting').css('display','none');
								$('#resume').css('display','none');
								$('#livingInVegas').css('display','none');
								$('#downPointer').css('display','none');
								
								
								var menuItemList = new Array();
								menuItemList[0] = "#orominer";
								menuItemList[1] = "#oroHist";
								menuItemList[2] = "#othello";
								menuItemList[3] = "#miniMotif";
								menuItemList[4] = "#technicalWriting";
								menuItemList[5] = "#resume";
								menuItemList[6] = "#livingInVegas";
								
								var topIndex = 0;
								$('#downPointer').click(function()
									{
										topIndex--;
										if(topIndex <= 0)
											{
											  topIndex = 0;
											  $('#upPointer').css('display','block');
											  $('#downPointer').css('display','none');
											}
										else
											{
											  $('#upPointer').css('display','block');
											  $('#downPointer').css('display','block');
											}  
										$('#orominer').css('display','none');
										$('#oroHist').css('display','none');
										$('#othello').css('display','none');
										$('#miniMotif').css('display','none');
										$('#technicalWriting').css('display','none');
										$('#resume').css('display','none');
										$('#livingInVegas').css('display','none');	
										$(menuItemList[topIndex]).css('display','block');
										$(menuItemList[topIndex+1]).css('display','block');
										$(menuItemList[topIndex+2]).css('display','block');
										$(menuItemList[topIndex+3]).css('display','block');
									});
									
								$('#upPointer').click(function()
									{
										topIndex++;
										if(topIndex > 6)
											{
												topIndex = 6;
												$('#upPointer').css('display','none');
											    $('#downPointer').css('display','block');
											}
										else
											{
												$('#upPointer').css('display','block');
											    $('#downPointer').css('display','block');
											}
											
										$('#orominer').css('display','none');
										$('#oroHist').css('display','none');
										$('#othello').css('display','none');
										$('#miniMotif').css('display','none');
										$('#technicalWriting').css('display','none');
										$('#resume').css('display','none');
										$('#livingInVegas').css('display','none');	
										$(menuItemList[topIndex]).css('display','block');
										$(menuItemList[topIndex+1]).css('display','block');
										$(menuItemList[topIndex+2]).css('display','block');
										$(menuItemList[topIndex+3]).css('display','block');	
									});
						
						
                                    
/****************************************************** End LEFT MENU LOGIC *****************************************************/		    

	
	/******************** CABINET CODE ***********************************************************************************************/		
			 // Cabinet Descriptions
			$('.drawer1 back,.drawer1 right,.drawer1 left,.drawer1 back,.drawer1 top,.drawer1 bottom').css('display','none');
            $('#cabinet').add('#cabinet > figure.cab front').mouseenter(
			  function()
				{
					$('.drawer1 back,.drawer1 right,.drawer1 left,.drawer1 back,.drawer1 top,.drawer1 bottom').css('display','block');
					$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
				    
				    $('#clkmess').hide();
				
				});
		
		
		    $('#cabinet').mouseleave(
			  function()
				{
				   $('#clkmess').show();
				
				});
		
		
		
									
		//  Front Cabinet Drawer Descriptions
						$('#cabinet > figure.drawer1.front').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">Software Development</p><p><mark>Hover over Folders</mark> above for description of Software Applications I\'ve coded.</p><p><mark>Click on Folder</mark> to Open Application.</p>');
								    
								});
								
				        $('#cabinet > figure.drawer1.front').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								});
						
						
						$('#cabinet > figure.drawer2.front').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">Technical Writing</p><p><mark>Hover over Folders</mark> above for description of Technical Documents I\'ve coded.</p><p><mark>Click on Folder</mark> to Open Document.</p>');
								
								});
								
				        $('#cabinet > figure.drawer2.front').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								});
						
						$('#cabinet > figure.drawer3.front').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">Engineering</p><p><mark>Hover over Folders</mark> above for information on my Engineering experience.</p><p><mark>Click on Folder</mark> to Open it.</p>');
								
								});
								
				        $('#cabinet > figure.drawer3.front').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								});
						
						
						$('#cabinet > figure.drawer2.file1').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">Product and Maintenance Manuals</p><p><mark>Hover over Yellow File Folders</mark> above for information on the Technical Documents I\'ve written.</p><p><mark>Click on Folder</mark> to Open it.</p>');
									
								});
								
				        $('#cabinet > figure.drawer2.file1').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								});
					
						
						$('#cabinet > figure.drawer2.folder1').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">Grainger ABCDE Series B</p><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a ' +
								           ' Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it using Adobe InDesign according to the customer\'s style rules</p>');
								
								});
								
				        $('#cabinet > figure.drawer2.folder1').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								});
						
						
						
						
						$('#cabinet > figure.drawer2.folder2').mouseenter(
							function()
								{ 
									$('#getHeight').html('<p class="descHdr">Grainger CDE</p><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a ' +
								           ' Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it in Adobe InDesign according to the customer\'s style rules</p>');
								
								});
								
				        $('#cabinet > figure.drawer2.folder2').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								});
					
						$('#cabinet > figure.drawer2.folder3').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">MEC Product Manual VT 1.6</p><p>This is a Product Manual for a ' +
								           ' Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it in Adobe InDesign according to the customer\'s style rules</p>');
								
								});
								
				        $('#cabinet > figure.drawer2.folder3').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								});
											
					   $('#cabinet > figure.drawer2.file2').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">White Paper</p><p>This is a technical specification called a White Paper' + 
																				' which explains the technology behind a companies\' product.  In this case an Electrical Motor Energy Efficiency Device.</p>');
								
								});
								
				        $('#cabinet > figure.drawer2.file2').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								}); 
					
					
					
					     $('#cabinet > figure.drawer2.file3').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">Engineering Specification</p><p>This is a technical specification for' + 
																				' the Clark County Land Development Approval process.  I authored it as an Environmental Health Engineer for Southern Nevada Health District.</p>');
								
								});
								
				        $('#cabinet > figure.drawer2.file3').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								}); 
					
					
					    
						$('#cabinet > figure.drawer2.file4').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">Code Development Specification</p><p>This is a technical specification for' + 
																				' guidance in developing Object Oriented Code.  It was written as a HTML document.</p>');
								
								});
								
				        $('#cabinet > figure.drawer2.file4').mouseleave(
							function()
								{
									$('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								}); 
						
						
						
						
						$('#cabinet > figure.drawer1.file1').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">Amino Acid Code Sequence Analyzer</p><p>This program gives statistics for all combinations of amino acid sequences within a protein.  The protein sequence is parsed by regex techniques from a text file, into a MySQL database.'+
											'The first and last amino acid is chosen in the GUI, as well as, the desired statistical output.  The database accessed by JavaScript-AJAX to PHP-MySQL on the server side which returns the statistics.</p>');
								
								});
								
			
			
						$('#cabinet > figure.drawer1.file2').mouseenter(
							function()
								{
									$('#getHeight').html('<p class="descHdr">Play Othello Game</p><p>This is an adaptation of the Classic Othello game where one player competes with the Computer.'+
											'Two Player Play could be implemented, as well as, making levels of difficulty for game play.</p>');
								
								});
								
			
						
						
						$('#cabinet > figure.drawer1.file3').on('mouseenter mouseover mousemove',
							function()
								{
									$('#getHeight').html('<p class="descHdr">Human Organ System Analyzer 1</p><p>The Orominer program shows a hierarchical organization of the human body constitution.'+
												' Its top level is Organ Systems. It uses JavaScript, JQuery for event synchronization between hierarchical display and graphic display, as well as, ' +
									'dynamic generation of SVG graphical elements based on DOM HTML elements. MySQL Database information is converted into XML format using PHP for up front access by the code for generation of Hierachical Display.  Unfortunately ONLY THE First 3 NODES Of DATA was developed at Project Completion.</p>');
								
								});
								
			
						
						
						$('#cabinet > figure.drawer1.file4').on('mouseenter mouseover mousemove',
							function()
								{
									$('#getHeight').html('<p class="descHdr">Human Organ System Analyzer 2</p><p>This orominer program contains Histological Data within the Hierarchical Organization of Human Body makeup.  Histological Data is information about' +
																						      ' Human Organs and their tissues and cells</p>');
								
								});
								
		
						
							$('#cabinet > figure.drawer3.file2').mouseenter(
							function()
								{
								   
									$('#getHeight').html('<p class="descHdr">Manufacturing Process/Project Engineer</p><p>I was for 8 years a Manufacturing Process Engineer who led projects in Technology Research; Collaborative ' +
									'Design with in-house and vendor technical personnel; Procurement; and Implementation of Computer-automated manufacturing systems.  Details can be found in my Dynamic HTML Resume w/Downloads in Html and PDF formats.  The HTML Resume Format Only Uses CSS and no JavaScript!</p>');
								});
								
				        $('#cabinet > figure.drawer3.file2').mouseleave(
							function()
								{ 
								    $('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								}); 

						
						$('#cabinet > figure.drawer3.file1').mouseenter(
							function()
								{
								   
									$('#getHeight').html('<p class="descHdr">Environmental Health Engineer</p><p>I have experience in reviewing land development applications for Clark County.' +
									' Information about this job is in my resume found with the above link.  Click on This Link to access the technical specification I authored of this Engineering Review Process.</p>');
								});
								
				        $('#cabinet > figure.drawer3.file1').mouseleave(
							function()
								{ 
								    $('#getHeight').html('<p><mark>To Open File Cabinet Drawer</mark>, hover mouse over it.</p><p><mark>To Close File Cabinet Drawer</mark>, click it or move to another drawer.</p><p><mark>To Open File Folder</mark>, hover over and click</p>');
							    
								}); 
						
	
								$('div#softwareDevWork,div#technicalWritingWork,div#engineeringWork,div#contacts,div#techManuals').mouseenter(
									function()
										{
										
										 // find top-level menu children
										  var len = 0;
										  len = $(this).find('.lev3, .lev4').length;
										  if(len > 0)// change arrow icon if children
											{
												$(this).children('.lev1 >.ui-icon')
													.removeClass('ui-icon-triangle-1-s')
													.addClass('ui-icon-triangle-1-e');
												
											
												$(this).mouseleave(function()
													{
														$(this).children('.lev1 >.ui-icon')
															.removeClass('ui-icon-triangle-1-e')
															.addClass('ui-icon-triangle-1-s');
														
													});
													
												$(this).children('.lev3 >.ui-icon')
													.removeClass('ui-icon-triangle-1-s')
													.addClass('ui-icon-triangle-1-e');
											
												$(this).mouseleave(function()
													{
														$(this).children('.lev3 >.ui-icon')
															.removeClass('ui-icon-triangle-1-e')
															.addClass('ui-icon-triangle-1-s');
													});
											}
									
										});
				
						
								//$('div#cabinet').addClass("turn1",1000);
								//$('div#cabinet').addClass("turn2",1000);
							    //$('div#cabinet').addClass("showCab2",2000);
							    //$('div#cabinet').addClass("showCab4",2000);
							     
							    $('div#cabinet').addClass("doRotateCab");
								$('#cabinet figure.drawer1.left').add('#cabinet figure.drawer1.right').add('#cabinet figure.drawer1.back').css('display','none');
								$('#cabinet figure.drawer2.left').add('#cabinet figure.drawer2.right').add('#cabinet figure.drawer2.back').css('display','none');
								$('#cabinet figure.drawer3.left').add('#cabinet figure.drawer3.right').add('#cabinet figure.drawer3.back').css('display','none');
							
							
							   
							
							 
							
								
								// DRAWER #1
								$('#cabinet figure.drawer1.front').on('mouseenter',function()
									{
										// Animate File Cabinet Rotation
										$('div#cabinet').removeClass("showCab");
										$('div#cabinet').removeClass("showCab2");
									    $('div#cabinet').addClass("showCab3",1000);
									
										// Open Drawer #1 on mouseenter
										$(this).css('border','5px solid black');
										$(this).css('-webkit-transform','rotateX(0deg) translateZ(350px)');
										$('#cabinet figure.drawer1.left').css('display','block').css('border','5px solid black').css('-webkit-transform','rotateX(0deg) rotateY(0deg) translateZ(198px) rotateY(-90deg) translateZ(162px) translateX(-10px)');
										$('#cabinet figure.drawer1.right').css('display','block').css('border','5px solid black').css('-webkit-transform','rotateX(0deg) rotateY(0deg) translateZ(198px) rotateY(90deg) translateZ(162px) translateX(-10px)');
										$('#cabinet figure.drawer1.back').css('display','block').css('background-color','black');
										
										// Pop-Up File for Drawer #1
										$('#cabinet figure.drawer1.file1').css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(180px) scaleX(0.8) scaleY(1.3) translateY(-15px) rotateX(0deg) translateZ(150px)')
												.css('display','block')
												.css('border-top-color','peru')
												.css('border-top-style','solid')
												.css('border-top-left-radius','1em')
												.css('border-top-right-radius','1em')
												.css('border-top-width','3px')
												.html('Amino Acid Code Sequence Analyzer')
												.on('click', function()
													{
														$(this).css('opacity','0.5');
														$(this).css('color','red');
														//$(location).attr('href','amino');
														window.open('amino','_blank');
													});												
												
										$('#cabinet figure.drawer1.file2').css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(180px) scaleX(0.8) scaleY(1.4) translateY(-35px) rotateX(0deg) translateZ(130px)')
												.css('display','block')
												.css('border-top-color','peru')
												.css('border-top-style','solid')
												.css('border-top-left-radius','1em')
												.css('border-top-right-radius','1em')
												.css('border-top-width','3px')
												.html('Play Othello Game')
												.on('click', function()
												   {	
														$(this).css('opacity','0.5');
														$(this).css('color','red');
														//$(location).attr('href','othello');
														window.open('othello','_blank');
													});		

										
										$('#cabinet figure.drawer1.file3').css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(180px) scaleX(0.8) scaleY(1.4) translateY(-60px) rotateX(0deg) translateZ(110px)')
												.css('display','block')
												.css('border-top-color','peru')
												.css('border-top-style','solid')
												.css('border-top-left-radius','1em')
												.css('border-top-right-radius','1em')
												.css('border-top-width','3px')
												.html('Human Organ System Analyzer 1')
												.on('click', function()
													{
														$(this).css('opacity','0.5');
														$(this).css('color','red');
													    //$(location).attr('href','orominer1');
													   	window.open('orominer1','_blank'); 
													
													});
												
												
										$('#cabinet figure.drawer1.file4').css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(180px) scaleX(0.8) scaleY(1.4) translateY(-88px) rotateX(0deg) translateZ(80px)')
												.css('display','block')
												.css('border-top-color','peru')
												.css('border-top-style','solid')
												.css('border-top-left-radius','1em')
												.css('border-top-right-radius','1em')
												.css('border-top-width','3px')
												.html('Human Organ System Analyzer 2')
												.on('click', function()
													{
														$(this).css('opacity','0.5');
														$(this).css('color','red');
														//$(location).attr('href','orominer2');	
														window.open('orominer2','_blank');
													
													});		
												
										
												
										// Events on Drawer 1		
										$('#cabinet figure.drawer1.file1,#cabinet figure.drawer1.file2,#cabinet figure.drawer1.file3,#cabinet figure.drawer1.file4').mouseover(function()
											{
												$(this).css('background-color','brown').css('color','white').css('border-top-color','peru').css('border-top-width','8px');
												$(this).mouseleave(function()
													{
														$(this).css('background-color','brown').css('color','black').css('border-top-color','peru').css('border-top-width','1px');
													});
										
											});
									
								        //$('#cabinet').css('top','-6em');
											
										//Close Drawer # 2
										$('#cabinet figure.drawer2.front').css('-webkit-transform','rotateX(0deg) translateZ(198px) translateY(100px)').css('border','2px solid black');
										$('#cabinet figure.drawer2.left').css('display','none').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(100px) rotateY(-90deg) translateZ(162px) translateX(-162px)').css('border','2px solid black');
										$('#cabinet figure.drawer2.right').css('display','none').css('border','5px solid black').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(100px) rotateY(90deg) translateZ(162px) translateX(162px)');
										$('#cabinet figure.drawer2.back').css('display','none').css('background-color','black');
										$('#cabinet figure.drawer2.back').css('background-color','none');
										$('#cabinet figure.drawer2.file1').css('display','none');
										$('#cabinet figure.drawer2.file2').css('display','none');
										$('#cabinet figure.drawer2.file3').css('display','none');
										$('#cabinet figure.drawer2.file4').css('display','none');
										
										//Close Drawer # 3
										$('#cabinet figure.drawer3.front').css('-webkit-transform','rotateX(0deg) translateZ(198px) translateY(200px)').css('border','2px solid black');
										$('#cabinet figure.drawer3.left').css('display','none').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(200px) rotateY(-90deg) translateZ(162px) translateX(-162px)').css('border','2px solid black');
										$('#cabinet figure.drawer3.back').css('display','none').css('background-color','none');
										$('#cabinet figure.drawer3.right').css('display','none').css('border','5px solid black').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(200px) rotateY(90deg) translateZ(162px) translateX(162px)');
										$('#cabinet figure.drawer3.file1').css('display','none');
										$('#cabinet figure.drawer3.file2').css('display','none');
										
										
										//Close Drawer #1 on Click
									    $(this).on('click',function()
											{
												// Close drawer and folders
												$(this).css('-webkit-transform','rotateX(0deg) translateZ(198px)').css('border','2px solid black');
												$('#cabinet figure.drawer1.left').css('display','none');
												$('#cabinet figure.drawer1.back').css('display','none');
												$('#cabinet figure.drawer1.right').css('display','none').css('-webkit-transform','rotateY(0deg) translateZ(198px) rotateY(90deg) translateZ(162px) translateX(162px)');
												$('#cabinet figure.drawer1.file1').css('display','none');
											    $('#cabinet figure.drawer1.file2').css('display','none');
												$('#cabinet figure.drawer1.file3').css('display','none');
												$('#cabinet figure.drawer1.file4').css('display','none');
												
												// Keep other drawers visible
												$('#cabinet figure.drawer1.front').css('display','block');
												$('#cabinet figure.drawer2.front').css('display','block');
												$('#cabinet figure.drawer3.front').css('display','block');
											});
									
									});			
						

								
							   // DRAWER #2
							   
						        // Close Drawer #2 files
								$('#cabinet figure.drawer2.file1').css('display','none');
								$('#cabinet figure.drawer2.file2').css('display','none');
								$('#cabinet figure.drawer2.file3').css('display','none');
								$('#cabinet figure.drawer2.file4').css('display','none');
								$('#cabinet figure.drawer2.folder1').css('display','none');
								$('#cabinet figure.drawer2.folder2').css('display','none');
								$('#cabinet figure.drawer2.folder3').css('display','none');
								$('#cabinet figure.drawer2.folder4').css('display','none');  
							   
							   
								$('#cabinet figure.drawer2.front').on('mouseenter',function()
									{
									$('div#cabinet').removeClass("showCab");
									$('div#cabinet').removeClass("showCab3");
									$('div#cabinet').addClass("showCab2",1000);
									
									
									//Open Drawer #2 on mouseenter
									$(this).css('border','5px solid black')
										   .css('-webkit-transform','translateY(100px) rotateX(0deg) translateZ(350px)');
										   
									$('#cabinet figure.drawer2.left').css('display','block').css('border','5px solid black').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(100px) rotateY(-90deg) translateZ(162px) translateX(-10px)');
									$('#cabinet figure.drawer2.right').css('display','block').css('border','5px solid black').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(100px) rotateY(90deg) translateZ(162px) translateX(-10px)');
									$('#cabinet figure.drawer2.back').css('display','block').css('background-color','black');
									
									// Pop-Up File Folders for Drawer #2
									$('#cabinet figure.drawer2.file1')
										.css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-15px) rotateX(0deg) translateZ(150px)')
										.css('display','block')
										.css('border-top-color','peru')
										.css('border-top-style','solid')
										.css('border-top-left-radius','1em')
										.css('border-top-right-radius','1em')
										.css('border-top-width','3px')
										.html('Product and Maintenance Manuals')
										.on('mouseenter',function()
											{
										/*	$(this).css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-15px) rotateX(0deg) translateZ(150px)  rotateX(-40deg)')
											.css('border-top-width','1px')
											.css('border-top-color','black')
											.css('display','block');  */
											
										
											//use drawer back for file1 back
											 $('#cabinet figure.drawer2.back').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-15px) rotateX(0deg) translateZ(132px)')
											.css('display','block')
											.css('background-color','peru')
											.css('border-top-color','white')
											.css('border-top-style','solid')
											.css('border-top-left-radius','1em')
											.css('border-top-right-radius','1em')
											.css('border-top-width','1px')
											.html('')									
										//	.add('#cabinet figure.drawer2.file1')  // use file front and back to open folders
											.on('mouseover',function()
												{
												
													// File #1 translation
													$('#cabinet figure.drawer2.file1').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-15px) rotateX(0deg) translateZ(150px)  rotateX(-40deg)')
													.css('border-top-width','1px')
													.css('display','block')
													.css('border-top-color','white');	
													
													//Pop-up folders for File#1 Drawer#2
														$('#cabinet figure.drawer2.folder1').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.7) scaleY(1.2) translateY(-38px) rotateX(0deg) translateZ(150px)  rotateX(0deg)')
														.css('display','block')
														.css('border-top-color','#FFCC66')
														.css('border-top-style','solid')
														.css('border-top-left-radius','1em')
														.css('border-top-right-radius','1em')
														.css('background-color','yellow')
														.css('border-top-width','3px')
														.html('Grainger ABCDE Series B')
														.on('mouseover', function()
															{
																	$(this).css('color','green').css('border-top-width','8px');
															})
														.on('mouseleave',function()
															{
																	$(this).css('color','black').css('border-top-width','1px');
															})
														.on('click',function()
															{
																 $(this).css('opacity','0.5');
																 $(this).css('color','red'); 
																 //$(location).attr('href','graingerABCDE');
																 window.open('graingerABCDE','_blank');
															});
												
														$('#cabinet figure.drawer2.folder2').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.7) scaleY(1.2) translateY(-62px) rotateX(0deg) translateZ(147px)')
														.css('display','block')
														.css('border-top-color','#FFCC66')
														.css('border-top-style','solid')
														.css('border-top-left-radius','1em')
														.css('border-top-right-radius','1em')
														.css('background-color','yellow')
														.css('border-top-width','3px')
														.html('Grainger CDE')
														.on('mouseover', function()
															{
																	$(this).css('color','green').css('border-top-width','8px');
																	
															})
														.on('mouseleave',function()
															{
																	$(this).css('color','black').css('border-top-width','1px');
															})
														.on('click',function()
															{
																  $(this).css('opacity','0.5');
																  $(this).css('color','red');
																  //$(location).attr('href','graingerCDE');
																 window.open('graingerCDE','_blank'); 
															});
														
														$('#cabinet figure.drawer2.folder3').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.7) scaleY(1.2) translateY(-90px) rotateX(0deg) translateZ(144px)')
														.css('display','block')
														.css('border-top-color','#FFCC66')
														.css('border-top-style','solid')
														.css('border-top-left-radius','1em')
														.css('border-top-right-radius','1em')
														.css('background-color','yellow')
														.css('border-top-width','3px')
														.html('MEC Product Manual VT 1.6')
														.on('mouseover', function()
															{
																	$(this).css('color','green').css('border-top-width','8px');
																
															})
														.on('mouseleave',function()
															{
																	$(this).css('color','black').css('border-top-width','1px');
															})
														.on('click',function()
															{
																$(this).css('opacity','0.5');
																$(this).css('color','red');
																//$(location).attr('href','mecPManual');
																window.open('mecPManual','_blank');
															}); 
															
																				
												
															
												});
												
												// Close file#1 when other file hovered 			
												$('#cabinet figure.drawer2.file2,#cabinet figure.drawer2.file3,#cabinet figure.drawer2.file4').mouseover(function()
													{
														$('#cabinet figure.drawer2.back').css('display','none');
														$('#cabinet figure.drawer2.file1').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-15px) rotateX(0deg) translateZ(150px)')
															.css('background-color','brown')
															.css('border-top-width','3px')
															.css('display','block')
															.css('border-top-color','peru');
															
														//Close file#1 folders	
														$('#cabinet figure.drawer2.folder1').css('display','none');
														$('#cabinet figure.drawer2.folder2').css('display','none');
														$('#cabinet figure.drawer2.folder3').css('display','none');
													
													});		
														
												// Close file#1 when other than Drawer#1 is hovered 
												 $('#cabinet figure.drawer1,#cabinet figure.drawer3').mouseover(function()
													{
														$('#cabinet figure.drawer2.back').css('display','none');
														$('#cabinet figure.drawer2.file1').css('display','none');
															
														//Close file#1 folders	
														$('#cabinet figure.drawer2.folder1').css('display','none');
														$('#cabinet figure.drawer2.folder2').css('display','none');
														$('#cabinet figure.drawer2.folder3').css('display','none');
													});
                                                                   
                                                                                                 $('.drawer2.front').mouseover(function()	
                                                                                                    {
                                                                                                       //Close file#1 folders	
														$('#cabinet figure.drawer2.folder1').css('display','none');
														$('#cabinet figure.drawer2.folder2').css('display','none');
														$('#cabinet figure.drawer2.folder3').css('display','none');
                                                                                                            
                                                                                                    });
	

												 $('#cabinet figure.drawer1,#cabinet figure.drawer3').mouseover(function()
													{
														$('#cabinet figure.drawer2.back').css('display','none');
													});		
														
											})		
										.on('mouseover',function()    //Pop-up folders for File#1 Drawer#2
												{
												
													$('#cabinet figure.drawer2.folder1').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.7) scaleY(1.2) translateY(-38px) rotateX(0deg) translateZ(150px)  rotateX(0deg)')
													.css('display','block')
													.css('border-top-color','#FFCC66')
													.css('border-top-style','solid')
													.css('border-top-left-radius','1em')
													.css('border-top-right-radius','1em')
													.css('background-color','yellow')
													.css('border-top-width','3px')
													.html('Grainger ABCDE Series B')
													.on('mouseover', function()
														{
																$(this).css('color','green').css('border-top-width','8px');
														})
													.on('mouseleave',function()
														{
																$(this).css('color','black').css('border-top-width','1px');
														})
													.on('click',function()
														{
															 $(this).css('opacity','0.5');
															 $(this).css('color','red'); 
															//$(location).attr('href','graingerABCDE');
															 window.open('graingerABCDE','_blank');
														});
														
														
													$('#cabinet figure.drawer2.folder2').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.7) scaleY(1.2) translateY(-62px) rotateX(0deg) translateZ(147px)  rotateX(0deg)')
													.css('display','block')
													.css('border-top-color','#FFCC66')
													.css('border-top-style','solid')
													.css('border-top-left-radius','1em')
													.css('border-top-right-radius','1em')
													.css('background-color','yellow')
													.css('border-top-width','3px')
													.html('Grainger CDE')
													.on('mouseover', function()
														{
																$(this).css('color','green').css('border-top-width','8px');
															
														})
													.on('mouseleave',function()
														{
																$(this).css('color','black').css('border-top-width','1px');
														})
													.on('click',function()
														{
															  $(this).css('opacity','0.5');
															  $(this).css('color','red');
															  //$(location).attr('href','graingerCDE');
															  window.open('graingerCDE','_blank');
														});
													
													$('#cabinet figure.drawer2.folder3').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.7) scaleY(1.2) translateY(-90px) rotateX(0deg) translateZ(144px)  rotateX(0deg)')
													.css('display','block')
													.css('border-top-color','#FFCC66')
													.css('border-top-style','solid')
													.css('border-top-left-radius','1em')
													.css('border-top-right-radius','1em')
													.css('background-color','yellow')
													.css('border-top-width','3px')
													.html('MEC Product Manual VT 1.6')
													.on('mouseover', function()
														{
																$(this).css('color','green').css('border-top-width','8px');
																
														})
													.on('mouseleave',function()
														{
																$(this).css('color','black').css('border-top-width','1px');
														})
													.on('click',function()
														{
															$(this).css('opacity','0.5');
															$(this).css('color','red');
															//$(location).attr('href','mecPManual');
															window.open('mecPManual','_blank');
														}); 
												})
										.on('mouseleave',function()
												{
													// Close File #1 on mouseleave
													$('#cabinet figure.drawer2.back').css('display','none');
													$('#cabinet figure.drawer2.file1').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-15px) rotateX(0deg) translateZ(150px)  rotateX(0deg)')
														.css('background-color','brown')
														.css('border-top-width','3px')
														.css('display','block')
														.css('border-top-color','peru');
											
												})
									
										
								   $('#cabinet figure.drawer2.file2').css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-40px) rotateX(0deg) translateZ(130px)')
										.css('display','block')
										.css('border-top-color','peru')
										.css('border-top-style','solid')
										.css('border-top-left-radius','1em')
										.css('border-top-right-radius','1em')
										.css('border-top-width','3px')
										.html('White Paper')
										.on('click',function()
											{
												 $(this).css('opacity','0.5');
												 $(this).css('color','red'); 
												 //$(location).attr('href','whitePaper');
												 window.open('whitePaper','_blank');
											});
																				
								   $('#cabinet figure.drawer2.file3').css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-65px) rotateX(0deg) translateZ(110px)')
										.css('display','block')
										.css('border-top-color','peru')
										.css('border-top-style','solid')
										.css('border-top-left-radius','1em')
										.css('border-top-right-radius','1em')
										.css('border-top-width','3px')
										.html('Engineering Specification')
										.on('click',function()
											{
											
												  $(this).css('opacity','0.5');
												  $(this).css('color','red');
												  //$(location).attr('href','engSpec');
												  window.open('engSpec','_blank');
											});
										
										
								   $('#cabinet figure.drawer2.file4').css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-90px) rotateX(0deg) translateZ(80px)')
										.css('display','block')
										.css('border-top-color','peru')
										.css('border-top-style','solid')
										.css('border-top-left-radius','1em')
										.css('border-top-right-radius','1em')
										.css('border-top-width','3px')
										.html('Code Development Specification')
										.on('click',function()
											{
												   $(this).css('opacity','0.5');
												   $(this).css('color','red'); 
												   //$(location).attr('href','webTech');
												   window.open('webTech','_blank');
											});		
									
									
						// Events on Drawer 2		
						$('#cabinet figure.drawer2.file2,#cabinet figure.drawer2.file3,#cabinet figure.drawer2.file4').mouseover(function()
							{
								$(this).css('color','white').css('border-top-color','peru').css('border-top-width','8px');
								$(this).mouseleave(function()
									{
										$(this).css('background-color','brown').css('border-top-color','white').css('color','black').css('border-top-color','peru').css('border-top-width','2px');
									});
							});
						
						//Close Drawer #1
						$('#cabinet figure.drawer1.front').css('-webkit-transform','rotateX(0deg) translateZ(198px)').css('border','2px solid black');
						$('#cabinet figure.drawer1.left').css('display','none');
						$('#cabinet figure.drawer1.right').css('display','none');
						$('#cabinet figure.drawer1.back').css('display','none');
						$('#cabinet figure.drawer1.file1').css('display','none');
						$('#cabinet figure.drawer1.file2').css('display','none');
						$('#cabinet figure.drawer1.file3').css('display','none');
						$('#cabinet figure.drawer1.file4').css('display','none');
						
						//Close Drawer #3
						$('#cabinet figure.drawer3.front').css('-webkit-transform','rotateX(0deg) translateZ(198px) translateY(200px)').css('border','2px solid black');
						$('#cabinet figure.drawer3.left').css('display','none');
						$('#cabinet figure.drawer3.right').css('display','none');
						$('#cabinet figure.drawer3.back').css('display','none');
						$('#cabinet figure.drawer3.file1').css('display','none');
						$('#cabinet figure.drawer3.file2').css('display','none');
											
											
						//Close Drawer #2 On Click
						$(this).on('click',function()
						{
						   $('#cabinet figure.drawer2.front').css('-webkit-transform','rotateX(0deg) translateZ(198px) translateY(100px)').css('border','2px solid black');
							$('#cabinet figure.drawer2.left').css('display','none');
							$('#cabinet figure.drawer2.right').css('display','none');
							$('#cabinet figure.drawer2.back').css('display','none');
							// Close Drawer #2 files
							$('#cabinet figure.drawer2.file1').css('display','none');
							$('#cabinet figure.drawer2.file2').css('display','none');
							$('#cabinet figure.drawer2.file3').css('display','none');
							$('#cabinet figure.drawer2.file4').css('display','none');
							$('#cabinet figure.drawer2.folder1').css('display','none');
							$('#cabinet figure.drawer2.folder2').css('display','none');
							$('#cabinet figure.drawer2.folder3').css('display','none');
							$('#cabinet figure.drawer2.folder4').css('display','none');  
						});  
						
				
		
					});
				//Keep file#1 icon open when hovering its folders
				$('#cabinet figure.drawer2.folder1,#cabinet figure.drawer2.folder2,#cabinet figure.drawer2.folder3').mouseover(function()
					{
							$('#cabinet figure.drawer2.file1').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.3) translateY(-15px) rotateX(0deg) translateZ(150px)  rotateX(-40deg)')
								.css('background-color','brown')
								.css('border-top-width','1px')
								.css('border-top-color','white')
								.css('color','white')
								.css('display','block');	
							
							 $('#cabinet figure.drawer2.back').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(100px) scaleX(0.8) scaleY(1.4) translateY(-15px) rotateX(0deg) translateZ(132px)')
								.css('display','block')
								.css('background-color','peru')
								.css('border-top-color','white')
								.css('border-top-style','solid')
								.css('border-top-left-radius','1em')
								.css('border-top-right-radius','1em')
								.css('border-top-width','1px')
								.html('');
					});
		     	// DRAWER #3	
					$('#cabinet figure.drawer3.front').on('mouseenter',function()
						{
							$('div#cabinet').removeClass("showCab3");
							$('div#cabinet').removeClass("showCab2");
							$('div#cabinet').addClass("showCab",1000);
							
							//Open Drawer #3 on mouseenter
							$(this).css('border','5px solid black').css('-webkit-transform','rotateX(0deg) translateZ(350px) translateY(200px)');
							$('#cabinet figure.drawer3.left').css('display','block').css('border','5px solid black').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(200px) rotateY(-90deg) translateZ(162px) translateX(-10px)');
							$('#cabinet figure.drawer3.right').css('display','block').css('border','5px solid black').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(200px) rotateY(90deg) translateZ(162px) translateX(-10px)');
							$('#cabinet figure.drawer3.back').css('display','black').css('background-color','black');
							
							// Pop-Up File Folders for Drawer #3
							$('#cabinet figure.drawer3.file1').css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(200px) scaleX(0.8) scaleY(1.3) translateY(-15px) rotateX(0deg) translateZ(150px)')
								.css('display','block')
								.css('border-top-color','peru')
								.css('border-top-style','solid')
								.css('border-top-left-radius','1em')
								.css('border-top-right-radius','1em')
								.css('border-top-width','3px')
								.html('Environmental Health Engineer')
								.on('click',function()
									{
										$(this).css('opacity','0.5');
										$(this).css('color','red');
										//$(location).attr('href','engSpec');	
										window.open('engSpec','_blank');	
										
										
									}); 										
								
						   $('#cabinet figure.drawer3.file2').css('background-color','brown').css('-webkit-transform','rotateY(0deg) translateZ(175px) translateY(200px) scaleX(0.8) scaleY(1.4) translateY(-35px) rotateX(0deg) translateZ(130px)')
								.css('display','block')
								.css('border-top-color','peru')
								.css('border-top-style','solid')
								.css('border-top-left-radius','1em')
								.css('border-top-right-radius','1em')
								.css('border-top-width','3px')
								.html('Process/Project Engineer')
								.on('click',function()
									{
											$(this).css('opacity','0.5');
											$(this).css('color','red');
											//$(location).attr('href','pdfResume');
											window.open('pdfResume','_blank');
									 });		
						
							
							// Events on Drawer #3		
							$('#cabinet figure.drawer3.file1,#cabinet figure.drawer3.file2').mouseover(function()
								{
									$(this).css('background-color','brown').css('color','white').css('border-top-color','peru').css('border-top-width','8px');
									$(this).mouseleave(function()
										{
											$(this).css('background-color','brown').css('color','black').css('border-top-width','1px');
										});
								
																	
								});
										
							//Close Drawer #1
							$('#cabinet figure.drawer1.front').css('-webkit-transform','rotateX(0deg) translateZ(198px)').css('border','2px solid black');
							$('#cabinet figure.drawer1.left').css('display','none').css('-webkit-transform','rotateY(0deg) translateZ(198px) rotateY(-90deg) translateZ(162px) translateX(-162px)').css('border','2px solid black');
							$('#cabinet figure.drawer1.right').css('display','none').css('-webkit-transform','rotateY(0deg) translateZ(198px) rotateY(90deg) translateZ(162px) translateX(162px)').css('border','2px solid black');
							$('#cabinet figure.drawer1.file1').css('display','none');
							$('#cabinet figure.drawer1.file2').css('display','none');
							$('#cabinet figure.drawer1.file3').css('display','none');
							$('#cabinet figure.drawer1.file4').css('display','none');
							$('#cabinet figure.drawer1.back').css('display','none').css('background-color','none');
							
							
							//Close Drawer #2
							$('#cabinet figure.drawer2.front').css('-webkit-transform','rotateX(0deg) translateZ(198px) translateY(100px)').css('border','2px solid black');
							$('#cabinet figure.drawer2.left').css('display','none').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(100px) rotateY(-90deg) translateZ(162px) translateX(-162px)').css('border','2px solid black');
							$('#cabinet figure.drawer2.right').css('display','none').css('border','5px solid black').css('-webkit-transform','rotateY(0deg) translateZ(198px) translateY(100px) rotateY(90deg) translateZ(162px) translateX(162px)');
							$('#cabinet figure.drawer2.back').css('display','none').css('background-color','none');
							// Close Drawer #2 files
							$('#cabinet figure.drawer2.file1').css('display','none');
							$('#cabinet figure.drawer2.file2').css('display','none');
							$('#cabinet figure.drawer2.file3').css('display','none');
							$('#cabinet figure.drawer2.file4').css('display','none');
							
							
							//Close Drawer #3 on Click
							$(this).on('click',function()
							{
										// Close Drawer and File folders
										$(this).css('-webkit-transform','rotateX(0deg) translateZ(198px) translateY(200px)').css('border','2px solid black');
										$('#cabinet figure.drawer3.left').css('display','none');
										$('#cabinet figure.drawer3.right').css('display','none');
										$('#cabinet figure.drawer3.back').css('display','none');
										
										
										$('#cabinet figure.drawer3.file1').css('display','none');
										$('#cabinet figure.drawer3.file2').css('display','none');
									
										// Keep other drawers visible
										$('#cabinet figure.drawer1.front').css('display','block');
										$('#cabinet figure.drawer2.front').css('display','block');
									
							});		

						
						   // Adjust position for Description	
							//$('#description').css('top','9em');	
							//$('#cabinet').css('top','-6em');	
											
						});
					
					
				/********************* END OF CABINET CODE **************************************************************************/		
													
							// for Function within setInterval for dynamic header display						
								var i = 1;    // Slice counter for 1st dimension
								var ii = 1;   // used to create unique name for each slice
								var iii = 1;  // Used for unique slice identification
								var jj = 1;   // Slice counter for 2nd dimension
								var j = 0;
								var flip = 0;  // Flip count
								var noFlips = 0;
								var k = 0;    // used to switch images
								var sq = 0;  // Slice counter for square random display
								var t = 0;
								var rot = 1;
								var rotCycles = 20;
								var numClips = 20;
								 
								// Create square slices and put in an array.  Will be used for Random Clip Display
								function imageSlice(leftside, rightside, top, bottom)
									{
									this.leftside = leftside;
									this.rightside = rightside;
									this.top = top;
									this.bottom = bottom;
									}  
								var allSlices = new Array();  // hold array of square slices
                                var allSlices2 = new Array();  // 2nd to hold array of square slices
								var displayModes = new Array();  // array to hold display Mode numbers
								displayModes[0]= 2;
								displayModes[1]= 3;
								displayModes[2]= 4;
								displayModes[3]= 5;
								displayModes[4]= 6;
								displayModes[5]= 7;
								displayModes[6]= 8;
							    displayModes[7]= 9;
								displayModes[8]= 10;
								//var displayModes = new Array();
								var sliceCount = 0;  //Index for above array
								var xincs = 8;
								var yincs = 3;
								var xside = 590/xincs;
								var yside = 120/yincs;
								for(var x=1;x<=xincs;x++)   // Put Clips in Array
									{
										for(var y=1;y<=yincs;y++)
											{
											
											    ls = x*xside-xside;
												rs = ls+xside;
												tp = y*yside-yside;
												bt = tp+yside;
												thisSlice = new imageSlice(ls,rs,tp,bt);
												allSlices[sliceCount] = thisSlice;
                                                allSlices2[sliceCount] = thisSlice;
												sliceCount++;
											
											}
									
									}  
								//allSlices.sort(function() {return 0.5 - Math.random()});      // Randomly arrange clips in array
								allSlices = shuffle(allSlices);  // Randomly arrange clips in array
								var topImages = new Array();   // Array for Header Images
								topImages[0] = topLabel;
								topImages[1] = tbimgfile;
								topImages[2] = csimagefile;
								topImages[3] = mathhonorimg;
							    topImages[4] = procprojengimg;
								topImages[5] = techwritingimg;
							
								// Random display Mode selection
								//displayModes.sort(function() {return 0.5 - Math.random()});
								//j = displayModes[0];
								displayModes = shuffle(displayModes); 
								j = displayModes[0];
								
								
								//j = 10;  //For testing
								setInterval(function(){
							
												     
												if(i<=(numClips/2)  && i<=rotCycles)
													{
														var name = "intopbar" + i.toString();
														if(j==0 || j==1) j=2;  // Skip Horizontal and Vertical Slide Diplay Modes
														
														if(j==0)     //Horizontal Slide Parameters
															{
																	var leftside = i*59-59;
																	var rightside = leftside + 60;
																	var top = 0;
																	var bottom = 120;
															}
														else if(j==1)    // Vertical Slide Parametes
															{
																var leftside = 0;
																var rightside = 590;
																var top = i*12-12;
																var bottom = top + 13;
															}
													   
														var $tpImage = "";
														$tpImage = topImages[k];   
														
														if(j==0 || j==1)   // Horizontal and Vertical Slide Clipping Display Type
															{
																if(i==1) $('#topbar').html("");
																$('#topbar').append("<div id="+name+"  class='forrotate' style='position:absolute;z-index:-1'><img src='"+$tpImage+"'></div>");
																$('#'+name).css('display','none');
																$('#'+name).css('clip','rect('+top+'px, ' + rightside + 'px, ' + bottom + 'px, '+leftside+'px)');
															    $('#'+name).fadeOut(5).fadeIn(5);																
															}
														else if(j==2)    // Vertical SlICE Clipping Display Type
															{	
																	var inc = (120/(numClips/2));
																	var top = i*inc-inc;
																	var bottom = top + inc + 1;
																	var leftside = 0;
																	var rightside = 590;
																	var name = "intopbar" + ii.toString();
																	$('#topbar').append("<div id="+name+" class='forrotate' style='position:absolute;z-index:-1;display:none'><img src='"+$tpImage+"'></div>");
																	$('#'+name).css('clip','rect('+top+'px, ' + rightside + 'px, ' + bottom + 'px, '+leftside+'px)');
																	//$('#'+name).show('slide', { direction: 'right' }, 100);	
																	$('#'+name).fadeIn();
																	ii++;
																	if(i == (numClips/2))
																		{
																			i = 0;  // will be incremented at end of loop
																			k++;  // Change Image
																			if(k==topImages.length) 
																				{
																					//j++;   // Change Display Mode
																					
																					// Random display Mode selection
																					//displayModes.sort(function() {return 0.5 - Math.random()});
																					displayModes = shuffle(displayModes); 
																					j = displayModes[0];
																					
																					k = 0;
																				}
																		}
															}
														
														
														else if(j==3)   // Horizontal SLICE Clipping Display Type
															{
																	var inc = 590/(numClips/2);
																	var top = 0;
																	var bottom = 120;
																	var leftside = i*inc-inc;
																	var rightside = leftside + inc + 1;
																	var name = "intopbar" + ii.toString();
																	$('#topbar').append("<div id="+name+" class='forrotate' style='position:absolute;z-index:-1;display:none'><img src='"+$tpImage+"'></div>");
																	$('#'+name).css('clip','rect('+top+'px, ' + rightside + 'px, ' + bottom + 'px, '+leftside+'px)');
																	//$('#'+name).css('display','block');	
																	$('#'+name).fadeIn();
																	ii++;
																	
																	if(i == (numClips/2))
																		{
																			i = 0;  // will be incremented at end of loop
																			k++;  // Change Image
																			if(k==topImages.length) 
																				{
																					//j++;   // Change Display Mode
																					
																					// Random display Mode selection
																					//displayModes.sort(function() {return 0.5 - Math.random()});
																					displayModes = shuffle(displayModes); 
																					j = displayModes[0];
																					
																					k = 0;
																				}
																		}
															}
														
														else if((j==4))   // Random Image Fill
															{
															  if(sq < allSlices.length)
																{
																	  var top = allSlices[sq].top;
																	  var bottom = allSlices[sq].bottom+1;
																	  var leftside = allSlices[sq].leftside;
																	  var rightside = allSlices[sq].rightside+1;
																	 
																	  var name = "intopbar" + ii.toString();
																	  $('#topbar').append("<div id="+name+" class='forrotate' style='position:absolute;z-index:-1;display:none'><img src='"+$tpImage+"'></div>");
																	  //$('#'+name).css('display','none');
																	  $('#'+name).css('clip','rect('+top+'px, ' + rightside + 'px, ' + bottom + 'px, '+leftside+'px)');
																	  $('#'+name).fadeIn(5).fadeOut(5).fadeIn(5);
																	  sq++;
																	  ii++;
																}
																
																if(sq == allSlices.length)
																		{
																			i = 0;  // will be incremented at end of loop
																			sq = 0;
																			k++;  // Change Image
																			if(k==topImages.length) 
																				{
																					//j++;   // Change Display Mode
																					
																					// Random display Mode selection
																					//displayModes.sort(function() {return 0.5 - Math.random()});
																					displayModes = shuffle(displayModes); 
																					j = displayModes[0];
																					
																					k = 0;
																				}
																			
																		}	
														}
													
                                                    
                                                    
                                                    
                                                       else if((j==5))   // Checker Board
															{
															  
															  l = allSlices2.length;
															  if(sq < allSlices2.length)
																{
																	  if(sq % 2 == 0)
																		{
																			  var top = allSlices2[sq].top;
																			  var bottom = allSlices2[sq].bottom+1;
																			  var leftside = allSlices2[sq].leftside;
																			  var rightside = allSlices2[sq].rightside+1;
																		}
																	  else
																		{
																			  var top = allSlices2[l-sq].top;
																			  var bottom = allSlices2[l-sq].bottom+1;
																			  var leftside = allSlices2[l-sq].leftside;
																			  var rightside = allSlices2[l-sq].rightside+1;
																		}
																	 
																	  var name = "intopbar" + ii.toString();
																	  $('#topbar').append("<div id="+name+" class='forrotate' style='position:absolute;z-index:-1;display:none'><img src='"+$tpImage+"'></div>");
																	  //$('#'+name).css('display','none');
																	  $('#'+name).css('clip','rect('+top+'px, ' + rightside + 'px, ' + bottom + 'px, '+leftside+'px)');
																	  $('#'+name).fadeIn(100).fadeOut(100).fadeIn(100);
																	  sq++;
																	  ii++;
																}
															  
															  
															  if(sq == allSlices2.length)
																		{
																			i = 0;  // will be incremented at end of loop
																			sq = 0;
																			k++;    // Change Image
																			if(k==topImages.length) 
																				{
																					//j++;   // Change Display Mode
																					
																					// Random display Mode selection
																					//displayModes.sort(function() {return 0.5 - Math.random()});
																					displayModes = shuffle(displayModes); 
																					j = displayModes[0];
																					
																					k = 0;
																				}																			
																		}	
														}  
                                                    
                                                    else if(j == 6)   // 3d Rotation of Images around Y Axis
													{
														$('#topbar').html("");
														var name = "intopbar" + ii.toString();
														$('#topbar').append("<div id="+name+" class='forrotate' style='position:absolute;z-index:-1'><img src='"+$tpImage+"'></div>");
														$('#'+name).css('clip','rect(0px, 590px, 120px, 0px)');
														$('.forrotate').css('transform','rotate3d(0,1,0,' + (360/rotCycles)*rot + 'deg)');
														
														if(rot == rotCycles)
															{
																if(k==(topImages.length-1)) 
																	{
																	   //j++;  // Change Display Mode
																	  // k=0;
																	   // Random display Mode selection
																		//displayModes.sort(function() {return 0.5 - Math.random()});
																		displayModes = shuffle(displayModes); 
																		j = displayModes[0];
																	   
															            i = rotCycles+1; 
																	    rot = 0;
																	}
																else if(k<(topImages.length-1))  // Change Images
																	{ 
																		k++;
																		//sq = 0;
																		rot = 0;
																	}
															}
													   rot++;
													   ii++;
													
													}
                                                    
													
													
													
													else if(j==7)   // Horizontal Flip SLICE Clipping Display Type
															{
																	var inc = 590/(numClips/2);
																	var top = 0;
																	var bottom = 120;
																	
																	if(i % 2 == 0)
																		{
																		   flip = 1;
																		   noFlips++;
																		}
																	else 
																		flip = 0;
																			
																	if(flip == 0)
																		{
																			var leftside = (noFlips+1)*inc-inc-5;
																			var rightside = leftside + inc+5;
																		}
																	else 
																		{
																		 
																	        var leftside = 590 - noFlips*inc-5;
																			var rightside = leftside + inc+5;
																		}
																	var name = "intopbar" + ii.toString();
																	$('#topbar').append("<div id="+name+" class='forrotate' style='position:absolute;z-index:-1;display:none'><img src='"+$tpImage+"'></div>");
																	$('#'+name).css('clip','rect('+top+'px, ' + rightside + 'px, ' + bottom + 'px, '+leftside+'px)');
																	//$('#'+name).css('display','block');	
																	$('#'+name).fadeIn();
																	ii++;
																	
																	if(i == (numClips/2))
																		{
																			i = 0;  // will be incremented at end of loop
																			noFlips = 0;
																			k++;  // Change Image
																			if(k==topImages.length) 
																				{
																					//j++;   // Change Display Mode
																					
																					// Random display Mode selection
																					//displayModes.sort(function() {return 0.5 - Math.random()});
																					displayModes = shuffle(displayModes); 
																					j = displayModes[0];
																					k = 0;
																				}
																		}
															}
													
													else if(j==8)    // Vertical Reverse SlICE Clipping Display Type
															{	
																	var inc = (120/(numClips/2));
																	//var top = i*inc-inc;
																	//var bottom = top + inc;
																	var bottom = 120-(i*inc-inc);
																	var top = bottom - inc;
																	var leftside = 0;
																	var rightside = 590;
																	var name = "intopbar" + ii.toString();
																	$('#topbar').append("<div id="+name+" class='forrotate' style='position:absolute;z-index:-1;display:none'><img src='"+$tpImage+"'></div>");
																	$('#'+name).css('clip','rect('+top+'px, ' + rightside + 'px, ' + bottom + 'px, '+leftside+'px)');
																	//$('#'+name).show('slide', { direction: 'right' }, 100);	
																	$('#'+name).fadeIn();
																	ii++;
																	if(i == (numClips/2))
																		{
																			i = 0;  // will be incremented at end of loop
																			k++;  // Change Image
																			if(k==topImages.length) 
																				{
																					//j++;   // Change Display Mode
																					
																					// Random display Mode selection
																					//displayModes.sort(function() {return 0.5 - Math.random()});
																					displayModes = shuffle(displayModes); 
																					j = displayModes[0];
																					
																					k = 0;
																				}
																		}
															}
													else if(j==9)    // Vertical Flip SlICE Clipping Display Type
															{	
																	var inc = (120/(numClips/2));
																	
																	if(i % 2 == 0)
																		{
																		   flip = 1;
																		   noFlips++;
																		}
																	else 
																		flip = 0;
																			
																	if(flip == 0)
																		{
																			var top = (noFlips+1)*inc-inc;
																			var bottom = top + inc;
																		}
																	else 
																		{
																		 
																	       var bottom = 120-(noFlips*inc-inc);
																		   var top = bottom - inc;
																		}
																
																	
																	var leftside = 0;
																	var rightside = 590;
																	var name = "intopbar" + ii.toString();
																	$('#topbar').append("<div id="+name+" class='forrotate' style='position:absolute;z-index:-1;display:none'><img src='"+$tpImage+"'></div>");
																	$('#'+name).css('clip','rect('+top+'px, ' + rightside + 'px, ' + bottom + 'px, '+leftside+'px)');
																	//$('#'+name).show('slide', { direction: 'right' }, 100);	
																	$('#'+name).fadeIn();
																	ii++;
																	if(i == (numClips/2))
																		{
																			i = 0;  // will be incremented at end of loop
																			k++;  // Change Image
																			noFlips = 0;
																			if(k==topImages.length) 
																				{
																					//j++;   // Change Display Mode
																					
																					// Random display Mode selection
																					//displayModes.sort(function() {return 0.5 - Math.random()});
																					displayModes = shuffle(displayModes); 
																					j = displayModes[0];
																					
																					k = 0;
																				}
																		}
															}		
															
													
												 else if(j == 10)   // 3d Rotation of Images around X Axis
													{
														$('#topbar').html("");
														var name = "intopbar" + ii.toString();
														$('#topbar').append("<div id="+name+" class='forrotate' style='position:absolute;z-index:-1'><img src='"+$tpImage+"'></div>");
														$('#'+name).css('clip','rect(0px, 590px, 120px, 0px)');
														$('.forrotate').css('transform','rotate3d(1,0,0,' + (360/rotCycles)*rot + 'deg)');
														
														if(rot == rotCycles)
															{
																if(k==(topImages.length-1)) 
																	{
																	   //j++;  // Change Display Mode
																	  // k=0;
																	   // Random display Mode selection
																		//displayModes.sort(function() {return 0.5 - Math.random()});
																		displayModes = shuffle(displayModes); 
																		j = displayModes[0];
																	   
																	   i = rotCycles+1; 
																	   rot = 0;
																	}
																else if(k<(topImages.length-1))  // Change Images
																	{ 
																		k++;
																		//sq = 0;
																		rot = 0;
																	}
															}
													   rot++;
													   ii++;
													
													}



													
															
												
                                                    if(j!=4 && j!=5 && j!=6 && j!=10) i++;
														
											   }   
												
												else if(i > rotCycles)  // Switching section for images and display type
			    									{
														i = 1;
														//if(j!=2 && j!=3  && j!=4 && j!=5 && j!=6) $('#topbar').html("");
														
														k++;  // Advance to next image
														
														sq = 0;
														
														if(k>=topImages.length) // Reset to first image
															{
															    k = 0;
																//if (j==0 || j==1) j++;   // Change Display Mode
															}
														//if(j == 7) j = 0;
													}
													
									
									},200 );  
									
			$('.handle > img').attr('src',doorHandle);
																
					
			});
			
			
		  function getCab(event){
		  	                    
				    		    if($(this).text() == 'Click Here to See a 3-D File Cabinet!'){
								//	$('#outframe, #outframebg').css('height','60em')
									
								 
									$('#description').css('height','18em').css('margin','2.25em 10% 22% 2%').css('padding','1em');
								    $('#catchCab').show();
									
									$('#getHeight').html('<div>Hover over Program or Work Item to the left for its Descripition.<p>Then \'Click\' Button'+
										' that will appear.</p></div>').css('width','55%').css('height','auto').css('font-size','0.9em').css('float','left')
										                               .css('margin','2.5em 0em 0em 0em').css('padding','0.5em');    
									if(!$('#catchCab #container').length)
										$('#catchCab').prepend($('#container').clone(true).css('transform','scale(0.6,0.6)').css('position','relative'))
																						  .css('height','13.5em')
																						  .css('left','0em')
																						  .css('padding','1em')
																						  .css('top','0em')
																						  .css('width','37%').css('margin','0em 0em 0em 0em');
									
								//	$('#container').css('display','none').css('visibility','hidden');
									$('#catchCab #container').css('margin','0em').css('top','-2em').css('left','-2em').show();
								
									       
									$(this).text("Click to Close 3-D File Cabinet").css('width','45%')
									       .css('padding','0.5em').css('margin','1em 0em 0em 2em').css('left','1em');       
									       
				    		    }
				    		  else if($(this).text() == 'Click to Close 3-D File Cabinet'){
			    		  			//$('#outframe, #outframebg').css('height','45em');
									$(this).text("Click Here to See a 3-D File Cabinet!")
									       .css('width','70%').css('padding','0.5em').css('margin','3em 0em 0em 13%');
									$('#catchCab').hide();	
									$('#description').css('height','auto').css('padding','1em');
									$('#getHeight').html('<div>Hover over Program or Work Item to the left for its Descripition.<p>Then \'Click\' Button'+
										' that will appear.</p></div>').css('width','96%').css('height','auto').css('padding','0em').css('margin','0em 2em 0em 0em').css('font-size','1.1em').show();    
										
										
								  
				    		     }
		  }
		  
			

		  
		  function leftMenu(event){
		  	
		  	    var menuTag = event.data.mt;
		  	    var menuDesc = event.data.md;
		  	    var divNum = event.data.dn;
		  	    var url1 = event.data.url;
		  	    var el = event.data.el;
		  	    var container = event.data.ct;
		  	    
						//$('#description').show();
                        $('#getHeight').html( menuDesc).css('font-size','1.1em').css('padding','1em');
                        container.show();
                        $('#catchCab').prepend(container);
                        //$('#clkmess').hide();
					
					    $(divNum).show();
						
						//Set up Blinking Button and span
						setInterval(function(){
											$(divNum)	
												.animate({opacity:'0.5'},500)
												.animate({opacity:'1.0'},500);
											$('#description #clkmess')	
												.animate({opacity:'0.5'},500)
												.animate({opacity:'1.0'},500)
												.css('cursor','pointer');
										},25);

						
						//Set-up Description Content Div Height
						$('#description').css('height','auto');
						
						
						 $(divNum).bind('click', function()
							{
								$('#catchCab').hide();
								$('#getHeight').html('<div id="adjust">Please Wait For Loading...</div>');
						
							});
			
						
						   
                        // Pressing Button for Orominer Program 
                        $(divNum).bind('click', function()
                            {
								
                                
                                if(url1.indexOf('http') >= 0){
											window.open(url1,'_blank');
										}
								else
									$(location).attr('href',url1);
						
                                
                             });
								
                        $(this).mouseleave(function()
							{
                                $(divNum).hide();
							});
						
						
					
		  }
		
		</script>



<div id="outframe" class="viewer">
	
	<div id="topbar">
	 <!--<div id="intopbar"><img></div>  -->
	</div>
	<div id="display">
			 <div id="leftmenu">
				<div id="itemContainer">
					<div id="upPointer" class="downPoint" ></div>
					<div id="orominer" class="menuitem" >Orominer<br/> Program<div id="clickdiv1" >Please Click<br/>Here</div></div>
					<div id="oroHist"class="menuitem" >Orominer with<br/>Histological Data<div id="clickdiv2" >Please Click<br/>Here</div></div>
					<div id="othello" class="menuitem" >Othello<br/> Game<div id="clickdiv3" >Please Click<br/>Here</div></div>
					<div id="miniMotif"class="menuitem" >Mini-Motif<br/>Program<div id="clickdiv4" >Please Click<br/>Here</div></div>
					<div id="technicalWriting"class="menuitem" >Technical<br/>Writing<div id="clickdiv5" >Please Click<br/>Here</div></div>
					<div id="resume"class="menuitem" >Resume for<br/>Richard<div id="clickdiv8" >Please Click<br/>Here</div></div>
					<div id="livingInVegas"class="menuitem" >Living in<br/>Vegas<div id="clickdiv9" >Please Click<br/>Here</div></div>
					<div id="downPointer" class="downPoint" ></div>
					
				</div>
			 </div>
			 
			 
			 
			 <div id="description">
			 	<div id="catchCab"></div>
				<div id="getHeight"><p></p></div>
				<div id="clkmess"></div>
			</div>
			
			
				<div id='container'>
					<div id='cabinet'>
						<figure class='cab front'></figure>
					    <figure class='cab back'></figure>
					    <figure class='cab right'></figure>
						<figure class='cab left'></figure>
						<figure class='cab top'></figure>
						<figure class='cab bottom'></figure>
					
						<figure class='drawer1 front'><div class='dtitle'>Software Development</div><div class='handle'><img></div></figure>
						<figure class='drawer1 back'></figure>
						<figure class='drawer1 right'></figure>
						<figure class='drawer1 left'></figure>
						<figure class='drawer1 top'></figure>
						<figure class='drawer1 bottom'></figure>
					 
						<figure class='drawer2 front'><div class='dtitle'>Technical Writing</div><div class='handle'><img></div></figure>
						<figure class='drawer2 back'></figure>
						<figure class='drawer2 right'></figure>
						<figure class='drawer2 left'></figure>
						<figure class='drawer2 top'></figure>
						<figure class='drawer2 bottom'></figure>
					
						<figure class='drawer3 front'><div class='dtitle'>Engineering</div><div class='handle'><img <img></div></figure>
						<figure class='drawer3 back'></figure>
						<figure class='drawer3 right'></figure>
						<figure class='drawer3 left'></figure>
						<figure class='drawer3 top'></figure>
						<figure class='drawer3 bottom'></figure>
					
						<figure class='drawer1 file1'></figure>
						<figure class='drawer1 file2'></figure>
						<figure class='drawer1 file3'></figure>
						<figure class='drawer1 file4'></figure>
					
					
					<figure class='drawer2 file1'></figure>
					<figure class='drawer2 file2'></figure>
					<figure class='drawer2 file3'></figure>
					<figure class='drawer2 file4'></figure>
					<figure class='drawer2 back'></figure>
					<figure class='drawer2 folder1'></figure>
					<figure class='drawer2 folder2'></figure>
					<figure class='drawer2 folder3'></figure>
					<figure class='drawer3 file1'></figure>
					<figure class='drawer3 file2'></figure>
					
				</div>
			  </div>
				      
			
			
	</div>
<input type="hidden" id="oheight" value=''>
<div id="outframebg">
</div>
</div>

 
       



		 