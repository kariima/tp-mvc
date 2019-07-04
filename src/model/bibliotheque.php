<?php

class Bibliotheque extends Db
{

    const TABLE_NAME = "bibliotheque";

    protected $id;
    protected $titre;
    protected $auteur;
    protected $résumé;
    protected $catégorie;
    protected $genre;
    protected $delai;
    protected $prix;
    protected $dateDeParution;
    protected $couverture;
    
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTitre( $titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    public function setRésumé( $résumé)
    {
        $this->résumé = $résumé;
        return $this;
    }

    public function setCatégorie($catégorie)
    {
        $this->catégorie = $catégorie;
        return $this;
    }

    public function setGenre( $genre)
    {
        $this->genre = $genre;
        return $this;
    }

    public function setDelai($delai)
    {
        $this->delai = $delai;
        return $this;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    public function setDateDeParution($date, $time)
    {
        $dateFormat = DateTime::createFromFormat('Y-m-d', $date);

        if (!$dateFormat) {
            throw new Exception('La date a un format incorrect.');
        }

        $this->dateDeParution = $date . ' ' . $time;
        return $this;
    }

    public function setCouverture($couverture)
    {
        if (isset( $couverture) and $couverture['error'] == 0) {
            // Testons si le fichier n'est pas trop gros
            if ( $couverture['size'] <= 10000000) {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo( $couverture['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees)) {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($couverture['tmp_name'],  './public/uploads/' . $couverture['name']);

                    $this->couverture = $couverture['name'];
                    return $this;
                }
            } else {
                throw new Exception('photo trop grande');
            }
        } else {
            throw new Exception('une erreur est survenue à l\'upload du fichier');
        }
    }

    public function getField1()
    {
        return $this->field1;
    }
    public function getField2()
    {
        return $this->field2;
    }
    public function getField3()
    {
        return $this->field3;
    }
    public function getField4()
    {
        return $this->field4;
    }
    public function getPhoto()
    {
        return $this->photo;
    }

    public function save()
    {
        $data = [
            "field1"    => $this->getField1(),
            "field2"    => $this->getField2(),
            "field3"    => $this->getField3(),
            "field4"    => $this->getField4(),
            "photo"     => $this->getPhoto(),
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }

    public static function findByGenre($genre)
    {
        $data = Db::dbFind(self::TABLE_NAME, [
            ['genre', '=', $genre]
        ]);

        return $data;
    }
}
