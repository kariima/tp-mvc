<?php


class EmpruntsController {


    /*public function index() {

        view('emprunts.index');
    } */

    public function add() {

        $membres = Membre::findAll();
        view('emprunts.ajout-emprunt', compact('membres'));
    }

    public function index()
    {
        $emprunts = Emprunt::findAll();
        view('emprunts.index', compact('emprunts'));
    }

    public function save($idUser, $idLivre) {

        $emprunt = new Emprunt;
        $emprunt->setLecteurId($idUser);
        $emprunt->setArticleId($idLivre);
        $emprunt->setDateEmprunt( date('Y-m-d') );

        $emprunt->save();

        redirectTo('liste-emprunt');

    }

}