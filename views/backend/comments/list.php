<?php
include '../../../header.php'; // contains the header and call to config.php

// Charger les commentaires depuis la base de données
$comments = sql_select("comment", "*");
$articles = sql_select("article", "*");
$membres = sql_select("membre", "*");

function getMembre($numMemb)
{
    return sql_select("membre", "*", "numMemb = $numMemb")[0];
}

function getArticle($numArt)
{
    return sql_select("article", "*", "numArt = $numArt")[0];
}

// Filter comments by status
$commentsAttente = array_filter($comments, fn($comment) => $comment['attModOK'] == 0 && $comment['delLogiq'] == 0);
$commentsControle = array_filter($comments, fn($comment) => $comment['attModOK'] == 1 && $comment['delLogiq'] == 0);
$commentsArchive = array_filter($comments, fn($comment) => $comment['delLogiq'] == 1);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Commentaires</h1>
            <br>
            <a href="create.php" class="btn-success-custom">Create</a>
            <br>
            <br>

            <h2>Commentaires en attente</h2>
            <table class="table table-striped comment-table">
                <thead>
                    <tr>
                        <th>Titre Article</th>
                        <th>Pseudo</th>
                        <th>Date</th>
                        <th>Contenu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($commentsAttente as $comment):
                        $article = getArticle($comment['numArt']);
                        $membre = getMembre($comment['numMemb']);
                        ?>
                        <tr>
                            <td><?= $article['libTitrArt']; ?></td>
                            <td><?= $membre['pseudoMemb']; ?></td>
                            <td><?= $comment['dtCreaCom']; ?></td>
                            <td><?= $comment['libCom']; ?></td>
                            <td>
                                <!-- Lien pour le contrôle -->
                                <a href="controle.php?numCom=<?= urlencode($comment['numCom']); ?>"
                                    class="btn-warning-custom">Control</a>
                                <!-- Lien pour l'édition -->
                                <a href="edit-attente-validation.php?numCom=<?= urlencode($comment['numCom']); ?>"
                                    class="btn-primary-custom">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>

            <h2>Commentaires contrôlés</h2>
            <table class="table table-striped comment-table">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Dernière modif</th>
                        <th>Contenu</th>
                        <th>Publication</th>
                        <th>Raison Refus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($commentsControle as $comment):
                        $membre = getMembre($comment['numMemb']);
                        ?>
                        <tr>
                            <td><?= $membre['pseudoMemb']; ?></td>
                            <td><?= $comment['dtModCom']; ?></td>
                            <td><?= $comment['libCom']; ?></td>
                            <td><?= $comment['attModOK'] == 1 ? "OUI" : "NON"; ?></td>
                            <td><?= $comment['notifComKOAff']; ?></td>
                            <td>
                                <!-- Lien pour l'édition -->
                                <a href="edit-controle-modification.php?numCom=<?= urlencode($comment['numCom']); ?>"
                                    class="btn-primary-custom">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>

            <h2>Suppression logique</h2>
            <table class="table table-striped comment-table">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Date suppr logique</th>
                        <th>Contenu</th>
                        <th>Publication</th>
                        <th>Raison refus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($commentsArchive as $comment):
                        $membre = getMembre($comment['numMemb']);
                        ?>
                        <tr>
                            <td><?= $membre['pseudoMemb']; ?></td>
                            <td><?= $comment['dtDelLogCom']; ?></td>
                            <td><?= $comment['libCom']; ?></td>
                            <td><?= $comment['attModOK'] == 1 ? "OUI" : "NON"; ?></td>
                            <td><?= $comment['notifComKOAff']; ?></td>
                            <td>
                                <!-- Lien pour l'édition -->
                                <a href="edit-suppression.php?numCom=<?= urlencode($comment['numCom']); ?>"
                                    class="btn-primary-custom">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>

            <h2>Suppression physique</h2>
            <table class="table table-striped comment-table">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Date suppr logique</th>
                        <th>Contenu</th>
                        <th>Publication</th>
                        <th>Raison refus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($commentsArchive as $comment):
                        $membre = getMembre($comment['numMemb']);
                        ?>
                        <tr>
                            <td><?= $membre['pseudoMemb']; ?></td>
                            <td><?= $comment['dtDelLogCom']; ?></td>
                            <td><?= $comment['libCom']; ?></td>
                            <td><?= $comment['attModOK'] == 1 ? "OUI" : "NON"; ?></td>
                            <td><?= $comment['notifComKOAff']; ?></td>
                            <td>
                                <!-- Lien pour la suppression physique -->
                                <a href="delete.php?numCom=<?= urlencode($comment['numCom']); ?>"
                                    class="btn-danger-custom">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>

        </div>
    </div>
</div>

<style>
    /* Custom styles for buttons and tables */
    .btn-warning-custom {
        background-color: #f0ad4e;
        color: white !important;
        border: none;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.2s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn-warning-custom:hover {
        background-color: #ec971f;
        transform: translateY(-1px);
    }

    .btn-primary-custom {
        background-color: #007bff;
        color: white !important;
        border: none;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.2s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn-primary-custom:hover {
        background-color: #0056b3;
        transform: translateY(-1px);
    }

    .btn-danger-custom {
        background-color: #dc3545;
        color: white !important;
        border: none;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.2s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn-danger-custom:hover {
        background-color: #c82333;
        transform: translateY(-1px);
    }

    .btn-success-custom {
        background-color: #28a745;
        color: white !important;
        border: none;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.2s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn-success-custom:hover {
        background-color: #218838;
        transform: translateY(-1px);
    }

    /* Table styling */
    .comment-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .comment-table th,
    .comment-table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .comment-table th {
        background-color: #f8f9fa;
        font-weight: bold;
        color: #333;
    }

    .comment-table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .comment-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .comment-table tbody tr:nth-child(even):hover {
        background-color: #f1f1f1;
    }

    /* Container styling */
    .container {
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    h1,
    h2 {
        color: #333;
    }

    h1 {
        margin-bottom: 20px;
    }

    h2 {
        margin-top: 30px;
        margin-bottom: 15px;
        font-size: 1.5em;
    }
</style>
<?php include '../../../footer.php'; ?>