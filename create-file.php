<?php
//var_dump ($_POST);
$contenu = $_POST["contenutext"]; // récupération de l'adresse envoyée avec le formulaire (ton champ de texte doit s'appeler "email")
echo "<p>".$contenu."</p>";
$titre = $_POST["idtitre"];
echo "<p>".$titre."</p>";
header('location: index.php');
if (!is_dir("dossier")) {
    mkdir("dossier");
}
$fichier = fopen("dossier/".$titre.".txt", "w");
fwrite($fichier,$contenu);
fclose($fichier);
?>
