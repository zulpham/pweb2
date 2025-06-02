<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/Fish', 'Pages::fish');
$routes->get('/Tips', 'Pages::tips');
$routes->get('/Contact', 'Pages::contact'); 
$routes->get('/About', 'Page::about');
$routes->get('/Faqs', 'Page::faqs');
$routes->get('/page/tos', 'Page::tos');
$routes->get('/biodata', 'Page::biodata');
$routes->get('/Pages', 'Pages::index');
$routes->get('/Pages/contact', 'Pages::contact');
$routes->get('/Pages/biodata', 'Pages::biodata');
$routes->get('/aku/matkul', 'aku::matkul');
$routes->get('/aku/proyek', 'aku::proyek');
$routes->get('/aku/musik', 'aku::musik');
$routes->get('/aku/film', 'aku::film');
$routes->get('/books', 'Books::index');
$routes->get('/books/create', 'Books::create');
$routes->post('/books/save', 'Books::save');
$routes->get('/books/detail/(:segment)', 'Books::detail/$1');
$routes->delete('/books/(:num)', 'Books::delete/$1');
$routes->get('/books/edit/(:segment)', 'Books::edit/$1');
$routes->post('/books/update/(:num)', 'Books::update/$1');
$routes->setAutoRoute(false);
