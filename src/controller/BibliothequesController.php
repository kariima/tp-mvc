<?php


class BibliothequesController {


    public function index() {

        //$examples = Example::findAll();

        view('bibliotheque.index');
    }

    public function add() {

        view('bibliotheque.add');
    }

    public function save() {

        // $flight = new Example;
        // $flight->setField1($_POST['field1']);
        // $flight->setField2($_POST['field2']);
        // $flight->setField3($_POST['field3']);
        // $flight->setField4($_POST['date'], $_POST['time']);
        // $flight->setPhoto($_FILES['photo']);

        // $flight->save();

    }

}