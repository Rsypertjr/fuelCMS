<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" ></link>
<script type="text/javascript">


function mobileLoader(message)
	{
	
			$('#wait').html('');
			$("#wait").append("<p id='loaderMessage'>"+message+"</p><img src='<?php echo img_path("spiral.gif"); ?>'>");

		var i = 0;
		setInterval(function()
			{
				$('#wait img').css({"transform": "rotate("+(30*i)+"deg)"});
				i++;
			},50 ); 
	}
	
	
$(document).ready(function()
	{
	
	var gheader = '';
	var grows = '';
	$('.aButton2')
	    .on('mouseover',function()
			{
				$(this)
					.css('color','blue')
					.css('background-color','#C0C0C0');
			})
		.on('mouseleave',function()
			{
				$(this)
					.css('color','black')
					.css('background-color','white');
			})
		.on('mousedown',function()
			{
				$(this)
					.css('background-color','grey')
					.css('box-shadow','2px 2px 2px blue')
					.css('color','blue');
			
			})
		  .on('mouseup',function()
			{
				$(this)
					.css('background-color','white')
					.css('box-shadow','none')
					.css('color','black');
			});		
			
			
       $('#subButton').on('mouseup', function()
			  {
				  $('#wait').css('top','-5em');
				  
			  });
		
       $('#am1, #am2, #qu, #clearButton').on('mouseenter', function()
			  {
				  $('#wait').css('top','0em');
				  
			  });
			  
		$('div.aButton2:contains("Verify File")').on('mouseup', function()
			{
				  $('#wait').css('top','-10em');
				
			});	
		
        $('div.aButton2:contains("Verify File")').on('mouseleave', function()
			{
				$('#fileinput').on('mouseover', function()
					{
						$('#wait').css('top','0em');
						
					});	
				
			});	
		
			$('#fileinput').on('mouseleave', function()
			{
				$('#wait').css('top','0em');
				
			});	
			
	});

function valInput()
{
var inform = document.forms["filein"];
var fnm = inform.elements["fname"].value;
var input = fnm.toString();
var n = fnm.includes("input");

var rcvid = "wait";

if(!fnm.match(/(\w|\d|(\Q-_\E))*\.txt/))
  {
  var inform = document.forms["filein"];
  inform.elements["fname"].value = "Please input a FASTA type file";
  alert("Ops! You Forgot File Name or Its not a Text File (.txt)");
  }
else
   {
	
          var mess = "Please Wait while Database Tables are being Built!";
          makeRequest(fnm,rcvid,"no",mess);

   }
}



function getXMLHttp()
{
  var xmlHttp

  try
  {
    //Firefox, Opera 8.0+, Safari
    xmlHttp = new XMLHttpRequest();
  }
  catch(e)
  {
    //Internet Explorer
    try
    {
      xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e)
    {
      try
      {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(e)
      {
        alert("Your browser does not support AJAX!")
        return false;
      }
    }
  }
  return xmlHttp;
}
/*
function makeRequest(snd,recid,drp,mess)
{
        mobileLoader(mess);
		let url_a = "<?php echo assets_path('ht_ml/getMotifs.php'); ?>"+"?dropDb="+drp+"&file="+snd;
		alert(url_a);
		$.ajax(
			
				{
					type: "GET",
					
					url: url_a,
					success:function(result)
						{
						  
							$('#'+recid).html(result);
							
						},
					cache:false
				});
			

		  fetch(url_a, {
			method:"get",
			headers: {
				"Content-Type": "application/json",
				"X-Requested-With": "XMLHttpRequest"
			}
		  }).then(function(result){
			$('#'+recid).html(result);
		  });
}
*/

function makeRequest(snd,recid,drp,mess)
{
	mobileLoader(mess);
	$.ajax({
           url:  "<?php echo base_url(); ?>" + "index.php/getMotifs/index",
           type: "POST",
		   dataType:"json",
           data: {dropDb:drp,file:snd,motif:null},
           error: function() {
              alert('Something is wrong');
           },
           success: function(data) {
				$('#'+recid).html(result);
           }
        });
}
 
function makeRequest2(snd,recid,mess)
{
 
	mobileLoader(mess);
	$.ajax({
           url:  "<?php echo base_url(); ?>" + "index.php/getMotifs/index",
           type: 'POST',
		   dataType:'json',
           data: {dropDb:null,file:null,motif:snd},
           error: function() {
              alert('Something is wrong');
           },
		   success:function(result)
			{
				console.log(result);
				if(result != null){						
					//var arr = JSON.parse(result);
					var arr = result;
					var gheader = arr[0].header;
					var grows = arr[0].rows;
				
					var table = `<div id = "results_table" v-show = "rows.length > 0 && headers.length > 0">																
									<table id='example1'  class='table table-striped table-bordered' style='width:100%'>
										<thead> 
											<tr>
												<th class="th-sm" v-for="header in headers" v-html="header"></th>
											</tr>
										</thead>
											<tbody>                    
												<template v-for = "row in rows">
													<tr>
														<td v-for = "cell in row">{{cell}}</td>
													</tr>  
												</template>
											</tbody>
										</table>
									</div>`;
					$('#'+recid).html(table);						
					vm = new Vue({
						el: '#results_table',
						data: {
							test: "This is a Test",
							headers : gheader,
							row: '',
							header: '',
							cell:'',
							itr: '',
							rows: grows
						},
						mounted(){
							$('#example1').DataTable();	
						}
					});	
				}			

			},
		cache:false
	});
  
   
}

function dropDb()
{
 
  makeRequest("none","wait","yes");
}


function HandleResponse(response,recid)
{
  
   document.getElementById(recid).innerHTML = response;
}


function clearInput()
{
  var inform = document.forms["filein"];
  inform.elements["fname"].value = "";
  document.getElementById("wait").innerHTML = "";
}

function clearOut()
{
	$('#wait').html('').css('top','0em');
}


function doSearch()
{
var am1 = document.getElementById("am1").value;
var am2 = document.getElementById("am2").value;
var qu = document.getElementById("qu").value;
var recid = "wait";
//if(am1 && am2 && qu)
  //{
    var fnm = am1 +  am2 + qu;
    var mess = "Please Wait for Database Response!";
    makeRequest2(fnm,recid,mess);
    
 // }
}

</script>
		<div id="mmContainer" class="viewer">
			<h1>Input Form for Minimotif Search</h1>
			<div id="inputdiv" >  
				<div id="fileinput" >
					<form id="filein">
						<div id="filecapt">
							<p style="margin-bottom:2em">Input the file name below&nbsp;&nbsp;(<i><b>FASTA-TEST.txt</b> is an example file that will work.&nbsp;&nbsp;However, the database takes several minutes to build since with 10's thousands of entries.</i>)&nbsp;&nbsp;If database or tables already exist you can <b>'Drop Database'</b> to restart.&nbsp;&nbsp;Another file can be used but it must be in the <b>FASTA format</b> and <b>.txt</b> extension.
							</p>
						    <input class="fsiz" type="text"  onclick="clearInput()" name="fname" value="Input File Name Here"/>
							<div class="aButton2" type="button"  onclick="valInput()">Verify File and Start Database Build</div>
							<div class="aButton2" type="button" onclick="dropDb()">Drop Database</div>
					</form>
							
				</div>
						
				</div>
				<div id="motifsel" >
				    <div id="aFormContainer">
					<form id="aminocodes">
						<p>Select below the first and last letter codes for minimotif sequence you
							want to search.  (e.g. P and G for Px.....xG where x is any other amino acid code).
						</p>

						<select id="am1" name="am1" class="fsiz" >
						  <option value="G">G - Glycine</option>
						  <option value="A">A - Alanine</option>
						  <option value="V">V - Valine</option>
						  <option value="L">L - Leucine</option>
						  <option value="I">I - Isoleucine</option>
						  <option value="M">M - Methionine</option>
						  <option value="F">F - Phenylalanine</option>
						  <option value="W">W - Tryptophan</option>
						  <option value="P">P - Proline</option>
						  <option value="S">S - Serine</option>
						  <option value="T">T - Threonine</option>
						  <option value="C">C - Cysteine</option>
						  <option value="Y">Y - Tyrosine</option>
						  <option value="N">N - Asparagine</option>
						  <option value="Q">Q - Glutaminie</option>
						  <option value="D">D - Aspartic Acid</option>
						  <option value="E">E - Glutamic Acid</option>
						  <option value="K">K - Lysine</option>
						  <option value="R">R - Arginine</option>
						  <option value="H">H - Histidine</option>
						</select><div id="mobX">X....X</div>
						<select id="am2" name="am2" class="fsiz">
						  <option value="G">G - Glycine</option>
						  <option value="A">A - Alanine</option>
						  <option value="V">V - Valine</option>
						  <option value="L">L - Leucine</option>
						  <option value="I">I - Isoleucine</option>
						  <option value="M">M - Methionine</option>
						  <option value="F">F - Phenylalanine</option>
						  <option value="W">W - Tryptophan</option>
						  <option value="P">P - Proline</option>
						  <option value="S">S - Serine</option>
						  <option value="T">T - Threonine</option>
						  <option value="C">C - Cysteine</option>
						  <option value="Y">Y - Tyrosine</option>
						  <option value="N">N - Asparagine</option>
						  <option value="Q">Q - Glutaminie</option>
						  <option value="D">D - Aspartic Acid</option>
						  <option value="E">E - Glutamic Acid</option>
						  <option value="K">K - Lysine</option>
						  <option value="R">R - Arginine</option>
						  <option value="H">H - Histidine</option>
						</select>
							<select id="qu" name="qu">
							  <option value="X">Select which Search that you want to do.</option>
							  <option value="0">Get All Accession Numbers for chosen miniMotif</option>
							  <option value="1">Get All Motif Instances in All Proteins</option>
							  <option value="2">Get Start Positions of selected Motif in All Proteins</option>
							  <option value="3">Get Number of Motifs for Each Protein</option>
							  <option value="4">Get All Species Names in which selected Motif occurs</option>
							  <option value="5">Get Average Length of All Proteins for the selected Motif</option>
							</select>
						</br><input id="subButton" type="button" class="fsiz show-page-loading-msg" data-textonly="false" data-textvisible="true"  data-msgtext=""
						data-inline="true" onclick="doSearch()" value="Submit Search"/></br></br>
						</br><input id="clearButton" type="button" class="fsiz show-page-loading-msg" data-textonly="false" data-textvisible="true"  data-msgtext=""
						data-inline="true" onclick="clearOut()" value="Clear Output"/></br></br>
					</form>
				  </div>	
					
					
					
				</div>
				<div id="wait"></div>
			    
		</div>

		
		<script type = "text/javascript" >       
            
        </script>          