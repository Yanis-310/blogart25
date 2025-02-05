<?php
session_start();
include '../../../header.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .login-link {
            text-align: center;
            margin-top: 1rem;
            color: #555;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Inscription</h2>
        <form action="<?php echo ROOT_URL . '/api/security/signup.php' ?>" method="POST">
            <!-- Nom -->
            <div class="form-group">
                <label for="surname">Nom :</label>
                <input type="text" id="surname" name="surname" required minlength="2" maxlength="70">
            </div>

            <!-- Prénom -->
            <div class="form-group">
                <label for="name">Prénom :</label>
                <input type="text" id="name" name="name" required minlength="2" maxlength="70">
            </div>

            <!-- Pseudo -->
            <div class="form-group">
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" required minlength="6" maxlength="70">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required minlength="6" maxlength="70">
            </div>

            <!-- Confirmer Email -->
            <div class="form-group">
                <label for="confemail">Confirmer Email :</label>
                <input type="email" id="confemail" name="confemail" required minlength="6" maxlength="70">
            </div>

            <!-- Mot de passe -->
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required minlength="8" maxlength="15">
            </div>

            <!-- Confirmer Mot de passe -->
            <div class="form-group">
                <label for="confpassword">Confirmer Mot de passe :</label>
                <input type="password" id="confpassword" name="confpassword" required minlength="8" maxlength="15">
            </div>

            <!-- Bouton de soumission -->
            <button type="submit">S'inscrire</button>
        </form>

        <!-- Lien vers la page de connexion -->
        <div class="login-link">
            <p>Déjà inscrit ? <a href="<?php echo ROOT_URL . '/views/backend/security/login.php' ?>">Connectez-vous
                    ici</a></p>
        </div>
    </div>
</body>

</html>