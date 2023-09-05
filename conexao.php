<?php
$host = 'localhost';
$user  = 'root';
$pass = '';
$db = 'bdentrega';

//$con = mysqli_connect($servidor, $usuario, $senha, $bd);

$mysqli = new mysqli($host, $user, $pass, $db);
if($mysqli->connect_errno) {
    die ("Falha na conexão com o banco de dados");
}