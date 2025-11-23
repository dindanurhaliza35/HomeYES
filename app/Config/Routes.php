<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'About::about');
$routes->get('katalog', 'Katalog::index');
$routes->get('kontak', 'Kontak::kontak');