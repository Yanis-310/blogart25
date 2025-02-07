<?php
// Load config
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog'Art</title>
  <!-- Load CSS -->
  <link rel="stylesheet" href="reporter-bootstrap-main/theme/css/style.css" />
  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="shortcut icon" type="image/x-icon" href="src/images/article.png" />

  <!-- theme meta -->
  <meta name="theme-name" content="reporter" />

  <!-- # Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Neuton:wght@700&family=Work+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- # CSS Plugins -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link href="src/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
      <!-- Logo à gauche -->
      <a class="navbar-brand" href="#">
        <img src="<?php echo ROOT_URL ?>/src/images/logoBlogArt.png" alt="Logo Blog'Art" style="max-height: 60px;">
      </a>

      <!-- Bouton toggle pour les petits écrans -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu de navigation -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/views/backend/dashboard.php">Admin</a>
          </li>
        </ul>
      </div>

      <!-- Recherche et boutons de login/signup -->
      <div class="d-flex align-items-center">
        <form class="d-flex me-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Rechercher sur le site…" aria-label="Search">
        </form>
        <a class="btn btn-outline-primary m-1" href="/views/backend/security/login.php" role="button">Login</a>
        <a class="btn btn-outline-dark m-1" href="/views/backend/security/signup.php" role="button">Sign up</a>
      </div>
    </div>
  </nav>

  <!-- Section À propos -->
  <div class="container my-4">
    <div class="row">
      <div class="col-md-12">
        <h1 class="mb-4 text-center">À propos de notre studio</h1>
        <div class="about-content d-flex align-items-center justify-content-center">
          <!-- Image section -->
          <img src="/reporter-bootstrap-main/source/images/1.jpg" alt="Notre studio" class="about-image"
            style="max-width: 50%; margin-right: 20px; border-radius: 8px;">
          <!-- Text section -->
          <div class="about-text">
            <h2>Notre histoire</h2>
            <p>
              Bienvenue dans notre studio ! Nous sommes une équipe passionnée de professionnels créatifs, dédiée à
              fournir des résultats exceptionnels. Notre studio se spécialise dans la conception, la photographie et la
              direction artistique, offrant des solutions sur mesure à nos clients.
            </p>
            <p>
              Avec un accent sur la créativité et l'innovation, nous travaillons en étroite collaboration avec nos
              clients pour donner vie à leurs projets. Que ce soit pour des projets personnels ou commerciaux, nous nous
              efforçons de dépasser les attentes et de créer des expériences uniques et significatives.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section Membres de l'équipe -->
  <div class="container my-4">
    <h2 class="text-center mb-4">Rencontrez notre équipe</h2>
    <div class="row text-center">
      <div class="col-md-2">
        <img src="/reporter-bootstrap-main/source/images/moi.png" alt="Membre 1" class="img-fluid rounded-circle mb-3"
          style="width: 150px;">
        <p>Membre 1</p>
      </div>
      <div class="col-md-2">
        <img src="/reporter-bootstrap-main/source/images/moi.png" alt="Membre 2" class="img-fluid rounded-circle mb-3"
          style="width: 150px;">
        <p>Membre 2</p>
      </div>
      <div class="col-md-2">
        <img src="/reporter-bootstrap-main/source/images/moi.png" alt="Membre 3" class="img-fluid rounded-circle mb-3"
          style="width: 150px;">
        <p>Membre 3</p>
      </div>
      <div class="col-md-2">
        <img src="/reporter-bootstrap-main/source/images/moi.png" alt="Membre 4" class="img-fluid rounded-circle mb-3"
          style="width: 150px;">
        <p>Membre 4</p>
      </div>
      <div class="col-md-2">
        <img src="/reporter-bootstrap-main/source/images/moi.png" alt="Membre 5" class="img-fluid rounded-circle mb-3"
          style="width: 150px;">
        <p>Membre 5</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
      <div class="row">
        <!-- Logo et description -->
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="index.html" class="d-block mb-3">
            <img src="/reporter-bootstrap-main/source/images/remove.png" alt="Logo Rap Blog" class="img-fluid"
              style="max-width: 200px; height: auto;">
          </a>
          <p class="small">
            Bienvenue sur mon blog dédié au rap. Actu, chroniques et analyses sur le monde du rap français et
            international.
          </p>
        </div>

        <!-- Liens rapides -->
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="mb-3 text-uppercase">Liens rapides</h5>
          <ul class="list-unstyled">
            <li><a href="about.html" class="text-white-50">À propos</a></li>
            <li><a href="article.html" class="text-white-50">Articles</a></li>
            <li><a href="privacy-policy.html" class="text-white-50">Politique de confidentialité</a></li>
            <li><a href="terms-conditions.html" class="text-white-50">Conditions générales</a></li>
          </ul>
        </div>

        <!-- Réseaux sociaux -->
        <div class="col-lg-4 col-md-12 mb-4">
          <h5 class="mb-3 text-uppercase">Restez connecté</h5>
          <div class="d-flex">
            <a href="#" class="btn btn-outline-light btn-sm me-2">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm me-2">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm me-2">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm">
              <i class="bi bi-youtube"></i>
            </a>
          </div>
        </div>
      </div>

      <hr class="border-gray-700 my-4">

      <!-- Copyright -->
      <div class="text-center">
        <p class="small mb-0">
          © 2025 Rap Blog. Tous droits réservés. | Imaginé et développé avec passion.
        </p>
      </div>
    </div>
  </footer>

  <!-- CSS pour style -->
  <style>
    footer {
      background: #111;
    }

    footer a {
      text-decoration: none;
    }

    footer a:hover {
      color: #f39c12;
    }

    .btn-outline-light {
      border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .btn-outline-light:hover {
      background: #f39c12;
      border-color: #f39c12;
      color: #111;
    }

    /* Ajustement des marges sous le footer */
    body {
      margin-bottom: 0;
    }

    footer {
      margin-bottom: 0;
    }
  </style>

  <!-- Bootstrap JS (optionnel) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>