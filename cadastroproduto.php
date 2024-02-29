<?php

include("conexao.php");

$nomeprod = $_POST["nomeprod"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$validade = $_POST["validade"];

echo "<br>" . $nomeprod. "<br>"  . $preco . "<br>" . $quantidade . "<br>" . $validade;  
 
if(isset($nomeprod) && isset($preco) && isset($quantidade) && isset($validade)) {

$sql = "INSERT INTO produtos(nomeprod, preco, quantidade, validade) VALUES
('$nomeprod', '$preco','$quantidade','$validade')";

$result = mysqli_query($con,$sql);

if($result) {
    header ("Location: home.php"); 
} else {
    header ("Location: cadastroproduto.html");
}

} else {
    echo "Campos nao preenchidos";
}
?>