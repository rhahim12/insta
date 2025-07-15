<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>MINI INSTA<h1>
    <h2>Ajoutez une photo!<h2>    
    <form action="upload-photo.php" method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <button>Envoyer</button>    
    </form>
</body>

</html>
<?php
function lire_dossier()
{
    $file_names = [];
    try {
        $photos_dir = opendir("photos");

        do {
            $file_name = readdir($photos_dir);
            // Je n'affiche pas les fichiers cachés (commençant par un point) et les répertoires spéciaux "." et ".."
            if ($file_name && $file_name != "." && $file_name != ".." && $file_name != "/") {
                $file_names[] = $file_name; // J'ajoute le nom du fichier à la liste
            }
        } while ($file_name);
    } catch (\Throwable $th) {
        throw $th;
    }
    return $file_names;
}

$liste_des_fichiers = lire_dossier();
foreach ($liste_des_fichiers as $file_name) {
    echo "<img src='photos/$file_name' ><br>";
    echo $file_name . "<br>";
    
}
?>
<a href=https://www.youtube.com/watch?v=11msr45jZSQ><img src="emot gal.png" /></a>
<a href=https://www.youtube.com/watch?v=11msr45jZSQ><img src="emote +.png" /></a>
<a href=https://www.youtube.com/watch?v=11msr45jZSQ><img src="up 2.png" /></a>
<a href=form action="upload-photo.php"><img src="emot gal.png" /></a>
<input type="file" name="picture">
<form action="upload-photo.php" method="post" enctype="multipart/form-data">
    <button>lamano</button> 
     <form  action="test.php" method="post" enctype="multipart/form-data" <button><img src="up 2.png" /></button></br>
        <button>hello guys<input type="file" name="picture"></button>
        <button><img src="up 2.png" /></button>    
    </form>

   
 
<?php
$lines = [];
$fichier = fopen("fichier.txt", "r");
if($fichier){

    while (($line = fgets($fichier)) !== false) {
        $lines[] = $line;
    }
    fclose($fichier);
}

