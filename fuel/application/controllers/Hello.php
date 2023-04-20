<?php
class Hello extends CI_Controller {
    public function _construct()
    {
        parent::_construct();
    }
    
    public function index()
    {
        // load the fuel_page library class and pass
        // it the view file you want to load
        $this->load->module_library(
            FUEL_FOLDER,
            'fuel_page',
            array('location' => 'hello')
            );
        $this->fuel_page->render();
        
    }
    
    
    
}