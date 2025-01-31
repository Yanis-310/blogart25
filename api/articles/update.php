<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

// Récupération et contrôle des saisies
$numArt = ctrlSaisies($_POST['numArt']);
$libTitrArt = ctrlSaisies($_POST['libTitrArt']);
$libChapoArt = ctrlSaisies($_POST['libChapoArt']);
$libAccrochArt = ctrlSaisies($_POST['libAccrochArt']);
$parag1Art = ctrlSaisies($_POST['parag1Art']);
$libSsTitr1Art = ctrlSaisies($_POST['libSsTitr1Art']);
$parag2Art = ctrlSaisies($_POST['parag2Art']);
$libSsTitr2Art = ctrlSaisies($_POST['libSsTitr2Art']);
$parag3Art = ctrlSaisies($_POST['parag3Art']);
$libConclArt = ctrlSaisies($_POST['libConclArt']);
$urlPhotArt = ctrlSaisies($_POST['urlPhotArt']);
$numThem = ctrlSaisies($_POST['numThem']);

// Construction de la requête de mise à jour
$attributs = [
    'libTitrArt = "' . $libTitrArt . '"',
    'libChapoArt = "' . $libChapoArt . '"',
    'libAccrochArt = "' . $libAccrochArt . '"',
    'parag1Art = "' . $parag1Art . '"',
    'libSsTitr1Art = "' . $libSsTitr1Art . '"',
    'parag2Art = "' . $parag2Art . '"',
    'libSsTitr2Art = "' . $libSsTitr2Art . '"',
    'parag3Art = "' . $parag3Art . '"',
    'libConclArt = "' . $libConclArt . '"',
    'urlPhotArt = "' . $urlPhotArt . '"',
    'numThem = ' . $numThem
];

// Mise à jour de l'article
sql_update(table: "ARTICLE", attributs: implode(", ", $attributs), where: "numArt = $numArt");

// Redirection vers la liste des articles
header('Location: ../../views/backend/articles/list.php');
exit;
?>