<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


include "Agence.php";

if (isset($_GET["agence"]) && isset($_GET["employe"]))
{
    
    var_dump("L'agence de rattachement de ".$employe[$_GET["employe"]]->getPrenom(). " "  .$employe[$_GET["employe"]]->getNom() ." est " . $agence[$_GET["agence"]]-> getNomAg() );
    $agence[$_GET["agence"]]->restaurant();
    $employe[$_GET["employe"]]->ChVac();
}




?>
</body>
</html>