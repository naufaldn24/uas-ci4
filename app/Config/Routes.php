<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::services');
$routes->match(['get', 'post'], '/contact', 'Contact::index');

$routes->get('/admin', 'Admin::dashboard');
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin/contacts', 'Admin::contacts');
$routes->get('/admin/logout', 'Admin::logout');
$routes->get('/admin/delete/(:num)', 'Admin::delete/$1');
$routes->get('/admin/contact/(:num)', 'Admin::show/$1');

$routes->get('/admin/login', 'Admin::login');
$routes->post('/admin/login', 'Admin::login');
$routes->get('/admin/register', 'Admin::register');
$routes->post('/admin/register', 'Admin::attemptRegister');


