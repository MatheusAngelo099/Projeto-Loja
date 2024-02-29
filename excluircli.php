<?php

include ("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id_cliente =  $id"; 

$result = mysqli_query($con, $sql); 

if($result) {
    header ("Location: homecli.php");
} else {
    echo "<br><br>" . "erro ao excluir o cadastro do cliente";
}

?>