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
$routes->group('admin', ['filter' => 'admin', 'namespace' => 'App\Controllers\Admin'], function ($routes) {
    // Dashboard
    $routes->get('/', 'DashboardController::index');

    // Portfolio CRUD
    $routes->get('portfolio', 'PortfolioController::index');
    $routes->get('portfolio/create', 'PortfolioController::create');
    $routes->post('portfolio/store', 'PortfolioController::store');
    $routes->get('portfolio/edit/(:num)', 'PortfolioController::edit/$1');
    $routes->post('portfolio/update/(:num)', 'PortfolioController::update/$1');
    $routes->post('portfolio/delete/(:num)', 'PortfolioController::delete/$1');

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

// ═══════════════════════════════════════════════════
// WEBSITE BUILDER ROUTES
// ═══════════════════════════════════════════════════
$routes->group('dashboard', ['filter' => 'auth'], function ($routes) {
    // Dashboard
    $routes->get('/', 'Dashboard::index');

    // Website management
    $routes->get('websites', 'Dashboard::websites');
    $routes->get('websites/create', 'Dashboard::createWebsite');
    $routes->post('websites/store', 'Dashboard::storeWebsite');
    $routes->get('websites/edit/(:num)', 'Dashboard::editWebsite/$1');
});

// Website Builder API
$routes->group('api/website-builder', ['filter' => 'auth', 'namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->get('/', 'WebsiteBuilder::index');
    $routes->post('create', 'WebsiteBuilder::create');
    $routes->get('show/(:num)', 'WebsiteBuilder::show/$1');
    $routes->post('update/(:num)', 'WebsiteBuilder::update/$1');
    $routes->post('update-pages/(:num)', 'WebsiteBuilder::updatePages/$1');
    $routes->post('publish/(:num)', 'WebsiteBuilder::publish/$1');
    $routes->post('delete/(:num)', 'WebsiteBuilder::delete/$1');

    // Block management
    $routes->get('blocks/available', 'WebsiteBuilder::availableBlocks');
    $routes->post('(:num)/pages/(:segment)/blocks', 'WebsiteBuilder::addBlock/$1/$2');
    $routes->post('(:num)/pages/(:segment)/blocks/reorder', 'WebsiteBuilder::reorderBlocks/$1/$2');
    $routes->post('(:num)/pages/(:segment)/blocks/(:segment)', 'WebsiteBuilder::updateBlock/$1/$2/$3');
    $routes->post('(:num)/pages/(:segment)/blocks/(:segment)/delete', 'WebsiteBuilder::deleteBlock/$1/$2/$3');
});

// ═══════════════════════════════════════════════════
// PUBLIC SITE RENDERER
// Serves user-built websites at /s/{slug} and /s/{slug}/{pageSlug}.
// ═══════════════════════════════════════════════════
$routes->get('s/(:segment)', 'PublicSite::show/$1');
$routes->get('s/(:segment)/(:any)', 'PublicSite::show/$1/$2');

// Route untuk pergantian bahasa
$routes->get('language/switch/(:segment)', 'Language::switch/$1');

