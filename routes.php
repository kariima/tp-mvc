<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );
$router->get('list-examples', 'ExamplesController@index');
$router->get('add-example', 'ExamplesController@add');
$router->post('add-example', 'ExamplesController@save');

$router->get('profil-utilisateur/{id}', 'UtilisateursController@show');
// Run it!
$router->run();