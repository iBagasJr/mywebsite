<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'PageCtrl';
$route['LANDING-PAGE'] = 'PageCtrl/landing';
$route['MENU_UTAMA'] = 'PageCtrl/home';
$route[''] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(:any)/(:any)'] = "PageCtrl/home";