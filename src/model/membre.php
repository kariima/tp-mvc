<?php

class Membre extends Db
{

    const TABLE_NAME = "compte_lecteur";

    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $photo;
    protected $adresse;
    protected $renouvellement;
    protected $motdepasse;
    protected $cp;
    protected $ville;
    protected $cartebancaire;


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function setEmail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function setRenouvellement($renouvellement)
    {
        $this->renouvellement = $renouvellement;
        return $this;
    }

    public function setPhoto($photo)
    {
        if (isset($photo) and $photo['error'] == 0) {
            // Testons si le fichier n'est pas trop gros
            if ($photo['size'] <= 10000000) {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($photo['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees)) {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($photo['tmp_name'],  './public/uploads/' . $photo['name']);

                    $this->photo = $photo['name'];
                    return $this;
                }
            } else {
                throw new Exception('photo trop grande');
            }
        } else {
            throw new Exception('une erreur est survenue à l\'upload du fichier');
        }
    
    }

    public function setMotDePasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;
        return $this;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
        return $this;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }

    public function setCarteBancaire($cartebancaire)
    {
        $this->cartebancaire = $cartebancaire;
        return $this;
    }


public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getEmail()
    {
        return $this->mail;
    }
    public function getPhoto()
    {
        return $this->photo;
    }

    public function getRenouvellement()
    {
        return $this->renouvellement;
    }

    public function getMotDePasse()
    {
        return $this->motdepasse;
    }

    public function getCp()
    {
        return  $this->cp;
    
    }

    public function getVille()
    {
        return $this->ville;
    
    }

    public function getCarteBancaire()
    {
        return $this->cartebancaire;
       
    }

    public function save()
    {
        $data = [
            "nom"    => $this->getNom(),
            "prenom"    => $this->getPrenom(),
            "mail"    => $this->getEmail(),
            "photo"     => $this->getPhoto(),
            "renouvellement" => $this->getRenouvellement(),
            "mot_de_passe" => $this->getMotDePasse(),
            "adresse" => $this->getAdresse(),
            "cp" => $this->getCp(),
            "ville" => $this->getVille(),
            "carte_bancaire" => $this->getCarteBancaire()


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

    public static function findOne(int $id) {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        return $element;

    }
}
