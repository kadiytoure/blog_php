<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /*
$fichier = 'dossier/toto.txt';
if (file_exists ($fichier)) {
    unlink($fichier);
    
}
unlink($fichier)
*/
$delete = $_GET["filename"];
unlink('dossier/'.$delete);
require("header.php");
?>
<script>
location.href="index.php";
</script>
    
</body>
</html>