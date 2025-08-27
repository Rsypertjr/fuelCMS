<?php
class Techwriting extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
            $CI =& get_instance();
            $CI->load->library('form_validation');
            
            // generic global page variables used for all pages
            $this->vars = array();
            $this->vars['layout'] = 'main';
            $this->vars['page_title'] = fuel_nav(array('render_type' => 'page_title', 'delimiter' => ' : ', 'order' => 'desc', 'home_link' => 'Home'));
            $this->vars['meta_keywords'] = '';
            $this->vars['meta_description'] = '';
            $this->vars['js'] = array();
            $this->vars['css'] = array();
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
            $this->vars['jqUiCSS'] = css_path('excite-bike/jquery-ui-1.10.4.custom.css');
            $this->vars['jqJS'] = js_path('jquery-1.10.2.js');
            $this->vars['jqUiJS'] = js_path('jquery-ui-1.10.4.custom.js');
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
            $this->vars['jqMobileCSS1'] = css_path('jquery.mobile.icons.min.css');	
            $this->vars['jqMobileCSS2'] = css_path('mobile-bike.min.css');
            
            //Images
            $this->vars['codeStorageImage'] = img_path('codestorageimage.jpg');
            $this->vars['websiteconstruction'] = img_path('websiteconstruction.jpg');
            $this->vars['dataanalysis'] = img_path('dataanalysis.jpg');
            $this->vars['wordpressimage'] = img_path('wordpressimage.jpg');
            $this->vars['technologyideas'] = img_path('technologyideas.jpg');
            $this->vars['technicalwritingimage'] = img_path('technicalwritingimage.jpg');
            $this->vars['techwritingimg'] = img_path('techwritingimg.jpg');
            $this->vars['techWriter'] = img_path('techWriter.jpg');
            $this->vars['mobiledevelopmentimage'] = img_path('mobiledevelopmentimage.jpg');
            $this->vars['othellogameimage'] = img_path('othellogameimage.jpg');
            $this->vars['jobdone'] = img_path('jobdone.jpg');
            $this->vars['engProcessSpec'] = img_path('engProcessSpec.jpg');
            $this->vars['explainTechnology'] = img_path('explainTechnology.jpg');
            $this->vars['myFace'] = img_path('myFace.jpg');
            $this->vars['upArrow'] = img_path('upArrow.gif'); 
            $this->vars['softwareTechWriting'] = img_path('softwareTechWriting.gif');
            $this->vars['rubyRailsImage'] = img_path('rubyRailsImage.jpg');
            $this->vars['laravelMVC'] = img_path('laravelMVC.jpg');
            $this->vars['fuelCMS'] = img_path('fuelCMS.jpg');
            $this->vars['viewslimtwig'] = img_path('viewslimtwig.jpg');
            
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
            $this->vars['lampTechs'] = img_path('lampTechs.jpg');
            $this->vars['bigpic'] = 'my_bigpic.gif';
            
            // Othello Images
            $this->vars['oimg']= img_path('oimg.jpg');
            $this->vars['ximg']= img_path('ximg.jpg');
            $this->vars['url'] = '';
            

        
      
    }
    
    public function index()
    {
        // load the fuel_page library class and pass
        // it the view file you want to load
        
        echo "gets here";
    }
    
    function writing(){
        $vars['whichPage'] = 'techWriter';
        $this->fuel->pages->render('techWriting/techWriting',$vars);
    }
    
    function engSpec(){
        $vars['pdfFilePath'] = pdf_path('engSpec.pdf');
        $vars['pdfFileName'] = 'Engineering Specification';
        $this->load->view('showPDF/showAPDFDoc',$vars);
    }
    
    function graingerABCDE(){
        $vars['pdfFilePath'] = pdf_path('graingerABCDE.pdf');
        $vars['pdfFileName'] = 'Grainger ABCDE Maintenance Manual';
        $vars['pageTitle'] = "Grainger ABCDE Series B Manual";
        $this->load->view('showPDF/showAPDFDoc',$vars);
    }
    
     function graingerCDE(){
       
        $vars['pdfFilePath'] = pdf_path('graingerCDE.pdf');
        $vars['pdfFileName'] = 'Grainger CDE Maintenance Manual';
        $vars['pageTitle'] = "Grainger CDE Series B Manual";
        $this->load->view('showPDF/showAPDFDoc',$vars);
    }
    
    function mecPManual(){
        $vars['pdfFilePath'] = pdf_path('mecProductManual.pdf');
        $vars['pdfFileName'] = 'MEC Product Maintenance Manual';
        $this->load->view('showPDF/showAPDFDoc',$vars);
    }
    
     function whitePaper(){
        $vars['pdfFilePath'] = pdf_path('whitePaper.pdf');
        $vars['pdfFileName'] = 'Technical White Paper';
        $this->load->view('showPDF/showAPDFDoc',$vars);
    }
    
    function softwareTW(){
    
        $this->vars['whichPage'] = 'codeDev';
        $this->load->view('_blocks/header2',$this->vars);
        $this->load->view('techWriting/softwareTW');
    }
    
}