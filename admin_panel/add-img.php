<?php
session_start();
include 'head.html';
include 'panelnavbar.html';
include '../includes/connect.php';

$statusMsg = '';

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]) && isset($_POST["title"])){
    
    $targetDir = "../uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $title = $_POST["title"];
    //autoriser les formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload de l'image
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Inserer le nom de l'image dans la base
            $insert = $pdo->query("INSERT into images (file_name, uploaded_on, title) VALUES ('".$fileName."', NOW(), '".$title."')");
            if($insert){
                $statusMsg = "L'image ".$fileName. " a été téléchargée.";
            }else{
                $statusMsg = "L'upload a échoué.";
            } 
        }else{
            $statusMsg = "Désolé une érreur c'est produite.";
        }
    }else{
        $statusMsg = 'Désolé ce n\'est pas un format autorisé';
    }
}else{
    $statusMsg = 'Séléctionner une image.';
}

// Affichage du message
echo $statusMsg;

?>


<div class="container">
<h1>Ajouter une image</h1>
    <div class="row">

<?php
// Afficher les images de la base.
$query = $pdo->query("SELECT * FROM images ORDER BY uploaded_on DESC");


if($query->rowCount() > 0){
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $imageURL = '../uploads/'.$row["file_name"];
        $image_title = $row['title'];
        $image_id = $row['id'];
        if(is_array($row)){
           $row["title"]. "\n";
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

</div>


<div class="container">
<div class="mb-3" style="margin-top:100px">
  <h1>Ajouter une image</h1>
  <form method="POST" action="add-img.php" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Titre : </span>
        <input type="text" class="form-control" name="title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
  <label for="images" class="drop-container">
  <input type="file" id="images" name="file" accept="image/*" required>
</label>
<div class="col-auto">
  <button class="btn btn-primary mb-3" type="submit" name="submit">Ajouter</button>
</div>
</form>
</div>
</div>
</div>



<?php
include 'footer.html';

?>