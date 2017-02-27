<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['p/(:any)'] = "products/p/$1";
$route['p/edit/(:any)'] = "products/edit/$1";
$route['register'] = 'users/new_user';
$route['login'] = 'sessions/new_session';
$route['logoff'] = 'sessions/destroy';

$route['404_override'] = '';

//end of routes.php