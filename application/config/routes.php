<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

$route['default_controller'] = 'Omnicore/index';
$route['404_override'] = 'Default_Controler/error404';
$route['translate_uri_dashes'] = FALSE;

//creating category routes from cache
$route['category'] = 'Category/index';
if (file_exists(APPPATH . 'cache/category.php')) require(APPPATH . 'cache/category.php');
$route['infographic-tag'] = 'Infographic_tag/index';
if (file_exists(APPPATH . 'cache/infographic-tag.php')) require(APPPATH . 'cache/infographic-tag.php');
$route['type'] = 'Type/index';
if (file_exists(APPPATH . 'cache/type.php')) require(APPPATH . 'cache/type.php');
$route['state'] = 'State/index';
if (file_exists(APPPATH . 'cache/state.php')) require(APPPATH . 'cache/state.php');
$route['tags'] = 'Tags/index';
if (file_exists(APPPATH . 'cache/tags.php')) require(APPPATH . 'cache/tags.php');
$route['post'] = 'Post/index';
if (file_exists(APPPATH . 'cache/post-routes.php')) require(APPPATH . 'cache/post-routes.php');


$route['(:any)'] = 'Omnicore/page/$1';





/// Backend Routes URLS
// For Login
$route['backend-dashboard/login'] = 'backend/login';
// For Dashboard
$route['backend-dashboard/dashboard'] = 'backend/dashboard/index';

// For Pages
$route['backend-dashboard/pages'] = 'backend/pages/index';
// For Page Action
$route['backend-dashboard/pages/(:any)'] = 'backend/pages/action/$1';



// For Media
$route['backend-dashboard/media'] = 'backend/media/index';
// For Media Action
$route['backend-dashboard/media/(:any)'] = 'backend/media/action/$1';



/// API Routes URLS
// for frontend login page
$route['api/frontend/auth'] = 'frontend/api/authentication';

// For Authentication
$route['api/v1/authentication'] = 'backend/login/authentication';
$route['api/v1/authentication/(:any)'] = 'backend/login/authentication/$1';

// For Pages    
$route['api/v1/pages'] = 'backend/pages/page_api';
$route['api/v1/pages/(:any)'] = 'backend/pages/page_api/$1';

// For Media
$route['api/v1/media'] = 'backend/media/media_api';
$route['api/v1/media/(:any)'] = 'backend/media/media_api/$1';



// FOR FILTERS API & FILTER VIEW PAGES
$route['backend-dashboard/filters'] = 'backend/Filters/index';
$route['api/v2/filter'] = 'backend/api/FilterController/index'; // Read all filters
$route['api/v2/filter/(:num)'] = 'backend/api/FilterController/getById/$1'; // Read a filter by ID
$route['api/v2/filter/tree'] = 'backend/api/FilterController/get_filter_tree_structure'; // tree filters nested structure
$route['api/v2/filter/search'] = 'backend/api/FilterController/search'; // Search filters by keywords & type it takes two parameter by get request 1. keyword 2. type
$route['api/v2/filter/create'] = 'backend/api/FilterController/create'; // Create a new filter
$route['api/v2/filter/update/(:num)'] = 'backend/api/FilterController/update/$1'; // Update a filter by ID
$route['api/v2/filter/update-filter-status'] = 'backend/api/FilterController/updateStatus'; // Update a filter by ID
$route['api/v2/filter/delete/(:num)'] = 'backend/api/FilterController/delete/$1'; // Delete a filter by ID
