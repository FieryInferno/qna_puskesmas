<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'welcome';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
$route['pertanyaan']['post']    = 'pertanyaan/store';
$route['dashboard']             = 'user';

$route['login']['get']  = 'login';
$route['login']['post'] = 'login/auth';
