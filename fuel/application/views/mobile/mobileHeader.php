<!DOCTYPE html>
<html>
<head>
	<title>RLS Career Portfolio</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $vars['jqMobileCSS1']; ?>" />
	<link rel="stylesheet" href="<?php echo $vars['jqMobileCSS2']; ?>" />
  	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script> 
	<link rel="stylesheet" href="<?php echo $vars['mobileCSS']; ?>" />

</head>

<style>
#mobileFront > div.ui-content > div > .ui-collapsible-inset > h3 > a	{zoom:130%}	
#mobileFront > div.ui-content > div > div:nth-child(5) > div > div > div > ul > .ui-collapsible {margin-bottom:1em}	
#mobileFront > div.ui-content > div > div:nth-child(5) > div > div > div > ul > div > div > ul > li {margin-bottom:0.5em}	
#mobileFront > div.ui-content > div > div:nth-child(5) > div > div > div > ul > li {margin-bottom:0.5em}			
 body {height:auto}
			
</style>

<script type="text/javascript">
  	var headerImages = [];
  	var mhImage2 = '';
  	var mhImage3 = '';
  	var mhImage5 = '';
  	var mhImage6 = '';
  	var mhImage7 = '';
  	var mhImage8 = ''; 
 
					
	<?php 	if (isset($headerImages)) 
	   foreach($headerImages as $image)
				{ ?>
				
											 
					<?php if($image->name == 'mhImage2')  { ?>
						 mhImage2 = "<?php echo img_path($image->link); ?>";
					<?php  } 	?>	 
						 
					<?php if($image->name == 'mhImage3') { ?>
						 mhImage3 = "<?php echo img_path($image->link); ?>";
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
      
   $(document).ready(function(){
		  var mhImages = new Array();
		  mhImages[0] = mhImage2;
		  mhImages[1] = mhImage3;
		  mhImages[2] = mhImage5;
		  mhImages[3] = mhImage6; 
		  mhImages[4] = mhImage7;
		  mhImages[5] = mhImage8;
		  
		  
         var i = 0;
	  	 var mhImg = mhImage2;
		 setInterval(function(){
		        mhImg = mhImages[i];
				//$('#mobfHeader').html('');	
				$('#mobfHeader').html('<h2>RLS Career Porfolio</h2><img src="'+mhImg+'"/>').fadeIn(1000);	
				i++;
				if(i>(mhImages.length-1)) i = 0;	
			},3000);

			/*	$('#mobileFront').on('pageinit',function() {
							$(this).css('zoom','30%');
							$('#mobfHeader h2').add('#mobfHeader img');
							$('.aButton2').css('font-size','1.6em');
							$('#qu-button span').css('height','150%');
						 });  */
   });
</script>
<body>
<div data-role="page" id="mobileFront">
	<div id="mobfHeader" data-role="header" class="ui-btn ui-corner-all">
	    <h2>RLS Career Porfolio</h2>
		<img src = "<?php echo img_path('procprojengimg.jpg'); ?>" /> 
	</div>