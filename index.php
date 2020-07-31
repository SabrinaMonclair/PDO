<?php

require_once 'controller/indexctrl.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Exercice1</title>
</head>

<body>

    <?php foreach ($clientsArray as $clients) { ?>
        <div class="card m-5" style="width: 18rem;">
            <div class="card-header">
                ID Clients : <?= $clients['id'] ?>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nom : <?= $clients['lastName'] ?></li>
                <li class="list-group-item">Prénom : <?= $clients['firstName'] ?></li>
                <li class="list-group-item">Date de Naissance : <?= $clients['birthDate'] ?></li>
            </ul>
        </div>
    <?php } ?>



    <div class="card m-5" style="width: 18rem;">
        <ul class="list-group">
            <?php foreach ($showsArray as $shows) { ?>
                <li class="list-group-item">Type : <?= $shows['type'] ?></li>
            <?php } ?>
        </ul>
    </div>



    <?php foreach ($obj as $clients) { ?>
        <div class="card m-5" style="width: 18rem;">
            <div class="card-header">
                ID Clients : <?= $clients->id ?>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nom : <?= $clients->lastName ?></li>
                <li class="list-group-item">Prénom : <?= $clients->firstName ?></li>
                <li class="list-group-item">Date de Naissance : <?= $clients->birthDate ?></li>
            </ul>
        </div>
    <?php } ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>