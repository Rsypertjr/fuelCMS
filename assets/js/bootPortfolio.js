$(document).ready(function(){
 
    
  /*

     $('body').on('mouseover mousemove mouseleave mousedown mouseup',function(){
        
          anyShowing = $('.row#content').find('div.collapse').filter(function(index){
            return $(this).css('display') === 'block';
           }).length;
     
          
     }); 
   

      $('.nav div.dropdown-menu li.panelPart a,.nav li.panelPart a ').on('mouseup',function(){
         
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

      */
     

   $("div.dropdown-menu a[href='#lamp']").add("div.dropdown-menu a[href='#mobile']")
           .add("div.dropdown-menu a[href='#frameworks']").add("ul li a[href='#resume']").add("div.dropdown-menu a[href='#manuals']")
           .add("div.dropdown-menu a[href='#specifications']").add("ul li a[href='#living']").add("ul li a[href='#front']")
           .add("ul li a[href='#home']")
           .on('mousedown',function(){
                $('object').css('display','block');
                let hrf = $(this).attr('href');
                //initial cover rendering
                $(hrf + "Covr").css('display','block').css('opacity','0.85');
                let sel = hrf+" > div > div.panel-body > li > object";
                $(sel).css('display','block');
   
   }); 
  
    $('[data-toggle="tooltip"]').tooltip(); 
  
    $( window ).scroll(function() {
        
        // Adjusting Cover Panels
            $('#home').on('mouseenter',function(){
                $('#homeCovr').css('opacity','0.85');           
        
            });
            
            
  
            $('#about').on('mouseenter',function(){
                $('#aboutCovr').css('opacity','0.85');
           
            });
                
  
            $('#lamp').on('mouseenter',function(){
                $('#lampCovr').css('opacity','0.85');
           
            });
            
                   
            $('#mobile').on('mouseenter',function(){
                $('#mobileCovr').css('opacity','0.85');
             
            });
                
  

            $('#frameworks').on('mouseenter',function(){
                $('#frameworksCovr').css('opacity','0.85');
          
            });
                
            

            $('#manuals').on('mouseenter',function(){
                $('#manualsCovr').css('opacity','0.85');
            
            });

            $('#specifications').on('mouseenter',function(){
                $('#specificationsCovr').css('opacity','0.85');
           
            });

            $('#resume').on('mouseenter',function(){
                $('#resumeCovr').css('opacity','0.85');
        
            });
            
  
            $('#living').on('mouseenter',function(){
                $('#livingCovr').css('opacity','0.85');
           
            });
   
            $('#front').on('mouseenter',function(){
                $('#frontCovr').css('opacity','0.85');
           
            });
            
            
                        
    $('#frontCovr').add('#homeCovr').add('#aboutCovr').add('#lampCovr')
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

