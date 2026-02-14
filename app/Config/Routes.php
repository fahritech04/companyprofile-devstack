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

// Contact Form Submit
$routes->post('contact/submit', 'ContactController::submit');

// Authentication Routes
$routes->get('login', 'Auth::login');
$routes->post('auth/authenticate', 'Auth::authenticate');
$routes->get('register', 'Auth::register');
$routes->post('auth/store', 'Auth::store');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Auth::dashboard');

// Email Verification Routes
$routes->get('auth/verify/(.+)', 'Auth::verify/$1');
$routes->get('auth/resend-verification', 'Auth::resendVerification');
$routes->post('auth/resend-verification', 'Auth::resendVerification');

// ═══════════════════════════════════════════════════
// CLIENT PORTAL ROUTES
// ═══════════════════════════════════════════════════
$routes->group('client', ['filter' => 'auth', 'namespace' => 'App\Controllers\Client'], function ($routes) {
    // Dashboard
    $routes->get('/', 'DashboardController::index');

    // Orders
    $routes->get('orders', 'OrderController::index');
    $routes->get('orders/create', 'OrderController::create');
    $routes->get('orders/create/(:segment)', 'OrderController::create/$1');
    $routes->post('orders/store', 'OrderController::store');
    $routes->get('orders/(:num)', 'OrderController::show/$1');

    // Billing
    $routes->get('billing', 'BillingController::index');
    $routes->get('billing/(:num)', 'BillingController::show/$1');
    $routes->post('billing/(:num)/upload', 'BillingController::uploadProof/$1');

    // Tickets
    $routes->get('tickets', 'TicketController::index');
    $routes->get('tickets/create', 'TicketController::create');
    $routes->post('tickets/store', 'TicketController::store');
    $routes->get('tickets/(:num)', 'TicketController::show/$1');
    $routes->post('tickets/(:num)/reply', 'TicketController::reply/$1');

    // Revisions
    $routes->post('revisions/(:num)', 'RevisionController::store/$1');
});

// ═══════════════════════════════════════════════════
// ADMIN ROUTES (require authentication + admin role)
// ═══════════════════════════════════════════════════
$routes->group('admin', ['filter' => 'auth', 'namespace' => 'App\Controllers\Admin'], function ($routes) {
    // Dashboard
    $routes->get('/', 'DashboardController::index');

    // Services CRUD
    $routes->get('services', 'ServiceController::index');
    $routes->get('services/create', 'ServiceController::create');
    $routes->post('services/store', 'ServiceController::store');
    $routes->get('services/edit/(:num)', 'ServiceController::edit/$1');
    $routes->post('services/update/(:num)', 'ServiceController::update/$1');
    $routes->post('services/delete/(:num)', 'ServiceController::delete/$1');

    // Portfolio CRUD
    $routes->get('portfolio', 'PortfolioController::index');
    $routes->get('portfolio/create', 'PortfolioController::create');
    $routes->post('portfolio/store', 'PortfolioController::store');
    $routes->get('portfolio/edit/(:num)', 'PortfolioController::edit/$1');
    $routes->post('portfolio/update/(:num)', 'PortfolioController::update/$1');
    $routes->post('portfolio/delete/(:num)', 'PortfolioController::delete/$1');

    // Inquiries
    $routes->get('inquiries', 'InquiryController::index');
    $routes->get('inquiries/(:num)', 'InquiryController::show/$1');
    $routes->post('inquiries/delete/(:num)', 'InquiryController::delete/$1');

    // Order Management (SaaS)
    $routes->get('orders', 'OrderManageController::index');
    $routes->get('orders/(:num)', 'OrderManageController::show/$1');
    $routes->post('orders/(:num)/status', 'OrderManageController::updateStatus/$1');
    $routes->post('orders/(:num)/milestone', 'OrderManageController::updateMilestone/$1');

    // Billing Management (SaaS)
    $routes->get('billing', 'BillingManageController::index');
    $routes->get('billing/(:num)', 'BillingManageController::show/$1');
    $routes->post('billing/(:num)/verify', 'BillingManageController::verify/$1');

    // Ticket Management (SaaS)
    $routes->get('tickets', 'TicketManageController::index');
    $routes->get('tickets/(:num)', 'TicketManageController::show/$1');
    $routes->post('tickets/(:num)/reply', 'TicketManageController::reply/$1');
    $routes->post('tickets/(:num)/close', 'TicketManageController::close/$1');
});

// Protected Routes (require authentication)
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('communication', 'Communication::index');
    $routes->get('channels', 'Communication::channels');
    $routes->get('channels/(:num)', 'Communication::channel/$1');
    $routes->post('channels/(:num)/messages', 'Communication::sendMessage/$1');
    $routes->get('project-files', 'Communication::files');
    $routes->get('activity-feed', 'Communication::activity');
});

$routes->get('test-reset-user', 'TestAuth::reset_user');

// Route untuk pergantian bahasa
$routes->get('language/switch/(:segment)', 'Language::switch/$1');

