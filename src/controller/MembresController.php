<?php

class MembresController
{

    public function index()
    {

        $membre = Membre::findAll();
        view('liste-membre.index', compact('liste-membre'));
    }

    public function add()
    {

        view('liste-membre.add');
    }


    /* public function show($id)
    {

        $membre = Membre::findOne($id);
        view('liste-membre.show', compact('liste-membre'));
    }
}
*/
/* <?php


class ExamplesController {


    public function index() {

        //$examples = Example::findAll();

        view( 'ajout-emprunt.index');
    }

    public function add() {

        view('ajout-membre.add');
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
*/
} 