<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include "Employe.php";

if (isset($_GET["employe"]))
{
    $employe[$_GET["employe"]]->anciennete();
    $employe[$_GET["employe"]]->primeSalaire();
    
}

