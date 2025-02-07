<?php
include '../../../header.php';

$thematiques = sql_select('THEMATIQUE', '*');

// Vérifier si nous avons un numArt via GET
if (isset($_GET['numArt'])) {
    $numArt = $_GET['numArt'];
    // Récupération des données de l'article
    $article = sql_select("ARTICLE
    INNER JOIN THEMATIQUE ON article.numThem = thematique.numThem", "*", "numArt = '$numArt'")[0];
    $dtCreaArt = $article['dtCreaArt'];
    $libTitrArt = $article['libTitrArt'];
    $libChapoArt = $article['libChapoArt'];
    $libAccrochArt = $article['libAccrochArt'];
    $parag1Art = $article['parag1Art'];
    $libSsTitr1Art = $article['libSsTitr1Art'];
    $parag2Art = $article['parag2Art'];
    $libSsTitr2Art = $article['libSsTitr2Art'];
    $parag3Art = $article['parag3Art'];
    $libConclArt = $article['libConclArt'];
    $urlPhotArt = $article['urlPhotArt'];
    $numThem = $article['numThem'];
    $libThem = $article['libThem'];
}
?>

<!-- Formulaire de modification de l'article -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mb-4">Modification de l'Article</h1>
        </div>
        <div class="col-md-12">
            <!-- Formulaire de modification de l'article -->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post" id="form"
                enctype="multipart/form-data">
                <div class="card shadow-sm p-4">
                    <div class="form-group">
                        <label for="numArt">Numéro d'article</label>
                        <input id="numArt" name="numArt" class="form-control" type="text" value="<?php echo $numArt; ?>"
                            readonly>
                    </div>

                    <div class="form-group">
                        <label for="libTitrArt">Titre de l'article</label>
                        <input id="libTitrArt" name="libTitrArt" class="form-control" type="text"
                            value="<?php echo $libTitrArt; ?>">
                    </div>

                    <div class="form-group">
                        <label for="dtCreaArt">Date de création</label>
                        <input id="dtCreaArt" name="dtCreaArt" class="form-control" type="datetime-local"
                            value="<?php echo date('Y-m-d\TH:i', strtotime($dtCreaArt)); ?>">
                    </div>

                    <div class="form-group">
                        <label for="libChapoArt">Chapeau</label>
                        <textarea id="libChapoArt" name="libChapoArt" class="form-control" maxlength="500"
                            rows="3"><?php echo $libChapoArt; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="libAccrochArt">Accroche paragraphe 1</label>
                        <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" maxlength="100"
                            value="<?php echo $libAccrochArt; ?>">
                    </div>

                    <div class="form-group">
                        <label for="parag1Art">Paragraphe 1</label>
                        <textarea id="parag1Art" name="parag1Art" class="form-control" maxlength="1200"
                            rows="5"><?php echo $parag1Art; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="libSsTitr1Art">Sous-titre 1</label>
                        <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text" maxlength="100"
                            value="<?php echo $libSsTitr1Art; ?>">
                    </div>

                    <div class="form-group">
                        <label for="parag2Art">Paragraphe 2</label>
                        <textarea id="parag2Art" name="parag2Art" class="form-control" maxlength="1200"
                            rows="5"><?php echo $parag2Art; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="libSsTitr2Art">Sous-titre 2</label>
                        <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text" maxlength="100"
                            value="<?php echo $libSsTitr2Art; ?>">
                    </div>

                    <div class="form-group">
                        <label for="parag3Art">Paragraphe 3</label>
                        <textarea id="parag3Art" name="parag3Art" class="form-control" maxlength="1200"
                            rows="5"><?php echo $parag3Art; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="libConclArt">Conclusion</label>
                        <textarea id="libConclArt" name="libConclArt" class="form-control" maxlength="500"
                            rows="3"><?php echo $libConclArt; ?></textarea>
                    </div>

                    <div class="form-group">
                        <p>Image actuelle :</p>
                        <img src="<?php echo ROOT_URL . '/src/uploads/' . $urlPhotArt ?>" class="img-fluid" width="500"
                            alt="Current Article Image">
                        <label for="urlPhotArt">Modifier l'image</label>
                        <input type="file" name="urlPhotArt" class="form-control" id="urlPhotArt" accept="image/*">
                    </div>

                    <div class="form-group">
                        <label for="numThem">Thématique</label>
                        <select class="form-control" name="numThem" id="numThem">
                            <?php foreach ($thematiques as $thematique): ?>
                                <option value="<?php echo $thematique['numThem']; ?>" <?php echo ($thematique['numThem'] == $numThem) ? 'selected' : ''; ?>>
                                    <?php echo $thematique['libThem']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Choix des mots-clés -->
                    <div class="form-group">
                        <label>Choisissez les mots-clés :</label>
                        <div class="row">
                            <div class="col-md-5">
                                <select name="addMotCle" id="addMotCle" class="form-control" size="5">
                                    <?php
                                    $result = sql_select('MOTCLE');
                                    foreach ($result as $req) {
                                        echo '<option id="mot" value="' . $req['numMotCle'] . '">' . $req['libMotCle'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select id="newMotCle" name="motCle[]" class="form-control" size="5" multiple></select>
                            </div>
                        </div>
                    </div>

                    <script>
                        const addMotCle = document.getElementById('addMotCle');
                        const newMotCle = document.getElementById('newMotCle');
                        addMotCle.addEventListener('click', (e) => {
                            if (e.target.tagName === "OPTION") {
                                newMotCle.appendChild(e.target);
                            }
                        });
                        newMotCle.addEventListener('click', (e) => {
                            if (e.target.tagName === "OPTION") {
                                addMotCle.appendChild(e.target);
                            }
                        });
                    </script>

                    <div class="form-group mt-4 text-center">
                        <a href="list.php" class="btn btn-secondary">Retour à la liste</a>
                        <button type="submit" class="btn btn-success ml-3">Confirmer la mise à jour</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../../../footer.php'; ?>