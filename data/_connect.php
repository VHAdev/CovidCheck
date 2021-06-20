
<?php
//INICIAR A SESSÃO
$_SESSION["erros"] = "(*)";

/* variáveis de conexão */

$host_name = "localhost";
$database_name = "deliv789_covidcheck";
$database_login = "deliv789_vato";
$database_password = "teste@teste123";

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