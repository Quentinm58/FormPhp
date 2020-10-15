<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$pdoStat = $pdo ->prepare('SELECT * FROM user');


$executeIsok = $pdoStat->execute();


$contacts = $pdoStat->fetchAll();
?>
<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="stylelister.css">
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Listes des contacts</h1>

<ul class="liste">
    <?php foreach ($contacts as $contact):?>
        <li>
            <?= $contact[ 'nom'] ?> <?= $contact['prenom'] ?>
        </li>

    <?php endforeach; ?>
</ul>

</body>



</html>
