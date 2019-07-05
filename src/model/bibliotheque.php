<?php

class Bibliotheque extends Db
{

    const TABLE_NAME = "bibliotheque";

    protected $id;
    protected $titre;
    protected $auteur;
    protected $resume;
    protected $categorie;
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
        if (strlen($titre) < 5) {
            throw new Exception('Le titre est trop court.');
        }

        if (strlen($titre) > 255) {
            throw new Exception('Le titre est trop long.');
        }
        
        $this->titre = $titre;
        return $this;
    }

    public function setAuteur($auteur)
    {
        if (strlen($auteur) < 5) {
            throw new Exception("Le nom de l'auteur est trop court.");
        }

        if (strlen($auteur) > 255) {
            throw new Exception("Le nom de l'auteur est trop long.");
        }

        $this->auteur = $auteur;
        return $this;
    }

    public function setRésumé( $resume)
    {
        if (strlen($resume) < 5) {
            throw new Exception ("Le contenu du resume est trop court.");
        }

        $this->resume = $resume;
        return $this;
    }

    public function setCatégorie($categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function setGenre( $genre)
    {
        if ($_POST['genre'] != $genre) {
            throw new Exception ("Veuillez choisir un genre dans la liste déroulante.");
        }
        $this->genre = $genre;
        return $this;
    }

    public function setDelai($delai)
    {
        if (!is_numeric($delai)) {
            throw new Exception ('Le délai doit être un nombre entier.');
        }
        $this->delai = $delai;
        return $this;
    }

    public function setPrix($prix)
    {
        if (!is_numeric($prix)) {
            throw new Exception ('Le prix doit être un nombre entier.');
        }
        $this->prix = $prix;
        return $this;
    }

    public function setDateDeParution($dateDeParution)
    {
        $dateFormat = DateTime::createFromFormat('Y-m-d', $dateDeParution);

        if (!$dateFormat) {
            throw new Exception('La date a un format incorrect.');
        }

        $this->dateDeParution = $dateDeParution ;
        return $this;
    }

    public function setCouverture($couverture)
    {
        if ( !empty($couverture['name']) ) {

            if ($couverture['error'] == 0) {
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

        $this->couverture = 'aa';
        
    }

    public function getId() {
        return $this->id;
    }
    public function getTitre() {
        $titleUppercase = ucfirst($this->titre);
        return $titleUppercase;
    }
    
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function getRésumé()
    {
        return $this->resume;
    }
    public function getCatégorie()
    {
        return $this->categorie;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function getDelai()
    {
        return $this->delai;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function getDateDeParution()
    {
        return $this->dateDeParution;
    }
    public function getCouverture()
    {
        return $this->couverture;
    }

    public function save()
    {

        $data = [
            "titre"             => $this->getTitre(),
            "auteur"            => $this->getAuteur(),
            "resume"            => $this->getRésumé(),
            "categorie"         => $this->getCatégorie(),
            "genre"             => $this->getGenre(),
            "delai"             => $this->getDelai(),
            "prix"              => $this->getPrix(),
            "date_de_parution"  => $this->getDateDeParution(),
            "couverture"        => $this->getCouverture(),
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
