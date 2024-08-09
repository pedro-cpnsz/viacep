<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIA CEP</title>    
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js"></script>
</head>
<body>

    <div class="container">
    
        <h1>Atividade Via CEP</h1>
        <p>Consulta de CEP usando a API <a target="_blank" href="https://viacep.com.br/">https://viacep.com.br/</a></p>

        <form>

            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" placeholder="CEP" onblur="buscaCep()">
            <br>
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" id="logradouro" placeholder="Logradouro">        
            <br>
            <div class="numero">            
                <label for="numero">Número</label>
                <input type="text" name="numero" id="numero" placeholder="Número">
            </div>            
            <div class="complemento">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento" placeholder="Complemento">
            </div>
            
            <div class="bairro">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" placeholder="Bairro">
            </div>
            <div class="uf">
                <label for="UF">UF</label>
                <input type="text" name="uf" id="uf" placeholder="UF">
            </div>
            <div class="localidade">
                <label for="localidade">Localidade</label>
                <input type="text" name="localidade" id="localidade" placeholder="localidade">
            </div>
            
            
            <div class="ibge">
                <label for="ibge">IBGE</label>
                <input type="text" name="ibge" id="ibge" placeholder="IBGE">
            </div>            
            <div class="ddd">
                <label for="ddd">DDD</label>
                <input type="text" name="ddd" id="ddd" placeholder="DDD">        
            </div>

        </form>

    </div>

</body>
</html>