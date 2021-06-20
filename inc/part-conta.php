<?php 
  //INICIAR A SESSÃO
  session_start();

  $value = false;
  if($_SESSION['conectado'] != true){
      $value = "false";
  }
?>

<script>
    if(<?php echo $value ?> != true){
        window.location.href = "../";
    }
</script>


<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-12 col-md-6">
            <div class="container">
                <div class="row">
                    <div class="col-">
                        <div class="card card-outline-secondary">
                            <div class="card-header">
                                <h3 class="mb-0">Conta</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                                        <div class="col-lg-9">
                                            <div class="field-att mb-2">
                                                <span><strong data-nome></strong></span>
                                            </div>
                                            <input class="form-control" type="text" placeholder="Nome" name="nome" data-value>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                        <div class="col-lg-9">
                                            <div class="field-att mb-2">
                                                <span><strong data-email></strong></span>
                                            </div>
                                            <input class="form-control" type="email" placeholder="email@gmail.com" name="email" data-value>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Empresa</label>
                                        <div class="col-lg-9">
                                            <div class="field-att mb-2">
                                                <span><strong data-empresa></strong></span>
                                            </div>
                                            <input class="form-control" type="text" placeholder="Empresa" name="empresa" data-value>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Usuário</label>
                                        <div class="col-lg-9">
                                            <div class="field-att mb-2">
                                                <span><strong data-usuario></strong></span>
                                            </div>
                                            <input class="form-control" type="text" placeholder="Usuário" name="usuario" data-value>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Senha</label>
                                        <div class="col-lg-9">
                                            <div class="field-att mb-2">
                                                <span><strong data-senha></strong></span>
                                            </div>
                                            <input class="form-control" type="password" placeholder="******" name="senha" data-value>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Confirmar senha</label>
                                        <div class="col-lg-9">
                                            <div class="field-att mb-2">
                                                <span><strong></strong></span>
                                            </div>
                                            <input class="form-control" type="password" placeholder="******">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Cancelar">
                                            <input type="button" class="btn btn-success" value="Salvar alterações">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>