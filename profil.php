<?php
session_start();
include 'includes/head.html';
include 'includes/navbar.php';
include 'includes/header.html';
include 'includes/connect.php';

if(!isset($_SESSION['user'])){ 
    header('Location: index.php'); 
    exit; 
  }
?>

<div class="container">
<h1>Votre profil</h1>
<div> Prénom: <?php echo  $_SESSION["user"]['name'] ?></div>
<div> Nom: <?php echo $_SESSION["user"]["surname"] ?></div>
<div> Votre email: <?php echo $_SESSION["user"]["email"] ?></div>
<div> Nombres de convives: <?php echo $_SESSION["user"]["convives"] ?></div>
<div> Allergies: <?php echo $_SESSION["user"]["allergy"] ?></div>
</div>


<?php
    include'includes/footer.php';
?>