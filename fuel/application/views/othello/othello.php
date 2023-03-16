 <script type="text/javascript">
            function JQFunctions()
                {  } // End of JQFunctions
						
				  
				// When document is ready   
					$(document).ready(function()
						{
				         
				         var headerAndFooter =  "<?php echo $headAndFoot; ?>";
						 //alert(headerAndFooter);
						 $('#headbar').css('display','block');
						 if (headerAndFooter == 'no'){
						 	$('#headbar').css('display','none');
						 	$('#footContainer').css('display','none');
						 //	$('body').css('zoom','75%');
						 }
						 else if (headerAndFooter == 'noSM'){
						 	//alert("gets here");
						 	$('#outDiv').siblings().css('display','none');
						 	$('#footContainer').css('display','none');
						 	$('body').css('zoom','50%');
						 }
						 else if (headerAndFooter == 'yesCMS'){
						 	$('#headbar').css('display','block');
						 	$('#footContainer').css('display','block');
						 	$('body').css('zoom','50%');
						 }
					     else; 
				         
				            
						spinXandO();
						
					   

							//Ajax methods for Othello Game for resetGame and FrontPage
							 $('#resetGame,#frontPage').on('mouseover',function()
								{
									
									$(this).css('border','solid 1px grey');
								});
					
						
							$(document).one('click','div#frontPage',function(e)
								{   	 
									e.preventDefault();
									$(this).css('color','grey');
									$(this).css('box-shadow','inset 0px 0px 5px 3px rgba(0,0,0,0.2)');						   
									$(this).css('background','linear-gradient(#D8D8D8, grey)');	
									var applType = "desktop";
									  
									$(location).attr('href','front');
								});
							
						
							
							$(document).one('click','div#resetGame',function(e)
								{  	
									e.preventDefault();
									$(this).css('color','grey');
									$(this).css('box-shadow','inset 0px 0px 5px 3px rgba(0,0,0,0.2)');						   
									$(this).css('background','linear-gradient(#D8D8D8, grey)');	
								
									
								    $(location).attr('href','othello');
										
								});
								// Remove Wait message for Ajax Reset Game
								$(document).ajaxStop(function()
									{
										//spinXandO();
										$('#tmpmess').remove();
									});
											
				
					 
				   	 $('.setCursor').on('mouseup',function(){
					 		spinXandO();
				    	 });
					 
					 
                      $(document).bind('mouseover mousemove',function()
                        {
                             $('#clkspace').animate({opacity:'0.0'},"medium");
						     $('#clkspace').animate({fontSize:'1.25em',opacity:'1.0'},"medium");  
							
							 $("#prbutton").fadeIn();
							 $("#prbutton3").fadeIn();
							if(	$('#message').text().search('Submit') > 0)
								 $("#subbutton input[name='submit']").show();	

							if(	$('#message').text().search('Highest Score') > 0)
								{
									$("#botcontainer").css("height","90%");
								}
							
						
								
						
                        });     
						 
                
                         $("#cross").mousedown(function()
                         {
                                          
                               var x = $("#xval input[name='xvalue']").val(); 
                               var y =  $("#yval input[name='yvalue']").val();
							   $("#subbutton input[name='submit']").show();
                              if(   ( x < 0  ||  x > 7)  || ( y < 0  ||  y > 7)  )
                                {
                                       
                                        $('#message').text("Your Selection is Not between 0 and 7.  \nPlease Select Again");
                                        //$("#xval input[name='xvalue']").val('');
                                        //$("#yval input[name='yvalue']").val('');
                                        $("#subbutton input[name='submit']").hide();
                                }
								
							  if( (x.toString().search('Enter') >= 0) || ( x.toString().search('Enter') >= 0) )
							  {
									
									  $("#subbutton input[name='submit']").hide();
									  $("#message").text("YOU FORGOT TO INPUT A MOVE!!!");
							  
							  }
                        });
                              
							  
                         $("#xval input[name='xvalue']").keydown(function()
                             {
                                      $("#subbutton input[name='submit']").show();
                             
                             });
                             
                        $('.cell').on('mousedown',function()
                          {
							
								$(this).css('background-color','tan').css('color','black');
								$(this).css('box-shadow','inset 0px 0px 10px 6px rgba(0,0,0,0.2)');	
								
								$(this).mouseup(function()
									{
										  // $('#message').css('font-size','170%');
										   $(this).css('box-shadow','inset 0px 0px 0px 0px rgba(0,0,0,0.0)');	
										   $('#message').css('color','purple');
										   $('#message').text('');
										   $('#message').append($("<div id='prbutton' style='display:inline'>**Press Button**</div><div style='display:inline'>to Submit Move</div>"));
										   $("#subbutton input[name='submit']").show();
												var y = $(this).parent().attr('id').substring(3);
												y = y - 1;
												var x = $(this).attr('title');
										 
											$("#xval input[name='xvalue']").val(x)
											$("#yval input[name='yvalue']").val(y); 
									});
                          });
						  
				
						 $('.cell').bind('click',function()
                           {
					       	var $el = $(this).filter(function()
								{
									return $(this).text() == '.';
								});
							
						    if($el.length > 0)
								$el.html("<div class='oimage' style='position:relative;left:0px;top:0px'><img style='position:relative;height:96%;width:96%' src='<?php echo $oimg; ?>'></div>");
						   });
						  
						  
						 $('.cell').bind('mousedown',function()
                          {
						       	var $el = $(this).filter(function()
									{
										return $(this).text() == '.';
									});
								
							    if($el.length == 0)
									$(this).html('<div>.</div>');
						  });

						$('.cell').bind('mouseenter',function()
		                    {
		                           $(this).css('color','tan').css('border-color','black');
		                             
		                    });
		                    
						$('.cell').bind('mouseover',function()
		                    {
		                           $(this).css('background-color','beige').css('border-color','black');
		                             
		                    });
		
		                $('.cell').bind('mouseleave',function()
		                    {
		                            $(this).css('color','black').css('background-color','yellow');
		                             
		                    });
						
					    $('#message').bind('mousedown',function()
							{
							
								if(	$(this).text().search('NEW GAME') >= 0)
								{
									window.open('http://www.rlsworks.com/ci/', '_blank');
								}			
							
							});
							
					    $('#moveinputform').on('submit', function()
							{
								$("#othelloform input[name='applType']").val('desktop');
								$('#othelloform').submit();
							});
			
					});
				
		
              function spinXandO()
			     {
					 
					$(".cell:contains('X')").filter(function(index)
							{
							    var cellname = "cellrotate" + index;
								$(this).html("<div class='" + cellname + "' style='position:relative;left:0px;top:0px;z-index:2;opacity:1.0'><img style='position:relative;height:96%;width:96%' src='<?php echo $ximg; ?>'></div>");
							     //   $("."+cellname).css('animation','xorotation 2s');
								 
								 $("."+cellname).stop().animate(
									{rotation: 360},
									{
										duration: 500,
										step: function(now,fx){
											$(this).css({"transform": "rotate("+now+"deg)"});
										  }
								    }
								);
									
							});		
							
					$(".cell:contains('O')").filter(function(index)
							{
									var cellname2 = "cellrotate2" + index;
								    $(this).html("<div class='" + cellname2 + "' style='position:relative;left:0px;top:0px;z-index:2;opacity:1.0'><img style='position:relative;height:96%;width:96%' src='<?php echo $oimg; ?>'></div>");
									//$("."+cellname2).css('animation','xorotation 2s');
									$("."+cellname2).stop().animate(
									{rotation: 360},
									{
										duration: 500,
										step: function(now,fx){
											$(this).css({"transform": "rotate("+now+"deg)"});
										  }
								    }
								);
							});
									
				 }	 
					 
					 
            function clearInputX()
               {
                     $("#xval input[name='xvalue']").attr('value','');
               }
         
            function clearInputY()
               {
                     $("#yval input[name='yvalue']").attr('value',''); 
               }
          
          
          
		   function pressToPlay(value)
			  {
					var val = value;
					var xval = $("#xval input[name='xvalue']").val();
					var yval = $("#yval input[name='yvalue']").val();
				  
				   var hf = "<?php echo $headAndFoot; ?>";
				   //alert(hf);
				   $.post('playBegin',{'submit':val,'xvalue':xval,'yvalue':yval,'hf':hf},
				   function(data){
							 $('#outDiv').css('border','none');
						     $('#outDiv').replaceWith(data);
					     });
			}	   
         
		  
		   function submitThisMove(value)
			{
					var val = value;
					var hid = $("#cross input[name='hid']").val();
					var xval = $("#xval input[name='xvalue']").val();
					var yval = $("#yval input[name='yvalue']").val();
				    var hf = "<?php echo $headAndFoot; ?>";
					
				   if( $.isNumeric(xval) && $.isNumeric(yval)    ){	  
						  $.post('playBegin',{'submit':val,'xvalue':xval,'yvalue':yval,'hid':hid,'hf':hf},
						  function(data){
								  $('#outDiv').css('border','none');
								  $('#outDiv').replaceWith(data);
								});	
				   }
				   else
						return;
														
			}	   
		  
                            
</script>


<div id="outDiv" class="viewer">
 <div class="oframe" id="oframe">
    <div id="headr"><span id="gameTitle">Othello Game</span>
		<div id="resetGame" class="setCursor">Reset Game</div>
		<div id="frontPage" class="setCursor">Front Page</div>
	</div>
    <div id="status">

        <div id="OthelloFormcontainer">
            <?php echo validation_errors(); ?>
			<?php
			$attributes = array('id'=>'moveinputform');	
				echo form_open($indexTwo,$attributes);
			?>
                <div id="xval" style="display:<?php echo $display1; ?>">
                    <input name="xvalue" type="text"  value="ENTER X VALUE"  onclick="clearInputX()"/>
                </div>
                <div id="yval"  style="display:<?php echo $display1; ?>">
                    <input name="yvalue" type="text"  value="ENTER Y VALUE"  onclick="clearInputY()"/>
                </div>
			
			
			
                <div id="botcontainer">
					<div id="message" >"<?php echo $message; ?>"
					</div>
					<div id="mask" style="display:<?php echo $display3; ?>">
							<div id="subbutton"   style="display:<?php echo $display1; ?>">
									<div id="cross">
									   <input type="hidden"  name="hid" value="<?php echo $flag; ?>"/>
									     
										  <?php
													$data_name = array(
														'type' => 'button',
														'name' => 'submit',
														'class' => 'setCursor',
														'value' => 'Submit This Move',
														'onclick' => 'submitThisMove(this.value)'
														);
													echo form_input($data_name);
											?>
									
									</div>
							</div>
							
							<div id="playbutton" style="display:<?php echo $display2; ?>" >
							  
							  <?php
										$data_name = array(
											'type' => 'button',
											'name' => 'submit',
											'class' => 'setCursor',
											'value' => 'Press to Play',
											'onclick' => 'pressToPlay(this.value)'
											);
										echo form_input($data_name);
								?>
								
							</div>
					</div>
				
					<div id="nextbutton" style="display:<?php echo $display4; ?>" >
							  <?php
										$data_name = array(
											'type' => 'button',
											'name' => 'submit',
											'class' => 'setCursor',
											'value' => 'Press to Continue',
											'onclick' => 'pressToPlay(this.value)'
											);
										echo form_input($data_name);
								?>
							
					</div>
				</div>  <!-- botContainter -->
				</form>
				<?php echo validation_errors(); ?>
      			  
	</div>  <!-- /#status -->
</div> <!--/oframe -->
