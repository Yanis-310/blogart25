<?php

include '../../../header.php';

$canDelete = true;
$message = "";

if (isset($_GET['numArt'])) {
    $numArt = intval($_GET['numArt']);
    $articles = sql_select("ARTICLE A LEFT JOIN THEMATIQUE T ON A.numThem = T.numThem", "A.*, T.libThem", "A.numArt = $numArt");
    $article = $articles[0] ?? null;

    $relatedRows = sql_select('motclearticle', 'COUNT(*) as count', "numArt = $numArt");
    if ($relatedRows[0]['count'] > 0) {
        $canDelete = false;
        $message = "Impossible de supprimer l'article : il est lié à des mots-clés. Veuillez supprimer ces associations avant de continuer.";
    }
} else {
    $article = null;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $canDelete) {
    if (isset($_POST['numArt'])) {
        $numArtToDelete = intval($_POST['numArt']);
        $imagePath = sql_select("ARTICLE", "urlPhotArt", "numArt = $numArtToDelete")[0]['urlPhotArt'] ?? '';

        $deleteSuccessArticle = sql_delete("ARTICLE", "numArt = $numArtToDelete");

        if ($deleteSuccessArticle) {
            if (!empty($imagePath) && file_exists("../../../src/uploads/$imagePath")) {
                unlink("../../../src/uploads/$imagePath");
            }
            header("Location: list.php?message=Article supprimé avec succès");
            exit;
        } else {
            $errorMessage = "Erreur lors de la suppression de l'article.";
        }
    }
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4 text-danger">Suppression de l'Article</h1>
        </div>

        <?php if (!empty($message)): ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?php echo $message; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-md-12">
            <?php if ($article): ?>
                <form action="" method="post">
                    <div class="card shadow-lg p-4 mb-4">
                        <div class="form-group">
                            <input id="numArt" name="numArt" class="form-control" type="hidden"
                                value="<?php echo htmlspecialchars($numArt); ?>" />

                            <?php
                            $fields = [
                                'dtCreaArt' => 'Date création',
                                'libTitrArt' => 'Titre',
                                'libChapoArt' => 'Chapeau',
                                'libAccrochArt' => 'Accroche',
                                'parag1Art' => 'Paragraphe 1',
                                'libSsTitr1Art' => 'Sous titre 1',
                                'parag2Art' => 'Paragraphe 2',
                                'libSsTitr2Art' => 'Sous titre 2',
                                'parag3Art' => 'Paragraphe 3',
                                'libConclArt' => 'Conclusion',
                                'libThem' => 'Thématique'
                            ];

                            foreach ($fields as $key => $label) {
                                $value = $article[$key] ?? 'Non défini';
                                echo "<label for='$key'>$label</label>";
                                echo "<input id='$key' name='$key' class='form-control mb-3' type='text' value='" . htmlspecialchars($value) . "' disabled />";
                            }
                            ?>

                            <div class="form-group">
                                <label for="urlPhotArt">Image</label><br />
                                <img src="../../../src/uploads/<?php echo htmlspecialchars($article['urlPhotArt'] ?? ''); ?>"
                                    alt="Image de l'article" width="150" class="img-fluid" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center mt-3">
                        <a href="list.php" class="btn btn-outline-primary btn-lg mr-3">Retour à la liste</a>
                        <button type="submit" class="btn btn-danger btn-lg" <?php echo $canDelete ? '' : 'disabled'; ?>>Confirmer la suppression</button>
                    </div>
                </form>
            <?php else: ?>
                <div class="col-md-12">
                    <p class="text-danger text-center">Article introuvable.</p>
                </div>
            <?php endif; ?>

            <?php if (isset($errorMessage)): ?>
                <div class="col-md-12">
                    <p class="text-danger text-center"><?php echo htmlspecialchars($errorMessage); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>