<?php 
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar Cliente </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1> Cadastrar Cliente </h1>
    <a href="index.php"> Voltar ao Menu </a>
    <hr>

    <div class="container">
        <form action="gravarcadcliente.php">
            <div class="row">
                <div class="col-6">
                    <div class="mt-3">
                        Cliente 
                        <input type="text" name="cliente">
                    </div>
                </div>

                <div class="col-3">
                    <div class="mt-3">
                        CPF  
                        <input type="text" name="cpf">
                    </div>
                </div>

                <div class="col-3">
                    <div class="mt-3">
                        Data de Cadastro  
                        <input type="date" name="dtcad">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <div class="mt-3">
                        Endereço 
                        <input type="text" name="endereco">
                    </div>
                </div>

                <div class="col">
                    <div class="mt-3">
                        CEP 
                        <input type="text" name="cep">
                    </div>
                </div>

                <div class="col">
                    <div class="mt-3">
                        Cidade 
                        <input type="text" name="cidade">
                    </div>
                </div>

                <div class="col">
                    <div class="mt-3">
                        Telefone  
                        <input type="text" name="fone">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <div class="mt-3">
                        <input type='submit' value="cadastrar" class= "btn btn-info">
                    </div>
                </div>
            </div>

        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>