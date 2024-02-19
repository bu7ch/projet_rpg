<?php

namespace App\Entity;

class Personnage {
    private $nom;
    private $niveau;
    private $pointsDeVie;

    public function __construct($nom, $niveau, $pointsDeVie) {
        $this->nom = $nom;
        $this->niveau = $niveau;
        $this->pointsDeVie = $pointsDeVie;
    }

    public function afficherInfos() {
        return "Nom: {$this->nom}, Niveau: {$this->niveau}, Points de Vie: {$this->pointsDeVie}";
    }
}