
  <script type="text/javascript">
  function JQFunctions()
		{
			var x = 0
			$('p').addClass('ui-content');
			$('#wsfContainer .h2, #intContainer .h2')
				.button()
				.addClass('ui-state-default')
				.css('border-width','0px')
				.click(function(e)
				{
					
					if(x == 1)
						{
							
							$(this).siblings('p')
								   .removeClass('bkWhiteCBlue')
								   .css('zoom','1.0');
							$(this).addClass('ui-state-hover')
								   .addClass('ui-state-default')
								   .removeClass('bkWhiteCBlue');
							x = 0;
						}
					else
						{
							$(this).siblings('p')
								   .css('zoom','1.6')
								   .addClass('bkWhiteCBlue');
							$(this).removeClass('ui-state-hover')
								   .removeClass('ui-state-default')
								   .addClass('bkWhiteCBlue');
						
							x=1;
						}
				});
		}
  </script>



<div id="aboutContainer" class="ui-widget ui-state-active">
	<div id="wsfContainer">
		<div class="h2">Web Site Framework</div>
		<div id="message">Click Blue Button to Toggle Content Zoom</div>
		<p>
		CodeIgniter MVC Framework is used for the overall website.  MVC stands for Model View Controller.&nbsp&nbspA controller file controls posting data back and forth between the HTML pages
		,&nbspwhich are the Views of MVC.&nbsp&nbspModel files control the interface with MySQL databases through CodeIgniter functions.&nbsp&nbspIn certain applications on the site,&nbspsuch as the Orominer and Mini-Motif
	applications,&nbspPHP is used to directly relate to MySQL to build databases and query them for data.
		</p>
		<p>
		See the Home Page for more details on the technology used for each software application (Orominer, Orominer w/Histology, Othello Game, Mini-Motif Program).
		</p>
	</div>
	
	<div id="intContainer">
		<div class="h2">Integrated Technologies</div>
		<p>
		Jquery, Jquery UI, and HTML are integrated into the HTML and JavaScript GUI programming.  Embedded-PHP code is used to place posted-data into variables for the JavaScript and HTML code as needed for 
		MVC-View web pages, or embedded-PHP is used to place variable-data into JavaScript code for AJAX-ing to PHP-based-MySQL methods, run on the Apache server, for building databases or executing SQL queries.  
		</p>
		<p>
		Other technologies used throughout the website are Document Object Model (DOM), Scalable Vector Graphics (SVG), Extensible Markup Language (XML), Regular Expression (Regex), Cascading Style Sheets (CSS),
		CSS3 with 2-dimensional, and 3-dimensional Transformations.
		</p>
	</div>
</div>