<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification PHP</title>
</head>
<body>
    <form method="GET" action="inscription.php">
        <label for="pseudo">Votre pseudo :</label>
        <input id="pseudo" name="idpseudo" type="text" />
        <label for="psswd">Password :</label>
        <input id="psswd" name="idpsswd" type="password" />
        <button>Inscription</button>
        <button>Connexion</button>
        </form>
        <?php
        $fichiers= "dossier";
        $pseudo="idpseudo";
        ?>
</html>
