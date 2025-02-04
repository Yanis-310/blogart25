<?php
include '../../../header.php';

if (isset($_GET['numArt'])) {
    $numArt = $_GET['numArt'];
    $article = sql_select("article", "*", "numArt = $numArt")[0];
}

//test

// Load all keywords
$keywords = sql_select("MOTCLE", "*");

// Load all themes
$themes = sql_select("THEMATIQUE", "*");

// Load keywords associated with the article
$articleKeywords = sql_select("MOTCLEARTICLE", "*", "numArt = $numArt");
$selectedKeywords = array_column($articleKeywords, 'numMotCle');
?>

<!-- Bootstrap form to edit an article -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification d'un article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to edit an article -->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post"
                enctype="multipart/form-data">
                <!-- Hidden field for numArt -->
                <input id="numArt" name="numArt" class="form-control" style="display: none" type="text"
                    value="<?php echo ($numArt); ?>" readonly="readonly" />

                <div class="form-group">
                    <label for="libTitrArt">Titre de l'article</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text"
                        value="<?php echo ($article['libTitrArt']); ?>" required />
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapô de l'article</label>
                    <textarea id="libChapoArt" name="libChapoArt" class="form-control"
                        required><?php echo ($article['libChapoArt']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche de l'article</label>
                    <textarea id="libAccrochArt" name="libAccrochArt" class="form-control"
                        required><?php echo ($article['libAccrochArt']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="parag1Art">Premier paragraphe</label>
                    <textarea id="parag1Art" name="parag1Art" class="form-control"
                        required><?php echo ($article['parag1Art']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Premier sous-titre</label>
                    <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text"
                        value="<?php echo ($article['libSsTitr1Art']); ?>" required />
                </div>
                <div class="form-group">
                    <label for="parag2Art">Deuxième paragraphe</label>
                    <textarea id="parag2Art" name="parag2Art" class="form-control"
                        required><?php echo ($article['parag2Art']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Deuxième sous-titre</label>
                    <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text"
                        value="<?php echo ($article['libSsTitr2Art']); ?>" required />
                </div>
                <div class="form-group">
                    <label for="parag3Art">Troisième paragraphe</label>
                    <textarea id="parag3Art" name="parag3Art" class="form-control"
                        required><?php echo ($article['parag3Art']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion de l'article</label>
                    <textarea id="libConclArt" name="libConclArt" class="form-control"
                        required><?php echo ($article['libConclArt']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="numThem">Thématique</label>
                    <select id="numThem" name="numThem" class="form-control" required>
                        <option value="">--- Choisissez une thématique ---</option>
                        <?php foreach ($themes as $theme): ?>
                            <option value="<?php echo $theme['numThem']; ?>" <?php echo ($article['numThem'] == $theme['numThem']) ? 'selected' : ''; ?>>
                                <?php echo $theme['libThem']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keywords">Mots-clés liés à l'article</label>
                    <select id="keywords" name="keywords[]" class="form-control" multiple>
                        <?php foreach ($keywords as $keyword): ?>
                            <option value="<?php echo $keyword['numMotCle']; ?>" <?php echo in_array($keyword['numMotCle'], $selectedKeywords) ? 'selected' : ''; ?>>
                                <?php echo $keyword['libMotCle']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mots-clés ajoutés</label>
                    <div id="selectedKeywords" class="form-control" style="height: auto; min-height: 38px;">
                        <?php foreach ($keywords as $keyword): ?>
                            <?php if (in_array($keyword['numMotCle'], $selectedKeywords)): ?>
                                <span class="badge bg-secondary me-1"><?php echo $keyword['libMotCle']; ?></span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file">Importer une nouvelle illustration</label>
                    <input type="file" id="file" name="file" class="form-control" accept=".jpg,.gif,.png,.jpeg" />
                    <small>Extensions acceptées : .jpg, .gif, .png, .jpeg</small>
                </div>
                <div class="form-group">
                    <label>Aperçu de la nouvelle image :</label>
                    <img id="imagePreview" src="#" alt="Aperçu de l'image"
                        style="max-width: 100%; max-height: 200px; display: none;" />
                </div>

                <script>
                    // JavaScript pour afficher l'aperçu de l'image sélectionnée
                    document.getElementById('file').addEventListener('change', function (event) {
                        const imagePreview = document.getElementById('imagePreview');
                        const file = event.target.files[0];

                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                imagePreview.src = e.target.result;
                                imagePreview.style.display = 'block';
                            };
                            reader.readAsDataURL(file);
                        } else {
                            imagePreview.src = '#';
                            imagePreview.style.display = 'none';
                        }
                    });
                </script>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">Liste des articles</a>
                    <button type="submit" class="btn btn-danger">Confirmer la modification</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include '../../../footer.php';
?>