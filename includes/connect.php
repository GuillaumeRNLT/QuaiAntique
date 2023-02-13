<?php

const HOST_NAME = "localhost";
const DB_NAME = "studi";
const DB_PORT = 5432;
const USER_NAME = "postgres";
const PWD = "triangle";

/*try{
    $connexion = 'pgsql:host='.HOST_NAME.'; dbname='.DB_NAME. ';port='.DB_PORT;
    $pdo = new PDO($connexion, USER_NAME, PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=studi;user=postgres;password=triangle');
} catch (PDOException $e){
    $message = 'Erreur de connexion'. $e->getMessage();
    die($message);
}*/


?>

<?php

try{
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=studi;user=postgres;password=triangle');
}catch (PDOException $e){
    echo 'ERREUR';
    echo $e->getMessage();
}
?>


<!--$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=studi;user=postgres;password=triangle');
} catch (PDOException $e){
    echo 'ERREUR';
    echo $e->getMessage();
}-->