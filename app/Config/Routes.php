<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//controller method
$routes->get('/', 'Auth::login');
$routes->get('admin/User', 'Auth::index');
$routes->get('admin/ruangan', 'RuanganControllers::index');
$routes->get('admin/Driver', 'Driver::index');
$routes->get('admin/History', 'HistoryControllers::index');
$routes->get('admin/BookingRequest', 'HistoryControllers::BookingRequest');
$routes->get('admin/dashboard_admin', 'HistoryControllers::dashboard');
$routes->get('admin/tambah_driver', 'Driver::tambah_driver');
$routes->post('admin/simpan_driver', 'Driver::simpan_driver');
$routes->get('admin/tambah_ruangan', 'RuanganControllers::tambah_ruangan');
$routes->post('admin/simpan_ruangan', 'RuanganControllers::simpan_ruangan');
$routes->get('admin/halaman_tambah_akun', 'Auth::tambah_akun');
$routes->post('admin/simpanAkun', 'Auth::simpanAkun');
