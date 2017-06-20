<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification PHP</title>
</head>
<body>
<?php if (isset($_SESSION['utilisateur'])) { ?>
<p> Hello! </p>
<?php } else { ?>
    
    <form action="inscription.php" method="POST">
    <label>Pseudo :</label>
    <input type="text" name="pseudo">
    <label>Mot de Passe :</label>
    <input type="password" name="mdp">
    <button>S'inscrire</button>
</form>
<form action="login.php" method="POST">
    <label>Pseudo :</label>
    <input type="text" name="pseudo">
    <label>Mot de Passe :</label>
    <input type="password" name="mdp">
    <button>Connexion</button>
</form>
<?php } ?>
</body>
</html>
