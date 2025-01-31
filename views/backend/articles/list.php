<?php
include '../../../header.php';

// Load all articles
$articles = sql_select("ARTICLE", "*");

// Load all keywords
$keywords = sql_select("MOTCLE", "*");

// Load associations between articles and keywords
$articleKeywords = sql_select("MOTCLEARTICLE", "*");
?>

<!-- Bootstrap default layout to display all articles in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des articles</h1>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Chapô</th>
                        <th>Accroche</th>
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