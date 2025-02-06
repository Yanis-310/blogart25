<?php
include '../../../header.php'; // contains the header and call to config.php

// Load all comments
$comments = sql_select("COMMENT", "*");

// Load all articles and members for association
$articles = sql_select("ARTICLE", "*");
$members = sql_select("MEMBRE", "*");

$articleAssoc = [];
foreach ($articles as $article) {
    $articleAssoc[$article['numArt']] = $article['titleArt'];
}

$memberAssoc = [];
foreach ($members as $member) {
    $memberAssoc[$member['numMemb']] = $member['pseudoMemb'];
}
?>

<!-- Bootstrap default layout to display all comments in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Commentaires</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date de création</th>
                        <th>Pseudo</th>
                        <th>Contenu</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <td><?php echo ($comment['numCom']); ?></td>
                            <td><?php echo ($comment['dtCreaCom']); ?></td>
                            <td><?php echo ($comment['notifComKOAff'] ? 'Oui' : 'Non'); ?></td>
                            <td><?php echo ($comment['libCom']); ?></td>

                            <td>
                                <?php
                                if (isset($articleAssoc[$comment['numArt']])) {
                                    echo $articleAssoc[$comment['numArt']];
                                } else {
                                    echo "Inconnu";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if (isset($memberAssoc[$comment['numMemb']])) {
                                    echo $memberAssoc[$comment['numMemb']];
                                } else {
                                    echo "Inconnu";
                                }
                                ?>
                            </td>
                            <td>
                                <a href="edit.php?numCom=<?php echo ($comment['numCom']); ?>"
                                    class="btn btn-primary">Edit</a>
                                <a href="delete.php?numCom=<?php echo ($comment['numCom']); ?>"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php
include '../../../footer.php';