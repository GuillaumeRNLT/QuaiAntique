<?php

include 'head.html';
include 'panelnavbar.html';
include '../includes/connect.php';
?>

<h1>Modifier/Supprimer une image</h1>



<div class="container">
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

<div class="mb-3">
  <h1>Modifier le titre</h1>
  <form method="POST" action="delete-img.php">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">N° de ID de l'image à modifier : </span>
        <input type="text" class="form-control" name="id-img" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nouveaux titre : </span>
        <input type="text" class="form-control" name="title-modify" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="col-auto">
    <button type="submit" name="modify" class="btn btn-primary mb-3">Modifier</button>
  </div>
</fom>


</div>
</div>

<?php
if(isset($_POST["delete"])){
    $id_img = $_POST['id-img'];
    //$delete = $pdo->prepare("DELETE FROM images WHERE id = ?");
    $delete = $pdo->query("DELETE FROM images WHERE id = $id_img;");
    //header("location: http://localhost/restaurantbootstrap/backoffice/deleteimg.php");
    //exit();
}

if(isset($_POST["modify"])){
    $id_img = $_POST['id-img'];
    $modify_title = $_POST['title-modify'];
    $modify = $pdo->query("UPDATE images SET title = $modify_title WHERE id = $id_img");
}


include '../includes/footer.html';
?>