<?php

include 'includes/head.html';
include 'includes/navbar.html';
include 'includes/header.html';


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
              <div class="d-grid gap-2 col-2 mx-auto" id="button">
                <button id="" type="button" class="btn btn-custom">Carte</button>
            </div>
            </div>
          </div>
        </div>


        <div class="container">
          <div class="row">
<h2>Photos</h2>
            <hr>
<?php
// Include the database configuration file
include 'includes/connect.php';

// Get images from the database
$query = $pdo->query("SELECT * FROM images ORDER BY uploaded_on DESC");


if($query->rowCount() > 0){
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $imageURL = 'uploads/'.$row["file_name"];
        $image_title = $row['title'];
        $image_id = $row['id'];
        if(is_array($row)){
           $row["title"]. "\n";
           //$image_title = $row['title'];
      }
        
?>
    
      <div class="col-md-4">
      <div><?php echo $image_title ." ". $image_id;?>
        <img src="<?php echo $imageURL; ?>"  alt=""  class="img-thumbnail"/>
        <!--<form method="POST" action="panel.php" >
        <input class="" type="text" name="new_title"  id="new_title" placeholder="modifier titre">
        <button type="submit" name="modify_title" class="btn btn-primary" >Modifier</button>
        <button type="submit" name="delete" class="btn btn-danger">Supprimer</button>
        </form>-->
        </div>
      </div>
<?php }
}else{ ?>
    <p>Pas d'image trouvée...</p>
<?php } ?>

<div class=" d-grid gap-2 col-2 mx-auto">
            <button id="" type="button" class="btn btn-custom center-block">Réserver</button>
        </div>


</div>
</div>







<?php
include 'includes/footer.html';
?>