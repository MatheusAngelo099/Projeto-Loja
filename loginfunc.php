<?php

$nome = $_POST['nome'];
$nomeuser = $_POST['nomeuser'];
$senha = $_POST['senha'];

$senha_cripto = md5($senha);

$sql = " SELECT * FROM funcionarios WHERE nomeuser = '$nomeuser' AND senha = '$senha_cripto'";
$result = mysqli_query($con,$sql);


if(isset($nome) && isset($nomeuser) && isset($senha)) {
    
    
} else {
    echo "Campos nao preenchidos";
}

?>