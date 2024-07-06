<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// Proyek
$route['proyek'] = 'Proyek/data_proyek';
$route['cariproyek'] = 'Proyek/search_proyek';
$route['proyek/create_proyek'] = 'Proyek/create_proyek';
$route['proyek/edit_proyek/(:num)'] = 'Proyek/edit_proyek/$1';
$route['proyek/delete_proyek/(:num)'] = 'Proyek/delete_proyek/$1';

// Petugas
$route['petugas'] = 'Petugas/data_petugas';
$route['caripetugas'] = 'Petugas/search_petugas';
$route['petugas/create_petugas'] = 'Petugas/create_petugas';
$route['petugas/edit_petugas/(:num)'] = 'Petugas/edit_petugas/$1';
$route['petugas/delete_petugas/(:num)'] = 'Petugas/delete_petugas/$1';

// Tentang
$route['tentang'] = 'beranda/data_tentang';
$route['home'] = 'beranda';
$route['login'] = 'Login';

$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
