<?php
include '../../../header.php';

if (isset($_GET['numThem'])) {
    $numThem = $_GET['numThem'];
    $libThem = sql_select("THEMATIQUE", "libThem", "numThem = $numThem")[0]['libThem'];

    // Vérifie si le statut est utilisé par au moins un membre
    $countnumThem = sql_select("ARTICLE", "COUNT(*) AS total", "numThem = $numThem")[0]['total'];
    $ifnumThemUsed = $countnumThem > 0; // true si au moins un membre a ce statut
}
?>

<!-- Bootstrap form to delete a statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Thématique</h1>
            <?php if ($ifnumThemUsed): ?>


                ⚠ Impossible de supprimer la thematiques car il est utilisé

            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/thematiques/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Nom de la thématique</label>
                    <input id="numThem" name="numThem" class="form-control" style="display: none" type="text"
                        value="<?php echo ($numThem); ?>" readonly />
                    <input id="libThem" name="libThem" class="form-control" type="text"
                        value="<?php echo ($libThem); ?>" readonly disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">Retour à la liste</a>
                    <button type="submit" class="btn btn-danger" <?php echo ($ifnumThemUsed ? 'disabled' : ''); ?>>
                        Confirmer delete ?
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>