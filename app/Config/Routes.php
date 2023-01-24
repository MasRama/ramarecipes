<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/login', 'AuthController::index');
$routes->get('/register', 'AuthController::index_reg');
$routes->post('/login', 'AuthController::post_login');
$routes->post('/register', 'AuthController::post_reg');

$routes->get('/logout', 'AuthController::logout');

$routes->get('/', 'HomeController::index');
$routes->get('/tentang', 'TentangController::index');
$routes->get('/kontak', 'KontakController::index');

$routes->get('/resep', 'ResepController::index');
$routes->get('/resep/tambah', 'ResepController::index_tambah');
$routes->post('/resep/tambah', 'ResepController::tambah_data');

$routes->get('/resep/(:num)', 'ResepController::detail/$1');
$routes->get('/resep/edit/(:num)', 'ResepController::index_data/$1');
$routes->put('/resep/edit/(:num)', 'ResepController::save_data/$1');
$routes->delete('/resep/(:num)', 'ResepController::delete/$1');
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
