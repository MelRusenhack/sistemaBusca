<?php 

include "conexao.php";
$id = $_GET['id'];
$cliente = $_GET['cliente'];
$cpf = $_GET['cpf'];
$endereco = $_GET['endereco'];
$cep = $_GET['cep'];
$cidade = $_GET['cidade'];
$fone = $_GET['fone']; 

echo "{$id} - {$cliente} - {$cpf} - {$endereco} - {$cep} - {$cidade} - {$fone}";

$sql = "update tblcliente set cliente='$cliente',
cpf='$cpf', endereco='$endereco', cep='$cep', cidade='$cidade', fone='$fone'";

mysqli_query($mysqli,$sql);
header('location:listarproduto.php');