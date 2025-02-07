<?php
require_once '../../../header.php';

$thematiques = sql_select('THEMATIQUE', '*');
?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Création d'un Nouvel Article</h1>
    <div class="card shadow-sm p-4">
        <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" id="form"
            enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="titre" class="form-label">Titre</label>
                    <input id="titre" name="libTitrArt" class="form-control" type="text"
                        placeholder="Sur 100 caractères" required>
                </div>
                <div class="col-md-6">
                    <label for="Datecreation" class="form-label">Date de création</label>
                    <input id="Datecreation" name="dtCreaArt" class="form-control" type="datetime-local" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="Chapeau" class="form-label">Chapeau</label>
                <textarea id="Chapeau" name="libChapoArt" class="form-control"
                    placeholder="Décrivez le chapeau (500 caractères max)" maxlength="500" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="Accroche1" class="form-label">Accroche Paragraphe 1</label>
                <input id="Accroche1" name="libAccrochArt" class="form-control" type="text" maxlength="100" required>
            </div>

            <div class="mb-3">
                <label for="Paragraphe1" class="form-label">Paragraphe 1</label>
                <textarea id="Paragraphe1" name="parag1Art" class="form-control"
                    placeholder="Décrivez le premier paragraphe (1200 caractères max)" maxlength="1200" rows="4"
                    required></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="Soustitre1" class="form-label">Sous-titre 1</label>
                    <input id="Soustitre1" name="libSsTitr1Art" class="form-control" type="text" maxlength="100"
                        required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Paragraphe2" class="form-label">Paragraphe 2</label>
                    <textarea id="Paragraphe2" name="parag2Art" class="form-control"
                        placeholder="Décrivez le deuxième paragraphe (1200 caractères max)" maxlength="1200"
                        rows="4"></textarea>
                </div>
            </div>

            <div class="mb-3">
                <label for="Paragraphe3" class="form-label">Paragraphe 3</label>
                <textarea id="Paragraphe3" name="parag3Art" class="form-control"
                    placeholder="Décrivez le troisième paragraphe (1200 caractères max)" maxlength="1200"
                    rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="Conclusion" class="form-label">Conclusion</label>
                <textarea id="Conclusion" name="libConclArt" class="form-control"
                    placeholder="Décrivez la conclusion (500 caractères max)" maxlength="500" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="urlPhotArt" class="form-label">Choisir une image</label>
                <input type="file" id="urlPhotArt" name="urlPhotArt" class="form-control"
                    accept=".jpg, .jpeg, .png, .gif">
                <small class="text-muted">Extensions acceptées : .jpg, .gif, .png, .jpeg (taille max : 200 Mo)</small>
            </div>

            <div class="mb-3">
                <label for="numThem" class="form-label">Thématique</label>
                <select class="form-select" name="numThem" required>
                    <?php foreach ($thematiques as $thematique): ?>
                        <option value="<?php echo $thematique['numThem']; ?>"><?php echo $thematique['libThem']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="addMotCle" class="form-label">Choisissez les mots-clés liés à l'article :</label>
                <div class="row">
                    <div class="col-md-6">
                        <select name="addMotCle" id="addMotCle" class="form-control" size="5">
                            <?php
                            $result = sql_select('MOTCLE');
                            foreach ($result as $req) {
                                echo '<option value="' . $req['numMotCle'] . '">' . $req['libMotCle'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
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

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg">Confirmer la création</button>
            </div>
        </form>
    </div>
</div>

<?php
include '../../../footer.php';
?>