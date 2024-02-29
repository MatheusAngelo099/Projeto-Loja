<?php

include ("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM produtos WHERE id_produtos =  $id"; 

$result = mysqli_query($con, $sql); 

if($result) {
    header ("Location: home.php");
} else {
    echo "<br><br>" . "erro ao excluir";
}

?>