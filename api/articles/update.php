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
$numThem = ctrlSaisies($_POST['numThem']);

// Gestion de l'upload du fichier
$urlPhotArt = ctrlSaisies($_POST['urlPhotArt']); // URL de l'image actuelle
if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../../../uploads/'; // Dossier où les fichiers seront stockés
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Crée le dossier s'il n'existe pas
    }
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    // Déplace le fichier uploadé vers le dossier de destination
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        $urlPhotArt = $uploadFile; // Met à jour l'URL de la photo
    } else {
        // Gestion de l'erreur
        echo json_encode(array("message" => "Erreur lors de l'upload du fichier."));
        exit;
    }
}

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

// Gestion des mots-clés
if (!empty($_POST['keywords'])) {
    // Supprimer les anciennes associations de mots-clés
    sql_delete("MOTCLEARTICLE", "numArt = $numArt");

    // Ajouter les nouvelles associations de mots-clés
    foreach ($_POST['keywords'] as $keywordId) {
        $keywordId = ctrlSaisies($keywordId);
        sql_insert('MOTCLEARTICLE', 'numArt, numMotCle', "'$numArt', '$keywordId'");
    }
}

// Redirection vers la liste des articles
header('Location: ../../views/backend/articles/list.php');
exit;
?>