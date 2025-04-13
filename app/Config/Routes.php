<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/About', 'Page::about');
$routes->get('/Contact', 'Page::contact'); 
$routes->get('/Faqs', 'Page::faqs');
$routes->get('/page/tos', 'Page::tos');
$routes->get('/biodata', 'Page::biodata');
$routes->get('/Pages', 'Pages::index');
$routes->get('/Pages/contact', 'Pages::contact');
$routes->setAutoRoute(false);
