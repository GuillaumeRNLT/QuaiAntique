<?php

include 'includes/head.html';
include 'includes/navbar.html';
include 'includes/header.html';
include 'includes/connect.php';


?>

<div class="container">
    <div class="row">


<?php


$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'entrées'");

$entrées = $result->fetchAll();

?>
<div class="col-md-4">
<h2 class="">Entrées</h2>
<hr>

<?php foreach($entrées as $entrée): ?>
<div>
<span><?php echo $entrée['titre'] .'</br>'. $entrée['descriptions'] .' '. $entrée['prix'] . '€'?></span>
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
<?php

$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'desserts'");
$desserts = $result->fetchAll();
?>
<div class="col-md-4">
<h2 class="">Desserts</h2>
<hr>
<?php foreach($desserts as $dessert): ?>

    <div>
    <span><?php echo '<span class ="menu-title" style="font-weight: bold;">' . $dessert['titre'] . '</span>'
     .  '</br>'. $dessert['descriptions'] .' '. '<b>' . $dessert['prix'] . '€' . '</b>'?></span>
    </div>

<?php endforeach; ?>
</div>
</div>
</div>

<?php
include 'includes/footer.html';
?>