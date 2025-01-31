<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = ctrlSaisies($_POST['numArt']);

// Vérifie si l'article est utilisé dans une autre table (par exemple, MOTCLEARTICLE)
$countnumArt = sql_select("MOTCLEARTICLE", "COUNT(*) AS total", "numArt = $numArt")[0]['total'];

if ($countnumArt > 0) {
    // Redirection avec message d'erreur si l'article est utilisé
    header('Location: ../../views/backend/articles/list.php?error=used');
    exit;
}

// Si l'article n'est pas utilisé, suppression
sql_delete('ARTICLE', "numArt = $numArt");

// Redirection avec message de succès
header('Location: ../../views/backend/articles/list.php?success=deleted');
exit;

?>