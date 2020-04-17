<?php fuel_set_var('css', 'footerCSS')?>
<?php
	            
		$slugs = array('amino','codeRepo','dynResume','pdfResume','email','engSpec','foodStore','gitRepo','googlePortfolio',
			'graingerABCDE', 'graingerCDE','laravel1','laravel2','laravel3','mecPManual','mobilePortfolio','orominer1',
			'orominer2','othello','profile','rubyOnRails','softwareTW','vegasCatering','whitePaper');
	    $GLOBALS['menuOpts'] = array();
	    $GLOBALS['ind'] = 0;
	    $i = 0;
	    foreach($slugs as $slug){
				    $menuOpts[$i] = fuel_model('footerMenuOpts',array('find' => 'one', 'where' => array('slug' => $slug)));
				   // echo $menuOpts[$i]->slug.'<br>';
	                $i++;
	   }
		
?>

<script type="text/javascript">	
  
			$(document).ready(function()
				{
					var menuTag = [];
					var url1 = [];
					var title = [];
					var slug = [];
					
					var index = "<?php foreach($menuOpts as $item){?>";
			        		
			        			slug.push("<?php echo $item->slug; ?>");
			        			menuTag.push("<?php echo $item->menuTag; ?>");
			        			title.push("<?php echo $item->title; ?>");
			        			url1.push("<?php echo $item->url1; ?>");
			        		
			        var index2 = "<?php } ?>";
				     	
					for(var i=0;i<menuTag.length;i++){
						    footerMenu(menuTag[i],title[i],url1[i]);
							}
	
	
			});  
			
			
			
	 function footerMenu(menuTag,title,url1){
	 		$(menuTag).on('click',function()
								{
									$('html title').html(title); 
									$(location).attr('href',url1);
								});	
							}
								
</script>
	<div id="footContainer" class="ui-widget ui-state-default ui-corner-all">
		<div id="formcontainer" style="visibility:hidden">
					<?php echo validation_errors(); ?>
					<?php 
					$attributes = array('id'=>'itemform');
					echo form_open($vars['indexTwo'],$attributes); 
					?>
							  <input type="hidden" name="itemchoice" value='none'/>
							  <input type="hidden" name="itemchoice2" value='none'/>
							  <input type="hidden" name="appType" value='<?php echo $vars['appType']; ?>'/>
					</form>
		</div>
	
		<div id="footOuter" class="ui-widget">
				<div id="softwareDevWork" class="fTitle">Software Development</div>
				<div id="technicalWritingWork" class="fTitle">Technical Writing</div>
				<div id = "engineeringWork" class="fTitle">Engineering</div>
				<div id = "contacts" class="fTitle">Contact Me</div>
				<div id="softwareDevMenu" class="footerMenu">
					<p id="sdmHeader">Click to See Software Apps I've Done:</p>
					<div>
						<div id="aminoCode" class="sdmItem">Amino Acid Code Sequence Analyzer</div>
						<div id="organsCode1" class="sdmItem">Human Organ System Analyzer 1</div>
						<div id="organsCode2" class="sdmItem">Human Organ System Analyzer 2</div>
						<div id="vegasCatering" class="sdmItem">Vegas Caribbean Catering--In Development</div>
						<div id="foodStore" class="sdmItem">Caribbean Food Store--In Development</div>
						<div id="mobilePortfolio" class="sdmItem">Mobile Web Portfolio</div>
						<div id="codeRepo" class="sdmItem">Code Repository</div>
						<div id="gitRepo" class="sdmItem">GIT Repository</div>
						<div id="playOthello" class="sdmItem">Play Othello Game</div>
						<div id="rubyOnRails" class="sdmItem">Ruby On Rails--Training</div>
						<div id="laravel1" class="sdmItem">Laravel MVC Sample 1</div>
						<div id="laravel2" class="sdmItem">Laravel MVC Sample 2 </div>
						<div id="laravel3" class="sdmItem">Laravel MVC Home School Transcript Generator</div>
						<div id="googleCompEng" class="sdmItem">Google Compute Engine Deployment</div>
			        </div>
				</div>
				
				<div id="techWritingMenu" class="footerMenu">
					<p id="twmHeader">Click to See Technical Documents I've Written:</p>
					<div>
						<div id="graingerABCDE" class="twmItem">Grainger ABCDE Series B Product Manual</div>
						<div id="graingerCDE" class="twmItem">Grainger CDE Product Manual</div>
						<div id="mecManual" class="twmItem">MEC Product Manual VT 1.6</div>
						<div id="whitePaper" class="twmItem">Technology White Paper</div>
						<div id="engSpec" class="twmItem">Engineering Specification</div>
						<div id="codeDevSpec" class="twmItem">Code Development Specification</div>
			        </div>
				</div>
				
				<div id="engineeringMenu" class="footerMenu">
				   	<p id="engHeader">Click to See My Engineering Experience:</p>
					<div> 
						<div id="pdfResume" class="engItem" >PDF Resume</div>
						<div id="dynResume" class="engItem" >Dynamic Resume</div>
					</div>
				</div>
				
				<div id="contactMenu" class="footerMenu">
				   	<p id="contactHeader">Click to Make Contact with Me:</p>
					<div> 
						<div id="email" class="contactItem" >Email</div>
						<div id="linkedIn" class="contactItem" >Linked In Profile</div>
					</div>
				</div>
				
		</div>
		
	</div>

</body>
</html>
