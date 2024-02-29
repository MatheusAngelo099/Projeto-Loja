<?php 
 include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cep = $_POST['cep'];




$sql = "UPDATE clientes SET nome = '$nome', data_nasc = '$data_nasc', 
email = '$email', cpf = '$cpf', rg = '$rg', cep = '$cep' WHERE id_cliente=  $id"; 

$result = mysqli_query($con, $sql); 

if($result) {
    header ("Location: homecli.php");
} else {
    echo "erro na atualização dos clientes";
}

?>