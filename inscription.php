<?php
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
if (is_file('utilisateur/'.$pseudo .'.txt')) {
    echo "l'utilisateur existe déjà";
    exit(1);
}
if (!is_dir('utilisateur/')) {
    mkdir ('utilisateur/');
}
$file = fopen('utilisateur/'.$pseudo.'.txt','w');
fwrite($file, $mdp);
echo "vous êtes bien connectés!";

?>