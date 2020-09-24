<?php
require_once "Personnage.class.php";
class PersonnageDefault extends Personnage
{
    private $nom = "Loper";
    private $prenom = "Dave";
    private $age = 18;
    private $sexe = "Masculin";

    public function creerPerso()
    {
        var_dump( "personnage = $this->nom , $this->prenom , $this->age , $this->sexe ");
    }

}

$Personnage1 = new PersonnageDefault();
$Personnage1 ->creerPerso();