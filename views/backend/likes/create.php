view like create:
<?php
include '../../../header.php';

// Récupérer les articles et membres
$articles = sql_select("ARTICLE", ""); // Récupère tous les articles
$members = sql_select("MEMBRE", "");   // Récupère tous les membres

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ajouter un Like</h1>
        </div>

        <div class="col-md-12">
            <form action="save_like.php" method="POST">
                <div class="form-group">
                    <label for="numMemb">Sélectionner un Membre</label>
                    <select id="numMemb" name="numMemb" class="form-control" required>
                        <option value="">--- Choisissez un membre ---</option>
                        <?php foreach ($members as $member): ?>
                            <option value="<?php echo $member['numMemb']; ?>">
                                <?php echo htmlspecialchars($member['pseudoMemb']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="numArt">Sélectionner un Article</label>
                    <select id="numArt" name="numArt" class="form-control" required>
                        <option value="">--- Choisissez un article ---</option>
                        <?php foreach ($articles as $article): ?>
                            <option value="<?php echo $article['numArt']; ?>">
                                <?php echo htmlspecialchars($article['libTitrArt']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Ajouter un Like</button>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>