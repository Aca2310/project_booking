<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//controller method
$routes->get('/', 'Auth::index');
$routes->get('admin/User', 'Auth::index');
$routes->get('admin/ruangan', 'RuanganControllers::index');
$routes->get('admin/Driver', 'Driver::index');
$routes->get('admin/History', 'HistoryControllers::index');
$routes->get('admin/BookingRequest', 'HistoryControllers::BookingRequest');
$routes->get('admin/dashboard_admin', 'HistoryControllers::dashboard');