<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );

$router->get('liste-bibliotheque', 'BibliothequesController@index');
$router->get('ajout-bibliotheque', 'BibliothequesController@add');
$router->post('ajout-bibliotheque', 'BibliothequesController@save');

$router->get('liste-emprunt', 'EmpruntsController@index');
$router->get('ajout-emprunt', 'EmpruntsController@add');
$router->post('ajout-emprunt', 'EmpruntsController@save');

$router->get('liste-membre', 'MembresController@index');
$router->get('ajout-membre', 'MembresController@add');
$router->get('ajout-membre', 'MembresController@show');
$router->post('ajout-membre', 'MembresController@save');



$router->get('profil-utilisateur/{id}', 'UtilisateursController@show');
// Run it!
$router->run();
