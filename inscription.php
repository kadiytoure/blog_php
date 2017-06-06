<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super blog</title>
</head>
<body>
    <h1>Mon super blog !</h1>
    <a href="create.php">Ajouter</a>
    <?php
    $files = scandir("dossier");
    foreach($files as $file) {
        if (is_dir($file)) {
            continue;
        }
        echo '<h2>'.basename($file, ".txt").'</h2>';
        $content = file_get_contents('dossier/'.$file);
        echo '<p>'.$content.'</p>';
        echo '<form method="post" action="delete.php">';
        echo '<input type="hidden" '
        .'name="fichier" value="' . $file . '">';
        echo '<button>Supprimer</button>';
        echo '</form>';
        echo '<a href="delete.php?fichier='
                .$file.'">Modifier</a>';
                require("header.php");
    }
/*
    $variable = 'blou';
    echo '<br/>';
    echo md5($variable);
    echo '<br/>';
    echo md5($variable);
*/
    ?>
</body>
</html>