<?php 
include "conexao.php";

$cliente = $_GET['cliente'];
$cpf = $_GET['cpf'];
$dtcad = $_GET['dtcad'];
$endereco = $_GET['endereco'];
$cep = $_GET['cep'];
$cidade = $_GET['cidade'];
$fone = $_GET['fone'];

$sql = "insert into tblcliente (cliente, cpf, dtcad, endereco, cep, cidade, fone)
value ('$cliente', '$cpf', '$dtcad', '$endereco', '$cep', '$cidade', '$fone')";

$qry = mysqli_query ($mysqli, $sql);

if ($qry){
    header ('location:listarcliente.php');
} else {
    echo "<h1> Registro não cadastrado </h1>";
}
