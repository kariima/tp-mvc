<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );

$router->get('liste-bibliotheque', 'BibliothequesController@index');
$router->get('ajout-bibliotheque', 'BibliothequesController@add');
$router->post('ajout-bibliotheque', 'BibliothequesController@save');
$router->get('oeuvre-individuelle/{id}/edit', 'BibliothequesController@edit');
$router->post('oeuvre-individuelle/{id}/edit', 'BibliothequesController@update');
$router->get('oeuvre-individuelle/{id}/delete', 'BibliothequesController@delete');
$router->get('oeuvre-individuelle/{id}', 'BibliothequesController@show');




$router->get('bibliotheque/genre/{genre}', 'BibliothequesController@livresByGenre');

$router->get('ajout-emprunt/{idUser}/{idLivre}', 'EmpruntsController@save');
$router->get('ajout-emprunt', 'EmpruntsController@add');
$router->get('liste-emprunt', 'EmpruntsController@index');

$router->get('liste-membre', 'MembresController@index');
$router->get('ajout-membre', 'MembresController@add');
$router->post('ajout-membre', 'MembresController@save');
$router->get('profil-membre/{id}', 'MembresController@show');


// Run it!
$router->run();
