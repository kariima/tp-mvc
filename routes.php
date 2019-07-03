<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );
$router->get('ajout-emprunt', 'ExamplesController@index');
$router->get('ajout-membre', 'ExamplesController@add');

$router->post('', 'ExamplesController@save');
$router->post('ajout-emprunt', 'ExamplesController@index');
$router->post('ajout-membre', 'ExamplesController@add');


// Run it!
$router->run();
