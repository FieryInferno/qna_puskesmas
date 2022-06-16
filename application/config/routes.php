<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'welcome';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
$route['dashboard']             = 'user';

$route['pertanyaan']['post']  = 'pertanyaan/store';
$route['pertanyaan']['get']   = 'pertanyaan';

$route['jawab/(:num)']['get']   = 'pertanyaan/edit/$1';
$route['jawab/(:num)']['post']  = 'pertanyaan/update/$1';

$route['login']['get']  = 'login';
$route['login']['post'] = 'login/auth';
