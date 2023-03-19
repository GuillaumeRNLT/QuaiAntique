<footer class="container-fluid bg-dark">
    <div class="container">
      <?php 
      include 'connect.php';
      $result = $pdo->query("SELECT * FROM horaires"); 
$horaires = $result->fetchAll();
?>

<?php foreach($horaires as $horaire): ?>
  <div id="footer">
    <div class="container text-center">
      <div class="row" id="footer">
<div class="col-4">
        <h6 style="color: #72a411; text-align: center;">Horaires</h6>
        <hr>
      <p>Lundi : <?php echo $horaire['lundi_midi'] . ' | ' . $horaire['lundi_soir']?></p>
      <p>Mardi : <?php echo $horaire['mardi_midi'] . ' | ' . $horaire['mardi_soir']?></p>
      <p>Mercredi : <?php echo $horaire['mercredi_midi'] . ' | ' . $horaire['mercredi_soir']?></p>
      <p>Jeudi : <?php echo $horaire['jeudi_midi'] . ' | ' . $horaire['jeudi_soir']?></p>
      <p>Vendredi : <?php echo $horaire['vendredi_midi'] . ' | ' . $horaire['vendredi_soir']?></p>
      <p>Samedi : <?php echo $horaire['samedi_midi'] . ' | ' . $horaire['samedi_soir']?></p>
      <p>Dimanche : <?php echo $horaire['dimanche_midi'] . ' | ' . $horaire['dimanche_soir']?></p>
      </div>
      <div class="col-4">
        <h6 style="color: #72a411; text-align: center;">Contact</h6>
        <hr>
        <p>Téléphone : 07.07.30.30.52</p>
        <p>Adresse : 15 rue du quai</p>
        <p>Saint-Dizier 52100</p>
      </div>
      <div class="col-4">
        <h6 style="color: #72a411; text-align: center;">Contact</h6>
        <hr>
        <p><a href="mentions_légales.php" style="color:white;">Mentions légales</a></p>
        <p>RGPD</p>
        <p></p>
      </div>
    <?php endforeach; ?>
    
   
</div>
  </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  </body>
  </html>