<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'About::about');
$routes->get('layanan', 'Layanan::layanan');
$routes->get('konsultasi', 'Konsultasi::konsultasi');
$routes->get('gallery','Gallery::gallery');