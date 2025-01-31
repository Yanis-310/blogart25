<?php
include '../../../header.php';

if (isset($_GET['numArt'])) {
    $numArt = $_GET['numArt'];
    $article = sql_select("ARTICLE", "*", "numArt = $numArt")[0];

    // Vérifie si l'article est utilisé dans une autre table (par exemple, MOTCLEARTICLE)
    $countnumArt = sql_select("MOTCLEARTICLE", "COUNT(*) AS total", "numArt = $numArt")[0]['total'];
    $ifnumArtUsed = $countnumArt > 0; // true si l'article est utilisé
}
?>

<!-- Bootstrap form to delete an article -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression d'un article</h1>
            <?php if ($ifnumArtUsed): ?>
                <div class="alert alert-warning" role="alert">
                    ⚠ Impossible de supprimer cet article car il est utilisé ailleurs.
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Titre de l'article</label>
                    <input id="numArt" name="numArt" class="form-control" style="display: none" type="text"
                        value="<?php echo ($numArt); ?>" readonly />
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text"
                        value="<?php echo ($article['libTitrArt']); ?>" readonly disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">Retour à la liste</a>
                    <button type="submit" class="btn btn-danger" <?php echo ($ifnumArtUsed ? 'disabled' : ''); ?>>
                        Confirmer la suppression
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>