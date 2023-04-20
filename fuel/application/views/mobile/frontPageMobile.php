<script type="text/javascript">
   $(document).ready(function(){
		
   });

</script>




<div role="main" class="ui-content">
		<div data-role="collapsibleset" data-theme="a" data-content-theme="b" data-collapsed-icon="plus" data-expanded-icon="minus">
			<div data-role="collapsible">
				<h3>About This Site</h3>
				<p>Jquery Mobile is used to create this Mobile Web Site.  CodeIgniter MVC is also used to manage the php-file View Pages
				   and some the database references utilized by the application.  This is done through the Model and View aspects of the 
				   CodeIgniter MVC.  
				</p></br>
				<p>Other data accesses to MySQL database or XML files are handled by pure PHP or JQuery/JavaScript-based
				   AJAX respectively.  Some of the pages are styled by JQuery Mobile, which includes the front page, all Dialog pages, and 
				   transitions between them.  
				</p></br>
				<p>Some pages are styled by regular JQuery, or JQuery UI, particularly if they are applications already developed for the desktop.  This includes the Orominer
				   , Mini-Motif Program, Othello Game, Living In LV, Dynamic Resume final application pages.
				</p></br>
			</div>
			<div data-role="collapsible">
				<h3>Contact Me</h3>
			
				<ul data-role="listview" data-inset="true">	
				 	<p style="font-size:1.5em">An Email Form is provided for contacting me.</p>
					<p style="font-size:1.5em">Also, my Cell Phone number is: <span style="color:blue"><a href="tel:7022031674">(702) 203-1674</a></span>.</p> 
					</br>
					 <li><a href="<?php echo 'email'; ?>" target="_self"  data-transition="flip">Email Me!</a></li>
				</ul>
			</div>
			<div data-role="collapsible">
				<h3>Orominer Program</h3>
				<p>A Human Biology Analysis Program I wrote for UNLV Life Sciences.  I utilized HTML, DOM, XML, JavaScript,
				 JQuery, and SVG for Graphics!</p></br>
				<p><a href="#oropage" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-forward ui-btn-icon-right ui-corner-all">See More..</a></p></br>
			</div>
			<div data-role="collapsible">
				<h3>Orominer with Histological Data</h3>
				<p>Another Human Biology Analysis Program which has a full data set for all Organ Systems.  The technologies are the same, but 
				   almost all Javascript, before I knew JQuery.</p></br>
				<p><a href="#orohistpage" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-forward ui-btn-icon-right ui-corner-all">See More..</a></p></br>
			</div>
			<div data-role="collapsible">
				<h3>Othello Game</h3>
				<p>A Classic Game that I programmed using HTML, HTML Forms, HTML DOM, JavaScript, JQuery, CSS and CSS 2-D Transforms.</p></br>
				<p><a href="#othellopage" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-forward ui-btn-icon-right ui-corner-all">See More..</a></p></br>
			</div>
			<div data-role="collapsible">
				<h3>Mini-Motif Program</h3>
				<p>This program uses HTML, HTML Forms, PHP-based Regex, JavaScript, JQuery-based AJAX to send HTML selection of SQL Query options, PHP and MySQL on the server side
				to process queries and return through AJAX response to client HTML. </p></br>
				<p><a href="#minimotifpage" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-forward ui-btn-icon-right ui-corner-all">See More..</a></p></br>
			</div>
			<div data-role="collapsible">
				<h3>Technical Writing</h3>
				<p></p></br>
				<p>I am a Technical Writer too!</p></br>
				<p><a href="#twpage" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-forward ui-btn-icon-right ui-corner-all">Go To See Documents</a></p></br>
			</div>
			<div data-role="collapsible">
				<h3>Resume</h3>
				<p>Access Resume in PDF format.</p></br>
					<ul data-role="listview" data-inset="true">	
						<li><a href="<?php echo 'pdfResume';?>" target="_self" data-transition="flip">Open/Download PDF Format Resume</a></li>
					</ul>	
			</div>
			<div data-role="collapsible">
				<h3>Living In Vegas</h3>
				<p>This is a slide show which accesses a MySQL database of photo file references.  A CodeIgniter Model method is
				   used for interfacing and accessing the photos thru PHP.  The Model loads PHP variable arrays which are Posted to
				   the client-side for use by JQuery and CSS3 transitions and tranforms to create the slide show.</p></br>
				<p><a href="#livinginlvpage" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-forward ui-btn-icon-right ui-corner-all">See More..</a></p></br>
			</div>
		</div>
	</div><!-- /collapsible set -->
  </div><!-- /content -->
 </div><!-- /page -->
<div data-role="page" data-dialog="true" id="twpage">
  <div data-role="header">
    <h1 style="font-size:0.7em">Technical Writing</br>Documents</h1>
  </div>
  <div data-role="main" class="ui-content">
			<h2>Product Manuals...</h2>
			<ul data-role="listview" data-inset="true">
				<li><a href="<?php echo 'graingerABCDE'; ?>" target="_self" >Open Grainger ABCDE Series B</a></li>
				<li><a href="<?php echo 'graingerCDE'; ?>" target="_self">Open Grainger CDE</a></li>
				<li><a href="<?php echo 'mecPManual'; ?>" target="_self">Open MEC Product Manual VT 1.6</a></li>
			</ul>
			<h2>Other Technical Documents...</h2>
			<ul data-role="listview" data-inset="true">
				<li><a href="<?php echo 'whitePaper'; ?>" target="_self">Open White Paper</a></li>
				<li><a href="<?php echo 'engSpec'; ?>" target="_self">Open Engineering Specification</a></li>
				<li><a href="<?php echo 'webTech'; ?>" target="_self">Open Code Development Specification</a></li>
			</ul></br>
	
    <a href="#mobileFront" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-back ui-btn-icon-right ui-corner-all" data-direction="reverse" >Go Back to Front Page</a>
  </div> <!-- /content -->
</div> <!-- /page --> 
<div data-role="page" data-dialog="true" id="oropage">
	<div data-role="header">
		<h1 style="font-size:0.7em">Orominer 1</br>Program</h1>
	</div>
	<div data-role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">	
			<p>The Orominer program shows a hierarchical organization of the human body constitution. Its top level is Organ Systems. It uses JavaScript, JQuery for dynamic resizing of text during zooming
					   and event synchronization between hierarchical display and graphic display.
		    </p>
			<p>
			   DOM HTML elements are used to dynamically generate SVG graphical elements. MySQL Database information is converted into XML format using PHP
			   for up front access by the code for generation of Hierachical Display.  
			</p>
			<p>
			   Unfortunately ONLY THE First 3 NODES Of DATA was developed at Project Completion.</br>
			</p></br>
			<li><a href="<?php echo 'orominer1'; ?>"  target="_self" data-transition="flip">Open Orominer 1 Program</a></li>
		</ul>
		</br><p><a href="#mobileFront" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-back ui-btn-icon-right ui-corner-all" data-direction="reverse" >Go Back to Front Page</a></p></br>
	</div> <!-- /content -->
 </div> <!-- /page --> 
 
 <div data-role="page" data-dialog="true" id="orohistpage">
	<div data-role="header">
		<h1 style="font-size:0.7em" >Orominer 2</br>Program</h1>
	</div>
	<div data-role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">	
			<p>This orominer program contains Histological Data within the Hierarchical Organization of Human Body makeup.  
			   This program has a full data set for all Organ Systems. Histological Data is ......</p></br>
			<li><a href="<?php echo 'orominer2'; ?>" target="_self"  data-transition="flip">Open Orominer 2 Program</a></li>
		</ul>
		</br><p><a href="#mobileFront" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-back ui-btn-icon-right ui-corner-all" data-direction="reverse">Go Back to Front Page</a></p></br>
	</div> <!-- /content -->
 </div> <!-- /page --> 
 
 <div data-role="page" data-dialog="true" id="othellopage">
	<div data-role="header">
		<h1 style="font-size:0.7em">Othello Game</br>Program</h1>
	</div>
	<div data-role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">	
			    <p>This is an adaptation of the Classic Othello game where one player competes with the Computer.  
				</p>
				<p>Two Player Play could be implemented, 
				   as well as, making levels of difficulty for game play.
				</p></br>
				<li><a href="<?php echo 'othello'; ?>" target="_self" data-transition="flip">Open Othello Game</a></li>
		</ul>
		</br><p><a href="#mobileFront" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-back ui-btn-icon-right ui-corner-all" data-direction="reverse">Go Back to Front Page</a></p></br>
	</div> <!-- /content -->
 </div> <!-- /page --> 
 
 <!-- Page for Mini Motif Protein Analysis Program -->
 <div data-role="page" data-dialog="true" id="minimotifpage">
	<div data-role="header">
		<h1 style="font-size:0.7em">Protein Amino Acid</br>Sequence Analysis Program</h1>
	</div>
	<div data-role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">	
			    <p>This program gives statistics for all combinations of amino acid sequences within a protein. 
				</p>
				<p>The protein sequence is parsed by PHP-based-Regex techniques from a text file, into a MySQL database.  
				</p>
				<p>The first and last amino acid in a sequence is chosen in the GUI, as well as, 
				   the desired statistical output.  
				</p>
				<p>The database is accessed from JavaScript AJAX sent to PHP on the server side which returns the statistics to client-side HTML.
				</p></br>
				<li><a href="<?php echo 'amino'; ?>" target="_self"  data-transition="flip">Open Mini-Motif Program</a></li>
		</ul>
		</br><p><a href="#mobileFront" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-back ui-btn-icon-right ui-corner-all" data-direction="reverse">Go Back to Front Page</a></p></br>
	</div> <!-- /content -->
 </div> <!-- /page --> 
 
<!-- Page for Resume 
 <div data-role="page" data-dialog="true" id="resumepage">
	<div data-role="header">
		<h1 style="font-size:1.0em">RESUMES</h1>
	</div>
	<div data-role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">	
			   <p>See Resume for Richard L. Sypert Jr. in PDF format</p></br>
				<li><a href="http://resumeDownload" target="_self" data-transition="flip">Open/Download PDF Format Resume</a></li>
		</ul>
		</br><p><a href="#mobileFront" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-back ui-btn-icon-right ui-corner-all" data-direction="reverse">Go Back to Front Page</a></p></br>
	</div>
 </div>  -->
 
 <!-- Page for Living in Las Vegas Slide Show --> 
 <div data-role="page" data-dialog="true" id="livinginlvpage">
	<div data-role="header">
		<h1 style="font-size:0.7em">Living In LV</br>Slide Show</h1>
	</div>
	<div data-role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">	
			 <p>Living in Las Vegas has been a Discovery for Family-Friendly-Fun.  But there are options, and this is part of 
			 what we have discovered..</p></br>
			 <li><a href="<?php echo 'inVegas'; ?>" target="_self"  data-transition="flip">Open Vegas Living</a></li>
		</ul>
		</br><p><a href="#mobileFront" data-transition="flip" class="ui-btn ui-btn-inline ui-icon-back ui-btn-icon-right ui-corner-all"  data-direction="reverse">Go Back to Front Page</a></p></br>
	</div> <!-- /content -->
 </div> <!-- /page -->