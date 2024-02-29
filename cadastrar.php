<?php

include ("conexao.php");

$nome = $_POST["nome"];
$nomeuser = $_POST["nomeuser"];
$senha = $_POST["senha"];

if(isset($nome) && isset($nomeuser) && isset($senha)) {

$senha_cripto = md5($senha);

echo "<br><br>" . $senha_cripto;

$sql = "INSERT INTO funcionarios(nome, nomeuser, senha) VALUES('$nome','$nomeuser','$senha_cripto')";

$result = mysqli_query($con,$sql);

if ($result) {
    header ("Location: formulariologin.php");
} else {
    header ("Location: formulariocadastro.html");
}

} else {
    echo "Campos nao preenchidos. ";
}
?>