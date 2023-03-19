<?php
// DB credentials.
/*define('DB_HOST','localhost');
define('DB_USER','postgres');
define('DB_PASS','triangle');
define('DB_NAME','studi');*/
// Establish database connection.
/*try
{
$pdo = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}*/

//CONNECTION ALWAYSDATA
/*try{
    $pdo = new PDO('pgsql:host=postgresql-quai-antique.alwaysdata.net;port=5432;dbname=quai-antique_bd;user=quai-antique;password=trianglerond88');
}catch (PDOException $e){
    echo 'ERREUR';
    echo $e->getMessage();
}
?>*/


//<?php
try{
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=studi;user=postgres;password=triangle');
}catch (PDOException $e){
    echo 'ERREUR';
    echo $e->getMessage();
}
?>


