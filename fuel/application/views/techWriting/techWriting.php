	   
<?php
            
		$slugs = array('graingerABCDE','graingerCDE','mecPManual','whitePaper','engSpec','softwareTW');
	    $GLOBALS['menuOpts'] = array();
	    $GLOBALS['ind'] = 0;
	    $i = 0;
	    foreach($slugs as $slug){
				    $menuOpts[$i] = fuel_model('twriteMenuOpts',array('find' => 'one', 'where' => array('slug' => $slug)));
				    //echo $menuOpts[$i]->slug.'<br>';
	                $i++;
	   }
	
?>

<script type="text/javascript">
		  $(document).ready(function(){
		
		    		
		      // Hide Buttons from display
					  $('#clickdiv1').hide();
					  $('#clickdiv2').hide();
					  $('#clickdiv3').hide();
					  $('#clickdiv4').hide();
					  $('#clickdiv5').hide(); 
					  $('#clickdiv6').hide(); 
							 
						// Prepare Description to Show
					  $('#description').css('color','green');
					  $('#description').css('font-size','1.8em');
					  $('#description').css('padding','20px');
					  $('#description').show(); 

					// Animate fade on background
					$(document).mousemove(function()
						{
						  $('#oframebg')
								.animate({opacity:"0.20"},2000)
								.animate({opacity:"0.70"},2000);
						
						 $('#oframe').css('opacity','1.0');
								
						
						});
					
					// Set up Hover over Button Display  and Default Description
					   $('.docbuttons').bind('mouseover',function()
						{
							$(this).css('background-color','tan');
							
						});	
							
					   $('.docbuttons').bind('mouseleave',function()
						{
							$(this).css('background-color','white');
							$('#description').css('text-align','center');
							$('#description').html('Hover over Document Title for its Descripition. <p><span style="color:green;font-style:italic" id="clkmess">Then Click the Blinking Button That will Appear</span></p>');
							$('#description').css('color','green');
							$('#description').css('font-size','1.8em');
							$('#description').css('padding','20px');
							$('#description').show();
						});    
                        
                        // Set up description displays for each document and button display
                       var btnHTML = [];
                       var menuHTML = [];
                       var clickDiv = [];
                       var url1 = [];
                       var slug = [];
                       
                        
        		        var index = "<?php foreach($menuOpts as $item){?>";
                		
                			slug.push("<?php echo $item->slug; ?>");
                			btnHTML.push("<?php echo $item->btnHTML; ?>");
                			menuHTML.push("<?php echo $item->menuHTML; ?>");
                			url1.push("<?php echo $item->url1; ?>");
                			clickDiv.push("<?php echo $item->clickDiv; ?>");
                	
                		var index2 = "<?php } ?>";
                          
					   for(var i=0;i<btnHTML.length;i++)
							twMenus(slug[i],btnHTML[i], menuHTML[i], clickDiv[i], url1[i]);		
		
					
						$('#oframebg').css('background-image',"<?php echo $vars['mechEngImage2']; ?>");
						//Set up Blinking Button and span
									setInterval(function(){
									
														$('.clickdiv')	
															.animate({opacity:'0.5'},500)
															.animate({opacity:'1.0'},500);
														
														$('#clkmess')	
															.animate({opacity:'0.5'},500)
															.animate({opacity:'1.0'},500);
													},25);	

		   });

          function twMenus(slug,btnHTML, menuHTML, clickDiv, url1){
          		$(btnHTML).bind('mouseover',function()
							{
								$('#description').css('color','brown');
								$('#description').css('font-size','1.4em');
								$('#description').css('text-align','left');
								$('#description').show();
								$('#description').html(menuHTML);
								$(clickDiv).show();
						  
                       		 $(clickDiv).bind('click',function()
									{
									   $(btnHTML).css('background','linear-gradient(linen,tan)');
									   $('#description').html('Please Wait For Loading...');
									   $(location).attr('href',"<?php echo '" +  url1 + "';?>");
									}); 
	                        		
							 $(btnHTML).mouseleave(function()
									{
										
										//$(clickDiv).hide();
									});
									
							});
          	
          	
          }
        
          function JQFunctions()
                {   
                  
               }    // end of JQFunction() function
                
       
        </script>
       
		<div class="oframe" id="oframe">
			<div id="oframebg"></div>
			<div id="head">Technical Writing Documents</div>
			<div id="buttondiv">
				<div id="doc1" class="docbuttons">Grainger ABCDE<br/>SeriesB<div id="clickdiv1" class="clickdiv" >Click Here</div></div>
				<div id="doc2" class="docbuttons">Grainger<br/>CDE<div id="clickdiv2" class="clickdiv">Click Here</div></div>
				<div id="doc3" class="docbuttons">MEC Product<br/>Manual VT 1.6<div id="clickdiv3" class="clickdiv">Click Here</div></div>
				<div id="doc4" class="docbuttons">MEC<br/>White Paper<div id="clickdiv4" class="clickdiv">Click Here</div></div>
				<div id="doc5" class="docbuttons">Improvement Plan<br/>Requirements<div id="clickdiv5" class="clickdiv">Click Here</div></div>
				<div id="doc6" class="docbuttons">Code Development<br/>Technical Writing<div id="clickdiv6" class="clickdiv">Click Here</div></div>
			</div>
			<div id="description">Hover over Document Title for its Descripition.<p><p><span style="color:green;font-style:italic" id="clkmess">Then Click the Blinking Button That will Appear</span></p></div>
		 </div>
       
</div>
	
	