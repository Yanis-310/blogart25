<?php
include '../../../header.php';

if (isset($_GET['numMotCle'])) {
    $numMotCle = intval($_GET['numMotCle']); // Sécurisation de l'entrée

    // Récupération du libellé du mot-clé
    $result = sql_select("motcle", "libMotCle", "numMotCle = $numMotCle");
    $libMotCle = !empty($result) ? $result[0]['libMotCle'] : null;

    // Vérification si le mot-clé est relié à un article
    $motclearticle = sql_select("motclearticle", "COUNT(*) as count", "numMotCle = $numMotCle")[0]['count'] > 0;
}
?>

<!-- Bootstrap form to delete a keyword -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Thématiques</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/keywords/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Nom de la thématique</label>
                    <input id="numMotCle" name="numMotCle" class="form-control" style="display: none" type="text"
                        value="<?php echo htmlspecialchars($numMotCle); ?>" readonly />
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text"
                        value="<?php echo htmlspecialchars($libMotCle); ?>" readonly disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">Liste</a>
                    <button type="submit" class="btn btn-danger" <?php echo ($isLinked ? 'disabled' : ''); ?>>Confirmer
                        suppression</button>
                </div>
            </form>
        </div>
    </div>
</div>