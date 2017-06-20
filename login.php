<?php 
$pseudo = $_POST['pseudo'];
$passwd = $_POST['mdp'];

if ($pseudo & $passwd != "utilisateur/") {
    echo "la connexion n'est pas effective";
} else {

echo "la connexion est effective";
    }