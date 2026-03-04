<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('home', 'UsuarioController::index');

$routes->get('home/create', 'UsuarioController::create');
$routes->get('home/read', 'UsuarioController::read');
$routes->get('home/update', 'UsuarioController::update');
$routes->get('home/delete', 'UsuarioController::delete');