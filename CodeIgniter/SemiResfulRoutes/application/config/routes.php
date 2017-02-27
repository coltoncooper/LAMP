<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['products'] = "products";
$route['products/new'] = "products/new";
$route['products/create'] = 'products/create';
$route['products/show/(:any)'] = 'products/show/$1';
$route['products/edit/(:any)'] = 'products/edit/$1';
$route['products/update'] = 'products/update';
$route['products/destroy/(:any)'] = 'products/destroy/$1';

$route['404_override'] = '';

//end of routes.php