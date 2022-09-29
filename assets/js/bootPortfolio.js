$(document).ready(function(){
 
    
  

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
     

   $("div.dropdown-menu a[href='#lamp']").add("div.dropdown-menu a[href='#mobile']")
           .add("div.dropdown-menu a[href='#frameworks']").add("ul li a[href='#resume']").add("div.dropdown-menu a[href='#manuals']")
           .add("div.dropdown-menu a[href='#specifications']").add("ul li a[href='#living']").add("ul li a[href='#front']")
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

