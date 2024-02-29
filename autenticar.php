<?php

include("conexao.php");

$nomeuser = $_POST["nomeuser"];
$senha = $_POST["senha"];

$senha_cripto = md5($senha);

$sql = " SELECT * FROM funcionarios WHERE nomeuser = '$nomeuser' AND senha = '$senha_cripto'";

$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) {
   $linha = mysqli_fetch_assoc($result);
   // print_r($linha);
if($nomeuser == $linha["nomeuser"] && $senha_cripto == $linha["senha"]) {
    header("Location: home.php");
}
} else{

    echo "Usuário não encontrado";
}



?>