<?php
session_start();
include 'head.html';
include 'panelnavbar.html';
include '../includes/connect.php';



if(isset($_POST["delete"])){
    $id_menu = $_POST['id-menu'];
    $delete = $pdo->query("DELETE FROM carte WHERE id = $id_menu;");
}


?>


<div class="container">
    <div class="row">
    <h1>Supprimer un plat</h1>
 
    
<?php
$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'ENTREES'");
$entrées = $result->fetchAll();
?>
<div class="col-md-4">
<h2 class="">Entrées</h2>
<hr>

<?php foreach($entrées as $entrée): ?>
<div>
<span><?php echo '<b>' . $entrée['titre'] . '  ' . 'ID = ' . $entrée['id'] . '</b>'
     .  '</br>'. $entrée['descriptions'] .' '. '<b>' . $entrée['prix'] . '€' . '</b>'?></span>
</div>
<?php endforeach; ?>
</div>





<?php
$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'BURGERS'");
$burgers = $result->fetchAll();
?>

<div class="col-md-4">
<h2 class="">Burgers</h2>
<hr>
<?php foreach($burgers as $burger): ?>
    <div>
    <span><?php echo '<b>' . $burger['titre'] . '  ' . 'ID = ' . $burger['id'] . '</b>'
     .  '</br>'. $burger['descriptions'] .' '. '<b>' . $burger['prix'] . '€' . '</b>'?></span>
    </div>
<?php endforeach; ?>
</div>





<?php
$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'DESSERTS'");
$desserts = $result->fetchAll();
?>

<div class="col-md-4">
<h2 class="">Desserts</h2>
<hr>
<?php foreach($desserts as $dessert): ?>
    <div>
    <span><?php echo '<b>' . $dessert['titre'] . '  ' . 'ID = ' . $dessert['id'] . '</b>'
     .  '</br>'. $dessert['descriptions'] .' '. '<b>' . $dessert['prix'] . '€' . '</b>'?></span>
    </div>
<?php endforeach; ?>
</div>


<?php
$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'SALADES'");
$salades = $result->fetchAll();
?>

<div class="col-md-4">
<h2 class="">Salades</h2>
<hr>
<?php foreach($salades as $salade): ?>
    <div>
    <span><?php echo '<b>' . $salade['titre'] . '  ' . 'ID = ' . $salade['id'] . '</b>'
     .  '</br>'. $salade['descriptions'] .' '. '<b>' . $salade['prix'] . '€' . '</b>'?></span>
    </div>
<?php endforeach; ?>
</div>



<?php
$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'PLATS'");
$plats = $result->fetchAll();
?>

<div class="col-md-4">
<h2 class="">Plats</h2>
<hr>
<?php foreach($plats as $plat): ?>
    <div>
    <span><?php echo '<b>' . $plat['titre'] . '  ' . 'ID = ' . $plat['id'] . '</b>'
     .  '</br>'. $plat['descriptions'] .' '. '<b>' . $plat['prix'] . '€' . '</b>'?></span>
    </div>
<?php endforeach; ?>
</div>







<div class="mb-3" style="margin-top:100px">
  <h1>Supprimer une plat</h1>
  <form method="POST" action="delete-menu.php">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">N° de ID du plat à supprimer : </span>
        <input type="text" class="form-control" name="id-menu" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="col-auto">
    <button type="submit" name="delete" class="btn btn-primary mb-3">Supprimer</button>
  </div>
</fom>
</div>
</div>
</div>


<?php
include 'footer.html';
?>