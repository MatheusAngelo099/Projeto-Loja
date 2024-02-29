<?php

include("conexao.php");

$nome = $_POST["nome"];
$data_nasc = $_POST["data_nasc"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$cep = $_POST["cep"];

if(isset($nome) && isset($data_nasc) && isset($email) && isset($telefone)
&& isset($cpf) && isset($rg) && isset($cep)) {

$sql = "INSERT into clientes(nome, data_nasc, email, telefone, cpf,
rg, cep) VALUES('$nome','$data_nasc','$email','$telefone','$cpf',
'$rg','$cep')";

$result = mysqli_query($con, $sql);

if($result) {
    header ("Location: homecli.php");
} else {
    header ("Location: formulariocliente.html");
}

} else {
    echo "Campos não preenchidos. ";
}

?>