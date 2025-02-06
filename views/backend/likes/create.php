<?php
include '../../../header.php';

// Récupération des articles, membres et likes
$articles = sql_select("ARTICLE", "*"); // Tous les articles
$members = sql_select("MEMBRE", "*");   // Tous les membres
$likes = sql_select("LIKEART", "*");    // Tous les likes

// Organisation des likes dans un tableau associatif [numArt => [numMemb1, numMemb2, ...]]
$articleLikes = [];
foreach ($likes as $like) {
    $articleLikes[$like['numArt']][] = $like['numMemb'];
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Articles (Un)Likes</h1>
        </div>
        <div class="col-md-12">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Membre</th>
                        <th>Titre article</th>
                        <th>Chapeau article</th>
                        <th>Statut Like</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article): ?>
                        <?php foreach ($members as $member): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($member['pseudoMemb']); ?></td>
                                <td><?php echo htmlspecialchars($article['libTitrArt']); ?></td>
                                <td><?php echo htmlspecialchars($article['libChapoArt']); ?></td>
                                <td>
                                    <?php
                                    $isLiked = in_array($member['numMemb'], $articleLikes[$article['numArt']] ?? []);
                                    echo $isLiked ? "<span style='color: pink;'>like</span>" : "<span style='color: orange;'>unlike</span>";
                                    ?>
                                </td>
                                <td>
                                    <a href="edit.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="delete.php?numArt=<?php echo $article['numArt']; ?>"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>