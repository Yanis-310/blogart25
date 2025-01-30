<?php
include '../../../header.php';

if (isset($_GET['numMotCle'])) {
    $numMotCle = $_GET['numMotCle'];
    $libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];

    // Vérifie si le statut est utilisé par au moins un membre
    $countnumMotCle = sql_select("MOTCLEARTICLE", "COUNT(*) AS total", "numMotCle = $numMotCle")[0]['total'];
    $ifnumMotCleUsed = $countnumMotCle > 0; // true si au moins un membre a ce statut
}
?>

<!-- Bootstrap form to delete a statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression mot clé</h1>
            <?php if ($ifnumMotCleUsed): ?>


                ⚠ Impossible de supprimer ce mot clé car il est utilisé

            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/keywords/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Nom du mot clé</label>
                    <input id="numMotCle" name="numMotCle" class="form-control" style="display: none" type="text"
                        value="<?php echo ($numMotCle); ?>" readonly />
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text"
                        value="<?php echo ($libMotCle); ?>" readonly disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">Retour à la liste</a>
                    <button type="submit" class="btn btn-danger" <?php echo ($ifnumMotCleUsed ? 'disabled' : ''); ?>>
                        Confirmer delete ?
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>