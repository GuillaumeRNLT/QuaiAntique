<?php

include 'head.html';
include 'panelnavbar.html';
include '../includes/connect.php';

if(isset($_POST["delete"])){
    $id_img = $_POST['id-img'];
    $delete = $pdo->query("DELETE FROM images WHERE id = $id_img;");
}
?>



<div class="container">
<h1>Supprimer une image</h1>
    <div class="row">


<?php
// Get images from the database
$query = $pdo->query("SELECT * FROM images ORDER BY uploaded_on DESC");


if($query->rowCount() > 0){
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $imageURL = '../uploads/'.$row["file_name"];
        $image_title = $row['title'];
        $image_id = $row['id'];
        if(is_array($row)){
           $row["title"]. "\n";
           //$image_title = $row['title'];
      }     
?>
      <div class="col-md-4 testcontainer">
      <div class="overlay"><h6 class="texthover"><?php echo $image_title ."  ID = ". $image_id;?></h6>
        <img src="<?php echo $imageURL; ?>"  alt=""  class="img-thumbnail img-gallery" />

        </div>
      </div>
<?php }
}else{ ?>
    <p>Pas d'image trouvée...</p>
<?php } ?>



<div class="mb-3" style="margin-top:100px">
  <h1>Supprimer une image</h1>
  <form method="POST" action="delete-img.php">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">N° de ID de l'image à supprimer : </span>
        <input type="text" class="form-control" name="id-img" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="col-auto">
    <button type="submit" name="delete" class="btn btn-primary mb-3">Supprimer</button>
  </div>
</fom>

</div>
</div>

<?php
include '../includes/footer.html';
?>