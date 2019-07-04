<?php


class BibliothequesController {


    public function index() {

        //$examples = Example::findAll();

        view('liste-bibliotheque.index');
    }

    public function add() {

        view('ajout-bibliotheque.add');
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

    }

}