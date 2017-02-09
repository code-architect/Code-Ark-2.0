<?php


$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('blog', 'BlogController@home');
$router->get('doit', 'BlogController@doit');

$router->post('addblog', 'BlogController@store');


