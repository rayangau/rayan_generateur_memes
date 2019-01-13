<?php
include('models/ImageModels.php');
include('models/MemeresultatModels.php');

/***************************/
/*** initialisation Twig ***/
/***************************/
// Charge l'autoloader permettant de charger les classes de TWIG
require 'vendor/autoload.php';
// CHARGE LE LOADER = dossier contenant les templates
$loader = new Twig_Loader_Filesystem('views');
// INITIALISE TWIG = ($loader, tableau d'option environnement)
$twig = new Twig_Environment($loader, [
    // N'active pas le cache (mieux pour le développement)
    'cache'=>false,
    'debug' => true
]);
$twig->addExtension(new Twig_Extension_Debug());




// Précise l'extension de l'image
//header('Content-type: image/jpeg');

// var = Crée une nouvelle image depuis un fichier ou une URL
// $_POST["Rendu"] = chemin complet du fichier image
$template = imagecreatefromjpeg($_POST["Rendu"]);

    // permet de créer un bon chemin pour l'enregistrer sur le serveur
    $texte_encode = urlencode($_POST["Rendu"]);
    $chemin = "../mvc/public/memes/".$texte_encode.".jpeg";

    $font_path = 'C:\xampp\htdocs\memegenerator\mvc\public\polices\impact.ttf';
    // // Set Path to Font File
    // $font_path = 'C:\xampp\htdocs\projets\Dec2018\GeneratorMeme\public\polices\impact.ttf';
    // Attribue une couleur au texte
    $white = imagecolorallocate($template, 255, 255, 255);

        // // Le chemin de la police d'écriture
        // $font_path = 'S:\WampServeur\www\projetlocal\GeneratorMeme\public\polices\Aller_Bd.ttf';

    // Set Text to Be Printed On Image
    $_POST["texte1"];
    $_POST["texte2"];

    // Insère un texte dans une image
    // Intval sert à convertir des valeurs d'une variable en valeur numérique.
    imagettftext($template, 30, 0, 120, 50, $white, $font_path, $_POST["texte1"]);
    imagettftext($template, 30, 0, 120, 310, $white, $font_path, $_POST["texte2"]);    

    // Affichage de l'image vers le navigateur ou dans un fichier
    //imagejpeg($template);

    // Enregitre l'image sur le serveur
    imagejpeg($template, $chemin);

    // La supprime des fichiers temporaire
    imagedestroy($template);

    if (isset ($_POST['bouton_envoi'])){
        $dbh->exec("INSERT INTO memes(id,url_meme) VALUES('','$chemin')");
    }

    $meme = getAllMeme();


    //traiter les données
    $meme['url_meme'];

    //echo $twig->render('memeresultat.twig');

    echo $twig->render('memeresultat.twig', array('ListeMemes' => $meme));