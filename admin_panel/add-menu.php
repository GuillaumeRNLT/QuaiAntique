<?php

include 'head.html';
include 'panelnavbar.html';
include '../includes/connect.php';
error_reporting(E_ERROR | E_PARSE);

if(!empty($_POST)){
  if(isset($_POST["title"], $_POST["description"], $_POST["price"], $_POST["categories"])
  && !empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["price"]) && !empty($_POST["categories"])) 
  {
  $title = $_POST["title"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $categorie = $_POST["categories"];


  $sql = "INSERT INTO carte (titre, descriptions, prix, categorie) VALUES ('$title', '$description', $price, '$categorie')";

  $query = $pdo->prepare($sql);
  $query->bindParam(':titre', $title, PDO::PARAM_STR);
  $query->bindParam(":descriptions", $description, PDO::PARAM_STR);
  $query->bindParam(":price", $price, PDO::PARAM_STR);
  $query->bindParam(":categorie", $categorie, PDO::PARAM_STR);
  $query->execute();
 }}

?>


<div class="container">
        <div class="row">
        <div class="mb-3">
  <h1>Ajouter un plat</h1>
  <form method="POST" action="add-menu.php">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">titre : </span>
        <input type="text" class="form-control" name="title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">description : </span>
        <input type="text" class="form-control" name="description" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">prix : </span>
        <input type="text" class="form-control" name="price" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="mb-3">
									<label class="mb-2 text-muted" for="">Catégories</label>
										<select class="form-select" name="categories" required>
											<option value="Entrées">Entrées</option>
  											<option value="Plats">Plats</option>
  											<option value="Desserts">Desserts</option>
  											<option value="Salades">Salades</option>
  											<option value="Burgers">Burgers</option>
										</select>
									<div class="invalid-feedback">
										
									</div>
								</div>
    <div class="col-auto">
    <button type="submit" name="add-menu" class="btn btn-primary mb-3">Ajouter</button>
  </div>
</fom>


</div>
</div>
</div>


















<?php
include '../includes/footer.html';
?>