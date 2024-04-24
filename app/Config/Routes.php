<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Signup', 'SignupController::register');
$routes->post('/Signup', 'SignupController::register');
$routes->get('/Login', 'LoginController::Login');
$routes->post('/Login', 'LoginController::Login');
$routes->get('/Upload', 'HomeController::uploadMenu');
$routes->post('/Upload', 'HomeController::uploadMenu');