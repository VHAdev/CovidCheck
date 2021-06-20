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
                                durante todo o seu período de folga. Favor respeitar o isolamento social requisitado e orientado pela empresa.
                                Referências: É obrigatório o preenchimento diário da temperatura corporal nas 2 aferições diárias.
                                Marque <b>SIM</b> caso apresente o sintoma correspondente ou <b>NÃO</b>, caso não o apresente.
                                <b>IMPORTANTE:</b> Os dados informados são sigilosos e serão analisados por um profissional de saúde.
                            </a>
                        </div>
                        <form method="GET">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="text">Nome Completo</label>
                                        <input type="text" class="form-control" id="text" aria-describedby="text" name="nome" placeholder="Nome completo" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="text">CPF</label>
                                        <input type="text" class="form-control cpf" id="text" aria-describedby="text" name="cpf" placeholder="000.000.000-00" required minlength="14">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="text">Empresa</label>
                                        <select id="inputState" class="form-control" name="empresa">
                                            <option selected>Selecione sua empresa...</option>
                                            <option value="Empresa 1">Empresa 1</option>
                                            <option value="Empresa 1">Empresa 2</option>
                                            <option value="Empresa 1">Empresa 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="formulario">
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