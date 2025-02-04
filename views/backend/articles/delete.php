<?php
include '../../../header.php';

if (!isset($_GET['numArt'])) {
    echo "<p>Numéro d'article manquant.</p>";
    exit;
}

$numArt = $_GET['numArt'];
$article = sql_select("article", "*", "numArt = $numArt")[0];

if (!$article) {
    echo "<p>Article introuvable.</p>";
    exit;
}

// Récupération des mots-clés liés
$articleKeywords = sql_select("MOTCLEARTICLE", "*", "numArt = $numArt");
$selectedKeywords = array_column($articleKeywords, 'numMotCle');
$keywords = sql_select("MOTCLE", "*");

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression d'un article</h1>
            <p>Êtes-vous sûr de vouloir supprimer cet article ? Cette action est irréversible.</p>
        </div>

        <div class="col-md-12">
            <!-- Affichage des détails de l'article -->
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><?php echo htmlspecialchars($article['libTitrArt']); ?></h3>
                    <p><strong>Chapô :</strong> <?php echo htmlspecialchars($article['libChapoArt']); ?></p>
                    <p><strong>Accroche :</strong> <?php echo htmlspecialchars($article['libAccrochArt']); ?></p>
                    <p><strong>Premier paragraphe :</strong> <?php echo htmlspecialchars($article['parag1Art']); ?></p>
                    <p><strong>Premier sous-titre :</strong> <?php echo htmlspecialchars($article['libSsTitr1Art']); ?>
                    </p>
                    <p><strong>Deuxième paragraphe :</strong> <?php echo htmlspecialchars($article['parag2Art']); ?></p>
                    <p><strong>Deuxième sous-titre :</strong> <?php echo htmlspecialchars($article['libSsTitr2Art']); ?>
                    </p>
                    <p><strong>Troisième paragraphe :</strong> <?php echo htmlspecialchars($article['parag3Art']); ?>
                    </p>
                    <p><strong>Conclusion :</strong> <?php echo htmlspecialchars($article['libConclArt']); ?></p>

                    <p><strong>Mots-clés associés :</strong>
                        <?php foreach ($keywords as $keyword): ?>
                            <?php if (in_array($keyword['numMotCle'], $selectedKeywords)): ?>
                                <span class="badge bg-secondary"><?php echo htmlspecialchars($keyword['libMotCle']); ?></span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </p>

                    <!-- Affichage de l'image -->
                    <label for="image">Image actuelle :</label><br>
                    <img src="<?php echo ROOT_URL . '/src/uploads/' . htmlspecialchars($article['urlPhotArt']); ?>"
                        alt="Image de l'article" style="max-width: 200px;">

                    <br>

                    <!-- Boutons d'action -->
                    <form action="<?php echo ROOT_URL . '/api/articles/delete.php'; ?>" method="post">
                        <input type="hidden" name="numArt" value="<?php echo $numArt; ?>">
                        <a href="list.php" class="btn btn-primary">Annuler</a>
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>