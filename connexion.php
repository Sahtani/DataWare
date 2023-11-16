<?php
//CONNEXION AVEC LA BASE DE DONNEES
$server = "localhost";
$user = "root";
$password = "";
$db = "dataware";

$connect = mysqli_connect($server, $user, $password, $db);

if (!$connect) {
    die("La connexion a échoué avec la base de données: " . mysqli_connect_error());
}