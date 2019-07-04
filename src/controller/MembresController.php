<?php

class MembresController
{

    public function index()
    {

        $membres = Membre::findAll();
        view('membres.index', compact('membres'));
    }

    public function add()
    {

        view('membres.add');
    }

    public function save()
    {
        
        $membre = new Emprunt;
        $membre->setNom($_POST['a']);
        $membre->setPrenom($_POST['lecteur-id']);
        $membre->setMail($_POST['date_emprunt']);
        $membre->setAdresse($_POST['date_emprunt']);
        $membre->setCP($_POST['date_emprunt']);
        $membre->setVille($_POST['date_emprunt']);
        $membre->setCarteBancaire($_POST['date_emprunt']);
        $membre->setPhoto($_POST['date_emprunt']);
        $membre->setRenouvellement($_POST['renouvellement']);

        $membre->save();
    }

    public function show($id)
    {

        $membres = Membre::findOne($id);
        view('membres.show', compact('membres'));
    }
}

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
 