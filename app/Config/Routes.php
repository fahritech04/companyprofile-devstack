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

// Authentication Routes
$routes->get('login', 'Auth::login');
$routes->post('auth/authenticate', 'Auth::authenticate');
$routes->get('register', 'Auth::register');
$routes->post('auth/store', 'Auth::store');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Auth::dashboard');

// Protected Routes (require authentication)
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('communication', 'Communication::index');
    $routes->get('channels', 'Communication::channels');
    $routes->get('channels/(:num)', 'Communication::channel/$1');
    $routes->post('channels/(:num)/messages', 'Communication::sendMessage/$1');
});

// Route untuk pergantian bahasa
$routes->get('language/switch/(:segment)', 'Language::switch/$1');
