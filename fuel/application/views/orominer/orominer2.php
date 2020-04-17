<!-- This file runs the orominer program that shows histological data. The function doSystems is recursively called and it uses XML data objects of 
xmlDoc for the xml database, and nodeDoc for the open/active node record, and tableDoc for created tables  -->

<script type="text/javascript">
// JAVASCRIPT FUNCTIONS ---------------------------------------------------------------------------


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
 



 var svgNS = "http://www.w3.org/2000/svg";   // namespace for svg graphic methods

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


function buildHView(hlist_xml)  // create xml object for xml database and make initial call to doSystems 
{
	var nodeDoc = getXMLDoc2();
	var tableDoc = getXMLDoc3();
	var $grhdr = $('#grahdr');
	var systems = new Array();
	var systemKeyOrder = new Array();
    var systemNodeList = {};
	

	$.ajax({
		type: "GET",
		datatype: "xml",
		url: hlist_xml,
		success: function(xml) {
			var xmlDoc = xml;
			systems=xmlDoc.getElementsByTagName("System");
		doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,"top",nodeDoc,tableDoc);
		}
	});
}


function getXMLDoc2()  // create XML object for open/active nodes
{
var text = "<top><Active_Nodes></Active_Nodes><Draw_Nodes></Draw_Nodes><All></All><Select></Select><Layers></Layers><Tables></Tables></top>";
	xmlDoc = $.parseXML(text);
    return xmlDoc;
}


function getXMLDoc3()
{
var text = "<top><Layers></Layers><Tables></Tables><ScrollYPos><div></div></ScrollYPos></top>";
try //Internet Explorer 
	{
	xmlDoc=new ActiveXObject("Microsoft.XMLDOM"); xmlDoc.async="false";
	xmlDoc.loadXML(text);
	}
	catch(e) 
	{
		try //Firefox, Mozilla, Opera, etc.
		{
			parser=new DOMParser();
			xmlDoc=parser.parseFromString(text,"text/xml");
		}
		catch(e) {alert(e.message)}
	}
/*	try 
	{
		document.write("xmlDoc is loaded, ready for use"); 
	}
	catch(e) 
	{
		alert(e.message)
	} */
    return xmlDoc;
}


function dropNodeDatabase()
{	
				var drop = "dropNodeDatabase";
				$.get("http://www.rlsworks.com/getMotifs/getMotifs.php?nodeLevel="+drop,
				      function(data)
						{
							console.log(data);
							//$('#gui').html(data);
						});
}

function addNodeDbase(nm,nlevel,sc,si,oi,pi,ci)  // create record of open/active nodes in Database
{

	var nme = nm.split("_1-"); 
	nme = nme[0].split("_");
	nme = nme[nme.length-1];

	
	
		
		if(nlevel=="system")
			{ 
				
				$.get("http://www.rlsworks.com/getMotifs/getMotifs.php?nodeLevel="+nlevel+"&name="+nme+"&id="+nm+"&sindex="+si+"&color="+sc,
				      function(data)
						{
							console.log(data);
							//$('#gui').html(data)
						});
			
			}
		else if(nlevel=="organ")
			{
				$.get("http://www.rlsworks.com/getMotifs/getMotifs.php?nodeLevel="+nlevel+"&name="+nme+"&id="+nm+"&sindex="+si+"&oindex="+oi+"&color="+sc,
				      function(data)
						{
							console.log(data);
							//$('#gui').html(data);
						});
			}	
		
		else if(nlevel=="part")
			{
				$.get("http://www.rlsworks.com/getMotifs/getMotifs.php?nodeLevel="+nlevel+"&name="+nme+"&id="+nm+"&sindex="+si+"&oindex="+oi+"&pindex="+pi+"&color="+sc,
				      function(data)
						{
							console.log(data);
							//$('#gui').html(data);
						});
			}
			
		else if(nlevel=="histo")		
		   {
				$.get("http://www.rlsworks.com/getMotifs/getMotifs.php?nodeLevel="+nlevel+"&name="+nme+"&id="+nm+"&sindex="+si+"&oindex="+oi+"&pindex="+pi+"&hindex="+ci+"&color="+sc,
				      function(data)
						{
							console.log(data);
							//$('#gui').html(data);
						});
			}	
	
}

function removeSystemNode(nm,nlevel,sc,si,oi,pi,ci)  // create record of open/active nodes in Database
{
				$.get("http://www.rlsworks.com/getMotifs/getMotifs.php?nodeLevel=removeSystemNode&systemId="+nm+"&systemIndex="+si,
				      function(data)
						{
							console.log(data);
							//$('#gui').html(data);
						});
}

function getActiveSystemNodes()  // create record of open/active nodes in Database
{	
			 
            
			 var activeNodes = [];
			 for(var j=0;j<15;j++)
				 activeNodes[j] = -1;
			 $.ajax({ url:'http://www.rlsworks.com/getMotifs/getMotifs.php',
				type:'GET',
				async:false,
				dataType: 'json',
				data: {nodeLevel:'getActiveSystemNodes'},
				success: function(data){
					
						//alert(JSON.stringify(data));
					    for(var i=0;i<data.length;i++)
						{
							activeNodes[i]=data[i].indexes;
							
						}
						//alert(JSON.stringify(activeNodes));
						
					}	
			});			
			return activeNodes;
}


function getActiveOrganNodes(si)  // create record of open/active nodes in Database
{	
			 
         
			 var activeNodes = [];
			 for(var j=0;j<50;j++)
				 activeNodes[j] = -1;
			 $.ajax({ url:'http://www.rlsworks.com/getMotifs/getMotifs.php',
				type:'GET',
				async:false,
				dataType: 'json',
				data: {nodeLevel:'getActiveOrganNodes',systemindex:si},
				success: function(data){
					
						//alert(JSON.stringify(data));
					    for(var i=0;i<data.length;i++)
						{   
					
							activeNodes[i]=data[i].indexes;
							
							
						}
						
					}	
			});			
			return activeNodes;
}

function getActiveOrganNodeCount(si)  // create record of open/active nodes in Database
{	
			 
            
			 var activeNodes = [];
			 for(var j=0;j<50;j++)
				 activeNodes[j] = -1;
			 var nodeCnt = 0
			 $.ajax({ url:'http://www.rlsworks.com/getMotifs/getMotifs.php',
				type:'GET',
				async:false,
				dataType: 'json',
				data: {nodeLevel:'getActiveOrganNodes',systemindex:si},
				success: function(data){
					
						nodeCnt = data.length;
						
					}	
			});			
			return nodeCnt;
}
function getActivePartNodes(si,oi)  // create record of open/active nodes in Database
{	   
			 var activeNodes = [];
			 for(var j=0;j<50;j++)
				 activeNodes[j] = -1;
			 $.ajax({ url:'http://www.rlsworks.com/getMotifs/getMotifs.php',
				type:'GET',
				async:false,
				dataType: 'json',
				data: {nodeLevel:'getActivePartNodes',systemindex:si,organindex:oi},
				success: function(data){
					
						//alert(JSON.stringify(data));
					    for(var i=0;i<data.length;i++)
						{
							activeNodes[i]=data[i].indexes;
							
						}
						//alert(JSON.stringify(activeNodes));
						
					}	
			});			
			return activeNodes;
}


function getActiveHistoNodes(si,oi,ci)  // create record of open/active nodes in Database
{	   
			 var activeNodes = [];
			 for(var j=0;j<50;j++)
				 activeNodes[j] = -1;
			 $.ajax({ url:'http://www.rlsworks.com/getMotifs/getMotifs.php',
				type:'GET',
				async:false,
				dataType: 'json',
				data: {nodeLevel:'getActiveHistoNodes',systemindex:si,organindex:oi,histolayerindex:ci},
				success: function(data){
					
						//alert(JSON.stringify(data));
					    for(var i=0;i<data.length;i++)
						{
							activeNodes[i]=data[i].indexes;
							
						}
						//alert(JSON.stringify(activeNodes));
						
					}	
			});			
			return activeNodes;
}


function removeOrganNode(nm,nlevel,sc,si,oi,pi,ci)  // create record of open/active nodes in Database
{		
				$.get("http://www.rlsworks.com/getMotifs/getMotifs.php?nodeLevel=removeOrganNode&organId="+nm+"&organIndex="+oi,
				      function(data)
						{
							console.log(data);
							//$('#gui').html(data);
						});
		
}
function removePartNode(nm,nlevel,sc,si,oi,pi,ci)  // create record of open/active nodes in Database
{		
				$.get("http://www.rlsworks.com/getMotifs/getMotifs.php?nodeLevel=removePartNode&partId="+nm+"&partIndex="+pi,
				      function(data)
						{
							console.log(data);
						});
}
function removeHistoNode(nm,nlevel,sc,si,oi,pi,ci)  // create record of open/active nodes in Database
{	
				$.get("http://www.rlsworks.com/getMotifs/getMotifs.php?nodeLevel=removeHistoNode&histolayerid="+nm+"&histolayerindex="+ci,
				      function(data)
						{
							console.log(data);
						});
}





function drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder)
{
// Draw Nodes from the xml store of active nodes in nodeDoc XML object under the <All> tag.  Also displays tables for organ layer, subpart, and histological layer
// when node is clicked
	
	// clear out display
	var $mySVG = $('#mySVG');
	$mySVG.children().remove();
	var mysvg = $mySVG.get(0);
  
	var sysEl = {};
	var noSysNodes = systemKeyOrder.length;
	var ind = 0;
	var txval = 0;
	var tyval = 0;
	//alert(noSysNodes);
	var noSysNodes = systemKeyOrder.length;
	if(noSysNodes > 0)	   //DRAW SYSTEM NODES
		{
			
			
				var x1 = 850;
				var y1 = 1000;
				var yadd = 700; 
				var scale = 0;
				//var outerg = $mySVG.find("#outerg").get(0);
				
				//Clear Graphic Display
				$('#mySVG').children().remove();
				
				//outside graphical contaniner
				var og = document.createElementNS(svgNS,"g");
				og.setAttributeNS(null,"width","4000");
				og.setAttributeNS(null,"height","4000");
				og.setAttributeNS(null,"transform","scale(1)");
				og.setAttributeNS(null,"transform","translate(0,0)");
				og.setAttributeNS(null,"id","outerg");
		
				// Create translate value and put in XML
				var all = nodeDoc.getElementsByTagName("All");
				
				var tx = all[0].getElementsByTagName("translatex");
				var ty = all[0].getElementsByTagName("translatey");
				
								
				if(tx.length <= 0 && ty.length <= 0)
					{
						var translatex = nodeDoc.createElement("translatex");
						var translatey = nodeDoc.createElement("translatey");
						var tranxtext = nodeDoc.createTextNode("0");
						var tranytext = nodeDoc.createTextNode("0");
						translatex.appendChild(tranxtext);
						translatey.appendChild(tranytext);
						all[0].appendChild(translatex);
						all[0].appendChild(translatey);
					}   
				
			
			    tx = all[0].getElementsByTagName("translatex");
				ty = all[0].getElementsByTagName("translatey");
				txval=tx[0].childNodes[0].nodeValue;
				tyval=ty[0].childNodes[0].nodeValue;
					
				var scalefactor = nodeDoc.createElement("scale");
				var scaletext = nodeDoc.createTextNode("1");
				scalefactor.appendChild(scaletext);		
				all = nodeDoc.getElementsByTagName("All");
				all[0].appendChild(scalefactor);
							
				var sysrad = 60;
				var orgrad = 45;
				var partrad = 35;
				var histrad = 25;
				
				for(var sn=0;sn<noSysNodes;sn++)
					{
					    var orgEl = {};
						var si = systemKeyOrder[sn];
						sysEl[sn] = {'systemname':'','systemindex':'','color':'','orgEl':{}};
						sysEl[sn]['systemname'] = systemNodeList[si]['systemname']; 
						sysEl[sn]['systemindex'] = systemNodeList[si]['systemindex']; 
						sysEl[sn]['color'] = systemNodeList[si]['color']; 
						sysEl[sn]['orgEl'] = systemNodeList[si]['organArr'];
						//alert(sysEl[sko]['color']);
						var noOrgNodes = Object.keys(sysEl[sn]['orgEl']).length;
						//alert(noOrgNodes);
					
						tx = all[0].getElementsByTagName("translatex");
						ty = all[0].getElementsByTagName("translatey");
						
						txval=tx[0].childNodes[0].nodeValue;
						tyval=ty[0].childNodes[0].nodeValue;
					
						ind++;
						
						if(ind % 2 == 0)
							var xadd = -2300;
						else
							var xadd = 2300;
					    // Scale Image
						var scalefac = nodeDoc.getElementsByTagName("scale");
						var fac = scalefac[0].childNodes[0].nodeValue;
						og.setAttributeNS(null,"transform","scale(" + fac + ")" + " translate(" + txval + "," + tyval + ")");
				        	
						// draw system node
						var sysname = sysEl[sn]['systemname'];
						var syscolor = sysEl[sn]['color'];
						var systemindex = sysEl[sn]['systemindex'];
			
					    var g = document.createElementNS(svgNS,"g");
						g.setAttributeNS(null,"id",sysname);
						
						circle = document.createElementNS(svgNS,"circle");
						circle.setAttributeNS(null,"cx",x1);
						circle.setAttributeNS(null,"cy",y1);
						circle.setAttributeNS(null,"r",sysrad);
						circle.setAttributeNS(null,"stroke","black");
						circle.setAttributeNS(null,"stroke-width",5);
						circle.setAttributeNS(null,"fill",syscolor);
						circle.setAttributeNS(null,"z-index",5);
						circle.setAttributeNS(null,"opacity",1);
						circle.setAttributeNS(null,"id",sysname+"node");
						circle.setAttributeNS(null,"cursor","pointer");
				
						og.appendChild(g);
						g.appendChild(circle);
						document.getElementById("mySVG").appendChild(og);
						
						text = document.createElementNS(svgNS,"text");
						text.setAttributeNS(null,"x",x1);
						text.setAttributeNS(null,"y",(y1+110));
						text.setAttributeNS(null,"fill","black");
						text.setAttributeNS(null,"text-anchor","middle");
						text.setAttributeNS(null,"opacity",1);  
						text.setAttributeNS(null,"font-size",60);
						var systext = document.createTextNode(sysname);
						text.appendChild(systext);
						og.appendChild(g);
						g.appendChild(text);
						document.getElementById("mySVG").appendChild(og);
						
				
						
						if(noOrgNodes>0)
						{
							var organgleinc = (2*Math.PI)/noOrgNodes;
							var obKeys = new Array();
							obKeys = Object.keys(sysEl[sn]['orgEl']);
							for(var o2=0;o2<noOrgNodes;o2++)
								{
									 var oi = obKeys[o2];
									 orgEl[o2]={'organname':'none','organindex':'','color':'','partEl':{}};
									 orgEl[o2]['organname'] = sysEl[sn]['orgEl'][oi]['organname'];
									 orgEl[o2]['organindex'] = sysEl[sn]['orgEl'][oi]['organindex'];
									 orgEl[o2]['color'] = sysEl[sn]['orgEl'][oi]['color'];
									 orgEl[o2]['partEl'] = sysEl[sn]['orgEl'][oi]['partArr']; 
									
									var orgname = orgEl[o2]['organname'];
									var organindex = orgEl[o2]['organindex'];
									var noPartNodes = Object.keys(orgEl[o2]['partEl']).length;
									//alert(noPartNodes);
									
									if (o2==0)
										organgle = 0;
									
									var linecalcradius = 450;
									
									x2 = x1 + linecalcradius*Math.cos(organgle);
									y2 = y1 + linecalcradius*Math.sin(organgle);
									
									// Draw line to organ node
								    g = document.createElementNS(svgNS,"g");
									g.setAttributeNS(null,"id",sysname+orgname);
									
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
									document.getElementById("mySVG").appendChild(og);
									
									// Draw Organ node
									circle = document.createElementNS(svgNS,"circle");
									circle.setAttributeNS(null,"cx",x2);
									circle.setAttributeNS(null,"cy",y2);
									circle.setAttributeNS(null,"r",orgrad);
									circle.setAttributeNS(null,"stroke","black");
									circle.setAttributeNS(null,"stroke-width",5);
									circle.setAttributeNS(null,"fill",syscolor);
									circle.setAttributeNS(null,"id",sysname+orgname+"node");
									circle.setAttributeNS(null,"z-index",5);
									circle.setAttributeNS(null,"name",sysname+orgname);
																	
									// Toggle Display of Organ Layer Table
								    circle.onclick = function()
										{
													  
											tablename = this.getAttribute("name");  // get root name
											tablename = tablename+"organlayertable";
											tablename = tablename.replace(/\s|\-|\_/gi,'');
											imgview = document.getElementById("imgview");
											thetable =  document.getElementById(tablename);
											tables = tableDoc.getElementsByTagName("Tables");
											if(thetable)  // erase table
												{
													
													tables[0].appendChild(thetable.cloneNode(true));
													imgview.removeChild(thetable);
												}
											else if(!thetable)
												{  
													//Retrieve table
													thetable2 = tableDoc.getElementById(tablename);
												
													// ReDraw tables, Place new table at top 
													imgview = document.getElementById("imgview");
													imgview.insertBefore(thetable2,imgview.childNodes[0]);
												}
										}
				
								
									og.appendChild(g);
									g.appendChild(circle);
									document.getElementById("mySVG").appendChild(og);
									
									// Draw node label
									text = document.createElementNS(svgNS,"text");
									text.setAttributeNS(null,"x",(x2));
									text.setAttributeNS(null,"y",(y2-67));
									text.setAttributeNS(null,"fill","black");
									text.setAttributeNS(null,"text-anchor","middle");
									text.setAttributeNS(null,"opacity",1);  
									text.setAttributeNS(null,"font-size",52);
									
									orgnm = document.createTextNode(orgname);
									text.appendChild(orgnm);
									og.appendChild(g);
									g.appendChild(text);
									document.getElementById("mySVG").appendChild(og);
									
									
								    var partEl = {};
																
									if(noPartNodes > 0)
										{
											x1b = x2;
											y1b = y2;
											var partangleinc = (2*Math.PI)/noPartNodes;
											var pKeys = new Array();
											pKeys = Object.keys(orgEl[o2]['partEl']);
											for(pi=0;pi<noPartNodes;pi++)
												{
													partEl[pi] = {'partname':'','partindex':'','color':'','histEl':{}};
													var pidx = pKeys[pi];
													partEl[pi]['partname'] = orgEl[o2]['partEl'][pidx]['partname'];
												    partEl[pi]['partindex'] = orgEl[o2]['partEl'][pidx]['partindex'];
											        partEl[pi]['color'] = orgEl[o2]['partEl'][pidx]['color'];
										            partEl[pi]['histEl'] = orgEl[o2]['partEl'][pidx]['histoLayerArr']; 
													
													partname = partEl[pi]['partname'];
													partindex = partEl[pi]['partindex'];
													var noHistNodes = Object.keys(partEl[pi]['histEl']).length;
													
													if (pi==0)
														{
															partangle = organgle + 90/(2*Math.PI);
															
														}
												
													linecalcradius2 = 300;
													var x2b = x1b + linecalcradius2*Math.cos(partangle);
													var y2b = y1b + linecalcradius2*Math.sin(partangle);
													
													// Draw line to part node
													var line = document.createElementNS(svgNS,"line");
													line.setAttributeNS(null,"x1",x1b+orgrad*Math.cos(partangle));
													line.setAttributeNS(null,"y1",y1b+orgrad*Math.sin(partangle));
													line.setAttributeNS(null,"x2",x2b);
													line.setAttributeNS(null,"y2",y2b);
													line.setAttributeNS(null,"stroke","rgb(255,0,0)");
													line.setAttributeNS(null,"stroke-width",5);
													line.setAttributeNS(null,"opacity",1);  
													og.appendChild(g);
													g.appendChild(line);
													document.getElementById("mySVG").appendChild(og);
													
													// Draw part node
													g = document.createElementNS(svgNS,"g");  // group for part-hist node assembly to rotate
													g.setAttributeNS(null,"id",sysname+orgname+partname+"rotate");
													
													var circle = document.createElementNS(svgNS,"circle");
													circle.setAttributeNS(null,"cx",x2b);
													circle.setAttributeNS(null,"cy",y2b);
													circle.setAttributeNS(null,"r",partrad);
													circle.setAttributeNS(null,"stroke","black");
													circle.setAttributeNS(null,"stroke-width",5);
													circle.setAttributeNS(null,"fill",syscolor);
													circle.setAttributeNS(null,"z-index",5);
													circle.setAttributeNS(null,"id",sysname+orgname+partname+"node");
													circle.setAttributeNS(null,"name",sysname+orgname+partname);
													
													// Toggle Display of Subpart Table
													circle.onclick = function()
														{
													  
														tablename = this.getAttribute("name");  // get root name
														tablename = tablename+"subparttable";
														tablename = tablename.replace(/\s|\-|\_/gi,'');
														imgview = document.getElementById("imgview");
														thetable =  document.getElementById(tablename);
														tables = tableDoc.getElementsByTagName("Tables");
														if(thetable)  // erase table
															{
																
																tables[0].appendChild(thetable.cloneNode(true));
																imgview.removeChild(thetable);
															}
														else if(!thetable)
															{  
																//Retrieve table
																thetable2 = tableDoc.getElementById(tablename);
																
																// ReDraw tables, Place new table at top 
																imgview = document.getElementById("imgview");
																imgview.insertBefore(thetable2,imgview.childNodes[0]);
																
															}
														}
																																	
													og.appendChild(g);
													g.appendChild(circle);
													document.getElementById("mySVG").appendChild(og);
													
													// Draw part node label
													var text = document.createElementNS(svgNS,"text");
													text.setAttributeNS(null,"x",(x2b));
													text.setAttributeNS(null,"y",(y2b-42));
													text.setAttributeNS(null,"fill","black");
													text.setAttributeNS(null,"text-anchor","middle");
													text.setAttributeNS(null,"opacity",1);  
													text.setAttributeNS(null,"font-size",42);
													
													prtnm = document.createTextNode(partname);
													text.appendChild(prtnm);
													og.appendChild(g);
													g.appendChild(text)
													document.getElementById("mySVG").appendChild(og);
									
													var hKeys = new Array();
													var histEl = {};
													hKeys = Object.keys(partEl[pi]['histEl']);	
													if(noHistNodes > 0)
														{	
															x1c = x2b;
															y1c = y2b;
															var histangleinc = (2*Math.PI)/noHistNodes;
													
															for(hr=0;hr<noHistNodes;hr++)
															 {
																    histEl[hr] = {'histolayername':'','histolayerindex':'','color':''};
																	var hid = hKeys[hr];
																	histEl[hr]['histolayername'] = partEl[pi]['histEl'][hid]['histolayername'];
																	histEl[hr]['histolayerindex'] = partEl[pi]['histEl'][hid]['histolayerindex'];
																	histEl[hr]['color'] = partEl[pi]['histEl'][hid]['color'];
																 
																	histolyrname = histEl[hr]['histolayername'];
																	if (hr==0)
																		histangle = partangle + 90/(2*Math.PI);
																	
																	linecalcradius2 = 200;
																	x2c = x1c + linecalcradius2*Math.cos(histangle);
																	y2c = y1c + linecalcradius2*Math.sin(histangle);
																	
																	// Draw line to histo node								
																	var line = document.createElementNS(svgNS,"line");
																	line.setAttributeNS(null,"x1",x1c+partrad*Math.cos(histangle));
																	line.setAttributeNS(null,"y1",y1c+partrad*Math.sin(histangle));
																	line.setAttributeNS(null,"x2",x2c);
																	line.setAttributeNS(null,"y2",y2c);
																	line.setAttributeNS(null,"stroke","rgb(255,0,0)");
																	line.setAttributeNS(null,"stroke-width",5);
																	line.setAttributeNS(null,"opacity",(.6));  
																	og.appendChild(g);
																	g.appendChild(line);
																	document.getElementById("mySVG").appendChild(og);
																	
																	// Draw histo node
																	var circle = document.createElementNS(svgNS,"circle");
																	circle.setAttributeNS(null,"cx",x2c);
																	circle.setAttributeNS(null,"cy",y2c);
																	circle.setAttributeNS(null,"r",histrad);
																	circle.setAttributeNS(null,"stroke","black");
																	circle.setAttributeNS(null,"stroke-width",6);
																	circle.setAttributeNS(null,"fill",syscolor);
																	circle.setAttributeNS(null,"opacity",1);
																	circle.setAttributeNS(null,"z-index",5);
																	circle.setAttributeNS(null,"id",sysname+orgname+partname+histolyrname+"node");
																	circle.setAttributeNS(null,"name",sysname+orgname+partname+histolyrname);
																	
																	// Toggle Display of Histological Table
																	circle.onclick = function()
																	{
																  
																	tablename = this.getAttribute("name");  // get root name
																	tablename = tablename+"histotable";
																	tablename = tablename.replace(/\s|\-|\_/gi,'');
																	imgview = document.getElementById("imgview");
																	thetable =  document.getElementById(tablename);
																	tables = tableDoc.getElementsByTagName("Tables");
																	if(thetable)  // erase table
																		{
																			
																		    tables[0].appendChild(thetable.cloneNode(true));
																		    imgview.removeChild(thetable);
																		}
																	else if(!thetable)
																		{  
																		    //Retrieve table
																			thetable2 = tableDoc.getElementById(tablename);
																		
																			// ReDraw tables, Place new table at top 
																			imgview = document.getElementById("imgview");
																			imgview.insertBefore(thetable2,imgview.childNodes[0]);
																		}
																	}
											
																	og.appendChild(g);
																	g.appendChild(circle);
																	document.getElementById("mySVG").appendChild(og);
												
																	// Draw histo node label
																	var text = document.createElementNS(svgNS,"text");
																	text.setAttributeNS(null,"x",(x2c));
																	text.setAttributeNS(null,"y",(y2c-35));
																	text.setAttributeNS(null,"fill","black");
																	text.setAttributeNS(null,"text-anchor","middle");
																	text.setAttributeNS(null,"opacity",1);  
																	text.setAttributeNS(null,"font-size",37);
																	hslname = document.createTextNode(histolyrname);
																	text.appendChild(hslname);
																	g.appendChild(text);
																	og.appendChild(g);
																	document.getElementById("mySVG").appendChild(og);
																	histangle = histangle + histangleinc;
															
															 }  // end of for loop for histological layers
														} 
												  partangle = partangle + partangleinc;	
												}  // end of for loop for part
										}			
									organgle = organgle + organgleinc ;
								}
								angle = 0;
						}
							y1 = y1 + yadd;	
							x1 = x1 + xadd;
					}
		}
		
		return true;
}












function xml_to_string(xml_node) // used to convert xml object to string representation
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



function getsubparts(xmlDoc,tableDoc,lname,sysid,organid,partid,cl)
{ 
	 // Store subpart records in xml and build their display tables
     // ********************************************************************	 
	
	sys = new Array();
	org = new Array();
	part = new Array();
	layers = new Array();
	
	// Change name of xml file
	sys = xmlDoc.getElementsByTagName("System");
	org = sys[sysid].getElementsByTagName("Organ");
	part = org[organid].getElementsByTagName("Part");
	sysname = sys[sysid].childNodes[0].nodeValue;
	orgname = org[organid].childNodes[0].nodeValue;
	partname = part[partid].childNodes[0].nodeValue;
	
	// get sub parts
	subpart = part[partid].getElementsByTagName("Subpart");
	sl = subpart.length;
	
	// create output elements
	layers = tableDoc.getElementsByTagName("Layers");
    
	// create system component of subpart record
	subpartsys = tableDoc.createElement("System");
	spstext = tableDoc.createTextNode(sys[sysid].childNodes[0].nodeValue);
	subpartsys.appendChild(spstext);

	// create organ component of subpart record
	subpartorg = tableDoc.createElement("Organ");
	spotext = tableDoc.createTextNode(org[organid].childNodes[0].nodeValue);
	subpartorg.appendChild(spotext);
	subpartsys.appendChild(subpartorg);
	
	// create part component of subpart record\
	subpartpart = tableDoc.createElement("Part");
	spptext = tableDoc.createTextNode(part[partid].childNodes[0].nodeValue);
	subpartpart.appendChild(spptext);
	subpartorg.appendChild(subpartpart);
	layers[0].appendChild(subpartsys);
	prt = part[partid].childNodes[0].nodeValue;
	var checkNull = subpart[0].childNodes[0].nodeValue;
	
	if(sl > 0 && (checkNull != "null"))
		{
			
		   tables = tableDoc.getElementsByTagName("Tables");
		   table1 = document.createElement("table");
		   table1.setAttribute("border","1");
		   table1.setAttribute("font-size","1em");
		   tname = sysname+orgname+partname+"subparttable";
		   tname = tname.replace(/\s|\_|\-/gi,'');  // Strip non-alpha chars out
		   table1.setAttribute("id",tname);
		   
		    tr = document.createElement("tr");
			th = document.createElement("th");
			th.setAttribute("width","3em");
			th.setAttribute("height","2em");
			th.innerHTML="<big>"+ "Subpart(s) for " + "<font color='"+cl+ "'>"+ prt + "</font>" + " Part" + "</big>";
			tr.appendChild(th);
			table1.appendChild(tr);	
				
		   for(sp=0;sp<subpart.length;sp++)
				{
				    subprt = tableDoc.createElement("Subpart")
				    sptext = tableDoc.createTextNode(subpart[sp].childNodes[0].nodeValue);
				    subprt.appendChild(sptext);
				    subpartpart.appendChild(subprt);  // append subpart to xml record
				    spname = subpart[sp].childNodes[0].nodeValue;
					tr = document.createElement("tr");
					td = document.createElement("td");
					td.innerHTML =  "<big><center>"+ "<font color='" + cl + "'>" + spname + "</font><center></big>";
					tr.appendChild(td);
					table1.appendChild(tr);
				}
				
				// End previous table with grey-colored row
				tr = document.createElement("tr");
				td = document.createElement("td");
				td.innerHTML =  "<div style='background:grey;height:30px'></div>";
				tr.appendChild(td);
				table1.appendChild(tr);
				document.getElementById("imgview").appendChild(table1.cloneNode(true));
				tables[0].appendChild(table1.cloneNode(true)); 
		}

}

function adjustViewers(){
		$('#grview,#gtitle').on('mouseenter mouseover',function()
				{
					
					$grhdr = $('#grahdr').css('display','block'); // Graph Header object]
					$grhdr.html("<div id='intromess'>Expanded Graph. Move to the Edge to Reduce. Click Here for Menu</div>");
					$('#grview')
						   .css('width','65%')
						   .css('left','0%')
						   .css('opacity','0.92')
						   .css('z-index','500')
						   .css('border','2px dashed brown');
					$('#hierdiv').css('z-index','490');
			
				})
				.on('mouseleave',function()
				{
					$grhdr = $('#grahdr'); // Graph Header object]
					$grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");
						
					$('#grview')
						   .css('width','35%')
						   .css('z-index','1')
						   .css('left','30%')
						   .css('opacity','100%')
						   .css('border','none'); 
					$('#hierdiv').css('z-index','1');
			
				});
				
		
				
		$('#hierdiv,#htitle').on('mouseenter mouseover',function()
				{
				var hheader = $("<div id='hheadr' style='position:relative;float:right;z-index:200;color:#996600;background-color:#CCFFFF'>MOVE MOUSE TO RIGHT EDGE TO SEE GRAPH</div>");
						
					$('#hierdiv')
						   .css('width','67%')
						  //.css('height','106vh')
						   .css('opacity','0.65')
						   .css('z-index','500')
						   .css('border','2px dashed brown');
					$('#grview').css('z-index','490'); 	
            
    					$('#hierdiv').on('mousemove',function(event) {     
        					   
        					    $('#hheadr').remove();
        					    
        					    var hheader = $("<div id='hheadr' style='position:relative;float:right;z-index:200;color:#996600;background-color:#CCFFFF'>MOVE MOUSE TO RIGHT EDGE TO SEE GRAPH</div>");
        						
        					    $('#hierdiv').prepend(hheader);
        			
        						$('#hheadr').css('margin-top',event.pageY-500);
        					});  
				})
				.on('mouseleave',function()
				{
					$grhdr = $('#grahdr'); // Graph Header object]
					$grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");
						
					$('#hierdiv')
						   .css('width','30%')
						   .css('z-index','1')
						   .css('opacity','1.0')
						   .css('border','none'); 
					$('#grview').prepend($grhdr);
					$('#grview').css('z-index','1');
				    
					$('#hheadr').remove();
			
				});
}




function getorganlayers(xmlDoc,tableDoc,lname,sysid,organid,partid,cl)
{
    
	 // Store organ layer records in xml and build their display tables
     // ********************************************************************	 
	organlayer = new Array();
	sys = new Array();
	org = new Array();
	part = new Array();
	layers = new Array();
	// get input elements
	
	// change xml file 
	nodeDoc = tableDoc;
	sys = xmlDoc.getElementsByTagName("System");
	org = sys[sysid].getElementsByTagName("Organ");
	part = org[organid].getElementsByTagName("Part");
	sysname = sys[sysid].childNodes[0].nodeValue;
	orgname = org[organid].childNodes[0].nodeValue;

	
	
	
	// get organ layers
	organlayer = org[organid].getElementsByTagName("Organ_Layer");
	orname = org[organid].childNodes[0].nodeValue;

	if(organlayer.length > 0 && (organlayer[0].childNodes[0].nodeValue != "null"))
		{
		   tables = nodeDoc.getElementsByTagName("Tables");
		   table1 = document.createElement("table");
		   table1.setAttribute("border","1");
		   table1.setAttribute("font-size","1em");
		   tname = sysname+orgname+"organlayertable";
		   tname = tname.replace(/\s|\_|\-/gi,'');  // Strip non-alpha chars out of name
		   table1.setAttribute("id",tname);
		
		    tr = document.createElement("tr");
			th = document.createElement("th");
			th.setAttribute("width","3em");
			th.setAttribute("height","2em");
			th.innerHTML="<big>"+ "Organ Layer(s) for " + "<font color='"+cl+ "'>"+ orname + "</font>" + " Organ" + "</big>";
			tr.appendChild(th);
			table1.appendChild(tr);	
   
		   for(or=0;or<organlayer.length;or++)
				{
				   olname = organlayer[or].childNodes[0].nodeValue;
					
					tr = document.createElement("tr");
					td = document.createElement("td");
					td.innerHTML =  "<big><center>"+ "<font color='" + cl + "'>" + olname + "</font><center></big>";
					tr.appendChild(td);
					table1.appendChild(tr);
				}
				// End previous table with grey-colored row
				tr = document.createElement("tr");
				td = document.createElement("td");
				td.innerHTML =  "<div style='background:grey;height:30px'></div>";
				tr.appendChild(td);
				table1.appendChild(tr);
				imgview = document.getElementById("imgview");
				imgview.appendChild(table1.cloneNode(true));
				tables[0].appendChild(table1); 
		}
	
}

function histologicallayers(xmlDoc,tableDoc,lname,sysid,organid,partid,histoid,cl)
{
	   
	 // Store histology records in xml and build their display tables
     // ********************************************************************	 
	
	sys = new Array();
	org = new Array();
	part = new Array();
	layers = new Array();
	// get input elements
	
	// change xml file name
	nodeDoc = tableDoc;
	
	sys = xmlDoc.getElementsByTagName("System");
	org = sys[sysid].getElementsByTagName("Organ");
	part = org[organid].getElementsByTagName("Part");
	histolyr = part[partid].getElementsByTagName("histo_Layer");
	sysname = sys[sysid].childNodes[0].nodeValue;
	orgname = org[organid].childNodes[0].nodeValue;
	partname = part[partid].childNodes[0].nodeValue;
	histoname = histolyr[histoid].childNodes[0].nodeValue;
	
	// histological layer
	hist = part[partid].getElementsByTagName("histo_Layer");
	hl = hist.length;
	
	// create output elements
	layers = nodeDoc.getElementsByTagName("Layers");
    
	// create system component of histology record
	histsys = nodeDoc.createElement("System");
	htext = nodeDoc.createTextNode(sys[sysid].childNodes[0].nodeValue);
	histsys.appendChild(htext);
	layers[0].appendChild(histsys);
	
	// create organ component of histology record
	historg = nodeDoc.createElement("Organ");
	hotext = nodeDoc.createTextNode(org[organid].childNodes[0].nodeValue);
	historg.appendChild(hotext);
	histsys.appendChild(historg);
	
	// create part component of histology record
	histpart = nodeDoc.createElement("Part");
	hptext = nodeDoc.createTextNode(part[partid].childNodes[0].nodeValue);
	histpart.appendChild(hptext);
	historg.appendChild(histpart);
	
	
	prt = part[partid].childNodes[0].nodeValue;
	
	// create subpart component of histology record
	tables = tableDoc.getElementsByTagName("Tables");
    table1 = document.createElement("table");
    table1.setAttribute("border","1");
    table1.setAttribute("font-size","1em");
	tname = sysname+orgname+partname+histoname+"histotable";
	tname = tname.replace(/\s|\_|\-/gi,'');
    table1.setAttribute("id",tname);
	
	
	histlayr = part[partid].getElementsByTagName("histo_Layer");
	if(histlayr.length==0)
		histlayr = part[partid].getElementsByTagName("histo_Layer");
		
	histsublayr = 0;
	histchar = 0;
	hlname = 0;
	hslname = 0;
	hchname = 0;
	hlname = histlayr[histoid].childNodes[0].nodeValue;	
	tr = document.createElement("tr");
	th = document.createElement("th");
	th.setAttribute("width","3em");
	th.setAttribute("height","2em");
	th.innerHTML="<big>"+ "Histological Layer: " + "<font color='"+cl+ "'>"+ hlname + "</font></big>";
	tr.appendChild(th);
	table1.appendChild(tr);	
		
	histsublayr = histlayr[histoid].getElementsByTagName("histo_Sublayer");
	tr = document.createElement("tr");
	th = document.createElement("th");
	th.setAttribute("width","3em");
	th.setAttribute("height","2em");
	th.innerHTML="<big>"+ "Histological Sublayer(s) for " + "<font color='"+cl+ "'>"+ hlname + "</font>" + " Histological Layer" + "</big>";
	tr.appendChild(th);
	table1.appendChild(tr);	

   for(hsl=0;hsl<histsublayr.length;hsl++)   // Write sublayers
	{
		
			hslname = histsublayr[hsl].childNodes[0].nodeValue;
			tr = document.createElement("tr");
			td = document.createElement("td");
			td.innerHTML =  "<big><center>"+ "<font color='" + cl + "'>" + hslname + "</font><center></big>";
			tr.appendChild(td);
			table1.appendChild(tr);	
			
			histchar = histsublayr[hsl].getElementsByTagName("histo_Char");
			tr = document.createElement("tr");
			th = document.createElement("th");
			th.setAttribute("width","3em");
			th.setAttribute("height","2em");
			th.innerHTML="<big>"+ "Histological Characteristic(s) for " + "<font color='"+cl+ "'>"+ hslname + "</font>" + " Histological Sublayer" + "</big>";
			tr.appendChild(th);
			table1.appendChild(tr);	
			for(hc=0;hc<histchar.length;hc++)  // Writing histological characteristics
				{
					hcname = histchar[hc].childNodes[0].nodeValue;
					
				
				
					tr = document.createElement("tr");
					td = document.createElement("td");
					td.innerHTML =  "<big><center>"+ "<font color='" + cl + "'>" + hcname + "</font><center></big>";
					tr.appendChild(td);
					table1.appendChild(tr);	
					cell = histchar[hc].getElementsByTagName("Cell");
					ecell = histchar[hc].getElementsByTagName("Ecell_Matrix");
					
					   // Write cells and ecells to Table
							for(cl2=0;cl2<cell.length;cl2++)
								{
									if(cl2==0)
										{
											tr = document.createElement("tr");
											th = document.createElement("th");
											th.setAttribute("width","3em");
											th.setAttribute("height","2em");
											th.innerHTML="<big>"+ "Cell(s) for " + "<font color='"+cl+ "'>"+ hcname + "</font>" + " Histological Characteristics" + "</big>";
											tr.appendChild(th);
											table1.appendChild(tr);	
										}
									
									cellname = cell[cl2].childNodes[0].nodeValue;
									tr = document.createElement("tr");
									td = document.createElement("td");
									td.innerHTML =  "<big><center>"+ "<font color='" + cl + "'>" + cellname + "</font><center></big>";
									tr.appendChild(td);
									table1.appendChild(tr);	
								
								}
							for(cl3=0;cl3<ecell.length;cl3++)
								{
									if(cl3==0)
										{
											tr = document.createElement("tr");
											th = document.createElement("th");
											th.setAttribute("width","3em");
											th.setAttribute("height","2");
											th.innerHTML="<big>"+ "Ecell_Matrix(s) for " + "<font color='"+cl+ "'>"+ hcname + "</font>" + " Histological Characteristics" + "</big>";
											tr.appendChild(th);
											table1.appendChild(tr);	
										}
										
							
									ecellname = ecell[cl3].childNodes[0].nodeValue;
									tr = document.createElement("tr");
									td = document.createElement("td");
									td.innerHTML =  "<big><center>"+ "<font color='" + cl + "'>" + ecellname + "</font><center></big>";
									tr.appendChild(td);
									table1.appendChild(tr);	
									
									
									
								}
					  // End of writing cells
					
				}  // End of writing Histological Characteristics
			
			
			
			
	}  // End of writing sublayers
	// End previous table with grey-colored row
	tr = document.createElement("tr");
	td = document.createElement("td");
	td.innerHTML =  "<div style='background:grey;height:30px'></div>";
	tr.appendChild(td);
	table1.appendChild(tr);
	
   document.getElementById("imgview").appendChild(table1.cloneNode(true));
   tables[0].appendChild(table1.cloneNode(true)); 
	
}


	
function doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nme,nodeDoc,tableDoc)  // main recursive function that generates hierarchical display, and calls functions for 
{                                               // graphical and table display
   
	var sysname = new Array();
	var orgname = new Array();
	var partname = new Array();
	var sname = new Array();
	var oname = new Array();
	var pname = new Array();
	var hname = new Array();
	var histolayername = new Array();
	
	var count = 0;
	var systop = 0;
	var height = 85;
	var thisOrganSelected = new Array();
	var thisPartSelected = new Array();
	var thisCellSelected = new Array();
	var thisCellStaySelected = new Array();
	var systemcolor = new Array();
	var activeSystemNodes = new Array();
	var activeOrganNodes = new Array();
	var activePartNodes = new Array();
	var activeHistoNodes = new Array();
	systemcolor[0] = "green";
	systemcolor[1] = "SlateBlue";
	systemcolor[2] = "Brown";
	systemcolor[3] = "Orange";
	systemcolor[4] = "MediumVioletRed";
	systemcolor[5] = "Indigo";
	systemcolor[6] = "Olive";
	systemcolor[7] = "SpringGreen";
	systemcolor[8] = "Chocolate";
	systemcolor[9] = "Black";
	systemcolor[10] = "Blue"; 
	systemcolor[11] = "Red";
	systemcolor[12] = "Gray";
var histoLayerNode = {'histolayerindex':'','histolayerid':'','histolayername':''};
var partNode = {'partindex':'','partid':'','partname':'','histoLayerArr':{}};
var organNode = {'organindex':'','organid':'','organname':'','partArr':{}};														
var systemNode = {'systemindex':'','systemid':'','systemname':'','organArr':{}};

//var partNodeArr = {'systemindex':'','organindex':'','partArr':new Array()}




		  
//Menu display

mysvg = document.getElementById("mySVG");
			
$('#grahdr').on('click',function()
	{
	    var menubg="wheat";
		var $menutable = $("#menutable");
		if($menutable.length > 0)
			$menutable.remove();
							
		$menutable = $("<table></table>");
		$menutable.css('z-index','3').css('border','2px solid black').css('background-color',menubg);
		$menutable.attr('id','menutable');
		
		//Menu header
		var $tr = $("<tr></tr>");
		$tr.css('border','2px solid black')
		var $th = $("<th></th>");
		$th.css("background-color","yellow");
		$th.css("width","450px");
		$th.css("height","80px");
		$th.html("<big>MENU</big>");
		
		//tr.appendChild(th);
		$tr.append($th);
		
		//Zoom in label 
		var $trin = $("<tr></tr>");
		$trin.css("height","60px").css("cursor","pointer").css("background-color",menubg);
		$trin.html("<td style='border:2px solid black'><big><center>ZOOM-IN</center></big></td>");
		
		//Zoom out label 
		var $trout =  $("<tr></tr>");
		$trout.css("height","60px").css("background-color",menubg).css("cursor","pointer");
		$trout.html("<td style='border:2px solid black'><big><center>ZOOM-OUT</center></big></td>");
		
		// Menu exit label
		var $trex =  $("<tr></tr>");
		$trex.css("height","60px").css("background-color","red").css("cursor","pointer");
		$trex.html("<td style='border:2px solid black' ><big><center>EXIT</center></big></td>");
		
		// How to Translate Menu Translate label
		var $trtransht =  $("<tr></tr>");
		$trtransht.css('border','2px solid black');
		$trtransht.css("height","60px").css("background-color",menubg).css("cursor","pointer");
		$trtransht.html("<td style='border:2px solid black'><big><center>HOW TO TRANSLATE IMAGE</center></big></td>");
		
		
		$menutable.append($tr);
		$menutable.append($trin);
		$menutable.append($trout);
		$menutable.append($trtransht);
		$menutable.append($trex);
		//alert($menutable.html());
		
		// Create zoom scale factor and put in XML
		scalefactor = nodeDoc.createElement("scale");
		scaletext = nodeDoc.createTextNode("1.0");
		scalefactor.appendChild(scaletext);
		all = nodeDoc.getElementsByTagName("All");
		all[0].appendChild(scalefactor);
		var fac = 0;   
									
		$trex.on('click',function()
			{
				$menutable = $("#menutable");
				if($menutable.length > 0)
					$menutable.remove();
				
				var $grhdr = $('#grahdr');
				$grhdr.html("<div id='intromess'>CLICK HERE FOR THE MENU</div>");
			});
			
		// Zoom in menu function

			
			// Create zoom scale factor and put in Object
			gScaleFactor.scaleFactr = 1.5;
			
			
			$trin.click(function()
			{
			
				// Get scale factor from xml
				fac = gScaleFactor.scaleFactr;

			   	outerg = mysvg.getElementById("outerg");
			
					
				// Get translation values from xml
				txval = translationCoords.x;
				tyval = translationCoords.y;	
				fac = parseFloat(fac) + 0.5;
				
				outerg.setAttributeNS(null,"transform","scale(" + fac + ")" + " translate(" + txval + "," + tyval + ")");
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
					
					outerg = mysvg.getElementById("outerg");
					fac = parseFloat(fac) - 0.5;
					outerg.setAttributeNS(null,"transform","scale(" + fac + ")" + " translate(" + txval + "," + tyval + ")");
					gScaleFactor.scaleFactr = fac;
				});  	
				
				
	    // Translate function	
	   var $mySVG = $('#mySVG');
	   $mySVG.draggable(
		{
			create: function( event, ui ) 
			{
					var $grhdr = $('#grahdr'); // Graph Header object
					$grhdr.html("<div id='intromess'>You can Drag this Graph Area</div>");
			}
		});
	
	
			$trtransht.on('click',function()
				{
					var $grhdr = $('#grahdr'); // Graph Header object]
					$grhdr.html("<div id='intromess'>HOLD DOWN LEFT MOUSE BUTTON AND DRAG.</div>");
			});
				
	
		var $intro = $("#intromess");
		$intro.remove();
		
	
        $menutable.draggable(
			{
				create: function( event, ui ) 
				{
						var $grhdr = $('#grahdr'); // Graph Header object]
						$grhdr.html("<div id='intromess'>YOU CAN DRAG THE MENU BOX</div>");
				},
				
			
				
			});
		
		$menutable.css('position','absolute').css('left','55%').css('top','20%');
		$('#grview').append($menutable);
		
	});  // end circle onclick
// END OF MENU










	document.getElementById("hierdiv").innerHTML="";
	
/*	
	if(nodeDoc==null)
		{
		var nodeDoc = getXMLDoc2();
		tp = nodeDoc.getElementsByTagName("top")[0];
		}
	
	if(tableDoc==null)
		{
		var tableDoc = getXMLDoc3();
		tp = tableDoc.getElementsByTagName("top")[0];
		
		} */
		
		
    
	// Get Node Info from XML
	//var $systems = $(xmlDoc).find("System");
	var $systems = $(systems);
	
	$grhdr = $('#grahdr').css('display','block'); // Graph Header object]
	$grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");
	
					
    $('#hierdiv').children().css('zoom','50%');	
	
	adjustViewers();
	
	var numSystems = $systems.length;
	
	//$grhdr = $('#grahdr').css('font-size','1.5em'); 
	if(numSystems>0)
	{
		
		    //activeSystemNodes = getActiveSystemNodes();
			
			// produce system nodes		
			var openthissystemsorgans = false;
				
			
			for (i=0;i<numSystems;i++)
			   {   
				//var organs = systems[i].getElementsByTagName("Organ"); 
				var $organs = $(xmlDoc).find("System").eq(i).find("Organ");
				var numOrgans = $organs.length;
				//var organs = $(systems).find("Organ").get(0);
				//var numOrgans = organs.length; 
				//var activeNode=activeSystemNodes.indexOf(i.toString()) != -1; 
				var activeNode = false;
				if((i.toString()) in systemNodeList)
					var activeNode = true;
				
				//if(systems[i].childNodes[0].nodeValue != "null")
				  if($systems.eq(i).contents().eq(0).text() != "null")
					{
						   // Build name system for node
						    systop = systop+height;
						    sysname[i] = $systems.eq(i).contents().eq(0).text();
							sname[i] = sysname[i];
						   
						   //sysname[i] = systems[i].childNodes[0].nodeValue;
						   tname = sysname[i];
						   sname[i] = tname;
						   name = tname + "_" + "1" + "-" + i;    // Node index built into name
						  
						   $od = $("<div class = 'sys_od' style='top:"+ (systop) + "px' ></div>");
						   $id1 = $("<div class='sys_id1'></div>");
						   $od.append($id1);
						   $id2 = $("<div class='sys_id2' style='color:" + systemcolor[i] + "'>" +  tname + "</div>");
						   $id2.attr("id",name);
						   $id2.attr("name",name);
						   $od.append($id2);
						   $id3 = $("<div class='imdiv'>Click on Box to Open</div>");
						 
						   $od.append($id3);
						  
					       // create HTML display
						   $('#hierdiv').append($od);
						   
						   var $odd = $('#hierdiv').find(".sys_id2").filter(function()
									   {
										   if($(this).attr("id") == name)
											return $(this);
									   });
								$odd.bind('mouseenter',function()
								   {
									    $(this).next().filter("div:contains('Click on Box to Open')").css('zoom','105%').css('color','red');
									    $(this).parent().siblings().find('.sys_id2').next().filter("div:contains('Click on Box to Open')").css('color','black');
								   })
									.bind('mouseleave',function()
									   {
										    $(this).next().filter("div:contains('Click on Box to Open')").css('zoom','100%').css('color','black');
										    $(this).parent().siblings().find('.sys_id2').next().filter("div:contains('Click on Box to Open')").css('color','black');
									   });
						
						   $odd.on('mousedown',{numOrg:numOrgans},function(e) 
						   {
						   	   $(this).next().css('zoom','105%').css('color','LightGray');
							   var nm = $(this).attr("name");	
							   var nme = nm.split("_1-");  // raw name
							   nme = nme[0]; 
						       // Indices of system for specific display node
							   var indx = nm.split("_");
							   indx = indx[indx.length-1];
							   var indx2 = indx.split("-");
							   var indx3 = indx2[0] + indx2[1]; 
							  	
							   var $grhdr = $('#grahdr');						  
							   $grhdr.height(80);
							   var prompt = $(this).next().text();
							   if(prompt == "Click on Box to Open")
							   {   
								    // add node to xml record of active nodes used to draw nodes
								    addNodeDbase(nm,"system",systemcolor[indx2[1]],indx2[1],"","","");
									var systemNode = {'systemindex':indx2[1],'systemid':nm,'color':systemcolor[indx2[1]],'systemname':nme,'organArr':{}};
					                systemNodeList[indx2[1]] = systemNode;
									systemKeyOrder.push(indx2[1]);
																	
									
									//Set up Processing Statement  
									$grhdr.html("<div id='intromess'>Please Wait, System Node: <span style='color:"+systemcolor[indx2[1]]+
										"'>"+nme+"</span> is Processing</div>");
							   }
							   else if( prompt == "Click Again to Close")
									{
									    //removeSystemNode(nm,"system",systemcolor[indx2[1]],indx2[1],"","","");	
										
                                        //delete activeNodeArr['key'+indx2[1].toString()];
										delete systemNodeList[indx2[1]]
										for(var i=0;i<systemKeyOrder.length;i++)
											{
												if(systemKeyOrder[i]==indx2[1])
													systemKeyOrder.splice(i,1)
											}
										//Set up Processing Statement  
									    $grhdr.html("<div id='intromess'>Please Wait, Removng System Node: <span style='color:"+systemcolor[indx2[1]]+
												"'>"+nme+"</span></div>");
										
								    } 
								else;
								   });   // End of on mousedown
						
						  $odd.on('mouseup',{numOrg:numOrgans},function(e) 
						   {
							   var nm = $(this).attr("name");	
							   var nme = nm.split("_1-");  // raw name
							   nme = nme[0]; 
							   // split out index for thisOrganSelected
							   var indx = nm.split("_");
							   indx = indx[indx.length-1];
							   indx2 = indx.split("-");
							   indx3 = indx2[0] + indx2[1];
							   							 
							   $grhdr = $('#grahdr');
							   var prompt = $(this).next().text();
							 
							   if(prompt == "Click on Box to Open")
							   {
								   //  Change Graph Message to show if there are Organs
								  
								   if(e.data.numOrg > 0)
									  {
										$grhdr.height(56);  
										$('#grview').css('z-index','1');
										$grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");	
									  }
								   else if(e.data.numOrg == 0)
								   {
										
										$grhdr.html("<div id='intromess'>Sorry, System: <span style='color:"+systemcolor[indx2[1]]+
										"'>"+nme+"</span> Has NO ORGANS!!</div>");
								   }
								
								   $(this).next().css("color","green").text("Click Again to Close"); // Change Box Prompt
								   drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder);  // Draw Selected Node  
								   doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nm,nodeDoc,tableDoc);  //Redraw Gui
							   }
							   else if( prompt == "Click Again to Close")
									{
									   $('#grview').css('z-index','1');
									   $grhdr.height(56);  
									   $grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");	
									   drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder);  // Draw Selected Node  
									   doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nm,nodeDoc,tableDoc);  //Redraw Gui
								   } 
								else;
								   });   // End of on mouseup
								   
							//ORGANS Section
							openthissystemsorgans = false;	// For Display of Organs in Hierarchy for a System Level
							
							if(activeNode==true)
								{
									openthissystemsorgans = true;
									var $el = $('#hierdiv').find(".sys_id2").filter(function()
										   {
											   if($(this).attr("id") == name)
												return $(this);
										   });
									$el.next().text("Click Again to Close");
									$el.next().css("color","green");
								}
							else
								{
									openthissystemsorgans = false;
			                    }
							var orgtop = systop;   
						
							if(numOrgans>0 && openthissystemsorgans)
								{    
								   var lnames = new Array();
								   var openthisorgansparts = "";
								   
								   
								   for (j=0;j<numOrgans;j++)
									 {
										//alert("gets here");
										var $parts = $(xmlDoc).find("System").eq(i).find("Organ").eq(j).find("Part"); 
										var numParts = $parts.length;
									
									    var activeNode = false;
										if((j.toString()) in systemNodeList[i]['organArr'])
											var activeNode = true;
										 
										if(j==0)
										{
										orgtop = orgtop+height+50;
										}
										else
											orgtop = orgtop+height;
										 
										 //Build name system for node
										 oname[j] = $organs.eq(j).contents().eq(0).text();
										 var name = oname[j];
										 //alert(oname[j]);
							             orgname[j] = sysname[i] + "_" + oname[j];
										 
										//name = organs[j].childNodes[0].nodeValue;
										// oname[j] = name;
										// orgname[j] = sysname[i] + "_" + name;
										 var lname = orgname[j] + "_" + "1" + "-" + i + "-" + j;  //node index built into name
																	
										//  building node HTML
							
                                        $od = $("<div class = 'org_od' style='top:"+ (orgtop) + "px' ></div>");
                                        $id1 = $("<div class='org_id1'></div>");	
                                        $od.append($id1);		
                                        $id2 = $("<div class='org_id2' style='color:" + systemcolor[i] + "'>" + "ORGAN:  " + name + "</div>");	
										$id2.attr("id",lname);
										$id2.attr("name",lname);
										$od.append($id2);
										$id3 = $("<div class='imdiv'>Click on Box to Open</div>");
                                        $od.append($id3);
									   // Events for adding and deleting a ORGAN node from display
									   $('#hierdiv').append($od);
						   
									    var $odd = $('#hierdiv').find(".org_id2").filter(function()
												   {
													   if($(this).attr("id") == lname)
														return $(this);
												   });
									
									      	$odd.bind('mouseenter',function()
											   {
													$(this).next().filter("div:contains('Click on Box to Open')").css('zoom','105%').css('color','red');
													$(this).parent().siblings().find('.org_id2').next().filter("div:contains('Click on Box to Open')").css('color','black');
											   })
										   .bind('mouseleave',function()
											   {
													$(this).next().filter("div:contains('Click on Box to Open')").css('zoom','100%').css('color','black');
													$(this).parent().siblings().find('.org_id2').next().filter("div:contains('Click on Box to Open')").css('color','black');
											   })
										   .bind('mousedown',function()
											   {
												   $(this).next().css('zoom','105%').css('color','LightGray');
											   });
									 
									  $odd.on('mousedown',{numberParts:numParts},function(e) 
										  {       
											   //alert(e.data.numParts);
											   var nm = $(this).attr("name");	 
											   // indices for system, organs for specific display node
											   var indx = nm.split("_");
											   var nme = nm.split("_1-");  // raw name
											   nme = nme[0]; 
											   indx = indx[indx.length-1];
											   indx2 = indx.split("-");
											   indx3 = indx2[0].toString() + indx2[1].toString() + indx2[2].toString();
											   
											   $grhdr = $('#grahdr'); 
											   $grhdr.height(80);
											   
											   var prompt = $(this).next().text();
											 
											   $grhdr = $('#grahdr'); 
											   $grhdr.height(80);
											   if(prompt == "Click on Box to Open")
												   {
													   // Add node to xml record of active nodes
													   addNodeDbase(nm,"organ",systemcolor[indx2[1]],indx2[1],indx2[2],"","");
													  
													    var o_name =  new Array();
														var o_name = nme.split("_");
														
														var organNode = {'organindex':indx2[2],'organid':nm,'organname':o_name[o_name.length-1],'partArr':{}};														
														systemNodeList[indx2[1]]['organArr'][indx2[2]] = organNode;
														
														
												
														$grhdr.html("<div id='intromess'>Please Wait, Organ Node: <span style='color:"+systemcolor[indx2[1]]+
															"'>"+nme+"</span> is Processing</div>");
												   }
											   else if(prompt == "Click Again to Close")
													{
													  
													   delete systemNodeList[indx2[1]]['organArr'][indx2[2]];
													  
													   //Set up Processing Statement  
													   $grhdr.html("<div id='intromess'>Please Wait, Removng Organ Node: <span style='color:"+systemcolor[indx2[1]]+
																"'>"+nme+"</span></div>");
												    } 

										   });  // end of mousedown
									    
										  $odd.on('mouseup',{numberParts:numParts},function(e) 
										   {
											       // alert(e.data.numParts);
												   var nm = $(this).attr("name");	
												   var nme = nm.split("_1-");  // raw name
												   nme = nme[0]; 
												   // indices for system, organs for specific display node
												   var indx = nm.split("_");
												   indx = indx[indx.length-1];
												   indx2 = indx.split("-");
												   indx3 = indx2[0].toString() + indx2[1].toString() + indx2[2].toString();
												   var prompt = $(this).next().text();
												     // Put graph Diplay back on top of Notification
												   $('#grview').css('z-index','1'); 
												   $grhdr = $('#grahdr'); 
												   if(prompt == "Click on Box to Open")
													   {
														   getorganlayers(xmlDoc,tableDoc,nm,indx2[1],indx2[2],"",systemcolor[indx2[1]]);
														   $(this).next().css("color","green").text("Click Again to Close");  
														   doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nm,nodeDoc,tableDoc);
														   drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder);  // Draw Selected Node  
														     //alert(e.data.numberParts);
														   
														   if(e.data.numberParts > 0)
														      {
																
																$grhdr.height(56);  
																$grhdr.css('z-index','1'); 
																$grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");	
															  }
														   else if(e.data.numberParts == 0)
														   {
															    $grhdr.height(80);  
																$grhdr.css('z-index','2'); 
														 		$grhdr.html("<div id='intromess'>Sorry, Organ: <span style='color:"+systemcolor[indx2[1]]+
																"'>"+nme+"</span> Has NO PARTS!!</div>");
														   }
														   
														   
													   }
												   else if(prompt == "Click Again to Close")
														{
															$grhdr.height(56);
															$grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");
																													
															// Remove organlayer table from display
															var tablename = nme+"organlayertable";
															tablename = tablename.replace(/\s|\-|\_/gi,'');
															$thistable = $('#'+tablename);
															$thistable.remove();
															doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nm,nodeDoc,tableDoc);
															drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder);  // Draw Selected Node  
															
													   } 
											   });  // end of mouseup
									   
									  // PART SECTION
								       
									  // Retrieve xml variable to tell whether to Open Parts
										openthisorgansparts = false;
										if(activeNode==true)
											{
												openthisorgansparts = true;
												var $el = $('#hierdiv').find(".org_id2").filter(function()
													   {
														   if($(this).attr("id") == lname)
															return $(this);
													   });
												
												$el.next().text("Click Again to Close");
												$el.next().css("color","green");
											}
										else
											{
												openthisorgansparts = false;
											}
									
										var prttop = orgtop;
										if(numParts > 0 && openthisorgansparts)
											{  
										
												var openthispartscells = "";
												for (k=0;k<numParts;k++)
												 {
													var activeNode = false;
													if((k.toString()) in systemNodeList[i]['organArr'][j]['partArr'])
														var activeNode = true;
												//	if(('key'+i.toString()+'_'+j.toString()+'_'+k.toString()) in activeNodeArr)
												//		var activeNode = true;
													
													if(k==0)
														{
															prttop = prttop+height+50;
														}
													else if(k==(numParts))
														{
															orgtop = orgtop+height+50;
														}
													
													else
													  prttop = prttop + height;
													  									
													 //Build name system for node
													 pname[k] = $parts.eq(k).contents().eq(0).text();
													 var name = pname[k];
													 //alert(oname[j]);
													// orgname[j] = sysname[i] + "_" + oname[j];
																						
													//name = parts[k].childNodes[0].nodeValue;
													//pname[k] = name;
													partname[k] = orgname[j] + "_" + name;
													
													
													var lname = partname[k] + "_" + "1" + "-" + i + "-" + j + "-" + k;
													var $histolayers = $(xmlDoc).find("System").eq(i).find("Organ").eq(j).find("Part").eq(k).find("histo_Layer"); 
													var numCells = $histolayers.length;
													// Building node HTML			
													$od = $("<div class = 'prt_od' style='top:"+ (prttop) + "px' ></div>");
													$id1 = $( "<div class='prt_id1'></div>");
													$od.append($id1);
													$id2 = $("<div class='prt_id2' style='color:" + systemcolor[i] + "'>" + "PART:  " + name + "</div>");
													$id2.attr("id",lname);
													$id2.attr("name",lname);
													$od.append($id2);
													$id3 = $("<div class='imdiv'>Click on Box to Open</div>");
													$od.append($id3);
													$('#hierdiv').append($od);
						   
												    var $odd = $('#hierdiv').find(".prt_id2").filter(function()
															   {
																   if($(this).attr("id") == lname)
																	return $(this);
															   });
												  
																$odd.bind('mouseenter',function()
																   {
																	    $(this).next().filter("div:contains('Click on Box to Open')").css('zoom','105%').css('color','red');
																		$(this).parent().siblings().find('.prt_id2').next().filter("div:contains('Click on Box to Open')").css('color','black'); 
																   })
																.bind('mouseleave',function()
																   {
																	    $(this).next().filter("div:contains('Click on Box to Open')").css('zoom','100%').css('color','black');
																		$(this).parent().siblings().find('.prt_id2').next().filter("div:contains('Click on Box to Open')").css('color','black'); 
																   })   
															   .bind('mousedown',function()
																   {
																	   $(this).next().css('zoom','105%').css('color','LightGray');
																   });
													
													 $odd.on('mousedown',{numberCells:numCells},function(e) 
											      	   {
														   var nm = $(this).attr("name");	
														   var nme = nm.split("_1-");  // raw name
														   nme = nme[0];
														   // indices for system, organ, part for this specific display node
														   var indx = nm.split("_");
														   indx = indx[indx.length-1];
														   indx2 = indx.split("-");
														   indx3 = indx2[0].toString() + indx2[1].toString() + indx2[2].toString() + indx2[3].toString();

														   $grhdr = $('#grahdr'); 
														   $grhdr.height(80);
														   var prompt = $(this).next().text();
														   if(prompt == "Click on Box to Open")
																    {
																		// Add display node to Active Nodes xml record
																	    addNodeDbase(nm,"part",systemcolor[indx2[1]],indx2[1],indx2[2],indx2[3],"");
																	    var p_name =  new Array();
																		var p_name = nme.split("_");
																		
																		
																		var partNode = {'partindex':indx2[3],'partid':nm,'partname':p_name[p_name.length-1],'histoLayerArr':{}};
																		systemNodeList[indx2[1]]['organArr'][indx2[2]]['partArr'][indx2[3]] = partNode;			
																		
																		getsubparts(xmlDoc,tableDoc,nm,indx2[1],indx2[2],indx2[3],systemcolor[indx2[1]]);
																		
																		//Set up Processing Statement  
																		$grhdr.html("<div id='intromess'>Please Wait, Part Node: <span style='color:"+systemcolor[indx2[1]]+
																			"'>"+nme+"</span> is Processing</div>");
																	}
															   else if(prompt == "Click Again to Close")
																	{
																	   
																	    
																		delete systemNodeList[indx2[1]]['organArr'][indx2[2]]['partArr'][indx2[3]];
																		 //Set up Processing Statement  
																	    $grhdr.html("<div id='intromess'>Please Wait, Removng Part Node: <span style='color:"+systemcolor[indx2[1]]+
																				"'>"+nme+"</span></div>");
																    } 
														});  // End of on mousedown
													
													
													  $odd.on('mouseup',{numberCells:numCells},function(e) 
											      	   {
														   var nm = $(this).attr("name");	
														   var nme = nm.split("_1-");  // raw name
														   nme = nme[0];
														   // indices for system, organ, part for this specific display node
														   var indx = nm.split("_");
														   indx = indx[indx.length-1];
														   indx2 = indx.split("-");
														   indx3 = indx2[0].toString() + indx2[1].toString() + indx2[2].toString() + indx2[3].toString();
														   
														   var prompt = $(this).next().text();
														   $grhdr = $('#grahdr');
														   $('#grview').css('z-index','1');
														   if(prompt == "Click on Box to Open")
																  {
																	    
																		//Redraw Gui and Draw Nodes
																		doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nm,nodeDoc,tableDoc);
																		drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder);  // Draw Selected Node  
																
																		 if(e.data.numberCells > 0)
																			  {
																				$grhdr.height(56);  
																				$grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");	
																			  }
																		 else if(e.data.numberCells == 0)
																		   {
																			   $grhdr.height(75);  
																				$grhdr.html("<div id='intromess'>Sorry, PART: <span style='color:"+systemcolor[indx2[1]]+
																				"'>"+nme+"</span> Has NO CELLS!!</div>");
																		   }
																		$(this).next().css("color","green").text("Click Again to Close");      
																		}
														   else if(prompt == "Click Again to Close")
																	{
																	    $grhdr.height(56);
																		$grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");
																		
																				
																		var tablename = nme+"subparttable";
																		tablename = tablename.replace(/\s|\-|\_/gi,'');
																		$thistable = $('#'+tablename);
																		$thistable.remove();
																		doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nm,nodeDoc,tableDoc);
																	    drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder);  // Draw Selected Node  
																   } 
														});  // End of on mouseup
													// HISTOLOGICAL LAYER Section, used to be CELL section
													openthispartscells = false;	// For Display of a Parts Cells in the Hierarchy
													if(activeNode==true)
														{
															openthispartscells = true;
															var $el = $('#hierdiv').find(".prt_id2").filter(function()
																   {
																	   if($(this).attr("id") == lname)
																		return $(this);
																   });
															$el.next().text("Click Again to Close");
															$el.next().css("color","green");
														}
													else
														{
															openthispartscells = false;
														}
																									
													var celltop = prttop;
													var cells = 0;
													var ecells = 0;
												
													//Get node selection status from XML
												 if(numCells>0 && openthispartscells)   
													{
													
													  for (m=0;m<numCells;m++)
														{  
															var activeNode = false;
															if((m.toString()) in systemNodeList[i]['organArr'][j]['partArr'][k]['histoLayerArr'])
																var activeNode = true; 
															
															if(m==0)
															{
															  celltop = celltop+height+50;
															}
															else
															  celltop = celltop + height;	
															
															 hname[m] = $histolayers.eq(m).contents().eq(0).text();
															 var name = hname[m];
															//name = histolayers[m].childNodes[0].nodeValue;
															//hname[m] = name;
															histolayername[m] = partname[k] + "_" + name;
															var lname = histolayername[m] + "_" + "1" + "-" + i + "-" + j + "-" + k + "-" + m;
															$od = $("<div class = 'cell_od' style='top:"+ (celltop) + "px' ></div>");
															$id1 = $("<div class='cell_id1'></div>");
															$od.append($id1);
															$id2 = $("<div class='cell_id2' style='color:" + systemcolor[i] + "'>" + "Histological Layer:  " + name + "</div>");
															$id2.attr("id",lname);
															$id2.attr("name",lname);
															$od.append($id2);
														// Set histology node to open or close
														if(activeNode==true)
															{
																$id3 = $("<div>Click Again to Close</div>");
																$od.append($id3);
																$('#hierdiv').append($od);
															}
														else
															{
																$id3 = $("<div>Click on Box to Open</div>");
																$od.append($id3);
																$('#hierdiv').append($od);	
															}	
																var $odd = $('#hierdiv').find(".cell_id2").filter(function()
																   {
																	   if($(this).attr("id") == lname)
																		return $(this);
																   });
											  
																	$odd.bind('mouseenter',function()
																	   {
																			$(this).next().filter("div:contains('Click on Box to Open')").css('zoom','105%').css('color','red');
																			$(this).parent().siblings().find('.cell_id2').next().filter("div:contains('Click on Box to Open')").css('color','black'); 
																	   })
																   .bind('mouseleave',function()
																	   {
																			$(this).next().filter("div:contains('Click on Box to Open')").css('zoom','100%').css('color','black');
																			$(this).parent().siblings().find('.cell_id2').next().filter("div:contains('Click on Box to Open')").css('color','black'); 
																	   })	   
																   .bind('mousedown',function()
																	   {
																		   $(this).next().css('zoom','105%').css('color','LightGray');
																	   });
																   
															  
															   $odd.on('mousedown',function(e) 
																   {
																	var nm = $(this).attr("name");
																	var indx = nm.split("_");
																	var nme = nm.split("_1-");  // raw name
																	nme = nme[0];
																    indx = indx[indx.length-1];
																    indx2 = indx.split("-");
																    pndx = indx2[3];
																    cndx = indx2[4];
																    indx3 = indx2[3].toString() + indx2[4].toString();
																	
																	$grhdr.height(70).css('z-index','2');
																    var prompt = $(this).next().text();
																    if(prompt == "Click on Box to Open")	
																		{
																		  // Add Node to Database of Active Nodes
																		   addNodeDbase(nm,"histo",systemcolor[indx2[1]],indx2[1],indx2[2],indx2[3],indx2[4]);
																		
																			var h_name =  new Array();
																			var h_name = nme.split("_");
																			
																			var histoLayerNode = {'histolayerindex':indx2[4],'histolayerid':nm,'histolayername':h_name[h_name.length-1]};
																			systemNodeList[indx2[1]]['organArr'][indx2[2]]['partArr'][indx2[3]]['histoLayerArr'][indx2[4]] = histoLayerNode;			 
																		  //Set up Processing Statement  
																			$grhdr.html("<div id='intromess'>Please Wait, Histological Layer Table For Cell: <span style='color:"+systemcolor[indx2[1]]+
																			"'>"+nme+"</span> is Processing</div>");
																		  // generate histological tables
																		  histologicallayers(xmlDoc,tableDoc,nm,indx2[1],indx2[2],indx2[3],indx2[4],systemcolor[indx2[1]]);
																		 // doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nm,nodeDoc,tableDoc); 
																		  																		   
																		 
																		}
																    else if( prompt == "Click Again to Close")
																		{
																			//Remove Node from Database of Active Nodes
																			//removeHistoNode(nm,"histo",systemcolor[indx2[1]],indx2[1],indx2[2],indx2[3],indx2[4]); 
																			//delete activeNodeArr['key'+indx2[1].toString()+"_"+indx2[2].toString()+"_"+indx2[3].toString()+"_"+indx2[4].toString()]; 
																			delete systemNodeList[indx2[1]]['organArr'][indx2[2]]['partArr'][indx2[3]]['histoLayerArr'][indx2[4]];
																			
																			 //Set up Processing Statement  
																			$grhdr.html("<div id='intromess'>Please Wait, Removng Histological Table for: <span style='color:"+systemcolor[indx2[1]]+
																				"'>"+nme+"</span></div>");
																			// Remove histological table from image view
																				var tablename = nme+"histotable";
																				tablename = tablename.replace(/\s|\-|\_/gi,'');
																				$thistable = $('#imgview').find('#'+tablename);
																				$thistable.remove();
																		
																		}   // End of  Else if Click Again to Close
																	});  // End of on mousedown
															  
															   $odd.on('mouseup',function(e) 
																   {
																	  var nm = $(this).attr("name");
																	  var nme = nm.split("_1-");  // raw name
																	  nme = nme[0];
																	  hnm = nme.split("_");
																	  hnm = hnm[3];
																	  hnm = hnm.replace(/\-|\_/gi,'');
																	  //alert(hnm);
																	  $grhdr = $('#grahdr'); // Graph Header object]
																      var prompt = $(this).next().text();
																	  if(prompt == "Click on Box to Open")	
																		{
																				var tablename = nme+"histotable";
																				tablename = tablename.replace(/\s|\-|\_/gi,'');
																				$thistable = $('#imgview').find('#'+tablename);
																				
																				$grhdr.height(70).css('z-index','2');
																				$('#grview').css('z-index','1');
																				if($thistable.length>0)
																					{
																					   //Set up Table Notfication Statement  
																						$grhdr.html("<div id='intromess'  style='position:absolute;height:160%;z-index:200;width:91%;"+
																						"background-color:#CCFFFF;border:2px solid black;padding:1em"+"'>Histological (or Cell) Node Info for : <span style='color:"+systemcolor[indx2[1]]+
																							"'>"+nme+"</span> is in Tables to the Right.</div>");
																							
																					}
																				else if($thistable.length<=0)
																					{
																						 //Set up Table Notfication Statement  
																						$grhdr.html("<div id='intromess'  style='position:absolute;height:160%;z-index:200;width:91%;"+
																						"background-color:#CCFFFF;border:2px solid black;padding:1em"+"'>There are No Histological (or Cell) Node Info for : <span style='color:"+systemcolor[indx2[1]]+
																							"'>"+nme+"</span>. Which would be in Tables to the Right.</div>");
																					}
																				 $(this).next().css("color","green").text("Click Again to Close");
																				 	//Redraw Gui and Draw Nodes
																					doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nm,nodeDoc,tableDoc);
																					drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder);  // Draw Selected Node  
																			}
																	   else if( prompt == "Click Again to Close")
																			{																			
																				// Redraw Gui
																				$grhdr.height(56);
																				$grhdr.html("<div id='intromess'>HOVER MOUSE BELOW TO ENLARGE GRAPH AREA</div>");
																				
																				//Redraw Gui and Draw Nodes
																				doSystems(xmlDoc,systems,systemNodeList,systemKeyOrder,nm,nodeDoc,tableDoc);
																				drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder);  // Draw Selected Node  
																		
																			}   // End of  Else if Click Again to Close
																	});  // End of on mouseup	
																	
														}  // end of for histological layers
														prttop = celltop;
													}  // end of if parts, END of PART section
													
												}  // end of for parts
											 orgtop = prttop;
										}  // end of if parts
										
									}  // end of for organs
								  systop = orgtop;
							}  // end of if organs, END of Systems section
						
					}
				}  // end of for systems
				//alert("gets here");
				
				//Draw Nodes after hierarchy is drawn
			/*	 var done = false;
				 while(done==false)
					{
						
					done = drawNodes(nodeDoc,tableDoc,systemNodeList,systemKeyOrder);  // Draw Selected Node   
					
					};  */
				
		}  // end if systems

	
} // end of doSystems

  






  


$(document).ready(function()   // loads html of gui on body load
{
var gui = '<div id="outframe">'+
				'<div id="topbar">Organism Relation Ontology (ORO) Miner</div>'+
				'<div id="hholder">'+
					'<div id ="htitle" >Hierarchical View</div>'+
					'<div id = "gtitle">Graph View</div>'+
					'<div id="ttitle">Table Display</div>'+
				'</div>'+
				'<div id="outrdiv">'+
					'<div id="hierdiv"></div>'+
					'<div id="grview" class="thisdiv">'+
						'<div id="grahdr"></div>'+
						'<svg id="mySVG" width="70%" height="941px" viewBox = "0 0 4000 4000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>'+
					'</div>'+
					'<div id="imgview"></div>'+
				'</div>'+
			'</div>';
    

document.getElementById("gui").innerHTML = gui;

var hlist_xml = "<?php echo $vars['orominer2XML']; ?>";
buildHView(hlist_xml);  // initiate xml database retreival and hierachical display

var width = $('#grview').width();
var left = $('#grview').css('left');
var height = $('#grview').css('height');

	adjustViewers();
});




// END OF JAVASCRIPT FUNCTIONS --------------------------------------------------------------------------------
</script>


<div id="gui" class="viewer" name="gui"></div>

<div><input type="hidden" id="hidval" value=""/></div>
