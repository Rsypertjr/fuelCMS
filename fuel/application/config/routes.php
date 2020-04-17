<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
//*/
//$route['default_controller'] = 'portfolio';
$route['default_controller'] = 'fuel/page_router';
$route['404_override'] = 'fuel/page_router';
$route['translate_uri_dashes'] = FALSE;
$route['test/(:num)'] = 'starter/test/$1';
$route['othelloAjax'] = 'othelloAndMobile/othello';

$route['othello/(:any)'] = 'othelloAndMobile/othello/$1';
$route['othello'] = 'othelloAndMobile/othello';
$route['mobile'] = 'othelloAndMobile/mobile';
$route['playBegin'] = 'othelloAndMobile/playBegin';
$route['(:num)'] = 'starter/test/$1';
//$route['orominer1'] = 'orominer/orominer1';
//$route['orominer2'] = 'orominer/orominer2';
$route['techWriter'] = 'techWriting/writing';

$route['softwareTW'] = 'techWriting/softwareTW';
$route['engSpec'] = 'techWriting/engSpec';
$route['graingerABCDE'] = 'techWriting/graingerABCDE';
$route['graingerCDE'] = 'techWriting/graingerCDE';
$route['mecPManual'] = 'techWriting/mecPManual';
$route['whitePaper'] = 'techWriting/whitePaper';
$route['dynResume'] = 'resume/htmlResume';
$route['pdfResume/(:any)'] = 'resume/pdfResume/$1';
$route['pdfResume'] = 'resume/pdfResume';
$route['inVegas'] = 'otherApps/inVegas';
$route['orominer1'] = 'otherApps/orominer1';
$route['orominer1/(:any)'] = 'otherApps/orominer1/$1';
$route['orominer2'] = 'otherApps/orominer2';
$route['orominer2/(:any)'] = 'otherApps/orominer2/$1';

$route['amino'] = 'otherApps/amino';
$route['amino/(:any)'] = 'otherApps/amino/$1';
$route['webTech'] = 'otherApps/webTech';
$route['loggingIn'] = 'otherApps/loggingIn';
$route['frontCMS'] = 'otherApps/front';

$route['front'] = 'otherApps/bootPortfolio';
$route['boot'] = 'otherApps/bootPortfolio';

$route['caribStore'] = 'otherApps/caribStore';

$route['caribCatering'] = 'otherApps/caribCatering';
$route['carCatering'] = 'otherApps/wordpress';

$route['wpPortfolio'] = 'otherApps/wpPortfolio';
$route['codeRepo'] = 'otherApps/codeRepo';

$route['gitRepo'] = 'otherApps/gitRepo';

$route['vueSlimTwig'] = 'otherApps/vueSlimTwig';
$route['laravelApp1'] = 'otherApps/laravelApp1';
$route['laravelApp2'] = 'otherApps/laravelApp2';
$route['laravelApp3'] = 'otherApps/laravelApp3';
$route['angularApp'] = 'otherApps/angularApp';
$route['angularRepo1'] = 'otherApps/angularRepo1';
$route['angularRepo2'] = 'otherApps/angularRepo2';

$route['rubyTraining'] = 'otherApps/rubyTraining';
$route['linkedIn'] = 'otherApps/linkedIn';

$route['transcript'] = 'otherApps/transcript';
$route['bootPortfolio'] = 'otherApps/bootPortfolio';


$route['sendEmail'] = 'email/processEmail';
$route['email/(:any)'] = 'email/index/$1';

$route['email'] = 'email';

/*	
| Uncomment this line if you want to use the automatically generated sitemap based on your navigation.
| To modify the sitemap.xml, go to the views/sitemap_xml.php file.
*/ 
//$route['sitemap.xml'] = 'sitemap_xml';

include(MODULES_PATH.'/fuel/config/fuel_routes.php');