<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Kegiatan Gereja//
$routes->get('/hut-ypk', 'Home::hutypk');
$routes->get('/hut-pi', 'Home::hutpi');
$routes->get('/hut-gereja', 'Home::hutgereja');


// Login
$routes->get('/login', 'Authentication::loginPage');
