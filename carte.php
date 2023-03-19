<?php
session_start();
include 'includes/head.html';
include 'includes/navbar.php';
include 'includes/header.html';
include 'includes/connect.php';

?>

<div class="container">
    <div class="row">

<?php


$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'ENTREES'");
$entrées = $result->fetchAll();

?>
<div class="col-md-4">
<h2 class="">Entrées</h2>
<hr>

<?php foreach($entrées as $entrée): ?>

<div class="menu">
    <div class="title-menu"><?php echo $entrée['titre']?></div>
     <div class="price-menu"><?php echo $entrée['prix']?></div>
     <div class=""><?php echo $entrée['descriptions']?></div>
    </div>

<?php endforeach; ?>
</div>



<?php

$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'PLATS'");
$desserts = $result->fetchAll();
?>
<div class="col-md-4">
<h2 class="">Plats</h2>
<hr>
<?php foreach($desserts as $dessert): ?>

    <div class="menu">
    <div class="title-menu"><?php echo $dessert['titre']?></div>
     <div class="price-menu"><?php echo $dessert['prix']?></div>
     <div class=""><?php echo $dessert['descriptions']?></div>
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

    <div class="menu">
    <div class="title-menu"><?php echo $dessert['titre']?></div>
     <div class="price-menu"><?php echo $dessert['prix']?></div>
     <div class=""><?php echo $dessert['descriptions']?></div>
    </div>

    <?php endforeach; ?>
</div>

<?php


$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'SALADES'");
$entrées = $result->fetchAll();

?>
<div class="col-md-4">
<h2 class="">Salades</h2>
<hr>

<?php foreach($entrées as $entrée): ?>

<div class="menu">
    <div class="title-menu"><?php echo $entrée['titre']?></div>
     <div class="price-menu"><?php echo $entrée['prix']?></div>
     <div class=""><?php echo $entrée['descriptions']?></div>
    </div>

<?php endforeach; ?>
</div>
<?php


$result = $pdo->query("SELECT * FROM carte WHERE categorie = 'BURGERS'");
$entrées = $result->fetchAll();

?>
<div class="col-md-4">
<h2 class="">Burgers</h2>
<hr>

<?php foreach($entrées as $entrée): ?>

<div class="menu">
    <div class="title-menu"><?php echo $entrée['titre']?></div>
     <div class="price-menu"><?php echo $entrée['prix']?></div>
     <div class=""><?php echo $entrée['descriptions']?></div>
    </div>

<?php endforeach; ?>
</div>
</div>
</div>


<?php
include 'includes/footer.php';
?>