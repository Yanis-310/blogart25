<?php
include '../../../header.php';

if (isset($_GET['numCom'])) {
    $numCom = $_GET['numCom'];
    $tablecom = sql_select("comment", "*", "numCom = $numCom");
    $numMemb = $tablecom[0]['numMemb'];
    $tablemembre = sql_select("membre", "*", "numMemb = $numMemb");
    $tableart = sql_select("article", "*", "numArt = " . $tablecom[0]['numArt']);
}
?>

<!-- Bootstrap form to create a new comment -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-4">
                <h2 class="text-center text-primary">Contrôle du Commentaire</h2>
                <hr>

                <form action="<?php echo ROOT_URL . '/api/comments/controle.php' ?>" method="post">
                    <input type="hidden" id="numCom" name="numCom" value="<?php echo $numCom ?>" />

                    <div class="mb-3">
                        <label class="form-label fw-bold">Titre de l'article</label>
                        <input class="form-control" type="text" value="<?php echo $tableart[0]['libTitrArt']; ?>"
                            readonly>
                    </div>

                    <div class="mb-3 p-3 bg-light border rounded">
                        <h5 class="fw-bold">Informations du Commentaire</h5>
                        <p><strong>Nom d'utilisateur :</strong> <?php echo $tablemembre[0]['pseudoMemb']; ?></p>
                        <p><strong>Date de création :</strong> <?php echo $tablecom[0]['dtCreaCom']; ?></p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Contenu du commentaire</label>
                        <textarea class="form-control" rows="3"
                            readonly><?php echo $tablecom[0]['libCom']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <h5 class="fw-bold">Validation</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="validoui" name="attModOK" value="1"
                                checked>
                            <label class="form-check-label" for="validoui">Valider le commentaire</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="validnon" name="attModOK" value="0">
                            <label class="form-check-label" for="validnon">Refuser le commentaire</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Raison du refus (si refusé)</label>
                        <textarea id="notifComKOAff" name="notifComKOAff" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="list.php" class="btn btn-secondary">Retour à la liste</a>
                        <button type="submit" class="btn btn-success">Confirmer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>