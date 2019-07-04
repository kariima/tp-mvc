<?php


class ExamplesController {


    public function index() {

        view('liste-emprunt.index');
    }

    public function add() {

        view('ajout-emprunt.add');
    }

    public function save() {

        $emprunt = new Emprunt;
        $emprunt->setTitle($_POST['titre']);
        $emprunt->setauthor($_POST['auteur']);
        $emprunt->setType($_POST['Type']);

        $emprunt->save();

    }

}