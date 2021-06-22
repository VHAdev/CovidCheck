<?php 
  //INICIAR A SESSÃO
  session_start();

  $value = true;
  if($_SESSION['conectado'] != true){
      $value = "false";
  }
?>

<script>
let value = ""+<?php echo $value ?>;
    if(value  && value != true){
        window.location.href = "../";
    }
</script>

<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                            <div class="row">
                                <div class="col">
                                    <div class="pesquisa">
                                        <div class="form-group">
                                            <label for="">Nome:</label>
                                            <input type="search" class="form-control rounded" placeholder="Nome" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="pesquisa">
                                        <div class="form-group">
                                            <label for="">De:</label>
                                            <input type="date" class="form-control" id="data" aria-describedby="data" placeholder="00/00/0000">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="pesquisa">
                                        <div class="form-group">
                                            <label for="">Até:</label>
                                            <input type="date" class="form-control" id="data" aria-describedby="data" placeholder="00/00/0000">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="pesquisa">
                                        <div class="form-group">
                                            <label for="">CPF:</label>
                                            <input type="text" class="form-control cpf" id="text" aria-describedby="text" placeholder="000.000.000-00" required minlength="14">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="pesquisa">
                                        <div class="form-group">
                                            <label for="">Sintoma</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Positivo</option>
                                                <option>Negativo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Empresa</th>
                                            <th>Data</th>
                                            <th>Formulário</th>
                                        </tr>
                                    </thead>
                                    <tbody class="js-table-dates">
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>