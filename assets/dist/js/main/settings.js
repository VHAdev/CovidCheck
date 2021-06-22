let href = window.location.href.split("/")

let $href_A = "";

if(href[2] == "localhost"){
    if(href.length > 5){
        for(let x = 3; x < href.length; x++){
            $href_A += "../" 
            if((href.length - 1) == x){
                $href_A += "CovidCheckGardener/"
            }
        }
    }else{
        $href_A = "./"
    }
    $href_B = href[2]+"/"+href[3]
   
}else{
    for(let x = 3; x < href.length; x++){
        $href_A += "../" 
        if((href.length - 1) == x){
            $href_A += "./"
        }
    }
    $href_B = href[2]
}

let logout = function($coord){
    document.addEventListener("DOMContentLoaded", ()=>{
        let $logout = document.querySelector($coord);
        $logout.onclick = function(){
            const xhttp = new XMLHttpRequest();

            xhttp.onload = function() {
                let text = this.responseText
                text = text.split("\n")
                if(text[1] == "deslogado"){
                    window.location.href = "http://"+$href_B+"/relatorios/login.php";
                }
            }

            xhttp.open("GET",  $href_A+"data/scripts.php?sair", true);
            xhttp.send();
        }
    });
}


// REQUISIÇÕES FIELDS CONTA

let conta_request = function($coord){
    document.addEventListener("DOMContentLoaded", ()=>{
        let $url = window.location.href.split("/")
        for(let itens of $url){
            if(itens == $coord){
                const xhttp = new XMLHttpRequest();

                xhttp.onload = function() {
                    let item = new Array();
                    let list = this.responseText
                    list = list.split("//")

                    // ORGANIZANDO OS CAMPOS
                    item['nome'] = list[1]; 
                    item['email'] = list[2];
                    item['empresa'] = list[3];
                    item['senha'] = list[4];
                    item['usuario'] = list[5];

                    document.querySelector("[data-nome]").innerText = item['nome'];
                    document.querySelector("[name='nome']").dataset.value = item['nome'];

                    document.querySelector("[data-email]").innerText = item['email'];
                    document.querySelector("[name='email']").dataset.value = item['email'];

                    document.querySelector("[data-empresa]").innerText = item['empresa'];
                    document.querySelector("[name='empresa']").dataset.value = item['empresa'];
                    
                    document.querySelector("[data-senha").innerText = item['senha'];
                    document.querySelector("[name='senha']").dataset.value = item['senha'];

                    document.querySelector("[data-usuario]").innerText = item['usuario'];
                    document.querySelector("[name='usuario']").dataset.value = item['usuario'];
                }

                xhttp.open("GET",  $href_A+"data/scripts.php?conta=info", true);
                xhttp.send();
            }
        }
    })
}

let conta_att = function($coord){
    let $url = window.location.href.split("/")
    for(let itens of $url){
        if(itens == $coord){
            let field_value = new Array();
            let fields = document.querySelectorAll("[name]")


            for(let field of fields){
                if(field.value){
                    field_value[field.name] = field.value
                }else{
                    field_value[field.name] = field.dataset.value
                }
            }
           
            // CRIANDO AS DECLARAÇÕES DO CAMPO GET
            let dcl = "nome="+field_value['nome']+"&email="+field_value['email']+"&empresa="+field_value['empresa']+"&usuario="+field_value['usuario']+"&senha="+field_value['senha']+"&id="+document.querySelector("[name='usuario']").dataset.value

            const xhttp = new XMLHttpRequest();

            xhttp.onload = function() {
                window.location.reload();
                //console.log(this.responseText)
            }
            xhttp.open("GET",  $href_A+"data/scripts.php?atualizar=info&"+dcl, true);
            xhttp.send();
        }
    }
    
}


// CADASTRO DOS RELATÓRIOS 
let save_form = function($coord, $fields){
    document.querySelector($coord).onsubmit = function(e){
        e.preventDefault();
        var sintomas = "";

        //Capturando os campos
        $sintomas = this.querySelectorAll('input')

        for(let itens of $sintomas){
           if(itens.checked){
                sintomas += itens.name+"="+itens.value+"::";
           }
        }

        // CRIANDO AS DECLARAÇÕES DO CAMPO GET
        let dcl = "nome="+$fields['nome']+"&cpf="+$fields['cpf']+"&empresa="+$fields['empresa']+"&sintomas="+sintomas

        const xhttp = new XMLHttpRequest();

        xhttp.onload = function() {
            let respost = this.responseText
            respost = respost.split('\n')
            if(respost[1] == "1"){
                alert("RELATÓRIO ENVIADO COM SUCESSO!");
                setTimeout(()=>{
                    window.location.href = $href_A;
                }, 100);
            }
        }

        xhttp.open("GET",  $href_A+"data/scripts.php?cadastro&"+dcl);
        xhttp.send();
        
    }
}

//RECUPERANDO OS DADOS GERAIS
let recover_form = function($coord){
    document.addEventListener("DOMContentLoaded", ()=>{
        let $url = window.location.href.split("/")
        for(let itens of $url){
            if(itens == $coord){
                const xhttp = new XMLHttpRequest();

                xhttp.onload = function() {
                    document.querySelector(".js-table-dates").innerHTML = this.responseText;
                }

                xhttp.open("GET",  $href_A+"data/scripts.php?campos", true);
                xhttp.send();
            }
        }
    })
}

//==============================//=================================//
//==============================//=================================//

// CALL FUNCTIONS:
if(document.querySelector("[data-logout]")){
    logout("[data-logout]");
}

// SALVANDO ALTERAÇÕES NA ÁREA DO USUÁRIO
if(document.querySelector("[value='Salvar alterações']")){
    conta_request("conta.php"); // solicitar informações

    document.querySelector("[value='Salvar alterações']").onclick = ()=>{
        conta_att("conta.php");
    }
}


// SAVALVANDO INFORMAÇÕES DO FORM
if(document.querySelector("[name='pesquisa']")){
    let fields = new Array();
    let $url = window.location.href.split("?");

    let input = $url[1].split("&")

    for(let itens of input){
        itens = itens.split("=")
        fields[itens[0]] = itens[1].replaceAll("+", " ");
    }
    
    save_form(".send-pesquisa", fields)
    
}

recover_form("admin.php")