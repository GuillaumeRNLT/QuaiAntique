<?php

include 'head.html';
include 'panelnavbar.html';
?>

<h1>Ajouter une image</h1>





<div class="container">
<div class="mb-3" style="margin-top:100px">
  <h1>Ajouter une image</h1>
  <form method="POST" action="panel.php" enctype="multipart/form-data">
    <!--<div class="form-floating mb-3">-->
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Titre : </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
<!--<input type="text" class="form-control"  name="title" placeholder="Ajouter un titre" required>
    </div>-->
  <label for="images" class="drop-container">
  <input type="file" id="images" name="file" accept="image/*" required>
</label>
<!--<button class="btn btn-success" type="submit" name="submit">Ajouter</button>-->
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-success" type="button">Ajouter</button>
</div>
</form>
</div>
</div>












<?php
include '../includes/footer.html';
?>