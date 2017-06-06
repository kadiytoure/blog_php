    <?php
$titre ="";
$contenu="";
 if (isset ($_GET["filename"])) {
 $titre= $_GET["filename"];
 $contenu= file_get_contents('dossier/'.$_GET['filename']);
 }
/*
$fichier=$titre;
if(isset($_GET['filename']))
{
    unlink($fichier);
    $ouverture=fopen("$fichier", "a+");
    fwrite($ouverture, "$_GET[modif]");
    fclose($ouverture);
    echo ''
}
*/
require("header.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog-php</title>
</head>

<body>
    <form method="POST" action="create-file.php">
        <label for="titre">titre</label>
        <input id="titre" name="idtitre" type="text" value="<?php echo $titre; ?>" />
        <textarea id="contenu" name="contenutext" cols="36"  row="12"><?php echo $contenu; ?>Text</textarea>
        <input type="submit" value="ok" />
    </form>

</body>

</html>