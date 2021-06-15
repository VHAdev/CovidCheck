<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-12 col-md-6">
            <div class="container">
                <div class="row">
                    <div class="col-">                                   
                                    <h2><b>INFORMAÇÃO DIÁRIA</b></h2>
                                        <div class="info">
                                            <a>
                                            Prezado colaborador você deve preencher esse formulário <b>DIARIAMENTE</b> às 10:00h e às 16:00h, 
                                            durante todo  o seu período de folga. Favor respeitar o isolamento social requisitado e orientado pela empresa.
                                            Referências: É obrigatório o preenchimento diário da temperatura corporal nas 2 aferições diárias.
                                            Marque <b>SIM</b> caso apresente o sintoma correspondente ou <b>NÃO</b>, caso não o apresente.
                                            <b>IMPORTANTE:</b> Os dados informados são sigilosos e serão analisados por um profissional de saúde.
                                            </a>
                                        </div>
                        <form action="?formulario" method="POST">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="text">Nome Completo</label>
                                        <input type="text" class="form-control" id="text" aria-describedby="text" placeholder="Nome completo" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="text">CPF</label>
                                        <input type="text" class="form-control cpf" id="text" aria-describedby="text" placeholder="000.000.000-00" required minlength="14">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="text">Data</label>
                                        <input type="text" class="form-control data" id="text" aria-describedby="text" placeholder="00/00/0000" required minlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Hora</label>
                                        <input type="text" class="form-control hora" id="text" aria-describedby="text" placeholder="00:00" required minlength="5">
                                    </div>
                                </div>
                            </div>
                                <div class="botao">
                                    <button type="submit" class="btn btn-success" name="cadastro">Próximo</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="container">
                <div class="row">
                    <div class="col">
                            <div class="logo">
                                <img class="imagem" src="./assets/src/images/gardenerlogo.png" alt="">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

