<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'products';
$route['p/(:any)'] = "products/p/$1";
$roune['p/edit/2'] = "products/p/edit/$2";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
