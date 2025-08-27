
/*
    
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
    */  
      
    
      var currentx = null;
      var currenty = null;
    

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
                            $(".submit-this-move").show();
                                var y = $(this).parent().attr('id').substring(3);
                                y = y - 1;
                                var x = $(this).attr('title');
                            currentx = x;
                            currenty = y;
                            $('.valx').val("X is at: " + x.toString());
                            $('.valy').val("Y is at: " + y.toString());

                            
                    });
            });
        

        $('.cell').bind('click',function()
        {
            var $el = $(this).filter(function()
                {
                    return $(this).text() == '.';
                });
        
            if($el.length > 0)
                $el.html("<div class='oimage' style='position:relative;left:0px;top:0px'><img style='position:relative;height:60%;width:60%' src='" + oimg + "'></div>");
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


        
        function spinXandO()
            {          
                //alert("here");  
                $(".cell:contains('X')").filter(function(index)
                    {
                        var cellname = "cellrotate" + index;
                        $(this).html("<div class='" + cellname + "' style='position:relative;left:0px;top:0px;z-index:2;opacity:1.0'><img style='position:relative;height:60%;width:60%' src='" + ximg + "'></div>");
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
                            $(this).html("<div class='" + cellname2 + "' style='position:relative;left:0px;top:0px;z-index:2;opacity:1.0'><img style='position:relative;height:60%;width:60%' src='" + oimg + "'></div>");
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
            $('.valx').val('Please input X Value');
      }

   function clearInputY()
      {
        $('.valy').val('Please input Y Value');
      }
 
 
 
  function pressToPlay(value)
     {
        var hid = 'yes';
          //var hf = "<?php if(isset($headAndFoot)) echo $headAndFoot; ?>";
          //alert(hf);
          $('.press-to-play').hide();
          $.post('playBegin',{'submit':value,'xvalue':currentx,'yvalue':currenty,'hid':hid});
     }	 
     
     
     function pressToContinue(value)
     {
        var hid = 'yes';
          //var hf = "<?php if(isset($headAndFoot)) echo $headAndFoot; ?>";
          //alert(hf);
          $('.press-to-play').hide();
          $('.submit-this-move').hide();
          $('.press-to-continue').hide();
          $.post('playBegin',{'submit':value},
          function(data){
            //alert(JSON.stringify(data));
                   // $('#outDiv').css('border','none');
                   // $('#outDiv').replaceWith(data);
                });
     }	     

 
  function submitThisMove(value)
   {      
       
        var hid = 'yes';
        //var hf  = "<?php if(isset($headAndFoot)) echo $headAndFoot; ?>";
        
      	     alert(value);
            $.post('playBegin',{'submit':value,'xvalue':currentx,'yvalue':currenty,'hid':hid},
            function(data){
                   
                   
                   $('#outDiv').css('border','none');
                   $('#outDiv').replaceWith(data);
                   $('#message').text("Press Continue to see Computer's move");
                   $('.press-to-play').hide();
                   $('.submit-this-move').hide();
                   $('.press-to-continue').show();
                   spinXandO();
                });
                                               
   }	   
 
                      