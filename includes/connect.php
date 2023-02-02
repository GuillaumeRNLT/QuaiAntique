<?php

try{
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=studi;user=postgres;password=triangle');
} catch (PDOException $e){
    echo 'ERREUR';
    echo $e->getMessage();
}


?>
