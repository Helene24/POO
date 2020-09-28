<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php include_once "Employe.php"; ?>

<div class="row d-flex table-responsive p-0 m-0 ">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <table class="table table-striped table-bordered table-hover table-warning">

            <thead class="thead-light  ">
                <tr>
                    <th scope="col ">Nom </th>
                    <th scope="col ">Prénom</th>
                    <th scope="col ">Date d'embauche</th>
                    <th scope="col ">Fonction</th>
                    <th scope="col ">Salaire</th>
                    <th scope="col ">Service</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach($employe as $key => $value) {?>
                <tr>
                    <td><a href="prime.php?employe=<?=$key?>"><?=$value->getNom()?></a></td>
                    <td><?= $value->getPrenom() ?></td>
                    <td><?= $value->getdateEmbauche() ?></td>
                    <td><?= $value->getFonction() ?></td>
                    <td><?= $value->getSalaire() ?></td>
                    <td><?= $value->getService() ?></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

</div>

</body>
</html>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>