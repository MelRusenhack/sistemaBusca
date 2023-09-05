<?php

include "conexao.php";
$id = $_GET['id'];
$sql = "delete from tblentrega where id=".$id;

mysqli_query($mysqli,$sql);
header ('Location:listarentrega.php');