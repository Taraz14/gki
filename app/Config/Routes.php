<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Kegiatan Gereja//
$routes->get('/hut-ypk', 'Hutypk::index');
$routes->get('/hut-pi', 'Hutpi::index');
$routes->get('/hut-gereja', 'Hutgereja::index');


// Login
$routes->get('/login', 'Authentication::loginPage');
$routes->post('/sign', 'Authentication::loginAct');

// Administrator
$routes->get('/gkiadmin', 'Administrator::index');
