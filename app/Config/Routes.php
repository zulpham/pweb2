<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/About', 'page::about');
$routes->get('/Contact', 'page::contact');
$routes->get('/Faqs', 'page::faqs');
$routes->get('/page/tos', 'page::tos');
$routes->get('/biodata', 'page::biodata');
$routes->setAutoRoute(false);
