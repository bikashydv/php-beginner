<?php

require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\ProductController;

$router = new Router();
$p=new ProductController;

$router->get('/',[$p,'index']);
$router->get('/products',[$p,'index']);
$router->get('/products/create',[$p,'create']);
$router->post('/products/create',[$p,'create']);
$router->get('/products/update',[$p,'update']);
$router->post('/products/update',[$p,'update']);
$router->post('/products/delete',[$p,'delete']);

$router->resolve();