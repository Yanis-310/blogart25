<?php
include '../../../header.php';

if (isset($_GET['numArt'])) {
    $numArt = $_GET['numArt'];
    $article = sql_select("article", "*", "numArt = $numArt")[0];
}
?>

<!-- Bootstrap form to edit an article -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification d'un article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to edit an article -->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post">
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
                    <label for="urlPhotArt">URL de la photo</label>
                    <input id="urlPhotArt" name="urlPhotArt" class="form-control" type="text"
                        value="<?php echo ($article['urlPhotArt']); ?>" required />
                </div>
                <div class="form-group">
                    <label for="numThem">Identifiant du thème</label>
                    <input id="numThem" name="numThem" class="form-control" type="number"
                        value="<?php echo ($article['numThem']); ?>" required />
                </div>
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