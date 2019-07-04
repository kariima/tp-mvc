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

        $emprunt = new Example;
        $emprunt->setField1($_POST['field1']);
        $emprunt->setField2($_POST['field2']);
        $emprunt->setField3($_POST['field3']);
        $emprunt->setField4($_POST['date'], $_POST['time']);
        $emprunt->setPhoto($_FILES['photo']);

    }

}