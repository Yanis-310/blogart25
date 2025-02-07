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

<?php
// Load config
require_once 'config.php';
session_start();
?>

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
            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
          </li>
          <?php if (isset($_SESSION['pseudoMemb']) && $_SESSION['pseudoMemb'] === 'Admin99'): ?>
            <li class="nav-item">
              <a class="nav-link" href="/views/backend/dashboard.php">Administrateur</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Recherche et boutons de login/signup ou logout -->
      <div class="d-flex align-items-center">
        <form class="d-flex me-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Rechercher sur le site…" aria-label="Search">
        </form>
        <?php if (!isset($_SESSION['pseudoMemb'])): ?>
          <a class="btn btn-outline-primary m-1" href="/views/backend/security/login.php" role="button">Login</a>
          <a class="btn btn-outline-dark m-1" href="/views/backend/security/signup.php" role="button">Se déconnecter</a>
        <?php else: ?>
          <a class="btn btn-danger m-1" href="/api/security/disconnect.php" role="button">Se déconnecter</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS (optionnel) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>