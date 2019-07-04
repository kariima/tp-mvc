<?php


class EmpruntsController {


    public function index() {

        view('liste-emprunt.index');
    }

    public function add() {

        view('ajout-emprunt.add');
    }

    public function save() {

        $emprunt = new Emprunt;
        $emprunt->setArticleId($_POST['article-id']);
        $emprunt->setLecteurId($_POST['lecteur-id']);
        $emprunt->setDateEmprunt($_POST['date_emprunt']);
        $emprunt->setRenouvellement($_POST['renouvellement']);

        $emprunt->save();

    }

}