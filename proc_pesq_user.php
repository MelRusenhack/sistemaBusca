<?php 
include "conexao.php";

//Receber a requisição da pesquisa
$requestData= $_REQUEST;

//Indice da coluna na tabela visualizar resultado => nome da coluna no bando de dados
$columns = array(
    array( '0' => 'remetente' ),
    array( '1' => 'cod' ),
    array( '2' => 'destin' ),
);

//Obtendo registros de número total sem qualquer pesquisa no BD
$result_user = "SELECT remetente, cod, destin FROM tblentrega";
$resultado_user = mysqli_query ($con $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT remetente, cod, destin FROM tblentrega WHERE 1=1";

$resultado_usuarios = mysqli_query($con, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);

//Ordenar o resultado 
$result_usuarios.=" ORDER BY ". $columns[requestData['order'][0]['column']]." ".$requestData['order']
[0]['dir']." LIMIT ".$requestData['start'].",".$requestData['lenght']."  ";
$resultado_usuario=mysqli_query($con, $result_usuarios);
 

?>