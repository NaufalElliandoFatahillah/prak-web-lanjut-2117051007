<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/profile', 'Home::profile');
$routes->get('/profile/(:any)/(:any)/(:any)', [Home::class,'profile']);
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user', 'UserController::index');