<?php
include '../../../header.php';


if (!isset($_GET['numMemb'])) {
    die("Aucun utilisateur sélectionné.");
}


$numMemb = $_GET['numMemb'];
$membre = sql_select('MEMBRE', '*', "numMemb = '$numMemb'")[0]; // Récupérer les infos du membre
$statuts = sql_select('STATUT', '*');
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification d'un membre</h1>
        </div>


        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/members/update.php' ?>" method="post">
                <input type="hidden" name="numMemb" value="<?php echo $membre['numMemb']; ?>">


                <!-- Pseudo -->
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo (non modifiable)</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text"
                        value="<?php echo $membre['pseudoMemb']; ?>" readonly>
                </div>
                <br />


                <!-- Prénom -->
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text"
                        value="<?php echo $membre['prenomMemb']; ?>" required>
                </div>
                <br />


                <!-- Nom -->
                <div class="form-group">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text"
                        value="<?php echo $membre['nomMemb']; ?>" required>
                </div>
                <br />


                <!-- Email -->
                <div class="form-group">
                    <label for="email1">Email</label>
                    <input id="email1" name="email1" class="form-control" type="email"
                        value="<?php echo $membre['eMailMemb']; ?>" required>
                </div>
                <br />


                <!-- Mot de passe (optionnel) -->
                <div class="form-group">
                    <label for="passMemb">Nouveau mot de passe (laisser vide pour ne pas changer)</label>
                    <input id="passMemb" name="passMemb" class="form-control" type="password">
                </div>
                <br />


                <!-- Confirmation du mot de passe -->
                <div class="form-group">
                    <label for="passConfirm">Confirmer le mot de passe</label>
                    <input id="passConfirm" name="passConfirm" class="form-control" type="password">
                </div>
                <br />


                <!-- Statut -->
                <div class="form-group">
                    <label for="numStat">Type de profil</label>
                    <select class="form-select" name="numStat">
                        <?php foreach ($statuts as $statut): ?>
                            <option value="<?php echo $statut['numStat']; ?>" <?php echo ($membre['numStat'] == $statut['numStat']) ? 'selected' : ''; ?>>
                                <?php echo $statut['libStat']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br />


                <!-- Bouton Valider -->
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include '../../../footer.php'; ?>