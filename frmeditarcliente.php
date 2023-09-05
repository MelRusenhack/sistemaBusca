<?php

include "conexao.php";

$id = $_GET['id'];
//$sql = "select * from tblproduto where id=".$id;
$sql = "select * from tblcliente where id={$id}";
$qry = mysqli_query($mysqli, $sql);
$linha = mysqli_fetch_array($qry);
echo $linha ['cliente'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "editarcliente.php">
        <input type = "hidden" name = "id" value = "<?php echo $linha['id']; ?>">
        Cliente <input type = "text" name = "cliente" value="<?php echo $linha['cliente']; ?>"> <br>
        CPF <input type= "text" name= "cpf" value="<?php echo $linha['cpf'] ?>"><br>
        Endereço <input type= "text" name= "endereco" value="<?php echo $linha['endereco'] ?>"><br>
        CEP <input type= "text" name= "cep" value="<?php echo $linha['cep'] ?>"><br>
        Cidade <input type= "text" name= "cidade" value="<?php echo $linha['cidade'] ?>"><br>
        Telefone <input type= "text" name= "fone" value="<?php echo $linha['fone'] ?>"><br>
    </form>
    
</body>
</html>