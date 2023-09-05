<?php 
include "conexao.php";

$remetente = $_GET['remetente'];
$cod = $_GET['cod'];
$hped = $_GET['hped'];
$dtentrega = $_GET['dtentrega'];
$destin = $_GET['destin'];
$status = $_GET['statusentrega'];

$sql = "insert into tblentrega (remetente, cod, hped, dtentrega, destin, statusentrega)
value ('$remetente', '$cod', '$hped', '$dtentrega', '$destin', '$status')";

$qry = mysqli_query ($mysqli, $sql);

if ($qry){
    header ('location:listarentrega.php');
} else {
    echo "<h1> Registro não cadastrado </h1>";
}