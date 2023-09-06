<?php
include "conexao.php";
//$qry = mysqli_query ($con, $sql);

$pesquisa = $mysqli->real_escape_string($_GET['busca']); // O real_escape_string impede que injetem no seu DB pelo URL (SQL Injection)
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lista de Entregas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <h1> Lista de Entregas </h1>
    <a href="index.php"> Voltar ao Menu </a>
    <hr>

    <div class="container">
        <form action="">
            <input name="busca" value="<?php if (isset($_GET['busca'])) echo $_GET['busca'] ?>" placeholder="Digite os termos de pesquisa" type="text">
            <button type="submit"> Pesquisar</button>
        </form>
        <table>
            <tr>
                <th> ID </th>
                <th> Remetente </th>
                <th> Código de Entrega </th>
                <th> Hora do Pedido </th>
                <th> Previsão de Entrega </th>
                <th> Destinatário </th>
                <th> Status </th>
                <th colspan=2> Ações </th>
            </tr>

            <?php
            if (!isset($_GET['busca'])) {
            ?>
                <tr>
                    <td colspan=3> Digite algo para Pesquisar... </td>
                </tr>
                <?php
            } else {
                $pesquisa = $mysqli->real_escape_string($_GET['busca']); // O real_escape_string impede que injetem no seu DB pelo URL (SQL Injection)
                $sql_code = "SELECT * FROM tblentrega WHERE remetente LIKE '%$pesquisa%' 
                    OR cod LIKE '%$pesquisa%' 
                    OR destin LIKE '%$pesquisa%' ";

                $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar!" . $mysqli->error);

                if ($sql_query->num_rows == 0) {
                ?>
                    <tr>
                        <td colspan=3> Nenhum resultado encontrado ... </td>
                    </tr>
                    <?php
                } else {
                    while ($dados = $sql_query->fetch_assoc()) {
                        $id = $dados['id'];
                    ?>
                        <tr>
                            <td> <?php echo $dados['id']; ?> </td>
                            <td> <?php echo $dados['remetente']; ?> </td>
                            <td> <?php echo $dados['cod']; ?> </td>
                            <td> <?php echo $dados['hped']; ?> </td>
                            <td> <?php echo $dados['dtentrega']; ?> </td>
                            <td> <?php echo $dados['destin']; ?> </td>
                            <td> <?php echo $dados['statusentrega']; ?> </td>
                            <td><a href="frmeditentrega.php?id=" {$id}><i class='bi bi-pencil-square'></i>Editar</a></td>
                                <td><a href="excluirentrega.php?id=" {$id}><i class='bi bi-trash'></i>Excluir</a></td>
                        </tr>
                <?php
                    }
                }
                ?>

            <?php
            }

            ?>



        </table>

        <form action="frmcadentrega.php">
            <div class="row">
                <div class="col">
                    <div class="mt-3">
                        <input type='submit' value="cadastrar" href="frmcadentrega.php" class="btn btn-info">
                    </div>
                </div>
            </div>
        </form>

    </div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
