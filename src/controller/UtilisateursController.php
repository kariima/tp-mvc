<?php

class UtilisateursController {

    public function index() {

        $utilisateurs = Utilisateur::findAll();
        view('utilisateurs.index', compact('utilisateurs'));
    }

    public function show($id) {

        $utilisateur = Utilisateur::findOne($id);
        view('utilisateurs.show', compact('utilisateur'));
    }
}