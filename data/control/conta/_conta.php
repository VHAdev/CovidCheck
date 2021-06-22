<?php 

//REQUISIÇÃO DE INFORMAÇÕES DA CONTA

if(isset($_GET['conta']) and $_GET['conta'] == "info"){
    $consulta = $connect->query("SELECT * FROM gd_gestor WHERE usuario = '".$_SESSION['usuario']."'");
    
    $list = $consulta->fetch(PDO::FETCH_ASSOC);
   
    echo "//".$list['nome']."//".$list['email']."//".$list['empresa']."//".$list['senha']."//".$list['usuario'];
}



// MUDANÇAS DE INFORMAÇÕES DA CONTA
if(isset($_GET['atualizar']) and $_GET['atualizar'] == "info"){

  try {
  
    $stmt = $connect->prepare('UPDATE gd_gestor SET nome = :nome , email = :email, empresa = :empresa, usuario = :usuario, senha = :senha  WHERE usuario = :id');
    $stmt->execute(array(
      ':nome'  => $_GET['nome'],
      ':email' => $_GET['email'],
      ':empresa'  => $_GET['empresa'],
      ':usuario' => $_GET['usuario'],
      ':senha' => $_GET['senha'], 
      ':id' => $_GET['id']
    ));
  
    //echo $stmt->rowCount();
    $_SESSION['empresa'] = $_GET['empresa'];
    $_SESSION['usuario'] = $_GET['id'];
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
    
}

?>