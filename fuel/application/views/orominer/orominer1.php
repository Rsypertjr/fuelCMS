<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->

<!-- This file runs the orominer program, The XML file oro_xml4 is read into the xmlDoc XML object.  This program has been substantially -->
<!-- modified with JQuery and use of CSS.  THe NodeDoc is replaced by Global variables and Javascript Objects.  JavaScript objects are used to synchronize -->
<!-- Opening of the Gui Nodes and The Graphics are transformed from the Gui Node in the Hierarchy Display.  This version is substantially more efficient and -->
<!-- better working.   The Image Translation function works a lot better for example-->


<script type="text/javascript">
// JAVASCRIPT FUNCTIONS ---------------------------------------------------------------------------


var svgNS = "http://www.w3.org/2000/svg";  // namespace for svg graphic methods
var xmlDoc = "";

$(document).ready(function(){
  loadGUI();

  
});

function translateCoords(x,y)
 {
	this.x = x;
	this.y = y;
 }
 
 var translationCoords = new translateCoords(0,0);
 
 
function scaleFact(scaleFactr)
{
	this.scaleFactr = scaleFactr;
}
 
var gScaleFactor = new scaleFact(1);


function doTransform(nds)
{
  var xmlHttp = getXMLHttp();
  xmlHttp.onreadystatechange = function()
  {
    if(xmlHttp.readyState == 4 && xmlhttp.status==200)
    {
      alert(xmlHttp.responseText);
    }

  }
  xmlHttp.open("GET","transformXML.php?nodes="+nds, true);
  xmlHttp.send(null);
}

 var MEMSIZE =30;

 var idxNum = [0,1,2,3,4,5,6,7,8,9,10];
 var contactMode = new String("ccell");
 
var nodeToggler = new Array();
function nodeToggle(name,systemIndex,organIndex,tissueIndex,cellIndex,value)
{
	this.name = name;
	this.systemIndex = systemIndex;
	this.organIndex = organIndex;
	this.tissueIndex = tissueIndex;
	this.cellIndex = cellIndex;
	this.value = value;
}



function getTab(xmlDoc,nodeDoc,tableDoc,mode)  // Creates tabs for cell-to-cell and cell-to-lumen display modes
{
	// create function to store tab selection in XML
	

	
	// Menu Message
	$('#gphmess').text('Click Here For Menu!!!').css('font-size','2.5em').css('padding-top','1.0em');

}


	
	


function drawNodes2(xmlDoc,nodeDoc,tableDoc,mode)
{
// Draw Nodes from the list of nodes in the hierarchical display
  	 
	all = nodeDoc.getElementsByTagName("All");
	n = 0;
	
	var organgle = 0;
	var tissueangle = 0;
	var cellangle = 0;
	var itemangle = 0;
	
  //  $('#menutable').css('zoom','73%');
	// clear out display
	var mysvg = document.getElementById("mySVG");
	el = mysvg.firstChild;
	while(el)
		{
			el.parentNode.removeChild(el);
			el = mysvg.firstChild;
		}  
	
	$sysid = $('.sys_od').filter(function()
		{  
		  var temp = new Array();
		  if( $(this).children(":first").next().text() == "Click to Close")
			 return this;
		});
	
	var $sysname = new Array();
	var $syscolor = new Array();
	for(var i=0;i<$sysid.length;i++)
		{
			var nme = $sysid[i].getAttribute("id").split("_1-");  // raw name
			nme2 = nme[0];	
			$sysname[i] = nme2;
			$syscolor[i] = $sysid[i].firstChild.style.color;
		
		}
	ind = 0;
	txval = 0;
	tyval = 0;
	if($sysname.length > 0)
		{
				var x1 = 850;
				var y1 = 1000;
				var yadd = 1000; 
				var scale = 0;
				
				//Creating outside graphical contaniner
				og = document.createElementNS(svgNS,"g");
				og.setAttributeNS(null,"width","4000");
				og.setAttributeNS(null,"height","4000");
				og.setAttributeNS(null,"transform","scale(1)");
				og.setAttributeNS(null,"transform","translate(0,0)");
				og.setAttributeNS(null,"id","gphdisp3");
				
		   
				 
				// Create translate value and put in XML
				all = nodeDoc.getElementsByTagName("All");
				txval = translationCoords.x;
				txval = translationCoords.y;
				
				var sysrad = 60;
				var orgrad = 45;
				var tissuerad = 35;
				var cellrad = 25;
				var itemrad = 15;
				var cel_len = new Array()
				var $tissuename = new Array();
				var $cellname = new Array();
				var $orgname = new Array();
				var $tissid = new Array(50);
				for(var sn=0;sn < $sysname.length;sn++)  // draw system node
					{
							txval = translationCoords.x;
							txval = translationCoords.y;
						
							ind++;
							if(ind % 2 == 0)
								xadd = -2000;
							else
								xadd = 2000;
							
							fac = gScaleFactor.scaleFactr;
											
							og.setAttributeNS(null,"transform","scale(" + fac + ")" + " translate(" + txval + "," + tyval + ")");
					
							g = document.createElementNS(svgNS,"g");
							g.setAttributeNS(null,"id",$sysname[sn]);
					
							circle = document.createElementNS(svgNS,"circle");
							circle.setAttributeNS(null,"cx",x1);
							circle.setAttributeNS(null,"cy",y1);
							circle.setAttributeNS(null,"r",sysrad);
							circle.setAttributeNS(null,"stroke","black");
							circle.setAttributeNS(null,"stroke-width",5);
							circle.setAttributeNS(null,"fill",$syscolor[sn]);
							circle.setAttributeNS(null,"z-index",5);
							circle.setAttributeNS(null,"opacity",1);
							circle.setAttributeNS(null,"id",$sysname[sn]+"node");
							circle.setAttributeNS(null,"class","clickNode");
						
							og.appendChild(g);
							g.appendChild(circle);
							
							//Try Using JQuery to append Graphical Objects
							$og = $(og);
							$('#mySVG').append($og);
							
							
							text = document.createElementNS(svgNS,"text");
							text.setAttributeNS(null,"x",x1);
							text.setAttributeNS(null,"y",(y1+110));
							text.setAttributeNS(null,"fill","black");
							text.setAttributeNS(null,"text-anchor","middle");
							text.setAttributeNS(null,"opacity",1);  
							text.setAttributeNS(null,"font-size",60);
							systext = document.createTextNode($sysname[sn]);
							text.appendChild(systext);
							og.appendChild(g);
							g.appendChild(text);
							
							//Try Using JQuery to append Graphical Objects
							$og = $(og);
							$('#mySVG').append($og);
							
							var $systype = $sysname[sn].split(" ");
							$systype = $systype[0];
							
							$orgid = $('.org_od').filter(function()
								{  
									  var temp = new Array();
									  if( $(this).filter('div[id*='+$systype+']').children(":first").next().text() == "Click to Close")
										 return this;
								});
							
							$orgname[sn] = new Array();
							$tissuename[sn] = new Array();
							$cellname[sn] = new Array();
							
							for(var i=0;i<$orgid.length;i++)
								{
									var nme = $orgid[i].getAttribute("id").split("_1-");  // raw name
									nme2 = nme[0];	
									nme3 = nme2.split("_");
									nme3 = nme3[1];
									$orgname[sn][i] = nme3;
								}
													
							
							
							var n = $orgname[sn].length
							
							if(n>0 && (typeof(n) != "undefined"))
							{
								var organgleinc = (2*Math.PI)/n;
								
								for(var o2=0;o2<n;o2++)  //Begin to draw organ nodes
									{			
																									
												if (o2==0)
													organgle = 0;
												
												linecalcradius = 700;
												var x2 = x1 + linecalcradius*Math.cos(organgle);
												var y2 = y1 + linecalcradius*Math.sin(organgle);
											
												// Draw line to organ node
												
												g = document.createElementNS(svgNS,"g");
												g.setAttributeNS(null,"id",$sysname[sn]+$orgname[sn][o2]);
												
												var line = document.createElementNS(svgNS,"line");
												line.setAttributeNS(null,"x1",x1+sysrad*Math.cos(organgle));
												line.setAttributeNS(null,"y1",y1+sysrad*Math.sin(organgle));
												line.setAttributeNS(null,"x2",x2);
												line.setAttributeNS(null,"y2",y2);
												line.setAttributeNS(null,"stroke","rgb(255,0,0)");
												line.setAttributeNS(null,"stroke-width",5);
												line.setAttributeNS(null,"z-index",2);
												line.setAttributeNS(null,"opacity",1);  
												og.appendChild(g);
												g.appendChild(line);
												
												//Try Using JQuery to append Graphical Objects
												$og = $(og);
												$('#mySVG').append($og);
												
												// Draw Organ node
												circle = document.createElementNS(svgNS,"circle");
												circle.setAttributeNS(null,"cx",x2);
												circle.setAttributeNS(null,"cy",y2);
												circle.setAttributeNS(null,"r",orgrad);
												circle.setAttributeNS(null,"stroke","black");
												circle.setAttributeNS(null,"stroke-width",5);
												circle.setAttributeNS(null,"fill",$syscolor[sn]);
												circle.setAttributeNS(null,"id",$sysname[sn]+$orgname[sn][o2]+"node");
												circle.setAttributeNS(null,"z-index",5);
												circle.setAttributeNS(null,"name",$sysname[sn]+$orgname[sn][o2]);
												circle.setAttributeNS(null,"class","clickNode");
										
												og.appendChild(g);
												g.appendChild(circle);
																						
												//Try Using JQuery to append Graphical Objects
												$og = $(og);
												$('#mySVG').append($og);
												
												// Draw node label
												text = document.createElementNS(svgNS,"text");
												text.setAttributeNS(null,"x",(x2));
												text.setAttributeNS(null,"y",(y2-67));
												text.setAttributeNS(null,"fill","black");
												text.setAttributeNS(null,"text-anchor","middle");
												text.setAttributeNS(null,"opacity",1);  
												text.setAttributeNS(null,"font-size",52);
												
												var orgnm = document.createTextNode($orgname[sn][o2]);
												text.appendChild(orgnm);
												og.appendChild(g);
												g.appendChild(text);
												
												//Try Using JQuery to append Graphical Objects
												$og = $(og);
												$('#mySVG').append($og);
												
												$tissid = $('#harchframe').find('.tiss_od').filter(function()
													{  
														  var temp = new Array();
														  if( $(this).filter('div[id*='+$systype+']',':visible').filter('div[id*='+$orgname[sn][o2]+']').children(":first").filter("div:contains('TISSUE')").next().text() == "Click to Close")
															 return $(this);
													});
												$tissuename[sn][o2] = new Array();
												$cellname[sn][o2] = new Array();
												
												for(var i=0;i<$tissid.length;i++)
													{
														var nme = $tissid[i].getAttribute("id").split("_1-");  // raw name
														nme2 = nme[0];	
														nme3 = nme2.split("_");
														nme3 = nme3[2];
														$tissuename[sn][o2][i] = nme3;
														
													}
												tl = $tissuename[sn][o2].length;
												if(tl > 0)
													{
														var x1b = x2;
														var y1b = y2;
														var tissueangleinc = (2*Math.PI)/tl;
												        
														for(var ti=0;ti<tl;ti++)   // draw tissue nodes
															{
															   
																if(ti==0)
																	{
																		 var tissueangle = organgle + 30/(2*Math.PI);
																	}
																
																var linecalcradius2 = 500;
																var x2b = x1b + linecalcradius2*Math.cos(tissueangle);
																var y2b = y1b + linecalcradius2*Math.sin(tissueangle);
															
																// Draw line to tissue node
																var line = document.createElementNS(svgNS,"line");
																line.setAttributeNS(null,"x1",x1b+orgrad*Math.cos(tissueangle));
																line.setAttributeNS(null,"y1",y1b+orgrad*Math.sin(tissueangle));
																line.setAttributeNS(null,"x2",x2b);
																line.setAttributeNS(null,"y2",y2b);
																line.setAttributeNS(null,"stroke","rgb(255,0,0)");
																line.setAttributeNS(null,"stroke-width",5);
																line.setAttributeNS(null,"opacity",1);  
																
																og.appendChild(g);
																g.appendChild(line);
																
																//Try Using JQuery to append Graphical Objects
																$og = $(og);
																$('#mySVG').append($og);
															
																// Draw Tissue node
																var circle = document.createElementNS(svgNS,"circle");
																circle.setAttributeNS(null,"cx",x2b);
																circle.setAttributeNS(null,"cy",y2b);
																circle.setAttributeNS(null,"r",tissuerad);
																circle.setAttributeNS(null,"stroke","black");
																circle.setAttributeNS(null,"stroke-width",5);
																circle.setAttributeNS(null,"fill",$syscolor[sn]);
																circle.setAttributeNS(null,"z-index",5);
																circle.setAttributeNS(null,"id",$sysname[sn]+$orgname[sn][o2]+$tissuename[sn][o2][ti]+"node");
																circle.setAttributeNS(null,"name",$sysname[sn]+$orgname[sn][o2]+$tissuename[sn][o2][ti]);
																circle.setAttributeNS(null,"class","clickNode");
																	
																og.appendChild(g);
																g.appendChild(circle);
																
																//document.getElementById("mySVG").appendChild(og);
																//Try Using JQuery to append Graphical Objects
																$og = $(og);
																$('#mySVG').append($og);
																
																// Draw tissue node label
																var text = document.createElementNS(svgNS,"text");
																text.setAttributeNS(null,"x",(x2b));
																text.setAttributeNS(null,"y",(y2b-42));
																text.setAttributeNS(null,"fill","black");
																text.setAttributeNS(null,"text-anchor","middle");
																text.setAttributeNS(null,"opacity",1);  
																text.setAttributeNS(null,"font-size",42);
															
																tisnm = document.createTextNode($tissuename[sn][o2][ti]);
																text.appendChild(tisnm);
																og.appendChild(g);
																g.appendChild(text)
																
																//Try Using JQuery to append Graphical Objects
																$og = $(og);
																$('#mySVG').append($og);
																
																tname = $tissuename[sn][o2][ti].split(" ");
																
																$cellid = $('.cell_od').filter(function()
																	{  
																		  var temp = new Array();
																		  if( $(this).filter('div[id*='+$systype+']').filter('div[id*='+$orgname[sn][o2]+']').filter('div[id*='+tname[0]+']').filter('div[id*='+tname[1]+']').children(":first").next().text() == "Click to Close")
																			 return this;
																	});
																$cellname[sn][o2][ti] = new Array();
																
																for(var i=0;i<$cellid.length;i++)
																	{
																		var nme = $cellid[i].getAttribute("id").split("_1-");  // raw name
																		nme2 = nme[0];	
																		nme3 = nme2.split("_");
																		nme3 = nme3[3];
																		$cellname[sn][o2][ti][i] = nme3;
																	}
																nocells = $cellname[sn][o2][ti].length;
																
																// Open Cells in Active XML		
																if(nocells > 0)
																	{	
																		var x1c = x2b;
																		var y1c = y2b;
																		var cellangleinc = (2*Math.PI)/nocells;
																
																		for(var cel=0;cel<nocells;cel++)  // draw cells loop
																		{
																			if (cel==0)
																				var cellangle = tissueangle + (90)/(2*Math.PI);
																																				
																			linecalcradius3 = 350;
																			var x2c = x1c + linecalcradius3*Math.cos(cellangle);
																			var y2c = y1c + linecalcradius3*Math.sin(cellangle);
																			
																			// Draw line to cell node									
																			var line = document.createElementNS(svgNS,"line");
																			line.setAttributeNS(null,"x1",x1c+tissuerad*Math.cos(cellangle));
																			line.setAttributeNS(null,"y1",y1c+tissuerad*Math.sin(cellangle));
																			line.setAttributeNS(null,"x2",x2c);
																			line.setAttributeNS(null,"y2",y2c);
																			line.setAttributeNS(null,"stroke","rgb(255,0,0)");
																			line.setAttributeNS(null,"stroke-width",5);
																			line.setAttributeNS(null,"opacity",(.6));  
																			og.appendChild(g);
																			g.appendChild(line);
																			
																			//Try Using JQuery to append Graphical Objects
																			$og = $(og);
																			$('#mySVG').append($og);
																			
																			// Draw cell node
																			var circle = document.createElementNS(svgNS,"circle");
																			circle.setAttributeNS(null,"cx",x2c);
																			circle.setAttributeNS(null,"cy",y2c);
																			circle.setAttributeNS(null,"r",cellrad);
																			circle.setAttributeNS(null,"stroke","black");
																			circle.setAttributeNS(null,"stroke-width",6);
																			circle.setAttributeNS(null,"fill",$syscolor[sn]);
																			circle.setAttributeNS(null,"opacity",1);
																			circle.setAttributeNS(null,"z-index",5);
																			circle.setAttributeNS(null,"id",$sysname[sn]+$orgname[sn][o2]+$tissuename[sn][o2][ti]+$cellname[sn][o2][ti][cel]+"node");
																			circle.setAttributeNS(null,"name",$sysname[sn]+$orgname[sn][o2]+$tissuename[sn][o2][ti]+$cellname[sn][o2][ti][cel]);
																			circle.setAttributeNS(null,"class","clickNode");
																		
																			og.appendChild(g);
																			g.appendChild(circle);

																			//Try Using JQuery to append Graphical Objects
																			$og = $(og);
																			$('#mySVG').append($og);
																			
																			
																			// Draw cell node label
																			var text = document.createElementNS(svgNS,"text");
																			text.setAttributeNS(null,"x",(x2c));
																			text.setAttributeNS(null,"y",(y2c-35));
																			text.setAttributeNS(null,"fill","black");
																			text.setAttributeNS(null,"text-anchor","middle");
																			text.setAttributeNS(null,"opacity",1);  
																			text.setAttributeNS(null,"font-size",37);
																		
																			var celname = document.createTextNode($cellname[sn][o2][ti][cel]);
																			text.appendChild(celname);
																			g.appendChild(text);
																			og.appendChild(g);
																			
																			//Try Using JQuery to append Graphical Objects
																			$og = $(og);
																			$('#mySVG').append($og);
															
																			var tid = $sysname[sn]+"_"+$orgname[sn][o2]+"_"+$tissuename[sn][o2][ti];  // Tissue id in XML
																	        if(mode == "ccell")
																				contacts = $(xmlDoc).find("System").eq(sn).find("Organ").eq(o2).find("Tissue").eq(ti).find("Cell").eq(cel).find("CellContactCell").contents();
																			else if(mode == "clumen")
																				contacts = $(xmlDoc).find("System").eq(sn).find("Organ").eq(o2).find("Tissue").eq(ti).find("Cell").eq(cel).find("CellContactLumen").contents();
																
																		
																		  var itl = 0;
																		  var items = new Array();
																          items = contacts;
																		  itl = contacts.length;	
																		  
																		  if(itl > 0)
																			{	
																			var x1d = x2c;
																			var y1d = y2c;
																			var itemangleinc = (2*Math.PI)/itl;
																			
																			// Cell Contact Section
																				for(var cct=0;cct<itl;cct++)
																				{ 
																				  var itemname = items.eq(cct).text();
																				  
																				  if(cct == 0)
																				   {
																					 // Build Cell Contact Table
																					 // Table for Cell Contacts    
																					 var tname2 = "";
																					 if(mode == "ccell")
																					   tname2 = $sysname[sn]+$orgname[sn][o2]+$tissuename[sn][o2][ti]+$cellname[sn][o2][ti][cel]+"cellcontacttable";
																					 else if(mode == "clumen")
																					   tname2 = $sysname[sn]+$orgname[sn][o2]+$tissuename[sn][o2][ti]+$cellname[sn][o2][ti][cel]+"lumencontacttable";
																				
																					   tname2 = tname2.replace(/\_|\s/gi,'');
																				
																				    	var $table1 = $("<table id='"+ tname2 +"' class='atable'></table>");
																				    	$table1.attr("border","1");
																					    $table1.attr("font-size","30px");
																			
																					  // Clear out tables for cell contacts if mode is changed
																					  var $tables = new Array();
																					  if(mode == "ccell")
																						{
																						  $find = $("table[id*='lumencontacttable']");
																						  if(typeof($find) != "undefined")
																								$find.remove();
																						}
																					   else if(mode == "clumen")
																						{
																					      $find = $("table[id='cellcontacttable']");
																						  if(typeof($find) != "undefined")
																								$find.remove();
																						  
																						}
																					}	// end of if(cct == 0		
																				  
																				   var $tr = $("<tr></tr>");
																													
																				   if(mode == "ccell")
																					{
																						if(cct==0)                                                       
																							{
																							   var $th = $("<th>Cell Contact(s) for " + "<font color='"+$syscolor[sn]+ "'>"+ $cellname[sn][o2][ti][cel] + "</font>" + " Cell</th>");
																							  
																							   $th.attr("width","auto");
																							   $th.attr("height","auto");
																							   $tr.html($th);
																							   $table1.append($tr);	
																							   $tr = $("<tr></tr>");
																							   $td = $("<td><center>"+ "<font color='" + $syscolor[sn] + "'>" + itemname + "</font><center></td>");
																							   $tr.html($td);
																							   $table1.append($tr);
																							   
																							   
																							   
																							 }
																						 else
																							{
																							   var $tr = $("<tr></tr>");
																							   var $td = $("<td><center>"+ "<font color='" + $syscolor[sn] + "'>" + itemname + "</font><center></td>");
																							   $tr.html($td);
																							   $table1.append($tr);
																							}
																					}
																				   else if(mode == "clumen")
																					{   
																						if(cct==0)                                      
																							{
																							   var $th = $("<th>Lumen Contact(s) for " + "<font color='"+$syscolor[sn]+ "'>"+ $cellname[sn][o2][ti][cel] + "</font>" + " Cell</th>");
																							   $th.attr("width","auto");
																							   $th.attr("height","auto");
																							   $tr.html($th);
																							   $table1.append($tr);	
																							   var $tr = $("<tr></tr>");
																							   var $td = $("<td><center>"+ "<font color='" + $syscolor[sn] + "'>" + itemname + "</font><center></td>");
																							   $tr.html($td);
																							   $table1.append($tr);
																							}
																						else
																							{
																							   var $tr = $("<tr></tr>");
																							   var $td = $("<td><center>"+ "<font color='" + $syscolor[sn] + "'>" + itemname + "</font><center></td>");
																							   $tr.html($td);
																							   $table1.append($tr);
																							}
																					}
																						
																					
																					if (cct==0)
																					var itemangle = cellangle + (90)/(2*Math.PI);
																													
																				var linecalcradius4 = 125;
																				var x2d = x1d + linecalcradius4*Math.cos(itemangle);
																				var y2d = y1d + linecalcradius4*Math.sin(itemangle);
																			
																				// Draw line to item node								
																				var line = document.createElementNS(svgNS,"line");
																				line.setAttributeNS(null,"x1",x1d+cellrad*Math.cos(itemangle));
																				line.setAttributeNS(null,"y1",y1d+cellrad*Math.sin(itemangle));
																				line.setAttributeNS(null,"x2",x2d);
																				line.setAttributeNS(null,"y2",y2d);
																				line.setAttributeNS(null,"stroke","rgb(255,0,0)");
																				line.setAttributeNS(null,"stroke-width",5);
																				line.setAttributeNS(null,"opacity",(.6));  
																				og.appendChild(g);
																				g.appendChild(line);
					
																				 //Try Using JQuery to append Graphical Objects
																				var $og = $(og);
																				$('#mySVG').append($og);
																			 
																				// Draw item node
																				var circle = document.createElementNS(svgNS,"circle");
																				circle.setAttributeNS(null,"cx",x2d);
																				circle.setAttributeNS(null,"cy",y2d);
																				circle.setAttributeNS(null,"r",itemrad);
																				circle.setAttributeNS(null,"stroke","black");
																				circle.setAttributeNS(null,"stroke-width",6);
																				circle.setAttributeNS(null,"fill",$syscolor[sn]);            
																				circle.setAttributeNS(null,"opacity",1);
																				circle.setAttributeNS(null,"z-index",5);
																				circle.setAttributeNS(null,"id",$sysname[sn]+$orgname[sn][o2]+$tissuename[sn][o2][ti]+$cellname[sn][o2][ti][cel]+itemname+"node");
																				circle.setAttributeNS(null,"name",$sysname[sn]+$orgname[sn][o2]+$tissuename[sn][o2][ti]+$cellname[sn][o2][ti][cel]+itemname);
																				circle.setAttributeNS(null,"class","clickNode");
																		
																				og.appendChild(g);
																				g.appendChild(circle);
																			
																				//Try Using JQuery to append Graphical Objects
																				var $og = $(og);
																				$('#mySVG').append($og);	
																													
																				 // Draw item node label
																				var text = document.createElementNS(svgNS,"text");
																				text.setAttributeNS(null,"x",(x2d));
																				text.setAttributeNS(null,"y",(y2d-35));
																				text.setAttributeNS(null,"fill","black");
																				text.setAttributeNS(null,"text-anchor","middle");
																				text.setAttributeNS(null,"opacity",1);  
																				text.setAttributeNS(null,"font-size",30);
																																												   
																				var itmname = document.createTextNode(itemname);
																				text.appendChild(itmname);
																				g.appendChild(text);
																				og.appendChild(g);
																				
																				//Try Using JQuery to append Graphical Objects
																				$og = $(og);
																				$('#mySVG').append($og);
																			 
																			 
																				itemangle = itemangle + itemangleinc;	
																				}	// end of for(cct = 0--- Loop for Cell Contacts
																				
																				   tname2 = tname2.replace(/\s|\_|\-/gi,'');
																				   $find = $('#'+ tname2);
																				   $contable = $('#dispframe').find('th:contains('+$cellname[sn][o2][ti][cel]+')').filter('th:contains("Cell Contact")');
																				 
																				   $lumtable = $('#dispframe').find('th:contains('+$cellname[sn][o2][ti][cel]+')').filter('th:contains("Lumen Contact")');
																				   if(mode=="ccell" && (typeof($contable.html()) == "undefined")) //Check if table already exists
																					{
																					 $('#dispframe').prepend($table1);
																					}
																				   else if(mode=="clumen" && (typeof($lumtable.html()) == "undefined")) //Check if table already exists
																					{
																					 $('#dispframe').prepend($table1);
																				    } 
																		
																			}	 // end of if(itl > 0
																		   
																		cellangle = cellangle + cellangleinc;
																		}  //end of for(ccel = 0   End of Cell Loop
																	}    // end of if(nocells>0
															tissueangle = tissueangle + tissueangleinc;					
															}   // end of for(tti=0   end of tissue loop
													}	// end of if(tl > 0
												organgle = organgle + organgleinc;
									}	// end of for loop for organ		
							}  // end if # organs > 0
					    	angle = 0;
					    	var y1 = y1 + yadd;	
					    	var x1 = x1 + xadd;
					}  // end draw system node for loop
			
		var x1 = 0;
		var x2 = 0;
		var y1 =0;
		var y2 = 0;

		// JQuery Translate Image by Screen Method
		$('.clickNode').bind('mouseover', function()
			{
						var x1 = window.event.clientX; 
						var y1 = window.event.clientY;
				
						
									$(this).mousemove(function()
										{	
											var x2 = window.event.clientX; 
											var y2 = window.event.clientY;
											
											var dx = x2 - x1;
											var dy = y2 - y1;
													xval = translationCoords.x;
													yval = translationCoords.y;
												  
													translationCoords.x = xval+dx;
													translationCoords.y = yval+dy;
													
													xval = translationCoords.x;
													yval = translationCoords.y;
												 
																gphdisp = mysvg.getElementById("gphdisp");
													  
																	gphdisp.setAttributeNS(null,"transform","scale(" + fac + ")" + " translate(" + (xval+dx) + "," + (yval+dy) + ")");
									

												$(this).bind('mouseout',function()
													{
																	$(this).unbind('mousemove');
													});   // end of translate
										});
							
			
			}); 
		}  // end if sys > 0
				
	   // Use JQuery to Dynamically Adjust Table Font Sizes for Common Organ Systems
		
					var $dframeHeader = $('#dtitle');
					var $table = $('.atable');
					
					var setTableScale = function(){
					
							// Scale text to containter div as it zooms
							var scaleSource = $dframeHeader.height();
							scaleFactor2 = 0.80;
							var fontSize = scaleSource * scaleFactor2; 
							$table.css('font-size', fontSize + 'px');
							$('#menutable').css('font-size','2.0em');   // Set menutable font size
							
						}
						$(window).resize(function(){
							setTableScale();
						});
					setTableScale();	// Run before Window resize
					
				
							
}  



function xml_to_string(xml_node)
    {
        if (xml_node.xml)
            return xml_node.xml;
        else if (XMLSerializer)
        {
            var xml_serializer = new XMLSerializer();
            return xml_serializer.serializeToString(xml_node);
        }
        else
        {
            alert("ERROR: Extremely old browser");
            return "";
        }
    }



function draworgantables(xmlDoc,tableDoc,lname,sysid,organid,partid,cl)
{
	 // Builds tabular info for Organs (Common Systems, Parts, Contact Organs for Parts, etc)
     // ********************************************************************	 
     
   //alert((new XMLSerializer()).serializeToString(xmlDoc));  
   //alert((new XMLSerializer()).serializeToString(tableDoc));  
	contactorgan = new Array();
    
    $sys = new Array();
    $org = new Array();
    $part = new Array();
    $organcontacts = new Array();
    $organcontactlumens = new Array();  
    $contactLumen = new Array();
    $contacts = new Array();
    $partContactOrgan = new Array();
    var $tname2 = "";
    
    
  
    
    
    $sys = $(xmlDoc).find("System").eq(sysid).contents();
    //alert($sys.text());  
    
    $sysName =$sys.eq(sysid).text();
    $org = $(xmlDoc).find("System").eq(sysid).find("Organ").contents();
    $orgName = $org.eq(organid).text();
	$part = $(xmlDoc).find("System").eq(sysid).find("Organ").eq(organid).find("Part").contents();
	
   
    //alert($part.length);
    
	$organContact = $(xmlDoc).find("System").eq(sysid).find("Organ").eq(organid).find("OrganContacts").contents();
    $organContactOrgan = $(xmlDoc).find("System").eq(sysid).find("Organ").eq(organid).find("OrganContacts").find("OrganContactOrgan").contents();
	
    $organContactLumen = $(xmlDoc).find("System").eq(sysid).find("Organ").eq(organid).find("OrganContacts").find("OrganContactLumen").contents();

    // create system component of organ
    $systemOfOrgan = $("<System></System>");
    $systemOfOrgan.text($sysName); 
   
    // create organ component of organ
    $Organ = $("<Organ></Organ>");
    $Organ.text($orgName);
    $systemOfOrgan.append($Organ)
	
    //Organ Name
    $orName = $org.eq(organid).text();   
    
    // Element for Table to be built
   $tables = $(tableDoc).find("Tables");
    
     // First see if there are common systems to see if organ draw has multiple systems  
    $i = 0
    $j = 0;
	var $commonSystems = new Array();
    $(xmlDoc).find("System").each( function()
        {
           $thisSysName = $(this).contents().eq(0).text();
           if($sysName == $thisSysName)
                {
                        $(xmlDoc).find("System").eq($i).find("Organ").each(function()
                        {
                            $thisOrgName = $(this).contents().eq(0).text();
                            if($orgName == $thisOrgName)
                                {
                                       $commonSystems = $(xmlDoc).find("System").eq($i).find("Organ").eq($j).find("CommonSystem").contents();
                                      
                                }
                                $j++;
                            });
                    }
             $i++;
            });  
    
   
    
	if($commonSystems.length > 0)	
		{
			
			
			// Prompt Alerting to Organ having Common Systems
			$('#gphmess').html('Testing');
			
           $table1 = $("<table></table>");
           $table1.attr("border","1");
           $table1.attr("class","atable");
           $table1.attr("class","atable");
           $tname2 = $sysName+$orgName+"table";
           $tname2 = $tname2.replace(/\s/gi,'');
		   $table1.attr("id",lname+"table"); 
            		   		   
           $tr = $("<tr></tr>");
           $th = $("<th><center>Common Systems(s) for " + "<font color='"+cl+ "'>"+ $orName + "</font>" + " Organ</center></th>");
           $th.attr("width","auto");
           $th.attr("height","auto");
           $tr.html($th);
           $table1.append($tr);  
		   
           for(cs=0;cs<$commonSystems.length;cs++)
				{
                    var $csName = $commonSystems.eq(cs).text();
                    $tr = $("<tr></tr>");
                    $td = $("<td><center>"+ "<font color='" + cl + "'>" + $csName + "</font><center></td>");
                    $tr.html($td);
                    $table1.append($tr);  
					
                    if(cs == ($commonSystems.length-1))
						{
                            $tr = $("<tr></tr>");
                            $td = $("<td><div style='background:grey;height:auto'></div></td>");
                            $tr.html($td);
                            $table1.append($tr);  
						}
				}
		}
	else
		{
            $table1 = $("<table></table>");
            $table1.attr("border","1");
            $table1.attr("class","1");
            $tname2 = $sysName+$orgName+"table";
            $tname2 = $tname2.replace(/\s|\_|\-/gi,'');
			$table1.attr("class","atable");
			$table1.attr("id",lname+"table"); 
		}
		
		

	if(($organContactOrgan.length >0) || ($organContactLumen.length>0) || ($part.length>0))
		{
           $tr = $("<tr></tr>");
           $th = $("<th>Contact Organs(s) for " + "<font color='"+cl+ "'>"+ $orName + "</font>" + " Organ</th>");
           $th.attr("width","auto");
           $th.attr("height","auto");
           $tr.html($th);
           $table1.append($tr);   
		   
           for(or=0;or<$organContactOrgan.length;or++)
				{ 
					var $coName = $organContactOrgan.eq(or).text();
                    $tr = $("<tr></tr>");
                    $td = $("<td><center>"+ "<font color='" + cl + "'>" + $coName + "</font><center></td>");
                    $tr.html($td);
                    $table1.append($tr);  
                }
				// End previous table with grey-colored row
                $tr = $("<tr></tr>");
                $td = $("<td><div style='background:grey;height:auto'></div></td>");
                $tr.html($td);
                $table1.append($tr);
		}  //end if
	 
         // Add Part to Organ
         $tr = $("<tr></tr>");
         $th = $("<th><center>Part(s) for " + "<font color='"+cl+ "'>"+ $orName + "</font>" + " Organ</center></th>");
         $th.attr("width","400px");
         $th.attr("height","50px");
         $tr.html($th);
         $table1.append($tr);   
	
	   for(op=0;op<$part.length;op++)
			{
                // create part xml record
                $prtnm = $part.eq(op).text();
                $partName = $part.eq(op).text();
                $tr = $("<tr></tr>");
                $td = $("<td><center>"+ "<font color='" + cl + "'>" + $partName + "</font><center></td>");
                $tr.html($td);
                $table1.append($tr);
			
                $partContactOrgan = $(xmlDoc).find("System").eq(sysid).find("Organ").eq(organid).find("Part").eq(op).find("PartContactOrgan").contents();
                $pcol = $partContactOrgan.length;
				
				if($pcol > 0 && $partContactOrgan.eq(0).text() != "")
					{   
						for(pco=0;pco<$pcol;pco++)
							{
                              	// create xml record of contact organ for part
                                $pcoName = $partContactOrgan.eq(pco).text();
								
                                // get contact organ name from xml
                                if(pco == 0)
                                    {
                                            $tr = $("<tr></tr>");
                                            $th = $("<th>Contact Organ(s) for " + "<font color='"+cl+ "'>"+ $partName + "</font>" + " Part</th>");
                                            $th.attr("width","auto");
                                            $th.attr("height","auto");
                                            $tr.html($th);
                                            $table1.append($tr);
                                    } 
									
                               // End previous table with grey-colored row	     
                                $tr = $("<tr></tr>");
                                $th = $("<th><center>"+ "<font color='" + cl + "'>" + $pcoName + "</font></center></th>");
                                $tr.html($th);
                                $table1.append($tr);  
                                   
								// header for remaining Parts
                                if(pco==($pcol-1)  && (op != ($part.length-1)))
                                    {
                                    // End previous table with grey-colored row	
                                     $tr = $("<tr></tr>");
                                     $td = $("<td><div style='background:grey;height:auto'></div></td>");
                                     $tr.html($td);
                                     $table1.append($tr);
                                     
                                      $tr = $("<tr></tr>");
                                      $th = $("<th>Part(s) for " + "<font color='"+cl+ "'>"+ $orName + "</font>" + " Organ</th>");
                                      $th.attr("width","auto");
                                      $th.attr("height","auto");
                                      $tr.html($th);
                                      $table1.append($tr);  
                                    }
							}
					}
				
		    }  // End of for loop for parts
            
			// End previous table with grey-colored row
            $tr = $("<tr></tr>");
            $td = $("<td><div style='background:grey;height:auto'></div></td>");
            $tr.html($td);
            $table1.append($tr);
            
            // Change to Contact Lumen
            $tr = $("<tr></tr>");
            $th = $("<th>Contact Lumen(s) for " + "<font color='"+cl+ "'>"+ $orName + "</font>" + " Organ</th>");
            $th.attr("width","auto");
            $th.attr("height","auto");
            $tr.html($th);
            $table1.append($tr);
		//if((contactlumen > 0)  && contactlumen[0].childNodes[0].nodeValue != "")
        if(($organContactLumen.length>0)  && $organContactLumen.eq(0).text() != "")
			{
             for(var op2=0;op2<$organContactLumen.length;op2++)
				{
					// create contact lumen xml record
                    $organContactLumenName = $organContactLumen.eq(op2).text();
                    $orgContactLumen = $("<OrgContactLumen></OrgContactLumen>");
                    $orgContactLumen.text($organContactLumenName);
                    $Organ.append($orgContactLumen);
                    $systemOfOrgan.append($Organ);
                    //alert($table1.html());
					
                    $tr = $("<tr></tr>");
                    $td = $("<td><center>"+ "<font color='" + cl + "'>" + $organContactLumenName + "</font><center></td>");
                    $tr.html($td);
                    $table1.append($tr);
                    
                    $lumenConnectedLumen = $(xmlDoc).find("System").eq(sysid).find("Organ").eq(organid).find("OrganContactLumen").eq(op2).find("LumenConnectedLumen");
					$cll = $lumenConnectedLumen.length;
                   
                    for(var lcl=0;lcl<$cll;lcl++)
						{ 
                            // create xml record of lumen connected to lumen
                            $lumConnectedLumen = $("<LumenConnectedLumen></LumenConnectedLumen>");
                            $lumenConnectedLumenName = $lumenConnectedLumen.eq(lcl).text();
                            //alert($lumenConnectedLumenName);
                            $lumConnectedLumen.text($lumenConnectedLumenName);
							$part.append($lumConnectedLumen);
							$Organ.append($part);
							$systemOfOrgan.append($Organ);
							if(lcl == 0)
								{
							        $tr	= $("<tr></tr>");		
									$th = $("<th>Connected Lumen(s) for " + "<font color='"+cl+ "'>"+ $organContactLumenName + "</font>" + " Contact Lumen</th>");
									$th.attr("width","auto");
									$th.attr("height","auto");
									$tr.html($th);
									$table1.append($tr); 
								}
								
							$tr = $("<tr></tr>");
							$td = $("<td><center>"+ "<font color='" + cl + "'>" + $lumenConnectedLumenName + "</font><center></td>");
							$tr.html($td);
							$table1.append($tr); 
							if( (lcl == ($cll-1))  && (op2 != ($organContactLumen.length-1) ) )
								{
                                 
								    $tr = $("<tr></tr>");
									$th = $("<th>Contact Lumen(s) for <font color='"+cl+ "'>"+ $orName + "</font> Organ</th>");
									$th.attr("width","auto");
									$th.attr("height","auto");
									$tr.html($th);
									$table1.append($tr);
								} 
							
						}
		
				}
		
		    }  // End if
			else ;
			// End previous table with grey-colored row
			$tr = $("<tr></tr>");
			$td = $("<td><div style='background:grey;height:auto'></div></td>");
			$tr.html($td);
			$table1.append($tr);
	//		$tables = $(tableDoc).find("Tables");
			$tables.append($table1);
			
            //alert($tables.text()); 
            
            $('#dispframe').prepend($tables.contents());
		
	   // Use JQuery to Dynamically Adjust Table Font Sizes
		
					var $dframeHeader = $('#dtitle');
					var $table = $('.atable');
					
					var setTableScale = function(){
					
							// Scale text to containter div as it zooms
							var scaleSource = $dframeHeader.height();
							scaleFactor = 1.0;
							var fontSize = scaleSource * scaleFactor; 
							$table.css('font-size', fontSize + 'px');
							
						}
						$(window).resize(function(){
							setTableScale();
						});
					setTableScale();	// Run before Window resize
}


// Global Variable

 var thisNodeValue = [[false,false],[false,false],[false,false],[false,false],[false,false],[false,false],[false,false],[false,false],[false,false],[false,false],[false,false]];
 var openIt = new Array();
 // Main function of the program which is recursively called when a hierarchical nodes is opened and closed.  This function draws the hierarchy display and 
// Calls functions that create open node record, draws the graphical display, and generates tables.  The xmlDoc is the xml database file, nodeDoc stores open 
// nodes, and tableDoc stores generated tables, and 'nme' is the name of the node clicked on.

function openThisSystemsOrgans(value)
{
this.value = false;
}

// graphenter event handler	
/*function graphEnterHandler(e) 
{
   
	$menutable = $('#menutable');
	$('#gphmess').html('');
	$('#gphmess').prepend($menutable);
}  */

						


	
function doSystems(xmlDoc,nme,nodeDoc,xnodeDoc,tableDoc)
{
   
	var sysname = new Array();
	var sname = new Array();
	var orgname = new Array();
	var oname = new Array();
	var tissuename = new Array();
	var cellname = new Array();
	var open = new Array();
	var tname = new Array();
	var cname = new Array();
	
	var count = 0;
	var height = 100;
	var thisOrganSelected = new Array();
	var thisPartSelected = new Array();
	var thisCellSelected = new Array();
	var thisCellStaySelected = new Array();
	
	var systemcolor = new Array();
	systemcolor[0] = "green";
	systemcolor[1] = "SlateBlue";
	systemcolor[2] = "Brown";
	systemcolor[3] = "Orange";
	systemcolor[4] = "MediumVioletRed";
	systemcolor[5] = "Indigo";
	systemcolor[6] = "Olive";
	systemcolor[7] = "SpringGreen";
	systemcolor[8] = "Chocolate";
	systemcolor[9] = "Grey";
	systemcolor[10] = "GoldenRod";  
	
	$('#harchframe').html('');  // Clear out hierarchy
	
	
	
	// Set Up Tabs for Cell-to-Cell or Cell-to-Lumen Display
	$('#tab1').click( function()
		{
			contactMode = "ccell";
			
			$(this).css("border","thin");
			$(this).css("borderStyle","solid solid none solid");
			$(this).css("backgroundColor","tan");
			$('#tab2').css("backgroundColor","transparent");
			$('#tab2').css("border","thin");
			$('#tab2').css("borderStyle","dashed dashed none dashed");
		
			drawNodes2(xmlDoc,nodeDoc,tableDoc,contactMode)
			
		});
	
	
	// create function to store tab selection in XML
	$('#tab2').click( function()
		{
		    contactMode = "clumen";
			
			$(this).css("backgroundColor","tan");
			$(this).css("border","thin");
			$(this).css("borderStyle","solid solid none solid");
			$('#tab1').css("backgroundColor","transparent");
			$('#tab1').css("border","thin");
			$('#tab1').css("borderStyle","dashed dashed none dashed");
			
			drawNodes2(xmlDoc,nodeDoc,tableDoc,contactMode)
			
		});
		
	  $('#tab2').mouseover( function()
		{
			$(this).parent().append($('#panel').html("This Tab Shows Cell-to-Lumen Contact!").css('top','4em').css('left','4em').css('display','block'));
			
			//$('#panel').slideDown("fast");
		
		});
		
	 $('#tab1').mouseover( function()
		{
			$(this).parent().append($('#panel').html("This Tab Shows Cell-to-Cell Contact!").css('top','4em').css('left','4em').css('display','block'));
			
			//$('#panel').slideDown("fast");
			
		});	
		
	
	//Close Slide Panel
	$('#tab1, #tab2').mouseleave(function()
		{	  
				//$('#panel').slideUp("slow");
				$('#panel').css('display','none');
				
		});


	
	// Menu Message
	$('#gphmess').text('Click Here For Menu!!!');

	//Get mode for cell contacts, ie. cell-to-cell, or cell-to-lumen
	mode = contactMode;
	
	if(nodeDoc==null)
		{
		
		// Use JQuery for AJAX
		// Takes care of Cross Browser Capatability
		var xml = "<top><Active_Nodes></Active_Nodes><Draw_Nodes></Draw_Nodes><All></All><Select></Select><Contacts></Contacts><Tables></Tables></top>";
		nodeDoc = $.parseXML(xml);
		tp = nodeDoc.getElementsByTagName("top")[0];
		}

     if(xnodeDoc==null){
     	var xml = "<html></html>";
     		xnodeDoc = $.parseXML(xml);
        	
     }



	if(tableDoc==null)
		{
		// Use JQuery for XML Object Creation
		// Takes care of Cross Browser Capatability
		var xml = "<top><Contacts></Contacts><Tables></Tables><Mode>ccell</Mode><ScrollYPos></ScrollYPos></top>";
		var tableDoc = $.parseXML(xml);
		tp = tableDoc.getElementsByTagName("top")[0];
		
		}
	
	// Get Node Info from XML
	var $systems = $(xmlDoc).find("System");
	
    // Systems Section
	//if(systems)
	if($systems)
	{   

             
			 // initialize variables for click-organ selections	
			// produce system nodes		
		    //alert($systems.length);
			for (i=0;i<$systems.length;i++)
			   {   
			
			       // Build name system for node
				   sysname[i] = $systems.eq(i).contents().eq(0).text();
				   sname[i] = sysname[i];
				  //alert(sname[i]);
				   name = sname[i] + "_" + "1" + "-" + i;    // Node index information built into name
				   
				   //  building node HTML 1 
			      $od = $("<div style='position:relative;' class = 'sys_od' </div>'");
								   
				   $od.attr("id",name);
			       $od.attr("name",name); 
				
                   $id2 = $("<div class='sys_id2' style='color:" + systemcolor[i] + "'>" +  sname[i]  + "</div>");
				   $od.append($id2);
				   
				   $id3 = $("<div class='sysprompt' >Click to Open</div>");
				 				  
				   if(nodeToggler[name])
				   {
					   if(nodeToggler[name].value == true)
						   {
							$id3.text("Click to Close");
							}
				   }
				   else if(!nodeToggler[name])
						nodeToggler[name]= new nodeToggle(name,i,null,null,null,false);
				   	
				   $od.append($id3);
			
				   $('#harchframe').append($od);  // Adding Element to Display
				   
				    //System Dynamic Font Adjust
					var $oframe = $('.sys_od');
					var $sysnom = $('.sys_id2');
					var $syspr = $('.sysprompt');
				/*	var setSysnomScale = function(){
					
							 // Scale text to containter div as it zooms
							var scaleSource = $sysnom.height();
							var scaleSource2 = $oframe.height() - $sysnom.height();
							scaleFactor = 0.8;
							
							var fontSize = scaleSource * scaleFactor;  
							var fontSize2 = 1.3 * fontSize;
															
							$syspr.css('font-size', fontSize + 'px');
							$sysnom.css('font-size', fontSize + 'px');
							
						}

						$(window).resize(function(){
							setSysnomScale();
						}); */
					var appType = '<?php echo $vars["appType"]; ?>';
			//		if(appType != 'mobile')
			//			setSysnomScale();	// Run before Window 
				
				   $od.bind('click',{msg:idxNum[i]}, function(event)
				   {
                           $od.unbind("dblclick mousedown");
                           var indxi = event.data.msg;
						   $el = $(this).children('.sysprompt');
						   $prompt = $el.html();
				   if($prompt == "Click to Open")
						      {
							   // Get id of selected item
							   id = $(this).attr("id");
							  
							   //Use Global Variable to set display of Systems Organs
							   nodeToggler[id].value = true;
							   doSystems(xmlDoc,id,nodeDoc,xnodeDoc,tableDoc);   // redraw
						   }
						   else if($prompt == "Click to Close")
								{
									  
								   id = $(this).attr("id");
								   
								  //Use Global Variable to set display of Systems Organs
							      nodeToggler[id].value = false;
																	   
						          doSystems(xmlDoc,id,nodeDoc,xnodeDoc,tableDoc);   // redraw  
							   
							   } 
							  else;
	     
				   } );
	
				    //Organs Section
					var $organs = $(xmlDoc).find("System").eq(i).find("Organ");
                    
                  	// Select Whether to Display Organ Child Nodes 
                     if(($organs.length>0) && nodeToggler[name].value)
						{   
						
						   var lnames = new Array();
						   var openthisorgansparts = "";
						   for (j=0;j<$organs.length;j++)
							 {
							   //Build name system for node
							   oname[j] = $organs.eq(j).contents().eq(0).text();
							   orgname[j] = sysname[i] + "_" + oname[j];
							   var lname = orgname[j] + "_" + "1" + "-" + i + "-" + j;  //node index information built into name
							
							   $od = $("<div style='position:relative;' class = 'org_od' </div>'");
							   $od.attr("id",lname);
							   $od.attr("name",lname);
							
							   $id2 = $("<div class='org_id2' style='color:" + systemcolor[i] + "'>" + "ORGAN:  " + oname[j] + "</div>");
							   $od.append($id2);
							   
							   $id3 = $("<div class='orgprompt' class='imdiv'>Click to Open</div>");
							   
							 if(nodeToggler[lname])
							   { 
								   if(nodeToggler[lname].value == true)
									   {
										$id3.text("Click to Close");
										}
							   }
							   else if(!nodeToggler[lname])
									nodeToggler[lname]= new nodeToggle(lname,i,j,null,null,false);	
								
							   $od.append($id3);
							   $('#harchframe').append($od);  // Adding Element to Display
							   $('.org_od').focus();
				                              							  
							   //Organ Font Dynamic Adjust
								var $oframe = $('.org_od');
								var $orgnom = $('.org_id2');
								var $orgpr = $('.orgprompt');
							/*	var setOrgnomScale = function(){
								// Scale text to containter div as it zooms
										var scaleSource = $orgnom.height();
										var scaleSource2 = $oframe.height() - $orgnom.height();
										scaleFactor = 1.8;
										
										var fontSize = scaleSource * scaleFactor;  
										var fontSize2 = 1.2 * fontSize;
																		
										$orgpr.css('font-size', fontSize + 'px');
										$orgnom.css('font-size', fontSize + 'px');
										
									}
									$(window).resize(function(){
										setOrgnomScale();
									});   */
								//if(appType != 'mobile')	
							//		setOrgnomScale();	 //Run before Window Resize
							  
							   // Events for adding and deleting a ORGAN node from display
							   $od.bind('click',{msg:idxNum[j], msg2:idxNum[i]},function(event)
				               {
                                  $od.unbind("dblclick mousedown");
                                  var indxj = event.data.msg; 
                                  var indxi = event.data.msg2; 
								  
								   nm = $(this).attr("name");
												  
									// add node to xml for active nodes
								   nm = this.getAttribute("name");   // get specific name attribute for node
								   nmx = nm.replace(/\-|\s|\_/gi,'');
                                  
								  $el = $(this).children('.orgprompt');
								  $prompt = $el.html();
								  
								  if($prompt == "Click to Open")
									   {
										  
								           nodeToggler[nm].value = true;
													
										   //Display Organ Tables
										  //alert((new XMLSerializer()).serializeToString(xmlDoc));
										  var tabname = nmx+"table";
									      tabname = tabname.replace(/\s|\_|\-/gi,'');  // Strip chars
										  var $tab = $('#'+tabname);
										  
										  if($tab.length)
											$tab.show();
										  else
											draworgantables(xmlDoc,tableDoc,nmx,indxi,indxj,"",systemcolor[indxi]); 
                                           
									       doSystems(xmlDoc,nm,nodeDoc,xnodeDoc,tableDoc);   // redraw  
										 }
								   else if($prompt == "Click to Close")
											{
																				                                                   
                                                   //Use global variable to set Tissue display
												   nodeToggler[nm].value = false;
												   
													// Remove Organ tables
													var tabname = nmx+"table";
													tabname = tabname.replace(/\s|\_|\-/gi,'');  // Strip chars
													var $tab = $('#'+tabname);
													$tab.css('display','none');
													//if(typeof($tab) != "undefined")
												//		$tab.remove();*/
														
													doSystems(xmlDoc,nm,nodeDoc,xnodeDoc,tableDoc);   // redraw  
												
											   } 

									   });  // end of onclick
								   
							 // TISSUE SECTION
								var $tissues = $(xmlDoc).find("System").eq(i).find("Organ").eq(j).find("Tissue");
							
								if((($tissues.length>0) && nodeToggler[lname].value ))
									{
										for (k=0;k<$tissues.length;k++)
										 {
									      	name = $tissues.eq(k).contents().eq(0).text();
											tissuename[k] = orgname[j] + "_" + name;
											var lname = tissuename[k] + "_" + "1" + "-" + i + "-" + j + "-" + k;
											
										   // Building node HTML using JQuery
										   $od = $("<div class = 'tiss_od' </div>");
										   $od.attr("id",lname);
										   $od.attr("name",lname);
										
										   $id2 = $("<div class='tiss_id2' style='color:" + systemcolor[i] + "'>" + "TISSUE:  " + name + "</div>");
										   $od.append($id2);
									       $id3 = $("<div class='tissprompt' class='imdiv'>Click to Open</div>"); 
										   if(nodeToggler[lname])
										   {
											   if(nodeToggler[lname].value == true)
												   {
													$id3.text("Click to Close");
													}
										   }
										   else if(!nodeToggler[lname])
												nodeToggler[lname]= new nodeToggle(lname,i,j,k,null,false);		
											  
										   $od.append($id3);
										   $('#harchframe').append($od);  // Adding Element to Display
										   $('.tiss_od').focus();
										   
										//Tissue Font Dynamic Adjust
										var $oframe = $('.tiss_od');
										var $tissnom = $('.tiss_id2');
										var $tisspr = $('.tissprompt');
									/*	var setTissnomScale = function(){
										
												// Scale text to containter div as it zooms
												var scaleSource = $tissnom.height();
												scaleFactor = 2.4;
												var fontSize = scaleSource * scaleFactor;  
												var fontSize2 = 1.1 * fontSize;
												$tisspr.css('font-size', fontSize2 + 'px');
												$tissnom.css('font-size', fontSize + 'px');
											}
											$(window).resize(function(){
												setTissnomScale();
											});  */
									//	if(appType != 'mobile')	
									//		setTissnomScale();	 //Run before Window Resize
								    		// Events for adding and deleting a Tissue node from display
											  $od.bind('click',{msg1:idxNum[i],msg2:idxNum[j],msg:idxNum[k]}, function(event)
											   {
											       $od.unbind("dblclick mousedown");
                                                   var indxi = event.data.msg1;
                                                   var indxj = event.data.msg2;
                                                   var indxk = event.data.msg; 
                                                 
												  $el = $(this).children('.tissprompt');
												  $prompt = $el.html();
												  
												  if($prompt == "Click to Open")
													   {
														    id = $(this).attr("id");
												     
													        // Use Global Variable to toggle Display of Cells
														    nodeToggler[id].value = true;
														    
													  	    doSystems(xmlDoc,nm,nodeDoc,xnodeDoc,tableDoc);   // redraw
															
														}
													   else if($prompt == "Click to Close")
														{
															   id = $(this).attr("id");
															  
															   //Use global variable to set Display of Tissues Cells
															   nodeToggler[id].value = false;
															   
															   doSystems(xmlDoc,nm,nodeDoc,xnodeDoc,tableDoc);   // redraw
															
														   } 
												});  // End of onclick
											
											// CELL section
										var $cells = $(xmlDoc).find("System").eq(i).find("Organ").eq(j).find("Tissue").eq(k).find("Cell");
											
										//Get node selection status from XML
										 if( nodeToggler[lname].value && ($cells.length>0))   
											{  
											   //alert("i="+i+"j= "+j+"k="+k);  
											   for (m=0;m<$cells.length;m++)
												{
												      name = $cells.eq(m).contents().eq(0).text();
													  cname[m] = name;
													  cellname[m] = tissuename[k] + "_" + name;
													  var lname = cellname[m] + "_" + "1" + "-" + i + "-" + j + "-" + k + "-" + m;
													  
                                                   	   // Building node HTML using JQuery
                                                       $od = $("<div class = 'cell_od' </div>");
                                                       $od.attr("id",lname);
                                                       $od.attr("name",lname);
                                                    
                                                       $id2 = $("<div class='cell_id2' style='color:" + systemcolor[i] + "'>" + "CELL:  " + name + "</div>");
                                                       $od.append($id2);
                                                         
													   indexname = "index"+cellname[m] + m.toString();
													   indexname = indexname.replace(/\_|\s/gi,'');
													   select = nodeDoc.getElementsByTagName("Select");
													
												       $id3 = $("<div class='cellprompt' class='imdiv'>Click to Open</div>");
													   if(nodeToggler[lname])
														   {
															   if(nodeToggler[lname].value == true)
																   {
																	$id3.text("Click to Close");
																   }
														   }
													   else if(!nodeToggler[lname])
																nodeToggler[lname]= new nodeToggle(lname,i,j,k,m,false);	
													   
                                                       $od.append($id3);
                                                       $('#harchframe').append($od);  // Adding Element to Display
													   
														//Tissue Font Dynamic Adjust
														var $oframe = $('.cell_od');
														var $cellnom = $('.cell_id2');
														var $cellpr = $('.cellprompt');
													/*	var setCellnomScale = function(){
														        // Scale text to containter div as it zooms
																var scaleSource = $cellnom.height(); 
																scaleFactor = 1.2; 
																
																var fontSize = scaleSource * scaleFactor;   
																var fontSize2 = 0.5 * fontSize;
																								
																$cellpr.css('font-size', fontSize + 'px');
																$cellnom.css('font-size', fontSize + 'px');
															}
															$(window).resize(function(){
																setCellnomScale();
															});
														if(appType != 'mobile')	
															setCellnomScale();	*/ //Run before Window Resize
														
										    	// Events for adding and deleting a node from display
                                                $od.bind('click',{msg1:idxNum[i],msg2:idxNum[j],msg3:idxNum[k],msg:idxNum[m]}, function(event)
                                                        {
														       $od.unbind("dblclick mousedown");
														       indxi = event.data.msg1;
															   indxj = event.data.msg2;
															   indxk = event.data.msg3;
															   indxm = event.data.msg;
                                                         
															   id = $(this).attr("id");
															   nm = $(this).attr("name");
															   var nme = nm.split("_1-");  // raw name
															   nme = nme[0];
															   
                                                               $el = $(this).children('.cellprompt');
                                                               $prompt = $el.html();
																
                                                                if($prompt == "Click to Open")
                                                                    {
																	   indexname = "index"+nme+indxm.toString();
																	   indexname = indexname.replace(/\_|\s/gi,'');
																	 
																	//   Retrieve exising xml record for opening Cell Contacts if it exists
																	   select = nodeDoc.getElementsByTagName("Select");
																	   openThisCell2 = select[0].getElementsByTagName(indexname);  // Search by tag name
																	 
																	   if(openThisCell2.length <= 0)  //If it does not exist Create it as unique named tags 
																		   {
																				// Create Element with unique tag name with select value for cell contacts
																			   openThisCell = nodeDoc.createElement("openThisCell");  //all tags appended to this
																			   
																			   indexnode = nodeDoc.createElement(indexname);
																			   indexvalue = nodeDoc.createTextNode("true");
																			   
																			   indexnode.appendChild(indexvalue);
																			   openThisCell.appendChild(indexnode);
																			   select[0].appendChild(openThisCell);
																			   
																		   }
																		  else
																				openThisCell2[0].childNodes[0].nodeValue = "true";  
																				
																		                                                                  
																	   	nodeToggler[id].value = true; 
								 
																	  	doSystems(xmlDoc,nm,nodeDoc,xnodeDoc,tableDoc);   // redraw
																	}
															   else if($prompt == "Click to Close")
																	{
															
																	   indexname = "index"+nme2+indxm.toString();
																	   indexname = indexname.replace(/\_|\s/gi,'');
															
																		// Set display of Cells to false
																		cid = cid = indxi + "_" + indxj + "_" + indxk + "_" + indxm;
																		
																		nodeToggler[id].value = false;
																		
																		// Close Cell Contact Table
																		nme2 = nme.split(" ");
																		nme3 = nme2[3].replace(/\_|\s/gi,'');
																		
																		ctname = nme.replace(/\_|\s/gi,'');

																		$contable = $('#dispframe').find('th:contains('+nme3+" Cell"+')');
																	
																		$lumtable = $('#dispframe').find('th:contains('+nme3+" Lumen"+')');
																		if($contable)
																			{
																			$contable.parent().parent().remove();
																			}
																		else if($lumtable)
																			{
																			$lumentable.parent().parent().remove();
																			}
																		
																	    doSystems(xmlDoc,nm,nodeDoc,xnodeDoc,tableDoc);   // redraw
																	   
																	}   // End of  Else if Click to Close
															});  // End of JQuery click function
                                                            
                                                            
										      	}  // end of for cell layers
											
											}  // end of if tissues, END of Tissue section
										}  // end of for tissues
									 
								}  // end of if tissues
							}  // end of for organs
						
					}  // end of if organs, END of Systems section
				}  // end of for systems
				drawNodes2(xmlDoc,nodeDoc,tableDoc,mode);  
		//$('body').scrollTop(0);			
		}  // end if systems
//$('#harchframe').scrollTop(0);	
	
} // end of doSystems


function loadGUI()  // This function loads the HTML of gui on body load
{

		var gui2 = '<div style="width:100%;height:100%"><div style="position:absolute;width:2500px;font-size:50px;text-align:center">Organism Relation Ontology (ORO) Miner</div></br></br></br></br>\
			<div style="position:absolute;left:30px;font-size:35px">Hierarchical View</div><div style="position:absolute;left:934px;width:200px;font-size:35px">Graph View</div><div style="position:absolute;left:2034px;width:200px;font-size:35px">Table Display</div>\
			</br></br></br><div id="outrdiv" style="positon:relative;width:2500px;height:1000px;border-style:solid;border-width:medium">\
			<div id="harchframe" style="position:relative;left:0px;top:-1px;width:903px;height:1001px;border:2px solid black;border-left:0;border-top:0;border-bottom:0;\
			overflow-x:scroll;overflow-y:scroll"></div><div id="grahdr" style="z-index:1;position:relative;left:904px;top:-1002px;width:1093px;height:56px;border:2px solid black;\
			border-style: solid solid none solid"><div></div><div></div></div><div id="grview" class="thisdiv" style="position:relative;background:WhiteSmoke;font-size:200%;left:904px;top:-1005px;width:1093px;\
			height:941px;border:2px solid black;border-width:medium;border-bottom:0;border-right:0;border-left:0;"><svg id="mySVG" width="1093px" height="941px" viewBox = "0 0 4000 4000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\
		</svg></div>\
			<div id="dispframe" style="position:relative;font-size:200%;left:1998px;top:-2001px;width:494px;height:997px;border:2px solid black;border-top:0;border-bottom:0;\
			border-right:0;overflow-x:scroll;overflow-y:scroll"></div></div></div>';
			
			
			
		var gui = '<div id ="otrframe" class="otrframe">\
						<div id="protitle">Organism Relation Ontology (ORO) Miner</div>\
						<div id="titlebar">\
							<div id="htitle">\
								<div class="vert">Hierarchy Display</div>\
							</div>\
							<div id="gtitle">\
								<div class="vert">Graph Display</div>\
							</div>\
							<div id="dtitle">\
								<div class="vert">Info Display</div>\
							</div>\
						</div>\
						<div id ="harchframe" class="harchframe"></div>\
						<div id="grphframe1" class="grphframe">\
							<div id="gphtitle">\
								<div id="tab1" class="tab">Cell-to-Cell</div>\
								<div id="tab2" class="tab">Cell-to-Lumen</div>\
								<div id="gphmess">Graph Messages Here</div>\
							</div>\
							<div id="panel"></div>\
							<div id="gphdisp">\
							  <div id="gphdisp2">\
								<svg id="mySVG" width="100%" height="100%" viewBox = "0 0 4000 4000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>\
							  </div>\
							</div>\
						</div>\
					    <div id="dispframe" class="dispframe"></div>\
				    </div>';   
                    
                    
          //Original Dim's for mySVG  "1093px" height="941px"
		 // Initiate xml database retreival and Hierarchical display generation
		document.getElementById("gui").innerHTML = gui;

		var hlist_xml = "oro_xml4.xml";
		
		// JQuery for AJAX
		$.ajax(
				{url:"<?php echo $vars['orominer1XML']; ?>",success:function(result)
					{
					    xmlDoc=result;
						// Main application Function.  It is called Recursively
						doSystems(result,"top",null,null,null);
						
					}
				});
	
						
	   //USE JQuery to Maintain Dynamic Font Sizes on GUI during Zoom
		 $htitle = $('#titlebar');
		 $gtitle = $('#gtitle');
		 $dtitle = $('#dtitle');
		 $ptitle = $('#protitle');
		 $tab1 = $('#tab1');
		 $tab2 = $('#tab2');
		 $gmess = $('#gphmess');
		 $tablez = $('.atable');
		 $panel = $('#panel');
		 setGuiScale = function(){
		
		       // Dynamically Scale Fonts
				var scaleSource = $htitle.height();
				var scaleSource2 = $ptitle.height();
				var scaleSource3 = $tab1.width();
                var scaleSource4 = $gmess.height();
				var scaleSource5 = $tab1.height();
				scaleFactor = 0.55;
				scaleFactor2 = 0.25;
				scaleFactor3 = 0.15;
				scaleFactor4 = 0.65;
				scaleFactor5 = 0.65;
                scaleFactor6 = 0.90;
				var fontSize = scaleSource * scaleFactor;   
                var fontSize1 = scaleSource4 * scaleFactor5; 
				var fontSize2 = scaleSource * scaleFactor3;
				var fontSize3 = scaleSource3 * scaleFactor3;
				var fontSize4 = scaleSource3 * scaleFactor4;
				var fontSize5 = scaleSource2 * scaleFactor4;
				var fontSize6 = scaleSource5 * scaleFactor6;
			
				$htitle.css('font-size', fontSize + 'px');
			    $gtitle.css('font-size', fontSize + 'px');
				$dtitle.css('font-size', fontSize + 'px');
				$ptitle.css('font-size', fontSize5 + 'px');
				//$tab1.css('font-size', fontSize3 + 'px');
				//$tab2.css('font-size', fontSize3 + 'px');
				//$gmess.css('font-size', fontSize1 + 'px');
				$tablez.css('font-size',fontSize2 + 'px');
				$panel.css('font-size',fontSize6 + 'px');
			}
			$(window).resize(function(){
				//setGuiScale();
			});
		//setGuiScale();	 //Run before Window Resize
		
		
		// Prompt Alerting to Expanding Graphical Display
		   
             	 mysvg = document.getElementById("mySVG");
			  
				//Intial Table Column Display
						$('#dispframe').prepend($('#panel'));
						$('#panel')
							.html("You Can Point to Graph Display and Enlarge It.<br/>Then Point to Edge to Restore.</br><span id='cspan' style='color:red'>Click Here to Close</span>")
							.css('margin','0.5em')
							.css('padding','0.25em')
							.css('top','0em');
					    $('#panel').slideDown("slow");
                        $('#cspan')							 
						 .animate({fontSize:'1.3em'},1000)
							.animate({fontSize:'1.4em'},1000)
							.animate({fontSize:'1.5em'},1000)
							.animate({fontSize:'1.3em'},1000);	
				
						 $('.sysprompt, .orgprompt, .tissprompt').on('mousedown',function(){
						    	$('#panel').css('display','none');
						    });
						    
						$('#harchframe').on('mousedown',function(){
							$('#panel').css('display','none');
							
						});
							
						var width = $('#grphframe1').width();
						$('#grphframe1').bind('mouseover',function()
						{
							$(this).css('position','relative').css('margin','0');
							$(this).css('left','10vw');
							$(this).css('z-index','700');
							$(this).css('width','130vw');
							$('#dispframe').css('display','none');
							$('#harchframe').css('display','none');
						});
						
						$('#grphframe1').bind('mouseleave',function()
						{
						    $(this).css('position','relative');
							$(this).css('left','0em');
							$(this).css('z-index','1');
							$(this).css('width','40%');
					    	$('#dispframe').css('display','block');
							$('#harchframe').css('display','block');
						});   	
						
			
			            //Menu display
						$('#gphmess').click(function()
							{
							
							//	$('#gphmess').text("See Info Display For Menu!!");
							//	$(document).on("graphEnter",graphEnterHandler);	
								// Get flag for menutable from xml
							    menubg="wheat";
								
							    $('#menutable').css('font-size','2.0em');   // Set menutable font size
								$menutable = $('#menutable');
								if($menutable)
									$menutable.remove();
								
								
								$menutable = $("<table></table>");
							//	$menutable.css('zoom','150%');
								$menutable.attr("z-index",3);
								$menutable.attr("border",2);
								$menutable.attr("bgcolor","white");
								$menutable.attr("id","menutable");
								$menutable.attr("class","atable");
								$menutable.attr("position","relative");
								
								//Menu header
								$tr = $("<tr></tr>");
								$th = $("<th><big>MENU</big><div id='popUp1'></div></th>");
								$th.attr("bgcolor","yellow");
								$th.attr("height","4%");
								$tr.html($th);
								
								
							
								
								
						
								
								//Zoom in label 
								$trin = $("<tr><td><center>ZOOM-IN</center></td></tr>");
								$trin.attr("height","3%");
								$trin.attr("bgcolor",menubg);
							
								//Zoom out label 
								$trout = $("<tr><td><center>ZOOM-OUT</center></td></tr>");
								$trout.attr("height","3%");
								$trout.attr("bgcolor",menubg);
								
								// Menu exit label
								$trex = $("<tr><td><center>EXIT</center></td></tr>");
								$trex.attr("height","3%");
								$trex.attr("bgcolor","red");
								
								// How to Translate Menu Translate label
								$trtransht = $("<tr><td><center>HOW TO TRANSLATE IMAGE</center></td></tr>");
								$trtransht.attr("height","3%");
								$trtransht.attr("bgcolor",menubg);
								
								$getnodeinfo = $("<tr><td><center>HOW TO GET NODE INFO</center></td></tr>");
								$getnodeinfo.attr("height","3%");
								$getnodeinfo.attr("bgcolor",menubg);
								
								$menutable.append($tr);
								$menutable.append($trin);
								$menutable.append($trout);
								$menutable.append($trtransht);
								$menutable.append($getnodeinfo);
								$menutable.append($trex);
								
								// Create zoom scale factor and put in Object
								gScaleFactor.scaleFactr = 1.5;
								
								// Exit menu function
								$trex.click(function()
									{
										$('#gphmess').text("Click Here For Menu!!!");
										$menutable = $('#menutable');
										if($menutable)
											$menutable.remove();
									});
								
					
								// Zoom in menu function
								$trin.click(function()
									{
										// Get scale factor from xml
										fac = gScaleFactor.scaleFactr;

									 	gphdisp = mysvg.getElementById("gphdisp3");
										
										// Get translation values from xml
										txval = translationCoords.x;
										tyval = translationCoords.y;	
										fac = parseFloat(fac) + 0.5;
										
										gphdisp.setAttributeNS(null,"transform","scale(" + fac + ")" + " translate(" + txval + "," + tyval + ")");
										gScaleFactor.scaleFactr = fac;
									});  
									
								// Zoom out menu function
								$trout.click(function()
									{
										// Get scale factor from xml
										fac = gScaleFactor.scaleFactr;
										
										// Get translation values from xml
										txval = translationCoords.x;
										tyval = translationCoords.y;	
										
										gphdisp = mysvg.getElementById("gphdisp3");
										fac = parseFloat(fac) - 0.5;
										gphdisp.setAttributeNS(null,"transform","scale(" + fac + ")" + " translate(" + txval + "," + tyval + ")");
										gScaleFactor.scaleFactr = fac;
									});  	
					
								$trtransht.click(function()
									{
										alert("TO MOVE/PAN IMAGE: :You Can Drag the Graph Area.</br>Move mouse to edge of any node and push it where you want it to go. ");
									});
						
								$getnodeinfo.click(function()
										{
											alert("TO GET NODE INFO: (1) Click Open or Close the Hierarchy Nodes on Left side to Generate Graph and Table Display. (2) Closing and then re-Opening a Node will bring its Table Display to the Top!");
										});
								
								// Add new tables to top of view
							//	$imgvw = $('#dispframe');
							//	$imgvw.prepend($menutable);
								
								$('#gphmess').html('');
								$('#gphdisp').prepend($menutable);
								//$menutable.css('zoom','150%');
								$menutable.css('left','50%').css('position','absolute').css('font-size','2.0em').css('z-index','200').draggable(
									{
										
										create: function( event, ui ) 
										{
												$('#popUp1')
													.text("You can Drag this Menu")
													.css('opacity','0.8');
										},
										stop: function( event, ui ) 
										{
												$('#popUp1')
													.text("You can Drag this Menu")
													.css('opacity','0.8');
										}
										
									})
									.mouseover(function()
										{
											$('#popUp1').css('opacity','0.0');
											
										})
									.mouseleave(function()
										{
											$('#popUp1').css('opacity','0.8');
											
										});
							
							
							
							
							
							});  // end circle onclick and Menu Builder

	                    //  Make graph screen draggble using JQuery UI
						$('#gphdisp').append('<div id="popUp2" style="position:absolute"></div>');
						$('#gphdisp2').draggable(
							{
								
								create: function( event, ui ) 
								{
										$('#popUp2')
											.text("You can Drag this Graph Area")
											.css('opacity','0.8')
											.css('left','30%')
											.css('top','10%')
											.css('font-size','1.0em')
											.css('z-index','-1')
											.css('opacity','0.7')
											.css('color','red');
								},
								stop: function( event, ui ) 
								{
										$('#popUp2')
											.text("You can Drag this Graph Area")
											.css('opacity','0.8')
											.css('left','30%')
											.css('top','10%')
											.css('font-size','1.0em')
											.css('z-index','-1')
											.css('opacity','0.7')
											.css('color','red');
								}
								
							})
							.mousemove(function()
								{
									$('#popUp2').css('opacity','0.0');
									
								})
							.mouseleave(function()
								{
									$('#popUp2')
											.text("You can Drag this Graph Area")
											.css('opacity','0.8')
											.css('left','30%')
											.css('top','10%')
											.css('font-size','1.0em')
											.css('z-index','-1')
											.css('opacity','0.7')
											.css('color','red');
									
								});


			
			 $('#gphdisp').mouseenter(function()
				{
					$('#panel').slideUp("slow");
				});
					
		  $('#panel').click(function()
                {				
					$(this).slideUp("fast");
				});
		
		
		  $('#gphframe').mouseenter(function()
                {				
					$('#panel').slideUp("fast");
				});
		
		

		
}



// END OF JAVASCRIPT FUNCTIONS --------------------------------------------------------------------------------Click to O
</script>


<div id="gui" class="viewer" name="gui" >

</div>
</body>
</html>
