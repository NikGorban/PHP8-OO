<?php
class LaVoiture{
    // propriétés
    private ?string $marque=null;
    private ?int $annee_sortie=null;
    private ?int $chevaux = null;
    private ?string $model = null;

    // constantes
    public const VOITURE_NEUVE = true; // par défaut publique
    private const MOTORISATION = "Essence";
    // Méthodes

    /* Le constructeur est une méthode publique
    magique qui est appelée lors de l'instanciation
    de la classe dans laquelle il se trouve (new)
    */
    public function __construct(string $laMarque="Indefined", int $year = 0, int $hp = 0, string $laModel = "Indefined"){
        $this->marque = $laMarque;
        $this->annee_sortie = $year;
        $this->chevaux = $hp;
        $this->model = $laModel;
    }

    //getter

    public function getMarque(): ?string{
        return $this->marque;
    }

    public function setMargue(?string $laMarque): void{
        $traiteMarque = htmlspecialchars(strip_tags(trim( $laMarque)));
        if ($traiteMarque === ""){
            trigger_error("ERROR!!!");
        }else{
            $this -> marque = $traiteMarque;
        }
    }


    public function getAnneSortie(){

    }

    public function setAnneSortie(){
        
    }
}