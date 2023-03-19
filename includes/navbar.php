<nav class="navbar navbar-expand-lg navbar-dark static-top" id="nav">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="./images/Logo.svg" alt="..."  height="36">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carte.php">Carte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Réserver</a>
          </li>
          <?php if(!isset($_SESSION['user'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Connexion</a>
          </li>
          <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="profil.php">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deconnexion.php">Deconnexion</a>
          </li>
          <?php endif; ?>               
        </ul>
      </div>
    </div>
 </nav>