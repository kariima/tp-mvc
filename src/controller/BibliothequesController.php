<?php


class BibliothequesController {


    public function index() {

        $bibliotheque = Bibliotheque::findAll();

        view('bibliotheque.index', compact('bibliotheque'));
    }

    public function add() {

        view('bibliotheque.ajout-bibliotheque');
    }

    public function show(int $id) {

        $bibliotheque = Bibliotheque::findOne($id);
        view('bibliotheque.show', compact('bibliotheque'));
    }

    public function save() {
        $bibliotheque = new Bibliotheque;
        $bibliotheque->setTitre($_POST['titre']);
        $bibliotheque->setAuteur($_POST['auteur']);
        $bibliotheque->setRésumé($_POST['resume']);
        $bibliotheque->setCatégorie($_POST['categorie']);
        $bibliotheque->setGenre($_POST['genre']);
        $bibliotheque->setDelai($_POST['delai']);
        $bibliotheque->setPrix($_POST['prix']);
        $bibliotheque->setDateDeParution($_POST['dateDeParution']);
        $bibliotheque->setCouverture($_FILES['couverture']);

        $bibliotheque->save();

        redirectTo('liste-bibliotheque');
    }

    public function livresByGenre($genre) {

        $livres = Bibliotheque::findByGenre($genre);
        
        $livresJson = json_encode($livres);

        Header('Content-type: application/json');
        echo $livresJson;
    }

        public function update($id)
        {
        $bibliotheque = Bibliotheque::findOne($id);
        $bibliotheque->setTitre($_POST['titre']);
        $bibliotheque->setAuteur($_POST['auteur']);
        $bibliotheque->setRésumé($_POST['resume']);
        $bibliotheque->setCatégorie($_POST['categorie']);
        $bibliotheque->setGenre($_POST['genre']);
        $bibliotheque->setDelai($_POST['delai']);
        $bibliotheque->setPrix($_POST['prix']);
        $bibliotheque->setDateDeParution($_POST['dateDeParution']);
        $bibliotheque->setCouverture($_FILES['couverture']);
        $bibliotheque->update();

            // On redirige vers la page de l'étudiant
            Header('Location: ' . url('bibliotheque/' . $bibliotheque->getId()));
        }
    
        public function delete($id)
        {
        $bibliotheque = Bibliotheque::findOne($id);
        $bibliotheque->delete();

            // On redirige vers la liste des étudiants
            redirectTo('liste-bibliotheque');
        }

    public function edit($id)
    {
        $bibliotheque = Bibliotheque::findOne($id);
        

        view('bibliotheque.edit', compact('bibliotheque'));
    }
    

}