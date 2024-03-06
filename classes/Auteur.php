<?php

class Auteur {

    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(
        string $nom, 
        string 
        $prenom
    ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }

    //===================== Nom =====================//

    public function getNom() : string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
        
        return $this;
    }

    //===================== Prenom =====================//
    
    public function getPrenom() : string
    {
        return $this->prenom;
    }
    
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
        
        return $this;
    }
    
    //===================== Livres =====================//
    
        public function getLivres() : Livre
        {
            return $this->livres;
        }
    
        public function setLivres(Livre $livres)
        {
            $this->livres = $livres;
    
            return $this;
        }

        public function addLivre(Livre $livre) {
            $this->livres[] = $livre;
        }

    //===================== Infos =====================//

    public function afficherBibliographie() 
    {
        $result = "<h2>Livres de $this</h2>";
        foreach($this->livres as $livre) {
            $result .= $livre;
        }

        return $result;
    }

    //===================== toString =====================//

    public function __toString() 
    {
        return $this->prenom." ".$this->nom;
    }
}

?>