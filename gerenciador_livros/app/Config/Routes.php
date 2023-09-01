<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//routes dos livros
$routes->get('livros', 'Livros::index');
$routes->get('livros/adicionar', 'Livros::adicionar');
$routes->post('livros/add', 'Livros::add');
$routes->match(['get', 'post'], 'livros/editar/(:num)', 'Livros::editar/$1');
$routes->get('livros/deletar/(:num)', 'Livros::deletar/$1');
//routes de categorias
$routes->get('categorias/lista', 'Categorias::index');
$routes->get('categorias/adicionar', 'Categorias::adicionar');
$routes->get('categorias/editar/(:num)', 'Categorias::editar/$1');
$routes->get('categorias/deletar/(:num)', 'Categorias::deletar/$1');

$routes->post('categorias/add', 'Categorias::add');




// Adicione outras rotas para criar, editar e deletar depois.
