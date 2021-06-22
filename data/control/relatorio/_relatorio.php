<?php 

// CADASTRANDO FORMULÁRIO
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

// RECUPERANDO DADOS 

if(isset($_GET["campos"])):

  $consulta = $connect->query("SELECT * FROM gd_funcionario WHERE empresa = '".$_SESSION['empresa']."';");

  //var_dump($consulta->fetch(PDO::FETCH_ASSOC));
  if($consulta->fetch(PDO::FETCH_ASSOC)):
    while ($field = $consulta->fetch(PDO::FETCH_ASSOC)) {
      // OS DADOS DEVOLVIDOS
      ?>

      <tr>
        <td>
          <?php echo $field['nome']?>
        </td>
        <td>
          <?php echo $field['cpf']?>
        </td>
        <td>
          <?php echo $field['empresa']?>
        </td>
        <td>
          <?php echo $field['data_att']?>
        </td>
        <td>
          <a data-funcionario="<?php echo $field['id_usuario']?>">
            Ir
          </a>
        </td>
      </tr>

      <?php 
    }
  else:
    ?>
     <tr>
        <td>
          --
        </td>
        <td>
          --
        </td>
        <td>
          --
        </td>
        <td>
          --
        </td>
        <td>
         --
        </td>
      </tr>
    <?php 
  endif;
endif;
?>