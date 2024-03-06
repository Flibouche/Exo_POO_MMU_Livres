<?php

class Livre  {

    private Auteur $auteur;
    private string $titre;
    private int $anneeParution;
    private int $nbPages;
    private float $prix;

    public function __construct(
        Auteur $auteur, 
        string $titre, 
        int $anneeParution, 
        int $nbPages, 
        float $prix)
     {
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->anneeParution = $anneeParution;
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $this->auteur->addLivre($this);
    }

    //===================== Auteur =====================// 
    
    public function getAuteur() : Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    //===================== Titre =====================// 
    
    public function getTitre() : string
    {
        return $this->titre;
    }
    
    public function setTitre(string $titre)
    {
        $this->titre = $titre;
        
        return $this;
    }

    //===================== Année de parution =====================// 
    
    public function getAnneeParution() : int
    {
        return $this->anneeParution;
    }
    
    public function setAnneeParution(int $anneeParution)
    {
        $this->anneeParution = $anneeParution;
        
        return $this;
    }

    //===================== Nombre de pages =====================// 
    
    public function getNbPages() : int
    {
        return $this->nbPages;
    }
    
    public function setNbPages(int $nbPages)
    {
        $this->nbPages = $nbPages;
        
        return $this;
    }

    //===================== Prix =====================// 
    
    public function getPrix() : float
    {
        return $this->prix;
    }
    
    public function setPrix(float $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    //===================== toString =====================//
    
    public function __toString() 
    {
        return "$this->titre ($this->anneeParution) : $this->nbPages pages / $this->prix € <br>";
    }
}

?>