<?php
//require 'Agence.php';

class employe
{
    protected $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaire;
    private $service;
    private $agence;

    public function __construct($nom, $prenom, $dateEmbauche, $fonction,$salaire, $service, $agence)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->agence = $agence;
        //var_dump("$this->nom $this->prenom $this->dateEmbauche $this->fonction $this->salaire $this->service");
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setdateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    public function getdateEmbauche()
    {
        return $this->dateEmbauche;
    }

    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    public function getFonction()
    {
        return $this->fonction;
    }

    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setService($service)
    {
        $this->service = $service;
    }

    public function getService()
    {
        return $this->service;
    }

    public function setAgence($agence)
    {
        $this->agence = $agence;
    }

    public function getAgence()
    {
        return $this->agence;
    }

    public function anciennete(int $ancienne)
    {
        $aujourdhui= new DateTime();
        $dateEmbauch=new DateTime($this->dateEmbauche);     
        $ancienne= date_diff($aujourdhui,$dateEmbauch);
       
        $ancienne = $ancienne->y;
        var_dump("L'anciennenete de $this->prenom $this->nom est de $ancienne ans");
        $this->ancienne = $ancienne;
    }

    public function primeSalaire()
    {
        $prime5=  ($this->salaire *5/100);
        var_dump("La prime annuelle de 5% de $this->prenom $this->nom est de $prime5 euros");
        $SalPrime5= $this->salaire + $prime5;
        var_dump("le salaire de $this->prenom $this->nom est de $SalPrime5 euros avec la prime de 5%");
        $prime2= $this->salaire *2/100;
        var_dump("La prime annuelle de 2% de $this->prenom $this->nom est de $prime2 euros par année d'anciennneté");
        $prime2Anc= $this->ancienne*$prime2;
        var_dump("Il a $this->ancienne années d'anciennenté donc $prime2Anc euros");
        $SalPrime2= $this->salaire + $prime2Anc;
        var_dump("le salaire de $this->prenom $this->nom est de $SalPrime2 euros avec la prime de 2%");
        $totalPrimes= $prime2Anc + $prime5;
        var_dump("Le total des primes de $this->prenom $this->nom est de $totalPrimes euros");
        $totalPrimesEtSalaire= $this->salaire+ $prime2Anc + $prime5;
        var_dump("Le total du salaire annuel avec primes de $this->prenom $this->nom est de $totalPrimesEtSalaire euros");

    }    

    public function ChVac()
    {
        if ($this->ancienne > 1)
        { 
            var_dump("$this->prenom $this->nom peut disposer de chèques vacances");
        }
        else
        {
            var_dump("$this->prenom $this->nom ne peut pas disposer de chèques vacances");
        }
    }

}
$employe = new ArrayObject();
$employe->append(new employe("Durand", "Pierre", "2000-06-15", "ouvrier", "30000", "Technique", "0"));
$employe->append(new employe("Dupont", "Chantal", "2010-12-13", "secretaire", "26000", "Administratif", "1"));
$employe->append(new employe("Marchand", "Simone", "2008-05-07", "commerciale", "27000", "Commercial", "2"));
$employe->append(new employe("Martin", "Raymond", "2014-07-18", "comptable", "31000", "Comptabilité", "2"));
$employe->append(new employe("Leroy", "Fabien", "2020-04-26", "ouvrier", "34000", "Technique", "1"));

?>


