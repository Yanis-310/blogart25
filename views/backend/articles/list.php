<?php
include '../../../header.php';

// Load all articles
$articles = sql_select("ARTICLE", "*");

// Load all keywords
$keywords = sql_select("MOTCLE", "*");

// Load all themes
$themes = sql_select("THEMATIQUE", "*");

// Load associations between articles and keywords
$articleKeywords = sql_select("MOTCLEARTICLE", "*");

// Récupérer la thématique sélectionnée (si elle existe)
$selectedTheme = isset($_GET['theme']) ? intval($_GET['theme']) : null;

// Filtrer les articles par thématique si une thématique est sélectionnée
if ($selectedTheme) {
    $articles = array_filter($articles, function ($article) use ($selectedTheme) {
        return $article['numThem'] == $selectedTheme;
    });
}
?>

<!-- Bootstrap default layout to display all articles in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des articles</h1>
        </div>
        <div class="col-md-12">
            <!-- Filtre par thématique -->
            <form method="get" action="">
                <div class="form-group mb-3">
                    <label for="theme">Filtrer par thématique :</label>
                    <select id="theme" name="theme" class="form-control" onchange="this.form.submit()">
                        <option value="">Toutes les thématiques</option>
                        <?php foreach ($themes as $theme): ?>
                            <option value="<?php echo $theme['numThem']; ?>" <?php echo ($selectedTheme == $theme['numThem']) ? 'selected' : ''; ?>>
                                <?php echo $theme['libThem']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </form>

            <!-- Tableau des articles -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Chapô</th>
                        <th>Accroche</th>
                        <th>Thématique</th>
                        <th>Date de création</th>
                        <th>Date de mise à jour</th>
                        <th>Mots-clés</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article): ?>
                        <tr>
                            <td><?php echo $article['numArt']; ?></td>
                            <td><?php echo $article['libTitrArt']; ?></td>
                            <td><?php echo $article['libChapoArt']; ?></td>
                            <td><?php echo $article['libAccrochArt']; ?></td>
                            <td>
                                <?php
                                // Récupérer la thématique associée à l'article
                                $theme = array_filter($themes, function ($t) use ($article) {
                                    return $t['numThem'] == $article['numThem'];
                                });
                                echo !empty($theme) ? reset($theme)['libThem'] : 'N/A';
                                ?>
                            </td>
                            <td><?php echo isset($article['dtCreaArt']) ? $article['dtCreaArt'] : 'N/A'; ?></td>
                            <td><?php echo isset($article['dtMajArt']) ? $article['dtMajArt'] : 'N/A'; ?></td>
                            <td>
                                <?php
                                // Récupérer les mots-clés associés à l'article
                                $articleKeywordsList = array_filter($articleKeywords, function ($ak) use ($article) {
                                    return $ak['numArt'] == $article['numArt'];
                                });

                                // Afficher les mots-clés
                                foreach ($articleKeywordsList as $ak) {
                                    $keyword = array_filter($keywords, function ($k) use ($ak) {
                                        return $k['numMotCle'] == $ak['numMotCle'];
                                    });
                                    if (!empty($keyword)) {
                                        echo '<span class="badge bg-secondary">' . reset($keyword)['libMotCle'] . '</span> ';
                                    }
                                }
                                ?>
                            </td>
                            <td>
                                <a href="edit.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo $article['numArt']; ?>"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer un nouvel article</a>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>