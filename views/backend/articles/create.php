<?php
include '../../../header.php';

// Load all keywords
$keywords = sql_select("MOTCLE", "*");

// Load all themes
$themes = sql_select("THEMATIQUE", "*");
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
                    <label for="numThem">Thématique</label>
                    <select id="numThem" name="numThem" class="form-control" required>
                        <option value="">--- Choisissez une thématique ---</option>
                        <?php foreach ($themes as $theme): ?>
                            <option value="<?php echo $theme['numThem']; ?>"><?php echo $theme['libThem']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keywords">Mots-clés liés à l'article</label>
                    <select id="keywords" name="keywords[]" class="form-control" multiple>
                        <?php foreach ($keywords as $keyword): ?>
                            <option value="<?php echo $keyword['numMotCle']; ?>"><?php echo $keyword['libMotCle']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mots-clés ajoutés</label>
                    <div id="selectedKeywords" class="form-control" style="height: auto; min-height: 38px;">
                        <!-- Les mots-clés sélectionnés apparaîtront ici -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="urlPhotArt">Choisir une image :</label>
                    <input type="file" id="urlPhotArt" name="urlPhotArt" class="form-control"
                        accept=".jpg, .jpeg, .png, .gif" required />
                    <small>Extensions acceptées : .jpg, .gif, .png, .jpeg</small>
                </div>
                <div class="form-group">
                    <label>Aperçu de l'image :</label>
                    <img id="imagePreview" src="#" alt="Aperçu de l'image"
                        style="max-width: 100%; max-height: 200px; display: none;" />
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

<script>
    // JavaScript pour gérer l'affichage des mots-clés sélectionnés
    document.getElementById('keywords').addEventListener('change', function () {
        const selectedKeywords = document.getElementById('selectedKeywords');
        selectedKeywords.innerHTML = ''; // Réinitialiser l'affichage

        Array.from(this.selectedOptions).forEach(option => {
            const badge = document.createElement('span');
            badge.className = 'badge bg-secondary me-1';
            badge.textContent = option.text;
            selectedKeywords.appendChild(badge);
        });
    });

    // JavaScript pour afficher l'aperçu de l'image sélectionnée
    document.getElementById('urlPhotArt').addEventListener('change', function (event) {
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

<?php
include '../../../footer.php';
?>