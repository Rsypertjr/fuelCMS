<?php
class OthelloAndMobile extends CI_Controller {
    
    
	public function __construct()
	{
	
	        parent::__construct();  
	        
	        $CI =& get_instance();    //FUEL-CNS base object
            $CI->load->library('form_validation');
	        
            //  LOAD HELPERS AND LIBRARIES
            $this->load->helper('url'); 
            $this->load->helper('html');
            $this->load->helper('file');
            $this->load->helper('form');
            $this->load->helper('cookie');
			$this->load->helper('download');
			$this->load->library('email');
			

			 
			
			/******************* DESKTOP APP HEADER VARIALBES  *************************************************/
			/*****************************************************************************************************/
			/* BASE URL Dependent variables that need explicit change for Production.  css_path in file config/config.php needs to be   */
			/* changed to Production Host  */
		    $this->data['mobile'] = 'index.php?app=mobile';  // change from https to http
			  // $this->data['indexTwo'] =  css_path('index2');
            $this->data['indexTwo'] =  'index2';
			$this->data['homePage'] = '';
			//$this->data['prodSite'] = C9_PRODUCTION_css_path_SSL;
			//$this->data['devSite'] = C9_DEVELOPMENT_css_path_SSL;
			//$this->data['prodSite'] = css_path('../ci');
			$this->data['newOrominerXML'] = css_path('xml/oro_xml4.xml');
			$this->data['orominerHistoXML'] = css_path('xml/oro_xml.xml');
			
			//  XML File for NEW OROMINER and Orominer with Histological Info 
			// Link to generate database for MiniMotif App 
		    $this->data['getMotifData'] = "getMotifs/getMotifs.php?";
		    
		   
			/* CSS File LINKS   */
	        $this->data['othello2CSS'] = css_path('othello2CSS.css');	
			$this->data['livingInLVCSS'] = css_path('livingInLVCSS.css');
			$this->data['frontCSS'] = css_path('frontCSS.css');
			$this->data['miniMotifCSS'] = css_path('miniMotifCSS.css');
			$this->mdata['miniMotifCSS'] = css_path('miniMotifCSS.css');
			$this->data['newOrominerCSS'] = css_path('newOrominerCSS.css');
			$this->data['orominerHistoCSS'] = css_path('orominerHistoCSS.css');
			$this->data['othelloCSS'] = css_path('othelloCSS.css');
			$this->data['codeDevCSS'] = css_path('codeDevCSS.css');
			$this->data['techWriterCSS'] = css_path('techWriterCSS.css');
			$this->data['resumesCSS'] = css_path('resumesCSS.css');
			$this->data['headerCSS'] = css_path('headerCSS.css');
			$this->data['showPDFCSS'] = css_path('showPDFCSS.css');
			$this->data['footerCSS'] = css_path('footerCSS.css');
			$this->data['emailFormCSS'] = css_path('emailFormCSS.css');
			$this->data['webTechCSS'] = css_path('webTechCSS.css');
            $this->data['jqueryloc']= js_path('jquery-1.10.2.js');
            $this->data['jqfile']= js_path('global.js');
            $this->data['jqUiCSS'] = css_path('excite-bike/jquery-ui-1.10.4.custom.css');
			$this->data['jqJS'] = js_path('jquery-1.10.2.js');
			$this->data['jqUiJS'] = js_path('jquery-ui-1.10.4.custom.js');
		
			// For Header images Storage for desktop
			$this->data['headerImages'] = array();
			
			$this->data['imgfile2']= img_path('engImg.jpg');
			$this->data['upArrow'] = img_path('upArrow.gif');
		
		    //  Initial App Settings
			$this->data['whichPage'] = "";
			$this->data['appType'] = "desktop";
			$this->data['currentScrollPos'] = 0;
			$this->data['appType2'] = "default";
			$this->data["hfSwitch"] = 'off';
			/************************************ End Of DESKTOP APP Header Variables *******************************/
			
			/******************* Variable for FUEL-CMS Page rendering **********************************************/
			  // generic global page variables used for all pages
            $this->vars = array();
            
             //JavaScript Files
            $this->vars['jqUiCSS'] = css_path('excite-bike/jquery-ui-1.10.4.custom.css');
            $this->vars['jqJS'] = js_path('jquery-1.10.2.js');
            $this->vars['jqUiJS'] = js_path('jquery-ui-1.10.4.custom.js');
            $this->vars['layout'] = 'main';
            $this->vars['page_title'] = fuel_nav(array('render_type' => 'page_title', 'delimiter' => ' : ', 'order' => 'desc', 'home_link' => 'Home'));
            $this->vars['meta_keywords'] = '';
            $this->vars['meta_description'] = '';
            $this->vars['js'] = array();
            $this->vars['css'] = array();
            
			$this->vars['mobileSwitchCSS'] = css_path('mobileSwitchCSS.css');
            $this->vars['body_class'] = uri_segment(1).' '.uri_segment(2);
            $this->vars['mobile'] = '';
            $this->vars['appType'] = "desktop";
            $this->vars['indexTwo'] = 'index2';
            
            //Othello App Variable
            $this->vars['othelloAjaxMode'] = 'no';
            $this->vars["display1"] = "none";
            $this->vars["display2"] = "block";
            $this->vars["display3"] = "block";
            $this->vars["display4"] = "none";
            $this->vars['homePage'] = 'front';
            $this->vars["flag"] = 'no'; 
            $this->vars["message"] = "<span id='prbutton' style='color:purple'>**Press button to Play!**<br/>Your Symbol is 'O'</span>";
            $this->vars["symbol"] = "O";          
            
            
            //Page or View Variables
            $pages['othello/:any'] = array('view' => 'othello/othello');
            
            
            
            //JavaScript Files
           
            $this->vars['jqueryloc']= js_path('jquery-1.10.2.js');
            $this->vars['jqfile']= js_path('global.js');
            
            //XML Files
            $this->vars['orominer1XML'] = img_path('oro_xml1.xml');
            $this->vars['orominer2XML'] = img_path('oro_xml2.xml');
            
            // CSS Files
            $this->vars['whichPage'] = 'front'; // which exhibit page is shown
            $this->vars['hfSwitch'] = 'off';  // off for desktop header, on for mobile header
            $this->vars['headerCSS'] = css_path('headerCSS.css');
            $this->vars['footerCSS'] = css_path('footerCSS.css');
            $this->vars['livingInLVCSS'] = css_path('livingInLVCSS.css');
            $this->vars['frontCSS'] = css_path('frontCSS.css');
            $this->vars['miniMotifCSS'] = css_path('miniMotifCSS.css');
            $this->vars['orominer1CSS'] = css_path('orominer1CSS.css');
            $this->vars['orominer2CSS'] = css_path('orominer2CSS.css');
            $this->vars['othello2CSS'] = css_path('othello2CSS.css');
            $this->vars['othelloCSS'] = css_path('othelloCSS.css');
            $this->vars['techWriterCSS'] = css_path('techWriterCSS.css');
            $this->vars['resumesCSS'] = css_path('resumesCSS.css');
            $this->vars['showPDFCSS'] = css_path('showPDFCSS.css');
            $this->vars['codeDevCSS'] = css_path('codeDevCSS.css');
            $this->vars['emailFormCSS'] = css_path('emailFormCSS.css');
            $this->vars['webTechCSS'] = css_path('webTechCSS.css');
            $this->vars['showPDFCSS'] = css_path('showPDFCSS.css');
            $this->vars['mobileSwitchCSS'] = css_path('mobileSwitchCSS.css');
            
            $this->vars['mobileCSS'] = css_path('mobileCSS.css');
            $this->vars['jqMobileCSS1'] = base_url('assets/css/jquery.mobile.icons.min.css');	
            $this->vars['jqMobileCSS2'] = base_url('assets/css/mobile-bike.min.css');
            
            //Images
            $this->vars['codeStorageImage'] = img_path('codestorageimage.jpg');
            $this->vars['websiteconstruction'] = img_path('websiteconstruction.jpg');
            $this->vars['dataanalysis'] = img_path('dataanalysis.jpg');
            $this->vars['wordpressimage'] = img_path('wordpressimg.jpg');
            $this->vars['technologyideas'] = img_path('technologyideas.jpg');
            $this->vars['technicalwritingimage'] = img_path('technicalwritingimage.jpg');
            $this->vars['techwritingimg'] = img_path('techwritingimg.jpg');
            $this->vars['techWriter'] = img_path('techWriter.jpg');
            $this->vars['mobiledevelopmentimage'] = img_path('mobiledevelopmentimg.jpg');
            $this->vars['othellogameimage'] = img_path('othellogameimg.jpg');
            $this->vars['jobdone'] = img_path('jobdone.jpg');
            $this->vars['engProcessSpec'] = img_path('engProcessSpec.jpg');
            $this->vars['explainTechnology'] = img_path('explainTechnology.jpg');
            $this->vars['myFace'] = img_path('myFace.jpg');
            $this->vars['upArrow'] = img_path('upArrow.gif'); 
            $this->vars['softwareTechWriting'] = img_path('softwareTechWriting.gif');
            $this->vars['rubyRailsImage'] = img_path('rubyRailsimg.jpg');
            $this->vars['laravelMVC'] = img_path('laravelMVC.jpg');
            $this->vars['vegas1'] = img_path('vegas/vegas1.jpg');
            $this->vars['vegas2'] = img_path('vegas/vegas2.jpg');
            $this->vars['vegas3'] = img_path('vegas/vegas3.jpg');
            $this->vars['vegas4'] = img_path('vegas/vegas4.jpg');
            $this->vars['vegas5'] = img_path('vegas/vegas5.jpg');
            $this->vars['vegas6'] = img_path('vegas/vegas6.jpg');
            $this->vars['vegas7'] = img_path('vegas/vegas7.jpg');
            $this->vars['vegas8'] = img_path('vegas/vegas8.jpg');
            $this->vars['spiral'] = img_path('spiral.gif');
            $this->vars['worksImg'] = img_path('worksImg.jpg');
            $this->vars['mechEngImage2'] = img_path('mechEngImage2.jpg');
            $this->vars['topLabel'] = img_path('topLabel.jpg');
            $this->vars['engImg'] = img_path('engImg.jpg');
            $this->vars['compSciImage'] = img_path('compSciImage.jpg');
            $this->vars['mathhonorimg'] = img_path('mathhonorimg.jpg');
            $this->vars['procprojengimg'] = img_path('procprojengimg.jpg');
            $this->vars['doorHandle'] = img_path('doorhandle');
            $this->vars['bigpic'] = 'my_bigpic.gif';
            
            // Othello Images
            $this->vars['oimg']= img_path('oimg.jpg');
            $this->vars['ximg']= img_path('ximg.jpg');
            $this->vars['url'] = '';

			
			/*****************************************************************************************************/
		
		
			/********************Othello Game Header variables  ****************/
            
            $this->othello_data['indexTwo'] = 'index2';
            $this->othello_data['othello'] =  'othello';
			$this->othello_data['homePage'] = '';
            $this->othello_data["boardRows"] = array( "........", "........", "........", "...XO...", "...OX...", "........", "........", "........");

            $this->othello_data["twoDimBoard"] = array();
            $this->othello_data["board"] = "";
            
            $this->othello_data["doc"] = new DOMDocument();
            $this->othello_data["doc"]->validateOnParse = true;
          
          
            // Initialize Game Tables
            $this->othello_data["myinitboard"] = $this->load->view("othello/myinitboard","",TRUE);
        
            
            //Try loading from Database
            $GLOBALS['myBoard'] = $this->othello_data["myinitboard"];
            $this->othello_data["doc"]->loadHTML($this->othello_data["myinitboard"]);
            $this->othello_data["x"] = new DOMXPath($this->othello_data["doc"]);
            
            $this->othello_data["cells"] = array(); 
            $this->othello_data["cellArray"] = array();
            for($i=1;$i<=8;$i++)
                {
                        $rows = $this->othello_data["doc"]->getElementById("row".$i);
                        $this->othello_data["cells"][$i-1] = $rows->getElementsByTagName("div");
                      $j= 0;
                     foreach($this->othello_data["cells"][$i-1] as $cell)
                            {
                                $this->othello_data["cellArray"][$i-1][$j] = $cell->nodeValue;
                                $j++;
                            }                  
                }
                
            $this->othello_data["rows"] = array($this->othello_data["x"]->query("//*[@id='row1']")->item(0),
                                                             $this->othello_data["x"]->query("//*[@id='row2']")->item(0),
                                                             $this->othello_data["x"]->query("//*[@id='row3']")->item(0),
                                                             $this->othello_data["x"]->query("//*[@id='row4']")->item(0),
                                                             $this->othello_data["x"]->query("//*[@id='row5']")->item(0),
                                                             $this->othello_data["x"]->query("//*[@id='row6']")->item(0),
                                                             $this->othello_data["x"]->query("//*[@id='row7']")->item(0),
                                                             $this->othello_data["x"]->query("//*[@id='row8']")->item(0)
                                                         );

            $this->othello_data["flipSpaces"] = array();

            $this->othello_data["possibleMoves"] = array();
            //$this->othello_data["emptySpaces"] = array();
        
            $this->othello_data["message"] = "";
        
            $this->othello_data["symbol"] = 'O';
          
            $this->othello_data["twoDimBoard"] = $this->othello_data["cellArray"];
          
            // Images
           	$this->othello_data['ximg']= img_path('ximg.jpg');
			$this->othello_data['oimg']= img_path('oimg.jpg');
           
           $this->othello_data['css'] = css_path('othello2CSS.css');
		   $this->othello_data['othelloAjaxMode'] = 'no';
		   $this->othello_data['othelloIndexTwo'] = 'index2';
           
           // Clear Boards in Othello Game
           $this->printBoard($this->othello_data["twoDimBoard"],$this->othello_data["cells"],$this->othello_data["doc"]);
		   /**********************  End Othello Game Header variables  */
		   
		   
		   
		      /***********************************  MOBILE APP HEADER VARIABLES   **************************************/	
			//links for Mobile site
		
		
			$this->vars['miniMotif_mobile']= base_url('index.php?app=mobile&appl=miniMotif&apType=mobile');
			$this->vars['codeDevTech_mobile'] = base_url('index.php?app=mobile&appl=codetech&apType=mobile');
			$this->vars['othello_mobile'] = base_url('index.php?app=mobile&appl=othello&apType=mobile');
			$this->vars['orominer_mobile'] = base_url('index.php?app=mobile&appl=orominer&apType=mobile');
			$this->vars['email_page'] = base_url('index.php?app=mobile&appl=email1&apType=mobile');
			$this->vars['oroHist_mobile'] = base_url('index.php?app=mobile&appl=oroHist&apType=mobile');
			$this->vars['livingInVegas_mobile'] = base_url('index.php?app=mobile&appl=livingInVegas&apType=mobile');
			$this->vars['resume_mobile'] = base_url('index.php?app=mobile&appl=resume&apType=mobile');
			$this->vars["hfSwitch"] = 'off';
			
		
		    // mobile app css file
			$this->vars['showMobilePDFCSS'] = css_path('showPDFCSS.css');  
			$this->vars['codeDevMobileCSS'] = css_path('codeDevMobileCSS.css');
			$this->vars['othelloMobileCSS'] = css_path('othelloMobileCSS.css');
			$this->vars['mobileCSS'] = css_path('mobileCSS.css');
			
			$config2['hostname'] = "localhost";
			$config2['username'] = "rlswor5_richard";
			$config2['password'] = "syp3rt";
			$config2['database'] = "rlswor5_app_images";
			$config2['dbdriver'] = "mysql";
			$config2['dbprefix'] = "";
			$config2['pconnect'] = FALSE;
			$config2['db_debug'] = TRUE;
			$config2['cache_on'] = FALSE;
			$config2['cachedir'] = "";
			$config2['char_set'] = "utf8";
			$config2['dbcollat'] = "utf8_general_ci";

			$this->load->model('appimages_model','',$config2);
			$this->appimages_model->initialize();
			
			
			/********************************  End Of MOBILE APP HEADER Variables   *********************/
            
            $vars['headAndFoot'] = 'yes';
		   
		  
					
    }
    

    
    
function index($app='desktop')
{
		
						$this->data['whichPage'] = "front";
					
					

	
}


/********************* PROCESSOR FOR DESKTOP AND MOBILE APP SELECTIONS **/

function mobile(){
    	
				//Get header image links from model to global array variable
			//	$this->mdata['headerImages'] = $this->appimages_model->get_desktop_images();
			
				$this->load->view('mobile/mobileHeader.php', $this->vars);
				$this->load->view('mobile/frontPageMobile.php',$this->vars);
				$this->load->view('mobile/mobileFooter.php');
				
}



function othello(){
    
     $this->vars['pageTitle'] = "Othello Game"; 
         
         
     // Save Initialized Board to File
	 $this->saveBoard();
    
	 $this->othello_data["message"] ="<span id='prbutton'>**Press button to Play!**<br/>Your Symbol is ".$this->othello_data["symbol"]."</span>"; 
							// Display Board
	 $this->othello_data["flag"] = 'no';  
	 // Initialize Othello Player Input Board
     $this->othello_data["display1"] = "none";
     
     $this->othello_data["display2"] = "block";
     $this->othello_data["display3"] = "block";
     $this->othello_data["display4"] = "none";
	
	

       // Send to header to load correct CSS files
	 $this->data['whichPage'] = "othello";
     $this->vars['whichPage'] = 'othello';
	//Load header, Page, and Footer
  	$this->load->view('_blocks/header2',$this->vars); 
	$this->load->view('othello/othello',$this->othello_data);
	$this->load->view('othello/myinitboard');
	$this->load->view('othello/footer'); 
	//$this->load->view('_blocks/footer'); 
}




private function index2($mobileitem = null, $applicType = null)
        {  // $mobileitem value from index function when application type is 'mobile'
		
		     // option selected by posting from Header to index2 function by (itemchoice,itemchoice2) input fields in footer
		     // when application type is 'desktop'. $desktopItem1 and $desktopItem2 capture both header and footer view selections
		     
		     $desktopItem1 = $this->input->post('itemchoice');
			 $desktopItem2 = $this->input->post('itemchoice2');
           
			 $itemchoice = null;
			 
		     if($desktopItem1 !="none" && $desktopItem2=='none')
				$mode = $itemchoice = $this->input->post('itemchoice');
				
		     if($desktopItem2!='none' && $desktopItem1=='none')
				$mode = $itemchoice2 = $this->input->post('itemchoice2');
		 
		     $othelloMode = '';

			 // Posting from Othello Game for play options
		     $submit = $this->input->post('submit');
			 if($submit == "Press to Play" || $submit == "Press to Continue" || $submit == "Submit This Move")
				 $mode = 'playbegin';
		
	
			
			// Section for Selection of app, app mode, or document 
             if($mode == 'othello' || $mode == 'othelloAjax' || $mode == 'Game')
				{       
			            
			            $isAjax = '';	
			            
						 $this->othello_data["message"] ="<span id='prbutton'>**Press button to Play!**<br/>Your Symbol is ".$this->othello_data["symbol"]."</span>"; 
							// Display Board
						 $this->othello_data["flag"] = 'no';  
					
	              	     // Send to header to load correct CSS files
						 $this->data['whichPage'] = "othello";
						 
						//Load header, Page, and Footer
					   $this->load->view('game/othelloGame',$this->data);  //for Ajax mode only update board
						$this->load->view('othello/othello',$this->othello_data);
						$this->load->view('othello/myinitboard');
						$this->load->view('othello/footer'); 
						$this->load->view('_blocks/footer'); 
				}

		
        }
    
 
    public function playBegin(){
    
                 $this->othello_data['headAndFoot'] = 'yes';
              
                 if(isset($_POST["hf"])){
                     $hf = $this->input->post('hf');
                     $this->othello_data['headAndFoot'] = $hf;
                     
                     if($hf == 'no')
                        $this->othello_data['headAndFoot'] = 'no';
                     else if($hf == 'noSM')
                        $this->othello_data['headAndFoot'] = 'noSM';
                     
                 }
                
	          
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('xvalue', 'X Value', 'required');
                $this->form_validation->set_rules('yvalue', 'Y Value', 'required');
                
                $x = $this->input->post('xvalue');
                $y = $this->input->post('yvalue');
                $this->othello_data["flag"] = 'no'; 
				
				 
                 if($this->form_validation->run() === FALSE)
                     {
                         // Display Last Board if Errors
                         $this->load->view('othello/othello',$this->othello_data);
                         $this->load->view('othello/myboard');
                         $this->load->view('othello/footer');
                 }
                 
                
              else if( $this->input->post('submit') == 'Press to Play' )
                      {    
                              $this->othello_data["display1"] = "block";
                              $this->othello_data["display2"] = "none";
                              $this->othello_data["display3"] = "block";
                              $this->othello_data["display4"] = "none";
                              
                              $symbol = $this->othello_data["symbol"];
                              
                              $this->othello_data["flag"] = 'no';
                              //$this->othello_data["message"]="Symbol - '".$symbol."'. -- TYPE or "."<span id='clkspace'>**Click A Space**</span>";
                              $this->othello_data["message"]="Your Symbol is '".$symbol."'.&nbsp;&nbsp;TYPE Above or "."<span id='clkspace'>**Click A Space**</span> Below";
                              
                              $this->printBoard($this->othello_data["twoDimBoard"],$this->othello_data["cells"],$this->othello_data["doc"]);	// Generate Board to html file
                              // Send to header to load correct CSS files
							  $this->data['whichPage'] = "othello";
							  //Load header, Page, and Footer
							   //$this->load->view('game/othelloGame',$this->data);  //for Ajax mode only update board
								$this->load->view('othello/othello',$this->othello_data);
								$this->load->view('othello/myinitboard');
								$this->load->view('othello/footer'); 
                              
                     }
             else if( $this->input->post('submit') == 'Press to Continue' )
                      {
                              if($this->othello_data["symbol"]== 'X')
                                        $this->othello_data["symbol"]= 'O';
                              else if($this->othello_data["symbol"]== 'O')
                                        $this->othello_data["symbol"]= 'X';
                             
                              $this->com_player();         
                       
                  }  
            else if($this->input->post('submit') == 'Submit This Move')
                      {    
							$this->playermove($x,$y,$this->input->post('hid') );
                      }      
          
      
        
        }
    
    
        


  public function check()
	{
        header('Content-type: application/x-javascript');
        function execute() 
        {
            jQFunction();
        }
        execute();

    }  
    

    
   public function getboardInverse()
   {
   	        $file = "";
           	$file = $this->selectTable('theBody2'); 
		   
			$myboard = $file;
			//$this->console_log($myboard);
			$this->updateMyBoard($myboard);
		  
            //$myboard= $this->load->view("othello/myboard","",TRUE);
            $doc = new DOMDocument();
            $doc->loadHTML($myboard);
         
            $cells= array(); 
            $cellArray = array();
            for($i=1;$i<=8;$i++)
                {
                       $rows = $doc->getElementById("row".$i);
                       $cells = $rows->getElementsByTagName("div");
                      $j= 0;
                    foreach($cells as $cell)
                          {
                            $cellArray[$j][$i-1] = $cell->nodeValue;          //Flip Board Indices between players
                                                                                                     // Because computer player algorithm is nested loop          
                            
                           $j++;
                        }                  
            }   
       
            return $cellArray;
       }
    
   public function com_player()
       {
        // Retrieving the board
           $this->othello_data["twoDimBoard"] = $this->getboardInverse();
           $name = "boardArray";
 
        //  print_r($this->othello_data["twoDimBoard"]); 
        
          //Computer is Player X
           $this->othello_data["symbol"]= 'X';
           
           
           //Calculating Possible Moves
           $this->othello_data["emptySpaces"] = $this->getEmptySpaces($this->othello_data["twoDimBoard"]);
           $this->othello_data["possibleMoves"] = $this->getPossibleMoves($this->othello_data["emptySpaces"],$this->othello_data["symbol"],$this->othello_data["twoDimBoard"]);  // Get Open Spaces on Board for moves
           
            if(count($this->othello_data["possibleMoves"]) > 0)   // Check If good moves exist
            {
              foreach($this->othello_data["possibleMoves"]  as $move)
                    {   
					  $x = $move[0];
					  $y = $move[1];
					  $this->othello_data["symbol"] = $move[2];
					  $symbol =  $this->othello_data["symbol"];
					  
					  //Get X Board Spaces
					  $oflipSpaces = $this->verifyMove($x,$y,$symbol,$this->othello_data["twoDimBoard"]);
					  //print_r($oflipSpaces);
					   
					  if(count($oflipSpaces) > 0)
								{
									$oflipSpaces = array_slice( $oflipSpaces ,1, (count( $oflipSpaces ) -1)   );
									//print_r($oflipSpaces);
								}
					 
					 
					  $this->othello_data["twoDimBoard"] = $this->updateGameBoard($oflipSpaces,$this->othello_data["twoDimBoard"]); // Update Game Board	
					  $this->printBoard($this->othello_data["twoDimBoard"],$this->othello_data["cells"],$this->othello_data["doc"]);	// Generate Board to html file
					
					
					
					  //Possible Computer Moves
					   $noComputerMoves = false;
        			   $noPlayerMoves = false;
        			   $numPlayerMoves = 0;
           
			           $possibleMoves = $this->othello_data["possibleMoves"] = $this->getPossibleMoves($this->othello_data["emptySpaces"],'X',$this->othello_data["twoDimBoard"]);  // Get Open Spaces on Board for moves
			           //print_r(' Computer: '.count($possibleMoves)); 
			           if(count($possibleMoves) <= 0)
			        		$noComputerMoves = true;
			           
			           //Possible Player Moves
			           $possibleMoves = $this->othello_data["possibleMoves"] = $this->getPossibleMoves($this->othello_data["emptySpaces"],'O',$this->othello_data["twoDimBoard"]);  // Get Open Spaces on Board for moves
			           //print_r(' Player: '.count($possibleMoves)); 
			           $numPlayerMoves = count($possibleMoves);
			      
			           if(count($possibleMoves) <= 0)
			             {
			        		$noPlayerMoves = true;
			        	
			             }
           
	                  if($noPlayerMoves){
	                  	
	                  	   // Save Board to File
						  $this->saveBoard();
						  $this->gameOver($noComputerMoves,$noPlayerMoves);
	                	}
	                 else if(!$noPlayerMoves){
	                 							  
						 // Display Board
						  $this->othello_data["display1"] = "block";
						  $this->othello_data["display2"] = "none";
						  $this->othello_data["display3"] = "block";
						  $this->othello_data["display4"] = "none";
		 
						  $symbol = 'O'; // Symbol for human player
						  $this->othello_data["flag"] = 'yes';  
						  $this->othello_data["message"]="Your have ".$numPlayerMoves." Possible Moves'.&nbsp;TYPE Above or "."<span id='clkspace'>**Click**</span> Below";
	 
					    // Send to header to load correct CSS files
						 $this->load->view('othello/othello',$this->othello_data);
						 //$this->load->view('othello/myboard');
					     $this->load->view('othello/myboardDB');
						 $this->load->view('othello/footer'); 
								
						 
					     // Save Board to File
					    $this->saveBoard();
						
				     
					   // Only Process first Move Option, and no comparison of other possible movies													
						return;
	                 }
					
					
					
					
					
								
                  } // end of foreach
                }
              
        }
    
    
    
    public function gameOver($noComputerMoves,$noPlayerMoves){
    	if($noComputerMoves){
    		 $finScore = $this->calculateFinalScore();
			  if($finScore['O'] > $finScore['X'])
					$result = "SHUCKS!! YOU WIN";
			  else
					$result = "HA! I WIN, Since I Have More!";
			  $this->othello_data["message"]= "<span id='prbutton'>!!GAME OVER!! I Can't Move!<br/>The Score is:<br/>O: ".$finScore['O'].' X: '.$finScore['X']."</span><br/>".$result;
			
			   $this->othello_data["display2"] = "none";
			   $this->othello_data["display3"] = "block";
			   $this->othello_data["display4"] = "none";
			   $this->othello_data["display1"] = "none";
    	}
    	
    	if($noPlayerMoves){
    		   $finScore = $this->calculateFinalScore();
              if($finScore['O'] > $finScore['X'])
                    $result = "SHUCKS!! YOU WIN";
              else 
                    $result = "HA!  HA!  I WIN!!!!!!!";
                    
              $espaces = $this->othello_data["emptySpaces"] = $this->getEmptySpaces($this->othello_data["twoDimBoard"]);     
              if(count($espaces) > 0)
                  $result = "The Highest Score Wins, Which Means <br/><span id='prbutton2'>".$result."</span>";
             
              $this->othello_data["message"]= "<span id='prbutton'>!!GAME OVER!! You Can't Move!<br/>The Score is:    O:".$finScore['O'].' X:'.$finScore['X']." </span><br/>".$result;
              $this->othello_data["display1"] = "none";
              $this->othello_data["display2"] = "none";
              $this->othello_data["display3"] = "block";
              $this->othello_data["display4"] = "none";
    	}
    	
    	 //Display Board
		 $this->load->view('othello/othello',$this->othello_data);
	     //$this->load->view('othello/myboard');
	     $this->load->view('othello/myboardDB');
		 $this->load->view('othello/footer');
    	
    }
    
    
    public function saveBoard(){
    	// Save Board to File
	   $file = "";
	  
	   $file = $this->selectTable('myBoard');
	   $GLOBALS['myBoard'] = $file; 
	   //$this->console_log($file);
	   $this->updateTheBody2($file);
    	
    }
    
  
	public function playermove($x,$y,$flag)
	{        

			$this->load->helper('form');
            if($flag == 'yes')
                {
                        // Retrieving Board
                       $this->othello_data["twoDimBoard"] = $this->getboardInverse();
                }
       
            $noComputerMoves = false;
            $noPlayerMoves = false;
            $symbol = $this->othello_data["symbol"] = 'O';  // Symbol for human player
            
            //Get spaces on board that need to be updated
            $oflipSpaces = $this->verifyMove($x,$y,$symbol,$this->othello_data["twoDimBoard"]); 
            if(count($oflipSpaces) > 0 )
               {
                    $oflipSpaces = array_slice( $oflipSpaces ,1, (count( $oflipSpaces ) -1)   );
               }
               
               
            if(count($oflipSpaces)>0)
              {    
               $this->othello_data["twoDimBoard"] = $this->updateGameBoard($oflipSpaces,$this->othello_data["twoDimBoard"]); // Update Game Board	
               
              // Generate Board
              $this->printBoard($this->othello_data["twoDimBoard"],$this->othello_data["cells"],$this->othello_data["doc"]);	// Generate Board to html file
         
               // Determine if any moves left for Computer Player  
              $this->othello_data["emptySpaces"] = $this->getEmptySpaces($this->othello_data["twoDimBoard"]);
              // print_r($this->othello_data["emptySpaces"]);
           
	           //Possible Computer Moves
	           $possibleComputerMoves = $this->othello_data["possibleMoves"] = $this->getPossibleMoves($this->othello_data["emptySpaces"],'X',$this->othello_data["twoDimBoard"]);  // Get Open Spaces on Board for moves
	           //print_r(' Computer: '.count($possibleComputerMoves)); 
	           if(count($possibleComputerMoves) <= 0)
	        		$noComputerMoves = true;
           
	           //Possible Player Moves
	           $possiblePlayerMoves = $this->othello_data["possibleMoves"] = $this->getPossibleMoves($this->othello_data["emptySpaces"],'O',$this->othello_data["twoDimBoard"]);  // Get Open Spaces on Board for moves
	           //print_r(' Player: '.count($possiblePlayerMoves)); 
           
	           if(count($possiblePlayerMoves) <= 0)
	        		$noPlayerMoves = true;
	           
	           if($noComputerMoves || $noPlayerMoves)  //Stop Game when No Computer Moves Left
	                {
	                    
	                    //print_r($this->othello_data["twoDimBoard"]);
	                    $this->saveBoard();
	                    $this->gameOver($noComputerMoves,$noPlayerMoves);
	                  
	                }
            
          
          
              if(!$noComputerMoves && !$noPlayerMoves){
            
    		                $this->othello_data["display1"] = "none";
    		                $this->othello_data["display2"] = "block";
    		                $this->othello_data["display3"] = "none";
    		                $this->othello_data["display4"] = "block";
    		
    						//$this->othello_data["cheight"] = 75;
    		                $this->othello_data["message"] ="<span id='prbutton'>This is Your move with symbol: '".$this->othello_data["symbol"]."'.<br/>**Press Button for Computer Move**</span>"; 
    		                $this->othello_data["flag"] = 'no';
    						
    		                 // Display Board
    						$this->load->view('othello/othello',$this->othello_data);
    						//$this->load->view('othello/myboard');
    						$this->load->view('othello/myboardDB'); 
    						$this->load->view('othello/footer'); 
    		                      
    		                // Save Board to File
    		                $this->saveBoard();
                	}
                }  
            
            
          if(count($oflipSpaces) <= 0 )
				{
				    
				    $this->othello_data["emptySpaces"] = $this->getEmptySpaces($this->othello_data["twoDimBoard"]);
                   // print_r($this->othello_data["emptySpaces"]);
                   
                   //Possible Player Moves
                   $possibleMoves = $this->othello_data["possibleMoves"] = $this->getPossibleMoves($this->othello_data["emptySpaces"],'O',$this->othello_data["twoDimBoard"]);  // Get Open Spaces on Board for moves
                   //print_r(' Player: '.count($possibleMoves)); 
                   $numPlayerMoves = count($possibleMoves);
                 
           
				    $this->othello_data["flag"] = 'yes'; 
                 	$this->othello_data["message"]= "<span id='prbutton3'>!!BAD MOVE-TRY AGAIN!! You have ".$numPlayerMoves." Possible Moves!</span>";
				    $this->othello_data["display1"] = "block";
			        $this->othello_data["display2"] = "none";
				    $this->othello_data["display3"] = "block";
				    $this->othello_data["display4"] = "none";
				    
				  	 $this->load->view('othello/othello',$this->othello_data);
				     //$this->load->view('othello/myboard');
				     $this->load->view('othello/myboardDB');
					 $this->load->view('othello/footer');
			   }
		   
          
           
           
		   
  
}
   


public function printBoard($twDimBoard,$cells,$dc)
{
	for($i=0;$i<8;$i++)
		{
                $j=0;
                foreach($cells[$i] as $cell)
                    {
                    $cell->nodeValue =  $twDimBoard[$j][$i];  //Transpose rows to columns
                    $this->othello_data["cellArray"][$i][$j] = $twDimBoard[$i][$j]; 
                    $j++;
                }
        }
        
        $this->othello_data["twoDimBoard"] = $this->othello_data["cellArray"];
        $thebody = $dc->getElementById('gboard');
		//file_put_contents("application/views/othello/myboard.php",$dc->saveHTML($thebody));
		$dcHTML = $dc->saveHTML($thebody);
		$this->updateMyBoard($dcHTML);
		$GLOBALS['myBoard'] = $this->selectTable('myBoard');
		//print_r($GLOBALS['myBoard']);
		
}	
 
   
public function message($to = 'World')
        {
            echo "Hello {$to}!".PHP_EOL;
        }
    
    
public function getTwoDimBoard($boardRows)
    {
           $boardRowArr = array();
            $twoDBoard = array();
            for( $i=0;$i < 8;$i++)
                {
                    $boardRowArr = str_split($boardRows[$i],1);
                    
                    //print_r($boardRows[$i]);
                    for( $j=0;$j<count($boardRowArr);$j++)
                        {
                            $twoDBoard[$i][$j] = $boardRowArr[$j];
                            
                        }
                }
                return $twoDBoard;  
    }
    

public function getTwoDimBoardSpace($x, $y, $twDimBoard)
       {
            for( $i=0;$i < 8;$i++)
                {
                    for( $j=0;$j<8;$j++)
                        {
                            if($i == $x && $j==$y)
                                return $twDimBoard[$i][$j];
                        }
                }

        }
    
  
public function getEmptySpaces($twDimBoard)
        {
            $emptySpaces = array();
            $count = 0;
            for($i=0;$i<8;$i++)
                {
                    for( $j=0;$j<8;$j++)
                        {
                            if($twDimBoard[$i][$j] == '.')
                                {
                                    $emptySpaces[$count][0]=$i;
                                    $emptySpaces[$count][1]=$j;
                                    ++$count;
                                }
                        }
                }
            return $emptySpaces;
        }
  


public function getPossibleMoves($emptySpaces,$symbol,$twDimBoard)
    {
        
        //echo count($emptySpaces);
        $goodMoves = array();
        $x=0;
        $y=0;
        $cnt = 0;
        //echo count($emptySpaces);
        for($i=0;$i<count($emptySpaces);$i++)
            {
                $x = $emptySpaces[$i][0];
                //
                $y = $emptySpaces[$i][1];
                $flipSpaces= $this->verifyMove($x,$y,$symbol,$twDimBoard); 
                //print_r(count($flipSpaces));
               if(count($flipSpaces) > 1 )
                    {  
                        $goodMoves[$cnt][0]=$x;
                        $goodMoves[$cnt][1]=$y;
                        $goodMoves[$cnt][2]=$symbol;
                        ++$cnt;
                     }
               //print_r($cnt);
            }
           return $goodMoves;
}

  
  
  
// Send 2-d array with the first index being for another array of length 3 containing the x,y,symbol triplet
// This array is built after a move is submitted and several spaces on the board need to be changed (flipped) 
public function updateGameBoard($xyArr,$twDimBoard)
{
	for($i = 0;$i < count($xyArr);$i++)
		{
					$x = $xyArr[$i][0];
					$y = $xyArr[$i][1];
					$symbol = $xyArr[$i][2];
					$twDimBoard = $this->changeGameBoardSpace($x,$y,$symbol,$twDimBoard);
			  
		}
		return $twDimBoard;
}
  
 
 
public function changeGameBoardSpace($x,$y,$symb,$twDimBoard)
	{
			$twDimBoard[$x][$y] = $symb;		
		    return $twDimBoard;
	}
	 
 
  
  


 
public function verifyMove($x,$y,$sym,$twDimBoard)
	{
	    if($sym == 'X')
			{
				$symb = 'X';
				$osymb = 'O';
			}
	    else if($sym == 'O')
			{
				$symb = 'O';
				$osymb = 'X';
			}
		$flipSpaces = array();
		$tempSpaces = array();
		$flipSpaces[0][0] = null;
		$flipSpaces[0][1] = null;
    	$flipSpaces[0][2] = null;

       
		//echo $symb;
		if($this->getGameBoardSpace($x,$y,$twDimBoard) == '.')  // Make sure move is to empty space
				{
					// Verify to the East
					$count = 1;
					$ix = $x;
					$iy = $y;
					$tempSpaces[0][0] = $x;
				    $tempSpaces[0][1] = $y;
				    $tempSpaces[0][2] = $symb;
            
                    if(  ($ix+1)  < 8  )
                        {
                                while($this->getGameBoardSpace(++$ix,$iy, $twDimBoard) == $osymb)
                                    {
                                      $tempSpaces[$count][0] = $ix;
                                      $tempSpaces[$count][1] = $iy;
                                      $tempSpaces[$count][2] = $symb;
                                      $count++;
                                    }
                                if(($count > 1) && ($this->getGameBoardSpace($ix,$iy, $twDimBoard) == $symb))
                                        { 
                                            $tempSpaces[$count][0] = $ix;
                                            $tempSpaces[$count][1] = $iy;
                                            $tempSpaces[$count][2] = $symb;
                                            $flipSpaces = array_merge($flipSpaces,$tempSpaces);
                                        }
                                else
                                    $tempSpaces = null;
						}
						
					 // Verify to the North East
					$count = 1;
					$ix = $x;
					$iy = $y;
					$tempSpaces[0][0] = $x;
				    $tempSpaces[0][1] = $y;
				    $tempSpaces[0][2] = $symb;
						
                     if(    ( ($ix+1)  < 8)  &&  ( ( $iy+1)  < 8)  )
                        {
                            while($this->getGameBoardSpace(++$ix,++$iy, $twDimBoard) == $osymb)
                                { 
                                  
                                  $tempSpaces[$count][0] = $ix;
                                  $tempSpaces[$count][1] = $iy;
                                  $tempSpaces[$count][2] = $symb;
                                  $count++;
                                }
                            if(($count > 1) && $this->getGameBoardSpace($ix,$iy, $twDimBoard) == $symb)
                                    {
                                       
                                        $tempSpaces[$count][0] = $ix;
                                        $tempSpaces[$count][1] = $iy;
                                        $tempSpaces[$count][2] = $symb;
                                        $flipSpaces = array_merge($flipSpaces,$tempSpaces);
                                    }
                            else
                                $tempSpaces = null;
                      }
						
					 // Verify to the North
					$count = 1;
					$ix = $x;
					$iy = $y;
					$tempSpaces[0][0] = $x;
				    $tempSpaces[0][1] = $y;
				    $tempSpaces[0][2] = $symb;
				       
                    if(  ($iy+1)  < 8  )
                        {
                                while($this->getGameBoardSpace($ix,++$iy, $twDimBoard) == $osymb)
                                    {
                                      $tempSpaces[$count][0] = $ix;
                                      $tempSpaces[$count][1] = $iy;
                                      $tempSpaces[$count][2] = $symb;
                                      $count++;
                                }
                            
                              // echo $symb;
                                if(($count > 1) && $this->getGameBoardSpace($ix,$iy, $twDimBoard) == $symb  )  
                                        { 
                                            $tempSpaces[$count][0] = $ix;
                                            $tempSpaces[$count][1] = $iy;
                                            $tempSpaces[$count][2] = $symb;
                                            $flipSpaces = array_merge($flipSpaces,$tempSpaces);
                                        }
                                else
                                    $tempSpaces = null;
                        }
					
					// Verify to the North West
					$count = 1;
					$ix = $x;
					$iy = $y;
					$tempSpaces[0][0] = $x;
				    $tempSpaces[0][1] = $y;
				    $tempSpaces[0][2] = $symb;
                    
                      if(    ( ($ix-1)  > 0)  &&  ( ( $iy+1) < 8)  )
                        {
										
                            while($this->getGameBoardSpace(--$ix,++$iy, $twDimBoard) == $osymb)
                                {
                                  $tempSpaces[$count][0] = $ix;
                                  $tempSpaces[$count][1] = $iy;
                                  $tempSpaces[$count][2] = $symb;
                                  $count++;
                                }
                            if(($count > 1) && ($this->getGameBoardSpace($ix,$iy, $twDimBoard) == $symb))
                                    {
                                        $tempSpaces[$count][0] = $ix;
                                        $tempSpaces[$count][1] = $iy;
                                        $tempSpaces[$count][2] = $symb; 
                                        $flipSpaces = array_merge($flipSpaces,$tempSpaces);
                                    }
                            else
                                $tempSpaces = null;
                        }
					
					
					// Verify to the West
					$count = 1;
					$ix = $x;
					$iy = $y;
					
					$tempSpaces[0][0] = $x;
				    $tempSpaces[0][1] = $y;
				    $tempSpaces[0][2] = $symb;
                    
                      if(  ($ix-1)  > 0  )
                        {
					
                                while($this->getGameBoardSpace(--$ix,$iy, $twDimBoard) == $osymb)
                                    {
                                      $tempSpaces[$count][0] = $ix;
                                      $tempSpaces[$count][1] = $iy;
                                      $tempSpaces[$count][2] = $symb;
                                      $count++;
                                    }
                                if(($count > 1) && ($this->getGameBoardSpace($ix,$iy, $twDimBoard) == $symb))
                                        {
                                            $tempSpaces[$count][0] = $ix;
                                            $tempSpaces[$count][1] = $iy;
                                            $tempSpaces[$count][2] = $symb;
                                            $flipSpaces = array_merge($flipSpaces,$tempSpaces);
                                        }
                                else
                                    $tempSpaces = null;
                            }
						
					// Verify to the South West
					$count = 1;
					$ix = $x;
					$iy = $y;
					$tempSpaces[0][0] = $x;
				    $tempSpaces[0][1] = $y;
				    $tempSpaces[0][2] = $symb;
                             
                             
                      if(    ( ($ix-1)  > 0)  &&  ( ( $iy-1) > 0)  )
                        {
										
                                while($this->getGameBoardSpace(--$ix,--$iy, $twDimBoard) == $osymb)
                                    {
                                      $tempSpaces[$count][0] = $ix;
                                      $tempSpaces[$count][1] = $iy;
                                      $tempSpaces[$count][2] = $symb;
                                      $count++;
                                    }
                                if(($count > 1) && ($this->getGameBoardSpace($ix,$iy, $twDimBoard) == $symb))
                                        {
                                            $tempSpaces[$count][0] = $ix;
                                            $tempSpaces[$count][1] = $iy;
                                            $tempSpaces[$count][2] = $symb; 
                                            $flipSpaces = array_merge($flipSpaces,$tempSpaces);
                                        }
                                else
                                    $tempSpaces = null;
                        }
					
				
			      // Verify to the South 
					$count = 1;
					$ix = $x;
					$iy = $y;
					//echo "x= ".$ix." y= ".$iy." other symb= ".$osymb."</br>";
					
					$tempSpaces[0][0] = $x;
				    $tempSpaces[0][1] = $y;
				    $tempSpaces[0][2] = $symb;
                    
                       if(  ($iy-1)  > 0  )
                        {
                            
                            while($this->getGameBoardSpace($ix,--$iy,$twDimBoard) == $osymb)
                                {
                                  $tempSpaces[$count][0] = $ix;
                                  $tempSpaces[$count][1] = $iy;
                                  $tempSpaces[$count][2] = $symb;
                                  $count++;
                                }
                            if(($count > 1) && ($this->getGameBoardSpace($ix,$iy,$twDimBoard) == $symb))
                                    {
                                        $tempSpaces[$count][0] = $ix;
                                        $tempSpaces[$count][1] = $iy;
                                        $tempSpaces[$count][2] = $symb;
                                        $flipSpaces = array_merge($flipSpaces,$tempSpaces);
                                        
                                    }
                            else
                                $tempSpaces = null;
                        }
                    
			
					// Verify to the South East 
					$count = 1;
					$ix = $x;
					$iy = $y;
					$tempSpaces[0][0] = $x;
				    $tempSpaces[0][1] = $y;
				    $tempSpaces[0][2] = $symb;
                               
                      if(    ( ($ix+1)  < 8)  &&  ( ( $iy-1) > 0)  )
                        {
                                    while($this->getGameBoardSpace(++$ix,--$iy, $twDimBoard) == $osymb)
                                        {
                                          $tempSpaces[$count][0] = $ix;
                                          $tempSpaces[$count][1] = $iy;
                                          $tempSpaces[$count][2] = $symb;
                                          $count++;
                                        }
                                    if(($count > 1) && ($this->getGameBoardSpace($ix,$iy, $twDimBoard) == $symb))
                                            {
                                                  $tempSpaces[$count][0] = $ix;
                                                  $tempSpaces[$count][1] = $iy;
                                                  $tempSpaces[$count][2] = $symb;
                                                  $flipSpaces = array_merge($flipSpaces,$tempSpaces);
                                            }
                                    else
                                        $tempSpaces = null;
                        }
						
						
				if($flipSpaces != null)
					{
						return $flipSpaces; 
					}					
				else
					return null;
			
				}
				else 
					return null;
	}

	 
  
  
 
public function getGameBoardSpace($x, $y, $twDimBoard)
    {
         //echo "<br/> x: ".$x." y: ".$y." sym: ".$twDimBoard[$y][$x];
         if(($x < 0) || ($x >= 8) || ($y<0) || ($y >= 8))
                return '@';
                
        $boardRowArr = array();
       //echo $twDimBoard[$y][$x];
       
        return $twDimBoard[$x][$y];
    } 
  
  
 public function calculateFinalScore()
    {
        $board = $this->getBoardInverse();
        $Ocount = 0;
        $Xcount = 0;
       
        for($i=0;$i<8;$i++)
            for($j=0;$j<8;$j++)
                    {
                            if($board[$i][$j] == 'O')
                                $Ocount += 1;
                            else if($board[$i][$j] == 'X')
                                $Xcount += 1;
                        
                    }
       $finalScore = array('O' => $Ocount,'X' =>$Xcount,);
        return $finalScore;
        
    } 
	        
   function updateInitBoard($initBoard){
            $servername = "localhost";
			$username = "rlswor5_richard";
			$password = "syp3rt";
			$dbname = "rlswor5_fuel_cms";
            
            $conn = mysqli_connect($servername,$username,$password, $dbname);
           // Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			} 
			
			
			$initBoard = base64_encode($initBoard);	
			$sql = 'UPDATE boards SET initBoard = "'.$initBoard.'" WHERE rowNum=1';
			//$this->console_log($sql);
          
            if (mysqli_query($conn, $sql)) {
			    $this->console_log("initBoard Table updated successfully");
			} else {
			    $this->console_log("Error: " . $sql . "<br>" . mysqli_error($conn));
			}
            
            $conn->close();
  }    

  function updateMyBoard($myBoard){
            $servername = "localhost";
			$username = "rlswor5_richard";
			$password = "syp3rt";
			$dbname = "rlswor5_fuel_cms";
            
            $conn = mysqli_connect($servername,$username,$password, $dbname);
           // Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			} 
			
			$myBoard = base64_encode($myBoard);		
			$sql = 'UPDATE boards SET myBoard = "'.$myBoard.'" WHERE rowNum=1';
			$this->console_log(base64_decode($myBoard));
          
            if (mysqli_query($conn, $sql)) {
			    $this->console_log("myBoard Table updated successfully");
			} else {
			    $this->console_log("Error: " . $sql . "<br>" . mysqli_error($conn));
			}
            
            $conn->close();
  }   
  
  
   function updateTheBody2($theBody2){
            $servername = "localhost";
			$username = "rlswor5_richard";
			$password = "syp3rt";
			$dbname = "rlswor5_fuel_cms";
            
            $conn = mysqli_connect($servername,$username,$password, $dbname);
           // Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			} 
			
			$theBody2 = base64_encode($theBody2);		
			$sql = 'UPDATE boards SET theBody2 = "'.$theBody2.'" WHERE rowNum=1';
			//$this->console_log($sql);
          
            if (mysqli_query($conn, $sql)) {
			    $this->console_log("theBody2 Table updated successfully");
			} else {
			    $this->console_log("Error: " . $sql . "<br>" . mysqli_error($conn));
			}
            
            $conn->close();
  }   
  
  
  function selectTable($table){
  	    $servername = "localhost";
		$username = "rlswor5_richard";
		$password = "syp3rt";
		$dbname = "rlswor5_fuel_cms";
		$file="";
        
        $conn = mysqli_connect($servername,$username,$password, $dbname);
       // Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		} 
		
		$sql = 'SELECT '.$table.' from boards WHERE rowNum=1';
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $file = $row[$table];
		        $file = base64_decode($file);
		    }
		} else {
		    echo "0 results";
		}
        $conn->close(); 
           
        //$this->console_log($file);
        return $file;
  	
  }
  
    
 function console_log( $data ) {
	  $output  = "<script>console.log( 'PHP debugger: ";
	  $output .= json_encode(print_r($data, true));
	  $output .= "' );</script>";
	  echo $output;
}
}