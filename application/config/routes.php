<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = 'blog/blog/all';
$route['blog/post/(:any)'] = 'blog/blog/post/$1';
$route['blog/add'] = 'blog/blog/add';
$route['blog/all'] = 'blog/blog/all';
$route['blog/(:any)'] = 'blog/blog/post/$1';
$route['login'] = 'user/user/main';
$route['logout'] = 'user/user/logout';
$route['register'] = 'user/user/register';
/* $route['verify_login'] = 'login/verify_login/main'; */
$route['admin'] = 'admin/admin/main';
$route['(:any)'] = 'main/view/$1';

// $route['css'] = 'css/';
// $route['default_controller'] = 'pages/view';
// $route['(:any)'] = 'pages/view/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */