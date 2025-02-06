<?php
include '../../../header.php';

// Récupérez tous les articles et membres pour les listes déroulantes
$articles = sql_select("article", "numArt, libTitrArt");
$membres = sql_select("membre", "numMemb, pseudoMemb");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau de Commentaires</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Commentaires</label>
                    <input id="libCom" name="libCom" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <div class="form-group">
                    <label for="numArt">Article</label>
                    <select id="numArt" name="numArt" class="form-control">
                        <?php foreach ($articles as $article): ?>
                            <option value="<?= $article['numArt'] ?>"><?= $article['libTitrArt'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="numMemb">Utilisateur</label>
                    <select id="numMemb" name="numMemb" class="form-control">
                        <?php foreach ($membres as $membre): ?>
                            <option value="<?= $membre['numMemb'] ?>"><?= $membre['pseudoMemb'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-success">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>