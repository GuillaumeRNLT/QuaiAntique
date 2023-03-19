<?php
session_start();
include 'includes/head.html';
include 'includes/navbar.php';
include 'includes/header.html';
include 'includes/connect.php';

?>

<div class="container">
    <div class="row">
        <div class="text-center">
        <h1>Réservation</h1>
        <hr>
        <form>
        <div class="row justify-content-center">
        <div class="col-4">
        <label>Jour</label>
            <input class="form-select" type="date" name="date" required>
            <div class="row justify-content-center">
            <div class="col-4">
            <label>Convives</label>
            <select class="form-select" name="convives" id="convives" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
                <label>Midi</label>
            <select class="form-select"name="time" id="time">
                <option value="--:--">--:--</option>
                <option value="11:00">11:00</option>
                <option value="11:15">11:15</option>
                <option value="11:30">11:30</option>
                <option value="11:45">11:45</option>
                <option value="12:00">12:00</option>
                <option value="12:15">12:15</option>
                <option value="12:30">12:30</option>
                <option value="12:45">12:45</option>
                <option value="13:00">13:00</option>
            </select>
            <label>Soir</label>
            <select class="form-select" name="time" id="time">
                <option value="--:--">--:--</option>
                <option value="18:00">18:00</option>
                <option value="18:15">18:15</option>
                <option value="18:30">18:30</option>
                <option value="18:45">18:45</option>
                <option value="19:00">19:00</option>
                <option value="19:15">19:15</option>
                <option value="19:30">19:30</option>
                <option value="19:45">19:45</option>
                <option value="20:00">20:00</option>
                <option value="20:15">20:15</option>
                <option value="20:30">20:30</option>
                <option value="20:45">20:45</option>
                <option value="21:00">21:00</option>
            </select>
</div>
<div class="d-flex justify-content-center" id="">           
        <button type="button" class="btn btn-custom center-block">Réserver</button>
</div>
</div>
</div>
</div>

</form>


</div>
</div>
</div>        


<?php
include 'includes/footer.php';
?>