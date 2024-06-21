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

// Mahasiswa
$route['mahasiswa'] = 'mahasiswa/data_mahasiswa';
$route['mahasiswa/create_mahasiswa'] = 'mahasiswa/create_mahasiswa';
$route['mahasiswa/edit_mahasiswa/(:num)'] = 'mahasiswa/edit_mahasiswa/$1';
$route['mahasiswa/delete_mahasiswa/(:num)'] = 'mahasiswa/delete_mahasiswa/$1';

// Barang
$route['barang'] = 'barang/data_barang';
$route['caribarang'] = 'barang/search_barang';
$route['barang/create_barang'] = 'barang/create_barang';
$route['barang/edit_barang/(:num)'] = 'barang/edit_barang/$1';
$route['barang/delete_barang/(:num)'] = 'barang/delete_barang/$1';

// Tentang
$route['tentang'] = 'beranda/data_tentang';

$route['default_controller'] = 'beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
