<?php

// AÇÃO PARA LOGAR
if(isset($_GET['logar'])){

    $usuario = htmlspecialchars($_GET['usuario']);
    $password = htmlspecialchars($_GET['senha']);

    $consulta = $connect->query("SELECT * FROM gd_gestor WHERE senha = '$password' AND usuario = '$usuario';");
   
    $result = $consulta->fetch(PDO::FETCH_ASSOC);

    if($result != false):
       
        $_SESSION['conectado'] = true;
        
        $_SESSION['usuario'] = $usuario;
        $_SESSION['empresa'] = $result['empresa']
        ?>
        <script>
            window.location.href = "../relatorios/admin.php"
        </script>
        <?php
    else:
        $_SESSION['conectado'] = false;
        ?>
        <script>
            window.location.href = "../relatorios/admin.php"
        </script>
        <?php 
    endif;
}


//AÇÃO PARA DESLOGAR

if(isset($_GET['sair'])){
   $_SESSION['conectado'] = false;
    echo "deslogado";
}

?>