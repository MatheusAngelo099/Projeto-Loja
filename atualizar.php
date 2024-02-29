<?php 
 include("conexao.php");

$id = $_POST['id'];
$nomeprod = $_POST['nomeprod'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];



$sql = "UPDATE produtos SET nomeprod = '$nomeprod', preco = '$preco', 
quantidade = '$quantidade', validade = '$validade' WHERE id_produtos=  $id"; 

$result = mysqli_query($con, $sql); 

if($result) {
    header ("Location: home.php");
} else {
    echo "erro na atualização";
}

?>