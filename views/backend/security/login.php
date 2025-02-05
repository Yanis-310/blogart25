<?php
session_start();
require_once 'db_connection.php'; // Fichier de connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    // Validation des entrées
    if (strlen($pseudo) < 6 || strlen($pseudo) > 70) {
        echo "Le pseudo doit contenir entre 6 et 70 caractères.";
        exit;
    }

    if (strlen($password) < 8 || strlen($password) > 15 || !preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[0-9]/', $password)) {
        echo "Le mot de passe doit contenir entre 8 et 15 caractères, avec au moins une majuscule, une minuscule et un chiffre.";
        exit;
    }

    // Requête SQL pour vérifier l'existence du membre
    $sql = "SELECT * FROM membre WHERE pseudoMemb = :pseudo";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['pseudo' => $pseudo]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['passMemb'])) {
        // Connexion réussie
        $_SESSION['user'] = $user;
        header('Location: dashboard.php'); // Redirection vers le tableau de bord
        exit;
    } else {
        echo "Pseudo ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion</h1>
    <form method="POST" action="login.php">
        <label for="pseudo">Pseudo:</label>
        <input type="text" id="pseudo" name="pseudo" required>
        <br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>
</body>

</html>