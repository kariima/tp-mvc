<?php

class Review extends Db
{
    const TABLE_NAME = "reviews";

    protected $id;
    protected $note;
    protected $commentaire;
    protected $lecteurId;
    protected $articleId;



    
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNote($note){
        $this->note = $note;
        return $this;
    }

    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    public function setLecteurId($lecteurId) {
        $this->lecteurId = $lecteurId;
        return $this;
    }

    public function setArticleId($articleId) {
        $this->articleId = $articleId;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getNote() {
        return $this->note;
    }

    public function getCommentaire() {
        return $this->commentaire;
    }

    public function getLecteurId() {
        return $this->lecteurId;
    }

    public function getArticleId() {
        return $this->articleId;
    }


    public function save()
    {
        $data = [
            "id"    => $this->getId(),
            "note"  => $this->getNote(),
            "commentaire"  => $this->getCommentaire(),
            "articleId"    => $this->getArticleId(),
            "lecteurId"    => $this->getLecteurId(),

        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);

        $objects = [];
        
        /* On transforme nos arrays en objets de type Emprunt */
        foreach($data as $d) {
            $review = new Review;
            $review->setId($d['id']);
            $review->setNote($d['note']);
            $review->setCommentaire($d['commentaire']);
            $review->setArticleId($d['articleId']);
            $review->setLecteurId($d['lecteurId']);

            $objects[] = $review;
        }

        return $objects;
    }

    public function getMembre() {
        // J'utilise getDb de la classe Db qui me donne un pointeur PDO.
		$bdd = Db::getDb();

		// Définition de la requête
		$req = "SELECT *
				FROM `reviews`
				INNER JOIN compte_lecteur ON reviews.lecteurId =  compte_lecteur.id
            WHERE reviews.id = " . $this->getId();

		$res = $bdd->query($req);
		$courses = $res->fetch(PDO::FETCH_ASSOC);

		return $courses;
    }

    public function getLivre() {
        // J'utilise getDb de la classe Db qui me donne un pointeur PDO.
		$bdd = Db::getDb();

		// Définition de la requête
		$req = "SELECT *
				FROM `reviews`
				INNER JOIN bibliotheque ON reviews.articleId =  bibliotheque.id
            WHERE reviews.id = " . $this->getId();

		$res = $bdd->query($req);
		$courses = $res->fetch(PDO::FETCH_ASSOC);

		return $courses;
    }
}