function buscaCep(){
    //https://viacep.com.br/ws/85807594/json/
    var url = 'https://viacep.com.br/ws';
    var cepPadrao = '85807594';

    //var cepInput = document.getElementById("cep");
    var cepInput = document.querySelector("#cep");
    if(cepInput.value != ''){
        cepPadrao = cepInput.value;
    }
    //https://viacep.com.br/ws/85807594/json/
    fetch(`${url}/${cepPadrao}/json/`)
     .then((response) => response.json())
     .then((data) => {
        document.querySelector("#cep").value = data.cep;
        document.querySelector("#logradouro").value = data.logradouro;
        document.querySelector("#bairro").value = data.bairro;
        document.querySelector("#localidade").value = data.localidade;
        document.querySelector("#uf").value = data.uf;
        document.querySelector("#ibge").value = data.ibge;
        document.querySelector("#ddd").value = data.ddd;
        
        //foco no número
        document.querySelector("#numero").focus();
        
     })
     .catch((error) => {alert('houve um erro na requisição')});
}