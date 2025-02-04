<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['numArt'])) {
    header('Location: ../../views/backend/articles/list.php?error=invalid_request');
    exit;
}

$numArt = intval(ctrlSaisies($_POST['numArt'])); // Sécurisation

// Vérifie si l'article existe
$article = sql_select("ARTICLE", "numArt", "numArt = $numArt");
if (!$article) {
    header('Location: ../../views/backend/articles/list.php?error=not_found');
    exit;
}

// Suppression des relations avec les mots-clés
sql_delete('MOTCLEARTICLE', "numArt = $numArt");

// Suppression de l'article
$deleted = sql_delete('ARTICLE', "numArt = $numArt");

if ($deleted) {
    header('Location: ../../views/backend/articles/list.php?success=deleted');
} else {
    header('Location: ../../views/backend/articles/list.php?error=delete_failed');
}
exit;

?>