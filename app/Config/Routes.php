<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/admin/inputproyek', 'Admin::v_dataproyek');
$routes->get('/admin/inputpekerjaan', 'Admin::v_pekerjaan');
$routes->get('/admin/datapekerjaan', 'Admin::v_datapekerjaan');
$routes->setAutoRoute(true);
