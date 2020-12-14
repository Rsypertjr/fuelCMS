<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH.'models/Base_module_model.php');

class Authors_model extends Base_module_model {
    
    public $requried = array('name','email');

    function __construct()
    {
        parent::__construct('authors');
    }
}

class Author_model extends Base_module_record {
    
}