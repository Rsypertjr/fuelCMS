<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Modules
|--------------------------------------------------------------------------
|
| Specifies the module controller (key) and the name (value) for fuel
*/
/************************ Example  ******************************

$config['modules']['quotes'] = array(
	'preview_path' => 'about/what-they-say',
);

$config['modules']['projects'] = array(
	'preview_path' => 'showcase/project/{slug}',
	'sanitize_images' => FALSE // to prevent false positives with xss_clean image sanitation
);

*********************** EXAMPLE ***********************************/


/*********************** OVERWRITES ************************************/
/*
$config['module_overwrites']['categories']['hidden'] = FALSE; // change to FALSE if you want to use the generic categories module
$config['module_overwrites']['tags']['hidden'] = FALSE; // change to FALSE if you want to use the generic tags module
*/

/*********************** OVERWRITES **********************************/

$config['modules']['tags'] = array();
$config['modules']['categories'] = array();

$config['modules']['headMenuOpts'] = array('model_name' => 'HeadMenuOpts_model',);

$config['modules']['othelloBoards'] = array();

$config['modules']['frontMenuOpts'] = array();

$config['modules']['twriteMenuOpts'] = array();

$config['modules']['footerMenuOpts'] = array();


