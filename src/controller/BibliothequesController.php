<?php


class BibliothequesController {


    public function index() {

        //$bibliotheque = Bibliotheque::findAll();
        $bibliotheque = '';

        view('bibliotheque.index', compact('bibliotheque'));
    }

    public function add() {

        view('bibliotheque.ajout-bibliotheque');
    }

    public function save() {

        $bibliotheque = new Bibliotheque;
        $bibliotheque->setTitre($_POST['titre']);
        $bibliotheque->setAuteur($_POST['auteur']);
        $bibliotheque->setRésumé($_POST['résumé']);
        $bibliotheque->setCatégorie($_POST['catégorie']);
        $bibliotheque->setGenre($_POST['genre']);
        $bibliotheque->setDelai($_POST['delai']);
        $bibliotheque->setPrix($_POST['prix']);
        $bibliotheque->setDateDeParution($_POST['date'], $_POST['time']);
        $bibliotheque->setCouverture($_FILES['couverture']);

        $bibliotheque->save();

        BibliothequesController::index();
    }

    public function livresByGenre($genre) {

        $livres = Bibliotheque::findByGenre($genre);
        
        $livresJson = json_encode($livres);

        Header('Content-type: application/json');
        echo $livresJson;
    }

}