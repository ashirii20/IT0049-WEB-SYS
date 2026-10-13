<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
//$routes->get('/', 'Home::index');

$routes->get('/', 'Pages::landing');
$routes->get('/about', 'Pages::about');

//customer routes
$routes->get('/customers/customerAccounts', 'Customers::index');
$routes->get('/customers/customerNew', 'Customers::new');
$routes->post('/customers/customerCreate', 'Customers::create');
$routes->get('/customers/customerEdit/(:num)', 'Customers::edit/$1');
$routes->post('/customers/customerUpdate/(:num)', 'Customers::update/$1');

//user routes
$routes->get('/users/userAccounts', 'Users::index');
$routes->get('/users/userNew', 'Users::new');
$routes->post('/users/userCreate', 'Users::create');
$routes->get('/users/userEdit/(:num)', 'Users::edit/$1');
$routes->post('/users/userUpdate/(:num)', 'Users::update/$1');
