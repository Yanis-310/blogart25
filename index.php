<?php
require_once 'header.php';
sql_connect();
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$article = sql_select("article", "*");

?>

<main>
    <section class="section">
        <!-- Button trigger modal -->
        <!-- Cookie Button -->
        <button type="button" class="btn btn-primary fixed-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cookies
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">cookies</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Nous utilisons des cookies pour améliorer votre expérience sur notre site de rap. En continuant
                        à naviguer sur notre blog, vous acceptez notre <a href="/politique-de-confidentialite">politique
                            de confidentialité</a> et notre utilisation des cookies. Si vous souhaitez en savoir plus ou
                        gérer vos préférences, cliquez ici.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .fixed-btn {
                position: fixed;
                bottom: 20px;
                /* Distance du bas de la page */
                left: 10px;
                /* Placer à gauche de la fenêtre */
                z-index: 1050;
                /* S'assurer que le bouton soit au-dessus des autres éléments */
                padding: 10px 20px;
                /* Pour ajuster la taille du bouton */
                background-color: rgb(75, 83, 77);
                /* Couleur verte du bouton */
                color: white;
                /* Couleur du texte */
                border: none;
                /* Enlever la bordure par défaut */
                border-radius: 5px;
                /* Arrondir les bords du bouton */
                font-size: 14px;
                /* Taille de police */
            }

            .fixed-btn:hover {
                background-color: rgb(65, 65, 65);
                /* Changer la couleur du bouton au survol */
            }
        </style>


        <div class="container">
            <div class="row no-gutters-lg">
                <div class="col-12">
                    <h2 class="section-title">Articles récents</h2>
                </div>
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <article class="card article-card">
                                <a href="article.html">
                                    <div class="card-image">
                                        <div class="post-info"> <span
                                                class="text-uppercase"><?php echo $article[0]["dtCreaArt"] ?></span>
                                            <span class="text-uppercase">10 minutes de lecture</span>
                                        </div>
                                        <img src="<?php echo 'src/uploads/' . $article[0]['urlPhotArt'] ?>"
                                            alt="Post Thumbnail" class="w-100">
                                    </div>
                                </a>
                                <div class="card-body px-0 pb-1">
                                    <ul class="post-meta mb-2">
                                    </ul>
                                    <h2 class="h1"> <?php echo $article[0]["libTitrArt"] ?>
                                        </a></h2>
                                    <p><?php echo $article[0]["libChapoArt"] ?></p>
                                    <div class="content"> <a class="read-more-btn"
                                            href="/views/frontend/articles/article1.php?id=<?php echo $article[0]['numArt']; ?>">Lire
                                            en entier</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 mb-4">
                            <article class="card article-card article-card-sm h-100">
                                <a href="article.html">
                                    <div class="card-image">
                                        <div class="post-info"> <span
                                                class="text-uppercase"><?php echo $article[1]["dtCreaArt"] ?></span>
                                            <span class="text-uppercase">12 minutes de letcure</span>
                                        </div>
                                        <img src="<?php echo 'src/uploads/' . $article[1]['urlPhotArt'] ?>"
                                            alt="Post Thumbnail" class="w-100">
                                    </div>
                                </a>
                                <div class="card-body px-0 pb-0">
                                    <ul class="post-meta mb-2">
                                    </ul>
                                    <h2 class="h1"> <?php echo $article[1]["libTitrArt"] ?>
                                        </a></h2>
                                    <p class="card-text"><?php echo $article[1]["libChapoArt"] ?></p>
                                    <div class="content"> <a class="read-more-btn"
                                            href="/views/frontend/articles/article1.php?id=<?php echo $article[1]['numArt']; ?>">Lire
                                            en entier</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 mb-4">
                            <article class="card article-card article-card-sm h-100">
                                <a href="article.html">
                                    <div class="card-image">
                                        <div class="post-info"> <span
                                                class="text-uppercase"><?php echo $article[2]["dtCreaArt"] ?></span>
                                            <span class="text-uppercase">8 minutes de lecture</span>
                                        </div>
                                        <img src="<?php echo 'src/uploads/' . $article[2]['urlPhotArt'] ?>"
                                            alt="Post Thumbnail" class="w-100">
                                    </div>
                                </a>
                                <div class="card-body px-0 pb-0">
                                    <ul class="post-meta mb-2">
                                    </ul>
                                    <h2 class="h1"> <?php echo $article[2]["libTitrArt"] ?></h2>
                                    <p class="card-text"><?php echo $article[2]["libChapoArt"] ?></p>
                                    <div class="content"> <a class="read-more-btn"
                                            href="/views/frontend/articles/article1.php?id=<?php echo $article[2]['numArt']; ?>">Lire
                                            en entier</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 mb-4">
                            <article class="card article-card article-card-sm h-100">
                                <a href="article.html">
                                    <div class="card-image">
                                        <div class="post-info"> <span
                                                class="text-uppercase"><?php echo $article[3]["dtCreaArt"] ?></span>
                                            <span class="text-uppercase">12 minutes de lecture</span>
                                        </div>
                                        <img src="<?php echo 'src/uploads/' . $article[3]['urlPhotArt'] ?>"
                                            alt="Post Thumbnail" class="w-100">
                                    </div>
                                </a>
                                <div class="card-body px-0 pb-0">
                                    <ul class="post-meta mb-2">
                                    </ul>
                                    <h2 class="h1"> <?php echo $article[3]["libTitrArt"] ?></h2>
                                    <p class="card-text"><?php echo $article[3]["libChapoArt"] ?></p>
                                    <div class="content"> <a class="read-more-btn"
                                            href="/views/frontend/articles/article1.php?id=<?php echo $article[3]['numArt']; ?>">Lire
                                            en entier</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 mb-4">
                            <article class="card article-card article-card-sm h-100">
                                <a href="article.html">
                                    <div class="card-image">
                                        <div class="post-info"> <span
                                                class="text-uppercase"><?php echo $article[4]["dtCreaArt"] ?></span>
                                            <span class="text-uppercase">10 minutes de lecture</span>
                                        </div>
                                        <img src="<?php echo 'src/uploads/' . $article[4]['urlPhotArt'] ?>"
                                            alt="Post Thumbnail" class="w-100">
                                    </div>
                                </a>
                                <div class="card-body px-0 pb-0">
                                    <ul class="post-meta mb-2">
                                        <li> <a href="#!">
                                    </ul>
                                    <h2 class="h1"> <?php echo $article[4]["libTitrArt"] ?></h2>
                                    <p class="card-text"><?php echo $article[4]["libChapoArt"] ?></p>
                                    <div class="content"> <a class="read-more-btn"
                                            href="/views/frontend/articles/article1.php?id=<?php echo $article[4]['numArt']; ?>">Lire
                                            en entier</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 mb-4">
                            <article class="card article-card article-card-sm h-100">
                                <a href="article.html">
                                    <div class="card-image">
                                        <div class="post-info"> <span
                                                class="text-uppercase"><?php echo $article[5]["dtCreaArt"] ?></span>
                                            <span class="text-uppercase">10 minutes de lecture</span>
                                        </div>
                                        <img src="<?php echo 'src/uploads/' . $article[5]['urlPhotArt'] ?>"
                                            alt="Post Thumbnail" class="w-100">
                                    </div>
                                </a>
                                <div class="card-body px-0 pb-0">
                                    <ul class="post-meta mb-2">
                                    </ul>
                                    <h2 class="h1"><a class="post-title" href="article.html">
                                            <?php echo $article[5]["libTitrArt"] ?></a></h2>
                                    <p class="card-text"><?php echo $article[5]["libChapoArt"] ?></p>
                                    <div class="content"> <a class="read-more-btn"
                                            href="/views/frontend/articles/article1.php?id=<?php echo $article[5]['numArt']; ?>">Lire
                                            en entier</a>
                                    </div>
                                </div>

                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <nav class="mt-4">
                                        <!-- pagination -->
                                        <nav class="mb-md-50">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link" href="#!" aria-label="Pagination Arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                            fill="currentColor" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="page-item active "> <a href="index.html" class="page-link">
                                                        1
                                                    </a>
                                                </li>
                                                <li class="page-item"> <a href="#!" class="page-link">
                                                        2
                                                    </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#!" aria-label="Pagination Arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                            fill="currentColor" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('reporter-bootstrap-main/source/partials/sidebar.php') ?>
            </div>
        </div>

    </section>
</main>

<?php include('footer.php') ?>


<?php require_once 'footer.php'; ?>