<?php

$router->get('', 'PagesController@home');
$router->get('about-us', 'PagesController@aboutUs');
$router->get('contact', 'PagesController@contact');
$router->get('products', 'PagesController@products');

$router->post('task/add', 'PagesController@storeTask');

$router->get('admin/products', "ProductsController@index");
$router->get('admin/products/create', "ProductsController@create");
$router->post('admin/products', "ProductsController@store");
$router->get('admin/products/show', "ProductsController@show");
$router->get('admin/products/edit', "ProductsController@edit");
$router->post('admin/products/update', "ProductsController@update");
$router->post('admin/products/destroy', "ProductsController@destroy");

