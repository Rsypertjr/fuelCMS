<?php 

// declared here so we don't have to in each controller's variable file
$CI =& get_instance();
$CI->load->library('form_validation');


// generic global page variables used for all pages
$vars = array();
$vars['layout'] = 'main';
$vars['page_title'] = fuel_nav(array('render_type' => 'page_title', 'delimiter' => ' : ', 'order' => 'desc', 'home_link' => 'Home'));
$vars['meta_keywords'] = '';
$vars['meta_description'] = '';
$vars['js'] = array();
$vars['css'] = array();
$vars['body_class'] = uri_segment(1).' '.uri_segment(2);
$vars['mobile'] = '';
$vars['appType'] = "desktop";
$vars['indexTwo'] = 'index2';

//Othello App Variable
$vars['othelloAjaxMode'] = 'no';
$vars["display1"] = "none";
$vars["display2"] = "block";
$vars["display3"] = "block";
$vars["display4"] = "none";
$vars['homePage'] = 'front';
$vars["flag"] = 'no'; 
$vars["message"] = "<span id='prbutton' style='color:purple'>**Press button to Play!**<br/>Your Symbol is 'O'</span>";
$vars["symbol"] = "O";          


//Page or View Variables
$pages['othello/:any'] = array('view' => 'othello/othello');



//JavaScript Files
$vars['jqUiCSS'] = css_path('excite-bike/jquery-ui-1.10.4.custom.css');
$vars['jqJS'] = js_path('jquery-1.10.2.js');
$vars['jqUiJS'] = js_path('jquery-ui-1.10.4.custom.js');
$vars['jqueryloc']= js_path('jquery-1.10.2.js');
$vars['jqfile']= js_path('global.js');

//XML Files
$vars['orominer1XML'] = img_path('oro_xml1.xml');
$vars['orominer2XML'] = img_path('oro_xml2.xml');

// CSS Files
$vars['whichPage'] = 'front'; // which exhibit page is shown
$vars['hfSwitch'] = 'off';  // off for desktop header, on for mobile header
$vars['headerCSS'] = css_path('headerCSS.css');
$vars['footerCSS'] = css_path('footerCSS.css');
$vars['livingInLVCSS'] = css_path('livingInLVCSS.css');
$vars['frontCSS'] = css_path('frontCSS.css');
$vars['miniMotifCSS'] = css_path('miniMotifCSS.css');
$vars['orominer1CSS'] = css_path('orominer1CSS.css');
$vars['orominer2CSS'] = css_path('orominer2CSS.css');
$vars['othello2CSS'] = css_path('othello2CSS.css');
$vars['othelloCSS'] = css_path('othelloCSS.css');
$vars['techWriterCSS'] = css_path('techWriterCSS.css');
$vars['resumesCSS'] = css_path('resumesCSS.css');
$vars['showPDFCSS'] = css_path('showPDFCSS.css');
$vars['codeDevCSS'] = css_path('codeDevCSS.css');
$vars['emailFormCSS'] = css_path('emailFormCSS.css');
$vars['webTechCSS'] = css_path('webTechCSS.css');
$vars['showPDFCSS'] = css_path('showPDFCSS.css');
$vars['mobileSwitchCSS'] = css_path('mobileSwitchCSS.css');
$vars['jqMobileCSS1'] = css_path('jquery.mobile.icons.min.css');	
$vars['jqMobileCSS2'] = css_path('mobile-bike.min.css');

//Images
$vars['codeStorageImage'] = img_path('codestorageimage.jpg');
$vars['websiteconstruction'] = img_path('websiteconstruction.jpg');
$vars['dataanalysis'] = img_path('dataanalysis.jpg');
$vars['wordpressimage'] = img_path('wordpressimage.jpg');
$vars['technologyideas'] = img_path('technologyideas.jpg');
$vars['technicalwritingimage'] = img_path('technicalwritingimage.jpg');
$vars['techwritingimg'] = img_path('techwritingimg.jpg');
$vars['techWriter'] = img_path('techWriter.jpg');
$vars['mobiledevelopmentimage'] = img_path('mobiledevelopmentimage.jpg');
$vars['othellogameimage'] = img_path('othellogameimage.jpg');
$vars['jobdone'] = img_path('jobdone.jpg');
$vars['engProcessSpec'] = img_path('engProcessSpec.jpg');
$vars['explainTechnology'] = img_path('explainTechnology.jpg');
$vars['myFace'] = img_path('myFace.jpg');
$vars['upArrow'] = img_path('upArrow.gif'); 
$vars['softwareTechWriting'] = img_path('softwareTechWriting.gif');
$vars['rubyRailsImage'] = img_path('rubyRailsImage.jpg');
$vars['laravelMVC'] = img_path('laravelMVC.jpg');
$vars['vegas1'] = img_path('vegas/vegas1.jpg');
$vars['vegas2'] = img_path('vegas/vegas2.jpg');
$vars['vegas3'] = img_path('vegas/vegas3.jpg');
$vars['vegas4'] = img_path('vegas/vegas4.jpg');
$vars['vegas5'] = img_path('vegas/vegas5.jpg');
$vars['vegas6'] = img_path('vegas/vegas6.jpg');
$vars['vegas7'] = img_path('vegas/vegas7.jpg');
$vars['vegas8'] = img_path('vegas/vegas8.jpg');
$vars['spiral'] = img_path('spiral.gif');
$vars['worksImg'] = img_path('worksImg.jpg');
$vars['mechEngImage2'] = img_path('mechEngImage2.jpg');
$vars['topLabel'] = img_path('topLabel.jpg');
$vars['engImg'] = img_path('engImg.jpg');
$vars['compSciImage'] = img_path('compSciImage.jpg');
$vars['mathhonorimg'] = img_path('mathhonorimg.jpg');
$vars['procprojengimg'] = img_path('procprojengimg.jpg');
$vars['doorhandle'] = img_path('doorhandle.jpg');
$vars['lampTechs'] = img_path('lampTechs.jpg');
$vars['kidsPlaying'] = img_path('kidsPlaying.gif');

// Othello Images
$vars['oimg']= img_path('oimg.jpg');
$vars['ximg']= img_path('ximg.jpg');

$vars['headAndFoot'] = 'yes';
$vars['url'] = '';


// page specific variables
$pages = array();
$pages['news/:any'] = array('view' => 'news');


?>