<?php

include("conexao.php");

$sql = "SELECT * FROM clientes";
$result = mysqli_query($con,$sql);

$busca = $_POST["busca"];

$sql1 = "SELECT * FROM clientes WHERE nome LIKE '%$busca%' OR cpf LIKE '%$busca%'";
$result2 = mysqli_query($con,$sql1);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca</title>
</head>
<body>
<table border="1">
    <thead> 
        <tr> 
            <th> ID do Cliente </th>
            <th> Nome do Cliente</th>
            <th>Data de Nascimento</th>
            <th> Email do Cliente</th>
            <th> Telefone do Cliente</th>
            <th> CPF do Cliente</th>
            <th> RG do Cliente</th>
            <th> CEP do Cliente</th>

        </tr>
    </thead>
    <tbody>
        <?php 
            while ($linha = mysqli_fetch_array($result2)) {
                echo "
                <tr>
                    <td> " . $linha['id_cliente'] . " </td>
                    <td> " . $linha['nome'] . " </td>
                    <td> " . $linha['data_nasc'] . " </td>
                    <td> " . $linha['email'] . " </td>
                    <td> " . $linha['telefone'] . " </td>
                    <td> " . $linha['cpf'] . " </td>
                    <td> " . $linha['rg'] . " </td>
                    <td> " . $linha['cep'] . " </td>
    

                </tr> ";
}
        ?>
</tbody> 
</table>
</body>
</html>