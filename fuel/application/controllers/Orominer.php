<?php
class Orominer extends CI_Controller {
    public function _construct()
    {
        parent::_construct();
      
    }
    
    public function index()
    {
        // load the fuel_page library class and pass
        // it the view file you want to load
        
        echo "gets here";
    }
    
    function orominer1(){
        $vars['whichPage'] = 'orominer1';
        $this->fuel->pages->render('orominer/orominer1',$vars);
    }
    
    function orominer2(){
        $vars['whichPage'] = 'orominer2';
        $this->fuel->pages->render('orominer/orominer2',$vars);
    }
    
    
}