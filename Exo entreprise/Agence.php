<?php

require "Employe.php";

class agence
{
    private $ID;
    private $nomAg;
    private $adresseAg;
    private $codePostAg;
    private $villeAg;
    private $resto;


    public function __construct($ID, $nomAg, $adresseAg, $codePostAg, $villeAg, $resto)
    {
        $this->ID = $ID;
        $this->nomAg = $nomAg;
        $this->adresseAg = $adresseAg;
        $this->codePostAg = $codePostAg;
        $this->villeAg = $villeAg;  
        $this->resto = $resto;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function setNomAg($nomAg)
    {
        $this->nomAg = $nomAg;
    }

    public function getNomAg()
    {
        return $this->nomAg;
    }

    public function setAdresseAg($adresseAg)
    {
        $this->adresseAg = $adresseAg;
    }

    public function getAdresseAg()
    {
        return $this->adresseAg;
    }

    public function setCodePostAg($codePostAg)
    {
        $this->codePosteAg = $codePostAg;
    }

    public function getCodePostAg()
    {
        return $this->codePostAg;
    }

    public function setVilleAg($villeAg)
    {
        $this->villeAg = $villeAg;
    }

    public function getVilleAg()
    {
        return $this->villeAg;
    }

    public function setResto($resto)
    {
        $this->resto = $resto;
    }

    public function getResto()
    {
        return $this->resto;
    }


    public function AgRattachemt()
    {
        var_dump("L'agence de rattachement de $this->prenom $this->nom est $this->nomAg");
    }
    
    
    public function restaurant()
    {
        if ($this->resto== "oui")
        {
            var_dump("$this->nomAg dispose d'un restaurant");
        } else
        {
            var_dump("$this->nomAg dispose de tickets restaurants");
        }
    }

    
    
} 
$agence = new ArrayObject();
$agence ->append(new agence("0", "LeReve", "2 rue du moulin", "80000", "Amiens", "oui"));
$agence ->append(new agence("1", "LaClasse", "8 rue des pierres", "75000", "Paris", "non"));
$agence ->append(new agence("2", "LeStyle", "65 rue de l'araignée", "60000", "Compiègne", "oui"));



