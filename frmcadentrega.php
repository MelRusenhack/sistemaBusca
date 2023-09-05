<?php 
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar Entrega </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1> Cadastrar Entrega </h1>
    <a href="index.php"> Voltar ao Menu </a>
    <hr>

    <div class="container">
        <form action="gravarcadentrega.php">
            <div class="row">
                <div class="col">
                    <div class="mt-3">
                        Remetente 
                        <input type="text" name="remetente">
                    </div>
                </div>

                <div class="col">
                    <div class="mt-3">
                        Código  
                        <input type="text" name="cod">
                    </div>
                </div>

                <div class="col">
                    <div class="mt-3">
                        Hora do Pedido  
                        <input type="time" name="hped">
                    </div>
                </div>

                <div class="col">
                    <div class="mt-3">
                        Data Prevista de Entrega 
                        <input type="date" name="dtentrega">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <div class="mt-3">
                        Destinatário 
                        <input type="text" name="destin">
                    </div>
                </div>

                <div class="col">
                    <div class="mt-3">
                        Status 
                        <input type="text" name="statusentrega">
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