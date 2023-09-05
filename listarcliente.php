<?php 
include "conexao.php";
$sql = "select * from tblcliente";
$qry = mysqli_query ($mysqli,$sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lista de Clientes </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1> Lista de Clientes </h1>
    <a href="index.php"> Voltar ao Menu </a>
    <hr>

    <div class ="container">
            <table class="table">
                <tr>
                    <td> ID </td>
                    <td> Cliente </td>
                    <td> CPF </td>
                    <td> Data de Cadastro </td>
                    <td> Endereço </td>
                    <td> CEP </td>
                    <td> Cidade </td>
                    <td> Telefone </td>
                    <td colspan=2> Ações </td>
                </tr>

                <?php 
                    echo "<tr>";
                while ($linha = mysqli_fetch_array($qry)){
                    $id = $linha['id'];
                    echo "<td>".$linha['id']."</td>";
                    echo "<td>".$linha['cliente']."</td>";
                    echo "<td>".$linha['cpf']."</td>";
                    echo "<td>".$linha['dtcad']."</td>";
                    echo "<td>".$linha['endereco']."</td>";
                    echo "<td>".$linha['cep']."</td>";
                    echo "<td>".$linha['cidade']."</td>";
                    echo "<td>".$linha['fone']."</td>";
                    echo "<td><a href='frmeditarcliente.php?id={$id}'><i class = 'bi bi-pencil-square'></i>Editar</a></td>";
                    echo "<td><a href='excluircliente.php?id={$id}'><i class='bi bi-trash'></i>Excluir</a><td>";
                    echo "<tr>";
                }
                ?>

            </table>

            <form action="frmcadcliente.php">
                        <div class="row">
                    <div class="col">
                        <div class="mt-3">
                            <input type='submit' value="cadastrar" href="frmcadcliente.php" class= "btn btn-info">
                        </div>
                    </div>
                </div>
            </form>
            </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>