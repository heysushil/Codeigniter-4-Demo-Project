<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/registeruser', 'Home::registeruser');
// $routes->get('/users', 'Users::index');
// $routes->get('users/create', 'Users::create');
// $routes->post('users/store', 'Users::store');
// $routes->get('users/edit/(:num)', 'Users::edit/$1');
// $routes->post('users/update', 'Users::update');
// $routes->get('users/delete/(:num)', 'Users::delete/$1');
// $routes->get('users/registeruser', 'Users::registeruser');
// $routes->post('users/registeruser_data', 'Users::registeruser_data');

// Multipal route concept for users
// $usersRoute = [
//     '/users' => 'Users::index',
//     'users/create' => 'Users::create',
//     'users/store' => 'Users::store',
//     'users/edit/(:num)' => 'Users::edit/$1',
//     'users/update' => 'Users::update',
//     'users/delete/(:num)' => 'Users::delete/$1',
// ];
// $routes->map($usersRoute);

// Grouping routeing is more good then the map route becausae its auto include the prefix to all the urls
$routes->group('users', static function ($routes){
    $routes->get('/', 'Users::index');
    $routes->get('create', 'Users::create');
    $routes->post('store', 'Users::store');
    $routes->get('edit/(:num)', 'Users::edit/$1');
    $routes->post('update', 'Users::update');
    $routes->get('delete/(:num)', 'Users::delete/$1');
    $routes->get('registeruser', 'Users::registeruser');
    $routes->post('registeruser_data', 'Users::registeruser_data');    
});

$routes->group('admin', static function ($routes){
    $routes->get('/', 'Admin::index');
    $routes->post('admin_user_data', 'Admin::admin_user_data');
    $routes->get('curl_admin', 'Admin::curl_admin');
    $routes->get('db', 'Admin::db');
});

$routes->resource('employee');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
