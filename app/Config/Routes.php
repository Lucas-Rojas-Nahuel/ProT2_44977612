<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('section_principal', 'Home::index');
$routes->get('section_quienes_somos', 'Home::section_quienes_somos');
$routes->get('section_servicios', 'Home::section_servicios');
$routes->get('section_registrarme', 'Home::section_registrarme');
$routes->get('section_iniciar_sesion', 'Home::section_iniciar_sesion');
