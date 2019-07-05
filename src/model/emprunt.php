<?php

class Emprunt extends Db {

    const TABLE_NAME = "emprunts";

    protected $id;
    protected $ArticleId;
    protected $LecteurId;
    protected $DateEmprunt;
    protected $setRenouvellement;


    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setArticleId($ArticleId) {
        $this->ArticleId = $ArticleId;
        return $this;
    }

    public function setLecteurId($LecteurId) {
        $this->LecteurId = $LecteurId;
        return $this;
    }

    public function setDateEmprunt($DateEmprunt) {
        $dateFormat = DateTime::createFromFormat('Y-m-d', $DateEmprunt);
        if (!$dateFormat) {
                        throw new Exception('La date a un format incorrect.');
        }
        $this->DateEmprunt = $DateEmprunt;
        return $this;
    }


    public function getId() {
        return $this->id;
    }

    public function getArticleId() {
        return $this->ArticleId;
    }

    public function getLecteurId() {
        return $this->LecteurId;
    }

    public function getDateEmprunt() {
        return $this->DateEmprunt;
    }


    public function save()
    {
        $data = [
            "id"    => $this->getId(),
            "article_id"    => $this->getArticleId(),
            "lecteur_id"    => $this->getLecteurId(),
            "date_emprunt"  => $this->getDateEmprunt(),
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
            $emprunt = new Emprunt;
            $emprunt->setId($d['id']);
            $emprunt->setArticleId($d['article_id']);
            $emprunt->setLecteurId($d['lecteur_id']);
            $emprunt->setDateEmprunt($d['date_emprunt']);

            $objects[] = $emprunt;
        }

        return $objects;
    }

    public function getMembre() {
        // J'utilise getDb de la classe Db qui me donne un pointeur PDO.
		$bdd = Db::getDb();

		// Définition de la requête
		$req = "SELECT *
				FROM `emprunts`
				INNER JOIN compte_lecteur ON emprunts.lecteur_id =  compte_lecteur.id
            WHERE emprunts.id = " . $this->getId();

		$res = $bdd->query($req);
		$courses = $res->fetch(PDO::FETCH_ASSOC);

		return $courses;
    }

    public function getLivre() {
        // J'utilise getDb de la classe Db qui me donne un pointeur PDO.
		$bdd = Db::getDb();

		// Définition de la requête
		$req = "SELECT *
				FROM `emprunts`
				INNER JOIN bibliotheque ON emprunts.article_id =  bibliotheque.id
            WHERE emprunts.id = " . $this->getId();

		$res = $bdd->query($req);
		$courses = $res->fetch(PDO::FETCH_ASSOC);

		return $courses;
    }
}