 <link rel="stylesheet" href="style2.css">
 
<?php

$isSuccessful = false;
// Si le forumlaire à bien soumis un input nommé "picture"
if (isset($_FILES["picture"])) {
    

    // Je récupère le chemin temporaire du fichier uploadé
    $chemin_tmp = $_FILES["picture"]["tmp_name"];

    // A l'aide du chemin temporaire, je déplace le fichier vers le dossier "photos/" avec le nom du fichier uploadé
    $isSuccessful = move_uploaded_file( $chemin_tmp, "photos/".$_FILES["picture"]["name"] );
}
var_dump($_FILES)
?>
<h1>Mini insta<h1>

<?php if($isSuccessful == true) : ?>
    <h1>Upload Réussi ! </h1>
<?php else :?>
    
    <h1>Upload Failed ! </h1>
<?php endif; ?>



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
    echo "<img src='photos/$file_name' >";
    echo date("m-d-Y"),$file_name;
}
?>

<a href="/">Retour à l'accueil</a>


