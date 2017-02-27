<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['signin'] = 'signin';
$route['register'] = 'register';
$route['dashboard'] = 'dashboard';
$route['users/edit/(:any)'] = "users/edit_with_id/$1";
$route['users/remove/(:any)'] = "users/remove/$1";
$route['users'] = 'users';

$route['404_override'] = '';

//end of routes.php