<!-- login.php -->
<?php
session_start();
include '../../../header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Connexion</h1>
            <form action="<?php echo ROOT_URL . '/api/members/login.php'; ?>" method="POST">
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" required minlength="6"
                        maxlength="70">
                    <small class="form-text text-muted">(Entre 6 et 70 caractères)</small>
                </div>
                <br>
                <div class="form-group">
                    <label for="passMemb">Mot de passe</label>
                    <input id="passMemb" name="passMemb" class="form-control" type="password" required minlength="8"
                        maxlength="15">
                    <small class="form-text text-muted">(Entre 8 et 15 caractères, au moins une majuscule, une
                        minuscule, un chiffre)</small>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
            </form>
            <p>Pas encore inscrit ? <a href="<?php echo ROOT_URL . '/views/frontoffice/members/signup.php'; ?>">Créer un
                    compte</a></p>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>