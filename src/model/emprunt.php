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
        $dateFormat = DateTime::createFromFormat('d-m-Y', $DateEmprunt);
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
            "Id"    => $this->getId(),
            "ArticleId"    => $this->getArticleId(),
            "LecteurId"    => $this->getLecteurId(),
            "DateEmprunt"  => $this->getDateEmprunt(),
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::KINDLE, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function findAll() {
        $data = Db::dbFind(self::KINDLE);
        return $data;
    }
}