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
	
	 
		
		<style>	
		 	
		</style>
		
		<script type="text/javascript">
		
			$(document).ready(function()
				{
						 var title = "<?php echo $pageTitle; ?>";
						 $(document).prop('title', title);
				});
				
		</script>
	
	
	
	</head>
	
	
<body>
