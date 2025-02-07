<?php
require_once '../../../header.php';
session_start();
sql_connect();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

// Vérifie si un ID est passé en paramètre
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    $article = sql_select("ARTICLE", "*", "numArt =" . $id);

    if (!$article) {
        echo "<h1>Article non trouvé</h1>";
        exit;
    }

    // Simuler le nombre de likes (à remplacer plus tard avec une requête SQL)
    $likeCount = rand(5, 50); // Temporaire : nombre aléatoire de likes
} else {
    echo "<h1>Article non spécifié</h1>";
    exit;
}
?>

<link rel="stylesheet" href="<?php echo ROOT_URL . '/src/css/style.css'; ?>" />
<main class="container mt-4">
    <div class="row">
        <div class="col-md-8 col-sm-12 mx-auto bg-primary bg-opacity-10 p-4 rounded text-center">
            <!-- Titre au-dessus de l'image -->
            <h1 class="mb-3"> <?php echo $article[0]['libTitrArt']; ?> </h1>

            <div class="mb-4">
                <img src="<?php echo ROOT_URL . '/src/uploads/' . $article[0]['urlPhotArt']; ?>"
                    alt="Image de l'article" class="img-fluid rounded">
            </div>

            <hr class="decorative-line mt-1">

            <h5 class="mt-4"> <?php echo $article[0]['libChapoArt']; ?> </h5>
            <h3 class="mt-4"> <?php echo $article[0]['libAccrochArt']; ?> </h3>

            <p class="mt-4"> <?php echo $article[0]['parag1Art']; ?> </p>
            <h4 class="mt-2"> <?php echo $article[0]['libSsTitr1Art']; ?> </h4>
            <p class="mt-2"> <?php echo $article[0]['parag2Art']; ?> </p>
            <h4 class="mt-2"> <?php echo $article[0]['libSsTitr2Art']; ?> </h4>
            <p class="mt-2"> <?php echo $article[0]['parag3Art']; ?> </p>
            <h4 class="mt-2"> <?php echo $article[0]['libConclArt']; ?> </h4>

            <!-- Section Like -->
            <div class="mt-4">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <button id="like-btn" class="btn btn-outline-danger">
                        ❤️ <span id="like-count"> <?php echo $likeCount; ?> </span> J'aime
                    </button>
                <?php else: ?>
                    <p class="text-muted">Connectez-vous pour aimer cet article.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php require_once '../../../footer.php'; ?>