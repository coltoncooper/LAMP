<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "courses";
$route['courses/destroy/(:any)'] = "courses/destroy/$1";
$route['404_override'] = '';

//end of routes.php