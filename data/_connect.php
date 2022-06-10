
<?php
//INICIAR A SESSÃO
$_SESSION["erros"] = "(*)";

/* variáveis de conexão */

$host_name = "localhost";
$database_name = "covidcheck";
//$database_name = "";
$database_login = "root";
//$database_login = "";
$database_password = "";
//$database_password = "";

/* variável de conexão PDO */
try {
    $connect = 
        new PDO("mysql:host=".$host_name.";
            dbname=".$database_name, 
            $database_login,
            $database_password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $_SESSION["erros"] = "\n\n".$e;
}

?>
