<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/dist/css/estilo.css" media="screen" />
    <title>Gardener</title>
</head>

<body>

    <div class="container-fluid wallpaper-form">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <form action="">

                            <div class="alerta">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </symbol>
                                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </symbol>
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                        <use xlink:href="#info-fill" />
                                    </svg>
                                    <div>
                                        <div>
                                            É obrigatório responder o questionário duas vezes por dia, nos horários estabelecidos.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Dores no Corpo </b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="dores-corpo">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="dores-corpo" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Tosse</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="tosse">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="tosse" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Coriza</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="coriza">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="coriza" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Falta de ar</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="falta-ar">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="falta-ar" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Perda de olfato</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="olfato">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="olfato" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Perda de paladar</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="paladar">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="paladar" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Dor de garganta</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="garganta">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="garganta" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Fraqueza</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="fraqueza">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="fraqueza" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Febre</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="febre">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="febre" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Espirros</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="espirro">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="espirro" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Calafrios</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="calafrios">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="calafrios" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Diarréia</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="diarreia">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="diarreia" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Teve contato com alguém que teve os sintomas mencionados acima ?</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="contatos-sintomas">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="contatos-sintomas" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col">
                                        <div class="form-group-box text-center">
                                            <div class="form-title">
                                                <a> <b>Temperatura</b> </a>
                                            </div>
                                            <div class="form-group-box-check d-flex text-center my-3 justify-content-center">
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input  d-block" type="radio" value="sim" name="temperatura">
                                                    <div>
                                                        <label class="form-check-label" for="sim">
                                                            Sim
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mx-3 d-block">
                                                    <input class="form-check-input d-block" type="radio" value="não" name="temperatura" checked>
                                                    <label class="form-check-label" for="não">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        
                            <div class="botao mb-4">
                                    <button type="submit" class="btn btn-success" name="pesquisa">Enviar</button>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>