<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;

$route['cart/view'] = 'cart/view';
$route['cart'] = 'cart/index';

$route['products/index'] = 'products/index';
$route['products'] = 'products';
// $route['products/(:any)'] = 'products/view/$1';
