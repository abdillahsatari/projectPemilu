<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['admin'] = 'admin';
$route['login'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['myform'] = 'Admin_anggota';
$route['myform/ajax/(:any)'] = 'Admin_anggota/myformAjax/$1';
