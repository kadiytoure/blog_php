<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
 
    <h1>Mon Blog</h1>

    <?php
    $dir = "dossier";
    $filesone = scandir($dir);
    
    // $filestwo = scandir($dir,1);

    // print_r($filesone);
    // print_r($filestwo);
    // $array_files [] = $dir;
    foreach ($filesone as $file)
    {
        if(is_dir($file)) {
            continue;
        }
        echo '<h2>'.basename($file,".txt").'</h2>'.PHP_EOL;
        $content = file_get_contents('dossier/'.$file);
        echo '<p>'.$content.'</p>'.PHP_EOL;
        echo  "<form method= 'GET' action= 'delete.php'>"
            ."<input type=\"hidden\" name=\"filename\" value='$file'>".
            "<input type='submit' value='delete' />"
            ."</form>".PHP_EOL;
        echo "<form method= 'GET' action='create.php'>"
        ."<input type='hidden' name='filename' value='$file'>".
        "<input type='submit' value='modify' />"
        ."</form>".PHP_EOL.PHP_EOL;
    }
    require("header.php");
    /*
    $fh = fopen('aiguille.txt', 'a');
    fwrite($fh,'<h1>Hello World!</h1>');
    fclose($fh);

    unlink($aiguille.txt);
    */
    

    ?>
</body>
</html>
