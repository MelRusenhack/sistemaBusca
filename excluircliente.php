<?php

include "conexao.php";
$id = $_GET['id'];
$sql = "delete from tblcliente where id=".$id;

mysqli_query($mysqli,$sql);
header ('Location:listarcliente.php');