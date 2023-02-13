<?php

include 'head.html';
include 'panelnavbar.html';
include '../includes/connect.php';

?>


<div class="container">
    <div class="row">
    <h1>Supprimer un plat</h1>
    
    <?php


$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'entrées'");
$entrées = $result->fetchAll();

?>
<div class="col-md-4">
<h2 class="">Entrées</h2>
<hr>

<?php foreach($entrées as $entrée): ?>
<div>
<span><?php echo '<b>' . $entrée['titre'] . '</b>'
     .  '</br>'. $entrée['descriptions'] .' '. '<b>' . $entrée['prix'] . '€' . '</b>'?></span>
</div>
<?php endforeach; ?>
</div>

<?php


$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'desserts'");
$desserts = $result->fetchAll();



?>
<div class="col-md-4">
<h2 class="">Desserts</h2>
<hr>
<?php foreach($desserts as $dessert): ?>
    <div>
    <span><?php echo '<b>' . $dessert['titre'] . '</b>'
     .  '</br>'. $dessert['descriptions'] .' '. '<b>' . $dessert['prix'] . '€' . '</b>'?></span>
    </div>
<?php endforeach; ?>
</div>


</div>
</div>


<?php
include '../includes/footer.html';
?>