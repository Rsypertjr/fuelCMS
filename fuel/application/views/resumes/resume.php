<script type="text/javascript">
		$(document).ready(function()
			{  
				
				$('#viewPDF').on('click',function()
					{
					  window.open("<?php echo base_url('index.php/pdfResume'); ?>","_blank");
					});  
		
					
				                          
				$('#emailAdd1').bind('click', function()
					{
						
						$("#itemform input[name='itemchoice']").val('email1');
						if(suppressHeadrs == 'yes')
							$("#itemform input[name='appType']").val('mobile');
                        $('#itemform').submit();
					});	
					
					
				$('#emailAdd2').bind('click', function()
					{
						
						$("#itemform input[name='itemchoice']").val('email2');
						if(suppressHeadrs == 'yes')
							$("#itemform input[name='appType']").val('mobile');
                        $('#itemform').submit();
					});	
					
					
			    $('#emailAdd1').bind('mousedown',function()
					{
						$(this).css('color','red');
					});
					
					
				$('#emailAdd1').bind('mouseup',function()
					{
						$(this).css('color','blue');
					});
					
					
					
				$('#emailAdd2').bind('mousedown',function()
					{
						$(this).css('color','red');
					});
					
					
				$('#emailAdd2').bind('mouseup',function()
					{
						$(this).css('color','blue');
					});
					
					
			
			});
  </script>


<div id="resumeContainer" class="viewer">
	<div id="topbar">
		<div id="tcon">
			<div id="viewPDF">View PDF<br/>Resume</div>
			<div id="toplabel">Hover Over Red Items to See Expanded Content</div>
		</div>
	</div>
	<p id="heading">
		Richard L. Sypert Jr.
		<br/>8612 Shady Pines Drive
		<br/>Las Vegas, Nevada 89143
		<br/>Home Phone: (702) 655-4901 Anytime
		<br/>Cell Phone: (702) 203-1674 Anytime
		<br/>Citizenship: United States
		<br/><span id="emailAdd1">Email:  Rsypertjr@hotmail.com</span>
		<br/><span id="emailAdd2">Email:  Rsypertjr@gmail.com</span>
	</p>
	
   
	
	<h1>Professional Experience:</h1>
	
	<div class="jobContainer">
		<h2>Technical Expertise (Through Job Experience and Study)</h2>
		<div class="description">
				<ul>
					<li>B.S. Mechanical Engineering from Kansas University, and B.S. degree Equivalent in Computer Science from 140 additional college credits at the University of Nevada Las Vegas and the College of Southern Nevada.</li>
					<li>Technical Project Management including Research/Design, Procurement,and Implementation; Object Oriented Programming (OOP) in (C++, Visual C++.Net, Visual Basic.Net, Visual C#.Net, Visual Studio, Java, VBScript, JavaScript, DHTML, DOM, XML, XSLT, AJAX, CSS, JQUERY, ASP.Net, ADO.Net)  Much of this OOP knowledge gained thru self-study in addition to many credit hours of Computer Science study at UNLV and CSN</li> 
					<li>I have used PHP, DHTML, XMLDOM, HTMLDOM, Javascript, SVG, XML, and MySQL for programming Web-based applications</li>
					<li>PHPUnit for unit-testing of code</li>
					<li>Behant/Mink for behavior-driven code development</li>
					<li>SQL, Microsoft SQL, PL/SQL programming.</li>
					<li>ArcView GIS;</li> 
					<li>AutoCad;</li> 
					<li>Several years of Technical Writing experience as a Process Engineer (8 years) who led technical projects where I wrote Design, Purchase, and Operational specification documents.  I have also had two technical writing jobs, and I have done technical writing in other engineering and software jobs.</li>
					<li>Microsoft Operating Systems (XP, Vista, 7);</li> 
					<li>Ubuntu Linux, LAMP environment programming</li>
					<li>Computer Networking Principles;</li> 
					<li>Microsoft Word 2003, 2007, and 2010;</li> 
					<li>Adobe InDesign</li>
					<li>Graphic image editing and format conversions</li>
					<li>Here is a link to some of my work:&nbsp;<a href='https://www.asuswebstorage.com/navigate/s/F15EBE072F6D4C63BB26399C941696384'>Work Archive</a></li>
				</ul>
		</div>
	</div>
	

	
	
	<div class="jobContainer">
		<h2>UNLV School of Life Sciences.................May 1st 2012 to June 30 2012</h2>
		<div class="description">
			<h3>Software Programmer/Research Assistant</h3>
			<h3>University of Nevada, Las Vegas, 4505 Maryland Parkway, Las Vegas, NV 89154-4004 USA</h3>
			<ul>
				<li>I was hired to a 5 week contract by Dr. Martin Schiller to write a program for   
					an Organism Relation Ontology (ORO) Miner which provides hierarchical and 
					graphical representation of the different Organ Systems and their sub-systems.  
					I had previously completed a test program for extracting Motif (amino acid code
					patterns) relationships and statistics from proteins (large sequences of amino
					acid codes). 
				</li>
				<li>Both programs use combinations of software languages:  DHTML, CSS, XML, XMLDOM,
					HTMLDOM, JavaScript, MySQL, SVG, DOM and PHP.  I completed two programs for two
					different Organ System/sub-system data structures.  
				</li>
				<li>These programs have event-driven GUI interaction for information selection 
					from hierarchical tree display, and information display is in hybrid form 
					node-based 2-D graphs and tables. 
				</li>
				<li>Here is a link to one of the applications:  <a href="http://rsypertjr.byethost5.com/">Orominer Program</a> 
				</li>
				<li>The programs transformed MySQL database information to an XML database for
					application use.  The programs use recursive iteration and active xml data
					objects for operation.  I worked mostly from home on this project. 
				</li>
			</ul>
		</div>
	</div>



	<div class="jobContainer">
	    <h2>InsureZone..................................January 31, 2011 to April 11, 2011</h2>
	    <div class="description">
			<h3>Software Developer</h3>
			<h3>1070 W. Horizon Ridge Pkwy. Suite 204,Henderson, NV, 89012</h3>
			<ul>
				<li>Web-based programming using XSLT, JavaScript, and AJAX to transform XML and HTML to Dynamic (D)HTML.  
					The XML represented data for automated insurance quotations from on-line applicants.  XSLT and Javascript 
				   (which  both coded insurance rules per state) transformed the XML, and the HTML on the Insurance Carrier website, to (D)HTML submitted on the carrier websites to generate automatic insurance applications, which in-turn generated automatic quotations/declines/holds/etc from the insurance carriers in XML format.
					Used Jedit and Textpad to code XML and XSL.
				</li>
				<li>Used Virtual Office technologies like Trillian and Desktop VPN</li>
				<li>Used File versioning software called Perforce</li>
				<li>Obtained job by completing their programming test</li>
				<li>Technical Writing</li>
			</ul>
		</div>
	</div>


	<div class="jobContainer">
		<h2>Power Efficiency Corporation................August 9, 2010 to October 29, 2010</h2>
		<div class="description">
			<h3>Engineering Support Analyst/Technical Writer -Individual Contractor/Consultant</h3>
			<h3>839 Pilot Road, Suite A, Las Vegas, NV 89119</h3>
			<ul>	
				<li>Used Adobe In-Design to create product manuals for Electric Induction
					Motor Efficiency Controllers.  This was for their existing and next generation
					products.
				</li>
				<li>Used Microsoft Word 2003/2007/2010 for editing</li>
				<li>Did conversion between PDF and Word formats</li> 
				<li>Performed Graphic illustration format conversions</li>
				<li>Used Picasa software and Print Screen utility for Screen Capture</li>
				<li>Worked on Web-based-Knowledge-Repository using Microsoft Visual Studio 2010 and its LINQ-to-SQL feature.</li>
				<li>Edited the company technology white paper for better technology clarification.</li>  
				<li>Gave consultation for improvement of engineering and corporate inter-relationship of processes.  Helped formulate Product Requirement and Product Development 
					procedures and documentation
				</li>
			</ul>
		</div>
	</div>


	<div class="jobContainer">
		<h2>Southern Nevada Health District.......................September 2005 to March 2006</h2> 
		<div class="description">
			<h3>Environmental Health Engineer</h3>
			<h3>625 Shadow Lane, Las Vegas, Nevada 89127</h3>
			<ul>
				<li>Review of Site Plans submitted to Clark County for Residential and Commercial development, 
				to inspect whether water and sewer design meets county design criteria and safety standards (including proper relationship to public utilities)
				</li>
				<li>Learned and used Python programming language and Microsoft Visual Basic</li>
				<li>Used Microsoft Word to write Work Process Definitions for my Engineering Review processes</li>
				<li>Learned and used Microsoft Visual C#.Net programming language to write work process automation program</li>
				<li>Used Auto-Cad to inspect Land Development plans</li>
				<li>Learned and used Arc-View GIS to apply county design criteria to Land Development</li>
			</ul>
		</div>
	</div>

	<div class="jobContainer">
		<h2>Aderholt Specialty Las Vegas............................August 2004 to December 2004</h2>
		<div class="description">
			<h3>Construction Worker</h3>
			<h3>5525 South Valley View, Las Vegas, NV, 89118</h3>
			<ul>
				<li>Construction work involving removal, transport, and disposal of rapidly accumulating debris in work areas to prevent the impediment of other concurrent construction operations in the building of a high-rise tower for Caesar's casino.</li>
			</ul>
		</div>
	</div>


	<div class="jobContainer">
		<h2>Red Inc. Communications Las Vegas.....................December 2002 to February 2003</h2>  
		<div class="description">
			<h3>Technical Writer/Editor</h3>
			<h3>3320 North Buffalo #205, Las Vegas, NV, 89129</h3>
			<ul>
				<li>Used Microsoft Word to perform technical editing of Nuclear Engineering directive and procedural
					documents in support of Bechtel Nevada
				</li>
				<li>Used Microsoft Excel to log a daily record of my work history</li>
			</ul>
		</div>
	</div>


	<div class="jobContainer">
		<h2>Center for Enterprise and Information.................January 2002 to February 2002</h2>
		<div class="description">
		    <h3>Systems Technician Trainee</h3>
			<h3>Clark County Government Building</h3>
			<ul>
				<li>Temporary stint of Systems Technician experience of desktop maintenance of Windows 98/NT/2000
					Operating System
				</li>
				<li>Use of Internet and Windows Networking Techniques to install applications on Desktop computers</li>
				<li>Hardware component replacement for Desktop computers</li>
				<li>Hardware and software imaging for automated install to groups of desktop units</li>
			</ul>
		</div>
	</div>


	<div class="joblessContainer">
		<h2>College Student and Christian Ministry, Las Vegas...........September 1996 to May 2001</h2>
		<div class="description">
			<ul>
				<li>Served as a Deacon and Usher and Teacher and Outreach Leader at my church</li>  
				<li>Served at the local Las Vegas Rescue Mission</li> 
				<li>Attended classes at UNLV and CSN totally 140 credit hours in mostly Computer Science, Math, 
					and Liberal Arts
				</li>
				<li>Received several academic honors including:  National Collegiate Math Honor Society (UNLV), 
					Human Behavior Student of the Year (CSN), NASA Science Scholarship (CSN), and others
				</li>
			</ul>
		</div>
	</div>

	<div class="jobContainer">
		<h2>Allied-Signal Aerospace (now Honeywell) ..................May 1983 to January 1991</h2>
		<div class="description">
		    <h3>Process Engineer (became Senior Process Engineer)</h3>
			<h3>2001 Bannister Road, Kansas City, Missouri, 64128</h3>
			<ul>
				<li>Provided Engineering Support to the Printed Circuit Board factory's chemical/mechanical 
					processes with process and equipment optimization and design
				</li>
				<li>Performed the Lead Engineering responsibility in the procurement of two computer-automated optical
					inspection systems used for quality-verification of machining and circuitry inspection operations
				</li>
				<li>Designed mechanics and software algorithms which enabled system automation function of the 
					optical inspection system
				</li>
				<li>Collaborated with in-house support departments (numerical programming, maintenance engineer,
					metrology engineering) in design of system software interfaces, maintenance and calibration
					requirements for the optical inspection system
				</li>
				<li>Authored the technical documents for Purchasing and Operational specifications of the system</li>  
				<li>Led the design, procurement, and implementation functions including the provision of consultation to vendor design personnel during system build</li>
			</ul>
		</div>
	</div>
	<h1>Educational History</h1>
		<div class="jobContainer">
		    <h2>The University of Kansas...........................September 1980 to May 1983</h2>
			<div class="description">
		        <h3>B.S. Degree in Mechanical Engineering from Kansas University</h3>	
				<ul>
					<li>Lawrence, Kansas</li>
					<li>Degree/Credits:  B.S. in Mechanical Engineering</li>
				</ul>
			</div>
		</div>
					
		<div class="jobContainer">
			<h2>Community College of Southern Nevada...............September 1996 to May 2002</h2> 
			<div class="description">
				<h3>59 Credit hours in Computer Science, Math, and Psychology</h3>	
				<ul>
					<li>Las Vegas, Nevada</li>
					<li>Degree/Credits: 59 credits, 3.44 GPA</li> 
					<li>STUDIED:</br></br>
						<ul>
							<li>Psychology</li> 
							<li>Computer Technology (Microsoft Windows, Oracle PL/SQL, Java, Novell and Windows
								computer networking)
							</li>
							<li>Named Human Behavior Student of the Year (1997)</li> 
							<li>Received a NASA Science Scholarship</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

			
		<div class="jobContainer">
			<h2>University of Nevada Las Vegas....................September 1998 to May 2001</h2>
			<div class="description">
					<h3>81 Credit Hours in Computer Science and Math</h3>
					<ul>
						<li>Las Vegas, Nevada</li>
						<li>Degree/Credits:  81 credits, 3.27 GPA</li> 
							<ul>
								<li>Studied mostly Computer Science,  Math, and Liberal Arts</li> 
								<li>Recognized for Outstanding Academic Achievement from the UNLV Alliance of Professionals of 
									African Heritage
								</li>
								<li>Inducted into the UNLV Student Chapter of Phi Mu Epsilon Mathematical Association of America</li>
								<li>Excelled in writing technical/mathematical computer algorithms such as:</br></br>
									<ul>
										<li>Custom Database (with custom data structures and recursive search)</li> 
										<li>Digital Image Processing (with Discrete Calculus and Statistical techniques applied 
											with Microsoft foundational classes to pixel matrix)
										</li>
										<li>Parallel-Processing involving messaging between Unix system level processes within 
											nested looping structure
										</li>
									</ul>
								</li>
							</ul>
					</ul>
			</div>
		</div>
</div>	