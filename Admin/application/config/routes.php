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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// ROUTES

//Home Title
$route['HomeText'] = 'Home/viewHomeText';
$route['getHomeText'] = 'Home/getHomeText';
$route['addHomeText'] = 'Home/addHomeText';
$route['editHomeText/(:any)'] = 'Home/editHomeText/$1';
$route['deleteHomeText'] = 'Home/deleteHomeText';

//Home Description
$route['viewHomeDesc'] = 'Home/viewHomeDesc';
$route['getHomeDesc'] = 'Home/getHomeDesc';
$route['addHomeDesc'] = 'Home/addHomeDesc';
$route['ediHomeDesc/(:any)'] = 'Home/ediHomeDesc/$1';
$route['deleteHomeDesc'] = 'Home/deleteHomeDesc';

//Testimonial
$route['viewTestimonial'] = 'Home/viewTestimonial';
$route['getTestimonial'] = 'Home/getTestimonial';
$route['addTestimonial'] = 'Home/addTestimonial';
$route['editTestimonial/(:any)'] = 'Home/editTestimonial/$1';
$route['deleteTestimonial'] = 'Home/deleteTestimonial';

//Activity
$route['viewActivity'] = 'Activity/viewActivity';
$route['getActivity'] = 'Activity/getActivity';
$route['addActivity'] = 'Activity/addActivity';
$route['editActivity/(:any)'] = 'Activity/editActivity/$1';
$route['deleteActivity'] = 'Activity/deleteActivity';

//Nearby
$route['viewNearby'] = 'Nearby/viewNearby';
$route['getNearby'] = 'Nearby/getNearby';
$route['addNearby'] = 'Nearby/addNearby';
$route['editNearby/(:any)'] = 'Nearby/editNearby/$1';
$route['deleteNearby'] = 'Nearby/deleteNearby';

//Gallery
$route['viewGallery'] = 'Gallery/viewGallery';
$route['getGallery'] = 'Gallery/getGallery';
$route['addGallery'] = 'Gallery/addGallery';
$route['editGallery/(:any)'] = 'Gallery/editGallery/$1';
$route['deleteGallery'] = 'Gallery/deleteGallery';
