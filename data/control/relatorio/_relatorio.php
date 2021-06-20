<?php 

if(isset($_GET['cadastro'])){
    

    try {
        $stmt = $connect->prepare('INSERT INTO gd_funcionario (nome, cpf, empresa, sintomas) VALUES(:nome, :cpf, :empresa, :sintomas)');
        $stmt->execute(array(
          ':nome' => $_GET['nome'],
          ':cpf' => $_GET['cpf'],
          ':empresa' => $_GET['empresa'],
          ':sintomas' => $_GET['sintomas']
        ));
      
        echo $stmt->rowCount();
      } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
      }

}

?>