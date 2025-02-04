<?php



require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$username = $_POST['pseudoMemb'];
$password = $_POST['passMemb'];

$result = sql_select('membre', '*', "pseudoMemb = '$username'");

if (count($result) > 0) {
    // Utilisateur trouvé dans la base de données
    $user = $result[0];

    // Vérifier le mot de passe
    if ($password == $user['passMemb']) {
        // Mot de passe correct, continuer avec l'authentification
        // ...
        session_start();
        $_SESSION['numMemb'] = $user['numMemb'];

        header('Location: /index.php');
        exit();

    } else {
        // Mot de passe incorrect
        echo 'Mot de passe incorrect';
    }
} else {
    // Utilisateur non trouvé dans la base de données
    echo 'Utilisateur non trouvé';
}