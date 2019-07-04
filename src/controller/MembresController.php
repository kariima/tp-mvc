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
        
        $membre = new Membre;
        $membre->setId($_POST['id']);
        $membre->setNom($_POST['nom']);
        $membre->setPrenom($_POST['prenom']);
        $membre->setMail($_POST['mail']);
        $membre->setAdresse($_POST['adresse']);
        $membre->setCP($_POST['cp']);
        $membre->setVille($_POST['ville']);
        $membre->setCarteBancaire($_POST['carte bancaire']);
        $membre->setPhoto($_FILES['photo']);

        $membre->save();
    }

    public function show($membre)
    {

        $membre = Membre::findOne($membre);
        view('membres.show', compact('membre'));
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
 