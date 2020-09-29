<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 
include "Employe.php";

$MS = 0;
foreach($employe as $emp){
    $MS += $emp->getSalaire();
}
var_dump( "la MS est de $MS ");

$nbreEmpl = 0;
foreach($employe as $nbre){
    $nbreEmpl += count($nbre);
}
var_dump("Le nombre d'employé est de $nbreEmpl");


var_dump("Le tri par ordre alphabétique de nom est:");

function AlphaNom($a, $b) {
    if ($a->getNom() == $b->getNom()) {
        return 0;
    }
    return ($a->getNom() < $b->getNom()) ? -1 : 1;
}
$employe->uasort('AlphaNom');
var_dump($employe);
echo "<hr>";

var_dump("Le tri par ordre alphabétique de prénom est:");

function AlphaPrenom($a, $b) {
    if ($a->getPrenom() == $b->getPrenom()) {
        return 0;
    }
    return ($a->getPrenom() < $b->getPrenom()) ? -1 : 1;
}
$employe->uasort('AlphaPrenom');
echo "<hr>";

var_dump($employe);

var_dump("Le tri par ordre alphabétique de service est:");

function AlphaService($a, $b) {
    if ($a->getService() == $b->getService()) {
        return 0;
    }
    return ($a->getService() < $b->getService()) ? -1 : 1;
}
$employe->uasort('AlphaService');
echo "<hr>";

var_dump($employe);



?>
</body>
