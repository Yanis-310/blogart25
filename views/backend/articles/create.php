<?php
include '../../../header.php';
?>

<!-- Bootstrap form to create a new article -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création d'un nouvel article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new article -->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post"
                enctype="multipart/form-data">

                <div class="form-group">
                    <label for="libTitrArt">Titre de l'article</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" autofocus="autofocus"
                        required />
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapô de l'article</label>
                    <textarea id="libChapoArt" name="libChapoArt" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche de l'article</label>
                    <textarea id="libAccrochArt" name="libAccrochArt" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="parag1Art">Premier paragraphe</label>
                    <textarea id="parag1Art" name="parag1Art" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Premier sous-titre</label>
                    <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text" required />
                </div>
                <div class="form-group">
                    <label for="parag2Art">Deuxième paragraphe</label>
                    <textarea id="parag2Art" name="parag2Art" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Deuxième sous-titre</label>
                    <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text" required />
                </div>
                <div class="form-group">
                    <label for="parag3Art">Troisième paragraphe</label>
                    <textarea id="parag3Art" name="parag3Art" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion de l'article</label>
                    <textarea id="libConclArt" name="libConclArt" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="urlPhotArt">URL de la photo</label>
                    <input id="urlPhotArt" name="urlPhotArt" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="numThem">Identifiant du thème</label>
                    <input id="numThem" name="numThem" class="form-control" type="number" required />
                </div>
                <div class="form-group">
                    <label for="keywords">Mots-clés</label>
                    <select id="keywords" name="keywords[]" class="form-control" multiple>
                        <?php
                        // Load all keywords
                        $keywords = sql_select("MOTCLE", "*");
                        foreach ($keywords as $keyword) {
                            echo '<option value="' . $keyword['numMotCle'] . '">' . $keyword['libMotCle'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="file">Importer l'illustration</label>
                    <input type="file" id="file" name="file" class="form-control" accept=".jpg,.gif,.png,.jpeg" />
                    <small>Extensions acceptées : .jpg, .gif, .png, .jpeg</small>
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">Liste des articles</a>
                    <button type="submit" class="btn btn-success">Confirmer la création</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>