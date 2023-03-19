<?php
session_start();
include 'includes/head.html';
include 'includes/navbar.php';
include 'includes/header.html';
include 'includes/connect.php';

?>



		<div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-6 ">
              <div class="about-img"><img src="images/about.jpg" class="img-responsive" alt=""></div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="about-text">
                <h2>Notre restaurant</h2>
                <hr>
                <p>Associant simplicité raffinée et inventivité, la carte met en avant des produits frais et de qualité. Pour l’apéritif,
                 une sélection d’épicerie fine à partager est suggérée tandis qu’une jolie carte de desserts de saison propose la touche sucrée et gourmande de fin de repas.</p>
                 </div>
              <div class="d-flex justify-content-center" id="button">
                <a type="button" class="btn btn-custom" href="carte.php">Carte</a>
            </div>
            </div>
          </div>
        </div>


        <div class="container">
          <div class="row">
<h2>Photos</h2>
            <hr>
<?php

// Get images from the database
$query = $pdo->query("SELECT * FROM images ORDER BY uploaded_on DESC");


if($query->rowCount() > 0){
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $imageURL = 'uploads/'.$row["file_name"];
        $image_title = $row['title'];
        $image_id = $row['id'];
        if(is_array($row)){
           $row["title"]. "\n";
      }
        
?>
    
      <div class="col-md-4 testcontainer">
          <img src="<?php echo $imageURL; ?>"  alt=""  class="img-thumbnail img-gallery" />
          <h6 class="texthover"><?php echo $image_title;?></h6>
      </div>
<?php }
}else{ ?>
    <p>Pas d'image trouvée...</p>
<?php } ?>


<div class="container">
  <div class="row">
    <div class="d-flex justify-content-center">
        <a href="booking.php" type="button" class="btn btn-custom center-block">Réserver</a>
    </div>
  </div>
  </div> 
</div>
</div>


<div class="container">
  <div class="row align-items-center">
    <h2>L'équipe</h2>
    <hr>
    <div class="col">
      <div class="card mx-auto" style="width: 18rem;"> 
        <img src="images/01.jpg" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title text-center">Arnaud Michant</h5>
        <p class="card-text">Il est le responsable et le chef de la cuisine du Quai Antique.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mx-auto" style="width: 18rem;">
      <img src="images/02.jpg" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title text-center">Jean House</h5>
        <p class="card-text">Il est le sous chef de la cuisine du Quai Antique.</p>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card mx-auto" style="width: 18rem;">
      <img src="images/01.jpg" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title text-center">Michel Jr</h5>
        <p class="card-text">Il est le garde-manger, il élabore les entrées, les amuse-bouches..</p>
        </div>
    </div>
  </div>
</div>
</div>




<div>
<div class="container">
  <div class="row">
    <h2>Accès</h2>
      <hr>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42189.500009432195!2d4.904844884572707!3d48.63197196753106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eb80956f454177%3A0x40a5fb99a3b2370!2s52100%20Saint-Dizier!5e0!3m2!1sfr!2sfr!4v1676468120028!5m2!1sfr!2sfr"
  width="1640" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>



<?php
include 'includes/footer.php';
?>