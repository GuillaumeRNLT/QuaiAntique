<?php

include 'head.html';
include 'panelnavbar.html';
include '../includes/connect.php';
?>

<h1>Ajouter une image</h1>





<div class="container">
<div class="mb-3" style="margin-top:100px">
  <h1>Ajouter une image</h1>
  <form method="POST" action="add-img.php" enctype="multipart/form-data">
    <!--<div class="form-floating mb-3">-->
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Titre : </span>
        <input type="text" class="form-control" name="title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
<!--<input type="text" class="form-control"  name="title" placeholder="Ajouter un titre" required>
    </div>-->
  <label for="images" class="drop-container">
  <input type="file" id="images" name="file" accept="image/*" required>
</label>
<!--<button class="btn btn-success" type="submit" name="submit">Ajouter</button>-->
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-success" type="submit" name="submit">Ajouter</button>
</div>
</form>
</div>
</div>



<?php
$statusMsg = '';



if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]) && isset($_POST["title"])){
    // Allow certain file formats
    
    $targetDir = "../uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $title = $_POST["title"];
 
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $pdo->query("INSERT into images (file_name, uploaded_on, title) VALUES ('".$fileName."', NOW(), '".$title."')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;

?>








<?php
include '../includes/footer.html';
?>