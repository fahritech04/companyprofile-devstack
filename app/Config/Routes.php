<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('services', 'Home::services');
$routes->get('portfolio', 'Home::portfolio');
$routes->get('contact', 'Home::contact');

// Route untuk pergantian bahasa
$routes->get('language/switch/(:segment)', 'Language::switch/$1');
