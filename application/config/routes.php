<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
// $route['404_override'] = 'id/';
$route['id/(:any)'] = 'id/index/$1';
$route['translate_uri_dashes'] = FALSE;
