<?php
session_start();
include 'head.html';
include 'panelnavbar.html';
include '../includes/connect.php';
error_reporting(E_ERROR | E_PARSE);

if(!empty($_POST)){
    if(isset($_POST["LundiMidi"]) && (isset($_POST["LundiSoir"]) && (isset($_POST["MardiMidi"]) && (isset($_POST["MardiSoir"]) &&
    (isset($_POST["MercrediMidi"]) && (isset($_POST["MercrediSoir"]) && (isset($_POST["JeudiMidi"]) && (isset($_POST["JeudiSoir"]) &&
    (isset($_POST["VendrediMidi"]) && (isset($_POST["VendrediSoir"]) && (isset($_POST["SamediMidi"]) && (isset($_POST["SamediSoir"])
    && (isset($_POST["DimancheMidi"]) && (isset($_POST["DimancheSoir"])) ))))))))))))){

        $lundi_midi = $_POST["LundiMidi"];
        $lundi_soir = $_POST["LundiSoir"];
        $mardi_midi = $_POST["MardiMidi"];
        $mardi_soir = $_POST["MardiSoir"];
        $mercredi_midi = $_POST["MercrediMidi"];
        $mercredi_soir = $_POST["MercrediSoir"];
        $jeudi_midi = $_POST["JeudiMidi"];
        $jeudi_soir = $_POST["JeudiSoir"];
        $vendredi_midi = $_POST["VendrediMidi"];
        $vendredi_soir = $_POST["VendrediSoir"];
        $samedi_midi = $_POST["SamediMidi"];
        $samedi_soir = $_POST["SamediSoir"];
        $dimanche_midi = $_POST["DimancheMidi"];
        $dimanche_soir = $_POST["DimancheSoir"];

        $delete = $pdo->query("DELETE FROM horaires");

        $sql = "INSERT INTO horaires (lundi_midi, lundi_soir, mardi_midi, mardi_soir, mercredi_midi, mercredi_soir, jeudi_midi, jeudi_soir, vendredi_midi, vendredi_soir,
        samedi_midi, samedi_soir, dimanche_midi, dimanche_soir) VALUES ('$lundi_midi', '$lundi_soir', '$mardi_midi', '$mardi_soir', '$mercredi_midi', '$mercredi_soir',
         '$jeudi_midi', '$jeudi_soir', '$vendredi_midi', '$vendredi_soir', '$samedi_midi', '$samedi_soir', '$dimanche_midi', '$dimanche_soir')";

            $query = $pdo->prepare($sql);
            $query->bindvalue(":lundi_midi", $lundi_midi, PDO::PARAM_STR);
            $query->bindvalue(":lundi_soir", $lundi_soir, PDO::PARAM_STR);
            $query->bindvalue(":mardi_midi", $mardi_midi, PDO::PARAM_STR);
            $query->bindvalue(":mardi_soir", $mardi_soir, PDO::PARAM_STR);
            $query->bindvalue(":mercredi_midi", $mercredi_midi, PDO::PARAM_STR);
            $query->bindvalue(":mercredi_soir", $mardi_soir, PDO::PARAM_STR);
            $query->bindvalue(":jeudi_midi", $jeudi_midi, PDO::PARAM_STR);
            $query->bindvalue(":jeudi_soir", $jeudi_soir, PDO::PARAM_STR);
            $query->bindvalue(":vendredi_midi", $vendredi_midi, PDO::PARAM_STR);
            $query->bindvalue(":vendredi_soir", $vendredi_soir, PDO::PARAM_STR);
            $query->bindvalue(":samedi_midi", $samedi_midi, PDO::PARAM_STR);
            $query->bindvalue(":samedi_soir", $samedi_soir, PDO::PARAM_STR);
            $query->bindvalue(":dimanche_midi", $dimanche_midi, PDO::PARAM_STR);
            $query->bindvalue(":dimanche_soir", $dimanche_soir, PDO::PARAM_STR);
            $query->execute();

            echo "<p>horaires enregistrés</>";
        
    }

}





?> 
<div class="container d-flex align-items-center " style="height: 80vh;">
  <div class="container text-center">
<h1 class="text-center">Horaires</h1>
        <p class="text-center">Vous pouvez mettre à jour les horaires du restaurant.<p>
        <p class="text-center">Veuillez bien les supprimer avant dans ajouter de nouveaux<p>
<div class="d-flex justify-content-center">
  <form method="POST" action="horaires.php">
  <div class="input-group">
  <span class="input-group-text">Lundi</span>
  <input type="text" aria-label="First name" class="form-control" placeholder="11h00 - 14h00" name="LundiMidi">
  <input type="text" aria-label="Last name" class="form-control" placeholder="18h - 22h00" name="LundiSoir">
</div>
<div class="input-group">
  <span class="input-group-text">Mardi</span>
  <input type="text" aria-label="First name" class="form-control" placeholder="11h00 - 14h00" name="MardiMidi">
  <input type="text" aria-label="Last name" class="form-control" placeholder="18h - 22h00" name="MardiSoir">
</div>
<div class="input-group">
  <span class="input-group-text">Mercredi</span>
  <input type="text" aria-label="First name" class="form-control" name="MercrediMidi">
  <input type="text" aria-label="Last name" class="form-control" name="MercrediSoir">
</div>
<div class="input-group">
  <span class="input-group-text">Jeudi</span>
  <input type="text" aria-label="First name" class="form-control" name="JeudiMidi">
  <input type="text" aria-label="Last name" class="form-control" name="JeudiSoir">
</div>
<div class="input-group">
  <span class="input-group-text">Vendredi</span>
  <input type="text" aria-label="First name" class="form-control" name="VendrediMidi">
  <input type="text" aria-label="Last name" class="form-control" name="VendrediSoir">
</div>
<div class="input-group">
  <span class="input-group-text">Samedi</span>
  <input type="text" aria-label="First name" class="form-control" name="SamediMidi">
  <input type="text" aria-label="Last name" class="form-control" name="SamediSoir">
</div>
<div class="input-group">
  <span class="input-group-text">Dimanche</span>
  <input type="text" aria-label="First name" class="form-control" name="DimancheMidi">
  <input type="text" aria-label="Last name" class="form-control" name="DimancheSoir">
</div>
<div class="d-flex justify-content-center" id="button">
    <button type="submit" class="btn btn-primary">Ajouter</button>
    <button type="submit"  name="delete"class="btn btn-danger">Supprimer</button>
</div>
  </form>
</div>
</div>
</div>

<?php
include 'footer.html';
?>