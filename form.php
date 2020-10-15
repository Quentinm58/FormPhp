<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$prenom = $_POST["prenom"];
$name = $_POST["nom"];

$sql = "INSERT INTO user (prenom, nom) VALUES ('$prenom', '$name')";


$pdo->exec($sql);

?>


